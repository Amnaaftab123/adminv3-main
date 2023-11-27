<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php ld('admin-title');?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/bower_components/bootstrap/dist/css/bootstrap.min.css");?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/bower_components/font-awesome/css/font-awesome.min.css");?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/bower_components/Ionicons/css/ionicons.min.css");?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/dist/css/AdminLTE.min.css");?>">

<link rel="stylesheet" href="<?php echo base_url("admin-assets/default/dist/css/aljasmiAdmin.css");?>">



    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/dist/css/skins/_all-skins.min.css");?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/bower_components/morris.js/morris.css");?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/bower_components/jvectormap/jquery-jvectormap.css");?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css");?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/bower_components/bootstrap-daterangepicker/daterangepicker.css");?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url("admin-assets/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css");?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<script src="<?php echo base_url("admin-assets/default/bower_components/jquery/dist/jquery.min.js");?>"></script>

  

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>J</span>
      <!-- logo for regular state and mobile devices -->
      <!-- <span class="logo-lg"><b>Aljasmi</b> RE</span> -->
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"><?php echo sprintf(l('message-count'),0);?></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"><?php echo sprintf(l('notification-count'),0);?></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 tasks</li>

            </ul>
          </li> -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url("admin-assets/default/dist/img/user2-160x160.jpg");?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo get_full_name();?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url("admin-assets/default/dist/img/user2-160x160.jpg");?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo get_full_name();?>
                  <small></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat"><?php ld('profiles');?></a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo site_url('admin/logout');?>" class="btn btn-default btn-flat"><?php ld('signout');?></a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url("admin-assets/default/dist/img/user2-160x160.jpg");?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo get_full_name();?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> <?php echo ld('online');?></a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>


        <li class = "<?php echo $active == "dashboard" ? "active" : "";?>">
          <a href="<?php echo site_url('admin/dashboard');?>">
            <i class="fa fa-dashboard"></i> <span><?php ld('dashboard');?></span>
            <!-- <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>




        <?php if(get_logged_type() == "admin"): ?>


            <li class="treeview <?php echo $page == "content" ? "active menu-open" : "";?>">
              <a href="#">
                <i class="fa fa-sitemap"></i> <span><?php ld('side-site-management');?></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo $item == "pages" ? "active menu-open" : "";?>"><a href="<?php echo site_url('admin/content');?>"><i class="fa fa-circle-o"></i> <?php ld('side-page-content');?></a></li>
                <li class="<?php echo $item == "banner" ? "active menu-open" : "";?>" ><a  href="<?php echo site_url('admin/banners');?>"><i class="fa fa-circle-o"></i> <?php ld('side-sliders');?></a></li>
                <li  class="<?php echo $item == "videos" ? "active menu-open" : "";?>"><a href="<?php echo site_url('admin/videos');?>"><i class="fa fa-circle-o"></i> <?php ld('side-videos');?></a></li>
                <li  class="<?php echo $item == "testimonials" ? "active menu-open" : "";?>"><a href="<?php echo site_url('admin/testimonials');?>"><i class="fa fa-circle-o"></i> <?php ld('side-testimonials');?></a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> <?php ld('side-assets');?></a></li>
              </ul>
            </li>


      <?php endif;?>



        





                <li class="treeview <?php echo $page == "messaging" ? "active menu-open" : "";?>">
                  <a href="#">
                    <i class="fa fa-whatsapp"></i> <span><?php ld('side-messaging');?></span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li class="<?php echo $item == "inquiries" ? "active menu-open" : "";?>"><a href="<?php echo site_url("admin/inquiries/listing");?>"><i class="fa fa-circle-o"></i> <?php ld('side-inquires');?></a></li>
                    <li  class="<?php echo $item == "request" ? "active menu-open" : "";?>"><a href="<?php echo site_url("admin/servicerequest/listing");?>"><i class="fa fa-circle-o"></i> <?php ld('side-maintainance-request');?></a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> <?php ld('side-alerts');?></a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> <?php ld('side-bulk-message');?></a></li>
                  </ul>
                </li>







        <li class="treeview <?php echo $page == "settings" ? "active menu-open" : "";?>">
          <a href="#">
            <i class="fa fa-laptop"></i> <span><?php ld('side-settings');?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="<?php echo $item == "basic" ? "active menu-open" : "";?>"><a href="<?php echo site_url('admin/settings');?>"><i class="fa fa-circle-o"></i> <?php ld('side-basic');?></a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> <?php ld('side-notifications');?></a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> <?php ld('side-email-template');?></a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> <?php ld('side-user-role');?></a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> <?php ld('side-admin-user');?></a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> <?php ld('side-backup');?></a></li>
          </ul>
        </li>






        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span><?php ld('side-reports');?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> <?php ld('side-visits');?></a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> <?php ld('side-messages');?></a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> <?php ld('side-rentals');?></a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> <?php ld('side-reminders');?></a></li>
            <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i> <?php ld('side-statistics');?></a></li>
          </ul>
        </li>






        <li><a href="#"><i class="fa fa-book"></i> <span><?php ld('side-visit-site');?></span></a></li>
        <li class="header"><?php ld('side-notifications');?></li>
        <li><a href="#"><i class="fa fa-warning text-red"></i> <span><?php ld('side-important');?></span></a></li>
        <li><a href="#"><i class="fa fa-info text-yellow"></i> <span><?php ld('side-warning');?></span></a></li>
        <li><a href="#"><i class="fa fa-bell text-aqua"></i> <span><?php ld('side-information');?></span></a></li>





      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
