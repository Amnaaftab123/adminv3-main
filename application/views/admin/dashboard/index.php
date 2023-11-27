<div class="d-flex p-3 br-5 justify-content-end">
      <div class="pd-0 flex-fill ">
        <div class="input-group">
          <input class="form-control" placeholder="Search for..." type="text">
          <button class="btn btn-primary br-ts-0 br-bs-0" type="button"><i class="fa fa-search"></i></button>
        </div>
      </div>
      <div class="pd-0 mg-l-10 ">
        <a href="javascript:void(0);" class="btn btn-danger"><i class="fe fe-plus me-2"></i>Add Vehicle</a>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <!-- filter row -->
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <select name="somename" class="form-control sumo-select">
              <option>Recently added</option>
              <option>Anciently added</option>
              <option>Cheap first</option>
              <option>Expensive first</option>
            </select>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <select name="somename" class="form-control sumo-select">
              <option>All statuses</option>
              <option>Active</option>
              <option>Inactive</option>
              <option>Paused</option>
              <option>Sold</option>
            </select>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <select name="somename" class="form-control sumo-select">
              <option>Most viewed</option>
              <option>Less viewed</option>
            </select>
          </div>

          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <select name="somename" class="form-control sumo-select">
              <option>All showrooms</option>
              <option>Sharjah</option>
            </select>
          </div>
        </div>


        <!-- filter row 2 -->
        <div class="row mg-t-10">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <div class="input-group">
              <div class="input-group-text">
                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
              </div>
              <input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" id="dp1665333794222">
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <div class="input-group">
              <div class="input-group-text">
                <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
              </div>
              <input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text" id="dp1665333794222">
            </div>
          </div>
        </div>


        <!-- page row -->
        <div class="row mg-t-10" id = "d-c">
          
        </div>
      </div>
    </div>


    <script>
      get_dashoard_vehicles({
        'url': '<?php echo $ajax['url'];?>'
      })
    </script>