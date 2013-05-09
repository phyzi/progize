<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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