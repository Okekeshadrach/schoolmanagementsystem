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
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
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
                        <h3 class="text-themecolor m-b-0 m-t-0">
                            Update Student Score : JSS 2K </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                            <li class="breadcrumb-item active">Class Trail</li>
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
                    <?php include('../student/side.html')?>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                            <?php include('../student/student_nav.html') ?>
                                <p class="text-primary m-b-20">See below, <b><?php echo $first_name ?>'s</b> score record (<a href="../classes/manage-student.php?class_id=<?php echo $class_id ?>"><?php echo $classname;?></a> : <?php echo $class->global_schoolyear_select()?>)</p>

                                <p><a href="../student/student-subjects.php?student_id=<?php echo $student_id?>">Click here</a> to register/deregister a subject</p>

                                <form action="../score/save-scores-single-student.php" id="save-score" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save Scores</button> <span class="processor"></span>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group m-t-15">
                                                <input type="checkbox" id="auto-save" name="jj" class="chk-col-deep-purple m-t-10" />
                                                <label for="auto-save">Save Automatically</label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <div id="stud_list">
                                            <table class="tablesaw table-bordered table-hover table stylish-table table-striped color-table success-table" data-tablesaw-mode="stack" width="100%">
                                                <thead>
                                                    <tr role="row">
                                                        <th>#</th>
                                                        <th>Subject Name</th>
                                                        <th>Short Name</th>
                                                        <th>CA1 (50%)</th>
                                                        <th>Exam (50%)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>1</td>
                                                        <td>Skills Development Class (general)</td>
                                                        <td>S DC</td>

                                                        <td> <input name="score[1][]" min="0" max="50" type="number" class="form-control score-input" value="45" />
                                                        </td>

                                                        <td> <input name="score[1][]" min="0" max="50" type="number" class="form-control score-input" value="40" />
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                            <input type="hidden" name="class_arm_id" value="73986e3618c74071b2">
                                            <input type="hidden" name="session_id" value="92be77e71382493ac3">
                                            <input type="hidden" name="session_name" value="First Term 2020/2021">
                                            <input type="hidden" name="class_arm_name" value="JSS 2K">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save Scores</button> <span class="processor"></span>
                                                    </div>
                                                </div>
                                            </div>

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
                    $('#save-score').submit(function(e) {
                        e.preventDefault();
                        submit_form('#save-score');
                    });

                    $('#auto-save').click(function() {
                        if ($(this).is(':checked')) {
                            auto_submit_form('#save-score');
                        }
                    })
                });
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
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include('../layout/script.php') ?>
</body>

</html>