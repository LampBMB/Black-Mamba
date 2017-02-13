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
Route::controller('/home','LoginController');
//测试验证码
Route::get('/code','LoginController@code');
Route::controller('/home/register','RegisterController');

