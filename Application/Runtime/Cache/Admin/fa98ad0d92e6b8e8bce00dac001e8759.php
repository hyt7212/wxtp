<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta content="微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销" name="Keywords">
<meta content="KMD微信平台，国内最大的微信公众智能服务平台，八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。" name="Description">
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="/wxtp/Public/Admin/css/inside.css" media="all" />
<script type="text/javascript" src="/wxtp/Public/Admin/js/jQuery.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/bootstrap_min.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/bootstrap_datepicker.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/inside.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/jquery_validate_min.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/jquery_validate_methods.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/jquery_form_min.js"></script>
<script type="text/javascript" src="/wxtp/Public/Admin/js/region_select.js"></script>
<!--[if lte IE 9]><script src="/wxtp/Public/Admin/js/watermark.js"></script><![endif]-->
<!--[if IE 7]><link href="/wxtp/Public/Admin/css/font_awesome_ie7.css" rel="stylesheet" /><![endif]-->
<link rel="stylesheet" href="/wxtp/Public/Admin/css/node.css">
<style>
.form-horizontal .control-group {
	margin-bottom: 10px;
}

.input-medium {
	width: 330px;
}

#keyword {
	width: 300px;
}
</style>
<script type="text/javascript">
	$(function(){
		$("input[level=1]").click(function(){
			var inputs = $(this).parents(".app").find("input");
 			$(this).attr("checked") ? inputs.attr("checked", "checked") : inputs.removeAttr("checked");
		});
		
		$("input[level=2]").click(function(){
			var inputs = $(this).parents("dl").find("input");
 			$(this).attr("checked") ? inputs.attr("checked", "checked") : inputs.removeAttr("checked");
		});
	});
</script>
</head>
<body>
	<div id="main">
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<div class="box">
						<div class="box-title">
							<div class="span4">
								<h3>
									<i class="icon-list"></i>节点列表
								</h3>
							</div>
						</div>

						<div class="box-content">
							<div class="row-fluid dataTables_wrapper">
								<a href="<?php echo U('Admin/Rbac/role');?>" class="add_app">返回</a>
								<form action="<?php echo U('Admin/Rbac/access');?>" method="post">
									<?php if(is_array($node)): foreach($node as $key=>$app): ?><div class='app'>
											<p>
												<strong><?php echo ($app["title"]); ?></strong>
												<input type="checkbox" name="access[]" value="<?php echo ($app["id"]); ?>_1" level="1" <?php if($app["access"]): ?>checked='checked'<?php endif; ?> >
											</p>
											
											<?php if(is_array($app["child"])): foreach($app["child"] as $key=>$action): ?><dl>
													<dt>
														<strong><?php echo ($action["title"]); ?></strong>
														<input type="checkbox" name="access[]" value="<?php echo ($action["id"]); ?>_2" level="2" <?php if($action["access"]): ?>checked='checked'<?php endif; ?> >
													</dt>
													
													<?php if(is_array($action["child"])): foreach($action["child"] as $key=>$method): ?><dd>
															<span><?php echo ($method["title"]); ?></span>
															<input type="checkbox" name="access[]" value="<?php echo ($method["id"]); ?>_3" level="3" <?php if($method["access"]): ?>checked='checked'<?php endif; ?> >
														</dd><?php endforeach; endif; ?>
												</dl><?php endforeach; endif; ?>
										</div><?php endforeach; endif; ?>
									<input type="hidden" name="rid" value="<?php echo ($rid); ?>">
									<button type="submit" class="btn btn-primary" style="display: block;margin:20px auto;" id="btnsave">保存</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>