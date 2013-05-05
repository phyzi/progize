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
	<p>You have been logged out</p>
	<p>Back to <a href=" <?php echo site_url(''); ?> ">Home</a></p>
</div>

</body>
</html>