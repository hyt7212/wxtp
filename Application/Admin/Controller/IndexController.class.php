<?php
/**
 * 后台首页控制器
 *
 */
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
	/* 后台首页 */
    public function index(){
		$this->display();
    }

    /* 退出登录 */
    public function logout(){
    	session_unset();
    	session_destroy();
    	$this->redirect('Admin/Login/index');
    }
}