<?php

class System extends CI_Controller {



  function __construct(){
        parent::__construct(); 
        $this->load->model('utilities_m');
  }

  function index(){

      if($this->input->post('update') == "1"){
          foreach($_POST as $key => $value){
            if(is_int($key)){
              $this->settings_m->update_basic_setting($key, $value);
            }
          }
      }
      
        $this->data['title'] = "System";
        $this->data['active'] = "system";
        $this->data['bread_grams'] = make_bread_grams(array(
          array(
            'title' => 'Dashboard',
            'linked' => site_url('dashboard'),
            'active' => false
          ),
          array(
            'title' => 'Meta Data',
            'linked' => false,
            'active' => true
          )
        ));

        $this->data['system'] = $this->utilities_m->get_settings();
        $this->data['subview'] = 'system/system-listing';
        $this->load->view('_layout', $this->data);
  
  }



}