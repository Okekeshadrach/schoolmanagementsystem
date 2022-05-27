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
                        <h3 class="text-themecolor m-b-0 m-t-0">Send Text Message</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Messaging</a></li>
                            <li class="breadcrumb-item active">Send text message</li>
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
                    <div class="offset-md-2 col-md-8">
                        <div class="card">
                            <div class="card-body" id="units-div">
                                <h3 id="units">Units Balance:
                                    <span class="text-danger"></span>
                                </h3>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <form action="messaging/send-text-message-process" id="message-form" target="_blank" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="user_type">Send Text Message
                                                    to</label>
                                                <select name="user_type" class="selectpicker" data-style="form-control btn-secondary" id="user_type" required>
                                                    <option value="staff">All Staff</option>
                                                    <option value="parent">Parents</option>
                                                    <option value="student">Students</option>
                                                    <option value="admin">All Administrators</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" id="for-student" style="display: none">
                                        <div class="form-group col-sm-6">
                                            <label class="form-control-label" for="class">Class</label>
                                            <select class="selectpicker" data-style="form-control btn-secondary" id="class" name="class_id" style="width: 100%" required>
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

                                        <div class="form-group col-sm-6">
                                            <label for="class_arm_id">Class Arm</label>
                                            <select class="form-control" id="class_arm_id" name="class_arm_id">
                                                <option value="">ALL Arms</option>
                                                <option class="class_arm class-1 hide" value="1">JSS 1A</option>
                                                <option class="class_arm class-1 hide" value="2">JSS 1B</option>
                                                <option class="class_arm class-1 hide" value="3">JSS 1C</option>
                                                <option class="class_arm class-1 hide" value="4">JSS 1D</option>
                                                <option class="class_arm class-1 hide" value="5">JSS 1E</option>
                                                <option class="class_arm class-1 hide" value="6">JSS 1G</option>
                                                <option class="class_arm class-1 hide" value="7">JSS 1H</option>
                                                <option class="class_arm class-1 hide" value="8">JSS 1J</option>
                                                <option class="class_arm class-1 hide" value="9">JSS 1K</option>
                                                <option class="class_arm class-2 hide" value="10">JSS 2A</option>
                                                <option class="class_arm class-2 hide" value="11">JSS 2B</option>
                                                <option class="class_arm class-2 hide" value="12">JSS 2C</option>
                                                <option class="class_arm class-2 hide" value="13">JSS 2D</option>
                                                <option class="class_arm class-2 hide" value="14">JSS 2E</option>
                                                <option class="class_arm class-2 hide" value="15">JSS 2G</option>
                                                <option class="class_arm class-2 hide" value="16">JSS 2H</option>
                                                <option class="class_arm class-2 hide" value="17">JSS 2J</option>
                                                <option class="class_arm class-2 hide" value="18">JSS 2K</option>
                                                <option class="class_arm class-3 hide" value="46">JSS 3A</option>
                                                <option class="class_arm class-3 hide" value="47">JSS 3B</option>
                                                <option class="class_arm class-3 hide" value="48">JSS 3C</option>
                                                <option class="class_arm class-3 hide" value="49">JSS 3D</option>
                                                <option class="class_arm class-3 hide" value="50">JSS 3E</option>
                                                <option class="class_arm class-3 hide" value="51">JSS 3G</option>
                                                <option class="class_arm class-3 hide" value="52">JSS 3H</option>
                                                <option class="class_arm class-3 hide" value="53">JSS 3J</option>
                                                <option class="class_arm class-3 hide" value="54">JSS 3K</option>
                                                <option class="class_arm class-4 hide" value="19">SS 1A</option>
                                                <option class="class_arm class-4 hide" value="20">SS 1B</option>
                                                <option class="class_arm class-4 hide" value="55">SS 1BECE</option>
                                                <option class="class_arm class-4 hide" value="21">SS 1C</option>
                                                <option class="class_arm class-4 hide" value="22">SS 1D</option>
                                                <option class="class_arm class-4 hide" value="23">SS 1E</option>
                                                <option class="class_arm class-4 hide" value="24">SS 1G</option>
                                                <option class="class_arm class-4 hide" value="25">SS 1H</option>
                                                <option class="class_arm class-4 hide" value="26">SS 1J</option>
                                                <option class="class_arm class-4 hide" value="27">SS 1K</option>
                                                <option class="class_arm class-5 hide" value="28">SS 2A</option>
                                                <option class="class_arm class-5 hide" value="29">SS 2B</option>
                                                <option class="class_arm class-5 hide" value="30">SS 2C</option>
                                                <option class="class_arm class-5 hide" value="31">SS 2D</option>
                                                <option class="class_arm class-5 hide" value="32">SS 2E</option>
                                                <option class="class_arm class-5 hide" value="33">SS 2G</option>
                                                <option class="class_arm class-5 hide" value="34">SS 2H</option>
                                                <option class="class_arm class-5 hide" value="35">SS 2J</option>
                                                <option class="class_arm class-5 hide" value="36">SS 2K</option>
                                                <option class="class_arm class-6 hide" value="37">SS 3A</option>
                                                <option class="class_arm class-6 hide" value="38">SS 3B</option>
                                                <option class="class_arm class-6 hide" value="39">SS 3C</option>
                                                <option class="class_arm class-6 hide" value="40">SS 3D</option>
                                                <option class="class_arm class-6 hide" value="41">SS 3E</option>
                                                <option class="class_arm class-6 hide" value="42">SS 3G</option>
                                                <option class="class_arm class-6 hide" value="43">SS 3H</option>
                                                <option class="class_arm class-6 hide" value="44">SS 3J</option>
                                                <option class="class_arm class-6 hide" value="45">SS 3K</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 m-t-20">
                                            <label class="form-control-label" for="content">Message Body</label>
                                            <textarea class="form-control" id="content" name="content" rows="5" maxlength="320" required></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <hr>
                                            <label class="form-control-label" for="copy">Phone Numbers to copy</label>
                                            <textarea class="form-control" id="copy" name="copy" placeholder="optional"></textarea>
                                            <small class="text-info">Use a <i class="text-success">comma</i> to separate
                                                multiple phone numbers</small>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="form-control-label" for="exempt">Phone Numbers to
                                                exempt</label>
                                            <textarea class="form-control" id="exempt" name="exempt" placeholder="optional"></textarea>
                                            <small class="text-info">Use a <i class="text-success">comma</i> to separate
                                                multiple phone numbers</small>
                                        </div>
                                    </div>
                                    <div class="m-t-20">
                                        <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10" data-dismiss="modal">Close</button>
                                        <button type="submit" id="csv-form-btn" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Send
                                            Message</button>
                                    </div>
                                </form> <br>
                                <form action="messaging/send-text-message-test" id="message-test-form" method="post" accept-charset="utf-8">
                                    <input type="hidden" name="content_test" id="content_test">
                                    <button type="submit" id="csv-form-btn" class="btn btn-sm btn-outline-secondary btn-rounded waves-effect waves-light m-t-10">Send
                                        a test message to me</button>
                                </form>
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

            <script>
                function reorder_class_arm() {
                    var class_id = $('#class').val();

                    $('#class_arm_id').val('');
                    $('.class_arm').hide().attr('disabled', 'disabled');
                    $('#class_arm_id option:selected').text('ALL Arms');
                    $('.class-' + class_id).show().removeAttr('disabled');
                }

                reorder_class_arm();

                $('#user_type').change(function() {
                    if ($(this).val() === 'student' || $(this).val() === 'parent') {
                        $('#for-student').show('slow');
                    } else {
                        $('#for-student').hide('slow');
                    }
                });

                $('#class').change(function() {
                    reorder_class_arm();
                });


                $('#message-form').submit(function(e) {
                    e.preventDefault();

                    var user_type = $('#user_type option:selected').text();

                    swal({
                        title: "Are you sure?",
                        text: "Are you ready to send this mail to " + user_type + " ? Kindly Confirm that you have crosschecked for errors!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#13aa2c",
                        confirmButtonText: "Yes, proceed!"
                    }, function() {
                        var xhr = submit_form2('#message-form');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                // SWEET ALERT
                                swal("Message Sent!", result.msg, "success");
                                $('#units-div').load('messaging/send-text-message #units');
                            }
                        });
                    });
                });


                $('#message-test-form').submit(function(e) {
                    e.preventDefault();
                    $('#content_test').val($('#content').val());
                    submit_form2('#message-test-form');
                });
            </script>
            <!-- ============================================================== -->
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
