<?php
session_start();
require '../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="index.php"</script>';
} 
elseif (isset($_SESSION['username']) and isset($_SESSION['password'])) {
    echo '<script>window.location="admin-account.php"</script>';
}  ?>
<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>St. Monica | Admin</title>
    <script src="assets/js/pages/jquery.min.js"></script>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/plugins/charts-c3/plugin.css" /> -->
    <link rel="shortcut icon" href="assets/img/logo_4a262eb69667.png" type="image/x-icon" />
    <!-- animate.css -->
    <!-- <link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" /> -->
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        .privacy-area {
            padding: 15px;
            background-color: #1a1d21;
            border-top: 1px solid #3a474e;
        }

        .privacy-area p {
            color: #e3e2e2;
        }
    </style>
</head>

<body>
    
    <section class="content">
        <div class="body_scroll">
        

            <div class="container">
                <!-- Vertical Layout -->
                <div class="row" style="background: url(assets/images/background/images.png);">
                    <div class="col-md-6 offset-md-3">

                        <div class="card">

                            <div class="body col-12" style="background: orange;">

                                <div class="text-center">
                                    <img src="assets/img/logo_4a262eb69667.png" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
                                    <h5><strong>School Database Management System</strong></h5>
                                    <p><strong>Super Admin Login</strong></p>
                                    <p><a href="../index.html">Go To Home</a></p>
                                </div>
                                <div class="mb-3">
                                    <form id="login_form1" class="form-signin" method="post">
                                        <?php
                                        
                                        if (isset($_POST['login'])) {
                                            $username = trim($_POST['username']);
                                            $password = md5($_POST['password']);
                                            
                                            
                                            if ($password || $username != '') {
                                                $class->login_user($username,$password);
                                            }
                                        }
                                        ?>
                                        <label for="email_address">Username</label>
                                        <div class="form-group">
                                            <input type="text" id="email_address" name="username" class="form-control" placeholder="Enter your username" required>
                                        </div>
                                        <label for="password">Password</label>
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                                        </div>
                                        <div class="checkbox">
                                            <input id="remember_me" type="checkbox">
                                            <label for="remember_me">
                                                Remember Me
                                            </label>
                                        </div>
                                        <button data-placement="right" title="Click Here to Sign In" id="signin" name="login" class="btn btn-success px-5 mb-5 w-100" type="submit"><i class="icon-signin icon-large"></i> Login</button>

                                    </form>
                                    <div class="privacy-area wow fadeIn" data-wow-duration="0.5" data-wow-delay="0.5s">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 text-center">
                                                    <p><span class="text-warning">Edu - Portal Powered</span> <span style="color: #FFFDD0;"><a href="https://binozydigital.com "> by BiNoZy DigiTal </a></span></p>
                                                    <span class="text-white">&copy; </span> <span style="color: #FFFDD0;" id="demo"></span>

                                                    <script>
                                                        const d = new Date()
                                                        document.getElementById("demo").innerHTML = d.getFullYear()
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/pages/jquery.min.js"></script>

        <script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
        <script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

        <script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
        <script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
        <script src="assets/bundles/c3.bundle.js"></script>

        <script src="assets/bundles/mainscripts.bundle.js"></script>
        <script src="assets/js/pages/index.js"></script>
        <script src="assets/js/pages/ui/sweetalert.js"></script>
        <script src="assets/plugins/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->

</body>

</html>