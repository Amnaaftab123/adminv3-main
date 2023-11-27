<?php $this->load->view('codeblocks/datatable.php');?>
<div class="content">
  <div class="container-fluid">




          <div class="row">
              <div class="col-xl-12">
                <table id="example" class="display dataTable" style="width:100%">
                        <thead>

                            <tr>
                                <th width="20%">ID</th>
                                <td><?php echo $detail['customer_id'];?></td>
                                
                            </tr>


                            <tr>
                                <th>Full Name</th>
                                <td><?php echo $detail['full_name'];?></td>
                                
                            </tr>


                            <tr>
                                <th>Mobile#</th>
                                <td><?php echo $detail['mobile_number'];?></td>
                                
                            </tr>


                            <tr>
                                <th>Email</th>
                                <td><?php echo $detail['email'];?></td>
                                
                            </tr>

                            <tr>
                                <th>Country</th>
                                <td><?php echo $detail['country_name'];?></td>
                                
                            </tr>


                        </thead>
                        
                    </table>

              </div>
          </div>

















      <h1><small>Customer Documents</small></h1>

          
          <!-- apartments -->
          <div class="row">
              <div class="col-xl-12">
           
                <table id="documents" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Document</th>
                                <th>Date</th>
                                
                            </tr>
                        </thead>             
                    </table>

              </div>
          </div>    














        </div>



        </div>
  <!-- END container-fluid -->
<!-- Start content -->

</div>
<!-- END content -->








<script>
/* Formatting function for row details - modify as you need */

$(document).ready(function() {
    var table = $('#documents').DataTable( {
        "ajax": "<?php echo site_url('admin/customers/documents_listing_data?id=' . $detail['customer_id']);?>",
        "columns": [
            
            { "data": "id" },
            { "data": "document_type" },
            { "data": "uploaded_date" }

            ],
        "order": [[1, 'asc']]
    } );

    // Add event listener for opening and closing details
    
  });

</script>