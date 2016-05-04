/*列表内容背景切换*/
$(function(){
	$(".list-right-show").hover(function(){
	    	$('.list-right-cont,.list-right-fb').show();
	    	$(this).css('background','#DBDCDC');
	    	$(this).css('height','80');
	},function(){
	   	$('.list-right-cont,.list-right-fb').hide();
	   	$(this).css('background','#fff');
	   	$(this).css('height','38');
	});
});

/*列表内容背景切换结束*/
