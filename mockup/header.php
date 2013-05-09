<?php 
	function base_url() {
		return '../public/';
	}
	function site_url($append) {
		return '../'.$append;
	}
	$is_logged_in = false;
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	
	<title>Welcome to proGize</title>
	
	<!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/reset.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/general.css">
	<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>css/style.less">

	<!-- {less} compiler -->
	<script src="<?=base_url()?>css/less.js" type="text/javascript"></script>
	
	<!-- JQuery -->
	<script src="<?=base_url()?>js/jquery.js" type="text/javascript"></script>

	<!-- Scripts -->
	<script src="<?=base_url()?>js/tileslider.js" type="text/javascript"></script>

</head>
<body>

<div id="section_sidebar_left">

	<!-- Master nav container with branding and search bar floating top left -->
	<div id="master_nav_container">
		<div class="color_main_0" style="height: 2em"></div>
		<div id="master_nav_branding" class="color_main_1">
			<div class="item_text">ProGize</div>
		</div>
		<div id="master_nav_search" class="color_main_2">
			<form class="form_wrapper"><input type="text" class="input_text"/></form>
		</div>
		<div class="color_main_3" style="height: 2em"></div>
	</div>
	
</div>

<div id="section_sidebar_right">
	
	<!-- Login container -->
	<div id="login_container">
	
	<?php				
		if ($is_logged_in) {
			// user is logged in
	?>
			<div id="login_head_item_logout" class="head_item">
				<a href="<?=site_url('user_handling/logout')?>"><div class="item_text">LOGOUT</div></a>
			</div>
			<div class="form_item"></div>
	<?php
		} else {
			// Get an account please
	?>
			<div id="login_head_item_login" class="head_item">
				<div class="item_text">LOGIN</div>
			</div>
			<div class="form_item">
				<form class="form_wrapper">
					<input type="text" class="input_text"/>
					<input type="text" class="input_text"/>
					<input type="submit"/>
				</form>
			</div>
			
			<div id="login_head_item_register" class="head_item">
				<div class="item_text">REGISTER</div>
			</div>	
			<div class="form_item">
				<form class="form_wrapper">
					<input type="text" class="input_text"/>
					<input type="text" class="input_text"/>
					<input type="text" class="input_text"/>
					<input type="text" class="input_text"/>
					<input type="submit"/>
				</form>
			</div>
	<?php
		}
	?>
						
	</div>

</div>

<div id="section_main">

	<!-- Master tile slider -->
	<div id="master_tileslider_container" class="tileslider_container">
		<div class="tile"></div>
		<div class="tile"></div>
		<div class="tile"></div>
		<div class="tile"></div>
		<div class="shadow_left"></div>
		<div class="shadow_right"></div>
	</div>

	<!-- Main content -->
	<div id="main_content_container">
		
		<div id="welcome_info_container">
			
			<div class="color_main_0" style="height: 3em"></div>
			<div id="welcome_item_branding" class="color_main_1">
				<div class="item_text">ProGize<br>[more info here]</div>
			</div>
			<div class="color_main_2" style="height: 2em"></div>
			<div class="color_main_3" style="height: 1em"></div>
			
		</div>
	
	</div>


</div>

</body>
</html>