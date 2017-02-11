@extends('layout.homecenter')
@section('title')
退换货
@endsection
@section('dt')
&gt; <a href="/home/center/returns">退换货</a>
@endsection
@section('con')
  <div id="v2Return_right">
    <!-- <span class="blank15"></span> -->
    <div class="v2Return_rightTitle">
      <h3>退换货办理</h3>
      <div class="rollbox" id="RollBox" style="display:none;"></div>
    </div>
    <span class="blank15"></span>
    <div class="v2Return_Bulletin" style="display:none;">
      <span class="v2Return_ico01"></span>
      <ul class="v2Return_BulletinList">
        <li>
          <a href="http://help.vancl.com/Content/804.html" target="_blank" class="track" name="returns_AcceptList_Tips">网站异款退换货功能推出</a></li>
        <li>
          <a href="http://www.rufengda.com/news/news/news_29.html" target="_blank" class="track" name="returns_AcceptList_Tips">如风达手机客户端上线，让你随时掌控订单状态</a></li>
      </ul>
    </div>
    <!-- <span class="blank15"></span> -->
    <div id="v2Return_recordsBar">
      <ul class="v2Return_recordTitle">
        <li class="track on" id="tab_01" name="returns_AcceptList_Record_tab">退换货记录</li>
        <li id="tab_02" class="track" name="returns_AcceptList_apply_tab" data-first="1">
          <a href="javascript:SetTabs();">退换货申请</a></li>
        <li class="fr">
          <a style="cursor:pointer" href="http://imweb.vancl.com/" class="v2Return_kefu track" name="returns_AcceptList_OnlineService" target="_blank">
            <span style="padding-left:29px;">在线客服</span></a>
        </li>
      </ul>
      <div class="v2Return_border">
        <span class="blank10"></span>
        <div class="v2Order_inquiryBar" id="tab_01_box" style="display: block;">
          <input name="search" type="text" id="search" class="v2Order_inquiryInput" value="">
          <input type="button" name="returns_AcceptList_btnSearch" id="btnSearch" value="查询" class="v2Order_inquiryBtn track">
          <p id="accept_loading" class="v2Order_inquiryLoading" style="display: none;">
            <img src="/ho/center/loading.gif" align="absmiddle" alt="">正在为您提交,请稍候...</p></div>
        <div class="v2Order_inquiryBar" id="tab_02_box" style="display: none;">
          <input name="txtSearchOrder" type="text" id="txtSearchOrder" value="按订单编号/商品编号/商品名称" class="v2Order_inquiryInput">
          <input type="button" name="btnSearchOrder" id="btnSearchOrder" value="查询" class="v2Order_inquiryBtn">
          <p id="order_loading" class="v2Order_inquiryLoading" style="display: none;">
            <img src="/ho/center/loading.gif" align="absmiddle">正在为您提交,请稍候...</p></div>
        <span class="blank10"></span>
        <div id="accept_list" style="display: block;">
          <!-- 退换货办理 -->
          <table id="AcceptTable" width="778" border="0" cellpadding="0" cellspacing="0" class="v2Order_inquiryTable" data-json="">
            <tbody>
              <tr>
                <th width="164">退换货单号</th>
                <th width="191">退回商品</th>
                <th width="210">办理信息</th>
                <th width="90">状态</th>
                <th>操作</th></tr>
              <tr class="v2Order_lineb">
                <td align="center" colspan="5">
                  <div class="v2Return_sarchinfo">暂无退换货记录。</div></td>
              </tr>
            </tbody>
          </table>
          <div class="Entry_Express" id="expressContainer">
            <div class="returnGoods_Title">
              <h2>录入快递信息</h2>
              <a href="javascript:void(0);" class="express_cancel">关闭</a></div>
            <span class="blank15"></span>
            <div class="returnGoods_Express">
              <p>
                <label>寄回快递公司：</label>
                <select id="companies">
                  <option value="请选择快递公司">请选择快递公司</option>
                  <option value="申通">申通</option>
                  <option value="圆通速递">圆通速递</option>
                  <option value="顺丰">顺丰</option>
                  <option value="中通速递">中通速递</option>
                  <option value="EMS/E邮宝">EMS/E邮宝</option>
                  <option value="韵达快递">韵达快递</option>
                  <option value="宅急送">宅急送</option>
                  <option value="天天快递">天天快递</option>
                  <option value="汇通快运">汇通快运</option>
                  <option value="如风达">如风达</option>
                  <option value="E邮宝">E邮宝</option>
                  <option value="-1">其他公司</option></select>
              </p>
              <p style="display: none">
                <label>查询快递公司：</label>
                <input id="searchCompany" type="text" value="" class="ui-autocompletefix-input" autocompletefix="off">
                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
              </p>
              <p>
                <label>寄回快递单号：</label>
                <input id="expressOrder" type="text" value=""></p>
              <p class="returnGoods_Tips" style="display: none;"></p>
              <p class="returnGoods_btn">
                <input type="button" class="express_submit">
                <a href="javascript:void(0);" class="express_cancel">取消</a></p>
            </div>
            <span class="blank15"></span>
          </div>
        </div>
        <div id="order_list" style="display: none;">
          <style tyle="text/css">.v2Return_single { width: auto !important; }</style>
          <table width="778" border="0" cellpadding="0" cellspacing="0" class="v2Order_inquiryTable">
            <tbody>
              <tr>
                <th width="164">订单号</th>
                <th width="191">商品</th>
                <th width="100">收货人</th>
                <th width="100">下单时间</th>
                <th width="90">状态</th>
                <th>操作</th></tr>
              <tr class="v2Order_lineb">
                <td colspan="6" align="center">
                  <div class="v2Return_sarchinfo">暂无可办理退换货的订单</div></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <span class="box35"></span>
    <div class="v2Reture_Mattersbar">
      <h5>退换货办理注意事项：</h5>
      <span class="blank10"></span>
      <p class="v2Reture_Mattersinfo">
        <span class="reda1n">1.订单在配送在途、送达成功状态可办理退换货。特殊商品非质量问题不可退换货。</span>
        <br>2.自商品签收之日起，VANCL按照商品属性为您提供退换货服务。
        <br>3.一张订单可办理一次退换货，为确保您的权益，请考虑周全后办理。
        <br>4.办理退换货，请将发票随商品一同返还。
        <br>5.退换货后订单金额小于免运费金额时，需支付订单运费，运费金额将在实际退款中扣除。</p>
      <span class="blank25"></span>
      <h5>相关帮助：</h5>
      <span class="blank10"></span>
      <ul class="v2Reture_HelpList">
        <li>
          <a target="_blank" href="http://help.vancl.com/Category/43-1.html" class="track" name="my_returns_AcceptList_help_Policy">退换货政策</a></li>
        <li>
          <a target="_blank" href="http://help.vancl.com/Category/40-1.html" class="track" name="my_returns_AcceptList_help_instr">退款说明</a></li>
        <li>
          <a target="_blank" href="http://help.vancl.com/Category/42-1.html" class="track" name="my_returns_AcceptList_help_Process">退换货办理流程</a></li>
        <li>
          <a target="_blank" href="http://help.vancl.com/Category/41-1.html" class="track" name="my_returns_AcceptList_help_Onlineinstr">退换货网上办理说明</a></li>
      </ul>
      <span class="blank25"></span>
    </div>
    <span class="clear"></span>
  </div>
@endsection