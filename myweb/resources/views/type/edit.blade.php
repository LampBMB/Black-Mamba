@extends('layout.adminindex')
@section('con')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>分类修改</span>
    </div>
   
    <div class="mws-panel-body no-padding">
    	
    	<form class="mws-form" action="/admin/type/update" method="post">
    	{{csrf_field()}}
            <input type="hidden" name="id" value='{{$list['id']}}'>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">PID</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="pid" value="{{$funame}}" readonly>
    				</div>
    			</div>
    		</div>
    		<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">类别名称</label>
					<div class="mws-form-item">
						<input class="small" type="text" name="name" value="{{$list['name']}}">
					</div>
				</div>
			</div>		
    		<div class="mws-button-row">
    			<input value="修改" class="btn btn-danger" type="submit">
    			<input value="重置" class="btn " type="reset">
    		</div>
    	</form>
    </div>    	
</div>
@endsection