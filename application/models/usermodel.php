<?php

//---------|______________|---------//
//	proGize Team - Robin Eberhard	//
//									//
//##################################//

class Usermodel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tablecollective');
		$this->lang->load('alert', 'en');
	}

	public function table_exists()
	{
		$this->tablecollective->create_table('users');
	}

	private function val_email( $email )
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
			return true;
		else
			return false;
	}

	public function create_user($username, $email, $password, $salt)
	{
		$this->table_exists();

		if (!$this->val_email($email))
			return $this->lang->line('alert_email_invalid');

		//I need some session data
		$sessiondata = $this->session->all_userdata();
		$session_id = $sessiondata['session_id'];

		//Gimmeh all users
		$check_users = $this->db->get('users');

		foreach ($check_users->result() as $row) {
			if (strtolower($row->username) == strtolower($username))
			return $this->lang->line('alert_username_taken');
			elseif (strtolower($row->email) == strtolower($email))
			return $this->lang->line('alert_email_taken');
			//elseif ($row->sessid == $session_id)					//Check if the user already registered an account
			//	return 'COME ON ISN\'T ONE USER ENOUGH OR WHAT';
		}

		//Soo you may enter the vortex
		$insert_data = array(
		   'username' => $username ,
		   'email' => $email,
		   'password' => $password,
		   'salt' => $salt,
		   'sessid' => $session_id
		);

		$create_user_q = $this->db->insert('users', $insert_data);

		//Punch the user for being dumb
		if ($create_user_q === false)
			return $this->lang->line('alert_random_error');
		else
			return $this->lang->line('alert_registration_successful');
	}

	public function get_user($username, $password)
	{
		//noow lets find $username
		$this->db->select('username')->from('users')->where('username', $username);

		$get_username_q = $this->db->get()->row_array();

		//And check if the user typed his username correctly
		if (isset($get_username_q['username']) && $get_username_q['username'] !== "") {
			//Get the salt
			$this->db->select('salt')->from('users')->where('username', $username);
			$salt = $this->db->get()->row_array();

			//Generate the password
			$hashpass = hash( "sha512", hash("sha512", $password) . $salt['salt'] );

			//Is the password correct? c-o-m-b-i-n-e
			$this->db->select('password')->from('users')->where('username', $username);
			$get_password_q = $this->db->get()->row_array();

			//Everything worked, now let's party
			$this->set_sessiondata($username);

			if ($get_password_q['password'] === $hashpass)
			return $this->lang->line('alert_login_successful');
		}
		return $this->lang->line('alert_password_wrong');
	}

	public function set_sessiondata($username, $return = false) {
			$this->db->select('username')->from('users')->where('username', $username);
			$session_userdata = $this->db->get()->row_array();

			$this->session->set_userdata($session_userdata);

			if ($return)
				return $this->lang->line('alert_login_successful');
	}

}