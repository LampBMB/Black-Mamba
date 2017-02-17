@extends('layout.homeindex')
@section('lbt')


        @foreach($list as $k=>$v)
        <div class="danpinBox">
         <!-- <form action="/home/gt/num" method='post'> -->
            <input id="id" type="hidden" value="{{$v['id']}}">
            <a name="top"></a>
            <span class="blank10"></span>
            <span class="blank0"></span>
            <div class="danpinArea">
                <div id="ProductTitleShow" class="danpinTitleTab newclear">
                    <style type="text/css">#ProductTitleShow #productTitle .brandNumArea { display: none; }</style>
                    <div id="productTitle">
                        <div class="brandNumArea">
                            <span id="productcode">商品编号：6375397</span></div>
                        <h2 title="{{$v['goods']}}">{{$v['goods']}}</h2>
                        <h2 title="{{$v['goods']}}">
                            <span style="margin-left: 10px; font-size: 14px; font-weight: bold; color: #a10000;">充值后相当于{{$v['price']}}元</span></h2>
                        <ul class="ProductSubnav fr" id="ItemTag">
                            <li>
                                <a href="#xgzn">选购指南</a>|</li>
                            <li>
                                <a href="#mtdp">模特搭配</a>|</li>
                            <li>
                                <a href="#xdby">洗涤保养</a>|</li>
                            <li>
                                <a href="#anchorPinglun">评论</a>|</li>
                            <li>
                                <a href="#anchorQuiz">提问</a></li>
                        </ul>
                    </div>
                </div>
                <span class="blank30"></span>
                <style type="text/css">.bigimage{display:none;}</style>
                <div class="blank0"></div>
                <div class="danpin_colLef">
                    <div class="danpinLeft">
                        <div class="smallImg">
                            <div class="smallImgUp upper"></div>
                            <ul id="imageMenu">
                               <li id="onlickImg" name="item-item-img-1" class="track tppic">
                                    <span class="SpriteSmallImgs" name="http://p2.vanclimg.com/product/6/3/7/6375397/sma"><img src='{{$v['picname']}}' width='68' height='68'></span>
                                </li>
                              @foreach($v['pic'] as $ka=>$va)
                                <li id="onlickImg" name="item-item-img-1" class="track tppic">
                                    <span class="SpriteSmallImgs" name="http://p2.vanclimg.com/product/6/3/7/6375397/small"><img src='{{$va}}' width='68' height='68'></span>
                                </li>
                                <!-- dd($va[$k]); -->
                               @endforeach
                            </ul>
                            <div class="smallImgDown downHover"></div>
                        </div>
                    </div>
                    <div class="danpinColCenter">
                        <div class="bigImg bigimage" id="vertical" style="display:block">
                            <img id="midimg" src="{{$v['picname']}}" title="{{$v['goods']}}" class="bigpic" >
                            <div id="winSelector" style="left: 0px; top: 0px; display: none;"></div>
                        </div>
                        @foreach($v['pic'] as $ka=>$va)
                            <div class="bigImg bigimage" id="vertical">
                                <img id="midimg" src="{{$va}}" title="{{$v['goods']}}" class="bigpic">
                                <div id="winSelector" style="left: 0px; top: 0px; display: none;"></div>
                            </div>
                           <div class="fdj" style="width:500px;height:400px;display:none;overflow:hidden;position:absolute;"> 
                              <img id="midimg" src="{{$va}}" title="{{$v['goods']}}">
                           </div>
                        @endforeach
                    </div>
                </div>
                <div id="danpinRight" class="danpinRight" style="top: 0px; display: block;">
                    <div class="danpinfixedtitle">
                        <h4 class="fl">加入购物车</h4>
                        <span class="close1 fr"></span>
                    </div>
                    <div class="danpinFixedLeftContent">
                        <img id="danpinFixedLeftContentImg" src="/ho/index/6375397-1j201610241319429968.jpg" title="" alt=""></div>
                    <div class="danpinFixedRightContent">
                        <div name="Normal" id="pricearea">
                            <input id="shopid" type="hidden" value="10258">
                            <input id="hidattr" type="hidden" value="0">
                            <span class="blank10"></span>
                            <style type="text/css">.priceLayout { color: Black !important; } .priceLayout1 { position: relative; top: 1px; margin-right: -5px; margin-left: -5px; *margin-right: 0px !important; *margin-left: 0px !important; } .priceLayout2 { position: relative; top: 2px; } .tehuipricelayout { *position: relative; *top: 13px; } .tehuipricelayout1 { *position: relative; *top: 14px; } .tehuipricelayout2 { *top: -1px; }</style>
                            <div class="cuxiaoPrice ">
                                <h2 title="{{$v['goods']}}">{{$v['goods']}}</h2>
                                <span style="float: left; color: black; line-height: 26px; margin-right: 20px; position: relative; top: 13px;">
                                    <span class="priceLayout">售价：</span>
                                    <span class="priceLayout priceLayout1">￥</span>
                                    <span class="priceLayout" style="position: relative; top: 1px;">
                                        <s>{{$v['price']}}</s>
                                    </span>
                                </span>
                                <a href="" target="_blank" style="float: left;
                                height: 26px; display: inline-block; margin-left: 20px; line-height: 26px; margin-top: 7px;
                                color: #a10000;">充100返100，点击充值</a>
                            </div>
                            <span class="blank10"></span>
                        </div>

                       
                        <div class="selectArea">
                            <div class="selColorArea">
                                <span class="blank10"></span>
                                <a id="colorlist"></a>
                                <div class="danpinColor_Select">
                                    <div class="danpinColorTitle" style="line-height: 18px;">
                                        <p>样式：</p>
                                    </div>
                                    <div class="selColor xxk">
                                        <ul>  
                                       @foreach($v['info'] as $ko=>$vo)
                                            <li name="{{$vo['picid']}}" class='bypic'>
                                               <p class="colors" style="font-size:15px;">{{$vo['color']}}、{{$vo['size']}}</p>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                                    <div class="danpin_xuanzeGMcm spy" style="display:none;">
                                        <span style="height: 16px; display: block; width: 16px; background-position: -1911px 0pt; margin: 2px;float: left; " class="sprites"></span>
                                        <p>请选择您要购买的商品样式</p>
                                    </div>
                                    <div class="danpin_xuanzeGMcm whys" style="display:none;">
                                        <span style="height: 16px; display: block; width: 16px; background-position: -1911px 0pt; margin: 2px;float: left; " class="sprites"></span>
                                        <p>此商品无货，请重新选择</p>
                                    </div>

                            </div>
                                <div class="blank8ie"></div>
                                <div class="goodsNum">
                                    <div class="danpinColorTitle" style="line-height: 18px;">
                                        <p class="store">库存量：</p>
                                    </div>
                                    </div>
                                </div>
                                <span class="blank0"></span>
                                <div class="AreaItotal SelectGoods">
                                    <div class="SelectAreaItotal SelectGoods">
                                        <div class="goodsAddArea SelectGoods">
                                            <div class="danpinColorTitle">
                                                <p class="SelectDetail">已选：</p></div>
                                            <div class="goodsAdd">
                                                <p class="SelectName pname"></p>
                                                <span class="SelectPoint">  </span>
                                                <p class="SelectSize"></p>
                                                <p class="NowHasGoods pstatus"></p>
                                                <span class="blank0"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <style type="text/css">.lijidingzhiG { background: #B4B4B4; width: 166px; height: 40px; display: block; float: left; margin-right: 13px; border: solid 1px #675D5D; text-align: center; line-height: 40px; } .lijidingzhiG span { display: block; font-size: 20px; font-weight: bold; color: white;} .lijidingzhiR { background: #A50309; width: 166px; height: 40px; display: block; float: left; margin-right: 13px; line-height: 40px; border: solid 1px rgb(183, 27, 33); text-align: center; } .lijidingzhiR span { display: block; font-size: 20px; font-weight: bold; color: white; } }</style>
                                <div class="shoppingNews">
                                  @if(!empty(session('home')[0]['id']))
                                    <a id="nowbuy" name="item-item-select-shopping" href="" class="btnnowbuy track"><span>立即购买</span></a>
                                    <a id="addToShoppingCar" name="item-item-select-shopping" href="" class="btnaddtocart track"></a>
                                  @else
                                  <button style="border:1px solid;width:106px;height:30px; background-color:rgb(165,3,9);" class="one">
                                     请登录
                                  </button>
                                     
                                  @endif

                                </div>
                                <span class="blank20"></span>
                            </div>
                            <div class="blank0"></div>
                        </div>
                        <em id='picid' index=""></em>
                        <div id="promotion">
                            <!-- <div class="danpin_YhTsBox danpin_YhTsTab "> -->
                                <h4>
                                    <span>优惠提示</span></h4>
                                <ul>
                                    <li>全场购物满199元免运费</li></ul>
                            <!-- </div> -->
                        </div>
                        <style type="text/css">.CarBox_MainDragDrop { cursor: pointer; }</style>
                            <div class="CarBox_Main CarBox_MainDragDrop zuihou" id="carbox" style="margin:-40px 220px 0;display:none">
                                <div style="display: block">
                                    <h2 class="CarBox_Title">
                                        <span>商品成功放入购物车</span>
                                        <span class="close1 fr disbox"></span>
                                    </h2>
                                    <span class="blank20"></span>
                                    <div class="CarBox_Content">
                                        <div class="CarBox_bg"></div>
                                        <div class="CarBox_NumPrice">
                                            <span class="line01 fl"></span>
                                        </div>
                                        <div class="CarBox_Btn">
                                            <div class="CarBox_goCar">
                                                <a class="track bygwc" name="item-Settlement" href="/home/index/shopping" rel="nofollow" target="_parent">去购物车&gt;&gt;</a></div>
                                            <div id="continueshop" class="CarBox_nowCheckout CarBox_nowContinueBuy jxgwbtn">
                                                <a href="/home/index" class="track" name="item-continueshop">&lt;&lt;继续购物</a></div>
                                        </div>
                                        <span class="blank5"></span>
                                    </div>
                                    <div class="CarBox_ProductList"></div>
                                </div>
                            </div>
                        <div class="blank15"></div>
                    </div>
                </div>
            </div>
            <script type="text/JavaScript" src="/ho/index/js(1).ashx"></script>
            <div id="reshouMainH"></div>
            <input id="hdCategoryCode" type="hidden" value="1340">
            <span class="blank20"></span>
            <div class="sideBarSettabArea">
                <div class="RsetTabArea">
                    <div id="product_set"></div>
                    <div id="floatposition"></div>
                    <span class="blank8"></span>
                    <div class="itemtagcontentpart">

                    <p><br></p>

                    <p>
                            <br></p>
                        <table border="0" cellpadding="0" cellspacing="0" align="center" id="xgzn">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="/ho/index/6375398_02.jpg" width="1200" height="451" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="/ho/index/6375398_03.jpg" width="1200" height="578" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" align="center" id="mtdp">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="/ho/index/6375398_04.jpg" width="1200" height="444" alt=""></td>
                                </tr>
                            </tbody>
                        </table>

                        @foreach($v['descr'] as $ks=>$vs)
                        <table border="0" cellpadding="0" cellspacing="0" align="center" id="xgzn">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{$vs}}" width="1200" height="451" alt="">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        @endforeach

                        <table border="0" cellpadding="0" cellspacing="0" align="center" id="xdby">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="/ho/index/6375398_13.jpg" width="1200" height="392" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <table border="0" cellpadding="0" cellspacing="0" align="center">
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="/ho/index/yrs.jpg" width="1200" height="345" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                            <map name="Map">
                                <area shape="rect" coords="218,145,496,545" href="" target="_blank">
                                <area shape="rect" coords="758,147,942,550" href="" target="_blank"></map>
                        </p>

                    </div>
                    <style type="text/css">#anchor1 { width: 1px; height: 1px; visibility: hidden; position: absolute; top: 710px; *position:static; *display:block; *width:1px; *height:50px; *overflow:hidden; *top:none } #feedback { width: 1px; height: 1px; visibility: hidden; position: absolute; bottom: 40px; *position:static; *display:block; *width:1px; *height:30px; *overflow:hidden; *top:none; }</style>
                    <div class="RsetTabCon">
                        <span class="blank15"></span>
                        <a id="anchor1"></a>
                        <div class="area1">
                            <div style="position: relative; top: 0px; right: 0px; z-index: 0">
                                <span class="blank20"></span>
                                <div id="attr" style="display:none;">
                                    <h3>产品属性：(点击属性可查看同类商品)</h3>
                                    <div class="dpShuXing">
                                        <ul></ul>
                                        <span class="blank0"></span>
                                    </div>
                                </div>
                                <span class="blank20"></span>
                            </div>
                            <a id="feedback"></a>
                        </div>
                    </div>
                    <span class="blank20"></span>
                    <div class="RsetTabCon">
                        <div class="productPinglun">
                            <div style="width: 164px; float: left">
                                <div id="yushouMainS"></div>
                                <div id="hotProduct" class="ptPinglunLef fl" style="width: 190px; padding: 0px; position: static;">
                                    <h2 class="hotTitle" style="position: static; top: 0px; left: 0px; height: 40px;
                                    line-height: 40px; padding: 0px 0px 0px 25px; border-bottom: 1px solid #b4b4b4;">推荐产品</h2>
                                    <ul style="margin:25px auto; width:70%;">
                                     @foreach($tg as $kd=>$vd)
                                        <li>
                                            <a href="/home/gt/gooddetails/{{$vd['id']}}" target="_blank">
                                                <img src="{{$vd['picname']}}" alt="" title="{{$vd['goods']}}"></a>
                                            <h3>
                                                <a href="/home/gt/gooddetails/{{$vd['id']}}" target="_blank">{{$vd['goods']}}</a></h3>
                                            <p>
                                                <em>售价￥{{$vd['price']}}</em></p>
                                        </li>
                                      @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <div class="ptPinglunRig fr" style="width: 980px; padding: 0px;">
                                    <a id="anchorPinglun">&nbsp;</a>
                                    <style type="text/css">#anchorQuiz { width: 1px; height: 1px; visibility: hidden; position: absolute; bottom: 42px; *position:static; *display:block; *width:1px; *height:1px; *overflow:hidden; *top:none; } .tb-thumb{margin:0 0 10px;overflow:hidden;} .tb-thumb li{background:none repeat scroll 0 0 transparent;float:left;height:42px;margin:0 6px 0 0;overflow:hidden;padding:1px;} .tb-thumb .tb-selected{border:1px solid #d46a6a;height:40px;padding:2px;} .tb-thumb .tb-selected:after{display: inline-block; width: 0; height: 0; font-size: 0; line-height: 0; border-top: 6px solid #f60; border-left: 6px solid transparent; border-right: 6px solid transparent;} .tb-thumb li div{border:1px solid #CDCDCD;} .pichide{margin-right: 3px;background-image: url(); padding-left: 8px; background-repeat: no-repeat;} .findyunatu{background-image: url();padding-left: 13px;background-repeat: no-repeat;} .rotateleft{padding-left: 15px;background: url() no-repeat;margin-left: 10px;} .rotateright{padding-left: 15px;background: url() no-repeat;margin-left: 10px;} .toleft{z-index: 1; position: absolute; left: 10px; text-align: center; width: 30px; height: 92%; cursor:pointer; top: 30px; background-image: ); background-repeat: no-repeat; background-position: center;} .toleft:hover{ background-image: url();} .toright { z-index: 1; top: 30px; right: 10px; position: absolute; background-image: url(); background-repeat: no-repeat; background-position: center; width: 30px; height: 92%; cursor: pointer; } .toright:hover{ background-image: url();}</style>
                                    <div class="NewComment">
                                        <h2 class="hotTitle" style="position: static; top: 0px; left: 0px; height: 40px;
                                        line-height: 40px; padding: 0px 0px 0px 25px; border-bottom: 1px solid #b4b4b4;">
                                            <span style="font-weight: bold;">商品评论(
                                                <span id="feedbackcount0">5</span>)</span>
                                            <input id="hidPlCount" type="hidden" value="5">
                                                <a href="" style="width: 120px;
                                                height: 33px; background-color: #d46a6a; color: #fff; display: block; vertical-align: middle;
                                                float: right; line-height: 33px;">
                                                    <span style="line-height: 33px;">我要评论</span></a>
                                            </div>
                                        </h2>
                                        <div class="pinglunContent" style="margin-left: 34px;">
                                            <div class="NewCommentDetail">
                                                <div class="pinglunTab pinglunT">
                                                    <div class="pinglunTabLef fl" style="border-top: 0px dotted #b4b4b4;">
                                                        <div class="pinlunCon fl">
                                                            <p>尺码 样式比我想象的要好 确实不错</p>
                                                            <span class="pinlunTime">2017-01-30</span></div>
                                                        <div class="productCon fr">
                                                            <span>颜色：黑色</span>
                                                            <span>尺码：M</span>
                                                            <span>身高：170cm</span>
                                                            <span>体重：140.0kg</span>
                                                            <span class="plsize">&lt;尺码合适&gt;</span></div>
                                                    </div>
                                                    <div class="pinglunTabRig fr" style="border-top: 0px dotted #b4b4b4;">
                                                        <a class="track" name="item-item-comment-user_id" target="_blank" href="">yunfei0216*******m</a>
                                                        <span class="blank10"></span>
                                                        <div class="UserLevel" style="background-position: 0px -0px"></div>
                                                    </div>
                                                </div>                                               
                                            </div>
                                        </div>
                                        <div id="feedbackpagerarea">
                                            <div id="styleAssessesPager" class="area2Page">
                                                <div class="area2Page">
                                                    <ul>
                                                        <li class="track" name="item-item-comment-page_1">
                                                            <strong>1</strong></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="act0703Link02" style="display: none;"></div>
                                        </div>
                                        <input id="StyleID" value="1067184" type="hidden"></div>
                                    <a id="anchorQuiz">&nbsp;</a>
                                 
                                </div>
                                <div class="productQuiz fr">
                                    <span class="blank20"></span>
                                    <div class="area3 root" name="11">
                                        <h2 class="hotTitle" style="position: static; top: 0px; left: 0px; height: 40px;
                                        line-height: 40px; padding: 0px 0px 0px 25px; border-bottom: 1px solid #b4b4b4;">
                                            <span>商品提问</span>
                                            <div class="pinglunTabRig fr" style="line-height: 40px; width: 120px; height: 33px;
                                            float: right; padding: 0px; margin-top: 3px; *margin-top:-38px; margin-right: 32px;  border-top: 0px dotted #b4b4b4;">
                                                <span id="tiwen" class="sptw">
                                                    <a name="item-item-quiz-mine" href="" style="width: 120px; height: 33px;
                                                    background-color: #d46a6a; color: #fff; display: block; vertical-align: middle;
                                                    float: right; line-height: 33px;">
                                                        <span style="line-height:33px;">我要提问</span></a>
                                                    <a href="" name="quiz"></a>
                                                </span>
                                            </div>
                                        </h2>
                                        <div class="area3Head" style="display: none;">
                                            <span style="float: left; display: none;" class="area3Sp01">
                                                <div class="sprites" style="width: 14px; height: 14px; background-position: -3482px 0;
                                                margin: 6px;">
                                                </div>
                                            </span>
                        
                                            <span id="tiwen">
                                                <a class="danpinBtnStyle track" name="item-item-quiz-mine" href="">
                                                    <span>我要提问</span></a>
                                                <a href="" name="quiz"></a>
                                            </span>
                                           
                                            <span style="float: right; display: none;">排序方式：</span></div>
                                        @foreach($sptw as $kk=>$vv)
                                        <div id="stylequestionslist">
                                            <div class="area3Con">
                                                <div class="areaquestion" style="border-top: 0px dotted #b4b4b4;">
                                                    <span class="blank20"></span>
                                                    <div class="userQuesArea">
                                                    </div>
                                                    <div class="questionTitle">{{$vv['wcontent']}}</div>
                                                    <span class="blank30"></span>
                                                    <h6 style="display: none;">管理员{{$vv['aduserid']}}
                                                        <span>回答：</span></h6>
                                                    <p class="adminAsk">
                                                        <span class="danpinA fl">A</span>{{$vv['hcontent']}}</p></div>
                                                <span class="blank15"></span>
                                                <div style="display: none;" class="notesNewpl"></div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <span class="blank10"></span>
                                    <a name="1"></a>

                                    <div class="Askquestion wytw" style="display: none;">
                                        <h3>
                                            <p>
                                                <span></span>提问:{{$v['goods']}}</p>
                                        </h3>
                                        <form action="/admin/article/add" method="post">
                                        {{csrf_field()}}
                                        <input type="hidden" id="title" name="goodsid" value="{{$v['id']}}">
                                        <dl class="questionStyle">
                                            <dt>提问类型：</dt>
                                            <dd>
                                                <ul id="quiztype">
                                                    <li>
                                                        <input type="radio" value="0" name="whattype">
                                                        <span>商品提问</span></li>
                                                    <li>
                                                        <input type="radio" value="1" name="whattype">
                                                        <span>促销活动提问</span></li>
                                                    <li>
                                                        <input type="radio" value="2" name="whattype">
                                                        <span>库存及物流提问</span></li>
                                                    <li>
                                                        <input type="radio" value="3" name="whattype">
                                                        <span>售后提问</span></li>
                                                </ul>
                                                <p style="display:none" id="qtype">
                                                    <strong></strong>
                                                    <span>请选择问题分类</span></p>
                                            </dd>
                                            <span class="blank0"></span>
                                        </dl>
                                        <dl>
                                            <dt>提问内容：</dt>
                                            <dd>
                                                <textarea class="Askcontent" id="content" name="wcontent"></textarea>
                                                <input type="submit" value="提交" style="width:60px;height:30px;background-color:#C80000"></dd>
                                            <span class="blank0"></span>
                                        </dl>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <!-- </form> -->
        </div>
        @endforeach

        <div id="bigView" style="display: none; z-index: 10"><img></div>
        <div style="display: none;" id="loading"></div>
        <div class="collectbox" id="collectbox" style="display: none">
            <div class="cltboxcon">
                <div id="collectboxloaging"></div>
                <div class="collectcontent">
                    <div class="msgcltdetail">
                        <h2 class="msgboxhead2" style="float: right; width: 40px;">
                            <a href="h" class="track close" name="item-close-cart">
                                <span class="sprites" style="width: 11px;
                                height: 11px; background-position: -519px 0; margin-top: 5px; cursor: pointer">
                                </span>
                                <span>关闭</span></a>
                        </h2>
                        <div class="CltTitleDiv">
                            <div class="sprites" style="width: 59px; height: 33px; background-position: -945px 0;
                            float: left; margin-top: 10px;">
                            </div>
                            <span class="msgCltTitle">该商品已成功放入收藏夹&nbsp;
                                <a href="" target="_blank">查看收藏夹&gt;&gt;</a></span>
                        </div>
                        <div class="tiinfof">您还可以通过
                            <span>
                                <a href="" class="addmark">添加标签</a></span>为商品分类，或添加邮箱订制
                            <span>
                                <a href="" class="addsubscribe">余量通知</a></span>
                        </div>
                        <div class="infoCON">
                            <ul>
                                <li>
                                    <div class="inCti addmark">
                                        <span class="inCti_img02"></span>收藏标签</div>
                                    <div class="fonttext">
                                        <span class="blank10"></span>标 签：
                                        <input type="text" class="icte" id="bq" maxlength="24">
                                        <span>标签最多3个，用“，”隔开</span>
                                        <br>
                                        <div class="tishi">
                                            <span></span>请输入中英文、数字或下划线！</div>
                                        <div id="commonmarks" style="margin-top: 6px">常用标签：
                                            <label>
                                                <input type="checkbox" class="input">日韩女装</label>
                                            <label>
                                                <input type="checkbox" class="input">裤子</label>
                                            <label>
                                                <input type="checkbox" class="input">牛仔裤</label></div>
                                        <br>
                                        <div class="button">
                                            <input type="submit" value="确定" class="submitdiv">
                                            <a href="" class="addmark">取消</a>
                                            <div class="baocun">保存成功！</div></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="inCti addsubscribe">
                                        <span class="inCti_img02"></span>余量通知</div>
                                    <div class="fonttext">
                                        <span class="blank10"></span>邮 箱：
                                        <input type="text" class="icte" id="email">
                                        <br>
                                        <div class="tishi"></div>
                                        <br>
                                        <div class="button">
                                            <input type="submit" value="确定" class="submitdiv">
                                            <a href="" class="addsubscribe">取消</a>
                                            <div class="baocun">保存成功！</div></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <span class="blank5"></span>
                    </div>
                    <div class="gmlist"></div>
                </div>
                <span class="blank5"></span>
            </div>
            <div class="rightborder2"></div>
            <span class="blank0"></span>
            <div class="bottomborder"></div>
        </div>
        <div id="surveyID" style="width: 40px; padding: 0; position: fixed; bottom: 110px;
        _position: absolute; _top: expression(documentElement.scrollTop + 200 + &#39;px&#39;);
        right: 0; border: 1px #CCC; border-right: none; border-radius: 4px; -moz-border-radius: 4px;
        -webkit-border-radius: 4px; border-right-radius: none; -moz-border-radius-bottomright: 0;
        -moz-border-radius-topright: 0; text-align: center; background-color: white;
        z-index: 999; display: none;">
            <a target="_blank" href="">
                <div class="sprites spritesDg"></div>
            </a>
        </div>
       

        <div class="CarBox_Main" id="customizeurl" style="display: none; width: 955px; height: 633px;
        overflow: hidden">
            <div>
                <h2 class="CarBox_Title" style="width: 955px;">
                    <span>我要定制</span>
                    <!-- <a href="javascript:void(0)" name="item-close-customize" class="track close"> -->
                        <em></em>关闭</a>
                </h2>
                <iframe style="width: 955px; height: 630px; border: 0px none; overflow: hidden" scrolling="no" id="customizeurlsrc" src="/ho/index/saved_resource.html"></iframe>
            </div>
        </div>
        <script type="text/javascript" src='/js/jquery-1.8.3.js'></script>
        <script type="text/javascript">

        //选项卡

        $('.tppic').each(function(){
            $(this).live('mouseover',function(){
        //让所有li还原默认颜色
                $('.tppic').css('border','3px solid white');
                $(this).css('border','3px solid blue');
                
                     // $(this).parents('.danpinLeft').next().find('.bigimage').each(function(){
                $(this).parents('.danpinLeft').next().find('.bigimage').css('display','none');
                var index = $(this).index();
            // // 让所有图片影藏
                $('.bigimage:eq('+index+')').css('display','block');
            });
        });

            //放大镜
           //  $('.bigpic').each(function(){
           //       var index=$(this).index();
           // 
          
      // $('.bypic').each(function(){
           $('.bypic').click(function(){
                //设定选中样式
                $('.bypic').css('border','1px solid #ccc');
                $('.colors').css('color','#ccc');
                var index=$(this).index();
                // alert(var index)
                $('.bypic:eq('+index+')').css('border','2px solid red')
                $('.bypic:eq('+index+')').children().css('color','orange');
                
                //获取选中内容 插入标签中
                var pname=$('.bypic:eq('+index+')').children().html();
                $('.pname').html(pname);
                
                //获取选中id发送ajax
                var index=$(this).index();
                picid=$('.bypic:eq('+index+')').attr('name');

                $('.btnnowbuy').attr('href','/home/gt/dd/'+picid);

                // if($('.btnaddtocart')=='')
                // console.log(picid);
                $.ajax({
                    url:'/home/gt/by',//请求地址
                    data:{'picid':picid},//携带参数
                    // type:'get',//请求方式
                    dataType:'json',//服务器返回的json格式字符串自动转化为对象
                    success:function(mes){//回调函数
                        $(mes).each(function(){
                            // $('.btnaddtocart track').attr('href','/home/gt/gwc/'+$('this').attr('id'));
                            $('.store').html('库存量 :'+$(this).attr('store'));

                            if($(this).attr('store')<=0){
                               $('.pstatus').html('现在无货');

                            }else{
                               $('.pstatus').html('现在有货');
                              
                            }
                        });
                    }
                });
            });

            $('.bypic').each(function(){

               var index=$(this).index();
               picid=$('.bypic:eq('+index+')').attr('name');
              $('.btnaddtocart').click(function(){  
                   
                    if($('.pstatus').html()=="现在有货"){
                            // $.ajax({
                            //     url:'/home/gt/ingwc',//请求地址
                            //     data:{'picid':picid},//携带参数
                            //     // type:'get',//请求方式
                            //     dataType:'json',//服务器返回的json格式字符串自动转化为对象
                            //     success:function(mes){//回调函数
                            //         console.log(mes);
                            //     }
                            // });
                            fun(picid,index);
                             $('.zuihou').css('display','block');
                                return false;
                    }else if($('.pstatus').html()==""){

                         $('.spy').css('display','block');
                         return false;

                    }else if($('.pstatus').html()=="现在无货"){
                         $('.whys').css('display','block');
                         $('.spy').css('display','none');
                            return false;
                    }
                });

            });
            
            function fun(picid,index){
                if(index==0){
                  $.ajax({
                    url:'/home/gt/ingwc',//请求地址
                    data:{'picid':picid},//携带参数
                    // type:'get',//请求方式
                    dataType:'json',//服务器返回的json格式字符串自动转化为对象
                    success:function(mes){//回调函数
                        console.log(mes);
                    }
                });
                }
            }


         //   $('.btnaddtocart').click(function(){
                           
         //    if($('.pstatus').html()==""){
                    
         //           $('.spy').css('display','block');
         //             return false;

         //    }else if($('.pstatus').html()=="现在无货"){
         //         $('.whys').css('display','block');
         //         $('.spy').css('display','none');
         //              return false;
         //    }
               
         // });

        $('.btnnowbuy').click(function(){

            if($('.pstatus').html()==""){
                   $('.spy').css('display','block');
                      return false;
            }else if($('.pstatus').html()=="现在无货"){
                 $('.whys').css('display','block');
                 $('.spy').css('display','none');
                      return false;
            }
       });

        $('.disbox').click(function(){

             $('.zuihou').css('display','none');

        });

        $('.sptw').click(function(){
           $('.wytw').css('display','block');
           return false;
        })

        </script>
         <script type="text/javascript">
            $('.one').click(function(){
                alert('请回首页登陆');window.location.href='/home/index';

            })
          </script>
@endsection