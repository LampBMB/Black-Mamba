@extends('layout.homecenter')
@section('title')
关联账户
@endsection
@section('dt')
&gt; <a href="/home/center/relevance">关联账户</a>
@endsection
@section('con')
<div id="main">
    <div class="mngbox">
        <div class="main">
            <div class="glzh">
                <div class="bangding">
                    <h2>
                        <span>关联账户</span></h2>
                    <span class="blank20"></span>
                    <p>绑定主流社交网站账号，可以快速地将你在凡客商品和凡客达人搭配分享给朋友们，赶紧开始你的分享之旅吧！</p>
                    <p>提示：若您之前绑定的相关平台在此提示您再次操作，可能是由于各平台限制自然解除，或您在其他平台解除绑定，请点击 “立即绑定”重新关联相应平台。</p>
                    <span class="blank20"></span>
                    <dl>
                        <dt>
                            <a>
                            </a>
                        </dt>
                        <dd>
                            <h3>
                                <a>新浪微博</a>
                            </h3>
                            <p>
                                <a href="http://www.weibo.com/" target="_blank">http://www.weibo.com</a></p>
                            <input id="btnBindAccount1" type="button" value="" site="新浪微博" token="" onclick="javascript:ShowBindWindow( 1);" class=""></dd>
                    </dl>
                    <dl>
                        <dt class="zhlogo01">
                            <a>
                            </a>
                        </dt>
                        <dd>
                            <h3>
                                <a>腾讯QQ</a>
                            </h3>
                            <p>
                                <a href="http://www.qq.com/" target="_blank">http://www.qq.com</a></p>
                            <input id="btnBindAccount0" type="button" value="" site="QQ" token="" onclick="javascript:ShowBindWindow( 0);" class=""></dd>
                    </dl>
                    <dl>
                        <dt class="zhlogo02">
                            <a>
                            </a>
                        </dt>
                        <dd>
                            <h3>
                                <a>网易</a>
                            </h3>
                            <p>
                                <a href="http://www.163.com/" target="_blank">http://www.163.com</a></p>
                            <input id="btnBindAccount3" type="button" value="" site="网易" token="" onclick="javascript:ShowBindWindow( 3);" class=""></dd>
                    </dl>
                    <dl>
                        <dt class="zhlogo03">
                            <a>
                            </a>
                        </dt>
                        <dd>
                            <h3>
                                <a>支付宝</a>
                            </h3>
                            <p>
                                <a href="http://www.alipay.com/" target="_blank">http://www.alipay.com</a></p>
                            <input id="btnBindAccount2" type="button" value="" site="支付宝" token="" onclick="javascript:ShowBindWindow( 2 );" class=""></dd>
                    </dl>
                    <dl>
                        <dt class="zhlogo06">
                            <a>
                            </a>
                        </dt>
                        <dd>
                            <h3>
                                <a>小米</a>
                            </h3>
                            <p>
                                <a href="http://www.xiaomi.com/" target="_blank">http://www.xiaomi.com</a></p>
                            <input id="btnBindAccount6" type="button" value="" site="小米" token="" onclick="javascript:ShowBindWindow( 6 );" class=""></dd>
                    </dl>
                    <dl>
                        <dt class="zhlogo05">
                            <a>
                            </a>
                        </dt>
                        <dd>
                            <h3>
                                <a>奇虎360</a>
                            </h3>
                            <p>
                                <a href="http://www.360.cn/" target="_blank">http://www.360.cn</a></p>
                            <input id="btnBindAccount4" type="button" value="" site="奇虎360" token="" onclick="javascript:ShowBindWindow( 4 );" class=""></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection