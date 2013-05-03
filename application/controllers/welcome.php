<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome/welcome', array( 'sessiondata' => $this->session->all_userdata() ));
	}
	
}