<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php
if (isset($_GET['classarm_id']) && isset($_GET['class_id'])) {
    $arm_id = $_GET['classarm_id'];
    $class_id = $_GET['class_id'];
    // echo '<script>alert("'.$class_id.'")</script>';
    $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
    $sql = "SELECT class.*,classarm.*,arm.* 
    FROM classarm
    JOIN class
        ON classarm.class_id=class.id
    JOIN arm
        ON classarm.arm_id=arm.arm_id
    WHERE classarm.class_id = '$class_id' AND classarm.classarm_id = '$arm_id'
    GROUP BY `classarm`.`classarm_id`,`class`.`class_name`,`arm`.`arm_name` ";
    $query = mysqli_query($db, $sql) ;
    $count = mysqli_num_rows($query);
    if ($count == true) {
        while ($row = mysqli_fetch_array($query)) {
            $classarm_name = $row['class_name'] . ' ' . $row['arm_name'];
            $classid = $row['class_id'];
        }
    }
}

?>

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
                        <h3 class="text-themecolor m-b-0 m-t-0">Student Data Completion Rate - <?php echo strtoupper($classarm_name) ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="admin-account">Dashboard</a></li>
                            <li class="breadcrumb-item active">class data completion</li>
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

                                <div class="row">
                                    <div class="col-md-10">
                                        <p>Number of students in class : <b><?php $class->get_class_student_count($classid) ?> students</b></p>
                                    </div>
                                    <div class="col-md-2">
                                        <a href="../classes/manage-student.php?class_id=<?php echo $arm_id ?>" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10 m-b-20">Go
                                            to class</a><span class="processor"></span>
                                    </div>
                                </div>

                                <div class="table-responsive-lg">
                                    <table class="table stylish-table color-table table-bordered success-table" style="min-width: 400px">
                                        <thead>
                                            <tr>
                                                <th width="4%">S/N</th>
                                                <th>Data Field</th>
                                                <th>Fraction Completed</th>
                                                <th width="50%">Level of completion</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Sport House</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>2</td>
                                                <td>Admission number</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>3</td>
                                                <td>Date of Birth</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>4</td>
                                                <td>Phone Number</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>5</td>
                                                <td>Address</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>6</td>
                                                <td>Genotype</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>7</td>
                                                <td>State of Origin</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>8</td>
                                                <td>Local Govt. Area</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>9</td>
                                                <td>Email address</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                            <tr>
                                                <td>10</td>
                                                <td>Passport</td>
                                                <td><?php $class->get_class_student_count($classid) ?> / <?php $class->get_class_student_count($classid) ?></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger active progress-bar-striped" style="width: 100%; height:14px;" role="progressbar">100%
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
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
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <?php include("../layout/script.php") ?>
    <!-- ============================================================== -->
</body>

</html>