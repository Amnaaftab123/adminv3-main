<?php

class Meta extends MY_Controller {

  function __construct(){
    parent::__construct();

   $this->load->helper('api_helper');
    $this->load->model('meta_m');
}


  function index(){

        $this->data['title'] = "Meta Data";
        $this->data['active'] = "meta";
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

        $this->data['subview'] = 'meta/meta-listing';
        $this->load->view('_layout', $this->data);
  
    }

  function edit($id)
  {

    if($id < 1 || $id == ""){
        redirect(site_url('meta'));
    }
    $this->data['title'] = 'Edit Meta';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Meta Data',
        'linked' => site_url('meta'),
        'active' => false
      ),
      array(
        'title' => 'Edit Meta',
        'linked' => false,
        'active' => true
      )
    ));

    $this->data['meta'] = $this->meta_m->get_meta_by_id($id);
    $this->data['success_url'] = site_url('meta');
    $this->data['active'] = 'meta-add';
    $this->data['subview'] = 'meta/meta-form';
    $this->load->view('_layout', $this->data);
  }



 

  

  }
