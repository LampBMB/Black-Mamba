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
        
        if(empty($request->input('updateid'))){
            $data=$request->except('_token');
            $data['user_id']=session('home')[0]['id']; //session获取用户id
            $data['isdefault']=1; // 修改默认值为1
            $address=DB::table('addresses')->insert($data);
            if($address){
                return back();
            }
        }else{
            $address=DB::table('addresses')->where('id',$request->input('updateid'))->update($data);
            if($address){
                return back();
            }
    	}
    	
    }
    public function getDel(Request $request){
    	$addid=$request->input('addid');
    	DB::table('addresses')->where('id',$addid)->delete();

    }
    public function getUpdate(){
        $addid=$_GET['addid'];
        $data=DB::table('addresses')->where('id',$addid)->first();
        echo json_encode($data);
    }
}
