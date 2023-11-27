<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title><?php echo $data['title']; ?></title>
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

    <!--- Overloading css-->
    <link href="<?php echo THEME_URL; ?>css/overloading.css" rel="stylesheet">


</head>

<body class="ltr error-page1 bg-primary">

    <!-- Loader -->
    <div id="global-loader" >
        <img src="<?php echo THEME_URL; ?>img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <div class="square-box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="page">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main mx-auto my-auto py-4 justify-content-center">
                        <div class="card-sigin">
                            <!-- Demo content-->
                            <div class="main-card-signin d-md-flex">
                                <div class="wd-100p">
                                    <div class="d-flex mb-4"><a href="index.html"><img src="<?php echo THEME_URL; ?>img/logo.png        " class="sign-favicon ht-40" alt="logo"></a></div>
                                    <div class="">
                                        <div class="main-signup-header">
                                            <h2>Welcome back!</h2>
                                            <h6 class="font-weight-semibold mb-4">Please sign in to continue.</h6>
                                            <div class="panel panel-primary">
                                                <!--<div class=" tab-menu-heading mb-2 border-bottom-0">
                                                    <div class="tabs-menu1">
                                                        <ul class="nav panel-tabs">
                                                            <li class="me-2"><a href="#tab5" class="active" data-bs-toggle="tab">Email</a></li>
                                                            <li><a href="#tab6" data-bs-toggle="tab" class="">Mobile no</a></li>
                                                        </ul>
                                                    </div>
                                                </div>-->
                                                <div class="panel-body tabs-menu-body border-0 p-3">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="tab5">
                                                            <form method="POST" action="<?php echo site_url('ajax/validate');?>" class="needs-validation" novalidate id="login-form">

                                                                <div class="form-group">
                                                                    <label for="login_username" class="form-label">Username</label>
                                                                    <input class="form-control" placeholder="Enter your username" type="text" maxlength="100" id="login_username" required>
                                                                    <div class="invalid-feedback">
                                                                        Email is required!
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="login_hash">Password</label>
                                                                    <input class="form-control" placeholder="Enter your password" type="password"  maxlength="100" id="login_hash" required>
                                                                    <div class="invalid-feedback">
                                                                        Password is required!
                                                                    </div>

                                                                </div><button class="btn btn-primary btn-block" type="submit">Sign In</button>
                                                                <div class="mt-4 d-flex text-center justify-content-center mb-2">
                                                                    <a href="https://www.facebook.com/" target="_blank" class="btn btn-icon btn-facebook me-3" type="button">
                                                                        <span class="btn-inner--icon"> <i class="bx bxl-facebook tx-18 tx-prime"></i> </span>
                                                                    </a>
                                                                    <a href="https://www.twitter.com/" target="_blank" class="btn btn-icon me-3" type="button">
                                                                        <span class="btn-inner--icon"> <i class="bx bxl-twitter tx-18 tx-prime"></i> </span>
                                                                    </a>
                                                                    <a href="https://www.linkedin.com/" target="_blank" class="btn btn-icon me-3" type="button">
                                                                        <span class="btn-inner--icon"> <i class="bx bxl-linkedin tx-18 tx-prime"></i> </span>
                                                                    </a>
                                                                    <a href="https://www.instagram.com/" target="_blank" class="btn  btn-icon me-3" type="button">
                                                                        <span class="btn-inner--icon"> <i class="bx bxl-instagram tx-18 tx-prime"></i> </span>
                                                                    </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane" id="tab6">
                                                            <div id="mobile-num" class="wrap-input100 validate-input input-group mb-2">
                                                                <a href="javascript:void(0);" class="input-group-text bg-white text-muted">
                                                                    <span>+91</span>
                                                                </a>
                                                                <input class="input100 form-control" type="mobile" placeholder="Mobile">
                                                            </div>
                                                            <div id="login-otp" class="justify-content-around mb-4">
                                                                <input class="form-control  text-center me-2" i d="txt1" maxlength="1">
                                                                <input class="form-control  text-center me-2" id="txt2" maxlength="1">
                                                                <input class="form-control  text-center me-2" id="txt3" maxlength="1">
                                                                <input class="form-control  text-center" id="txt4" maxlength="1">
                                                            </div>
                                                            <span>Note : Login with registered mobile number to generate OTP.</span>
                                                            <div class="container-login100-form-btn mt-3">
                                                                <a href="javascript:void(0);" class="btn login100-form-btn btn-primary" id="generate-otp">
                                                                    Proceed
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--<div class="main-signin-footer text-center mt-3">
                                                <p><a href="" class="mb-3">Forgot password?</a></p>
                                                <p>Don't have an account? <a href="signup.html">Create an Account</a></p>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery min js -->
    <script src="<?php echo THEME_URL; ?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap js -->
    <script src="<?php echo THEME_URL; ?>plugins/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo THEME_URL; ?>plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Moment js -->
    <script src="<?php echo THEME_URL; ?>plugins/moment/moment.js"></script>

    <!-- eva-icons js -->
    <script src="<?php echo THEME_URL; ?>js/eva-icons.min.js"></script>

    <!-- generate-otp js -->
    <script src="<?php echo THEME_URL; ?>js/generate-otp.js"></script>

    <!--Internal  Perfect-scrollbar js -->
    <script src="<?php echo THEME_URL; ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <!-- Theme Color js -->
    <script src="<?php echo THEME_URL; ?>js/themecolor.js"></script>


    <script src="<?php echo THEME_URL; ?>js/form-validation.js"></script>
    <script src="<?php echo THEME_URL; ?>plugins/notify/js/notifIt.js"></script>


    <!-- custom js -->
    <script src="<?php echo THEME_URL; ?>js/custom.js"></script>
    <script src="<?php echo THEME_URL; ?>js/functions.js"></script>

</html>