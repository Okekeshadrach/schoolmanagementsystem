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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">
                            Manage Departments
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Subject</a></li>
                            <li class="breadcrumb-item active">Department</li>
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
                                <div>
                                    <a href="#createGradeModal" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5 pull-right" data-toggle="modal" data-target="#createGradeModal">New Department</a>
                                </div>
                                <p class="clear">See list of existing Departments below.</p>
                                <div class="table-responsive" id="resp-div">
                                    <table class="table table-striped table-bordered color-table success-table stylish-table" id="resp-table" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Name of Department</th>
                                                <th>Head of Department</th>
                                                <th>Date Created</th>
                                                <th></th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $class->get_department() ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="modal fade" id="createGradeModal" tabindex="1" role="dialog" aria-labelledby="myModal" style="display: none">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModal">Create New Sport dept</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="dept-new-process.php" id="add_department" method="post" accept-charset="utf-8">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <label for="dept_name">Name of Department</label>
                                                            <input type="text" name="dept_name" class="form-control" value="" id="dept_name" maxlength="45" required>
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <small>After creating this department, ensure to go the
                                                                profile of the appropriate staff and make him/her the
                                                                H.O.D of this department.</small>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="dept" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(function() {

                        //===== Run when user attempts to delete a dept ==============
                        $(document).on('click', '.dept-del', function(e) {
                            e.preventDefault();
                            var a = $(this);
                            var url = a.attr('href');
                            swal({
                                title: "Are you sure?",
                                text: "Your action will delete the selected Department! \n NOTE: ALL STAFF AND SUBJECTS WILL BE REMOVED FROM THE DEPARTMENT!!\n Do you really want to do this ??",
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

                                            //If all table rows are removed, append this...
                                            if ($('td').length < 1) {
                                                $("tbody").append('<tr><td colspan="5"><i>No Department is available. Click on "New Sport House" to create.</i></td></tr>');
                                            }
                                        });
                                    }
                                });
                            });
                        });
                        //====================================================================

                        //====== Run when modal form is submitted ========
                        $('#dept-new').submit(function(e) {
                            e.preventDefault();
                            var xhr = submit_form2('#dept-new');
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    $('#resp-div').load(site_url + 'subject/departments #resp-table');
                                }
                            });
                        });
                        //================================================
                    });
                </script>
            </div><!-- ============================================================== -->
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
    <?php include('../layout/script.php') ?>
</body>

</html>