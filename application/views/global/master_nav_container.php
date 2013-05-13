<?php
	$master_tileslider_tiles[] = array('title' => 'Project X');
	$master_tileslider_tiles[] = array('title' => 'Project Y');
	$master_tileslider_tiles[] = array('title' => 'Project Z');
	$master_tileslider_tiles[] = array('title' => 'Project A');
	$master_tileslider_tiles[] = array('title' => 'Project B');
	$master_tileslider_tiles[] = array('title' => 'Project C');
?>

<div id="master_nav_container">
	<div id="master_nav_section_right">
		<div id="master_nav_tiles_scroller_left" class="tile_scroller"><div class="arrow"></div></div>
	</div>
	<div id="master_nav_section_left">
		<div class="color_main_0" style="height: 2em"></div>
		<div id="master_nav_branding" class="color_main_1">
			<div class="item_text">ProGize</div>
		</div>
		<div id="master_nav_search" class="color_main_2">
			<form class="form_wrapper"><input type="text" class="input_text"/></form>
		</div>
	</div>
</div>
<div id="master_nav_tiles_scroller_right" class="tile_scroller"><div class="arrow"></div></div>
<div id="master_nav_tiles" class="tiles">
<?php
	foreach ($master_tileslider_tiles as $tile_data) {
?>
		<div class="tile">
			<div class="title">
				<div class="item_text"><?=$tile_data['title']?></div>
			</div>
			<div class="content"></div>
		</div>
<?php
	}
?>
</div>