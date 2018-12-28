<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class AddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取登录用户的用户id
        $user=DB::table('member')->where('username','=',session('username'))->first();
        $u_id=$user->id;
        //加载地址添加模板
        return view('Home.Addressadd.addressadd',['u_id'=>$u_id]);
    }


    public function addr(Request $request){
        var_dump($request->all());
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
        // var_dump($request->all());
        // dd($request->all());
        //获取地址信息
        $data=$request->except('_token');
        dd($data);
        // exit;
        $p_address=$data['p_address1'].$data['p_address2'].$data['p_address3'].$data['p_address'];
        // echo $p_address;
        $res1=[];
        $res1['u_id']=$data['u_id'];
        $res1['p_address']=$p_address;
        $res1['p_name']=$data['p_name'];
        $res1['p_phone']=$data['p_phone'];
        $res1['status']=0;
        // var_dump($res);
        $u_id=$request->input('u_id');
        //通过登录用户名去查询用户的id
        $personal = DB::table('member')->where('username','=',session('username'))->first();
        
        $address=DB::table('p_address')->where('u_id','=',$u_id)->get();
        // var_dump($request->all());exit;
        $data=$request->input('gid');
        // var_dump($data);exit;
        // echo count($data);
        $res=[];
        $total='';
        for ($i=0; $i <count($data); $i++) { 
            $result=DB::table('shopcart')->where('id','=',$data[$i])->first();
            // var_dump($result);
            //总金额
            $total+=$result->goods_price*$result->num;
            $res[]=$result;
        }
        // var_dump($total);
        // var_dump($res);exit;
        //把数据插入到数据库中
        if(DB::table('p_address')->insert($res1)){
        //加载结算页模板
        return view('Home.Pay.pay',['res'=>$res,'total'=>$total,'address'=>$address,'personal'=>$personal,'goods'=>$data]);
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
}
