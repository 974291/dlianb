<?php
namespace Portal\Controller;
use Common\Controller\HomebaseController; 
/**
 * 首页
 */
class IndexController extends HomebaseController {
	public function _initialize() {
		parent::_initialize();
		//设置过期，整个网站根目录有效
		if(!isset($_SESSION['user_time'])||(time()-$_SESSION['user_time'])>3600){
			session(null);	
		}
	}
	//首页
	public function index() {
		$message = M('message')->limit('6')->select();
		$homedd =  M('indent')->limit('6')->join('__USERS__ ON __INDENT__.uid = __USERS__.id')->select();//接单通知
		$indent= M('indent')->limit("21")->select();//订单列表
		$area = M('area')->limit("28")->select();//区域查询
		$are = M('area')->limit("28")->select();//区域查询
		$office = M('office')->limit("8")->join('__USERS__ ON __OFFICE__.aid = __USERS__.id')->select();//工作室查询
		$tjoffice = M('office')->limit("8")->where(array('recommend'=>1))->join('__AREA__ ON __OFFICE__.qid = __AREA__.id')->select();//工作室查询推荐
		$zbdt= M('indent')->limit("6")->join('__OFFICE__ ON __INDENT__.uid = __OFFICE__.aid')->select();//中标订单列表
		$cglist['res']= M('indent')->limit("1")->where(array('status'=>6))->join('__USERS__ ON __INDENT__.uid = __USERS__.id')->find();//成功订单列表
		$cglist['res']['cont']= M('indent')->where(array('status'=>6))->count();//成功订单统计
		$office_zg = M('office')->limit('8')->where(array('recommend'=>2))->join('__USERS__ ON __OFFICE__.aid = __USERS__.id')->select();
		$message = M('message')->limit('1,9')->order('id desc')->select();
		$message_one = M('message')->limit('1')->order('id desc')->select();
		$this->assign('message_one',$message_one);
		$this->assign('message',$message);
		$this->assign('office_zg',$office_zg);
		$this->assign('cglist',$cglist);
		$this->assign('tjoffice',$tjoffice);
		$this->assign('ddcolist',$office);
		$this->assign('are',$are);
		$this->assign('zbdt',$zbdt);
		$this->assign('indent',$indent);
		$this->assign('area',$area);
		$this->assign('homedd',$homedd);
		$this->assign('message',$message);
		$this->display();
	}
}
?>