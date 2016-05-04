<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html lang="en">
	<head>
		<title>中国网游代练吧-跳转提示</title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
		<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/public.css" />
		
		<style type="text/css">
		*{ padding: 0; margin: 0; }
		body{ background: #fff; font-family: '微软雅黑'; color: #333; font-size: 16px; }
		.system-message{ padding: 24px 48px;text-align: center; }
		.system-message h1{ font-size: 100px; font-weight: normal; line-height: 120px; margin-bottom: 12px; text-align: center;}
		.system-message .jump{ padding-top: 10px}
		.system-message .success,.system-message .error{ line-height: 1.8em; font-size: 36px }
		.system-message .detail{ font-size: 12px; line-height: 20px; margin-top: 12px; display:none}
		</style>
	</head>
<body class="body-white">
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
				<li class="index-nav-select"><a href="<?php echo U('Index/index');?>">首页</a></li>
				<li><a href="<?php echo U('Tasklist/index');?>">订单大厅</a></li>
				<li><a href="<?php echo U('Goodlist/index');?>">代练套餐</a></li>
				<li><a href="<?php echo U('Work/index');?>">工作室</a></li>
				<li><a href="<?php echo U('Case/index');?>">成功案例</a></li>
			</ul>
		</div>
	</div>
<!-- 导航结束 -->
	<div class="system-message">
	<?php if(isset($message)): ?><h1>^_^</h1>
	<p class="success"><?php echo($message); ?></p>
	<?php else: ?>
	<h2>&gt;_&lt;</h2>
	<p class="error"><?php echo($error); ?></p><?php endif; ?>
	<p class="detail"></p>
	<p class="jump">
	中国网游代练吧：页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
	</p>
	</div>
	<script type="text/javascript">
	(function(){
	var wait = document.getElementById('wait'),href = document.getElementById('href').href;
	var interval = setInterval(function(){
		var time = --wait.innerHTML;
		if(time <= 0) {
			location.href = href;
			clearInterval(interval);
		};
	}, 1000);
	})();
	</script>
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