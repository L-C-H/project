<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',function(){
	return view('Admin.index');
});
//进入后台
Route::resource('/admin','Admin\AdminController');
//登录页面
Route::get('/adminlogin',function(){
	return view('Admin.Login.login');
});
//管理员管理(后台)
Route::resource('/adminuser','Admin\User\UserController');
//管理员权限
Route::resource('/adminrole','Admin\User\RoleController');
//导入会员管理(前台)
Route::resource('/adminmember','Admin\Member\MemberController');
//密码
Route::get('/adminmemberpwd/{id}','Admin\Member\MemberController@p');
Route::get('/adminmemberpupdate/{id}','Admin\Member\MemberController@pupdate');
//删除会员管理
Route::resource('/adminmemberdel','Admin\Member\MemberdelController');
//浏览会员管理
Route::resource('/adminmemberrecord','Admin\Member\MemberrecordController');
//轮播图管理
Route::resource('/adminrotation','Admin\Rotation\RotationController');
//公告管理
Route::resource('/adminannounce','Admin\Announce\AnnounceController');
//广告管理
Route::resource('/adminadvertisement','Admin\Advertisement\AdController');
//友情链接
Route::resource('/adminlink','Admin\Link\LinkController');
//评价管理
Route::resource('/adminevaluate','Admin\Evaluate\EvController');
//意见反馈
Route::resource('/adminfeedback','Admin\Feedback\FbController');
//物流管理
Route::resource('/adminlogistics','Admin\Logistics\LogController');
//订单管理
Route::resource('/adminorder','Admin\Order\OrderController');
//品牌管理
Route::resource('/adminbrand','Admin\Brand\BrandController');
//商品管理
Route::resource('/admingoods','Admin\Goods\GoodsController');
//商品分类
Route::resource('/admincates','Admin\Cates\CatesController');