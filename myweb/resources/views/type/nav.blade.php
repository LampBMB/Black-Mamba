<ul>
	@foreach($list as $v)
		<li>
			<span>{{$v['name']}}</span>
			<ul>
				@foreach($v['sub'] as $val)
				<li>
					<span>{{$val['name']}}</span>
					<ul>
						@foreach($val['sub'] as $value)
							<li>
								<span>{{$value['name']}}</span>
							</li>
						@endforeach
					</ul>
				</li>
				@endforeach
			</ul>
		</li>
	@endforeach
</ul>