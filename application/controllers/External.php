<?php

class External extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('users_m');
  }


  function sales($id = 0)
  {

    $this->data['title'] = "Sales request";
    $this->data['active'] = 'sales';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Sale requests',
        'linked' => false,
        'active' => true
      )
    ));


    $this->data['subview'] = 'external/sales-listing';
    $this->load->view('_layout', $this->data);
  }

  

}
