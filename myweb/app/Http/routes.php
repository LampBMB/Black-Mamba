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


