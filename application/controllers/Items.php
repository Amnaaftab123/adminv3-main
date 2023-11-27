<?php

class Items extends MY_Controller {

  function __construct(){
    parent::__construct();

   $this->load->helper('api_helper');
    $this->load->model('categories_m');
    $this->load->model('items_m');
}


  function index(){

        $this->data['title'] = "Fist Choice Cars Items";
        $this->data['page'] = "manage";
        $this->data['content'] = "items";

        if($this->input->get('action') == 'delete' && $this->input->get('id') != ""){

          $this->categories_m->delete_item($this->input->get('id'));
          redirect(site_url('items'));
        }


        $this->data['subview'] = 'admin/items/listing';
        $this->load->view('_layout', $this->data);

    }



    function listing_data(){

      try{
        $recordset = $this->items_m->get_items();

        foreach($recordset as $object){
          
          $dataObject[] = array(
          "id"=>$object->item_id,
          "title"=>$object->title,
          "internal_code"=>$object->internal_code,
          "category_name" => $object->category_name,
          "isactive"=>(($object->enabled==1)?"Yes":"No"),
          "lastupdated" => $object->date_modified, 
          "edit" => "<a href='". site_url('items/form?id=' . $object->item_id) ."'>view</a> | <a onClick='return confirm(\"Are you sure want to delete?\");' href='". site_url('items/form?action=delete&id=' . $object->item_id) ."'>delete</a>"
          );

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
    if ($this->input->get('id') != "" && $this->input->get('id') > 0 ){
        $this->data['edit_mode'] = true;
        $this->data['title'] = "Fist Choice Cars Edit Item";
    }else {
        $this->data['title'] = "Fist Choice Cars Add Item";
        $this->data['edit_mode'] = false;
    }

  $this->data['page'] = "manage";
  $this->data['content'] = "items";

  if($this->input->post('action') == "add"){
    $id = $this->items_m->add_item(
      array(
        'language_id' => '1',
        'title' => $this->input->post('name_english'),
        'internal_code' => $this->input->post('internal_code'),
        'description' => $this->input->post('descriptionEnglish'),
        'category_id' => $this->input->post('parent_category'),
        'price' => $this->input->post('price'),
        'enabled' => $this->input->post('enabled'),
        'meta_title' => $this->input->post('meta_title'),
        'meta_description' => $this->input->post('meta_description'),
        'keyword' => $this->input->post('meta_description')
      ));


      if($id){
        
        $target_dir = ROOT_URL."/web/media/items/";
        $target_file = $target_dir . basename($_FILES["item_file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        $nFileName = $this->items_m->get_last_id($imageFileType);
      

        // Check if image file is a actual image or fake image
        if(isset($_POST["upload"])) {

            $check = getimagesize($_FILES["item_file"]["tmp_name"]);

            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;

              if (move_uploaded_file($_FILES["item_file"]["tmp_name"], $target_dir . $nFileName)) {
                  
                  $this->items_m->update_image($id, $nFileName);

                  } else {
                      echo "Sorry, there was an error uploading your file.";
                  }



            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

      }




      redirect(site_url('items'));
    
  }


  if($this->input->post('action') == "edit"){
    $id = $this->input->post('id');
    $this->items_m->edit_item($id, 
      array(
        'language_id' => '1',
        'title' => $this->input->post('name_english'),
        'internal_code' => $this->input->post('internal_code'),
        'description' => $this->input->post('descriptionEnglish'),
        'category_id' => $this->input->post('parent_category'),
        'price' => $this->input->post('price'),
        'enabled' => $this->input->post('enabled'),
        'meta_title' => $this->input->post('meta_title'),
        'meta_description' => $this->input->post('meta_description'),
        'keyword' => $this->input->post('meta_description')
      ));


      if(is_uploaded_file($_FILES["item_file"]["tmp_name"])){
        
        $target_dir = ROOT_URL."/web/media/items/";
        $target_file = $target_dir . basename($_FILES["item_file"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        
        $nFileName = $this->items_m->get_last_id($imageFileType);
      

        // Check if image file is a actual image or fake image
        if(isset($_POST["upload"])) {

            $check = getimagesize($_FILES["item_file"]["tmp_name"]);

            if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;

              if (move_uploaded_file($_FILES["item_file"]["tmp_name"], $target_dir . $nFileName)) {
                  
                  $this->items_m->update_image($id, $nFileName);

                  } else {
                      echo "Sorry, there was an error uploading your file.";
                  }



            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

      }




      redirect(site_url('items'));
    
  }



  if($this->input->get('action') == 'delete' && $this->input->get('id') != ""){

    $this->items_m->delete_item($this->input->get('id'));
    redirect(site_url('items'));
  }


  if ($this->input->get('id') != "" && $this->input->get('id') > 0 ){
    $this->data['record'] = $this->items_m->get_item($this->input->get('id'));
  }
  
  $this->data['categories'] = $this->categories_m->get_cateories();
  $this->data['subview'] = 'admin/items/form';
  $this->load->view('_layout', $this->data);

}



  

  }
