    <!-- start of content div -->
    <div class="content">

      <form method="post" action="<?php echo site_url('auctions/form'); ?>" enctype="multipart/form-data">

        <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
              <div class="box-header">

                <div class="breadcrumb-holder">
                  <h4 class="main-title float-left">Auctions :: <?php echo $edit_mode ? 'Edit' : 'Add'; ?></h4>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- tools box -->

              <!-- /.box-header -->
              <div class="box-body pad">

                <div class="row">


                  <div class="form-group col-lg-3">
                    <label>Seller</label>
                    <select class="form-control" id="seller" name="seller">
                      <?php echo $sellers; ?>
                    </select>
                  </div>

                  <!--<div class="form-group col-lg-3">
                          <label>Currency</label>
                          <select class="form-control" id="currency" name = "currency"  >
                              <option value = "2" <?php echo (($auction['currency_symbol'] == 2) ? "selected" : ""); ?>>AED (United Arab Emirates)</option>
                              <option value = "1" <?php echo (($auction['currency_symbol'] == 1) ? "selected" : ""); ?>>USD (United States)</option>
                          </select>
                    </div>-->


                  <div class="form-group col-lg-3">
                    <label>List Type *</label>
                    <select class="form-control" id="list_type" name="list_type">
                      <option value="1" <?php echo (($auction['bit'] == 1) ? "selected" : ""); ?>>Auction</option>
                      <option value="0" <?php echo (($auction['bit'] == 0) ? "selected" : ""); ?>>Sell Only</option>
                    </select>
                  </div>



                  <div class="form-group col-lg-3">
                    <label>Lot# <span class="required-label">*</span></label>
                    <input type="number" class="form-control" id="lot_number" name="lot_number" required value="<?php echo (($auction['lot_number'] == "") ? 0 : $auction['lot_number']); ?>" />
                  </div>



                  <div class="form-group col-lg-3">
                    <label>Category <span class="required-label">*</span></label>
                    <select class="form-control" id="category" name="category">
                      <option value="0">Select category</option>
                      <?php echo $categories; ?>

                    </select>
                  </div>


                </div>




                <div class="row">

                  <div class="form-group col-lg-3">
                    <label>Start Date <span class="required-label">*</span></label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo $auction['start_date']; ?>" required />
                  </div>


                  <div class="form-group col-lg-3">
                    <label>End Date <span class="required-label">*</span></label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $auction['end_date']; ?>" required />
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Shippable</label>
                    <select class="form-control" id="shippable" name="shippable" />
                    <option value="1" <?php echo (($auction['is_shippable'] == 1) ? "selected" : ""); ?>>Yes</option>
                    <option value="0" <?php echo (($auction['is_shippable'] == 1) ? "selected" : ""); ?>>No</option>

                    </select>
                  </div>


                  <div class="form-group col-lg-3 shipping-details">
                    <label>Shipping Type</label>
                    <select class="form-control" id="shipping_type" name="shipping_type">
                      <option value="0" <?php echo (($auction['shipping_type'] == 1) ? "selected" : ""); ?>>Free</option>
                      <option value="1" <?php echo (($auction['shipping_type'] == 1) ? "selected" : ""); ?>>Paid</option>

                    </select>
                  </div>

                </div>

                <div class="row vehicle-details">

                  <div class="form-group col-lg-3">
                    <label>Odometer </label>
                    <input type="text" class="form-control" id="odometer" name="odometer" value="<?php echo (($cdata['odometer'] == "") ? 0 : $cdata['odometer']); ?>" />
                  </div>

                  <div class="form-group col-lg-3">
                    <label>Model Year <span class="required-label">*</span></label>
                    <select class="form-control" id="model_year" name="model_year">
                      <?php echo $model_year; ?>
                    </select>
                  </div>

                  <div class="form-group col-lg-3">
                    <label>Make <span class="required-label">*</span></label>
                    <select class="form-control" id="make" name="make">
                      <option value="0">Select</option>
                      <?php echo $makes; ?>
                    </select>
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Model <span class="required-label">*</span></label>
                    <select class="form-control" id="model" name="model">
                    </select>
                  </div>


                </div>


                <div class="row vehicle-details">

                  <div class="form-group col-lg-3">
                    <label>Estimated Value</label>
                    <input type="number" step="0.01" class="form-control" id="estimated_value" name="estimated_value" value="<?php echo (($cdata['est_retain_value'] == "") ? 0 : $cdata['est_retain_value']); ?>">
                  </div>

                  <div class="form-group col-lg-3">
                    <label>VIN</label>
                    <input type="number" step="0.01" class="form-control" id="vin" name="vin" value="<?php echo (($cdata['vin'] == "") ? 0 : $cdata['vin']); ?>">

                  </div>

                  <div class="form-group col-lg-3">
                    <label>Body Style</label>
                    <select class="form-control" id="body_style" name="body_style">
                      <option value="0">Select</option>
                      <?php echo $types; ?>
                    </select>
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Color</label>
                    <select class="form-control" id="color" name="color">
                      <option value="0">Select</option>
                      <?php echo $colors; ?>
                    </select>
                  </div>


                </div>



                <div class="row vehicle-details">

                  <div class="form-group col-lg-3">
                    <label>Engine Power </label>
                    <input type="text" class="form-control" id="engine_power" name="engine_power" value="<?php echo (($cdata['engine_power'] == "") ? 0 : $cdata['engine_power']); ?>" />
                  </div>

                  <div class="form-group col-lg-3">
                    <label>Cylinders</label>
                    <select class="form-control" id="cylinders" name="cylinders">
                      <option value="3_cylinders" <?php echo (($cdata['3_cylinders'] == 1) ? "selected" : ""); ?>>2 Cylinders</option>
                      <option value="4_cylinders" <?php echo (($cdata['4_cylinders'] == 1) ? "selected" : ""); ?>>4 Cylinders</option>
                      <option value="5_cylinders" <?php echo (($cdata['5_cylinders'] == 1) ? "selected" : ""); ?>>5 Cylinders</option>
                      <option value="6_cylinders" <?php echo (($cdata['6_cylinders'] == 1) ? "selected" : ""); ?>>6 Cylinders</option>
                      <option value="8_cylinders" <?php echo (($cdata['8_cylinders'] == 1) ? "selected" : ""); ?>>8 Cylinders</option>
                      <option value="10_cylinders" <?php echo (($cdata['10_cylinders'] == 1) ? "selected" : ""); ?>>20 Cylinders</option>
                      <option value="12_cylinders" <?php echo (($cdata['12_cylinders'] == 1) ? "selected" : ""); ?>>12 Cylinders</option>
                    </select>
                  </div>

                  <div class="form-group col-lg-3">
                    <label>Transmission</label>
                    <select class="form-control" id="transmission" name="transmission">
                      <option value="automatic" <?php echo (($cdata['transmission'] == "automatic") ? "selected" : ""); ?>>Automatic</option>
                      <option value="manual" <?php echo (($cdata['transmission'] == "manual") ? "selected" : ""); ?>>Manual</option>
                    </select>
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Fuel</label>
                    <select class="form-control" id="fuel" name="fuel">
                      <option value="gasoline" <?php echo (($cdata['fuel'] == "gasoline") ? "selected" : ""); ?>>Gasoline</option>
                      <option value="diesel" <?php echo (($cdata['fuel'] == "diesel") ? "selected" : ""); ?>>Diesel</option>
                      <option value="hybrid" <?php echo (($cdata['fuel'] == "hybrid") ? "selected" : ""); ?>>Hybrid</option>
                      <option value="electric" <?php echo (($cdata['fuel'] == "electric") ? "selected" : ""); ?>>Electric</option>
                    </select>
                  </div>




                </div>

                <!-- watches catgory -->
                <div class="row watches-details">

                  <div class="form-group col-lg-3">
                    <label>Dial </label>
                    <input type="text" class="form-control" id="dial" name="dial" value="<?php echo (($cdata['dial'] == "") ? 0 : $cdata['dial']); ?>" />
                  </div>

                  <div class="form-group col-lg-3">
                    <label>Caliber</label>
                    <input type="text" class="form-control" id="caliber" name="caliber" value="<?php echo (($cdata['caliber'] == "") ? 0 : $cdata['caliber']); ?>" />

                  </div>


                  <div class="form-group col-lg-3">
                    <label>Case</label>
                    <input type="text" class="form-control" id="case_detail" name="case_detail" value="<?php echo (($cdata['case_detail'] == "") ? 0 : $cdata['case_detail']); ?>" />

                  </div>


                  <div class="form-group col-lg-3">
                    <label>Case Number</label>
                    <input type="text" class="form-control" id="case_number" name="case_number" value="<?php echo (($cdata['case_number'] == "") ? 0 : $cdata['case_number']); ?>" />

                  </div>

                </div>


                <div class="row watches-details">

                  <div class="form-group col-lg-3">
                    <label>Size </label>
                    <input type="text" class="form-control" id="size" name="size" value="<?php echo (($cdata['size'] == "") ? 0 : $cdata['size']); ?>" />
                  </div>

                  <div class="form-group col-lg-3">
                    <label>Signed</label>
                    <input type="text" class="form-control" id="signed" name="signed" value="<?php echo (($cdata['signed'] == "") ? 0 : $cdata['signed']); ?>" />

                  </div>

                  <div class="form-group col-lg-3">
                    <label>Box</label>
                    <select class="form-control" id="box" name="box">
                      <option value="1" <?php echo (($cdata['box'] == 1) ? "selected" : ""); ?>>Yes</option>
                      <option value="0" <?php echo (($cdata['box'] == 0) ? "selected" : ""); ?>>No</option>
                    </select>
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Papers</label>
                    <select class="form-control" id="papers" name="papers">
                      <option value="1" <?php echo (($cdata['papers'] == 1) ? "selected" : ""); ?>>Yes</option>
                      <option value="0" <?php echo (($cdata['papers'] == 0) ? "selected" : ""); ?>>No</option>
                    </select>
                  </div>



                </div>
                <!-- end watches category -->



                <!-- watches catgory -->
                <div class="row plates-details">

                  <div class="form-group col-lg-3">
                    <label>Emirates </label>
                    <input type="text" class="form-control" id="emirates" name="emirates" value="<?php echo (($cdata['emirates'] == "") ? 0 : $cdata['emirates']); ?>" />
                  </div>

                  <div class="form-group col-lg-3">
                    <label>Code</label>
                    <input type="text" class="form-control" id="code" name="code" value="<?php echo (($cdata['code'] == "") ? 0 : $cdata['code']); ?>" />
                  </div>

                  <div class="form-group col-lg-3">
                    <label>Plate Number</label>
                    <input type="text" class="form-control" id="plate" name="plate" value="<?php echo (($cdata['plate'] == "") ? 0 : $cdata['plate']); ?>" />
                  </div>

                </div>
                <!-- end watches category -->


                <div class="row">


                  <div class="form-group col-lg-3 for_auction">
                    <label>Multiple Bid</label>
                    <select class="form-control" id="multiple_bid" name="multiple_bid">
                      <option value="1" <?php echo (($auction['is_multiple_bid_allowed'] == 1) ? "selected" : ""); ?>>Yes</option>
                      <option value="0" <?php echo (($auction['is_multiple_bid_allowed'] == 0) ? "selected" : ""); ?>>No</option>

                    </select>
                  </div>

                  <div class="form-group col-lg-3 for_auction">
                    <label>Auction Type</label>
                    <select class="form-control" id="auction_type" name="auction_type">
                      <?php echo $auction_types; ?>
                    </select>
                  </div>


                  <div class="form-group col-lg-3 for_auction">
                    <label>Starting Bid <span class="required-label">*</span></label>
                    <input type="number" class="form-control" id="starting_bid_value" name="starting_bid_value" required value="<?php echo (($auction['bid_initial_value'] == "") ? 0 : $auction['bid_initial_value']); ?>" />
                  </div>


                  <div class="form-group col-lg-3 for_auction">
                    <label>Minimum Increament <span class="required-label">*</span></label>
                    <input type="number" class="form-control" id="minimum_increament" name="minimum_increament" required value="<?php echo (($auction['bid_increment_diff'] == "") ? 0 : $auction['bid_increment_diff']); ?>" />
                  </div>


                  <div class="form-group col-lg-3 for_auction">
                    <label>Maximum Bid</label>
                    <input type="number" class="form-control" id="maximum_bid" name="maximum_bid" value="<?php echo (($auction['maximum_bid'] == "") ? 0 : $auction['maximum_bid']); ?>">
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Minimum Deposit Required</label>
                    <input type="number" class="form-control" id="deposit" name="deposit" value="<?php echo (($auction['deposit'] == "") ? 0 : $auction['deposit']); ?>">
                  </div>




                  <div class="form-group col-lg-3">
                    <label>VAT Required</label>
                    <select class="form-control" id="vat_required" name="vat_required">
                      <option value="1" <?php echo (($auction['vat_required'] == 1) ? "selected" : ""); ?>>Yes</option>
                      <option value="0" <?php echo (($auction['vat_required'] == 0) ? "selected" : ""); ?>>No</option>

                    </select>
                  </div>


                  <div class="form-group col-lg-3 for_price">
                    <label>Selling Price </label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo (($auction['price'] == "") ? 0 : $auction['price']); ?>">
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Thumb <span class="required-label">*</span></label>
                    <input type="file" accept="image/png, image/jpeg, image/jpg, image/gif" class="form-control" id="thumb" name="thumb" required />
                  </div>


                  <!-- <div class="form-group col-lg-3">
                        <label>Big Thumb </label>
                        <input type="file" accept="image/png, image/jpeg, image/jpg, image/gif" class="form-control"  id="big_thumb" name="big_thumb" >
                    </div> -->



                </div>



                <div class="row">

                  <div class="form-group col-lg-3">
                    <label>Live auction available</label>
                    <select class="form-control" id="live_auction" name="live_auction">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                    </select>
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Start Time</label>
                    <input type="datetime" class="form-control" id="live_auction_start" name="live_auction_start" value="<?php echo (($auction['live_auction_start'] == "") ? "" : $auction['live_auction_start']); ?>" />
                  </div>


                  <div class="form-group col-lg-3">
                    <label>End Time </label>
                    <input type="datetime" class="form-control" id="live_auction_end" name="live_auction_end" value="<?php echo (($auction['live_auction_end'] == "") ? "" : $auction['live_auction_end']); ?>" />
                  </div>



                  <div class="form-group col-lg-3">
                    <label>Youtube Streaming Link </label>
                    <input type="text" class="form-control" id="live_streaming_url" name="live_streaming_url" value="<?php echo (($auction['live_streaming_url'] == "") ? "" : $auction['live_streaming_url']); ?>" />
                  </div>




                </div>


                <div class="row">

                  <div class="form-group col-lg-3">
                    <label>Country</label>
                    <select class="form-control" id="country_id" name="country_id">
                      <option value="0">Select</option>
                      <?php echo $countries; ?>
                    </select>
                  </div>


                  <div class="form-group col-lg-3">
                    <label>State</label>
                    <select class="form-control" id="state_id" name="state_id">
                    </select>
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Address </label>
                    <input type="text" class="form-control" id="address" name="address" value="<?php echo (($auction['address'] == "") ? 0 : $auction['address']); ?>" />
                  </div>


                  <div class="form-group col-lg-3">
                    <label>Coordinates (lat/lng) </label>
                    <input type="text" class="form-control" id="coordinates" name="coordinates" value="<?php echo (($auction['coordinates'] == "") ? 0 : $auction['coordinates']); ?>" />
                  </div>





                  <?php if ($edit_mode) : ?>
                    <div class="form-group col-lg-3">
                      <label>Upload images </label>
                      <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" id="gallery" name="gallery" />
                    </div>
                  <?php endif; ?>

                  <div class="form-group col-lg-9">
                    <label>Video URL </label>
                    <textarea class="form-control" id="video_url" name="video_url"><?php echo (($auction['video_url'] == "") ? 0 : $auction['video_url']); ?></textarea>
                  </div>

                  <?php if ($edit_mode) : ?>
                    <div class="col-lg-12" id="image-thumbs" class="flex-container"><?php echo $gallery; ?></div>
                  <?php endif; ?>

                </div>






                <?php if ($edit_mode) : ?>
                  <div class="col-lg-12" style="padding-bottom:10px">

                    <h4>Documents </h4>

                    <input type="file" accept="image/png, image/jpeg, image/jpg" class="" id="documents" name="documents" style="display:inline !important;" />
                    <select name="vehicle_document" id="vehicle_document" class="form-control" style="max-width:200px; display:inline;">
                      <?php echo $document_type; ?>
                    </select>
                    <input type="button" value="Attach" id="attach" name="attach" class="btn btn-secondary" style="margin-left: 20px;width:100px; display:inline;" />
                  </div>

                  <div class="col-lg-12" id="auction-documents" class="flex-container"><?php echo $attachment_string; ?></div>
                <?php endif; ?>














                <!-- content -->
                <div class="nav-tabs-custom">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">English</a></li>
                    <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">عربي</a></li>
                  </ul>
                  <div class="tab-content">
                    <!-- item 1-->
                    <div class="tab-pane active" id="tab_1">

                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id="title_english" require name="title_english" value="<?php echo (($description['title'] == "") ? '' : $description['title']); ?>">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea id="description_english" name="description_english" rows="4" cols="80"><?php echo (($description['description'] == "") ? '' : $description['description']); ?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Terms</label>
                        <textarea id="terms_english" name="terms_english" rows="4" cols="80"><?php echo (($description['terms_description'] == "") ? '' : $description['terms_description']); ?></textarea>
                      </div>

                      <div class="form-group shipping-details">
                        <label>Shipping Details</label>
                        <textarea id="shipping_details_english" name="shipping_details_english" rows="4" cols="80"><?php echo (($description['shipping_description'] == "") ? '' : $description['shipping_description']); ?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Additinal Informations</label>
                        <textarea id="additional_english" name="additional_english" rows="4" cols="80"><?php echo (($description['additional_information'] == "") ? '' : $description['additional_information']); ?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Special notes</label>
                        <textarea id="note_englishs" name="notes_english" rows="4" cols="80"><?php echo (($description['special_notes'] == "") ? '' : $description['special_notes']); ?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" class="form-control" id="meta_title_english" name="meta_title_english" value="<?php echo (($description['meta_keywords'] == "") ? '' : $description['meta_keywords']); ?>" required>
                      </div>


                      <div class="form-group">
                        <label>Meta Description</label>
                        <textarea type="text" class="form-control" id="meta_description_english" name="meta_description_english"><?php echo (($description['title'] == "") ? '' : $description['title']); ?></textarea>
                      </div>

                    </div>


                    <!-- item 2-->
                    <div class="tab-pane" id="tab_2">
                      <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" id="title_arabic" require name="title_arabic" value="<?php echo (($description_ar['title'] == "") ? '' : $description_ar['title']); ?>">
                      </div>

                      <div class="form-group">
                        <label>Description</label>
                        <textarea id="description_arabic" name="description_arabic" rows="4" cols="80"><?php echo (($description_ar['description'] == "") ? '' : $description_ar['description']); ?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Terms</label>
                        <textarea id="terms_arabic" name="terms_arabic" rows="4" cols="80"><?php echo (($description_ar['terms_description'] == "") ? '' : $description_ar['terms_description']); ?></textarea>
                      </div>

                      <div class="form-group  shipping-details">
                        <label>Shipping Details</label>
                        <textarea id="shipping_details_arabic" name="shipping_details_arabic" rows="4" cols="80"><?php echo (($description_ar['shipping_description'] == "") ? '' : $description_ar['shipping_description']); ?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Additinal Informations</label>
                        <textarea id="additional_arabic" name="additional_arabic" rows="4" cols="80"><?php echo (($description_ar['additional_information'] == "") ? '' : $description_ar['additional_information']); ?></textarea>
                      </div>

                      <div class="form-group">
                        <label>Special notes</label>
                        <textarea id="notes_arabic" name="notes_arabic" rows="4" cols="80"><?php echo (($description_ar['special_notes'] == "") ? '' : $description_ar['special_notes']); ?></textarea>
                      </div>


                      <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" class="form-control" id="meta_title_arabic" name="meta_title_arabic" value="<?php echo (($description_ar['meta_keywords'] == "") ? '' : $description_ar['meta_keywords']); ?>" require>
                      </div>


                      <div class="form-group">
                        <label>Meta Description</label>
                        <textarea type="text" class="form-control" id="meta_description_arabic" name="meta_description_arabic"><?php echo (($description_ar['meta_description'] == "") ? '' : $description_ar['meta_description']); ?></textarea>
                      </div>

                    </div>








                  </div>
                </div>


                <div class="timeline-footer">
                  <input type="hidden" name="action" id="action" value="add" />
                  <a href="<?php echo site_url('auctions'); ?>" class="btn btn-danger">Cancel</a>
                  <button type="submit" class="btn btn-primary">Submit</a>
                </div>






              </div>
            </div>
          </div>
        </div>
      </form>
    </div>










    <script src="<?php echo base_url("views/template//default/bower_components/ckeditor/ckeditor.js"); ?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url("views/template/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"); ?>"></script>
    <script>
      $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.

        $('.vehicle-details').hide();
        $('.watches-details').hide();
        $('.plates-details').hide();


        $('#live_auction').on('change', function(e) {

          if ($('#live_auction').val() == 0) {
            $('#live_auction_start').hide();
            $('#live_auction_end').hide();
            $('#live_streaming_url').hide();
          } else {
            $('#live_auction_start').show();
            $('#live_auction_end').show();
            $('#live_streaming_url').show();
          }

        })


        <?php if ($edit_mode) : ?>

          if ($('#category').val() == 'vehicles') {

            $('.vehicle-details').show();
            $('.watches-details').hide();
            $('.plates-details').hide();


          } else if ($('#category').val() == 'watches') {

            $('.watches-details').show();
            $('.vehicle-details').hide();
            $('.plates-details').hide();


          } else if ($('#category').val() == 'plates') {

            $('.vehicle-details').hide();
            $('.watches-details').hide();
            $('.plates-details').show();


          } else {
            $('.vehicle-details').hide();
            $('.watches-details').hide();
            $('.plates-details').hide();

          }


          $.ajax({
            type: "POST",
            url: '<?php echo site_url('ajax/get_model'); ?>',
            data: '&id=' + $('#make').val() + '&selected=<?php echo $cdata['model']; ?>',
            success: function(data) {

              result = jQuery.parseJSON(data);
              $('#model').empty();
              result.forEach(function(e, i) {

                if (e.id == '<?php echo $cdata['model']; ?>')
                  $('#model').append('<option value="' + e.id + '" selected="selected">' + e.title + '</option>');
                else
                  $('#model').append('<option value="' + e.id + '">' + e.title + '</option>');



                //                                $('#model').append($('<option></option>').val(e.id).text(e.title)); 
              });

            },
            error: function(data) {
              console.log('An error occurred.');
              console.log(data);
            },
          });

          $.ajax({
            type: "POST",
            url: '<?php echo site_url('ajax/get_states'); ?>',
            data: '&id=' + $('#country_id').val() + '&selected=<?php echo $cdata['city_id']; ?>',
            success: function(data) {

              result = jQuery.parseJSON(data);
              $('#state_id').empty();
              result.forEach(function(e, i) {

                if (e.id == '<?php echo $auction['city_id']; ?>')
                  $('#state_id').append('<option value="' + e.id + '" selected="selected">' + e.title + '</option>');
                else
                  $('#state_id').append('<option value="' + e.id + '">' + e.title + '</option>');
                //$('#state_id').append($('<option></option>').val(e.id).text()); 
              });

            },
            error: function(data) {
              console.log('An error occurred.');
              console.log(data);
            },
          });



          var fileInput = document.getElementById('gallery');
          fileInput.addEventListener('change', function(evnt) {

            for (var i = 0; i < fileInput.files.length; i++) {
              sendFile(fileInput.files[i]);
            }

          });


          function sendFile(file) {

            var formData = new FormData();
            var request = new XMLHttpRequest();

            formData.set('gallery', file);
            formData.set('auction_id', <?php echo $auction['id']; ?>);
            console.log(formData);
            request.open("POST", '<?php echo $gallery_image_url; ?>');
            request.send(formData);

            request.onreadystatechange = function() {

              if (request.readyState == 4 && request.status == 200) {

                console.log('request.readyState=', request.readyState);
                console.log('request.status=', request.status);
                console.log('response=', request.responseText);

                var responseFromServer = JSON.parse(request.responseText);

                if (responseFromServer.success == '0') {
                  console.log('failed to upload file');

                } else if (responseFromServer.success == '1') {
                  renderImages(responseFromServer.data.file_path, responseFromServer.data.id);
                  console.log('successfully uploaded file');

                }
              }
            }

          }


          <?php if ($edit_mode) : ?>
            var fileInput1 = document.getElementById('documents');
            $('#attach').on('click', function(evnt) {
              for (var i = 0; i < fileInput1.files.length; i++) {
                sendDocumentFile(fileInput1.files[i], $('#vehicle_document').val());
              }

            });





            function sendDocumentFile(file, type) {

              var formData = new FormData();
              var request = new XMLHttpRequest();

              formData.set('document', file);
              formData.set('type', type);
              formData.set('auction_id', <?php echo $auction['id']; ?>);
              request.open("POST", '<?php echo $docuement_image_url; ?>');
              request.send(formData);

              request.onreadystatechange = function() {

                if (request.readyState == 4 && request.status == 200) {

                  console.log('request.readyState=', request.readyState);
                  console.log('request.status=', request.status);
                  console.log('response=', request.responseText);

                  var responseFromServer = JSON.parse(request.responseText);

                  if (responseFromServer.success == '0') {
                    console.log('failed to upload file');

                  } else if (responseFromServer.success == '1') {

                    renderDocuments(responseFromServer.data.type, responseFromServer.data.created_at, responseFromServer.data.file_path, responseFromServer.data.id);
                    console.log('successfully uploaded file');

                  }
                }
              }

            }

            function renderDocuments(type, created_at, path, id) {
              $('#attachments_table tr:last').after('<tr id="document_' + id + '"><td><a href="javascript:void(0)" onclick = "open_document(' + id + ')">' + type + '</a></td><td>' + created_at + '</td><td align="center"><a href="javascript:(void);" onclick="delete_document(' + id + ');">delete</td></tr>');
            }

          <?php endif; ?>











          function renderImages(path, id) {
            $('#image-thumbs').append('<div class="col-md-1 col-lg-1 col-sm-4 thumb-box" id="gallery_' + id + '">\
                          <img  style="max-width:100px" src="<?php echo WEB_HTTP_URL; ?>auction/images/' + path + '">\
                          <br /><input type="button" onclick="delete_gallery(' + id + ');" value="Delete" /></div>');
          }
          //                        $('#myTable tr:last').after('<tr>...</tr><tr>...</tr>');








        <?php endif; ?>







        $('#category').on('change', function() {

          if ($(this).val() == 'vehicles') {

            $('.vehicle-details').show();
            $('.watches-details').hide();
            $('.plates-details').hide();


          } else if ($(this).val() == 'watches') {

            $('.watches-details').show();
            $('.vehicle-details').hide();
            $('.plates-details').hide();


          } else if ($(this).val() == 'plates') {

            $('.vehicle-details').hide();
            $('.watches-details').hide();
            $('.plates-details').show();


          } else {
            $('.vehicle-details').hide();
            $('.watches-details').hide();
            $('.plates-details').hide();

          }

        });

        $('#shippable').on('change', function() {

          if ($(this).val() == 1) {
            $('.shipping-details').show();

          } else {
            $('.shipping-details').hide();

          }

        })




        CKEDITOR.replace('description_english')
        CKEDITOR.replace('terms_english')
        CKEDITOR.replace('shipping_details_english')
        CKEDITOR.replace('notes_english')
        CKEDITOR.replace('additional_english')


        CKEDITOR.replace('description_arabic')
        CKEDITOR.replace('terms_arabic')
        CKEDITOR.replace('shipping_details_arabic')
        CKEDITOR.replace('notes_arabic')
        CKEDITOR.replace('additional_arabic')
        //bootstrap WYSIHTML5 - text editor




        $('#make').on('change', function() {
          $.ajax({
            type: "POST",
            url: '<?php echo site_url('ajax/get_model'); ?>',
            data: '&id=' + this.value,
            success: function(data) {

              result = jQuery.parseJSON(data);
              $('#model').empty();
              result.forEach(function(e, i) {
                $('#model').append($('<option></option>').val(e.id).text(e.title));
              });

            },
            error: function(data) {
              console.log('An error occurred.');
              console.log(data);
            },
          });
        });


        $('#list_type').on('change', function() {
          if (this.value == 0) {
            $('.for_auction').show();
            $('.for_price').hide();
          } else {
            $('.for_auction').hide();
            $('.for_price').show();
          }

        });


        $('#country_id').on('change', function() {
          $.ajax({
            type: "POST",
            url: '<?php echo site_url('ajax/get_states'); ?>',
            data: '&id=' + this.value,
            success: function(data) {

              result = jQuery.parseJSON(data);
              $('#state_id').empty();
              result.forEach(function(e, i) {
                $('#state_id').append($('<option></option>').val(e.id).text(e.title));
              });

            },
            error: function(data) {
              alert('An error occurred, please try again later');
              console.log(data);
            },
          });
        });


      });



      function delete_gallery(id) {

        if (confirm('are you sure want to delete image?')) {

          $.ajax({
            type: "POST",
            url: '<?php echo site_url('ajax/delete_gallery'); ?>',
            data: '&id=' + id,
            success: function(data) {
              $('#gallery_' + id).remove();
            },
            error: function(data) {
              alert('An error occurred, please try again later');
              console.log(data);
            },
          });


        }
      }



      function delete_document(id) {

        if (confirm('are you sure want to delete this attachments?')) {

          $.ajax({
            type: "POST",
            url: '<?php echo site_url('ajax/delete_document'); ?>',
            data: '&id=' + id,
            success: function(data) {
              $('#document_' + id).remove();
            },
            error: function(data) {
              alert('An error occurred, please try again later');
              console.log(data);
            },
          });


        }
      }





      // function upload_file(){

      //   var file_data = $('#sortpicture').prop('files')[0];   

      //     var form_data = new FormData();                  
      //     form_data.append('file', file_data);
      //     alert(form_data);                             
      //     $.ajax({
      //         url: 'upload.php', // point to server-side PHP script 
      //         dataType: 'text',  // what to expect back from the PHP script, if anything
      //         cache: false,
      //         contentType: false,
      //         processData: false,
      //         data: form_data,                         
      //         type: 'post',
      //         success: function(php_script_response){
      //             alert(php_script_response); // display response from the PHP script, if any
      //         }
      //      });


      // }
    </script>