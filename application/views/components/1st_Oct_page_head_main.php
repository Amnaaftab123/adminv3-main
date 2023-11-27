<!doctype html>
<html lang="en" dir="ltr">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

	<!-- Title -->
	<title> First Choice Cars </title>

	<!-- Favicon -->
	<link rel="icon" href="<?php echo THEME_URL; ?>img/brand/favicon.png" type="image/x-icon" />

	<!-- Icons css -->
	<link href="<?php echo THEME_URL; ?>css/icons.css" rel="stylesheet">

	<!--  bootstrap css-->
	<link id="style" href="<?php echo THEME_URL; ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!--- Style css --->
	<link href="<?php echo THEME_URL; ?>css/style.css" rel="stylesheet">
	<link href="<?php echo THEME_URL; ?>css/style-dark.css" rel="stylesheet">
	<link href="<?php echo THEME_URL; ?>css/style-transparent.css" rel="stylesheet">

	<!---Skinmodes css-->
	<link href="<?php echo THEME_URL; ?>css/skin-modes.css" rel="stylesheet" />

	<!--- Animations css-->
	<link href="<?php echo THEME_URL; ?>css/animate.css" rel="stylesheet">

	<!-- INTERNAL Switcher css -->
	<link href="<?php echo THEME_URL; ?>switcher/demo.css" rel="stylesheet" />
	<link href="<?php echo THEME_URL; ?>css/overloading.css" rel="stylesheet">
	<!-- JQuery min js -->
	<script src="<?php echo THEME_URL; ?>plugins/jquery/jquery.min.js"></script>

	<script>
		var url = '<?php echo site_url(); ?>';
	</script>
</head>

<body class="ltr main-body app sidebar-mini" onload="load('<?php echo site_url(); ?>')">

	<!-- Loader -->
	<div id="global-loader">
		<img src="<?php echo THEME_URL; ?>img/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- Page -->
	<div class="page">

		<div>
			<!-- main-header -->
			<div class="main-header side-header sticky nav nav-item">
				<div class=" main-container container-fluid">
					<div class="main-header-left ">
						<div class="responsive-logo">
							<a href="index.html" class="header-logo">
								<img src="<?php echo THEME_URL; ?>img/brand/logo.png" class="mobile-logo logo-1" alt="logo">
								<img src="<?php echo THEME_URL; ?>img/brand/logo-white.png" class="mobile-logo dark-logo-1" alt="logo">
							</a>
						</div>
						<div class="app-sidebar__toggle" data-bs-toggle="sidebar">
							<a class="open-toggle" href="javascript:void(0);"><i class="header-icon fe fe-align-left"></i></a>
							<a class="close-toggle" href="javascript:void(0);"><i class="header-icon fe fe-x"></i></a>
						</div>
						<div class="logo-horizontal">
							<a href="index.html" class="header-logo">
								<img src="<?php echo THEME_URL; ?>img/brand/logo.png" class="mobile-logo logo-1" alt="logo">
								<img src="<?php echo THEME_URL; ?>img/brand/logo-white.png" class="mobile-logo dark-logo-1" alt="logo">
							</a>
						</div>
						<div class="main-header-center ms-4 d-sm-none d-md-none d-lg-block form-group">
							<input class="form-control" placeholder="Search..." type="search">
							<button class="btn"><i class="fas fa-search"></i></button>
						</div>
					</div>
					<div class="main-header-right">
						<button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon fe fe-more-vertical "></span>
						</button>
						<div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
							<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
								<ul class="nav nav-item header-icons navbar-nav-right ms-auto">


									<li class="dropdown nav-item main-header-notification d-flex">
										<a class="new nav-link" data-bs-toggle="dropdown" href="javascript:void(0);">
											<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24">
												<path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921zM17.307 15h-6.64l-2.5-6h11.39l-2.25 6z" />
												<circle cx="10.5" cy="19.5" r="1.5" />
												<circle cx="17.5" cy="19.5" r="1.5" /></svg>
											<span class="badge bg-warning header-badge">7</span>
										</a>
										<div class="dropdown-menu">
											<div class="menu-header-content text-start border-bottom">
												<div class="d-flex">
													<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Shopping Cart</h6>
													<span class="badge badge-pill bg-indigo ms-auto my-auto float-end">Items (05)</span>
												</div>
											</div>
											<div class="main-cart-list cart-scroll">
												<div class="d-flex border-bottom main-cart-item">
													<div>
														<a class="d-flex p-3" href="product-details.html">
															<div class="drop-img cover-image" data-image-src="<?php echo THEME_URL; ?>img/ecommerce/05.jpg">
															</div>
															<div class="ms-3 text-start">
																<h5 class="mb-1 text-muted tx-13">Lence Camera</h5>
																<div class="text-dark tx-semibold tx-12">1 * $ 189.00</div>
															</div>
														</a>
													</div>
													<div class="ms-auto my-auto">
														<a href="javascript:void(0);" class="p-3">
															<i class="fe fe-trash-2 text-end text-danger"></i>
														</a>
													</div>
												</div>
											</div>
											<div class="dropdown-footer text-start">
												<a class="btn btn-primary btn-sm btn-w-md" href="check-out.html">Checkout</a>
												<span class="float-end mt-1 tx-semibold">Sub Total : $ 485.93</span>
											</div>
										</div>
									</li>
									<li class="dropdown nav-item  main-header-message ">
										<a class="new nav-link" data-bs-toggle="dropdown" href="javascript:void(0);">
											<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24">
												<path d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z" /></svg>
											<span class="badge bg-secondary header-badge">5</span>
										</a>
										<div class="dropdown-menu">
											<div class="menu-header-content text-start border-bottom">
												<div class="d-flex">
													<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Messages</h6>
													<span class="badge badge-pill badge-warning ms-auto my-auto float-end">Mark All Read</span>
												</div>
												<p class="dropdown-title-text subtext mb-0 op-6 pb-0 tx-12 ">You have 4 unread messages</p>
											</div>
											<div class="main-message-list chat-scroll">
												<a href="chat.html" class="dropdown-item d-flex border-bottom">
													<div class="  drop-img  cover-image  " data-image-src="<?php echo THEME_URL; ?>img/faces/3.jpg">
														<span class="avatar-status bg-teal"></span>
													</div>
													<div class="wd-90p">
														<div class="d-flex">
															<h5 class="mb-0 name">Teri Dactyl</h5>
														</div>
														<p class="mb-0 desc">I'm sorry but i'm not sure how to help you with that......</p>
														<p class="time mb-0 text-start float-start ms-2 mt-2">Mar 15 3:55 PM</p>
													</div>
												</a>

											</div>
											<div class="text-center dropdown-footer">
												<a class="btn btn-primary btn-sm btn-block text-center" href="chat.html">VIEW ALL</a>
											</div>
										</div>
									</li>
									<li class="dropdown nav-item main-header-notification d-flex">
										<a class="new nav-link" data-bs-toggle="dropdown" href="javascript:void(0);">
											<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24">
												<path d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z" /></svg><span class=" pulse"></span>
										</a>
										<div class="dropdown-menu">
											<div class="menu-header-content text-start border-bottom">
												<div class="d-flex">
													<h6 class="dropdown-title mb-1 tx-15 font-weight-semibold">Notifications</h6>
													<span class="badge badge-pill badge-warning ms-auto my-auto float-end">Mark All Read</span>
												</div>
												<p class="dropdown-title-text subtext mb-0 op-6 pb-0 tx-12 ">You have 4 unread Notifications</p>
											</div>
											<div class="main-notification-list Notification-scroll">
												<a class="d-flex p-3 border-bottom" href="mail.html">
													<div class="notifyimg bg-pink">
														<i class="far fa-folder-open text-white"></i>
													</div>
													<div class="ms-3">
														<h5 class="notification-label mb-1">New files available</h5>
														<div class="notification-subtext">10 hour ago</div>
													</div>
													<div class="ms-auto">
														<i class="las la-angle-right text-end text-muted"></i>
													</div>
												</a>
											</div>
											<div class="dropdown-footer">
												<a class="btn btn-primary btn-sm btn-block" href="mail.html">VIEW ALL</a>
											</div>
										</div>
									</li>
									<li class="nav-item full-screen fullscreen-button">
										<a class="new nav-link full-screen-link" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" width="24" height="24" viewBox="0 0 24 24">
												<path d="M5 5h5V3H3v7h2zm5 14H5v-5H3v7h7zm11-5h-2v5h-5v2h7zm-2-4h2V3h-7v2h5z" /></svg></a>
									</li>

									<li class="nav-link search-icon d-lg-none d-block">
										<form class="navbar-form" role="search">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search">
												<span class="input-group-btn">
													<button type="reset" class="btn btn-default">
														<i class="fas fa-times"></i>
													</button>
													<button type="submit" class="btn btn-default nav-link resp-btn">
														<svg xmlns="http://www.w3.org/2000/svg" height="24px" class="header-icon-svgs" viewBox="0 0 24 24" width="24px" fill="#000000">
															<path d="M0 0h24v24H0V0z" fill="none" />
															<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" /></svg>
													</button>
												</span>
											</div>
										</form>
									</li>
									<li class="dropdown main-profile-menu nav nav-item nav-link ps-lg-2">
										<a class="new nav-link profile-user d-flex" href="" data-bs-toggle="dropdown"><img alt="" src="<?php echo THEME_URL; ?>img/faces/2.jpg" class=""></a>
										<div class="dropdown-menu">
											<div class="menu-header-content p-3 border-bottom">
												<div class="d-flex wd-100p">
													<div class="main-img-user"><img alt="" src="<?php echo THEME_URL; ?>img/faces/2.jpg" class=""></div>
													<div class="ms-3 my-auto">
														<h6 class="tx-15 font-weight-semibold mb-0">Teri Dactyl</h6><span class="dropdown-title-text subtext op-6  tx-12">Premium Member</span>
													</div>
												</div>
											</div>
											<a class="dropdown-item" href="profile.html"><i class="far fa-user-circle"></i>Profile</a>
											<a class="dropdown-item" href="chat.html"><i class="far fa-smile"></i> chat</a>
											<a class="dropdown-item" href="mail-read.html"><i class="far fa-envelope "></i>Inbox</a>
											<a class="dropdown-item" href="mail.html"><i class="far fa-comment-dots"></i>Messages</a>
											<a class="dropdown-item" href="mail-settings.html"><i class="far fa-sun"></i> Settings</a>
											<a class="dropdown-item" href="<?php echo site_url('logout'); ?>"><i class="far fa-arrow-alt-circle-left"></i> Sign Out</a>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- /main-header -->

			<!-- main-sidebar -->
			<div class="sticky">
				<aside class="app-sidebar">
					<div class="main-sidebar-header active">
						<a class="header-logo active" href="index.html">
							<img src="<?php echo THEME_URL; ?>img/brand/logo.png" class="main-logo  desktop-logo" alt="logo">
							<img src="<?php echo THEME_URL; ?>img/brand/logo-white.png" class="main-logo  desktop-dark" alt="logo">
							<img src="<?php echo THEME_URL; ?>img/brand/favicon.png" class="main-logo  mobile-logo" alt="logo">
							<img src="<?php echo THEME_URL; ?>img/brand/favicon-white.png" class="main-logo  mobile-dark" alt="logo">
						</a>
					</div>
					<div class="main-sidemenu">
						<div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
								<path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" /></svg></div>
						<ul class="side-menu">
							<li class="side-item side-item-category">Main</li>
							<li><a class="slide-item <?php echo $active == 'dashboard' ? 'active' : ''; ?>" href="<?php echo site_url('dashboard'); ?>">Dashboard</a></li>
							<li class="side-item side-item-category">Vehicles</li>
							<li><a class="slide-item <?php echo $active == 'vehicles-add' ? 'active' : ''; ?>" href="<?php echo site_url('vehicles/add'); ?>">Add Vehicle</a></li>
							<li><a class="slide-item <?php echo $active == 'vehicles' ? 'active' : ''; ?>" href="<?php echo site_url('vehicles'); ?>">All Vehicles</a></li>

							<li class="slide <?php echo $sub == 'manage' ? 'active is-expanded' : ''; ?>">
								<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><span class="side-menu__label">Manage</span><i class="angle fe fe-chevron-right"></i></a>
								<ul class="slide-menu">
									<li><a class="slide-item <?php echo $active == 'make' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/make'); ?>">Makes</a></li>
									<li><a class="slide-item <?php echo $active == 'model' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/model'); ?>">Models</a></li>
									<li><a class="slide-item <?php echo $active == 'trim' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/trim'); ?>">Trims</a></li>
									<li><a class="slide-item <?php echo $active == 'body' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/body'); ?>">Body Type</a></li>
									<!-- <li><a class="slide-item <?php echo $active == 'fuel' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/fuel'); ?>">Fuel Type</a></li>
										<li><a class="slide-item <?php echo $active == 'transmission' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/transmission'); ?>">Transmission</a></li>
										<li><a class="slide-item <?php echo $active == 'specification' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/specification'); ?>">Specification</a></li>
										<li><a class="slide-item <?php echo $active == 'condition' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/condition'); ?>">Condition</a></li>
										<li><a class="slide-item <?php echo $active == 'engine' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/engine'); ?>">Engine Size</a></li>
										<li><a class="slide-item <?php echo $active == 'power' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/power'); ?>">Horspower</a></li> -->
									<li><a class="slide-item <?php echo $active == 'otypes' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/otypes'); ?>">Option Types</a></li>
									<li><a class="slide-item <?php echo $active == 'options' ? 'active' : ''; ?>" href="<?php echo site_url('utilities/options'); ?>">Options</a></li>
								</ul>
							</li>

							<li class="side-item side-item-category">Inquiries</li>
							<li><a class="slide-item <?php echo $active == 'buy' ? 'active' : ''; ?>" href="<?php echo site_url('inquiries/buy'); ?>">Buy</a></li>
							<li><a class="slide-item <?php echo $active == 'sell' ? 'active' : ''; ?>" href="<?php echo site_url('inquiries/sell'); ?>">Sale</a></li>
							<!-- <li><a class="slide-item <?php echo $active == 'buy' ? 'active' : ''; ?>" href="<?php echo site_url('inquiries/buy'); ?>">Car Valuation</a></li> -->
							<li><a class="slide-item <?php echo $active == 'contact' ? 'active' : ''; ?>" href="#">Contact</a></li>
							<li><a class="slide-item <?php echo $active == 'finance' ? 'active' : ''; ?>" href="#">Finance</a></li>
							<li><a class="slide-item <?php echo $active == 'drive' ? 'active' : ''; ?>" href="#">Test Drive</a></li>
							<li><a class="slide-item <?php echo $active == 'trade' ? 'active' : ''; ?>" href="#">Trade</a></li>

							<li class="side-item side-item-category">Company</li>
							<li><a class="slide-item <?php echo $active == 'users' ? 'active' : ''; ?>" href="<?php echo site_url('users'); ?>">Users</a></li>
							<li><a class="slide-item <?php echo $active == 'roles' ? 'active' : ''; ?>" href="<?php echo site_url('roles'); ?>">Roles</a></li>
							<li><a class="slide-item <?php echo $active == 'showrooms' ? 'active' : ''; ?>" href="<?php echo site_url('showrooms'); ?>">Showrooms</a></li>

							<li class="side-item side-item-category">Externals</li>
							<li><a class="slide-item <?php echo $active == 'sales' ? 'active' : ''; ?>" href="<?php echo site_url('external/sales'); ?>">Sales</a></li>
							<li><a class="slide-item <?php echo $active == 'purchase' ? 'active' : ''; ?>" href="<?php echo site_url('external/purchase'); ?>">Purchase</a></li>


							<li class="side-item side-item-category">Settings</li>
							<li><a class="slide-item <?php echo $active == 'templates' ? 'active' : ''; ?>" href="<?php echo site_url('templates'); ?>">Templates</a></li>
							<li><a class="slide-item <?php echo $active == 'meta' ? 'active' : ''; ?>" href="<?php echo site_url('meta'); ?>">Meta Data</a></li>
							<li><a class="slide-item <?php echo $active == 'system' ? 'active' : ''; ?>" href="<?php echo site_url('system'); ?>">System</a></li>

						</ul>
						<div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
								<path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" /></svg></div>
					</div>
				</aside>
			</div>
			<!-- main-sidebar -->
		</div>