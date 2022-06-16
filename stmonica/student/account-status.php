<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>

<?php include('../student/get_student.php') ?>
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
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Student Account Status</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                            <li class="breadcrumb-item active">Account status</li>
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
                <?php include('../student/side.html') ?>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <?php include('../student/student_nav.html') ?>
                                <div class="form-group row">
                                    <label for="passport" class="col-sm-3 control-label col-form-label">Current State:</label>
                                    <div class="col-sm-9">
                                        <div style="padding-top: 7px">
                                            <span class="label label-light-warning">NEVER LOGGED IN</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="passport" class="col-sm-3 control-label col-form-label">Login Count:</label>
                                    <div class="col-sm-9">
                                        <div style="padding-top: 7px">
                                            0 </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="passport" class="col-sm-3 control-label col-form-label">Account Status:</label>
                                    <div class="col-sm-9">
                                        <div style="padding-top: 7px">
                                            <span class="label label-success">
                                                Account is open </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="form-group">
                                    <p>LOCK <b><?php echo $first_name?>'s</b> account? </p>
                                    <p>
                                        <a class="btn btn-outline-danger btn-sm btn-rounded waves-effect waves-light ajax-link change-status" href="../user-account/change-status/0/f0145eba50201eea5f07">
                                            <span class="fa fa-lock"></span> Yes, LOCK her account!
                                        </a>
                                    </p>
                                </div>

                                <hr>
                                <div class="form-group">
                                    <p>Push login details to <b><?php echo $first_name?></b>?</p>
                                    <p><a class="btn btn-outline-primary btn-sm btn-rounded waves-effect waves-light" id="push-email" href="../user-account/push-details/ffd771c7502073f9e760">
                                            <span class="fa fa-send"></span> Yes, push email to <?php echo $first_name?>!
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>

            <script>
                $(function() {
                    //===== Run when user attempts to change the user's account status ==============
                    $('.change-status').click(function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will change the status of <?php echo $first_name?>'s account. \nAre you sure you want to do this?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            var xhr = get_request(url);
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    window.location.href = '../student/account-status/d2bf11bc241594e2ee4c';
                                }
                            });
                        });
                    });
                    //====================================================================

                    //===== Run when user attempts to push an email ==============
                    $('#push-email').click(function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will send an email with <?php echo $first_name?>'s login details to her. \n Are you sure you want to do this?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            get_request(url);
                        });
                    });
                    //====================================================================
                })
            </script>
            <!-- ========================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 School Information Management System (MySkool Portal) by <a href="https://krystaldigitalng.com" target="_blank">KRYSTAL DIGITAL SOLUTIONS</a>
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