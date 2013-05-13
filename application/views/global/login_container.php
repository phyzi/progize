<div id="main_sidebar_right">

<!-- Login container -->
<div id="login_container">

<?php
	if (isset($sessiondata['username']) && $sessiondata['username'] != "") {
		// user is logged in
?>
		<div id="login_head_item_logout" class="item head_item">
			<a href="<?=site_url('user_handling/logout')?>"><div class="item_text">LOGOUT</div></a>
		</div>
		<div class="item"></div>
		<div id="login_head_item_profile" class="item head_item">
			<a href="<?=site_url('profile/profile')?>"><div class="item_text">PROFILE</div></a>
		</div>
		<div class="item"></div>
<?php
	} else {
		// Get an account please
?>
		<div id="login_head_item_login" class="item head_item">
			<div class="item_text">LOGIN</div>
		</div>
		<div id="login_form_item_login" class="item">
			<form class="form_wrapper">
				<input type="text" class="input_text"/>
				<input type="text" class="input_text"/>
				<input type="submit"/>
			</form>
		</div>
		
		<div id="login_head_item_register" class="item head_item">
			<div class="item_text">REGISTER</div>
		</div>	
		<div id="login_form_item_register" class="item">
			<form class="form_wrapper">
				<input type="text" class="input_text"/>
				<input type="text" class="input_text"/>
				<input type="text" class="input_text"/>
				<input type="text" class="input_text"/>
				<input type="submit"/>
			</form>
		</div>
<?php
	}
?>
					
</div>

<?php
    $notifications = array();
    $notifications[] = array('date' => 'Yesterday, 13:37h', 'msg' => 'LrdVldmrt sent you a private message: "seen h. p. lately??"');
    $notifications[] = array('date' => 'Yesterday, 13:36h', 'msg' => 'LrdVldmrt wants to join your project "RuleTheWorld"');
    $notifications[] = array('date' => 'Yesterday, 13:35h', 'msg' => 'Your edited "RuleTheWorld"\'s description.');
    $notifications[] = array('date' => 'Yesterday, 13:34h', 'msg' => 'You created the project "RuleTheWorld".');
?>

<?php
if (isset($sessiondata['username']) && $sessiondata['username'] != "") {
	// user is logged in
?>
	<div id="notification_container">

		<div class="head_item">
    		<div class="item_text">NOTIFICATIONS</div>
		</div>
		<?php
    		foreach ($notifications as $row => $notif) {
        ?>
        	
        	<div class="item<?=(($row%2==0)?' alternate':'')?>">
        	   <div class="item_text"><p class="small"><?=$notif['date']?>:</p><p><?=$notif['msg']?></p></div>
        	</div>	
        
        <?php
    		}
		?>
<?php
    }
?>

</div>