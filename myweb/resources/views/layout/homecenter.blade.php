<!DOCTYPE html>
<!-- saved from url=(0020)http://my.vancl.com/ -->
<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
    
    <head id="Head1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @section('title')
            @show
        </title>
        <script src="/ho/center/push.js"></script>
        <script type="text/javascript" src="/ho/center/js.ashx"></script>
        <link href="/ho/center/css.ashx" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="/ho/center/fanke.ico" type="image/x-icon">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(1).ashx">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(3).ashx">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(4).ashx">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(5).ashx">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(6).ashx">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(7).ashx">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(8).ashx">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(9).ashx">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(10).ashx">
        <link type="text/css" rel="stylesheet" href="/ho/center/css(11).ashx">
        <link href="/ho/center/acceptlist.css" rel="stylesheet" type="text/css">
        <!-- <script type="text/javascript" src="/ho/center/js(1).ashx"></script> -->
        <style type="text/css">
            body { font-size: 12px !important; } .newitenforsafecenteonly { background: url("http://i.vanclimg.com/header/20120309/spritesbg.png") no-repeat scroll 0 0 transparent; background-position: -190px -132px; width: 100px; } #Head a:hover { text-decoration: none; }#account{width:779px;float:right;color:Black;} #account H3 {background: url("http://i.vanclimg.com/my/2012/recommand/bg_accountcol.png") repeat-x scroll 50% bottom transparent;height: 24px;margin: 0 0 10px;} #account H3 SPAN {border-bottom: 2px solid #92002D;float: left;font: 700 14px/22px "宋体";padding: 0 6px;} .listtable{width:100%!important;} .listtable1227 tr td { text-align:center;}
        </style>
    </head>
    
    <body id="body" class="cols_manage">
        <div id="Head">
            <div id="headerTopArea" class="headerTopAreaBox">
                <div class="headerTopArea">
                    <div class="headerTop">
                        <div class="headerTopRight" style="width: 126px;">
                            <div class="active notice" id="vanclCustomer">
                                <a class="mapDropTitle" href="http://catalog.vancl.com/zhuanti/tg_20100510.html" target="_blank">网站公告</a></div>
                            <div class="payattention">
                                <em></em>
                                <a href="javascript:void(0);" class="vweixinbox">
                                    <span class="vweixin" style="background: url(http://i1.vanclimg.com/cms/20150605/w1.jpg) no-repeat left 3px;"></span>
                                    <b class="vweixinTip"></b>
                                </a>
                                <a href="http://e.weibo.com/vancl" class="track vanclweibo" name="hp-hp-head-weibo-v:n" target="_blank" style="background: url(http://i2.vanclimg.com/cms/20150605/w2.jpg) no-repeat left 3px;"></a>
                            </div>
                        </div>
                        <div class="headerTopLeft">
                          @if(session('home'))
                            <div id="welcome" class="top loginArea">您好,
                                <a href="/home/userinfo" class="top track" style="color: rgb(51, 51, 51);">{{session('home')[0]['username']}}</a>
                                <span style="color: #a10000">
                                    <a class="top track" style="color: #a10000" href="/home/login/outlogin" target="_parent">退出登录</a>&nbsp;|&nbsp;
                                    <a class="track" name="head-ghyh" href="javascript:VANCL.Global.login();" style="color: #a10000">更换用户</a></span>
                            </div>
						@else
							<div id="welcome" class="top loginArea"> 您好,<span class="top">欢迎光临凡客诚品！&nbsp;</span>
								<span>
								<a href="/home/login" class="top track">登录</a>&nbsp;|&nbsp;
								<a href="/home/register" class="track">注册</a>
								</span>
							</div>
						@endif
                        </div>
                        <span class="blank0"></span>
                    </div>
                </div>
            </div>
            <div id="logoArea" class="vanclLogoSearch">
                <div class="vanclSearch fr">
                    <div class="searchTab">
                        <div class="search fl">
                            <input type="text" class="searchText ac_input textBox Enter fl" name="k" id="skey" value="" autocomplete="off">
                            <input type="button" class="searchBtn sousuoBtn btn" id="btnHeaderSearch" onfocus="this.blur()"></div>
                        <div class="active" id="shoppingCarNone">
                            <p>
                                <a id="shoppingcar_link" rel="nofollow" href="/home/shopping" class="shopborder track cartab">购物车(
                                    <span car_product_total="shoppingCar_product_totalcount">1</span>)</a>
                                <s>
                                </s>
                            </p>
                            <div class="bottomlines"></div>
                            <div class="BuycarTab shopDropList">
                                <div class="havepru">
                                    <div class="havepruTop"></div>
                                    <div class="havepruMid">
                                        <h2>最近加入的商品：</h2>
                                        <ul>
                                            <li>
                                                <div class="carListLeft">
                                                    <a href="http://item.vancl.com/6375528.html">
                                                        <img src="/ho/center/6375528-1j201701201034280488.jpg" alt="Beyond closet 卫衣 PARIS 粉色" width="36" heigth="36"></a>
                                                </div>
                                                <div class="carListRight">
                                                    <h3>
                                                        <a href="http://item.vancl.com/6375528.html" title="Beyond closet 卫衣 PARIS 粉色">Beyond closet …</a></h3>
                                                    <span class="blank0"></span>
                                                    <div class="priceArea">
                                                        <strong>￥359.00</strong>
                                                        <em>×1</em></div>
                                                </div>
                                                <div class="carListDelect">
                                                    <a class="track" name="head-minicart-delproduct" style="cursor:pointer;" onclick="VANCL.MiniCart.deleteProduct(this,&#39;15771611&#39;,&#39;1&#39;,&#39;&#39;,&#39;&#39;,&#39;1&#39;,&#39;359.00&#39;)">删除</a></div>
                                                <span class="blank0"></span>
                                            </li>
                                        </ul>
                                        <div class="ShopCarPageLine"></div>
                                        <div class="ShopCarPage">
                                            <div class="SCtotalpage">
                                                <div>共计(未计算促销折扣)
                                                    <span>￥359</span></div>
                                                <strong>
                                                    <a class="track" name="head-minicart-shopping" href="http://shopping.vancl.com/mycart" rel="nofollow">查看购物车(
                                                        <span car_product_total="shoppingCar_product_totalcount">1</span>件)</a></strong>
                                                <span class="blank0"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="havepruBom"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hotWord">
                        <p>热门搜索：
                            <a name="hp-hp-classhotsearch-1_1-v:n" class="track" href="http://s.vancl.com/search?k=%E5%85%8D%E7%83%AB%E8%A1%AC%E8%A1%AB&amp;orig=3" target="_blank">免烫衬衫</a>
                            <a name="hp-hp-classhotsearch-1_2-v:n" class="track" href="http://s.vancl.com/search?k=%E7%BE%BD%E7%BB%92%E6%9C%8D&amp;orig=3" target="_blank">羽绒服</a>
                            <a name="hp-hp-classhotsearch-1_3-v:n" class="track" href="http://s.vancl.com/search?k=%E7%BE%8A%E6%AF%9B%E5%A4%A7%E8%A1%A3&amp;orig=33" target="_blank">羊毛大衣</a>
                            <a name="hp-hp-classhotsearch-1_6-v:n" class="track" href="http://s.vancl.com/search?k=%E6%99%BA%E8%83%BD%E6%B8%A9%E6%8E%A7&amp;orig=3" target="_blank">智能温控</a>
                            <a name="hp-hp-classhotsearch-1_4-v:n" class="track" href="http://item.vancl.com/6374138.html" target="_blank">户外鞋</a>
                            <a name="hp-hp-classhotsearch-1_5-v:n" class="track" href="http://s.vancl.com/search?k=%E4%BC%91%E9%97%B2%E8%A3%A4&amp;orig=3" target="_blank">休闲裤</a>
                            <a name="hp-hp-classhotsearch-1_6-v:n" class="track" href="http://s.vancl.com/search?k=%E8%B7%91%E6%AD%A5T&amp;orig=3" target="_blank">跑步T恤</a></p>
                    </div>
                </div>
            </div>
            <div class="navlist clear" id="mainNavBox" style="z-index:300!important;">
                <ul>
                    <li class="vancllogo_Con" style="text-align: left;">
                        <a href="/"></a>
                    </li>
                    <li>
                        <a href="/">首页</a>
                        <span class="NavLine"></span>
                    </li>
                    <li>
                        <a href="http://shirts.vancl.com/" class="track" name="hp-hp-head-nav_1-v:n" target="_blank">衬衫</a>
                        <span class="NavLine"></span>
                        <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="http://s.vancl.com/27544-a18586-s1.html" target="_blank">免烫</a></li>
                                <li>
                                    <a href="http://catalog.vancl.com/shirts/gzcs.html" target="_blank">高支</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27544-a18587-s1.html" target="_blank">休闲</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E6%B3%95%E5%85%B0%E7%BB%92&amp;orig=3" target="_blank">法兰绒</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E7%89%9B%E6%B4%A5%E7%BA%BA%E8%A1%AC%E8%A1%AB&amp;orig=3" target="_blank">牛津纺</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E9%9D%92%E5%B9%B4%E5%B8%83%E8%A1%AC%E8%A1%AB&amp;orig=3" target="_blank">青年布</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27531-27532-s1.html?k=%e7%89%9b%e4%bb%94%e8%a1%ac%e8%a1%ab" target="_blank">牛仔</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E9%BA%BB%E8%A1%AC%E8%A1%AB&amp;orig=3" target="_blank">麻</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27544-s1.html?k=%e5%ba%9c%e7%bb%b8%e8%a1%ac%e8%a1%ab" target="_blank">府绸</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27531-s1.html?k=%E5%AE%9A%E5%88%B6" target="_blank">私人定制</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://downcoat.vancl.com/" class="track" name="hp-hp-head-nav_2-v:n" target="_blank">羽绒服</a>
                        <span class="NavLine"></span>
                        <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="http://s.vancl.com/27531-27533-s1.html?k=%E7%94%B7%E6%AC%BE%E7%BE%BD%E7%BB%92%E6%9C%8D#" target="_blank">男款</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27532-s1.html?k=%E5%A5%B3%E6%AC%BE%E7%BE%BD%E7%BB%92%E6%9C%8D#" target="_blank">女款</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://coats.vancl.com/" class="track" name="hp-hp-head-nav_3-v:n" target="_blank">外套</a>
                        <span class="NavLine"></span>
                        <div class="subNav" style="display: none; *postion:relative;*z-index:300;">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E7%BE%BD%E7%BB%92%E6%9C%8D&amp;orig=3" target="_blank">羽绒服</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E5%A4%A7%E8%A1%A3&amp;orig=3" target="_blank">大衣</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27531-27532-s1.html?k=%E8%A5%BF%E6%9C%8D" target="_blank">西服</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27549-27553-s1.html?k=%E5%A4%B9%E5%85%8B" target="_blank">夹克</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E5%8D%AB%E8%A1%A3&amp;orig=3" target="_blank">卫衣</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://zhenzhishan.vancl.com/" class="track" name="hp-hp-head-nav_4-v:n" target="_blank">针织衫</a>
                        <span class="NavLine"></span>
                        <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="http://s.vancl.com/27531-s1.html?k=%E7%BE%8A%E7%BB%92%E8%A1%AB" target="_blank">羊绒衫</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E7%BE%8A%E6%AF%9B%E9%92%88%E7%BB%87%E8%A1%AB&amp;orig=3" target="_blank">羊毛衫</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27531-27532-s1.html?k=%e6%a3%89%e7%ba%bf%e8%a1%ab" target="_blank">棉线衫</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E7%A9%BA%E8%B0%83%E8%A1%AB&amp;orig=3" target="_blank">空调衫</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://s.vancl.com/search?k=%E6%B0%B4%E6%9F%94%E6%A3%89&amp;orig=3" class="track" name="hp-hp-head-nav_5-v:n" target="_blank">水柔棉</a>
                        <span class="NavLine"></span>
                        <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="http://item.vancl.com/6375170.html" target="_blank">拉链开衫</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27531-28968-s1.html?k=%e6%b0%b4%e6%9f%94%e6%a3%89%e9%95%bf%e8%a2%96V%e9%a2%86" target="_blank">长袖V领</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27531-28968-s1.html?k=%e6%b0%b4%e6%9f%94%e6%a3%89%e9%95%bf%e8%a2%96%e5%9c%86%e9%a2%86" target="_blank">长袖圆领</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27531-27532-s1.html?k=%e6%b0%b4%e6%9f%94%e6%a3%89%e7%9f%ad%e8%a2%96" target="_blank">短袖</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://xiuxianku.vancl.com/" class="track" name="hp-hp-head-nav_6-v:n" target="_blank">裤装</a>
                        <span class="NavLine"></span>
                        <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="http://catalog.vancl.com/xiuxianku/swxxk.html" target="_blank">商务</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27531-s1.html?k=%E4%BC%91%E9%97%B2%E8%A3%A4" target="_blank">休闲裤</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27531-27532-s1.html?k=%E7%89%9B%E4%BB%94%E8%A3%A4" target="_blank">牛仔裤</a></li>
                                <li>
                                    <a href="http://item.vancl.com/6373885.html" target="_blank">麻裤子</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E9%92%88%E7%BB%87%E8%A3%A4&amp;orig=3" target="_blank">针织裤</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://fanbuxie.vancl.com/" class="track" name="hp-hp-head-nav_7-v:n" target="_blank">鞋</a>
                        <span class="NavLine"></span>
                        <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="http://s.vancl.com/28082-s1.html?k=%E5%A4%8D%E5%8F%A4%E8%B7%91" target="_blank">复古跑鞋</a></li>
                                <li>
                                    <a href="http://item.vancl.com/6374138.html" target="_blank">户外鞋</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E5%B8%86%E5%B8%83%E9%9E%8B&amp;orig=3" target="_blank">帆布鞋</a></li>
                                <li>
                                    <a href="http://s.vancl.com/search?k=%E7%9A%AE%E9%9E%8B&amp;orig=3" target="_blank">皮鞋</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27540-s1.html?k=%E4%BC%91%E9%97%B2%E9%9E%8B" target="_blank">休闲鞋</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="http://mianwa.vancl.com/" class="track" name="hp-hp-head-nav_8-v:n" target="_blank">袜品</a>
                        <span class="NavLine"></span>
                        <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="http://catalog.vancl.com/mianwa/tzlb.html" target="_blank">中筒袜</a></li>
                                <li>
                                    <a href="http://catalog.vancl.com/hd/liankuwa.html" target="_blank">连裤袜</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27537-b1-s1.html?k=%E8%88%B9%E8%A2%9C" target="_blank">船袜</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="none">
                        <a href="http://home.vancl.com/" class="track" name="hp-hp-head-nav_9-v:n" target="_blank">家居配饰</a>
                        <div class="subNav" style="display: none;">
                            <span></span>
                            <ul>
                                <li>
                                    <a href="http://s.vancl.com/27541-28618.html?k=%E5%BA%8A%E5%93%81%E4%B8%89%E4%BB%B6%E5%A5%97#" target="_blank">床品三件套</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27541-28278.html?k=%E5%BA%8A%E5%93%81%E5%9B%9B%E4%BB%B6%E5%A5%97#" target="_blank">床品四件套</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27541-s1.html?k=%E7%BE%BD%E7%BB%92%E8%A2%AB#" target="_blank">羽绒被</a></li>
                                <li>
                                    <a href="http://item.vancl.com/6373628.html" target="_blank">鹅绒被</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27541-28278.html?k=%E8%9A%95%E4%B8%9D%E8%A2%AB#" target="_blank">蚕丝被</a></li>
                                <li>
                                    <a href="http://item.vancl.com/6373787.html" target="_blank">羽毛枕</a></li>
                                <li>
                                    <a href="http://item.vancl.com/6374350.html" target="_blank">摇粒绒毯</a></li>
                                <li>
                                    <a href="http://item.vancl.com/6374348.html" target="_blank">珊瑚绒毯</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27541-s1.html?k=%E7%9D%A1%E8%A2%8D#" target="_blank">珊瑚绒睡袍</a></li>
                                <li>
                                    <a href="http://s.vancl.com/27538-27936-s1.html?k=%E5%9B%B4%E5%B7%BE" target="_blank">配饰</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrapper">
            <div style="height: 15px; clear: both; overflow: hidden"></div>
            <dl id="position">
                <dt>您当前的位置：<a href="/">凡客首页</a> &gt;
                    <a href="/home/center/index">我的凡客</a>
                    @section('dt')
                    @show
                </dt>
            </dl>
            <div id="welcome"></div>
            <div id="side-nav">
                <div class="my_vancl">
                    <h2>
                        <a href="/home/center/index" class="track" name="my-left-commorder">我的凡客</a>
                    </h2>
                </div>
                <ul class="">
                    <li>
                        <h3>订单中心</h3>
                    </li>
                    <li class="">
                        <a href="/home/center/order" class="track" name="my-left-Order">·我的订单</a>
                    </li>
                    <li class="">
                        <a href="/home/center/custom" class="track" name="my-left-Order">·我的定制订单</a>
                    </li>
                    <li class="">
                        <a href="/home/center/gift" class="track" name="my-left-card">·我的礼品卡</a>
                    </li>
                    <li class="no_bg">
                        <a href="/home/center/integral" class="track" name="my-left-huiyuanscore">·我的积分</a>
                    </li>
                </ul>
                <ul class="">
                    <li>
                        <h3>客户服务</h3>
                    </li>
                    <li class="">
                        <a href="/home/center/returns" class="track" name="my-left-returnorder">·退换货办理</a>
                    </li>
                    <li class="">
                        <a href="/home/center/evaluate" class="track" name="my-left-productcomment" >·我要评价</a>
                    </li>
                    <li class="">
                        <a href="/home/center/quiz" class="track" name="my-left-productquestion">·商品提问</a>
                    </li>
                </ul>
                <ul class="service-rate">
                    <li>
                        <h3>账户管理</h3>
                    </li>
                    <li class="">
                        <a href="/home/center/balance" class="track" name="my-left-account">·账户余额</a>
                    </li>
                    <li class="">
                        <a href="/home/center/place" class="track" name="my-left-modifyDeliveryInfo">·收货地址</a>
                    </li>
                    <li class="">
                        <a href="/home/center/safety" class="track" name="my-left-modifypassword">·账户安全</a>
                    </li>
                    <li class="">
                        <a href="/home/center/data" class="track" name="my-left-personinfo">·我的资料</a>
                    </li>
                    <li class="no_bg">
                        <a href="/home/center/relevance" class="track" name="my-left-assoaccount">·我的关联账户</a>
                    </li>
                </ul>
            </div>
            <link type="text/css" rel="stylesheet" href="/ho/center/css(2).ashx">
            <!-- <script type="text/javascript" src="/ho/center/js(2).ashx"></script> -->
            <style>/*1214*/ .blank30 { clear: both; display: block; font-size: 1px; overflow: hidden; height: 30px; } .AsecurityBox0212 { width: 781px; } .AsecurityBox0212 .aslevel { margin-left: 15px; } .asLevelUl a.withoutVaLink12 { color: #a10000; padding-left: 6px; } .AsecurityBox0212 .aslevelAtart { color: #999 !important; } .AsecurityBox0212 .asLevelUl li { margin: 0px 5px 0px 13px; float: left; display: inline; } .my_cont12 { border: none; padding: 0px 0px 0px 10px; width: 775px; } .my_txt12 { width: 667px; } .nickname-panel12 { width: 667px; } .vjia12 { color: #333; } .AsecuryMessage12 em { font-style: normal; color: #666; } .AsecuryMessage12 em.mal1230 { margin-left: 30px; } .AsecuryMessage12 a { color: #a10000; } .my_pic a.myPicEdit12 { line-height: 50px; } .txt212 { border: 1px solid #dcdcdc; width: 460px; float: left; background: #f8f8f8; } .txt212 .orderStatusul12 li { height: 36px; line-height: 36px; border-bottom: 1px dotted #999; width: 308px; padding-left: 20px; color: #333; } .txt212 .orderStatusul12 li .padr1220 { padding-right: 20px; } .txt212 .orderStatusul12 li a span { color: #a10000; } .txt212 .orderStatusul12 li.orderStatusli1201 { width: 440px; font-weight: bold; } .txt212 .orderStatusul12 li.orderStatusli1202 { border-right: 1px dotted #999; } .txt212 .orderStatusul12 li.orderStatusli1203 { border-bottom: none; } .txt212 .orderStatusul12 li .red12 { color: #a10000; } .txt212 .orderStatusul12 li .grey12 { color: #666; } .txt212 .orderStatusul12 li .rules20120112 { font-weight: bold; padding-left: 23px; } .vancladmin_recomtitle12 li { width: 132px; padding-left: 25px; line-height: 29px; text-align: left; float: left; background: url(http://i.vanclimg.com/my/2012/recommand/menu_bg.gif) no-repeat left top; margin-right: 2px; font-size: 12px; font-weight: bold; color: #666; } .vancladmin_recomtitle12 .on { width: 132px; text-align: left; padding-left: 25px; } .vancladmin_recomtitle12 li.vancladminrecomtitleLiMore { background: none; width: auto; float: right; margin-right: 3px; display: inline; } .inviteTable12 { margin-top: 0px; border-top: none; } #menubox ul.vancladmin_recomtitle12 { overflow: hidden; border-bottom: 3px #8e0000 solid; width: 785px; } #menubox ul.vancladmin_recomtitle12 li { width: 132px; padding-left: 25px; line-height: 29px; text-align: left; float: left; background: url(http://i.vanclimg.com/my/2012/recommand/menu_bg.gif) no-repeat left top; margin-right: 2px; font-size: 12px; font-weight: bold; } #menubox ul.vancladmin_recomtitle12 .mrnone { margin: 0; } #menubox ul.vancladmin_recomtitle12 a, #menubox ul.vancladmin_recomtitle12 a:visited { color: #666; } #menubox ul.vancladmin_recomtitle12 .on { width: 132px; background: url(http://i.vanclimg.com/my/2012/recommand/menuon_bg.gif) no-repeat left top; color: #fff; cursor: pointer; } #menubox ul.vancladmin_recomtitle12 .on a, #menubox ul.vancladmin_recomtitle12 .on a:visited { color: #fff; } #menubox ul.vancladmin_recomtitle12 li.vancladminrecomtitleLiMore { background: none; width: auto; float: right; margin-right: 3px; display: inline; } #menubox ul.vancladmin_recomtitle12 li.vancladminrecomtitleLiMore a { color: #a10000; } .inviteTable12 { margin-top: 0px; border-top: none; } .opinion12, .opinion13 { background: url(http://i.vanclimg.com/my/2012/boot/yjtop.jpg) no-repeat; width: 36px; height: 93px; display: block; } .opinion13 { background-position: 0px -95px; margin-top: 3px; } /*0108*/ .rv1_tuijianlist02 { float: left; width: 739px; } .rv1_tuijianlist02 li { float: left; margin-left: 10px; display: inline; } .vancladminBtLeft, .vancladminBtRight { width: 21px; height: 100px; background: url(http://i.vanclimg.com/my/2012/boot/scrollbtn.jpg) no-repeat 0px 0px; float: left; margin-top: 29px; display: inline-block; text-indent: -9999px; cursor: pointer; overflow: hidden; } .vancladminBtRight { background-position: -33px 0px; float: right; }
            </style>
@section('con')
@show
            <!-- <script type="text/javascript" src="/ho/center/js(3).ashx"></script> -->
            <script src="/ho/center/ajaxLoadpage.js" type="text/javascript"></script>
            <!-- <script src="/ho/center/jquery.tmpl.min.js" type="text/javascript"></script> -->
            <script id="zftemplate" type="text/x-jquery-tmpl">
                <li> 
                    <p class = "v1_recohotpic"> 
                        <a class = "track"name = "my_mixrecm"target = "_blank" href = "${ ProductUrl }"rel = "${ Ref }" > 
                            <img fid = "productimg"style = "border-width:0px;"alt = "${ ProductName }"src1 = "${ SmallImage }"productid = "${ ProductCode }" > 
                        </a>
                    </p> 
                    <p class = "v1_recohottitle"> 
                        <a class = "track"name = "my_mixrecm"fid = "productname"target = "_blank" href = "${ ProductUrl }"rel = "${ Ref }"> ${ProductName} 
                        </a>
                    </p> 
                    <p class = "v1_recohotprice1" > <span class = "reda10b" > 售价￥${Price} </span></p> 
                </li>
            </script>
            <input id="hdnExcludeProductCode" type="hidden" value="6375161,6375162,6373511,6375174">
            <script type="text/javascript">var cache = new Object();
                var labelArray = []; //标签数组
                var recommendProducts; //存储推荐的productcodes
                function InitRecommand(postion, ModelProductCodeList) {
                    $("li", "[fid=recommandlist]").remove();
                    $("[fid=loading]").show();

                    var ModelRows = ModelProductCodeList.length > 6 ? 6 : ModelProductCodeList.length;
                    var items = [];
                    for (var i = 0; i < ModelRows; i++) {
                        items[i] = {
                            "MarketPrice": ModelProductCodeList[i].SPrice + ".00",
                            "Price": ModelProductCodeList[i].SPrice + ".00",
                            "ProductCode": ModelProductCodeList[i].ProductCode,
                            "ProductName": ModelProductCodeList[i].ProductName,
                            "ProductUrl": ModelProductCodeList[i].ItemUrl,
                            "SmallImage": ModelProductCodeList[i].Photos[0].FileName,
                            "Ref": "r-my_hp-frb-" + i
                        }
                    }
                    var dataList = {
                        "Message": "调用成功",
                        "Success": true,
                        "Title": "根据最近浏览商品的推荐",
                        "Items": items
                    };
                    //console.log(dataList);
                    //cache[postion] = dataList;
                    Render(dataList);
                }

                function Render(data) {
                    if (data.Success) {
                        $("[fid=loading]").hide();
                        $("li", "[fid=recommandlist]").remove();

                        ///获取推荐Tab中的ProductCode们
                        var epc = $("#hdnExcludeProductCode").val();
                        var epc_is_changed = false;

                        // $(data.Items).each(function(index) {
                        //     if (data.Items[index] == null) {
                        //         return;
                        //     }
                        //     data.Items[index].ProductUrl = "http://item.vancl.com/" + data.Items[index].ProductCode.toString() + ".html";
                        //     $("#zftemplate").tmpl(data.Items[index]).appendTo($("[fid=recommandlist]"));
                        //     //Tab切换时，处理推荐Tab对应的ProductCode们
                        //     if (("," + epc + ",").indexOf("," + data.Items[index].ProductCode.toString() + ",") == -1) {
                        //         epc_is_changed = true;
                        //         if (epc == "") {
                        //             epc = data.Items[index].ProductCode.toString();
                        //         } else {
                        //             epc += "," + data.Items[index].ProductCode.toString();
                        //         }
                        //     }
                        //     //end-11
                        // });
                        //Tab切换时，若有新ProductCode出现
                        if (epc_is_changed) {
                            $("#hdnExcludeProductCode").val(epc);
                        }

                        $("[fid=productimg]").each(function() {
                            var productcode = $(this).attr("productid");
                            var filename = $(this).attr("src1");
                            $(this).attr("src", "http://p1.vanclimg.com/110/product/" + productcode.substring(0, 1) + "/" + productcode.substring(1, 2) + "/" + productcode.substring(2, 3) + "/" + productcode + "/" + "big/" + filename);
                        });
                        $("[fid=productname]").each(function() {
                            $(this).text(GetFixedText($(this).text(), 36));
                        });
                    }
                }
                function GetFixedText(txt, length) {
                    var retval = "";
                    var allcount = getBytesCount2(txt);
                    if (allcount <= length) {
                        return txt;
                    }
                    var currentlength = 0;
                    for (var i = 0; i < txt.length; i++) {
                        var reg = new RegExp("/[\u0000-\u00ff]/g");
                        var tem;
                        if (reg.test(txt.charAt(i))) {
                            tem = 1;
                        } else {
                            tem = 2;
                        }
                        if (currentlength + tem < length - 2) {
                            currentlength += tem;
                            retval += txt.charAt(i);
                        } else {
                            return retval + "..";
                        }
                    }
                }
                function getBytesCount2(str) {
                    if (str == null) {
                        return 0;
                    } else {
                        return (str.length + str.replace(/[\u0000-\u00ff]/g, "").length);
                    }
                }
                function ArrayIndexOf(a, val) {
                    for (var i = 0; i < a.length; i = i + 1) {
                        if (a[i] === val) {
                            return i;
                        }
                    }
                    return - 1;
                }
                //搭配推荐和积分换购
                $(function() {
                    $("#position dd:last").remove();

                    // 2016 加载推荐产品
                    $.ajax({
                        async: false,
                        url: "http://recom-s.vancl.com/Product/GetCurrentRecommendProducts",
                        type: "GET",
                        dataType: 'jsonp',
                        jsonp: 'callback',
                        data: null,
                        timeout: 5000,
                        contentType: "application/json;utf-8",
                        success: function(data) {
                            if (data != null && data != undefined && data.length > 0) {
                                $(".vancladmin_recombar").show();
                                InitRecommand(data.length, data);
                            }
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            alert(textStatus);
                        }
                    });
                })
            </script>
            <div class="blank0" style="height:32px;"></div>
            <div class="vanclFoot" style="margin-top:0px;">
                <div class="vanclCustomer publicfooterclear">
                    <ul>
                        <li>
                            <a href="http://help.vancl.com/Home/contact" rel="nofollow" target="_blank">
                                <p class="onlineCustomer">
                                    <img src="/ho/center/onlinecustomer.png" style="width:auto;height:auto;"></p>
                                <p class="onlineTime">7X9小时在线客服</p></a>
                        </li>
                        <li>
                            <a href="http://help.vancl.com/Category/43-1.html" rel="nofollow" target="_blank">
                                <p class="seven">
                                    <img src="/ho/center/seven.png" style="width:auto;height:auto;"></p>
                                <p>7天内退换货</p>
                                <p>购物满199元免运费</p>
                            </a>
                        </li>
                        <li class="twocode">
                            <p>
                                <img src="/ho/center/2014_8_29_16_39_33_7709.jpg" style="width: 104px; height: 104px;"></p>
                            <p>扫描下载
                                <em>凡客</em>客户端</p></li>
                    </ul>
                </div>
                <div class="vanclOthers publicfooterclear">
                    <ul>
                        <li>
                            <a href="http://www.vancl.com/help/about.htm" target="_blank">关于凡客</a></li>
                        <li>
                            <a href="http://help.vancl.com/Content/1.html" target="_blank">新手指南</a></li>
                        <li>
                            <a href="http://help.vancl.com/category/transfer" target="_blank">配送范围及时间</a></li>
                        <li>
                            <a href="http://help.vancl.com/Category/31-1.html" target="_blank">支付方式</a></li>
                        <li>
                            <a href="http://help.vancl.com/Category/43-1.html" target="_blank">售后服务</a></li>
                        <li class="none">
                            <a href="http://help.vancl.com/" target="_blank">帮助中心</a></li>
                    </ul>
                </div>
            </div>
            <div id="footerArea" class="">
                <div class="footBottom">
                    <div class="footBottomTab">
                        <p>Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11011502002400号 出版物经营许可证新出发京批字第直110138号</p>
                        <p>凡客诚品（北京）科技有限公司</p>
                    </div>
                </div>
                <span class="blank20"></span>
                <div class="subFooter" style="margin-bottom:-35px">
                    <a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a>
                    <span class="costumeOrg"></span>
                    <a rel="nofollow" href="http://www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a>
                    <a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a>
                    <a class="vanclqingNian" target="_blank" href="http://www.vancl.com/help/about_2.htm" rel="nofollow"></a>
                    <a href="http://trust.cctvmall.cn/reg/templates/brandtem1010.html" style="display:inline-block;" target="_blank">
                        <img style="width: 120px; height: 39px;margin-bottom:35px;" src="/ho/center/kexin_brand_for_others.png"></a>
                    <div class="blank0"></div>
                </div>
            </div>
            <div class="BayWindow" style="position: fixed; right: 10px; bottom: 20px; z-index:10">
                <ul>
                    <li class="downApp">
                        <a href="http://m.vancl.com/html/app.html#ref=hp-hp-head-mobile-v:n" target="_blank"></a>
                    </li>
                    <li class="online">
                        <a href="http://imweb.vancl.com/" target="_blank"></a>
                    </li>
                    <li class="BlackTop">
                        <a href="javascript:;" onclick="javascript:document.getElementById(&#39;headerTopArea&#39;).scrollIntoView()"></a>
                    </li>
                </ul>
            </div>
            <script type="text/javascript">$(document).ready(function() {
                    var hostname = window.location.host;
                    if (hostname != "demowww.vancl.com" && hostname != "www.vancl.com" && hostname != "www.fanke.com") {
                        $(".subnavCon em").css({
                            display: "block"
                        });
                        $(".subnavCon").hover(function() {
                            $(this).find("em").addClass("emtop");
                            $(this).parent().find(".categoryList").show();
                        },
                        function() {
                            $(this).find("em").removeClass("emtop");
                            $(this).parent().find(".categoryList").hide();
                        });
                        $(".categoryList").hover(function() {
                            $(this).show();
                        },
                        function() {
                            $(this).hide();
                            $(this).parent().find(".subnavCon em").removeClass("emtop");
                        });
                    }
                });
                $(document).ready(function() {
                    var url = document.location;
                    var Arr_Crieo = "......,s.vancl.com,www.vancl.com,item.vancl.com,shopping.vancl.com,buy.vancl.com";
                    if (Arr_Crieo.indexOf(url.host) > -1) {
                        var script = document.createElement("script");
                        script.setAttribute("type", "text/javascript");
                        script.setAttribute("src", "http://static.criteo.net/js/ld/ld.js");
                        var heads = document.getElementsByTagName("head");
                        if (heads.length) {
                            heads[0].appendChild(script);
                        } else {
                            document.documentElement.appendChild(script);
                        }
                    }
                    setTimeout(function() {
                        criteopust();
                    },
                    '3000');
                });
                function criteopust() {
                    var url = document.location;
                    var Arr_Crieo = "......,www.vancl.com,item.vancl.com,shopping.vancl.com,buy.vancl.com";
                    window.criteo_q = window.criteo_q || [];
                    var _U = "";
                    $.getJSON("http://weixinshop.vancl.com/sess/GetUserFromCookies?callback=?",
                    function(data) {
                        _U = data.json;
                        if (_U == "D41D8CD98F00B204E9800998ECF8427E") {
                            _U = "";
                        }
                        switch (url.host) {
                        case "www.vancl.com":
                            console.log("crite www.vancl.com");
                            window.criteo_q.push({
                                event:
                                "setAccount",
                                account: 24712
                            },
                            {
                                event: "setHashedEmail",
                                email: _U
                            },
                            {
                                event: "setSiteType",
                                type: "d"
                            },
                            {
                                event: "viewHome"
                            });
                            break;
                        case "s.vancl.com":
                            console.log("crite s.vancl.com");
                            var _sitem = [];
                            $(".pic").each(function() {
                                _sitem.push($(this).attr("pop"));
                            });
                            window.criteo_q.push({
                                event: "setAccount",
                                account: 24712
                            },
                            {
                                event: "setHashedEmail",
                                email: _U
                            },
                            {
                                event: "setSiteType",
                                type: "d"
                            },
                            {
                                event: "viewList",
                                item: _sitem
                            });
                            break;
                        case "item.vancl.com":
                            console.log("crite item.vancl.com");
                            var _productcode = $("#productcode").html().split("：")[1];
                            window.criteo_q.push({
                                event: "setAccount",
                                account: 24712
                            },
                            {
                                event: "setHashedEmail",
                                email: _U
                            },
                            {
                                event: "setSiteType",
                                type: "d"
                            },
                            {
                                event: "viewItem",
                                item: _productcode
                            });
                            break;
                        case "shopping.vancl.com":
                            console.log("crite shopping.vancl.com");
                            if (url.href.indexOf("mycart") > -1) {
                                var _shopitem = [];
                                $("td.qty").each(function() {
                                    var _json = {
                                        "id": $(this).find("input[name=product-code]").val(),
                                        price: 0,
                                        quantity: $(this).find("input[name=product-qty]").val()
                                    };
                                    _shopitem.push(_json);
                                });
                                window.criteo_q.push({
                                    event: "setAccount",
                                    account: 24712
                                },
                                {
                                    event: "setHashedEmail",
                                    email: _U
                                },
                                {
                                    event: "setSiteType",
                                    type: "d"
                                },
                                {
                                    event: "viewBasket",
                                    item: _shopitem
                                });
                            }
                            break;
                        case "buy.vancl.com":
                            console.log("crite buy.vancl.com");
                            if (url.href.indexOf("success") > -1) {
                                var _shopitem = [];
                                var _formcode = $("#formcode").val();
                                var _products = $(".order").attr("data-product-codes");
                                var _products_split = _products.split(",");
                                for (var i = 0; i < _products_split.length; i++) {
                                    var _json = {
                                        "id": _products_split[i],
                                        price: 0,
                                        quantity: 1
                                    };
                                    _shopitem.push(_json);
                                }
                                window.criteo_q.push({
                                    event: "setAccount",
                                    account: 24712
                                },
                                {
                                    event: "setHashedEmail",
                                    email: _U
                                },
                                {
                                    event: "setSiteType",
                                    type: "d"
                                },
                                {
                                    event: "trackTransaction",
                                    id: _formcode,
                                    item: _shopitem
                                });
                            }
                            break;
                        }
                    });
                }
                setTimeout(function() {
                    var bp = document.createElement('script');
                    bp.src = '//push.zhanzhang.baidu.com/push.js';
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(bp, s);
                },
                1000);
                $(function() {
                    $(".subNav").hide();
                    $(".navlist ul li").hover(function() {
                        $(this).find(".subNav").stop(true, true);
                        $(this).find(".subNav").slideDown();
                    },
                    function() {
                        $(this).find(".subNav").stop(true, true);
                        $(this).find(".subNav").slideUp();
                    });
                })</script>
        </div>
        <div id="WeixinBox" style="position: fixed; bottom: 0px; z-index: 1000; width: 146px;">
            <img src="/ho/center/tc.png" alt="关闭" title="关闭" style="float:right;cursor:pointer;" onclick="closeWeixin();">
            <span class="blank0"></span>
            <img src="/ho/center/vanclqrcode2.jpg" alt="凡客二维码" title="凡客二维码" style="width:144px;border:1px solid #EFEFEF;"></div>
        <script type="text/javascript" src="/ho/center/js(4).ashx"></script>
        <div id="imdiv" style="width:112px; height:25px; padding-top:3px;float:right; background:url(http://i.vanclimg.com/others/2011/11/9/bg.gif) center no-repeat; position:fixed;_position:absolute;_bottom:auto; right:0; bottom:0;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)))">
            <img hspace="6" src="/ho/center/icon.gif" align="absmiddle">
            <a style="padding-right:8px;" href="http://imweb.vancl.com/" id="impage" target="_blank">在线客服</a>
            <a href="http://my.vancl.com/#">
                <img src="/ho/center/top.gif" hspace="3" align="absmiddle"></a>
        </div>
    </body>

</html>