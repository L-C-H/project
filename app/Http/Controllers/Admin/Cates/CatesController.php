<?php

namespace App\Http\Controllers\Admin\Cates;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 引入DB类
use DB;
//导入表单校验类
use App\Http\Requests\AdminInsert;
class CatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取总条数
        $total=DB::table('cates')->count();
        //获取搜索条件
        $k=$request->input('keywords');
        //获取类别数据
        $cate=DB::table('cates')->select(DB::raw("*,concat(path,',',id)as paths"))->orderBy('paths')->where('name','like','%'.$k.'%')->paginate(10);
        //加分隔符
        foreach($cate as $key=>$value){
            // echo $value->path."<br>";
            //把path字符串转换为数组
            $arr=explode(",",$value->path);
            // var_dump($arr);
            //获取逗号个数
            $len=count($arr)-1;
            //重复字符串函数
            $cate[$key]->name=str_repeat('--|',$len).$value->name;
        }

        //修改状态以文字显示
        $arr=array('上架','下架');
        foreach($cate as $k=>$v){
            $v->display=$arr[$v->display];
        }
        // dd($cate);
        //引入分类列表
        return view('Admin.Cates.index',['cate'=>$cate,'total'=>$total,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取所有分类信息
        $cate=DB::table("cates")->select(DB::raw("*,concat(path,',',id)as paths"))->orderBy('paths')->get();
        //加分隔符
        foreach($cate as $key=>$value){
            // echo $value->path."<br>";
            //把path字符串转换为数组
            $arr=explode(",",$value->path);
            // var_dump($arr);
            //获取逗号个数
            $len=count($arr)-1;
            //重复字符串函数
            $cate[$key]->name=str_repeat('--|',$len).$value->name;
        }
         //引入分类添加页
        return view('Admin.Cates.add',['cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //执行添加
    public function store(AdminInsert $request)
    {
        // dd($request->all());
        $data = $request->except('_token');
        // dd($data);
        $pid=$request->input('pid');
        //判断
        if($pid==0){
            //添加的是顶级分类
            //拼接path
            $data['path']='0';

        }else{
            //添加的是子类
            //凭借path 父类的path.父类的id
            //获取父类信息
            $info=DB::table('cates')->where('id','=',$pid)->first();
            $data['path']=$info->path.','.$info->id;
        }
        //写入数据库
        if(DB::table('cates')->insert($data)){
            // 跳转到列表页
            return redirect('/admincates')->with('success','添加成功');
        }else{
            //跳转到列表页
            return redirect('/admincates')->with('error','添加失败');
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
        // echo $id;
        //通过id获取数据
        $cate=DB::table('cates')->where('id','=',$id)->get();
        // var_dump($cate);exit;
        //获取所有分类
        $cates=DB::table('cates')->select(DB::raw("*,concat(path,',',id)as paths"))->orderBy('paths')->get();
        //加分隔符
        foreach($cates as $key=>$value){
            // echo $value->path."<br>";
            //把path字符串转换为数组
            $arr=explode(",",$value->path);
            // var_dump($arr);
            //获取逗号个数
            $len=count($arr)-1;
            //重复字符串函数
            $cates[$key]->name=str_repeat('--|',$len).$value->name;
        }
         //引入分类修改页
        return view('Admin.Cates.edit',['cate'=>$cate,'cates'=>$cates,'id'=>$id]);
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
        //执行添加
        // echo $id;
        // var_dump($request->all());
        //去掉_token和_method字段
        $data=$request->except('_method','_token');
        // var_dump($data);
        // 入库
        if(DB::table('cates')->where('id','=',$id)->update($data)){
            return redirect('/admincates')->with('success','修改成功');
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
        //获取当前类别下子类个数
        $res=DB::table('cates')->where('pid','=',$id)->count();
        // echo $res;
        /*//当前类别下有子类信息
        if($res>0){
            return redirect("/admincates")->with('error','请先删除子类');
        }
        //当前类别下没有子类信息
        if(DB::table('cates')->where('id','=',$id)->delete()){
            return redirect('/admincates')->with('success','删除成功');
        }*/
    }

    public function del(Request $request){
        //获取当前类别下的子类个数
        $result=DB::table('cates')->where('pid','=',$request->input('id'))->count();
        // echo $result;exit;
        if($result==0){
            $res=DB::table('cates')->where('id','=',$request->input('id'))->delete();
            return $res?'1':'0';
        }
    }

    public function display(Request $request){
        $id = $request->input('id');
        // echo $id;
        $res=DB::table('cates')->where('id','=',$id)->first();
        // var_dump($res);exit;
        $display = $res->display;
        if ($display==0) {
            $display=1;
        }else{
            $display=0;
        }
        // echo $display;
        $result=DB::table('cates')->where('id','=',$id)->update(['display'=>$display]);
        // return $result?'1':'0';
        $res=DB::table('cates')->where('id','=',$id)->first();
        return $res->display;
    }
}
