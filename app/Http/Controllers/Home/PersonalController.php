<?php

namespace App\Http\Controllers\Home; 

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //公告
        $announce = DB::table('announce')->where('status','=',0)->get();

        //个人中心数据
        // session(['username' => 'mzr']);
        $username = session('username');
        // dd($username);

        //获取用户表的信息
        $member = DB::table('member')->where('username','=',$username)->first();
        
        //获取个人中心表
        $personal = DB::table('personal')->where('u_id','=',$member->id)->first();
        // dd($personal);

        //根据用户id查询订单信息
        $order = DB::table('order')->where('u_id','=',$member->id)->get();
        // dd($order);
        // var_dump($order);exit;
        //加载个人主页
        return view('Home.Personal.personal',['announce'=>$announce,'member'=>$member,'order'=>$order,'personal'=>$personal]);
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
        $announce = DB::table('announce')->where('status','=',0)->get();
        $status = $request->input('status');
        $username = session('username');
        $personal = DB::table('personal')->where('username','=',$username)->first();
        // dd($personal);
        //根据用户id查询订单信息
        $order = DB::table('order')->where('u_id','=',$personal->id)->where('status','=',$status)->get();
        // dd($order);
        // var_dump($order);exit;
        //加载个人主页
        return view('Home.Personal.personal',['announce'=>$announce,'personal'=>$personal,'order'=>$order]);
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
        $username = session('username');
        $member = DB::table('member')->where('username','=',$username)->first();

        $announce = DB::table('announce')->where('status','=',0)->get();

        $orderinfo = DB::table('order')->where('id','=',$id)->first();
        // dd($orderinfo);
        $address = DB::table('p_address')->where('u_id','=',$member->id)->where('status','=',0)->first();
        // dd($address);
        return view('Home.Personal.orderinfo',['orderinfo'=>$orderinfo,'announce'=>$announce,'address'=>$address]);
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
        if(DB::table('order')->where('id','=',$id)->delete()){
            return redirect('/Homepersonal');
        }
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
        dd($id);
         $username = session('username');
        $personal = DB::table('personal')->where('username','=',$username)->first();
        // dd($personal);
        //根据用户id查询订单信息
        $order = DB::table('order')->where('u_id','=',$personal->id)->get();
        // dd($order);
        // var_dump($order);exit;
        //加载个人主页
        return view('Home.Personal.personal',['announce'=>$announce,'personal'=>$personal,'order'=>$order]);
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

    public function add($id){
        // dd($id);
        // $id = DB::select('select status from order where order_id ='."$id");
        $data = DB::table('order')->where('order_id','=',$id)->get();
        $status = [];
        foreach($data as $v){
            $status['status'] = $v->status+1;
             DB::table('order')->where('order_id','=',$id)->update($status);
        }
        // dd($status);
        // var_dump($data);exit;
        return redirect('/Homepersonal')->with('success','发货成功');
       
    }
}
