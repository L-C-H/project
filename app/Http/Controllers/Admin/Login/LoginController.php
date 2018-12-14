<?php

namespace App\Http\Controllers\Admin\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入DB
use DB;
//引入Hash
use Hash;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //执行退出
        //销毁session
        $request->session()->pull('name');
        $request->session()->pull('nodelist');
        //加载模板
        return view('Admin.Login.login');

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
        // dd($request->all());exit;
        // 获取管理员名字和密码
        $name = $request->input('name');
        $pass = $request->input('password');
        $user = DB::table("admin_users")->where("name","=",$name)->first();
        // 通过admin_userse表中的uid查询user_role的rid
        $a=DB::table('user_role')->where('uid','=',$user->id)->first();
        //通过user_role中的rid查询role表中的name
        $b=DB::table('role')->where('id','=',$a->rid)->first();
        //把name存入session中
        session(['rname'=>$b->name]);
        // var_dump($user);exit;
        //检测用户名
        if ($user) {

           
            if (Hash::check($pass,$user->password)) {
                //将后台登录的信息存储在session里
                session(['name'=>$name]);
                //1.获取后台登录用户的所有权列表信息
                $list = DB::select("select n.name,n.mname,n.aname from user_role as ur, role_node as rn, node as n where ur.rid = rn.rid and rn.nid = n.id and uid={$user->id}");

                // 2.初始化权限信息
                // 把后台首页权限写入到权限信息列表里
                // AdminController  后台首页控制器    index  方法
                $nodelist['AdminController'][]='index';
               
                //遍历
                foreach ($list as $key => $value) {
                    $nodelist[$value->mname][] = $value->aname;
                     //如果具有create方法 添加store  如果具有edit方法   update方法
                     if ($value->aname=='create') {
                         $nodelist[$value->mname][] = "store";
                     }

                     if ($value->aname=="edit") {
                          $nodelist[$value->mname][] = "update";
                     }
                }
                // echo "<pre>";
                // var_dump($nodelist);exit;
                // 3.登录用户所有权限列表信息存储在session里
                  session(['nodelist'=>$nodelist]);
                return redirect("/admin")->with("session","密码正确");
            }else{
                return  back()->with("error","密码有误");
            }
             return redirect("/admin")->with("session","用户名正确");
        }else{
            return back()->with("error","用户名错误");
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
