<?php

namespace App\Http\Controllers\Admin\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入DB类
use DB;
class MemberdelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取搜索关键词
        $kw=$request->input('keywords');
        // var_dump($k);
        //获取数据
        $data=DB::table('del_member')->where('username','like','%'.$kw.'%')->paginate(10);
        //用户状态,性别以文字显示
        $arr=array('已删除','已还原');
        $arr1=array('男','女','保密');
        foreach($data as $key=>$val){
            $val->status=$arr[$val->status];
            $val->sex=$arr1[$val->sex];
        }
        //导入删除的会员列表
        return view('Admin.Member.member-del',['data'=>$data,'request'=>$request]);
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

    public function del(Request $request){
        //获取id
        $id=$request->input('id');
        //删除数据
        if(DB::table('del_member')->where('id','=',$id)->delete()){
            echo 1;
        }else{
            echo 0;
        }
        
    }

    public function resert($id){
        //通过id查询要还原的数据
        $res=DB::table('del_member')->where('id','=',$id)->first();
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
        //把数据添加回member表中 实现还原用户
        // $aa=DB::table('member')->insert($res);
        // var_dump($aa);
        if(DB::table('member')->insert($data)){
            //还原成功的同时把del_member表中的这条数据删除
            DB::table('del_member')->where('id','=',$id)->delete();
            return redirect('/adminmemberdels')->with('success','还原成功');
        }else{
            return redirect('/adminmemberdels')->with('error','还原失败');
        }

    }


}
