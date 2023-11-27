<?php
class Utilities {
    
    private $ci;

    public function __construct(){
        $this->ci =&get_instance();
        $this->ci->load->model('categories_m');
    }    

};