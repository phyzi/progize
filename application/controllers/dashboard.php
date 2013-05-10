<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//---------|______________|---------//
//	proGize Team - Robin Eberhard	//
//									//
//##################################//

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard/dashboard');
	}

	public function create_project()
	{
		$this->load->view('dashboard/create_project');
	}
}