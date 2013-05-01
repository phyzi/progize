<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_handling extends CI_Controller {

	public function index()
	{

	}

	public function login()
	{
		$this->load->model('usermodel');

		$this->load->view('user_handling/login');
	}

	public function register()
	{
		$new_user = array(	'username' => $this->input->post('username'),
							'email' => $this->input->post('email'),
							'password' => $this->input->post('password'),
							'password_r' => $this->input->post('password_r')
						);

		if ($new_user['password'] !== $new_user['password_r'])
			$result = 'passwordwrong';
		else {

			$this->load->model('usermodel');

			$this->usermodel->table_exists();
			$result = $this->usermodel->create_user($new_user['username'], $new_user['email'], $new_user['password'], 'nosalt');

		}

		$this->load->view('user_handling/register', array('result' => $result));
	}

}