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
                        <h3 class="text-themecolor m-b-0 m-t-0">Assign Staff to Subject</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li>
                            <li class="breadcrumb-item active">Assign to subject</li>
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
                     <!-- Column -->
                     <?php include('../layout/profile_sidebar.php') ?>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">

                            <?php include('../layout/profile_nav.php') ?>
                                <p>You want to make Mr Obinozie Nnamdi a subject teacher?</p>

                                <small class="text-warning">Note: Mr Obinozie Nnamdi can only be a subject teacher for
                                    subjects in the same department as his</small>
                                <hr>
                                <form action="staff/assign-subject-process/5047f2e72c815caa6" class="form-horizontal" id="staff-assign" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <div class="form-group row">
                                        <label for="subj" class="col-sm-3 text-right control-label col-form-label">Select
                                            Subject*</label>
                                        <div class="col-sm-9">
                                            <select class="select2 m-b-10" name="subj_id" style="width: 100%" id="subj" required>
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row" id="mini-subj-div" style="display: none">
                                        <div class="offset-sm-3 col-sm-9">
                                            <small class="text-success" id="hint"></small>
                                        </div>
                                        <label for="mini-subject" class="col-sm-3 text-right control-label col-form-label">Select Sub
                                            Subject</label>
                                        <div class="col-sm-9">
                                            <select class="m-b-10 form-control" name="sub_subj_id" id="mini-subject">
                                                <option></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="class_arm_id" class="col-sm-3 text-right control-label col-form-label">Select Class
                                            Arm*</label>
                                        <div class="col-sm-9">
                                            <select class="select2 select2-multiple" multiple="multiple" id="class_arm_id" name="class_arm_id[]" style="width: 100%" required>
                                                <option value=""></option>
                                                <?php $class->get_classarm_select() ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Assign</button>
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
                    $('#subj').change(function() {
                        var subj_id = $(this).val();
                        var subj_name = $('#subj option:selected').text();
                        var is_combo_subject = $('.mini-subj-' + subj_id);

                        $('.mini-subj').hide();
                        $('#mini-subject').val('');

                        if (is_combo_subject.length > 0) {
                            $('#mini-subj-div').show('slow');
                            is_combo_subject.show();
                            $('#hint').html(subj_name + ' seems to be a combination subject. If you want to assign this staff to one of the sub subjects under ' + subj_name + ', then select it below, else ignore this field.');
                        } else {
                            $('#mini-subj-div').hide('slow');
                        }
                    });


                    $('#staff-assign').submit(function(e) {
                        e.preventDefault();
                        var xhr = submit_form('#staff-assign');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                //Automatically update page content. User doesn't need to refresh
                                $('#staff-profile-div').load(site_url + 'staff/staff-profile/5047f2e72c815caa6 #staff-profile-side');
                            }
                        });
                    });
                });
            </script>
            <!-- ========================================== -->
            <!-- ============================================================== -->
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