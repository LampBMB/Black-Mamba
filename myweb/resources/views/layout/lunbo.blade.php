 <div class="vanclFocusAd ">
    <div style="width: 100%; height: 2px;"></div>
    <div class="vanclFocus ">
        <div class="foucsTab">
         
            <ul id="slider" class="rslides rslides1">
            @foreach($list as $k=>$v)
                <li data-focusflag="other1" style="background: url(&quot;http://i5.vanclimg.com/cms/20170208/1200-535.jpg&quot;) center 0px no-repeat scroll; display: list-item; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 500ms ease-in-out;" id="rslides1_s0" class="">
                    <a title="" href="/home/gt/gooddetails/{{$v['goodsid']}}" class="track" name="hp-hp-focus-1_1-v:n" target="_blank"><img src="{{$v['picname']}}" alt="" width="1336" height="768"></a>
                </li>
             @endforeach
            </ul>
        
            <a href="javascript:void(0);" class="rslides_nav rslides1_nav prev">Previous</a>
            <a href="javascript:void(0);" class="rslides_nav rslides1_nav next">Next</a>
            <ul class="rslides_tabs rslides1_tabs">
                <li class="rslides1_s1">
                    <a href="javascript:void(0);" class="rslides1_s1">1</a>
                </li>
            </ul>
        </div>
    </div>
</div>