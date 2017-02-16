@extends('layout.homecenter')
@section('title')
我的订单
@endsection
@section('dt')
&gt; <a href="/home/center/order">我的订单</a>
@endsection
@section('con')
{{date_default_timezone_set('PRC')}}

<div class="ordercontainer">
  <h3><span>我的订单</span>
    <a href="http://catalog.vancl.com/zhuanti/tg_20100510.html" style="color: #a10000;
    float: right; border: none; font-size: 12px; font-weight: normal; background: url(http://i4.vanclimg.com/cms/20151231/pic_my.jpg) no-repeat left center;
    text-indent: 20px; margin: 0 5px 0 0;" target="_blank">谨防诈骗公告</a>
  </h3>
 
  <div class="blank10"></div>
  <div class="wtitle">
    <!-- <div id="cover"></div> -->
    <div id="myTab" class="wtitle_l">
        <a href="javascript:void(0)" class="track wtitle_lNa" name="my_Index_id_allOrder">全部订单
          </a>
        <a href="javascript:void(0)" class="track " name="my_Index_id_workingOrder">进行中
          </a>
        <a href="javascript:void(0)" class="track" name="my_Index_id_finishOrder">已完成
          </a>
      </div>
  </div>
  <div id="orderlist">
    <style type="text/css">.VerticalContainer{ display:table;*position: relative; } .VerticalSubContainer{ *position: absolute;*top: 50%;display: table-cell;vertical-align: middle;} .VerticalItem{ *position: relative;*top: -50%;} .VerticalSubContainer ul li { list-style: none outside none; } .VerticalSubContainer *{_position:relative;} .productImgBtn{float:left;} .widdent_w3{ *position: absolute;*top: 50%; *left:344px;} .widdent_w4{ *position: absolute;*top: 50%; *left:507px;} .widdent_w5{ *position: absolute;*top: 50%; *left:603px;} .widdent_info{ *position: relative;} .orderinfo{*position:relative;*z-index:4;} .Comment0903 .SubmitOk input{*position:static!important;} .haiwaigouion{width: 33px !important;height: 23px !important;background: url(http://i1.vanclimg.com/cms/20161219/formshouer.jpg) no-repeat 0 0;} .haiwaigou_popup{ position: absolute; margin: 0; padding: 0; margin-left: 30px; margin-top: 5px; width: 234px; z-index:100; display: none;} .haiwaigou_write { border: #a20000 1px solid; border-top: none; width: 222px; background-color: #fff; height: auto; padding: 5px; word-wrap: break-word; color:Black; background-color:White; } .hwg_hidden{display:none;} .haiwaigoubox:hover .haiwaigou_popup{display:block;}.title a{position:relative;left:30px;top:-10px;margin-right:73px;font-weight:bold;}
    </style>
    <div class="orderinfo">
      <div class="windent">
        <div class="title" width="750px" style="margin:12px;">
          <a>订单编号</a>
          <a>商品数量</a> 
          <a>总价</a>
          <a>购买时间</a>
          <a>状态</a> 
          <a>操作</a>
        </div>

          @foreach($data as $v)
          <div class="ordertext" style="border:1px solid #808080;margin:10px 0;">
          
            <table border="0" width="752px" style="text-align:center;margin:12px;">
              <tr>
                <td id="bianhao" width="90px">{{$v['addtime']}}</td>
                <td width="70px">{{$v['num']}}</td>
                <td width="80px">{{$v['total']}}</td>
                <td width="100px">{{date('Y-m-d H:i:s',$v['addtime'])}}</td>
                <td width="60px">
                  @if($v['status']==1)
                    新订单
                  @elseif($v['status']==2)
                    卖家已发货
                  @elseif($v['status']==3)
                    已收货
                  @endif
                </td>
                <td width="80px">
                  <a class="xiangqing" onclick="return false" oid="{{$v['id']}}" address="{{$v['addressid']}}" href="#" style="font-weight:bold;color:#b80000" >
                  <span>查看订单详情</span>
                  </a>
                </td>         
              </tr>
            </table>
          </div>

         @endforeach
          <!-- 没有订单时加载 -->
          <div class="ordertexta" style="display:none">
            <span class="blank40"></span>
            <center>暂无订单记录 <a href="/">去逛逛</a></center>
            <span class="blank40"></span>
          </div>

          <div class="deleteOrder_Box" id="alertOrderDivNew" style="display: block; position: absolute;background-color: White;width:800px">
                <div class="deleteOrder_Tab" style="width:775px">
                  <h2 style="width:755px;background:#880121"><span>订单详情</span>
                    <a onclick="CloseAllMenu();" style="color: White;">关闭</a>
                  </h2>
                      <div>
                        <table border="1px" width="750" style="margin:2px 12px;">
                            <tr>
                              <td>商品图片</td>
                              <td>商品名称</td>
                              <td>规格</td>
                              <td>单价</td>
                              <td>数量</td>
                              <td>小计</td>
                              <td>地址</td>
                            </tr>
                        </table>
                      </div>
                    
                </div>
              <span class="blank0"></span>
          </div>

         

      </div>
    </div>
  </div>
 
  <div class="deleteOrder_Box" id="alertOrderDivNew" style="display: none; position: absolute;
  background-color: White;">
    <div class="deleteOrder_Tab">
      <h2>
        <span>取消订单</span>
        <a onclick="CloseAllMenu();" style="color: White;">关闭</a></h2>
      <div class="deleteOrder_Content deleteOrder_Content02">
        <div id="divForSuccess" class="delectOrder_Ok">
          <em></em>
          <span>成功取消!</span></div>
        <span class="blank10"></span>
        <p id="pForAlert">温馨提示：您已经支付的金额将原渠道退还给您，请您注意查收。</p>
        <span class="blank20"></span>
        <div class="deleteOrder_btn deleteOrder_btn01" id="btnConfirm">
          <a style="color: White;">确定</a>
          <a onclick="ReShopping();" class="deleteOrder_newSelect">重新购物&gt;&gt;</a></div>
      </div>
    </div>
    <div class="deleteOrder_Pointer"></div>
    <span class="blank0"></span>
  </div>
</div>
<script type="text/javascript">
  var bianhao=$('#bianhao').html();
  if(bianhao==''){
    $('.ordertexta').css('display','block');
    $('.ordertext').css('display','none');
  }

  $('.xiangqing').each(function(){
    $(this).click(function(){
      $(this).attr('address');
      $(this).attr('oid');

    });
  });

  $('.ordertext').each(function(){ 
    $(this).hover(function(){
      $(this).css('background','#f5f5f5');
      $(this).css('border','2px solid #b80000');
    },function(){
      $(this).css('background','#fff');
      $(this).css('border','1px solid #808080');
    })

  });
  function count(){
        var cou=0;
        var total=0;
        $('.ddxj').each(function(){
            var xiaoji=parseInt($(this).html());
            cou+=xiaoji;
        });
        $('.ddzj').html('商品总计: '+cou+' 元');

        $('.num').each(function(){
            var sl=parseInt($(this).html());
            total+=sl;  
        });
        $('.ddsl').html(total);
    }
    count();
    

</script>


@endsection