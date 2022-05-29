<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>

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
                        <h3 class="text-themecolor m-b-0 m-t-0">Staff Activity</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li>
                            <li class="breadcrumb-item active">Activity</li>
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
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card" id="staff-profile-side">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <img src="uploads/nobody_m.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">Mr Obinozie Nnamdi Francis</h4>

                                    <h6 class="card-subtitle">
                                        <label class="label label-success">TEACHING STAFF</label>
                                    </h6>

                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-6">
                                            Male </div>
                                        <div class="col-6">
                                            5 yrs old </div>
                                    </div>

                                    <h6 class="card-subtitle m-t-10">
                                        Class Teacher </h6>

                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <small class="text-muted">Username</small>
                                <h6>obinozie.n</h6>

                                <small class="text-muted">Date Created</small>
                                <h6>Nov 08, 2016 at 11:44 AM</h6>



                                <small class="text-muted">Class Teacher for</small>
                                <h6>
                                    <a href="classes/manage-students/07ccc67f138766c09d/fcdae5ac10c1e7011e" class="text-info">JSS 2A</a>, <a href="classes/manage-students/8672cafd138ff8d5c0/ba10bb4111d4c7f661" class="text-info">JSS 2B</a>, <a href="classes/manage-students/1a4ab15f137b54a0c2/e334476112fee7cdf0" class="text-info">JSS 2C</a>, <a href="classes/manage-students/b44243741314e8fe2b/55050526136bb9f4f5" class="text-info">JSS 2D</a>, <a href="classes/manage-students/ca6738c01337b135a4/b086b1c014d87bc2f4" class="text-info">JSS 2E</a>, <a href="classes/manage-students/71e6dcc113a97dd989/a6ef0bbf15588f604d" class="text-info">JSS 2G</a>, <a href="classes/manage-students/7433f6631369995f2b/b5061ac5166a9ed31a" class="text-info">JSS 2H</a>, <a href="classes/manage-students/9fe30202135037c556/2e624c69178cae79fc" class="text-info">JSS 2J</a>, <a href="classes/manage-students/8a41e7a513a029cf4e/85b1652318519edc6f" class="text-info">JSS 2K</a>, <a href="classes/manage-students/b3e61266134d6de369/e47910a216be3542f" class="text-info">JSS 1A</a>, <a href="classes/manage-students/58fd105713b934f1a6/830dda9b29034ae28" class="text-info">JSS 1B</a>, <a href="classes/manage-students/3af8c78c13a06ec63e/28e3bed135d3564ef" class="text-info">JSS 1C</a>
                                </h6>


                                <small class="text-muted">Rank</small>
                                <h6><span class="label label-light-warning">Unspecified</span></h6>

                                <small class="text-muted">Academic Qualification</small>
                                <h6><span class="label label-light-warning">Unspecified</span></h6>

                                <small class="text-muted">Grade Level</small>
                                <h6><span class="label label-light-warning">Unspecified</span></h6>

                                <small class="text-muted">Email address</small>
                                <h6>nnamdifrancis32@gmail.com</h6>

                                <small class="text-muted">Phone</small>
                                <h6>08064769378</h6>

                                <small class="text-muted">Address</small>
                                <h6>FGGC, ONISTHA</h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8070402.841056632!2d4.177613658408504!3d9.006483165840024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sus!4v1529581420386" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                                <br>
                                <hr>
                                <small class="text-success pull-right"><i></i></small>
                                <small class="text-success pull-right last-updated"><i>Last Updated by: You on May 04,
                                        2022 at 04:22 PM</i></small>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 1em">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav">

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Profile
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="staff/staff-profile/5047f2e72c815caa6">Edit
                                                        Profile</a>
                                                    <a class="dropdown-item" href="staff/activity/5047f2e72c815caa6">Activity
                                                        Log</a>

                                                    <a class="dropdown-item" href="staff/change-password/5047f2e72c815caa6">Reset
                                                        Password</a>

                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link " href="staff/account-status/5047f2e72c815caa6">Account
                                                    Status</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link " href="staff/capture-passport/5047f2e72c815caa6">Capture
                                                    Passport</a>
                                            </li>


                                            <li class="nav-item">
                                                <a class="nav-link" href="staff/staff-department/5047f2e72c815caa6">Department</a>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Assign
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="staff/assign-subject/5047f2e72c815caa6">As
                                                        Subject Teacher</a>
                                                    <a class="dropdown-item" href="staff/assign-house/5047f2e72c815caa6">As
                                                        Sport House Master</a>
                                                    <a class="dropdown-item" href="staff/assign-class-arm/5047f2e72c815caa6">As
                                                        Class Teacher</a>
                                                    <a class="dropdown-item" href="staff/assign-countersign/5047f2e72c815caa6">As
                                                        Countersigning Officer</a>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </nav>
                                <p>See Obinozie Nnamdi's activity below . . .</p>
                                <div class="table-responsive-lg">
                                    <table class="table table-striped table-bordered stylish-table" style="min-width: 500px;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Activity</th>
                                                <th>Browser</th>
                                                <th>Time/Date</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 14px">
                                            <tr>
                                                <td colspan="5">No activity found.</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    if ($('tr').length > 15) {
                        $('.table').DataTable({
                            "iDisplayLength": 15
                        });
                    }
                });
            </script><!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
            &copy; <?php echo date('Y'); ?> School Database Management System (Edu-Portal) Powered By
                <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL KoNcEpT</a>
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