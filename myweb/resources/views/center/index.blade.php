@extends('layout.homecenter')
@section('con')
      <div class="right_cont">

        <!-- 网站提示内容 -->
        <div style="margin-top: -10px;">
          <div class="blank10"></div>
        </div>
        <span class="blank0"></span>

        <!-- 安全级别 -->
        <div class="AsecurityBox02 AsecurityBox0212">
          <div class="aslevel">
            <em>安全级别：</em>
            <div class="asProgSpeed">
              <span class="asProgNow">弱</span>
              <span class="">中</span>
              <span class="">强</span></div>
          </div>
          <ul class="asLevelUl">
            <li class="aslevelPhone01">
              <a href="" title="手机未验证" class="asLink track" name="my-safe-phone"></a>
              <a href="" class="withoutVaLink12">手机未验证</a></li>
            <li class="aslevelEmail01">
              <a href="" title="邮箱未验证" class="asLink track" name="my-safe-email"></a>
              <a href="" class="withoutVaLink12">邮箱未验证</a></li>
            <li class="aslevelPassword01" style="display:none;">
              <a href="" title="&gt;未设置支付密码" class="asLink track" name="my-safe-pay"></a>
              <a href="" class="withoutVaLink12">未设置支付密码</a></li>
          </ul>
          <div class="aslevelAtart" style="display:none;">为了您账户资金安全，建议进行
            <a href="" class="track" name="my-safecenter">设置</a></div>
        </div>
        <span class="blank30"></span>

        <!-- 用户信息 -->
        <div class="my_cont my_cont12">
          <div class="my_pic">
            <div>
              <div>
                <a href="" class="track" name="my_boot_userinfo_updateavatar">
                  <img src="/ho/myvancl/vancl300.jpg" width="90" height="90"></a>
                <span class="head_pic" style="display: none;">
                  <a href="" class="track" name="my_boot_userinfo_updateavatar">修改头像</a></span>
              </div>
            </div>
            <a href="" class="track" name="my_boot_useinfo_edituserinfo">编辑个人资料</a></div>
          <div class="my_txt my_txt12 ">
            <!--infor-->
            <div class="nickname-panel nickname-panel12">
              <div class="nickname-info member-info">
                <a id="anickname">您好！
                  <em id="bNickName">name</em></a>
                <a id="modify" href="" class="track" name="my_boot_useinfo_Modify">(修改)</a>
                <div id="member" style="display: none;">
                  <a href="javascript:void(0);" class="track member memberimg" name="my_boot_useinfo_level">
                    <img alt="" src="/ho/myvancl/member_2012.gif"></a>
                  <div class="member-tip">
                      <p>
                        <img src="/ho/myvancl/icon2.gif">升级成为
                        <em>VIP</em>会员：需再消费
                        <em>5000.00</em>元，或一次性消费
                        <em>800</em>元以上</p>
                      <p>升级成为
                        <em>SVIP</em>会员：需一次消费
                        <em>1500</em>元以上</p>
                  </div>
                </div>
              </div>
              <div class="nickname-info nicknamecanlce" id="modifyname">
                <input type="text" id="nickname" name="nickName" autocomplete="off" value="">
                <button id="aConfirm" class="track" name="my_boot_useinfo_OK"></button>
                <a href="" id="nameCancle" class="track" name="my_boot_useinfo_cancel">取消</a>
                <span class="error-tip">
                  <span id="tip">中英文均可，2~16个字符</span></span>
              </div>
              <div class="vjia vjia12" data-partner="False">
                <input type="hidden" id="Level" value="Common">
                <input type="hidden" id="LevelMoney01" value="5000">
                <input type="hidden" id="LevelMoney12" value="10000">
                <input type="hidden" id="LevelSum" value="0.00">
                <input type="hidden" id="LevelShunyan1" value="1000">
                <input type="hidden" id="LevelShunyan2" value="2500">
                <input type="hidden" id="LevelTotalSum" value="0">
                <input type="hidden" id="EndTime" value="9989年12月31日">
                <input type="hidden" id="EndTime2" value="9990年12月31日">
                <span class="AsecuryMessage12" style="display: none;">消息提醒：
                  <em>商品问答回复</em>（
                  <a href="http://my.vancl.com/question/index">
                    <span id="spanReply">0</span></a>）
                  <em class="mal1230">投诉/建议回复</em>（
                  <a href="http://my.vancl.com/#">
                    <span id="spanProposal">0</span></a>）</span>
              </div>
            </div>
            <span class="blank0"></span>
            <div class="txt2 txt212">
              <span class="blank5"></span>
              <ul class="orderStatusul12">
                <li id="liOrderRelative" class="orderStatusli1201">订单提醒：
                  <a class="padr1220" href="" name="my_boot_userinfo_beginorder" target="_blank">进行中的订单(0)</a>
                  <span class="padr1220">待评价商品(0)</span></li>
                <li class="orderStatusli1202">VIP级别：
                  <span style="display:inline-block;  position: relative;top:2px;*top:0px;width:24px;height:13px;background:url(//i5.vanclimg.com/cms/20150603/userlevelgrowth_24_13.jpg); background-position:0px -0px; "></span>，成长值：0</li>
                <li class="orderStatusli1202">账户余额：
                  <a href="" target="_blank" class="track underline red12" name="my_boot_useinfo_userbalance">￥0</a></li>
                <li class="orderStatusli1202">总消费额：￥
                  <span class="grey12" id="spanSum">0.00</span></li>
                <li class="orderStatusli1202 ">可用礼品卡：
                  <span class="grey12">
                    <span>--</span></span>
                </li>
                <li class="orderStatusli1202 orderStatusli1203 ">会员积分：
                  <a href="" target="_blank" class="track underline grey12" name="my_boot_useinfo_userpoint">0分</a>
                  <a class="track rules20120112 red12" href="" name="my-boot-jifen-mall" target="_blank" style="display: none">积分商城</a></li>
              </ul>
              <span class="blank0"></span>
            </div>
            <div style="float: right;">
              <img src="/ho/myvancl/myvancl_weixin.png" alt="" titile=""></div>
            <span class="blank10"></span>
          </div>
          <span class="blank0"></span>
        </div>
        <!--防止boot.js报错-->
        <input type="hidden" id="partUserUrl" value="">

        <!-- 首页推荐 -->
        <span class="blank15"></span>
        <div class="vancladmin_recombar" style="">
          <ul class="vancladmin_recomtitle vancladmin_recomtitle12">
            <li class="on" style="cursor: pointer; color: #fff;">
              <a class="track" name="my-recommend-tab-favorites" style="margin-left: 25px;" href="">为您推荐</a>
            </li>
            <li class="vancladminrecomtitleLiMore">
              <p class="vancladmin_recommore">
                <a class="track redfn" name="my_morerecm" target="_blank" href="" style="float: right; color: #A10000; display: none;">更多&gt;&gt;</a>
              </p>
            </li>
          </ul>
          <div id="tabs-5" class="vancladmin_recomlistbar">
            <div fid="loading" style="width: 770px; height: 100%; display: none;">
              <center>
                <img src="/ho/myvancl/loading.gif" alt="加载中……"></center>
            </div>
            <!--我的凡客 推荐左边翻页-->
            <div class="vancladminBtLeft" style="visibility: hidden; display: none;" currentpage="" dirs="left"></div>
            <ul fid="recommandlist" class="rv1_tuijianlist02" style="margin-left: 21px;">
              <span class="rclear"></span>

              <li>
                <p class="v1_recohotpic">
                  <a class="track" name="my_mixrecm" target="_blank" href="" rel="r-my_hp-frb-0">
                    <img fid="productimg" style="border-width:0px;" alt="凡客夹克 双帽双拉链 轻弹 男款 藏青色" productid="6375173" src="/ho/myvancl/6375173-1j201609131406567247.jpg"></a>
                </p>
                <p class="v1_recohottitle">
                  <a class="track" name="my_mixrecm" fid="productname" target="_blank" href="" rel="r-my_hp-frb-0">凡客夹克 双帽双拉链 轻弹 男款 藏青色</a></p>
                <p class="v1_recohotprice1">
                  <span class="reda10b">售价￥499.00</span></p>
              </li>
              
            </ul>
            <!--我的凡客 推荐右边翻页-->
            <div class="vancladminBtRight" style="visibility: hidden; display: none;" currentpage="" dirs="left"></div>
            <span class="rclear"></span>
          </div>
        </div>
        <span class="blank15"></span>
        <!-- 评论 -->
        <span class="blank15"></span>
        <!-- 搭配 -->
        <div id="recommendsuit" style="display: none"></div>
      </div>
@endsection