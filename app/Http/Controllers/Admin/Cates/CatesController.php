<?php

namespace App\Http\Controllers\Admin\Cates;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //获取总条数
        $total=DB::table('cates')->count();
        //获取搜索条件
        $kw=$request->input('keywords');
        //获取类别数据
        $cate=DB::table('cates')->select(DB::raw("*,concat(path,',',id)as paths"))->orderBy('paths')->where('name','like','%'.$kw.'%')->paginate(10);
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
         //引入分类添加页
        return view('Admin.Cates.add');
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
         //引入分类修改页
        return view('Admin.Cates.edit');
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
