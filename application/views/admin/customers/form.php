    <!-- start of content div -->
    <div class="content">

<form method="post" action="<?php echo site_url('customers/form');?>" enctype="multipart/form-data">


      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
            

            <div class="breadcrumb-holder">
            <h4 class="main-title float-left">Customers :: <?php echo $edit_mode ? 'Edit' : 'Add';?></h4>

                      <div class="clearfix"></div>
                  </div>

              <!-- tools box -->
              
            <!-- /.box-header -->
            <div class="">
              


<!-- tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">English</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">

              </div>
              <!-- /.tab-pane -->

              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>


            <div class="container">

            <div class="row">

            <?php
            if(count($error) > 0){
              generate_error($error);
            }
            ?>
            

            <div class="form-group col-lg-4">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" class="form-control" required  id="full_name" name="full_name" value="<?php echo (($submitted) ? $this->input->post('full_name') : "");?>">
                </div>

                <div class="form-group col-lg-4">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" required  id="email" name="email"  value="<?php echo (($submitted) ? $this->input->post('email') : "");?>" >
                </div>


                <div class="form-group col-lg-1">
                  <label for="exampleInputEmail1">Code</label>
                  <select class="form-control" id="country_code" name="country_code">
                    <option value="971">971</option>
                    <option value="966">966</option>
                    <option value="965">965</option>
                    <option value="974">974</option>
                    <option value="20">20</option>
                  </select>
                </div>

                <div class="form-group col-lg-3">
                  <label for="exampleInputEmail1">Mobile#</label>
                  <input type="text" class="form-control" required  id="mobile_number" name="mobile_number"  value="<?php echo (($submitted) ? $this->input->post('mobile_number') : "");?>">
                </div>
    </div>


                <div class="row">

                <div class="form-group col-lg-4">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" required  minlength="3" id="username" name="username"  placeholder="" value="<?php echo (($submitted) ? $this->input->post('username') : "");?>">
                </div>

                <div class="form-group col-lg-4">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="text" class="form-control" required  minlength="3" id="password" name="password"  placeholder="" value="<?php echo (($submitted) ? $this->input->post('password') : "");?>">
                </div>

                <div class="form-group col-lg-4">
                  <label for="exampleInputEmail1">Customer Type</label>
                  <select class="form-control" id="customer_type" name = "customer_type"  >
                      <option value = "buyer">Retail</option>
                      <!--<option value = "0">Corporate</option>-->
                      
                  </select>
                </div>

                
                    </div>


                <div class="row">

                <div class="form-group col-lg-4">
                  <label for="exampleInputEmail1">Supported Document <i style="padding-left:20px;font-weight:100;">.jpg, .png formats only</i></label>
                  <input type="file" class="form-control"  id="supported_documents" name="supported_documents" >
                </div>

                <div class="form-group col-lg-4">
                  <label for="exampleInputEmail1">Enabled</label>
                  <select class="form-control" id="enabled" name = "enabled"  >
                      <option value = "1">Yes</option>
                      <option value = "0">No</option>
                  </select>
                </div>

                  <div class="form-group col-lg-4">
                    <label for="exampleInputEmail1">Verified</label>
                    <select class="form-control" id="verified" name = "verified"  >
                        <option value = "1">Yes</option>
                        <option value = "0">No</option>
                    </select>
                  </div>
                </div>




                <!-- default address -->
                <!-- <h4>Default address details (optional)</h4>

                <div class="row">


                <div class="form-group col-lg-3">
                  <label for="exampleInputEmail1">Title (e.g Home, Office)</label>
                  <input type="text" class="form-control"  id="internal_code" name="internal_code" value = "<?php echo $record['category_id'] == '' ? '' : $record['internal_code'] ;?>" placeholder="">
                </div>



                <div class="form-group col-lg-3">
                  <label for="exampleInputEmail1">Apartment/Villa#</label>
                  <input type="text" class="form-control"  id="internal_code" name="internal_code" value = "<?php echo $record['category_id'] == '' ? '' : $record['internal_code'] ;?>" placeholder="">
                </div>



                <div class="form-group col-lg-3">
                  <label for="exampleInputEmail1">Street / Building</label>
                  <input type="text" class="form-control"  id="internal_code" name="internal_code" value = "<?php echo $record['category_id'] == '' ? '' : $record['internal_code'] ;?>" placeholder="">
                </div>



                <div class="form-group col-lg-3">
                  <label for="exampleInputEmail1">Area</label>
                  <select class="form-control" id="enabled" name = "enabled"  >
                      <option value = "1">Yes</option>
                      <option value = "0">No</option>
                  </select>
                </div>

                </div> -->

                <!-- <div class = "row">

                <div class="form-group col-lg-6">
                  <label for="exampleInputEmail1">Detail address</label>
                  <input type="text" class="form-control"  id="internal_code" name="internal_code" value = "<?php echo $record['category_id'] == '' ? '' : $record['internal_code'] ;?>" placeholder="">
                </div>


                <div class="form-group col-lg-6">
                  <label for="exampleInputEmail1">Nearest landmark / instrution</label>
                  <input type="text" class="form-control"  id="internal_code" name="internal_code" value = "<?php echo $record['category_id'] == '' ? '' : $record['internal_code'] ;?>" placeholder="">
                </div>

                </div> -->

                <!-- <div class="row">

                <div class="form-group col-lg-2">
                  <label for="exampleInputEmail1">Latitude</label>
                  <input type="text" class="form-control"  id="internal_code" name="internal_code" value = "<?php echo $record['category_id'] == '' ? '' : $record['internal_code'] ;?>" placeholder="">
                </div>

                <div class="form-group col-lg-2">
                  <label for="exampleInputEmail1">Longitude</label>
                  <input type="text" class="form-control"  id="internal_code" name="internal_code" value = "<?php echo $record['category_id'] == '' ? '' : $record['internal_code'] ;?>" placeholder="">
                </div>


                <div class="form-group col-lg-2">
                  <button onclick="window.open('https://maps.google.com');" class="btn btn-info" style="margin-top:25px;">Pick from map</button>
                </div>

                </div> -->

                <!-- end default address -->




            </div><!-- end of container -->

            
            
            
            
            





 




            <!-- /.tab-content -->
<br />






 <div class="timeline-footer">
                  



                  <?php if($record['customer_id'] != ""):?>
                  <input type="hidden" name="id" value="<?php echo $record['customer_id'];?>" id="id"  />
                  <input type="hidden" name="action" value="edit" />
                  <?php else:?>
                    <input type="hidden" name="action" value="add" />
                  <?php endif;?>
                    <input type="hidden" name="upload" id = "upload" value="1" />



                  <a href="<?php echo site_url('customers');?>" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-primary"><?php echo $edit_mode ? 'Update' : 'Add';?></a>
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
    CKEDITOR.replace('descriptionEnglish')
    //bootstrap WYSIHTML5 - text editor

    CKEDITOR.replace('descriptionArabic')
    //bootstrap WYSIHTML5 - text editor
    


  })



    



</script>