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
                  <label for="exampleInputEmail1">Full name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="" placeholder="Enter name">
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Mobile#</label>
                  <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="" value="">
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="" value="">
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Confirm password</label>
                  <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="" value="">
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="" value="">
                </div>




                <div class="timeline-footer">
                  <input type="hidden" name="id" value="<?php echo $content->content_id;?>" id="id"  />
                  <input type="hidden" name="module" value="<?php echo $content->module;?>" id="module"  />

                  <a href="<?php echo site_url('admin/tenant/listing');?>" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-primary">Update</a>
                </div>
<br />







              




                   
             
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