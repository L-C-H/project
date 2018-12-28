<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入DB类
use DB;
class ShopcarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function ajaxindex(){
        // var_dump($request->all());exit;
        //获取传递过来的商品信息
        $data=$request->all();
        //查询全部的数据遍历出五条数据
        $rev=DB::table('goods')->limit(5)->get();
        // var_dump($rev);
        $rows=[];
        $total='';
        //通过id查询商品表中的商品数据
        $res=DB::table('goods')->where('id','=',$data['id'])->first();
        // var_dump($res);exit;
        $row['id']=$id;//商品id
        $row['pic']=$res->pic;//商品图片路径
        $row['goods_des']=$res->goods_des;//商品标题描述
        $row['num']=$data['num'];//商品数量
        $row['goods_price']=$res->goods_price;//商品价格
        $row['stock']=$res->stock;//库存
        //通过商品id去查询商品详情
        $info=DB::table('goods_info')->where('id','=',$value['id'])->first();
        //获取商品的颜色
        $row['color']=$info->color;//商品颜色
        $row['addtime']=date('Y-m-d H:i:s',time());
        $total+=$res->goods_price*$value['num'];//总计
        $rows[]=$row;
        // echo 1;exit;
        // var_dump($rows);exit;
        //判断用户是否登录
        if(session('username')){
            // echo 1;exit;
            //存入数据库
            //获取用户名
            $username=session('username');
            // 通过username去查询用户的id
            $user=DB::table('member')->where('username','=',$username)->first();
            $m_id=$user->id;
            $row['m_id']=$m_id;
            var_dump($row);exit;
        }else{
            //存入到session
            echo 1;exit;
        }
    }*/

    //购物车存入session操作
    public function index(Request $request)
    {
        //查询全部的数据遍历出五条数据
        $rev=DB::table('goods')->limit(5)->get();
        // var_dump($rev);
        //获取session信息
        $data=session('shopcar');
        $rows=[];
        $total='';
        // dd($data);
        if(!empty(session('shopcar'))){
            foreach($data as $key=>$value){
                //通过id查询商品表中的商品数据
                $res=DB::table('goods')->where('id','=',$value['id'])->first();
                // dd($res);
                //判断是否有用户登录的session值
                $row['stock']=$res->stock;//库存
                $row['id']=$value['id'];//商品id
                $row['pic']=$res->pic;//商品图片路径
                $row['goods_des']=$res->goods_des;//商品标题描述
                $row['num']=$value['num'];//商品数量
                $row['goods_price']=$res->goods_price;//商品价格
                //通过商品id去查询商品详情
                $info=DB::table('goods_info')->where('id','=',$value['id'])->first();
                //获取商品的颜色
                $row['color']=$info->color;//商品颜色
                $row['addtime']=date('Y-m-d H:i:s',time());
                $total+=$res->goods_price*$value['num'];//总计
                $rows[]=$row;
            }
        }
        //加载购物车页面
        // var_dump($res);exit;
        return view('Home.Shopcar.shopcar',['rows'=>$rows,'total'=>$total,'rev'=>$rev]);
            
    }

    //购物车存入数据库操作
    public function shopinsert(){
            //查询全部的数据遍历出五条数据
            $rev=DB::table('goods')->limit(5)->get();//获取用户名来查询用户id
            //获取登录用户名
            $username=session('username');
            //通过登录用户名来查询用户id
            $user=DB::table('member')->where('username','=',$username)->first();
            $m_id=$user->id;
            $dd=DB::table('shopcart')->where('m_id','=',$m_id)->get();
            $total='';
            $rows=[];
            // var_dump($dd);exit;
            if(!empty($dd)){
                foreach($dd as $value){
                    $row['id']=$value->id;
                    $row['stock']=$value->stock;//库存
                    $row['pic']=$value->pic;
                    $row['goods_des']=$value->goods_des;
                    $row['color']=$value->color;
                    $row['goods_price']=$value->goods_price;
                    $row['num']=$value->num;
                    $rows[]=$row;
                    $total+=$row['goods_price']*$row['num'];//总计
                }
            }
            
            // var_dump($rows);exit;
            return view('Home.Shopcar.shopcar',['rev'=>$rev,'rows'=>$rows,'total'=>$total]);

    }


    //减操作
    public function less(Request $request){
        // var_dump($request->all());exit;
        //获取id值
        $id=$request->input('id');
        // var_dump($id);exit;
        //判断是否有用户的session('username')
        if(session('username')){
             // var_dump($id);exit;
            // 通过id查询数据库的值
            $data=DB::table('shopcart')->where('id','=',$id)->first();
           // var_dump($data);exit;
            $num=$data->num;
            $num--;
            if($num<=1){
                $num=1;
            }
            // echo $num;exit;
            //执行更新操作
            if(DB::table('shopcart')->where('id','=',$id)->update(['num'=>$num])){
                echo 1;
            }
        }else{
            //从session中获取值
            $data=session('shopcar');
            // var_dump($data);exit;
            foreach($data as $key=>$val){
                //判断id是否相等
                if($val['id']==$id){
                    //判断商品数量是否小于等于1
                    if($data[$key]['num']<=1){
                        $data[$key]['num']=1;
                    }else{
                        $data[$key]['num']=--$data[$key]['num'];
                    }
                    
                }
            }
            //重新给session赋值
           session(['shopcar'=>$data]);
           //返回一个值进行判断
           echo 1;
        }
        

    }

    //加操作
    public function add(Request $request){
        // var_dump($request->all());exit;
        //获取id值
        $id=$request->input('id');
        //获取库存
        $stock=$request->input('stock');
        //从session中获取值
        $data=session('shopcar');
        // var_dump($data);exit;
        if(session('username')){
             // var_dump($id);exit;
            // 通过id查询数据库的值
            $data=DB::table('shopcart')->where('id','=',$id)->first();
           // var_dump($data);exit;
            $num=$data->num;
            $num++;
            if($num>=$stock){
                $num=$stock;
            }
            // echo $num;exit;
            //执行更新操作
            if(DB::table('shopcart')->where('id','=',$id)->update(['num'=>$num])){
                echo 1;
            }
        }else{
            foreach($data as $key=>$val){
                if($val['id']==$id){
                    if($data[$key]['num']>=$stock){
                        $data[$key]['num']=1;
                    }else{
                        $data[$key]['num']=++$data[$key]['num'];
                    } 
                }
            }
            //重新给session赋值
           session(['shopcar'=>$data]);
            echo 1;
        }
    }

    //购物车商品删除操作
    public function del(Request $request){
        $id=$request->input('id');
        if(session('username')){
            //通过id去数据库删除数据
            if(DB::table('shopcart')->where('id','=',$id)->delete()){
                echo 1;
            }
        }else{
            //获取session的数据
            $goods=session('shopcar');

            foreach($goods as $key=>$val){
                //判断需要删除的数据
                if($val['id']==$id){
                    unset($goods[$key]);
                }
                // var_dump($goods);
            }
            session(['shopcar'=>$goods]);
            // var_dump(session('shopcar'));
            echo 1;
        }
        
    }

    //清空购物车
    public function clean(Request $request){

        if(session('username')){
            //获取id
            $id=$request->input('id');
            //通过id值删除数据库中的数据
            if(DB::table('shopcart')->where('id','=',$id)->delete()){
                echo 1;
            }
        }else{
            $request->session()->pull('shopcar');
            if(session('shopcar')==null){
                echo 1;
            }
        }
        
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

    //去重方法 $id跟商品id比较
    public function checkExists($id){
        
            //获取session
            $goods=session('shopcar');
            if(empty($goods)) return false;
            //遍历
            foreach($goods as $key=>$value){
                if($value['id']==$id){
                    return true;
                }
            }        
    }

    public function store(Request $request)
    {
        //查询全部的数据遍历出五条数据
        $rev=DB::table('goods')->limit(5)->get();
        // var_dump($request->all());exit; 
        //去除_token
        $data = $request->except('_token');
        // var_dump($data);exit;
        // echo 2;exit;
        if(session('username')){
            //获取商品id
            $id=$data['id'];
            //通过id查询商品表中的商品数据
            $res=DB::table('goods')->where('id','=',$id)->first();
            // dd($res);
            $rows=[];
            $total='';
            $row['size']=$request->input('size');
            $row['stock']=$res->stock;//库存
            $row['id']=$request->input('id');//商品id
            $row['pic']=$res->pic;//商品图片路径
            $row['goods_des']=$res->goods_des;//商品标题描述
            $row['num']=$data['num'];//商品数量
            $row['goods_price']=$res->goods_price;//商品价格
            //通过商品id去查询商品详情
            $info=DB::table('goods_info')->where('id','=',$id)->first();
            //获取商品的颜色
            $row['color']=$info->color;//商品颜色
            $row['addtime']=date('Y-m-d H:i:s',time());
            $total+=$res->goods_price*$data['num'];//总计
            //获取用户名来查询用户id
            $username=session('username');
            $user=DB::table('member')->where('username','=',$username)->first();
            $row['m_id']=$user->id;
            // var_dump($row);exit;
            //把商品信息插入到数据库中
            //判断数据库中是否有传来id的商品信息
            $result=DB::table('shopcart')->where('id','=',$id)->first();
             // var_dump($result);exit;
            if(!empty($result)){
                if($result->id==$id && $user->id==$result->m_id){
                    //执行更新操作
                    $num=$result->num+$data['num'];
                    if(DB::table('shopcart')->update(['num'=>$num])){
                        echo '<script>alert("加入购物车成功");</script>';
                    }
                }else{
                    if(DB::table('shopcart')->insert($row)){
                        echo '<script>alert("加入购物车成功");</script>';
                    }
                }
            }else{
                if(DB::table('shopcart')->insert($row)){
                    echo '<script>alert("加入购物车成功");</script>';
                }
            }
            
            //查询购物车的商品的信息遍历到前台中
            
            // var_dump($rows);exit;
            return redirect('/Homeshopinsert');
        }else{
            //执行购物车操作 
            if(!$this->checkExists($data['id'])){
                //把商品数据存储到session
                $request->session()->push('shopcar',$data);
            }
            //跳转到index方法
            return redirect('/Homeshopcar');
            
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
