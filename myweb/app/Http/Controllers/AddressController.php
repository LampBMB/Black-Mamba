<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddressController extends Controller
{
	// 执行添加下单地址
    public function postAdd(Request $request){
    	$data=$request->except('_token');
    	$data['user_id']=1; //session获取用户id
    	$data['isdefault']=1; // 修改默认值为1
    	$address=DB::table('addresses')->insert($data);
    	if($address){
    		return back();
    	}
    }
    public function getDel(Request $request){
    	$addid=$request->input('addid');
    	DB::table('addresses')->where('id',$addid)->delete();
    }
}
