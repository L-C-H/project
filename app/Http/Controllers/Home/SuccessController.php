<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Helper;
use DB;
class SuccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //从session中获取到收货地址的id
        $addressid=session('addressid');
        // var_dump($addressid);exit;
        //通过收货地址id去查找地址信息
        $address=DB::table('p_address')->where('id','=',$addressid)->first();
        // var_dump($address);exit;
        //获取用户的id
        $user=DB::table('member')->where('username',session('username'))->first();
        $id=$user->id;
        $total='';
        //获取订单号
        $order_id=session('order_id');
        // var_dump($order_id);
        $res=DB::table('order')->where('order_id','=',$order_id)->get();
        // var_dump($res);
        foreach($res as $key=>$val){
            $total+=$val->goods_price*$val->order_num;
        }
        // var_dump($total);exit;
        //加载模板
        return view('Home.Success.success',['res'=>$res,'order_id'=>$order_id,'total'=>$total,'address'=>$address]);
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
        //获取全部商品信息
        $all=$request->all();
        // var_dump($all);exit;
        $addressid=$request->input('addressid');
        // echo $addressid;exit;
        session(['addressid'=>$addressid]);
        //获取商品的id
        $data=$request->input('goods');
        // var_dump($data);exit;
        $res=[];
        $total='';
        //随机生成订单号
        $order_id=chr(rand(65,90)).rand(1,999999999);
        $a = $order_id;
        session(['order_id'=>$a]);
        // var_dump($a);exit;
        // 从session中获取登录用户的用户名
        $username=session('username');
        //通过登录用户名去查询用户的id
        $user=DB::table('member')->where('username','=',$username)->first();
        //获取用户的id
        $id=$user->id;
        for ($i=0; $i <count($data); $i++) { 
            $result=DB::table('shopcart')->where('id','=',$data[$i])->first();
            // var_dump($result);
            //总金额
            $total+=$result->goods_price*$result->num;
            // var_dump($order_id);
            $row['u_id']=$id;
            $row['order_id']=$a;
            $row['created_at']=$row['updated_at']=date('Y-m-d H:i:s',time());
            $row['order_size']=$result->size;
            $row['name']=$username;
            $row['goods_price']=$result->goods_price;
            $row['order_num']=$result->num;
            $row['goods_name']=$result->goods_des;
            $row['goods_pic']=$result->pic;
            $row['color']=$result->color;
            $total+=$result->goods_price*$result->num;
            $res[]=$row;
        }
        // var_dump($res);exit;
        //把数据插入到数据库中
        $result=DB::table('order')->insert($res);

        if($result){
            for ($i=0; $i <count($data); $i++) {
                DB::table('shopcart')->where('id','=',$data[$i])->delete();
            }
            echo "<script>alert('提交订单成功');</script>";
        }

        return redirect('/Homesuccess');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

    public function pays($order_id){
        //实例化Helper类
        $class=new Helper();
        $data['status'] = 1;
        DB::table('order')->where('order_id','=',$order_id)->update($data);
        // echo $order_id;
        $class->pay($order_id);
    }

    public function returnurl(){
        // echo '支付成功';
        return view('Home.Success.paysuccess');
    }
}
