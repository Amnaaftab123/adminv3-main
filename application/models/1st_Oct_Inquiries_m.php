<?php

class Inquiries_m extends MY_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get_buy_inquiries()
    {

        $result = $this->db->query("SELECT bv.id, user_name as name, bv.user_email as email, bv.user_phone as phone, 
        bv.comments, bv.created_date, bv.status as readed, m.make_name as make_title, mo.model_name as model_title FROM tbl_buy_enquiry bv 
        LEFT JOIN tbl_vehicle v ON bv.veh_id = v.vehicle_id 
        LEFT JOIN tbl_makes m ON v.make_id = m.make_id 
        LEFT JOIN tbl_model mo ON v.model_id = mo.model_id  
        ORDER BY bv.created_date DESC");

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return FALSE;
        }
    }

    function get_buy($id)
    {

        $result = $this->db->query("SELECT bv.id, user_name as name, bv.user_email as email, bv.user_phone as phone, 
        bv.comments, bv.created_date, bv.status as readed, m.make_name as make_title, mo.model_name as model_title, v.mileage, v.year, v.price FROM tbl_buy_enquiry bv 
        LEFT JOIN tbl_vehicle v ON bv.veh_id = v.vehicle_id 
        LEFT JOIN tbl_makes m ON v.make_id = m.make_id 
        LEFT JOIN tbl_model mo ON v.model_id = mo.model_idid  WHERE bv.id = '" . $id . "'");

        if ($result->num_rows() > 0) {
            return $result->row_array();
        } else {
            return FALSE;
        }
    }

    function get_sell_inquiries(){

        $result = $this->db->query("SELECT se.user_name as name, 
        se.email_id as email, 
        se.phone_no as phone, 
        se.message as comments, 
        se.created_date, se.status as readed FROM tbl_sell_enquiry se ORDER BY se.id DESC");

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return FALSE;
        }
    }

    function get_sales_request(){

        $result = $this->db->query("SELECT sr.id, sr.account_type, sr.full_name, sr.telephone, offered_price,
        mid_full_name, sr.email, sr.created_at, sr.current_status, 
        m.make_name as make_title, mo.model_name as model_title, v.mileage, v.year, v.price, t.trim_name, u.first_name, u.last_name FROM  tbl_sales_request sr 
        LEFT JOIN tbl_user u ON sr.user_id = u.id 
        LEFT JOIN tbl_vehicle v ON sr.vehicle_id = v.vehicle_id 
        LEFT JOIN tbl_makes m ON v.make_id = m.make_id 
        LEFT JOIN tbl_model mo ON v.model_id = mo.model_id 
        LEFT JOIN tbl_trim t ON v.trim_id = t.trim_id
        ");

        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return FALSE;
        }

    }



}
