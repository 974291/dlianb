<?php
namespace Portal\Controller;
use Common\Controller\HomebaseController; 
/**
 * 订单大厅
 */
class TasklistController extends HomebaseController {
	/*首页*/
	public function index() {
		$area = M('area')->limit('10')->select();
		$indext[] = M('users')->limit('10')->field('reward,title,user_login,lasttime')->join('__INDENT__ ON __USERS__.id = __INDENT__.uid')->select();
		foreach ($indext as $k => $v) {
			$res[$k]['user_login'] = $v[$k]['user_login'];
			$res[$k]['title'] = $v[$k]['title'];
			$res[$k]['reward'] = $v[$k]['reward'];
			$res[$k]['lasttime'] = showTime($v[$k]['lasttime']);
			$this->assign('showtime',$res);
		}
		$office = M('office')->limit('8')->where(array('recommend'=>'1'))->order('id desc')->select();
		$count = M('indent')->count();
		$page = new \Think\Page($count,1);
		$page->setConfig('header', '<li>共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
		$page->setConfig('prev', '上一页');
		$page->setConfig('next', '下一页');
		$page->setConfig('last', '末页');
		$page->setConfig('first', '首页');
		$page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
		$page->lastSuffix = false;//最后一页不显示为总页数
		$show = $page->show();
		$list = M('indent')
		->join('__AREA__ ON __INDENT__.qid = __AREA__.id')
		->limit($page->firstRow.','.$page->listRows)
		->order('dlianb_area.id desc')
		->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->assign('office',$office);
		$this->assign('indext',$indext);
		$this->assign('area',$area);
		$this->display();
	}

	//返回列表数据
	public function tlist(){
		if(IS_AJAX){
			$list = I('post.list');
			switch ($list) {
				case 'all':
					$count = M('indent')->count();
					$page = new \Think\Page($count,1);
					$page->setConfig('header', '<li>共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
					$page->setConfig('prev', '上一页');
					$page->setConfig('next', '下一页');
					$page->setConfig('last', '末页');
					$page->setConfig('first', '首页');
					$page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
					$page->lastSuffix = false;//最后一页不显示为总页数
					$show = $page->show();
					$list = M('indent')
					->join('__AREA__ ON __INDENT__.qid = __AREA__.id')
					->limit($page->firstRow.','.$page->listRows)
					->order('dlianb_area.id desc')
					->select();
					$this->ajaxReturn($list);
					break;
				case 'work':
					$count = M('indent')->count();
					$page = new \Think\Page($count,1);
					$page->setConfig('header', '<li>共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
					$page->setConfig('prev', '上一页');
					$page->setConfig('next', '下一页');
					$page->setConfig('last', '末页');
					$page->setConfig('first', '首页');
					$page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
					$page->lastSuffix = false;//最后一页不显示为总页数
					$show = $page->show();
					$list = M('indent')
					->join('__AREA__ ON __INDENT__.qid = __AREA__.id')
					->limit($page->firstRow.','.$page->listRows)
					->order('dlianb_area.id desc')
					->select();
					$this->ajaxReturn($list);
					break;
				default:
					$count = M('indent')->count();
					$page = new \Think\Page($count,1);
					$page->setConfig('header', '<li>共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
					$page->setConfig('prev', '上一页');
					$page->setConfig('next', '下一页');
					$page->setConfig('last', '末页');
					$page->setConfig('first', '首页');
					$page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
					$page->lastSuffix = false;//最后一页不显示为总页数
					$show = $page->show();
					$list = M('indent')
					->join('__AREA__ ON __INDENT__.qid = __AREA__.id')
					->limit($page->firstRow.','.$page->listRows)
					->order('dlianb_area.id desc')
					->select();
					$this->ajaxReturn($list);
					break;
			}
		}
	}
}
?>