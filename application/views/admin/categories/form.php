    <!-- start of content div -->
<div class="content">

<form method="post" action="<?php echo site_url('categories/form');?>" enctype="multipart/form-data">


      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
            

            <div class="breadcrumb-holder">
                  
                      <h4 class="main-title float-left">Categories :: <?php echo $edit_mode ? 'Edit' : 'Add';?></h4>


                      <div class="clearfix"></div>
                  </div>

              <!-- tools box -->
              
            <!-- /.box-header -->
            <div class="box-body pad">
              


<!-- tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">English</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">عربي</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">




              <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control"  id="name_english" name="name_english" value = "<?php echo $record['category_id'] == '' ? '' : $record['title'] ;?>" placeholder="Enter name">
                </div>



                      <!-- tab inner -->

                
                      <textarea id="description_english" name="description_english" rows="10" cols="80"><?php echo $record['category_id'] == '' ? '' : $record['description'] ;?></textarea>
                      <!-- end tab inner -->





              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">


                                      <!-- tab inner -->

                  <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control"  id="name_arabic" name="name_arabic" placeholder="Enter name" require>
                </div>



            

                      <textarea id="description_arabic" name="description_arabic" rows="10" cols="80"  require></textarea>
                      <!-- end tab inner -->



              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>

            <div class="form-group">
                  <label for="exampleInputEmail1">Position</label>
                  <select class="form-control" id="parent_category" name = "parent_category"  >
                      <option value = "0">Select category</option>
                      <?php foreach($categories as $category):?>
                      <option value = "<?php echo $category->category_id;?>" <?php echo $category->category_id == $record['parent_id'] ? 'selected' : '';?>><?php echo $category->title;?></option>
                      <?php endforeach;?>
                      
                  </select>
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Meta Title</label>
                  <input type="text" class="form-control"  id="meta_title" name = "meta_title" value="<?php echo $record['category_id'] == '' ? '' : $record['meta_title'] ;?>"  require >
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Meta Description</label>
                  <textarea type="text" class="form-control" id="meta_description" name = "meta_description"  ><?php echo $record['category_id'] == '' ? '' : $record['meta_description'] ;?></textarea>
                </div>

 




            <!-- /.tab-content -->
<br />






        <div class="timeline-footer">
                  



                  <?php if($record['category_id'] != ""):?>
                  <input type="hidden" name="id" value="<?php echo $record['category_id'];?>" id="id"  />
                  <input type="hidden" name="action" value="edit" />
                  <?php else:?>
                    <input type="hidden" name="action" value="add" />
                  <?php endif;?>




                  <a href="<?php echo site_url('categories');?>" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-primary">Update</a>
                </div>
<br />
          </div>
          <!-- nav-tabs-custom -->
<!-- end tabs -->









              



            <?php if (count($child) > 0 ):?>        
            <div class = "row">
              <table width = "100%" class = "display dataTable">
              <tr>
                  <th>Category Id</th>
                  <th>Title</th>
                  <th>Childs</th>
                </tr>
              <?php foreach($child as $row):?>
                <tr>
                  <th><?php echo $row->category_id;?></th>
                  <th><?php echo $row->title;?></th>
                  <th><?php echo $row->childs;?> categories</th>
                </tr>
              <?php endforeach;?>
              </table>
            </div>   
            <?php endif;?>




             
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->



      




    </section>
  
      

</div>


 </form>



 
</div>










<script src="<?php echo base_url("views/template//default/bower_components/ckeditor/ckeditor.js");?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url("views/template/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js");?>"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('description_english')
    //bootstrap WYSIHTML5 - text editor

    CKEDITOR.replace('description_arabic')
    //bootstrap WYSIHTML5 - text editor
    


  })



    



</script>