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
                            Withdrawn Students
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                            <li class="breadcrumb-item active">Withdrawn students</li>
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

                                <form action="student/return-withdrawn-student" id="return-student" method="post"
                                    accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group pull-right">
                                                <button type="submit"
                                                    class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Return
                                                    to class</button> <span class="processor"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <p>List of students that have been withdrawn from the school. If you want to return
                                        some students back into the system, then select the appropriate student(s) and
                                        click on <i>"Return to class"</i></p>
                                    <div class="table-responsive" id="resp-div">
                                        <div id="stud_list">
                                            <table class="table stylish-table table-striped table-bordered"
                                                id="resp-table" width="100%">
                                                <thead>
                                                    <tr role="row">
                                                        <th>S/N</th>
                                                        <th></th>
                                                        <th>Names</th>
                                                        <th>Username</th>
                                                        <th>Withdrawn From</th>
                                                        <th>Date Withdrawn</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                <td colspan="4"><i>No Studet found</i></td>
                                            </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(function () {
                    if ($('tr').length > 10) {
                        $('.table').DataTable({ "iDisplayLength": 50 });
                    }

                    $('#return-student').submit(function (e) {
                        e.preventDefault();
                        var count_stud = $('input:checkbox:checked.chk').length;

                        if (count_stud > 0) {
                            swal({
                                title: "Are you sure?",
                                text: "Your action will return " + count_stud + " student(s) to the system. Do you really want to do this?",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#13aa2c",
                                confirmButtonText: "Yes, proceed!"
                            }, function () {
                                var jqxhr = submit_form('#return-student');
                                jqxhr.done(function (result) {
                                    if (result.type === 'success') {
                                        $('#resp-div').load(site_url + 'student/withdrawn-students #resp-table', function () {
                                            if ($('tr').length > 150) {
                                                $('.table').DataTable({ "iDisplayLength": 50 });
                                            }
                                        });
                                    }
                                });
                            });
                        }
                    });
                });


            </script><!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2022 School Management System (Edu-Portal) by <a href="https://binozydigital.com"
                    target="_blank">BiNoZy DiGiTaL koncept</a>
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
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include('../layout/script.php')?>
</body>

</html>