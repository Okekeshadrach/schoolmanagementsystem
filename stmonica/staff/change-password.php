<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php include('../staff/get_staff.php') ?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="opacity: 0.5;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <!--========= AJAX load overlay =========== -->
    <div style="width: 100%; height:100%; background-color: white; position: fixed; top:0; left:0; z-index: 1000; opacity:0.3; display: none;" id="DivOverlay">
    </div>
    <!-----===================================----->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <?php include('../layout/topbar.php') ?>
        <?php include('../layout/sidebar.php') ?>
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- =======================  This page styles =================== ---->
            <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
            <!-- =======================  This page styles =================== ---->


            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Staff Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Staff Account</a></li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">


                    <!-- Column -->
                    <?php include('../staff/profile_nav.html') ?>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">

                                <?php include('../layout/profile_nav.php') ?>
                                <p>You can change <?php echo $staff_first_name?>'s password here</p>

                                <form action="login/reset-password-process/41dd114957d2ff2aa" id="change-password" autocomplete="off" method="post" accept-charset="utf-8">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="new_password" class="control-label">New Password:</label>
                                                <input type="password" class="form-control" name="new_password" id="new_password" value="" required autocomplete="off" minlength="6">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="new_password_repeat" class="control-label">Repeat New
                                                    Password:</label>
                                                <input type="password" class="form-control" name="new_password_repeat" id="new_password_repeat" value="" required autocomplete="off" minlength="6">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="staff/staff-profile/5047f2e72c815caa6" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10">Close</a>
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit
                                        </button>
                                    </div>
                                    <p class="processor pull-right"></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>

            <script>
                $('#change-password').submit(function(e) {
                    e.preventDefault();
                    var jqxhr = submit_form('#change-password');
                    jqxhr.done(function(result) {
                        if (result.type === 'success') {
                            $('input').attr('disabled', 'disabled');
                            $('button[type=submit]').attr('disabled', 'disabled');
                        }
                    })
                });
            </script><!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2022 School Management System (Edu-Portal) by <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL koncept</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
       <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include('../layout/script.php') ?>
    <!-- ============================================================== -->
</body>

</html>