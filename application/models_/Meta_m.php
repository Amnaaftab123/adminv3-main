<?php
class Meta_m extends MY_Model {


  public function __construct(){
		parent::__construct();
	}

  public function get_meta_data(){

    $result = $this->db->query("SELECT * FROM tbl_meta_data ORDER BY name");
    return $result->result_array();

  }

  public function get_meta_by_id($id){
      $result = $this->db->query("SELECT t.* FROM tbl_meta_data t 
      WHERE id =  "  . $this->db->escape($id));

      if($result->num_rows() > 0){
          return $result->row_array();
      }else {
        return false;
      }

  }


  public function get_template_by_keyword($keyword, $language){

    $result = $this->db->query("SELECT constants, sender_name, subject, template, t.sms, td.sms as sms_content, td.template,  t.email FROM "  . DB_PREFIX . "email_templates t 
    LEFT JOIN " . DB_PREFIX . "email_notifications_description td ON t.email_template_id = td.email_template_id 
    WHERE t.short_code = " . $this->db->escape($keyword) . " AND td.language_id = " . $this->db->escape($language));
    
    if($result->num_rows() > 0){
      return $result->row_array();

    }else {
      return false;

    }  
  }


};
 ?>
