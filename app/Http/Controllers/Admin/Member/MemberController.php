<?php

namespace App\Http\Controllers\Admin\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入DB类
use DB;
//导入Hash类
use Hash;
//导入校验类
use App\Http\Requests\AdminMemberadd;
use App\Http\Requests\AdminPedit;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取搜索关键词
        $k=$request->input('keywords');
        //获取所有数据
        $data=DB::table('member')->where('username','like','%'.$k.'%')->paginate(5);
        //修改用户状态和用户性别以文字显示
        $arr=array('已启用','已禁用');
        $arr1=array('男','女','保密');
        foreach($data as $key=>$val){
            $val->status=$arr[$val->status];
            $val->sex=$arr1[$val->sex];
        }
        // dd($data);exit;
        //获取数据总条数
        $total=DB::table('member')->count();
        //导入会员(前台用户)列表
        return view('Admin.Member.index',['data'=>$data,'total'=>$total,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取地址
        $data=DB::table('address')->where('upid','=',0)->get();
        // var_dump($res);exit;
        //添加模板
        return view('Admin.Member.add',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminMemberadd $request)
    {
        //执行添加
        // dd($request->all());exit;
        $address=$request->input('address');
        $res=DB::table('address')->where('id','=',$address)->first();
        $addressname=$res->name;
        // var_dump($addressname);exit;
        $username=$request->username;
        // 判断
        if($username==null){
            //阻止表单提交 将所有的参数写入到闪存中
            return back()->withInput();
        }
        //去除掉_token字段
        $data=$request->except('_token');
        $data['address']=$addressname;
        //加密密码
        $data['password']=Hash::make($data['password']);
        //格式化时间
        $addtime=date('Y-m-d H:i:s',time());
        $data['addtime']=$addtime;
        // var_dump($data);exit;
        //写入数据库
        if(DB::table('member')->insert($data)){
            //添加成功
            return redirect('/adminmember')->with('success','添加成功');
        }else{
            //添加失败
            return redirect('/adminmember')->with('error','添加失败');
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
        // echo $id;exit;
        //获取地址
        $address=DB::table('address')->where('upid','=',0)->get();
        //通过id获取数据
        $data=DB::table('member')->where('id','=',$id)->first();
        // var_dump($data);
        $addressname=$data->address;
        $res=DB::table('address')->where('name','=',$addressname)->first();
        //修改密码
        return view('Admin.Member.edit',['address'=>$address,'data'=>$data,'res'=>$res,'id'=>$id]);
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
        // echo $id;
        // var_dump($request->all());exit;
        //获取到地址id
        $address=$request->address;
        //通过地址id查询到地址名字
        $res=DB::table('address')->where('id','=',$address)->first();
        // echo $res->name;
        //把_token和_method字段去掉
        $data=$request->except('_token','_method');
        $data['address']=$res->name;
        // var_dump($data);exit;
        //更新数据库信息
        if(DB::table('member')->where('id','=',$id)->update($data)){
            return redirect('/adminmember')->with('success','修改成功');
        }else{
            return redirect('/Adminmember')->with('error','修改失败');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       // echo $id;
        if(DB::table('member')->where('id','=',$id)->delete()){
            return redirect('/adminmember')->with('success','删除成功');
        }else{
            return redirect('/adminmember')->with('error','删除失败');
        }
    }  

    //Ajax删除
    public function del($id){
        // echo $id;
        // $id=$request->input('id');
        // echo $id;exit;
        //通过id查询数据
        $res=DB::table('member')->where('id','=',$id)->first();
        // var_dump($res);exit;
        //获取到每一个字段的信息
        $id=$res->id;
        $username=$res->username;
        $phone=$res->phone;
        $sex=$res->sex;
        $address=$res->address;
        $email=$res->email;
        $password=$res->password;
        $status=$res->status;
        $addtime=$res->addtime;
        //把字段信息存到数组中
        $data=array();
        $data['id']=$id;
        $data['username']=$username;
        $data['phone']=$phone;
        $data['sex']=$sex;
        $data['address']=$address;
        $data['email']=$email;
        $data['password']=$password;
        $data['status']=$status;
        $data['addtime']=$addtime;
        // var_dump($data);exit;
        //把查询到的数据添加到删除的用户表中
        DB::table('del_member')->insert($data);
        //删除数据
        if(DB::table('member')->where('id','=',$id)->delete()){
            return redirect('/adminmember')->with('success','删除成功');
        }else{
            return redirect('/adminmember')->with('errror','删除失败');
        }
    }

    //密码修改
    public function p($id){
        // echo $id;
        //获取数据
        $data=DB::table('member')->where('id','=',$id)->first();
        //引入修改密码
        return view('Admin.Member.pedit',['data'=>$data]);
    }

    //密码修改获取表单的内容
    public function pupdate(AdminPedit $request,$id){
        // echo $id;
        //获取全部参数
        // var_dump($request->all());
        //存入闪存
        $request->flash();
        //去掉重复密码
        $request->except('repassword');
        //Hash加密密码
        $password=Hash::make($request->input('password'));
        //更新数据库
        if(DB::table('member')->where('id','=',$id)->update(['password'=>$password])){
            return redirect('/adminmember')->with('success','密码修改成功');
        }else{
            return redirect('/adminmember')->with('error','密码修改失败');
        }
    }

    //状态显示
    public function display(Request $request){
        $id = $request->input('id');
        // echo $id;exit;
        $res=DB::table('member')->where('id','=',$id)->first();
        // var_dump($res);exit;
        $status = $res->status;
        //判断状态并修改
        if ($status==0) {
            $status=1;
        }else{
            $status=0;
        }
        // echo $status;exit;
        //更新数据
        $res=DB::table('member')->where('id','=',$id)->update(['status'=>$status]);
        $result=DB::table('member')->where('id','=',$id)->first();
        return $result->status;
    }
}
