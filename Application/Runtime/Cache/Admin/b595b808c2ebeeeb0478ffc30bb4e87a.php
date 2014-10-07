<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<base target="mainFrame" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/index.css" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/bootstrap_min.css" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/bootstrap_responsive_min.css" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/themes.css" />
<script type="text/javascript" src="/wxtp/Public/Admin/js/jQuery.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/application.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/bootstrap_min.js"></script>
<title>后台管理</title>
<!--[if IE 7]>
	<link href="/wxtp/Public/Admin/css/font_awesome_ie7.css" rel="stylesheet" />
<![endif]-->
<!--[if lte IE 8]>
	<script language="javascript" type="text/javascript" src="/wxtp/Public/Admin/js/excanvas_min.js"></script>
<![endif]-->
</head>

<body>
	<div id="navigation">
		<div class="container-fluid">
			<div>
				<a href="<?php echo U('Admin/Index/index');?>" target="_self" id="brand">后台管理</a>
				<a href="admin/home/index?aid=<?php echo $aid?>" target="_self" class="toggle-nav" rel="tooltip" data-placement="bottom" title="Toggle navigation">
					<i class="icon-reorder"></i>
				</a>
			</div>
			<ul class='main-nav'>
				<!--<li class='menu active'>
                    <a href="#" target="_self">首页</a>
                </li>

				<li class="menu"><a href="#" target="_self">微信交互设置</a></li>

				<li class="menu active"><a href="#" target="_self">用户管理</a> </li>
                <li class="menu"><a href="#" target="_self">房源中心</a> </li>
                <li class="menu"><a href="#" target="_self">动态中心</a></li>
                <li class="menu"><a href="#" target="_self">合作渠道</a></li>
                <li class="menu"><a href="#" target="_self">有奖分享</a></li>
                <li class="menu"><a href="#" target="_self">客户管理</a></li>
                <li class="menu"><a href="#" target="_self">系统设置</a></li>

				<li class="menu"><a href="#" target="_self">系统设置</a></li>
                <li class="menu"><a href="#" target="_self">商品交易</a></li>

                 <li class="menu"><a href="#" target="_self">互动营销</a></li>


                 <li class=""><a href="javascript:void(0)" data-toggle="dropdown" class='dropdown-toggle' data-hover="dropdown">
                    <span>帮助中心</span>
                    <span class="caret"></span>
                </a>
                    <ul class="dropdown-menu">
                    <li class=""><a href="#" target="_blank">使用指南</a></li>
                        <li><a href="#" target="_blank">在线客服</a></li>
                        <li><a href="#" target="_blank">关于我们</a></li>
                    </ul>
                </li>   -->

                <li class="menu"><a href="#" target="_self">系统设置</a></li>
			</ul>

			<div class="user">
				<ul class="icon-nav">
					<li class='dropdown'><a href="#" class='dropdown-toggle'
						data-toggle="dropdown" title="消息" style="display: none;"><i
							class="icon-envelope"></i><span class="label label-lightred">4</span></a>
					</li>
					<li class="dropdown sett" style="display: none;"><a href="#"
						class='dropdown-toggle' data-toggle="dropdown" title="系统设置"><i
							class="icon-cog"></i></a></li>
					<li class='dropdown colo'><a href="#" class='dropdown-toggle'
						data-toggle="dropdown" title="选择颜色"><i class="icon-tint"></i></a>
						<ul class="dropdown-menu pull-right theme-colors">
							<li class="subtitle">选择颜色</li>
							<li><span class='red'></span> <span class='orange'></span> <span
								class='green'></span> <span class="brown"></span> <span
								class="blue"></span> <span class='lime'></span> <span
								class="teal"></span> <span class="purple"></span> <span
								class="pink"></span> <span class="magenta"></span> <span
								class="grey"></span> <span class="darkblue"></span> <span
								class="lightred"></span> <span class="lightgrey"></span> <span
								class="satblue"></span> <span class="satgreen"></span></li>
						</ul></li>
					<li class="dropdown">
						<a href="#" class='dropdown-toggle' data-toggle="dropdown" style="padding: 6px; padding-top: 9px;">
							<nobr>
								<?php echo session('username');?>
								<!--<img class="" src="<?php echo $account_info->wechatlogo;?>" style="width: 28px; height: 28px; " alt=""/>-->
							</nobr>
						</a>
					</li>
					<li class="dropdown">
						<a href="<?php echo U('Admin/Index/logout');?>" target="_self" title="退出"><i class="icon-signout"></i> 退出</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid" id="content">
		<div id="left">
			<div class="subnav" data-id="1">
                <div class="subnav-title">
                    <a href="javascript:void(0);" class='toggle-subnav'><i class="icon-angle-right"></i><span>RBAC权限控制</span></a>
                </div>
                <ul class="subnav-menu" style="display: block">
                    <li>
                        <a href="<?php echo U('Admin/Rbac/index');?>">用户列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Admin/Rbac/role');?>">角色列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Admin/Rbac/node');?>">节点列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Admin/Rbac/addUser');?>">添加用户</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Admin/Rbac/addRole');?>">添加角色</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Admin/Rbac/addNode');?>">添加节点</a>
                    </li>
                </ul>
            </div>
		</div>

		<div class="right">
			<div class="main">
				<iframe frameborder="0" id="mainFrame" name="mainFrame" src="" style="background: url('/wxtp/Public/Admin/img/loading.gif') center no-repeat"></iframe>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(function() {
			$(".menu").eq(0).addClass("active");
			$(".subnav").eq(0).removeClass("hide");
			$(".subnav li").eq(0).addClass("active");
			var url = $(".subnav").eq(0).find('.subnav-menu').eq(0)
					.find('li a').attr('href');
			//console.log(url);
			$('#mainFrame').attr('src', url);
		});
		P.skn();

		var $left_sub = $(".subnav");
		var keyArray = new Array;
		$left_sub.each(function() {
			keyArray.push($(this).attr('data-id'));
		})
		var lfet_select_menu_show = function(index) {
			var $left_a = $("#left a");
			var $a = $left_a.eq(index);
			var $ul = $a.parents(".subnav-menu");
			var $pi = $ul.parent();
			//alert($pi.html());
			var $eq = $.inArray($pi.attr('data-id'), keyArray);
			//alert($eq);
			$(".menu").eq($eq).click();
			$(".subnav").find('.subnav-menu').find('li').removeClass('active');
			$a.parent().addClass('active');
		};

		var curLi;
		$(".menu").click(
				function() {
					curLi = $(this);
					$(".subnav").hide();
					var i = $(".menu").index(curLi);
					$(".subnav").eq(i).show();
					//alert($(this).html());
					$(".subnav").eq(i).find('.subnav-menu').find('li')
							.removeClass('active');
					$(".subnav").eq(i).find('.subnav-menu').eq(0).find('li')
							.eq(0).addClass('active');
					var url = $(".subnav").eq(i).find('.subnav-menu').eq(0)
							.find('li a').attr('href');
					$('#mainFrame').attr('src', url);
					$('.subnav-menu').show();
				});
	</script>
</body>
</html>