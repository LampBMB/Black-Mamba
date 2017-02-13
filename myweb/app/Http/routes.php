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
Route::controller('/admin/user','UserController');
Route::controller('/admin/type','TypeController');
Route::controller('/admin/article','ArticleController');
Route::controller('/home/center','CenterController');
//前台登录
Route::controller('/home/login','LoginController');
//测试验证码
Route::get('/code','LoginController@code');
//前台注册
Route::controller('/home/register','RegisterController');

Route::controller('/admin/goods','GoodsController');
Route::controller('/admin/picdetail','PicdetailController');
Route::controller('/admin/orders','OrdersController');
Route::controller('/home','IndexController');


