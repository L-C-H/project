<?php

namespace App\Http\Controllers\Admin\Goods;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入调用的模型类
use App\Models\goods;
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         //获取总条数
        $total=DB::table('goods')->count();
         //获取关键字
        // var_dump($request);exit;
        $k = $request->input('keywords');
        // var_dump($k);exit;
        //获取数据库中的数据
        $data = goods::where('goods_name','like','%'.$k.'%')->orderBy('id','des')->paginate(10);
        // var_dump($data);exit;
        $a = array('新品','热销','推荐','折扣');
        $arr = array('上架','下架');
        // var_dump($data);exit;
        foreach ($data as $key => $value) {
            // var_dump($value);exit;
            $value->status = $arr[$value->status];
             $value->new = $a[$value->new];
            // var_dump($value);exit;

        }
        //导入商品列表页
        return view('Admin.Goods.index',['data'=>$data,'total'=>$total,'request'=>$request->all()]);
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
        // var_dump($request);exit;
        $data =$request->except('_token','color','material','sex','pattern','style');
        // var_dump($data);
        $info = $request->except('_token','c_id','goods_name','goods_price','original_price','stock','pic','goods_des');
        // var_dump($info);exit;
        $goods_name = $request->goods_name;
        $goods_price = $request->goods_price;
        $original_price = $request->original_price;
        $stock = $request->stock;
        $goods_des = $request->goods_des;
        $color=$request->color;
        $material = $request->material;
        $sex = $request->sex;
        $pattern = $request->pattern;
        $style = $request->style;
        if ($goods_name==null||$goods_price==null||$goods_des==null||$stock==null||$color==null||$original_price==null||$material==null||$sex==null||$pattern==null||$style==null) {
             return back()->withInput();
        }
        // var_dump($data);exit;
         //判断是否有文件上传
        if ($request->hasFile('pic')) {
            //初始化名字
            $name = time()+rand(1,10000);
            // var_dump($name);exit;
            //获取上传文件后缀
            $ext = $request->file('pic')->getClientOriginalExtension();
            //移动到指定的目录下
            $request->file('pic')->move('./uploads/Goods',$name.".".$ext);
            //获取图片的名字
            $data['pic'] = "/uploads/Goods/".$name.".".$ext;
            $data['status'] = 0;
            $data['new'] = 0;
            // var_dump($data);exit;
            $g_id = DB::table('goods')->insertGetId($data);
            // var_dump($g_id);exit;
            $info['g_id'] = $g_id;
            // var_dump($info);exit;
            if (DB::table('goods_info')->insert($info)) {

               return redirect('/admingoods')->with('success','添加成功');
            }else{
                return redirect('/admingoods')->with('error','添加失败');
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
        //获取商品对应的详情信息
        $data = goods::find($id)->info;
        // var_dump($data);exit;
        $arr = array('女','男');
        $data->sex = $arr[$data->sex];
        // var_dump($data);exit;
        return view('Admin.Goods.goodsinfo',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $cate=DB::table("cates")->select(DB::raw("*,concat(path,',',id)as paths"))->orderBy('paths')->get();
          //加分隔符
        foreach($cate as $key=>$value){
            // var_dump($cate);exit;
            // echo $value->path."<br>";
            //把path字符串转换为数组
            $arr=explode(",",$value->path);
            // var_dump($arr);
            //获取逗号个数
            $len=count($arr)-1;
            //重复字符串函数
            $cate[$key]->name=str_repeat('--|',$len).$value->name;
        }
        // echo $id;
        $res = DB::table('goods')->where('id','=',$id)->first();
         $p = DB::table('cates')->where('id','=',$res->c_id)->first();
        $r = DB::table('goods_info')->where('g_id','=',$id)->first();
         // var_dump($r);exit;
        //导入商品列表页
        return view('Admin.Goods.edit',['cate'=>$cate,'res'=>$res,'p'=>$p,'r'=>$r]);
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
        //获取图片路径
       $result = DB::table('goods')->where('id','=',$id)->first();
       $m = ".".$result->pic;
        $data =$request->except('_token','color','material','sex','pattern','style','_method');
        // var_dump($data);
        $info = $request->except('_token','c_id','goods_name','goods_price','original_price','stock','pic','goods_des','_method');
         // var_dump($info);exit;
        // var_dump($request);exit;
        $goods_name = $request->goods_name;
        $goods_price = $request->goods_price;
        $original_price = $request->original_price;
        $stock = $request->stock;
        $goods_des = $request->goods_des;
        $color=$request->color;
        $material = $request->material;
        $sex = $request->sex;
        $pattern = $request->pattern;
        $style = $request->style;
        if ($goods_name==null||$goods_price==null||$goods_des==null||$stock==null||$color==null||$original_price==null||$material==null||$sex==null||$pattern==null||$style==null) {
             return back()->withInput();
        }
        // echo $id;
        //判断图片是否修改
        if ($request->hasFile('pic')) {
            // var_dump($data);exit;
            //初始化名字
            $name = time()+rand(1,10000);
            //获取上传文件后缀
            $ext = $request->file('pic')->getClientOriginalExtension();
            //移动到指定的目录下
            $request->file('pic')->move('./uploads/Goods',$name.".".$ext);
            //获取图片的名字
            $data['pic'] = "/uploads/Goods/".$name.".".$ext;
            $data['status'] = 0;
            $data['new'] = 0;
            // var_dump($data);exit;
            $res = DB::table('goods')->where('id','=',$id)->update($data);
            unlink($m);
            $r = DB::table('goods')->get();
            foreach ($r as $key => $value) {
                $g_id = $value->id;
            }
            $ress = DB::table('goods_info')->where('g_id','=',$g_id)->update($info);
            // var_dump($g_id);exit;
            if ($res || $ress) {
              return redirect('/admingoods')->with('success','修改成功');
            }else{
              return redirect('/admingoods')->with('error','修改失败');
            }
        }
        
         $data['status'] = 0;
         $data['new'] = 0;
         // var_dump($data);exit;
         $res = DB::table('goods')->where('id','=',$id)->update($data);
         $r = DB::table('goods')->get();
         foreach ($r as $key => $value) {
                $g_id = $value->id;
            }
            //  // $g_id = $r->id;
            // var_dump($g_id);exit;
        //  // var_dump($data);exit;
         $ress = DB::table('goods_info')->where('g_id','=',$g_id)->update($info);
        if ($res || $ress) {
          return redirect('/admingoods')->with('success','修改成功');
        }else{
          return redirect('/admingoods')->with('error','修改失败');
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
     public function del(Request $request){
        // echo 1;exit;
       $id = $request->input('id');
       $ress = DB::table('goods')->where('id','=',$id)->first();
       $m = ".".$ress->pic;
       // var_dump($ress);exit;
       $res = DB::table('goods')->where('id','=',$id)->delete();
       unlink($m);
       $r = DB::table('goods_info')->where('g_id','=',$id)->delete();
       // echo $id; exit;
       if($res&&$r) {
            return 1;
       }else{
            return 0;
       }
    }
     public function sta(Request $request){
       $id = $request->input('id');
       // echo $id; exit;
       $res = DB::table('goods')->where('id','=',$id)->first();
       // var_dump($res);exit;
        $status = $res->status;
        // echo $status;exit;
        if ($status==0) {
           $status=1;
        }else{
            $status=0;
        }
       // echo $status;exit;
       $s = DB::table('goods')->where('id','=',$id)->update(['status'=>$status]);
       // return $s?1:0;
      $res = DB::table('goods')->where('id','=',$id)->first();
      return $res->status;
         

    }
}
