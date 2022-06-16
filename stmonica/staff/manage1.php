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
                            All Administrators
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Administrator</a></li>
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

                                <a href="admin-account.html/create" class="btn btn-primary btn-rounded waves-effect waves-light m-b-20"><i class="fa fa-user-plus"></i> Create new admin account</a>

                                <div class="table-responsive resp-tbl">
                                    <div id="stud_list">
                                        <table class="table table-striped table-bordered" width="100%">
                                            <thead>
                                                <tr role="row">
                                                    <th>S/N</th>
                                                    <th></th>
                                                    <th>Administrator Name</th>
                                                    <th>Gender</th>
                                                    <th>Username</th>
                                                    <th>Email Address</th>
                                                    <th>Phone</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td class="sn"></td>
                                                    <td>
                                                        <!-- <img src="uploads/passport_Akanbi_Bukola.jpg" width="50" class="img-circle" /> -->

                                                        Details
                                                    </td>
                                                    <td>
                                                        Coming
                                                        <!-- <a href="admin-account.html/admin-profile/43f5c32e73595a730" class="text-info" target="_blank">Akanbi Bukola </a> -->
                                                    </td>
                                                    <td>Very</td>
                                                    <td></td>
                                                    <td>soon</td>
                                                    <td>Enough</td>

                                                    <td>
                                                        <a href="user-account/delete/bcda2b8a74946c10a946" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Admin Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
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

                    $('.user-delete').click(function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will delete this User\'s Account COMPLETELY! \n Are you sure you really want to do this??",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "yahhh, proceed!"
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