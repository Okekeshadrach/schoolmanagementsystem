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
            <!-- =======================  This page styles =================== ---->
            <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
            <!-- =======================  This page styles =================== ---->

            <style>
                .field {
                    min-width: 10em
                }
            </style>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">
                            Bulk Bio Update - <?php echo $classarm_name ?> Students
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Bulk bio update</li>
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
                                        <a href="../staff/staff-profile/724de4cb223f29772">
                                            <img src="../../uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>
                                <p>Here, you can update the information of any/all members of this class. Make your updates and then click on <i>"Save changes"</i></p>

                                <form action="../classes/bulk-bio-update-process/8f1fee3f1f8e69b0a" id="bulk-bio" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save Changes</button> <span class="processor"></span>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="tablesaw table-bordered table-hover table stylish-table table-striped color-table success-table" data-tablesaw-mode="stack" width="100%">
                                            <thead>
                                                <tr>
                                                    <th class="sn">#</th>
                                                    <th></th>
                                                    <th class="field">Student Name</th>
                                                    <th class="field admno">Admission No.</th>
                                                    <th class="field email">Email</th>
                                                    <th class="field phone">Phone</th>
                                                    <th class="field address">Address</th>
                                                    <th class="field dob">D.O.B</th>
                                                    <th class="field sex">Sex</th>
                                                    <th class="field state">State</th>
                                                    <th class="field lga">L.G.A</th>
                                                    <th class="field house">House</th>
                                                    <th class="field res">Residence</th>
                                                    <th class="field geno">Genotype</th>
                                                    <th class="field relig">Religion</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr class="record" data-id="f08de60f9361f8e59f4b">
                                                    <td>1</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/f3c4be6a451324ee1993" target="_blank">
                                                            Ajulu Chiemelie </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4513][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4513][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4513][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4513][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4513][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4513][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4513][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4513][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4513][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4513][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4513][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4513][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="2bf51f029362342bd271">
                                                    <td>2</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/a26c037d45141adbbb37" target="_blank">
                                                            Anthony Precious Mmesoma </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4514][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4514][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4514][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4514][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4514][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4514][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4514][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4514][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4514][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4514][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4514][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4514][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="c0167a4a9363658d6ebc">
                                                    <td>3</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/84eb2c6e4515654c51f5" target="_blank">
                                                            Anyaneto Chidiebube Bethel </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4515][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4515][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4515][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4515][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4515][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4515][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4515][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4515][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4515][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4515][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4515][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4515][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="4ad4383b9364d2dd80e9">
                                                    <td>4</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/10de5a5c4516ff18bc23" target="_blank">
                                                            Chibuzor Praise Chinyelu </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4516][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4516][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4516][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4516][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4516][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4516][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4516][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4516][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4516][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4516][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4516][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4516][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="fc8b95569365544bd44d">
                                                    <td>5</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/c3aef3c8451714ede38e" target="_blank">
                                                            Chigbo Chinaza M </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4517][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4517][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4517][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4517][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4517][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4517][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4517][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4517][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4517][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4517][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4517][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4517][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="75ae7d8593663d57893f">
                                                    <td>6</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/e330bc5945181398759f" target="_blank">
                                                            Chukwu Afoma Mathilda </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4518][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4518][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4518][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4518][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4518][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4518][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4518][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4518][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4518][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4518][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4518][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4518][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="20c7e998936761a75dbd">
                                                    <td>7</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/7a526f394519a7f8c721" target="_blank">
                                                            Chukwudumogu Chigozirim Precious </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4519][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4519][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4519][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4519][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4519][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4519][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4519][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4519][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4519][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4519][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4519][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4519][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="551212649368e31afa33">
                                                    <td>8</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/c5476b3d4520d268a1b8" target="_blank">
                                                            Chukwuemeka Esther Chisom </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4520][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4520][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4520][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4520][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4520][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4520][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4520][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4520][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4520][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4520][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4520][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4520][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="7956e60b9369e76bc906">
                                                    <td>9</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/df2ba8c7452115203ad2" target="_blank">
                                                            Ebubechukwu Perpetua Chikamso </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4521][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4521][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4521][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4521][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4521][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4521][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4521][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4521][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4521][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4521][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4521][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4521][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="a100e66d9370976f63e8">
                                                    <td>10</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/67bba4aa45220d58f76d" target="_blank">
                                                            Egwuatu Kamaranachimdindu </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4522][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4522][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4522][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4522][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4522][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4522][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4522][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4522][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4522][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4522][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4522][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4522][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="a15f25d1937150b01c4a">
                                                    <td>11</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/ecdd1261452309b22f1a" target="_blank">
                                                            Ejiyi Ebubechukwu Mirabel </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4523][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4523][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4523][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4523][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4523][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4523][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4523][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4523][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4523][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4523][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4523][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4523][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="e7a1a0ac937202992dfa">
                                                    <td>12</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/b6e748ef4524cc8f2f2b" target="_blank">
                                                            Ekenedilichukwu Angel M. </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4524][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4524][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4524][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4524][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4524][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4524][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4524][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4524][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4524][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4524][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4524][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4524][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="2519846b93732b7b3c49">
                                                    <td>13</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/6bb4befd452516bbe84c" target="_blank">
                                                            Emeh-uzochukwu Delight Chiemerie </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4525][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4525][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4525][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4525][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4525][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4525][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4525][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4525][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4525][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4525][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4525][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4525][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="6917ca5a93742d699604">
                                                    <td>14</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/54894e1d45260ef17ad1" target="_blank">
                                                            Emeka Favour Amarachi </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4526][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4526][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4526][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4526][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4526][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4526][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4526][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4526][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4526][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4526][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4526][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4526][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="6a7806e0937555c5ca58">
                                                    <td>15</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/bb8008af452762ef2e8a" target="_blank">
                                                            Emenike Chidimma Marycynthia </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4527][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4527][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4527][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4527][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4527][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4527][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4527][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4527][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4527][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4527][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4527][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4527][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="2e8f149693767f4ac99b">
                                                    <td>16</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/8bb32f564528dbc4c3ac" target="_blank">
                                                            Ezika Munachimso Nicole </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4528][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4528][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4528][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4528][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4528][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4528][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4528][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4528][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4528][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4528][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4528][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4528][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="07626ae09377651d64fa">
                                                    <td>17</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/701be8054529d210bd9b" target="_blank">
                                                            Ibeawuchi Favour-claire Chisom </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4529][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4529][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4529][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4529][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4529][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4529][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4529][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4529][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4529][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4529][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4529][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4529][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="e91f570d93789b13696f">
                                                    <td>18</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/2e3d32c445309264c15b" target="_blank">
                                                            Ike-eze Chisom Augusta </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4530][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4530][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4530][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4530][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4530][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4530][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4530][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4530][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4530][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4530][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4530][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4530][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="2c360a6193797776426d">
                                                    <td>19</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/0c6d8bd14531931da08f" target="_blank">
                                                            Ikechukwu Chioma Victory </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4531][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4531][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4531][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4531][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4531][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4531][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4531][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4531][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4531][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4531][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4531][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4531][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="339c231a93802350b64b">
                                                    <td>20</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/495cf49545324701c7a8" target="_blank">
                                                            Mbakwe Angela Chinemerem </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4532][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4532][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4532][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4532][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4532][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4532][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4532][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4532][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4532][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4532][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4532][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4532][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="34fb431993819b57d53d">
                                                    <td>21</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/2a37c5644533816f6423" target="_blank">
                                                            Mozie Chidera Stephine </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4533][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4533][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4533][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4533][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4533][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4533][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4533][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4533][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4533][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4533][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4533][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4533][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="2757bf849382d8b53ded">
                                                    <td>22</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/199c0e5845348f7ac693" target="_blank">
                                                            Muolokwu Chisom Lorrita </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4534][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4534][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4534][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4534][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4534][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4534][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4534][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4534][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4534][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4534][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4534][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4534][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="3bbd772393838f4e217c">
                                                    <td>23</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/8b6280f14535f1a925db" target="_blank">
                                                            Ndubuisi Vivian M </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4535][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4535][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4535][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4535][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4535][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4535][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4535][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4535][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4535][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4535][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4535][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4535][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="b3e35aec938478868c87">
                                                    <td>24</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/654d259e453660bc6781" target="_blank">
                                                            Nnaji-okafor Vanessa Chibundom </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4536][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4536][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4536][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4536][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4536][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4536][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4536][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4536][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4536][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4536][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4536][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4536][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="9fade4ce938502707c95">
                                                    <td>25</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/58b7ffab453781bbf8f3" target="_blank">
                                                            Nweke Dorathy Uchechukwu </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4537][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4537][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4537][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4537][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4537][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4537][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4537][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4537][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4537][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4537][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4537][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4537][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="48012f759386c7c3640e">
                                                    <td>26</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/4af7da864538d070e35e" target="_blank">
                                                            Obi Somkene Confidence </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4538][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4538][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4538][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4538][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4538][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4538][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4538][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4538][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4538][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4538][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4538][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4538][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="43ad8791938738d0889a">
                                                    <td>27</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/f753c0644539a24f0065" target="_blank">
                                                            Odinwamkpa Chiamaka Blessing </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4539][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4539][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4539][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4539][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4539][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4539][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4539][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4539][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4539][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4539][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4539][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4539][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="75e816029388f881677c">
                                                    <td>28</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/24bb0e62454033be62f4" target="_blank">
                                                            Oduche Chukwumuanya </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4540][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4540][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4540][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4540][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4540][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4540][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4540][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4540][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4540][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4540][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4540][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4540][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="e5d0ca549389a1842d6b">
                                                    <td>29</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/594de9fa4541fb4c0258" target="_blank">
                                                            Ogidi Precious </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4541][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4541][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4541][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4541][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4541][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4541][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4541][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4541][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4541][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4541][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4541][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4541][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="f5ae8cff939072527b26">
                                                    <td>30</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/cc5709cd45422b34574f" target="_blank">
                                                            Okafor Adaeze Precious </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4542][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4542][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4542][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4542][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4542][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4542][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4542][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4542][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4542][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4542][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4542][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4542][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="263c2b909391195f1407">
                                                    <td>31</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/2c230c5a45436bc42b91" target="_blank">
                                                            Okolie Mmesoma Sylvia </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4543][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4543][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4543][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4543][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4543][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4543][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4543][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4543][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4543][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4543][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4543][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4543][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="1084b37393925fdd0557">
                                                    <td>32</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/4a8d2e544544bc11bf98" target="_blank">
                                                            Okoye Chinenye Esther </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4544][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4544][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4544][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4544][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4544][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4544][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4544][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4544][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4544][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4544][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4544][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4544][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="bc704a8593930c512406">
                                                    <td>33</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/356d77924545f1890818" target="_blank">
                                                            Okpala Cynthia Onyinyechukwu </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4545][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4545][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4545][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4545][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4545][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4545][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4545][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4545][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4545][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4545][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4545][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4545][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="3a1565d793944202ad8c">
                                                    <td>34</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/a472f00445462e96fd48" target="_blank">
                                                            Okwulehie Precious Amarachukwu </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4546][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4546][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4546][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4546][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4546][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4546][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4546][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4546][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4546][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4546][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4546][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4546][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="a35cbff693950d4d45a3">
                                                    <td>35</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/5f89c2bd4547d5f0c8f5" target="_blank">
                                                            Olisaeke Chiamaka Maryann </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4547][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4547][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4547][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4547][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4547][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4547][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4547][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4547][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4547][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4547][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4547][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4547][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="34185bf89396c415ca13">
                                                    <td>36</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/dccad3b04548549b78d2" target="_blank">
                                                            Onosike Chisimdi Favour </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4548][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4548][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4548][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4548][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4548][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4548][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4548][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4548][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4548][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4548][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4548][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4548][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="11aa6a669397e8c51116">
                                                    <td>37</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/a79e00e04549357553ae" target="_blank">
                                                            Onubogu Angel Nneoma </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4549][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4549][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4549][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4549][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4549][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4549][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4549][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4549][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4549][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4549][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4549][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4549][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="011d51d39398fb2ba808">
                                                    <td>38</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/0bb5a6a145503889d1c0" target="_blank">
                                                            Onuorah Ejindu Ifeoma </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4550][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4550][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4550][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4550][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4550][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4550][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4550][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4550][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4550][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4550][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4550][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4550][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="2564115893996a03ba6a">
                                                    <td>39</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/259cc30645515e98d23a" target="_blank">
                                                            Ozoude Blessing Ezinne </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4551][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4551][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4551][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4551][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4551][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4551][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4551][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4551][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4551][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4551][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4551][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4551][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="eaa51d979400d9dddac5">
                                                    <td>40</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/87ba6f374552ba17eae6" target="_blank">
                                                            Paul Adaoma Favour </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4552][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4552][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4552][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4552][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4552][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4552][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4552][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4552][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4552][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4552][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4552][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4552][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="c46765f09401f18a8888">
                                                    <td>41</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/22a145424553587b11d4" target="_blank">
                                                            Paul-nwakudu Chioma Stephenie </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4553][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4553][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4553][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4553][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4553][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4553][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4553][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4553][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4553][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4553][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4553][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4553][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="24286ba29402a77e4b22">
                                                    <td>42</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/d6a5cd6045545083e5d7" target="_blank">
                                                            Sunday Sylvia Kosisochukwu </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4554][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4554][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4554][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4554][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4554][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4554][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4554][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4554][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4554][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4554][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4554][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4554][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="84d82a009403ee2492a4">
                                                    <td>43</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/ab416a8e455561544d2a" target="_blank">
                                                            Uchendu Chioma Faustina </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4555][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4555][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4555][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4555][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4555][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4555][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4555][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4555][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4555][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4555][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4555][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4555][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="6281c5909404f1fe88db">
                                                    <td>44</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/47665a954556e46fe0db" target="_blank">
                                                            Udeh Mmesoma Favour </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4556][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4556][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4556][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4556][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4556][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4556][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4556][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4556][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4556][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4556][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4556][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4556][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="b0774656940592bac073">
                                                    <td>45</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/7b0b190645578b48ea59" target="_blank">
                                                            Uzoma Chisimdi Favour </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4557][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4557][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4557][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4557][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4557][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4557][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4557][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4557][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4557][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4557][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4557][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4557][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                                <tr class="record" data-id="df638ab793609c2e60b5">
                                                    <td>46</td>
                                                    <td>
                                                        <img src="../../uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="../student/student-profile/c255d5ab4512011ea431" target="_blank">
                                                            ﻿aga Chizaram Elizabeth </a>
                                                    </td>
                                                    <td class="admno">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control to-validate" name="bio[4512][admno]" value="" data-field="admno">
                                                            <small class="form-control-feedback"></small>
                                                        </div>
                                                    </td>
                                                    <td class="email">
                                                        <input type="email" class="form-control" name="bio[4512][email]" value="">
                                                    </td>
                                                    <td class="phone">
                                                        <input type="text" class="form-control" name="bio[4512][phone]" value="">
                                                    </td>
                                                    <td class="address">
                                                        <input type="text" class="form-control" name="bio[4512][address]" value="">
                                                    </td>
                                                    <td class="dob">
                                                        <input type="text" class="form-control date" placeholder="YYYY-MM-DD" id="dob" name="bio[4512][dob]" value="">
                                                    </td>


                                                    <td class="sex">
                                                        <select class="form-control" name="bio[4512][sex]" required>
                                                            <option value="0"></option>
                                                            <option>M
                                                            </option>
                                                            <option selected>F
                                                            </option>
                                                        </select>
                                                    </td>

                                                    <td class="state">
                                                        <select class="form-control" name="bio[4512][state]">
                                                            <option value="0"></option>
                                                            <option value=1>ABIA</option>
                                                            <option value=2>ADAMAWA</option>
                                                            <option value=3>AKWA IBOM</option>
                                                            <option value=4>ANAMBRA</option>
                                                            <option value=5>BAUCHI</option>
                                                            <option value=6>BAYELSA</option>
                                                            <option value=7>BENUE </option>
                                                            <option value=8>BORNO</option>
                                                            <option value=9>CROSS RIVER</option>
                                                            <option value=10>DELTA</option>
                                                            <option value=11>EBONYI</option>
                                                            <option value=12>EDO</option>
                                                            <option value=13>EKITI</option>
                                                            <option value=14>ENUGU</option>
                                                            <option value=15>FCT</option>
                                                            <option value=16>GOMBE </option>
                                                            <option value=17>IMO</option>
                                                            <option value=18>JIGAWA</option>
                                                            <option value=19>KADUNA</option>
                                                            <option value=20>KANO</option>
                                                            <option value=21>KATSINA</option>
                                                            <option value=22>KEBBI </option>
                                                            <option value=23>KOGI</option>
                                                            <option value=24>KWARA</option>
                                                            <option value=25>LAGOS</option>
                                                            <option value=26>NASSARAWA</option>
                                                            <option value=27>NIGER</option>
                                                            <option value=28>OGUN</option>
                                                            <option value=29>ONDO</option>
                                                            <option value=30>OSUN</option>
                                                            <option value=31>OYO</option>
                                                            <option value=32>PLATEAU</option>
                                                            <option value=33>RIVERS</option>
                                                            <option value=34>SOKOTO</option>
                                                            <option value=35>TARABA</option>
                                                            <option value=36>YOBE</option>
                                                            <option value=37>ZAMFARA</option>
                                                        </select>
                                                    </td>

                                                    <td class="lga">
                                                        <select class="form-control" name="bio[4512][lga]">
                                                            <option value="0"></option>

                                                        </select>
                                                    </td>

                                                    <td class="house">
                                                        <select class="form-control" name="bio[4512][house]">
                                                            <option value="0"></option>
                                                            <option value=1>ALPHA</option>
                                                            <option value=2>Beta</option>
                                                            <option value=3>Gamma</option>
                                                            <option value=4>Phyle</option>
                                                        </select>
                                                    </td>

                                                    <td class="res">
                                                        <select class="form-control" name="bio[4512][res]">
                                                            <option value="0"></option>
                                                            <option value=1 selected>Day student</option>
                                                            <option value=2>Boarder</option>
                                                        </select>
                                                    </td>

                                                    <td class="geno">
                                                        <select class="form-control" name="bio[4512][geno]">
                                                            <option value="0"></option>
                                                            <option value=1>AA/A+</option>
                                                            <option value=2>AA/A-</option>
                                                            <option value=3>AA/B+</option>
                                                            <option value=4>AA/B-</option>
                                                            <option value=5>AA/AB+</option>
                                                            <option value=6>AA/AB-</option>
                                                            <option value=7>AA/O+</option>
                                                            <option value=8>AA/O-</option>
                                                            <option value=9>AC/A+</option>
                                                            <option value=10>AC/A-</option>
                                                            <option value=11>AC/B+</option>
                                                            <option value=12>AC/B-</option>
                                                            <option value=13>AC/AB+</option>
                                                            <option value=14>AC/AB-</option>
                                                            <option value=15>AC/O+</option>
                                                            <option value=16>AC/O-</option>
                                                            <option value=17>AS/A+</option>
                                                            <option value=18>AS/A-</option>
                                                            <option value=19>AS/B+</option>
                                                            <option value=20>AS/B-</option>
                                                            <option value=21>AS/AB+</option>
                                                            <option value=22>AS/AB-</option>
                                                            <option value=23>AS/O+</option>
                                                            <option value=24>AS/O-</option>
                                                            <option value=25>SS/A+</option>
                                                            <option value=26>SS/A-</option>
                                                            <option value=27>SS/B+</option>
                                                            <option value=28>SS/B-</option>
                                                            <option value=29>SS/AB+</option>
                                                            <option value=30>SS/AB-</option>
                                                            <option value=31>SS/O+</option>
                                                            <option value=32>SS/O-</option>
                                                        </select>
                                                    </td>

                                                    <td class="relig">
                                                        <select class="form-control" name="bio[4512][relig]">
                                                            <option value="0"></option>
                                                            <option value="1">Christianity</option>
                                                            <option value="2">Islam</option>
                                                            <option value="3">Others</option>
                                                        </select>
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                        <input type="hidden" name="class_arm_id_enc" value="8f1fee3f1f8e69b0a">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save Changes</button> <span class="processor"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ======   This Page SCRIPTS   =========== -->
                <script src="../assets/plugins/moment/moment.js"></script>
                <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

                <script>
                    $(function() {
                        $('.date').bootstrapMaterialDatePicker({
                            format: 'YYYY-MM-DD',
                            maxDate: new Date(2091, 0, 1),
                            minDate: new Date(1996, 0, 1),
                            time: false
                        });

                        $('.to-validate').change(function() {
                            var a = $(this);
                            var field = a.data('field');
                            var val = a.val();
                            var id = a.parents('.record').data('id');
                            var url = '../user-account/validate-user-field';

                            $.post(url, {
                                field: field,
                                value: val,
                                user_type: "student",
                                id: id
                            }, function(result) {
                                if (result.type !== 'success') {
                                    a.addClass('form-control-danger');
                                    a.parent().addClass('has-danger');
                                    a.siblings('small').html(result.msg);
                                } else {
                                    a.removeClass('form-control-danger');
                                    a.parent().removeClass('has-danger');
                                    a.siblings('small').html('');
                                }
                            }, 'json');
                        });

                        $('#bulk-bio').submit(function(e) {
                            e.preventDefault();

                            var has_error = $('.form-control-danger');
                            if (has_error.length > 0) {
                                has_error.focus();
                            } else {
                                submit_form('#bulk-bio');
                            }
                        });
                    })
                </script>
                <!-- ========================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © 2022 School Management System (Edu-Portal) by <a href="https://binozydigital.com" target="_blank">KRYSTAL DIGITAL SOLUTIONS</a>
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