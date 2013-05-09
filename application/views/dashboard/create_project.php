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
		<?php
			if ( isset($sessiondata['username']) && $sessiondata['username'] != "" ) {
				echo form_open('dashboard');
					echo 'Project name' . form_input('project_name', '');
					echo 'Project description' . form_textarea('project_description', '');
					echo 'Project type' . form_input('project_type', '');
					echo form_submit('create_project', 'Create the project!');
				echo form_close();
			} else {
				header( base_url() );
			}
		?>
</div>

</body>
</html>