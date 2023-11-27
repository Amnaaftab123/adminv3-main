<?php

class Content extends MY_Controller {



  function __construct(){
        parent::__construct(); 
        $this->load->model('content_m');

  }

  function index(){

      $this->data['title'] = "Fist Choice Cars Content";
      $this->data['subview'] = 'contents/listing';
      $this->data['active'] = "content";

      $this->data['subview'] = 'contents/listing';
      $this->load->view('_layout',$this->data);

  }



  function listing_data(){

    $this->load->model('content_m');
    

 try{
      $recordset = $this->content_m->get_all_contents();
      $counter = 1;
      foreach($recordset as $object){
        $dataObject[] = array(
        "id"=>$counter,
        "title"=>ucwords($object->title),
        "page"=>ucwords($object->page),
        "module"=> ucwords($object->module),
        "last_update"=>$object->last_updated,        
        "view"=> "<a href='" . site_url('content/content/form?id='.$object->content_id) . "&module=" .$object->module. "'>view</a>"
      );
        $counter++;
    }


      $object = array("data"=>$dataObject);
      print_json($object);

    }catch(Exception $e){

      print_json(array(
          'result'=>'0',
          'data'=> array(
              'code'=>1011,
              'error'=>$e->getMessage()
          )));

    }

}







        function form(){

        $this->data['page'] = "content";



  

            if ($this->input->method(TRUE) == 'POST'){
                

                $this->content_m->update_content(array(
                'content_id' => $this->input->post('id'),
                'descriptionEnglish' => $this->input->post('descriptionEnglish'),
                'descriptionArabic' => $this->input->post('descriptionArabic'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description'),    
                ));


                redirect(site_url('content/content')) ; 
                

            }















            $this->load->model('content_m');
            $this->data['content'] = $this->content_m->get_content($this->input->get('module'),$this->input->get('id'));


            //print_r($data['content']);exit();

            $this->data['subview'] = 'admin/contents/form';
             $this->load->view('admin/_layout_main', $this->data);
        }











}