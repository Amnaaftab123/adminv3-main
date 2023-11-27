<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Panel<?php //echo $title;?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/bower_components/bootstrap/dist/css/bootstrap.min.css");?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/bower_components/font-awesome/css/font-awesome.min.css");?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/bower_components/Ionicons/css/ionicons.min.css");?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/dist/css/AdminLTE.min.css");?>">
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/dist/css/styles.css");?>">



    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/dist/css/skins/_all-skins.min.css");?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/bower_components/morris.js/morris.css");?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/bower_components/jvectormap/jquery-jvectormap.css");?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css");?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/bower_components/bootstrap-daterangepicker/daterangepicker.css");?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url("views/template/default/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css");?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

<script src="<?php echo base_url("views/template/default/bower_components/jquery/dist/jquery.min.js");?>"></script>

  

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
              <img src="<?php echo base_url("views/template/default/dist/img/user2-160x160.jpg");?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo get_full_name();?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url("views/template/default/dist/img/user2-160x160.jpg");?>" class="img-circle" alt="User Image">

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
                  <a href="<?php echo site_url('logout');?>" class="btn btn-default btn-flat"><?php ld('signout');?></a>
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
          <img src="<?php echo base_url("views/template/default/dist/img/user2-160x160.jpg");?>" class="img-circle" alt="User Image">
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
          <a href="<?php echo site_url('dashboard');?>">
            <i class="fa fa-dashboard"></i> <span><?php ld('dashboard');?></span>
            <!-- <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span> -->
          </a>
        </li>



        <li class = "<?php echo $content == "auctions" ? "active" : "";?>">
              <a href="<?php echo site_url('auctions');?>">
                <i class="fa fa-money"></i> <span>Auctions</span>
              </a>
            </li>

        <li class = "<?php echo $content == "orders" ? "active" : "";?>">
          <a href="<?php echo site_url('orders');?>">
            <i class="fa fa-map-signs"></i> <span>Order Management</span>
          </a>
        </li>



        <li class = "<?php echo $content == "requests" ? "active" : "";?>">
          <a href="<?php echo site_url('requests');?>">
            <i class="fa fa-flag"></i> <span>Payment Requests</span>
          </a>
        </li>
        


            


      




        <li class="treeview <?php echo $page == "customers" ? "active menu-open" : "";?>">
              <a href="#">
                <i class="fa fa-th-large"></i> <span>Customers</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo $content == "retail" ? "active" : "";?>"><a href="<?php echo site_url('customers');?>"><i class="fa fa-circle-o"></i> Retail Customers</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Corporate Customers</a></li>
                <li  class="<?php echo $item == "tenant" ? "active menu-open" : "";?>"><a href="<?php echo site_url('admin/tenant/listing');?>"><i class="fa fa-circle-o"></i> Corporate Request</a></li>
                <li  class="<?php echo $item == "rentals" ? "active menu-open" : "";?>"><a href="<?php echo site_url('admin/rentals/listing');?>"><i class="fa fa-circle-o"></i> Blocked Customers</a></li>

              </ul>
            </li>



            <li class="treeview <?php echo $page == "content" ? "active menu-open" : "";?>">
              <a href="#">
                <i class="fa fa-sitemap"></i> <span><?php ld('side-site-management');?></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo $item == "pages" ? "active menu-open" : "";?>"><a href="<?php echo site_url('content');?>"><i class="fa fa-circle-o"></i> <?php ld('side-page-content');?></a></li>
                <li class="<?php echo $item == "banner" ? "active menu-open" : "";?>" ><a  href="<?php echo site_url('banners');?>"><i class="fa fa-circle-o"></i> <?php ld('side-sliders');?></a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> <?php ld('side-assets');?></a></li>
              </ul>
            </li>






            <li class="treeview <?php echo $page == "manage" ? "active menu-open" : "";?>">
              <a href="#">
                <i class="fa fa-th-large"></i> <span><?php ld('side-manage');?></span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo $content == "categories" ? "active" : "";?>"><a href="<?php echo site_url('categories');?>"><i class="fa fa-circle-o"></i> Categories</a></li>
              </ul>
            </li>






                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-bank"></i> <span>Financials</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>

                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Invoices</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Payments</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Orderdues</a></li>
                  </ul>

                </li>




                <li class="treeview">
                  <a href="#">
                    <i class="fa fa-bank"></i> <span>Marketing</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>

                  <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Referrers</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Coupons</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Subscribers</a></li>
                  </ul>

                </li>








                <li>
                  <a href="<?php echo site_url('templates');?>">
                    <i class="fa fa-bell-o"></i> <span><?php ld('side-owner-templates');?></span>
                  </a>
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






        <!-- <li class="treeview">
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
        </li> -->






        <li><a href="#"><i class="fa fa-book"></i> <span><?php ld('side-visit-site');?></span></a></li>
        <li class="header"><?php ld('side-notifications');?></li>
        <li><a href="#"><i class="fa fa-warning text-red"></i> <span><?php ld('side-important');?></span></a></li>
        <li><a href="#"><i class="fa fa-info text-yellow"></i> <span><?php ld('side-warning');?></span></a></li>
        <li><a href="#"><i class="fa fa-bell text-aqua"></i> <span><?php ld('side-information');?></span></a></li>





      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
