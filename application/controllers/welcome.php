<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//Hey thar u new to this? Let me introduce you to the pg_sessions table!
      	$this->load->model('tablecollective');

      	$this->tablecollective->create_table('pg_sessions');

		$this->load->view('welcome/welcome', array( 'sessiondata' => $this->session->all_userdata() ));
	}
}