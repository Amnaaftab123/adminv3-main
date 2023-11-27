<?php

class Utilities_m extends MY_Model {


    public function __construct(){
		parent::__construct();
	}

    public function get_types(){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."vehicle_types ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_makes(){

        $result = $this->db->query("SELECT m.*, (select count(*) from tbl_model where make_id = m.id) as total_model FROM tbl_makes m ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }
    



    public function get_models($id = 0){

        if($id == 0){

            $result = $this->db->query("SELECT m.*, mk.title as make_title, (SELECT count(*) FROM tbl_trim WHERE model_id = m.id) as trim_total FROM ". DB_PREFIX ."model m  
            LEFT JOIN tbl_makes mk ON m.make_id = mk.id WHERE m.id > 0  
            ORDER BY m.title");

        }else {

            $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."model WHERE make_id = '".$id."' ORDER BY title");

        }

        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
            
    }

    public function get_years(){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."years ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }



    function get_trims_with_details(){

        $result = $this->db->query("SELECT t.*, 
        m.title as make_title, mo.title as model_title FROM tbl_trim t 
        LEFT JOIN tbl_makes m ON t.make_id = m.id 
        LEFT JOIN tbl_model mo ON t.model_id = mo.id 
        ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_trims($make, $model){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."trim WHERE make_id = '".$make."' and model_id = '".$model."' ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_body_type($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."bodytype ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }



    public function get_fuel_type($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."fueltype ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_transmission($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."transmission ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_specification($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."specification ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_vehicle_condition($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."vehicle_condition ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_engine_size($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."engine_size ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }

    public function get_horse_power($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."horsepower ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_wheel_drive($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."wheel_drive ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }
    
    public function get_vehicle_color($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."vehicle_color ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_vehicle_seats($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."seats ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_vehicle_doors($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."doors ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }

    public function get_options($id = 0){

        if($id == 0){
            $result = $this->db->query("SELECT o.*, ot.title as option_title FROM ". DB_PREFIX ."options o
            LEFT JOIN  tbl_option_titles ot ON o.title_id = ot.id
             ORDER BY o.title");
        }else {
            $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."options where title_id = '" . $id . "' ORDER BY title");
        }
        
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }



    public function get_option($id = 0){


            $result = $this->db->query("SELECT o.* FROM ". DB_PREFIX ."options o WHERE id = '" . $id . "'");
        
        if($result->num_rows() > 0){
            return $result->row_array();

        }else {
            return FALSE;

        }
    }



    public function get_option_title($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."option_titles WHERE id = '".$id."'");
        
        if($result->num_rows() > 0){
            return $result->row_array();

        }else {
            return FALSE;

        }
    }

    public function get_option_titles($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."option_titles ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_publish_source($id = 0){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."publish_source ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    
    


    public function get_colors(){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."vehicle_colors ORDER BY title");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    function add_make($data, $id = 0){

        if($id == 0){
            $this->db->query("INSERT INTO tbl_makes SET 
                title = '".$data['title']."',
                logo = '".$data['logo']."'
            ");
            if($this->db->affected_rows()){
                return true;
            }
        }else {
            $this->db->query("UPDATE tbl_makes SET title = '" . $data['title'] . "' WHERE id = '" . $id . "'");
            if($data['logo'] != '0'){
                $this->db->query("UPDATE tbl_makes SET logo = '" . $data['logo'] . "' WHERE id = '" . $id . "'");
            }
        }

    }

    function make_exists($title, $id = 0){

        if($id == 0){
            $result = $this->db->query("SELECT id from tbl_makes WHERE LOWER(title) = '" . trim(strtolower($title)) ."'");
        }else {
            $result = $this->db->query("SELECT id from tbl_makes WHERE LOWER(title) = '" . trim(strtolower($title)) ."' AND id <> '" . $id . "'");
        }

        if($result->num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }

    function body_exists($title, $id = 0){

        if($id == 0){
            $result = $this->db->query("SELECT id from tbl_bodytype WHERE LOWER(title) = '" . trim(strtolower($title)) ."'");
        }else {
            $result = $this->db->query("SELECT id from tbl_bodytype WHERE LOWER(title) = '" . trim(strtolower($title)) ."' AND id <> '" . $id . "'");
        }

        if($result->num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }


    function option_type_exists($title, $id = 0){

        if($id == 0){
            $result = $this->db->query("SELECT id from tbl_option_titles WHERE LOWER(title) = '" . trim(strtolower($title)) ."'");
        }else {
            $result = $this->db->query("SELECT id from tbl_option_titles WHERE LOWER(title) = '" . trim(strtolower($title)) ."' AND id <> '" . $id . "'");
        }

        if($result->num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }



    function options_exists($title, $category_id, $id = 0){

        if($id == 0){
            $result = $this->db->query("SELECT id from tbl_options WHERE LOWER(title) = '" . trim(strtolower($title)) ."' AND title_id = '".$category_id."'");
        }else {
            $result = $this->db->query("SELECT id from tbl_options WHERE LOWER(title) = '" . trim(strtolower($title)) ."' AND title_id = '".$category_id."' AND id <> '" . $id . "'");
        }

        if($result->num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }
    function get_make($id){

        $result = $this->db->query("SELECT * from tbl_makes WHERE id = '" . $id ."'");
        if($result->num_rows() > 0){
            return $result->row_array();
        }else {
            return false;
        }

    }

    function change_make_status(){

        $result = $this->db->query("UPDATE tbl_makes set status = '" . $this->input->post('status') . "' WHERE id = '" . $this->input->post('id') ."'");
        return true;

    }

    //Model
    function add_model($data, $id = 0){

        if($id == 0){
            $this->db->query("INSERT INTO tbl_model SET 
                title = '".$data['title']."',
                make_id = '".$data['make_id']."'
            ");
            if($this->db->affected_rows()){
                return true;
            }
        }else {
            $this->db->query("UPDATE tbl_model SET 
            title = '" . $data['title'] . "', 
            make_id = '" . $data['make_id'] . "' 
            WHERE id = '" . $id . "'");
        }

    }

    function model_exists($title, $make_id, $id = 0){

        if($id == 0){
            $result = $this->db->query("SELECT id from tbl_model WHERE LOWER(title) = '" . trim(strtolower($title)) ."' and make_id = '". $make_id ."'");
        }else {
            $result = $this->db->query("SELECT id from tbl_model WHERE LOWER(title) = '" . trim(strtolower($title)) ."' and make_id = '" . $make_id . "' AND id <> '" . $id . "'");
        }

        if($result->num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }

    function get_model($id){

        $result = $this->db->query("SELECT * from tbl_model WHERE id = '" . $id ."'");
        if($result->num_rows() > 0){
            return $result->row_array();
        }else {
            return false;
        }

    }

    function change_model_status(){

        $result = $this->db->query("UPDATE tbl_model set status = '" . $this->input->post('status') . "' WHERE id = '" . $this->input->post('id') ."'");
        return true;

    }


    //Trim
    function add_trim($data, $id = 0){

        if($id == 0){
            $this->db->query("INSERT INTO tbl_trim SET 
                title = '".$data['title']."',
                make_id = '".$data['make_id']."',
                model_id = '".$data['model_id']."'
            ");
            if($this->db->affected_rows()){
                return true;
            }
        }else {
            $this->db->query("UPDATE tbl_trim SET 
            title = '".$data['title']."',
            make_id = '".$data['make_id']."',
            model_id = '".$data['model_id']."' 
            WHERE id = '" . $id . "'");
        }

    }

    function trim_exists($title, $make_id, $model_id,  $id = 0){

        if($id == 0){
            $result = $this->db->query("SELECT id from tbl_trim WHERE LOWER(title) = '" . trim(strtolower($title)) ."' and make_id = '". $make_id ."' and model_id = '".$model_id."'");
        }else {
            $result = $this->db->query("SELECT id from tbl_model WHERE LOWER(title) = '" . trim(strtolower($title)) ."' and make_id = '" . $make_id . "' AND model_id = '".$model_id."' AND id <> '" . $id . "'");
        }

        if($result->num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }

    function get_trim($id){

        $result = $this->db->query("SELECT * from tbl_trim WHERE id = '" . $id ."'");
        if($result->num_rows() > 0){
            return $result->row_array();
        }else {
            return false;
        }

    }

    function change_trim_status(){

        $result = $this->db->query("UPDATE tbl_trim set status = '" . $this->input->post('status') . "' WHERE id = '" . $this->input->post('id') ."'");
        return true;

    }



    //Body type
    function add_body_type($data, $id = 0){

        if($id == 0){
            $this->db->query("INSERT INTO tbl_bodytype SET 
                title = '".$data['title']."'");
            if($this->db->affected_rows()){
                return true;
            }
        }else {
            $this->db->query("UPDATE tbl_bodytype SET 
            title = '" . $data['title'] . "' 
            WHERE id = '" . $id . "'");
        }

    }

    function body_type_exists($title, $make_id, $id = 0){

        if($id == 0){
            $result = $this->db->query("SELECT id from tbl_bodytype WHERE LOWER(title) = '" . strtolower($title) ."'");
        }else {
            $result = $this->db->query("SELECT id from tbl_bodytype WHERE LOWER(title) = '" . strtolower($title) ."'  AND id <> '" . $id . "'");
        }

        if($result->num_rows() > 0){
            return true;
        }else {
            return false;
        }
    }

    function get_body_typ_by_id($id){

        $result = $this->db->query("SELECT * from tbl_bodytype WHERE id = '" . $id ."'");
        if($result->num_rows() > 0){
            return $result->row_array();
        }else {
            return false;
        }

    }

    function change_body_type_status(){

        $result = $this->db->query("UPDATE tbl_bodytype set status = '" . $this->input->post('status') . "' WHERE id = '" . $this->input->post('id') ."'");
        return true;

    }



    function add_option_type_title($data, $id = 0){

        if($id == 0){
            $this->db->query("INSERT INTO tbl_option_titles SET 
                title = '".$data['title']."', 
                ordering = ordering + 1
                ");
                $id= $this->db->insert_id();
            if($this->db->affected_rows()){

                $this->db->query("UPDATE tbl_option_titles set ordering = '".$id."' WHERE id = '".$id."' ");
                return true;
            }
        }else {
            $this->db->query("UPDATE tbl_option_titles SET 
            title = '" . $data['title'] . "' 
            WHERE id = '" . $id . "'");
        }

    }



    function change_option_title_type_status(){

        $result = $this->db->query("UPDATE tbl_option_titles set status = '" . $this->input->post('status') . "' WHERE id = '" . $this->input->post('id') ."'");
        return true;

    }





    function add_option($data, $id = 0){

        if($id == 0){
            $this->db->query("INSERT INTO tbl_options SET 
                title = '".$data['title']."', 
                title_id = '".$data['title_id'] . "'
                ");

        if($this->db->affected_rows()){
                return true;
            }
        }else {
            $this->db->query("UPDATE tbl_options SET 
            title = '".$data['title']."', 
            title_id = '".$data['title_id'] . "' 
            WHERE id = '" . $id . "'");
        }

    }



    function change_option_status(){

        $result = $this->db->query("UPDATE tbl_options set status = '" . $this->input->post('status') . "' WHERE id = '" . $this->input->post('id') ."'");
        return true;

    }


    public function get_roles(){

        $result = $this->db->query("SELECT * FROM ". DB_PREFIX ."user_group ORDER BY ordering");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    public function get_showrooms(){

        $result = $this->db->query("SELECT s.*, (SELECT count(*) FROM tbl_vehicle v WHERE v.showroom_id = s.id) total_vehicles FROM ". DB_PREFIX ."showrooms s ORDER BY ordering");
        
        if($result->num_rows() > 0){
            return $result->result_array();

        }else {
            return FALSE;

        }
    }


    
    
     //Settings
	  function get_setting_value($key){

        $result = $this->db->query("SELECT setting_value as value FROM ". DB_PREFIX . "settings WHERE setting_key = '" . strtolower($key) . "'");

        if($result->num_rows()){
            return $result->row_array()['value'];

        }else {
            return false;

        }

    }


    function get_settings(){
        $result = $this->db->query("SELECT * FROM ". DB_PREFIX . "settings");

        if($result->num_rows()){
            return $result->result_array();

        }else {
            return false;
        }
    }

    function change_showroom_status(){

        $result = $this->db->query("UPDATE tbl_showrooms set enabled = " . $this->db->escape($this->input->post('status')) . " WHERE id = " . $this->db->escape($this->input->post('id')));
        return true;

    }


}