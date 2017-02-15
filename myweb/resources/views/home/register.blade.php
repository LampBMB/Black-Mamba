<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)https://login.vancl.com/login/reg.aspx?http%3A%2F%2Fwww.vancl.com%2F -->
<html xmlns="http://www.w3.org/1999/xhtml"><head id="Head1"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="Content-Type" content="text/html; charset=uft-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><title>
	
        凡客诚品 - 会员免费注册
</title>
    
    
    <script type="text/javascript" language="javascript" src="/ho/register/register/js.ashx"></script>
    
    
    <link href="/ho/register/register/reg.css" type="text/css" rel="stylesheet">
</head>
<body id="body" class="wrapper">
    <div id="top" style="margin:10px 0 0 0;padding:0 0 10px 0; border-bottom:solid 1px #919191;">
        <a href="/home"><img src="/ho/register/register/logo_new.jpg" alt="凡客诚品" title="凡客诚品"></a></div>
    <!--logo-->
    
    <form method="post" action="/home/register/doregister" id="myform">
	{{csrf_field()}}
    <span class="box15"></span>
    <div class="regist">
        <h1>
            注册新用户 <span>我已经注册，现在就<a href="/home/login">登录</a></span>
        </h1>
        <div style="width: 100%; height: 10px; overflow: hidden; clear: both;">
        </div>
        <div class="content_left">
          
            <!--tag-->
            <div class="infor clearfix" style="overflow: inherit">
                
                <div class="email">
                    <ul id="v2regListInfo_bar">
                        <li id="liphone" style="zoom: 1; display: list-item;" class="v2reg_bg">
                            <div class="v2regListInfo_rtCont" style="position: relative; zoom: 1;">
                                
                                <div id="_umobile" class="newtxt" style="width: 300px; float: left;">
                                    <label>
                                        请输入手机号
                                    </label>
                                    <input maxlength="11" type="text" value="" name="phone" id="input_phone" tabindex="1">
                                </div>
                                    <a href="#" onclick="return false" class="asPhoneregBtn" id="SmsCode" style="display: block">
                        获取短信验证码</a>
                    <div class="asPhoneregBtn" style="display: none" id="sendedSmsCode">
                        已发送
                    </div>
                                <span class="box3" style="display: none;"></span><span class="v2reg_tips02" style="display: none;"></span><span class="box5" style="display: none;"></span>
                            </div>
                            <span class="Rclear"></span></li>
                        <li id="liphonecode" class="v2reg_bg1" style="display: list-item;">
                            
                            <div class="v2regListInfo_rtCont" style="position: relative;">
                                
                                <div id="_mcode" class="newtxt" style="width: 410px;">
                                    <label>
                                        填写手机验证码
                                    </label>
                                    <input name="phonecode" id="phonecode" type="text" value="" maxlength="6" tabindex="2">
                                </div>
                                <span class="box3" style="display: none;"></span><span class="v2reg_tips01" style="display: none;"></span><span class="box5" style="display: none;"></span>
                            </div>
                            <span class="Rclear"></span></li>
                        <li class="v2reg_bg1">
                            
                            <div class="v2regListInfo_rtCont" style="position: relative;">
                                
                                <div id="_mpassword" class="newtxt" style="width: 410px;">
                                    <label>
                                        设定登录密码
                                    </label>
                                    <input maxlength="16" type="password" name="phonepass" id="input_password" value="" tabindex="3">
                                </div>
                                <span class="box3" style="display: none;"></span>
                                <div class="v2reg_Safetyinfo" style="display: none;">
                                    <span class="v2regfl">安全强度：</span><div class="v2regimg_03">
                                    </div>
                                    <span class="v2reg_Class">高</span>
                                </div>
                                <span class="v2reg_tips01" style="display: none;"></span><span class="box5" style="display: none;"></span>
                            </div>
                            <span class="Rclear"></span></li>
                        <li class="v2reg_bg1">
                            
                            <div class="v2regListInfo_rtCont" style="position: relative;">
                                
                                <div id="_mpassword2" class="newtxt" style="width: 410px;">
                                    <label>
                                        再次输入密码
                                    </label>
                                    <input maxlength="16" type="password" name="rephonepass" id="input_repassword" value="" tabindex="4">
                                </div>
                            </div>
                            	@if(!empty(session('error')))<!--只有session('errors')存在才会输出错误信息-->
								<div id="tishi1" style="clear:both;width:220px;min-height:16px;line-height:16px;color:#A10000;text-indent:30px;background:url(https://ssl.vanclimg.com/login/login_spritesbg.png) -351px -662px no-repeat;background-color:#FFF6F7;border:1px solid #CC9998;margin-left:48px;display:block;visibility:visible;">
								{{session('error')}}
								</div>
								@endif
                       
                           
                               
                                <span class="box10"></span>     
									<input type="submit" value="立即注册" class="submitStyle" style="background: #b42025; color: #FFFFFF;">
									</form>
                               
       
                      
                </ul>
                </div>
                <!--email-->
            </div>
            <!--infor-->
        </div>
        <!--content_left-->
        <div class="content_right">
            <img src="/ho/register/register/login120412_newlogo.jpg" id="ContentPlaceHolder1__advertImage" style="width: 465px; display: none">
            <img src="/ho/register/register/login120412_newlogo(1).jpg" style="width: 465px">
        </div>
        <!--content_right-->
        <div class="clear">
        </div>
    </div>
    <!--regist-->
    <input name="hdn_RegisterType" id="hdn_RegisterType" type="hidden" value="phone">
    <input name="hdn_ResourceHref" id="hdn_ResourceHref_name" type="hidden" value="http://www.vancl.com/?http%3A%2F%2Fwww.vancl.com%2F">
    <!--wrapper-->
    </form>
	<script type="text/javascript" src="/ho/login/jquery-1.8.3.js"></script>
    <script type="text/javascript">
		 $('#SmsCode').click(function (){
            $(this).css('display','none');
            $('#sendedSmsCode').css('display','block');
             var phone = $(this).prev().find('input').val();
            $.ajax({
                url:'/home/register/phone',
                data:{'phone':phone},
                success:function (mes){
                   
                }
            });
        });
		
	</script>
    <script type="text/javascript">
        function hoverinput(id, fun) {
            var jqobj = $("#" + id);
            //            $(jqobj).hover(function () {
            //                var _value = $(this).find("input").val();
            //                $(this).find("input").focus();
            //                if (_value == "") {
            //                    $(this).find("label").css({ "z-index": "8" });
            //                    $(this).find("input").removeClass("hoverinput").addClass("hoverinput");
            //                }
            //            }, function () {
            //                var _value = $(this).find("input").val();
            //                if (_value != "") {
            //                    $(this).find("input").removeClass("hoverinput");
            //                } else {
            //                    $(this).find("label").css({ "z-index": "10" });
            //                }
            //                $(this).find("input").blur();
            //            });
            $(jqobj).bind("click", function () {
                var _value = $(this).find("input").val();
                $(this).find("input").focus();
                if (_value == "") {
                    $(this).find("label").css({ "z-index": "8" });
                    $(this).find("input").removeClass("hoverinput").addClass("hoverinput");
                }

                if (typeof fun != "undefined") {
                    fun();
                }
            });

            $(jqobj).find("input").focus(function () {
                var _value = $(this).val();
                if (_value == "") {
                    $(this).parent().find("label").css({ "z-index": "8" });
                    $(this).parent().find("input").removeClass("hoverinput").addClass("hoverinput");
                }
            });

            $(jqobj).find("input").blur(function () {
                var _value = $(this).val();
                if (_value != "") {
                    $(this).removeClass("hoverinput");
                } else {
                    $(this).parent().find("label").css({ "z-index": "10" });
                }
                //$(this).blur();
            });

            $(jqobj).find("input").keyup(function () {
                var _value = $(this).val();
                if (_value != "") {
                    $(this).removeClass("hoverinput");
                }
            });

            $(jqobj).find("input").keydown(function () {
                var _value = $(this).val();
                if (_value != "") {
                    $(this).removeClass("hoverinput");
                }
            });
        }


        $(document).ready(function () {
            setTimeout(function () { TabChange('phone'); }, '10');

            hoverinput("_umobile");
            hoverinput("_mcode");
            hoverinput("_mpassword");
            hoverinput("_mpassword2");
            setTimeout(function () {
                $(".v2reg_tips02").removeClass("ssss");
            }, 500);

            hoverinput("_yanzhenma", function () {
                $("#_yanzhenma label").css("margin-top", "15px");
                $("#_yanzhenma img").css("margin-top", "15px");
            });
        });

        function chkfn() {
            var _checked = $(this).attr("checked");
            if (_checked == "checked") {
                $("#submitRegister_false").parent().hide();
                $("#submitRegister").parent().show();
            } else {
                $("#submitRegister_false").parent().show();
                $("#submitRegister").parent().hide();
            }
        }
    </script>

    <!--bottom-->
    <center>
        
<div id="bottom" align="center">
		<div id="bottoms">
			<p class="bZp3">Copyright 2007 - 2016 vancl.com All Rights Reserved 京ICP证100557号 京公网安备11010102000579号 出版物经营许可证新出发京批字第直110138号</p>
			<div id="footerArea">
            <div class="subFooter"><a rel="nofollow" href="https://search.szfw.org/cert/l/CX20111229001302001330" class="redLogo" target="_blank"></a><span class="costumeOrg"></span><a rel="nofollow" href="http://www.315online.com.cn/member/315090053.html" class="wsjyBzzx" target="_blank"></a><a rel="nofollow" href="http://www.hd315.gov.cn/beian/view.asp?bianhao=010202010081900017" class="vanclMsg" target="_blank"></a></div>
            </div>
		</div>
	</div>
    </center>
    <!--javascript-->
    
    
    <script type="text/JavaScript" src="/ho/register/register/js(1).ashx" language="javascript"></script>
    

    
    <script type="text/javascript" language="javascript" src="/ho/register/register/js(2).ashx"></script>


</body></html>