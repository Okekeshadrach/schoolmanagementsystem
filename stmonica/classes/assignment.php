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
            <!-- =======================  This page styles =================== ---->
            <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
            <!-- =======================  This page styles =================== ---->

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Assignments</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Assignments</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="offset-md-9 col-md-3 m-b-10">
                                    <a href="#createGradeModal" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target="#createGradeModal">Post New Assignment</a>
                                </div>
                                <p>See below, all assignments that have been posted on the portal. You can edit and
                                    delete any assignment of your choice
                                </p>
                                <div class="table-responsive" id="resp-div">
                                    <table class="table-bordered table-hover table stylish-table table-striped color-table success-table" width="100%" id="resp-table">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>Assignment Title</th>
                                                <th>Class</th>
                                                <th>Arm</th>
                                                <th>Subject</th>
                                                <th>Due Date</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="sn">1</td>
                                                <td class="text-truncate" style="max-width: 200px">Second Term
                                                    Assignment</td>
                                                <td>SS 1</td>
                                                <td><span class="label label-light-info">ALL ARMS</span></td>
                                                <td>Skills Development Class (science)</td>
                                                <td>Jan 15, 2017 at 07:30 AM</td>
                                                <td>
                                                    <a href="classes/assignment-edit/c2349e5e4339610b4" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this assignment" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                    <a href="classes/assignment-delete/32e11df14bf472842" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light a-del" title="Delete this assignment" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">2</td>
                                                <td class="text-truncate" style="max-width: 200px">Second Term
                                                    Assignment</td>
                                                <td>JSS 3</td>
                                                <td><span class="label label-light-info">ALL ARMS</span></td>
                                                <td>Skills Development Class (general)</td>
                                                <td>Jan 15, 2017 at 03:20 PM</td>
                                                <td>
                                                    <a href="classes/assignment-edit/234c70f73ae4f5f00" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this assignment" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                    <a href="classes/assignment-delete/1ffa3d3035b16576d" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light a-del" title="Delete this assignment" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">3</td>
                                                <td class="text-truncate" style="max-width: 200px">Second Term
                                                    Assignment</td>
                                                <td>JSS 2</td>
                                                <td><span class="label label-light-info">ALL ARMS</span></td>
                                                <td>Skills Development Class (general)</td>
                                                <td>Jan 15, 2017 at 10:25 AM</td>
                                                <td>
                                                    <a href="classes/assignment-edit/ee82070d220a8f502" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this assignment" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                    <a href="classes/assignment-delete/334d91102166e1328" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light a-del" title="Delete this assignment" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">4</td>
                                                <td class="text-truncate" style="max-width: 200px">Second Term
                                                    Assignment </td>
                                                <td><?php echo $classname ?></td>
                                                <td><span class="label label-light-info">ALL ARMS</span></td>
                                                <td>Skills Development Class (general)</td>
                                                <td>Jan 15, 2017 at 06:20 AM</td>
                                                <td>
                                                    <a href="classes/assignment-edit/5553a8ac1173ec77a" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this assignment" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                    <a href="classes/assignment-delete/c8491ab91ad4357da" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 waves-effect waves-light a-del" title="Delete this assignment" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="modal fade" id="createGradeModal" tabindex="1" role="dialog" aria-labelledby="myModal" style="display: none">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModal">Post New Assignment</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <form action="classes/assignment-new-process" id="a-new" method="post" accept-charset="utf-8">
                                                <div class="modal-body">

                                                    <div class="form-group">
                                                        <label class="form-control-label" for="subject">Subject:</label>
                                                        <select name="subject_id" id="subject" class="form-control select2" style="width: 100%" required>
                                                            <option></option>
                                                            <?php $class->get_subject_select() ?>
                                                        </select>
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-sm-4">
                                                            <label class="form-control-label" for="class">Class:</label>
                                                            <select class="selectpicker" data-style="form-control btn-secondary" id="class" name="class_id" style="width: 100%" required>
                                                                <option value=""></option>
                                                                <?php $class->get_class_select() ?>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-sm-8">
                                                            <label for="class_arm_id">Class Arm</label>
                                                            <select class="form-control" id="class_arm_id" name="class_arm_id">
                                                                <option value="">ALL Arms</option>
                                                                <?php $class->get_classarm_select() ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-control-label" for="title">Assignment
                                                            Title:</label>
                                                        <input class="form-control" name="title" id="title" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="content">Assignment
                                                            Question:</label>
                                                        <div class="p-2 custom-textarea" contenteditable id="content">
                                                        </div>
                                                        <input type="hidden" name="content">
                                                    </div>

                                                    <div class="row">
                                                        <div class="form-group col-md-4">
                                                            <label class="form-control-label" for="marks">Marks
                                                                Allocated:</label>
                                                            <input type="number" class="form-control" name="marks" id="marks" max="100" required>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label class="form-control-label" for="due_date">Due Date:
                                                                <small><i>(Students will not see this assignment after
                                                                        this date)</i></small></label>
                                                            <input class="form-control date" placeholder="YYYY-MM-DD" name="due_date" id="due_date" required>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-control-label" for="attachment">Do you want
                                                            to upload a document for this assignment?</label>

                                                        <input name="upload-doc" type="radio" id="r1" class="with-gap radio-col-deep-purple" value="1" />
                                                        <label class="form-control-label m-r-20" for="r1">Yes</label>

                                                        <input name="upload-doc" type="radio" id="r2" class="with-gap radio-col-deep-purple" value="2" checked />
                                                        <label class="form-control-label m-r-20" for="r2">No</label>

                                                        <div class="hide" id="upload-div">
                                                            <input type="file" class="form-control" name="attachment" id="attachment">
                                                            <small class="text-warning">(Requirement: JPG, JPEG, PNG, or
                                                                PDF. Max Size: 5MB)</small>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10" data-dismiss="modal">Close</button>
                                                    <button type="submit" id="csv-form-btn" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ======   This Page SCRIPTS   =========== -->
            <script src="assets/plugins/moment/moment.js"></script>
            <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


            <script>
                function reorder_class_arm() {
                    var class_id = $('#class').val();

                    $('#class_arm_id').val('');
                    $('.class_arm').hide();
                    $('#class_arm_id option:selected').text('ALL Arms');
                    $('.class-' + class_id).show();
                }

                reorder_class_arm();

                $('#class').change(function() {
                    reorder_class_arm();
                });

                $('.date').bootstrapMaterialDatePicker({
                    format: 'YYYY-MM-DD hh:mm:ss',
                    maxDate: new Date(2091, 0, 1),
                    minDate: new Date()
                });

                $('input[name=upload-doc]').change(function() {
                    var a = $(this).val();
                    if (a === '1') {
                        $('#upload-div').show('slow');
                    } else {
                        $('#upload-div').hide('slow');
                    }
                });

                $('#a-new').submit(function(e) {
                    e.preventDefault();

                    $('input[name=content]').val($('#content').html());

                    var jqxhr = submit_form_multipart('#a-new');
                    jqxhr.done(function(result) {
                        if (result.type === 'success') {
                            $('.last-updated').hide();
                            $('input').val('');
                            $('select').val('');
                            $('.content').html('');
                            $('#resp-div').load(site_url + 'classes/assignment #resp-table');
                        }
                    })
                });

                //===== Run when user attempts to delete an assignment ==============
                $(document).on('click', '.a-del', function(e) {
                    e.preventDefault();
                    var a = $(this);
                    var url = a.attr('href');
                    swal({
                        title: "Are you sure?",
                        text: "Your action will delete this assignment. Do you want to continue?",
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