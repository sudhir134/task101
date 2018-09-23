<?php

class Tasks extends CI_Controller
{

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->add();
	}


	//add tasks with groups 
	public function add(){
		if($this->input->post('task')){
			
		}else{
			$this->template->load('template','add_tasks');
		}
	}
}