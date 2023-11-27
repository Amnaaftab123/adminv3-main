<?php

function get_type_list(){
    $ci =&get_instance();
    return $ci->utilities_m->get_types();

}



function get_makes(){
    $ci =&get_instance();
    return $ci->utilities_m->get_makes();

}



function get_option_titles_dropdown(){
    
    $ci =&get_instance();
    $string = '';

    foreach($ci->utilities_m->get_option_titles() as $i){
        $string .= '<option value = "'.$i['id'].'">' . $i['title'] . '</option>';
    }
    
    return $string;

}

function get_makes_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach($ci->utilities_m->get_makes() as $i){
        if($id == $i['make_id'])
            $string .= '<option selected value = "'.$i['make_id'].'">' . $i['make_name'] . '</option>';
            else 
            $string .= '<option value = "'.$i['make_id'].'">' . $i['make_name'] . '</option>';
    }
    
    return $string;

}

function get_years_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach($ci->utilities_m->get_years() as $i){
        if($i['title'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['title'] . '</option>';
        else 
            $string .= '<option value = "'.$i['id'].'">' . $i['title'] . '</option>';
    }
    
    return $string;

}


function generateSeoURL($string, $wordLimit = 0){ 
    $separator = '-'; 
     
    if($wordLimit != 0){ 
        $wordArr = explode(' ', $string); 
        $string = implode(' ', array_slice($wordArr, 0, $wordLimit)); 
    } 
 
    $quoteSeparator = preg_quote($separator, '#'); 
 
    $trans = array( 
        '&.+?;'                 => '', 
        '[^\w\d _-]'            => '', 
        '\s+'                   => $separator, 
        '('.$quoteSeparator.')+'=> $separator 
    ); 
 
    $string = strip_tags($string); 
    foreach ($trans as $key => $val){ 
        $string = preg_replace('#'.$key.'#iu', $val, $string); 
    } 
 
    $string = strtolower($string); 
 
    return trim(trim($string, $separator)); 
}



function get_models($id){
    $ci =&get_instance();
    return $ci->utilities_m->get_models($id);

}


function get_trims($make, $model){
    $ci =&get_instance();
    return $ci->utilities_m->get_trims($make, $model);

}

function get_body_types($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_body_type();

}

function get_body_types_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_body_types() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['body_name'] . '</option>';
            else 
            $string .= '<option value = "'.$i['id'].'">' . $i['body_name'] . '</option>';
    }
    
    return $string;
}

function get_fuel_type($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_fuel_type();

}

function get_fuel_type_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_fuel_type() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['fuel_name'] . '</option>';
        else 
        $string .= '<option value = "'.$i['id'].'">' . $i['fuel_name'] . '</option>';
    }
    
    return $string;
}


function get_role_dropdown($id = 0){

    $ci =&get_instance();
    $string = '';

    foreach($ci->utilities_m->get_roles() as $i){

        if($id == $i['id']){
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['name'] . '</option>';
        }else {
            $string .= '<option value = "'.$i['id'].'">' . $i['name'] . '</option>';
        }
        
    }
    
    return $string;
}



function get_transmission($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_transmission();

}


function get_transmission_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_transmission() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['transmission_name'] . '</option>';
        else 
            $string .= '<option value = "'.$i['id'].'">' . $i['transmission_name'] . '</option>';
    }
    
    return $string;
}


function get_specification($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_specification();

}


function get_specification_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_specification() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['specification_name'] . '</option>';
        else 
        $string .= '<option value = "'.$i['id'].'">' . $i['specification_name'] . '</option>';
    }
    
    return $string;
}

function get_vehicle_condition($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_vehicle_condition();

}


function get_vehicle_condition_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_vehicle_condition() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['vcondition_name'] . '</option>';
        else 
            $string .= '<option value = "'.$i['id'].'">' . $i['vcondition_name'] . '</option>';

    }
    
    return $string;
}

function get_engine_size($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_engine_size();

}


function get_engine_size_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_engine_size() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['engine_name'] . '</option>';
        else 
            $string .= '<option value = "'.$i['id'].'">' . $i['engine_name'] . '</option>';
    }
    
    return $string;
}


function get_horse_power($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_horse_power();

}


function get_horse_power_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_horse_power() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['horsepower_name'] . '</option>';
            else 
            $string .= '<option value = "'.$i['id'].'">' . $i['horsepower_name'] . '</option>';
    }
    
    return $string;
}

function get_wheel_drive($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_wheel_drive();

}


function get_wheel_drive_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_wheel_drive() as $i){
        
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['title'] . '</option>';
            else 
                $string .= '<option value = "'.$i['id'].'">' . $i['title'] . '</option>';

    }
    
    return $string;
}


function get_vehicle_color($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_vehicle_color();

}


function get_vehicle_color_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_vehicle_color() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['color_name'] . '</option>';
            else 
                $string .= '<option value = "'.$i['id'].'">' . $i['color_name'] . '</option>';
    }
    
    return $string;
}

function get_vehicle_seats($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_vehicle_seats();

}


function get_vehicle_seats_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_vehicle_seats() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['title'] . '</option>';
            else 
                $string .= '<option value = "'.$i['id'].'">' . $i['title'] . '</option>';
    }
    
    return $string;
}


function get_vehicle_doors($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_vehicle_doors();

}


function get_vehicle_doors_dropdown($id = 0){
    
    $ci =&get_instance();
    $string = '';

    foreach(get_vehicle_doors() as $i){
        if($i['id'] == $id)
            $string .= '<option value = "'.$i['id'].'" selected>' . $i['title'] . '</option>';
            else 
                $string .= '<option value = "'.$i['id'].'">' . $i['title'] . '</option>';
    }
    
    return $string;
}


function get_options($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_options($id);
}

function get_option_titles($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_option_titles();
}


function get_publish_source($id = 0){
    $ci =&get_instance();
    return $ci->utilities_m->get_publish_source();

}














function get_colors(){
    $ci =&get_instance();
    return $ci->utilities_m->get_colors();

}





function get_countries(){
    $ci =&get_instance();
    return $ci->utilities_m->get_countries();

}


function get_states($id){
    $ci =&get_instance();
    return $ci->utilities_m->get_states($id);

}











function get_full_name(){

}

function get_logged_type(){
	
}








function get_current_id(){
    $ci =&get_instance();
    $session = $ci->session->userdata('user_session');
    return $session['id'];
}


function set_messsage($message){
    $ci =&get_instance();
    $ci->session->userdata('message', $message);
}


function get_message(){
    
        $ci =&get_instance();
        $message = $ci->session->userdata('message');
        $ci->session->unset_userdata('message');
        
        return $message;
    
}




function is_login(){
    return get_session('is_admin');
}


function generate_error($data){
    
    
    if($data != null && count($data) > 0 ){
        $string = '<div class="col-lg-12 error" style="color:red";><ul>';
        foreach($data as $item){
            $string .= '<li>'.$item.'</li>';
        }
        $string .= '</ul></div>';
        echo $string;
    }else {
        return false;
    }
}


if (!function_exists('generate_otp')){

	function generate_otp(){
		return rand(6348, 9834);
	}

}



function trigger_sms($data){    
    
    $ci =&get_instance();
    //$baseUrl = "https://api.smsglobal.com/http-api.php?action=sendsms&user=505u0afj&password=ZDns6tp5&from=public&to=" . $data['mobile_number'] . "&text=". $data['message'];
    $baseUrl = "https://api.smsglobal.com/http-api.php?action=sendsms&user=thuraya&password=cVees3ol&from=public&to=" . $data['mobile_number'] . "&text=". urlencode($data['message']);
    $response = file_get_contents($baseUrl);

    if(strpos($response, "OK: 0")){
        
        $ci->notifications_m->save_logs(array(
            'mobile_number' => $data['mobile_number'],
            'message' => $data['message'],
            'source' => $data['source'],
            'response' => $response,
            'reference' => $baseUrl, 
            'status' => 'success'
        ));

    }else {

        $ci->notifications_m->save_logs(array(
            'mobile_number' => $data['mobile_number'],
            'message' => $data['message'],
            'source' => $data['source'],
            'response' => $response,
            'reference' => $response, 
            'status' => 'fail'
        ));

    }
    
}


function trigger_email($data){

    
    $ci =&get_instance();
    $config = array(
        'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
        'smtp_host' => 'publiceauctions.com', 
        'smtp_port' => 465,
        'smtp_user' => 'noreply@@publiceauctions.com',
        'smtp_pass' => '5m3rpa[5(MH$',
        'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
        'mailtype' => 'html', //plaintext 'text' mails or 'html'
        'wordwrap' => TRUE
    );
        //$ci->load->config('email');
        $ci->load->library('email');
        
        $from = $config['smtp_user'];
        $to = $data['to'];
        $subject = $data['subject'];
        $message = $data['message'];

        $ci->email->set_newline("\r\n");
        $ci->email->from($from);
        $ci->email->to($to);
        $ci->email->subject($subject);
        $ci->email->message($message);

        // if ($ci->email->send()) {
        //     return true;

        // } else {
        //     return false;//show_error($ci->email->print_debugger());

        // }


        // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <noreply@@publiceauctions.com>' . "\r\n";
            $headers .= 'Cc: rizwan.zaffar@gmail.com' . "\r\n";

            mail($to,$subject,$message,$headers);

}


//Tiny URL
 function generate_tiny_url($url){

    $url = htmlspecialchars_decode($url);
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch,CURLOPT_URL,'http://tinyurl.com/api-create.php?url='.$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}


function get_all_customers_drop_down($selected = 0){

    $ci =&get_instance();
    $customers = $ci->customers_m->admin_get_all_customers(1);
    $data = '';
    foreach($customers as $customer){
        $data .= '<option value = "'.$customer['id'].'">'.$customer['full_name'].'</option>';
    }
    return $data;

}

function get_document_types(){
    $ci =&get_instance();
    return $ci->utilities_m->get_document_types();
}

function get_setting_value($key)
{

    $ci = &get_instance();
    return $ci->utilities_m->get_setting_value($key);
}

function make_url($title, $url){
    return '<a href= "'.$url.'">'.$title.'</a>';
}

function select_status($id){

    $array = array(
        'pending',
        'open',
        'close',
        'cancel',
        'reject',
        'hold'
    );

    $option = '';
    foreach($array as $ob){

        if ($ob == $id){
            $option .= '<option selected value = "'.$ob.'">'.ucwords($ob).'</option>';
        }else {
            $option .= '<option value = "'.$ob.'">'.ucwords($ob).'</option>';
        }
    }

    return $option;


}



function set_array_limit($data, $limit = 10){

    if(!is_array($data)){
        return '';
    }
    $d = [];
    $counter = 1;
    foreach($data as $i){

        if($counter < $limit){
            $d[] = $i;
            $counter++;
        }

    }

    if(count($data) > $limit){
        $d[] = '...';
    }
    return $d;
}


function get_agents(){
    $ci =&get_instance();
    return $ci->agents_m->get_agents();
}

function draw_agent_list($id = 0){
    $string = '';
    foreach(get_agents() as $i){
        if($id == $i['id']){
            $string .= '<option selected value = "' . $i['id'] . '">' . $i['name'] . '</option>';
        }else {
            $string .= '<option value = "' . $i['id'] . '">' . $i['name'] . '</option>';
        }
        
    }
    return $string;
}

function make_bread_grams($params){

    $string = '';
    foreach($params as $i){
        if($i['linked']){
            $string .= '<li class="breadcrumb-item ' . (($i['active']) ? 'active' : "") . '"><a href = "' . $i['linked'] . '">' . $i['title'] . '</a></li>';
        }else {
            $string .= '<li class="breadcrumb-item ' . (($i['active']) ? 'active' : "") . '">' . $i['title'] . '</li>';
        }        
    }
    return $string;

}

// function get_years_dropdown($min, $max){

//     $string = '';
//     for($i = $max; $i >= $min; $i--){
//         $string .= '<option value = "'.$i.'">' . $i . '</option>';
//     }
//     return $string;

// }


function getRangeDateString($timestamp) {
    $cTime = $timestamp;
    if ($timestamp) {
        $currentTime=strtotime('today');
        // Reset time to 00:00:00
        $timestamp=strtotime(date('Y-m-d 00:00:00',$timestamp));
        $days=round(($timestamp-$currentTime)/86400);

        if(abs($days) == 0){
            return date("H:i a", $cTime);
        }else if(abs($days) > 0 && abs($days) < 29){
            return date("D, H:i a", $cTime);
        }else {
            return date("d/m/Y H:i a", $cTime);
        }
        

    }
}

function maxLen($string, $len){
    if(strlen($string) > $len){
        return substr($string,0, $len) . '...';
    }else {
        return $string;
    }
}


function cleanFileName($file_name){ 
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION); 
    $file_name_str = pathinfo($file_name, PATHINFO_FILENAME); 
     
    // Replaces all spaces with hyphens. 
    $file_name_str = str_replace(' ', '-', $file_name_str); 
    // Removes special chars. 
    $file_name_str = preg_replace('/[^A-Za-z0-9\-\_]/', '', $file_name_str); 
    // Replaces multiple hyphens with single one. 
    $file_name_str = preg_replace('/-+/', '-', $file_name_str); 
     
    $clean_file_name = $file_name_str.'.'.$file_ext; 
     
    return $clean_file_name; 
}


function make_folder_structure($d){

    if(!is_dir(($d))){
        mkdir($d, 0777, TRUE);
    }

    if(is_dir($d)){
        mkdir($d . '/large', 0777, TRUE);
        mkdir($d . '/medium', 0777, TRUE);
        mkdir($d . '/small', 0777, TRUE);
    }

}

function get_vehicle_image($vehicle_id, $thumb){
    return (IMAGE_HTTP_URL . 'vehicles/'. $vehicle_id . '/'  . $thumb);
}

function get_value($mode, $param, $d = ""){
    if($mode){
        return $param;
    }else{
        return $d;
    }
}