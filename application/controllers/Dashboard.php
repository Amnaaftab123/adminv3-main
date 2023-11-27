<?php
class Dashboard extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
}

	public function index() {

		$this->data['title'] = "Fist Choice Cars Admin";
		$this->data['active'] = 'dashboard';
				
		$this->data['subview'] = 'common/dashboard';
    	$this->load->view('_layout',$this->data);

	}


}