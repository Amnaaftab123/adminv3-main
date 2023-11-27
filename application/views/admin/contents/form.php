    <!-- start of content div -->
<div class="content">

<form method="post" action="<?php echo site_url('admin/content/form?id='.$content->content_id.'&module='.$content->module.'');?>">


      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              




















              <!-- tools box -->
              
            <!-- /.box-header -->
            <div class="box-body pad">
              


                <div class="form-group">
                  <label for="exampleInputEmail1">Page name</label>
                  <input type="email" class="form-control" readonly="readonly" id="exampleInputEmail1" value="<?php echo $content->title;?>" placeholder="Enter email">
                </div>









<!-- tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">English</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">عربي</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">



                      <!-- tab inner -->

                
                      <textarea id="descriptionEnglish" name="descriptionEnglish" rows="10" cols="80"><?php echo $content->description_english;?></textarea>
                      <!-- end tab inner -->





              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">


                                      <!-- tab inner -->

                

                      <textarea id="descriptionArabic" name="descriptionArabic" rows="10" cols="80"><?php echo $content->description_arabic;?></textarea>
                      <!-- end tab inner -->



              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
<br />



  <div class="form-group">
                  <label for="exampleInputEmail1">Meta Title</label>
                  <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="" value="<?php echo $content->meta_title;?>">
                </div>




  <div class="form-group">
                  <label for="exampleInputEmail1">Meta Description</label>
                  <textarea type="email" class="form-control" id="meta_description" name="meta_description" placeholder=""><?php echo $content->meta_description;?>></textarea>
                </div>






 <div class="timeline-footer">
                  <input type="hidden" name="id" value="<?php echo $content->content_id;?>" id="id"  />
                  <input type="hidden" name="module" value="<?php echo $content->module;?>" id="module"  />

                  <a href="<?php echo site_url('admin/content');?>" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-primary">Update</a>
                </div>
<br />
          </div>
          <!-- nav-tabs-custom -->
<!-- end tabs -->









              




                   
             
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










<script src="<?php echo base_url("admin-assets/default/bower_components/ckeditor/ckeditor.js");?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url("admin-assets/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js");?>"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('descriptionEnglish')
    //bootstrap WYSIHTML5 - text editor

    CKEDITOR.replace('descriptionArabic')
    //bootstrap WYSIHTML5 - text editor
    


  })



    



</script>