<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    // 加载添加表单
    public function getAdd(){
    	return view('user.add');
    }
    // 执行添加操作
    public function postInsert(Request $request){
    	// if(!$request->input('name')){
    	// 	return back()->withInput();
    	// }

    	// 1. 验证表单数据
    	$this->validate($request, [
	        'username' => 'required|unique:users', // 账号必填
	        'name'=>'required',
	        'repass'=>'same:pass|required',
	        'email'=>'required|email'
	    ],[
	    	'username.required'=>'账号不可为空',
	    	'username.unique'=>'账号已存在',
	    	'name.required'=>'姓名必须填写',
	    	'repass.same'=>'两次输入密码不一致',
	    	'repass.required'=>'确认密码必须填写',
	    	'email.required'=>'邮箱不可为空',
	    	'email.email'=>'邮箱格式不正确'
	    ]);
    	// 只要程序执行到这 说明验证完全ok的 如果验证不通过 自动back 而且帮你做好闪存

 		// 2.数据处理
    	$data=$request->except('_token','repass');
    	
    	// 密码加密,每次密码加密结果都不一样 解密Hash::check();
    	$data['pass']=Hash::make($data['pass']); 
    	$data['token'] =str_random(50); //邮箱注册的身份验证

    	// 3.数据插入
    	$res=DB::table('users')->insert($data);
    	if($res){
    		return redirect('/admin/user/index')->with('success','添加成功'); //session('success'=>'添加成功');
    	}else{
    		return back()->with('error','添加失败'); //withInput 闪存
    		//session(['error'=>'添加失败']); session('error');
    		// 信息提示 闪存
    	}
    }
    // 用户的浏览
    public function getIndex(Request $request){
    	// 获取搜索的数据
    	// dd($request->all());
    	// 查询数据
    	$data=DB::table('users')->where(function($query) use($request){ 
    	// use 给当前匿名函数引入外部的$request变量
    	// query 就是数据库users的模型
    		if($request->input('keyword')){
    			// 按照name字段封装搜索
    			$query->where('username','like','%'.$request->input('keyword').'%')
    				// 按照email字段封装搜索
    				  ->orWhere('email','like','%'.$request->input('keyword').'%');
    		}
    		

    	})->paginate($request->input('num',5)); //指定按照2条数据分页
    	// 分页页码
    	// dd($data->render());
    	return view('user.index',['list'=>$data,'request'=>$request->all()]);
    }
    // 删除数据
    public function getDel($id){
    	$res=DB::table('users')->where('id',$id)->delete();
    	if($res){
    		return redirect('/admin/user/index')->with('success','删除成功');
    	}else{
    		return back()->with('error','删除失败');
    	}
    }
    // 加载修改表单
    public function getEdit($id){
    	return view('user.edit',[
    		'list'=>DB::table('users')->where('id',$id)->first()]);
    }
    // 执行修改
    public function postUpdate(Request $request){
    	$data=$request->except('_token');
    	$res=DB::table('users')->where('id',$data['id'])->update($data);
    	if($res){
    		return redirect('/admin/user/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改失败');
    	}
    }

}
