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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">School Grades</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Configuration</a></li>
                            <li class="breadcrumb-item active">School Grades</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <div class="offset-md-9 col-md-3">
                                <a href="#createGradeModal" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target="#createGradeModal">Create a new Grade</a>
                            </div>
                            <p>See Below, existing grades in the system</p>
                            <div class="table-responsive" id="resp-div">
                                <table class="table table-striped table-bordered color-table success-table stylish-table" id="resp-table" width="100%">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Grade Name</th>
                                            <th>Grade Remark</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $class->get_grade(); ?>
                                    </tbody>
                                </table>
                            </div>
                            <div>
                                <a href="#createGradeModal" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target="#createGradeModal">Create a new Grade</a>
                            </div>


                            <div class="modal fade" id="createGradeModal" tabindex="1" role="dialog" aria-labelledby="myModal" style="display: none">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModal">Create a New Grade</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="../school-config/grade-new-process.php" id="gradenew" method="post" accept-charset="utf-8">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="grade" class="control-label">Grade Name:</label>
                                                        <input type="text" class="form-control" name="name" id="grade" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="remark" class="control-label">Grade Remark:</label>
                                                        <input type="text" class="form-control" name="remark" id="remark" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10" data-dismiss="modal">Close</button>
                                                <button type="submit" name="grade" id="csv-form-btn" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    //===== Run when user attempts to delete a grade ==============
                    $(document).on('click', '.grade-del', function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will delete this Grade. Do you want to continue?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            var xhr = get_request(url);
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    a.parent().parent().fadeOut(2000, function() {
                                        $(this).remove();
                                        $('.sn').each(function(i) {
                                            $(this).text(i + 1);
                                        });
                                    });
                                }
                            });
                        });
                    });
                    //====================================================================

                    //====== Run when modal form is submitted ========
                    $('#grade-new').submit(function(e) {
                        e.preventDefault();
                        var xhr = submit_form2('#grade-new');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                $('#resp-div').load(site_url + 'school-config/school-grades #resp-table');
                            }
                        });
                    });
                    //================================================
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