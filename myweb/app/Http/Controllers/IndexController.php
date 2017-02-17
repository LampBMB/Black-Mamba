<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	// 加载商城主页模板
    public function getIndex(){

        $data=DB::table('goods')->where('typeid',11)->get();
        // dd($data);
        $data1=DB::table('goods')->where('typeid',29)->get();

        $data2=DB::table('goods')->where('typeid',30)->get();
        
        return view('welcome',['list'=>$data,'list1'=>$data1,'list2'=>$data2]);
    }

    // 加载商品详情页
    public function getGooddetails(){
    	return view('home.gooddetails');
    }

    // 加载购物车模块
    public function getShopping(){
    	return view('home.shopping');
    }

    // 加载订单信息页
    public function getAddress(){
    	return view('home.address');
    }

    public static function daohang(){
        $type=DB::table('types')->where('pid','=',0)->get();
            // dd($type);
        foreach($type as $k=>$v){
            $type[$k]['son']=[];
            $type1=DB::table('types')->where('pid',$v['id'])->get();
            $type[$k]['son']=$type1;
        }
        // dd($type);
       return view('layout.daohang',['type'=>$type]);
   }

   public static function lunbo(){
      $data=DB::table('lunbo')->get();
      // dd($data);
      // $data
      return view('layout.lunbo',['list'=>$data]);
   }
  
}
