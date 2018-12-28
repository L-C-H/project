<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入第三方类 redis
use Illuminate\Support\Facades\Redis;
use DB;
use Hash;
use Mail;
use Ucpaas;
class PhoneloginController extends Controller
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

        //加载手机登录页面
        return view('Home.Phonelogin.phonelogin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // var_dump($request->all());exit;
        $phone = $request->input('phone');
        //检测手机号
        $res = DB::table('member')->where('phone','=',$phone)->first();
        // dd($res);exit;
        if ($res->status==2) {
            //存储session信息
            session(['username'=>$phone]);
            // echo "<script>alert('登录成功')</script>";
            return redirect('/Home');
        }else{
            echo "<script>alert('登录失败')</script>";
            return redirect('/Homephonelogin/create');
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
            echo 0;//手机号没注册
        }else{
            echo 1;//手机号可以登录
        }
    }
    //获取手机验证码
    public function send(Request $request){
        // var_dump($request->all());exit;
        $pp = $request->input('pp');
        // echo $pp;exit;
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
    //发送短信校验码(调用短信接口)
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
