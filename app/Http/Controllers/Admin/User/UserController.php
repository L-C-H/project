<?php

namespace App\Http\Controllers\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入数据库
use DB;
//引入哈希表
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        //获取数据库数据
        $admin =DB::table('admin_users')->get();
        //导入列表页
        // dd($admin);
        return view('Admin.User.index',['admin'=>$admin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {     
         //导入添加页
        return view('Admin.User.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取所有的参数
        // dd($request->all());
        $data = $request->except("_token");
        
        //密码加密
        $data['password']=Hash::make($data['password']);
        // dd($data);
        // 添加数据到数据库
        if (DB::table('admin_users')->insert($data)) {
            return redirect("/adminuser")->with("success","添加成功");
        }else{
            return redirect("/adminuser")->with("error","添加失败");
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
        //获取用户详情
        $info = User::find($id)->info;
        //加载模板 分配数据
        return view('Admin.User.info',['info'=>$info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //获取修改数据
        $user = DB::table("admin_users")->where("id","=",$id)->first();
         // dd($user);
       //导入修改页
       return view('Admin.User.edit',["user"=>$user]);

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
        //执行修改
        // dd($request->all());
        //去除_tiken _method  字段
         $data1 = $request->except("_token","_method");
          $data1['password']=Hash::make($data1['password']);
         if (DB::table("admin_users")->where("id","=",$id)->update($data1)) {
             return redirect("/adminuser")->with("successedit","修改成功");
         }else{
            return redirect("/adminuser/id/edit")->with("erroredit","修改失败");
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
        //执行删除数据
        if (DB::table("admin_users")->where("id","=",$id)->delete()) {
            return redirect("/adminuser")->with("successdel","删除成功");
        }else{
            return redirect("/adminuser")->with("errordel",'删除失败');
        }
    }
    //分配角色
    public function role($id)
    {
        //获取当前管理员信息
        $user = DB::table("admin_users")->where("id","=",$id)->first();
        //获取角色表的信息
        $role = DB::table("role")->get();
        //或许当前用户已用的角色
        $data = DB::table("user_role")->where("uid","=",$id)->get();
        // echo "<pre>";
        // var_dump($data);
        if (count($data)) {
            //获取当前有角色的信息
            //遍历
            foreach ($data as  $v) {
                $rids[]=$v->rid;

            //加载模板
            return view("Admin.User.role",['user'=>$user,'role'=>$role,'rids'=>$rids]);
            }

        }else{
             //获取当前没有的角色信息
             return view("Admin.User.role",['user'=>$user,'role'=>$role,'rids'=>array()]);
        }
        

    }

    //保存角色
    public function saverole(Request $request)
    {
        //把表单数据入库到user_role
        // dd($request->all());
        // 角色id(数组)
        $rid=$_POST['rids'];
        //获取id
        $uid=$request->input('uid');
        //删除当前用户的已有的角色
        DB::table('user_role')->where("uid","=",$uid)->delete();
        //遍历数组
        foreach ($rid as  $value) {
            //封装插入数据
             $data['uid'] = $uid;
             $data['rid'] = $value;
             //执行插入数据
             DB::table('user_role')->insert($data);
        }

        return redirect("/adminuser")->with("success","角色分配成功");
    }

}
