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
                            Withdraw Students in <?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Withdraw students</li>
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
                                        <a href="staff/staff-profile/796ab57d2f5951d20">
                                            <img src="uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>
                                <form action="classes/withdraw-student-process" id="withdraw-student" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="reason">Why do you want to withdraw the selected
                                                    student(s)?</label>
                                                <input type="text" class="form-control" name="reason" id="reason" required>
                                                <input type="hidden" name="class_arm_id" value="170ac27a1b5177272">
                                                <input type="hidden" name="class_arm_name" value="JSS 1A">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Do
                                                    Withdraw</button> <span class="processor"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <p>Select the students you intend to withdraw from the school, state the reason,
                                        then click on <i>"Do Withdraw"</i></p>
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
                                                        <a class="text-info" href="student/student-profile/dcd154574513c1b4ee17" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="959d458b4513dd6e6339" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/56132780451493fd69b9" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="72abcd0c4514d4cbe34d" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/051ee5e745151b0814b5" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="ee59a89b451593546959" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/1d78c8104516ac77eb98" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="0df44ed0451613355498" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/e501262b45173f7d2a56" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="4235b96b4517d821b25c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/fb01e94a4518071a3b94" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="7ed2d9b745181fc8f926" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/447096d14519ca0a73ec" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="86944c0d4519beec0c3a" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/92fb24d94520eedbfb97" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="ffb21b9d45209c29459d" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/6135805f45219b78f443" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="33f63067452157e3bdbd" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/e5793b0845221bedba2c" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="8fe1938d4522b54457bd" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/2b9a94e94523112a8e92" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="8d8eb6dd452369b94986" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/28339aa7452465cd88a8" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="122b96624524af091d2c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/6b095cb245254e13f715" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="7afc706245254ca71508" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/bd2eb11f4526b2415372" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="219cc6dc45268bd18bf1" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/205df52e4527cef33c33" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="974e8f824527f19cfce9" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/15dd2f2a4528b800f6b1" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="4acc698a45284ecfdaee" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/e2716a9a4529159a766b" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="95f544154529605f8692" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/f0f87b2a4530f7dde994" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="7f40ac514530ccbdbe93" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/414e0dfb4531dba2d2be" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="b3029069453132ec1718" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/99a9c91345326508d81b" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="d6b578224532ab69c6f1" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/032c4dac453337d30456" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="594df5ed4533d7a3337c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/6364c4a94534f7b84319" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="42b3a0354534cc696761" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/6b4b866a4535747aae51" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="c1353035453596f6d769" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/f449104145366ec98254" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="8246602d453641239fe7" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/e9bc2e764537cfe12d07" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="7a35ea6b4537323e9ac9" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/db0b45474538325ac49c" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="b61548694538ad54c0e9" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/a7c08b1b4539bb08a1b5" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="df50fabc45393a03037f" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/f1bdb4da4540e971d3ed" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="1780079c4540e23c5979" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/8e435489454173da52d0" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="68c479d045410af0a46b" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/5a460d084542c3aa90f8" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="b08ba36645423c0aecc1" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/a1531f8e45433ab29b1c" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="e3921ad24543858cd112" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/39a6fffc4544f28e3ab8" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="bf6c26464544801f802b" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/300a8fce4545e53869b5" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="daa5c79945450d708f4e" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/3af93ca545466e69ebbf" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="edffa7904546cb5ea82f" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/2940683e4547f1009e78" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="bf6affd1454795fde09f" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/dee2f0f945480c971197" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="3d5f0b924548af8026c1" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/b4fa95a945496bd317c7" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="4f6d66f74549c81e0006" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/b6916329455083d2d20b" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="d0bff5674550da32f4a8" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/da8802c445510b5e3444" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="b762287b4551d6059898" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/759669cf4552e6736afb" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="0b099bd745527d1927cb" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/e6f78b1945534996855d" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="f48dd9fe45530ae5907c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/4e352649455412e1bd00" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="fab321c845546dbf9d2c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/603df05145553973b284" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="26c236094555ab8ce122" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/1b2de40e4556e0e51cc7" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="8ca01b7f4556ed03ae74" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/4750a0f94557c150c0db" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="bbe7960145574f7b6aaa" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/b056be194512f547e791" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="2a65ac004512fb27b38c" class="chk">
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
                    $('#withdraw-student').submit(function(e) {
                        e.preventDefault();

                        var class_arm_name = $('#new_class_arm_id option:selected').text();
                        var count_stud = $('input:checkbox:checked.chk').length;

                        if (count_stud > 0) {
                            swal({
                                title: "Are you sure?",
                                text: "You want to withdraw " + count_stud + " student(s) from the school??",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#13aa2c",
                                confirmButtonText: "Yes, proceed!"
                            }, function() {
                                var jqxhr = submit_form('#withdraw-student');
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
                                            $('#reason').val('');
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