<?php 
	//we need the form helper
	//$this->load->helper('form');
	//This is just a library i need to generate urls
	//$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	
	<title>Welcome to proGize</title>
	
	<!-- Stylesheets -->
	<link rel="stylesheet/less" type="text/css" href="../css/style.less">
	
	<!-- {less} compiler -->
	<script src="../css/less.js" type="text/javascript"></script>

</head>
<body>

<div id="welcome_container">
			
	<div id="welcome_info_container">
		
		<div class="color_main_0" style="height: 2em"></div>
		<div id="welcome_item_branding" class="color_main_1">
			<div class="item_text">ProGize<br>[more info here]</div>
		</div>
		
	</div>
	
	<div class="vertical_seperator"></div>
	
	<div id="login_container">
				
		<?php
			if ( isset($sessiondata['username']) && $sessiondata['username'] != "" ) {
				// user is logged in
				echo '<div id="login_head_item_logout" class="head_item"><a href="'. site_url('user_handling/logout') .'"><div class="item_text">LOGOUT</div></a></div>';
				echo '<div class="form_item"></div>';
			} else {
				// Get an account please
				echo '<div id="login_head_item_login" class="head_item"><div class="item_text">LOGIN</div></div>';
				echo '<div class="form_item">';
				
				echo form_open('user_handling/login');
					echo 'username' . form_input('username', 'dontlookatme');
					echo 'password' . form_password('password', '');
					echo form_submit('login', 'Log me in!');
				echo form_close();
				
				echo '</div>';
				
				echo '<div id="login_head_item_register" class="head_item"><div class="item_text">REGISTER</div></div>';
				echo '<div class="form_item">';				
	
				echo form_open('user_handling/register');
					echo 'username' . form_input('username', '');
					echo 'email' . form_input('email', '');
					echo 'password' . form_password('password', '');
					echo 'repeat' . form_password('password_r', '');
					echo form_submit('register', 'register!');
				echo form_close();
				
				echo '</div>';
			}
		?>
	
		<p>Session data</p>
	
		<?php
			foreach($sessiondata as $row) {
				echo $row . '<br />';
			}
		?>
						
	</div>
	
</div>

</body>
</html>