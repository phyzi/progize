<?php

//---------|______________|---------//
//    proGize Team - Robin Eberhard //
//                                                    //
//##################################//

class tablecollective extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function create_table( $table )
	{
		switch($table) {
			case 'pg_sessions':
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
				break;

			case 'users':
				$fields = array(
                        'id' => array(
			                             'type' => 'INT',
			                             'auto_increment' => true
					                      ),
                        'username' => array(
                                                'type' => 'VARCHAR',
                                                'constraint' => '20'
                                          ),
                        'email' => array(
                                                'type' => 'VARCHAR',
                                                'constraint' => '30'
                                          ),
                        'password' => array(
                                                'type' => 'VARCHAR',
                                                'constraint' => '128'
                                          ),
                        'salt' => array(
                                                'type' => 'VARCHAR',
                                                'constraint' => '128'
                                          ),
                        'sessid' => array(
                                                'type' => 'VARCHAR',
                                                'constraint' => '32'
                                          ),
				);
				$this->dbforge->add_key('id', true);
				break;
                        
		}

		$this->dbforge->add_field($fields);
		$this->dbforge->create_table($table, true);
	}

}