<?php

namespace App\Http\Controllers\Admin\Advertisement;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取总条数
        $total=DB::table('advertisement')->count();
        //获取关键字
        // var_dump($request);exit;
        $k = $request->input('keywords');
        // var_dump($k);exit;
        //获取数据库中的数据
        $data = DB::table('advertisement')->where('name','like','%'.$k.'%')->paginate(2);
        // var_dump($data);exit;
        $arr = array('发布','下架');
        // var_dump($data);exit;
        foreach ($data as $key => $value) {
            // var_dump($value);exit;
            $value->status = $arr[$value->status];
            // var_dump($value);exit;

        }
        // var_dump($data);exit;
        //引入广告列表页
        return view('Admin.Advertisement.index',['data'=>$data,'total'=>$total,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //引入广告添加页
        return view('Admin.Advertisement.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取表单的内容
        $data = $request->except('_token');
        // var_dump($data);exit;
        $name = $request->name;
        $content = $request->content;
        if ($name==null || $content==null) {
            return back()->withInput();
        }
        
        // var_dump($data);exit;
        //判断是否有文件上传
        if ($request->hasFile('pic')) {
            //初始化名字
            $name = time()+rand(1,10000);
            //获取上传文件后缀
            $ext = $request->file('pic')->getClientOriginalExtension();
            //移动到指定的目录下
            $request->file('pic')->move('./uploads/Advertisement',$name.".".$ext);
            //获取图片的名字
            $data['pic'] = "/uploads/Advertisement/".$name.".".$ext;
            $data['status'] = 0;
            // var_dump($data);exit;
            if (DB::table('advertisement')->insert($data)) {
               return redirect('/adminadvertisement')->with('success','添加成功');
            }else{
                return redirect('/adminadvertisement')->with('error','添加失败');
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
         //引入广告修改页
         $data = DB::table('advertisement')->where('id','=',$id)->orderBy('id','des')->first();
         // var_dump($data);exit;
        return view('Admin.Advertisement.edit',['data'=>$data]);
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
        $result = DB::table('advertisement')->where('id','=',$id)->first();
        $m = ".".$result->pic;
        $name = $request->name;
        $content = $request->content;
        if ($name==null || $content==null) {
            return back()->withInput();
        }
        // echo $id;
      //判断图片是否修改
        if ($request->hasFile('pic')) {
            $data = $request->except('_token','_method','uploadfile-1');
            // var_dump($data);exit;
            //初始化名字
            $name = time()+rand(1,10000);
            //获取上传文件后缀
            $ext = $request->file('pic')->getClientOriginalExtension();
            //移动到指定的目录下
            $request->file('pic')->move('./uploads/Advertisement',$name.".".$ext);
            //获取图片的名字
            $data['pic'] = "/uploads/Advertisement/".$name.".".$ext;
            $data['status'] = 0;
            // var_dump($data);exit;
            if (DB::table('advertisement')->where('id','=',$id)->update($data)) {
                unlink($m);
              return redirect('/adminadvertisement')->with('success','修改成功');
            }else{
              return redirect('/adminadvertisement')->with('error','修改失败');
            }
        }
        $data = $request->except('_token','_method');
         $data['status'] = 0;
        if (DB::table('advertisement')->where('id','=',$id)->update($data)) {
            unlink($m);
          return redirect('/adminadvertisement')->with('success','修改成功');
        }else{
          return redirect('/adminadvertisement')->with('error','修改失败');
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
       $result = DB::table('advertisement')->where('id','=',$id)->first();
       $m = ".".$result->pic;
       // echo $id; exit;
       if (DB::table('advertisement')->where('id','=',$id)->delete()) {
            unlink($m);
            return 1;
       }else{
            return 0;
       }
    }
     public function sta(Request $request){
       $id = $request->input('id');
       // echo $id; exit;
       $res = DB::table('advertisement')->where('id','=',$id)->first();
       // var_dump($res);
        $status = $res->status;
        if ($status==0) {
           $status=1;
        }else{
            $status=0;
        }
       // echo $status;
       $s = DB::table('advertisement')->where('id','=',$id)->update(['status'=>$status]);
       // echo $s;
      $res = DB::table('advertisement')->where('id','=',$id)->first();
      return $res->status;
         

    }
}
