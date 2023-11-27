<?php

class Inquiries extends MY_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('api_helper');
  }

  function buy(){

    $this->data['title'] = 'Buy inquiries';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Buy',
        'linked' => false,
        'active' => true
      )
    ));

    $this->data['active'] = 'buy';
    $this->data['subview'] = 'inquiries/buy';
    $this->load->view('_layout', $this->data);

  }


  function sell(){

    $this->data['title'] = 'Sell inquiries';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Sell',
        'linked' => false,
        'active' => true
      )
    ));

    $this->data['active'] = 'sell';
    $this->data['subview'] = 'inquiries/sell';
    $this->load->view('_layout', $this->data);

  }
}