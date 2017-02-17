@extends('layout.adminindex')
@section('con')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
    	<span>用户修改</span>
    </div>
   
    <div class="mws-panel-body no-padding">
    	
    	<form class="mws-form" action="/admin/user/update" method="post">
    	{{csrf_field()}}
            <input type="hidden" name="id" value='{{$list['id']}}'>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">账号</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="username" value="{{$list['username']}}" readonly>
    				</div>
    			</div>
    		</div>
    		<div class="mws-form-inline">
				<div class="mws-form-row">
					<label class="mws-form-label">真实姓名</label>
					<div class="mws-form-item">
						<input class="small" type="text" name="name" value="{{$list['name']}}">
					</div>
				</div>
			</div>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">电话</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="phone" value="{{$list['vip']}}">
    				</div>
    			</div>
    		</div>
    		<div class="mws-form-inline">
    			<div class="mws-form-row">
    				<label class="mws-form-label">Email</label>
    				<div class="mws-form-item">
    					<input class="small" type="text" name="email" value="{{$list['email']}}">
    				</div>
    			</div>
    		</div>
             <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">会员等级</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li>
                                <input type="radio" name="vip" value="0" 
                                    @if($list['vip']==0)
                                        checked
                                    @endif
                                ><label>超级管理员</label>
                            </li>
                            <li>
                                <input type="radio" name="vip" value="1"
                                    @if($list['vip']==1)
                                        checked
                                    @endif
                                ><label>普通管理员</label>
                            </li>
                            <li>
                                <input type="radio" name="vip" value="1"
                                    @if($list['vip']==2)
                                        checked
                                    @endif
                                ><label>普通会员</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li>
                                <input type="radio" name="status" value="0" 
                                    @if($list['status']==0)
                                        checked
                                    @endif
                                ><label>禁用</label>
                            </li>
                            <li>
                                <input type="radio" name="status" value="1"
                                    @if($list['status']==1)
                                        checked
                                    @endif
                                ><label>启用</label>
                            </li>
                        </ul>
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