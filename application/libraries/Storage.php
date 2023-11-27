<?php

class Storage {

	private $ci;

    public function __construct(){
        $this->ci =&get_instance();
    }


    public function get_current_language(){

    	if(empty($this->ci->session->userdata('language'))){
    		return DEFAULT_LANGUAGE;

    	}else {
    		return $this->ci->session->userdata['language'];

    	}

	}
	
	public function get_current_language_code(){

    	if(empty($this->ci->session->userdata('language_code'))){
    		return DEFAULT_LANGUAGE_CODE;

    	}else {
    		return $this->ci->session->userdata['language_code'];

    	}

    }



    public function get_current_currency(){

    	if(empty($this->ci->session->userdata('currency'))){
    		return DEFAULT_CURRENCY;

    	}else {
    		return $this->ci->session->userdata['currency'];

    	}

	}
	

	public function get_current_currency_code(){

    	if(empty($this->ci->session->userdata('currency_code'))){
    		return DEFAULT_CURRENCY;

    	}else {
    		return $this->ci->session->userdata['currency_code'];

    	}

	}
	

	public function change_currency($code){

		$language = $this->ci->utilities_m->get_language_by_code($code);

		if($language){
			$this->ci->session->set_userdata('language', trim(strtolower($code)));
			$this->ci->session->set_userdata('language_code', trim($language['id']));
			return true;
			
		}else {
			return false;
		}
		

		
	}


}