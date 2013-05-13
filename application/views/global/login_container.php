<?php
	//helper classes
	//$this->load->helper('url');
?>

<!-- Login container -->
<div id="login_container">

<?php
	if (isset($sessiondata['username']) && $sessiondata['username'] != "") {
		// user is logged in
?>
		<div id="login_head_item_logout" class="item head_item">
			<a href="<?=site_url('user_handling/logout')?>"><div class="item_text">LOGOUT</div></a>
		</div>
		<div class="item"></div>
		<div id="login_head_item_profile" class="item head_item">
			<a href="<?=site_url('profile/profile')?>"><div class="item_text">PROFILE</div></a>
		</div>
		<div class="item"></div>
<?php
	} else {
		// Get an account please
?>
		<div id="login_head_item_login" class="item head_item">
			<div class="item_text">LOGIN</div>
		</div>
		<div id="login_form_item_login" class="item">
			<form class="form_wrapper">
				<input type="text" class="input_text"/>
				<input type="text" class="input_text"/>
				<input type="submit"/>
			</form>
		</div>
		
		<div id="login_head_item_register" class="item head_item">
			<div class="item_text">REGISTER</div>
		</div>	
		<div id="login_form_item_register" class="item">
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