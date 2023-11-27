<?php $this->load->view('admin/components/page_head_main')?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php 
        $lastItem = end($bud_grams);
        echo $lastItem['text'];
        ?>
        <small><?php ld('control-panel');?></small>
      </h1>
      



      <ol class="breadcrumb">


        <?php foreach($bud_grams as $budgram):?>
        
        <li><a href="<?php echo $budgram['href'];?>" class="<?php echo $budgram['active'];?>"><i class="<?php echo $budgram['icon'];?>"></i> <?php echo $budgram['text'];?></a></li>

        <?php endforeach;?>



      </ol>



    </section>    

    <?php $this->load->view($subview)?>



  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('admin/components/page_tail')?>
