<?php 
	//we need the form helper
	$this->load->helper('form');
	//This is just a library i need to generate urls
	$this->load->helper('url');
?>

<?php
		
	include($this->view('global/header'));

?>

<div id="section_sidebar_left">
			
	<?php
		include($this->view('global/master_nav_container'));
	?>
			
</div>

<div id="section_sidebar_right">
	
	<?php
		include($this->view('global/login_container'));
	?>

</div>

<div id="section_main">

	<?php
		include($this->view('global/master_tile_slider'));
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
	include($this->view('global/footer'));
?>