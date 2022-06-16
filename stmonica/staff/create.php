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
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- =======================  This page styles =================== ---->
            <link href="../assets/plugins/wizard/steps.css" rel="stylesheet">
            <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
            <!-- =======================  This page styles =================== ---->


            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Create New Staff Account</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li>
                            <li class="breadcrumb-item active">create</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <p>Enter Details of the staff you want to create an account for</p>
                                <hr>
                                <form action="../staff/create-process.php" id="createstaff" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <section>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="title">Title :</label>
                                                    <input type="text" name="staff[title]" class="form-control" id="title" minlength="2" required>
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="surname">Last Name :</label>
                                                    <input type="text" name="staff[surname]" class="form-control" id="surname" minlength="3" required>
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="first_name">First Name :</label>
                                                    <input type="text" name="staff[first_name]" class="form-control" id="first_name" required>
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="sec_name">Other Name :</label>
                                                    <input type="text" name="staff[sec_name]" class="form-control" id="sec_name" minlength="3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label">Gender :</label>
                                                    <div class="col-md-12" style="padding-left: 0">
                                                        <input name="staff[gender]" type="radio" id="radio_1" class="with-gap radio-col-deep-purple" value="Male" checked />
                                                        <label class="form-control-label" for="radio_1">Male</label>

                                                        <input name="staff[gender]" type="radio" id="radio_2" class="with-gap radio-col-deep-purple" value="Female" />
                                                        <label class="form-control-label" for="radio_2">Female</label>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="dob">Date of Birth</label>
                                                    <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="staff[dob]" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="email">Email Address :</label>
                                                    <input type="email" name="staff[email]" class="form-control to-validate" id="email" minlength="6" required>
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="phone">Phone number :</label>
                                                    <input type="text" name="staff[phone]" class="form-control to-validate" id="phone" minlength="10" required>
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-3">
                                                <label for="state" class="form-control-label col-form-label">State of Origin</label>
                                                <select onchange="toggleLGA(this);" name="staff[state]" id="state" required class="form-control show-tick ms select2">
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

                                            <div class="form-group col-md-3">
                                                <label for="lga" class="form-control-label col-form-label">LGA of Origin</label>
                                                <select name="staff[lga_id]" id="lga" class="form-control show-tick ms select2 select-lga" required>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="address">Home Address :</label>
                                                    <input type="text" name="staff[address]" class="form-control" id="address" minlength="10">
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="type_id">Staff Type :</label>
                                                    <select name="staff[type_id]" class="selectpicker" data-style="form-control btn-secondary" id="type_id" required>
                                                        <option></option>
                                                        <option value="1">Teaching Staff</option>
                                                        <option value="2">Principal</option>
                                                        <option value="3">Bursary Staff</option>
                                                        <option value="4">Chief Bursar</option>
                                                        <option value="5">Other Non Teaching Staff</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="academic_qualification">Academic Qualification :</label>
                                                    <input type="text" name="staff[academic_qualification]" class="form-control" id="academic_qualification">
                                                    <small class="form-control-feedback"></small>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3">
                                                <label for="first_appt_date" class="form-control-label col-form-label">Date of appointment</label>
                                                <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="first_appt_date" name="staff[first_appt_date]">
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="passport">Upload Staff Passport :</label>
                                                    <input type="file" name="staff_passport" class="form-control" id="passport" required>
                                                    <small class="text-info">(JPG, JPEG, or PNG. Max Size: 100KB)</small>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="house_id">Sport House <small>(if any)</small> :</label>
                                                    <select class="select2 m-b-10" name="staff[house_id]" style="width: 100%" id="house_id">
                                                        <option></option>
                                                        <?php $class->get_sporthouse_select() ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6" id="select-staff-department">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="dept">Staff Department(s):</label>
                                                    <select class="select2 select2-multiple" name="staff[dept_id]" style="width: 100%" id="dept">
                                                        <option></option>
                                                        <?php $class->get_department_select() ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                                                <button type="submit" name="done" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Create Staff account</button>
                                                <span class="processor"></span>
                                            </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =======================  START: This page JS scripts =================== ---->


            <script>
                $(function() {
                    $('.date').bootstrapMaterialDatePicker({
                        format: 'YYYY-MM-DD',
                        maxDate: new Date(2099, 0, 1),
                        minDate: new Date(1940, 0, 1),
                        time: false
                    });

                    $('#type_id').change(function() {
                        var type_id = $(this).val();
                        if (type_id === '1') {
                            $('#select-staff-department').show('slow');
                        } else {
                            $('#select-staff-department').hide('slow');
                        }
                    });

                    $('.lga').hide();
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
                        var url = '../user-account/validate-user-field';

                        $.post(url, {
                            field: field,
                            value: val,
                            user_type: "staff"
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


                    $('#create-staff').submit(function(e) {
                        e.preventDefault();

                        var has_error = $('.form-control-danger');
                        if (has_error.length > 0) {
                            has_error.focus();
                        } else {
                            var xhr = submit_form_multipart('#create-staff');
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    // SWEET ALERT
                                    swal({
                                        title: "Staff Account Created",
                                        text: "A notification has been sent to this staff via email! \n Do you want to create another staff account now?",
                                        type: "success",
                                        showCancelButton: true,
                                        confirmButtonColor: "#13aa2c",
                                        cancelButtonText: "No! Not now",
                                        confirmButtonText: "Yes please!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false
                                    }, function(isConfirm) {
                                        if (isConfirm) {
                                            window.location.href = site_url + 'staff/create';
                                        } else {
                                            window.location.href = site_url + 'staff/manage';
                                        }
                                    });
                                }
                            });
                        }

                    });
                })
            </script>
            <!-- =======================  END: This page JS scripts =================== ---->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2022 School Management System (Edu-Portal) by <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL Koncept</a>
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
    <?php include("../layout/script.php") ?>
    <!-- ============================================================== -->
</body>

</html>