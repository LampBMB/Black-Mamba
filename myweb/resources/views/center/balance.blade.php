@extends('layout.homecenter')
@section('title')
账户余额
@endsection
@section('dt')
&gt; <a href="/home/center/balance">账户余额</a>
@endsection
@section('con')
<div id="account">
    <h3><span>账户余额</span></h3>
    <div class="blank10"></div>
    <div class="AsecurityBox01">
        <div class="asProgress">
            <em>账户安全：</em>
            <div class="asProgSpeed">
                <span class="asProgNow">弱</span>
                <span class="">中</span>
                <span class="">强</span></div>
        </div>
        <ul class="asProgUl" style="_margin-right:-12px;">
            <li class="asProgPhone01">
                <a href="http://my.vancl.com/SafeCenter" title="手机未验证" class="track" name="my-account-safe-phone">
                    <em></em>手机未验证</a>
            </li>
            <li class="asProgEmail01">
                <a href="http://my.vancl.com/SafeCenter" title="邮箱未验证" class="track" name="my-account-safe-email">
                    <em></em>邮箱未验证</a>
            </li>
            <li class="asProgPassword01" style="display:none;">
                <a href="http://my.vancl.com/SafeCenter" title="未设置支付密码" class="track" name="my-account-safe-pay">
                    <em></em>未设置支付密码</a>
            </li>
        </ul>
        <div class="asProgAtarts" style="display:none;">为保障账户及资金安全,建议您开启全部
            <a href="http://my.vancl.com/SafeCenter" class="track" name="my-account-safecenter">安全设置</a></div>
        <div class="blank0"></div>
    </div>
    <div style="margin-top: 12px; margin-bottom: 12px;">您的虚拟账户余额：
        <span style="color: #A10000; font-size: 14px; font-weight: bold;">
            <span id="UserMoney">0.00</span>元</span>&nbsp;&nbsp;
        <span id="TempUserMoney"></span>
        <a href="http://cz.vancl.com/DepositPre.aspx" style="line-height: 40px; color: #A10000;
        margin-left: 20px; border-bottom: 1px; border-bottom-color: #A10000; border-bottom-style: solid;
        *padding-top: 0px">充100返100，点击立即充值</a>
    </div>
    <div style="height: 1px; border-top: 1px dotted #CCC; width: 100%;"></div>
    <h4 style="margin-top: 12px; margin-bottom: 12px;">虚拟账户交易记录</h4>
    <div class="listtable listtablebox1226">
        <span id="ContentPlaceHolder1_BankIO">
            <table class="listtable1227">
                <tbody>
                    <tr>
                        <th>时间</th>
                        <th>存入 / 取出</th>
                        <th>金额</th>
                        <th>订单号</th></tr>
                </tbody>
                <tbody>
                    <tr>
                        <td colspan="5">
                            <strong style="color: #ff0000">暂时没有交易记录</strong></td>
                    </tr>
                </tbody>
            </table>
        </span>
    </div>
</div>
@endsection