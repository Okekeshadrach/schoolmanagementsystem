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
                                                    <td class="sn">1</td>
                                                    <td>
                                                        <img src="uploads/passport_Akanbi_Bukola.jpg" width="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a href="admin-account.html/admin-profile/43f5c32e73595a730" class="text-info" target="_blank">Akanbi Bukola </a>
                                                    </td>
                                                    <td>Female</td>
                                                    <td>bukky</td>
                                                    <td>bukky@krystalng.com</td>
                                                    <td>08038439573</td>

                                                    <td>
                                                        <a href="user-account/delete/bcda2b8a74946c10a946" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Admin Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">2</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a href="admin-account.html/admin-profile/38bdacf644eed5f6f" class="text-info" target="_blank">Egejuru Gift </a>
                                                    </td>
                                                    <td>Female</td>
                                                    <td>gift</td>
                                                    <td>giftegejuru0@gmail.com</td>
                                                    <td>08037598829</td>

                                                    <td>
                                                        <a href="user-account/delete/e6bf78fd99537f91d" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Admin Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">3</td>
                                                    <td>
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a href="admin-account.html/admin-profile/f024b40b15ba842f7" class="text-info" target="_blank">Krystal Admin </a>
                                                    </td>
                                                    <td>Male</td>
                                                    <td>krystal_adm</td>
                                                    <td>newton.job@krystaldigitalng.com</td>
                                                    <td>09026428001</td>

                                                    <td>
                                                        <a href="user-account/delete/38c432991f115c38e" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Admin Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">4</td>
                                                    <td>
                                                        <img src="uploads/passport_Ogah_Elizabethmary.jpeg" width="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a href="admin-account.html/admin-profile/750f1d6e649901fe6" class="text-info" target="_blank">Ogah Elizabethmary </a>
                                                    </td>
                                                    <td>Female</td>
                                                    <td>lizzy_@o</td>
                                                    <td>elizabethmary.ogah@krystaldigitalng.com</td>
                                                    <td>08026200015</td>

                                                    <td>
                                                        <a href="user-account/delete/32ca592e746920f48a92" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light user-delete" title="Delete this Admin Account" data-toggle="tooltip"><i class="fa fa-user-times"></i> </a>
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
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <?php include('../layout/script.php') ?>
</body>

</html>