<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Hash;
class AdminloginController extends Controller
{
	//加载后台登录模板
    public function getIndex(){
		return view('admin.login');
	}
	//验证数据
	public function postDologin(Request $request){
		//获取表单传输数据
    	$name = $request -> input('name');
    	$pass = $request -> input('pass');
		
    	//验证账号是否为空
    	if(empty($name)){
    		return back()->with('error','用户名不能为空');
    	}
    	//验证账号密码是否存在
    	$rename = DB::table('users')->where('username',$name)->get();
		
    	if($rename){
    		//验证密码是否为空
    		if(empty($pass)){
    			return back()->with('error','请输入密码');
    		}
    		//验证账号密码是否正确(哈希验证)
    		$repass =Hash::check($pass,DB::table('users')->value('pass'));
			
    		if($repass){
				if($rename[0]['vip']!=0){
					return back()->with('error','权限不够,无法登陆后台');
				}
    			session(['home'=>$rename]);
    			return redirect('/admin')->with('success','登录成功');
    		}else{
    			return back()->with('error','用户名或密码不正确');
    		}
    	}else{
    		return back()->with('error','用户名不存在'); 
    	}
	}
}
