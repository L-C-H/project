<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入第三方类 redis
use Illuminate\Support\Facades\Redis;
use DB;
use Hash;
use Mail;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //销毁session
        $request->session()->pull('username');
        return redirect('/Home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载登录页面
        return view('Home.Login.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->session()->pull('shopcar');
        $request->flash();
        // var_dump($request);exit;
         //获取输入的校验码
        $code = $request->input('code');
        //获取系统的校验码
        $vcode = session('vcode');
        // echo $vcode.":".$code;exit;
        if ($code==$vcode) {
            $username=$request->input('username');
            $password=$request->input('password');
            //检测用户名
            $res=DB::table('member')->where('username','=',$username)->first();
            if ($res) {
                //检测密码
                if (Hash::check($password,$res->password)) {
                    //判断状态
                    if ($res->status==2) {
                        //存储session信息
                        session(['username'=>$username]);
                        return redirect("/Home");
                    }
                }else{
                    return back()->with('error','密码错误');
                }
            }
        }else{
             return back()->with('error','校验码不一致');
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

}
