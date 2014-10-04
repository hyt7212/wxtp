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

.see {
	width: 345px;
	height: 650px;
	background: url(/wxtp/Public/Admin/img/iphone5bs.png)
		no-repeat;
	background-size: 100% 100%;
	position: fixed;
	top: 30px;
	right: 50px;
	display: none;
}

.see .content {
	width: 300px;
	height: 477px;
	background-color: #fff;
	margin-left: 24px;
	margin-top: 88px;
}
</style>
<style type="text/css">
.checkboxselect-container {
	border: 1px solid #33CCFF;
	visibility: hidden;
	background: white;
	z-index: 1000;
}

.checkboxselect-item {
	padding: 3px 2px;
}

.checkboxselect-active {
	background: #33CCFF;
	color: white;
	padding: 3px 2px;
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
							<div class="span10">
								<h3>
									<i class="icon-edit"></i>编辑信息
								</h3>
							</div>
							<div class="span2">
								<a class="btn" href="Javascript:window.history.go(-1)">返回</a>
							</div>
						</div>

						<div class="box-content">
							<form
								action="admin/fangyuan/dofangyuan_edit"
								method="post" class="form-horizontal form-validate">
								<div class="control-group">
									<label for="title" class="control-label">楼盘名称：</label>
									<div class="controls">
										<input type="text" name="name" id="title" class="input-medium"
											value="<?php echo isset($info)&&count($info)>0?$info['name']:'';?>"
											data-rule-required="true" /><span class="maroon">*</span>
									</div>
								</div>

								<div class="control-group">
									<label for="price" class="control-label">均价：</label>
									<div class="controls">
										<input type="text" name="price" id="price"
											class="input-medium"
											value="<?php echo isset($info)&&count($info)>0?$info['price']:'';?>"
											data-rule-required="true" style="width: 150px;" /><span
											class="maroon">*</span> 单位：元/㎡
									</div>
								</div>

								<div class="control-group">
									<label for="prefer" class="control-label">优惠：</label>
									<div class="controls">
										<input type="text" name="prefer" id="prefer"
											class="input-medium"
											value="<?php echo isset($info)&&count($info)>0?$info['prefer']:'';?>"
											style="width: 150px" />
									</div>
								</div>

								<div class="control-group">
									<label for="img" class="control-label">图片：</label>
									<div class="controls">
										<a class="btn insertimage" onclick="upImage()">选择图片</a> <img
											src="<?php echo isset($info)&&count($info)>0?$info['img']:'';?>"
											id="showimg" width="120" style="width: 120px;" /> <input
											type="hidden" name="img" id="img"
											value="<?php echo isset($info)&&count($info)>0?$info['img']:'';?>" />
									</div>
								</div>

								<div class="control-group">
									<label for="format" class="control-label">业态：</label>
									<div class="controls">
										<?php if(count($format)>0):foreach($format as $item):?>
										<?php if(isset($info)&&count($info)>0&&$this->common->checkstr($info['format'],$item['id'])){?>
										<input type="checkbox" name="format"
											value="<?php echo $item['id']?>" checked="checked" />
										<?php echo $item['name']?>
										&nbsp;&nbsp;
										<?php }else{?>
										<input type="checkbox" name="format"
											value="<?php echo $item['id']?>" />
										<?php echo $item['name']?>
										&nbsp;&nbsp;
										<?php }?>
										<?php endforeach;endif;?>
										<input name="format" id="format" type="hidden"
											value="<?php echo isset($info)&&count($info)>0?$info['format']:'';?>" />
									</div>
								</div>

								<div class="control-group">
									<label for="tag" class="control-label">标签：</label>
									<div class="controls">
										<input type="text" name="tag" id="tag" class="input-medium"
											value="<?php echo isset($info)&&count($info)>0?$info['tag']:'';?>" />
									</div>
								</div>

								<div class="control-group">
									<label for="address" class="control-label">楼盘位置：</label>
									<div class="controls">
										<input type="text" name="address" id="address"
											class="input-medium"
											value="<?php echo isset($info)&&count($info)>0?$info['address']:'';?>" />
									</div>
								</div>

								<div class="control-group">
									<label for="base_desc" class="control-label">基础信息：</label>
									<div class="controls">
										<textarea id="txt_content_base" name="base_desc"
											data-rule-required="true">
											<?php echo isset($info)&&count($info)>0?$info['base_desc']:'';?>
										</textarea>
									</div>
								</div>

								<div class="control-group">
									<label for="project_desc" class="control-label">项目介绍：</label>
									<div class="controls">
										<textarea id="txt_content_project" name="project_desc"
											data-rule-required="true">
											<?php echo isset($info)&&count($info)>0?$info['project_desc']:'';?>
										</textarea>
									</div>
								</div>

								<div class="control-group">
									<label for="around_desc" class="control-label">周边配套：</label>
									<div class="controls">
										<textarea id="txt_content_around" name="around_desc"
											data-rule-required="true">
											<?php echo isset($info)&&count($info)>0?$info['around_desc']:'';?>
										</textarea>
									</div>
								</div>
								<div class="control-group">
									<label for="traffic_desc" class="control-label">交通概况：</label>
									<div class="controls">
										<textarea id="txt_content_traffic" name="traffic_desc"
											data-rule-required="true">
											<?php echo isset($info)&&count($info)>0?$info['traffic_desc']:'';?>
										</textarea>
									</div>
								</div>

								<div class="control-group">
									<label for="brokerage" class="control-label">推荐佣金：</label>
									<div class="controls">
										<input type="text" name="brokerage" id="brokerage"
											class="input-medium"
											value="<?php echo isset($info)&&count($info)>0?$info['brokerage']:'';?>"
											style="width: 150px" /> 单位：元
									</div>
								</div>

								<div class="form-actions">
									<input type="hidden" name="id" id="id"
										value="<?php echo empty($info['id'])?'':$info['id'] ?>" /> <input
										type="hidden" name="action" id="action"
										value="<?php echo $action ?>" /> <input type="hidden"
										name="aid" id="aid" value="<?php echo $aid?>" />
									<button type="submit" class="btn btn-primary" id="btnsave">保存</button>
									<a class="btn" href="Javascript:window.history.go(-1)">取消</a>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php echo isset($msg)?$msg:'';?>
</body>
</html>