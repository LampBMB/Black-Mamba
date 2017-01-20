@extends('layout.adminindex')
@section('con')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>用户添加</span>
    </div>
   
    <div class="mws-panel-body no-padding">
    	
    	<form class="mws-form" action="/admin/user/insert" method="post">
    	{{csrf_field()}}
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">账号</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="username" value="{{old('username')}}">
    				</div>
    			</div>
    		</div>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">密码</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="pass" value="{{old('pass')}}">
    				</div>
    			</div>
    		</div>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">确认密码</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="repass" value="{{old('repass')}}">
    				</div>
    			</div>
    		</div>
    		<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">真实姓名</label>
					<div class="mws-form-item">
						<input class="small" type="text" name="name" value="{{old('name')}}">
					</div>
				</div>
			</div>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">电话</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="phone" value="{{old('phone')}}">
    				</div>
    			</div>
    		</div>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">Email</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="email" value="{{old('email')}}">
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