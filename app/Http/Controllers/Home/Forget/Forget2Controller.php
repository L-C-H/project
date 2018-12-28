<?php

namespace App\Http\Controllers\Home\Forget;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
class Forget2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $data = DB::table('member')->where('id','=',$id)->first();
        // var_dump($data);exit;
        return view('Home.Login.forget2',['data'=>$data]);
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
        // var_dump($request);exit;
        $repassword=$request->repassword;
        $password = $request->password;
        if ($repassword==$password) {
             $data = $request->except('repassword','_token','_method');
            $data['password'] = Hash::make($data['password']);
            // var_dump($data);exit;
            if (DB::table('member')->where('id','=',$id)->update($data)) {
               return redirect("/forget3");
            }else{
                return redirect("/forget2/{$id}/edit");
            }
        }else{
             return back()->with('error','密码不一致');
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
        //
    }
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
            echo 1;//手机号可以登录
        }else{
            echo 0;//手机号还未注册
        }
    }
}
