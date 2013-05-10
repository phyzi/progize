<?php 
	function base_url() {
		return '../public/';
	}
	function site_url($append) {
		return '../application/views/'.$append;
	}
	
	//$sessiondata['username'] = 'knl';
	
	$master_tileslider_tiles[] = array('title' => 'Project X');
	$master_tileslider_tiles[] = array('title' => 'Project Y');
	$master_tileslider_tiles[] = array('title' => 'Project Z');
	$master_tileslider_tiles[] = array('title' => 'Project A');
	$master_tileslider_tiles[] = array('title' => 'Project B');
	$master_tileslider_tiles[] = array('title' => 'Project C');
	
	$view_directory = '/Users/knl/Dropbox/Projects/progize/application/views/';
?>

<?php
	
	include $view_directory.'global/header.php';

?>

<div id="section_sidebar_left">
			
	<?php
		include $view_directory.'global/master_nav_container.php';
	?>
			
</div>

<div id="section_sidebar_right">
	
	<?php
		include $view_directory.'global/login_container.php';
	?>

</div>

<div id="section_header">

	<?php
		include $view_directory.'global/master_tile_slider.php';
	?>

</div>

<div id="section_main">
	
	<!-- Main content -->
	<div id="main_content_container">
		
		<div id="welcome_info_container">
			
			<div class="color_main_0" style="height: 3em"></div>
			<div id="welcome_item_branding" class="color_main_1">
				<div class="item_text">ProGize<br>[more info here]</div>
			</div>
			<div class="color_main_2" style="height: 2em"></div>
			<div class="color_main_3" style="height: 1em"></div>
			
		</div>
	
	</div>

</div>

<div id="section_footer">

</div>

<?php
	include $view_directory.'global/footer.php';
?>