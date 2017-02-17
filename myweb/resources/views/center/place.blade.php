@extends('layout.homecenter')
@section('title')
收货地址
@endsection
@section('dt')
&gt; <a href="/home/center/place">收货地址</a>
@endsection
@section('con')
<!-- 引入城市级联js -->
<script type="text/javascript" src="/ho/cj/jquery.js"></script>
<script type="text/javascript" src="/ho/cj/area.js"></script>
<script type="text/javascript" src="/ho/cj/location.js"></script>
<!-- 城市级联js结束 -->
<div id="main">
  <div class="mngbox">
    <div class="main">
      <div class="title"><h3>收货地址</h3></div>
      <div class="blank10"></div>
      <!-- <span class="blank10"></span> -->
      <div class="content">
        <div id="editorAdressPos0"></div>
      <!-- 编辑收货地址 -->
        <div id="editorAdress" class="editorAdress" style="display:none; position: relative;left: -20px; top: -35px; z-index: 2000;">
          <div class="jsTckbox">
            <div class="blankBox_top">
              <h3 class="editorAdressTitle">编辑收货地址</h3>
              <span>
                <a href="http://my.vancl.com/DeliveryAddress/Index###" onclick="CloseEditDiv();">关闭</a></span>
            </div>
            <div class="blankBox_common">
              <div id="AddressDetail" class="AddressDetail"></div>
            </div>
          </div>
        </div>
      <!-- 编辑收货地址  -->
        
        <!-- 显示收货地址 -->
        <div id="dizhi_list">
          <table class="list" style="table-layout:fixed; width:100%;">
            <tbody>
              <tr>
                <th class="consignee">收货人</th>
                <th class="addr-detail">详细地址</th>
                <th class="phone">电话/手机</th>
                <th class="operate">操作</th>
              </tr>
              @foreach($data as $v)
                <tr class="dzxq">
                  <td>{{$v['name']}}</td>
                  <td><span class="info">{{$v['sheng']}} {{$v['shi']}} {{$v['xian']}}</span>{{$v['jiedao']}}</td>
                  <td>{{$v['phone']}}</td>
                  <td><a addid="{{$v['id']}}" href="#" onclick="return false" class="dzsc"> × </a></td>
                </tr>
              @endforeach
              <tr><td colspan="4" align="center">您还未保存收货地址</td></tr>
            </tbody>
          </table>
          <input type="hidden" id="currentPageNum" value="0">
        </div>
        <!-- 显示收货地址 -->


        <div class="Addtitle AddAdresstitle">
          <h3 class="addNewAdress AddNewAdressArrowDown" style="cursor: pointer;">添加新地址</h3>
        </div>
        <fieldset class="edit-addr edit-addrNew" style="margin: 13px 35px; ">
          <div id="AddAddressDiv" style="display:none;">
            <div class="new_dizhi">
              <table width="100%" cellspacing="3" cellpadding="10" border="0">
                <form action="/home/address/add" method="post">
                {{csrf_field()}}
                <tbody>
                  <tr>
                    <td width="73"><span>*</span>收 货 人：</td>
                    <td colspan="3">
                      <input id="receiverName" name="name" style="width:117px;" type="text" value="" placeholder="请准确填写真实姓名"></td>
                  </tr>

                  <tr>
                    <td valign="top" style="padding-top: 4px;"><span>*</span>地 区：</td>
                    <td colspan="6">

                      <table border="0" cellspacing="1" cellpadding="0">
                        <tbody>
                          <tr>
                            <td>
                              <select id="loc_province" name="sheng"></select>
                            </td>
                            <td>
                              <select id="loc_city" name="shi"></select>
                                
                            </td>
                            <td>
                              <select id="loc_town" name="xian"></select>
                               
                            </td>
                          </tr>
                        </tbody>
                      </table>

                    </td>
                  </tr>

                  <tr>
                    <td><span>*</span>详细地址：</td>
                      <td colspan="3">

                      <input id="detailAddress" name="jiedao" style="width:300px;" type="text" placeholder="请填写详细路名及门牌号">
                      <span class="hei"><a href="" target="_blank">配送范围与配送时间</a></span>
                    </td>
                  </tr>
                  <tr>
                    <td><span>*</span>邮政编码：</td>
                    <td colspan="3">
                      <input id="postalCode" maxlength="6" name="code" style="width:94px;" type="text" placeholder="请填写正确的邮政编码">
                      <span id="SetPostalCode"></span>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" style="padding-top: 6px;">
                      <span>*</span>联系电话：</td>
                    <td colspan="6">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                          <tr>
                            <td>
                              <input id="mobile" maxlength="11" name="phone"  style="width:142px;" type="text" placeholder="请填写正确的手机号">
                            </td>

                          </tr>

                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td valign="top" style="padding-top: 6px;">
                      <span>&nbsp;</span></td>
                    <td colspan="6">
                      <p>
                        <a href="" class="track" name="">

                        <button id="saveButton">添加这个地址</button>
                          <!-- <img src="/ho/center/bt6.jpg" id="saveButton" alt="添加这个地址"> -->
                        </a>
                      </p>
                    </td>
                  </tr>
                </tbody>
                </form>
              </table>
            </div>
          </div>
        </fieldset>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
    $('.AddAdresstitle').toggle(function(){
      $('.addNewAdress').attr('class','addNewAdress AddNewAdressArrowUp');
      $('#AddAddressDiv').css('display','block');
    },function(){
      $('.addNewAdress').attr('class','addNewAdress AddNewAdressArrowDown');
      $('#AddAddressDiv').css('display','none');
    });

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
     // 地址删除按钮
    $('.dzsc').each(function(){
        $(this).click(function(){
            var addid=$(this).attr('addid');
            $(this).parent().parent().remove();
            $.ajax({
                url:'/home/address/del',
                data:{'addid':addid},
                type:'get',
                success:function(mes){
                 alert('删除成功!');
                }
            });

        });
    });
    $('.dzxq').each(function(){
       $(this).hover(function(){
            $(this).css('background','#f5f5f5');
        },function(){
            $(this).css('background','white');    
        });
    });
</script>
@endsection