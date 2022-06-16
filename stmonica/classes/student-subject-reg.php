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
                            Student Subject Registration<?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">students subject reg</li>
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
                                        <a href="staff/staff-profile/ed50ea392eca994d2">
                                            <img src="uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?> <form action="classes/student-subject-registration-process" id="register-subj" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="subj">Select Subject</label>
                                                <select name="subject_id" id="subjt" class="custom-select form-control select2" required>
                                                    <option></option>
                                                    <option value="2">Skills Development Class (art)</option>
                                                    <option value="1">Skills Development Class (general)</option>
                                                    <option value="3">Skills Development Class (science)</option>
                                                </select>
                                                <input type="hidden" name="class_arm_id" value="170ac27a1b5177272">
                                                <input type="hidden" name="session_id" value="d6fd49ad137f5edbe4">
                                                <input type="hidden" name="session_name" value="First Term 2020/2021">
                                                <input type="hidden" name="class_arm_name" value="JSS 1A">
                                                <input type="hidden" name="subject_name" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group text-right">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10" disabled>Submit Changes</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <span class="processor"><img src="assets/img/giphy.gif" width="30" height="30"></span>

                                        <table class="table table-striped table-bordered color-table success-table" id="resp-table" style="display: none" width="100%">
                                            <thead>
                                                <tr role="row">
                                                    <th>#</th>
                                                    <th></th>
                                                    <th>Student Name</th>
                                                    <th>Username</th>
                                                    <th>
                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" id="chk-all" onclick="check_all(this)">
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
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ajulu </b> Chiemelie </td>
                                                    <td>FGGCON209437</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4513]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4513]" value="1" class="chk" id="4513">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">2</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Anthony</b> Precious Mmesoma</td>
                                                    <td>FGGCON202715</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4514]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4514]" value="1" class="chk" id="4514">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">3</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Anyaneto</b> Chidiebube Bethel</td>
                                                    <td>FGGCON201348</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4515]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4515]" value="1" class="chk" id="4515">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">4</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Chibuzor </b> Praise Chinyelu</td>
                                                    <td>FGGCON202781</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4516]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4516]" value="1" class="chk" id="4516">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">5</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Chigbo </b> Chinaza M</td>
                                                    <td>FGGCON201468</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4517]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4517]" value="1" class="chk" id="4517">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">6</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Chukwu</b> Afoma Mathilda</td>
                                                    <td>FGGCON208935</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4518]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4518]" value="1" class="chk" id="4518">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">7</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Chukwudumogu </b> Chigozirim Precious</td>
                                                    <td>FGGCON205378</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4519]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4519]" value="1" class="chk" id="4519">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">8</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Chukwuemeka </b> Esther Chisom</td>
                                                    <td>FGGCON206931</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4520]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4520]" value="1" class="chk" id="4520">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">9</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ebubechukwu </b> Perpetua Chikamso</td>
                                                    <td>FGGCON203219</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4521]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4521]" value="1" class="chk" id="4521">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">10</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Egwuatu </b> Kamaranachimdindu </td>
                                                    <td>FGGCON207149</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4522]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4522]" value="1" class="chk" id="4522">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">11</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ejiyi</b> Ebubechukwu Mirabel</td>
                                                    <td>FGGCON208235</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4523]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4523]" value="1" class="chk" id="4523">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">12</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ekenedilichukwu </b> Angel M.</td>
                                                    <td>FGGCON201834</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4524]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4524]" value="1" class="chk" id="4524">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">13</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Emeh-uzochukwu </b> Delight Chiemerie</td>
                                                    <td>FGGCON202684</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4525]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4525]" value="1" class="chk" id="4525">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">14</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Emeka </b> Favour Amarachi</td>
                                                    <td>FGGCON208241</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4526]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4526]" value="1" class="chk" id="4526">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">15</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Emenike </b> Chidimma Marycynthia</td>
                                                    <td>FGGCON207961</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4527]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4527]" value="1" class="chk" id="4527">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">16</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ezika </b> Munachimso Nicole</td>
                                                    <td>FGGCON204967</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4528]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4528]" value="1" class="chk" id="4528">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">17</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ibeawuchi </b> Favour-claire Chisom</td>
                                                    <td>FGGCON209162</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4529]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4529]" value="1" class="chk" id="4529">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">18</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ike-eze</b> Chisom Augusta</td>
                                                    <td>FGGCON201684</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4530]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4530]" value="1" class="chk" id="4530">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">19</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ikechukwu </b> Chioma Victory</td>
                                                    <td>FGGCON209158</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4531]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4531]" value="1" class="chk" id="4531">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">20</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Mbakwe </b> Angela Chinemerem</td>
                                                    <td>FGGCON202439</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4532]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4532]" value="1" class="chk" id="4532">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">21</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Mozie </b> Chidera Stephine</td>
                                                    <td>FGGCON205763</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4533]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4533]" value="1" class="chk" id="4533">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">22</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Muolokwu </b> Chisom Lorrita</td>
                                                    <td>FGGCON204768</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4534]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4534]" value="1" class="chk" id="4534">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">23</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ndubuisi</b> Vivian M</td>
                                                    <td>FGGCON202954</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4535]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4535]" value="1" class="chk" id="4535">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">24</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Nnaji-okafor </b> Vanessa Chibundom</td>
                                                    <td>FGGCON205728</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4536]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4536]" value="1" class="chk" id="4536">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">25</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Nweke </b> Dorathy Uchechukwu</td>
                                                    <td>FGGCON202849</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4537]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4537]" value="1" class="chk" id="4537">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">26</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Obi </b> Somkene Confidence</td>
                                                    <td>FGGCON203496</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4538]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4538]" value="1" class="chk" id="4538">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">27</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Odinwamkpa</b> Chiamaka Blessing</td>
                                                    <td>FGGCON205284</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4539]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4539]" value="1" class="chk" id="4539">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">28</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Oduche </b> Chukwumuanya </td>
                                                    <td>FGGCON209372</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4540]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4540]" value="1" class="chk" id="4540">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">29</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ogidi </b> Precious </td>
                                                    <td>FGGCON206345</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4541]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4541]" value="1" class="chk" id="4541">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">30</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Okafor </b> Adaeze Precious</td>
                                                    <td>FGGCON201245</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4542]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4542]" value="1" class="chk" id="4542">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">31</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Okolie </b> Mmesoma Sylvia</td>
                                                    <td>FGGCON208439</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4543]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4543]" value="1" class="chk" id="4543">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">32</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Okoye </b> Chinenye Esther</td>
                                                    <td>FGGCON202817</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4544]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4544]" value="1" class="chk" id="4544">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">33</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Okpala </b> Cynthia Onyinyechukwu</td>
                                                    <td>FGGCON201594</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4545]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4545]" value="1" class="chk" id="4545">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">34</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Okwulehie</b> Precious Amarachukwu</td>
                                                    <td>FGGCON201345</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4546]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4546]" value="1" class="chk" id="4546">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">35</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Olisaeke </b> Chiamaka Maryann</td>
                                                    <td>FGGCON204915</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4547]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4547]" value="1" class="chk" id="4547">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">36</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Onosike </b> Chisimdi Favour</td>
                                                    <td>FGGCON206954</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4548]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4548]" value="1" class="chk" id="4548">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">37</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Onubogu </b> Angel Nneoma</td>
                                                    <td>FGGCON202759</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4549]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4549]" value="1" class="chk" id="4549">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">38</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Onuorah </b> Ejindu Ifeoma</td>
                                                    <td>FGGCON208367</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4550]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4550]" value="1" class="chk" id="4550">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">39</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Ozoude </b> Blessing Ezinne</td>
                                                    <td>FGGCON201538</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4551]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4551]" value="1" class="chk" id="4551">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">40</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Paul </b> Adaoma Favour</td>
                                                    <td>FGGCON203689</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4552]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4552]" value="1" class="chk" id="4552">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">41</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Paul-nwakudu </b> Chioma Stephenie</td>
                                                    <td>FGGCON204126</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4553]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4553]" value="1" class="chk" id="4553">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">42</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Sunday </b> Sylvia Kosisochukwu</td>
                                                    <td>FGGCON205147</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4554]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4554]" value="1" class="chk" id="4554">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">43</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Uchendu </b> Chioma Faustina</td>
                                                    <td>FGGCON204167</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4555]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4555]" value="1" class="chk" id="4555">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">44</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Udeh </b> Mmesoma Favour</td>
                                                    <td>FGGCON205716</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4556]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4556]" value="1" class="chk" id="4556">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">45</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>Uzoma </b> Chisimdi Favour</td>
                                                    <td>FGGCON203982</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4557]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4557]" value="1" class="chk" id="4557">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sn">46</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" width="40" class="img-circle" />
                                                    </td>
                                                    <td><b>﻿aga </b> Chizaram Elizabeth</td>
                                                    <td>FGGCON204251</td>
                                                    <td>
                                                        <input type="hidden" name="reg_data[4512]" value="0">

                                                        <div class="switch">
                                                            <label>
                                                                <input type="checkbox" name="reg_data[4512]" value="1" class="chk" id="4512">
                                                                <span class="lever switch-col-light-blue"></span>
                                                            </label>
                                                        </div>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10" disabled>Submit Changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    var reg_data;

                    var xhr = get_request(site_url + 'classes/student-subject-reg-data/d6fd49ad137f5edbe4/170ac27a1b5177272', true);
                    xhr.done(function(result) {
                        if (result.type === 'success') {
                            reg_data = result.reg_data;

                            $('.processor').remove();
                            $('#resp-table').fadeIn();
                        }
                    });

                    $('#subj').change(function() {
                        $('input[type=checkbox]').prop('checked', false);
                        $('input[name=subject_name]').val($('#subj option:selected').text());

                        var subj_id = $(this).val();
                        if (subj_id) {

                            var subj_reg = reg_data[subj_id];
                            if (subj_reg !== undefined) {
                                subj_reg.forEach(function(stud_id) {
                                    $('input#' + stud_id).prop('checked', true);
                                });
                            }

                            if ($('input:checkbox:not(:checked).chk').length < 1) {
                                $('#chk-all').prop('checked', true);
                            }

                            $('button[type=submit]').prop('disabled', false);
                        } else {
                            $('button[type=submit]').prop('disabled', true);
                        }
                    });

                    $('#register-subj').submit(function(e) {
                        e.preventDefault();
                        var xhr = submit_form2(this);
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                reg_data = result.reg_data;
                            }
                        });
                    })
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
        <?php include('../layout/script.php') ?>
        <!-- ============================================================== -->
</body>

</html>