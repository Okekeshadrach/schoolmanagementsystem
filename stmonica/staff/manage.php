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
                                    <a href="staff/nominal-roll.html" target="_blank" class="btn btn-info btn-rounded waves-effect waves-light m-t-5"><i class="fa fa-print"></i> Print Staff Nominal roll</a>
                                    <a href="staff/bulk-bio-update/1" class="btn btn-success btn-rounded waves-effect waves-light m-t-5"><i class="fa fa-th-list"></i> Staff Bulk Bio update</a>
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


                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/fd9dcc2e1324d22fb" class="text-info" target="_blank">Mr Fawole John Oluwaseyi</a>
                                                </td>
                                                <td>fawole.j</td>
                                                <td>fawole37@yahoo.com</td>
                                                <td>08064828248</td>
                                                <td>
                                                    <a href="user-account/delete/6bc35d554a82fd726" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Staff Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>
                                                    <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/892ad0ba4184e247f" class="text-info" target="_blank">MR Obinozie Henry Ebuka</a>
                                                </td>
                                                <td>obinozie.h</td>
                                                <td>obinoziehenry@gmail.com</td>
                                                <td>08037370787</td>
                                                <td>
                                                    <a href="user-account/delete/7bb090a875ff21d52" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Staff Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>
                                                    <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/e19bc1d52c75e1542" class="text-info" target="_blank">Mr Obinozie Nnamdi Francis</a>
                                                </td>
                                                <td>obinozie.n</td>
                                                <td>nnamdifrancis32@gmail.com</td>
                                                <td>08064769378</td>
                                                <td>
                                                    <a href="user-account/delete/4640cc2058b1bde4b" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Staff Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>
                                                    <img src="uploads/passport_df0f6ec551dfee6df.jpg" width="50" class="img-circle" />
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/9a192c3a5f6e794a7" class="text-info" target="_blank">Mr Umerah Anthony Tochukwu</a>
                                                </td>
                                                <td>umerah.t</td>
                                                <td>umra2020@gmail.com</td>
                                                <td>08068513947</td>
                                                <td>
                                                    <a href="user-account/delete/668962267681d0e10c58" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Staff Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
                                                </td>
                                            </tr>

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
                    © 2018 School Information Management System (MySkool Portal) by <a href="https://krystaldigitalng.com" target="_blank">BiNoZy DiGiTaL koncept</a>
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