<?php

namespace App\Http\Controllers\Admin\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入DB类
use DB;
//导入Hash类
use Hash;
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
    public function store(Request $request)
    {
        //执行添加
        //去除掉_token字段
        $data=$request->except('_token');
        //加密密码
        $data['password']=Hash::make($data['password']);
        //格式化时间
        $addtime=date('Y-m-d H:i:s',time());
        $data['addtime']=$addtime;
        // var_dump($data);
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
       // echo $id;
        if(DB::table('member')->where('id','=',$id)->delete()){
            return redirect('/adminmember')->with('success','删除成功');
        }else{
            return redirect('/adminmember')->with('error','删除失败');
        }
    }

    public function del(Request $request){
        // var_dump($request);
        $id=$request->input('id');
        // echo $id;
        $res=DB::table('member')->where('id','=',$id)->delete();
        return $res?'1':'0';
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
