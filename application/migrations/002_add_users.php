<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_users extends CI_Migration {

      // $fields = array(
      //                   'session_id' => array(
      //                                            'type' => 'VARCHAR',
      //                                            'constraint' => '40',
      //                                            'default' => 0
      //                                     ),
      //                   'ip_address' => array(
      //                                            'type' => 'VARCHAR',
      //                                            'constraint' => '45',
      //                                            'default' => 0
      //                                     ),
      //                   'user_agent' => array(
      //                                            'type' =>'VARCHAR',
      //                                            'constraint' => '120'
      //                                     ),
      //                   'last_activity' => array(
      //                                            'type' => 'INT',
      //                                            'constraint' => '10',
      //                                            'unsigned' => true,
      //                                            'default' => 0,
      //                                     ),
      //                   'user_data' => array(
      //                                            'type' => 'TEXT'
      //                                     ),
      //                   );
      //                   $this->dbforge->add_key('session_id', true);
      //                   $this->dbforge->add_key('last_activity');

      //                   $this->dbforge->add_field($fields);
      //                   $this->dbforge->create_table('pg_sessionas', true);

      private function users()
      {
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


            $this->dbforge->add_field($fields);
            $this->dbforge->create_table('users', true);
      }

      public function up()
      {
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


            $this->dbforge->add_field($fields);
            $this->dbforge->create_table('users', true);
      }

      public function down()
      {
            $this->dbforge->drop_table('users');
      }

}