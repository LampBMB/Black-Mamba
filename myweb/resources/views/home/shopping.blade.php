@extends('layout.homeshop')
@section('con')
<div id="content">
    <div id="cart-gift">
        <div class="cart-top">
            <!-- 2015.07.31 shopping改版 -->
            <h2>我的购物车</h2>
        </div>
        <div class="tip">
            <span>温馨提示：</span>
            1.选购清单中的商品无法保留库存，请您及时结算。2.商品的价格和库存将以订单提交时为准。3.促销活动满减优惠将均摊至商品小计中。
        </div>
        <div id="cart">
        </div>
        <div id="cart-product" class="clearfix" data-jobs-alert="False" data-promotion="False">
            <div id="batchdelcart">
                <table cellspacing="0">
                    <thead>
                        <tr>
                            <th class="title-white bd-left">&nbsp;</th>
                            <th class="bar-title ">
                                <input id="all-ckb-top" type="checkbox" class="track all-products-ckb ckb" name="all-products" value="all-products" data-del-tip="">
                                <label for="all-ckb-top">全选</label>
                            </th>
                            <th class="image">&nbsp;</th>
                            <th class="name">商品名称</th>
                            <th class="size">尺寸</th>
                            <th class="presentpoints" style="display:none">积分</th>
                            <th class="price">单价</th>
                            <th class="qty">数量</th>
                            <th class="discount">优惠</th>
                            <th class="subtotal">小计</th>
                            <th class="operate ">操作</th>
                            <th class="title-white bd-right">&nbsp;</th>
                        </tr>
                    </thead>
                        <tbody class="vancl-title" style="display:none">
                            <tr>
                                <td class="white bd-left">&nbsp;</td>
                                <td colspan="9" class="vancl-title-bottom">
                                    <p class="vancl-title-left">
                                        <input id="vancl-ckb-top" type="checkbox" name="vancl-products" value="shippers">以下商品由凡客诚品负责配送
                                    </p>
                                    <div class="vancl-title-right pos-r">
                                        <p>您目前可享受全场购物免运费</p>
                                    </div>
                                </td>
                                <td class="white bd-right">&nbsp;</td>
                            </tr>
                        </tbody>

                    <tbody id="supplier-general-product_tb" name="supplier-general-product_tb">    
                        <tr>
                            <td class="white bd-left bd-bottom">&nbsp;</td>
                            <td class="bar bd-bottom" rowspan="1" colspan="6"></td>
                            <td class="bd-bottom"></td>
                            <td class="subtotal bd-bottom"></td>
                            <td class="operate bd-bottom"></td>
                            <td class="white bd-right bd-bottom"></td>
                        </tr> 

                    @foreach($list as $v)
                        <tr class="selected">
                            <!-- <input type="hidden" name="pd" value="{{$v['size']}}"> -->
                            <td class="white bd-left">&nbsp;</td>
                            <td class="bar" rowspan="1">
                                <input type="checkbox" class="track ckb" name="p-item" value="" checked="checked">
                            </td>
                            <td class="image" rowspan="1">
                                <a target="_blank" href="">
                                    <img alt="凡客羊绒衫 菱形条纹套衫 男款 橡皮色" src="{{$v['picname']}}">
                                </a>
                            </td>
                            <td class="name">
                                <a target="_blank" href="" title="凡客羊绒衫 菱形条纹套衫 男款 橡皮色">{{$v['goods']}}</a>
                            </td>
                            <td class="size">
                                <a target="_blank" title="S">
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
                                </a>
                            </td>
                            <td class="presentpoints" style="display: none">819分</td>
                            <td class="price">{{$v['price']}} 元</td>
                            <td class="qty">
                                <div class="modify-qty">
                                    <a class="number track decrease" name="sp_cart_mycart">减少</a>
                                    <a info="{{$v['id']}}" class="modify-product-qty">{{$v['num']}}</a>
                                    <a class="number track increase" name="sp_cart_mycart">增加</a>
                                </div>
                            </td>
                            <td>-</td>
                            <td class="subtotal xj">{{$v['num']*$v['price']}} 元</td>
                            <td class="operate">
                                <a class="del track sc" name="sp_cart_mycart_del" href="#" onclick="return false" info="{{$v['id']}}">删除</a>
                            </td>
                            <td class="white bd-right">&nbsp;</td>
                        </tr>
                    @endforeach
                    </tbody>

                    <tbody>
                        <tr>
                            <td class="white bd-left table-bottom table-bottom-td">&nbsp;
                            </td>
                            <td colspan="9" class="table-bottom table-bottom-td">&nbsp;
                            </td>
                            <td class="white bd-right table-bottom table-bottom-td">&nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="bar-empty clearfix"></div>
                <div id="bar-summary" class="bar-summary clearfix" style="top: 0px;">
                    <div class="bar">
                        <span class="slzj" style="margin-left:-40px;">数量总计：<em>1</em>件</span>
                        <span><em>您目前可享受全场购物免运费</em></span>
                    </div>
                    <div class="summary" style="margin-left:2px";>产品金额总计(不含运费)：
                        <span class="amount">￥<em>00.00</em></span>
                    </div>
                
                    <div class="btn-panel">
                        <a href="/" class="go-buy track" name="sp_cart_mycar_goBuy">&lt;&lt;继续购物</a> 
                        <a class="checkout track" href="/home/order/add" id="sp_cart_mycar_goPay">去结算&gt;&gt;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function sendAjax(id,num){
        $.ajax({
            url:'/home/shopping/update',
            data:{'id':id,'num':num},
            success:function(mes){
               // console.log(mes);
            }
        });
        console.log(id,num);
    }
  
    // 实现加减按钮
    $('.decrease').each(function(){
        $(this).click(function(){
            // 改变商品的数量
            var num=parseInt($(this).next().html());
            if(num==1){
                $(this).addClass('decrease-disable');
                return ;
            };
            $(this).next().next().removeClass('increase-disable');
            num--; 
            
            $(this).next().html(num);
            var id=$(this).next().attr('info');
            // 改变小计
            var place=parseInt($(this).parents('td').prev().html());
            $(this).parents('td').next().next().html(num*place);
            // 更改总计
            count();
            sendAjax(id,num)
        });
    });

    

    $('.increase').each(function(){
        $(this).click(function(){
            var num=parseInt($(this).prev().html());
            if(num==20){
                $(this).addClass('increase-disable');
                return ;
            };
            $(this).prev().prev().removeClass('decrease-disable');
            num++;
            $(this).prev().html(num);
            var id=$(this).prev().attr('info');
            var place=parseInt($(this).parents('td').prev().html());
            $(this).parents('td').next().next().html(num*place);
            count();
            sendAjax(id,num)
        });
    });

    // 删除购物车中的商品
    $('.sc').each(function(){
        $(this).click(function(){
            $(this).parents('tr').remove();
            var shopid=$(this).attr('info');
        $.ajax({
            url:'/home/shopping/del',
            data:{'shopid':shopid},
            success:function(mes){
                // 每执行一次ajax调用一次count,实现总价的变动
                count();
            }
        });        
        });
    });

    // 商品总价
    function count(){
        var cou=0;
        var total=0;
        $('.xj').each(function(){
            var xiaoji=parseInt($(this).html());
            cou+=xiaoji;
        });
        $('.amount em').html(cou+' 元');

        $('.modify-product-qty').each(function(){
            var sl=parseInt($(this).html());
            total+=sl;  
        });
        $('.slzj em').html(total);
    }
    count();


</script>

@endsection