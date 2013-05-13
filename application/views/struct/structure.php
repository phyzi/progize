<?php

//	proGize Team - Robin Eberhard	//
//##################################//
//	DONT CHANGE THIS file 			//
//	OR IMA SCREW YOU UP 			//
//	or the server will i dunno 		//
//##################################//

	//we need the form helper
	$this->load->helper('form');
	//This is just a library i need to generate urls
	$this->load->helper('url');
?>

<?php

	foreach ($structs as $struct => $v) {
		// $struct is the div

		if($struct === 'header' || $struct === 'footer') {
			foreach ($v as $view) {
				$this->view($view);
			}
		} else {
			echo '<div id="' . $struct . '">';

			foreach ($v as $view) {
				$this->view($view);
			}

			echo '</div>';
		}
	}

?>