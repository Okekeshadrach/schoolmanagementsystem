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
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">School Information</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Configuration</a></li>
                            <li class="breadcrumb-item active">School Information</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-success">See School information below. You can make changes here at will
                                </p>
                                <form action="school-config/school-info-process" id="school-info" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="name">School Full Name :</label>
                                                <input type="text" name="name" class="form-control" id="name" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="short_name">School Short Name
                                                    :</label>
                                                <input type="text" name="short_name" class="form-control" id="short_name" value="ST. MONICA" required maxlength="15">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="princ_name">Principal's Name
                                                    :</label>
                                                <input type="text" name="princ_name" class="form-control" id="princ_name" value=" " required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="princ_title">Principal's
                                                    Designation :</label>
                                                <input type="text" name="princ_title" class="form-control" id="princ_title" value="Project Manager" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="established">Year of
                                                    Establishment :</label>
                                                <input type="number" name="established" class="form-control" id="established" value="1928" required maxlength="4" max="2022">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="gender_type">Gender Type
                                                    :</label>
                                                <select name="gender_type" class="selectpicker" data-style="form-control btn-secondary" id="gender_type" required>
                                                    <option>Both</option>
                                                    <option>Male</option>
                                                    <option selected>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="phone1">Phone 1 :</label>
                                                <input type="text" name="phone1" class="form-control" id="phone1" value="+23412952086" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="form-control-label" for="phone2">Phone 2 :</label>
                                                <input type="text" name="phone2" class="form-control" id="phone2" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="email1">Email 1 :</label>
                                                <input type="email" name="email1" class="form-control" id="email1" value="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="email2">Email 2 :</label>
                                                <input type="email" name="email2" class="form-control" id="email2" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="site_keyword">Site Keywords
                                                    :</label>
                                                <textarea type="text" name="site_keyword" class="form-control" id="site_keyword" required>school, education</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="site_desc">Site Description
                                                    :</label>
                                                <textarea type="text" name="site_desc" class="form-control" id="site_desc" required>St. Monica Nur. & Pri. School, Ibusa Delta State</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="address1">Address 1 :</label>
                                                <textarea type="text" name="address1" class="form-control" id="address1" required>IBUSA DELTA</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="address2">Address 2 :</label>
                                                <textarea type="text" name="address2" class="form-control" id="address2"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="logo-img">School Logo :</label>
                                                <img src="assets/img/logo_4a262eb69667.png" height="100" class="logo">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="logo">Upload new School's Logo
                                                    here :</label>
                                                <input type="file" name="logo" class="form-control" id="logo">
                                                <small class="text-info">(JPG, JPEG, or PNG. Max Size: 100KB)</small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="princ_sign_img">Principal's
                                                    Signature :</label>
                                                <img src="assets/img/princ_sign_d8e59db65c4c.png" height="100" class="img-rounded princ_sign">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="princ_sign">Upload new
                                                    Principal's signature here :</label>
                                                <input type="file" name="princ_sign" class="form-control" id="princ_sign">
                                                <small class="text-info">(JPG, JPEG, or PNG. Max Size: 100KB)</small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="home_pix_img">Landing Page
                                                    Picture :</label>
                                                <img src="assets/img/home_pix_bb844d7f189a9834c.jpg" height="100" class="img-rounded home_pix">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="home_pix">Upload new Landing Page
                                                    Picture here :</label>
                                                <input type="file" name="home_pix" class="form-control" id="home_pix">
                                                <small class="text-info">(JPG, JPEG, or PNG. Minimum Resolution: 1200px
                                                    x 800px; Max Size: 1MB)</small>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-md-3">
                                        <button class="btn btn-primary btn-rounded waves-effect waves-light m-b-5">Save
                                            Changes</button>
                                    </div>

                                    <small class="text-success pull-right last-updated"><i>Last Updated by: You on Nov
                                            28, 2019 at 05:04 AM</i></small>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $('#school-info').submit(function(e) {
                        e.preventDefault();
                        var jqxhr = submit_form_multipart('#school-info');
                        jqxhr.done(function(result) {
                            if (result.type === 'success') {

                                //Automatically update page content. User does not have to refresh
                                $('.short_name').html($('#short_name').val());
                                if (result.logo) {
                                    $('.logo').attr('src', base_url + 'assets/img/' + result.logo);
                                }
                                if (result.home_pix) {
                                    $('.home_pix').attr('src', base_url + 'assets/img/' + result.home_pix);
                                }
                                if (result.princ_sign) {
                                    $('.princ_sign').attr('src', base_url + 'assets/img/' + result.princ_sign);
                                }
                                $('.last-updated').remove();
                            }
                        })
                    })
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
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <?php include('../layout/script.php') ?>
</body>

</html>
