<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
// 搭建后台主页
Route::get('/admin','AdminController@index');
//后台控制器
Route::controller('/admin/user','UserController');
//商品分类后台控制器
Route::controller('/admin/type','TypeController');
//Route::controller('/admin/article','ArticleController');

//前台个人中心控制器
Route::controller('/home/center','CenterController');
//详情页 列表页控制器
Route::controller('/home/gt','GtController');
//后台商品管理控制器
Route::controller('/admin/goods','GoodsController');
//后台商品详情控制器
Route::controller('/admin/picdetail','PicdetailController');
//后台订单控制器
Route::controller('/admin/orders','OrdersController');
//后台轮播图控制器
Route::controller('/admin/lunbo','LunboController');
//前台首页控制器
Route::controller('/home','IndexController');

//后台商品评论控制器
Route::controller('/admin/article','ArticleController');

//后台登录界面
Route::controller('/admin/login','AdminloginController');
Route::group(['middleware'=>'admin'],function (){
	// 搭建后台
	Route::get('/admin','AdminController@index');
	Route::controller('/admin/user','UserController');
	Route::controller('/admin/type','TypeController');
	Route::controller('/admin/userinfo','PicnameController');

	Route::controller('/admin/goods','GoodsController');
	Route::controller('/admin/picdetail','PicdetailController');
	Route::controller('/admin/orders','OrdersController');
});


// 搭建前台


// Route::controller('/admin/article','ArticleController');

Route::controller('/admin/article','ArticleController');


//测试验证码
Route::get('/code','LoginController@code');
//前台登录
Route::controller('/home/login','LoginController');
//前台注册
Route::controller('/home/register','RegisterController');
//前台用户个人中心


Route::group(['middleware'=>'login'],function (){
	
	//前台个人中心
	Route::controller('/home/center','CenterController');
	// 购物车
	Route::controller('/home/shopping','ShopController');

	// 选择下单地址  any->这个路由可以使用post方式和get方式请求
	Route::any('/home/order/add','OrderController@add');

	// 生成订单
	Route::post('/home/order/insert','OrderController@insert');

	Route::any('/home/order/orderok','OrderController@orderok');
	Route::controller('/home/userinfo','UserinfoController');

	// 执行添加下单地址
	Route::controller('/home/address','AddressController');
});
Route::controller('/home/forget','forgetController');
//前台主页
Route::controller('/home','IndexController');




