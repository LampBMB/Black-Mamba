<div class="navlist clear" id="mainNavBox" style="z-index:300!important;">
    <ul>
        <li class="vancllogo_Con" style="text-align: left;">
            <a href="/home/index/index"></a>
        </li>
        @foreach($type as $k=>$v)
        <li>
            <a href="/home/gt/goodtype/{{$v['id']}}" class="track" target="_blank">{{$v['name']}}</a>
            <span class="NavLine"></span>
            <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
                <span></span>
              @foreach($type[$k]['son'] as $key=>$value)
                <ul>
                    <li>
                        <a href="/home/gt/goodtype/{{$value['id']}}" target="_blank">{{$value['name']}}</a>
                    </li>
                </ul>
              @endforeach
            <!--  @endforeatch -->
            </div>
        </li>
        @endforeach
    </ul>
</div>
        