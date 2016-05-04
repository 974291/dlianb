$(function(){
	$('.num-input').focus(function() {
		 this.value = '';
	});
	$('.num-input').blur(function() {
		 this.value = '请输入编号';
	});
});
