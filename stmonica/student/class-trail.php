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
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Student Class Trail</h3>
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
                <?php include('../student/side.html') ?>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <?php include('../student/student_nav.html') ?>
                                <p>Here, you can manage all of <b><?php echo $first_name?>'s</b> records</p>
                                <div id="resp-div">
                                    <table class="tablesaw table-bordered table-hover table stylish-table table-striped color-table success-table" data-tablesaw-mode="stack" id="resp-table" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th></th>
                                                <th>Term/ Session</th>
                                                <th>Class</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-success btn-rounded btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Action
                                                        </button>
                                                        <div class="dropdown-menu animated slideInUp">
                                                            <a class="dropdown-item" target="_blank" href="../score/report-card.php?student_id=<?php echo $student_id;?>">View Term Result
                                                            </a>

                                                            <a class="dropdown-item" target="_blank" href="../score/cumulative-report-card.php?student_id=<?php echo $student_id;?>">Session Cum Result</a>

                                                            <a class="dropdown-item" href="../student/student-subjects.php?student_id=<?php echo $student_id;?>" target="_blank" title="See subjects offered by this student. You can also Register/Deregister any subject" data-toggle="tooltip">Subjects Offered</a>

                                                            <a class="dropdown-item" href="../student/score-update-form.php?student_id=<?php echo $student_id;?>" target="_blank" title="Input/Update this student's score" data-toggle="tooltip">Enter/Edit Score</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>Third Term 2018/2019</td>
                                                <td>
                                                    <a class="dropdown-item" target="_blank" href="../classes/manage-students.php"><?php echo $classname ?></a>
                                                </td>
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>

                                <br>
                                <hr>
                                <br>


                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>

            <script>
                $('#show-additional-record').click(function() {
                    $('#additional-record-hint').fadeOut();
                    $('.additional-record').show('slow');
                });

                $('#form-register').submit(function(e) {
                    e.preventDefault();
                    var xhr = submit_form('#form-register');
                    xhr.done(function(result) {
                        if (result.type === 'success') {
                            //Automatically update page content. User doesn't need to refresh

                            $('#resp-div').load(site_url + 'student/class-trail/d2bf11bc241594e2ee4c #resp-table', function() {
                                //Initialize responsive table
                                $(document).trigger("enhance.tablesaw");
                            });

                            $('#session_id option:selected').remove();
                            $('select').val('');
                            //Re-Initialize custom select
                            $(".select2").select2();
                        }
                    });
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
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include('../layout/script.php') ?>
    <!-- ============================================================== -->
</body>

</html>