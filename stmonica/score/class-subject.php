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
                            Class Result Computation<?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Score</a></li>
                            <li class="breadcrumb-item active">class subject</li>
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
                                        <a href="staff/staff-profile/9149800a2ade9b0fd">
                                            <img src="uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>
                                <table class="tablesaw table-bordered table-hover table stylish-table table-striped color-table success-table" data-tablesaw-mode="stack" width="100%">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Subject Name</th>
                                            <th></th>
                                            <th>Students</th>
                                            <th>Subject Teacher</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="sn">1</td>
                                            <td>
                                                Skills Development Class (general) </td>

                                            <td>S DC</td>

                                            <td style="text-align: center">
                                                <span class="label label-light-success">All Students</span>
                                            </td>
                                            <td>
                                                <a href="subject/assign-teacher"><span class="label label-light-danger">Unassigned</span></a>
                                            </td>

                                            <td>
                                                <a class="btn btn-outline-primary btn-rounded btn-sm waves-effect waves-light m-t-10" data-toggle="tooltip" title="View/Print Skills Development Class (general) Datasheet" target="_blank" href="score/subject-datasheet-print/d6fd49ad137f5edbe4/170ac27a1b5177272/72e6f5ae1943be758/current-term">
                                                    <i class="fa fa-file-text-o"></i> View Datasheet
                                                </a>
                                            </td>

                                            <td>

                                                <a class="btn btn-success btn-rounded btn-sm waves-effect waves-light m-t-10" data-toggle="tooltip" title="Download a csv file. You can enter Enter Scores therein and upload later" href="score/csv-download/d6fd49ad137f5edbe4/170ac27a1b5177272/6294268a116e01348">
                                                    <i class="fa fa-file-excel-o"></i> CSV File
                                                </a>

                                            </td>

                                            <td>

                                                <div class="btn-group">
                                                    <a class="btn btn-success btn-rounded btn-sm waves-effect waves-light m-t-10" data-toggle="tooltip" title="Enter or update scores for this subject" href="score/score-update-form/0f00b7f913ed0e456f/170ac27a1b5177272/174348111e30ffb42">
                                                        <i class="fa fa-edit"></i> Enter Score
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- ============================================================== -->
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
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <?php include("../layout/script.php") ?>
        <!-- ============================================================== -->
</body>

</html>