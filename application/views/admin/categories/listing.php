<?php $this->load->view('codeblocks/datatable.php');?>
<!-- Start content -->
    <div class="content">

  <div class="container-fluid">


    <div class="row">
    <button type="button" class="btn btn btn-primary" onClick="location.href='<?php echo site_url('categories/form');?>'" >
                + Add New 
              </button>
    </div>

          <div class="row">
              <div class="col-xl-12">
                  <div class="breadcrumb-holder">
                      <h1 class="main-title float-left">Category Listing</h1>

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
                                <th>Childs</th>
                                <th>Active</th>
                                <th>Last updated</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tfoot>
                          <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Childs</th>
                                <th>Active</th>
                                <th>Last updated</th>
                                <th></th>
                          </tr>
                        </tfoot>
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
            '<td>'+d.title+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td>Extension number:</td>'+
            '<td>'+d.title+'</td>'+
        '</tr>'+
    '</table>';
}

$(document).ready(function() {
    var table = $('#example').DataTable( {
        "pageLength": 50,
        "ajax": "<?php echo site_url("categories/listing_data");?>",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "id" },
            { "data": "title" },
            { "data": "childs" },
            { "data": "isactive" },
            { "data": "lastupdated" },
            { "data": "edit" }
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
