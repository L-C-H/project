<?php

namespace App\Http\Controllers\Admin\Link;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //引入友情链接列表页
        $k = $request->input('keywords');
        $data = DB::table('link')->where('name','like','%'.$k.'%')->paginate(2);
        $count = count($data);
        return view('Admin.Link.index',['data'=>$data,'count'=>$count,'request'=>$request]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //引入友情链接列表页
        return view('Admin.Link.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //添加友情链接信息
        // dd($request->all());
        $data = $request->except(['_token']);

        $row = DB::table('link')->insert($data);

        return redirect('/adminlink');
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
        //引入友情链接列表页
        // dd($id);
        $data = DB::table('link')->where('id','=',$id)->first();
        // dd($data);
        return view('Admin.Link.edit',['data'=>$data]);
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
        // dd($request->all());
        $data = $request->except(['_token','_method']);
        if(DB::table('link')->where('id','=',$id)->update($data)){
            return redirect('/adminlink')->with('session','修改成功');
        }else{
            return redirect('/adminlink/{{$v->id}}/edit')->with('error','修改失败');
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
        // dd($id);
        if(DB::table('link')->delete($id)){
            return redirect('/adminlink')->with('session','删除成功');
        }else{
            return redirect('/adminlink')->with('error','删除失败');
        }

    }

    public function del(Request $request){
        dd($request->all());
        $a = $request->input('a');
        if($a==''){
            echo '请至少选择一条数据';exit;
        }
        //遍历
        foreach($a as $key=>$value){
            DB::table('link')->where('id','=',$value)->delete();
        }
        echo 1;
    }
}
