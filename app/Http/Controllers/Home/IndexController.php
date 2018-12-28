<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
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

    public function index()
    {    

        //获取广告数据
        $data=DB::table('advertisement')->get();
        
         //cates  分类的遍历
         //获取顶级分类下的所有子类信息
         $cate = self::getcatesbypic(0);
  
         // dd($cate);exit;
        //goods_info  goods 的遍历
         $info = DB::select("select * from goods as gs,goods_info as gf,cates as cs where gs.id = gf.g_id and gs.c_id = cs.id limit 12");
         $infos = DB::table('goods')->limit(4)->get();
        //brand商品表的遍历
        $brand = DB::table("brand")->get();
        //roration轮播图的遍历
        $lun=DB::table("rotation")->get();
        //视频表的遍历
        $brand_info = DB::table("brand_info")->get();
        // dd($brand_info);exit;
        //加载首页模板
        return view('index',['lun'=>$lun,'info'=>$info,'brand'=>$brand,'infos'=>$infos,'brand_info'=>$brand_info,'cate'=>$cate,'data'=>$data]);
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
