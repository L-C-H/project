<?php

namespace App\Http\Controllers\Admin\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
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
        //获取所有数据
        $data=DB::table('member')->where('username','like','%'.$kw.'%')->paginate(5);
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
        //添加模板
        return view('Admin.Member.add');
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
        //修改密码
        return view('Admin.Member.edit');
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
    public function p(){
        //引入修改密码
        return view('Admin.Member.pedit');
    }
    //密码修改获取表单的内容
    public function pupdate($id){
        echo '获取修改数据';
    }
}
