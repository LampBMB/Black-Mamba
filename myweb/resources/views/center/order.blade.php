@extends('layout.homecenter')
@section('title')
我的订单
@endsection
@section('dt')
&gt; <a href="/home/center/order">我的订单</a>
@endsection
@section('con')
<div class="ordercontainer">
  <h3><span>我的订单</span>
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
      <img src="/ho/center/loading.gif" class="imglodding" alt=""></div>
    <div class="orderinfo">
      <div style="vertical-align: middle; height: 30px;">
          <input id="selectAllOrder" value="全选" name="selectAllOrder" style="margin-right: 10px;
              width: 13px; height: 13px; vertical-align: middle; line-height: 30px;" type="checkbox"><label for="selectAllOrder" style="line-height: 30px;">全选</label>
          <a id="delAllOrder" class="delAllOrder" href="javascript:void(0);">删除无效订单</a>
      </div>
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

<div class="myOrder_buyProductsBar" style=" margin-top:15px;">
  <div class="mv_RecommendedTitle">
    <h3 class="titname" fid="titname">为您推荐</h3></div>
  <span class="blank20"></span>
  <ul id="recommendlist" class="myOrder_buyProductsList" style="display: block;">
    <li>
      <p class="pic">
        <a href="http://item.vancl.com/6375173.html" rel="undefined" class="track" name="my-recommend-first-productpicture" target="_blank" title="凡客夹克 双帽双拉链 轻弹 男款 藏青色">
          <img src="/ho/center/6375173-1j201609131406567247.jpg" width="130" height="130"></a>
      </p>
      <p class="prod_name">
        <a href="http://item.vancl.com/6375173.html" rel="undefined" class="track" name="my-recommend-first-producname" target="_blank" title="凡客夹克 双帽双拉链 轻弹 男款 藏青色">凡客夹克 双帽双拉链 轻弹 男款 藏青色</a></p>
      <p class="s_price">市场价：￥
        <span>499.00</span></p>
      <p class="price">售价：￥499.00</p></li>
    <li>
      <p class="pic">
        <a href="http://item.vancl.com/6375179.html" rel="undefined" class="track" name="my-recommend-second-productpicture" target="_blank" title="凡客羊毛西服 MOON 英伦人字纹 男款 黑白人字纹">
          <img src="/ho/center/6375179-1j201610091614197346.jpg" width="130" height="130"></a>
      </p>
      <p class="prod_name">
        <a href="http://item.vancl.com/6375179.html" rel="undefined" class="track" name="my-recommend-second-producname" target="_blank" title="凡客羊毛西服 MOON 英伦人字纹 男款 黑白人字纹">凡客羊毛西服 MOON 英伦人字纹 男款 黑白人字...</a></p>
      <p class="s_price">市场价：￥
        <span>1299.00</span></p>
      <p class="price">售价：￥1299.00</p></li>
    <li>
      <p class="pic">
        <a href="http://item.vancl.com/6375182.html" rel="undefined" class="track" name="my-recommend-third-productpicture" target="_blank" title="凡客卫衣 中空棉拉链开衫 男款 蓝花灰">
          <img src="/ho/center/6375182-1j201610121541009288.jpg" width="130" height="130"></a>
      </p>
      <p class="prod_name">
        <a href="http://item.vancl.com/6375182.html" rel="undefined" class="track" name="my-recommend-third-producname" target="_blank" title="凡客卫衣 中空棉拉链开衫 男款 蓝花灰">凡客卫衣 中空棉拉链开衫 男款 蓝花灰</a></p>
      <p class="s_price">市场价：￥
        <span>799.00</span></p>
      <p class="price">售价：￥799.00</p></li>
    <li>
      <p class="pic">
        <a href="http://item.vancl.com/6375339.html" rel="undefined" class="track" name="my-recommend-fourth-productpicture" target="_blank" title="凡客卫衣 基础拉链开衫 男 蓝花灰">
          <img src="/ho/center/6375339-1j201610111103463439.jpg" width="130" height="130"></a>
      </p>
      <p class="prod_name">
        <a href="http://item.vancl.com/6375339.html" rel="undefined" class="track" name="my-recommend-fourth-producname" target="_blank" title="凡客卫衣 基础拉链开衫 男 蓝花灰">凡客卫衣 基础拉链开衫 男 蓝花灰</a></p>
      <p class="s_price">市场价：￥
        <span>349.00</span></p>
      <p class="price">售价：￥349.00</p></li>
    <li>
      <p class="pic">
        <a href="http://item.vancl.com/6375415.html" rel="undefined" class="track" name="my-recommend-fifth-productpicture" target="_blank" title="凡客外套 PIMA棒球服 男 花灰色">
          <img src="/ho/center/6375415-1j201610170943343306.jpg" width="130" height="130"></a>
      </p>
      <p class="prod_name">
        <a href="http://item.vancl.com/6375415.html" rel="undefined" class="track" name="my-recommend-fifth-producname" target="_blank" title="凡客外套 PIMA棒球服 男 花灰色">凡客外套 PIMA棒球服 男 花灰色</a></p>
      <p class="s_price">市场价：￥
        <span>599.00</span></p>
      <p class="price">售价：￥599.00</p></li>
    
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

@endsection