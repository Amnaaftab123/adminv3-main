<?php

class Showrooms extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('users_m');
  }


  function index()
  {

    $this->data['title'] = "Showrooms";
    $this->data['active'] = 'showrooms';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Showrooms',
        'linked' => false,
        'active' => true
      )
    ));
    $this->data['add_url'] = site_url('showrooms/add');

    $this->data['subview'] = 'showrooms/showroom-listing';
    $this->load->view('_layout', $this->data);
  }

  function add()
  {

    $this->data['title'] = 'Add Role';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Users',
        'linked' => site_url('roles'),
        'active' => false
      ),
      array(
        'title' => 'Add Role',
        'linked' => false,
        'active' => true
      )
    ));

    $this->data['success_url'] = site_url('showrooms');
    $this->data['active'] = 'showroom-add';
    $this->data['subview'] = 'showrooms/showroom-form';
    $this->load->view('_layout', $this->data);
  }


  function edit($id)
  {

    if($id < 1 || $id == ""){
        redirect(site_url('usrs'));
    }
    $this->data['title'] = 'Edit Role';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Users',
        'linked' => site_url('roles'),
        'active' => false
      ),
      array(
        'title' => 'Edit Role',
        'linked' => false,
        'active' => true
      )
    ));

    $this->data['role'] = $this->users_m->get_user($id);
    $this->data['success_url'] = site_url('roles');
    $this->data['active'] = 'role-add';
    $this->data['subview'] = 'roles/role-form';
    $this->load->view('_layout', $this->data);
  }

}
