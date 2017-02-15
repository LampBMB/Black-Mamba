<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Gregwar\Captcha\CaptchaBuilder;
use Session;
use Hash;
class LoginController extends Controller
{
	//加载登录界面
    public function getIndex(){
    	return view('home.login');
    }

    //执行普通登陆 验证登录 账号 密码 符合验证规则
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
    			session(['home'=>$rename]);
    			return redirect('/home')->with('success','登录成功');
    		}else{
    			return back()->with('error','用户名或密码不正确');
    		}
    	}else{
    		return back()->with('error','用户名不存在'); 
    	}
    }

    //执行快速登录
    public function postPhonelogin(Request $request){
    	//图片验证码是否正确
    	if(session('code')!=$request->input('code')){
    		return back()->with('error','验证码不正确');
    	}
    }
    //快速登录执行手机验证码
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
				echo 'true';
			}else{
				echo 'false';
			}
		}
    }
    //快速登录验证码核对
    public function getPiccode(Request $request){
    	$code = $request->input('code');
    	$phonecode = $request->input('phonecode');
    	if($code!=session('code')){
    		return 1;
    	}
    	if($phonecode!=session('phonecode')){
    		return 2;
    	}
    }
    //退出登录
    public function getOutlogin(){
    	session()->forget('home');
    	return redirect('/');
    }
    //测试验证码
    public function code(){
		//生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 120, $height = 60, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        // Session::flash('milkcaptcha', $phrase);
        Session(['code'=>$phrase]);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
       
    }
}
