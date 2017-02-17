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
    <style type="text/css">.VerticalContainer{ display:table;*position: relative; } .VerticalSubContainer{ *position: absolute;*top: 50%;display: table-cell;vertical-align: middle;} .VerticalItem{ *position: relative;*top: -50%;} .VerticalSubContainer ul li { list-style: none outside none; } .VerticalSubContainer *{_position:relative;} .productImgBtn{float:left;} .widdent_w3{ *position: absolute;*top: 50%; *left:344px;} .widdent_w4{ *position: absolute;*top: 50%; *left:507px;} .widdent_w5{ *position: absolute;*top: 50%; *left:603px;} .widdent_info{ *position: relative;} .orderinfo{*position:relative;*z-index:4;} .Comment0903 .SubmitOk input{*position:static!important;} .haiwaigouion{width: 33px !important;height: 23px !important;background: url(http://i1.vanclimg.com/cms/20161219/formshouer.jpg) no-repeat 0 0;} .haiwaigou_popup{ position: absolute; margin: 0; padding: 0; margin-left: 30px; margin-top: 5px; width: 234px; z-index:100; display: none;} .haiwaigou_write { border: #a20000 1px solid; border-top: none; width: 222px; background-color: #fff; height: auto; padding: 5px; word-wrap: break-word; color:Black; background-color:White; } .hwg_hidden{display:none;} .haiwaigoubox:hover .haiwaigou_popup{display:block;}.title b{position:relative;left:30px;top:-10px;margin-right:80px;font:12px/1.5 '微软雅黑';font-weight:bold;}
    </style>
    <!-- 引入城市级联js -->
    <script type="text/javascript" src="/ho/cj/jquery.js"></script>
    <script type="text/javascript" src="/ho/cj/area.js"></script>
    <script type="text/javascript" src="/ho/cj/location.js"></script>
    <!-- 城市级联js结束 -->
    <div class="orderinfo">
      <div class="windent">
        <div class="title" width="752px" style="margin:0 -2px;background:#8b0121;color:white">
          <b>&nbsp; &nbsp; &nbsp;订单编号</b>
          <b>商品数量</b> 
          <b>总价</b>
          <b>购买时间</b>
          <b>&nbsp; &nbsp;状态</b> 
          <b>操作</b>
        </div>

          @foreach($data as $v)
          <div class="big">
            <div class="ordertext" style="padding:2px 0;background:#f5f5f5;border-bottom:1px solid #808080">
                <table border="0" width="752px" style="text-align:center;margin:12px;font-weight:bold">
                  <tr style="color:black">
                    <td id="bianhao" width="90px">{{$v['addtime']}}</td>
                    <td width="70px"> {{$v['num']}} 件</td>
                    <td width="80px"> {{$v['total']}} 元</td>
                    <td width="100px"> {{date('Y-m-d H:i:s',$v['addtime'])}}</td>
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

              <div class="deleteOrder_Box" id="alertOrderDivNew" style="display:none;background-color: white;">
                  <div class="deleteOrder_Tab" style="width:770px;border:1px solid #f5f5f5">
                    <!-- <h2 style="width:755px;background:#8b0121"><span>订单详情</span>
                      <a class="guanbi" style="color: White;">关闭</a>
                    </h2> -->
                        <div>
                          <table border="0" width="750" style="margin:2px 12px;;font-weight:bold">
                              <tr height="30px"  style="background:#fafafa;">
                                <!-- <td>商品图片</td> -->
                                <td width="200px"> &nbsp; 商品 </td>
                                <td width="150px"> 尺码 </td>
                                <td width="120px"> 颜色 </td>
                                <td width="100px"> 单价 </td>
                                <td width="100px"> 数量 </td>
                                <td width="100px"> 小计 </td>
                              </tr>
                            @foreach($v[0] as $val)
                                <tr height="30px">
                                  <td> &nbsp;<img style="margin:5px 0" width="60px"src="{{$val['picname']}}" alt=""> {{$val['goods']}} </td>
                                  <td>
                                    @if($val['size']==0)
                                        S
                                    @elseif($val['size']==1)
                                        M
                                    @elseif($val['size']==2)
                                        L
                                    @elseif($val['size']==3)
                                        XL
                                    @elseif($val['size']==4)
                                        XXL
                                    @endif
                                  </td>
                                  <td> {{$val['color']}} </td>
                                  <td> {{$val['price']}}元</td>
                                  <td>{{$val['num']}}件</td>
                                  <td>{{$val['num']*$val['price']}}元</td>
                                </tr>
                            @endforeach
                            @foreach($v[1] as $va)
                            <tr height="30px" style="background:#fafafa;color:black">
                              <td> &nbsp; 收货人: <span>{{$va['name']}}</span></td>
                              <td> 电话: <span>{{$va['phone']}}</span></td>
                              <td> 邮编: <span>{{$va['code']}}</span></td>
                              <td colspan="3">收货地址:<span class="info">{{$va['sheng']}} {{$va['shi']}} {{$va['xian']}}</span>{{$va['jiedao']}}</td>
                              
                            </tr>

                            @endforeach

                          </table>
                        </div>    
                  </div>
                <span class="blank0"></span>
            </div>
          </div>
         @endforeach
          
          <!-- 没有订单时加载 -->
          <div class="ordertexta" style="display:none">
            <span class="blank40"></span>
            <center>暂无订单记录 <a href="/">去逛逛</a></center>
            <span class="blank40"></span>
          </div>  

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
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

 $('.xiangqing').each(function(){
    $(this).toggle(function(){
      $(this).attr('address');
      $(this).attr('oid');
      $(this).parents('div').next('.deleteOrder_Box').css('display','block');
    },function(){
      $(this).parents('div').next('.deleteOrder_Box').css('display','none');
    });
  });


  var bianhao=$('#bianhao').html();
  if(bianhao==''){
    $('.ordertexta').css('display','block');
    $('.ordertext').css('display','none');
  }


  $('.big').each(function(){ 
    $(this).hover(function(){
      // $(this).css('background','#f5f5f5');
      $(this).css('border','2px solid #b80000');
    },function(){
      // $(this).css('background','#fff');
      $(this).css('border','1px solid #f5f5f5');
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