<?php

class Requests extends MY_Controller {

  function __construct(){
        parent::__construct(); 
        $this->load->model('request_m');
  }

  function index(){

    $this->data['title'] = "Fist Choice Cars Payment Requests";
    $this->data['page'] = "manage";
    $this->data['content'] = "requests";
    $this->data['deposit'] = $this->utilities_m->get_setting_value('deposit');

    $this->data['subview'] = 'admin/requests/listing';
    $this->load->view('_layout', $this->data);

  }



  function listing_data(){

  try{
        $recordset = $this->request_m->get_all_requests();
        $dataObject = [];
        $counter = 1;
        foreach($recordset as $object){
          $dataObject[] = array(
          "id"=> $counter,
          "title"=> ((ucwords($object['customer_name']) == "") ? ucwords($object['full_name']) : ucwords($object['customer_name'])),
          "mobile_number"=> ((($object['customer_phone']) == "") ? ($object['phone_number']) : ($object['customer_phone'])),
          "created_date"=> $object['created_at'],        
          "expire" => $object['expired_at'],
          "tiny_url" => $object['tiny_url'] . ' &nbsp;&nbsp;<a title = "Copy url" href = "javascript:void(0)" onclick = "copy_url(\''. $object['tiny_url'] .'\')"><i class="fa fa-copy"></i></a> &nbsp;&nbsp;<a title = "Open url" href = "javascript:void(0)" onclick = "window.open(\''. $object['tiny_url'] .'\')"><i class="fa fa-share"></i></a>',
          "auction_title" => $object['title'],
          "status" => ucwords($object['status']),
          "view" => "<a href='javascript:void(0)'>resend</a>"
        );
          $counter++;
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