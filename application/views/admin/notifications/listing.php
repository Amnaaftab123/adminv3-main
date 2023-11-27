<?php $this->load->view('codeblocks/datatable.php');?>
    <div class="content">

  <div class="container-fluid">


          <!-- <div class="row">
              <div class="col-xl-12">
                  <div class="breadcrumb-holder">
                      <h1 class="main-title float-left">Customers Listing</h1>

                      <div class="clearfix"></div>
                  </div>
              </div>
          </div> -->
          <!-- end row -->
          

          <div class="row">
              <div class="col-xl-12">
                <table id="example" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Notification</th>
                                <th>Title</th>
                                <th>SMS</th>
                                <th>Last Updated</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                    </table>

              </div>
          </div>



        </div>
  <!-- END container-fluid -->
<!-- Start content -->

</div>
<!-- END content -->



<script>

$(document).ready(function() {
    var table = $('#example').DataTable( {
        "ajax": "<?php echo site_url('templates/listing_data');?>",
        "columns": [
            { "data": "id" },
            { "data": "title" },
            { "data": "short_code" },
            { "data": "sms" },
            { "data": "updated_at" },
            {"data": "actions"}


        ],
        "order": [[1, 'asc']]
    } );

});
</script>
