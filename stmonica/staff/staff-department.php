<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php include('../staff/get_staff.php') ?>
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
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Staff Department</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li>
                            <li class="breadcrumb-item active"> department</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <!-- Column -->
                    <?php include('../staff/profile_nav.html') ?>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">

                                <?php include('../layout/profile_nav.php') ?>
                                <div id="resp-div">
                                    <table class="tablesaw table-bordered table-hover table stylish-table table-striped color-table success-table" data-tablesaw-mode="stack" id="resp-table" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Department</th>
                                                <th>Date added</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><?php echo $staff_department?></td>
                                                <td><?php echo $day?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <br>
                                <hr>
                                <br>
                                <p>If you want to add <b><?php echo $staff_title .' '. strtolower($staff_first_name) ?></b> to a department, select the department
                                    below</p>

                                <form action="../staff/staff-dept-process.php" class="form-horizontal" id="addstaff-dept" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <div class="form-group row">
                                        <label for="dept" class="col-sm-4 text-right control-label col-form-label">Select
                                            Department*</label>
                                        <div class="col-sm-8">
                                        <input type="hidden" name="staff_id" value="<?php echo $staffid ?>">
                                            <select class="select2" name="dept_id" style="width: 100%" id="dept" required>
                                                <option></option>
                                                <?php $class->get_department_select()?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group m-b-0">
                                        <div class="offset-sm-4 col-sm-8">
                                            <button type="submit" name="check" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Add
                                                to Department</button>
                                            <span class="processor"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>

            <script>
                $(function() {
                    $('input[type=checkbox]').click(function() {
                        count_checked_rows = $('input:checkbox:checked.chk').length;
                        if (count_checked_rows > 0) {
                            $('#unassign').removeAttr('disabled');
                        } else {
                            $('#unassign').attr('disabled', 'disabled');
                        }
                    });


                    //====================================================================
                    $(document).on('click', '.staff-dept-del', function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will remove Mr teachers name from the selected department. Do you really want to do this?",
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

                    //====================================================================
                    $(document).on('click', '.make-hod', function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');

                        swal({
                            title: "Are you sure?",
                            text: "Your action will make Mr teachers name the H.O.D of the selected department. Do you really want to do this?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            var xhr = get_request(url);
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    //Automatically update page content. User doesn't need to refresh

                                    $('#resp-div').load(site_url + 'staff/staff-department/5047f2e72c815caa6 #resp-table', function() {

                                        //Initialize responsive table
                                        $(document).trigger("enhance.tablesaw");
                                    });

                                    $('#staff-profile-div').load(site_url + 'staff/staff-profile/5047f2e72c815caa6 #staff-profile-side');
                                }
                            });
                        });
                    });
                    //====================================================================


                    $('#add-staff-dept').submit(function(e) {
                        e.preventDefault();
                        var xhr = submit_form('#add-staff-dept');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                //Automatically update page content. User doesn't need to refresh

                                $('#resp-div').load(site_url + 'staff/staff-department/5047f2e72c815caa6 #resp-table', function() {

                                    //Initialize responsive table
                                    $(document).trigger("enhance.tablesaw");
                                });

                                $('#staff-profile-div').load(site_url + 'staff/staff-profile/5047f2e72c815caa6 #staff-profile-side');
                            }
                        });
                    });
                })
            </script>
            <!-- ========================================== -->
            <!-- ============================================================== -->
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
    <?php include('../layout/script.php') ?>
    <!-- ============================================================== -->
</body>

</html>