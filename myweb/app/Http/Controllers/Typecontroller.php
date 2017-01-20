<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Typecontroller extends Controller
{	
	// 分类的添加
    public function getAdd($id=''){ // 默认值处理
    	// 获取格式化类别数据
    	$type=self::getTypes();
    	return view('type.add',['list'=>$type,'id'=>$id]);
    }

    // 获取格式化类别数据
    public static function getTypes(){
    	// select *,concat(path,id) as paths from types order by paths 原生态语句
    	// concat() mysql函数 连接字段并起别名paths
    	$type=DB::table('types')->select('*',DB::raw('concat(path,id) as paths'))->orderBy('paths')->get();
    	foreach($type as $k=>$v){
    		// 分类的级别 0->顶级 1->一级
    		// dd($type[$k]['name']);
    		$num=count(explode(',',$v['path']))-2;
    		$type[$k]['name']=str_repeat('|>>',$num).$v['name'];
    		// echo (count(explode(',',$v['path']))-2).'--'.$v['name'].'<br>';
    	}
    	// dd($type);
    	return $type;
    }

    // 执行插入
    public function postInsert(Request $request){
    	
    		
    	if($request->input('id')==0){
    		// 添加顶级类
    		$data['name']=$request->input('name');
    		$data['pid']=0;
    		$data['path']='0,';
    	}else{
    		// 添加某一个类下面的子类
    		$data['name']=$request->input('name');
    		$data['pid']=$request->input('id');// 子类的pid=父类的id
    		$path=DB::table('types')->where('id',$request->input('id'))->first()['path'];
    		$data['path']=$path.$request->input('id').',';


    	}
    	$res=DB::table('types')->insert($data);
    	if($res){
    		return redirect('/admin/type/index')->with('success','添加成功');
    	}else{
    		return back()->with('error','添加失败');
    	}
    }
    
    public function getIndex(){
    	// 查询所有分类
    	return view('type.index',['list'=>self::getTypes()]);
    }
    // 根据子类的pid转化为父类的类名
    public static function funame($pid){
    	$funame=DB::table('types')->where('id',$pid)->first()['name'];
    	echo empty($funame)?'顶级分类':$funame;
    }

    // 删除分类
    public function getDel($id){
    	// 如果该分类有子类不能删除 只能删除没有子类的分类
    	$data=DB::table('types')->where('pid',$id)->get();
    	if(count($data)>0){
    		return back()->with('error','该类存在子类,无法删除');
    	}else{
    		if(DB::table('types')->where('id',$id)->delete()){
    			return redirect('/admin/type/index')->with('success','删除成功');
    		}else{
    			return back()->with('error','删除失败');
    		}
    	}
    }
    // 加载修改表单
    public function getEdit($id){
    	// 左连接 右连接 内联 自连接
    	// select t1.*,t2.name as funame from types as t1,types as t2 where t1.pid=t2.id and t1.id=6;
    	$funame=DB::table('types as t1')
    					->join('types as t2','t1.pid','=','t2.id')
    					->select('t2.name as funame')
    					->where('t1.id',$id)
    					->first()['funame'];
    	$funame=empty($funame)?'顶级分类':$funame;
    	// dd($funame);
    	return view('type.edit',[
    		'list'=>DB::table('types')->where('id',$id)->first(),
    		'funame'=>$funame]);
    }
    // 执行修改
    public function postUpdate(Request $request){
    	$res=DB::table('types')->where('id',$request->input('id'))->update($request->only('name'));
    	if($res){
    		return redirect('/admin/type/index')->with('success','修改成功');
    	}else{
    		return back()->with('error','修改失败');
    	}
    }

    public function getArr(){
    	// $types=self::getAllType();
    	// $types=self::getTypeInfo($types,0);

    	// 放在缓存中(以文件的形式做缓存),1分钟
    	// \Cache::put('key',$types,1);

    	// 永久缓存 存入缓存后,代码都可注释
    	// \Cache::forever('key',$types);

    	// 获取缓存中的数据 适合固定的数据
    	return view('type.nav',['list'=>\Cache::get('key')]);
    }
    public static function getAllType(){
    	return DB::table('types')->get();
    }
    public static function getTypeInfo($types,$pid){
    	$data=[];
    	foreach($types as $k=>$v){
    		if($v['pid']==$pid){
    			$v['sub']=self::getTypeInfo($types,$v['id']);
    			$data[]=$v;
    		}
    	}
    	return $data;
    }


    // ->递归,但这种方法需多次访问数据库,增加数据库压力
    // public function getArr(){
    // 	dd(self::getPid(0)); //查询某一个分类下面的子类
    // }

    // public static function getPid($pid){
    // 	$res=DB::table('types')->where('pid',$pid)->get();
    // 	$data=[];
    // 	foreach($res as $k=>$v){
    // 		// 查询这pid下面的所有子类
    // 		$v['sub']=self::getpid($v['id']);
    // 		$data[]=$v;
    // 	}
    // 	return $data;
    // }
}
