@extends('layout.homecenter')
@section('title')
我的资料
@endsection
@section('dt')
&gt; <a href="/home/center/data">我的资料</a>
@endsection
@section('con')
<div id="main">
    <div class="mngbox">
        <div class="main">
            <div class="content">
                <div class="title">
                    <h3>我的资料</h3></div>
                <div class="blank10"></div>
                <ul class="edit-nav">
                    <li>
                        <a class="selected" href="http://my.vancl.com/User/UserInfo" name="my_personinfo_Basic">基本资料</a></li>
                    <li>
                        <a href="http://my.vancl.com/User/UserDetail" class="track" name="my_personinfo_Details">详细资料</a></li>
                    <li>
                        <a href="http://my.vancl.com/User/FigurePreference" class="track" name="my_personinfo_Bodypref">身材/偏好</a></li>
                </ul>
                <script type="text/javascript" language="javascript">function previewImgLoad() {
                        var cutpic = $("#cutpic");
                        cutpic.find(".bigimg>.mask").hide();
                        $("div[class^='imgareaselect']").show();
                    }
                    function chenageAvatarType(obj) {
                        $("#form0").submit();
                    }</script>
                <form action="http://my.vancl.com/User/ChangeType" data-ajax="true" data-ajax-complete="setChangeAvatar();" data-ajax-method="post" data-ajax-mode="replace" data-ajax-update="#cutpic" id="form0" method="post">
                    <div class="change">
                        <input name="AvatarType" id="AvatarType2" type="radio" value="VT" checked="checked" onclick="chenageAvatarType(this);" autocomplete="off">选择头像
                        <input name="AvatarType" id="AvatarType1" type="radio" value="Cusmoter" onclick="chenageAvatarType(this);" autocomplete="off">上传头像</div></form>
                <input type="hidden" id="hidcustomerPath" value="">
                <input type="hidden" id="LastUploadaction" value="">
                <div id="cutpic">
                    <div class="pic_list">
                        <ul>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic1.jpg"></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic2.jpg"></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic3.jpg"></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic4.jpg"></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic5.jpg" class=""></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic6.jpg" class=""></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic7.jpg" class=""></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic8.jpg" class=""></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic9.jpg"></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic10.jpg"></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic11.jpg"></a>
                            </li>
                            <li>
                                <a>
                                    <img width="60" height="60" src="/ho/center/pic12.jpg"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="finishnew" style=" margin:8px;">
                        <ul>
                            <li style=" height:127px;">
                                <img border="0" src="/ho/center/vancl300.jpg" width="90" height="90">
                                <span class="blank10w"></span>
                                <a id="OK" class="track save" onclick="SaveVT();" name="my_avatar_change_save" style=" width:90px;">
                                    <img style=" display:inline;" border="0" src="/ho/center/savebtn.jpg"></a>
                            </li>
                            <li style=" width:108px;  padding-top:30px;">
                                <p fid="msgvtnoimage" style=" height:36px;">设置个性化头像
                                    <br>展现你的与众不同！</p>
                                <img class="maskall" style="  margin-top:30px;" src="/ho/center/loading.gif">
                                <p fid="tipsavevt" style=" display:none; margin-top:38px;_margin-top: 48px; "></p>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                    <form id="form1" action="http://my.vancl.com/user/_SaveAvatarVT" enctype="multipart/form-data" method="post">
                        <input type="hidden" id="filename" name="filename" value="">
                        <input type="hidden" id="ID" name="ID" value="0"></form>
                   <!--  <script type="text/javascript">$(function() {
                            VT_PageInit();
                        });
                    </script> -->
                </div>
                <script type="text/javascript">$(function() {
                        $("a[name='my_left_left_personinfo']").addClass("selected");
                    })</script>
                <table class="fieldset">
                    <tbody>
                        <tr>
                            <td class="label" colspan="2" style="text-align: left; padding-left: 42px;">用户名：
                                <span class="user-name">1314*****00</span>
                                <em style="color: #333;
                                margin-left: 5px; display: none" id="isCheck">（已验证）</em>
                            </td>
                        </tr>
                        <tr>
                            <td class="label" colspan="2" style="text-align: left; padding-left: 42px;">为了您账户的安全，请
                                <span style="color: #a10000">验证手机</span>和
                                <span style="color: #a10000">验证邮箱</span></td>
                        </tr>
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>昵&nbsp;&nbsp;&nbsp;&nbsp;称：</td>
                            <td>
                                <input type="text" maxlength="16" class="contact" name="UniqueNickName" id="UniqueNickName" value="" onblur="CheckOnBlur(this.id)">
                                <div id="WrongUniqueNickName" class="shuru0316"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>真实姓名：</td>
                            <td>
                                <input type="text" class="contact" name="TrueName" id="TrueName" value="" onblur="CheckOnBlur(this.id)">
                                <div id="WrongTrueName" class="shuru0316">
                                    <p>请填写您的姓名</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>性&nbsp;&nbsp;&nbsp;&nbsp;别：</td>
                            <td>
                                <input type="hidden" id="txtSex" value="0">
                                <input class="sex" id="female" name="Sex" type="radio" value="1">
                                <label for="female">女</label>
                                <input class="sex" id="male" name="Sex" type="radio" value="2">
                                <label for="male">男</label></td>
                        </tr>
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>出生日期：</td>
                            <td>
                                <select name="bYear" class="ddlist" id="bYear" data-year="" onchange="createSelect(&#39;bYear&#39;,&#39;bMonth&#39;,&#39;bDay&#39;)">
                                    <option selected="selected" value="">请选择</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option></select>
                                <select name="bMonth" class="ddlist" id="bMonth" data-month="" onchange="createSelect(&#39;bYear&#39;,&#39;bMonth&#39;,&#39;bDay&#39;)">
                                    <option selected="selected" value="">请选择</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option></select>
                                <select name="bDay" class="ddlist" id="bDay" data-day="" onblur="CheckOnBlur(this.id)">
                                    <option selected="selected" value="">请选择</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option></select>
                                <div id="WrongBirthDay" class="shuru0316">
                                    <p>出生日期信息不完整</p>
                                </div>
                                <em>注意：出生日期填写后将不可修改，请认真填写，谢谢！</em></td>
                        </tr>
                        <tr>
                            <td class="label">收信邮箱：</td>
                            <td>
                                <input class="contact" type="text" name="Email" id="Email" value="" onblur="CheckOnBlur(this.id)">
                                <span style="color: #A10000; float: left; margin-left: 5px; margin-top: 5px; cursor: pointer;" onclick="CheckYZEmail();">去验证&gt;&gt;</span>
                                <div id="WrongEmail" class="shuru0316">
                                    <p>Email格式错误</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>地&nbsp;&nbsp;&nbsp;&nbsp;区：</td>
                            <td>
                                <select onchange="ShowCity(this.options[selectedIndex].value);" name="Province" id="Province" data-province="">
                                    <option value="">--省份/直辖市--</option>
                                    <option value="北京">北京</option>
                                    <option value="天津">天津</option>
                                    <option value="河北">河北</option>
                                    <option value="山西">山西</option>
                                    <option value="内蒙古">内蒙古</option>
                                    <option value="辽宁">辽宁</option>
                                    <option value="吉林">吉林</option>
                                    <option value="黑龙江">黑龙江</option>
                                    <option value="上海">上海</option>
                                    <option value="江苏">江苏</option>
                                    <option value="浙江">浙江</option>
                                    <option value="安徽">安徽</option>
                                    <option value="福建">福建</option>
                                    <option value="江西">江西</option>
                                    <option value="山东">山东</option>
                                    <option value="河南">河南</option>
                                    <option value="湖北">湖北</option>
                                    <option value="湖南">湖南</option>
                                    <option value="广东">广东</option>
                                    <option value="广西">广西</option>
                                    <option value="海南">海南</option>
                                    <option value="重庆">重庆</option>
                                    <option value="四川">四川</option>
                                    <option value="贵州">贵州</option>
                                    <option value="云南">云南</option>
                                    <option value="西藏">西藏</option>
                                    <option value="陕西">陕西</option>
                                    <option value="甘肃">甘肃</option>
                                    <option value="青海">青海</option>
                                    <option value="宁夏">宁夏</option>
                                    <option value="新疆">新疆</option>
                                    <option value="台湾省">台湾省</option>
                                    <option value="香港特别行政区">香港特别行政区</option>
                                    <option value="澳门特别行政区">澳门特别行政区</option></select>
                                <select onchange="ShowArea(this.options[selectedIndex].value);" name="City" id="City" data-city="">
                                    <option value="">--市--</option></select>
                                <select onchange="GetPostalCodeNew(this.options[this.selectedIndex].value,&#39;City&#39;,&#39;Province&#39;);" name="Area" id="Area" data-area="">
                                    <option value="">--县/区--</option></select>
                            </td>
                        </tr>
                        <tr>
                            <td class="label" style="padding-top: 18px;">
                                <span style="color: red;">*</span>详细地址：</td>
                            <td>
                                <div id="AddressHeadMessage"></div>
                                <input class="contact w315" type="text" name="Address" id="Address" value="" onblur="CheckOnBlur(this.id)">
                                <div id="WrongAddress" class="shuru0316">
                                    <p>请填写您的详细地址</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">邮政编码：</td>
                            <td>
                                <input class="contact" type="text" name="PostalCode" id="PostalCode" value="" onblur="CheckOnBlur(this.id)">
                                <div id="WrongPostalCode" class="shuru0316">
                                    <p>邮政编码必须是6位数字</p>
                                </div>
                                <span id="SetPostalCode" class="info-tip"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>手&nbsp;&nbsp;&nbsp;&nbsp;机：</td>
                            <td>
                                <input class="contact" type="text" name="Mobile" id="Mobile" value="13141288800" onblur="CheckOnBlur(this.id)">
                                <a style="color: #A10000; float: left; margin-left: 5px; margin-top: 5px; cursor: pointer;" onclick="CheckYZMobile();">去验证&gt;&gt;</a>
                                <div id="WrongMobile" class="shuru0316">
                                    <p>手机格式错误</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">座&nbsp;&nbsp;&nbsp;&nbsp;机：</td>
                            <td>
                                <input class="contact" type="text" name="Phone" id="Phone" value="" onblur="CheckOnBlur(this.id)">
                                <div id="WrongPhone" class="shuru0316">
                                    <p>座机号码不能多于16位，不能少于7位</p>
                                </div>
                                <span id="SetPhone" class="info-tip"></span>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <button class="track save" onclick="SumbmitUserInfo(); return false;" name="my_personinfo_Basic_save"></button>
                                <img style="display: none;" fid="saving" src="/ho/center/loading.gif"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection