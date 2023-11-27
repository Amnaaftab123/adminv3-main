<?php

class Vehicles extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('vehicles_m', 'mv');
  }


  function index()
  {

    $this->data['title'] = "Our Fleets";
    $this->data['active'] = 'vehicles';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Our Vehicles',
        'linked' => false,
        'active' => true
      )
    ));

    $this->data['ajax'] = array('url' => site_url('ajax/get_vehicles'));
    $this->data['add'] = site_url('vehicles/add');
    $this->data['subview'] = 'vehicles/vehicle-listing';
    $this->load->view('_layout', $this->data);
  }

  function add()
  {

    $this->data['title'] = 'Add Vehicle';
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Our Vehicles',
        'linked' => site_url('vehicles'),
        'active' => false
      ),
      array(
        'title' => 'Add Vehicles',
        'linked' => false,
        'active' => true
      )
    ));
    $this->data['edit_mode'] = false;
    $this->data['active'] = 'vehicles-add';
    $this->data['subview'] = 'vehicles/vehicle-form';
    $this->load->view('_layout', $this->data);
  }

  function edit($id)
  {
    $this->data['title'] = 'Edit Vehicle';
    $this->data['vehicle'] = $this->mv->get_vehicle($id);
    $this->data['bread_grams'] = make_bread_grams(array(
      array(
        'title' => 'Dashboard',
        'linked' => site_url('dashboard'),
        'active' => false
      ),
      array(
        'title' => 'Our Vehicles',
        'linked' => site_url('vehicles'),
        'active' => false
      ),
      array(
        'title' => 'Edit Vehicles',
        'linked' => false,
        'active' => true
      )
    ));
    $this->data['edit_mode'] = true;
    $this->data['active'] = 'vehicles-add';
    $this->data['subview'] = 'vehicles/vehicle-form';
    $this->load->view('_layout', $this->data);
  }



}
