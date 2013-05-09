<?php 
	//we need the form helper
	$this->load->helper('form');
	//This is just a library i need to generate urls
	$this->load->helper('url');
?>

<?php
	
	$views_directory = site_url();
	
	include($views_directory.'global/header.php');

?>

<div id="section_sidebar_left">
			
	<?php
		include($views_directory.'global/master_nav_container.php');
	?>
			
</div>

<div id="section_sidebar_right">
	
	<?php
		include($views_directory.'global/login_container.php');
	?>

</div>

<div id="section_main">

	<?php
		include($views_directory.'global/master_tile_slider.php');
	?>

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

<?php
	include($views_directory.'global/footer.php');
?>