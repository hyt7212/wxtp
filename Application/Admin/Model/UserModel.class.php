<?php
/**
 * 用户与角色关联模型
 */
namespace Admin\Model;
use Think\Model\RelationModel;
class UserModel extends RelationModel{

	//定义主表名称
	protected $tableName = 'sysuser';
	
	//定义关联关系
	protected $_link = array(
		'role' => array(
			'mapping_type' => self::MANY_TO_MANY,	//多对多关系
			'foreign_key' => 'user_id',				//主表外键
			'relation_foreign_key' => 'role_id',	//关联表外键	
			'relation_table' => 'tp_role_user',		//关联表名
			'mapping_fields' => 'id, name, remark',
				
			/* 'mapping_type'      =>  self::MANY_TO_MANY,    
			'foreign_key'       =>  'user_id',    
			'relation_foreign_key'  =>  'role_id',    
			'relation_table'    =>  'tp_role_user' */ //此处应显式定义中间表名称，且不能使用C函数读取表前缀
		)
	);
}