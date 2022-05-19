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
                                        <tr>
                                            <td class="sn">1</td>
                                            <td>A</td>
                                            <td>DISTINCTION</td>
                                            <td>
                                                <a href="school-config/grade-edit/608c87a31468076f8" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/ad3a45f213879fd5c" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">2</td>
                                            <td>A1</td>
                                            <td>EXCELLENT</td>
                                            <td>
                                                <a href="school-config/grade-edit/77dc194473e68a8bf" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/ababd4937b2c3586a" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">3</td>
                                            <td>B</td>
                                            <td>UPPER CREDIT</td>
                                            <td>
                                                <a href="school-config/grade-edit/f22d4db7231684f76" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/64e2fc5a2abde5e5c" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">4</td>
                                            <td>B2</td>
                                            <td>VERY GOOD</td>
                                            <td>
                                                <a href="school-config/grade-edit/9ed6ce2a8d992813c" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/ca39e14b8ea3bcb34" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">5</td>
                                            <td>B3</td>
                                            <td>GOOD</td>
                                            <td>
                                                <a href="school-config/grade-edit/0ba62e4991b0c1ee8" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/123834959c400db33" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">6</td>
                                            <td>C</td>
                                            <td>LOWER CREDIT</td>
                                            <td>
                                                <a href="school-config/grade-edit/1f526adb3e089f46f" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/f7cb1ec03ba736c27" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">7</td>
                                            <td>C4</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/grade-edit/cb4d34861062a19bb8" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/715b6ea410e0de515d" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">8</td>
                                            <td>C5</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/grade-edit/8435bc001198bd57ee" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/3c44343211bc964532" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">9</td>
                                            <td>C6</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/grade-edit/dafcd45512d426a442" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/1ff6f56912b2f65f50" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">10</td>
                                            <td>D7</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/grade-edit/60f11bdf1353752469" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/fcd92f891395631675" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">11</td>
                                            <td>E8</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/grade-edit/c066bdc7149c2efdec" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/9232301f14960c30fa" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">12</td>
                                            <td>F</td>
                                            <td>FAIL</td>
                                            <td>
                                                <a href="school-config/grade-edit/9530fbf26e3ed1b49" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/0af96632663607e6e" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">13</td>
                                            <td>F9</td>
                                            <td>FAIL</td>
                                            <td>
                                                <a href="school-config/grade-edit/e5843a79151b703e21" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/2d4f1e93157e387f93" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">14</td>
                                            <td>P</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/grade-edit/104c26545b32e2034" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/grade-delete/84c491085325a6fd8" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light grade-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
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
                                        <form action="school-config/grade-new-process" id="grade-new" method="post" accept-charset="utf-8">
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
                                                <button type="submit" id="csv-form-btn" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit</button>
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