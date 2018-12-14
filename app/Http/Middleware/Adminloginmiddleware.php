<?php

namespace App\Http\Middleware;

use Closure;

class Adminloginmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断session是否存在
        if ($request->session()->has('name')) {
            //4.用访问模块的控制器和方法 权限做对比
            //获取访问模块的方法名
            $action = $request->route()->getActionMethod();

            // 获取访问控制器的名字
            $actions=explode('\\', \Route::current()->getActionName());
            //或$actions=explode('\\', \Route::currentRouteAction());
            $modelName=$actions[count($actions)-2]=='Controllers'?
            null:$actions[count($actions)-2];
            $func=explode('@', $actions[count($actions)-1]);
            // var_dump($func);
            //控制器名字
            $controller=$func[0];
            $actionName=$func[1];
            // echo $controller.":".$action;
            //获取权限信息
             $nodelist=session('nodelist');
             // var_dump($action);
             // var_dump($nodelist[$controller]);
            
            //和权限列表做对比
            if (empty($nodelist[$controller]) || !in_array($action, $nodelist[$controller])) {
                echo "<script>
                        top.location.href='/admin';
                        
                        alert('对不起,你没有访问的权限,请联系超级管理员吧');
                        </script>";
                session('error','');
                exit;
               
               return redirect("/admin")->with("error","");
            }
            return $next($request);
        }else{
            return redirect("/adminlogin");
        }
        
    }
}
