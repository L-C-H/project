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
	Route::resource('/adminlogin','Admin\Login\LoginController');

Route::group(['middleware'=>'adminlogin'],function(){
	
	//后台首页
	Route::resource("/admin","Admin\AdminController");
	//管理员管理(后台)
	Route::resource('/adminuser','Admin\User\UserController');
	    //分配角色
        Route::get("/adminrole/{id}","Admin\User\UserController@role");
        //保存角色
        Route::post("/adminsaverole","Admin\User\UserController@saverole");
        //角色管理
        Route::resource("/adminrolelist","Admin\User\RolelistController");
           //删除权限
           // Route::get("/adminlist","Admin\User\RolelistController@del");
        //分配权限
        Route::get("/adminauth/{id}","Admin\User\RolelistController@auth");
        //保存权限
        Route::post("/saveauth","Admin\User\RolelistController@saveauth");

	//会员管理(前台)
	Route::resource('/adminmember','Admin\Member\MemberController');

		//会员管理删除
		Route::get('/adminmemberdel/{id}','Admin\Member\MemberController@del');
		//会员管理ajax上下架
		Route::get('/adminmemberdis','Admin\Member\MemberController@display');
		//密码修改
		Route::get('/adminmemberpwd/{id}','Admin\Member\MemberController@p');
		Route::get('/adminmemberpupdate/{id}','Admin\Member\MemberController@pupdate');
		//删除会员管理
		Route::resource('/adminmemberdels','Admin\Member\MemberdelController');
			//干掉删除的用户
			Route::get('/adminmemberthrow','Admin\Member\MemberdelController@del');
			//还原删除的用户
			Route::get('/adminmemberresert/{id}','Admin\Member\MemberdelController@resert');
		//浏览会员管理
		Route::resource('/adminmemberrecord','Admin\Member\MemberrecordController');

	//轮播图管理
	Route::resource('/adminrotation','Admin\Rotation\RotationController');
		//轮播图是否显示
		Route::get('/adminrotationdis','Admin\Rotation\RotationController@display');
		//轮播图ajax删除
		Route::get('/adminrotationdel','Admin\Rotation\RotationController@del');
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
		Route::get('/adminlinkdel','Admin\Link\LinkController@del');

	//评价管理
	Route::resource('/adminevaluate','Admin\Evaluate\EvController');
		Route::get('/adminevaluatedel','Admin\Evaluate\EvController@del');

	//意见反馈
	Route::resource('/adminfeedback','Admin\Feedback\FbController');

	//物流管理
	Route::resource('/adminlogistics','Admin\Logistics\LogController');

	//订单管理
	Route::resource('/adminorder','Admin\Order\OrderController');
		Route::get('/adminorderadd/{id}','Admin\Order\OrderController@add');
	//品牌管理
	Route::resource('/adminbrand','Admin\Brand\BrandController');
		//品牌删除
		Route::get('/adminbrandel','Admin\Brand\BrandController@del');
		//下架品牌
		Route::get('/adminbrandsta','Admin\Brand\BrandController@sta');
	//商品管理
	Route::resource('/admingoods','Admin\Goods\GoodsController');
		//商品删除
		Route::get('/admingoodsdel','Admin\Goods\GoodsController@del');
		//下架商品
		Route::get('/admingoodssta','Admin\Goods\GoodsController@sta');
	//商品无限分类
	Route::resource('/admincates','Admin\Cates\CatesController');
		//商品分类ajax删除
		Route::get('/admincatessss','Admin\Cates\CatesController@del');
		//ajax发布
		Route::get('/admincatesdis','Admin\Cates\CatesController@display');
	//商品打折管理
	Route::resource('/adminsale','Admin\Goods\SaleController');
});

//前台模块

Route::resource("/Home","Home\IndexController");

//搜索页
Route::resource('/Homesearch','Home\SearchController');
//商品列表控制器
Route::resource('/Homelist','Home\ListController');

//打折商品列表控制器
Route::resource('/Homesale','Home\SaleController');

//登录控制器
Route::resource('/Homelogin','Home\LoginController');
	//使用手机号找回密码
	//1.
	Route::resource('/forget1','Home\Forget\Forget1Controller');
		//手机号登录
		Route::get('/checkphone','Home\Forget\Forget1Controller@checkphone');
		//获取短信验证码
		Route::get('/sendphone','Home\Forget\Forget1Controller@send');
		// 手机验证码
		Route::get('/checkcode','Home\Forget\Forget1Controller@pcode');
	//2.
	Route::resource('/forget2','Home\Forget\Forget2Controller');
	//3.
	Route::resource('/forget3','Home\Forget\Forget3Controller');
//手机登录控制器
Route::resource('/Homephonelogin','Home\PhoneloginController');
	//调用短信接口
	Route::get('/checkphone','Home\PhoneloginController@checkphone');
	//获取短信验证码
	Route::get('/sendphones','Home\PhoneloginController@send');
	// 手机验证码
	Route::get('/checkcode','Home\PhoneloginController@pcode');
//注册控制器
Route::resource('/Homeregister','Home\RegisterController');
	//激活
	Route::get("/jihuo",'Home\RegisterController@jihuo');
	//验证码测试
	Route::get('/code','Home\RegisterController@code');
	//邮箱
	Route::get('/checkemail','Home\RegisterController@checkemail');
	//调用短信接口
	Route::get('/checkphone','Home\RegisterController@checkphone');
	//获取短信验证码
	Route::get('/sendphone','Home\RegisterController@send');

	// Route::get('/sendphonesss','Home\RegisterController@sendMail');
	// 手机验证码
	Route::get('/checkcode','Home\RegisterController@pcode');

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
	Route::get('/Homepersonaladd/{id}','Home\PersonalController@add');
//购物车控制器
Route::resource('/Homeshopcar','Home\ShopcarController');
	//购物车数据写入到数据库
	Route::get('/Homeshopinsert','Home\ShopcarController@shopinsert');
	//购物车数量减
	Route::get('/Homeshopless','Home\ShopcarController@less');
	//购物车数量减
	Route::get('/Homeshopadd','Home\ShopcarController@add');
	//商品删除
	Route::get('/Homeshopdel','Home\ShopcarController@del');
	//清空购物车
	Route::get('/Homeshopclean','Home\ShopcarController@clean');
	
//订单页面
Route::resource('/Homeorder','Home\OrderController');

//订单提交控制器
Route::resource('/Homesuccess','Home\SuccessController');
	//支付宝接口调用
	Route::get("/pays/{id}","Home\SuccessController@pays");
	//通知给客户端的界面
	Route::get("/returnurl","Home\SuccessController@returnurl");
//结算控制器
Route::resource('/Homepay','Home\PayController');
	Route::post("/Homepayaddressadd","Home\PayController@addressadd");
//地址页面控制器
Route::resource('/Homeaddress','Home\AddressController');
	Route::get("/Homeaddressdel","Home\AddressController@del");
//地址添加
Route::resource('/addressadd','Home\AddController');
	//添加页面
	Route::get('/addr','Home\PayController@addr');
//友情链接页面控制器
Route::resource('/Homelink','Home\LinkController');
//注册成功
Route::get('/zc',function(){
	return view('Home.Register.resuccess');
});
