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
        <!-- ============================================================== -->
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
                        <h3 class="text-themecolor m-b-0 m-t-0">Student Profile</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                            <li class="breadcrumb-item active">Student Profile</li>
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
                            <form action="../student/student-profile-process.php" class="form-horizontal" id="studentprofile" method="post" accept-charset="utf-8">

                                <div class="row record" data-id="df7cea02590681d281e1">
                                    <div class="form-group col-md-6">
                                        <label for="surname" class="control-label col-form-label">Surname <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="surname" name="surname" value="<?php echo strtolower($surname) ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="first_name" class="control-label col-form-label">First Name
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sec_name" class="control-label col-form-label">Other
                                            Name</label>
                                        <input type="text" class="form-control" id="sec_name" name="sec_name" value="<?php echo $last_name ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="dob" class="control-label col-form-label">Date of Birth <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="dob" value="<?php echo $dob ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="dob" class="control-label col-form-label">Place of Birth <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="" id="dob" name="pob" value="<?php echo $pob ?>" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-form-label">Gender <span class="text-danger">*</span></label><br>
                                        <input name="gender" type="radio" id="radio_1" class="with-gap radio-col-deep-purple" <?php echo $student_gender == "Male" ? "checked" : ''; ?> value="Male" />
                                        <label class="form-control-label" for="radio_1">Male</label>
                                        <input name="gender" type="radio" id="radio_2" class="with-gap radio-col-deep-purple" <?php echo $student_gender == "Female" ? "checked" : ''; ?>value="Female" />
                                        <label class="form-control-label" for="radio_2">Female</label>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="admno" class="control-label col-form-label">Admission Number
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control to-validate" id="admno" name="admno" value="<?php echo $id ?>" disabled>
                                        <small class="form-control-feedback"></small>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="state" class="control-label col-form-label">State of
                                            Origin</label>
                                            <select onchange="toggleLGA(this);" name="state" id="state" required class="form-control show-tick ms select2">
                                            <option value="" selected="selected">- Select -</option>
                                            <option value="Abia" <?php echo $state_origin == "Abia" ? "selected" : ''; ?>>Abia</option>
                                            <option value="Adamawa" <?php echo $state_origin == "Adamawa" ? "selected" : ''; ?>>Adamawa</option>
                                            <option value="AkwaIbom" <?php echo $state_origin == "AkwaIbom" ? "selected" : ''; ?>>AkwaIbom</option>
                                            <option value="Anambra" <?php echo $state_origin == "Anambra" ? "selected" : ''; ?>>Anambra</option>
                                            <option value="Bauchi" <?php echo $state_origin == "Bauchi" ? "selected" : ''; ?>>Bauchi</option>
                                            <option value="Bayelsa" <?php echo $state_origin == "Bayelsa" ? "selected" : ''; ?>>Bayelsa</option>
                                            <option value="Benue" <?php echo $state_origin == "Benue" ? "selected" : ''; ?>>Benue</option>
                                            <option value="Borno" <?php echo $state_origin == "Borno" ? "selected" : ''; ?>>Borno</option>
                                            <option value="Cross River" <?php echo $state_origin == "Cross River" ? "selected" : ''; ?>>Cross River</option>
                                            <option value="Delta" <?php echo $state_origin == "Delta" ? "selected" : ''; ?>>Delta</option>
                                            <option value="Ebonyi" <?php echo $state_origin == "Ebonyi" ? "selected" : ''; ?>>Ebonyi</option>
                                            <option value="Edo" <?php echo $state_origin == "Edo" ? "selected" : ''; ?>>Edo</option>
                                            <option value="Ekiti" <?php echo $state_origin == "Ekiti" ? "selected" : ''; ?>>Ekiti</option>
                                            <option value="Enugu" <?php echo $state_origin == "Enugu" ? "selected" : ''; ?>>Enugu</option>
                                            <option value="FCT" <?php echo $state_origin == "FCT" ? "selected" : ''; ?>>FCT</option>
                                            <option value="Gombe" <?php echo $state_origin == "Gombe" ? "selected" : ''; ?>>Gombe</option>
                                            <option value="Imo" <?php echo $state_origin == "Imo" ? "selected" : ''; ?>>Imo</option>
                                            <option value="Jigawa" <?php echo $state_origin == "Jigawa" ? "selected" : ''; ?>>Jigawa</option>
                                            <option value="Kaduna" <?php echo $state_origin == "Kaduna" ? "selected" : ''; ?>>Kaduna</option>
                                            <option value="Kano" <?php echo $state_origin == "Kano" ? "selected" : ''; ?>>Kano</option>
                                            <option value="Katsina" <?php echo $state_origin == "Katsina" ? "selected" : ''; ?>>Katsina</option>
                                            <option value="Kebbi" <?php echo $state_origin == "Kebbi" ? "selected" : ''; ?>>Kebbi</option>
                                            <option value="Kogi" <?php echo $state_origin == "Kogi" ? "selected" : ''; ?>>Kogi</option>
                                            <option value="Kwara" <?php echo $state_origin == "Kwara" ? "selected" : ''; ?>>Kwara</option>
                                            <option value="Lagos" <?php echo $state_origin == "Lagos" ? "selected" : ''; ?>>Lagos</option>
                                            <option value="Nasarawa" <?php echo $state_origin == "Nasarawa" ? "selected" : ''; ?>>Nasarawa</option>
                                            <option value="Niger" <?php echo $state_origin == "Niger" ? "selected" : ''; ?>>Niger</option>
                                            <option value="Ogun" <?php echo $state_origin == "Ogun" ? "selected" : ''; ?>>Ogun</option>
                                            <option value="Ondo" <?php echo $state_origin == "Ondo" ? "selected" : ''; ?>>Ondo</option>
                                            <option value="Osun" <?php echo $state_origin == "Osun" ? "selected" : ''; ?>>Osun</option>
                                            <option value="Oyo" <?php echo $state_origin == "Oyo" ? "selected" : ''; ?>>Oyo</option>
                                            <option value="Plateau" <?php echo $state_origin == "Plateau" ? "selected" : ''; ?>>Plateau</option>
                                            <option value="Rivers" <?php echo $state_origin == "Rivers" ? "selected" : ''; ?>>Rivers</option>
                                            <option value="Sokoto" <?php echo $state_origin == "Sokoto" ? "selected" : ''; ?>>Sokoto</option>
                                            <option value="Taraba" <?php echo $state_origin == "Taraba" ? "selected" : ''; ?>>Taraba</option>
                                            <option value="Yobe" <?php echo $state_origin == "Yobe" ? "selected" : ''; ?>>Yobe</option>
                                            <option value="Zamfara" <?php echo $state_origin == "Zamafara" ? "selected" : ''; ?>>Zamafara</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="lga" class="control-label col-form-label">LGA of Origin</label>
                                        <select name="lga" id="lga" class="form-control show-tick ms select2 select-lga" required>
                                            <option value="<?php echo $lga_origin ; ?>" selected="selected"><?php echo $lga_origin ; ?></option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="house" class="control-label col-form-label">Sport House </label>
                                        <select class="custom-select form-control select2" id="house" name="house_id" style="width: 100%">
                                            <option value="<?php echo $sport_house?>" selected><?php echo $sporthouse?></option>
                                        <?php $class->get_sporthouse_select() ?>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="religion" class="control-label col-form-label">Religion <span class="text-danger">*</span></label>
                                        <select class="custom-select form-control select2" id="religion" name="relig_id" required style="width: 100%">
                                            <option value=""></option>
                                            <option value="Christianity"<?php echo $student_religion == "Christianity" ? "selected" : ''; ?>>Christianity</option>
                                            <option value="Islam"<?php echo $student_religion == "Islam" ? "selected" : ''; ?>>Islam</option>
                                            <option value="Others"<?php echo $student_religion == "Others" ? "selected" : ''; ?>>Others</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="res" class="control-label col-form-label">Blood Group<span class="text-danger">*</span></label>
                                        <select class="custom-select form-control select2" id="res" name="blood_group" style="width: 100%">
                                            <option></option>
                                            <option <?php echo $student_blood == "A+" ? "selected" : ''; ?>>A+</option>
                                            <option <?php echo $student_blood == "A-" ? "selected" : ''; ?>>A-</option>
                                            <option <?php echo $student_blood == "B+" ? "selected" : ''; ?>>B+</option>
                                            <option <?php echo $student_blood == "B-" ? "selected" : ''; ?>>B-</option>
                                            <option <?php echo $student_blood == "O+" ? "selected" : ''; ?>>O+</option>
                                            <option <?php echo $student_blood == "O-" ? "selected" : ''; ?>>O-</option>
                                            <option <?php echo $student_blood == "AB+" ? "selected" : ''; ?>>AB+</option>
                                            <option <?php echo $student_blood == "AB-" ? "selected" : ''; ?>>AB-</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <label for="geno" class="control-label col-form-label">Genotype</label>
                                        <select class="custom-select form-control select2" id="geno" name="geno_id" style="width: 100%">
                                            <option value=""></option>

                                            <option></option>
                                                <option <?php echo $student_gene == "AA" ? "selected" : ''; ?>>AA</option>
                                                <option <?php echo $student_gene == "AS" ? "selected" : ''; ?>>AS</option>
                                                <option <?php echo $student_gene == "SS" ? "selected" : ''; ?>>SS</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <!-- <label for="addr" class="control-label col-form-label">House Address</label> -->
                                        <input type="hidden" class="form-control" id="addr" name="student_id" value="<?php echo $student_id ?>">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="addr" class="control-label col-form-label">House Address</label>
                                        <input type="text" class="form-control" id="addr" name="address" value="<?php echo $student_home ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone" class="control-label col-form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $student_number ?>" maxlength="11">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="email" class="control-label col-form-label">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $student_email ?>">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="prev_sch" class="control-label col-form-label">Previous School
                                            Attended <small> (If any)</small></label>
                                        <input type="text" class="form-control" id="prev_sch" name="prev_sch_attended" value="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="prev_sch_date" class="control-label col-form-label">Previous
                                            School Attended (Date)</label>
                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="prev_sch_date" name="prev_sch_attended_date" value="">
                                    </div>

                                    <div class="form-group col-md-12 text-center">
                                        <button type="submit" name="update" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save
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


        <!-- ======   This Page SCRIPTS   =========== -->
        <script src="../assets/plugins/moment/moment.js"></script>
        <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

        <script>
            $(function() {
                $('.date').bootstrapMaterialDatePicker({
                    format: 'YYYY-MM-DD',
                    maxDate: new Date(2091, 0, 1),
                    minDate: new Date(1996, 0, 1),
                    time: false
                });

                $('.lga').not('.my_lga').hide();
                $('#state').change(function() {
                    var id = $(this).val();

                    $('.lga').hide().attr('disabled', 'disabled');
                    $('#lga').val('');
                    $('#lga option:selected').text('');
                    $('option[data-state-id=' + id + ']').show().removeAttr('disabled');
                });

                $('.to-validate').change(function() {
                    var a = $(this);
                    var field = a.attr('id');
                    var val = a.val();
                    var id = a.parents('.record').data('id');
                    var url = 'user-account/validate-user-field';

                    $.post(url, {
                        field: field,
                        value: val,
                        user_type: "student",
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

                $('#student-profile').submit(function(e) {
                    e.preventDefault();

                    var has_error = $('.form-control-danger');
                    if (has_error.length > 0) {
                        has_error.focus();
                    } else {
                        var xhr = submit_form('#student-profile');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                $('#student-profile-div').load('student/student-profile/2d9c209f2858b1f67857 #student-profile-side');
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