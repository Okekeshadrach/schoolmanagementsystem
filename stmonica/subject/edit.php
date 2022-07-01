<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php include('../subject/get-edit-subj.php') ?>
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
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Edit Subject</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Subject</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <div class="card card-body">
                            <form action="../subject/edit-process.php" id="subjedit" method="post" accept-charset="utf-8">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label for="name">Subject Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="e.g. Mathematics" value="<?php echo $subject_name?>" required>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label for="short_name">Subject Short Name</label>
                                            <input type="text" name="short_name" value="<?php echo $subject_code?>" class="form-control" id="short_name" placeholder="e.g. MATHS" maxlength="5" required>
                                            <input type="hidden" name="subj_id" value="<?php echo $subject_id?>" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label for="dept_id">Subject Department</label>
                                            <select class="custom-select form-control select2" id="dept_id" name="dept_id" style="width: 100%" required>
                                                <option value=""></option>

                                                <option value="<?php echo $department_id?>" selected>
                                                <?php echo $department_name?> </option>
                                                <?php $class->get_department_select()?>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="../subject/subject1.php" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10">Close</a>
                                    <button type="submit" name="subjid" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save changes
                                    </button>
                                </div>
                                <p class="processor pull-right"></p>
                                <small class="text-success pull-right"><i>Created by: You on May 19, 2022 at 01:27 PM</i></small>
                                <small class="text-success pull-right last-updated"><i></i></small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#subj-edit').submit(function(e) {
                    e.preventDefault();
                    var jqxhr = submit_form('#subj-edit');
                    jqxhr.done(function(result) {
                        if (result.type === 'success') {
                            $('.last-updated').hide();
                        }
                    })
                });
            </script><!-- ============================================================== -->
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
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/js/sidebarmenu.js"></script>

    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <!--Custom JavaScript -->
    <script src="../assets/js/custom.min.js"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->


    <script src="../assets/js/bootstrap-notify.js"></script>

    <script src="../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- jQuery peity -->
    <script src="../assets/plugins/tablesaw-master/dist/tablesaw.js"></script>
    <script src="../assets/plugins/tablesaw-master/dist/tablesaw-init.js"></script>


    <script>
        $('ul.collapse').each(function(i) {
            if ($(this).children().length < 1) {
                $(this).parent().remove();
            }
        });


        $(".select2").select2();


        $('.ajax-link').contextmenu(function() {
            return false;
        });

        function load_notification() {
            $('#n-center').load(site_url + 'other/notification ul', function() {
                if ($('.message-center').length > 0) {
                    $('.notify').html('<span class="heartbit"></span><span class="point"></span>');
                } else {
                    $('.notify').html('');
                }
                //setTimeout(load_notification, 120000);
            });
        }
        load_notification();
    </script>
    <!-- ============================================================== -->
</body>

</html>