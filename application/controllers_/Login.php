<?php

class Login extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_m');

	}

	public function index() {

		if(is_login()){
			redirect('dashboard');
		  }
	  
		$this->data['title'] = "Fist Choice Cars | Login";		
		$this->load->view('common/login', array("data" => $this->data));
	}

	function logout(){

		if($this->users_m->logout_call()){

			$this->session->unset_userdata("isadmin");
			$this->session->unset_userdata("userdata");
			redirect("admin/login");

		}

	}
}