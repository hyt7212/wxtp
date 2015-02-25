<?php
return array(
	'TMPL_PARSE_STRING'=>array(
		'__PUBLIC__' => __ROOT__.'/Public/'.MODULE_NAME.'/',
	),
		
	'SHOW_PAGE_TRACE' =>true,

	/* RBAC配置 */
	'RBAC_SUPERADMIN' => 'admin',		//超级管理员名称
	'ADMIN_AUTH_KEY'  => 'superadmin',	//超级管理员识别号
	'USER_AUTH_ON'    => true,			//是否开启验证
	'USER_AUTH_TYPE'  => 1,				//验证类型（1:登录验证，2:即时验证）
	'USER_AUTH_KEY'   => 'uid',			//用户认证识别号
	'NOT_AUTH_MODULE' => 'Index',			//无需验证的控制器
	'NOT_AUTH_ACTION' => '',			//无需验证的动作方法
	'RBAC_ROLE_TABLE' => 'tp_role',		//角色表名称
	'RBAC_USER_TABLE' => 'tp_role_user',//用户与角色关联表名称
	'RBAC_ACCESS_TABLE' => 'tp_access', //权限表名称
	'RBAC_NODE_TABLE'	=> 'tp_node',	//节点表名称
);