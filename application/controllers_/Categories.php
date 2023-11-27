<?php

class Categories extends MY_Controller {

  function __construct(){
    parent::__construct();
    $this->load->helper('api_helper');
    $this->load->model('categories_m');
}


  function index(){
      $this->data['title'] = sprintf("%s | Categories", "Public Acution");
      $this->data['page'] = "manage";
      $this->data['content'] = "categories";

      
      if($this->input->get('action') == 'delete' && $this->input->get('id') != ""){

        $this->categories_m->delete_category($this->input->get('id'));
        redirect(site_url('categories'));
      }


        $this->data['subview'] = 'admin/categories/listing';
    	$this->load->view('_layout', $this->data);

  }



  function listing_data(){

    try{
      $recordset = $this->categories_m->get_cateories();
      $dataObject = array();

      foreach($recordset as $object){
        $dataObject[] = array(
        "id"=>$object->category_id,
        "title"=>$object->title,
        "childs"=>$object->child_categories." categories",
        "isactive"=>(($object->enabled==1)?"Yes":"No"),
        "lastupdated" => date("Y-m-d", strtotime($object->updated_at)), 
        "edit" => "<a href='". site_url('categories/form?id=' . $object->category_id) ."'>view</a> | <a onClick='return confirm(\"Are you sure want to delete?\");' href='". site_url('categories/form?action=delete&id=' . $object->category_id) ."'>delete</a>"
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
    $this->data['title'] = sprintf("%s | Edit Category", "Public Acution");
  }else {
    $this->data['title'] = sprintf("%s | Add Category", "Public Acution");
      $this->data['edit_mode'] = false;
  }

  $this->data['page'] = "manage";
  $this->data['content'] = "categories";


  if($this->input->post('action') == "add"){
    
    $this->categories_m->add_category(
      array(
        'image' => 'image1',
        'name' => $this->input->post('name_english'),
        'name_arabic' => $this->input->post('name_arabic'),
        'description' => $this->input->post('description_english'),
        'description_arabic' => $this->input->post('description_arabic'),
        'parent_id' => $this->input->post('parent_category'),
        'meta_title' => $this->input->post('meta_title'),
        'meta_description' => $this->input->post('meta_description'),
        'keyword' => $this->input->post('meta_description'),
      ));

      redirect(site_url('categories'));
    
  }


  


  if ($this->input->get('id') != "" && $this->input->get('id') > 0 ){
    $this->data['record'] = $this->categories_m->get_category($this->input->get('id'));
    $this->data['child'] = $this->categories_m->get_cateories($this->data['record']['category_id']);

  }

  $this->data['categories'] = $this->categories_m->get_cateories();
  $this->data['subview'] = 'admin/categories/form';
  $this->load->view('_layout', $this->data);

}



}
