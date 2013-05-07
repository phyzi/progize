<?php

class Usermodel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tablecollective');
	}

	public function table_exists()
	{
		$this->tablecollective->create_table('users');
	}

	private function val_email( $email )
	{
		$email_validation_expression = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/";
		$email_return = preg_match($email_validation_expression, $email);

		if ($email_return === 0 || $email_return === FALSE)
			return false;
		else
			return true;

	}

	public function create_user($username, $email, $password, $salt)
	{
		$this->table_exists();

		if (!$this->val_email($email))
			return 'This email is invalid';

		//I need some session data
		$sessiondata = $this->session->all_userdata();
		$session_id = $sessiondata['session_id'];

		//Gimmeh all users
		$check_users = $this->db->get('users');

		foreach ($check_users->result() as $row) {
			if (strtolower($row->username) == strtolower($username))
				return 'Sorry this username has already been taken';
			elseif (strtolower($row->email) == strtolower($email))
				return 'Sorry this E-Mail has already been taken';
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
			return 'Something went terribly terribly wrong...';
		else
			return 'Success! You are now part of proGize!';
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
			$this->db->select('username', 'email')->from('users')->where('username', $username);
			$session_userdata = $this->db->get()->row_array();

			$this->session->set_userdata($session_userdata);

			if ($get_password_q['password'] === $hashpass)
				return 'You are now logged in. Have fun!';
		}
		return 'Incorrect password. Cannot *bzz* query *bzz* <b>self destruct initiated</b>';
	}

}