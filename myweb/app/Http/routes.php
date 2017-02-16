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
// 搭建后台
Route::get('/admin','AdminController@index');
Route::controller('/admin/user','UserController');
Route::controller('/admin/type','TypeController');
Route::controller('/admin/goods','GoodsController');
Route::controller('/admin/picdetail','PicdetailController');
Route::controller('/admin/orders','OrdersController');

// 搭建前台
// 个人中心
Route::controller('/home/center','CenterController');

// 购物车
Route::controller('/home/shopping','ShopController');

// 选择下单地址  any->这个路由可以使用post方式和get方式请求
Route::any('/home/order/add','OrderController@add');

// 生成订单
Route::post('/home/order/insert','OrderController@insert');

Route::any('/home/order/orderok','OrderController@orderok');

// 执行添加下单地址
Route::controller('/home/address','AddressController');

// 前台主页
Route::controller('/home','IndexController');//放在最下


