<?php
	//This is just a library i need to generate urls
	$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to proGize</title>
</head>
<body>

<div id="wrapper">
	<?php
	//Soo you are basically free to use this however you want. You could bind this site via ajax, javascript, etc.
	//Or you could leave this page static (no, dont. dont dont dont dont dont).
	//Probably you want to redirect to the control panel or so
	?>

	<?php
		echo $result;
		//The result messages are hardcoded. I'll put them in a language file later
	?>
	Back to <a href=" <?php echo site_url(''); ?> ">Home</a>
	<br />
</div>

</body>
</html>