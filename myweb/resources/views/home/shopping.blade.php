@extends('layout.homeshop')
@section('con')
<div id="content">
    <div id="cart-gift">
        <div class="cart-top">
            <!-- 2015.07.31 shopping改版 -->
            <h2>我的购物车</h2>
        </div>
        <div class="tip">
            <span>温馨提示：</span>1.选购清单中的商品无法保留库存，请您及时结算。2.商品的价格和库存将以订单提交时为准。3.促销活动满减优惠将均摊至商品小计中。
        </div>
        <div id="cart">
        </div>
        <div id="cart-product" class="clearfix" data-jobs-alert="False" data-promotion="False">
            <div id="batchdelcart">
                <table cellspacing="0">
                        <thead>
                            <tr>
                                <th class="title-white bd-left">
                                    &nbsp;
                                </th>
                                <th class="bar-title ">
                                    <input id="all-ckb-top" type="checkbox" class="track all-products-ckb ckb" name="all-products" value="all-products" data-del-tip=""><label for="all-ckb-top">全选</label>
                                </th>
                                <th class="image">
                                    &nbsp;
                                </th>
                                <th class="name">
                                    商品名称
                                </th>
                                <th class="size">
                                    尺寸
                                </th>
                                <th class="presentpoints" style="display:none">
                                    积分
                                </th>
                                <th class="price">
                                    单价
                                </th>
                                <th class="qty">
                                    数量
                                </th>
                                <th class="discount">
                                    优惠
                                </th>
                                <th class="subtotal">
                                    小计
                                </th>
                                <th class="operate ">
                                    操作
                                </th>
                                <th class="title-white bd-right">
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                            <tbody class="vancl-title" style="display:none">
                                <tr>
                                    <td class="white bd-left">
                                        &nbsp;
                                    </td>
                                    <td colspan="9" class="vancl-title-bottom">
                                        <p class="vancl-title-left">
                                            <input id="vancl-ckb-top" type="checkbox" name="vancl-products" value="shippers">
                                            以下商品由凡客诚品负责配送
                                        </p>
                                        <div class="vancl-title-right pos-r">
                                            <p>
                                                    您目前可享受全场购物免运费
                                            </p>
                                        </div>
                                    </td>
                                    <td class="white bd-right">
                                        &nbsp;
                                    </td>
                                </tr>
                            </tbody>
                            <tbody style="display:none">
                                <tr>
                                    <td class="white bd-left">
                                        &nbsp;
                                    </td>
                                    <td colspan="9">
                                        <p class="shop-name-left">
                                            <input id="vancl-ckb-shop-10258" type="checkbox" name="products-shop" value="products-shop" shopid="10258" issupplier="False">
                                            店铺：
                                                <a href="http://mall.vancl.com/10258/" target="_blank">VANCL 凡客诚品旗舰店</a>
                                        </p>
                                    </td>
                                    <td class="white bd-right">
                                        &nbsp;
                                    </td>
                                </tr>
                            </tbody>
                            <tbody id="vancl-general-product" name="vancl-general-product"></tbody>
                        <tbody id="oversea-general-product_tb" name="oversea-general-product_tb"> 
                            <tr>
                                <td class="white bd-left bd-bottom">
                                    &nbsp;
                                </td>
                                <td class="bar bd-bottom" rowspan="1" colspan="6">
                                        <input id="oversea-general-product" type="checkbox" class="track ckb" name="oversea-general-product" data-del-tip="" value="">
                                        <label for="oversea-general-product" style="color: #A10000">
                                            全选海外购商品（海外购商品、预售商品、普通商品均只能单独结算）</label>
                                </td>
                                <td class="bd-bottom">
                                </td>
                                <td class="subtotal bd-bottom">
                                </td>
                                <td class="operate bd-bottom">
                                </td>
                                <td class="white bd-right bd-bottom">
                                </td>
                            </tr> 
                            <tr class="selected">
                                <td class="white bd-left">
                                    &nbsp;
                                </td>
                                <td class="bar" rowspan="1" style="position:relative">
                                    <input type="checkbox" class="track ckb oversea-product" name="p-item" data-del-tip="" value="" checked="checked" issupplier="False" shopid="10258" selectedclothescode="15771611">
                                    
                                </td>
                                <td class="image" rowspan="1">
                                    <a target="_blank" href="http://item.vancl.com/6375528.html?ref=mycart_ref">
                                        <img alt="Beyond closet 卫衣 PARIS 粉色" src="/ho/shop/6375528-1j201701201034280488.jpg"></a>
                                </td>
                                <td class="name">
                                    <a target="_blank" href="http://item.vancl.com/6375528.html?ref=mycart_ref" title="Beyond closet 卫衣 PARIS 粉色">
                                        Beyond closet 卫衣 PAR<br>IS 粉色
                                         </a>
                                </td>
                                <td class="size">
                                    <a target="_blank" title="1">
                                        1
                                    </a>
                                </td>
                                <td class="presentpoints" style="display: none">
                                    359分
                                </td>
                                <td class="price">
                                    ￥359.00
                                </td>
                                <td class="qty">
                                    <form class="modify-qty" action="http://shopping.vancl.com/mycart/updateqty" method="get">
                                        <a class="track decrease-disable" name="sp_cart_mycart_decrease">减少</a>
                                        <input name="qty" type="text" class="modify-product-qty" value="1" maxlength="3">
                                        <noscript>
                                            &lt;input type="submit" class="nojs-btn" value="修改" /&gt;</noscript>
                                        <a class="increase track" href="http://shopping.vancl.com/mycart/updateqty?sku=15771611&amp;qty=2" name="sp_cart_mycart_increase">增加</a>
                                    <input name="product-qty" type="hidden" value="1">
                                    <input name="product-code" type="hidden" value="6375528">
                                    <input name="sku" type="hidden" value="15771611">
                                    <input name="ispoint" type="hidden" value="False">
                                    </form>
                                </td>
                                <td>
                                        -
                                </td>
                                <td class="subtotal">
                                    ￥359.00
                                </td>
                                <td class="operate">
                                    <a class="del track" name="sp_cart_mycart_del" href="http://shopping.vancl.com/mycart/deleteitem?sku=15771611">
                                                         删除</a>
                                </td>
                                <td class="white bd-right">
                                    &nbsp;
                                </td>
                            </tr>
                        </tbody>
                        <tbody id="supplier-general-product_tb" name="supplier-general-product_tb">    
                            <tr>
                                <td class="white bd-left bd-bottom">
                                    &nbsp;
                                </td>
                                <td class="bar bd-bottom" rowspan="1" colspan="6">
                                        <input id="supplier-general-product" type="checkbox" class="track ckb" name="supplier-general-product" data-del-tip="" value="">
                                        <label for="supplier-general-product" style="color: #A10000">
                                            全选普通商品</label>
                                </td>
                                <td class="bd-bottom">
                                </td>
                                <td class="subtotal bd-bottom">
                                </td>
                                <td class="operate bd-bottom">
                                </td>
                                <td class="white bd-right bd-bottom">
                                </td>
                            </tr> 
                            <tr class="selected">
                                <td class="white bd-left">
                                    &nbsp;
                                </td>
                                <td class="bar" rowspan="1">
                                    <input type="checkbox" class="track ckb" name="p-item" data-del-tip="" value="" checked="checked" issupplier="False" shopid="10258" selectedclothescode="15771032">
                                </td>
                                <td class="image" rowspan="1">
                                    <a target="_blank" href="http://item.vancl.com/6375397.html?ref=s-s-k_rs_kdb1_a2123c8aa8514203b90547e1884dc26f_15ffbb73a9eee207-1_2-6375397_Sort01_qb_000-v">
                                        <img alt="凡客羊绒衫 菱形条纹套衫 男款 橡皮色" src="/ho/shop/6375397-1j201610241319429968.jpg"></a>
                                </td>
                                <td class="name">
                                    <a target="_blank" href="http://item.vancl.com/6375397.html?ref=s-s-k_rs_kdb1_a2123c8aa8514203b90547e1884dc26f_15ffbb73a9eee207-1_2-6375397_Sort01_qb_000-v" title="凡客羊绒衫 菱形条纹套衫 男款 橡皮色">
                                        凡客羊绒衫 菱形条纹套衫 男款 橡皮色
                                         </a>
                                </td>
                                <td class="size">
                                    <a target="_blank" title="S">
                                        S
                                    </a>
                                </td>
                                <td class="presentpoints" style="display: none">
                                    819分
                                </td>
                                <td class="price">
                                    ￥819.00
                                </td>
                                <td class="qty">
                                    <form class="modify-qty" action="http://shopping.vancl.com/mycart/updateqty" method="get">
                                        <a class="track decrease-disable" name="sp_cart_mycart_decrease">减少</a>
                                        <input name="qty" type="text" class="modify-product-qty" value="1" maxlength="3">
                                        <noscript>
                                            &lt;input type="submit" class="nojs-btn" value="修改" /&gt;</noscript>
                                        <a class="increase track" href="http://shopping.vancl.com/mycart/updateqty?sku=15771032&amp;qty=2" name="sp_cart_mycart_increase">增加</a>
                                    <input name="product-qty" type="hidden" value="1">
                                    <input name="product-code" type="hidden" value="6375397">
                                    <input name="sku" type="hidden" value="15771032">
                                    <input name="ispoint" type="hidden" value="False">
                                    </form>
                                </td>
                                <td>
                                        -
                                </td>
                                <td class="subtotal">
                                    ￥819.00
                                </td>
                                <td class="operate">
                                    <a class="del track" name="sp_cart_mycart_del" href="http://shopping.vancl.com/mycart/deleteitem?sku=15771032">
                                                         删除</a>
                                </td>
                                <td class="white bd-right">
                                    &nbsp;
                                </td>
                            </tr>
                        </tbody>

                            
                            <tbody id="vancl-point-product" name="vancl-point-product">
                                
                            </tbody>
                            <tbody id="vancl-present-product" name="vancl-present-product">
                                
                            </tbody>
                        <tbody><tr>
                            <td class="white bd-left table-bottom table-bottom-td">
                                &nbsp;
                            </td>
                            <td colspan="9" class="table-bottom table-bottom-td">
                                &nbsp;
                            </td>
                            <td class="white bd-right table-bottom table-bottom-td">
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="bar-empty clearfix">
                </div>
                <div id="bar-summary" class="bar-summary clearfix" style="top: 0px;">
                    <div class="bar">
                          <input id="all-ckb-bt" type="checkbox" name="all-products" value="all-products" class="track all-products-ckb ckb" data-del-tip=""><label for="all-ckb-bt">全选</label>
                        <a href="javascript:;" class="batch-del-cart track" name="sp_cart_mycar_batch_clear">
                            删除</a>
                            <span>数量总计：<em>2</em>件</span>
                            <span>
                            <em>
                                                    您目前可享受全场购物免运费
                            </em>
                            </span>
                    </div>
                    <div class="summary">
                        
                        产品金额总计(不含运费)：<span class="amount">￥<em>1,178.00</em></span>
                       
                    </div>
                    <div class="btn-panel">
                         <a href="http://shopping.vancl.com/mycart/continuetobuy" class="go-buy track" name="sp_cart_mycar_goBuy">
                        &lt;&lt;继续购物</a> <a class="checkout track" href="http://shopping.vancl.com/checkout?previousUserId=80238269" id="sp_cart_mycar_goPay" name="sp_cart_mycar_goPay">
                            去结算&gt;&gt;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="cart-collocate">
        <div class="coudan-title" style="display: none;">
            <h2><strong>免运费凑单商品</strong>（您再买<span id="coudan-differ"></span>凡客发货商品，即可享免运费优惠）</h2>
            <a href="javascript:;" class="close"><img src="/ho/shop/dpbox_06.gif"></a>
        </div>
        <div id="collocate-list" class="product-list-panel  coudan-content  clearfix clearfixCD" style="display: none;">
        </div>
    </div>

        <div id="remove-product" style="display: none;">
            <table cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col" colspan="6">
                            您删除的商品，您可以 <span>重新购买</span> 或 <span>放入收藏夹</span>。
                        </th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>

        <!-- <div id="gift" data-present-url="/mycart/presents"></div> -->
        <div id="recom-browse-collect" class="cuxiao" style="display:none">
            <ul class="tab">
                <li class="selected"><a href="http://shopping.vancl.com/mycart/recent" class="track" name="sp_cart_recent">最近浏览商品</a></li>
                <li><a href="http://shopping.vancl.com/mycart/recommended" class="track" name="sp_cart_recommended">推荐商品</a></li>        
                <li><a href="http://shopping.vancl.com/mycart/favorites" class="track" name="sp_cart_favorites">收藏夹</a></li>
            </ul>
            <div id="recent-browse" class="product-list-panel clearfix" style="display: block;">
            </div>
            <div id="tj-product" class="product-list-panel clearfix" style="display: none;">
            </div>    
            <div id="favorite" class="product-list-panel clearfix" style="display: none;">
            </div>
        </div>

            <img src="/ho/shop/ocx.ashx" style="display:none">
</div>

@endsection