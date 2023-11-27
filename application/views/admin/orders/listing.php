<?php $this->load->view('codeblocks/datatable.php');?>
<!-- Start content -->
    <div class="content">

  <div class="container-fluid">


<!--    <div class="row">
    <button type="button" class="btn btn btn-primary" onClick="location.href='<?php echo site_url('customers/form');?>'" >
                + Add New 
              </button>
    </div>
    -->

          <div class="row">
              <div class="col-xl-12">
                  <div class="breadcrumb-holder">
                      <h1 class="main-title float-left">Orders Listing</h1>

                      <div class="clearfix"></div>
                  </div>
              </div>
          </div>
          <!-- end row -->


          <div class="row">



          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Pending</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Under Process</a></li>
              <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Completed</a></li>
              <li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Canceled</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              <div class="row">
              <div class="col-xl-12">
                <table id="pending" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Mobile#</th>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Initial Payment</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                    </table>

              </div>
          </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
              <div class="row">
              <div class="col-xl-12">
                
              <table id="under" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Mobile#</th>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Initial Payment</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                    </table>


              </div>
          </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <div class="row">
                    <div class="col-xl-12">
                        
                    <table id="completed" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Mobile#</th>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Initial Payment</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                    </table>
                    </div>
                </div>
              </div>


              <div class="tab-pane" id="tab_4">
                <div class="row">
                    <div class="col-xl-12">
                        
                    <table id="canceled" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Mobile#</th>
                                <th>Item</th>
                                <th>Price</th>
                                <th>Initial Payment</th>
                                <th></th>
                            </tr>
                        </thead>
                        
                    </table>
                    </div>
                </div>
              </div>



              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>


























          </div>



        </div>
  <!-- END container-fluid -->


   


</div>
<!-- END content -->





<script>
/* Formatting function for row details - modify as you need */

$(document).ready(function() {

    var table = $('#pending').DataTable( {
        "ajax": "<?php echo site_url("orders/listing_data?type=1");?>",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "id" },
           
        ],
        "order": [[1, 'asc']]
    });

    var table2 = $('#under').DataTable( {
        "ajax": "<?php echo site_url("orders/listing_data?type=1");?>",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "id" },
           
        ],
        "order": [[1, 'asc']]
    });


    var table3 = $('#completed').DataTable( {
        "ajax": "<?php echo site_url("orders/listing_data?type=1");?>",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "id" },
           
        ],
        "order": [[1, 'asc']]
    });


    var table4 = $('#canceled').DataTable( {
        "ajax": "<?php echo site_url("orders/listing_data?type=1");?>",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "id" },
           
        ],
        "order": [[1, 'asc']]
    });



    
} );
</script>
