<?php
	//I need you!
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
		echo $result;
		//The result is hardcoded right now. I'll put them in a language file later.
	?>
	Back to <a href=" <?php echo site_url(''); ?> ">Home</a>
	<br />
</div>

</body>
</html>