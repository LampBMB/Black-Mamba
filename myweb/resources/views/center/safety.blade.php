@extends('layout.homecenter')
@section('title')
账户安全
@endsection
@section('dt')
&gt; <a href="/home/center/safely">账户安全</a>
@endsection
@section('con')
<div id="main" style="position: relative;">
    <div id="mdfpwd" class="mngbox">
        <div class="main">
            <h3>
                <span>账户安全</span>
                <p class="Paypassword_rtips fontreda" style="display:none">验证手机和邮箱可赠送10积分哦，马上行动吧！</p></h3>
            <div class="blank10"></div>
            <p class="Paypassword_fonttips">
                <span class="fontB14b">安全级别：</span>
                <span class="fontR14b spR40">低</span>
                <span class="fontgry3">建议您通过以下方式提高安全级别</span></p>
            <span class="box50"></span>
            <ul id="asAccount_securityList">
                <!--修改密码-->
                <li>
                    <span class="sepic01 sprite_a"></span>
                    <span class="setips">为了保护您账户和资产的安全，请定期修改您的密码</span>
                    <a href="http://my.vancl.com/user/editpassword" class="asAccountBtn sprite_a">修改密码</a></li>
                <!--邮箱-->
                <li id="checkEmailLi">
                    <span class="sepic02 sprite_a"></span>
                    <span class="setips">为了保护您账户和资产的安全，请验证您的邮箱</span>
                    <a id="checkEmailA" class="asAccountBtn sprite_a">验证邮箱</a>
                    <img fid="checkEmailAImg" style="float: left; display: none;" alt="" src="/ho/center/regbtn_01.gif"></li>
                <li id="modifyEmailLi" style="display: none">
                    <span class="sepic02 sprite_a"></span>
                    <span class="setips">您验证的邮箱地址：</span>
                    <span class="editfontr">
                        <a href="http://my.vancl.com/SafeCenter/ModifyEmailStep1" class="reda10_ft12">修改验证邮箱&gt;&gt;</a></span>
                </li>
                <!--手机-->
                <li id="checkMobileLi">
                    <span class="sepic03 sprite_a"></span>
                    <span class="setips">为了保护您账户和资产的安全，请验证您的手机号码</span>
                    <a id="checkMobileA" class="asAccountBtn sprite_a">验证手机</a></li>
                <li id="modifyMobileLi" style="display: none">
                    <span class="sepic03 sprite_a"></span>
                    <span class="setips">您验证的手机号码：</span>
                    <span class="editfontr">
                        <a href="http://my.vancl.com/SafeCenter/ModifyMobileStep1" class="reda10_ft12">修改验证手机&gt;&gt;</a></span>
                </li>
                <!--支付密码-->
                <li id="checkPayPwdLi" style="display: none">
                    <span class="sepic04 sprite_a"></span>
                    <span class="setips">为了保护您资产的安全，请启动支付密码</span>
                    <a id="btnEnablePayPwd" operatetype="7" class="asAccountBtn sprite_a">启动支付密码</a>
                    <br>
                    <div divforremindcheck="" class="aq_OpenTab aq_OpenTabMail" style="margin-left: 100px;
                    margin-top: 25px; display: none;">
                        <span></span>
                        <p>请先
                            <a style="color: red;" onclick="vMobile.clickCheckMobileA();">验证手机</a>或
                            <a style="color: red;" onclick="vEmail.clickCheckEmailA();">验证邮箱</a></p>
                    </div>
                </li>
                <li id="modifyPayPwdLi" style="display: none">
                    <span class="sepic04 sprite_a"></span>
                    <span class="setips">为了保护您资产的安全，请妥善保存您的支付密码</span>
                    <span class="editfont_zhifu">
                        <a operatetype="6" class="reda10_ft12" style="color:#A10000;">修改支付密码&gt;&gt;</a>| &nbsp;
                        <a target="_self" id="btnGetPayPWD" class="reda10_ft12" style="color:#A10000;">找回支付密码&gt;&gt;</a>
                        <br></span>
                    <br>
                    <div divforremindcheck="" class="aq_OpenTab aq_OpenTabMail" style="margin-left: 100px;
                    display: none;">
                        <span></span>
                        <p>请先
                            <a style="color: red;" onclick="vMobile.clickCheckMobileA();">验证手机</a>或
                            <a style="color: red;" onclick="vEmail.clickCheckEmailA();">验证邮箱</a></p>
                    </div>
                    <div id="divManageBindType" class="aq_OpenTab aq_OpenTabMail" style="margin-left: 100px;
                    width: 310px; display: none;">
                        <span></span>
                        <p style="width: 260px;"></p>
                    </div>
                </li>
            </ul>
            <!--验证邮箱弹窗star -->
            <div class="asAccount_popupbar" id="alertDiv" style="display: none">
                <h2 class="sprite_a asAccount_popupTitle">
                    <p class="sprite_a asAccount_close" onclick="javascript:$(&#39;#alertDiv&#39;).hide();">
                        <a onclick="javascript:$(&#39;#alertDiv&#39;).hide();" class="whiteff" style="cursor:pointer">关闭</a></p>
                </h2>
                <span class="box20"></span>
                <p class="sprite_a asVerifymailtb"></p>
                <p class="asVerify_mailfondmima">
                    <span id="emailSpan">验证邮件已发送至您的邮箱：</span>
                    <span class="box7"></span>
                    <span class="fontgry9">请于24小时内登录邮箱完成验证</span>
                    <span class="box7"></span>
                    <span class="box7"></span>
                    <span class="as_Verifymail fontgry9">如果您未能收到验证邮件，请选择</span>
                    <a fid="RecheckEmailA" style="cursor:pointer" class="sprite_a asBtn" onclick="javascript:vEmail.reSendToRegEmail();">重新验证邮箱</a>
                    <img fid="RecheckEmailAImg" style="float: left; display: none;" alt="" src="/ho/center/regbtn_01.gif">
                    <br>
                    <span class="box10"></span>
                    <span fid="CheckEmailmsg" style=""></span>
                </p>
                <span class="box20"></span>
                <div class="aq_OpenTab " style="background: #FFF6F7; margin-left: 15px">
                    <span></span>
                    <p style="white-space: normal">验证邮件有可能被误认为垃圾或广告邮件，为了保证您能正常收到系统发送的安全 验证邮件，请设置为信任邮件。</p></div>
                <span class="box20"></span>
            </div>
            <!-- 验证邮箱弹窗end-->
            <!-- 发邮件成功弹窗star -->
            <div id="sendSuccessContainer"></div>
            <!--发邮件成功弹窗end -->
            <!-- 验证手机弹窗star -->
            <div class="asAccount_popupbar" id="alertDiv_mobile" style="display: none">
                <h2 class="sprite_a asAccount_popupTitle">
                    <span>输入验证码</span>
                    <p onclick="javascript:$(&#39;#alertDiv_mobile&#39;).hide();" class="sprite_a asAccount_close">
                        <a onclick="javascript:$(&#39;#alertDiv_mobile&#39;).hide();" class="whiteff" href="javascript:void(0);">关闭</a></p>
                </h2>
                <span class="box20"></span>
                <ul id="tcPhone_verification">
                    <li id="mobileSpan">验证码已发送到您的手机：</li>
                    <li>
                        <span class="editName">输入短信验证码：</span>
                        <input type="text" id="codeTxt" value="" class="editInput">
                        <a href="javascript:void(0);" onclick="javascript:validate_mobile();" class="tcPhonebtn">提交</a>
                        <div class="tcPhonetips" style="display: none">验证码输入错误</div></li>
                </ul>
                <span class="box10"></span>
            </div>
            <!--验证手机弹窗end -->
            <!--客服验证邮箱弹窗star -->
            <div class="asAccount_popupbar" id="alertCustomValidateEmailDiv" style="display: none;">
                <h2 class="sprite_a asAccount_popupTitle">
                    <p class="sprite_a asAccount_close">
                        <a href="javascript:vEmail.alertCustomValidateEmailDivClose();" class="whiteff">关闭</a></p>
                </h2>
                <span class="box20"></span>
                <p class="sprite_a asVerifymailtb"></p>
                <p class="asVerify_mailfondmima">尊敬的客户，请联系Vancl客服进行
                    <span id="alertCustomValidateEmailDiv_type"></span>。
                    <span class="box7"></span>
                    <span class="fontgry9">客服邮箱：service@vancl.com</span></p>
                <span class="box20"></span>
            </div>
            <!-- 客服验证邮箱弹窗end-->
            <!---流程码弹窗star -->
            <div id="alertMsgCodeDivContainer"></div>
            <!--流程码弹窗end -->
            <!--开启支付密码star -->
            <div id="divEnablePayPwd" class="phone_Safe phone_Safe1 payPassword_Type" style="background: none repeat scroll 0 0 #FFFFFF;
            left: 128px; position: absolute; top: 220px; display: none">
                <h2>
                    <a onclick="CloseDiv(&#39;divEnablePayPwd&#39;);">关闭</a></h2>
                <div class="phone_Safe_content passWord_Type_content" style="padding-left: 0px; padding-top: 0px;">
                    <h3 style="margin-top: 30px; padding-left: 70px;">请选择一种验证方式，进行支付密码的管理
                        <select id="selPayPwdBindType">
                            <option value="1">验证手机</option>
                            <option value="2">验证邮箱</option></select>
                    </h3>
                    <p class="sendOut_Btn" style="margin-left: 185px;">
                        <a id="btnBindPayPwd" class="qdBtn"></a>
                        <a onclick="CloseDiv(&#39;divEnablePayPwd&#39;);">取消</a></p>
                    <p class="sendOut_Btn" id="imgPosting" style="display: none; margin-left: 250px;">
                        <img src="/ho/center/loading.gif" class="imglodding" alt=""></p>
                    <div class="aq_OpenTab" style="margin-left: 90px;">
                        <span></span>
                        <p>您可通过验证手机（邮箱）修改或找回支付密码 更换手机号码（邮箱）后，请尽快修改验证信息</p>
                    </div>
                </div>
            </div>
            <!--开启支付密码end -->
            <!--邮件发送成功提醒start -->
            <div id="divSendEmailSuccess" class="phone_Safe payPassword_Type" style="background: none repeat scroll 0 0 #FFFFFF;
            left: 128px; position: absolute; top: 220px; display: none;">
                <h2>
                    <a onclick="CloseDiv(&#39;divSendEmailSuccess&#39;);">关闭</a></h2>
                <div class="phone_Safe_content passWord_Type_content" style="padding-left: 20px;
                padding-top: 0px;">
                    <span class="box10"></span>
                    <p class="sprite_a asVerifymailtb01"></p>
                    <p class="asVerify_mailfondmima">验证邮件已发送至您的邮箱：
                        <span class="box7"></span>
                        <span class="fontgry9">请于24小时内登录邮箱完成验证
                            <span id="typeSp" style="display: none">，获取10积分</span></span>
                        <span class="box7"></span>
                        <span class="box7"></span>
                        <span class="as_Verifymail fontgry9">如果您未能收到验证邮件，请选择</span>
                        <a target="_self" class="sprite_a asBtn" id="reValiA" onclick="ReSendEmail();">重新验证邮箱</a>
                        <img style="display: none; width: 27px;" id="imgResendEmail" src="/ho/center/loading.gif" class="imglodding" alt=""></p>
                    <span class="box10"></span>
                </div>
                <div class="aq_OpenTab" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">
                    <span></span>
                    <p>验证邮件有可能被误认为垃圾或广告邮件，为了保证您能正常收到系统发送的安全 验证邮件，请设置为信任邮件。</p>
                </div>
            </div>
            <!--邮件发送成功提醒end -->
            <!--支付密码管理方式提示start -->
            <div id="divManageBindTypeRemind" class="phone_Safe phone_Safe1 payPassword_Type" style="background: none repeat scroll 0 0 #FFFFFF;
            left: 128px; position: absolute; top: 220px; display: none;">
                <h2 style="margin-bottom: 40px;">
                    <a onclick="CloseDiv(&#39;divManageBindTypeRemind&#39;);">关闭</a></h2>
                <p class="SourceType" style="width: 100%; height: 20px; margin-bottom: 10px;"></p>
                <p class="NewType" style="width: 100%; height: 20px; margin-bottom: 10px;"></p>
                <p class="sendOut_Btn" style="margin-left: 220px;">
                    <a id="btnManageBindType" class="qdBtn"></a>
                    <a onclick="CloseDiv(&#39;divManageBindTypeRemind&#39;);">取消</a></p>
                <p class="sendOut_Btn" id="imgRemind" style="display: none; margin-left: 250px;">
                    <img src="/ho/center/loading.gif" class="imglodding" alt=""></p>
            </div>
            <!--支付密码管理方式提示end --></div>
    </div>
</div>
<!--验证手机弹窗CSS -->
<style type="text/css">#tcPhone_verification { width: 260px; margin: 0px auto; color: #000; } #tcPhone_verification li { clear: both; margin-bottom: 15px; } #tcPhone_verification .editName { float: left; width: 95px; line-height: 27px; color: #000; } #tcPhone_verification .editInput { width: 80px; float: left; border: 1px #7e9db9 solid; height: 18px; line-height: 18px; text-indent: 5px; margin-top: 4px; } #tcPhone_verification .tcPhonebtn { width: 47px; height: 20px; line-height: 20px; background: url(http://i.vanclimg.com/my/2012/accountsafe/sprite_a1.png) no-repeat 0 -1349px; display: block; float: left; text-align: center; color: #fff; margin-top: 4px; margin-left: 7px; } #tcPhone_verification .tcPhonetips { clear: left; margin-left: 95px; border: 1px #cc9998 solid; color: #a10000; width: 96px; background: #fff6f7; text-align: center; } a { cursor: pointer; }
</style>
@endsection