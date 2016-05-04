<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>用户中心-<?php echo ($site_name); ?>-<?php echo ($site_seo_title); ?></title>
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/public.css" />
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/account.css" />
</head>
<body>
<!-- 首页顶部开始 -->
	<div id="index-top">
		<ul class="index-left">
		<?php if(empty($_SESSION['user_name'])): ?><li>欢迎您，<span><a href="<?php echo U('User/login/index');?>">请登陆</a><span></li>
			<li class="index-left-reg"><a href="<?php echo U('User/register/index');?>">免费注册</a></li>
		<?php else: ?>
			<li>欢迎您，<span><a href="">$_SESSION['user_name']</a><span></li>
			<li class="index-left-reg"><a href="<?php echo U('Login/out');?>">退出</a></li><?php endif; ?>
		</ul>
		<ul class="index-right">
			<li class="index-right-one"><a href="" >我是号主<span class="caret"></span></a></li>
			<li class="index-right-two"><a href="" >我是打手<span class="caret"></span></a></li>
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
<!-- 首页顶部结束 -->
<!-- 导航开始 -->
	<div id="index-nav">
		<div class="index-nav-list">
			<ul>
				<li class="index-nav-select"><a href="">首页</a></li>
				<li><a href="./account.html" target="_blank">帐号设置</a></li>
				<li><a href="./user.html" target="_blank">我是号主</a></li>
				<li><a href="./wk.html" target="_blank">我是打手</a></li>
				<li><a href="" target="_blank">我的消息</a></li>
			</ul>
		</div>
	</div>
<!-- 导航结束 -->
</body>
</html>