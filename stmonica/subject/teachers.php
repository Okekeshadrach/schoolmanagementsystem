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
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <style>
                .subj-teacher {
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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Subject Teachers</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Subject</a></li>
                            <li class="breadcrumb-item active">Teachers</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="__subj_id">Showing Subject Teachers for</label>
                                    <select class="form-control select2" id="__subj_id" style="width: 100%" required>
                                        <?php $class->get_subject_select(); ?>

                                    </select>
                                </div>
                            </div>
                            <form action="subject/subject1.html/unassign-staff" id="unassign-staff" method="post" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <p id="hint"></p>
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
                                                <th>Subject</th>
                                                <th>Class Arm</th>
                                                <th>Staff Assigned</th>
                                                <th>Date Assigned</th>
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
                                            <tr class="subj-1 subj-teacher">
                                                <td class="sn-1">1</td>
                                                <td>
                                                    No Data </td>
                                                <td>Found</td>
                                                <td>
                                                    <a href="" target="_blank">
                                                        teachers name </a>
                                                </td>
                                                <td>Yet</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox" value="017cdcc81784e4a1c" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    // ==== THIS PAGE FUNCTION ============
                    function reorder_table() {
                        var subj_id = $('#__subj_id').val();
                        var subj_name = $('#__subj_id option:selected').text();
                        $('.subj-teacher').hide();
                        $('#msg').remove();
                        $('input[type=checkbox]').removeAttr('checked');

                        if ($('.subj-' + subj_id).length > 0) {
                            $('.subj-' + subj_id).show('slow');
                            $('#unassign').show('slow');
                            $('#hint').html('See below, List of subject teachers of ' + subj_name + ' and their respective classes');
                        } else {
                            $("tbody").append('<tr id="msg"><td colspan="6"><i>Looks like no teacher has been assigned to ' + subj_name + ' yet. Go to the appropriate teacher\'s profile and assign him/her to ' + subj_name + '</i></td></tr>');
                            $('#unassign').hide('slow');
                            $('#hint').html('');
                        }
                        $('.sn-' + subj_id).each(function(i) {
                            $(this).text(i + 1);
                        });
                    }
                    // ====================================


                    //==== Run immediately page loads ========
                    reorder_table();
                    //========================================

                    //====== Run when user changes the class in <select></select> ======
                    $('#__subj_id').change(function() {
                        reorder_table();
                    });
                    //========================================


                    $('input[type=checkbox]').click(function() {
                        count_checked_rows = $('input:checkbox:checked.chk').length;
                        if (count_checked_rows > 0) {
                            $('#unassign').removeAttr('disabled');
                        } else {
                            $('#unassign').attr('disabled', 'disabled');
                        }
                    });


                    //====================================================================
                    $('#unassign').click(function(e) {
                        e.preventDefault();
                        var subj_name = $('#__subj_id option:selected').text();

                        swal({
                            title: "Are you sure?",
                            text: "Your action will unassign the selected staff from " + subj_name + " in the respective classes. \nDo you really want to continue?",
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
                                        reorder_table();
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
        <?php include('../layout/script.php') ?>
</body>

</html>