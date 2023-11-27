<?php
class Utilities extends MY_Controller {
	
	public function __construct(){
		parent::__construct();
}

	public function make() {

		$this->data['title'] = "Fist Choice Cars Admin";
		$this->data['active'] = 'make';
		$this->data['sub'] = 'manage';
				
		$this->data['subview'] = 'utilities/make';
    	$this->load->view('_layout',$this->data);

	}

    public function model() {

		$this->data['title'] = "Fist Choice Cars Admin";
		$this->data['active'] = 'model';
		$this->data['sub'] = 'manage';

				
		$this->data['subview'] = 'utilities/model';
    	$this->load->view('_layout',$this->data);

	}


	public function trim() {

		$this->data['title'] = "Fist Choice Cars Admin";
		$this->data['active'] = 'trim';
		$this->data['sub'] = 'manage';

				
		$this->data['subview'] = 'utilities/trim';
    	$this->load->view('_layout',$this->data);

	}


	public function body() {

		$this->data['title'] = "Fist Choice Cars Admin";
		$this->data['active'] = 'body';
		$this->data['sub'] = 'manage';
				
		$this->data['subview'] = 'utilities/body';
    	$this->load->view('_layout',$this->data);

	}


	public function options() {

		$this->data['title'] = "Fist Choice Cars Admin";
		$this->data['active'] = 'options';
		$this->data['sub'] = 'manage';
				
		$this->data['subview'] = 'utilities/options';
    	$this->load->view('_layout',$this->data);

	}


	public function otypes() {

		$this->data['title'] = "Fist Choice Cars Admin";
		$this->data['active'] = 'otypes';
		$this->data['sub'] = 'manage';
				
		$this->data['subview'] = 'utilities/otypes';
    	$this->load->view('_layout',$this->data);

	}
	


}