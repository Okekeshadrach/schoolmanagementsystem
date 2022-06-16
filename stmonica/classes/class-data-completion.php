<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php 

if (isset($_GET['class_id']) && isset($_GET['classarm_id'])) {
    $class_id = $_GET['class_id'];
    $classarm_id = $_GET['classarm_id'];
    // echo '<script>alert("'.$classarm_id.'")</script>';
    $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
    $sql = "SELECT * FROM class WHERE id='$class_id'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
        while ($row = mysqli_fetch_array($query)) {
        $class_name = $row['class_name'];
        }
    }
}

?>
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader" style="opacity: 0.5;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> -->

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
                        <h3 class="text-themecolor m-b-0 m-t-0">Student Data Completion Rate - <?php echo strtoupper($class_name)?></h3>
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
                                <div class="table-responsive-lg">
                                    <table class="table stylish-table color-table table-bordered success-table" style="min-width: 400px">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Class arm</th>
                                                <th>Students</th>
                                                <th colspan="2">Level of completion</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php $class->get_classarmnumeric($class_id)?>


                                            
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