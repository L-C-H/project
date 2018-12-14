<?php

namespace App\Http\Controllers\Admin\Brand;

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
        //获取总条数
        $total=DB::table('brand')->count();
        //获取关键字
        // var_dump($request);exit;
        $kw = $request->input('keywords');
        // var_dump($k);exit;
        //获取数据库中的数据
        $data = DB::table('brand')->where('brand_name','like','%'.$kw.'%')->paginate(10);
        // var_dump($data);exit;
        $arr = array('发布','下架');
        // var_dump($data);exit;
        foreach ($data as $key => $value) {
            // var_dump($value);exit;
            $value->status = $arr[$value->status];
            // var_dump($value);exit;

        }
        // var_dump($data);exit;
        //导入品牌列表
        return view('Admin.Brand.index',['data'=>$data,'total'=>$total,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取类型分类信息
        $array = DB::table('cates')->where('name','like','%品牌%')->get();
        // var_dump($arr[0]->id);exit;
        $cate=DB::table("cates")->where('pid','=','0')->select(DB::raw("*,concat(path,',',id)as paths"))->orderBy('paths')->get();
        $a = array();
      $arr=$array->toarray();

      $cate = $cate->toarray();
    $data= array_merge($arr,$cate);
        // var_dump($data);exit;    


        // var_dump($cate);exit;
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
       //导入品牌添加页
        return view('Admin.Brand.add',['data'=>$data]);
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
        $data = $request->except('_token');
        // var_dump($data);exit;
        $brand_name = $request->brand_name;
        $brand_engname = $request->brand_engname;
        $brand_des = $request->brand_des;
        if ($brand_name==null || $brand_engname==null ||$brand_des==null) {
           return back()->withInput();
        }
         //判断是否有文件上传
        if ($request->hasFile('pic')) {
            //初始化名字
            $name = time()+rand(1,10000);
            // var_dump($name);exit;
            //获取上传文件后缀
            $ext = $request->file('pic')->getClientOriginalExtension();
            //移动到指定的目录下
            $request->file('pic')->move('./uploads/Brand',$name.".".$ext);
            //获取图片的名字
            $data['pic'] = "/uploads/Brand/".$name.".".$ext;
            $data['status'] = 0;
            // var_dump($data);exit;
            if (DB::table('brand')->insert($data)) {
               return redirect('/adminbrand')->with('success','添加成功');
            }else{
                return redirect('/adminbrand')->with('error','添加失败');
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
            //获取类型分类信息
            $array = DB::table('cates')->where('name','like','%品牌%')->get();
            // var_dump($arr[0]->id);exit;
            $cate=DB::table("cates")->where('pid','=','0')->select(DB::raw("*,concat(path,',',id)as paths"))->orderBy('paths')->get();
            $a = array();
            $arr=$array->toarray();
             $cate = $cate->toarray();
             $data= array_merge($arr,$cate);
            // var_dump($data);exit;
             // var_dump($cate);exit;
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
         $res = DB::table('brand')->where('id','=',$id)->first();
         $p = DB::table('cates')->where('id','=',$res->pid)->first();
         $pp = DB::table('cates')->where('id','=',$p->pid)->first();
         // var_dump($pp);exit;
        //导入品牌修改页
        return view('Admin.Brand.edit',['data'=>$data,'res'=>$res,'p'=>$p,'pp'=>$pp]);
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
        $data = $request->except('_token','_method');
        // var_dump($request);exit;
        $brand_name = $request->brand_name;
        $brand_engname = $request->brand_engname;
        $brand_des = $request->brand_des;
        if ($brand_name==null || $brand_engname==null ||$brand_des==null) {
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
            $request->file('pic')->move('./uploads/Brand',$name.".".$ext);
            //获取图片的名字
            $data['pic'] = "/uploads/Brand/".$name.".".$ext;
            $data['status'] = 0;
            // var_dump($data);exit;
            if (DB::table('brand')->where('id','=',$id)->update($data)) {
              return redirect('/adminbrand')->with('success','修改成功');
            }else{
              return redirect('/adminbrand')->with('error','修改失败');
            }
        }
        
         $data['status'] = 0;
        if (DB::table('brand')->where('id','=',$id)->update($data)) {
          return redirect('/adminbrand')->with('success','修改成功');
        }else{
          return redirect('/adminbrand')->with('error','修改失败');
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
       // echo $id; exit;
       if (DB::table('brand')->where('id','=',$id)->delete()) {
            return 1;
       }else{
            return 0;
       }
    }
     public function sta(Request $request){
       $id = $request->input('id');
       // echo $id; exit;
       $res = DB::table('brand')->where('id','=',$id)->first();
       // var_dump($res);exit;
        $status = $res->status;
        // echo $status;exit;
        if ($status==0) {
           $status=1;
        }else{
            $status=0;
        }
       // echo $status;exit;
       $s = DB::table('brand')->where('id','=',$id)->update(['status'=>$status]);
       // return $s?1:0;
      $res = DB::table('brand')->where('id','=',$id)->first();
      return $res->status;
         

    }
    
}
