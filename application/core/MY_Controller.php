<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
  protected $data = array();
  function __construct()
  {
    parent::__construct();
    $this->load->language('common/dashboard');
    $this->data['pagetitle'] = 'My CodeIgniter App';
    $this->load->language('common/dashboard');

    if(!is_login()){
      redirect('login');
    }

  }
}