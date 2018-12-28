<?php 

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class BrandController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //加载品牌页

        $announce = DB::table('announce')->where('status','=',0)->get();

        $id = 6;
        //根据id得到品牌信息
        // $brand = DB::select('select brand_name from brand where id = '.$id);
        $brand = DB::table('brand')->where('id','=',$id)->first();
        // var_dump($brand);exit;
        //根据品牌名搜素品牌商品
        // $res = DB::select('select * from goods where goods_des like %'.$data.'%');

        //获取左边分类
        $left_cates = DB::table('left_cates')->get();

        $res = DB::table('goods')->where('goods_des','like','%'.$brand->brand_name.'%')->paginate(20);
        // var_dump($res);exit;
        return view('Home.Brand.brand',['announce'=>$announce,'res'=>$res,'brand'=>$brand,'id'=>$id,'left_cates'=>$left_cates]);
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
        //根据id得到品牌名
    //     $data = DB::select('select brand_name from brand where id = $id');

    //     $res = DB::table('goods')->where('goods_des','like','%'.$data.'%')->where('new','=',$request['status'])->get();
    //     return view('Home.Brand.brand',['res'=>$res,'id'=>$id]);
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
    public function show($id)
    {
        $announce = DB::table('announce')->where('status','=',0)->get();

        $id = 6;
        //根据id得到品牌信息
        // $brand = DB::select('select brand_name from brand where id = '.$id);
        $brand = DB::table('brand')->where('id','=',$id)->first();
        // var_dump($brand);exit;
        //根据品牌名搜素品牌商品
        // $res = DB::select('select * from goods where goods_des like %'.$data.'%');
        $res = DB::table('goods')->where('goods_des','like','%'.$brand->brand_name.'%')->paginate(20);
        // var_dump($res);exit;
        return view('Home.Brand.brand',['announce'=>$announce,'res'=>$res,'brand'=>$brand,'id'=>$id]);
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

         return view('Home.Brand.brand');
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
        //公告
        $announce = DB::table('announce')->where('status','=',0)->get();
        //找出品牌的信息
        // dd($request->all());
        // dd($id);
        // $id=6;
        $new = $request->input('new');
        $color = $request->input('color');
        $season = $request->input('season');
        // dd($season);
        $fg = $request->input('fg');
        // dd($fg);
        $price_num = $request->input('price_num');
        // var_dump($new);exit;
        //接受尺码
        $size = $request->input('size');
        $sizes = DB::table('size')->where('size','=',$size)->get();
        // dd($sizes);
        // var_dump($sizes);exit;
        

        $brand = DB::table('brand')->where('id','=',$id)->first();

        if(empty($size)){
             $res = DB::table('goods')->where('goods_des','like','%'.$brand->brand_name.'%'.$season.'%'.$color.'%'.$fg.'%')->where('new','=',$new)->where('goods_price','like',$price_num.'%')->get();
        }else{
            $res=[];
            foreach($sizes as $key=>$value){
                $goods = DB::table('goods')->where('id','=',$value->goods_id)->get();
                $res[] = $goods[0];
            }
        }
        //
       
        // var_dump($res);exit;

        //获取左边分类->where('goods_price','like','{$price}%') 
        $left_cates = DB::table('left_cates')->get();

        // dd($res);
        // var_dump($res);exit;
         return view('Home.Brand.brand',['announce'=>$announce,'res'=>$res,'brand'=>$brand,'id'=>$id,'left_cates'=>$left_cates]);
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
