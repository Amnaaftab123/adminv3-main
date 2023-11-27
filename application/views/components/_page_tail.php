<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?php echo date("Y");?> <a href="http://.com" target="_blank">Public Auction</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url("views/template/default/bower_components/jquery-ui/jquery-ui.min.js");?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url("views/template/default/bower_components/bootstrap/dist/js/bootstrap.min.js");?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url("views/template/default/bower_components/raphael/raphael.min.js");?>"></script>
<script src="<?php echo base_url("views/template/default/bower_components/morris.js/morris.min.js");?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url("views/template/default/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js");?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url("views/template/default/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js");?>"></script>
<script src="<?php echo base_url("views/template/default/plugins/jvectormap/jquery-jvectormap-world-mill-en.js");?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url("views/template/default/bower_components/jquery-knob/dist/jquery.knob.min.js");?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url("views/template/default/bower_components/moment/min/moment.min.js");?>"></script>
<script src="<?php echo base_url("views/template/default/bower_components/bootstrap-daterangepicker/daterangepicker.js");?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url("views/template/default/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js");?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url("views/template/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js");?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url("views/template/default/bower_components/jquery-slimscroll/jquery.slimscroll.min.js");?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url("views/template/default/bower_components/fastclick/lib/fastclick.js");?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url("views/template/default/dist/js/adminlte.min.js");?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url("views/template/default/dist/js/pages/dashboard.js");?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("views/template/default/dist/js/demo.js");?>"></script>
</body>
</html>
