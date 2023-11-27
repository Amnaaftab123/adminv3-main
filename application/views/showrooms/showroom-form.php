<div class="row">
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <!-- row -->
                <h6 class="mg-t-30 mg-b-30 text-primary">Showroom Informations</h6>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                            <label>Title</label>
                            <input class="form-control" type="text" id="u_user_name" name="u_user_name" @isset($user) disabled value = "<?php echo $user['user_name'];?>" @endisset>
                            <div class="erorr-container hide error" id="u_user_name_error">This field is required</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                            <label>Contact#</label>
                            <input class="form-control" type="password" id="u_password" name="u_password">
                            <div class="erorr-container hide error" id="u_password_error">This field is required</div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                            <label>Email *</label>
                            <input class="form-control" type="email" id="u_email" name="u_email" @isset($user) value = "<?php echo $user['email'];?>" @endisset>
                            <div class="erorr-container hide error" id="u_email_error">This field is required</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                            <label>Address *</label>
                            <textarea class="form-control" type="text" id="u_first_name" name="u_first_name"></textarea>
                            <div class="erorr-container hide error" id="u_first_name_error">This field is required</div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                            <label>Coordinates </label>
                            <input class="form-control" type="text" id="u_last_name" name="u_last_name" @isset($user) value = "<?php echo $user['last_name'];?>" @endisset>
                            <div class="erorr-container hide error" id="u_last_name_error">This field is required</div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                            <label>Office timing (e.g Sat - Mon (09:00 - 18:00))</label>
                            <input class="form-control" type="text" id="u_contact_number" name="u_contact_number" @isset($user) value = "<?php echo $user['contact_number'];?>" @endisset>
                            <div class="erorr-container hide error" id="u_contact_number_error">This field is required</div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <input type = "hidden" name = "action" id = "action" value = "<?php echo $user['id'] == null ? 'add' : 'edit' ;?>" />
                <input type = "hidden" name = "showroom_id" id = "showroom_id" value = "<?php echo $user['id'] == null ? 0 : $user['id'] ;?>" />
                <button class="btn btn-primary mt-2" onclick="add_showroom()">Continue</button>
                <button class="btn btn-danger mt-2" onclick="go_showroom()">Cancel</button>
            </div>
        </div>
    </div>
</div>