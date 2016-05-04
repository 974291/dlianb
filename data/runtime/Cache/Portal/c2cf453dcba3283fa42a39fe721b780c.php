<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>我的工作室-<?php echo ($site_name); ?>-<?php echo ($site_seo_title); ?></title>
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/public.css" />
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/tasklist.css" />
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/goodlist.css" />
	<script type="text/javascript" src="/dlianb/themes/dlianb/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/dlianb/themes/dlianb/Public/js/tasklist.js"></script>
</head>
<body>
<script type="text/javascript">
	$(function(){
		$(".index-nav-list ul li").eq(3).addClass("index-nav-select").siblings().removeClass("index-nav-select");
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
<!-- 订单大厅左边开始 -->
	<div id="list">
		<div class="list-left">
			<div class="list-left-one">
				<h5><b></b>游戏区服</h5>
				<ul >
					<li><a href="">电信-艾欧尼亚</a></li>
					<li><a href="">电信-祖安</a></li>
				</ul>
				<ul class="list-left-back">
					<li><a href="">电信-诺克萨斯</a></li>
					<li><a href="">电信-皮尔特沃夫</a></li>
				</ul>
				<ul >
					<li><a href="">电信-艾欧尼亚</a></li>
					<li><a href="">电信-祖安</a></li>
				</ul>
				<ul class="list-left-back">
					<li><a href="">电信-诺克萨斯</a></li>
					<li><a href="">电信-皮尔特沃夫</a></li>
				</ul>
				<ul >
					<li><a href="">电信-艾欧尼亚</a></li>
					<li><a href="">电信-祖安</a></li>
				</ul>
				<ul class="list-left-back">
					<li><a href="">电信-诺克萨斯</a></li>
					<li><a href="">电信-皮尔特沃夫</a></li>
				</ul>
				<ul >
					<li><a href="">电信-艾欧尼亚</a></li>
					<li><a href="">电信-祖安</a></li>
				</ul>
				
			</div>
			<div class=" list-left-two">
				<h5><b></b>最新发布动态</h5>
				<div class="list-left-user">
					<p class="list-left-title">订单</p>
					<p class="list-left-rmb">￥ 40.00</p>
					<p class="list-left-dw">白银1到黄金5</p>
					<p class="list-left-name">❤ etc ＇n1╮ 发布</p>
					<p class="list-left-time">3天前</p>
				</div>
				<div class="list-left-user">
					<p class="list-left-title">订单</p>
					<p class="list-left-rmb">￥ 40.00</p>
					<p class="list-left-dw">白银1到黄金5</p>
					<p class="list-left-name">❤ etc ＇n1╮ 发布</p>
					<p class="list-left-time">3天前</p>
				</div>
				<div class="list-left-user">
					<p class="list-left-title">订单</p>
					<p class="list-left-rmb">￥ 40.00</p>
					<p class="list-left-dw">白银1到黄金5</p>
					<p class="list-left-name">❤ etc ＇n1╮ 发布</p>
					<p class="list-left-time">3天前</p>
				</div>
				<div class="list-left-user">
					<p class="list-left-title">订单</p>
					<p class="list-left-rmb">￥ 40.00</p>
					<p class="list-left-dw">白银1到黄金5</p>
					<p class="list-left-name">❤ etc ＇n1╮ 发布</p>
					<p class="list-left-time">3天前</p>
				</div>
				<div class="list-left-user">
					<p class="list-left-title">订单</p>
					<p class="list-left-rmb">￥ 40.00</p>
					<p class="list-left-dw">白银1到黄金5</p>
					<p class="list-left-name">❤ etc ＇n1╮ 发布</p>
					<p class="list-left-time">3天前</p>
				</div>
			</div>
			<div class="list-left-three">
				<h5><b></b>推荐工作室</h5>
				<div class="list-left-user">
					<img src="/dlianb/themes/dlianb/Public/images/middle.jpg" alt="" />
					<p class="list-left-title"><a href="">龙飞LOL工作室</a></p>
					<p class="list-left-hp">好评率 </p><p class="list-left-font">100%</p>
					<p class="list-left-color">英雄联盟</p>
					<p class="list-left-qy">电信-艾欧尼亚</p>
				</div>
				<div class="list-left-user">
					<img src="/dlianb/themes/dlianb/Public/images/middle.jpg" alt="" />
					<p class="list-left-title"><a href="">龙飞LOL工作室</a></p>
					<p class="list-left-hp">好评率 </p><p class="list-left-font">100%</p>
					<p class="list-left-color">英雄联盟</p>
					<p class="list-left-qy">电信-艾欧尼亚</p>
				</div>
				<div class="list-left-user">
					<img src="/dlianb/themes/dlianb/Public/images/middle.jpg" alt="" />
					<p class="list-left-title"><a href="">龙飞LOL工作室</a></p>
					<p class="list-left-hp">好评率 </p><p class="list-left-font">100%</p>
					<p class="list-left-color">英雄联盟</p>
					<p class="list-left-qy">电信-艾欧尼亚</p>
				</div>
				<div class="list-left-user">
					<img src="/dlianb/themes/dlianb/Public/images/middle.jpg" alt="" />
					<p class="list-left-title"><a href="">龙飞LOL工作室</a></p>
					<p class="list-left-hp">好评率 </p><p class="list-left-font">100%</p>
					<p class="list-left-color">英雄联盟</p>
					<p class="list-left-qy">电信-艾欧尼亚</p>
				</div>
			</div>
		</div>
		<!-- 订单大厅左边结束 -->
		<!-- 订单大厅右边开始 -->
		<div class="list-right">
			<div class="list-right-one">
				<img src="/dlianb/themes/dlianb/Public/images/de.png" alt="" />
			</div>
			<div class=" list-right-two">
				<div class="list-right-title">
					<p>所有工作室</p>
				</div>
				<div class="list-right-list">
					<h5>打手类型</h5>
					<p class="list-right-check">个人用户</p>
					<p>企业用户</p>
				</div>
				<div class="list-right-fl">
					<p class="list-right-check">等级</p>
					<p >好评</p>
					<p>人气</p>
				</div>
			</div>
			<div class="list-right-three">
				<div class="list-right-c"></div>
					<dd class="list-content">
						<ul class="list-item-body">
							<li class="list-a">
								<a href=""><img src="/dlianb/themes/dlianb/Public/images/avatar_middle.jpg"  class="pic_middle"></a>
								<div class="list-obj">
									<p class="list-obj-item">
										<a class="list-title" href="">646808948 </a>
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
									</p>
									<p class="list-obj-item">
										服务范围：
										<span>英雄联盟</span>
										<span>电信-祖安</span>
									</p>
									<p class="list-obj-item">个人 </p>
									<p class="list-obj-item">
										<a href="" class="btn">进入工作室</a>
										<a href="" class="btn-a btn">联系我</a>
									</p>
								</div>
							</li>
							<li class="list-b">
								<ul class="user-atten">
									<li>
										<p><span class="user-num">￥438.90</span></p>
										<p>最近3月成交</p>
									</li>
									<li>
										<p><span class="user-num">100% </span></p>
										<p>好评率</p>
									</li>
								</ul>

							</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1">热销内容</li>
							<li class="w2">售价</li>
							<li class="w3">成交次数</li>
							<li class="w4">评价</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1"><a href="" class="list-title" title="代打青铜-钻2">代打青铜-钻2代打青铜-</a></li>
							<li class="w2 d1">￥50.00</li>
							<li class="w3">0</li>
							<li class="w4">0</li>
						</ul>
						<div class="list-item-footer"><a href="">查看更多服务 <i class="fa fa-angle-down"></i></a></div>
					</dd>
					<dd class="list-content">
						<ul class="list-item-body">
							<li class="list-a">
								<a href=""><img src="/dlianb/themes/dlianb/Public/images/avatar_middle.jpg"  class="pic_middle"></a>
								<div class="list-obj">
									<p class="list-obj-item">
										<a class="list-title" href="">646808948 </a>
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
									</p>
									<p class="list-obj-item">
										服务范围：
										<span>英雄联盟</span>
										<span>电信-祖安</span>
									</p>
									<p class="list-obj-item">个人 </p>
									<p class="list-obj-item">
										<a href="" class="btn">进入工作室</a>
										<a href="" class="btn-a btn">联系我</a>
									</p>
								</div>
							</li>
							<li class="list-b">
								<ul class="user-atten">
									<li>
										<p><span class="user-num">￥438.90</span></p>
										<p>最近3月成交</p>
									</li>
									<li>
										<p><span class="user-num">100% </span></p>
										<p>好评率</p>
									</li>
								</ul>

							</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1">热销内容</li>
							<li class="w2">售价</li>
							<li class="w3">成交次数</li>
							<li class="w4">评价</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1"><a href="" class="list-title" title="代打青铜-钻2">代打青铜-钻2代打青铜-</a></li>
							<li class="w2 d1">￥50.00</li>
							<li class="w3">0</li>
							<li class="w4">0</li>
						</ul>
						<div class="list-item-footer"><a href="">查看更多服务 <i class="fa fa-angle-down"></i></a></div>
					</dd>
					<dd class="list-content">
						<ul class="list-item-body">
							<li class="list-a">
								<a href=""><img src="/dlianb/themes/dlianb/Public/images/avatar_middle.jpg"  class="pic_middle"></a>
								<div class="list-obj">
									<p class="list-obj-item">
										<a class="list-title" href="">646808948 </a>
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
									</p>
									<p class="list-obj-item">
										服务范围：
										<span>英雄联盟</span>
										<span>电信-祖安</span>
									</p>
									<p class="list-obj-item">个人 </p>
									<p class="list-obj-item">
										<a href="" class="btn">进入工作室</a>
										<a href="" class="btn-a btn">联系我</a>
									</p>
								</div>
							</li>
							<li class="list-b">
								<ul class="user-atten">
									<li>
										<p><span class="user-num">￥438.90</span></p>
										<p>最近3月成交</p>
									</li>
									<li>
										<p><span class="user-num">100% </span></p>
										<p>好评率</p>
									</li>
								</ul>

							</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1">热销内容</li>
							<li class="w2">售价</li>
							<li class="w3">成交次数</li>
							<li class="w4">评价</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1"><a href="" class="list-title" title="代打青铜-钻2">代打青铜-钻2代打青铜-</a></li>
							<li class="w2 d1">￥50.00</li>
							<li class="w3">0</li>
							<li class="w4">0</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1"><a href="" class="list-title" title="代打青铜-钻2">代打青铜-钻2代打青铜-</a></li>
							<li class="w2 d1">￥50.00</li>
							<li class="w3">0</li>
							<li class="w4">0</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1"><a href="" class="list-title" title="代打青铜-钻2">代打青铜-钻2代打青铜-</a></li>
							<li class="w2 d1">￥50.00</li>
							<li class="w3">0</li>
							<li class="w4">0</li>
						</ul>
						<div class="list-item-footer"><a href="">查看更多服务 <i class="fa fa-angle-down"></i></a></div>
					</dd>
					<dd class="list-content">
						<ul class="list-item-body">
							<li class="list-a">
								<a href=""><img src="/dlianb/themes/dlianb/Public/images/avatar_middle.jpg"  class="pic_middle"></a>
								<div class="list-obj">
									<p class="list-obj-item">
										<a class="list-title" href="">646808948 </a>
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
										<img src="/dlianb/themes/dlianb/Public/images/5.gif" align="absmiddle">
									</p>
									<p class="list-obj-item">
										服务范围：
										<span>英雄联盟</span>
										<span>电信-祖安</span>
									</p>
									<p class="list-obj-item">个人 </p>
									<p class="list-obj-item">
										<a href="" class="btn">进入工作室</a>
										<a href="" class="btn-a btn">联系我</a>
									</p>
								</div>
							</li>
							<li class="list-b">
								<ul class="user-atten">
									<li>
										<p><span class="user-num">￥438.90</span></p>
										<p>最近3月成交</p>
									</li>
									<li>
										<p><span class="user-num">100% </span></p>
										<p>好评率</p>
									</li>
								</ul>

							</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1">热销内容</li>
							<li class="w2">售价</li>
							<li class="w3">成交次数</li>
							<li class="w4">评价</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1"><a href="" class="list-title" title="代打青铜-钻2">代打青铜-钻2代打青铜-</a></li>
							<li class="w2 d1">￥50.00</li>
							<li class="w3">0</li>
							<li class="w4">0</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1"><a href="" class="list-title" title="代打青铜-钻2">代打青铜-钻2代打青铜-</a></li>
							<li class="w2 d1">￥50.00</li>
							<li class="w3">0</li>
							<li class="w4">0</li>
						</ul>
						<ul class="list-item-min">
							<li class="w1"><a href="" class="list-title" title="代打青铜-钻2">代打青铜-钻2代打青铜-</a></li>
							<li class="w2 d1">￥50.00</li>
							<li class="w3">0</li>
							<li class="w4">0</li>
						</ul>
						<div class="list-item-footer"><a href="">查看更多服务 <i class="fa fa-angle-down"></i></a></div>
					</dd>
				</div>
			<div class="list-right-page">
				<ul>
					<li>第一页</li>
					<li>第二页</li>
					<li>第三页</li>
					<li>最后一页</li>
				</ul>
			</div>
		</div>
	</div>
<!-- 订单大厅右边结束 -->
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