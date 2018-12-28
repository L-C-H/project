<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function getcatesbypic($pid)
    {
       $cate = DB::table("cates")->where("pid","=",$pid)->get();
       //遍历
       $data = [];
       foreach ($cate as $key => $value) {
           $value->suv = self::getcatesbypic($value->id);
           $data[] = $value;
       }
       return $data;
    }
    public function show($id)
    {    
        $cate = self::getcatesbypic(0);
        // dd($cate);exit;
        //获取传过来的id值
         // echo $id;
        // goods  goods_info  的遍历
        // $data = DB::select("select * from  goods full join goods_info where goods.id = goods_info.g_id");
        $data = DB::select("select gf.id as gfid,gs.id as gsid,gs.goods_name,gs.goods_price,gs.goods_des,gs.pic,gs.c_id,gs.new,gs.stock,gs.original_price,gs.status,gf.color,gf.material,gf.sex,gf.pattern,gf.style,gf.g_id from goods as gs,goods_info as gf where gf.g_id={$id} and gs.id={$id}");
        $info = $data[0];
        // echo "<pre>";
        // var_dump($info);exit;
        
        //尺码表  商品详情表的遍历
        $datas = DB::select("select * from size,goods_info where size.goods_id = goods_info.g_id and goods_id = 11");
        // echo "<pre>";
        // var_dump($datas);exit;
        // $datas = DB::select("select * from size,goods_info,goods where size.goods_id = goods_info.g_id and goods_info.g_id = goods.id");
        // $infos = $datas[$id];
        //加载商品详情页面
        return view('Home.Info.info',['info'=>$info,'cate'=>$cate,'datas'=>$datas]);
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
