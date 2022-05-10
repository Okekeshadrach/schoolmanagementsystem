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

                            <form action="classes/class-arm-create-process" id="class-arm-create" method="post"
                                accept-charset="utf-8">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="class_id">Select Class</label>
                                        <select class="custom-select form-control select2" id="class_id" name="class_id"
                                            style="width: 100%" required>
                                            <option value=""></option>

                                            <option value="1">JSS 1</option>
                                            <option value="2">JSS 2</option>
                                            <option value="3">JSS 3</option>
                                            <option value="4">SS 1</option>
                                            <option value="5">SS 2</option>
                                            <option value="6">SS 3</option>
                                            <option value="7">YEAR 1</option>
                                            <option value="8">YEAR 2</option>
                                            <option value="9">YEAR 3</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4" id="select-arm">
                                        <div id="select-arm--">
                                            <label for="arm_id">Select Arm</label>
                                            <select class="custom-select form-control select2" id="arm_id" name="arm_id"
                                                style="width: 100%" required>
                                                <option value=""></option>

                                                <option value="1">A</option>
                                                <option value="2">B</option>
                                                <option value="12">BECE</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                                <option value="5">E</option>
                                                <option value="7">G</option>
                                                <option value="8">H</option>
                                                <option value="10">J</option>
                                                <option value="11">K</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit"
                                            class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Create
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
                                <table
                                    class="table table-bordered table-striped stylish-table color-table success-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Class Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>JSS 1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>JSS 2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>JSS 3</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>SS 1</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>SS 2</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>SS 3</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>YEAR 1</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>YEAR 2</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>YEAR 3</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Create Arm</h3>
                            <p class="text-muted m-b-30 font-13">Add a new arm into the system</p>
                            <form action="classes/arm-create-process" id="arm-create" method="post"
                                accept-charset="utf-8">
                                <div class="form-group">
                                    <label for="arm">Arm Name</label>
                                    <input type="text" name="arm" class="form-control" id="arm" placeholder="e.g A"
                                        required>
                                </div>
                                <div class="offset-sm-3 col-sm-9">
                                    <button type="submit"
                                        class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Create New
                                        Arm</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Current Arms</h3>
                            <p class="text-muted m-b-30 font-13">Arms in the system</p>
                            <div class="table-responsive m-t-20" id="arms-div">
                                <table
                                    class="table table-bordered table-striped stylish-table color-table success-table"
                                    id="arms-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Arm Name</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="sn">1</td>
                                            <td>A</td>
                                            <td>
                                                <a href="classes/arm-edit/c8ad04ce17852bcc2"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/35f78faa1ee6d6614"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">2</td>
                                            <td>B</td>
                                            <td>
                                                <a href="classes/arm-edit/d5d38d79232899caf"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/4bbb38132eecbf661"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">3</td>
                                            <td>BECE</td>
                                            <td>
                                                <a href="classes/arm-edit/8fe68988123f6716ca"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/0885acb1121cb2e007"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">4</td>
                                            <td>C</td>
                                            <td>
                                                <a href="classes/arm-edit/e87069bd3a9a86bbd"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/c0d5fcc1313bae327"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">5</td>
                                            <td>D</td>
                                            <td>
                                                <a href="classes/arm-edit/3c88074b41e78e732"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/2ebedf074d5f01aab"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">6</td>
                                            <td>E</td>
                                            <td>
                                                <a href="classes/arm-edit/af42c5d25d88ed06d"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/c8b402ca5e34e5368"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">7</td>
                                            <td>G</td>
                                            <td>
                                                <a href="classes/arm-edit/bc15b37776f82da3d"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/9d635aca7d31768c5"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">8</td>
                                            <td>H</td>
                                            <td>
                                                <a href="classes/arm-edit/e76b99fc8723a3a48"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/b4e455a787da7f281"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">9</td>
                                            <td>J</td>
                                            <td>
                                                <a href="classes/arm-edit/bcc8126110cd431587"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/2897c22010072b9b70"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="sn">10</td>
                                            <td>K</td>
                                            <td>
                                                <a href="classes/arm-edit/5879d119113eacc662"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit this arm" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                                <a href="classes/arm-delete/53ba05e91191658b10"
                                                    class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light arm-del"
                                                    title="Delete this arm" data-toggle="tooltip"><i
                                                        class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <script>

                    //===== Run when user attempts to delete Arm ==============
                    $(document).on('click', '.arm-del', function (e) {
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
                        }, function () {
                            var xhr = get_request(url);
                            xhr.done(function (result) {
                                if (result.type === 'success') {
                                    //Update the Arm-select dropdown with ajax...
                                    $('#select-arm').load(site_url + 'classes/classes-and-arms #select-arm--', function () {
                                        $(".select2").select2();
                                    });

                                    a.parent().parent().fadeOut(2000, function () {
                                        $(this).remove();
                                        $('.sn').each(function (i) {
                                            $(this).text(i + 1);
                                        });
                                    });
                                }
                            });
                        });
                    });
                    //====================================================================

                    //====== Run when arm-create form is submitted ========
                    $('#arm-create').submit(function (e) {
                        e.preventDefault();
                        var xhr = submit_form2('#arm-create');
                        xhr.done(function (result) {
                            if (result.type === 'success') {
                                //Update page with ajax...
                                $('#arms-div').load(site_url + 'classes/classes-and-arms #arms-table');
                                $('#select-arm').load(site_url + 'classes/classes-and-arms #select-arm--', function () {
                                    $(".select2").select2();
                                });
                            }
                        });
                    });
                    //================================================

                    //====== Run when class-arm-create form is submitted ========
                    $('#class-arm-create').submit(function (e) {
                        e.preventDefault();
                        submit_form2('#class-arm-create');
                    });
        //================================================
                </script><!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © 2018 School Information Management System (MySkool Portal) by <a
                        href="https://krystaldigitalng.com" target="_blank">KRYSTAL DIGITAL SOLUTIONS</a>
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
    <?php include('../layout/script.php')?>
</body>

</html>