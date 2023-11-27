



<?php $this->load->view('codeblocks/datatable.php');?>
<!-- Start content -->
    <div class="content">

  <div class="container-fluid">


          <div class="row">
              <div class="col-xl-12">
                  <div class="breadcrumb-holder">
                      <h1 class="main-title float-left">Banners Listing</h1>

                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
          <!-- end row -->
              
              


          <div class="row">
              <div class="col-xl-12">
                <br />
                <button type="button" class="btn btn btn-primary" data-toggle="modal" data-target="#modal-default" >
                + Add New 
              </button>&nbsp;&nbsp;<br /><br />  
              


                <table id="example" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Started at</th>
                                <th>Expiring at</th>
                                <th></th>
                            </tr>
                        </thead>
                       
                    </table>

              </div>
          </div>



        </div>
  <!-- END container-fluid -->

</div>
<!-- END content -->





<script>

$(document).ready(function() {
 
    var table = $('.dataTable').DataTable( {
        "ajax": "<?php echo site_url('banners/listing_data');?>",
        "columns": [
            { "data": "id" },
            { "data": "title" },
            { "data": "start" },
            { "data": "expire" },
            { "data": "view" }
        ],
        "order": [[1, 'asc']]
      });

    
});
</script>







 <div class="modal fade" id="modal-default">
          


      <form method="post" action="<?php echo site_url('admin/banners/upload');?>" enctype="multipart/form-data" >

          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                



                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" id="title" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="banner_file" name="banner_file">

                    <p class="help-block">required image size 1920 x 800, only .png or .jpg files</p>
                  </div>




              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <input type="hidden" id="upload" name="upload" value="1" />
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </form>






        </div>
