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
            <style>
                .cr {
                    display: none
                }
            </style>

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Comment Remarks</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Configuration</a></li>
                            <li class="breadcrumb-item active">comment remarks</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="__category">Showing:</label>
                                    <select class="form-control select2" id="__category" style="width: 100%" required>
                                        <option value="principalRemark">Principal Remarks</option>
                                        <option value="teacherRemark">Teacher Remarks</option>
                                        <option value="sportHouseHeadRemark">Sport House Head Remarks</option>
                                    </select>
                                </div>
                                <div class="offset-md-5 col-md-3">
                                    <a href="#newRemark" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target="#newRemark">Add Remark</a>
                                </div>
                            </div>
                            <p>Here, you can build a library of comments you often use. They will be added to the system
                                generated comments and made readily available when placing comments on students result.
                                See existing library below</p>
                            <div class="table-responsive" id="resp-div">
                                <table class="table table-striped table-bordered color-table success-table stylish-table" id="resp-table" width="100%">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Remark</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="category-principalRemark cr">
                                            <td class="sn-principalRemark">1</td>
                                            <td>A Very Good SDC Student</td>
                                            <td>principalRemark</td>
                                            <td>
                                                <a href="school-config/comment-remark-edit/58cd9de317454f817" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/comment-remark-delete/4a7bdcb21d8c83fbc" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 cr-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="newRemark" tabindex="1" role="dialog" aria-labelledby="myModal" style="display: none">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModal">Add Comment Remark</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="school-config/comment-remark-new" id="comment-remark" method="post" accept-charset="utf-8">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="category" class="control-label">Category:</label>
                                                    <input type="text" class="form-control" name="category" id="category" readonly>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="remark" class="control-label">Remark:</label>
                                                        <input type="text" class="form-control" name="remark" id="remark" required>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    // ==== THIS PAGE FUNCTION ============
                    function reorder_table() {
                        var category = $('#__category').val();
                        $('.cr').hide();
                        $('#msg').remove();
                        if ($('.category-' + category).length > 0) {
                            $('.category-' + category).show('slow');
                        } else {
                            $("tbody").append('<tr id="msg"><td colspan="4"><i>No Remarks added yet. Click on "Add Remark" to get started.</i></td></tr>');
                        }
                        $('.sn-' + category).each(function(i) {
                            $(this).text(i + 1);
                        });
                        $('#category').val(category);
                    }
                    // ====================================

                    //==== Run immediately page loads ========
                    reorder_table();
                    //========================================

                    //====== Run when user changes the category in <select></select> ======
                    $('#__category').change(function() {
                        reorder_table();
                    });
                    //========================================

                    //===== Run when user attempts to delete a remark ==============
                    $(document).on('click', '.cr-del', function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will delete this Comment Remark. Do you want to continue?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            var xhr = get_request(url);
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    a.fadeOut(function() {
                                        a.parent().parent().remove();
                                        reorder_table();
                                    })
                                }
                            });
                        });
                    });
                    //====================================================================


                    //====== Run when modal form is submitted ========
                    $('#comment-remark').submit(function(e) {
                        e.preventDefault();
                        var xhr = submit_form2('#comment-remark');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                $('#resp-div').load(site_url + 'school-config/comment-remarks #resp-table', function() {
                                    reorder_table();
                                });
                            }
                        });
                    });
                    //================================================
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