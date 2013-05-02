<?php

class Usermodel extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

	function table_exists()
	{
		//Does the table exist?
		$check_q = $this->db->get('users');
		$check_q = $check_q->result_array();

		if ( empty($check_q) == false ) {
			//We gotta create the table			
			$create_table_q = "CREATE TABLE users (
					         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					         username VARCHAR(20) NOT NULL,
					         email varchar(30) NOT NULL,
					         password varchar(128) NOT NULL,
					         salt varchar(128) NOT NULL
					       ) CHARACTER SET utf8 COLLATE utf8_general_ci ;";
			$this->db->simple_query($create_table_q);
		}
	}

	function create_user($username, $email, $password, $salt)
	{
		//Alright so this checks if @ or . are inside the $email string. And if @ and . are too close together (like this teletubbies@.com)
		$atpos = strpos($email, '@');
		if($atpos == 1 || strpos($email, '.', $atpos) - $atpos || strpos($email, '@') == false || strpos($email, '.') == false)
			return 'This E-Mail is invalid.';
		else
			return 'atpos: ' . $atpos . ' pointpos: ' . strpos($email, '.', $atpos) . 'atpos - pointpos: ' . strpos($email, '.', $atpos) - $atpos;

		//Gimmeh all users
		$check_users = $this->db->get('users');

		foreach ($check_users->result() as $row) {
			if (strtolower($row->username) === strtolower($username))
				return 'Sorry this username has already been taken';
			elseif (strtolower($row->email) === strtolower($email))
				return 'Sorry this E-Mail has already been taken';
		}

		//Soo you may enter the vortex
		$insert_data = array(
		   'username' => $username ,
		   'email' => $email,
		   'password' => $password,
		   'salt' => $salt
		);

		$create_user_q = $this->db->insert('users', $insert_data);

		//Punch the user for being dumb
		if ($create_user_q === false)
			return 'Something went terribly terribly wrong';
		else
			return 'Success! You are now part of proGize!';
	}

	function get_user($username, $password)
	{
		//noow lets find $username
		$get_username_q = $this->db->get('users')->where('username', $username);
		$get_username_q = $get_username_q->row_array();

		//And check if the user typed his username correctly
		if (isset($get_username_q['username']) && $get_username_q['username'] !== "") {
			//Get the salt
			$salt = $this->db->select('salt')->from('users')->where('username', $username);
			$salt = $salt->row_array();

			//Generate the password
			$hashpass = hash( "sha512", hash("sha512", $password) . $salt['salt'] );

			//Is the password correct? c-o-m-b-i-n-e
			$get_password_q = $this->db->select('password')->from('users')->where('username', $username);
			$get_password_q = $get_password_q->row_array();

			if ($get_password_q['password'] === $hashpass)
				return 'Well done!';
		}
		return 'That did not work out well...';
	}

}