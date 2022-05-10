<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from krystalng.com/fggconitsha/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Apr 2022 13:48:51 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Federal Government Girls College, Nkwelle Ezunaka">
    <meta name="keywords" content="school, education">
    <meta name="author" content="Krystal Digital Solutions">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo_4a262eb696676654.png?v1">
    <title>Krystal’s It Academy F.g.g.c, Nkwelle Ezunaka - School Portal</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link href="assets/css/colors/blue.css" id="theme" rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="opacity: 0.5;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper" class="login-register login-sidebar" style="background-image:url(assets/img/home_pix_bb844d7f189a9834c.jpg);">
        <div class="login-box card">
            <div class="card-body">
                <h3 href="javascript:void(0)" class="text-center db"><img src="assets/img/logo_4a262eb69667.png" alt="Home" height="150" /><br />KRYSTAL’S IT ACADEMY F.G.G.C, NKWELLE EZUNAKA </h3>
                <br>
                <p class="text-center db">SCHOOL INFORMATION MANAGEMENT SYSTEM</p>

                <form action="login/process" id="loginform" class="form-horizontal form-material" method="post" accept-charset="utf-8">
                    <div class="form-group m-t-40">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" required="" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required="" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="checkbox checkbox-primary p-t-0">
                                <input id="checkbox-signup" name="remember_me" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12" id="login-btn">
                            <button class="btn btn-info btn-rounded btn-lg btn-block text-uppercase waves-effect waves-light" type="submit" name="login_submit">Log In</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot your username or password?</a>
                        </div>
                    </div>
                </form>
                <div id="recoverform" style="display: none">
                    <form action="login/reset-password-request" class="form-horizontal" method="post" accept-charset="utf-8">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3 class="text-center db">Reset your Password</h3>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-control-label" for="user_type">Reset Password for?</label>
                            <select name="user_type" class="form-control" id="user_type" required>
                                <option></option>
                                <option value="student">Student Account</option>
                                <option value="parent">Parent Account</option>
                                <option value="staff">Staff Account</option>
                                <option value="admin">Admin Account</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <p class="text-muted">
                                Enter the email address that is on your profile. You will receive a link to create a new password via email.
                            </p>
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="user_email" required placeholder="e.g. johndoe@gmail.com">
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-rounded btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Submit</button>
                            </div>
                        </div>
                    </form> <button class="btn btn-outline-info btn-sm btn-rounded" id="cancel-recover-form"><span class="fa fa-arrow-left"></span> Back to login</button>
                </div>

            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/popper/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

    <script>
        $('#loginform').submit(function() {
            $('#login-btn').php('<button class="btn btn-success btn-rounded btn-lg btn-block waves-effect waves-light" type="submit" name="login_submit">Authenticating...</button>')
        });

        <
        !--Start of Tawk.to Script-- >
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to//default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })(); <
        !--End of Tawk.to Script-- >
    </script>
</body>


<!-- Mirrored from krystalng.com/fggconitsha/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Apr 2022 13:48:58 GMT -->

</html>