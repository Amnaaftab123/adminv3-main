<?php $this->load->view('codeblocks/datatable.php');?>
<!-- Start content -->
    <div class="content">

  <div class="container-fluid">


          <div class="row">
              <div class="col-xl-12">
                  <div class="breadcrumb-holder">
                      <h1 class="main-title float-left">Page Content Listing</h1>

                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
          <!-- end row -->


          <div class="row">
              <div class="col-xl-12">
                <table id="example" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Page</th>
                                <th>Section</th>
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
 
    var table = $('#example').DataTable( {
        "ajax": "<?php echo site_url('content/listing_data');?>",
        "columns": [
            { "data": "id" },
            { "data": "title" },
            { "data": "page" },
            { "data": "module" },
            { "data": "last_update" },
            { "data": "view" }
        ],
        "order": [[1, 'asc']]
      });

    
});
</script>
