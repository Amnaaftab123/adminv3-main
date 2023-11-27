<?php

class Templates extends MY_Controller {

  function __construct(){
    parent::__construct();

   $this->load->helper('api_helper');
    $this->load->model('templates_m');
}


  function index(){

        $this->data['title'] = "Templates";
        $this->data['active'] = "templates";
        $this->data['bread_grams'] = make_bread_grams(array(
          array(
            'title' => 'Dashboard',
            'linked' => site_url('dashboard'),
            'active' => false
          ),
          array(
            'title' => 'Templates',
            'linked' => false,
            'active' => true
          )
        ));

        $this->data['subview'] = 'templates/template-listing';
        $this->load->view('_layout', $this->data);
  
    }



    function listing_data(){

      $dataObject = [];

      try{
        $recordset = $this->templates_m->get_templates();
        
        foreach($recordset as $object){
          
          $dataObject[] = array(
          "id"=>$object['email_template_id'],
          "title" => $object['title'],
          "short_code"=>$object['short_code'],
          "sms"=>$object['sms'],
          "updated_at"=>$object['updated_at'],
          "actions" => "<a href='". site_url('templates/form?id=' . $object['email_template_id']) ."'>view</a>"
          );

        }

      
        $object = array("data"=>$dataObject);
        print_json($object);

    }catch(Exception $e){

      print_json(array(
          'result'=>'0',
          'data'=> array(
              'code'=>1011,
              'error'=>$e->getMessage()
          )));

    }
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

    $this->data['template'] = $this->templates_m->get_template_by_id($id);
    $this->data['success_url'] = site_url('templates');
    $this->data['active'] = 'template-add';
    $this->data['subview'] = 'templates/template-form';
    $this->load->view('_layout', $this->data);
  }



 

  

  }
