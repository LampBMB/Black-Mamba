@extends('layout.homecenter')
@section('title')
我的积分
@endsection
@section('dt')
&gt; <a href="/home/center/integral">我的积分</a>
@endsection
@section('con')
  <div id="con_one_1" style="display: block;">
    <div id="userPoints">
      <div>
        <div id="main" style="margin-top: 0;">
          <div id="orderform" class="mngbox">
            <div class="main">
              <h3>
                <span>我的积分</span></h3>
              <div class="blank10"></div>
              <ul class="nedit-nav">
                <li>
                  <a class="selected">我的会员积分</a></li>
              </ul>
              <span class="blank20"></span>
              <p style="border-top: 0px dotted rgb(204, 204, 204);">您目前的会员积分：
                <span style="color: #a10000; font-weight: bold; padding-right: 2px;">0</span>分</p>
              <p style="color: #a10000; line-height: 22px;">为了保证您7天退换货的权益，您的积分会在商品送达成功7天后生效</p>
              <script language="javascript" type="text/javascript">$(function() {
                  $("[fid=navpage]").die().live("click",
                  function() {
                    var sender = $(this);
                    $.ajax({
                      url: "/UserPoints/_UserPointList/" + $(sender).attr("page"),
                      cache: false,
                      success: function(html) {
                        $("#pointlist").empty().prepend(html);
                      }
                    });
                    return false;
                  });
                })</script>
              <style>
                <!--替换样式-->.nedit-nav li a:hover, .nedit-nav li a.selected { background: url("http://i.vanclimg.com/my/2012/userpoint/bg-icon1.gif") no-repeat scroll 0 -163px transparent; color: #A10000; font-weight: 700; text-decoration: none; } .nedit-nav li a { display: block; height: 27px; line-height: 27px; text-align: center; width: 89px; } .nedit-nav { background: url("http://i.vanclimg.com/my/2012/userpoint/tag_bg.jpg") repeat-x scroll left bottom transparent; overflow: hidden; width: 739px; } .nedit-nav li { float: left; } .mngbox h3 { margin: 0 0 10px; } .listtable th { background:url(http://i.vanclimg.com/my/2012/userpoint/titbg_n.gif) repeat-x left top; font-weight: 700; border:none; border-bottom:2px #a30707 solid; border-top: 1px solid #D8D8D8; } .listtable td { background: none repeat scroll 0 0 #FFFFFF; border: 1px solid #D8D8D8; line-height:19px; padding: 5px; } .memberv_nlist li{ width:145px; float:left;}
                <!--替换样式结束-->
                <!--新增样式-->.memduihuan_list{ height:250px;} .memduihuan_title{ height:30px; line-height:30px; border-bottom:1px #bdbdbd solid;} .memduihuan_title .memduihuantitle{float:left; display:block; font-size:14px; color:#000; font-weight:bold;} .memduihuan_title .memduihuantitle img{padding-left:4px;} .memduihuan_title .more{ float:right;} .memduihuan_titleListv li{ width:110px; float:left; margin:12px 0 0 12px; display:inline;} .memduihuan_titleListv .v1_recohottitle{height:36px;line-height:18px;overflow: hidden; text-align: left; margin-top:3px;} .memduihuan_titleListv .reda10b{color: #A10000;font-weight: normal;line-height: 21px;} .memduihuan_linexv{ width:740px; margin:0 auto; height:11px; overflow:hidden; background:url(http://i.vanclimg.com/my/2012/userpoint/duihuan_linexv.gif) repeat-x left top; display:block; margin-top:5px;}
                <!--新增样式结束--></style></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="con_one_2" style="display: block;">
    <div id="convertingPoint">
      <link href="/ho/center/tip.css" rel="stylesheet" type="text/css">
      <!-- <script type="text/javascript" src="/ho/center/js(3).ashx"></script> -->
      <div id="main" style="margin-top: 0;">
        <div id="orderform" class="mngbox">
          <div class="main">
            <h3>
              <span>我的积分</span></h3>
            <ul class="nedit-nav">
              <li>
                <a style="cursor:pointer" onclick="tab(&#39;1&#39;)" class="track" name="my_UserPoints">我的会员积分</a></li>
              <li>
                <a class="selected">积分转换</a></li>
            </ul>
            <span class="blank15"></span>
            <form action="http://my.vancl.com/UserPoints/ConvertingPoints" data-ajax="true" data-ajax-method="POST" data-ajax-success="OnSuccess" id="form0" method="post">
              <p class="jifenWord">您的VANCL积分为：
                <strong>0</strong></p>
              <p class="jifenWord">您可以将您VANCL的积分转换为VJIA积分来使用（1个VANCL积分=1个VJIA积分）。</p>
              <p class="jifenWord">转换后的积分有效期将按两边的最长有效期为准。</p>
              <div class="ZHjifen">
                <span>我要转换</span>
                <input type="text" name="point" id="point" class="">
                <span>个VANCL积分为VJIA 积分</span></div>
              <span class="blank5"></span>
              <div id="tip"></div>
              <span class="blank5"></span>
              <input type="button" value="确认转换积分" class="track btnGL" onclick="$(&#39;#form0&#39;).submit();" name="my_UserPoints-convert-banner">
              <span class="blank10"></span>
              <p class="jifenWord" id="txtPoints" style="color: Red; display: none">*您的积分为0, 无法转换!</p>
              <span class="blank10"></span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection