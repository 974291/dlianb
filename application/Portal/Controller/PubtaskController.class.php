<?php
namespace Portal\Controller;
use Common\Controller\HomebaseController; 
/**
 * 发布订单
 */
class PubtaskController extends HomebaseController {
	/*首页*/
	public function index() {
		$this->display();
	}
	/*发布订单头部*/
	public function account_top(){
		$this->display();
	}
	/*发布订单左则*/
	public function user_left(){
		$this->display();
	}
	/*发布订单右则*/
	public function user_right(){
		$this->display();
	}
	/*发布订单底则*/
	public function user_footer(){
		$this->display();
	}
	/*发布订单*/
	public function fbdd(){
		$this->display();
	}
}
?>