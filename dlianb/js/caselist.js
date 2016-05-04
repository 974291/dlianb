$(function(){
	$('.title-list-a').click(function(event) {
		$('.title-b,.con').hide();
		$('.hp').show();
	});
	$('.title-list').click(function(event) {
		$('.title-b,.con').show();
		$('.hp').hide();
	});
});