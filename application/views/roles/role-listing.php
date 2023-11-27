<div class="d-flex p-3 br-5 justify-content-end">
    <div class="pd-0 flex-fill ">
        <div class="input-group">
            <input class="form-control" placeholder="Search for..." type="text" id='roles-search-box'>
            <button class="btn btn-primary br-ts-0 br-bs-0" type="button"><i class="fa fa-search"></i></button>
        </div>
    </div>
    <div class="pd-0 mg-l-10 ">
        <a href="<?php echo $add_url; ?>" class="btn btn-danger"><i class="fe fe-plus me-2"></i>Add Role</a>
    </div>
</div>
<!-- row -->
<div class="row">
    <div class="table-responsive ">
        <table class="table table-bordered text-nowrap border-bottom is_datatable" id="roles_responsive_datatable">
            <thead>
                <tr>
                    <th class="wd-5p">Id</th>
                    <th class="wd-20p">Role name</th>
                    <th class="wd-20p">Total users</th>
                    <th class="wd-40p">Last updated</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>