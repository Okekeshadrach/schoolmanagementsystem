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
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Class Teachers</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Teachers</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">

                            <form action="classes/class-teacher-delete" id="delete-class-teacher" method="post"
                                accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <p>See below, list of all class teachers on the portal</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <button type="submit"
                                                class="btn btn-primary btn-rounded waves-effect waves-light"
                                                id="unassign" disabled>Unassign Selected</button>
                                            <span class="processor"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-responsive" id="resp-div">
                                    <table
                                        class="table table-striped table-bordered color-table success-table stylish-table"
                                        id="resp-table" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
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
                                            <tr>
                                                <td class="sn">1</td>
                                                <td>
                                                    <a href="classes/manage-students/bfa345d3136cc1c4fb/43a1269318942f9a3"
                                                        target="_blank" class="text-info">
                                                        JSS 1A </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/a40ce25d2d67e6c62" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 04:00 PM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="260dd39e46a2d82c8f" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">2</td>
                                                <td>
                                                    <a href="classes/manage-students/f182c081131fe29a6f/c7c6102d2391fcadd"
                                                        target="_blank" class="text-info">
                                                        JSS 1B </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/f52a02e42ce221fc7" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 04:00 PM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="79bbba2247a79441e9" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">3</td>
                                                <td>
                                                    <a href="classes/manage-students/6de1de2313e7e87b4b/ca943f8f36dcac003"
                                                        target="_blank" class="text-info">
                                                        JSS 1C </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/1bfdf1042048d91c5" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 04:00 PM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="da91a312487498ee72" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">4</td>
                                                <td>
                                                    <a href="classes/manage-students/d49e23b113c9c382cc/bea02aea10c4df085c"
                                                        target="_blank" class="text-info">
                                                        JSS 2A </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/dccc8ff12c234b932" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:05 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="007ff38010576c6594" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">5</td>
                                                <td>
                                                    <a href="classes/manage-students/739369401328e53863/cd21c76a115125b437"
                                                        target="_blank" class="text-info">
                                                        JSS 2B </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/6c7da4c4234fb6d93" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:06 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="bd58b7ea11a69d038c" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">6</td>
                                                <td>
                                                    <a href="classes/manage-students/b6791de91384be3d41/46bdb12f1275b96202"
                                                        target="_blank" class="text-info">
                                                        JSS 2C </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/42fef8db29f95c47b" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:06 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="a3ea745312fc73c9e5" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">7</td>
                                                <td>
                                                    <a href="classes/manage-students/eb0ada2013101526b1/22e1e3ab13f677f74a"
                                                        target="_blank" class="text-info">
                                                        JSS 2D </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/c1285fca26119ba61" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:06 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="fc6abf7b1361249705" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">8</td>
                                                <td>
                                                    <a href="classes/manage-students/6b29a5b61365e5721a/f26605cd14cfa45151"
                                                        target="_blank" class="text-info">
                                                        JSS 2E </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/6213e7b527b90fd4b" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:06 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="0506f1c614fcfa4ed1" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">9</td>
                                                <td>
                                                    <a href="classes/manage-students/5d1d02871336251133/088d76f71512b7ca09"
                                                        target="_blank" class="text-info">
                                                        JSS 2G </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/bad245e5220a7bcec" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:06 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="26ace1ce15d5df1e62" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">10</td>
                                                <td>
                                                    <a href="classes/manage-students/23218ef813e14d9cca/4c1fc9aa16f902269b"
                                                        target="_blank" class="text-info">
                                                        JSS 2H </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/9562d7ac2b81dc2c2" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:07 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="a4f07c451618f5dff1" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">11</td>
                                                <td>
                                                    <a href="classes/manage-students/b1d8612113ca193ca6/7d84e966175cf1a76e"
                                                        target="_blank" class="text-info">
                                                        JSS 2J </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/3520ebb226d0f0256" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:07 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="374f23271721daed81" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">12</td>
                                                <td>
                                                    <a href="classes/manage-students/88c20f791307275a4e/1696e27e18b59ffbc4"
                                                        target="_blank" class="text-info">
                                                        JSS 2K </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/12a8d0fb2692a8b41" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Nnamdi Francis </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:07 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="876dccb718c22211c9" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">13</td>
                                                <td>
                                                    <a href="classes/manage-students/8ae403a813e1c80f20/f621b72928c1f61d8f"
                                                        target="_blank" class="text-info">
                                                        SS 2A </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/88d5aefd124033176" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Fawole John Oluwaseyi </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:14 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="7f91c6cc2888aa95d6" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">14</td>
                                                <td>
                                                    <a href="classes/manage-students/5eba56ff139b84ccb5/0854545029616b697f"
                                                        target="_blank" class="text-info">
                                                        SS 2B </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/e9e05da711e02b7e2" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Fawole John Oluwaseyi </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:21 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="49b75bac450f31a90a" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">15</td>
                                                <td>
                                                    <a href="classes/manage-students/6b6fa1491336c69d12/b7679c7130e90a5983"
                                                        target="_blank" class="text-info">
                                                        SS 2C </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/d299a9201467092f5" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Fawole John Oluwaseyi </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:15 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="84eb65dc29deb91d78" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">16</td>
                                                <td>
                                                    <a href="classes/manage-students/d9ef514c1366508b4c/a93c358731174dac4f"
                                                        target="_blank" class="text-info">
                                                        SS 2D </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/a198c1291f8b8d097" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Fawole John Oluwaseyi </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:15 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="32df38d1307339140c" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">17</td>
                                                <td>
                                                    <a href="classes/manage-students/a4051f0a13710f2856/e53c18a0326f38100d"
                                                        target="_blank" class="text-info">
                                                        SS 2E </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/9d8cc04d1b70f7d95" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Fawole John Oluwaseyi </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:15 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="e0ffa9ae31b44e7dd5" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">18</td>
                                                <td>
                                                    <a href="classes/manage-students/257c3b2d135f479bbb/46dca4b333953343ef"
                                                        target="_blank" class="text-info">
                                                        SS 2G </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/99889b831e2b7e5e5" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Fawole John Oluwaseyi </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:16 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="178a884732b2b7f6ae" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">19</td>
                                                <td>
                                                    <a href="classes/manage-students/cec73f7b132f8f38fc/f52403ca3404e60019"
                                                        target="_blank" class="text-info">
                                                        SS 2H </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/d44cc6381b0683313" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Fawole John Oluwaseyi </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:16 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="1087252233dbf0f609" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">20</td>
                                                <td>
                                                    <a href="classes/manage-students/0eba39b813ae0bf1de/ee087215353202eb6e"
                                                        target="_blank" class="text-info">
                                                        SS 2J </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/2c18b2631839fa00e" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Fawole John Oluwaseyi </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:17 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="0aab72eb3403a65b3c" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">21</td>
                                                <td>
                                                    <a href="classes/manage-students/85261e1213c48d3b9e/30c1e24d365e1d2277"
                                                        target="_blank" class="text-info">
                                                        SS 2K </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/ae618c0a13ac934db" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Fawole John Oluwaseyi </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:17 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="752452ba357cc7dd6b" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">22</td>
                                                <td>
                                                    <a href="classes/manage-students/5a022f2e139bc8876f/79b9020e37015ce74b"
                                                        target="_blank" class="text-info">
                                                        SS 3A </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/0ef04996479f4435e" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Henry Ebuka </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:18 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="440329a836c55b872e" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">23</td>
                                                <td>
                                                    <a href="classes/manage-students/ee2aa86213ab8573c3/198db6c338d41522d2"
                                                        target="_blank" class="text-info">
                                                        SS 3B </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/be015575409c2b9dc" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Henry Ebuka </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:18 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="7751392c376201006c" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">24</td>
                                                <td>
                                                    <a href="classes/manage-students/9f98b5d1131c228c33/ce6fde0d3987c0d9ce"
                                                        target="_blank" class="text-info">
                                                        SS 3C </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/05be4aed42789c512" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Henry Ebuka </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:18 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="04eab50838061b14e4" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">25</td>
                                                <td>
                                                    <a href="classes/manage-students/117ed8851307f11e30/5ee28e7b40c33c97f2"
                                                        target="_blank" class="text-info">
                                                        SS 3D </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/1551a87640714b6bb" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Henry Ebuka </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:19 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="1224a67739c6e60e22" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">26</td>
                                                <td>
                                                    <a href="classes/manage-students/170a19c41380963328/4f929b3b413eccee9c"
                                                        target="_blank" class="text-info">
                                                        SS 3E </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/383055eb4a96940b0" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Henry Ebuka </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:19 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="0fb630b8408017e1dc" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">27</td>
                                                <td>
                                                    <a href="classes/manage-students/049d95db132207ed9e/379719b542b36cba07"
                                                        target="_blank" class="text-info">
                                                        SS 3G </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/a33074ce429bfaf13" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Henry Ebuka </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:19 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="b6a1183e41c0c0d016" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">28</td>
                                                <td>
                                                    <a href="classes/manage-students/f913deb7135ca48602/ffceeb6b43afc0d0f7"
                                                        target="_blank" class="text-info">
                                                        SS 3H </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/bd37430a4d3817710" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Henry Ebuka </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:20 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="48de8c7b4288fea0b7" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">29</td>
                                                <td>
                                                    <a href="classes/manage-students/998fa71c13d57562af/da04109e443c53406e"
                                                        target="_blank" class="text-info">
                                                        SS 3J </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/08bc2f6f447fc8938" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Henry Ebuka </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:20 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="bee3ded4430a9fdbb1" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="sn">30</td>
                                                <td>
                                                    <a href="classes/manage-students/b5335a2b13ad5184e7/a8534fc7452583540e"
                                                        target="_blank" class="text-info">
                                                        SS 3K </a>
                                                </td>
                                                <td>
                                                    <a href="staff/staff-profile/94f1479b45b98797a" target="_blank">
                                                        <img src="uploads/nobody_m.jpg" width="50" class="img-circle" />
                                                        Obinozie Henry Ebuka </a>
                                                </td>
                                                <td>Nov 11, 2016 at 11:20 AM</td>
                                                <td>
                                                    <div class="switch">
                                                        <label>
                                                            <input name="data_id[]" type="checkbox"
                                                                value="d7f5216c448a77c37a" class="chk">
                                                            <span class="lever switch-col-light-blue"></span>
                                                        </label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <input type="hidden" name="class_name" id="class_name" value="">
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    $('input[type=checkbox]').click(function () {
                        count_checked_rows = $('input:checkbox:checked.chk').length;
                        if (count_checked_rows > 0) {
                            $('#unassign').removeAttr('disabled');
                        } else {
                            $('#unassign').attr('disabled', 'disabled');
                        }
                    });

                    //===== Run when user attempts to delete a grade config ==============
                    $('#unassign').click(function (e) {
                        e.preventDefault();
                        swal({
                            title: "Are you sure?",
                            text: "Your action will unassign the selected staff from their respective classes. \nDo you really want to continue?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function (isConfirm) {
                            if (isConfirm) {
                                var xhr = submit_form('#delete-class-teacher');
                                xhr.done(function (result) {
                                    if (result.type === 'success') {
                                        $('input:checkbox:checked.chk').parent().parent().parent().parent().fadeOut(2000, function () {
                                            $(this).remove();
                                            $('.sn').each(function (i) {
                                                $(this).text(i + 1);
                                            });
                                            $('#unassign').attr('disabled', 'disabled');
                                        });
                                    }
                                });
                            }
                        });
                    });
        //====================================================================
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