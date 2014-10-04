<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="Keywords" content="热客微信平台" />
<meta name="Description" content="热客微信平台" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/bootstrap_min.css" media="all" />
<script type="text/javascript" src="/wxtp/Public/Admin/js/jQuery.js"></script>
<!--[if IE 7]>
	<link href="css/font_awesome_ie7.css" rel="stylesheet" />
<![endif]-->
<title>微通-登录</title>
<style type="text/css">
body {
	background-color: #d3e7e6;
}

.header {
	width: 100%;
	background: url(/wxtp/Public/Admin/img/topbg.jpg) repeat-x;
	margin: 0 auto;
	padding-top: 5px;
	padding-bottom: 3px;
}

.headnav {
	height: 24px;
	line-height: 24px;
	margin-top: 75px;
	margin-left: 20px;
	text-align: right;
	font-size: 12px;
}

.headnav a {
	color: #803800;
}

.bg {
	background: url(/wxtp/Public/Admin/img/bg_02.jpg);
	filter:
		"progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod='scale')";
	-moz-background-size: 100% 100%;
	background-size: 100% 100%;
	height: 580px;
	width: 100%;
	margin: 0 auto;
}

.loginform {
	background: url(/wxtp/Public/Admin/img/login_bg_13.png)
		no-repeat;
	height: 439px;
	margin-top: 100px;
	position: relative;
}

.form-horizontal .control-label {
	width: 100px;
	color: #a8773c;
	font-weight: bold;
}

.form-horizontal .controls {
	margin-left: 110px;
}

.form-horizontal .controls input {
	height: 26px;
	width: 260px;
	/*color:#8c5e23; background-color:#cc8430;border:1px solid #f2dc90;*/
}

.btnlogin {
	background: url(/wxtp/Public/Admin/img/loginbutton_03.png)
		no-repeat;
	width: 415px;
	height: 75px;
	margin-left: 17px;
	padding: 0px;
	position: absolute;
	bottom: 43px;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border: 0px;
}

.checked {
	background: url(/wxtp/Public/Admin/img/iweimob_email.png)
		no-repeat -272px -817px;
}

.checkbox {
	background: url(/wxtp/Public/Admin/img/iweimob_email.png)
		no-repeat -247px -817px;
	display: inline-block;
	height: 14px;
	margin: -8px 0px;
	/*left: -2px;
position: absolute;
top: 20px;
width: 15px;*/
}

.checked {
	background: url(/wxtp/Public/Admin/img/iweimob_email.png)
		no-repeat -272px -817px
}

.footer {
	border-top: 1px solid #9dc2cb;
	background-color: #d3e7e6;
	background: url(/wxtp/Public/Admin/img/footbg.png) repeat-x;
	font-size: 12px;
}

.footer a {
	color: #77827e;
}
</style>
</head>

<body onkeydown="bindEnterKey(event);">
	<div class="header">
		<div class="container">
			<div class="row" style="">
				<div class="span6">
					<img src="/wxtp/Public/Admin/img/logo_03.png"
						style="width: 80px;" /> <img
						src="/wxtp/Public/Admin/img/logo_wei.png"
						style="margin-left: 8px;" />
				</div>
				<div class="span6 headnav">
					<ul class="inline">
						<li><a href="#">收藏本站</a></li>
						<li>|</li>
						<li><a href="#">设为首页</a></li>
						<li>|</li>
						<li><a href="#">在线客服</a></li>
						<li>|</li>
						<li><a href="#">使用指南</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--header-->
	<div class="bg">
		<div class="container">
			<div class="row">
				<div class="span6">
					<img src="/wxtp/Public/Admin/img/weizhi_10.png"
						style="margin-top: 60px;" />
				</div>
				<div class="span6 loginform">
					<div class="form-horizontal" style="margin-top: 135px;">
						<div class="control-group">
							<label class="control-label" for="inputEmail">用户名</label>
							<div class="controls">
								<input type="text" value="<?php echo $u;?>" id="username"
									name="username" tabindex="1" class="ipt tipinput1"
									placeholder="用户名" autocomplete="off" maxlength="100" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputEmail">密码</label>
							<div class="controls">
								<input type="password" id="password" value="" name="password"
									tabindex="2" class="ipt tipinput1" placeholder="请输入您的密码"
									maxlength="20" autocomplete="off" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" onClick="changeCheckbox();"
								style="margin-left: 40px; padding: 0px;">
								<span id="keepalive" value="1" class="checked checkbox" style="" tabindex="3"></span>
								<span style="margin: 0px;">记住帐号</span>
							</label>
							<div class="controls text-error" id="error_tips"
								style="margin-left: 160px; margin-top: 0px; font-weight: bold;"></div>
						</div>

					</div>
					<button type="submit" tabindex="4" class="btnlogin" id="btn-login"></button>
				</div>
			</div>
		</div>
	</div>
	<!--content-->
	<div class="footer">
		<!--<div style="margin-top:14px; background-color:#fff; height:14px; line-height:14px; "></div>-->
		<div class="container" style="">
			<div class="row" style="background-color: #d3e7e6; margin-top: 10px;">
				<div style="width: 657px; height: 13px; margin-top: 2px; float: left; background-color: #e9f3f2;"></div>
				<div style="float: left; width: 53px; margin-top: 2px; height: 13px; background-color: #d3e7e6; background: url(/wxtp/Public/Admin//img/footerbg_07.png) no-repeat;"></div>
				<ul class="inline "
					style="float: left; background-color: #d3e7e6; width: 230px; margin-left: 10px;">
					<li><a href="#">关于我们</a></li>
					<li>|</li>
					<li><a href="#">联系我们</a></li>
					<li>|</li>
					<li><a href="#">友情链接</a></li>
				</ul>
			</div>
			<div class="row text-center" style="margin-top: 20px; color: #9eaeab;">
				重庆热客科技有限公司版权所有©2014<span class="hide" style="margin-left: 30px;">备案号：</span>
			</div>

		</div>
	</div>
	<!--footer-->
</body>

<script>
	$(document).ready(function() {
		$('#btn-login').click(function() {
			$('#error_box').hide();
			var userAgent = window.navigator.userAgent.toLowerCase();
			var ie6 = $.browser.msie && /msie 6\.0/i.test(userAgent);
			if (ie6) {
				alert('请不要使用ie6及以下等低版本浏览器');
				return false;
			}

			// 提交前检验
			if ('' == $('#username').val()) {
				$('#username').focus();
				$('#error_tips').text('请输入账号');
				$('#error_box').slideDown(400);
				setTimeout(function() {
					$('#error_box').hide();
				}, 3000);
				return false;
			}
			if ('' == $('#password').val()) {
				$('#password').focus();
				$('#error_tips').text('请输入密码');
				$('#error_box').slideDown(400);
				setTimeout(function() {
					$('#error_box').hide();
				}, 3000);
				return false;
			}
			$.post("<?php echo U('Admin/Login/login');?>", {
				username : $('#username').val(),
				password : $('#password').val(),
				keepalive : $('#keepalive').attr('value')
			}, function(rs) {
				//console.log(rs);

				$('#error_tips').text(rs.error);
				$('#error_tips').slideDown(400);
				setTimeout(function() {
					$('#error_tips').hide();
				}, 3000);
				if (rs.errno == 0) {
					setTimeout(function() {
						location.href = rs.url;
					}, 600);
				}
			}, 'json');
		});
	});

	function changeCheckbox() {
		var new_value = (parseInt($('#keepalive').attr('value')) + 1) % 2;
		$('#keepalive').attr('value', new_value);
		if (1 == new_value) {
			$('#keepalive').addClass('checked');
		} else {
			$('#keepalive').removeClass('checked');
		}
	}

	function bindEnterKey(event) {
		if (13 == event.keyCode) {
			$('#btn-login').click();
		}
	}
</script>
<script type="text/javascript">
	if (top.location !== self.location) {
		top.location = self.location;
	}
</script>
</html>