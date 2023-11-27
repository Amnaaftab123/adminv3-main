<?php $this->load->view('components/page_head_main') ?>
<!-- main-content -->
<div class="main-content app-content">
  <!-- container -->
  <div class="main-container container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
					<div class="left-content">
					<span class="main-content-title mg-b-0 mg-b-lg-1"><?php echo $title;?></span>
					</div>
					<div class="justify-content-center mt-2">
						<ol class="breadcrumb">
							<?php echo $bread_grams;?>
						</ol>
					</div>
				</div>

    <!-- /breadcrumb -->
    <?php $this->load->view($subview)?>
  </div>
  <!-- Container closed -->
</div>
<!-- main-content closed -->
<?php $this->load->view('components/page_tail') ?>