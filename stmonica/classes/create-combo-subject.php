<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php include('../classes/get_class.php') ?>

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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">
                            Create Combination Subject for <?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Create combo subject</li>
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
                                <small class="pull-right">
                                    <i>
                                        Class Teacher :
                                        <a href="staff/staff-profile/51064c742bb3c928e">
                                            <img src="uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>
                                <form action="classes/create-combo-subject-process" id="form_make_combo" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="offset-md-3 col-md-6">
                                            <div id="resp-div">
                                                <div class="form-group">
                                                    <label for="subj">Select the Subject you want to make combo
                                                        subject</label>
                                                    <select name="subject_id" id="subj" class="custom-select form-control select2" style="width: 100%">
                                                        <option></option>
                                                        <?php $class->get_subject_select()?>
                                                    </select>
                                                </div>
                                                <div id="make-combo" style="display: none;">
                                                    <div class="form-group">
                                                        <label for="sub_subj"></label>
                                                        <select class="select2 m-b-10 select2-multiple" name="sub_subj[]" style="width: 100%" multiple="multiple" data-placeholder="Choose" id="sub_subj" required>
                                                            <option></option>
                                                            <?php $class->get_subject_select()?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <input name="entire_class" type="radio" id="radio_1" class="with-gap radio-col-deep-purple" value="2" required />
                                                <label class="form-control-label" for="radio_1">For <?php echo $classarm_name ?> only</label>

                                                <input name="entire_class" type="radio" id="radio_2" class="with-gap radio-col-deep-purple" value="1" required checked />
                                                <label class="form-control-label" for="radio_2">For Entire <?php echo $classname ?></label>
                                            </div>

                                            <div class="form-group">
                                                <input type="hidden" name="class_arm_id" value="170ac27a1b5177272">
                                                <input type="hidden" name="session_id" value="d6fd49ad137f5edbe4">
                                                <input type="hidden" name="session_name" value="First Term 2020/2021">
                                                <input type="hidden" name="class_arm_name" value="<?php echo $classname ?>A">
                                                <input type="hidden" name="class_name" value="<?php echo $classname ?>">
                                                <input type="hidden" name="subject_name" value="">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Create
                                                    combo subject</button> <span class="processor"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(function() {

                        $(document).on('change', '#subj', function() {
                            var subj_name = $('#subj option:selected').text();
                            $('input[name=subject_name]').val(subj_name);

                            if ($(this).val()) {
                                $('label[for=sub_subj]').html('Select the subjects that will make up ' + subj_name);
                                $('#make-combo').show('slow');
                            } else {
                                $('label[for=sub_subj]').html('');
                                $('#make-combo').hide('slow');
                            }
                        });

                        $('#form_make_combo').submit(function(e) {
                            e.preventDefault();
                            var subj_name = $('#subj option:selected').text();

                            if ($('#sub_subj').val()) {
                                swal({
                                    title: "Are you sure?",
                                    text: "Do you really want to make " + subj_name + " a combination subject?",
                                    type: "warning",
                                    showCancelButton: true,
                                    confirmButtonColor: "#13aa2c",
                                    confirmButtonText: "Yes, proceed!"
                                }, function() {
                                    var xhr = submit_form('#form_make_combo');
                                    xhr.done(function(result) {
                                        if (result.type === 'success') {
                                            $('#resp-div').load(site_url + 'classes/create-combo-subject/d6fd49ad137f5edbe4/170ac27a1b5177272 #resp-div', function() {
                                                $(".select2").select2();
                                            });
                                        }
                                    });
                                });
                            }
                        });
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
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <?php include("../layout/script.php") ?>
        <!-- ============================================================== -->
</body>

</html>