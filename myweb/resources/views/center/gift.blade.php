@extends('layout.homecenter')
@section('title')
我的礼品卡
@endsection
@section('dt')
&gt; <a href="/home/center/gift">礼品卡/优惠券</a>
@endsection
@section('con')
<div class="content" style="float: right; width: 780px;">
    <div class="title" style="padding-top: 5px;">
        <h3 style="padding-bottom: 5px;">我的礼品卡/优惠券</h3>
        <a href="http://my.vancl.com/GiftCard/GiftCardBatchInfo" class="track" style="display:none;border: none;background: #b81c22;width: 110px;height: 27px;color: white; cursor: pointer; text-align: center;  float: right; line-height: 27px;margin-bottom: 3px;">快抢礼品卡</a></div>
    <div class="blank10"></div>
    <!-- <script type="text/javascript" src="/ho/center/giftcardlist.js"></script> -->
    <div class="description">
        <div style="float: left">
            <span>目前账户可用礼品卡
                <b style="color: #a10000">0</b>张，其中
                <b style="color: #a10000">0</b>张将在30天内过期，请尽快使用！</span></div>
        <p>
            <label for="isValid" style="color: #a10000; font-weight: bold;">显示：</label>
            <input length="0" id="isValid" name="isValid" type="checkbox" value="true">
            <input name="isValid" type="hidden" value="false">
            <a name="my_GiftCard_OnlyShow_box" class="track">
                <label for="isValid">只显示可用的礼品卡</label></a>
        </p>
    </div>
    <div id="giftcardlist">
        <div id="cardsContainer">
            <table class="list">
                <tbody>
                    <tr>
                        <th class="gift-card-no" style="font-weight:bold;">卡号</th>
                        <th class="gift-password" style="font-weight:bold;">密码</th>
                        <th class="gift-value" style="font-weight:bold;">面值</th>
                        <th class="gift-balance" style="font-weight:bold;">余额</th>
                        <th class="gift-useful-life" style="font-weight:bold;">到期时间
                            <a href="javascript:void(0)">
                                <img id="sortBtn" class="order" src="/ho/center/down.png" sort="desc" tosort="asc" title="点击按到期时间降序排列" onmouseover="this.src=&#39;https:\/\/sslimg.vancl.com/my/2012/giftcard/downhover.png&#39;" onmouseout="this.src=&#39;https:\/\/sslimg.vancl.com/my/2012/giftcard/down.png&#39;"></a></th>
                        <th class="gift-status" style="font-weight:bold;">状态</th>
                        <th class="gift-remark" style="font-weight:bold;">备注</th></tr>
                </tbody>
            </table>
        </div>
        <table class="list">
            <tbody>
                <tr>
                    <td colspan="7" align="right" bgcolor="#FCFCFC">
                        <span id="page-info">
                            <label id="cardsPageIndex">1</label>
                            <span class="cardsPageTotal">/1</span></span>
                        <span id="pagination">
                            <div class="pagination" id="cardsPaginationDiv">
                                <span id="pre_s" class="prev track"></span>
                                <span id="next_s" class="next track"></span>
                            </div>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <script id="cardListTemplate" type="text/x-jquery-tmpl">
    <table class = "list"> 
        <tr> 
            <th class = "gift-card-no"style = "font-weight:bold;"> 卡号 </th>
            <th class="gift-password" style="font-weight:bold;">密码</th> 
            <th class = "gift-value"style = "font-weight:bold;" > 面值 </th>
            <th class="gift-balance" style="font-weight:bold;">余额</th> {
            {
                if sort == "desc"
            }
            } <th class = "gift-useful-life"style = "font-weight:bold;" > 到期时间 
                <a href = "javascript:void(0)"> 
                    <img id = "sortBtn"class = "order"src = "https://sslimg.vancl.com/my/2012/giftcard/down.png"sort = "desc"toSort = "asc"title = "点击按到期时间降序排列"onmouseover = "this.src='https://sslimg.vancl.com/my/2012/giftcard/downhover.png'"onmouseout = "this.src='https://sslimg.vancl.com/my/2012/giftcard/down.png'" />
                </a>
            </th > {
            {
                else
            }
            } <th class = "gift-useful-life"style = "font-weight:bold;" > 到期时间 
                <a href = "javascript:void(0)">
                    <img id = "sortBtn"class = "order"src = "https://sslimg.vancl.com/my/2012/giftcard/up.png"sort = "asc"toSort = "desc"title = "点击按到期时间升序排列"onmouseover = "this.src='https://sslimg.vancl.com/my/2012/giftcard/uphover.png'"onmouseout = "this.src='https://sslimg.vancl.com/my/2012/giftcard/up.png'" />
                </a>
            </th > {
            { /
                if
            }
            } <th class = "gift-status"style = "font-weight:bold;" > 状态 </th>
            <th class="gift-remark" style="font-weight:bold;">备注</th >
        </tr>

        <tr>
            <td><span class="hei">${$value.id}</span ></td>
            <td><span class="hei">${$value.passWord}</span ></td>
            <td><span class="hei">￥${$value.cardSum}</span ></td>
            <td class="available"><span>￥${$value.balance}</span ></td>         
            <td>
            ${$value.endTime}<br / > {
            {
                if $value.day == 0
            }
                } <span class = "hei" > （ < em style = "color:#a20000" > 即将过期 < /em>）</span >
            } {
            { /
            if
                }
            } {
                {
                    if $value.day <= 30
                }
            } <span class = "hei" > （ <em style = "color:#a20000" > 将在$ {
                $value.day
            }天内过期 </em>）</span > {
                { /
                    if
                }
            } {
                {
                    if $value.day > 30
                }
            } <span class = "hei" > （ <span > $ {
                $value.day
            } </span>天）</span > {
                { /
                    if
                }
            } < /td>
            <td class="available"><span>${$value.status}</span ></td>
            <td><span class="hei">${$value.remark}</span > </td>
        </tr > {
        {
            else
        }
        }<tr ><td > $ {
        $value.id
                } </td>
            <td>${$value.passWord}</td > <td > ￥$ {
                    $value.cardSum
                } </td>
            <td>￥${$value.balance}</td > <td > $ {
                    $value.endTime
                } </td>
            <td>${$value.status}</td > <td > $ {
                    $value.remark
                } </td>
        </tr > {
        { /
            if
        }
    } {
        { / each
        }
    } 
    </table>
    /</script>
    <script type="text/javascript">
        // $(function() {
        //     giftCard.showCards();
        //     ResetIsValidCheckbox();
        //     $("#isValid").click(function() {
        //         giftCard.changeStatusCards();
        //     });
        // });
    </script>
    <a href="http://my.vancl.com/GiftCard/GiftCardBatchInfo" class="track" style="display:none;">
        <img src="/ho/center/grabgiftcard_980.jpg" alt="快抢礼品卡" title="快抢礼品卡" style="width: 100%;margin-top: 5px;">
    </a>
    <!-- <iframe id="indexHttps" name="indexHttps" src="/ho/center/_IndexHttps.html" border="0" frameborder="0" scrolling="no" width="780" height="250"></iframe> -->
<div class="giftCard_tab">
    <div class="giftCard_box giftCard_box01" style="width: 280px">
        <h3>
            礼品卡余额查询</h3>
    <form action="https://my.vancl.com/giftcard/GetGiftCardBlance" data-ajax="true" data-ajax-method="post" data-ajax-mode="replace" data-ajax-update="#blanceInfo" id="form0" method="post">            
        <ul id="queryCardBox">
                <li>
                    <label>
                        卡&nbsp;&nbsp;号：</label>
                    <input type="text" name="cardID" id="cardID" value="" autocomplete="off">
                </li>
                <li>
                    <label>
                        密&nbsp;&nbsp;码：</label>
                    <input type="password" id="password" name="password" autocomplete="off">
                </li>
                <li>
                    <label>
                    </label>
                    <img style="cursor: pointer; vertical-align: text-bottom;" onclick="FlashImgCode();" id="codeImg" src="/ho/center/my">
                    <a style="cursor: pointer; display: inline-block;" onclick="FlashImgCode();">看不清？<br>
                        换一张</a> </li>
                <li>
                    <label>
                        验证码：</label>
                    <input type="text" name="codeTxt" id="codeTxt">
                </li>
                <li>
                    <label>
                    </label>
                    <a id="search">
                        <img src="/ho/center/bt2.jpg"></a> </li>
            </ul>
            <div id="blanceInfo">
            </div>
            <div class="clear">
            </div>
        </form>    
    </div>
    <div style="width: 250px; float: left;">
        <h3 style="font-weight: bold; height: 24px; line-height: 22px; margin-bottom: 3px">
            优惠券查询</h3>
        <form action="https://my.vancl.com/giftcard/Coupon" data-ajax="true" data-ajax-method="post" data-ajax-success="OnSuccess" id="form1" method="post">            <label style="width: 50px;">
                        优惠券：</label><input type="text" id="couponCardNo" name="couponCardNo" style="height: 22px;
                            padding: 0px 5px; border: 1px solid #e3e9ef; border-top: 1px solid #abadb3; margin: 0px 5px 0px 0px;
                            width: 145px;"><br>
                    <a id="searchCoupon" style="margin-top: 10px; display: block;">
                        <img src="/ho/center/bt2.jpg"></a>
                    <p class="couponError" style="color: Red; display: none">
                    </p>
        </form>    
    </div>
    <div class="giftCard_box" style="width: 240px">
        <h3>
            礼品卡相关帮助</h3>
        <ul class="howUse_Card">
            <li>1、<a href="http://catalog.vancl.com/public/cardflow.html" target="_blank">如何使用礼品卡</a>？</li>
            <li>2、<a href="http://help.vancl.com/Content/37.html" target="_blank">礼品卡使用规则</a>？</li>
        </ul>
    </div>
</div>
</div>
@endsection