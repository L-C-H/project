<?php

namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //获取总条数
        $total=DB::table('goods')->count();
        //导入商品列表页
        return view('Admin.Goods.index',['total'=>$total]);
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
        //导入商品列表页
        return view('Admin.Goods.add',['cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        var_dump($request);exit;
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
        //导入商品列表页
        return view('Admin.Goods.edit');
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
