@extends('layout.adminindex')
@section('con')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i>订单详情浏览</span>
	</div>
	<div class="mws-panel-body no-padding">
		<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
		<table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
			<thead>
			    <tr role="row">
				    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 99px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Browser: activate to sort column ascending">订单号</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 124px;" aria-label="Platform(s): activate to sort column ascending">商品名称</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">尺码</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">颜色</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">商品图片</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">单价</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 82px;" aria-label="Engine version: activate to sort column ascending">数量</th>  
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
				        <td class=" ">{{$v['order']}}</td>
				        <td class=" ">{{$v['goods']}}</td> 
				        <td class=" ">{{$v['size']}}</td> 
				        <td class=" ">{{$v['color']}}</td>
				        <td class=" ">{{$v['picname']}}</td>
				        <td class=" ">{{$v['price']}}</td> 
				        <td class=" ">{{$v['num']}}</td>
				    </tr>
			    @endforeach
			</tbody>
		</table>
		</div>
	</div>
</div>
@endsection