<?php

class Videos extends CI_Controller {



  function __construct(){
        parent::__construct(); 
        $this->load->model('media_m');
  }

  function index(){

         

      $data['subview'] = 'admin/videos/listing';
      $data['page'] = "content";
      $data['item'] = "video";


      if($this->input->get('id') != ""){
        $this->media_m->delete_media($this->input->get('id'));
      }


      $this->load->view('admin/_layout_main', $data);

  }



  function listing_data(){

    

 try{
      $recordset = $this->media_m->get_videos();


      $counter = 1;
      foreach($recordset as $object){
        $dataObject[] = array(
        "id"=>$counter,
        "title"=>ucwords($object->title),
        "page"=>ucwords($object->page),
        "last_update"=>$object->last_updated,        
        "view"=> "<a href='" . site_url('admin/videos/?id='.$object->media_id)."' onclick=\"return confirm('are you sure wnat to delete?');\">remove</a>"
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





  function upload(){

      if($this->input->post('upload') == "1"){


          $this->media_m->upload_media(
            array(
              'media_type' => 'youtubeurl',
              'media_url' => $this->input->post('youtube_url'),  
              'title' => $this->input->post('title'),
              'description' => $this->input->post('title'), 
              'module' => 'ourvideos',
              'page' => 'home',
              'fixed' => '0'
            )
          );


      }
      redirect(site_url('admin/videos'));

  }



        function form(){

        $data['page'] = "banner";



  

            if ($this->input->method(TRUE) == 'POST'){
                

                $this->content_m->update_content(array(
                'content_id' => $this->input->post('id'),
                'descriptionEnglish' => $this->input->post('descriptionEnglish'),
                'descriptionArabic' => $this->input->post('descriptionArabic'),
                'meta_title' => $this->input->post('meta_title'),
                'meta_description' => $this->input->post('meta_description'),    
                ));


                redirect(site_url('admin/banners')) ; 
                

            }















            //$data['content'] = $this->content_m->get_content($this->input->get('module'),$this->input->get('id'));


            //print_r($data['content']);exit();

            $data['subview'] = 'admin/banners/form';
             $this->load->view('admin/_layout_main', $data);
        }











}