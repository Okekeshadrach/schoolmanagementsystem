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
                        <h3 class="text-themecolor m-b-0 m-t-0">Parent Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                            <li class="breadcrumb-item active">Parent Profile</li>
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
                    <div class="col-lg-4 col-xlg-3 col-md-5" id="parent-profile-div">
                        <div class="card" id="parent-profile-side">
                            <div class="card-body">
                                <center class="m-t-30">
                                    <img src="uploads/nobody.gif" class="img-circle" id="p-passport" width="150" />
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
                                    </div>
                                </nav>
                                <form action="student/parent-profile-process/8b59528c12ed57d5a2" class="form-horizontal" id="parent-profile" method="post" accept-charset="utf-8">

                                    <div class="row record" data-id="33cdcfa8121a8b884e">
                                        <div class="form-group col-md-6">
                                            <label for="title" class="control-label col-form-label">Title*</label>
                                            <input type="text" class="form-control" id="title" name="title" value="">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="surname" class="control-label col-form-label">Surname*</label>
                                            <input type="text" class="form-control" id="surname" name="surname" required value="Michael">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="first_name" class="control-label col-form-label">First
                                                Name*</label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" required value="Obi">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="sec_name" class="control-label col-form-label">Other
                                                Name</label>
                                            <input type="text" class="form-control" id="sec_name" name="sec_name" value="">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="occup" class="control-label col-form-label">Occupation</label>
                                            <input type="text" class="form-control" id="occup" name="occup" value="">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="office_address" class="control-label col-form-label">Office
                                                Address</label>
                                            <input type="text" class="form-control" id="office_address" name="office_address" value="">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="house_address" class="control-label col-form-label">House
                                                Address</label>
                                            <input type="text" class="form-control" id="house_address" name="house_address" value="">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email" class="control-label col-form-label">Email
                                                Address</label>
                                            <input type="text" class="form-control to-validate" id="email" name="email" value="">
                                            <small class="form-control-feedback"></small>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="phone" class="control-label col-form-label">Phone Number</label>
                                            <input type="text" class="form-control to-validate" id="phone" name="phone" value="08037370787">
                                            <small class="form-control-feedback"></small>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="next_kin" class="control-label col-form-label">Next of Kin
                                                (Name)</label>
                                            <input type="text" class="form-control" id="next_kin" name="next_kin" value="">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="next_kin_phone" class="control-label col-form-label">Next of Kin
                                                (Phone)</label>
                                            <input type="text" class="form-control" id="next_kin_phone" name="next_kin_phone" value="">
                                        </div>
                                        <div class="form-group col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save
                                                Changes</button>
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

                    $('.to-validate').change(function() {
                        var a = $(this);
                        var field = a.attr('id');
                        var val = a.val();
                        var id = a.parents('.record').data('id');
                        var url = 'user-account/validate-user-field';

                        $.post(url, {
                            field: field,
                            value: val,
                            user_type: "parent",
                            id: id
                        }, function(result) {
                            if (result.type !== 'success') {
                                a.addClass('form-control-danger');
                                a.parent().addClass('has-danger');
                                a.siblings('small').html(result.msg);
                            } else {
                                a.removeClass('form-control-danger');
                                a.parent().removeClass('has-danger');
                                a.siblings('small').html('');
                            }
                        }, 'json');
                    });

                    $('#parent-profile').submit(function(e) {
                        e.preventDefault();

                        var has_error = $('.form-control-danger');
                        if (has_error.length > 0) {
                            has_error.focus();
                        } else {
                            var xhr = submit_form('#parent-profile');
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    $('#parent-profile-div').load('student/parent-profile/493c77a4210f5cfc1 #parent-profile-side');
                                }
                            });
                        }
                    });
                })
            </script>
            <!-- ========================================== -->
            <!-- ============================================================== -->
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