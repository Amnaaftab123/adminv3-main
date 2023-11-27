<?php
require_once(DIR_SYSTEM . 'libraries/rest.php');

class Sell extends Rest
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('sell_m');
    }

    public function index()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            try {
                

                // $this->json['data'] = array(
                //     'user_id' => $this->input->post('user_id'),
                //     'account_type' => $this->input->post('account_type'), 
                //     'full_name' => $this->input->post('full_name'), 
                //     'telephone' => $this->input->post('telephone'), 
                //     'email' => $this->input->post('email'), 
                //     'nationality_id' => $this->input->post('nationality'), 
                //     'trade_license' => $this->input->post('trade_license'), 
                //     'vat' => $this->input->post('vat'), 
                //     'address' => $this->input->post('address'), 
                //     'pobox' => $this->input->post('pobox'), 
                //     'emirates_id' => $this->input->post('emirates') == null ? 0 : $this->input->post('emirates'), 
                //     'mid_full_name' => $this->input->post('middle_full_name'), 
                //     'mid_telephone' => $this->input->post('middle_telephone'), 
                //     'mil_nationality_id' => $this->input->post('middle_nationality'), 
                //     'mid_comission' => $this->input->post('middle_comission') == null ? 0 : $this->input->post('middle_comission'), 
                //     'vehicle_id' => json_decode($this->input->post('vehicle'))->id
                // );



                $response = $this->sell_m->make_request(array(
                    'user_id' => $this->input->post('user_id'),
                    'account_type' => $this->input->post('account_type'), 
                    'full_name' => $this->input->post('full_name'), 
                    'telephone' => $this->input->post('telephone'), 
                    'email' => $this->input->post('email'), 
                    'nationality_id' => $this->input->post('nationality'), 
                    'trade_license' => $this->input->post('trade_license'), 
                    'vat' => $this->input->post('vat'), 
                    'address' => $this->input->post('address'), 
                    'pobox' => $this->input->post('pobox'), 
                    'emirates_id' => $this->input->post('emirates') == null ? 0 : $this->input->post('emirates'), 
                    'mid_full_name' => $this->input->post('middle_full_name'), 
                    'mid_telephone' => $this->input->post('middle_telephone'), 
                    'mil_nationality_id' => $this->input->post('middle_nationality'), 
                    'mid_comission' => $this->input->post('middle_comission') == null ? 0 : $this->input->post('middle_comission'), 
                    'vehicle_id' => json_decode($this->input->post('vehicle'))->id,
                    'representators' => $this->input->post('representators'),
                ));

                    $a = 0;
                if($this->input->post('representators') != 0){

                    foreach($this->input->post('representators') as $i){
                        $x = json_decode($i);

                        $this->sell_m->add_representator(array(
                            'request_id' => $response,
                            'full_name' => $x->full_name,
                            'designation' => $x->designation,
                            'nationality_id' => $x->nationality,
                            'telephone' => $x->mobile
                        ));


                        if(isset($_FILES[$i->document])){
                            if ( !move_uploaded_file( $_FILES[$i->document]["tmp_name"], 'one.jpg')) {
                                $error  = "Error while moving uploaded file";
                            }

                        }
                        $a = $x;
                    }
                }


                /* end watchlist */
                $this->json['data'] = array('counter' => $x);

            } catch (Exception $e) {

                $this->json['data'] = array('id' => 0);
                $this->json['error'] = $e->getMessage();
                $this->statusCode = $e->getCode();

            } finally {
                }
        } else {
            $this->statusCode = METHOD_NOT_FOUND_CODE;
            $this->allowedHeaders = array("POST");
        }

        $this->sendResponse();
    }

}
