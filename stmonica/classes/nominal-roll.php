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
                            Class Nominal Roll Preference - <?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Nominal roll</li>
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
                                        <a href="../staff/staff-profile.php">
                                            <img src="uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>
                                <form action="classes/nominal-roll.html" target="_blank" method="post" accept-charset="utf-8">
                                    <p>Set your preferences for the nominal roll, then click on <i>"Proceed"</i></p>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-bordered color-table success-table stylish-table" width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Columns</th>
                                                            <th>To show</th>
                                                            <th>Column width (%)</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td>1</td>
                                                            <td>Student's Full Name</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="name" type="checkbox" class="form-control" value="fullname" checked disabled />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="name_width" type="number" min=5 max=40 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Admission Number</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="adm_no" type="checkbox" class="form-control" value="admno" checked />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="adm_no_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Username</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="username" type="checkbox" class="form-control" value="username" checked />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="username_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Gender</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="gender" type="checkbox" class="form-control" value="gender" checked />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="gender_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Sport House</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="house" type="checkbox" class="form-control" value="h.name" checked />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="house_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>Residence Type</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="residence" type="checkbox" class="form-control" value="residence_type" checked />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="residence_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>7</td>
                                                            <td>Date of Birth</td>
                                                            <td>

                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="dob" type="checkbox" class="form-control" value="dob" checked />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="dob_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>8</td>
                                                            <td>Class Arm</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="class" type="checkbox" class="form-control" value="class" />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="class_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>9</td>
                                                            <td>Email Address</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="email" type="checkbox" class="form-control" value="email" />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="email_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>10</td>
                                                            <td>Phone Number</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="phone" type="checkbox" class="form-control" value="phone" />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="phone_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>11</td>
                                                            <td>State of Origin</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="state" type="checkbox" class="form-control" value="state" />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="state_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>12</td>
                                                            <td>Local Govt of Origin</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="lga" type="checkbox" class="form-control" value="lga" />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="lga_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>13</td>
                                                            <td>Religion</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="religion" type="checkbox" class="form-control" value="religion" />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="religion_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>14</td>
                                                            <td>Genotype/Blood Group</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="genotype" type="checkbox" class="form-control" value="genotype" />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="genotype_width" type="number" min=5 max=30 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                        <tr>
                                                            <td>15</td>
                                                            <td>Home Address</td>
                                                            <td>
                                                                <div class="switch">
                                                                    <label>
                                                                        <input name="address" type="checkbox" class="form-control" value="address" />
                                                                        <span class="lever switch-col-light-blue"></span>
                                                                    </label>
                                                                </div>
                                                            </td>
                                                            <td><input name="address_width" type="number" min=5 max=40 class="form-control" placeholder="Default" /></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="page_title">Title:</label>
                                                <input name="page_title" id="page_title" type="text" class="form-control" value="CLASS NOMINAL ROLL" />
                                            </div>
                                            <div class="form-group">
                                                <label class="text-right control-label col-form-label">Preferred
                                                    Document Format:</label>
                                                <div class="col-sm-9">
                                                    <input name="doc_type" type="radio" id="radio_1" class="with-gap radio-col-deep-purple" value="pdf" checked />
                                                    <label class="form-control-label m-r-20" for="radio_1">PDF</label>

                                                    <input name="doc_type" type="radio" id="radio_2" class="with-gap radio-col-deep-purple" value="csv" />
                                                    <label class="form-control-label" for="radio_2">CSV</label>
                                                </div>
                                            </div>

                                            <br>

                                            <span><a href="#" id="more_options"><span id="sign">+</span> More
                                                    Options</a></span>

                                            <hr>
                                            <div style="display: none" id="div_more_options">
                                                <div class="form-group">
                                                    <div class="col-sm-9">
                                                        <input name="settings_class" type="radio" id="s_c_1" class="with-gap radio-col-deep-purple" value="1" checked />
                                                        <label class="form-control-label m-r-20" for="s_c_1"><?php echo $classname ?>A
                                                            only</label>

                                                        <input name="settings_class" type="radio" id="s_c_2" class="with-gap radio-col-deep-purple" value="2" />
                                                        <label class="form-control-label" for="s_c_2">The Entire JSS
                                                            1</label>
                                                    </div>
                                                </div>


                                                <hr>

                                                <div class="form-group">
                                                    <div class="col-sm-9">
                                                        <input name="settings_residence" type="radio" id="s_r_1" class="with-gap radio-col-deep-purple" value="1" />
                                                        <label class="form-control-label m-r-20" for="s_r_1">Day
                                                            students only</label>

                                                        <input name="settings_residence" type="radio" id="s_r_2" class="with-gap radio-col-deep-purple" value="2" />
                                                        <label class="form-control-label" for="s_r_2">Boarding students
                                                            only</label>

                                                        <input name="settings_residence" type="radio" id="s_r_3" class="with-gap radio-col-deep-purple" value="" checked />
                                                        <label class="form-control-label" for="s_r_3">Both</label>
                                                    </div>
                                                </div>
                                                <hr>

                                                <div class="form-group">
                                                    <label>Add your own columns</label>
                                                    (<small><i>These colums will be empty</i></small>)
                                                    <div class="form-group">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group add-col hide">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group add-col hide">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group add-col hide">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group add-col hide">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group add-col hide">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group add-col hide">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group add-col hide">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group add-col hide">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group add-col hide">
                                                        <input name="addcol[]" type="text" class="form-control" placeholder="column name" />
                                                    </div>
                                                    <div class="form-group clearfix">
                                                        <button type="button" class="btn btn-success btn-circle btn-sm pull-right" id="add-col"><span class="fa fa-plus"></span></button>
                                                    </div>
                                                </div>
                                                <hr>
                                            </div>

                                            <input class="btn btn-primary btn-rounded m-t-10" type="submit" value="Proceed" name="submit_nominal_roll" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        $('#more_options').click(function() {
                            event.preventDefault();
                            $('#div_more_options').toggle(500);

                            var sign = $('#sign');
                            if (sign.html() === '+') {
                                sign.html('-');
                            } else {
                                sign.html('+');
                            }
                        });

                        $('#add-col').click(function() {
                            $('.add-col.hide').first().removeClass('hide');
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
        <?php include("../layout/script.php") ?>
        <!-- ============================================================== -->
</body>

</html>