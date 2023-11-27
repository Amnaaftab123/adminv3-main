<div class="d-flex p-3 br-5 justify-content-end">
</div>
<!-- row -->
<div class="row">
<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
<div class="card">
            <div class="card-body">
    <div class="table-responsive ">
        <table class="table table-bordered text-nowrap border-bottom is_datatable">
            <tbody>
                <?php foreach($system as $v):?>
                    <tr>
                        <td class="wd-10p"><?php echo $v['type'];?></td>
                        <td class="wd-90p">
                            <?php if($v['setting_type'] == 'boolean'):?>
                                <select class = "form-select">
                                    <option value = "yes">Yes</option>
                                    <option value = "no">No</option>
                                </select>
                            <?php else:?>
                                <input type = "text" class = "form-control" value = "<?php echo $v['description'];?>" />
                            <?php endif;?>
                            
                        </td>
                    </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary mt-2" >Continue</button>
                <button class="btn btn-danger mt-2">Cancel</button>
            </div>
</div>
</div>
</div>