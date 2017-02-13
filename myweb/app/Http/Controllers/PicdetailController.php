<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PicdetailController extends Controller
{
    
    public function getAdd($id=''){
        $goods=self::getDetail();
        return view('picdetail.add',['list'=>$goods]);
    }

    public static function getDetail(){
    	// select *,concat(path,id) as paths from types order by paths 原生态语句
    	// concat() mysql函数 连接字段并起别名paths
    	$goods=\DB::table('goods')->get();
    	// dd($goods);
    	foreach($goods as $k=>$v){
    		$goods[$k]['goods']=$v['goods'];
    	}
    	// dd($goods);
    	return $goods;
    }
    
    //商品添加
    public function postInsert(Request $request){

    	$this->validate($request,[
        	'goodsid'=>'required',
        	'size'=>'required',
        	'color'=>'required',
        	'picname'=>'required',
        	'store'=>'required'
        ],[
            'goodsid.required'=>'请选择商品种类',
            'size.required'=>'请输入商品尺码',
            'color.required'=>'请输入商品颜色',
            'picname.required'=>'请添加商品图片',
            'store.required'=>'请添加库存量'
        ]);

    	$data=$this->dealData($request);
    	$res=\DB::table('picdetail')->insert($data);

    	if($res){
    		return redirect('/admin/picdetail/index')->with('success','添加成功');
    	}else{
    		return back()->with('error','添加失败'); 
        }
    }
    
    //数据处理 
    public function dealData($request){
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

    //商品查看
    public function getIndex(Request $request){
  
        $data=\DB::table('picdetail')
              ->join('goods','picdetail.goodsid','=','goods.id')
              ->where(function($query) use ($request){
        	//封装搜索条件
		        	if($request->input('keyword')){
		        		$query->where('goodsid','like','%'.$request->input('keyword').'%')
		        		->orwhere('goods','like','%'.$request->input('keyword').'%')
		        		->orwhere('size','like','%'.$request->input('keyword').'%')
		        		->orwhere('color','like','%'.$request->input('keyword').'%')
		        		->orwhere('store','like','%'.$request->input('keyword').'%');
		        	}
              })
              ->select('picdetail.*','goods.goods')
              ->paginate($request->input('num',5));
        //生成分页
        // $data->render();
    	//查询所有的商品信息
    	return view('picdetail.index',['list'=>$data,'request'=>$request->all()]);
    }

    //删除数据
    public function getDel($id){
    	$g=\DB::table('picdetail')->where('id',$id)->first();//非关系型数据库 找不到商品自动加载404模板
        // dd($g);
    	//执行删除该商品
    	if(\DB::table('picdetail')->where('id',$id)->delete()){
            // 删除编译器上传的图片
            $reg='/src=[\'"]?([^\'"]*)[\'"]?/';
            preg_match_all($reg,$g['picname'],$arr);
        // dd($arr);
            foreach($arr[1] as $v){
                if(file_exists('.'.$v)){
                    unlink('.'.$v);
                }
            }
            // dd($arr);
            return redirect('/admin/picdetail/index')->with('success','删除成功');
    	}else{
    		return back()->with('error','删除失败');

    	}
    }
   
     public function getEdit($id){
     	$data=\DB::table('picdetail')->where('id',$id)->first();
    	// dd($data);
    	// dd($g['goods']);
    	return view('picdetail.edit',['vo'=>$data,'list'=>self::getDetail()]);
    } 

     public function postUpdate(Request $request){
        // dd($request);
       $data=$request->except('_token');

       $this->delPic($request);
       // $data['descr']=$req['descr'];
        // dd($data);

       $res=\DB::table('picdetail')->where('id',$data['id'])->update($data);
    	if($res){
    		return redirect('/admin/picdetail/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改失败');
    	}

    }

    public function delPic(Request $request){
        // dd($request);

    	$id=$request->input('id');
        $g=\DB::table('goods')->where('id',$id)->first();
        // 删除编译器上传的图片
	    if(!($g['picname']!==$request->input('picname'))){
	        $reg='/src=[\'"]?([^\'"]*)[\'"]?/';
	        preg_match_all($reg,$g['picname'],$arr);
	    // dd($arr);
	        foreach($arr[1] as $v){
	            if(file_exists('.'.$v)){
	                unlink('.'.$v);
	            }
	        }
	    }
    }


}
