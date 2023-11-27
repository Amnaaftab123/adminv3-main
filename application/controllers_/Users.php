<?php

class Users extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('users_m');
  }


  function index()
  {

    $this->data['title'] = "Users";
    $this->data['active'] = 'users';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Users',
        'linked' => false,
        'active' => true
      )
    ));
    $this->data['add_url'] = site_url('users/add');

    $this->data['subview'] = 'users/user-listing';
    $this->load->view('_layout', $this->data);
  }

  function add()
  {

    $this->data['title'] = 'Add User';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Users',
        'linked' => site_url('users'),
        'active' => false
      ),
      array(
        'title' => 'Add User',
        'linked' => false,
        'active' => true
      )
    ));

    $this->data['success_url'] = site_url('users');
    $this->data['active'] = 'user-add';
    $this->data['subview'] = 'users/user-form';
    $this->load->view('_layout', $this->data);
  }


  function edit($id)
  {

    if($id < 1 || $id == ""){
        redirect(site_url('usrs'));
    }
    $this->data['title'] = 'Edit User';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Users',
        'linked' => site_url('users'),
        'active' => false
      ),
      array(
        'title' => 'Edit User',
        'linked' => false,
        'active' => true
      )
    ));

    $this->data['user'] = $this->users_m->get_user($id);
    $this->data['success_url'] = site_url('users');
    $this->data['active'] = 'user-add';
    $this->data['subview'] = 'users/user-form';
    $this->load->view('_layout', $this->data);
  }

}
