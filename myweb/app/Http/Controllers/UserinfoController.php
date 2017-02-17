<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserinfoController extends Controller
{
	public function getIndex(Request $request){
		$id = session('home')[0]['id'];
		$data = DB::table('users')->where('id',$id)->get();
		return view('center.data',['list'=>$data[0]]);
	}
	public function postEdit(Request $request){
		if($request->hasFile('picname')){
			$sufffix = $request->file('picname')->getClientOriginalExtension();
			$picname=date('Ymd',time()).rand(0000,9999).'.'.$sufffix;
			$request->file('picname')->move('./uploads',$picname);
			$data=$request->except(['_token','aa','PostalCode']);
			$data['picname']='/uploads/'.$picname;
			if(DB::table('users')->where('id',$data['id'])->update($data)){
				return redirect('/home/userinfo');
			}
		}else{
			$data=$request->except(['_token','aa','PostalCode']);
			if(DB::table('users')->where('id',$data['id'])->update($data)){
				return redirect('/home/userinfo');
			}
		}
	}
}
