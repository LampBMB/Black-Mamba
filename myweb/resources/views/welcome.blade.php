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
        <ul>
            <li class="pic_one">
                <a href="http://item.vancl.com/6375528.html" target="_blank">
                    <img src="/ho/index/1g.jpg" alt="Beyond closet 卫衣 PARIS 粉色 " border="0">
                </a>
                <h3><span>359<em></em>元</span>卫衣 PARIS</h3>
            </li>

            <li class="pic_two">
                <div>
                    <a href="http://item.vancl.com/6375526.html" target="_blank">
                        <img src="/ho/index/3g.jpg" alt="Beyond closet 卫衣 CAN CAN 黑色 ">
                    </a>
                    <h3><span><em>359</em>元</span>卫衣CORD DOG</h3>
                </div>
                
                <div>
                    <a href="http://item.vancl.com/6375525.html" target="_blank">
                        <img src="/ho/index/2g.jpg" alt="Beyond closet 卫衣 CORD DOG 海军蓝">
                    </a>
                    <h3><span><em>359</em>元</span>卫衣CAN CAN</h3>
                </div>
            </li>

            <li class="pic_three" style="margin-right: 0px;">
                <a href="http://item.vancl.com/6375554.html" target="_blank">
                    <img src="/ho/index/4g.jpg" alt="Beyond closet 卫衣 POP ART DOG 粉色">
                </a>
                <h3><span><em>359</em>元</span>卫衣POP ART DOG</h3>
            </li>
        </ul>
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
                cc.innerHTML = "倒计时：<span style='margin-right:3px;'>" + day1 + "<em style='font-size:16px;padding-left:5px;'>天</em></span> <span style='margin-right:3px;'>" + (hour > 10 ? hour: "0" + hour) + "<em style='font-size:16px;padding-left:5px;'>小时</em></span> <span style='margin-right:3px;'>" + (minute > 10 ? minute: "0" + minute) + "<em style='font-size:16px;padding-left:5px;'>分</em></span>";
            } else {
                $(".getMoney").hide();
            }

        }
        window.setInterval(function() {
            ShowCountDown(2017, 02, 14, 'countdown');
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
            <div class="getMoney"><img src="/ho/index/cz.jpg"></div>
            <ul>
                <li class="pic_one">
                    <a href="http://item.vancl.com/6375250.html" target="_blank">
                        <img src="/ho/index/1.jpg" alt="凡客羽绒服 轻暖95绒 立领 女款 ">
                    </a>

                    <h3><span>充值购买<em>184</em>元</span>羽绒服 轻暖95绒 连帽</h3>
                </li>
                <li class="pic_two">
                    <div>
                        <a href="http://item.vancl.com/6375118.html" target="_blank">
                            <img src="/ho/index/2.jpg" alt="凡客羽绒服 轻暖95绒 立领 男款">
                        </a>
                        <h3><span>充值购买<em>109</em>元</span>衬衫 弹力修身 小方领</h3>
                    </div>
                    <div>
                        <a href="http://item.vancl.com/6375279.html" target="_blank">
                            <img src="/ho/index/3.jpg" alt="凡客80免烫衬衫 小方领">
                        </a>
                        <h3><span>充值购买<em>79</em>元</span>衬衫 法兰绒 男款</h3>
                    </div>
                </li>
                <li class="pic_three" style="margin-right: 0px;">
                    <a href="http://item.vancl.com/6375330.html" target="_blank">
                        <img src="/ho/index/4.jpg" alt="凡客衬衫 法兰绒 领尖扣 男款 ">
                    </a>
                    <h3><span>充值购买<em>184</em>元</span>羽绒服 轻暖95绒 立领</h3>
                </li>
            </ul>
        </div>
    <!-- 超值精选区结束 -->

    <!-- 裤装区 -->
        <div class=" piclist kuzhuanglist clear">
            <ul>
                <li>
                    <a href="http://item.vancl.com/6375238.html" target="_blank">
                        <img src="/ho/index/0204-9.jpg" alt="休闲裤 全棉直筒">
                    </a>
                    <h3><span>充值购买<em>84.5</em>元</span>休闲裤 全棉直筒</h3>
                </li>
                <li>
                    <div>
                        <a href="http://item.vancl.com/6375235.html" target="_blank">
                            <img src="/ho/index/0204-10.jpg" alt="弹力灯芯绒">
                        </a>
                        <h3><span>充值购买<em>84.5</em>元</span>弹力灯芯绒</h3>
                    </div>
                </li>
                <li>
                    <div>
                        <a href="http://item.vancl.com/6375379.html" target="_blank">
                            <img src="/ho/index/0204-11.jpg" alt="凡客牛仔裤 弹力修身 女款">
                        </a>
                        <h3><span>充值购买<em>89.5</em>元</span>牛仔裤 弹力修身</h3>
                    </div>
                </li>
                <li style="margin-right: 0px;">
                    <a href="http://item.vancl.com/6375372.html" target="_blank">
                        <img src="/ho/index/0210-12.jpg" alt="重水洗锥形拼接">
                    </a>
                    <h3><span>充值购买<em>84.5</em></span>重水洗针织锥形拼接</h3>
                </li>
            </ul>
        </div>
    <!-- 库装区结束 -->
    </div>
<!-- 超值精选与裤装 -->
@endsection