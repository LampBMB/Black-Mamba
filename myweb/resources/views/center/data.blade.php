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
                    
                   
                <script type="text/javascript" language="javascript">function previewImgLoad() {
                        var cutpic = $("#cutpic");
                        cutpic.find(".bigimg>.mask").hide();
                        $("div[class^='imgareaselect']").show();
                    }
                    function chenageAvatarType(obj) {
                        $("#form0").submit();
                    }</script>
              
             
        
                  
                <script type="text/javascript">$(function() {
                        $("a[name='my_left_left_personinfo']").addClass("selected");
                    })</script>
               
                <form action="/home/userinfo/edit" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <table class="fieldset">
                    <tbody>
                    <tr>
                        <td></td>
                        <td>
                        @if(!empty($list['picname']))
                        <img border="0" src="{{$list['picname']}}" width="90" height="90"></td>
                        @else
                        <img border="0" src="/ho/center/vancl300.jpg" width="90" height="90"></td>
                        @endif
                        
                    </tr>
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>头&nbsp;&nbsp;&nbsp;&nbsp;像：</td>
                            <td>
                                <!-- <input type="file" class="contact" name="picname" id="TrueName" value=""> -->
                                  <input type="file" name="picname">
                               
                            </td>
                        </tr>
                        <tr>
                            <td class="label" colspan="2" style="text-align: left; padding-left: 42px;">用户名&nbsp;：
                                <input type="text" name="username" value="{{$list['username']}}">
                            </td>
                        </tr>
                     
                    
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>真实姓名：</td>
                            <td>
                                <input type="hidden" name="id" value="{{$list['id']}}">
                                <input type="text" class="contact" name="name" id="TrueName" value="{{$list['name']}}">
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
                                <input class="sex" id="female" name="sex" type="radio" value="0" @if($list['sex']=='0') checked @endif>
                                <label for="female">女</label>
                                <input class="sex" id="male" name="sex" type="radio" value="1" @if($list['sex']=='1') checked @endif>
                                <label for="male">男</label></td>
                        </tr>
						<tr>
                            <td class="label">收信邮箱：</td>
                            <td>
                                <input class="contact" type="text" name="email" id="Email" value="{{$list['email']}}">
                               
                                <div id="WrongEmail" class="shuru0316">
                                    <p>Email格式错误</p>
                                </div>
                            </td>
                        </tr>
						<tr>
                            <td class="label" style="padding-top: 18px;">
                                <span style="color: red;">*</span>详细地址：</td>
                            <td>
                                <div id="AddressHeadMessage"></div>
                                <input class="contact w315" type="text" name="address" id="Address" value="{{$list['address']}}">
                                <div id="WrongAddress" class="shuru0316">
                                    <p>请填写您的详细地址</p>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">邮政编码：</td>
                            <td>
                                <input class="contact" type="text" name="PostalCode" id="PostalCode" value="">
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
                                <input class="contact" type="text" name="phone" id="Mobile" value="{{$list['phone']}}">
                              
                                <div id="WrongMobile" class="shuru0316">
                                    <p>手机格式错误</p>
                                </div>
                            </td>
                        </tr>
                           
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                                <button class="track save" name="aa"></button>
                                <img style="display: none;" fid="saving" src="/ho/center/loading.gif"></td>
                        </tr>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection