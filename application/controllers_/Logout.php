<?php

class Logout extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model('users_m');

	}

	public function index() {


    if($this->users_m->logout_call()){
      
      $this->session->unset_userdata("is_admin");
      $this->session->unset_userdata("user_session");
      redirect("login");
    
    }

  

	}




	









}