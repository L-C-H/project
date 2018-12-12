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
//登录页面
	Route::get('/adminlogin',function(){
		return view('Admin.Login.login');
	});

Route::group([],function(){
	
	//后台首页
	Route::get('/admin',function(){
		return view('Admin.index');
	});
	//管理员管理(后台)
	Route::resource('/adminuser','Admin\User\UserController');
	//管理员权限
	Route::resource('/adminrole','Admin\User\RoleController');
	//会员管理(前台)
	Route::resource('/adminmember','Admin\Member\MemberController');
	//密码
	Route::get('/adminmemberpwd/{id}','Admin\Member\MemberController@p');
	Route::get('/adminmemberpupdate/{id}','Admin\Member\MemberController@pupdate');
	//删除会员管理
	// Route::resource('/adminmemberdel','Admin\Member\MemberdelController');
	//浏览会员管理
	Route::resource('/adminmemberrecord','Admin\Member\MemberrecordController');
	//轮播图管理
	Route::resource('/adminrotation','Admin\Rotation\RotationController');
	//公告管理
	Route::resource('/adminannounce','Admin\Announce\AnnounceController');
	//广告管理
	Route::resource('/adminadvertisement','Admin\Advertisement\AdController');
		//广告删除
		Route::get('/adminadvertisementdel','Admin\Advertisement\AdController@del');
		//下架广告
		Route::get('/adminadvertisementsta','Admin\Advertisement\AdController@sta');

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
	//商品无限分类
	Route::resource('/admincates','Admin\Cates\CatesController');
	//商品分类ajax删除
	Route::get('/admincatessss','Admin\Cates\CatesController@del');
	//ajax发布
	Route::get('/admincatesdis','Admin\Cates\CatesController@display');
	//会员管理ajax删除
	Route::get('/adminmemberdel','Admin\Member\MemberController@del');
});



//前台页面
Route::get('/', function () {
    return view('index');
});

//商品列表控制器
Route::resource('/Homelist','Home\ListController');

//打折商品列表控制器
Route::resource('/Homesale','Home\SaleController');

//登录控制器
Route::resource('/Homelogin','Home\LoginController');

//手机登录控制器
Route::resource('/Homephonelogin','Home\PhoneloginController');

//注册控制器
Route::resource('/Homeregister','Home\RegisterController');

//公告控制器
Route::resource('/Homenotice','Home\NoticeController');

//商品详情控制器
Route::resource('/Homeinfo','Home\InfoController');

//收藏夹控制器
Route::resource('/Homecollect','Home\CollectController');

//品牌页控制器
Route::resource('/Homebrand','Home\BrandController');

//个人主页控制器
Route::resource('/Homepersonal','Home\PersonalController');

//购物车控制器
Route::resource('/Homeshopcar','Home\ShopcarController');

//订单提交控制器
Route::resource('/Homesuccess','Home\SuccessController');
//结算控制器
Route::resource('/Homepay','Home\PayController');

//地址页面控制器
Route::resource('/Homeaddress','Home\AddressController');