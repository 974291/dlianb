<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>成功案例-<?php echo ($site_name); ?>-<?php echo ($site_seo_title); ?></title>
	<script type="text/javascript" src="/dlianb/themes/dlianb/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/dlianb/themes/dlianb/Public/js/index.js"></script>
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/public.css" />
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/case.css" />
</head>
<body>
<script type="text/javascript">
	$(function(){
		$(".index-nav-list ul li").eq(4).addClass("index-nav-select").siblings().removeClass("index-nav-select");
	});	
</script>
<!-- 首页顶部开始 -->
	<div id="index-top">
		<ul class="index-left">
		<?php if(empty($_SESSION['user_name'])): ?><li>欢迎您，<span><a href="<?php echo U('User/login/index');?>">请登陆</a><span></li>
			<li class="index-left-reg"><a href="<?php echo U('User/register/index');?>">免费注册</a></li>
		<?php else: ?>
			<li>欢迎您，<span><a href=""><?php echo (session('user_name')); ?></a><span></li>
			<li class="index-left-reg"><a href="<?php echo U('User/login/out');?>">退出</a></li><?php endif; ?>
		</ul>
		<ul class="index-right">
			<li class="index-right-one"><a href="./user.html" >我是号主<span class="caret"></span></a></li>
			<li class="index-right-two"><a href="./wk.html" >我是打手<span class="caret"></span></a></li>
			<li><a href="">我要帮助</a></li>
			<li><a href="">我要推广</a></li>
		</ul>
	</div>
	<div class="index-right-li">
		<ul>
			<li><a href="">发布单盘</a></li>
			<li><a href="">待付款订单</a></li>
			<li><a href="">待付款套餐</a></li>
			<li><a href="">待评价</a></li>
		</ul>
	</div>
	<div class="index-right-last">
		<ul>
			<li><a href="">发布套餐</a></li>
			<li><a href="">我的工作室</a></li>
			<li><a href="">新的订单</a></li>
			<li><a href="">待评价</a></li>
		</ul>
	</div>
	<div id="index-top-nav">
		<div class="index-top-logo">
			<a href="<?php echo U('Index/index/index');?>"><img src="/dlianb/themes/dlianb/Public/images/logo.png" alt="" /></a>
		</div>
		<div class="index-top-search">
			<ul>
				<li class="index-top-search-list">
					<select name="" id="">
						<option value="1">订单</option>
						<option value="2">套餐</option>
						<option value="3">工作室</option>
					</select>
				</li>
				<li class="index-top-search-text"><input type="text"  placeholder="请输入关键词"/></li>
				<li class="index-top-search-submit"><input type="submit"  value="搜索"/></li>
			</ul>
			<ul class="index-top-search-hot">
				<li>热门搜索：</li>
				<li><a href="">电信-艾欧尼亚</a></li>
				<li><a href="">网通-德玛西亚</a></li>
				<li><a href="">网通-比尔吉沃特</a></li>
				<li><a href="">电信-皮尔特沃夫</a></li>
			</ul>
		</div>
	</div>
<!-- 首页顶部结束 -->
<!-- 导航开始 -->
	<div id="index-nav">
		<div class="index-nav-list">
			<ul>
				<li><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('Tasklist/index');?>">订单大厅</a></li>
				<li><a href="<?php echo U('Goodlist/index');?>">代练套餐</a></li>
				<li><a href="<?php echo U('Work/index');?>">工作室</a></li>
				<li><a href="<?php echo U('Case/index');?>">成功案例</a></li>
			</ul>
		</div>
	</div>
<!-- 导航结束 -->
	<div id="case">
		<div class="case-left">
			<div class="left-a">
				<img src="/dlianb/themes/dlianb/Public/images/case-search.gif" alt="" />
				<input type="text" value="请输入关键字"/>
				<button class="btn" type="submit" name="btnSearch">搜索</button>
			</div>
			<div class="left-b">
				<div class="left-title"><b></b>技术优势</div>
				<div class="left-list">
					<span class="list-a">dlianb.com</span>
					<span class="list-b list-e">代练、带场、陪玩，尽在代练吧</span>
				</div>
				<div class="left-list">
					<span class="list-c"><img src="/dlianb/themes/dlianb/Public/images/case-attest.gif" alt="" /></span>
					<span class="list-d">专业平台享受</span>
					<span class="list-b">电脑、微信端随时跟踪订单</span>
				</div>
				<div class="left-list">
					<span class="list-c"><img src="/dlianb/themes/dlianb/Public/images/case-money.gif" alt="" /></span>
					<span class="list-d">接单上诚意金</span>
					<span class="list-b">水平与诚意相伴，安心发单</span>
				</div>
				<div class="left-list">
					<span class="list-c"><img src="/dlianb/themes/dlianb/Public/images/case-risk.gif" alt="" /></span>
					<span class="list-d">多渠道推广</span>
					<span class="list-b">多渠道自主推送，避免等待</span>
				</div>
				<div class="left-list">
					<span class="list-c"><img src="/dlianb/themes/dlianb/Public/images/case-back.gif" alt="" /></span>
					<span class="list-d">打完领赏</span>
					<span class="list-b">赏金先行托管，打手收益保障</span>
				</div>
			</div>
			<div class="left-fb">
				<div class="left-fb-tt">发布一个需求，剩下的交给我们</div>
				<div class="left-fb-fbdd"><a href="">发布订单</a></div>
				<div class="left-fb-zx">在线技术专业为您服务</div>
			</div>
		</div>
		<div class="case-right">
			<div class="right-a">
				<div class="right-a-title"><span>所有案例</span></div>
				<div class="right-list">
					<div class="right-list-da">案例种类</div>
					<div class="right-list-dd">全部</div>
					<div class="right-list-db">订单案例</div>
					<div class="right-list-db">套餐案例</div>
				</div>
			</div>
			<div class="right-co">
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
				<div class="right-content">
					<div class="title">
						<a href="">白银晋级黄金</a>
					</div>
					<div class="img">
						<img src="/dlianb/themes/dlianb/Public/images/42.jpg" alt="" />
					</div>
					<div class="jg">
						<span>价格：</span>
						<span class="color">￥200.00</span>
					</div>
					<div class="jg">收藏：1</div>
					<div class="jg">接单：1 个</div>
					<div class="jg">
						<span>发布者：</span>
						<a href="">渐见忘记</a>
					</div>
					<div class="al">
						<a href="">查看该案例</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
<!-- 底部开始 -->
	<div id="footer">
		<div class="footer-fgx"></div>
		<div class="footer-copyright">
			<div class="footer-copyright-link">
				<a href="#">关于我们&nbsp;|&nbsp;</a>
				<a href="#">联系方式&nbsp;|&nbsp;</a>
				<a href="#">郑重声明&nbsp;|&nbsp;</a>
				<a href="#">隐私政策&nbsp;|&nbsp;</a>
				<a href="#">网站地图</a>
			</div>
			<div class="footer-copyright-wx">
				<p class="footer-copyright-wx-qq">中国网游代练吧&nbsp;wwww.dlianb.com&nbsp;若有疑问可参与：&nbsp;<img src="" alt="" />关注本站微信公众号</p>
				<p>中国网游代练吧是国内专业的游戏服务平台，带场·代练·陪玩，都在这里了，我们拥有透明的需求、公开的报价，这里是高大上游戏的热门互动和服务平台。</p>
				<p class="footer-copyright-wx-bnh">Copyright © 2015 -2016 dlianb.com All rights reserved 鄂ICP备1400005号</p>
			</div>
		</div>
	</div>
<!-- 底部结束 -->
</body>
</html>