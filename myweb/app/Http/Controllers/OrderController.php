<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    // 根据用户登录的id查询用户的下单地址
    public function add(){
    	// session获取当前登录用户的id 
    	$userid=1;// 当前登录者的下单地址
        $intime=time();
    	$address=DB::table('addresses')->where('user_id',$userid)->get();
        $oid=DB::table('orders')->insertGetId(['intime'=>$intime]);
        DB::table('shopping')->where('userid',$userid)->where('state',1)->update(['addtime'=>$intime,'oid'=>$oid]);
    	$shopping=DB::table('shopping')->where('state',1)->get();
    	return view('home.address',['address'=>$address,'shopping'=>$shopping]);
    }
    public function insert(Request $request){
        $addtime=time();
    	$data=$request->except('_token','oid','shoptime');
    	$data['addtime']=$addtime;
        DB::table('orders')->where('id',$request->input('oid'))->update($data);
        $res=DB::table('shopping')->where('addtime',$request->input('shoptime'))->update(['state'=>2]);
    	if($res){    
    		return redirect('/home/order/orderok');
    	}else{
    		return back();
    	}
    }
    public function orderok(){
    	return view('home.orderok');
    	// 结束页
    }

}
