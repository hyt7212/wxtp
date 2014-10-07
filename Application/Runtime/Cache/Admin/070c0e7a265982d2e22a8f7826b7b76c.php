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
									<i class="icon-list"></i>角色列表
								</h3>
							</div>
						</div>

						<div class="box-content">
							<div class="row-fluid dataTables_wrapper">
								<table id="listTable"
									class="table table-bordered table-hover  dataTable">
									<thead>
										<tr>
											<th>角色名称</th>
											<th>角色描述</th>
											<th>开启状态</th>
											<th>操作</th>
										</tr>
									</thead>
									<tbody>
										<?php if($role != ''): if(is_array($role)): foreach($role as $key=>$v): ?><tr>
											<td><?php echo ($v["name"]); ?></td>
											<td><?php echo ($v["remark"]); ?></td>
											<td>
												<?php if($v["status"]): ?>开启
												<?php else: ?>
													关闭<?php endif; ?>
											</td>
											<td class='hidden-480'>
												<a href="<?php echo U('Admin/Rbac/access', array('rid' => $v['id']));?>" class="btn" rel="tooltip" title="配置权限">
													<i class="icon-edit">&nbsp;配置权限</i>
												</a>
											</td>
										</tr><?php endforeach; endif; ?>
										<?php else: ?>
										<tr>
											<td align="center" colspan="11">暂无记录</td>
										</tr><?php endif; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>