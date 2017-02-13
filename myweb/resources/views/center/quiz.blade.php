@extends('layout.homecenter')
@section('title')
商品提问
@endsection
@section('dt')
&gt; <a href="/home/center/quiz">商品提问</a>
@endsection
@section('con')
<div class="ProductAskTab">
    <div class="ProductAskTitle">商品提问</div>
    <span class="blank10"></span>
    <div id="loadImg" style="display: none;">
        <center>
            <img src="/ho/center/loading.gif"></center>
    </div>
    <div id="qlist">
        <div class="ProductAskContent">
            <h2 class="ProductAskBox">
                <span class="ProductAskMess">提问商品信息</span>
                <span class="ProductMessHf">商品信息回复</span>
                <span class="blank0"></span>
            </h2>
            <div style="margin-top:20px;margin-bottom:20px;">
                <center>您还没有提出过任何问题</center></div>
        </div>
    </div>
    <form action="http://my.vancl.com/question/GetQuestion?page=1" data-ajax="true" data-ajax-loading="#loadImg" data-ajax-method="post" data-ajax-mode="replace" data-ajax-update="#qlist" id="form0" method="post"></form>
</div>
@endsection