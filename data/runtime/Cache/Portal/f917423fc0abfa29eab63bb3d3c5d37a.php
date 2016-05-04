<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>订单大厅-<?php echo ($site_name); ?>-<?php echo ($site_seo_title); ?></title>
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/public.css" />
	<link rel="stylesheet" href="/dlianb/themes/dlianb/Public/css/tasklist.css" />
	<script type="text/javascript" src="/dlianb/themes/dlianb/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/dlianb/themes/dlianb/Public/js/tasklist.js"></script>
</head>
<body>
<script type="text/javascript">
	$(function(){
		$(".index-nav-list ul li").eq(1).addClass("index-nav-select").siblings().removeClass("index-nav-select");
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
				<div class="list-left-cont">
					<?php if(is_array($area)): foreach($area as $k=>$v): ?><ul class="<?php if($k%2): ?>list-left-back<?php else: endif; ?>">
						<li><a href="<?php echo U('area/list',array('id'=>$v['id']));?>"><?php echo ($v["area"]); ?>-<?php echo ($v["areas"]); ?></a></li>
					</ul><?php endforeach; endif; ?>	
				</div>
			</div>
			<div class=" list-left-two">
				<h5><b></b>最新发布动态</h5>
				<?php if(is_array($showtime)): foreach($showtime as $key=>$showtime): ?><div class="list-left-user">
					<p class="list-left-title">订单</p>
					<p class="list-left-rmb">￥<?php echo ($showtime["reward"]); ?></p>
					<p class="list-left-dw"><?php echo (msubstr($showtime["title"],0,5,'utf-8',false)); ?></p>
					<p class="list-left-name"><?php echo ($showtime["user_login"]); ?>发布</p>
					<p class="list-left-time"><?php echo ($showtime["lasttime"]); ?></p>
				</div><?php endforeach; endif; ?>
			</div>
			<div class="list-left-three">
				<h5><b></b>推荐工作室</h5>
				<?php if(is_array($office)): $i = 0; $__LIST__ = $office;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$office): $mod = ($i % 2 );++$i;?><div class="list-left-user">
					<img src="/dlianb/themes/dlianb/Public/images/<?php echo ($office["img"]); ?>" alt="" />
					<p class="list-left-title"><a href=""><?php echo ($office["title"]); ?></a></p>
					<p class="list-left-hp">好评率 </p><p class="list-left-font"><?php echo ($office["haop"]); ?>%</p>
					<p class="list-left-color"><?php echo ($office["service"]); ?></p>
					<p class="list-left-qy"><?php echo ($office["honor"]); ?>-<?php echo ($office["dan"]); ?></p>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
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
					<p>所有订单</p>
				</div>
				<div class="list-right-list">
					<h5>订单状态</h5>
					<p class="list-right-check">全部</p>
					<p id='working'>工作中</p>
					<p>待接单</p>
					<p>交付中</p>
					<p>已结束</p>
				</div>
				<div class="list-right-fl">
					<p class="list-right-check">剩余时间</p>
					<p >金额</p>
					<p>查看数</p>
				</div>
			</div>
			<div class="list-right-three">
				<div class="list-right-cotent">
					<p class="list-right-name">名称</p>
					<p class="list-right-money">代练款</p>
					<p class="list-right-class">游戏区服</p>
					<p class="list-right-look">查看/接单</p>
					<p class="list-right-status">状态</p>
					<p class="list-right-collect">收藏</p>
				</div>
				<div id='ajaxadd'>
				<?php if(is_array($list)): foreach($list as $key=>$list): ?><div class="list-right-show">
					<div class="list-right-mc"><a href="<?php echo U('Pubtask/index',array('id'=>$list['id']));?>"><?php echo (msubstr($list["title"],0,15,'utf-8',false)); ?></a></div>
					<div class="list-right-jg">￥<?php echo ($list["reward"]); ?></div>
					<div class="list-right-qymc"><?php echo ($list["area"]); ?>-<?php echo ($list["areas"]); ?></div>
					<div class="list-right-dd"><?php echo ($list["num"]); ?>/1</div>
					<div class="list-right-type">
						<?php if(($list['status'] == 1)): ?>公示中
						<?php elseif(($list['status'] == 2)): ?>
							已接单
						<?php elseif(($list['status'] == 3)): ?>
							代练中
						<?php elseif(($list['status'] == 4)): ?>
							交付中
						<?php elseif(($list['status'] == 5)): ?>
							结算中
						<?php elseif(($list['status'] == 6)): ?>
							完成订单<?php endif; ?>					
					</div>
					<div class="list-right-sc"><img src="/dlianb/themes/dlianb/Public/images/02-02.png" alt="" /></div>
					<div class="list-right-cont"><?php echo (msubstr($list["title"],0,45,'utf-8',false)); ?></div>
					<div class="list-right-fb"><a href="<?php echo U('Pubtask/index',array('id'=>$list['id']));?>" title="">发布类似订单</a></div>
				</div><?php endforeach; endif; ?>
				</div>
			</div>
			<div class="list-right-page">
			<?php echo ($page); ?>
			</div>
		</div>
	</div>
	<script type="text/javascript">
$(function(){
	$(".list-right-list p").eq(0).click(function() {
		var all = "";
		$.ajax({
			type: "POST",
			url: "<?php echo U('Tasklist/tlist');?>",
			dataType:'json',
			data: {list:all},
				success: function(data){
					str = "";
					for(var i = 0, j = data.length;i<j;i++){
						str += '';	
						//alert(data[i]['picture_dir']);			
					}
					$('.list-right-show').html('');
					$('.list-right-show').html(str);
				}
		});
	});
	$(".list-right-list p").eq(1).click(function() {
		var all1 = "work";
		$.ajax({
			type: "POST",
			url: "<?php echo U('Tasklist/tlist');?>",
			dataType:'json',
			data: {list:all1},
				success: function(data){
					$(".list-right-show").remove();
					$.each(data,function(k, v) {
						if(typeof v=="object"){
							console.log(v);
							if(v['status']==1){
								var status = "公示中";
							}else if(v['status']==2){
								var status = "已接单";
							}else if(v['status']==3){
								var status = "代练中";
							}else if(v['status']==4){
								var status = "交付中";
							}else if(v['status']==5){
								var status = "结算中";
							}else if(v['status']==6){
								var status = "完成订单";
							}
								$("#ajaxadd").append(

					"<div class='list-right-show'>"+
					"<div class='list-right-mc'><a href='/Pubtask/index/id/"+v['id']+".html'>"+v['title'].substr(0,15)+"</a></div>"+
					"<div class='list-right-jg'>￥"+v['reward']+"</div>"+
					"<div class='list-right-qymc'>"+v['areas']+"-"+v['areas']+"</div>"+
					"<div class='list-right-dd'>"+v['num']+"/1</div>"+
					"<div class='list-right-type'>"+
						status+				
					"</div>"+
					"<div class='list-right-sc'><img src='/dlianb/themes/dlianb/Public/images/02-02.png'/></div>"+
					"<div class='list-right-cont'>"+v['title'].substr(0,15)+"</div>"+
					"<div class='list-right-fb'><a href='/Pubtask/index/id/"+v['id']+".html'>"+v['title'].substr(0,15)+"</a></div>"+
					"</div>"
									);
							
						}
					});
					
				}
		});
	});
	$(".list-right-list p").eq(2).click(function() {
		var all2 = "jdz";
		$.ajax({
			type: "POST",
			url: "<?php echo U('Tasklist/tlist');?>",
			dataType:'json',
			data: {list:all2},
				success: function(data){
					str = "";
					for(var i = 0, j = data.length;i<j;i++){
						str += '';	
						//alert(data[i]['picture_dir']);			
					}
					$('.list-right-show').html('');
					$('.list-right-show').html(str);
				}
		});
	});
	$(".list-right-list p").eq(3).click(function() {
		var all3 = "jfz";
		$.ajax({
			type: "POST",
			url: "<?php echo U('Tasklist/tlist');?>",
			dataType:'json',
			data: {list:all3},
				success: function(data){
					str = "";
					for(var i = 0, j = data.length;i<j;i++){
						str += '';	
						//alert(data[i]['picture_dir']);			
					}
					$('.list-right-show').html('');
					$('.list-right-show').html(str);
				}
		});
	});	
	$(".list-right-list p").eq(4).click(function() {
		var all4 = "zsl";
		$.ajax({
			type: "POST",
			url: "<?php echo U('Tasklist/tlist');?>",
			dataType:'json',
			data: {list:all4},
				success: function(data){
					str = "";
					for(var i = 0, j = data.length;i<j;i++){
						str += '';	
						//alert(data[i]['picture_dir']);			
					}
					$('.list-right-show').html('');
					$('.list-right-show').html(str);
				}
		});
	});		
})

	</script>
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