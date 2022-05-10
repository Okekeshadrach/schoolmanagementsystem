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
            <!-- =======================  This page styles =================== ---->
            <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
                rel="stylesheet">
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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">School Academic Sessions</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Configuration</a></li>
                            <li class="breadcrumb-item active">Academic Sessions</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <div class="offset-md-9 col-md-3">

                                <a href="#createSessionModal"
                                    class="btn btn-primary btn-rounded waves-effect waves-light m-b-5"
                                    data-toggle="modal" id="create" data-target="#createSessionModal">Create Next
                                    Term/Session</a>


                            </div>
                            <p id="page-desc">See below, Academic session history.</p>
                            <div class="table-responsive" id="resp-div">
                                <table
                                    class="table table-striped table-bordered color-table success-table stylish-table"
                                    id="resp-table" width="100%">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>First Term: 2020/2021 <span class="label label-light-success">CURRENTLY
                                                    ACTIVE</span></td>
                                            <td>
                                                Jan 10, 2021 </td>
                                            <td>
                                                Mar 28, 2021 </td>
                                            <td>
                                                <a href="school-config/session-edit/83309e32136db06a23"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Third Term: 2019/2020 </td>
                                            <td>
                                                Oct 11, 2020 </td>
                                            <td>
                                                Dec 18, 2020 </td>
                                            <td>
                                                <a href="school-config/session-edit/9bd0928212d8598ede"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Second Term: 2019/2020 </td>
                                            <td>
                                                Jan 11, 2020 </td>
                                            <td>
                                                Mar 11, 2020 </td>
                                            <td>
                                                <a href="school-config/session-edit/33a5b17c114df8dd37"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>First Term: 2019/2020 </td>
                                            <td>
                                                Sep 06, 2009 </td>
                                            <td>
                                                Dec 16, 2019 </td>
                                            <td>
                                                <a href="school-config/session-edit/360ec4ad102a86dec8"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Third Term: 2018/2019 </td>
                                            <td>
                                                May 06, 2019 </td>
                                            <td>
                                                Aug 02, 2019 </td>
                                            <td>
                                                <a href="school-config/session-edit/4448de669e7ff9c1d"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Second Term: 2018/2019 </td>
                                            <td>
                                                Jan 06, 2019 </td>
                                            <td>
                                                Apr 12, 2019 </td>
                                            <td>
                                                <a href="school-config/session-edit/0e68e54e8450594f4"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>First Term: 2018/2019 </td>
                                            <td>
                                                Sep 08, 2018 </td>
                                            <td>
                                                Dec 14, 2018 </td>
                                            <td>
                                                <a href="school-config/session-edit/1e6f5d907b2decd05"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Third Term: 2017/2018 </td>
                                            <td>
                                                Apr 16, 2018 </td>
                                            <td>
                                                Jul 27, 2018 </td>
                                            <td>
                                                <a href="school-config/session-edit/82b5cab069beb27c6"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Second Term: 2017/2018 </td>
                                            <td>
                                                Jan 08, 2018 </td>
                                            <td>
                                                Mar 23, 2018 </td>
                                            <td>
                                                <a href="school-config/session-edit/dcb5990751cacdfc0"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>First Term: 2017/2018 </td>
                                            <td>
                                                Sep 11, 2017 </td>
                                            <td>
                                                Dec 16, 2017 </td>
                                            <td>
                                                <a href="school-config/session-edit/b97cbc3241198e0a6"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Third Term: 2016/2017 </td>
                                            <td>
                                                May 01, 2017 </td>
                                            <td>
                                                Aug 04, 2017 </td>
                                            <td>
                                                <a href="school-config/session-edit/35ef93a131eaf209b"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Second Term: 2016/2017 </td>
                                            <td>
                                                Jan 15, 2017 </td>
                                            <td>
                                                Apr 07, 2017 </td>
                                            <td>
                                                <a href="school-config/session-edit/f458e9972d7ec14fc"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>First Term: 2016/2017 </td>
                                            <td>
                                                Sep 05, 2016 </td>
                                            <td>
                                                Dec 10, 2016 </td>
                                            <td>
                                                <a href="school-config/session-edit/a34ee31717a07d947"
                                                    class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5"
                                                    title="Edit Start or End date" data-toggle="tooltip"><i
                                                        class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="createSessionModal" tabindex="1" role="dialog"
                                aria-labelledby="myModal" style="display: none">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModal">Create Next Session - Term</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="school-config/session-new-process" id="session-new" method="post"
                                            accept-charset="utf-8">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <p>You want to create <span class="text-success">Second Term:
                                                            2020/2021</span> ? <br>Kindly complete the form below</p>
                                                </div>
                                                <div class="form-group">
                                                    <label for="session_name" class="control-label">Name :</label>
                                                    <input type="text" class="form-control" name="session_name"
                                                        id="session_name" value="Second Term: 2020/2021" disabled>
                                                    <input type="hidden" name="start_year1" value="2020">
                                                    <input type="hidden" name="start_year2" value="2021">
                                                    <input type="hidden" name="year" value="2020/2021">
                                                    <input type="hidden" name="term" value="Second">
                                                    <input type="hidden" name="term_no" value="2">
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label for="starts" class="control-label">Start Date:</label>
                                                        <input type="text" class="form-control date"
                                                            placeholder="YYYY-MM-DD" name="starts" id="starts" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="ends" class="control-label">End Date:</label>
                                                        <input type="text" class="form-control date"
                                                            placeholder="YYYY-MM-DD" name="ends" id="ends" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button"
                                                    class="btn btn-warning btn-rounded waves-effect waves-light m-t-10"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit"
                                                    class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ======   This Page SCRIPTS   =========== -->
                <script src="assets/plugins/moment/moment.js"></script>
                <script
                    src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


                <script>

                    $('.date').bootstrapMaterialDatePicker({
                        format: 'YYYY-MM-DD',
                        time: false
                    });

                    $('#move').click(function (e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "NOTE: YOU CANNOT UNDO THIS ACTION!\n Your action will move the portal to " + $('#session_name').val() + ". \n Do you want to continue?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function () {
                            var xhr = get_request(url);
                            xhr.done(function (result) {
                                if (result.type === 'success') {
                                    $('#resp-div').load(site_url + 'school-config/academic-session #resp-table');
                                    $('#current_session_name').html(result.session_name);
                                    $('#move').remove();
                                    $('#page-desc').html($('#page-desc').html() + ' You cannot create a new session at this time.');
                                }
                            });
                        });
                    });

                    //====== Run when modal form is submitted ========
                    $('#session-new').submit(function (e) {
                        e.preventDefault();
                        var xhr = submit_form2('#session-new');
                        xhr.done(function (result) {
                            if (result.type === 'success') {
                                $('#resp-div').load(site_url + 'school-config/academic-session #resp-table');
                                $('#create').remove();
                            }
                        });
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