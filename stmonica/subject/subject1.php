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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">
                            Manage Subjects
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Subject</a></li>
                            <li class="breadcrumb-item active">Manage</li>
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
                                    <a href="#createGradeModal" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5 pull-right" data-toggle="modal" data-target="#createGradeModal">New Subject</a>
                                </div>
                                <p class="clear">See list of existing subjects below.</p>
                                <div class="table-responsive" id="resp-div">
                                    <table class="table stylish-table table-striped table-bordered" id="resp-tbl" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Subject Name</th>
                                                <th>Short Name</th>
                                                <th>Subject Department</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $class->get_subject();?>
                                            

                                        </tbody>
                                    </table>
                                </div>

                                <div class="modal fade" id="createGradeModal" tabindex="1" role="dialog" aria-labelledby="myModal" style="display: none">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModal">Create New Subject</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="new-process.php" id="new_subj" method="post" accept-charset="utf-8">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <label for="name">Subject Name</label>
                                                            <input type="text" name="name" class="form-control" id="name" placeholder="e.g. Mathematics" required>
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <label for="short_name">Subject Short Name</label>
                                                            <input type="text" name="short_name" class="form-control" id="short_name" placeholder="e.g. MATHS" maxlength="5" required>
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <label for="dept_id">Subject Department</label>
                                                            <select class="custom-select form-control select2" id="dept_id" name="dept_id" style="width: 100%" required>
                                                                <option value="">-- select --</option>
                                                                <?php $class->get_department_select()?>

                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="subject" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit</button>
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
                        $('.table').DataTable({
                            "iDisplayLength": 50
                        });

                        //===== Run when user attempts to delete a subject ==============
                        $(document).on('click', '.subject-del', function(e) {
                            e.preventDefault();
                            var a = $(this);
                            var url = a.attr('href');
                            swal({
                                title: "Are you sure?",
                                text: "Your action will delete this Subject. Do you want to continue?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#13aa2c",
                                confirmButtonText: "Yes, proceed!"
                            }, function() {
                                var xhr = get_request(url);
                                xhr.done(function(result) {
                                    if (result.type === 'success') {
                                        $('#resp-div').load(site_url + 'subject #resp-tbl', function() {
                                            if ($('tr').length > 20) {
                                                $('.table').DataTable({
                                                    "iDisplayLength": 50
                                                });
                                            }
                                        });
                                    }
                                });
                            });
                        });
                        //====================================================================

                        //====== Run when modal form is submitted ========
                        $('#subj-new').submit(function(e) {
                            e.preventDefault();
                            var xhr = submit_form2('#subj-new');
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    $('#resp-div').load(site_url + 'subject #resp-tbl', function() {
                                        $('.table').DataTable({
                                            "iDisplayLength": 50
                                        });
                                    });
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
    <?php include('../layout/script.php') ?>
</body>

</html>