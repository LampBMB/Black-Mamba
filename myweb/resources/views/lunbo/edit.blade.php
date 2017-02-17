@extends('layout.adminindex')
@section('con')
<script type="text/javascript" charset="utf-8" src="/ue/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ue/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/ue/lang/zh-cn/zh-cn.js"></script>

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>轮播图片修改</span>
  </div>
    <div class="mws-panel-body no-padding">
    	<form action="/admin/lunbo/update" class="mws-form" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value='{{$vo['id']}}'>
    		{{csrf_field()}}
    		<div class="mws-form-inline">
            <div class="mws-form-row">
        				<label class="mws-form-label">商品名称</label>
        				<div class="mws-form-item">
        				   <select class="small" name="goodsid">
                                    <option value="0">商品名称</option>
                                    @foreach($list as $v)
                                    <option value="{{$v['id']}}"
                                       @if($v['id']==$vo['goodsid'])
                                            selected
                                       @endif
                                    >{{$v['goods']}}</option>
                                    @endforeach
                   </select>
        				</div>
             
        </div>
            <div class="mws-form-row">
                <label class="mws-form-label">轮播图片</label>
                <div class="mws-form-item" width='500'>
                   <img src="{{$vo['picname']}}" width='300px' alt="">
                </div>
            </div>
            <div class="mws-form-row">
                <label class="mws-form-label">修改轮播图片</label>
                 <div class="mws-form-item">
                   <input type="file" class="small" name="picname" value="">
                </div>
            </div>
        		<div class="mws-button-row">
        			<input type="submit" class="btn btn-danger" value="提交">
        			<input type="reset" class="btn " value="重置">
        		</div>
        	</form>
    </div>    	
</div>
@endsection	