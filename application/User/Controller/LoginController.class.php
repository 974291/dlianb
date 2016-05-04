<?php
/**
 * 会员登陆
 */
namespace User\Controller;
use Common\Controller\HomebaseController;
class LoginController extends HomebaseController {	
	public function index(){
		if(!empty(session('user_name'))){ //已经登录时直接跳到首页
			redirect(__ROOT__."/");
		}else{
			$this->display(":login");
		}
	}
/**
 * 接收用户登陆信息
 */
	public function form(){
		$name = I('post.name');
		$password = sp_password(I('post.password'));
		if(IS_POST){
			if(!sp_check_verify_code()){
				$this->error("验证码错误！");
			}else{
				$users_model=M("Users");
				$rules = array(
						//array(验证字段,验证规则,错误提示,验证条件,附加规则,验证时间)
						array('name', 'require', '用户名不能为空！', 1 ),
						array('password','require','密码不能为空！',1), 
				);
				if($users_model->validate($rules)->create()===false){
					$this->error($users_model->getError());
				}else{
					$find_user=$users_model->where(array("user_login"=>$name,'user_pass'=>$password,'user_type'=>2))->find();
					if($find_user){
						session('user_name',$name);
						session('user_time',time());
						$this->success("登陆成功！");
					}else {
						$this->error("登陆失败！");
					}
					
				}
				
			}
			
		}
	}
	/*退出*/
	public function out(){
		if(!empty(session("user_name"))){
			session(null);
			$this->success('退出成功');
		}
	}	
}