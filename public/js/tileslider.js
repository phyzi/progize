$(function () {
	
	var i = 0;
	$('.tile').each(function () {
		
		var title = $(this).find('.title');
	
		$(this).addClass('item_'+i);
		$(title).addClass('color_scnd_'+i);
		$(this).css({
				left:i*21.5+'em'
		});
		i++;
		
	});
});