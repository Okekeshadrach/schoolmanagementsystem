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
                        <h3 class="text-themecolor m-b-0 m-t-0">Student Subjects</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                            <li class="breadcrumb-item active">Subjects</li>
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
                            <!-- <form action="https://krystalng.com/fggconitsha/student/student-subject-deregister/ab45710242992476bc35" id="form-deregister" method="post" accept-charset="utf-8"> -->
                                <p class="info p-t-20"> See below, Subjects offered by <b><?php echo $first_name ?></b> in <?php echo $class->global_schoolyear_select()?> (<a href="../classes/manage-student.php?class_id=<?php echo $class_id ?>"><?php echo $classname?></a>)</p>

                                <p><a href="../student/score-update-form.php?student_id=<?php echo $student_id?>">Click here</a> to view scores entered for these subjects</p>

                                <!-- <div class="form-group">
                                    <input type="hidden" name="class_arm_id" value="cbd9b04b18ddd97730">
                                    <input type="hidden" name="session_id" value="45f3f183131f29ed26">
                                    <input type="hidden" name="session_name" value="First Term 2020/2021">
                                    <input type="hidden" name="class_arm_name" value="JSS 2K">

                                    <button type="submit" id="btn-deregister" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10" disabled>Deregister Selected Subject(s)</button> <span class="processor"></span>
                                </div> -->

                                <div class="table-responsive" id="resp-div">
                                    <table class="table-bordered table-hover table stylish-table table-striped color-table success-table" width="100%" id="resp-table">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Subject</th>
                                                <th>Short Name</th>
                                                <th>
                                                    <div class="switch">
                                                        <label>
                                                            <input type="checkbox" onclick="check_all(this)">
                                                            <span class="lever switch-col-amber"></span>
                                                        </label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="sn">1</td>
                                                <td>Skills Development Class (general)</td>
                                                <td>S DC</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox" value="331c063118572586d" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <!-- </form>  -->
                            <br>
                            <hr>


                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
        </div>

        <script>
            $(document).on('click', 'input[type=checkbox]', function() {
                count_checked_rows = $('input:checkbox:checked.chk').length;
                if (count_checked_rows > 0) {
                    $('#btn-deregister').removeAttr('disabled');
                } else {
                    $('#btn-deregister').attr('disabled', 'disabled');
                }
            });

            $('#form-deregister').submit(function(e) {
                e.preventDefault();

                swal({
                    title: "Are you sure?",
                    text: "Your action will deregister the Grace from the selected subjects. \nDo you really want to do this ??",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#13aa2c",
                    confirmButtonText: "Yes, proceed!"
                }, function() {
                    var xhr = submit_form2('#form-deregister');
                    xhr.done(function(result) {
                        if (result.type === 'success') {
                            $('input:checkbox:checked.chk').parent().parent().parent().parent().fadeOut(2000, function() {
                                $(this).remove();
                                //Reorder table numbering after removing some row
                                $('.sn').each(function(i) {
                                    $(this).text(i + 1);
                                });
                                $('#btn-deregister').attr('disabled', 'disabled');
                            });
                        }
                    });
                });
            });


            $('#form-register').submit(function(e) {
                e.preventDefault();
                var xhr = submit_form2('#form-register');
                xhr.done(function(result) {
                    if (result.type === 'success') {
                        //Automatically update page content. User doesn't need to refresh
                        $('#resp-div').load(site_url + 'student/student-subjects/45f3f183131f29ed26/cbd9b04b18ddd97730/ab45710242992476bc35 #resp-table', function() {

                            //Initialize responsive table
                            $(document).trigger("enhance.tablesaw");
                        });

                        $('#subject_ids option:selected').remove();
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
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include('../layout/script.php') ?>
</body>

</html>