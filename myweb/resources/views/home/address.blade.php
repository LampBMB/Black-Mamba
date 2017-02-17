@extends('layout.homeshop')
@section('con')
<div id="content">
    <div class="wrapper clearfix">
        <section class="order-info">
            <div id="addr" class="addr clearfix">
            <!-- 2015.08.04 更新 -->
                <div class="addr-hd inland-addr-hd addr-hd-new clearfix">
                    <h3 class="addr-title">收货地址：</h3>
                </div>
                <section class="inland-addr">

                    <!-- 显示地址框 -->
                    
                    <div id="dzb"  style="display:none;">
                        <div class="addr-list Clearfix">
                            @foreach($address as $v)
                            <div class="newaddrdiv user-def-addr addr-hover " addid="{{$v['id']}}">
                                <table>
                                    <tbody>
                                        <tr class="">
                                            <td class="addr-detail">
                                                <div id="phone" class="addr-lang-option-edit" style="text-align:left;">
                                                    <span>{{$v['name']}}</span>
                                                    <span>{{$v['phone']}}</span>
                                                    <span class="info">{{$v['sheng']}} {{$v['shi']}} {{$v['xian']}}</span>
                                                    <span style="height: 20px; overflow: hidden;">{{$v['jiedao']}}</span>
                                                    <span style="margin:6px 8px;color:#b80000">
                                                        <input type="radio" name="isdefault" value="1">设为收货地址
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="oprate" style="font-weight:bold;width:220px;margin-bottom:10px;display:none;">
                                                <a addid="{{$v['id']}}" href="#" onclick="return false;" style="color:#808080;margin-left:140px;" class="dzbj">编辑</a>
                                                <a addid="{{$v['id']}}" href="#" onclick="return false;" style="color:#808080;margin-left:5px;" class="dzsc">删除</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                            @endforeach  
                        </div>


                        <div class="add-addr-panel ">
                            <label class="tjdz" for="add-addr">
                                <span>+</span>添加新地址
                            </label>
                        </div>
                    </div>
                    <!-- 显示地址框结束 -->
                    
                    <div id="dza" class="add-addr-panel  nobody-add-addr ">
                        <label class="tjdz" for="add-addr">
                            <span>+</span>添加新地址
                        </label>
                    </div>
                    <!-- 引入城市级联js -->
                    <script type="text/javascript" src="/ho/cj/jquery.js"></script>
                    <script type="text/javascript" src="/ho/cj/area.js"></script>
                    <script type="text/javascript" src="/ho/cj/location.js"></script>
                    <!-- 城市级联js结束 -->
                    <div class="addr-form " style="display:none;">

                        <form id="set-addr-form" action="/home/address/add" method="post" class="formadd" style="padding-top:20px">
                            {{csrf_field()}}
                                    <input class="upda" type="hidden" name="updateid">
                            <ol style="padding-left:0px">
                                    <h2 style="margin:12px;font-weight:bold;">添加收货地址</h2>
                                <li>
                                    <div><span>*</span> 收&nbsp; 货&nbsp; 人：</div>
                                    <div>
                                        <input type="text" name="name" placeholder="请准确填写真实姓名" class="place-holder">
                                        <p class="error"></p>
                                    </div>
                                </li>
                                <li>
                                    <div><span>*</span> 手 &nbsp; 机：</div>
                                    <div>
                                        <input type="text" name="phone" class="mobile place-holder" placeholder="请填写正确的手机号">
                                        <p class="error"></p>
                                    </div>
                                </li>
                                             
                                <li>
                                    <div><span>*</span> 地 &nbsp; 区：</div>
                                    <div>
                                        <select id="loc_province" name="sheng"></select>
                                        
                                        <p class="error">请选择省份</p>
                                    </div>

                                    <div>
                                    <select id="loc_city" name="shi"></select>
                                        
                                        <p class="error">请选择市</p>
                                    </div>

                                    <div>
                                    <select id="loc_town" name="xian"></select>
                                        
                                        <p class="error">请选择县/区</p>
                                    </div>
                                </li>
                                <li>
                                    <div><span>*</span> 详细地址：</div>
                                    <div>
                                        <input type="text" name="jiedao" class="addr-detail place-holder" placeholder="请填写详细路名及门牌号">
                                        <a href="http://help.vancl.com/category/transfer" target="_blank">配送范围与配送时间 </a>
                                        <p class="error">
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div><span>*</span> 邮政编码：</div>
                                    <div>
                                        <input type="text" name="code" placeholder="请填写正确的邮政编码" class="place-holder" >
                                        <span id="default-postal-code"></span>
                                        <p class="error"></p>
                                    </div>
                                </li>
                                
                                <li>
                                    <input class="save-new-addr track" value="" type="submit">
                                </li>
                            </ol>
                        </form>
                        <a class="list_inland-cancel-edit" style="display: inline;">X</a>
                    </div>
                </section>
            </div>

                <div id="delivery" class="delivery">
                    <h3 class="delivery-title addr-hd-new">配送方式：</h3>
                    <section class="inland-addr">
                        <div id="psa">
                            <div class="warn1">请先确认“收货地址”</div>
                            <div style="margin:0 10px">
                                <li class="delivery-explanation clearfix"><em>声明：</em>
                                
                                    <p>1.&nbsp;<a class="oprate" target="_blank" href="http://help.vancl.com/category/transfer">查看货到付款配送范围</a></p>
                                    <p>2.&nbsp;送货时间：早 8:30至 晚7:30</p>
                                    3.&nbsp;我们会努力按照您选择的时间进行配送，但因天气、交通等因素影响，您的订单有可能会有延误现象，请您谅解！
                                </li>
                            </div>
                        </div>

                        <form action="/home/order/insert" method='post'>
                            {{csrf_field()}}
                                <!-- 获取地址id  -->
                                <input id="dzinput" type="hidden" name="addressid" value="0">

                            <ol id="psb" class="choose-delivery" style="margin-top:8px;display:none;">
                                <li class="delivery-way disnone">
                                    <h4>送货方式：</h4>
                                </li>
                                <li class="delivery-way-items " style="margin: 5px 0px 0px 5px;border: none;text-align: left;line-height: 20px; height: 20px;width:100%">                
                                    <input class="delivery-radio" style="display:inline;"checked="checked" type="radio">
                                    <label class="delivery-item" style="display:inline;*width:80px; *height:20px;">快递
                                    </label>
                                    
                                    <span style="color:#656565;margin-left:20px">乡村镇用户</span>
                                    <a href="http://help.vancl.com/category/transfer" target="_blank" class="oprate">查看货到付款配送范围</a>        
                                    <span class="error">请选择送货方式</span> 
                                </li>
                                <li class="delivery-divide disnone"></li>
                                <li class="delivery-time-title disnone">
                                    <h4>送货时间：</h4>
                                </li>

                        <!-- express 送货方式 -->

                                <li class="delivery-time-items">
                                    <div class="choose-delivery-selected">
                                        <input id="transferTime-Working" name="express" value="1" class="disnone" checked="checked" type="radio">
                                        <label for="transferTime-Working">周一至周五、工作日送货</label>
                                        <span class="error">请选择送货时间</span>
                                    </div>
                                    <div class="">
                                        <input id="transferTime-Weekend" name="express" value="2" class="disnone" type="radio">
                                        <label for="transferTime-Weekend">周六、周日、假日送货</label>
                                    </div>
                                    <div class="">
                                        <input id="transferTime-AnyTime" name="express" value="3" class="disnone" type="radio">
                                        <label for="transferTime-AnyTime">周一至周日、假日均可送货</label>
                                    </div>
                                </li>
                        <!-- express 送货方式 -->

                                <li class="delivery-explanation clearfix" style="position:static">
                                    <em>声明：</em>
                                    <div>
                                        <p>1.&nbsp;送货时间：早 8:30至 晚7:30</p>
                                        2.&nbsp;我们会努力按照您选择的时间进行配送，但因天气、交通等因素影响，您的订单有可能会有延误现象，请您谅解！
                                    </div>
                                </li>
                            </ol>
                    </section>
                    <span class="clear"></span>
                </div>
                <div id="pay" class="pay noborder clearfix">
                    <div class="pay-hd pay-title" style="height: 330px; line-height: 330px;">
                        <h3 class="pay-title" style="height: 330px; line-height: 330px;">支付方式：</h3>
                    </div> 

                        <section class="inland-addr" id="zfb" style="display:none;" >
                            <div class="cash-on-delivery">         
                             
                                <label for="COD">&nbsp;</label>
                        <!-- pay支付方式 -->
                                <span class="cash-on-delivery-items ">
                                    <label for="01True" class="cash-css-hdfk zfxz pay-online-label-selected">
                                        <span class="span1">在线支付</span>
                                        <div class="pay-online">            
                                            <a class="pay-online-bank-list oprate">
                                                查看银行列表
                                                <div class="pay-online-list " style="display:none;">
                                                        <h5 class="bank-or-agency-pay">
                                                            银行或机构支付：</h5>
                                                        <ul class="clearfix">
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/gsico.png" alt="中国工商银行" title="中国工商银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/zsico.png" alt="招商银行" title="招商银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/zgico.png" alt="中国银行" title="中国银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/jsico.png" alt="中国建设银行" title="中国建设银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/yzico.png" alt="中国农业银行" title="中国农业银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/gfico.png" alt="广发银行" title="广发银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/xyico.png" alt="兴业银行" title="兴业银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/bjico.png" alt="北京银行" title="北京银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/ncico.png" alt="北京农村商业银行" title="北京农村商业银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/nyico.png" alt="中国邮政储蓄银行" title="中国邮政储蓄银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/jtico.png" alt="交通银行" title="交通银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/pfico.png" alt="浦发银行" title="浦发银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/szico_1.jpg" alt="深圳发展银行" title="深圳发展银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/gdico.png" alt="中国光大银行" title="中国光大银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/msico.png" alt="中国民生银行" title="中国民生银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/zxico.png" alt="中信银行" title="中信银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/paico.png" alt="深圳平安银行" title="深圳平安银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/hzico.png" alt="杭州银行" title="杭州银行">
                                                                </li>
                                                                <li>
                                                                
                                                                    <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/nbico.png" alt="宁波银行" title="宁波银行">
                                                                </li>
                                                        </ul>
                                                        <h5 class="bank-or-agency-pay">
                                                            支付平台：</h5>
                                                        <ul class="clearfix">
                                                                    <li>
                                                                        <img class="bank-img" src="https://sslimg.vancl.com/cms/20131125/alipayscancode.png" alt="支付宝手机" title="支付宝手机">
                                                                    </li>
                                                                    <li>
                                                                        <img class="bank-img" src="https://sslimg.vancl.com/shopping/pay/zfbico.png" alt="支付宝" title="支付宝">
                                                                    </li>
                                                            <li>
                                                                <img class="bank-img" src="http://i1.vanclimg.com/cms/20150915/weixinshaomiao.png" alt="微信扫码支付" title="微信扫码支付">
                                                            </li>
                                                        </ul>
                                                <span class="bank-list-arrow"></span>
                                                </div>
                                            </a>
                                        </div>
                                        <input name="pay" value="1" class="disnone" type="radio" checked="checked">
                                    </label>

                                    <label for="01False" class="cash-css-hdfk zfxz">
                                        <span class="span1">货到付款</span>
                                        <span class="span2">现金支付</span>
                                        <input name="pay" value="2" class="disnone" type="radio">
                                    </label>

                                    <span class="cash-arrow"></span>
                                </span>
                                <span class="blankclear"></span>
                            </div>
                        <!-- pay支付方式 -->

                            <span class="error">请选择支付方式</span>
                        </section>
                    <span id="zfa" class="no-addr-or-delivery-error warn1" style="margin:20px 0 10px 80px;">请先确认“收货地址”或“配送方式”</span>
                </div>

            <div id="virtual-account" class="virtual-account" style="top: -160px;">
         
                <div class="virtual-account-hd clearfix">
                    <input type="checkbox" id="virtualAccount" name="virtualAccount" style="float: left;margin: 14px 5px 0 18px;">
                    <h3 class="virtualaccount-title" style="text-align: left; width: auto !important;padding-right: 10px">
                        使用账户余额
                    </h3>
                    <span class="virtual-account-balance">账户余额:<em>￥0.00</em></span>

                    <a href="http://cz.vancl.com/DepositPre.aspx" style="line-height: 40px;color: #A10000;margin-left: 20px;border-bottom: 1px;border-bottom-color: #A10000;border-bottom-style: solid;*padding-top:0px">充100返100,点击立即充值
                    </a>
                </div>
            </div>

            <div id="points" class="points" style="margin-top: 15px; top: 650px;">
                <div class="delivery-hd clearfix" style="margin-top: 15px;">
                    <input type="checkbox" id="points-radio" name="gift-points" style="float: left; margin-top: 3px;" paytype="2">   
                    <h3 class="points-titles" data-has-delivery="true">使用积分：</h3>
                    <span>使用0积分，抵现<em style="color: #b81c22">0元</em>。 </span>
                </div>
            </div>
            <div id="gift-card" class="gift-card giftcards" style="top: 721px;">
                <div class="gift-card-hd clearfix">
        
                    <input type="checkbox" id="gift-card-radio" name="gift-points" style="float: left;margin-top: 3px;" paytype="1"> 
                    <h3 class="gift-card-title">使用礼品卡/优惠券：</h3>
                    <input id="cardForWeibo" type="radio" class="cardRadio" value="weibo" name="card" style="margin: 0px!important;" disabled="disabled" checked="checked">
                        <label for="cardForWeibo" style="margin: 12px 10px 0px 0px;">优惠券</label>
                    <input id="cardForVancl" type="radio" class="cardRadio" value="vancl" name="card" style="margin: 0px!important;" disabled="disabled">
                        <label for="cardForVancl" style="margin: 12px 10px 0px 0px;">礼品卡</label>
                </div>    
                <span id="yhqa" class="no-addr-or-delivery-error">请先确认“收货地址”或“配送方式”</span>
                <div id="yhqb" class="gift-card-panel direct-gift-card-panel" style="display:none;">
                    <div class="gift-card-form">
                        <ul>
                            <li>
                                <label for="gift-card-id">卡号：</label>
                                <input name="" id="gift-card-id" type="text">
                                <input id="sumbitGiftCard" class="query-gift-card track" name="" style="background: #b80000 !important;color: #ffffff;" value="使用优惠劵" type="submit">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <div id="order-info-panel">
            <div id="all-tips" data-tips=""></div>
    <!--订单显示-->
                <div class="additional-info">
                        <h4 class="collapse" style="display: block">订单备注</h4>
                    <div id="ddbz" class="additional-info-content" style="display: none">
                        <h5>您需要附加说明吗？</h5>
                        <div class="additional-info-detail clearfix">
                            <div class="comments">如有请留言</div>
                        </div>
                        <div>
                            <textarea id="comments" name="text" class="place-holder" placeholder="此处请勿填写有关配送、支付等方面的信息。留言请在50字以内"></textarea>
                            <p class="error"></p>
                        </div>
                    </div>
                    <h4 class="collapse">开发票</h4> <!--发票栏按钮-->
                    
                    <!--默认隐藏->点击开启发票栏-->
                    <div id="fp" class="additional-info-content" style="display:none;">
                        <h5 style="border: solid 1px #A30000; padding: 5px; line-height: 22px; margin: 0 0 10px 0;
                            color: #656565; font-weight: normal; width: 900px;">
                            1、发票金额按您实际消费的金额开具，使用账户余额支付，则按您实际充值的金额开具。<br>
                            2、从广州库房发货的订单（自2016年4月22日起）和从上海库房发货的订单（自2016年11月1日起）将提供电子发票，电子发票与纸质发票具有同等法律效力，可以按提示在系统中查询打印，有疑问请咨询客服。
                        </h5>

                        <h5>
                            您需要开具发票吗？
                                <input type="radio" id="IsInvoicePositive" name="bill" value="true">
                                <label for="IsInvoicePositive">是</label>
                                <input type="radio" id="IsInvoiceNegative" name="bill" checked="checked" value="false">
                                <label for="IsInvoiceNegative">否</label>
                        </h5>

                        <div class="additional-info-detail invoice-content">
                            <span>*</span>
                            <label for="InvoiceCustom">客户类型：</label>
                                <select id="InvoiceCustom" name="billtype" disabled="disabled">
                                        <option value="Personal">个人</option>
                                        <option value="Company">公司</option>
                                        <option value="IndividualBusiness">个体工商户</option>
                                        <option value="Foreign">外籍</option>
                                        <option value="Hkmotw">港、澳、台</option>
                                </select>
                        </div>

                        <div class="additional-info-detail clearfix">
                            <div>
                                <span>*</span>发票抬头：</div>
                            <div>
                                    <input id="InvoiceTitle" class="invoice-title" type="text" name="billname" disabled="disabled" maxlength="50" placeholder="个人无需填写,其他必填" >
                            </div>
                        </div>
                        <div class="additional-info-detail invoice-content">
                            <span>*</span><label for="InvoiceContent">发票内容：</label>
                                <select id="invoiceContent" name="billtext" disabled="disabled">
                                        <option value="Clothes">服装</option>
                                        <option value="Shoes">鞋</option>
                                        <option value="Household">家居</option>
                                        <option value="Cosmetics">配饰</option>
                                        <option value="Details">明细</option>
                                </select>
                        </div>
                    </div>
                </div>
                    <div class="order-info-head">
                        <h3 class="clearfix">
                            <span class="order-list-title">商品清单</span>
                            <a name="sp_cart_gift_back_cart" class="back2cart track" href="/home/shopping/index">
                                回到购物车，修改产品&gt;&gt;</a>  
                        </h3>
                    </div>
                    <div class="order-list order-list2 clearfix">
                        <table>
                            <thead>
                                <tr>
                                    <th>商品名称</th>
                                    <th>尺码</th>
                                    <th style="display: none">赠送积分</th>
                                    <th>单价</th>
                                    <th>数量</th>
                                    <th>优惠</th>
                                    <th>小计</th>
                                </tr>
                            </thead>
                            @foreach($shopping as $v)
                                <input type="hidden" name="userid" value="{{$v['userid']}}">
                                <input type="hidden" name="oid" value="{{$v['oid']}}">
                                <input type="hidden" name="shoptime" value="{{$v['addtime']}}">

                            <tbody>
                                    <tr>
                                        <td class="name">
                                            <img src="{{$v['picname']}}" alt="">
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            <a target="_blank" href="">{{$v['goods']}}</a>
                                        </td>
                                        <td class="size">
                                            @if($v['size']==0)
                                                S
                                            @elseif($v['size']==1)
                                                M
                                            @elseif($v['size']==2)
                                                L
                                            @elseif($v['size']==3)
                                                XL
                                            @elseif($v['size']==4)
                                                XXL
                                            @endif
                                        </td>
                                        <td class="point" style="display: none">819分</td>
                                        <td class="price">￥{{$v['price']}} 元</td>
                                        <td class="qty">{{$v['num']}}</td>
                                        <td class="preferential">
                                            <div class="discount-cx">-</div>
                                        </td>
                                        <td class="sub-total">￥<span>{{$v['price']*$v['num']}}</span> 元</td>
                                    </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <div class="order-amount">
                            商品金额小计:<span>￥0.00</span> &nbsp;&nbsp;+&nbsp;&nbsp;
                            运费:<span>￥0.00</span>
                            &nbsp;&nbsp;=&nbsp;&nbsp;
                            应付:<em>￥0.00</em>
                        </div></div>
                        <ul class="all-amount">
                            <li>
                                <em>共:
                                    <label class="shuliang" id="price-total"> 0 </label> 件商品
                                    ，总计:
                                    <label class="zongjia" id="price-total"></label>
                                </em>
                            </li>
                        </ul>

                        <div class="order-submit clearfix">
                            <input type="hidden" name="total" value="">
                            <input type="hidden" name="num" value="">
                            <input type="submit" id="submit-order-btn" onclick="return false;" value="提交订单" class="submit-order-btn track">
                            <div style="border: 1px solid #EBE5BB; background: #FFFEF5; width: 60%; padding: 15px;
                                margin: 0 10px 0 0; float: right; text-align: center; font-size: 14px;">
                                祝您下单愉快，普通商品签收之日起7天内，可享受7天无理由退换货
                            </div>
                            <span style="clear: both;"></span><span class="warn oprate"></span>
                        </div>
                    </form>
            </div>
        </div>
    </div>

<script type="text/javascript">
    $('input[name="bill"]').each(function(){
        $(this).click(function(){
           if($(this).val()=='true'){
                $(this).parent().next().find('select').removeAttr('disabled');
                $(this).parent().next().next().find('input').removeAttr('disabled');
                $(this).parent().next().next().next().find('select').removeAttr('disabled');
           }else{
                $(this).parent().next().find('select').attr('disabled','disabled');
                $(this).parent().next().next().find('input').attr('disabled','disabled');
                $(this).parent().next().next().next().find('select').attr('disabled','disabled');
           }
        });
        
    });
    function count(){
        var cou=0;
        var total=0;
        $('.sub-total span').each(function(){
            var xiaoji=parseInt($(this).html());
            total+=xiaoji;
        });

        $('.zongjia').html('￥'+total+' 元');   
        $('.order-amount span:eq(0)').html('￥'+total+' 元');
        $('.order-amount em').html('￥'+total+' 元');

        $('.qty').each(function(){
            var sl=parseInt($(this).html());
            cou+=sl;
        });
        $('.shuliang').html(cou);
        $('input[name="total"]').val(total);
        $('input[name="num"]').val(cou);
        // console.log(cou);
    };
    count();

    // 城市级联
    $(document).ready(function(){
        showLocation();
    });

    // 将地址的id替换为对应的字符串
    $('.info').each(function(){
        var info=$(this).html();
        var res=change(info);
        $(this).html(res);

    });

    function change(info){
        // 将字符串按照 拆分
        var arr=info.split(' ');
        // console.log(arr);
        // 执行替换
        var xx= new Location();
        var xx=xx.items;
        var sheng=xx[0][arr[0]];
        var shi=xx[0+','+arr[0]][arr[1]];
        var xian=xx[0+','+arr[0]+','+arr[1]][arr[2]];
        return sheng+' '+shi+' '+xian;
    }
        

    // 添加地址开关
    $('.tjdz').click(function(){
        $('.addr-form').css('display','block');
        $('input[name="updateid"]').remove();
    });
 
    $('.list_inland-cancel-edit').click(function(){
        $('.addr-form').css('display','none');
        $('input[name="updateid"]').remove();
    });

    // 订单备注
    $('.collapse:eq(0)').toggle(function(){
        $('#ddbz').css('display','block');
    },function(){
        $('#ddbz').css('display','none');
    });

    // 发票开关
    $('.collapse:eq(1)').toggle(function(){
        $('#fp').css('display','block');
    },function(){
        $('#fp').css('display','none');
    });

    var phone=$('#phone').find('span:eq(1)').html();
    if(!phone==''){
        $('#dza').css('display','none');
        $('#dzb').css('display','block');
        $('#psa').css('display','none');
        $('#psb').css('display','block');
        $('#zfa').css('display','none');
        $('#zfb').css('display','block');
        $('#yhqa').css('display','none');
        $('#yhqb').css('display','block');
        
    };
    // 点击哪个地址实现选中效果
    $('.newaddrdiv').each(function(){
        $(this).click(function(){
            $(this).siblings('div').removeClass('addr-selected');
            $(this).addClass('addr-selected');
            $(this).find('input[name="isdefault"]').attr('checked','true');
            var addid=$(this).attr('addid');
            $('#dzinput').val(addid);
            
        });

        $(this).hover(function(){
            $(this).find('.oprate').css('display','block');
        },function(){
            $(this).find('.oprate').css('display','none');    
        });
    });
    
    $('#submit-order-btn').click(function(){
        var dizik=$('input[name="addressid"]').val();
       if(dizik==0){
            $(this).attr('onclick','return false');
            alert('请确认收货地址');
       }else{
            $(this).attr('onclick','return true');
       }
    });

    // 配送方式 点击选中div
    $('.delivery-time-items div').each(function(){
        $(this).click(function(){
            $(this).siblings('div').removeClass('choose-delivery-selected');
            $(this).addClass('choose-delivery-selected');
        });
    });

    // 支付方式 点击选中div
    $('.zfxz').each(function(){
        $(this).click(function(){
            $(this).siblings('label').removeClass('pay-online-label-selected');
            $(this).addClass('pay-online-label-selected');
            $(this).find('input[name="pay"]').attr('checked','true');
        });
    });

    $('.oprate').hover(function(){
        $(this).find('.pay-online-list').css('display','block'); 
    },function(){
        $(this).find('.pay-online-list').css('display','none');    
    });

    // 地址编辑按钮
    $('.dzbj').each(function(){
        $(this).click(function(){
            var addid=$(this).attr('addid');
            $('.addr-form').css('display','block');
            fun(addid);
        });
    });
    function fun(addid){
        $.ajax({
            url:'/home/address/update',
            data:{'addid':addid},
            type:'get',
            dataType:'json',
            success:function(mes){
                $(mes).each(function(){
                    $('input[name="updateid"]').val($(this).attr('id'));
                    $('input[name="name"]').val($(this).attr('name'));
                    $('input[name="phone"]').val($(this).attr('phone'));
                    $('input[name="jiedao"]').val($(this).attr('jiedao'));
                    $('input[name="code"]').val($(this).attr('code'));
                });
            }
        });
    }

    // 地址删除按钮
    $('.dzsc').each(function(){
        $(this).click(function(){
            var addid=$(this).attr('addid');
            $(this).parent().parent().parent().parent().parent().remove();
            $.ajax({
                url:'/home/address/del',
                data:{'addid':addid},
                type:'get',
                success:function(mes){
                 alert('删除成功!');
                }
            });

        });
    });


</script>
@endsection