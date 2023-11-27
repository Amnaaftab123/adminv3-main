<?php $this->load->view('codeblocks/datatable.php'); ?>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- Start content -->
<div class="content">

  <div class="container-fluid">


    <div class="row">
      <button type="button" class="btn btn btn-primary" id="annonymous_bid">
        + Add Bid
      </button>

      <button type="button" class="btn btn btn-primary" id="annonymous_bid">
        Request Bid
      </button>



    </div>

    <div class="row">
      <div class="col-xl-12">
        <div class="breadcrumb-holder">
          <h1 class="main-title float-left">Bid Listing</h1>

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
              <th>Customer Name</th>
              <th>Date / Time</th>
              <th>Deposit</th>
              <th>Amount</th>
              <th>Guest bid</th>
              <th>Winner? </th>
              <th>Status</th>
              <th></th>
            </tr>
          </thead>

        </table>

      </div>
    </div>



  </div>
  <!-- END container-fluid -->




  <input type="hidden" id="auction_id" name="auction_id" value="<?php echo $id; ?>" />
</div>
<!-- END content -->


<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Annonymous Bid</h4>
      </div>
      <div class="modal-body">



        <div class="row">

          <div class="col-lg-6">
            <select class="form-control" id = "selected_customer" searchable="Search here.." style="width:100%; min-height:40px;">
              <option value="0">Select customer</option>
              <?php echo get_all_customers_drop_down(); ?>
            </select>
          </div>

          <div class="col-lg-6">
            <input type="number" name="bid_amount" min="<?php echo $auction['bid_current_value']; ?>" class="form-control" id="bid_amount" value="<?php echo $auction['bid_current_value']; ?>" />
          </div>


        </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-red" id="info_modal_continue" onclick="make_bid()">BID NOW</button>

      </div>
    </div>

  </div>
</div>





<script>
  var table;
  $(document).ready(function() {

    $('.mdb-select').select2({
      placeholder: 'Select an option'
    });

    $('#annonymous_bid').click(function() {
      $('#myModal').modal('show');
    });

    table = $('#example').DataTable({
      "pageLength": 100,
      "ajax": "<?php echo site_url("bids/listing_data?id=" . $auction_id); ?>",
      "columns": [{
          "data": "id"
        },
        {
          "data": "full_name"
        },
        {
          "data": "updated_at"
        },
        {
          "data": "deposit"
        },
        {
          "data": "currency"
        },
        {
          "data": "amount"
        },
        {
          "data": "is_annonymous"
        },
        {
          "data": "is_winner"
        },
        {
          "data": "status"
        },
        {
          "data": "edit"
        }
      ]
    });

  });


  function make_bid() {

    $.ajax({
      type: "POST",
      url: '<?php echo site_url('ajax/submit_bid'); ?>',
      data: '&id=' + $('#auction_id').val().trim() + '&customer_id=' + $('#select2-data-3-9gmk').val(),
      success: function(data) {
        result = jQuery.parseJSON(data);
        if (result.success == 1) {
          alert('Action completed');
          table.ajax.reload();

        } else {}
      },
      error: function(data) {
        console.log('An error occurred.');
        console.log(data);
      },
    });


  }

  function accept_bid(bid_id) {

    $.ajax({
      type: "POST",
      url: '<?php echo site_url('ajax/accept_bid'); ?>',
      data: '&id=' + $('#auction_id').val().trim() + '&bid_id=' + bid_id + '&ignore=0',
      success: function(data) {

        result = jQuery.parseJSON(data);

        if (result.success == 1) {
          alert('Action completed');

          $.ajax({
            type: "POST",
            url: '<?php echo site_url('ajax/accept_bid'); ?>',
            data: '&id=' + $('#auction_id').val().trim() + '&bid_id=' + bid_id + '&ignore=1',
            success: function(data) {
              result = jQuery.parseJSON(data);
              if (result.success == 1) {
                alert('Action completed');
                table.ajax.reload();

              } else {}
            },
            error: function(data) {
              console.log('An error occurred.');
              console.log(data);
            },
          });

        } else {

          if (result.data.result == 'less_bid') {

            //start less bid
            if (confirm('Selected bid is not the highest one, you want to continue?')) {

              $.ajax({
                type: "POST",
                url: '<?php echo site_url('ajax/accept_bid'); ?>',
                data: '&id=' + $('#auction_id').val().trim() + '&bid_id=' + bid_id + '&ignore=1',
                success: function(data) {
                  result = jQuery.parseJSON(data);
                  if (result.success == 1) {
                    alert('Action completed');
                    table.ajax.reload();

                  } else {}
                },
                error: function(data) {
                  console.log('An error occurred.');
                  console.log(data);
                },
              });


            } //end less bid

          }

        }

      },
      error: function(data) {
        console.log('An error occurred.');
        console.log(data);
      },
    });

  }
</script>