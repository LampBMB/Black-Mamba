<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	// 加载商城主页模板
    public function getIndex(){
    	return view('welcome');
    }

    // 加载商品分类模板(主页导航跳转页面)
    public function getGoodtype(){
    	return view('home.goodtype');
    }

    // 加载商品详情页
    public function getGooddetails(){
    	return view('home.gooddetails');
    }

    // 加载购物车模块
    public function getShopping(){
    	return view('home.shopping');
    }

    // 加载订单信息页
    public function getAddress(){
    	return view('home.address');
    }
}
