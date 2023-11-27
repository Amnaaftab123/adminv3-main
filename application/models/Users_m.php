<?php

class Users_m extends CI_Model {


  protected $_table_name = 'user';
  protected $_primary_key = 'id';

	public function __construct(){
		parent::__construct();
	}

	function login_call($data){

		$this->db->where('user_name',$data['user_name']);
		$this->db->where("password",md5($data['password']));
		$this->db->where("enabled",1);

		$result= $this->db->get(DB_PREFIX . 'user');

		if($result->num_rows() > 0 )
			return $result->row_array();
		else return false;
	}

	function get_users(){
		$result = $this->db->query("SELECT u.*, g.name as group_name FROM " . DB_PREFIX . "user u 
		LEFT JOIN " . DB_PREFIX . "user_group g ON u.user_group_id = g.id ORDER BY user_name");

		if($result->num_rows() > 0){
			return $result->result_array();
		}else {
			return false;
		}
	}


	function add_user($data){

		$error = false;

		if($data['user_id'] == '0'){
			
			$result = $this->db->query("SELECT id FROM " . DB_PREFIX ."user WHERE user_name = " . $this->db->escape($data['user_name']));
			if($result->num_rows() > 0){
				return 'exists';
				$error = true;
				die;
			}

		}
		

		if($data['user_id'] == '0'){
			$rs = $this->db->query("SELECT id FROM " . DB_PREFIX ."user WHERE contact_number = " . $this->db->escape($data['contact_number']));
		}else {
			$rs = $this->db->query("SELECT id FROM " . DB_PREFIX ."user WHERE contact_number = " . $this->db->escape($data['contact_number']) . " AND id <> " . $this->db->escape($data['user_id']));
		}
		
		if($rs->num_rows() > 0){
			return 'contact_exists';
			$error = true;
			die;
		}

			if(!$error){

				if($data['user_id'] == '0'){
						$this->db->query(
						"INSERT INTO " . DB_PREFIX . "user SET 
						user_group_id = " . $this->db->escape($data['role']) . ",
						user_name = " . $this->db->escape($data['user_name']) . ",
						password = " . $this->db->escape(md5($data['password'])) . ",
						staff_code = " . $this->db->escape($data['staff_code']) . ",
						first_name = " . $this->db->escape($data['first_name']) . ",
						last_name = " . $this->db->escape($data['last_name']) . ",
						email = " . $this->db->escape($data['email']) . ",
						contact_number = " . $this->db->escape($data['contact_number']));
				}else {
					$this->db->query(
						"UPDATE " . DB_PREFIX . "user SET 
						user_group_id = " . $this->db->escape($data['role']) . ",
						user_name = " . $this->db->escape($data['user_name']) . ",
						staff_code = " . $this->db->escape($data['staff_code']) . ",
						first_name = " . $this->db->escape($data['first_name']) . ",
						last_name = " . $this->db->escape($data['last_name']) . ",
						email = " . $this->db->escape($data['email']) . ",
						contact_number = " . $this->db->escape($data['contact_number']) . "
						WHERE id = " . $this->db->escape($data['user_id']));
				}	
					return "ok";
			}				
	}

	function get_user($id){
		$r = $this->db->query("SELECT * FROM " . DB_PREFIX . "user WHERE id = " . $this->db->escape($id));
		if($r->num_rows() > 0){
			return $r->row_array();
		}else {
			return false;
		}
	}

	function logout_call(){
		return true;
	}

	function get_user_groups(){

		$r = $this->db->query("SELECT g.*, (SELECT count(*) from tbl_user u WHERE user_group_id = g.id) as total_users FROM tbl_user_group g ORDER BY name");
		if($r->num_rows() > 0){
			return $r->result_array();
		}else {
			return false;
		}

	}


	function change_role_status($id, $status){
		$this->db->query("UPDATE tbl_user_group SET enabled = " . $this->db->escape($status) . " WHERE id = " . $this->db->escape($id));
        return true;
	}

}