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
                            All Staff
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li>
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
                                <p>
                                    <a href="create.php" class="btn btn-primary btn-rounded waves-effect waves-light m-t-5"><i class="fa fa-user-plus"></i> New staff account</a>
                                    <a href="../staff/nominal-roll.php" target="_blank" class="btn btn-info btn-rounded waves-effect waves-light m-t-5"><i class="fa fa-print"></i> Print Staff Nominal roll</a>
                                    <a href="../staff/bulk-bio-update/1" class="btn btn-success btn-rounded waves-effect waves-light m-t-5"><i class="fa fa-th-list"></i> Staff Bulk Bio update</a>
                                </p>

                                <div class="table-responsive" id="resp-div">
                                    <table class="table table-striped table-bordered" width="100%" id="resp-tbl">
                                        <thead>
                                            <tr role="row">
                                                <th>S/N</th>
                                                <th></th>
                                                <th>Staff Name</th>
                                                <th>Username</th>
                                                <th>Email Address</th>
                                                <th>Phone</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php $class->get_staff() ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(function() {
                        if ($('tr').length > 10) {
                            $('.table').DataTable({
                                "iDisplayLength": 50
                            });
                        }
                    });


                    $(document).on('click', '.user-delete', function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will delete this User\'s Account COMPLETELY! \n Are you sure you really want to do this??",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            var xhr = get_request(url);
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    a.parent().parent().fadeOut(2000, function() {
                                        $('#resp-div').load('staff/manage #resp-tbl', function() {
                                            if ($('tr').length > 20) {
                                                $('.table').DataTable({
                                                    "iDisplayLength": 50
                                                });
                                            }
                                        });
                                    });
                                }
                            });
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