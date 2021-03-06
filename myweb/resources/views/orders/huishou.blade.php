@extends('layout.adminindex')
@section('con')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i>订单浏览</span>
	</div>
	<div class="mws-panel-body no-padding">
		<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
		<form action="/admin/orders/index" method="get">
			<div id="DataTables_Table_1_length" class="dataTables_length">
				<label>Show
					<select size="1" name="num" aria-controls="DataTables_Table_1">
						<option value="5"
							@if(!empty($request['num']) && $request['num']=='5')
								selected
							@endif
						>5</option>
						<option value="10"
							@if(!empty($request['num']) && $request['num']=='10')
								selected
							@endif
						>10</option>
						<option value="25"
							@if(!empty($request['num']) && $request['num']=='25')
								selected
							@endif
						>25</option>
						<option value="50"
							@if(!empty($request['num']) && $request['num']=='50')
								selected
							@endif
						>50</option>
						<option value="100"
							@if(!empty($request['num']) && $request['num']=='100')
								selected
							@endif
						>100</option>
					</select> entries
				</label>
			</div>
			<div class="dataTables_filter" id="DataTables_Table_1_filter">
				<label>Search: 
					<input value='@if(!empty($request['keyword'])){{$request['keyword']}}@endif' name="keyword" aria-controls="DataTables_Table_1" type="text">
				</label>

				<input type="submit" value="搜索" class="btn btn-primary">
			</div>
		</form>
		<table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
			<thead>
			    <tr role="row">
				    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 99px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">订单ID</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Browser: activate to sort column ascending">订单号</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Browser: activate to sort column ascending">用户ID</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Browser: activate to sort column ascending">用户名</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 124px;" aria-label="Platform(s): activate to sort column ascending">联系人</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">地址</th>
				     <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">邮编</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">电话</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">总金额</th> 
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">购买时间</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 56px;" aria-label="CSS grade: activate to sort column ascending">状态</th>
			    </tr>
			</thead>

			<tbody role="alert" aria-live="polite" aria-relevant="all">
				@foreach($list as $k=>$v)
				@if($k%2==0)
					<tr class="odd">
				@else
					<tr class="even">
				@endif
				        <td class="  sorting_1">{{$v['id']}}</td>
				        <td class="  sorting_1">{{$v['order']}}</td>
				        <td class=" ">{{$v['uid']}}</td>
				        <td class=" ">{{$v['username']}}</td>  
				        <td class=" ">{{$v['linkman']}}</td>
				        <td class=" ">{{$v['address']}}</td>
				        <td class=" ">{{$v['code']}}</td>
				        <td class=" ">{{$v['phone']}}</td>
				        <td class=" ">{{$v['total']}}</td>
				        <td class=" ">{{$v['addtime']}}</td>
				        <td class=" ">
				        	@if($v['status']==0)
				        		新订单
							@elseif($v['status']==1)
								已发货
							@elseif($v['status']==2)
							    已收货
							@else
							    无效订单
							@endif
				        </td>
				    </tr>
			    @endforeach
			</tbody>
		</table>
			<!-- 分页开始 -->
			<div class="dataTables_paginate paging_full_numbers" id="page">
			<!-- 参数注入 给分页的url注入跳转页大小参数-->
				{!!$list->appends($request)->render()!!}
			</div>

			<!-- 分页结束 -->
		</div>
	</div>
</div>
@endsection