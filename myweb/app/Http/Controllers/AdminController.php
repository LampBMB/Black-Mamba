<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
    	$id = session('home')[0]['id'];
    	
    	return view('admin.index',['list'=>DB::table('users')->where('id',$id)->first()]);
    }
    public function getUserinfo(){
    	$id = session('home')[0]['id'];
		$data = DB::table('users')->where('id',$id)->get();
		return view('admin.userinfo',['list'=>$data[0]]);
    	
    }
    public function postPicname(Request $request){
		if($request->hasFile('picname')){
			$sufffix = $request->file('picname')->getClientOriginalExtension();
			$picname=date('Ymd',time()).rand(0000,9999).'.'.$sufffix;
			$request->file('picname')->move('./uploads',$picname);
			$data=$request->except(['_token','aa','PostalCode']);
			$data['picname']='/uploads/'.$picname;
			if(DB::table('users')->where('id',$data['id'])->update($data)){
				return redirect('/admin');
			}
		}else{
			$data=$request->except(['_token','aa','PostalCode']);
			if(DB::table('users')->where('id',$data['id'])->update($data)){
				return redirect('/admin');
			}
		}
	}
}
