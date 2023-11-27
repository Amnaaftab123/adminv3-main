<div class="row">
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <!-- row -->
                <h6 class="mg-t-30 mg-b-30 text-primary">Account Informations</h6>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                            <label>Username</label>
                            <input class="form-control" type="text" id="r_name" name="r_name" @isset($user) value = "<?php echo $user['name'];?>" @endisset>
                            <div class="erorr-container hide error" id="r_name_error">This field is required</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <input type = "hidden" name = "action" id = "action" value = "<?php echo $user['id'] == null ? 'add' : 'edit' ;?>" />
                <input type = "hidden" name = "role_id" id = "role_id" value = "<?php echo $user['id'] == null ? 0 : $user['id'] ;?>" />
                <button class="btn btn-primary mt-2" onclick="add_role()">Continue</button>
                <button class="btn btn-danger mt-2" onclick="go_roles()">Cancel</button>
            </div>
        </div>
    </div>
</div>