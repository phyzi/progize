<?php 
	//we need the form helper
	$this->load->helper('form');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to proGize</title>
</head>
<body>

<div id="wrapper">
	diz is da mane page.
	<br />

	<?php
		echo form_open('user_handling/login');
			echo 'username' . form_input('username', 'dontlookatme');
			echo 'password' . form_password('password', '');
			echo form_submit('login', 'Log me in!');
		echo form_close();
	?>

	<p>Register:</p>

	<?php
		echo form_open('user_handling/register');
			echo 'username' . form_input('username', '');
			echo 'email' . form_input('email', '');
			echo 'password' . form_password('password', '');
			echo 'repeat' . form_password('password_r', '');
			echo form_submit('register', 'register!');
		echo form_close();
	?>
</div>

</body>
</html>