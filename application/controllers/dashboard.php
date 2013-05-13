<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//---------|______________|---------//
//	proGize Team - Robin Eberhard	//
//									//
//##################################//

class Dashboard extends CI_Controller {

	public function index()
	{
	      	$structs = array( 
	      					'header' => array('global/header'),
	      					'section_header' => array('global/master_nav_container', 'global/master_tile_slider'),
	      					'section_main' => array('dashboard/dashboard', 'global/login_container'),
	      					'footer' => array('global/footer')
	      					);
		$this->load->view('struct/structure', array(
													'structs' => $structs,
													'sessiondata' => $this->session->all_userdata()
													));
	}

	public function create_project()
	{
		$this->load->view('dashboard/create_project');
	}
}