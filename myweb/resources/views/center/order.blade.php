<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0026)http://my.vancl.com/Order/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
  
  <head id="Head1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
    <title>我的订单</title>
    <script src="/order_files/push.js"></script>
    <script type="text/javascript" src="./order_files/js.ashx"></script>
    <link href="./order_files/css.ashx" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="http://i.vanclimg.com/common/favicon/favicon.ico" type="image/x-icon">
    <link type="text/css" rel="stylesheet" href="./order_files/css(1).ashx">
    <script type="text/javascript" src="./order_files/js(1).ashx"></script>
    <script type="text/javascript" language="javascript">var COOKIE_NAME_WEIXIN = "COOKIE_NAME_WEIXIN";
      $(function() {
        //'标记已看到菜单移位通知'的cookie名
        //            var COOKIE_NAME_NEWPLACENOTICE1 = "COOKIE_NAME_NEWPLACENOTICE1";
        //            var npn1 = getCookie(COOKIE_NAME_NEWPLACENOTICE1) != "viewed";
        //            $.each($("#side-nav").find("ul").children(), function () {
        //                if ($(this).find("a").text().indexOf("账户安全") > -1) {
        //                    $(this).css("position", "relative").prepend($("<p style='position:absolute; top:0; left:88px; width:30px; height:20px; background:url(//i.vanclimg.com/header/20120309/spritesbg.png) no-repeat -190px -137px;'></p>"));
        //                }
        //                if (npn1) {
        //                    if ($(this).find("a").text().indexOf("退换货") > -1) {
        //                        $(this).css("position", "relative").prepend($("<p id='newplacenotice1' style='cursor: pointer;position:absolute; top:1px; left:103px; width:82px; height:20px; background:url(//i.vanclimg.com/my/2012/boot/pjiabg.png) no-repeat -645px 0;  '></p>"));
        //                    }
        //                }
        //            });
        //            if (npn1) {
        //                $("#newplacenotice1").bind("click", function () {
        //                    setCookie(COOKIE_NAME_NEWPLACENOTICE1, "viewed", 365 * 100);
        //                    $(this).remove();
        //                });
        //            }
        if (!getCookie(COOKIE_NAME_WEIXIN)) {
          $("#WeixinBox").show();
        }
        $("img[original]").lazyload();
      });
      function closeWeixin() {
        $("#WeixinBox").hide();
        setCookie(COOKIE_NAME_WEIXIN, "closed");
      }</script>
    <style type="text/css">body { font-size: 12px !important; } .newitenforsafecenteonly { background: url("http://i.vanclimg.com/header/20120309/spritesbg.png") no-repeat scroll 0 0 transparent; background-position: -190px -132px; width: 100px; } #Head a:hover { text-decoration: none; }</style></head>
  
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
              <div id="welcome" class="top loginArea">您好,
                <a href="http://my.vancl.com/" class="top track" name="head-denglu" style="color: rgb(51, 51, 51);">1314*****0...</a>
                <span style="color: #a10000">
                  <a class="top track" style="color: #a10000" href="https://login.vancl.com/Login/UserLoginOut.aspx" target="_parent" name="head-tcdl">退出登录</a>&nbsp;|&nbsp;
                  <a class="track" name="head-ghyh" href="javascript:VANCL.Global.login();" style="color: #a10000">更换用户</a></span>
              </div>
              <div class="recommendArea">
                <a href="http://my.vancl.com/Order/" rel="nofollow" class="track" name="hp-hp-head-order-v:n">我的订单</a></div>
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
            <div class="buycar fr active" id="shoppingCarNone">
              <p>
                <a id="shoppingcar_link" rel="nofollow" href="http://shopping.vancl.com/mycart" name="hp-hp-head-cart-v:n:t" class="shopborder track cartab">购物车(
                  <span car_product_total="shoppingCar_product_totalcount">0</span>)</a>
                <s>
                </s>
              </p>
              <div class="bottomlines"></div>
              <div class="BuycarTab shopDropList"></div>
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
            <a href="http://www.vancl.com/"></a>
          </li>
          <li>
            <a href="http://www.vancl.com/">首页</a>
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
            <div class="subNav" style="display: none;*postion:relative;*z-index:300;">
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
        <dt>您当前的位置：
          <a href="http://www.vancl.com/">凡客首页</a></dt>
        <dd>&gt;
          <a href="http://my.vancl.com/">我的凡客</a></dd>
        <dd>&gt;
          <span id="UserMap">
            <a href="http://my.vancl.com/order">我的订单</a></span>
        </dd>
      </dl>
      <div id="welcome"></div>
      <div id="side-nav">
        <div class="my_vancl">
          <h2>
            <a href="http://my.vancl.com/" class="track" name="my-left-left-commorder">我的凡客</a></h2>
        </div>
        <ul class="">
          <li>
            <h3>订单中心</h3></li>
          <li class="">
            <a href="http://my.vancl.com/Order/" class="track selected" name="my-left-left-Order" itemurl="http://my.vancl.com/Order/" url="http://my.vancl.com/Order/">·我的订单</a></li>
          <li class="">
            <a href="http://my.vancl.com/Order/?type=dingzhi" class="track" name="my-left-left-Order" itemurl="http://my.vancl.com/Order/?type=dingzhi" url="http://my.vancl.com/Order/">·我的定制订单</a></li>
          <li class="">
            <a href="http://my.vancl.com/GiftCard" class="track" name="my-left-left-card" itemurl="http://my.vancl.com/GiftCard" url="http://my.vancl.com/Order/">·我的礼品卡</a></li>
          <li class="no_bg">
            <a href="http://my.vancl.com/UserPoints/Index" class="track" name="my-left-left-huiyuanscore" itemurl="http://my.vancl.com/UserPoints/Index" url="http://my.vancl.com/Order/">·我的积分</a></li>
        </ul>
        <ul class="">
          <li>
            <h3>客户服务</h3></li>
          <li class="">
            <a href="http://returns.vancl.com/" class="track" name="my-left-left-returnorder" itemurl="http://returns.vancl.com/" url="http://my.vancl.com/Order/">·退换货办理</a></li>
          <li class="">
            <a href="http://my.vancl.com/comment/" class="track" name="my-left-left-productcomment" itemurl="http://my.vancl.com/comment/" url="http://my.vancl.com/Order/">·我要评价</a></li>
          <li class="">
            <a href="http://my.vancl.com/question" class="track" name="my-left-left-productquestion" itemurl="http://my.vancl.com/question" url="http://my.vancl.com/Order/">·商品提问</a></li>
        </ul>
        <ul class="service-rate">
          <li>
            <h3>账户管理</h3></li>
          <li class="">
            <a href="http://my.vancl.com/user/account" class="track" name="my-left-left-account" itemurl="http://my.vancl.com/user/account" url="http://my.vancl.com/Order/">·账户余额</a></li>
          <li class="">
            <a href="http://my.vancl.com/DeliveryAddress/Index" class="track" name="my-left-left-modifyDeliveryInfo" itemurl="http://my.vancl.com/DeliveryAddress/Index" url="http://my.vancl.com/Order/">·收货地址</a></li>
          <li class="">
            <a href="http://my.vancl.com/SafeCenter" class="track" name="my-left-left-modifypassword" itemurl="http://my.vancl.com/SafeCenter" url="http://my.vancl.com/Order/">·账户安全</a></li>
          <li class="">
            <a href="http://my.vancl.com/User/UserInfo" class="track" name="my-left-left-personinfo" itemurl="http://my.vancl.com/User/UserInfo" url="http://my.vancl.com/Order/">·我的资料</a></li>
          <li class="no_bg">
            <a href="http://my.vancl.com/federatedlogin" class="track" name="my-left-left-assoaccount" itemurl="http://my.vancl.com/federatedlogin" url="http://my.vancl.com/Order/">·我的关联账户</a></li>
        </ul>
      </div>
      <link type="text/css" rel="stylesheet" href="./order_files/css(2).ashx">
      <div class="ordercontainer">
        <h3>
          <span>我的订单</span>
          <a href="http://catalog.vancl.com/zhuanti/tg_20100510.html" style="color: #a10000;
          float: right; border: none; font-size: 12px; font-weight: normal; background: url(http://i4.vanclimg.com/cms/20151231/pic_my.jpg) no-repeat left center;
          text-indent: 20px; margin: 0 5px 0 0;" target="_blank">谨防诈骗公告</a>
        </h3>
        <div>
          <div class="blank10"></div>
        </div>
        <div class="AsecurityBox01">
          <div class="asProgress">
            <em>账户安全：</em>
            <div class="asProgSpeed">
              <span class="asProgNow">弱</span>
              <span class="">中</span>
              <span class="">强</span></div>
          </div>
          <ul class="asProgUl" style="_margin-right:-12px;">
            <li class="asProgPhone01">
              <a href="http://my.vancl.com/SafeCenter" title="手机未验证" class="track" name="my-order-safe-phone">
                <em></em>手机未验证</a>
            </li>
            <li class="asProgEmail01">
              <a href="http://my.vancl.com/SafeCenter" title="邮箱未验证" class="track" name="my-order-safe-email">
                <em></em>邮箱未验证</a>
            </li>
            <li class="asProgPassword01" style="display:none;">
              <a href="http://my.vancl.com/SafeCenter" title="未设置支付密码" class="track" name="my-order-safe-pay">
                <em></em>未设置支付密码</a>
            </li>
          </ul>
          <div class="asProgAtarts" style="display:none;">为保障账户及资金安全,建议您开启全部
            <a href="http://my.vancl.com/SafeCenter" class="track" name="my-order-safecenter">安全设置</a></div>
          <div class="blank0"></div>
        </div>
        <!--<div class="blank10"></div>
        <div style="width: 778px; height: 56px; line-height: 28px; border: 1px #cc9998 solid;
        float: left; background: #fff6f7;">
        <span style="width: 28px; height: 18px; display: block; float: left; background: url(http://i1.vanclimg.com/returns/returns/sprite_bg.png) no-repeat 8px -49px;
        margin-top: 5px;"></span>
        <div style="width: 750px; float: left;">尊敬的客户，您在购买第三方品牌的商品后需要换货时，如发现此商品处于售罄状态，请先办理退货，然后用您的账号登陆<a href="http://www.vjia.com" target="_blank">www.vjia.com</a>，搜索到此商品后根据库存状况重新下单。</div></div>
        -->
        <div class="blank10"></div>
        <div class="wtitle">
          <div id="cover"></div>
          <input type="hidden" value="all" id="dingzhiType" name="dingzhiType">
          <div id="myTab" class="wtitle_l">
            <input type="hidden" id="Cance" name="Cance" value="true">
            <input type="hidden" id="TxtOid" name="TxtOid" value="0">
            <input id="hidHavePaid" name="hidHavePaid" type="hidden" value="0">
            <input id="cancelordernum" name="cancelordernum" type="hidden" value="0">
            <input id="QueryStatus" name="QueryStatus" type="hidden" value="全部订单">
            <a href="javascript:void(0)" class="track wtitle_lNa" name="my_Index_id_allOrder">全部订单
              <span>(0)</span></a>
            <a href="javascript:void(0)" class="track " name="my_Index_id_workingOrder">进行中
              <span>(
                <span>0</span>)</span></a>
            <a href="javascript:void(0)" class="track" name="my_Index_id_finishOrder">已完成
              <span>(0)</span></a>
            <a href="javascript:void(0)" class="track" name="my_Index_id_nouseOrder">无效
              <span>(
                <span>0</span>)</span></a>
          </div>
          <div class="wtitle_r">
            <select id="posttime" name="posttime">
              <option selected="selected" value="2017-01-04,2017-02-02">30天内的订单</option>
              <option value="2017-01-01,2017-12-31">2017年的订单</option>
              <option value="2016-01-01,2016-12-31">2016年的订单</option></select>
          </div>
          <form action="http://my.vancl.com/Order/OrderList4" data-ajax="true" data-ajax-begin="ClearList" data-ajax-loading="#LoadingDiv" data-ajax-method="post" data-ajax-mode="replace" data-ajax-success="UpdateSumTags" data-ajax-update="#orderlist" id="form0" method="post">
            <input id="datestring" name="datestring" type="hidden" value="30天内的订单">
            <input id="isPageing" name="isPageing" type="hidden" value="False">
            <input id="strtype" name="strtype" type="hidden" value="all">
            <input type="hidden" value="0" id="orderstatus" name="orderstatus">
            <input type="hidden" value="2017-01-04,2017-02-02" id="hidPostTime" name="hidPostTime"></form>
        </div>
        <div id="orderlist">
          <style type="text/css">.VerticalContainer{ display:table;*position: relative; } .VerticalSubContainer{ *position: absolute;*top: 50%;display: table-cell;vertical-align: middle;} .VerticalItem{ *position: relative;*top: -50%;} .VerticalSubContainer ul li { list-style: none outside none; } .VerticalSubContainer *{_position:relative;} .productImgBtn{float:left;} .widdent_w3{ *position: absolute;*top: 50%; *left:344px;} .widdent_w4{ *position: absolute;*top: 50%; *left:507px;} .widdent_w5{ *position: absolute;*top: 50%; *left:603px;} .widdent_info{ *position: relative;} .orderinfo{*position:relative;*z-index:4;} .Comment0903 .SubmitOk input{*position:static!important;} .haiwaigouion{width: 33px !important;height: 23px !important;background: url(http://i1.vanclimg.com/cms/20161219/formshouer.jpg) no-repeat 0 0;} .haiwaigou_popup{ position: absolute; margin: 0; padding: 0; margin-left: 30px; margin-top: 5px; width: 234px; z-index:100; display: none;} .haiwaigou_write { border: #a20000 1px solid; border-top: none; width: 222px; background-color: #fff; height: auto; padding: 5px; word-wrap: break-word; color:Black; background-color:White; } .hwg_hidden{display:none;} .haiwaigoubox:hover .haiwaigou_popup{display:block;}</style>
          <div id="LoadingDiv" style="display: none">正在为您提交，请稍候...
            <img src="./order_files/loading.gif" class="imglodding" alt=""></div>
          <div class="orderinfo">
            <input id="hidInCompleteCount" name="hidInCompleteCount" type="hidden" value="0">
            <input id="hidCompleteCount" name="hidCompleteCount" type="hidden" value="0">
            <input id="hidInvalidCount" name="hidInvalidCount" type="hidden" value="0">
            <input id="PagingRecordCount" name="PagingRecordCount" type="hidden" value="0">
            <input id="strtype" name="strtype" type="hidden" value="all">
            <div class="windent">
              <span class="blank40"></span>
              <center>目前您暂无30天内的订单记录，请选择其他时间段查看。</center>
              <span class="blank40"></span>
            </div>
          </div>
          <div id="confrim" style="display: none"></div>
        </div>
        <!--弹出层1begin-->
        <div class="deleteOrder_Box" id="canceDivNew" style="display: none; position: absolute;
        z-index: 1000; background-color: White;">
          <div class="deleteOrder_Tab">
            <h2>
              <span>取消订单</span>
              <a onclick="CloseAllMenu();" style="color: White;">关闭</a></h2>
            <div class="deleteOrder_Content">
              <h3>请选择取消原因：</h3>
              <ul id="ulCancelList">
                <li>
                  <input name="cancelreason" type="radio" value="1" onclick="SelectCancelRadio();">
                  <span>忘选优惠品</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="2" onclick="SelectCancelRadio();">
                  <span>支付失败</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="3" onclick="SelectCancelRadio();">
                  <span>有缺货商品</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="4" onclick="SelectCancelRadio();">
                  <span>等待太久</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="5" onclick="SelectCancelRadio();">
                  <span>订购错误</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="6" onclick="SelectCancelRadio();">
                  <span>已在别处购买</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="7" onclick="SelectCancelRadio();">
                  <span>价格太贵</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="8" onclick="SelectCancelRadio();">
                  <span>更换其他商品</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="9" onclick="SelectCancelRadio();">
                  <span>订单重复</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="10" onclick="SelectCancelRadio();">
                  <span>测试订单</span></li>
                <li>
                  <input name="cancelreason" type="radio" value="11" onclick="SelectCancelRadio();">
                  <span>其他</span></li>
              </ul>
              <span class="blank15"></span>
              <div class="deleteOrder_Area" style="display: none;">
                <textarea id="txtCancelReason" style="max-height: 39px; min-height: 39px; max-width: 271px;
                min-width: 271px; overflow: auto;">
                </textarea>
              </div>
              <span class="blank15"></span>
              <div id="divForSubmit" class="deleteOrder_btn">
                <a onclick="ordercanceNew();" style="color: White;">提交</a></div>
              <p class="delectOrder_nowTj" style="display: none;">
                <em></em>
                <span>正在提交...</span></p>
            </div>
          </div>
          <div class="deleteOrder_Pointer"></div>
          <span class="blank0"></span>
        </div>
        <!--弹出层1end-->
        <!--弹出层2begin-->
        <div class="deleteOrder_Box" id="alertOrderDivNew" style="display: none; position: absolute;
        background-color: White;">
          <div class="deleteOrder_Tab">
            <h2>
              <span>取消订单</span>
              <a onclick="CloseAllMenu();" style="color: White;">关闭</a></h2>
            <div class="deleteOrder_Content deleteOrder_Content02">
              <div id="divForSuccess" class="delectOrder_Ok">
                <em></em>
                <span>成功取消!</span></div>
              <span class="blank10"></span>
              <p id="pForAlert">温馨提示：您已经支付的金额将原渠道退还给您，请您注意查收。</p>
              <span class="blank20"></span>
              <div class="deleteOrder_btn deleteOrder_btn01" id="btnConfirm">
                <a style="color: White;">确定</a>
                <a onclick="ReShopping();" class="deleteOrder_newSelect">重新购物&gt;&gt;</a></div>
            </div>
          </div>
          <div class="deleteOrder_Pointer"></div>
          <span class="blank0"></span>
        </div>
        <!--弹出层2end-->
        <div id="divForAlert" style="display: none;">
          <p>温馨提示：您已经支付的金额将原渠道退还给您，请您注意查收。</p>
          <p>温馨提示：订单已取消或超出取消时限。</p>
          <p>温馨提示：系统繁忙，请刷新
            <a onclick="JumpToMyOrder();" style="color: #A10000; text-decoration: underline;">我的订单</a>后重试</p></div>
      </div>
      <input type="hidden" id="hidrel" value="my_order_recommendlist_">
      <div class="myOrder_buyProductsBar" style=" margin-top:15px;">
        <div class="mv_RecommendedTitle">
          <h3 class="titname" fid="titname">为您推荐</h3></div>
        <span class="blank20"></span>
        <ul id="recommendlist" class="myOrder_buyProductsList" style="display: block;">
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6375173.html" rel="undefined" class="track" name="my-recommend-first-productpicture" target="_blank" title="凡客夹克 双帽双拉链 轻弹 男款 藏青色">
                <img src="./order_files/6375173-1j201609131406567247.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6375173.html" rel="undefined" class="track" name="my-recommend-first-producname" target="_blank" title="凡客夹克 双帽双拉链 轻弹 男款 藏青色">凡客夹克 双帽双拉链 轻弹 男款 藏青色</a></p>
            <p class="s_price">市场价：￥
              <span>499.00</span></p>
            <p class="price">售价：￥499.00</p></li>
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6375179.html" rel="undefined" class="track" name="my-recommend-second-productpicture" target="_blank" title="凡客羊毛西服 MOON 英伦人字纹 男款 黑白人字纹">
                <img src="./order_files/6375179-1j201610091614197346.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6375179.html" rel="undefined" class="track" name="my-recommend-second-producname" target="_blank" title="凡客羊毛西服 MOON 英伦人字纹 男款 黑白人字纹">凡客羊毛西服 MOON 英伦人字纹 男款 黑白人字...</a></p>
            <p class="s_price">市场价：￥
              <span>1299.00</span></p>
            <p class="price">售价：￥1299.00</p></li>
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6375182.html" rel="undefined" class="track" name="my-recommend-third-productpicture" target="_blank" title="凡客卫衣 中空棉拉链开衫 男款 蓝花灰">
                <img src="./order_files/6375182-1j201610121541009288.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6375182.html" rel="undefined" class="track" name="my-recommend-third-producname" target="_blank" title="凡客卫衣 中空棉拉链开衫 男款 蓝花灰">凡客卫衣 中空棉拉链开衫 男款 蓝花灰</a></p>
            <p class="s_price">市场价：￥
              <span>799.00</span></p>
            <p class="price">售价：￥799.00</p></li>
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6375339.html" rel="undefined" class="track" name="my-recommend-fourth-productpicture" target="_blank" title="凡客卫衣 基础拉链开衫 男 蓝花灰">
                <img src="./order_files/6375339-1j201610111103463439.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6375339.html" rel="undefined" class="track" name="my-recommend-fourth-producname" target="_blank" title="凡客卫衣 基础拉链开衫 男 蓝花灰">凡客卫衣 基础拉链开衫 男 蓝花灰</a></p>
            <p class="s_price">市场价：￥
              <span>349.00</span></p>
            <p class="price">售价：￥349.00</p></li>
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6375415.html" rel="undefined" class="track" name="my-recommend-fifth-productpicture" target="_blank" title="凡客外套 PIMA棒球服 男 花灰色">
                <img src="./order_files/6375415-1j201610170943343306.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6375415.html" rel="undefined" class="track" name="my-recommend-fifth-producname" target="_blank" title="凡客外套 PIMA棒球服 男 花灰色">凡客外套 PIMA棒球服 男 花灰色</a></p>
            <p class="s_price">市场价：￥
              <span>599.00</span></p>
            <p class="price">售价：￥599.00</p></li>
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6375135.html" rel="undefined" class="track" name="my-recommend-sixth-productpicture" target="_blank" title="凡客棉线衫 V领套衫 男款 黑色">
                <img src="./order_files/6375135-1j201609120919557283.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6375135.html" rel="undefined" class="track" name="my-recommend-sixth-producname" target="_blank" title="凡客棉线衫 V领套衫 男款 黑色">凡客棉线衫 V领套衫 男款 黑色</a></p>
            <p class="s_price">市场价：￥
              <span>329.00</span></p>
            <p class="price">售价：￥329.00</p></li>
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6375168.html" rel="undefined" class="track" name="my-recommend-seven-productpicture" target="_blank" title="凡客外套 水柔棉 拉链开衫 男款 黑色">
                <img src="./order_files/6375168-1j201609071437442000.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6375168.html" rel="undefined" class="track" name="my-recommend-seven-producname" target="_blank" title="凡客外套 水柔棉 拉链开衫 男款 黑色">凡客外套 水柔棉 拉链开衫 男款 黑色</a></p>
            <p class="s_price">市场价：￥
              <span>599.00</span></p>
            <p class="price">售价：￥599.00</p></li>
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6375161.html" rel="undefined" class="track" name="my-recommend-eight-productpicture" target="_blank" title="凡客T恤 水柔棉 长袖V领 男款 黑色">
                <img src="./order_files/6375161-1j201609021754113595.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6375161.html" rel="undefined" class="track" name="my-recommend-eight-producname" target="_blank" title="凡客T恤 水柔棉 长袖V领 男款 黑色">凡客T恤 水柔棉 长袖V领 男款 黑色</a></p>
            <p class="s_price">市场价：￥
              <span>299.00</span></p>
            <p class="price">售价：￥299.00</p></li>
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6375162.html" rel="undefined" class="track" name="my-recommend-nine-productpicture" target="_blank" title="凡客T恤 水柔棉 长袖圆领 男款 白色">
                <img src="./order_files/6375162-1j201609021752564202.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6375162.html" rel="undefined" class="track" name="my-recommend-nine-producname" target="_blank" title="凡客T恤 水柔棉 长袖圆领 男款 白色">凡客T恤 水柔棉 长袖圆领 男款 白色</a></p>
            <p class="s_price">市场价：￥
              <span>299.00</span></p>
            <p class="price">售价：￥299.00</p></li>
          <li>
            <p class="pic">
              <a href="http://item.vancl.com/6373511.html" rel="undefined" class="track" name="my-recommend-ten-productpicture" target="_blank" title="凡客衬衫 牛津纺  男款 天蓝色">
                <img src="./order_files/6373511-1j201508251421128649.jpg" width="130" height="130"></a>
            </p>
            <p class="prod_name">
              <a href="http://item.vancl.com/6373511.html" rel="undefined" class="track" name="my-recommend-ten-producname" target="_blank" title="凡客衬衫 牛津纺  男款 天蓝色">凡客衬衫 牛津纺 男款 天蓝色</a></p>
            <p class="s_price">市场价：￥
              <span>199.00</span></p>
            <p class="price">售价：￥199.00</p></li>
        </ul>
        <input type="hidden" id="product-code-list" value="">
        <input type="hidden" id="rows" value="50">
        <input type="hidden" id="userid" value="80238269">
        <input type="hidden" id="recm-type" value="1">
        <input type="hidden" id="type" value="LookAndLook">
        <input type="hidden" id="recommandtype" value="order">
        <input type="hidden" id="recommandpostion" value="rp_myvancl_order">
        <span class="blank10"></span>
      </div>
      <!--我的订单 为您推荐-->
      <div style="float:right;width:778px;margin-top:5px; display:none;">
        <div class="RecommendedTitle_Pages">
          <span id="page-info">
            <label>1</label>
            <span>/1</span></span>
          <span id="pagination">
            <div class="pagination">
              <span class="prev track" name="my-recommend-previous page"></span>
              <span class="next track" name="my-recommend-next page"></span>
            </div>
          </span>
        </div>
      </div>
      <script type="text/javascript" src="./order_files/js(2).ashx"></script>
      <input type="hidden" id="hidFormCodeM" value="0">
      <!--[if lte IE 6]>
        <script type="text/javascript">isIE6 = true;</script>
      <![endif]-->
      <script type="text/javascript">$(document).ready(function() {
          $("#MvcPager_Ctrl0_pib").css("width", "16px");
          $("#User_Order_List").addClass("current"); //控制CSS
          $("#UserMap").html("<a href='/order'>我的订单</a>"); //控制CSS
          $("#MvcPager_Ctrl0_pib").css("width", "16px");
          $("#posttime").val($("#posttime option:eq(0)").val());
          if ($("#dingzhiType").val() == "dingzhi") {
            getInitOrderList(); //初始化订单列表
          } else {
            getLabelCount(); //初始化订单列表标签数量
            getInitOrderList(); //初始化订单列表
          }

        });

        function getDingzhiOrderList() {
          $('#LoadingDiv').show();
          var url = "/order/orderlist4?id=1&datestring=" + escape("30天内的订单") + "&orderstatus=" + escape($("#QueryStatus").val()) + "&hidPostTime=" + $("#posttime").val() + "&strtype=" + $("#dingzhiType").val() + "&_=" + Math.random();

          //合并订单修改2012/10/23 start
          if ($('#hidFormCodeM').val() != 0) {
            url += "&formCodeM=" + $('#hidFormCodeM').val();
          }
          //合并订单修改2012/10/23 end
          $.get(url,
          function(data) {
            $("#orderlist").html(data);
            $('#LoadingDiv').hide();
          });
        }</script>
      <br>
      <script src="./order_files/js(3).ashx" type="text/javascript"></script>
      <script type="text/javascript" src="./order_files/js(4).ashx"></script>
      <div class="blank0" style="height:32px;"></div>
      <div class="vanclFoot" style="margin-top:0px;">
        <div class="vanclCustomer publicfooterclear">
          <ul>
            <li>
              <a href="http://help.vancl.com/Home/contact" rel="nofollow" target="_blank">
                <p class="onlineCustomer">
                  <img src="./order_files/onlinecustomer.png" style="width:auto;height:auto;"></p>
                <p class="onlineTime">7X9小时在线客服</p></a>
            </li>
            <li>
              <a href="http://help.vancl.com/Category/43-1.html" rel="nofollow" target="_blank">
                <p class="seven">
                  <img src="./order_files/seven.png" style="width:auto;height:auto;"></p>
                <p>7天内退换货</p>
                <p>购物满199元免运费</p>
              </a>
            </li>
            <li class="twocode">
              <p>
                <img src="./order_files/2014_8_29_16_39_33_7709.jpg" style="width: 104px; height: 104px;"></p>
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
        <div class="subFooter">
          <a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a>
          <span class="costumeOrg"></span>
          <a rel="nofollow" href="http://www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a>
          <a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a>
          <a class="vanclqingNian" target="_blank" href="http://www.vancl.com/help/about_2.htm" rel="nofollow"></a>
          <a href="http://trust.cctvmall.cn/reg/templates/brandtem1010.html" style="display: inline-block;" target="_blank">
            <img style="width: 120px; height: 39px;" src="./order_files/kexin_brand_for_others.png"></a>
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
      <img src="./order_files/tc.png" alt="关闭" title="关闭" style="float:right;cursor:pointer;" onclick="closeWeixin();">
      <span class="blank0"></span>
      <img src="./order_files/vanclqrcode2.jpg" alt="凡客二维码" title="凡客二维码" style="width:144px;border:1px solid #EFEFEF;"></div>
    <script type="text/javascript" src="./order_files/js(5).ashx"></script>
    <div id="imdiv" style="width:112px; height:25px; padding-top:3px;float:right; background:url(http://i.vanclimg.com/others/2011/11/9/bg.gif) center no-repeat; position:fixed;_position:absolute;_bottom:auto; right:0; bottom:0;_top:expression(eval(document.documentElement.scrollTop+document.documentElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0)))">
      <img hspace="6" src="./order_files/icon.gif" align="absmiddle">
      <a style="padding-right:8px;" href="http://imweb.vancl.com/" id="impage" target="_blank">在线客服</a>
      <a href="http://my.vancl.com/Order/#">
        <img src="./order_files/top.gif" hspace="3" align="absmiddle"></a>
    </div>
  </body>

</html>