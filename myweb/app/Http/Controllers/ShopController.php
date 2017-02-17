<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function getIndex(){
    	// 详情插入到购物车
    	$userid=session('home')[0]['id'];// session获取当前登录用户的id
    	$list=DB::table('shopping')->where('userid',$userid)->where('state',1)->get();
    	return view('home.shopping',['list'=>$list]);
    }
    // 删除购物车商品
    public function getDel(Request $request){
    	DB::table('shopping')->where('id',$request->input('shopid'))->delete();
    }
    // 实现购物车商品数量加减
    public function getUpdate(Request $request){
    	DB::table('shopping')->where('id',$request->input('id'))->update(['num'=>$request->input('num')]);
    	

    }
}
