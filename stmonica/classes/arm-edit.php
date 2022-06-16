<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php include('../classes/get_arm-edit.php') ?>

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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Edit Arm</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Edit Arm</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-md-3 col-md-6">
                        <div class="card card-body">
                            <form action="../classes/update_arm.php?edit_arm=<?php echo $arm_id ?>" method="post" accept-charset="utf-8">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="arm" class="control-label">Arm Name:</label>
                                            <input type="Hidden" class="form-control" name="armid" id="arm" value="<?php echo $arm_id ?>" required>
                                            <input type="text" class="form-control" name="arm" id="arm" value="<?php echo $arm_name ?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="../classes/classes_and_arms.php" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10">Close</a>
                                    <button type="submit" name="update" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save changes
                                    </button>
                                </div>
                                <p class="processor pull-right"></p>
                                <small class="text-success pull-right"><i></i></small>
                                <small class="text-success pull-right last-updated"><i></i></small>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
            <script>
                $('#aedit').submit(function(e) {
                    e.preventDefault();
                    // var ggg = submitform('#aedit');
                    // alert('hello')
                    Toastify({
                        text: "This is a toast with offset",
                        offset: {
                            x: 50, // horizontal axis - can be a number or a string indicating unity. eg: '2em'
                            y: 10 // vertical axis - can be a number or a string indicating unity. eg: '2em'
                        },
                    }).showToast();
                    Toastify({
                        text: "This is a toast",
                        className: "info",
                        style: {
                            background: "linear-gradient(to right, #00b09b, #96c93d)",
                        }
                    }).showToast();
                    
                    // ggg.done(function(result){
                    //     if(result.type === 'success'){
                    //         $('.last-updated').hide();
                    //     }
                    // })
                });
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
    <?php include("../layout/script.php") ?>
    <!-- ============================================================== -->
</body>

</html>