<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php include('../classes/get_class.php') ?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader" style="opacity: 0.5;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div> -->

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
                            Move Students in <?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Move students</li>
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
                                        <a href="staff/staff-profile/dd470b112e75d0b16">
                                            <img src="uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>
                                <form action="classes/move-student-process" id="move-student" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="new_class_arm_id">Move selected students to:</label>
                                                <select class="custom-select form-control select2" id="new_class_arm_id" name="new_class_arm_id" style="width: 100%" required>
                                                    <?php $class->get_classarm_select() ?>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="hidden" name="old_class_arm_name" value="<?php echo $classname ?>A">
                                        <input type="hidden" name="old_class_arm_id" value="170ac27a1b5177272">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Do
                                                    Move</button> <span class="processor"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <p>Select the students you intend to move, select the target class arm, then click
                                        on <i>"Do Move"</i></p>
                                    <div class="table-responsive" style="margin-top: 1em">
                                        <table class="table table-striped table-bordered color-table success-table stylish-table" width="100%">
                                            <thead>
                                                <tr role="row">
                                                    <th>#</th>
                                                    <th></th>
                                                    <th>Student Names</th>
                                                    <th>Username</th>
                                                    <th>Gender</th>
                                                    <th>House</th>
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
                                                    <td class="sn">1</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/aed066694513ce99d287" target="_blank">
                                                            <b>Ajulu </b> Chiemelie </a>
                                                    </td>
                                                    <td>FGGCON209437</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="7de3d8c745133d1c6927" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">2</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/e9e0c3c24514fb50ef25" target="_blank">
                                                            <b>Anthony</b> Precious Mmesoma </a>
                                                    </td>
                                                    <td>FGGCON202715</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="260162de451426d4607a" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">3</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/1f429c37451598710e7c" target="_blank">
                                                            <b>Anyaneto</b> Chidiebube Bethel </a>
                                                    </td>
                                                    <td>FGGCON201348</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="b5254c664515116e5167" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">4</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/583e1b394516043341cd" target="_blank">
                                                            <b>Chibuzor </b> Praise Chinyelu </a>
                                                    </td>
                                                    <td>FGGCON202781</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="368cede145161995f8c1" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">5</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/7e2279e345176373367a" target="_blank">
                                                            <b>Chigbo </b> Chinaza M </a>
                                                    </td>
                                                    <td>FGGCON201468</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="506f95854517dd95304e" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">6</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/1b4219724518f96e7816" target="_blank">
                                                            <b>Chukwu</b> Afoma Mathilda </a>
                                                    </td>
                                                    <td>FGGCON208935</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="469e9e144518cc8d7b6a" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">7</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/e02503334519671021a9" target="_blank">
                                                            <b>Chukwudumogu </b> Chigozirim Precious </a>
                                                    </td>
                                                    <td>FGGCON205378</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="be687dba45190cb34c56" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">8</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/3272be76452041077eb0" target="_blank">
                                                            <b>Chukwuemeka </b> Esther Chisom </a>
                                                    </td>
                                                    <td>FGGCON206931</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="bfa801e4452074a8e7a0" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">9</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/e5f17396452157510a3d" target="_blank">
                                                            <b>Ebubechukwu </b> Perpetua Chikamso </a>
                                                    </td>
                                                    <td>FGGCON203219</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="9e93087b45216500da35" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">10</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/a72faec645227c2fc6a6" target="_blank">
                                                            <b>Egwuatu </b> Kamaranachimdindu </a>
                                                    </td>
                                                    <td>FGGCON207149</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="28f381db4522bc6baea3" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">11</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/2abbff8a4523fbc91529" target="_blank">
                                                            <b>Ejiyi</b> Ebubechukwu Mirabel </a>
                                                    </td>
                                                    <td>FGGCON208235</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="10549cba45235cdd7fa4" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">12</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/9f49d2ee45247925f6ee" target="_blank">
                                                            <b>Ekenedilichukwu </b> Angel M. </a>
                                                    </td>
                                                    <td>FGGCON201834</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="9eaf27ae4524544aeaf1" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">13</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/cb66fab745255cf07540" target="_blank">
                                                            <b>Emeh-uzochukwu </b> Delight Chiemerie </a>
                                                    </td>
                                                    <td>FGGCON202684</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="0d3acb264525175d093c" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">14</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/dae596e045261576bf85" target="_blank">
                                                            <b>Emeka </b> Favour Amarachi </a>
                                                    </td>
                                                    <td>FGGCON208241</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="eff2d8bf45265d23ec40" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">15</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/844dbe0745279f56b0fe" target="_blank">
                                                            <b>Emenike </b> Chidimma Marycynthia </a>
                                                    </td>
                                                    <td>FGGCON207961</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="a9f89b484527122a011c" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">16</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/eed36471452839f404ce" target="_blank">
                                                            <b>Ezika </b> Munachimso Nicole </a>
                                                    </td>
                                                    <td>FGGCON204967</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="c0f4933f452861dccac8" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">17</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/383a2a1e4529305a66be" target="_blank">
                                                            <b>Ibeawuchi </b> Favour-claire Chisom </a>
                                                    </td>
                                                    <td>FGGCON209162</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="e0cad14e45299881d102" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">18</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/909be9544530f6859ce7" target="_blank">
                                                            <b>Ike-eze</b> Chisom Augusta </a>
                                                    </td>
                                                    <td>FGGCON201684</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="9d4b2e0e4530cf97de08" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">19</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/3486f4034531e99cf192" target="_blank">
                                                            <b>Ikechukwu </b> Chioma Victory </a>
                                                    </td>
                                                    <td>FGGCON209158</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="3dde1498453128c9d2da" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">20</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/3acc57084532ff1e2fba" target="_blank">
                                                            <b>Mbakwe </b> Angela Chinemerem </a>
                                                    </td>
                                                    <td>FGGCON202439</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="7dc01c4f45324f141a69" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">21</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/053e2bcf4533110bdbf7" target="_blank">
                                                            <b>Mozie </b> Chidera Stephine </a>
                                                    </td>
                                                    <td>FGGCON205763</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="d6197b9445337d9d1244" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">22</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/3c04fab94534d9e21f38" target="_blank">
                                                            <b>Muolokwu </b> Chisom Lorrita </a>
                                                    </td>
                                                    <td>FGGCON204768</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="e758a4bd4534874f23a4" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">23</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/41b0f43b4535f68d0f2e" target="_blank">
                                                            <b>Ndubuisi</b> Vivian M </a>
                                                    </td>
                                                    <td>FGGCON202954</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="32af9903453516fb50d5" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">24</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/01a595624536574a9393" target="_blank">
                                                            <b>Nnaji-okafor </b> Vanessa Chibundom </a>
                                                    </td>
                                                    <td>FGGCON205728</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="df2f305245362585841d" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">25</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/3dd81b2545371ce17f2d" target="_blank">
                                                            <b>Nweke </b> Dorathy Uchechukwu </a>
                                                    </td>
                                                    <td>FGGCON202849</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="77f6c54a453752ae339a" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">26</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/abb3365a453870277cba" target="_blank">
                                                            <b>Obi </b> Somkene Confidence </a>
                                                    </td>
                                                    <td>FGGCON203496</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="c93b100e4538020355e8" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">27</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/8f02d83a4539446caebc" target="_blank">
                                                            <b>Odinwamkpa</b> Chiamaka Blessing </a>
                                                    </td>
                                                    <td>FGGCON205284</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="9327c56a4539275e598b" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">28</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/fe60a46d4540d71983f7" target="_blank">
                                                            <b>Oduche </b> Chukwumuanya </a>
                                                    </td>
                                                    <td>FGGCON209372</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="67e54b8f45407bf57fd1" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">29</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/ba0802b94541c0952007" target="_blank">
                                                            <b>Ogidi </b> Precious </a>
                                                    </td>
                                                    <td>FGGCON206345</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="d32097b245416b9b08c3" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">30</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/739e559f4542463cd517" target="_blank">
                                                            <b>Okafor </b> Adaeze Precious </a>
                                                    </td>
                                                    <td>FGGCON201245</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="fef9da9845422b5b5db3" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">31</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/48a381ff454398da615d" target="_blank">
                                                            <b>Okolie </b> Mmesoma Sylvia </a>
                                                    </td>
                                                    <td>FGGCON208439</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="d5b7b7fc4543211dc51a" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">32</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/c986b4544544615fa448" target="_blank">
                                                            <b>Okoye </b> Chinenye Esther </a>
                                                    </td>
                                                    <td>FGGCON202817</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="b54641874544ed155979" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">33</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/b7be60304545316ebfc9" target="_blank">
                                                            <b>Okpala </b> Cynthia Onyinyechukwu </a>
                                                    </td>
                                                    <td>FGGCON201594</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="d07ac12145450a971929" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">34</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/a231e66245465f7558a1" target="_blank">
                                                            <b>Okwulehie</b> Precious Amarachukwu </a>
                                                    </td>
                                                    <td>FGGCON201345</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="7ac0147f4546a49d7766" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">35</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/38382b134547b4e40e50" target="_blank">
                                                            <b>Olisaeke </b> Chiamaka Maryann </a>
                                                    </td>
                                                    <td>FGGCON204915</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="e1be5faf45476a450490" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">36</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/90bed51545489b9882d4" target="_blank">
                                                            <b>Onosike </b> Chisimdi Favour </a>
                                                    </td>
                                                    <td>FGGCON206954</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="ed0bd2a64548e35c4c70" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">37</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/9b0df17c45492b3b4e7c" target="_blank">
                                                            <b>Onubogu </b> Angel Nneoma </a>
                                                    </td>
                                                    <td>FGGCON202759</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="3516126f4549ec792ece" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">38</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/af7329864550120a738f" target="_blank">
                                                            <b>Onuorah </b> Ejindu Ifeoma </a>
                                                    </td>
                                                    <td>FGGCON208367</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="aef0977f455082a41162" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">39</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/ecd49f31455108ce5fda" target="_blank">
                                                            <b>Ozoude </b> Blessing Ezinne </a>
                                                    </td>
                                                    <td>FGGCON201538</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="5f14b7bc4551012774b2" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">40</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/44209dea4552c4d219d5" target="_blank">
                                                            <b>Paul </b> Adaoma Favour </a>
                                                    </td>
                                                    <td>FGGCON203689</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="4287a9d84552049a632e" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">41</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/4c93e18145533c308f28" target="_blank">
                                                            <b>Paul-nwakudu </b> Chioma Stephenie </a>
                                                    </td>
                                                    <td>FGGCON204126</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="090bf8ed45531a10e516" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">42</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/84c0076b4554d54e9769" target="_blank">
                                                            <b>Sunday </b> Sylvia Kosisochukwu </a>
                                                    </td>
                                                    <td>FGGCON205147</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="a8f1d3b1455472d387d1" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">43</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/4a1575514555796c643f" target="_blank">
                                                            <b>Uchendu </b> Chioma Faustina </a>
                                                    </td>
                                                    <td>FGGCON204167</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="29130eef4555f62c1ddd" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">44</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/f438a872455636f767fd" target="_blank">
                                                            <b>Udeh </b> Mmesoma Favour </a>
                                                    </td>
                                                    <td>FGGCON205716</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="017d85234556ad3c157e" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">45</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/31817676455713535521" target="_blank">
                                                            <b>Uzoma </b> Chisimdi Favour </a>
                                                    </td>
                                                    <td>FGGCON203982</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="b98b76db4557f97346e4" class="chk">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td class="sn">46</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/411cc7cc4512f104e174" target="_blank">
                                                            <b>﻿aga </b> Chizaram Elizabeth </a>
                                                    </td>
                                                    <td>FGGCON204251</td>
                                                    <td>
                                                        Female </td>
                                                    <td>
                                                        <span class="label label-light-warning">unspecified</span>
                                                    </td>
                                                    <td>
                                                        <div class="switch">
                                                            <label>
                                                                <input name="stud_id[]" type="checkbox" value="add4ead34512c37cfd8d" class="chk">
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
                </div>

                <script>
                    $('#move-student').submit(function(e) {
                        e.preventDefault();

                        var class_arm_name = $('#new_class_arm_id option:selected').text();
                        var count_stud = $('input:checkbox:checked.chk').length;

                        if (count_stud > 0) {
                            swal({
                                title: "Are you sure?",
                                text: "You want to move " + count_stud + " student(s) to " + class_arm_name + "??",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#13aa2c",
                                confirmButtonText: "Yes, proceed!"
                            }, function() {
                                var jqxhr = submit_form('#move-student');
                                jqxhr.done(function(result) {
                                    if (result.type === 'success') {
                                        $('input:checkbox:checked.chk').parent().parent().parent().parent().fadeOut(2000, function() {
                                            $(this).remove();
                                            //Reorder table numbering after removing some row
                                            $('.sn').each(function(i) {
                                                $(this).text(i + 1);
                                            });

                                            //If all table rows are removed, append this...
                                            if ($('td').length < 1) {
                                                $("tbody").append('<tr><td colspan="7"><i>No student in this class</i></td></tr>');
                                            }
                                        });
                                    }
                                });
                            });
                        }
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