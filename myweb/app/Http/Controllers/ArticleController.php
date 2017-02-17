<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
   	public function getIndex(Request $request){

        $data=\DB::table('goodswhat')
              ->join('users','goodswhat.userid','=','users.id')
              ->join('goods','goodswhat.goodsid','=','goods.id')
              ->where(function($query) use ($request){
        	//封装搜索条件
		        	if($request->input('keyword')){
		        		$query->where('aduserid','like','%'.$request->input('keyword').'%')
		        		->orwhere('goods','like','%'.$request->input('keyword').'%')
		        		->orwhere('username','like','%'.$request->input('keyword').'%');
		        	}
              })
              ->select('goodswhat.*','goods.goods','users.username')
              ->paginate($request->input('num',5));
        //生成分页
        // $data->render();
    	//查询所有的商品信息
         // dd($data);
    	return view('article.index',['list'=>$data,'request'=>$request->all()]);
    }

   public function getEdit($id){

   	$data=\DB::table('goodswhat')->where('id',$id)->first();
    
    return view('article.edit',['vo'=>$data]);
   }

   public function postUpdate(Request $request){

     $data=$request->except('_token');
     // dd($data);
     $data['aduserid']=1;
     $data['hftime']=time();
     $res=DB::table('goodswhat')->where('id',$data['id'])->update($data);
     if($res){
    		return redirect('/admin/article/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改失败');
    	}
   }

   public function postAdd(Request $request){
       // dd($request);
   	   $goodsid=$request->input('goodsid');
   	   // dd($goodsid);
   	   $data=$request->except('_token');
   	   // $goods=DB::table('goods')->where('id',$goodsid)->value('goods');
   	   $data['goodsid']=$goodsid;
   	   $data['twtime']=time();
   	   $data['status']=0;
       $data['userid']=1;
       $res=DB::table('goodswhat')->insert($data);
       return back();
   } 
}
