<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php include('../classes/get_class.php') ?>

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
            <style>
                .score-input {
                    width: 5em;
                }
            </style>
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">
                            Score Update: Skills Development Class (general) - JSS 2A </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Score</a></li>
                            <li class="breadcrumb-item active">score update form</li>
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

                                <small class="pull-right">
                                    <i>
                                        Class Teacher :
                                        <a href="https://krystalng.com/fggconitsha/staff/staff-profile/b02dbc1027a1814a9">
                                            <img src="https://krystalng.com/fggconitsha/uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Obinozie Nnamdi Francis </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>

                                <form action="https://krystalng.com/fggconitsha/score/save-scores" id="save-score" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save Scores</button> <span class="processor"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="#csvModal" class="btn btn-info btn-rounded waves-effect waves-light m-t-10" data-toggle="modal" data-target="#csvModal">Upload from CSV file</a>
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
                                                        <th></th>
                                                        <th>Student Name</th>
                                                        <th>Username</th>
                                                        <th>CA1 (50%)</th>
                                                        <th>Exam (50%)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php $class->get_score_entry($class_id)?>

                                                </tbody>
                                            </table>

                                            <input type="hidden" name="class_arm_id" value="922bd4b610b2cdc04a">
                                            <input type="hidden" name="session_id" value="457b171a13efcd2208">
                                            <input type="hidden" name="subject_id" value="328988551aff51fe2">
                                            <input type="hidden" name="session_name" value="First Term 2020/2021">
                                            <input type="hidden" name="class_arm_name" value="JSS 2A">
                                            <input type="hidden" name="subject_name" value="Skills Development Class (general)">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save Scores</button> <span class="processor"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="#csvModal" class="btn btn-info btn-rounded waves-effect waves-light m-t-10" data-toggle="modal" data-target="#csvModal">Upload from CSV file</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10" id="btn-erase-score"><i class="fa fa-eraser"></i> Erase all scores</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <small class="text-success pull-right"><i>Last Updated by: You on Aug 27, 2021 at 11:18 AM</i></small>

                                <!-- =================== START: CSV UPLOAD MODAL FORM ==================== -->
                                <div class="modal fade" id="csvModal" tabindex="1" role="dialog" aria-labelledby="myModal" style="display: none">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModal">Upload Scores from CSV File</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="https://krystalng.com/fggconitsha/score/csv-upload" id="upload-csv" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">Select Your File:</label>
                                                        <input type="file" class="form-control" name="csv_file">
                                                    </div>
                                                    <input type="hidden" name="class_arm_id" value="922bd4b610b2cdc04a">
                                                    <input type="hidden" name="session_id" value="457b171a13efcd2208">
                                                    <input type="hidden" name="subject_id" value="328988551aff51fe2">
                                                    <input type="hidden" name="session_name" value="First Term 2020/2021">
                                                    <input type="hidden" name="class_arm_name" value="JSS 2A">
                                                    <input type="hidden" name="subject_name" value="Skills Development Class (general)">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10" data-dismiss="modal">Close</button>
                                                    <button type="submit" id="csv-form-btn" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Proceed</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- =================== END: CSV UPLOAD MODAL FORM ==================== -->

                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(function() {
                        $('#save-score').submit(function(e) {
                            e.preventDefault();
                            submit_form('#save-score');
                        });

                        $('#upload-csv').submit(function(e) {
                            $('.preloader').show();
                        });

                        $('#btn-erase-score').click(function() {
                            swal({
                                title: "Erase all scores?",
                                text: "All scores will be wiped \nYou will have to click on 'Save' for this to take effect!",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#13aa2c",
                                confirmButtonText: "Yes, Erase!"
                            }, function() {
                                $('input.form-control').val('')
                            });
                        });


                        // ==============================================================================
                        $('.score-input').change(function() {
                            auto_save_scores();
                        });

                        function auto_save_scores() {
                            if ($('#auto-save').is(':checked')) {
                                // Turn off event listener
                                $('.score-input').off('change');

                                var xhr = auto_submit_form('#save-score');
                                xhr.always(function() {
                                    // Turn event listener back on
                                    $('.score-input').change(function() {
                                        auto_save_scores();
                                    });
                                });
                            }
                        }
                        // ==============================================================================
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
        <?php include("../layout/script.php") ?>
        <!-- ============================================================== -->
</body>

</html>