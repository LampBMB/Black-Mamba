<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/ad/plugins/colorpicker/colorpicker.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/ad/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/ad/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/ad/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/ad/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/ad/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/ad/css/my.css" media="screen">

<title>MWS Admin - Icons</title>

</head>

<body>

	<!-- Themer (Remove if not needed) -->  
	<div id="mws-themer">
        <div id="mws-themer-content">
        	<div id="mws-themer-ribbon"></div>
            <div id="mws-themer-toggle">
                <i class="icon-bended-arrow-left"></i> 
                <i class="icon-bended-arrow-right"></i>
            </div>
        	<div id="mws-theme-presets-container" class="mws-themer-section">
	        	<label for="mws-theme-presets">Color Presets</label>
            </div>
            <div class="mws-themer-separator"></div>
        	<div id="mws-theme-pattern-container" class="mws-themer-section">
	        	<label for="mws-theme-patterns">Background</label>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
                <ul>
                    <li class="clearfix"><span>Base Color</span> <div id="mws-base-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Highlight Color</span> <div id="mws-highlight-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Color</span> <div id="mws-text-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Color</span> <div id="mws-textglow-cp" class="mws-cp-trigger"></div></li>
                    <li class="clearfix"><span>Text Glow Opacity</span> <div id="mws-textglow-op"></div></li>
                </ul>
            </div>
            <div class="mws-themer-separator"></div>
            <div class="mws-themer-section">
	            <button class="btn btn-danger small" id="mws-themer-getcss">Get CSS</button>
            </div>
        </div>
        <div id="mws-themer-css-dialog">
        	<form class="mws-form">
            	<div class="mws-form-row">
		        	<div class="mws-form-item">
                    	<textarea cols="auto" rows="auto" readonly="readonly"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Themer End -->

	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/ad/images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
    
            
            <!-- Messages -->
      
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<a href="/admin/userinfo"><img src="{{session('home')[0]['picname']}}" alt="User Photo"></a>
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, <a href="/admin/userinfo">{{session('home')[0]['username']}}</a>
                    </div>
                    <ul>
                    	<li><a href="/home">前台</a></li>
                        <li><a href="">修改密码</a></li>
                        <li><a href="/home/login/outlogin">退出</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-users"></i>用户管理</a>
                        <ul class='closed'>
                            <li><a href="/admin/user/index"> 浏览用户</a></li>
                            <li><a href="/admin/user/add"> 添加用户</a></li>
                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="icon-gift"></i>商品分类</a>
                        <ul class='closed'>
                            <li><a href="/admin/type/index"> 浏览分类</a></li>
                            <li><a href="/admin/type/add">添加分类</a></li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="icon-t-shirt"></i>商品管理</a>
                        <ul class='closed'>
                            <li><a href="/admin/goods/index"> 浏览商品</a></li>
                            <li><a href="/admin/goods/add">添加商品</a></li>
                        </ul>
                    </li>
                      <li>
                        <a href="#"><i class="icon-google-plus"></i>商品详情管理</a>
                        <ul class='closed'>
                            <li><a href="/admin/picdetail/index"> 浏览商品详情</a></li>
                            <li><a href="/admin/picdetail/add">添加商品详情</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-archive"></i>订单管理</a>
                        <ul class='closed'>
                            <li><a href="/admin/orders/index"> 浏览订单</a></li>
                            <!-- <li><a href="/admin/orders/huishou"> 回收订单</a></li> -->
                        </ul>
                    </li>
<!--                      <li>
                        <a href="#"><i class="icon-list-2"></i>文章分类</a>
                        <ul class='closed'>
                            <li><a href="/admin/article/index"> 浏览文章</a></li>
                            <li><a href="/admin/article/add">添加文章</a></li>
                        </ul>
                    </li> -->
                </ul>
            </div>
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
        	<!-- Inner Container Start -->
            <div class="container">
            <!-- 验证错误 -->
                @if(count($errors) > 0)
                    <div class="mws-form-message error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <!-- 插入失败错误 -->
            <!-- 只要session有error这个参数才输出报错信息 -->
                @if(!empty(session('error')))  
                    <div class="mws-form-message error">
                        <ul>
                            <li>{{session('error')}}</li>
                        </ul>
                    </div>
                @endif
            <!-- 插入成功提示 -->
                @if(!empty(session('success')))  
                    <div class="mws-form-message success">
                        <ul>
                            <li>{{session('success')}}</li>
                        </ul>
                    </div>
                @endif

                @section('con')
                @show
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
            	Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/ad/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/ad/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/ad/js/libs/jquery.placeholder.min.js"></script>
    <script src="/ad/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/ad/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/ad/jui/jquery-ui.custom.min.js"></script>
    <script src="/ad/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/ad/plugins/colorpicker/colorpicker-min.js"></script>

    <!-- Core Script -->
    <script src="/ad/bootstrap/js/bootstrap.min.js"></script>
    <script src="/ad/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/ad/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script type="text/javascript">
        $(function() {
            $.fn.tabs && $('.mws-tabs').tabs();
        });
    </script>

</body>
</html>
