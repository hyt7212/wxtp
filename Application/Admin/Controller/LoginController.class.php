<?php
/**
 * 登录控制器
 */
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	/**
	 * 登录视图
	 */
	public function index(){
		$this->display();
	}

	/**
	 * 登录
	 */
	public function login(){
		if (!IS_POST) E('页面不存在');

		$msg = array('errno'=>0, 'error'=>'', 'url'=>'');
		$username = I('username');
		$pwd = I('password', '', 'md5');

		$user = M('sysuser')->where(array('username'=>$username))->find();

		if (!$user || $user['password'] != $pwd){
			$msg['errno'] = 1;
			$msg['error'] = '用户名或密码错误';
			$this->ajaxReturn($msg);
		}

		if ($user['lock']){
			$msg['errno'] = 1;
			$msg['error'] = '用户被锁定';
			$this->ajaxReturn($msg);
		}

		$data = array(
			'id' => $user['id'],
			'logintime' => time(),
			'loginip' => get_client_ip()
		);
		M('sysuser')->save($data);

		session('uid', $user['id']);
		session('username', $user['username']);
		session('logintime', date('Y-m-d H:i:s', $user['logintime']));
		session('loginip', $user['loginip']);

		$msg['error'] = '登录成功';
		$msg['url'] = U('Admin/Index/index');
		$this->ajaxReturn($msg);
	}
}