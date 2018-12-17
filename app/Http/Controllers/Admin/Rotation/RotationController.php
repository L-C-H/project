<?php

namespace App\Http\Controllers\Admin\Rotation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入DB类
use DB;
class RotationController extends Controller
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
        //查询数据库获取数据
        $data=DB::table('rotation')->where('picname','like','%'.$k.'%')->paginate(5);
        //状态用中文显示
        $arr=array('显示','不显示');
        foreach($data as $key=>$val){
            $val->status=$arr[$val->status];
        }
        //导入轮播列表页
        return view('Admin.Rotation.index',['data'=>$data,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //导入轮播添加页
        return view('Admin.Rotation.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->all());exit;
        //获取表单的内容 去掉_token
        $data = $request->except('_token');
        // var_dump($data);exit;
        $picname = $request->picname;
        $status=$request->status;
        if ($picname==null || $status==null) {
            return back()->withInput();
        }
        
        // var_dump($data);exit;
        //判断是否有文件上传
        if ($request->hasFile('pic')) {
            //初始化名字
            $picname = time()+rand(1,10000);
            //获取上传文件后缀
            $ext = $request->file('pic')->getClientOriginalExtension();
            //移动到指定的目录下
            $request->file('pic')->move('./uploads/Rotation',$picname.".".$ext);
            //获取图片的名字
            $data['pic'] = "/uploads/Rotation/".$picname.".".$ext;
            $data['status'] = 0;
            // var_dump($data);exit;
            if (DB::table('rotation')->insert($data)) {
               return redirect('/adminrotation')->with('success','添加成功');
            }else{
                return redirect('/adminrotation')->with('error','添加失败');
            }
            
        }else{
            return back()->withInput();
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
        //通过id获取查询数据库的数据
        $data=DB::table('rotation')->where('id','=',$id)->first();
        // var_dump($data);
        //导入轮播修改页
        return view('Admin.Rotation.edit',['data'=>$data]);
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
        //获取数据
        $res=$request->except('_token','_method');
        // var_dump($res);
        if(DB::table('rotation')->where('id','=',$id)->update($res)){
            return redirect('/adminrotation')->with('success','修改成功');
        }else{
            return redirect('/adminrotation')->with('error','修改失败');
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

    public function display(Request $request){
        // var_dump($request->all());
        //获取传递过来的id
        $id = $request->input('id');
        //通过id查询数据库获取数据
        $res=DB::table('rotation')->where('id','=',$id)->first();
        //获取状态字段值
        $status = $res->status;
        //判断状态并修改
        if ($status==0) {
            $status=1;
        }else{
            $status=0;
        }
        //更新数据
        $res=DB::table('rotation')->where('id','=',$id)->update(['status'=>$status]);
        $result=DB::table('rotation')->where('id','=',$id)->first();
        return $result->status;
    }

    public function del(Request $request){
        // var_dump($request->all());
        //获取传过来的id
        $id=$request->input('id');
        // echo $id;
        //通过id查询轮播图路径
        $res=DB::table('rotation')->where('id','=',$id)->first();
        $p=$res->pic;
        $pic='.'.$p;
        // echo $pic;exit;
        //通过id删除数据
        if(DB::table('rotation')->where('id','=',$id)->delete()){
            unlink($pic);
            echo 1;          
        }else{
            echo 0;
        }


    }
}
