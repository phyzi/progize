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