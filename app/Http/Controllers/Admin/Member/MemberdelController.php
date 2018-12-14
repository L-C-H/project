<?php

namespace App\Http\Controllers\Admin\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberdelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
}
