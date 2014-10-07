<?php
/**
 * RBAC权限控制器
 */
namespace Admin\Controller;
use Admin\Controller\CommonController;
class RbacController extends CommonController {
	/* 用户列表 */
	public function index(){
		$this->user = D('User')->field('password', true)->relation(true)->select();
		$this->display();
	}

	/* 角色列表 */
	public function role(){
		$this->role = M('role')->field('pid', true)->select();
		$this->display();
	}

	/* 节点列表 */
	public function node(){
		$field = array('id', 'name', 'title', 'pid');
		$node = M('node')->field($field)->order('sort')->select();
		$this->node = node_merge($node); //组合节点数组
		$this->display();
	}

	/* 添加用户 */
	public function addUser(){
		if (IS_POST){
			/* 用户信息 */
			$user = array(
					'username' => I('username'),
					'password' => I('password', '', 'md5'),
					'logintime' => time(),
					'loginip' => get_client_ip(),
					'addtime' => time()
				);
			if ($uid = M('sysuser')->add($user)){
				/* 角色 */
				$role = array();
				foreach ($_POST['role_id'] as $v){
					$role[] = array(
							'role_id' => $v,
							'user_id' => $uid
						);
				}
				M('role_user')->addAll($role);
				$this->success('添加成功', U('Admin/Rbac/index'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->role = M('role')->select();
			$this->display();
		}
	}

	/* 添加角色 */
	public function addRole(){
		if (IS_POST){
			if (M('role')->add($_POST)){
				$this->success('添加成功', U('Admin/Rbac/role'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->display();
		}
	}

	/* 添加节点 */
	public function addNode(){
		if (IS_POST){
			if (M('node')->add($_POST)){
				$this->success('添加成功', U('Admin/Rbac/node'));
			}else{
				$this->error('添加失败');
			}
		}else{
			$this->pid = I('pid', 0, 'intval');
			$this->level = I('level', 1, 'intval');
			switch ($this->level){
				case 1:
					$this->type = '应用';
					break;
				case 2:
					$this->type = '控制器';
					break;
				case 3:
					$this->type = '动作方法';
					break;
			}
			$this->display();
		}
	}
	
	/* 配置权限 */
	public function access(){
		if (IS_POST){
			$rid = I('rid', 0, 'intval');
			$db = M('access');
			$db->where(array('role_id' => $rid))->delete(); //清除旧权限
			
			//组合权限数组
			$data = array();
			foreach ($_POST['access'] as $v){
				$tmp = explode('_', $v);
				$data[] = array(
						'role_id' => $rid,
						'node_id' => $tmp[0],
						'level'   => $tmp[1]
					);
			}
			//写入新权限
			if ($db->addAll($data)){
				$this->success('配置成功', U('Admin/Rbac/role'));
			}else{
				$this->error('配置失败');
			}
		}else{
			$rid = I('rid', 0, 'intval');
			$field = array('id', 'name', 'title', 'pid');
			$node = M('node')->field($field)->order('sort')->select();
			
			/* 读取原有权限 */
			$access = M('access')->where(array('role_id' => $rid))->getField('node_id', true);
			$this->node = node_merge($node, $access);
			
			$this->rid = $rid;
			$this->display();
		}
	}
}