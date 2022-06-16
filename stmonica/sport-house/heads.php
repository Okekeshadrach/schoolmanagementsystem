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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Sport House Heads</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Sport House</a></li>
                            <li class="breadcrumb-item active">Masters/Mistress</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">

                            <form action="sport-house/unassign-staff" id="unassign-staff" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <p> See below, existing Sport House Masters/Mistress on the system.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light" id="unassign" disabled>Unassign Selected</button>
                                            <span class="processor"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive" id="resp-div">
                                    <table class="table table-striped table-bordered color-table success-table stylish-table" id="resp-table" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th>House head</th>
                                                <th>House Name</th>
                                                <th>
                                                    <div class="switch">
                                                        <label>
                                                            <input type="checkbox" onclick="check_all(this)">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td colspan="4"><i>No Staff has been made a house master/mistress yet.
                                                        Go to the appropriate staff's profile and assign him/her a
                                                        house</i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    $('input[type=checkbox]').click(function() {
                        count_checked_rows = $('input:checkbox:checked.chk').length;
                        if (count_checked_rows > 0) {
                            $('#unassign').removeAttr('disabled');
                        } else {
                            $('#unassign').attr('disabled', 'disabled');
                        }
                    });

                    //===================
                    $('#unassign').click(function(e) {
                        e.preventDefault();

                        swal({
                            title: "Are you sure?",
                            text: "Your action will unassign the selected staff from the respective house. \nDo you really want to continue?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            var xhr = submit_form('#unassign-staff');
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    $('input:checkbox:checked.chk').parent().parent().parent().parent().fadeOut(2000, function() {
                                        $(this).remove();
                                        //Reorder table numbering after removing some row
                                        $('.sn').each(function(i) {
                                            $(this).text(i + 1);
                                        });
                                        $('#unassign').attr('disabled', 'disabled');
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