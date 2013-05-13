<?php 
	function base_url() {
		return '../public/';
	}
	function site_url($append) {
		return '../application/views/'.$append;
	}
	
	$view_directory = '/Users/knl/Dropbox/Projects/progize/application/views/';
	
	$sessiondata['username'] = 'knl';

?>

<?php
	
	include $view_directory.'global/header.php';

?>

<div id="section_header">
			
	<?php
		include $view_directory.'global/master_nav_container.php';
		
		include $view_directory.'global/master_tile_slider.php';
	?>

</div>

<div id="section_main">

	<?php
		include $view_directory.'welcome/welcome.php';
	?>

		
		<?php
			include $view_directory.'global/login_container.php';
			
		?>
		
	</div>

</div>

<div id="section_footer">

</div>

<?php
	include $view_directory.'global/footer.php';
?>