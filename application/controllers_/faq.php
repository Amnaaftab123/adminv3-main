<?php

class Faq extends CI_CMY_Controllerontroller {


  function __construct(){
    parent::__construct();
    $this->load->helper('api_helper');
    $this->load->model('faq_m');
}


  function listing(){

    if(!$this->admin_m->is_admin()){
      redirect("admin/login");
    }

      $data['page'] = "messaging";
      $data['item'] = "inquiries";

      $data['subview'] = 'admin/inquiries/listing';
      $this->load->view('admin/_layout_main', $data);

  }



  function listing_data(){

    try{
      $recordset = $this->messages_m->get_all_inquiries();

      foreach($recordset as $object){

          $dataObject[] = array(
          "id"=>$object->inquiry_id,
          "fullname"=> '<a href = "' .site_url('inquiries/details/'.$object->inquiry_id). '">' . $object->full_name . '</a>',
          "mobile"=>$object->mobile,
          "email"=>$object->email,
          "createddate"=>$object->created_date
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


}