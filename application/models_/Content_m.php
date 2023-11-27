<?php
class Content_m extends MY_Model {


  public function __construct(){
      parent::__construct();
  }


	  function get_content_title($page, $module, $type, $lang = 1){

	  	$data = $this->db->query("
	  		SELECT c.meta_title, ml.content_text as title FROM ".DB_PREFIX."contents c  
	  		LEFT JOIN ".DB_PREFIX."multi_langual ml ON c.content_id = ml.record_id WHERE c.page = '" . $page . "' AND ml.module = '" . $module . "' AND  ml.content_type = '" . $type .  "' AND ml.language_id = '" . get_language() . "'
	  		");
//echo $this->db->last_query();exit();
	  		return $data->row();

	  }


	  function get_all_contents(){
	  	$data = $this->db->query("
	  		SELECT c.content_id, c.title, c.page, c.module, c.last_updated from ".DB_PREFIX."contents c order by title
	  		");

	  	return $data->result();
	  }




	  function get_content($module,  $id){


	  $result = $this->db->query("SELECT c.content_id, c.title, c.meta_title, c.meta_description, c.module, 

	  	(select content_text FROM multi_langual WHERE content_type = '$module' AND module = 'contents' AND record_id = '" . $id . "' AND language_id = 1 AND record_id = c.content_id) as description_english, 


	  	(select content_text FROM multi_langual WHERE content_type = '$module' AND module = 'contents' AND record_id = '" . $id . "' AND language_id = 2 AND record_id = c.content_id) as description_arabic FROM contents c
	  	where c.content_id = '" .$id. "'");

//	  echo $this->db->last_query();exit();

	  return $result->row();

}








	function update_content($data){

		$this->db->query("UPDATE contents SET meta_title = '".$data['meta_title']."', 
			meta_description = '".$data['meta_description']."', 
			last_updated = '" .date("Y-m-d H:i:s", time()). "' 
			WHERE content_id = '".$data['id']."'");


		$this->db->query("UPDATE multi_langual SET content_text = \"".$data['descriptionEnglish']."\" WHERE module = 'contents' AND  record_id = '".$data['content_id']."' AND language_id = '1'");

		$this->db->query("UPDATE multi_langual SET content_text = \"".$data['descriptionArabic']."\" WHERE module = 'contents' AND  record_id = '".$data['content_id']."' AND language_id = '2'");


	}








































































}
