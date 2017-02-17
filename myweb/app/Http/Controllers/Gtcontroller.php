<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Gtcontroller extends Controller
{
     public function getGoodtype($id){
     	// dd($id);
     	$data=DB::table('goods')->where('typeid',$id)->get();
     	// dd($data);
    	return view('home.goodtype',['list'=>$data]);
    }

    // 加载商品详情页
    public function getGooddetails($id){
    	$data=[];
    	$data=DB::table('goods')->where('id',$id)->get();

    	foreach($data as $k=>$v){}
    	     $data[$k]['info']=DB::table('picdetail')->select('size','color','picname as pic','id as picid')->where('goodsid',$id)->get();

    	$descr=$data[$k]['descr'];
    	// dd($descr);

	    $reg='/src=[\'"]?([^\'"]*)[\'"]?/';

        preg_match_all($reg,$descr,$arr);
        $data[$k]['descr']=$arr[1];

        $pic=$data[$k]['info'][$k]['pic'];
        // dd($pic);
        preg_match_all($reg,$pic,$brr);

        $data[$k]['pic']=$brr[1];

        //推荐
        $td=DB::table('goods')->where('typeid',$data[$k]['typeid'])->limit('4')->get();
        // dd($td);
        
        $sptw=DB::table('goodswhat')->where('goodsid',$id)->get();
        //商品分类
        // $type=DB::table('types')->where('id',$data[$k]['typeid'])->get();
        // dd($type);
        // dd($type[$k]['path']);
     //    $num=strlen($type[$k]['path'])/2;
        
     //    for($i=0;$i<=$num;$i++){
     //    	$sas=DB::table('types')->where('id',$type[$k]['pid'])->get();
     //    }
     //    dd($sas);
    	// dd($data);
    	return view('home.gooddetails',['list'=>$data,'tg'=>$td,'sptw'=>$sptw]);
    }



    public function getBy(Request $request){
        $picid=$request->input('picid');
        // dd($picid);

    	$data=DB::table('picdetail')->where('id',$picid)->get();
        // foreach($data as $k=>$v){}
        // dd($data);
       
        return response()->json([$data]);

    }

    public function getIngwc(Request $request){

         $picid=$request->input('picid');
         // // dd($picid);
         $da=DB::table('picdetail')->where('id',$picid)->select('goodsid','size','color')->get();
         // dd($da);
         $goodsid=$da[0]['goodsid'];
         $goods=DB::table('goods')
               ->join('picdetail','goods.id','=','picdetail.goodsid')
               ->select('goods.id as goodsid','goods.goods','goods.price','goods.picname','picdetail.size','picdetail.color')
               ->where('picdetail.id',$picid)
               ->get();
         $goods[0]['userid']=1;
         $goods[0]['addtime']=time();
         $goods[0]['state']=1;
         $goods[0]['num']=1;
         $res=DB::table('shopping')->insert($goods[0]);
        return response()->json([$res]);
         // dd($data);

    }

    public function getDd($id){
       // dd($id);
         $da=DB::table('picdetail')->where('id',$id)->select('goodsid','size','color')->get();
         // dd($da);
         $goodsid=$da[0]['goodsid'];
         $goods=DB::table('goods')
               ->join('picdetail','goods.id','=','picdetail.goodsid')
               ->select('goods.id as goodsid','goods.goods','goods.price','goods.picname','picdetail.size','picdetail.color')
               ->where('picdetail.id',$id)
               ->get();
         $goods[0]['userid']=1;
         $goods[0]['addtime']=time();
         $goods[0]['state']=1;
         $goods[0]['num']=1;
         $res=DB::table('shopping')->insert($goods[0]);
         return view('home.shopping');
    }
    
     //主页搜索
     public function getSousuo(Request $request){

      $data=\DB::table('types')
              ->where(function($query) use ($request){
          //封装搜索条件
              if($request->input('keyword')){
                $query->where('name','like','%'.$request->input('keyword').'%');
              }
            })
            ->select('id')->get();
            // dd($data);
              $id=$data[0]['id'];
      return redirect('/home/gt/goodtype/'.$id);
   }
    
}