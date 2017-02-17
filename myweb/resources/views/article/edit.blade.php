@extends('layout.adminindex')
@section('con')
<script type="text/javascript" charset="utf-8" src="/ue/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ue/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/ue/lang/zh-cn/zh-cn.js"></script>

<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>商品提问回复</span>
  </div>
    <div class="mws-panel-body no-padding">
    	<form action="/admin/article/update" class="mws-form" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value='{{$vo['id']}}' method="post">
    		{{csrf_field()}}
    		<div class="mws-form-inline">
			<div class="mws-form-row">
				<label class="mws-form-label">会员id</label>
				<div class="mws-form-item">
					<input type="text" class="small" name="userid" value='{{$vo['userid']}}' disabled>
				</div>
			</div>
             <div class="mws-form-row">
                <label class="mws-form-label">问题类型</label>
                 <div class="mws-form-item">
                    <ul class="mws-form-list inline">
                            <li>
                                <input type="radio" name="" value="1"
                                  @if($vo['whattype']=='0')
                                     checked
                                  @endif
                                 disabled><label>商品提问</label>
                            </li>
                            <li>
                                <input type="radio" name="" value="2"
                                  @if($vo['whattype']=='1')
                                     checked
                                  @endif
                                 disabled><label>促销活动提问</label>
                            </li>
                            <li>
                                <input type="radio" name="" value="3"
                                   @if($vo['whattype']=='2')
                                     checked
                                   @endif
                                 disabled><label>库存及物流提问</label>
                            </li>
                             <li>
                                <input type="radio" name="" value="3"
                                   @if($vo['whattype']=='3')
                                     checked
                                   @endif
                                 disabled><label>售后提问</label>
                            </li>
                        </ul>
                </div>
            </div>
			<div class="mws-form-row">
				<label class="mws-form-label">提问内容</label>
				<div class="mws-form-item">
					<textarea name="" id="" cols="80" rows="30" disabled>{{$vo['wcontent']}}</textarea>
				</div>
			</div>
            
            <div class="mws-form-row">
                <label class="mws-form-label">回复内容</label>
                <div class="mws-form-item" width='500'>
                   <textarea name="hcontent" id="" cols="80" rows="30"></textarea>
                </div>
            </div>
            <div class="mws-form-row">
                <label class="mws-form-label">状态</label>
                 <div class="mws-form-item">
                    <ul class="mws-form-list inline">
                            <li>
                                <input type="radio" name="status" value="1"><label>已回复</label>
                            </li>
                        </ul>
                </div>
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