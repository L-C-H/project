<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        if(session('username')){
            //通过登录用户名去查询用户的id
            $personal = DB::table('member')->where('username','=',session('username'))->first();
            $user=DB::table('member')->where('username','=',session('username'))->first();
            //获取用户的id
            $id=$user->id;
            $address=DB::table('p_address')->where('u_id','=',$id)->get();
            // var_dump($request->all());exit;
            $data=$request->input('goods');
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
            //加载结算页模板
            return view('Home.Pay.pay',['res'=>$res,'total'=>$total,'address'=>$address,'personal'=>$personal,'goods'=>$data]);
        }else{
            return back()->with('gologin','请先去登录');
        }
        
    }

    public function index()
    {
        
       /**/
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

    public function addr(Request $request){
        $user=DB::table('member')->where('username','=',session('username'))->first();
        $data = [];
        //获取用户的id
        $data['u_id']=$user->id;

        $data['p_address'] = $request->input('province').$request->input('city').$request->input('district').$request->input('p_address');
        $data['p_phone'] = $request->input('p_phone');
        $data['p_name'] = $request->input('p_name');

        if(DB::table('p_address')->insert($data)){
            echo 1;
        }else{
            echo 0;
        }
    }
}
