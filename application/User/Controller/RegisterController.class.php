<?php
/**
 * 会员注册
 */
namespace User\Controller;
use Common\Controller\HomebaseController;
class RegisterController extends HomebaseController {	
	public function index(){
		if(!empty(session('user_name'))){ //已经登录时直接跳到首页
			redirect(__ROOT__."/");
		}else{
			$this->display(":register");
		}
	}
/**
 * 接收会员注册
 */
	public function form(){
		$data  = array(
			'user_login' =>  I('post.user_login'), 
			'user_pass'=>sp_password(I('post.user_pass')),
			'user_email'=> I('post.user_email'),
			'user_type'=>2,
			'create_time'=>time()
		);
		if(IS_POST){
			if(!sp_check_verify_code()){
				echo 1;
			}else{
				$users_model=M("Users");
				$rules = array(
					array('user_login', 'require', '用户名不能为空！', 1 ),//验证用户是否为空
					array('user_pass','require','密码不能为空！',1), //验证密码是否为空
					array('user_repass','require','密码不能为空！',1),//验证密码是否为空
					array('user_email', 'require', '邮箱不能为空！', 1 ),//邮箱是否为空
					array('user_login','','帐号名称已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一 
					array('user_repass','user_pass','确认密码不正确',0,'confirm'), // 验证确认密码是否和密码一致     
					array('user_pass','checkPwd','密码格式不正确',0,'function'), // 自定义函数验证密码格式
				);
				if($users_model->validate($rules)->create()===false){
					$this->ajaxReturn($users_model->getError());
				}else{
					$find_user=$users_model->where(array("user_login"=>$data['user_login']))->find();
					if($find_user){
						echo 2;
					}else {
						if($users_model->where(array("user_login"=>$data['user_login']))->add($data)){
							echo 3;
						}else{
							echo 2;
						}
					}
					
				}
				
			}
			
		}
	}	
		
}