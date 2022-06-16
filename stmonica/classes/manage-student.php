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
                            Students in <?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Manage students</li>
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
                                <!-- <small class="pull-right">
                                    <i>
                                        Class Teacher :
                                        <a href="staff/staff-profile.html">
                                            <img src="uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small> -->

                                <div class="clear"></div>

                                <?php include('../classes/class_nav.html') ?>

                                <div class="table-responsive" style="margin-top: 1em">
                                    <table class="table table-striped table-bordered color-table success-table stylish-table" width="100%">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th></th>
                                                <th>Student Name</th>
                                                <th>Username</th>
                                                <th>Gender</th>
                                                <th>House</th>
                                                <th>Pref</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            <?php $class->get_class_student($class_id) ?>
                                            <!--                                     
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/2f974c9c451400dfe3ff" target="_blank">
                                                <b>Anthony</b>  Precious  Mmesoma                                            </a>
                                        </td>
                                        <td>FGGCON202715</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/c08e8e2d4515a487e134" target="_blank">
                                                <b>Anyaneto</b>  Chidiebube  Bethel                                            </a>
                                        </td>
                                        <td>FGGCON201348</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/c9e10dcd451664dcf3e1" target="_blank">
                                                <b>Chibuzor </b> Praise  Chinyelu                                            </a>
                                        </td>
                                        <td>FGGCON202781</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/c708b1fe45174bc48016" target="_blank">
                                                <b>Chigbo </b> Chinaza  M                                            </a>
                                        </td>
                                        <td>FGGCON201468</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/e78c771245181bbf4447" target="_blank">
                                                <b>Chukwu</b>  Afoma  Mathilda                                            </a>
                                        </td>
                                        <td>FGGCON208935</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/f2974fd0451995897a54" target="_blank">
                                                <b>Chukwudumogu </b> Chigozirim  Precious                                            </a>
                                        </td>
                                        <td>FGGCON205378</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/8c132e29452033a17bdf" target="_blank">
                                                <b>Chukwuemeka </b> Esther  Chisom                                            </a>
                                        </td>
                                        <td>FGGCON206931</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/6bc24fc14521610be36b" target="_blank">
                                                <b>Ebubechukwu </b> Perpetua  Chikamso                                            </a>
                                        </td>
                                        <td>FGGCON203219</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/a49e0d8f452285d40f3e" target="_blank">
                                                <b>Egwuatu </b> Kamaranachimdindu                                             </a>
                                        </td>
                                        <td>FGGCON207149</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/199aa0d24523c6096e0f" target="_blank">
                                                <b>Ejiyi</b>  Ebubechukwu  Mirabel                                            </a>
                                        </td>
                                        <td>FGGCON208235</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/362e5d6945244de6dbec" target="_blank">
                                                <b>Ekenedilichukwu </b> Angel  M.                                            </a>
                                        </td>
                                        <td>FGGCON201834</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>13</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/1f7cbcc94525668c8585" target="_blank">
                                                <b>Emeh-uzochukwu </b> Delight  Chiemerie                                            </a>
                                        </td>
                                        <td>FGGCON202684</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>14</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/01e405e6452656b735d3" target="_blank">
                                                <b>Emeka </b> Favour  Amarachi                                            </a>
                                        </td>
                                        <td>FGGCON208241</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>15</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/fc1c0e934527ec5a77ef" target="_blank">
                                                <b>Emenike </b> Chidimma  Marycynthia                                            </a>
                                        </td>
                                        <td>FGGCON207961</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>16</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/50759fef4528b4504dd3" target="_blank">
                                                <b>Ezika </b> Munachimso  Nicole                                            </a>
                                        </td>
                                        <td>FGGCON204967</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>17</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/15b0e8174529b0c92c94" target="_blank">
                                                <b>Ibeawuchi </b> Favour-claire  Chisom                                            </a>
                                        </td>
                                        <td>FGGCON209162</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>18</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/ddbbd99e45301702669d" target="_blank">
                                                <b>Ike-eze</b>  Chisom  Augusta                                            </a>
                                        </td>
                                        <td>FGGCON201684</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>19</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/708250b045318c94d28d" target="_blank">
                                                <b>Ikechukwu </b> Chioma  Victory                                            </a>
                                        </td>
                                        <td>FGGCON209158</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>20</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/db57282345328242d7b0" target="_blank">
                                                <b>Mbakwe </b> Angela  Chinemerem                                            </a>
                                        </td>
                                        <td>FGGCON202439</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>21</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/ce575bcd4533a5b2b017" target="_blank">
                                                <b>Mozie </b> Chidera  Stephine                                            </a>
                                        </td>
                                        <td>FGGCON205763</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>22</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/3b51a4cf4534324523ed" target="_blank">
                                                <b>Muolokwu </b> Chisom  Lorrita                                            </a>
                                        </td>
                                        <td>FGGCON204768</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>23</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/f456b8e24535647cf624" target="_blank">
                                                <b>Ndubuisi</b>  Vivian  M                                            </a>
                                        </td>
                                        <td>FGGCON202954</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>24</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/11a0c489453694949233" target="_blank">
                                                <b>Nnaji-okafor </b> Vanessa  Chibundom                                            </a>
                                        </td>
                                        <td>FGGCON205728</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>25</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/56dcfdcf45376bc1d617" target="_blank">
                                                <b>Nweke </b> Dorathy  Uchechukwu                                            </a>
                                        </td>
                                        <td>FGGCON202849</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>26</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/e3cd4ec04538d720684a" target="_blank">
                                                <b>Obi </b> Somkene  Confidence                                            </a>
                                        </td>
                                        <td>FGGCON203496</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>27</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/1952ff55453997bbd59c" target="_blank">
                                                <b>Odinwamkpa</b>  Chiamaka  Blessing                                            </a>
                                        </td>
                                        <td>FGGCON205284</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>28</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/3f8d4e854540d5d36cc9" target="_blank">
                                                <b>Oduche </b> Chukwumuanya                                             </a>
                                        </td>
                                        <td>FGGCON209372</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>29</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/473615e74541eab4d8e2" target="_blank">
                                                <b>Ogidi </b> Precious                                             </a>
                                        </td>
                                        <td>FGGCON206345</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>30</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/82ef553a4542aaf9fa6e" target="_blank">
                                                <b>Okafor </b> Adaeze  Precious                                            </a>
                                        </td>
                                        <td>FGGCON201245</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>31</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/3974968c4543d1907469" target="_blank">
                                                <b>Okolie </b> Mmesoma  Sylvia                                            </a>
                                        </td>
                                        <td>FGGCON208439</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>32</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/4362ab5b4544d47ba4f2" target="_blank">
                                                <b>Okoye </b> Chinenye  Esther                                            </a>
                                        </td>
                                        <td>FGGCON202817</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>33</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/9a0768654545f6b7a4b2" target="_blank">
                                                <b>Okpala </b> Cynthia  Onyinyechukwu                                            </a>
                                        </td>
                                        <td>FGGCON201594</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>34</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/9d2a687145460b49bd1f" target="_blank">
                                                <b>Okwulehie</b>  Precious  Amarachukwu                                            </a>
                                        </td>
                                        <td>FGGCON201345</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>35</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/d3b43d444547ae4d853c" target="_blank">
                                                <b>Olisaeke </b> Chiamaka  Maryann                                            </a>
                                        </td>
                                        <td>FGGCON204915</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>36</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/5193bdfe4548fc39ed28" target="_blank">
                                                <b>Onosike </b> Chisimdi  Favour                                            </a>
                                        </td>
                                        <td>FGGCON206954</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>37</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/f500753a454931a3aa85" target="_blank">
                                                <b>Onubogu </b> Angel  Nneoma                                            </a>
                                        </td>
                                        <td>FGGCON202759</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>38</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/ef5b5c3d45502d47b943" target="_blank">
                                                <b>Onuorah </b> Ejindu  Ifeoma                                            </a>
                                        </td>
                                        <td>FGGCON208367</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>39</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/19557e2245512be71c38" target="_blank">
                                                <b>Ozoude </b> Blessing  Ezinne                                            </a>
                                        </td>
                                        <td>FGGCON201538</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>40</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/2698aa314552bf623605" target="_blank">
                                                <b>Paul </b> Adaoma  Favour                                            </a>
                                        </td>
                                        <td>FGGCON203689</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>41</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/4363a43f455367aed97b" target="_blank">
                                                <b>Paul-nwakudu </b> Chioma  Stephenie                                            </a>
                                        </td>
                                        <td>FGGCON204126</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>42</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/fbad54f5455438c9dc90" target="_blank">
                                                <b>Sunday </b> Sylvia  Kosisochukwu                                            </a>
                                        </td>
                                        <td>FGGCON205147</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>43</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/c7296f694555f9e156aa" target="_blank">
                                                <b>Uchendu </b> Chioma  Faustina                                            </a>
                                        </td>
                                        <td>FGGCON204167</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>44</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/8530dce845563048d4cd" target="_blank">
                                                <b>Udeh </b> Mmesoma  Favour                                            </a>
                                        </td>
                                        <td>FGGCON205716</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>45</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/2f1421c445575cd0022f" target="_blank">
                                                <b>Uzoma </b> Chisimdi  Favour                                            </a>
                                        </td>
                                        <td>FGGCON203982</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>46</td>
                                        <td>
                                            <img src="uploads/nobody_f.jpg" height="50"
                                                 class="img-circle"/>
                                        </td>
                                        <td>
                                            <a class="text-info" href="student/student-profile/d579a0a1451293d5d23d" target="_blank">
                                                <b>﻿aga </b> Chizaram  Elizabeth                                            </a>
                                        </td>
                                        <td>FGGCON204251</td>
                                        
                                        <td>Female</td>
                                        
                                        <td><span class="label label-light-warning">unspecified</span></td>
                                        <td>
                                            Day                                        </td>
                                    </tr>
                                                                </tbody> -->
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        if ($('tr').length > 10) {
                            $('.table').DataTable({
                                "iDisplayLength": 50
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