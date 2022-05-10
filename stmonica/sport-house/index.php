<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php')?>

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
    <div style="width: 100%; height:100%; background-color: white; position: fixed; top:0; left:0; z-index: 1000; opacity:0.3; display: none;"
        id="DivOverlay">
    </div>
    <!-----===================================----->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
    <?php include('../layout/topbar.php')?>
        <?php include('../layout/sidebar.php')?>
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
                            Manage Sport Houses
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sport House</a></li>
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
                                    <a href="#createGradeModal"
                                        class="btn btn-primary btn-rounded waves-effect waves-light m-b-5 pull-right"
                                        data-toggle="modal" data-target="#createGradeModal">New Sport House</a>
                                </div>
                                <p class="clear">See list of existing Sport houses below.</p>
                                <div class="table-responsive" id="resp-div">
                                    <table
                                        class="table table-striped table-bordered color-table success-table stylish-table"
                                        id="resp-table" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>House Name</th>
                                                <th>House Color</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class="sn">1</td>
                                                <td>ALPHA</td>
                                                <td>ALPHA</td>

                                                <td class="text-nowrap">
                                                    <a href="sport-house/edit/d8dc765118ad626c8"
                                                        class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                        title="Edit this house" data-toggle="tooltip"><i
                                                            class="fa fa-edit"></i> </a>
                                                    <a href="sport-house/delete/3f869de8142d31887"
                                                        class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light house-del"
                                                        title="Delete this house" data-toggle="tooltip"><i
                                                            class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">2</td>
                                                <td>Beta</td>
                                                <td>Beta</td>

                                                <td class="text-nowrap">
                                                    <a href="sport-house/edit/5ec605f9264ad8457"
                                                        class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                        title="Edit this house" data-toggle="tooltip"><i
                                                            class="fa fa-edit"></i> </a>
                                                    <a href="sport-house/delete/5a0163942abb5c191"
                                                        class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light house-del"
                                                        title="Delete this house" data-toggle="tooltip"><i
                                                            class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">3</td>
                                                <td>Gamma</td>
                                                <td>Gamma</td>

                                                <td class="text-nowrap">
                                                    <a href="sport-house/edit/2cfc7c2a3034449c8"
                                                        class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                        title="Edit this house" data-toggle="tooltip"><i
                                                            class="fa fa-edit"></i> </a>
                                                    <a href="sport-house/delete/eb153e8c347261400"
                                                        class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light house-del"
                                                        title="Delete this house" data-toggle="tooltip"><i
                                                            class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">4</td>
                                                <td>Phyle</td>
                                                <td>Phyle</td>

                                                <td class="text-nowrap">
                                                    <a href="sport-house/edit/2fadc40144f7127cb"
                                                        class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                        title="Edit this house" data-toggle="tooltip"><i
                                                            class="fa fa-edit"></i> </a>
                                                    <a href="sport-house/delete/ee126af14efcf26be"
                                                        class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light house-del"
                                                        title="Delete this house" data-toggle="tooltip"><i
                                                            class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="modal fade" id="createGradeModal" tabindex="1" role="dialog"
                                    aria-labelledby="myModal" style="display: none">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModal">Create New Sport house</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="sport-house/new-process" id="house-new" method="post"
                                                accept-charset="utf-8">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group col-sm-12">
                                                            <label for="name">Sport house Name</label>
                                                            <input type="text" name="name" class="form-control"
                                                                id="name" maxlength="45" required>
                                                        </div>
                                                        <div class="form-group col-sm-12">
                                                            <label for="colour">Sport house Color</label>
                                                            <input type="text" name="colour" class="form-control"
                                                                id="colour" maxlength="10" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button"
                                                        class="btn btn-warning btn-rounded waves-effect waves-light m-t-10"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit"
                                                        class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit</button>
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
                    $(function () {

                        //===== Run when user attempts to delete a house ==============
                        $(document).on('click', '.house-del', function (e) {
                            e.preventDefault();
                            var a = $(this);
                            var url = a.attr('href');
                            swal({
                                title: "Are you sure?",
                                text: "Your action will delete this Sport house. Do you want to continue?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#13aa2c",
                                confirmButtonText: "Yes, proceed!"
                            }, function () {
                                var xhr = get_request(url);
                                xhr.done(function (result) {
                                    if (result.type === 'success') {
                                        $('#resp-div').load(site_url + 'sport-house #resp-table');
                                    }
                                });
                            });
                        });
                        //====================================================================

                        //====== Run when modal form is submitted ========
                        $('#house-new').submit(function (e) {
                            e.preventDefault();
                            var xhr = submit_form2('#house-new');
                            xhr.done(function (result) {
                                if (result.type === 'success') {
                                    $('#resp-div').load('sport-house #resp-table');
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
                © 2018 School Information Management System (MySkool Portal) by <a href="https://krystaldigitalng.com"
                    target="_blank">KRYSTAL DIGITAL SOLUTIONS</a>
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
    <?php include('../layout/script.php')?>
</body>

</html>