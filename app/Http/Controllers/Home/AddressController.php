<?php

namespace App\Http\Controllers\Home; 

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //加载修改地址页面
        $data = DB::table('announce')->where('status','=',0)->get();

        // //获取用户id
        $personal = DB::table('member')->where('username','=',session('username'))->first();
        // $personalid = 72;
        $address = DB::table('p_address')->where('u_id','=',$personal->id)->get();
        return view('Home.Address.address',['data'=>$data,'address'=>$address,'personal'=>$personal]);
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
        // dd($request->all());
        $data = $request;

        //合并所有地址
        $data['p_address'] = $data['p_address1'].$data['p_address2'].$data['p_address3'].$data['p_address'];

        //去除多余的地址
        $data = $request->except(['_token','p_address1','p_address2','p_address3']);
        // dd($data);

        //获取用户id
        // $personal = DB::table('personal')->where('username','=',session('username'))->first();

        $data['u_id'] =  $request->input('u_id');
        DB::table('p_address')->insert($data);
        return redirect('/Homeaddress');
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

    public function del(Request $request){
        // dd($request->all());
        $id = $request->input('id');
        // echo $id;
        // dd($id);
        // dd($request->all());
        if(DB::table('p_address')->where('id','=',$id)->delete()){
            echo 1;
        }
        // dd($request->all());
    }
}
