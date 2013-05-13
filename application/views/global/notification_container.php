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