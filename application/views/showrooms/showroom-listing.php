<div class="d-flex p-3 br-5 justify-content-end">
    <div class="pd-0 flex-fill ">
        <div class="input-group">
            <input class="form-control" placeholder="Search for..." type="text" id='showrooms-search-box'>
            <button class="btn btn-primary br-ts-0 br-bs-0" type="button"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <div class="pd-0 mg-l-10 ">
        <a href="<?php echo $add_url; ?>" class="btn btn-danger"><i class="fe fe-plus me-2"></i>Add Showroom</a>
    </div>
</div>
<!-- row -->
<div class="row">
    <div class="table-responsive ">
        <table class="table table-bordered text-nowrap border-bottom is_datatable" id="showrooms_responsive_datatable">
            <thead>
                <tr>
                    <th class="wd-5p">Id</th>
                    <th class="wd-20p">Showroom</th>
                    <th class="wd-10p">Contact#</th>
                    <th class="wd-10p">Email</th>
                    <th class="wd-20p">Total vehicles</th>
                    <th class="wd-40p">Last updated</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>