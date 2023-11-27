<?php $this->load->view('codeblocks/datatable.php');?>
<!-- Start content -->
    <div class="content">

  <div class="container-fluid">


          <div class="row">
              <div class="col-xl-12">
                  <div class="breadcrumb-holder">
                      <h1 class="main-title float-left">Tenants Listing</h1>

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
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Mobile#</th>
                                <th>Building</th>
                                <th>Flat</th>
                                <th>Agreement#</th>
                                <th>Last OTP</th>
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
/* Formatting function for row details - modify as you need */
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
            '<td>Full name:</td>'+
            '<td>'+d.fullname+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.mobile+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extra info:</td>'+
            '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
    '</table>';
}

$(document).ready(function() {
    var table = $('#example').DataTable( {
        "ajax": "<?php echo site_url('admin/tenant/listing_data');?>",
        "columns": [
            
            { "data": "id" },
            { "data": "fullname" },
            { "data": "mobile" },
            { "data": "building" },
            { "data": "flat" },
            { "data": "agreementnumber" },
            { "data": "lastotp" },
        ],
        "order": [[1, 'asc']]
    } );

    // Add event listener for opening and closing details
    $('#example tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    } );
} );
</script>
