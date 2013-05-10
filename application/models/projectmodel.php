<?php

//---------|______________|---------//
//	proGize Team - Robin Eberhard	//
//									//
//##################################//

class Projectmodel extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tablecollective');
		$this->lang->load('alert', 'english');
	}

	public function create_project($name)
	{
		$this->tablecollective->create_table('projects');

		
	}
}