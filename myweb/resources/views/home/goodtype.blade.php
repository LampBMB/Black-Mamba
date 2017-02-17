@extends('layout.homeindex')
@section('con')
<span class="blank20"></span>
<div class="channelContent2016">
    <!-- 菜单导航 S -->
    <div id="nautilus_subnav" class="nautilus_subnav nautilus_subnav_two">
       <img src="/ho/index/djs0208.jpg" alt="" height='90'>
    </div>
    <!-- 热门关键词 E -->
    <!-- 广告列表 S -->
    <table width="0" border="0" align="center">
        <tbody>
            <tr>
                <td>
                    <img original="http://i4.vanclimg.com/cms/20160420/0420mjqg_02.jpg" width="1200" height="37" alt="两件组合优惠" src="/ho/index/0420mjqg_02.jpg" style="display: inline;"></td>
            </tr>
        </tbody>
    </table>
    <!-- 广告列表 E -->
    <!-- 商品列表 S -->
    <div id="cqk"></div>
    @foreach($list as $k=>$v)
    <div class="shirt-list shirt-list0926a">
        <ul class="shirts-product-list">
            <li>
                <a href="/home/gt/gooddetails/{{$v['id']}}" class="product-img" target="_blank" title="{{$v["goods"]}}">
                    <img alt="{{$v["goods"]}}" src="{{$v["picname"]}}" width='260' height='260'>
                </a>
                <a title="{{$v["goods"]}}" class="tit" href="/home/gt/gooddetails/{{$v['id']}}">{{$v['goods']}}</a>
                <span class="price line-through">{{$v['price']}} 元</span>
        <div class="blank20"></div>
    </div>
    @endforeach
        <div class="blank20"></div>
    </div>
    <div class="shirt-list"></div>
    <table width="0" border="0" cellspacing="0" cellpadding="0" align="center">
        <tbody>
            <tr>
                <td>
                    <a href="http://www.fangyecheng.com/home" target="_blank">
                        <img src="/ho/index/cspd3-hsy2.jpg" width="1200" height="270"></a>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- 商品列表 E -->
</div>
@endsection