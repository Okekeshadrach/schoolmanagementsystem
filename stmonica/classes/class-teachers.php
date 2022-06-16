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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Class Teachers</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Teachers</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">

                            <form action="classes/class-teacher-delete" id="delete-class-teacher" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <p>See below, list of all class teachers on the portal</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" id="unassign" disabled>Unassign Selected</button>
                                            <span class="processor"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive" id="resp-div">
                                    <table class="table table-striped table-bordered color-table success-table stylish-table" id="resp-table" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Class Arm</th>
                                                <th>Staff Assigned</th>
                                                <th>Date Assigned</th>
                                                <th>
                                                    <div class="switch">
                                                        <label>
                                                            <input type="checkbox" onclick="check_all(this)">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="sn">1</td>
                                                <td>
                                                    <a href="classes/manage-students/bfa345d3136cc1c4fb/43a1269318942f9a3" target="_blank" class="text-info">
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/a40ce25d2d67e6c62" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Teachers Name </a>
                                                </td>
                                                <td>Nov 11, 2016 at 04:00 PM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox" value="260dd39e46a2d82c8f" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <input type="hidden" name="class_name" id="class_name" value="">
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    $('input[type=checkbox]').click(function() {
                        count_checked_rows = $('input:checkbox:checked.chk').length;
                        if (count_checked_rows > 0) {
                            $('#unassign').removeAttr('disabled');
                        } else {
                            $('#unassign').attr('disabled', 'disabled');
                        }
                    });

                    //===== Run when user attempts to delete a grade config ==============
                    $('#unassign').click(function(e) {
                        e.preventDefault();
                        swal({
                            title: "Are you sure?",
                            text: "Your action will unassign the selected staff from their respective classes. \nDo you really want to continue?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function(isConfirm) {
                            if (isConfirm) {
                                var xhr = submit_form('#delete-class-teacher');
                                xhr.done(function(result) {
                                    if (result.type === 'success') {
                                        $('input:checkbox:checked.chk').parent().parent().parent().parent().fadeOut(2000, function() {
                                            $(this).remove();
                                            $('.sn').each(function(i) {
                                                $(this).text(i + 1);
                                            });
                                            $('#unassign').attr('disabled', 'disabled');
                                        });
                                    }
                                });
                            }
                        });
                    });
                    //====================================================================
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