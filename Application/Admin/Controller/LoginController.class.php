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
		dump($_POST);
		if($_SERVER['REQUEST_METHOD']=='POST'){
            $arrmsg=array('errno'=>1,'error'=>'','url_route'=>'');
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $keepalive=$this->input->post('keepalive');
            $arr=$this->sys_user_model->login_user($username,$password);
            if($arr['state']=='0'){
                $arrmsg['errno']='200';
                $arrmsg['error']='用户登录成功';
                $arrmsg['url_route']=site_url('admin/home');
                
                if($keepalive){
                    $this->sys_user_model->add_keepalive_user($username,$password);
                }else{
                    $this->sys_user_model->del_keepalive_user();
                }
                
            }else{
                $arrmsg['error']=$arr['msg'];
            }
            echo json_encode($arrmsg);
        }else{
            $data['u']=$data['p']='';
            $keepuser=$this->sys_user_model->get_keepalive_user();
            if($keepuser){
                $data=$keepuser;
            }
            $this->load->view('admin/login.php',$data);
        }
	}
}