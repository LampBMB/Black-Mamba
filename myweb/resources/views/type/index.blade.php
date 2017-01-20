@extends('layout.adminindex')
@section('con')
<div class="mws-panel grid_8">
	<div class="mws-panel-header">
		<span><i class="icon-table"></i>分类浏览</span>
	</div>
	<div class="mws-panel-body no-padding">
		<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
		<table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
			<thead>
			    <tr role="row">
				    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 99px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 99px;" aria-label="Browser: activate to sort column ascending">类别名称</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 99px;" aria-label="Platform(s): activate to sort column ascending">PID</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 99px;" aria-label="Engine version: activate to sort column ascending">PATH</th>
				    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 98px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
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
				        <td class=" ">{{$v['name']}}</td>
				        <!-- <td class=" ">{{$v['pid']}}</td> -->
				        <!-- 将子类的pid替换成父类的名称 -->
				        <td class=" ">{{\App\Http\Controllers\TypeController::funame($v['pid'])}}</td>
				        <td class=" ">{{$v['path']}}</td>
				        <td class=" ">
				       		<a class="icon-plus" href="/admin/type/add/{{$v['id']}}"> 添加 </a>&nbsp;&nbsp;&nbsp;&nbsp;
				        	<a class="icon-pencil" href="/admin/type/edit/{{$v['id']}}"> 修改 </a>&nbsp;&nbsp;&nbsp;&nbsp;
				        	<a class="icon-remove" href="/admin/type/del/{{$v['id']}}"> 删除 </a>
				        </td>
				    </tr>
			    @endforeach
			</tbody>
		</table>
		</div>
	</div>
</div>
@endsection