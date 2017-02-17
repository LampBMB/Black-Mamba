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
				    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 100px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">订单ID</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 180px;" aria-label="Browser: activate to sort column ascending">订单号</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 70px;" aria-label="Browser: activate to sort column ascending">用户ID</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 70px;" aria-label="Browser: activate to sort column ascending">商品数量</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 70px;" aria-label="Engine version: activate to sort column ascending">总金额</th> 
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 70px;" aria-label="Engine version: activate to sort column ascending">购买时间</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 70px;" aria-label="CSS grade: activate to sort column ascending">状态</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 150px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
			    </tr>
			</thead>

			<tbody role="alert" aria-live="polite" aria-relevant="all">
				 @foreach($data as $v)
				 	<tr style="text-align:center;background:#ccc">
						<td class=" ">{{$v['id']}}</td>
						<td class=" ">{{$v['addtime']}}</td>
						<td class=" ">{{$v['userid']}}</td>
				        <td class=" "> {{$v['num']}} 件</td>
				        <td class=" "> {{$v['total']}} 元</td>
				        <td class=" "> {{date('Y-m-d H:i:s',$v['addtime'])}}</td>  
				        <td class="status">
				        	 @if($v['status']==1)
			                        新订单
			                      @elseif($v['status']==2)
			                        已发货
			                      @elseif($v['status']==3)
			                        顾客已收货
			                      @endif
				        </td>
				        <td class=" ">&nbsp; &nbsp;
				        	<a info="{{$v['id']}}" style="color:black;font-weight:bold" class="ddcz" href="" > 确认发货 </a>&nbsp; &nbsp; &nbsp;
				        	
				        </td>
				    </tr>
				    <tr style="text-align:center;background:#f5f5f5">
				    	<td class=" ">商品主图</td>
				    	<td class=" ">商品</td>
						<td class=" ">尺码</td>
						<td class=" ">颜色</td>
				        <td class=" ">单价</td>
				        <td class=" "> 数量</td>
				        <td colspan="2" class=" "> 小计</td>  
				    </tr>
				    @foreach($v[0] as $val)
				    <tr class="" style="text-align:center;background:#f5f5f5">
				    	<td class=" ">
				    		<img src="{{$val['picname']}}" alt="" width="80px">
						</td>
				    	<td>{{$val['goods']}}</td>
						<td class=" ">
							@if($val['size']==0)
                                S
                            @elseif($val['size']==1)
                                M
                            @elseif($val['size']==2)
                                L
                            @elseif($val['size']==3)
                                XL
                            @elseif($val['size']==4)
                                XXL
                            @endif
						</td>
						<td class=" ">{{$val['color']}}</td>
				        <td class=" ">{{$val['price']}}元</td>
				        <td class=" "> {{$val['num']}}件</td>
				        <td colspan="2" class=" "> {{$val['num']*$val['price']}}元</td>  
				    </tr>
				    @endforeach
			        @foreach($v[1] as $va)
			        <tr style="text-align:center">
			        	<td> &nbsp; 收货人: <span>{{$va['name']}}</span></td>
			                <td > 电话: <span>{{$va['phone']}}</span></td>
			                <td colspan="2"> 邮编: <span>{{$va['code']}}</span></td>
			                <td colspan="4">收货地址:<span class="info">{{$va['sheng']}} {{$va['shi']}} {{$va['xian']}}</span>{{$va['jiedao']}}</td>
			        </tr>
					@endforeach
				 @endforeach
			        
			</tbody>

		</table>
			<!-- 分页开始 -->
			<div class="dataTables_paginate paging_full_numbers" id="page">
			<!-- 参数注入 给分页的url注入跳转页大小参数-->
			
			</div>

			<!-- 分页结束 -->
		</div>
	</div>
</div>
<script type="text/javascript" src="/js/jquery-1.8.3.js"></script>
<script type="text/javascript">
	$('.ddcz').each(function(){
		$(this).click(function(){
			var id=$(this).attr('info');
			$.ajax({
				url:'/admin/orders/edit',
				data:{'id':id},
				// dataType:'text',
				success:function(mes){

				}
			});

		});
	});

</script>
@endsection