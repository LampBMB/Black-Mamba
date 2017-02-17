<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Lunbocontroller extends Controller
{
    
    public function getAdd($id=''){
        $goods=self::getDetail();
        return view('lunbo.add',['list'=>$goods]);
    }

    public static function getDetail(){
    	// select *,concat(path,id) as paths from types order by paths 原生态语句
    	// concat() mysql函数 连接字段并起别名paths
    	$goods=DB::table('goods')->get();
    	// dd($goods);
    	foreach($goods as $k=>$v){
    		$goods[$k]['goods']=$v['goods'];
    	}
    	// dd($goods);
    	return $goods;
    }

    public function postInsert(Request $request){
        // dd($request);
    	$this->validate($request,[
        	'goodsid'=>'required',
        	'picname'=>'required'
        ],[
            'goodsid.required'=>'请选择商品',
            'picname.required'=>'请添加轮播图片'
        ]);

        $data=$this->dealPic($request);
    	$res=DB::table('lunbo')->insert($data);

    	if($res){
    		return redirect('/admin/lunbo/index')->with('success','添加成功');
    	}else{
    		return back()->with('error','添加失败'); 
        }
    }


    public function dealPic(Request $request){

    	$data=$request->except('_token');

    	if($request->hasFile('picname')){
            //图片保存的名称
            $name=time().rand(1000,9999).'.'.$request->file('picname')->getClientOriginalExtension();
            //执行上传
    		$request->file('picname')->move(\Config::get('app.upload_dir'),$name);
    		$data['picname']=trim(\Config::get('app.upload_dir').$name,'.');
        }

        return $data;
    }

    public function getIndex(Request $request){
    	
          $data=\DB::table('lunbo')
              ->join('goods','lunbo.goodsid','=','goods.id')
              ->where(function($query) use ($request){
        	//封装搜索条件
		        	if($request->input('keyword')){
		        		$query->where('lunbo.id','like','%'.$request->input('keyword').'%')
		        		->orwhere('goods.goods','like','%'.$request->input('keyword').'%');
		        	}
              })
              ->select('lunbo.*','goods.goods')
              ->paginate($request->input('num',5));
    
    	return view('lunbo.index',['list'=>$data,'request'=>$request->all()]);
    }

    public function getDel($id){
    	// dd($id);
    	$g=\DB::table('lunbo')->where('id',$id)->first();
        // dd($g);
    	//执行删除该商品
    	if(\DB::table('lunbo')->where('id',$id)->delete()){

    		if(file_exists('.'.$g['picname'])){
                unlink('.'.$g['picname']);
            }
            return redirect('/admin/lunbo/index')->with('success','删除成功');
    	}else{
    		return back()->with('error','删除失败');

    	}
    }

     public function getEdit($id){
     	$data=\DB::table('lunbo')->where('id',$id)->first();
    	// dd($data);
    	// dd($g['goods']);
    	return view('lunbo.edit',['vo'=>$data,'list'=>self::getDetail()]);
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

       $res=\DB::table('lunbo')->where('id',$data['id'])->update($data);
    	if($res){
    		return redirect('/admin/lunbo/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改失败');
    	}

    }

    public function delPic(Request $request){
        // dd($request);

    	$id=$request->input('id');
        $g=\DB::table('lunbo')->where('id',$id)->first();
        
        //删除upload的图片
        if(!($g['picname']!==$request->input('picname'))){
	        if(file_exists('.'.$g['picname'])){
	                unlink('.'.$g['picname']);
	        }
	    }
    }

}
