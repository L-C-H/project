<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
         // return view('Home.List.list');
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
        
        $announce = DB::table('announce')->where('status','=',0)->get();

        $left_cates = DB::table('left_cates')->get();
         //cates  分类的遍历
         //获取顶级分类下的所有子类信息
         $cate = self::getcatesbypic(0);
          // dd($cate);exit;
          $cated = DB::table("goods")->where("c_id","=",$id)->get();
          // dd($cated);
         // $cated = DB::table("cates")->where("path","like",'0,'.$id.",%")->get();
         //  $arr = [];
         // foreach ($cated as $key => $value) {
            
         //    // echo "<pre>";
         //    // var_dump($value);
         //    $goods = DB::table("goods")->where("id","=",$value->id)->get();
         //    // echo "<pre>";
         //    // var_dump($goods);
         //    $arr[] = $goods[0];

         // }
         
        //接受传过来的id数据
        // echo $id;exit;
        $data = DB::select("select goods_name from goods where id = {$id}");
        // dd($data);
        // var_dump($data);exit;
        $info = DB::table("goods")->where("goods_name","=",$data[0]->goods_name)->where('new',"=",0)->get();
         // dd($infocount);
         // var_dump($info);
         // exit;
        //加载列表页
        return view('Home.List.list',["info"=>$info,"id"=>$id,'cate'=>$cate,'cated'=>$cated,'announce'=>$announce,'left_cates'=>$left_cates]);
       
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
         $cate = self::getcatesbypic(0);
         //获取new属性的值
         $new = $request->except(['_token','_method']);
         $data = DB::select("select goods_name from goods where id = $id");
        // echo "<pre>";
        // var_dump($data);
        // exit;
        $info = DB::table("goods")->where("goods_name","like","%".$data[0]->goods_name."%")->where('new',"=",$new)->get();
         // dd($info);
         // exit;
        //加载列表页
        $cated = 0;
        return view('Home.List.list',['info'=>$info,"id"=>$id,'new'=>$new,'cate'=>$cate,'cated'=>$cated]);
         
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
