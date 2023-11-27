<?php $this->load->view('codeblocks/datatable.php');?>
<!-- Start content -->
    <div class="content">

  <div class="container-fluid">


    <div class="row">
    <button type="button" class="btn btn btn-primary" onClick="location.href='<?php echo site_url('auctions/form');?>'" >
                + Add New 
              </button>
    </div>

          <div class="row">
              <div class="col-xl-12">
                  <div class="breadcrumb-holder">
                      <h1 class="main-title float-left">Item Listing</h1>

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
                                <th>Bid Type</th>
                                <th>Category</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Current / Total Bid </th>
                                <th>Images</th>
                                <th>Status</th>                                
                                <th></th>
                                <th>Live</th>
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
var table;

$(document).ready(function() {
        table = $('#example').DataTable({
        "pageLength": 100,
        "ajax": "<?php echo site_url("auctions/listing_data");?>",
        "columns": [
            { "data": "id" },
            { "data": "full_name" },
            { "data": "title" },            
            { "data": "auction_type" },
            { "data": "category" },
            { "data": "start_date" },
            { "data": "end_date" },
            { "data": "bids" },
            {"data": "images"},
            { "data": "status" },
            { "data": "change_status" },
            {"data": "make_live"},
            { "data": "edit" }
        ]
    });

} );


function change_auction_status(a_id){

    $.ajax({
            type: "POST",
            url: '<?php echo site_url('ajax/change_auction_status'); ?>',
            data: '&id='+a_id+'&status=' + $('#a_s_'+ a_id).val(),
            success: function(data) {
                result = jQuery.parseJSON(data);
                table.ajax.reload();
            },
            error: function(data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });

}



function make_live(a_id){

    $.ajax({
            type: "POST",
            url: '<?php echo site_url('ajax/make_it_live'); ?>',
            data: '&id='+a_id,
            success: function(data) {
                result = jQuery.parseJSON(data);
            },
            error: function(data) {
                console.log('An error occurred.');
                console.log(data);
            },
        });

}


</script>
