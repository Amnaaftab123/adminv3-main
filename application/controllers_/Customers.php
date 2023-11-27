<?php

class Customers extends MY_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('api_helper');
    $this->load->model('customers_m');
}


  function index(){

      $this->data['title'] = "Fist Choice Cars Customers";
      $this->data['page'] = "customers";
      $this->data['content'] = "retail";
      $this->data['deposit'] = $this->utilities_m->get_setting_value('deposit');
      
      
      $this->data['subview'] = 'admin/customers/listing';
    	$this->load->view('_layout', $this->data);

  }



  function listing_data(){

    try{

      $type = $this->input->get('type');
      $recordset = $this->customers_m->admin_get_all_customers($type);

      foreach($recordset as $object){
        $dataObject[] = array(
        "id"=>$object['id'],
        "full_name"=> $object['full_name'],
        "email"=>$object['email'],
        "country_code" => $object['country_code'],
        "mobile" => $object['phone_number'],
        "deposit"=> $object['deposit'],
        "total_bids"=> $object['total_bids'],
        "company_name"=> $object['company_name'],
        "license_number"=> $object['license_number'],
        "contact_person_name"=> $object['contact_person_name'],
        "office_number" => $object['office_number'],  
        "address" => $object['address'],  
        "total_auctions" => $object['total_auctions'],
        "edit" => "<a href='javascript:void(0)' onclick='request_deposit(".$object['id'].");'>Request Deposit</a> | <a href='". site_url('customers/form?id=' . $object['id']) ."'>view</a> | <a onClick='return confirm(\"Are you sure want to delete?\");' href='". site_url('items/form?action=delete&id=' . $object['id']) ."'>delete</a>"
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


function form(){
  $error = [];
  //Array ( [full_name] => Test User [email] => ri1zwan.zaffar@gmail.com [country_code] => 0 
  //[mobile_number] => 552567876 [username] => testuser [password] => 123456 
  //[customer_type] => 0 [enabled] => 1 [verified] => 1 [action] => add [upload] => 1 )
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      if($this->customers_m->email_already_exists(trim($this->input->post('email')))){
        $error[] = "Email address already exists";
      }

      if($this->customers_m->mobile_already_exists(trim($this->input->post('country_code')), trim($this->input->post('mobile_number')))){
        $error[] = "Mobile number already exists";
      }

      if($this->customers_m->username_already_exists(trim($this->input->post('username')))){
        $error[] = "Username already exists";
      }

      if(count($error) == 0){

        $this->customers_m->register_customer(
          array(
            'full_name' => $this->input->post('full_name'),
            'user_name' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'country_code' => $this->input->post('country_code'),
            'phone_number' => $this->input->post('mobile_number'),
            'account_type' => $this->input->post('customer_type'),
          )
        );
        redirect(site_url('customers'));
      }


      $this->data['submitted'] = true;

  }


  
    if ($this->input->get('id') != "" && $this->input->get('id') > 0 ){
        $this->data['edit_mode'] = true;
        $this->data['title'] = "Fist Choice Cars Edit Customer";

    }else {
        $this->data['title'] = "Fist Choice Cars Add Customer";
        $this->data['edit_mode'] = false;

    }

  $this->data['error'] = $error;
  $this->data['page'] = "customers";
  $this->data['content'] = "retail";



  $this->data['subview'] = 'admin/customers/form';
  $this->load->view('_layout', $this->data);

}



}
