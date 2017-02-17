@extends('layout.adminindex')
@section('con')
<script type="text/javascript" charset="utf-8" src="/ue/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ue/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/ue/lang/zh-cn/zh-cn.js"></script>

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>商品添加</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form action="/admin/goods/insert" class="mws-form" method="post" enctype="multipart/form-data">
    		{{csrf_field()}}
    		<div class="mws-form-inline">
            <div class="mws-form-row">
				<label class="mws-form-label">商品分类</label>
				<div class="mws-form-item">
				   <select class="small" name="typeid">
                            <option value="0">顶级分类</option>
                            @foreach($list as $v)
                            <option value="{{$v['id']}}">{{$v['name']}}</option>
                            @endforeach
                   </select>
				</div>
            </div>

			<div class="mws-form-row">
				<label class="mws-form-label">商品名称</label>
				<div class="mws-form-item">
					<input type="text" class="small" name="goods" value="">
				</div>
			</div>
			<div class="mws-form-row">
				<label class="mws-form-label">商品单价</label>
				<div class="mws-form-item">
					<input type="text" class="small" name="price" value="">
				</div>
			</div>
            <div class="mws-form-row">
                <label class="mws-form-label">商品主图</label>
                <div class="mws-form-item">
                    <input type="file" class="small" name="picname" value="">
                </div>
            </div>
            <div class="mws-form-row">
                <label class="mws-form-label">商品描述</label>
                 <div class="mws-form-item">
                    <script id="editor" type="text/plain" style="width:auto;height:300px;" name="descr"></script>
                </div>
            </div>
             <div class="mws-form-row">
                <label class="mws-form-label">主图位置</label>
                     <div class="mws-form-item">
                        <ul class="mws-form-list inline">
                                <li>
                                    <input type="radio" name="szie" value="0"><label>左</label>
                                </li>
                                <li>
                                    <input type="radio" name="szie" value="1"><label>中</label>
                                </li>
                                <li>
                                    <input type="radio" name="szie" value="2"><label>右</label>
                                </li>
                            </ul>
                    </div>
            </div>
            <div class="mws-form-row">
                <label class="mws-form-label">商品状态</label>
                 <div class="mws-form-item">
                    <ul class="mws-form-list inline">
                            <li>
                                <input type="radio" name="state" value="1"><label>新添加</label>
                            </li>
                            <li>
                                <input type="radio" name="state" value="2"><label>在售</label>
                            </li>
                            <li>
                                <input type="radio" name="state" value="3"><label>下架</label>
                            </li>
                        </ul>
                </div>
           
    		<div class="mws-button-row">
    			<input type="submit" class="btn btn-danger" value="提交">
    			<input type="reset" class="btn " value="重置">
    		</div>
    	</form>
    </div>    	
</div>
<script type="text/javascript">
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
</script>
@endsection	