<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//---------|______________|---------//
//	proGize Team - Robin Eberhard	//
//									//
//##################################//

class Welcome extends CI_Controller {

	public function index()
	{
		//Hey thar u new to this? Let me introduce you to the pg_sessions table!
      	$this->load->model('tablecollective');

      	$this->tablecollective->create_table('pg_sessions');

      	//////////////////////////////////////////////////////////////////////////////////////////////////
      	//	This struct array is given to the sctructure view  											//
      	//	What will happen:																			//
      	//	If the array is array( 'id' => array( 'content' ));											//
      	//	Then the result will be 																	//	
      	//	<div id="id"> </div> 																		//
      	//	Between the div tags, the content view will be loaded and the contents within this file. 	//
      	// 	If your content file is in a folder just type it: folder/content 							//
      	//	Call me maybe if you need more help 														//
	      	$structs = array( 
	      					'header' => array('global/header'),
	      					'section_sidebar_left' => array('global/master_nav_container'),
	      					'section_sidebar_right' => array('global/login_container'),
	      					'section_header' => array('global/master_tile_slider'),
	      					'section_main' => array('welcome/welcome'),
	      					'footer' => array('global/footer')
	      				);
	    // *** Until here, the rest should'nt really matter to you 									*** //
	    //////////////////////////////////////////////////////////////////////////////////////////////////

		$this->load->view('struct/structure', array(
													'structs' => $structs,
													'sessiondata' => $this->session->all_userdata()
													));
	}
}