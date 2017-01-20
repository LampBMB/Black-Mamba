@extends('layout.adminindex')
@section('con')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>添加类别</span>
    </div>
    <div class="mws-panel-body no-padding">
    	<form class="mws-form" action="/admin/type/insert" method="post">
    		{{csrf_field()}}
    		<div class="mws-form-inline">
    		    <div class="mws-form-row">
    				<label class="mws-form-label">父分类</label>
    				<div class="mws-form-item">
    					<select class="small" name="id">
    						<option value="0">顶级分类</option>
    						@foreach($list as $v)
    						<option value="{{$v['id']}}"
								@if($id==$v['id'])
									selected
								@endif
    						>{{$v['name']}}</option>
    						@endforeach
    					</select>
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">子分类</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="name">
    				</div>
    			</div>
    		</div>
    		<div class="mws-button-row">
    			<input value="添加" class="btn btn-danger" type="submit">
    			<input value="重置" class="btn " type="reset">
    		</div>
    	</form>
    </div>    	
</div>
@endsection