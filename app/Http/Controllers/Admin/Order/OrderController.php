<?php

namespace App\Http\Controllers\Admin\Order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Order;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //引入订单列表
        // dd($request->all());
        $order_id = $request->input('order_id');
        if(empty($order_id)){
            $data = Order::get();
        }else{
            $data = Order::where('order_id','=',$order_id)->get();
        }

        $name = $request->input('name');
        if(empty($name)){
            $data = Order::get();
        }else{
            $data = Order::where('name','like',$name)->get();
        }
        $count = count($data);
        return view('Admin.Order.index',['data'=>$data,'count'=>$count]);
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
        $log = Order::find($id)->log;
        return view('Admin.Order.log',['log'=>$log]);
        // var_dump($log);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //引入修改订单页
        $data = DB::table('logistics')->where('id','=',$id)->first();
        // var_dump($data);
        return view('Admin.Order.edit',['data'=>$data]);
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
        // var_dump($data);
        if(DB::table('logistics')->where('id','=',$id)->update($data)){
            return redirect('Admin.Order.index')->with('success','修改成功');
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
        return redirect('/adminorder')->with('success','发货成功');
       
    }
}
