<?php
class Agents_m extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function get_agents()
    {
        $r = $this->db->query(
            "SELECT * FROM tbl_cust_sale_agents ORDER BY name"
        );

        if ($r->num_rows()) {
            return $r->result_array();
        } else {
            return false;
        }
    }
}
