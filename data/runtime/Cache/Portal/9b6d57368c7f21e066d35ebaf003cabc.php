<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>中国网游代练吧-用户中心</title>
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/account.css" />
</head>
<body>
<!-- 用户信息开始 -->
	<div id="account">
		<div class="account-left">
			<div class="account-one">
				<div><b>|</b>交易管理</div>
			</div>
			<div class="account-link">				
				<p><a href="<?php echo U('Pubtask/fbdd');?>" target="rightframe">快速发布订单</a></p>
				<p><a href="<?php echo U('Pubtask/user_list');?>" target="rightframe">我的发布订单</a></p>
				<p><a href="<?php echo U('Pubtask/user_buy');?>" target="rightframe">我买入的套餐</a></p>
				<p><a href="<?php echo U('Pubtask/user_hire');?>" target="rightframe">我发起的雇佣</a></p>
				<p><a href="<?php echo U('Pubtask/user_pj');?>" target="rightframe">交易评价</a></p>
			</div>
			<div class="account-two">
				<div><b>|</b>我的收藏</div>
			</div>
			<div class="account-link">				
				<p><a href="<?php echo U('Pubtask/user_sc');?>" target="rightframe">我收藏的套餐</a></p>
				<p><a href="<?php echo U('Pubtask/user_scdd');?>" target="rightframe">我收藏的订单</a></p>
			</div>
		</div>
	</div>
<!-- 用户信息结束-->
</body>
</html>