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
                    <div class="add-addr-panel  nobody-add-addr ">
                        <input class="fix-ckb-radio" id="add-addr" name="AddressId" checked="checked" type="radio" value="0" data-url="/checkout/showaddaddress?isforeign=false">
                            <label for="add-addr" data-url="/checkout/showaddaddress?isforeign=false">
                                <span>+</span>添加新地址
                            </label>
                    </div>    
                    <div class="addr-form" style=""></div>
                </section>
            </div>
            <div id="delivery" class="delivery">
                <h3 class="delivery-title addr-hd-new">配送方式：</h3>
                <section class="inland-addr">
                    <div class="warn1">请先确认“收货地址”</div>
                    <li class="delivery-explanation clearfix"><em>声明：</em>
                        <div>
                            <p>1.&nbsp;<a class="oprate" target="_blank" href="http://help.vancl.com/category/transfer">查看货到付款配送范围</a></p>
                            <p>2.&nbsp;送货时间：早 8:30至 晚7:30</p>
                            3.&nbsp;我们会努力按照您选择的时间进行配送，但因天气、交通等因素影响，您的订单有可能会有延误现象，请您谅解！
                        </div>
                    </li>
                </section>
                <span class="clear"></span>
            </div>
            <div id="pay" class="pay noborder clearfix">
                <div class="pay-hd pay-title" style="height: 330px; line-height: 330px;">
                    <h3 class="pay-title" style="height: 330px; line-height: 330px;">支付方式：</h3>
                </div>    
                <span class="no-addr-or-delivery-error warn1" style="margin:20px 0 10px 80px">请先确认“收货地址”或“配送方式”</span>
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
                <span class="no-addr-or-delivery-error">请先确认“收货地址”或“配送方式”</span>
            </div>
        </section>
        <div id="order-info-panel">
        <div id="all-tips" data-tips=""></div>
    <!--订单显示-->
            <form method="post" action="https://shopping.vancl.com/checkout/save" name="Myform" id="submit-order-form" class="">
                <div class="additional-info">
                        <h4 class="collapse" style="display: none">订单备注</h4>
                    <div class="additional-info-content" style="display: block">
                        <h5>您需要附加说明吗？</h5>
                        <div class="additional-info-detail clearfix">
                            <div class="comments">如有请留言</div>
                        </div>
                        <div>
                            <textarea id="comments" name="comments" class="place-holder" placeholder="此处请勿填写有关配送、支付等方面的信息。留言请在50字以内">
                                
                            </textarea>
                            <p class="error"></p>
                        </div>
                    </div>
                    <h4 class="collapse">开发票</h4> <!--发票栏按钮-->
                    
                    <!--默认隐藏->点击开启发票栏-->
                    <div class="additional-info-content" style="display:block;">
                        <h5 style="border: solid 1px #A30000; padding: 5px; line-height: 22px; margin: 0 0 10px 0;
                            color: #656565; font-weight: normal; width: 900px;">
                            1、发票金额按您实际消费的金额开具，使用账户余额支付，则按您实际充值的金额开具。<br>
                            2、从广州库房发货的订单（自2016年4月22日起）和从上海库房发货的订单（自2016年11月1日起）将提供电子发票，电子发票与纸质发票具有同等法律效力，可以按提示在系统中查询打印，有疑问请咨询客服。
                        </h5>
                        <h5>
                            您需要开具发票吗？
                                <input type="radio" id="IsInvoicePositive" name="requireInvoice" value="true">
                                <label for="IsInvoicePositive">
                                    是</label>
                                <input type="radio" id="IsInvoiceNegative" name="requireInvoice" checked="checked" value="false">
                                <label for="IsInvoiceNegative">
                                    否</label>
                        </h5>
                        <div class="additional-info-detail invoice-content">
                            <span>*</span><label for="InvoiceCustom">客户类型：</label>
                                <select id="InvoiceCustom" name="InvoiceCustom" disabled="disabled">
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
                                    <input id="InvoiceTitle" class="invoice-title" type="text" name="invoicetitle" disabled="disabled" maxlength="50">
                                    <input id="InvoiceTitlePerson" class="invoice-title-person" type="text" name="invoicetitle" maxlength="50" disabled="disabled" value="个人">
                                <p class="error">
                                </p>
                            </div>
                        </div>
                        <div class="additional-info-detail invoice-content">
                            <span>*</span><label for="InvoiceContent">发票内容：</label>
                                <select id="invoiceContent" name="InvoiceContent" disabled="disabled">
                                        <option value="Clothes">服装</option>
                                        <option value="Shoes">鞋</option>
                                        <option value="Household">家居</option>
                                        <option value="Cosmetics">配饰</option>
                                        <option value="Details">明细</option>
                                </select>
                        </div>
                        <div id="invoice-tax" class="additional-info-detail clearfix">
                            <div class="invoice-tax">
                                税务登记号：</div>
                            <div>
                                    <input id="InvoiceTaxNo" class="invoice-title" type="text" name="InvoiceTaxNo" disabled="disabled" maxlength="20">
                                <p class="error">
                                </p>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="requireedm" value="true">
                </div>
                    <div class="order-info-head">
                        <h3 class="clearfix">
                            <span class="order-list-title">商品清单</span>
                            <a name="sp_cart_gift_back_cart" class="back2cart track" href="http://shopping.vancl.com/mycart">
                                回到购物车，修改产品&gt;&gt;</a>  
                        </h3>
                    </div>
                        <h5 class="order-list-head">
                            订单1<span class="store-house-info">将从<em></em>发出，预计发货后
                                    <em>1天</em>
                            内送达</span>
                        </h5>
                    <div class="order-list order-list2 clearfix">
                        <div class="order-list-shop" style="display: none">
                            店铺:<span class="store-house-shop">
                                    <a href="http://mall.vancl.com/10258/">VANCL 凡客诚品旗舰店</a>
                                </span>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>
                                        商品名称
                                    </th>
                                    <th>
                                        尺码
                                    </th>
                                    <th style="display: none">
                                        赠送积分
                                    </th>
                                    <th>
                                        单价
                                    </th>
                                    <th>
                                        数量
                                    </th>
                                    <th>
                                        优惠
                                    </th>
                                    <th>
                                        小计
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td class="name">
                                            <a target="_blank" href="http://item.vancl.com/6375397.html?ref=s-s-k_rs_kdb1_a2123c8aa8514203b90547e1884dc26f_15ffbb73a9eee207-1_2-6375397_Sort01_qb_000-v">凡客羊绒衫 菱形条纹套衫 男款 橡皮色</a>
                                        </td>
                                        <td class="size">S
                                        </td>
                                        <td class="point" style="display: none">819
                                            分
                                        </td>
                                        <td class="price">
                                            ￥819.00
                                        </td>
                                        <td class="qty">1
                                        </td>
                                        <td class="preferential">
                                            <div class="discount-cx">
                                                    -
                                            </div>
                                        </td>
                                        <td class="sub-total">
                                            ￥819.00
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <div class="order-amount">
                            商品金额小计:<span>￥819.00</span> &nbsp;&nbsp;+&nbsp;&nbsp;运费:<span>￥0.00</span>
                            &nbsp;&nbsp;=&nbsp;&nbsp;应付:<em>￥819.00</em>
                        </div>
                    </div>
                        <ul class="all-amount">
                            <li><em>已支付：<label id="price-total" data-price-total="0.00">￥0.00</label>，您还需支付：<label id="price-total" data-price-total="819.00">￥819.00元</label></em>
                            </li>
                        </ul>

                        <div class="order-submit clearfix">
                            <input type="submit" id="submit-order-btn" value="提交订单" class="submit-order-btn track" name="sp_cart_submit_order">
                            <div style="border: 1px solid #EBE5BB; background: #FFFEF5; width: 60%; padding: 15px;
                                margin: 0 10px 0 0; float: right; text-align: center; font-size: 14px;">
                                祝您下单愉快，普通商品签收之日起7天内，可享受7天无理由退换货
                            </div>
                            <span style="clear: both;"></span><span class="warn oprate"></span>
                        </div>
                <!--特惠品移除提示-->
            </form>
        </div>
    </div>
</div>
@endsection