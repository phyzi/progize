<?php

class Usermodel extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}

	function table_exists()
	{
		$check_q = "SELECT * from users";
		if (!$this->db->simple_query($check_q)) {
			//We gotta create the table
			$create_table_q = "CREATE TABLE users (
					         id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
					         username VARCHAR(20) NOT NULL,
					         email varchar(30) NOT NULL,
					         password varchar(15) NOT NULL,
					         salt varchar(15) NOT NULL
					       ) CHARACTER SET utf8 COLLATE utf8_general_ci ;";
			$this->db->simple_query($create_table_q);
		}
	}

	function create_user($username, $email, $password, $salt)
	{
		if (strpos($email, '@') === false || strpos($email, '.') === false)
			return 'This E-Mail is invalid.';

		$check_users = $this->db->query("SELECT * FROM users");

		foreach ($check_users->result() as $row) {
			if (strtolower($row->username) === strtolower($username))
				return 'Sorry this username has already been taken';
			elseif (strtolower($row->email) === strtolower($email))
				return 'Sorry this E-Mail has already been taken';
		}

		$create_user_q = $this->db->simple_query("	INSERT INTO users(username, email, password, salt)
													VALUES ('" . $username . "', '" . $email . "', '" . $password . "', '" . $salt . "');
												");
		if ($create_user_q === false)
			return 'Something went terribly terribly wrong';
		else
			return 'Success! You are now part of proGize!';
	}

	function get_user()
	{

	}

}