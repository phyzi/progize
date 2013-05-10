// Login Container Animations
$(function() {
	var time = 300;
	
	var i = 0;
	$('#login_container').each(function() {
		
		var login_button = $(this).find('#login_head_item_login');
		var login_form = $(this).find('#login_form_item_login form');
		var login_auto_height = $(login_form).height();
		var register_button = $(this).find('#login_head_item_register');
		var register_form = $(this).find('#login_form_item_register form');
		var register_auto_height = $(register_form).height();
		
		$(login_form).addClass('collapsed').css({
			overflow: 'hidden',
			height: 0
		});
		$(register_form).css({
			overflow: 'hidden',
		});
		$(login_button).css({
			cursor: 'pointer',
		});
		$(register_button).css({
			cursor: 'default'
		});

		
		$(login_button).click(function() {
			if ($(login_form).hasClass('collapsed')) {
				$(this).css({
					cursor: 'default'
				});
				$(register_button).css({
					cursor: 'pointer'
				});
				$(login_form).removeClass('collapsed').animate({
					height: login_auto_height,
					opacity: 1
				}, time, 'swing');
				$(register_form).addClass('collapsed').animate({
					height: 0,
					opacity: 0
				}, time, 'swing');
			}
		});
		$(register_button).click(function() {
			if ($(register_form).hasClass('collapsed')) {
				$(this).css({
					cursor: 'default'
				});
				$(login_button).css({
					cursor: 'pointer'
				});
				$(register_form).removeClass('collapsed').animate({
					height: register_auto_height,
					opacity: 1
				}, time, 'swing');
				$(login_form).addClass('collapsed').animate({
					height: 0,
					opacity: 0
				}, time, 'swing');
			}
		});
		
		
	});
});