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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Past Records</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Past records</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13">Manage past records of a specific class in a particular
                                term/session</p>
                            <form id="myform">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="session_id">Select Term/Session</label>
                                        <select class="custom-select form-control select2" id="session_id" name="session_id" style="width: 100%" required>
                                            <option value=""></option>

                                            <?php $class->get_schoolyear_select()?>

                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="class_arm_id">Select Class Arm</label>
                                        <select class="custom-select form-control select2" id="class_arm_id" name="class_arm_id" style="width: 100%" required>
                                            <option value=""></option>
                                            <?php $class->get_classarm_select()?>
                                        </select>
                                    </div>

                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">
                                            Proceed
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myform').submit(function(e) {
                    e.preventDefault();
                    var session_id = $('select[name=session_id]').val(),
                        class_arm_id = $('select[name=class_arm_id]').val();

                    window.open(
                        site_url + 'classes/manage-students/' + session_id + '/' + class_arm_id, '_blank'
                    );
                });
            </script><!-- ============================================================== -->
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
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include('../layout/script.php') ?>
</body>

</html>