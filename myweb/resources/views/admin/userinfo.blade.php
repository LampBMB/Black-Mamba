@extends('layout.adminindex')
@section('con')
<div id="main">
    <div class="mngbox">
        <div class="main">
            <div class="content">
                <div class="title">
                    <h3>我的资料</h3></div>
                <div class="blank10"></div>
               
                <ul class="edit-nav">
                <form action="/admin/userinfo/picname" method="post" enctype="multipart/form-data">
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
                            <td class="label" style="text-align: left; padding-left: 42px;">用户名&nbsp;：</td>
                            <td>
                                <input type="text" name="username" value="{{$list['username']}}">
                            </td>
                        </tr>
                     
                    
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>真实姓名：</td>
                            <td>
                                <input type="hidden" name="id" value="{{$list['id']}}">
                                <input type="text" class="contact" name="name" id="TrueName" value="{{$list['name']}}">
                              
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
                               
                               
                            </td>
                        </tr>
						<tr>
                            <td class="label" style="padding-top: 18px;">
                                <span style="color: red;">*</span>详细地址：</td>
                            <td>
                                <div id="AddressHeadMessage"></div>
                                <input class="contact w315" type="text" name="address" id="Address" value="{{$list['address']}}">
                              
                            </td>
                        </tr>
                        <tr>
                            <td class="label">邮政编码：</td>
                            <td>
                                <input class="contact" type="text" name="PostalCode" id="PostalCode" value="">
                               
                            </td>
                        </tr>
                        <tr>
                            <td class="label">
                                <span style="color: red;">*</span>手&nbsp;&nbsp;&nbsp;&nbsp;机：</td>
                            <td>
                                <input class="contact" type="text" name="phone" id="Mobile" value="{{$list['phone']}}">
                              
                               
                            </td>
                        </tr>
                           
                        <tr>
                            <td>&nbsp;</td>
                            <td>
                            	<input type="submit" value="保存信息">
                            </td>
                        </tr>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection