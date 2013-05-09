<!-- Login container -->
<div id="login_container">

<?php				
	if (isset($sessiondata['username']) && $sessiondata['username'] != "") {
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