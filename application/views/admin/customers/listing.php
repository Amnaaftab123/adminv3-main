<?php $this->load->view('codeblocks/datatable.php');?>
<!-- Start content -->
    <div class="content">

  <div class="container-fluid">


    <div class="row">
            <button type="button" class="btn btn btn-primary" onClick="location.href='<?php echo site_url('customers/form');?>'" >
                + Add New 
            </button>

            <button type="button" class="btn btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                + Request for deposit 
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
              
              










          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Retail Customers</a></li>
              <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Coperate Clients</a></li>
              <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Blocked Customers</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              <div class="row">
              <div class="col-xl-12">
                <table id="example" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                                <th></th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Country Code</th>
                                <th>Mobile#</th>
                                <th>Deposit (AED)</th>
                                <th>Total Bids</th>
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
                <table id="example1" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                            <th></th>
                                <th>ID</th>
                                <th>Contact Person</th>
                                <th>Email</th>
                                <th>Phone#</th>
                                <th>License#</th>
                                <th>Total Auctions</th>
                                <th>Company Name</th>
                                <th>Address</th>
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
                <table id="example2" class="display dataTable" style="width:100%">
                        <thead>
                            <tr>
                            <th></th>
                                <th>ID</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Country Code</th>
                                <th>Mobile#</th>
                                <th>Credits</th>
                                <th>Total Orders</th>
                                <th>Last Login</th>
                                <th>Area</th>
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



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">

                <div class="form-group col-lg-3">
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
                  <label for="exampleInputEmail1">Mobile number *</label>
                  <input type="text" class="form-control" onchange="validate_number(this)" required="required" id="mobile_number" name="full_name" value="" placeholder="5XXXXXXXX">
                </div>

                <div class="form-group col-lg-3">
                  <label for="exampleInputEmail1">Customer name</label>
                  <input type="text" class="form-control" id="full_name" name="full_name" value="">
                </div>


                <div class="form-group col-lg-3">
                  <label for="exampleInputEmail1">Deposit value *</label>
                  <input type="text" class="form-control" required="required" id="deposit_value" name="deposit_value" value="<?php echo $deposit;?>">
                </div>

        </div>


        <div class="row">

                <div class="form-group col-lg-2">
                  <input type="radio" class="" value = "1" name="language" id = "language" checked> English</input>
                </div>

                <div class="form-group col-lg-2">
                  <input type="radio" class="" value = "2" name="language" id = "language" > العربي</input>
                </div>
        </div>

       

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id = "make_request" onclick="make_request()">Make request</button>
      </div>
    </div>
  </div>
</div>






<script>
/* Formatting function for row details - modify as you need */

$(document).ready(function() {

    var table = $('#example').DataTable( {
        "ajax": "<?php echo site_url("customers/listing_data?type=1");?>",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "id" },
            { "data": "full_name" },
            { "data": "email" },            
            { "data": "country_code" },
            { "data": "mobile" },
            { "data": "deposit" },
            { "data": "total_bids" },
            { "data": "edit" }
        ],
        "order": [[1, 'asc']]
    } );



    var table = $('#example1').DataTable( {
        "ajax": "<?php echo site_url("customers/listing_data?type=2");?>",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "id" },
            { "data": "contact_person_name" },
            { "data": "email" },            
            { "data": "office_number" },
            { "data": "license_number" },
            { "data": "total_auctions" },
            { "data": "company_name" },
            { "data": "address" },
            { "data": "edit" }
        ],
        "order": [[1, 'asc']]
    } );



    


    var table = $('#example2').DataTable( {
        "ajax": "<?php echo site_url("customers/listing_data?type=3");?>",
        "columns": [
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
            },
            { "data": "id" },
            { "data": "full_name" },
            { "data": "email" },            
            { "data": "mobile" },
            { "data": "deposit" },
            { "data": "total_bids" },
            { "data": "last_login" },
            { "data": "area" },
            { "data": "edit" }
        ],
        "order": [[1, 'asc']]
    } );




    
} );


function validate_number(element){
    
    if(phonenumber(element)){

      $.ajax({
                type: "POST",
                url: '<?php echo site_url('ajax/mobile_exits');?>',
                data: '&mobile_number=' + $('#mobile_number').val().trim() + '&country_code=' + $('#country_code').val(),
                    success: function(data) {
                        result = jQuery.parseJSON(data);

                            if(result.success == 1){
                              $('#full_name').val("");

                            }else {
                              $('#full_name').val("");

                              if(result.data.full_name != ""){
                                $('#full_name').val(result.data.full_name);

                              }
                            }

                          },
                          error: function(data) {
                              console.log('An error occurred.');
                              console.log(data);
                          },
                });


    }else {
        alert('Invalid mobile number!, please try again')
    }


}

function phonenumber(inputtxt)
{
  var phoneno = /^[0-9]+$/;
  if(inputtxt.value.match(phoneno)){
      return true;

    }else if(inputtxt.value.length < 12){

        return false;
    }
    else{
        return false;

        }
}




function make_request(){

  var phoneno = /^[0-9]+$/;
  if($('#mobile_number').val().match(phoneno)){

$('#make_request').val('Wait...');
    $.ajax({
                type: "POST",
                url: '<?php echo site_url('ajax/make_deposit_request');?>',
                data: '&mobile_number=' + $('#country_code').val() + $('#mobile_number').val().trim() + '&langugae=' + $("input[name='language']:checked").val() + '&deposit=' + $('#deposit_value').val() + '&full_name=' + $('#full_name').val(),
                    success: function(data) {
                        result = jQuery.parseJSON(data);

                            if(result.success == 1){
                              alert('Request submitted successfully!');
                              $("#exampleModal").modal('hide');
                              

                            }else {
                              alert('Error occured, please try again later!');
                            
                            }
                          },
                          error: function(data) {
                              console.log('An error occurred.');
                              console.log(data);
                          },
                });
                $('#make_request').val('Make request');


  }else{
    alert('Invalid mobile number');
  }

}

</script>
