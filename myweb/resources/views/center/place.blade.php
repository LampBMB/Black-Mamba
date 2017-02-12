@extends('layout.homecenter')
@section('title')
收货地址
@endsection
@section('dt')
&gt; <a href="/home/center/place">收货地址</a>
@endsection
@section('con')
<div id="main">
  <div class="mngbox">
    <div class="main">
      <div class="title"><h3>收货地址</h3></div>
      <div class="blank10"></div>
      <!-- <span class="blank10"></span> -->
      <div class="content">
        <div id="editorAdressPos0"></div>
        <div id="editorAdress" class="editorAdress" style="display: none; position: relative;
        left: -20px; top: -35px; z-index: 2000;">
          <div class="jsTckbox">
            <div class="blankBox_top">
              <h3 class="editorAdressTitle">编辑收货地址</h3>
              <span>
                <a href="http://my.vancl.com/DeliveryAddress/Index###" onclick="CloseEditDiv();">关闭</a></span>
            </div>
            <div class="blankBox_common">
              <div id="AddressDetail" class="AddressDetail"></div>
            </div>
          </div>
        </div>
        <div id="dizhi_list">
          <table class="list addr-list addr-listNew" style="table-layout:fixed; width:100%;">
            <tbody>
              <tr>
                <th class="consignee">收货人</th>
                <th class="addr-detail">详细地址</th>
                <th class="phone">电话/手机</th>
                <th class="operate">操作</th></tr>
              <tr>
                <td colspan="4" align="center">您还未保存收货地址</td></tr>
            </tbody>
          </table>
          <input type="hidden" id="currentPageNum" value="0"></div>
        <a name="A2"></a>
        <div class="Addtitle AddAdresstitle">
          <h3 id="btnToogleAddAddressDiv" class="addNewAdress AddNewAdressArrowUp" onclick="ToogleAddAddressDiv();" onmouseover="this.style.cursor=&#39;pointer&#39;" style="cursor: pointer;">添加新地址</h3></div>
        <fieldset class="edit-addr edit-addrNew" style="margin: 13px 35px; ">
          <div id="AddAddressDiv" style="display: block;">
            <div class="new_dizhi">
              <table width="100%" cellspacing="3" cellpadding="10" border="0">
                <tbody>
                  <tr>
                    <td width="73">
                      <span>*</span>收 货 人：</td>
                    <td colspan="3">
                      <input id="receiverName" maxlength="20" name="receiverName" onblur="ChangeAddressInputCss(&#39;receiverName&#39;,&#39;请准确填写真实姓名&#39;,2);ChecktheForm_Name();" onfocus="ChangeAddressInputCss(&#39;receiverName&#39;,&#39;请准确填写真实姓名&#39;,1)" style="width:117px;" type="text" value="请准确填写真实姓名"></td>
                  </tr>
                  <tr>
                    <td width="70"></td>
                    <td colspan="3">
                      <b id="receiverNameError" class="addressEdit">请填写收货人</b></td>
                  </tr>
                  <tr>
                    <td valign="top" style="padding-top: 4px;">
                      <span>*</span>地 区：</td>
                    <td colspan="6">
                      <table border="0" cellspacing="1" cellpadding="0">
                        <tbody>
                          <tr>
                            <td>
                              <select onchange="ShowCity(this.options[selectedIndex].text);" onblur="" name="ProvinceID" id="ProvinceID">
                                <option value="">--省份/直辖市--</option>
                                <option value="%e5%8c%97%e4%ba%ac">北京</option>
                                <option value="%e5%a4%a9%e6%b4%a5">天津</option>
                                <option value="%e6%b2%b3%e5%8c%97">河北</option>
                                <option value="%e5%b1%b1%e8%a5%bf">山西</option>
                                <option value="%e5%86%85%e8%92%99%e5%8f%a4">内蒙古</option>
                                <option value="%e8%be%bd%e5%ae%81">辽宁</option>
                                <option value="%e5%90%89%e6%9e%97">吉林</option>
                                <option value="%e9%bb%91%e9%be%99%e6%b1%9f">黑龙江</option>
                                <option value="%e4%b8%8a%e6%b5%b7">上海</option>
                                <option value="%e6%b1%9f%e8%8b%8f">江苏</option>
                                <option value="%e6%b5%99%e6%b1%9f">浙江</option>
                                <option value="%e5%ae%89%e5%be%bd">安徽</option>
                                <option value="%e7%a6%8f%e5%bb%ba">福建</option>
                                <option value="%e6%b1%9f%e8%a5%bf">江西</option>
                                <option value="%e5%b1%b1%e4%b8%9c">山东</option>
                                <option value="%e6%b2%b3%e5%8d%97">河南</option>
                                <option value="%e6%b9%96%e5%8c%97">湖北</option>
                                <option value="%e6%b9%96%e5%8d%97">湖南</option>
                                <option value="%e5%b9%bf%e4%b8%9c">广东</option>
                                <option value="%e5%b9%bf%e8%a5%bf">广西</option>
                                <option value="%e6%b5%b7%e5%8d%97">海南</option>
                                <option value="%e9%87%8d%e5%ba%86">重庆</option>
                                <option value="%e5%9b%9b%e5%b7%9d">四川</option>
                                <option value="%e8%b4%b5%e5%b7%9e">贵州</option>
                                <option value="%e4%ba%91%e5%8d%97">云南</option>
                                <option value="%e8%a5%bf%e8%97%8f">西藏</option>
                                <option value="%e9%99%95%e8%a5%bf">陕西</option>
                                <option value="%e7%94%98%e8%82%83">甘肃</option>
                                <option value="%e9%9d%92%e6%b5%b7">青海</option>
                                <option value="%e5%ae%81%e5%a4%8f">宁夏</option>
                                <option value="%e6%96%b0%e7%96%86">新疆</option>
                                <option value="%e5%8f%b0%e6%b9%be%e7%9c%81">台湾省</option>
                                <option value="%e9%a6%99%e6%b8%af%e7%89%b9%e5%88%ab%e8%a1%8c%e6%94%bf%e5%8c%ba">香港特别行政区</option>
                                <option value="%e6%be%b3%e9%97%a8%e7%89%b9%e5%88%ab%e8%a1%8c%e6%94%bf%e5%8c%ba">澳门特别行政区</option></select>
                            </td>
                            <td>
                              <select onchange="ShowArea(this.options[selectedIndex].text);" name="CityID" id="CityID">
                                <option value="">--市--</option></select>
                            </td>
                            <td>
                              <select onchange="GetPostalCodeNew(this.options[this.selectedIndex].text,&#39;CityID&#39;,&#39;ProvinceID&#39;);ShowV(this.options[this.selectedIndex].text);" name="AreaID" id="AreaID">
                                <option value="">--县/区--</option></select>
                            </td>
                          </tr>
                          <tr>
                            <td width="">
                              <b id="provinceError" class="addressEdit" style="margin-left: 0; margin-top: 2px;">请选择省份</b></td>
                            <td width="">
                              <b id="cityError" class="addressEdit" style="margin-left: 0px; margin-top: 2px;">请选择市</b></td>
                            <td width="">
                              <b id="areaError" class="addressEdit" style="margin-left: 0px; margin-top: 2px;">请选择县/区</b></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span>*</span>详细地址：</td>
                    <td colspan="3">
                      <div style="margin-bottom: 5px;">
                        <span id="AddressHeadProvince" class="hei"></span>
                        <span id="AddressHeadCity" class="hei"></span>
                        <span id="AddressHeadArea" class="hei"></span>
                      </div>
                      <input id="detailAddress" maxlength="80" name="detailAddress" onblur="ChangeAddressInputCss(&#39;detailAddress&#39;,&#39;请填写详细路名及门牌号&#39;,2);ChecktheForm_Address();" onfocus="ChangeAddressInputCss(&#39;detailAddress&#39;,&#39;请填写详细路名及门牌号&#39;,1)" style="width:300px;" type="text" value="请填写详细路名及门牌号">
                      <span class="hei">
                        <a href="http://help.vancl.com/category/transfer" target="_blank">配送范围与配送时间</a></span>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3">
                      <b id="detailAddressError" class="addressEdit">请填写详细地址</b></td>
                  </tr>
                  <tr>
                    <td>
                      <span>*</span>邮政编码：</td>
                    <td colspan="3">
                      <input id="postalCode" maxlength="6" name="postalCode" onblur="ChangeAddressInputCss(&#39;postalCode&#39;,&#39;请填写邮政编码&#39;,2);ChecktheForm_Zip();" onfocus="ChangeAddressInputCss(&#39;postalCode&#39;,&#39;请填写邮政编码&#39;,1)" style="width:94px;" type="text" value="请填写邮政编码">
                      <span id="SetPostalCode"></span>
                    </td>
                  </tr>
                  <tr>
                    <td></td>
                    <td colspan="3">
                      <b id="postalCodeError" class="addressEdit">请填写邮政编码</b></td>
                  </tr>
                  <tr>
                    <td valign="top" style="padding-top: 6px;">
                      <span>&nbsp;&nbsp;</span>手 机：</td>
                    <td colspan="6">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td width="22%">
                              <input id="mobile" maxlength="11" name="mobile" onblur="ChangeAddressInputCss(&#39;mobile&#39;,&#39;手机和座机至少填写一个&#39;,2);ChecktheForm_Tel();" onfocus="ChangeAddressInputCss(&#39;mobile&#39;,&#39;手机和座机至少填写一个&#39;,1)" style="width:142px;" type="text" value="手机和座机至少填写一个"></td>
                            <td width="13%" align="right">座 机：</td>
                            <td width="64%">
                              <input id="phone" maxlength="20" name="phone" onblur="ChangeAddressInputCss(&#39;phone&#39;,&#39;手机和座机至少填写一个&#39;,2);ChecktheForm_Tel();" onfocus="ChangeAddressInputCss(&#39;phone&#39;,&#39;手机和座机至少填写一个&#39;,1)" style="width:142px;" type="text" value="手机和座机至少填写一个">
                              <span id="PhoneCode"></span>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                              <b id="mobileError" class="addressEdit">请填写手机</b></td>
                            <td>
                              <b id="phoneError" class="addressEdit">请填写座机</b></td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <span></span>
                    </td>
                    <td colspan="3">
                      <p style="margin: 10px 0px 15px 0;">
                        <input id="isDefaultAddress" type="checkbox" value="true" style="border:0;">
                        <span style="">设置为默认收货地址</span></p>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" style="padding-top: 6px;">
                      <span>&nbsp;</span></td>
                    <td colspan="6">
                      <p>
                        <a href="http://my.vancl.com/DeliveryAddress/Index###" onclick="ConfirmChoosedAddress(&#39;Inland&#39;)" class="track" name="my_modifyDeliveryInfo_btnAdd">
                          <img src="/ho/center/bt6.jpg" id="saveButton" alt="添加这个地址"></a>
                      </p>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <input id="Province" type="hidden" value="">
            <input id="City" type="hidden" value="">
            <input id="Area" type="hidden" value="">
            <input id="ProvinceText" type="hidden" value="">
            <input id="CityText" type="hidden" value="">
            <input id="AreaText" type="hidden" value="">
            <input id="Text" type="hidden" value="%e5%8c%97%e4%ba%ac,北京$%e5%a4%a9%e6%b4%a5,天津$%e6%b2%b3%e5%8c%97,河北$%e5%b1%b1%e8%a5%bf,山西$%e5%86%85%e8%92%99%e5%8f%a4,内蒙古$%e8%be%bd%e5%ae%81,辽宁$%e5%90%89%e6%9e%97,吉林$%e9%bb%91%e9%be%99%e6%b1%9f,黑龙江$%e4%b8%8a%e6%b5%b7,上海$%e6%b1%9f%e8%8b%8f,江苏$%e6%b5%99%e6%b1%9f,浙江$%e5%ae%89%e5%be%bd,安徽$%e7%a6%8f%e5%bb%ba,福建$%e6%b1%9f%e8%a5%bf,江西$%e5%b1%b1%e4%b8%9c,山东$%e6%b2%b3%e5%8d%97,河南$%e6%b9%96%e5%8c%97,湖北$%e6%b9%96%e5%8d%97,湖南$%e5%b9%bf%e4%b8%9c,广东$%e5%b9%bf%e8%a5%bf,广西$%e6%b5%b7%e5%8d%97,海南$%e9%87%8d%e5%ba%86,重庆$%e5%9b%9b%e5%b7%9d,四川$%e8%b4%b5%e5%b7%9e,贵州$%e4%ba%91%e5%8d%97,云南$%e8%a5%bf%e8%97%8f,西藏$%e9%99%95%e8%a5%bf,陕西$%e7%94%98%e8%82%83,甘肃$%e9%9d%92%e6%b5%b7,青海$%e5%ae%81%e5%a4%8f,宁夏$%e6%96%b0%e7%96%86,新疆$%e5%8f%b0%e6%b9%be%e7%9c%81,台湾省$%e9%a6%99%e6%b8%af%e7%89%b9%e5%88%ab%e8%a1%8c%e6%94%bf%e5%8c%ba,香港特别行政区$%e6%be%b3%e9%97%a8%e7%89%b9%e5%88%ab%e8%a1%8c%e6%94%bf%e5%8c%ba,澳门特别行政区">
            <input id="SelectValue" type="hidden" value=",,">
            <input id="provincev" name="provincev" type="hidden" value="">
            <input id="cityv" name="cityv" type="hidden">
            <input id="areav" name="areav" type="hidden">
            <input id="radioClickAddressID" name="radioClickAddressID" value="" type="hidden">
            <input id="currentUserID" name="currentUserID" type="hidden" value="80238269"></div>
        </fieldset>
        <input type="hidden" id="modelCount" value="0"></div>
    </div>
  </div>
</div>
@endsection