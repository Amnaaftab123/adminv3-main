<div class="d-flex p-3 br-5 justify-content-end">
      <div class="pd-0 flex-fill ">
        <div class="input-group">
          <input class="form-control" placeholder="Search for..." type="text" id = 'sell-search-box'>
          <button class="btn btn-primary br-ts-0 br-bs-0" type="button"><i class="fa fa-search"></i></button>
        </div>
      </div>
    </div>
    <!-- row -->
    <div class="row">
        
      <div class="col-md-3 col-xl-3 col-xs-3 col-sm-12">
        <div class = "table-responsive">  
            <table class = "table mg-b-0 text-md-nowrap"  id = "load_sell_inquiries">
            <tbody>
            </tbody>
            </table>
        </div>
      </div>

      <div class="col-md-9 col-xl-9 col-xs-9 col-sm-12  ht-100">
        <div class="card">
            <div class = "card-body" id = "ss-c">
                Click on inqiury to see details
            </div>
        </div>
      </div>
    </div>
    <input type= "hidden" id = "selected_id" name = "selected_id" value = "0" />

    <script>
        $(function () {
            load_sell_query();
        });
        
    </script>