$(function () {
	
	var i = 0;
	$('.tile').each(function () {
	
		$(this).addClass('item_'+i);
		$(this).addClass('color_scnd_'+i);
		$(this).addClass('color_scnd_'+i);
		$(this).css({
				left:i*22+'em'
		})
		i++;
		
	});
});