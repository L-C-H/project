<?php

namespace App\Http\Controllers\Admin\Announce;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Announce;
class AnnounceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //公告列表
        $data = Announce::paginate(2); 
        // dd($data);
        $count = count($data);
        return view('Admin.Announce.index',['data'=>$data,'count'=>$count]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //公告添加
        return view('Admin.Announce.add');
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
        // dd($request->all());
        $data = $request->except('_token');
        if(Announce::insert($data)){
            return redirect('./adminannounce')->with('success','添加成功');
        }else{
            return redirect('./adminannounce')->with('error','添加失败');
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
        //公告修改
        $data = Announce::where('id','=',$id)->first();
        return view('Admin.Announce.edit',['data'=>$data]);
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
        // dd($request->all());
       $data = $request->except(['_token','_method']);
        // dd($data);
       if(Announce::where('id','=',$id)->update($data)){
            return redirect('/adminannounce')->with('success','修改成功');
       }else{
             return redirect('/adminannounce')->with('error','修改失败');
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
         $id = $request->input('id');
        // echo $id;
        // dd($request->all());
        if(DB::table('announce')->where('id','=',$id)->delete()){
            echo 1;
        }
        // dd($request->all());
    }
}
