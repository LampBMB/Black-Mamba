<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{   
	//查看
    public function getIndex(Request $request){

      $userid=1;
          $data=DB::table('orders')->where('userid',$userid)->get();
          foreach($data as $k=>$v){
            if($userid==$v['userid']){
              $intime=$v['intime'];
              $aid=$v['addressid'];
            }
      $data[$k][]=DB::table('shopping')->where('addtime',$intime)->get();
      $data[$k][]=DB::table('addresses')->where('id',$aid)->get();

    }

    	return view('orders.index',['data'=>$data]);
    }
    
    //加载修改模板
    public function getEdit(Request $request){
      // echo($request->input('id'));
     	$data=DB::table('orders')->where('id',$request->input('id'))->update(['status'=>2]);
      if($data){
        echo 'yes';
      }else{
        echo 'no';
      }
    	// dd($data);
    	// dd($g['goods']);
    	// return view('orders.edit',['vo'=>$data]);
    } 

    //修改
    public function postUpdate(Request $request){
         
        $data=$request->except('_token');
          
          // dd($data);
    	$res=\DB::table('orders')->where('id',$data['id'])->update($data);
    	if($res){
    		return redirect('/admin/orders/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改失败');
        }
    }

    public function getIndexpic($id){
    	 
         $data=DB::table('detail')
              ->join('orders','detail.orderid','=','orders.id')
              ->join('goods','detail.goodsid','=','goods.id')
              ->where('detail.orderid',$id)
              ->select('detail.*','orders.order','goods.goods as g')
              ->get();
         // dd($data);
    	return view('orders.indexpic',['list'=>$data]);  
    }

   public function getHuishou(Request $request){
         $data=DB::table('orders')
              ->join('users','orders.uid','=','users.id')
              ->where('orders.status','3')
              ->where(function($query) use ($request){
        	//封装搜索条件
		        	if($request->input('keyword')){
		        		$query->where('id','like','%'.$request->input('keyword').'%')
		        		->orwhere('uid','like','%'.$request->input('keyword').'%')
		        		->orwhere('username','like','%'.$request->input('keyword').'%')
		        		->orwhere('linkman','like','%'.$request->input('keyword').'%');
		        	}
              })
              ->select('orders.*','users.username')
              ->paginate($request->input('num',5));
        //生成分页
        // $data->render();
    	//查询所有的商品信息
    	return view('orders.huishou',['list'=>$data,'request'=>$request->all()]);
    }
}