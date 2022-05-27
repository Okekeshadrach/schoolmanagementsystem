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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Classes and Arms</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Classes and Arms</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Create Class Arm</h3>
                            <p class="text-muted m-b-30 font-13">Add a new class arm to the system (e.g. JSS1A)</p>

                            <form action="arm-create-process.php" id="class-arm-creator" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="class_id">Select Class</label>
                                        <select class="custom-select form-control select2" id="class_id" name="class_id" style="width: 100%" required>
                                            <option value="">-- Select --</option>

                                            <?php $class->get_class_select() ?>

                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4" id="select-arm">
                                        <div id="select-arm--">
                                            <label for="arm_id">Select Arm</label>
                                            <select class="custom-select form-control select2" id="arm_id" name="arm_id" style="width: 100%" required>
                                                <option value="">-- Select --</option>

                                                <?php $class->get_arm_select() ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" name="classarm" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Create
                                            Class Arm</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Current Classes</h3>
                            <p class="text-muted m-b-30 font-13">Classes in the system</p>
                            <div class="table-responsive m-t-20">
                                <table class="table table-bordered table-striped stylish-table color-table success-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Class Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $class->get_class() ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Create Class</h3>
                            <p class="text-muted m-b-30 font-13">Add a new Class into the system</p>
                            <form action="arm-create-process.php" id="class-create" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <label for="class">Class Name</label>
                                    <input type="text" name="class" class="form-control" id="arm" placeholder="e.g Primary I" required>
                                </div>
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" name="clas" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Create New
                                        Class</button>
                                </div>
                            </form>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Current Arms</h3>
                            <p class="text-muted m-b-30 font-13">Arms in the system</p>
                            <div class="table-responsive m-t-20" id="arms-div">
                                <table class="table table-bordered table-striped stylish-table color-table success-table" id="arms-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Arm Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $class->get_arm() ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Create Arm</h3>
                            <p class="text-muted m-b-30 font-13">Add a new arm into the system</p>
                            <form action="arm-create-process.php" id="arm-create" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <label for="arm">Arm Name</label>
                                    <input type="text" name="arm" class="form-control" id="arm" placeholder="e.g A" required>
                                </div>
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit" name="arms" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Create New
                                        Arm</button>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>


                <script>
                    //===== Run when user attempts to delete Arm ==============
                    $(document).on('click', '.arm-del', function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will delete this Arm. Do you really want to do this?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            var xhr = get_request(url);
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    //Update the Arm-select dropdown with ajax...
                                    $('#select-arm').load('classes/classes-and-arms #select-arm--', function() {
                                        $(".select2").select2();
                                    });

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

                    //====== Run when arm-create form is submitted ========
                    // $('#arm-create').submit(function(e) {
                    //     e.preventDefault();
                    //     var xhr = submit_form2('#arm-create');
                    //     xhr.done(function(result) {
                    //         if (result.type === 'success') {
                    //             //Update page with ajax...
                    //             $('#arms-div').load('classes-and-arms #arms-table');
                    //             $('#select-arm').load('classes-and-arms #select-arm--', function() {
                    //                 $(".select2").select2();
                    //             });
                    //         }
                    //     });
                    // });
                    //================================================

                    //====== Run when class-arm-create form is submitted ========
                    $('#class-arm-create').submit(function(e) {
                        e.preventDefault();
                        submit_form2('#class-arm-create');
                    });
                    //================================================
                </script><!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    &copy; <?php echo date('Y'); ?> School Database Management System (Edu-Portal) Powered By <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL KoNcEpT</a>
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
