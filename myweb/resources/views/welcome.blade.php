@extends('layout.homeindex')
@section('con') 
<!-- 春季特惠倒计时 -->
    <div class="getMoney">
        <a href="http://cz.vancl.com/DepositPre.aspx#:n" target="_blank">
            <img src="/ho/index/djs0208.jpg"></a>
        <div id="countdown" style="position: relative; z-index: 2; color: white; width: 360px;
        left: 50%; margin-left:-180px; font-size: 24px; font-family: &#39;microsoft yahei&#39;; bottom: 80px; background-color: #BB151F;
        text-align: center;">倒计时：
            <span style="margin-right:3px;">4
                <em style="font-size:16px;padding-left:5px;">天</em></span>
            <span style="margin-right:3px;">010
                <em style="font-size:16px;padding-left:5px;">小时</em></span>
            <span style="margin-right:3px;">32
                <em style="font-size:16px;padding-left:5px;">分</em></span>
        </div>
    </div> 
<!-- 春季特惠倒计时结束 -->  

<!-- 新品推荐区 -->
  
    <div class=" piclist shangzhuanglist shangzhuanglist_top clear">
        <h2>新品推荐</h2>
        @foreach($list as $k=>$v)
        <ul>
         
          @if($v['szie']==0)
            <li class="pic_one">
                <a href="/home/gt/gooddetails/{{$v['id']}}" target="_blank">
                    <img src="{{$v["picname"]}}" alt="Beyond closet 卫衣 PARIS 粉色 " border="0" width='590' height='440'>
                </a>
                <h3><span><em>{{$v['price']}}</em>元</span>{{$v['goods']}}</h3>
            </li>
          @elseif($v['szie']==1)
            <li class="pic_two">
                <div>
                    <a href="/home/gt/gooddetails/{{$v['id']}}" target="_blank">
                        <img src="{{$v["picname"]}}" alt="Beyond closet 卫衣 CAN CAN 黑色 " width='290' height='175'>
                    </a>
                    <h3><span><em>{{$v['price']}}</em>元</span>{{$v['goods']}}</h3>
                </div>
            </li>
          @else

            <li class="pic_three" style="margin-right: 0px;">
                <a href="/home/gt/gooddetails/{{$v['id']}}" target="_blank">
                    <img src="{{$v["picname"]}}" alt="Beyond closet 卫衣 POP ART DOG 粉色" width='286' height='440' style='margin-top:-261px'>
                </a>
                <h3><span><em>{{$v['price']}}</em>元</span>{{$v['goods']}}</h3>
            </li>
            @endif
        </ul>
         @endforeach
    </div>
   
<!-- 新品推荐结束 -->
            
    <script type="text/javascript">
        var wwwindex = wwwindex || {}; (function(obj) {

            var _wwwindex = obj,
            config = {
                container: ".shopList ul",
                child: ".shopList ul li",
                leftbtn: ".lef",
                rightbtn: ".rig",
                anlength: 6,
                elemWidth: 196,
                speed: 1000
            },
            ChildMax = 0,
            countPage = 0,
            targetPage = 0;
            _wwwindex.bindLR = function() {
                AnLength();
                lists($(config.leftbtn));
                lists($(config.rightbtn));
            }

            // function AnLength() {
            //     if ($("body").attr("class") == "full") {
            //         config.anlength = 5;
            //         config.elemWidth = 200;
            //     }
            //     ChildMax = $(config.child).length;
            //     countPage = Math.ceil(ChildMax / config.anlength) if (countPage == 1) {
            //         $(".shopTitle span[classname=fr]").hide();
            //     }
            // }

            function lists(jqElement) {
                jqElement.bind("click",
                function() {
                    anElement.call(this);
                });
            }

            function anElement() {
                var thiscss = "." + $(this).attr("class");
                if (canMove(thiscss)) {
                    anMove(thiscss);
                }
            }

            function anMove(elcss) {
                AnLength();
                var moveMax = 0;
                switch (elcss) {
                case config.leftbtn:
                    targetPage = --targetPage;

                    break;
                case config.rightbtn:
                    targetPage = ++targetPage;
                    break;
                }
                moveMax = (0 - targetPage * config.elemWidth * config.anlength) + "px";
                $(config.container).stop();
                $(config.container).animate({
                    "left": moveMax
                },
                config.speed);
            }

            function canMove(elcss) {
                AnLength();
                switch (elcss) {
                case config.leftbtn:
                    if (targetPage == 0) {
                        return false;
                    }
                    break;
                case config.rightbtn:
                    if (targetPage == countPage - 1) {
                        return false;
                    }
                    break;
                }
                return true;
            }

            return _wwwindex;
        })(wwwindex);

        //wwwindex.bindLR();

        //20170208
        var interval = 1000;
        function ShowCountDown(year, month, day, divname) {
            var now = new Date();
            var endDate = new Date(year, month - 1, day, 10);
            if (endDate.getTime() > now.getTime()) {
                var leftTime = endDate.getTime() - now.getTime();
                var leftsecond = parseInt(leftTime / 1000);
                //var day1=parseInt(leftsecond/(24*60*60*6)); 
                var day1 = Math.floor(leftsecond / (60 * 60 * 24));
                var hour = Math.floor((leftsecond - day1 * 24 * 60 * 60) / 3600);
                var minute = Math.floor((leftsecond - day1 * 24 * 60 * 60 - hour * 3600) / 60);
                var second = Math.floor(leftsecond - day1 * 24 * 60 * 60 - hour * 3600 - minute * 60);
                var cc = document.getElementById(divname);
                //cc.innerHTML = "倒计时"+day1+"天"+hour+"时"+minute+"分"+second+"秒"; 
                cc.innerHTML = "倒计时：<span style='margin-right:3px;'>" + day1 + "<em style='font-size:16px;padding-left:5px;'>天</em></span> <span style='margin-right:3px;'>" + (hour > 10 ? hour: "0" + hour) + "<em style='font-size:16px;padding-left:5px;'>小时</em></span> <span style='margin-right:3px;'>" + (minute > 10 ? minute: "0" + minute) + "<em style='font-size:16px;padding-left:5px;'>分</em></span> <span style='margin-right:3px;'>" + (second >= 10 ? second: "0" + second) + "<em style='font-size:16px;padding-left:5px;'>秒</em></span>";
            } else {
                $(".getMoney").hide();
            }

        }
        window.setInterval(function() {
            ShowCountDown(2017, 04, 14, 'countdown');
        },
        interval);
    </script>

<!-- 超值精选与裤装 -->
    <!--底部通栏广告位-->
    <div class="blank0"></div>

    <div class="proAreabox clearFix">
        <style type="text/css">/* shangzhuang_tuijian */ .shangzhuanglist { overflow: hidden; } .shangzhuanglist ul li.pic_one { width: 590px; } .shangzhuanglist ul li.pic_two { width: 290px; } .shangzhuanglist ul li.pic_three { width: 286px; } .shangzhuanglist ul li { float: left; margin-right: 17px; display: inline; } .shangzhuanglist ul li div { margin-bottom: 16px; } .shangzhuanglist ul li h3, .kuzhuanglist ul li h3 { height: 28px; padding: 20px 12px; line-height: 28px; border: 1px solid #e8e7ec; border-top: 0px; font-family: "Microsoft YaHei"; font-size: 14px; } .shangzhuanglist ul li h3 span, .kuzhuanglist ul li h3 span { float: right; color: #a10000; font-family: Arial; line-height: 24px; font-size: 14px; } /* font-weight: bold; */ .shangzhuanglist ul li h3 span em, .kuzhuanglist ul li h3 span em { font-size: 16px; padding-left: 10px; } /* kuzhuang_tuijian */ .kuzhuanglist { overflow: hidden; } .kuzhuanglist ul li { width: 285px; height: 508px; float: left; display: inline; margin-right: 20px; margin-bottom: 20px; } /* others_tuijian */ .otherlist { overflow: hidden; *margin-bottom:28px; } .otherlist ul li { float: left; width: 385px; height: 275px; display: inline; margin: 0px 22px 28px 0px; } .shangzhuanglist_top { *margin-bottom:-30px; }</style>

    <!-- 超值精选区 -->
        <div class=" piclist shangzhuanglist shangzhuanglist_top clear">
            <div class="getMoney" style='display:block'><img src="/ho/index/cz.jpg"></div>
               @foreach($list1 as $k=>$v)
                    <ul>
                      @if($v['szie']==0)
                        <li class="pic_one">
                            <a href="/home/gt/gooddetails/{{$v['id']}}" target="_blank">
                                <img src="{{$v["picname"]}}" alt="Beyond closet 卫衣 PARIS 粉色 " border="0" width='590' height='440'>
                            </a>
                            <h3><span>{{$v['price']}}<em></em>元</span>{{$v['goods']}}</h3>
                        </li>
                      @elseif($v['szie']==1)
                        <li class="pic_two">
                            <div>
                                <a href="/home/gt/gooddetails/{{$v['id']}}" target="_blank">
                                    <img src="{{$v["picname"]}}" alt="Beyond closet 卫衣 CAN CAN 黑色 " width='290' height='175'>
                                </a>
                                <h3><span><em>{{$v['price']}}</em>元</span>{{$v['goods']}}</h3>
                            </div>
                        </li>
                      @else
                        <li class="pic_three" style="margin-right: 0px;">
                            <a href="/home/gt/gooddetails/{{$v['id']}}" target="_blank">
                                <img src="{{$v["picname"]}}" alt="Beyond closet 卫衣 POP ART DOG 粉色" width='286' height='440' style='margin-top:-261px'>
                            </a>
                            <h3><span><em>{{$v['price']}}</em>元</span>{{$v['goods']}}</h3>
                        </li>
                        @endif
                    </ul>
                @endforeach
        </div>
    <!-- 超值精选区结束 -->
     <div class=" piclist shangzhuanglist shangzhuanglist_top clear">
            <div class="getMoney"><img src="/ho/index/sy02.jpg"></div>
               @foreach($list2 as $k=>$v)
                    <ul>
                      @if($v['szie']==0)
                        <li class="pic_one">
                            <a href="/home/gt/gooddetails/{{$v['id']}}" target="_blank">
                                <img src="{{$v["picname"]}}" alt="Beyond closet 卫衣 PARIS 粉色 " border="0" width='590' height='440'>
                            </a>
                            <h3><span><em>{{$v['price']}}<em></em>元</span>{{$v['goods']}}</h3>
                        </li>
                      @elseif($v['szie']==1)
                        <li class="pic_two">
                            <div>
                                <a href="/home/gt/gooddetails/{{$v['id']}}" target="_blank">
                                    <img src="{{$v["picname"]}}" alt="Beyond closet 卫衣 CAN CAN 黑色 " width='290' height='175'>
                                </a>
                                <h3><span><em>{{$v['price']}}</em>元</span>{{$v['goods']}}</h3>
                            </div>
                        </li>
                      @else
                        <li class="pic_three" style="margin-right: 0px;">
                            <a href="/home/gt/gooddetails/{{$v['id']}}" target="_blank">
                                <img src="{{$v["picname"]}}" alt="Beyond closet 卫衣 POP ART DOG 粉色" width='286' height='440' style='margin-top:-261px'>
                            </a>
                            <h3><span><em>{{$v['price']}}</em>元</span>{{$v['goods']}}</h3>
                        </li>
                        @endif
                    </ul>
                @endforeach
        </div>
    </div>
<!-- 超值精选与裤装 -->
@endsection