@extends('layout.homecenter')
@section('title')
商品评价
@endsection
@section('dt')
&gt; <a href="/home/center/evaluate">商品评价</a>
@endsection
@section('con')
<div class="rightdiv">
  <div class="ProductAskTitle">商品评价</div>
    <span class="blank10"></span>
  <div style="margin-top: -10px;">
    <div class="blank10"></div>
  </div>
  <div class="borimg">
    <img src="/ho/center/topimg.jpg"></div>
  <div class="conimg">
    <div style="height: 70px; padding-top: 30px;">
      <center>
        <span>您暂时没有订单，请您在购买商品后发表评论。</span>
        <a href="http://vancl.com/">
          <span style="color: red;">去购物&gt;&gt;</span></a>
      </center>
    </div>
  </div>
  <div class="borimg">
    <img src="/ho/center/botimg.jpg"></div>
</div>
@endsection