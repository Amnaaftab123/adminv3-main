<?php

class Invite extends MY_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('request_m');

}


  function deposit(){

    // $this->db->query("INSERT INTO " . DB_PREFIX . "payment_request SET
    // mobile_number = " . $this->db->escape($data['mobile_number']) . ",
    // full_name = " . $this->db->escape($data['full_name']) . ",
    // email = " . $this->db->escape($data['email']) . ",
    // customer_id = " . $this->db->escape($data['customer_id']) . ",
    // created_at = " . $this->db->escape(date("Y-m-d H:i:s")) . ",
    // expired_at = " . $this->db->escape(date("Y-m-d H:i:s", (time() + 24*60*60))) . ",
    // amount = " . $this->db->escape($data['amount']) . "
    // type = " . $this->db->escape($data['type']));
        


        $this->data['subview'] = 'admin/auctions/listing';
        $this->load->view('_layout', $this->data);

    }
  

  }
