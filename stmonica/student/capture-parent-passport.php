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
                        <h3 class="text-themecolor m-b-0 m-t-0">Capture Parent Passport</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                            <li class="breadcrumb-item active">Capture Parent Passport</li>
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
                        <div class="card" id="parent-profile-side">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <img src="../../uploads/nobody.gif" class="img-circle" id="p-passport" width="150" />
                                    <h4 class="card-title m-t-10"> Michael Obi </h4>
                                    <h6 class="card-subtitle"></h6>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body">
                                <small class="text-muted">Username</small>
                                <h6>MICHAELO260</h6>

                                <small class="text-muted">Date Created</small>
                                <h6>Nov 08, 2016 at 01:24 PM</h6>

                                <small class="text-muted">Number of Wards</small>
                                <h6>1</h6>

                                <small class="text-muted">Email address</small>
                                <h6><span class="label label-warning">Unspecified</span></h6>

                                <small class="text-muted">Phone</small>
                                <h6>08037370787</h6>

                                <small class="text-muted">Home Address</small>
                                <h6><span class="label label-warning">Unspecified</span></h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8070402.841056632!2d4.177613658408504!3d9.006483165840024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sus!4v1529581420386" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>

                                <small class="text-success pull-right"><i></i></small>
                                <small class="text-success pull-right last-updated"><i></i></small>
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
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Profile
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="parent-profile.php">Edit
                                                        Profile</a>
                                                    <a class="dropdown-item" href="capture-parent-passport.php">Capture
                                                        Passport</a>
                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="parent-ward.php">Ward(s)</a>
                                            </li>

                                        </ul>
                                    </div>                                </nav>
                                <form action="../student/capture-parent-passport-process" class="form-horizontal" id="parent-passport" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <div class="form-group row">
                                        <label for="passport" class="col-sm-3 text-right control-label col-form-label">Upload Passport*</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="passport" name="passport" required>
                                            <small class="text-info">(JPG, JPEG, or PNG. Max Size: 100KB)</small>
                                        </div>
                                    </div>

                                    <input type="hidden" name="par_id_enc" value="16f2d8292b1713534">
                                    <div class="form-group m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Upload Passport</button>
                                            <span class="processor"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>

            <script>
                $(function() {
                    $('#parent-passport').submit(function(e) {
                        e.preventDefault();
                        var xhr = submit_form_multipart('#parent-passport');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                //Automatically update parent passport. Not until user refreshes
                                $('#p-passport').attr('src', base_url + 'uploads/' + result.passport);

                                //Clear form input
                                $('#passport').val('');
                            }
                        });
                    });
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