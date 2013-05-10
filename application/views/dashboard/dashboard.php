<?php 
	//we need the form helper
	$this->load->helper('form');
	//This is just a library i need to generate urls
	$this->load->helper('url');
?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	
	<title>Welcome to proGize</title>
	
	<?php
		// Stylesheets
		echo '<link rel="stylesheet/less" type="text/css" href="' . base_url() . 'css/style.less' . '">';

		// {less} compiler
		echo '<script src="' . base_url() . 'css/less.js' . '" type="text/javascript"></script>';
	?>

</head>
<body>

<div id="wrapper">
	This is the dashboard
	<?php
	 echo '<a href="' . site_url('dashboard/create_project') . '">Create project</a>';
	?>
</div>

</body>
</html>