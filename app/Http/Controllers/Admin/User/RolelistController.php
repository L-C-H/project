<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入DB
use DB;
class RolelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //获取角色表的信息
        $role = DB::table("role")->get();
        //加载模板
        return view("Admin.User.rolelist",['role'=>$role]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载模板
        return view("Admin.User.addrolelist");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取所有的数据
         // $info = $request->all();
         // dd($info);
         $data = $request->except("_token");
         //导入数据库
         if (DB::table("role")->insert($data)) {
             return redirect("/adminrolelist")->with("success","添加管理员成功");
         }else{
            return redirect("/adminrolelist/create")->with("error","添加管理员失败");
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
        //获取所有数据
        $user = DB::table("role")->where("id","=",$id)->first();
        // dd($user);exit;
        //加载模板
        return view("Admin.User.rolelist_edit",['user'=>$user]);
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
        //获取所有数据
        // dd($request->all());
        // 清除_method _token 字段
        $data = $request->except("_token","_method");
         // dd($data);
        // 将修改数据导入到数据库
        if (DB::table("role")->where("id","=",$id)->update($data)) {
            return redirect("/adminrolelist")->with("successedit","修改成功");
        }else{
            return redirect("/adminrolelist/{id}")->with("erroredit","修改失败");
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
         //获取删除数据
         $info = DB::table("role")->where("id","=",$id)->delete();
          // dd($info);
         if ($info) {
            return redirect("/adminrolelist")->with("successdel","删除成功");
         }else{
            return redirect("/adminrolelist")->with("errordel","删除失败");
         }
    }
    
    //删除权限
    public function del(Request $request)
    {
        
        //获取id
        // $id = $request->input("id");
        // dd($id);
        // echo $id;
    }
    //分配权限
    public function auth($id)
    {
        //获取当前的角色信息
        $user = DB::table("role")->where("id","=",$id)->first();
        //获取当前的权限信息表
        $node = DB::table("node")->get();
        //获取当前角色已有的权限信息
        $data = DB::table("role_node")->where("rid","=",$id)->get();
        // echo "<pre>";
        // var_dump($data);
        if (count($data)) {
            //获取已有权限的信息角色
            //遍历
            foreach ($data as $value) {
                $nids[] = $value->nid;
            }
            //加载模板
           return view("Admin.User.auth",['user'=>$user,'node'=>$node,'nids'=>$nids]);
        }else{
            //获取没有的角色信息权限
            return view("Admin.User.auth",['user'=>$user,'node'=>$node,'nids'=>array()]);
        }
        
    }


    //保存权限
    public function saveauth(Request $request)
    {
        //获取分配的权限信息
       $nids = $_POST['nids'];
       // echo "<pre>";
       // var_dump($nids);
       // 获取角色id
       $rid = $request->input("rid");
       //删除当前已有的权限
       DB::table("role_node")->where("rid","=",$rid)->delete();
       //遍历nids
       foreach ($nids as $key => $value) {
           //封装数据
           $data['nid'] = $value;
           $data['rid'] = $rid;
           // 将数据插入到role_node表格中
           DB::table("role_node")->insert($data);

       }

       return redirect("/adminrolelist")->with("success","保存权限成功");
    }
}
