<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入第三方类
use Gregwar\Captcha\CaptchaBuilder;
use DB;
use Hash;
//导入Mail类
use Mail;
use Ucpaas;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载注册页面
        return view('Home.Register.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //发送纯文本 视图和数据 $email 接收方 $id注册用户id $token 校验参数
    public function sendMail($email,$id){
        // echo 1;exit;
        //在闭包函数内部使用闭包函数外部的变量 必须use导入 a是模板
        Mail::send('Home.Register.jihuo',['id'=>$id],function($message)use($email){
            ///发送主题/接收方
            $message->subject('用户激活');
            $message->to($email);
            
            
        });
        
    }
    public function store(Request $request)
    {
        // var_dump($request);exit;
        //获取输入的校验码
        $code = $request->input('code');
        //获取系统的校验码
        $vcode = session('vcode');
        // echo $vcode.":".$code;exit;
        if ($code==$vcode) {
             $data = $request->except('option','code','phonecode','repassword','_token','rules');
             // var_dump($data);exit;
            $data['password']=Hash::make($data['password']);
            $data['status'] = 0;//0代表没有激活
            if ($data['email']!=null) {
                //邮箱注册
                 $data['username']=$request->email;
                $id = DB::table('member')->insertGetId($data);
                if ($id) {
                    //邮件激活用户 把状态值由0变2
                    $res = $this->sendMail($data['email'],$id);
                    // var_dump($res);
                    if($res==null){
                        return redirect('/zc');
                    }
                    
                }
            }else{
                //手机注册
                $data['username']=$request->phone;
                $data['status']=2;
                if (DB::table('member')->insert($data)) {
                    echo "<script>alert('注册成功')</script>";
                   return redirect('/Homelogin/create');
                }else{
                   echo "<script>alert('注册失败')</script>";
                    return redirect('/Homeregister/create');
                }
            }
        }else{
            return back()->with('error','校验码不一致');
        }

       

    }
    //邮箱
    public function checkemail(Request $request){
        $m = $request->input('m');
        // echo $p;
        //获取member 数据表 phone 一列数据
        $email = DB::table('member')->pluck('email');
        $arr = array();
        //获取的对象集合转为数组
        foreach($email as $key=>$v){
            $arr[$key] = $v;
        }
        // echo json_encode($arr);
        //对比
        if (in_array($m, $arr)) {
            echo 1;//邮箱已经注册
        }else{
            echo 0;//邮箱可以注册
        }
    }
    //手机号
    public function checkphone(Request $request){
        $p = $request->input('p');
        // echo $p;
        //获取member 数据表 phone 一列数据
        $phone = DB::table('member')->pluck('phone');
        $arr = array();
        //获取的对象集合转为数组
        foreach($phone as $key=>$v){
            $arr[$key] = $v;
        }
        // echo json_encode($arr);
        //对比
        if (in_array($p, $arr)) {
            echo 1;//手机号已经注册
        }else{
            echo 0;//手机号可以注册
        }
    }
    //获取手机验证码
    public function send(Request $request){
        $pp = $request->input('pp');
        $this->sendsphone($pp);
    }
    //匹配手机验证码
    public function pcode(Request $request){
        $pcode = $request->input('pcode');
        // echo $pcode;exit;
        if (isset($_COOKIE['fcode']) && !empty($pcode)) {
           $fcode = $request->Cookie('fcode');
           if ($fcode==$pcode) {
               echo 1;//检验码一致
           }else{
                echo 2;//校验码不一致
           }
        }elseif (empty($pcode)) {
           echo 3;//输入校验码为空
        }else{
            echo 4;//校验码过期
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // 激活的方法
    public function jihuo(Request $request){
        //获取id和token
        $id = $request->input('id');
        //把status 值由0变2
        $data['status'] = 2;
        DB::table('member')->where('id','=',$id)->update($data);
        return view('Home.Login.login');
        
    }
    //验证码
    public function code(){
       // 生成校验码代码
        ob_clean();//清除操作
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 110, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        session(['vcode'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }
    // //发送短信校验码(调用短信接口)
        public function sendsphone($p){
            // echo "this is send phone";exit;
            //初始化必填
            //填写在开发者控制台首页上的Account Sid
            $options['accountsid']='4280e7a6dcf5e66885c93e0f6f85d220';
            //填写在开发者控制台首页上的Auth Token
            $options['token']='f762be519e4ba2e63e1cf70f39dcb6b6';

            //初始化 $options必填
            $ucpass = new Ucpaas($options);
            $appid = "a0029c03de064842ae8ae14666b81731";    //应用的ID，可在开发者控制台内的短信产品下查看
            $templateid = "399461";    //可在后台短信产品→选择接入的应用→短信模板-模板ID，查看该模板ID
            $param = rand(1,10000); //多个参数使用英文逗号隔开（如：param=“a,b,c”），如为参数则留空
            \Cookie::queue('fcode',$param,1);
            $mobile = $p;
            $uid = "";

            //70字内（含70字）计一条，超过70字，按67字/条计费，超过长度短信平台将会自动分割为多条发送。分割后的多条短信将按照具体占用条数计费。

            echo $ucpass->SendSms($appid,$templateid,$param,$mobile,$uid);
        }


}
