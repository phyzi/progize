<?php
	$master_tileslider_tiles[] = array('title' => 'Project X');
	$master_tileslider_tiles[] = array('title' => 'Project Y');
	$master_tileslider_tiles[] = array('title' => 'Project Z');
	$master_tileslider_tiles[] = array('title' => 'Project A');
	$master_tileslider_tiles[] = array('title' => 'Project B');
	$master_tileslider_tiles[] = array('title' => 'Project C');
?>

<!-- Master tile slider -->
<div id="master_tileslider_container" class="tileslider_container">
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
	<div class="shadow_left"></div>
	<div class="shadow_right"></div>
</div>