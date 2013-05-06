<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_handling extends CI_Controller {

	public function index()
	{

	}

	public function login()
	{
		$this->load->model('usermodel');

		$user = array(	'username' => $this->input->post('username'),
						'password' => $this->input->post('password')	
					);

		$result = $this->usermodel->get_user($user['username'], $user['password']);

		$this->load->view('user_handling/login', array( 'result' => $result ) );
	}

	public function logout()
	{
		//KILL THE EVIL SESSION DATA
		$userdata = $this->session->all_userdata();
		unset($userdata['session_id']);
		unset($userdata['ip_address']);
		unset($userdata['user_agent']);
		unset($userdata['last_activity']);

		$this->session->unset_userdata($userdata);

		$this->load->view('user_handling/logout');
	}

	private function rand_string( $length ) {
		$str = "";

		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";	
		
		$size = strlen( $chars );
		for( $i = 0; $i < $length; $i++ ) {
			$str .= $chars[ rand( 0, $size - 1 ) ];
		}
		
		return $str;
	}

	public function register()
	{
		$new_user = array(	'username' => $this->input->post('username'),
							'email' => $this->input->post('email'),
							'password' => $this->input->post('password'),
							'password_r' => $this->input->post('password_r'),
							'salt' => hash("sha512", $this->rand_string(20))
						);

		

		if ($new_user['password'] !== $new_user['password_r']) {
			$result = 'passwordwrong';
		} else {
			$new_user['password'] = hash("sha512", hash("sha512", $new_user['password']) . $new_user['salt']);

			$this->load->model('usermodel');

			$result = $this->usermodel->create_user($new_user['username'], $new_user['email'], $new_user['password'], $new_user['salt']);

		}

		$this->load->view('user_handling/register', array('result' => $result));
	}

}