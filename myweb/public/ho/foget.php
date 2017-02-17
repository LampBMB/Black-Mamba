<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>验证身份</title>
	<style type="text/css">
		body{
			padding:10px;
			margin:0;
			background-color:#f5f5f5;
		}
		div.fd{
			width:900px;
			height:600px;
			margin:5px auto;
			position:relative;
			background-color:white;			
		}
		div.son{
			width:360px;
			height:505px;
			/*border:1px solid red;*/
			margin:30px 270px;
			position:absolute;
		}
		.yonghu a{
			font:bold 12px/1.5 '微软雅黑';
			text-decoration:none;
			color:black;
		}
		.zhuce a{
			margin:2px;
			text-decoration:none;
		}
		table{
			text-align:left;
			letter-spacing:2px;
			font:12px/1.5 '微软雅黑';
			text-decoration:none;
			color:#808080;
		}
		form{
			position:absolute;
			margin-top:100px;
		}
		form,input{
			
			margin:-5px;
			padding:0px;
			border:1px solid #e0e0e0;
			width:350px;
			height:50px;			
		}
		.yzm{
			
			margin:-5px -7px;
			padding:0;
			border:1px solid #e0e0e0;
			width:210px;
			height:50px;
				
		}
		div.bottom{
			text-align:center;
			position:absolute;
			margin:600px 200px;
			text-align:center;
			font:12px/1.2 '微软雅黑';
			color:#808080;		
		}
		.bott{
			margin:20px;
			letter-spacing:2px;		
		}
		.bott a{
			text-decoration:none;
			color:#808080;
		}
		td.b{
			text-align:center;
		}
		td.c{
			
			position:absolute;
			left: 210px;
			top: 279px;
		}
		span.aa{
			position:absolute;
			font:12px/1.2 '微软雅黑';
			top: 115px;
		}
		.r{
			position:absolute;
			top:100px;
		}
		span{
			width:
		}
	</style>
</head>
<body>
		<div class="fd">
			<div class="son">
				<table width="360" border="0">
					<tr>
						<td class="b"><img src="./images/xmlog.png"></img></td>
					</tr>
					<tr>
						<td class="b"><h1 style="color:black;">验证身份</h1></td>
					</tr>
						<form action="forget_action.php" method="post">
							<tr>
								<td><p><input type="text" name="username" placeholder="请输入需要找回密码的账号"></p></td>
							</tr>
							
							<tr>
								<td><p><input type="text" name="number" placeholder=" 请输入绑定邮箱地址或手机号码"></p></td>
							</tr>
							<tr>
								<td><p><input class="yzm" type="text" name="code" placeholder=" 图片验证码(不区分大小写)"></p></td>
								<td class="c"><img src="./public/yzm.php" onclick="this.src='./public/yzm.php?id='+Math.random()" alt="" style="cursor:pointer;"></td>
							</tr>
							<tr>
								<td><p><input type="image" src="./images/next.png"></p></td>
								
							</tr>	
						</form>
				</table>
			</div>			
				<div class="bottom">
					<div class='bott'>
						<a href="">简体</a> | 
						<a href="">繁体</a> | 
						<a href="">English</a> | 
						<a href="">常见问题</a>
						<br/ >
					</div>
					小米公司版权所有-京ICP备10046444-<img src="./images/ghs.png"></img>京公网安备11010802020134号-京ICP证110507号
				</div>
			
		</div>
</body>

</html>