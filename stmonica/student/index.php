<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<!-- Bootstrap Select Css -->
<link rel="stylesheet" href="assets/plugins/bootstrap-select/css/bootstrap-select.css" />
<!-- noUISlider Css -->
<!-- <link rel="stylesheet" href="assets/plugins/nouislider/nouislider.min.css" /> -->
<!-- Select2 -->
<link rel="stylesheet" href="assets/plugins/select2/select2.css" />

<!-- Custom Css -->
<link rel="stylesheet" href="assets/css/style.min.css">

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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Student</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                            <li class="breadcrumb-item active">Register Student</li>
                        </ol>
                    </div>
                </div>
                <div class="container-fluid">
                    <!-- Input -->
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <!-- <div class="alert alert-warning" role="alert">
                                <strong>Bootstrap</strong> Better check yourself, <a target="_blank" href="https://getbootstrap.com/docs/4.2/components/input-group/">View More</a>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                                </button>
                            </div> -->

                            <div class="card">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="body">
                                        <!-- <h2 class="card-inside-title">Basic Examples</h2> -->

                                        <h2 class="card-inside-title">Academics Details</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <label for="Academic Year">Academic Year</label>
                                                <select class="form-control show-tick ms select2" name="academic_year" data-placeholder="Select">
                                                    <option></option>
                                                    <?php $class->get_schoolyear_select() ?>

                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="Surname">Admission No</label>
                                                <div class="form-group">
                                                    <?php $class->get_regno() ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="Surname">Admission Date</label>
                                                <div class="form-group">
                                                    <input type="text" name="admission_date" class="form-control NOW()" value="<?php echo date('m/d/y') ?>" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="Academic Year">Sport House</label>
                                                <select class="form-control show-tick ms select2" name="sport_house" data-placeholder="Select">
                                                    <option></option>
                                                    <?php $class->get_sporthouse_select() ?>

                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="Surname">Class</label>
                                                <div class="form-group">
                                                    <select class="form-control show-tick ms select2" data-placeholder="Select" name="class">
                                                        <option></option>
                                                        <?php $class->get_class_select() ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="Surname">Class Arm</label>
                                                <div class="form-group">
                                                    <select class="form-control show-tick ms select2" data-placeholder="Select" name="class_arm">
                                                        <option></option>
                                                        <?php $class->get_classarm_select() ?>

                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <h2 class="card-inside-title">Previos School Details</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-6">
                                                <label for="Surname">Previous School Name</label>
                                                <div class="form-group">
                                                    <input type="text" name="prev_name" class="form-control" placeholder="Enter Previous School Name" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="Surname">Previous School Name Last Attended Date</label>
                                                <div class="form-group">
                                                    <input type="date" name=" prev_date" class="form-control" />
                                                </div>
                                            </div>

                                        </div>

                                        <h2 class="card-inside-title">Student Details</h2>
                                        <div class="row clearfix">
                                            <div class="col-sm-4">
                                                <label for="Surname">Surname</label>
                                                <div class="form-group">
                                                    <input type="text" name="surname" class="form-control" placeholder="Enter Surname" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="Surname">First Name</label>
                                                <div class="form-group">
                                                    <input type="text" name="firstname" class="form-control" placeholder="Enter First Name" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="Surname">Other Name</label>
                                                <div class="form-group">
                                                    <input type="text" name="othername" class="form-control" placeholder="Enter Other Names" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row clearfix">

                                            <div class="col-sm-4">
                                                <label for="Blood group">Blood Group</label>
                                                <select class="form-control show-tick ms select2" data-placeholder="Select" name="bloog_group">
                                                    <option></option>
                                                    <option>A+</option>
                                                    <option>A-</option>
                                                    <option>B+</option>
                                                    <option>B-</option>
                                                    <option>O+</option>
                                                    <option>O-</option>
                                                    <option>AB+</option>
                                                    <option>AB-</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="genotype">Genotype</label>
                                                <select class="form-control show-tick ms select2" data-placeholder="Select" name="genotype">
                                                    <option></option>
                                                    <option>AA</option>
                                                    <option>AS</option>
                                                    <option>SS</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-4">
                                                <label>Date Of Birth</label>
                                                <div class="input-group masked-input form-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                                    </div>
                                                    <input type="date" name="dob" class="form-control date">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-6">
                                                <label for="">Place Of Birth</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="pob" placeholder="Enter Place of Birth" />
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="genotype">Religion</label>
                                                <select class="form-control show-tick ms select2" data-placeholder="Select" name="religion">
                                                    <option></option>
                                                    <option>Christianity</option>
                                                    <option>Islam</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="Gender">Gender</label><br>
                                                <select class="form-control show-tick ms select2" data-placeholder="Select" name="gender">
                                                    <option></option>
                                                    <option>Male</option>
                                                    <option>Female</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="">Email Address</label>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Enter Email" name="email" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-6">
                                                <label for="">State</label>
                                                <div class="form-group">
                                                    <select onchange="toggleLGA(this);" name="state" id="state" required class="form-control show-tick ms select2">
                                                        <option value="" selected="selected">- Select -</option>
                                                        <option value="Abia">Abia</option>
                                                        <option value="Adamawa">Adamawa</option>
                                                        <option value="AkwaIbom">AkwaIbom</option>
                                                        <option value="Anambra">Anambra</option>
                                                        <option value="Bauchi">Bauchi</option>
                                                        <option value="Bayelsa">Bayelsa</option>
                                                        <option value="Benue">Benue</option>
                                                        <option value="Borno">Borno</option>
                                                        <option value="Cross River">Cross River</option>
                                                        <option value="Delta">Delta</option>
                                                        <option value="Ebonyi">Ebonyi</option>
                                                        <option value="Edo">Edo</option>
                                                        <option value="Ekiti">Ekiti</option>
                                                        <option value="Enugu">Enugu</option>
                                                        <option value="FCT">FCT</option>
                                                        <option value="Gombe">Gombe</option>
                                                        <option value="Imo">Imo</option>
                                                        <option value="Jigawa">Jigawa</option>
                                                        <option value="Kaduna">Kaduna</option>
                                                        <option value="Kano">Kano</option>
                                                        <option value="Katsina">Katsina</option>
                                                        <option value="Kebbi">Kebbi</option>
                                                        <option value="Kogi">Kogi</option>
                                                        <option value="Kwara">Kwara</option>
                                                        <option value="Lagos">Lagos</option>
                                                        <option value="Nasarawa">Nasarawa</option>
                                                        <option value="Niger">Niger</option>
                                                        <option value="Ogun">Ogun</option>
                                                        <option value="Ondo">Ondo</option>
                                                        <option value="Osun">Osun</option>
                                                        <option value="Oyo">Oyo</option>
                                                        <option value="Plateau">Plateau</option>
                                                        <option value="Rivers">Rivers</option>
                                                        <option value="Sokoto">Sokoto</option>
                                                        <option value="Taraba">Taraba</option>
                                                        <option value="Yobe">Yobe</option>
                                                        <option value="Zamfara">Zamafara</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="genotype">LGA</label><br>
                                                <select name="lga" id="lga" class="form-control show-tick ms select2 select-lga" required>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="Gender">State Of Origin</label>
                                                <select onchange="toggleLGA1(this);" name="state_origin" id="state" required class="form-control show-tick ms select2">
                                                    <option value="" selected="selected">- Select -</option>
                                                    <option value="Abia">Abia</option>
                                                    <option value="Adamawa">Adamawa</option>
                                                    <option value="AkwaIbom">AkwaIbom</option>
                                                    <option value="Anambra">Anambra</option>
                                                    <option value="Bauchi">Bauchi</option>
                                                    <option value="Bayelsa">Bayelsa</option>
                                                    <option value="Benue">Benue</option>
                                                    <option value="Borno">Borno</option>
                                                    <option value="Cross River">Cross River</option>
                                                    <option value="Delta">Delta</option>
                                                    <option value="Ebonyi">Ebonyi</option>
                                                    <option value="Edo">Edo</option>
                                                    <option value="Ekiti">Ekiti</option>
                                                    <option value="Enugu">Enugu</option>
                                                    <option value="FCT">FCT</option>
                                                    <option value="Gombe">Gombe</option>
                                                    <option value="Imo">Imo</option>
                                                    <option value="Jigawa">Jigawa</option>
                                                    <option value="Kaduna">Kaduna</option>
                                                    <option value="Kano">Kano</option>
                                                    <option value="Katsina">Katsina</option>
                                                    <option value="Kebbi">Kebbi</option>
                                                    <option value="Kogi">Kogi</option>
                                                    <option value="Kwara">Kwara</option>
                                                    <option value="Lagos">Lagos</option>
                                                    <option value="Nasarawa">Nasarawa</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Ogun">Ogun</option>
                                                    <option value="Ondo">Ondo</option>
                                                    <option value="Osun">Osun</option>
                                                    <option value="Oyo">Oyo</option>
                                                    <option value="Plateau">Plateau</option>
                                                    <option value="Rivers">Rivers</option>
                                                    <option value="Sokoto">Sokoto</option>
                                                    <option value="Taraba">Taraba</option>
                                                    <option value="Yobe">Yobe</option>
                                                    <option value="Zamfara">Zamafara</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-6">
                                                <label for="">LGA of Origin</label>
                                                <select name="lga_origin" id="lga" class="form-control show-tick ms select2 select-lga1" required>
                                                </select>
                                            </div>


                                        </div>


                                        <div class="row ">
                                            <div class="col-lg-8 col-md-12 center">
                                                <label for="" class="title">Profile Picture</label>
                                                <div class="dropzone">
                                                    <img src="../assets/scss/icons/upload.svg" class="upload-icon" />
                                                    <input type="file" name="profile" class="upload-input" accept="image/png,image/jpeg" />
                                                </div>
                                            </div>
                                        </div>
                                        <h2 class="card-inside-title">Next Of Kin Details</h2>
                                        <div class="row clearfix">
                                            <!-- <h2 class="card-inside-title">Next Of Kin Details</h2> -->
                                            <div class="col-sm-4">
                                                <label for="">Parent Phone Number</label>
                                                <div class="form-group">
                                                    <input type="text" name="mobile" class="form-control" placeholder="Enter phone number" />
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="">Next Of Kin</label>
                                                <div class="form-group">
                                                    <input type="text" name="next_kin" class="form-control" placeholder="Enter Next of Kin Name" />
                                                </div>
                                            </div>

                                            <div class="col-sm-4">
                                                <label for="">Next of Kin Phone number</label>
                                                <div class="form-group">
                                                    <input type="text" name="next_mobile" class="form-control" placeholder="Enter Phone number" />
                                                </div>
                                            </div>
                                            <!-- <div class="col-lg-3 col-md-6">
                                                <label for="">Parent Phone Number</label>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Enter phone number" />
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="row clearfix">

                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Parents Home Address</label>
                                                    <div class="form-line">
                                                        <textarea name="home_address" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="">Parents Office Address</label>
                                                    <div class="form-line">
                                                        <textarea name="office_address" rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">

                                            <div class="col-sm-6">
                                                <div class="form-group ">
                                                    <!-- <label for="">Parents Office Address</label> -->
                                                    <div class="form-line">
                                                        <input type="submit" name="save" class="btn" value="Save">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <?php
                        if (isset($_POST['save'])) {
                            echo "<script>alert('hi')</script>";
                        }
                        ?>
                        <!-- <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13">Enter Registration PIN</p>

                            <form action="student/add-student-pin-validate" id="validate-pin" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="form-group col-sm-12">
                                        <label for="name">PIN</label>
                                        <input type="text" name="reg_pin" class="form-control" id="name" placeholder="e.g. FGGCONXXXXXXXX" required>
                                    </div>
                                    <div class="col-sm-9">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">
                                            Proceed
                                        </button>
                                        <span class="processor"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->

                        <script>
                            $('#validate-pin').submit(function(e) {
                                e.preventDefault();
                                var jqxhr = submit_form('#validate-pin');

                                jqxhr.done(function(result) {
                                    if (result.type === 'success') {
                                        setTimeout(function() {
                                            window.location.href = site_url + 'student/add-student';
                                        }, 2000);
                                    }
                                })
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
                <!-- End Wrapper -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <?php include('../layout/script.php') ?>
</body>

</html>