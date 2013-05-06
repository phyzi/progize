<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->dbforge();

		$fields = array(
                        'session_id' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '40',
                                                 'default' => 0
                                          ),
                        'ip_address' => array(
                                                 'type' => 'VARCHAR',
                                                 'constraint' => '45',
                                                 'default' => 0
                                          ),
                        'user_agent' => array(
                                                 'type' =>'VARCHAR',
                                                 'constraint' => '120'
                                          ),
                        'last_activity' => array(
                                                 'type' => 'INT',
                                                 'constraint' => '10',
                                                 'unsigned' => true,
                                                 'default' => 0,
                                          ),
                        'user_data' => array(
                                                 'type' => 'TEXT'
                                          ),
                        );

				$this->dbforge->add_key('session_id', true);
				$this->dbforge->add_key('last_activity');



		$this->dbforge->add_field($fields);
		$this->dbforge->create_table('pg_sessions', true);


		//Hey thar u new to this? Let me introduce you to the pg_sessions table!
		// $this->load->model('tablecollective');

		// $this->tablecollective->create_table('pg_sessions');

		$this->load->view('welcome/welcome', array( 'sessiondata' => $this->session->all_userdata() ));
	}
}