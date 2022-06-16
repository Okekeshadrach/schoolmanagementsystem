<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php include('../classes/get_class.php') ?>

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
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
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
                            Register Subject for All <?php echo $classarm_name ?>Students
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Register class subject</li>
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
                                <small class="pull-right">
                                    <i>
                                        Class Teacher :
                                        <a href="../staff/staff-profile/250e5ad72e7c7691b">
                                            <img src="../../uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>
                                <p>Here you can register subjects for all students in this class. Select ONLY subjects offered by the whole class.</p>
                                <form action="" id="register-subj" method="post" accept-charset="utf-8">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Register Selected Subject(s)</button> <span class="processor"></span>
                                        </div>

                                        <input type="hidden" name="class_arm_id" value="8f1fee3f1f8e69b0a">
                                        <input type="hidden" name="session_id" value="284c360e13261962ea">
                                        <input type="hidden" name="session_name" value="First Term 2020/2021">
                                        <input type="hidden" name="class_arm_name" value="JSS 1A">
                                    </div>

                                    <div class="table-responsive">

                                        <table class="table table-striped table-bordered color-table success-table" width="100%">
                                            <thead>
                                                <tr role="row">
                                                    <th>#</th>
                                                    <th>Subject Name</th>
                                                    <th>Short Name</th>
                                                    <th>Department</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td class="sn">1</td>
                                                    <td>Skills Development Class (art)</td>
                                                    <td>SD C</td>
                                                    <td>Krystal&rsquo;s IT Academy</td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="data_id[]" type="checkbox" value="2ab060892d2f5cd0f" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">2</td>
                                                    <td>Skills Development Class (general)</td>
                                                    <td>S DC</td>
                                                    <td>Krystal&rsquo;s IT Academy</td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="data_id[]" type="checkbox" value="a113ca7014c7a2fca" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">3</td>
                                                    <td>Skills Development Class (science)</td>
                                                    <td>SDC</td>
                                                    <td>Krystal&rsquo;s IT Academy</td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="data_id[]" type="checkbox" value="37742f1e390c7ffc0" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Register Selected Subject(s)</button> <span class="processor"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $('input[type=checkbox]').click(function(e) {
                        count_checked_rows = $('input:checkbox:checked.chk').length;

                        if (count_checked_rows > 15) {
                            return false;
                        }
                    });

                    $('#register-subj').submit(function(e) {
                        e.preventDefault();

                        if ($('input:checkbox:checked.chk').length > 0) {
                            submit_form('#register-subj');
                        }
                    })
                </script><!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © 2022 School Management System (Edu-Portal) by <a href="https://binozydigital.com" target="_blank">KRYSTAL DIGITAL SOLUTIONS</a>
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
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <?php include("../layout/script.php") ?>
        <!-- ============================================================== -->
</body>

</html>