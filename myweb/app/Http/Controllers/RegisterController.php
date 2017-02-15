<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
class RegisterController extends Controller
{
    public function getIndex(){
		return view('home.register');
	}
	//注册验证方法
	public function postDoregister(Request $request){
		$name = $request->input('phone');
		$code = $request->input('phonecode');
		$pass = $request->input('phonepass');
		$rephonepass = $request->input('rephonepass');
		if($pass!=$rephonepass){
			return back()->with('error','两次密码输入不一致');
		}
		$pass = Hash::make($request->input('phonepass'));
		if($code!=session('phonecode')){
			return back()->with('error','手机验证码不正确');
		}
		if(DB::table('users')->insert(['username'=>$name,'pass'=>$pass])){
			$data = DB::table('users')->where('username',$name)->get();
			session(['home'=>$data]);
			return redirect('/home')->with('success','注册成功');
		}else{
			return back()->with('error','注册失败');
		}
	}
	//注册手机短信验证
	public function getPhone(Request $request){
		$curl = new \Curl\Curl();
		$code = rand(0000,9999);
		session(['phonecode'=>$code]);
		$curl->get('http://lamphmb.applinzi.com/index.php?to='.$request->input('phone').'&com='.\Config::get('app.com').'&code='.$code.'&time=3');
		if($curl->error){
			echo $curl->error_code;
		}else{
			$res = $curl->response;
			preg_match('/{[^<]*}/',$res,$arr);
			$res = $arr[0];
			$res = json_decode($res,true);
			if($res['resp']['respCode']=='000000'){
				echo '发送短信成功';
			}else{
				echo '发送短信失败';
			}
		}
	}
}
