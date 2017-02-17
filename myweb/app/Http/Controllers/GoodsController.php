<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Goods;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller{

    public function getAdd($id=''){
    	return view('goods.add',['list'=>TypeController::getTypes()]); 
    }

    public function postInsert(Request $request){
        $goods=new Goods;
        //数据处理  

        $goods=$this->dealData($request,$goods);
        // $goods->descr=$this->dealRequest($request);

        //完成数据的插入
        if($goods->save()){
        	return redirect('admin/goods/index')->with('success','添加成功');
        }else{
        	return back()->with('error','添加失败');
        }
    }
    
    //定义数据注入的方法
    public function dealData($request,$goods){
        // dd($request);

        $data=$this->dealRequest($request);

        $this->validate($request, [
        	'goods'=>'required',
        	'typeid'=>'required',
        	'price'=>'required',
        	'picname'=>'required',
        	'descr'=>'required',
        	'state'=>'required',
            'szie'=>'required'
        ],[
            'goods.required'=>'请输入商品名称',
            'typeid.required'=>'请选择商品种类',
            'price.required'=>'请输入商品价格',
            'picname.required'=>'请添加商品图片',
            'descr.required'=>'请添加商品描述',
            'state.required'=>'请选择商品状态',
            'szie.required'=>'请选择主图位置'
        ]);

    	$goods->goods=$request->input('goods');
    	$goods->typeid=$request->input('typeid');
    	$goods->price=$request->input('price');
        $goods->descr=$data['descr'];
    	$goods->state=$request->input('state');
        $goods->szie=$request->input('szie');


    	//上传图片
    	if($request->hasFile('picname')){
            //图片保存的名称
            $name=time().rand(1000,9999).'.'.$request->file('picname')->getClientOriginalExtension();
            //执行上传
    		$request->file('picname')->move(\Config::get('app.upload_dir'),$name);
    		$goods->picname=trim(\Config::get('app.upload_dir').$name,'.');
       
    	return $goods;
    }
}

     public function dealRequest($request){
     	// dd($request);
    	 $data=$request->except('_token');
    	 // dd($data);
    	 if($request->hasFile('descr')){
    	 	$newdescr=time().rand(1000,9999).'.'.$request->file('descr')->getClientOriginalExtension();
    	 	$data['pic']=\Config::get('app.upload_dir').$picname;
    	 }
    	 // dd($data);
    	 // $data['con']=$data['editorValue'];
    	 // unset($data['editorValue']);
    	 return $data;
    }

    public function getIndex(Request $request){
    	//实例化数据模型
    	// $goods=new Goods
        //模型类实现数据查找
        $data=Goods::where(function($query) use ($request){
        	//封装搜索条件
        	if($request->input('keyword')){
        		$query->where('goods','like','%'.$request->input('keyword').'%')
        		->orwhere('price','like','%'.$request->input('keyword').'%')
                ->orwhere('state','like','%'.$request->input('keyword').'%');
        	}
        })->paginate($request->input('num',5));
        //生成分页
        // $data->render();
    	//查询所有的商品信息
        
    	return view('goods.index',['list'=>$data,'request'=>$request->all()]);
    }

    //商品的删除
    public function getDel($id){
    	$g=\DB::table('goods')->where('id',$id)->first();//非关系型数据库 找不到商品自动加载404模板
        // dd($g);
    	//执行删除该商品
    	if(\DB::table('goods')->where('id',$id)->delete()){

    		if(file_exists('.'.$g['picname'])){
                unlink('.'.$g['picname']);
            }
            
            // 删除编译器上传的图片
            $reg='/src=[\'"]?([^\'"]*)[\'"]?/';
            preg_match_all($reg,$g['descr'],$arr);
        // dd($arr);
            foreach($arr[1] as $v){
                if(file_exists('.'.$v)){
                    unlink('.'.$v);
                }
            }
            // dd($arr);

            return redirect('/admin/goods/index')->with('success','删除成功');
    	}else{
    		return back()->with('error','删除失败');

    	}
    }

    public function getEdit($id){
    	$g=Goods::findOrFail($id);
    	// dd($g);
    	// dd($g['goods']);
    	return view('goods.edit',['vo'=>$g,'list'=>TypeController::getTypes()]);
    } 

    public function postUpdate(Request $request){
        // dd($request);
       
    
        $data=$request->except('_token');
       	if($request->hasFile('picname')){
            //图片保存的名称
            $name=time().rand(1000,9999).'.'.$request->file('picname')->getClientOriginalExtension();
            //执行上传
    		$request->file('picname')->move(\Config::get('app.upload_dir'),$name);
    		$data['picname']=trim(\Config::get('app.upload_dir').$name,'.');
    	}

       $this->delPic($request);
       // $data['descr']=$req['descr'];
        // dd($data);

       $res=\DB::table('goods')->where('id',$data['id'])->update($data);
    	if($res){
    		return redirect('/admin/goods/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改失败');
    	}

    }

    public function delPic(Request $request){
        // dd($request);

    	$id=$request->input('id');
        $g=\DB::table('goods')->where('id',$id)->first();
        
        //删除upload的图片
        if(!($g['picname']!==$request->input('picname'))){
	        if(file_exists('.'.$g['picname'])){
	                unlink('.'.$g['picname']);
	        }
	    }

        // 删除编译器上传的图片
	    if(!($g['descr']==$request->input('descr'))){
	        $reg='/src=[\'"]?([^\'"]*)[\'"]?/';
	        preg_match_all($reg,$g['descr'],$arr);
	    // dd($arr);
	        foreach($arr[1] as $v){
	            if(file_exists('.'.$v)){
	                unlink('.'.$v);
	            }
	        }
	    }
    }

    public function delDetail($id){
        $g=\DB::table('picdetail')->where('goodsid',$id)->get();
         
        DB::table('picdetail')->where('goodsid',$id)->delete();
            // 删除编译器上传的图片
    }

    public function Dellb($id){
        // dd($id);
        $g=\DB::table('lunbo')->where('goodsid',$sid)->get();
        // dd($g);
        //执行删除该商品
        if(\DB::table('lunbo')->where('goodsid',$id)->delete()){

            if(file_exists('.'.$g['picname'])){
                unlink('.'.$g['picname']);
            }
            return redirect('/admin/lunbo/index')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');

        }
    }

}