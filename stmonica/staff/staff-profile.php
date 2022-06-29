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
                                <form action="../staff/staff-profile-process.php" class="form-horizontal" id="staff-profie-form" method="post" accept-charset="utf-8">

                                    <div class="row record" data-id="aed92d1e519766163">
                                        <div class="form-group col-sm-6">
                                            <label for="title" class="control-label col-form-label">Title <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="title" name="title" value="<?php echo $staff_title; ?>" required maxlength="10">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="surname" class="control-label col-form-label">Surname <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $staff_first_name; ?>" required maxlength="45">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="first_name" class="control-label col-form-label">First Name
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $staff_last_name; ?>" required maxlength="45">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="sec_name" class="control-label col-form-label">Other
                                                Name</label>
                                            <input type="text" class="form-control" id="sec_name" name="sec_name" value="<?php echo $staff_othername; ?>" maxlength="45">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="dob" class="control-label col-form-label">Date of Birth <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="dob" value="<?php echo $dob ?>">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="control-label col-form-label">Gender <span class="text-danger">*</span></label><br>
                                            <input name="gender" type="radio" id="radio_1" class="with-gap radio-col-deep-purple" <?php echo $staff_gender == "Male" ? "checked" : ''; ?> value="Male" />
                                            <label class="form-control-label" for="radio_1">Male</label>
                                            <input name="gender" type="radio" id="radio_2" class="with-gap radio-col-deep-purple" <?php echo $staff_gender == "Female" ? "checked" : ''; ?>value="Female" />
                                            <label class="form-control-label" for="radio_2">Female</label>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="phone" class="control-label col-form-label">Phone Number <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control to-validate" id="phone" name="phone" value="<?php echo $staff_number ?>">
                                            <small class="form-control-feedback"></small>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="email" class="control-label col-form-label">Email Address <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control to-validate" id="email" name="email" value="<?php echo $staff_email ?>">
                                            <small class="form-control-feedback"></small>
                                        </div>
                                        <div class="form-group col-sm-6">
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
                                                <option value="<?php echo $lga_origin; ?>" selected="selected"><?php echo $lga_origin; ?></option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label for="address" class="control-label col-form-label">House Address
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="address" name="address" value="<?php echo $staff_home ?>">
                                        </div>

                                        <div class="col-sm-12">
                                            <hr>
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="academic_qualification" class="control-label col-form-label">Academic Qualification</label>
                                            <input type="text" class="form-control" id="academic_qualification" name="academic_qualification" value="<?php echo $staff_qualification ?>" maxlength="45">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="first_appt_date" class="control-label col-form-label">Date of
                                                appointment</label>
                                            <input type="text" class="form-control date" placeholder="YYYY-MM-DD" name="first_appt_date" value="<?php echo $staff_appoint ?>">
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <input type="hidden" class="form-control date" id="" name="staffid" value="<?php echo $staff_id ?>">
                                        </div>
                                        <div class="form-group col-sm-12 text-center">
                                            <button type="submit" name="update" data-toggle="tooltip" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save
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
                        maxDate: new Date(),
                        minDate: new Date(1940, 0, 1),
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
                            user_type: "staff",
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

                    $('#staff-profile-form').submit(function(e) {
                        e.preventDefault();

                        var has_error = $('.form-control-danger');
                        if (has_error.length > 0) {
                            has_error.focus();
                        } else {
                            var xhr = submit_form('#staff-profile-form');
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    $('#staff-profile-div').load('staff/staff-profile/938b5bea2fdb4e2b0 #staff-profile-side');
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
    <?php include('../layout/script.php') ?>
    <!-- ============================================================== -->
</body>

</html>