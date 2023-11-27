<?php
class Vehicles_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function add_vehicle($data){

        $this->db->insert('tbl_vehicle',$data);
        return $this->db->insert_id();
    }

    function get_vehicles($data)
    {
        $criteria = '';

        if($data['status_type'] == 1){
            $criteria .= ' AND v.vehicle_status = 1';
        }else if($data['status_type'] == 2){
            $criteria .= ' AND v.vehicle_status = 2';
        }if($data['status_type'] == 3){
            $criteria .= ' AND v.vehicle_status = 3';
        }else if($data['status_type'] == 4){
            $criteria .= ' AND v.vehicle_status = 4';
        }

        if(!empty($data['search_keyword'])){
            $criteria .= ' AND (m.make_name like "%' . $data['search_keyword'] . '%" OR mo.model_name like "%' . $data['search_keyword'] . '%" OR v.description like "%' . $data['search_keyword'] . '%" OR t.transmission_name like "%' . $data['search_keyword'] . '%") '; 
        }


        if(!empty($data['start_type'])){
            $criteria .= ' AND v.created_at > "'  . $data['start_type'] . ' 00:00:00"';
        }

        if(!empty($data['end_type'])){
            $criteria .= ' AND v.created_at < "'  . $data['end_type'] . ' 23:59:59"';
        }

        if($data['agent_type'] > 0){
            $criteria .= ' AND v.sale_agent_id = "' . $data['agent_type'] . '"';
        }

        if($data['add_type'] == 1){
            $criteria .= ' ORDER BY v.created_at DESC';
        }else if($data['add_type'] == 2){
            $criteria .= ' ORDER BY v.created_at';
        }else  if($data['add_type'] == 3){
            $criteria .= ' ORDER BY v.price';
        }else  if($data['add_type'] == 4){
            $criteria .= ' ORDER BY v.price DESC';
        }else  if($data['add_type'] == 5){
            $criteria .= ' ORDER BY v.car_view_counter DESC';
        }else  if($data['add_type'] == 6){
            $criteria .= ' ORDER BY v.car_view_counter';
        }

        $r = $this->db->query(
            "SELECT v.vehicle_id, v.vehicle_details as description, v.sold, v.mileage, v.image as thumb_image, v.price, v.featured, v.car_view_counter, (select image_address from tbl_vehicle_images where vehicle_id = v.vehicle_id order by is_main desc limit 1) as image,v.year,v.options, v.vehicle_status, v.featured,
            m.make_name, mo.model_name, t.transmission_name FROM tbl_vehicle v 
            LEFT JOIN tbl_makes m ON v.make_id = m.make_id 
            LEFT JOIN tbl_model mo ON v.model_id = mo.model_id
            LEFT JOIN tbl_transmission t ON v.transmission = t.id WHERE v.vehicle_id > 0  $criteria"
        );

        if ($r->num_rows()) {
            $this->totalRecords = $r->num_rows();
            return $r->result_array();
        } else {
            return false;
        }
    }

    function get_vehicle($id){

        $r = $this->db->query("SELECT * FROM tbl_vehicle v WHERE v.vehicle_id = " . $this->db->escape($id));
        if($r->num_rows()){
            return $r->row_array();
        }else {
            return false;
        }

    }

    function change_featured($id){

        $r = $this->db->query("SELECT featured FROM tbl_vehicle v WHERE vehicle_id = " . $this->db->escape($id));
        $d = $r->row_array();

        if($d['featured'] == '1'){
            $this->db->query("UPDATE tbl_vehicle set featured = '0' WHERE vehicle_id = " . $this->db->escape($id));
            return 0;
        }else {
            $this->db->query("UPDATE tbl_vehicle set featured = '1' WHERE vehicle_id = " . $this->db->escape($id));
            return 1;
        }

    }

    function change_status($id){

        $r = $this->db->query("SELECT vehicle_status FROM tbl_vehicle v WHERE vehicle_id = " . $this->db->escape($id));
        $d = $r->row_array();

        if($d['vehicle_status'] == '1'){
            $this->db->query("UPDATE tbl_vehicle set vehicle_status = '0' WHERE vehicle_id = " . $this->db->escape($id));
            return 0;
        }else {
            $this->db->query("UPDATE tbl_vehicle set vehicle_status = '1' WHERE vehicle_id = " . $this->db->escape($id));
            return 1;
        }

    }

    function change_to_sold($id){

        $this->db->query("UPDATE tbl_vehicle set sold = '1' WHERE vehicle_id = " . $this->db->escape($id));
        return 0;

    }

}
