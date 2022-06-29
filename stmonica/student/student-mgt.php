<!DOCTYPE html>
<?php include("../layout/head.php") ?>

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
            <style>
                .option,
                .lga {
                    display: none;
                }
            </style>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Student List</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover table-hover dataTable js-exportable">
                                        <thead>
                                            <tr role="row">
                                                <th aria-sort="ascending" aria-label="S/N: activate to sort column descending">S/N</th>
                                                <th aria-label=": activate to sort column ascending"></th>
                                                <th aria-label="Student Name: activate to sort column ascending">Student Name</th>
                                                <th aria-label="Class: activate to sort column ascending">Class</th>
                                                <th aria-label="Username: activate to sort column ascending">Username</th>
                                                <th aria-label="Gender: activate to sort column ascending">Gender</th>
                                                <th aria-label="House: activate to sort column ascending">House</th>
                                                <th aria-label="Pref: activate to sort column ascending">Pref</th>
                                                <th aria-label="Pref: activate to sort column ascending">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <tr role="row">
                                                <th aria-sort="ascending" aria-label="S/N: activate to sort column descending">S/N</th>
                                                <th aria-label=": activate to sort column ascending"></th>
                                                <th aria-label="Student Name: activate to sort column ascending">Student Name</th>
                                                <th aria-label="Class: activate to sort column ascending">Class</th>
                                                <th aria-label="Username: activate to sort column ascending">Username</th>
                                                <th aria-label="Gender: activate to sort column ascending">Gender</th>
                                                <th aria-label="House: activate to sort column ascending">House</th>
                                                <th aria-label="Pref: activate to sort column ascending">Pref</th>
                                                <th aria-label="Pref: activate to sort column ascending">Action</th>
                                            </tr>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <!-----------------------------------Content------------------------------------>
                                            <?php $class->get_student_list(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </section>
        <?php include("../layout/script.php") ?>

        <?php include("../layout/dscript.html") ?>
</body>

</html>