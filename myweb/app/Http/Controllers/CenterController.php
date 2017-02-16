<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CenterController extends Controller
{
	// 加载个人中心主页模板
    public function getIndex(){
    	return view('center.index');
	}

	// 以下是加载个人中心左侧导航栏
	
	// 加载退换货模板
	public function getReturns(){
		return view('center.returns');
	}

	// 加载我的订单模板
	public function getOrder(){
		$userid=1; //session获取
		// $list=[];
		// $data=DB::table('orders as o')->join('shopping as s','o.addtime','=','s.addtime')->where('o.userid',$userid)->select('s.*','o.*','o.addtime as time')->get();
		$data=DB::table('orders')->where('userid',$userid)->get();
		// dd($data);
		// dd($order);
		// $list[0]['addtime']=$data[0]['addtime'];
		// $list[0]['addressid']=$data[0]['addressid'];
		// $list[0]['1']=$data;

		// dd($list);
		return view('center.order',['data'=>$data]);
	}

	// 加载商品评价模板
	public function getEvaluate(){
		return view('center.evaluate');
	}

	// 加载收货地址模板
	public function getPlace(){
		return view('center.place');
	}

	// 加载积分模板
	public function getIntegral(){
		return view('center.integral');
	}

	// 加载账户余额模板
	public function getBalance(){
		return view('center.balance');
	}

	// 加载我的资料模板
	public function getData(){
		return view('center.data');
	}

	// 加载礼品卡模板
	public function getGift(){
		return view('center.gift');
	}

	// 加载商品提问模板
	public function getQuiz(){
		return view('center.quiz');
	}

	// 加载关联账户模板
	public function getRelevance(){
		return view('center.relevance');
	}

	// 加载账户安全模板
	public function getSafety(){
		return view('center.safety');
	}

	// 加载定制订单模板
	public function getCustom(){
		return view('center.custom');
	}


}
