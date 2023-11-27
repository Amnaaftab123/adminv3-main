<div class="row">
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <div class="card">
            <div class="card-body">
                <!-- row -->
                <h6 class="mg-t-30 mg-b-30 text-primary">Meta Data Informations</h6>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                            <label>Name</label>
                            <input class="form-control" type="text" id="d_name" name="d_name" @isset($meta) disabled value = "<?php echo $meta['name'];?>" @endisset>
                            <div class="erorr-container hide error" id="u_user_name_error">This field is required</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                        <label>Meta title</label>
                            <input class="form-control" type="text" id="d_title" name="d_title" @isset($meta) value = "<?php echo $meta['meta_title'];?>" @endisset />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                        <label>Meta description</label>
                            <textarea class="form-control" type="text" rows = "5" id="d_description" name="d_description"><?php echo $meta['meta_description'];?></textarea>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                        <label>Meta keywords</label>
                            <textarea class="form-control" type="text" rows = "5" id="d_keywords" name="d_keywords"><?php echo $meta['meta_keyword'];?></textarea>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                        <div class="form-group text-start">
                        <label>JS code</label>
                            <textarea class="form-control" type="text" id="d_code" name="d_code"><?php echo $meta['analytics_code'];?></textarea>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <input type = "hidden" name = "action" id = "action" value = "<?php echo $meta['id'] == null ? 'add' : 'edit' ;?>" />
                <input type = "hidden" name = "tempate_id" id = "tempate_id" value = "<?php echo $meta['id'] == null ? 0 : $meta['id'] ;?>" />
                <button class="btn btn-primary mt-2" onclick="update_data()">Continue</button>
                <button class="btn btn-danger mt-2" onclick="go_meta()">Cancel</button>
            </div>
        </div>
    </div>
</div>