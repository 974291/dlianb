<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title><?php echo ($site_name); ?>-<?php echo ($site_seo_title); ?></title>
	<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
	<meta name="description" content="<?php echo ($site_seo_description); ?>">
	<script type="text/javascript" src="/dlianb/themes/dlianb/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/dlianb/themes/dlianb/Public/js/index.js"></script>
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/public.css" />
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/index.css" />
</head>
<script type="text/javascript">  
	$(document).ready(function() {  
		$(".site-nav li").hover(function(){
			$(this).addClass("active").siblings().removeClass("active");
			var index=$(this).index();
			$(".tab").eq(index).show().siblings().hide();
		});
	});  	
</script> 
<script type="text/javascript">
	$(function(){
		$(".index-nav-list ul li").eq(0).addClass("index-nav-select").siblings().removeClass("index-nav-select");
	});	
</script>	
<!-- 加载通用导航 -->
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
	<div id="index-banner">
		<div class="index-banner-pic">
			<img src="/dlianb/themes/dlianb/Public/images/index-banner.jpg" alt="" />
			<div class="index-banner-reg">
			<?php if(empty($_SESSION['user_name'])): ?><div class="right-reg"><a href="<?php echo U('user/register/index');?>">注册帐号</a></div>
				<div class="right-login"><a href="<?php echo U('user/login/index');?>">用户登陆</a></div>
			<?php else: ?>
				<div class="right-reg"><a href="<?php echo U('user/register/index');?>">我是号主</a></div>
				<div class="right-login"><a href="<?php echo U('user/login/index');?>">我是打手</a></div><?php endif; ?>
				<!-- <div class="right-qq">
					<span>第三方帐号登录：</span>
					<a href=""><img src="/dlianb/themes/dlianb/Public/images/qqlogo.png" alt="" /></a>
					<a href=""><img src="/dlianb/themes/dlianb/Public/images/weib.png" alt="" /></a>
				</div> -->
				<div class="right-user"><a href="<?php echo U('pubtask/index');?>">发布订单</a></div>
				
				<div class="site-content">
					<ul class="site-nav">
						<li class="active nav-one"><a href="">公告</a></li>
						<li class="nav-two"><a href="">接单通知</a></li>
						<li class="nav-three"><a href="">提现</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab tab-one">
							<ul>
								<?php if(is_array($message)): foreach($message as $key=>$vo): ?><li>
									<i>·</i><a href="<?php echo U('article/index',array('id'=>$vo['id']));?>" target="_blank"><?php echo (msubstr($vo["title"],0,19,'utf-8',false)); ?></a>
								</li><?php endforeach; endif; ?>
							</ul>
						</div>
						<div class="tab tab-two">
							<ul>
								<?php if(is_array($homedd)): foreach($homedd as $key=>$homedd): ?><li>
									<i>·</i><?php echo ($homedd["user_login"]); ?> 中标 <a href="<?php echo U('Task/index',array('id'=>$homedd['id']));?>" target="_blank"><?php echo (msubstr($homedd["title"],0,12,'utf-8',false)); ?></a>
								</li><?php endforeach; endif; ?>
							</ul>
						</div>
						<div class="tab tab-three">
							<ul>
								<li>
									<i>·</i>Rex 提现<span class="money">9.50元</span>
								</li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="index-list">
		<div class="a-left">
			<div class="right-list">
				<div class="right-list-title"><b>|</b><span>代练订单</span></div>
				<div class="right-list-content">
				<?php if(is_array($area)): foreach($area as $key=>$area): ?><div class="right-list-link"><span><a href="<?php echo u('Tasklist/index',array('id'=>$area['id']));?>"><?php echo ($area["area"]); ?>-<?php echo ($area["areas"]); ?>、</a></span></div><?php endforeach; endif; ?>	
				</div>
			</div>
			<div class="right-list-dd">
				<div class="dd-title"><a href="<?php echo U('Tasklist/index');?>">更多>></a></div>
				<?php if(is_array($indent)): foreach($indent as $key=>$indent): ?><div class="dd-content">
					<span class="money">￥<?php echo ($indent["reward"]); ?></span>
					<a href=""><?php echo (msubstr($indent["title"],0,10,'utf-8',false)); ?></a>
					<span class="fb"><?php echo ($indent["uname"]); ?></span>
					<span class="fb"><?php echo ($indent["num"]); ?>投标</span>
				</div><?php endforeach; endif; ?>
			</div>
		</div>
		<div class="a-right">
			<div class="right-list-title">
				<b>|</b>
				<span class="font">中标动态</span>
				<span class="up">▲</span>
				<span class="down">▼</span>
			</div>
			<?php if(is_array($zbdt)): foreach($zbdt as $key=>$zbdt): ?><div class="right-list-content">
				<a href=""><img src="/dlianb/themes/dlianb/Public/images/<?php echo ($zbdt["img"]); ?>" alt="" /></a>
				<div class="content-name"><?php echo (msubstr($zbdt["title"],0,10,'utf-8',false)); ?></div>
				<div class="content-fb"><?php echo (date("m-d",$zbdt["lasttime"])); ?>发布</div>
				<div class="content-money">￥<?php echo ($zbdt["num"]); ?></div>
				<div class="content-link"><a href=""><?php echo (msubstr($zbdt["title"],0,15,'utf-8',false)); ?></a></div>
			</div><?php endforeach; endif; ?>
		</div>
	</div>
<!-- 第一部分结束 -->
	<div id="index-list">
		<div class="a-left">
			<div class="right-list">
				<div class="right-list-title"><b>|</b><span>代练套餐</span></div>
				<div class="right-list-content">
				<?php if(is_array($are)): foreach($are as $key=>$are): ?><div class="right-list-link"><span><a href="<?php echo u('Tasklist/index',array('id'=>$are['id']));?>"><?php echo ($are["area"]); ?>-<?php echo ($are["areas"]); ?></a></span></div><?php endforeach; endif; ?>
				</div>
			</div>
			<div class="right-list-dd">
				<div class="dd-title"><a href="">更多>></a></div>
				<?php if(is_array($ddcolist)): foreach($ddcolist as $key=>$ddcolist): ?><div class="dd-colist">
					<a href="<?php echo u('Work/index',array('id'=>$ddcolist['id']));?>"><img src="/dlianb/themes/dlianb/Public/images/<?php echo ($ddcolist["img"]); ?>" alt="" /></a>
					<span class="dd-t"><?php echo ($ddcolist["title"]); ?></span>
					<span class="dd-m">￥<?php echo ($ddcolist["money"]); ?>元</span>
					<span class="dd-n"><?php echo ($ddcolist["user_login"]); ?>发布</span>
				</div><?php endforeach; endif; ?>
			</div>
		</div>
		<div class="a-right">
			<div class="right-list-title">
				<b>|</b>
				<span class="font">推荐工作室</span>
			</div>
			<?php if(is_array($tjoffice)): foreach($tjoffice as $key=>$tjoffice): ?><div class="right-list-co">
				<a href=""><img src="/dlianb/themes/dlianb/Public/images/<?php echo ($tjoffice["img"]); ?>" alt="" /></a>
				<div class="content-all">
					<div class="content-a"><?php echo ($tjoffice["title"]); ?></div>
					<div class="content-b"><span>好评率</span><?php echo ($tjoffice["haop"]); ?>%</div>
					<div class="content-d"><?php echo ($tjoffice["service"]); ?></div>
					<div class="content-d"><?php echo ($tjoffice["area"]); ?>-<?php echo ($tjoffice["areas"]); ?></div>
				</div><?php endforeach; endif; ?>	
			</div>	
		</div>
	</div>
<!-- 第三部分开始 -->
<div id="index-list">
		<div class="a-left">
			<div class="right-list">
				<div class="right-list-title"><b>|</b><span>成功案例</span></div>
				<div class="right-list-content">
				<?php if(is_array($cglist)): foreach($cglist as $key=>$cglist): ?><div class="right-dd">
						<a href=""><img src="/dlianb/themes/dlianb/Public/images/<?php echo ($cglist["img"]); ?>" alt="" /></a> 
						<div class="r-a"><?php echo ($cglist["title"]); ?></div>
						<div class="r-b">赏金：<span>￥<?php echo ($cglist["reward"]); ?></span></div>
						<div class="r-b">发布人：<?php echo ($cglist["user_nicename"]); ?></div>
						<div class="r-b">接单：<?php echo ($cglist["cont"]); ?>个</div>
					</div><?php endforeach; endif; ?>
				</div>
			</div>
			<div class="right-list-dd">
				<div class="dd-title"><a href="">更多>></a></div>
				<?php if(is_array($office_zg)): $i = 0; $__LIST__ = $office_zg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$office_zg): $mod = ($i % 2 );++$i;?><div class="dd-colist">
					<a href=""><img src="/dlianb/themes/dlianb/Public/images/man_big.jpg" alt="" /></a>
					<span class="dd-t"><?php echo ($office_zg["title"]); ?></span>
					<span class="dd-n"><?php echo ($office_zg["user_login"]); ?></span>
					<span class="dd-m"> 接单<?php echo ($office_zg["type"]); ?>个￥<?php echo ($office_zg["money"]); ?>元</span>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<div class="a-right">
			<div class="right-list-title">
				<b>|</b>
				<span class="font">资讯</span>
			</div>
			<div class="right-list-c">
				<?php if(is_array($message_one)): foreach($message_one as $key=>$message_one): ?><a href="<?php echo U('News/index',array('id'=>$message_one['id']));?>"><img src="/dlianb/themes/dlianb/Public/images/<?php echo ($message_one["img"]); ?>" alt="" /></a>
				<div class="fdc"><span><?php echo msubstr($message_one['title'],0,14);?></span></div><?php endforeach; endif; ?>
				<ul>
					<?php if(is_array($message)): $i = 0; $__LIST__ = $message;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$message): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('News/index',array('id'=>$message['id']));?>"><?php echo msubstr($message['title'],0,12);?></a><span><?php echo (date('m-d',$message["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
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