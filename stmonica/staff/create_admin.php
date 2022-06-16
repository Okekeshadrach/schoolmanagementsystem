<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Federal Government Girls College, Nkwelle Ezunaka">
    <meta name="keywords" content="school, education">
    <meta name="author" content="Krystal Digital Solutions">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo_4a262eb69667.png">
    <title>Krystal’s IT Academy F.G.G.C, NKWELLE EZUNAKA - School Portal</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="../assets/plugins/css-chart/css-chart.css" rel="stylesheet">

    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">

    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="../assets/css/style.css?n=3" rel="stylesheet">

    <link href="../assets/css/colors/blue.css" rel="stylesheet">

    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/popper/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- ============= Sweet Alert =================== -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Portal js -->
    <script src="../assets/js/portal-02.js?n=0"></script>

    <!-- Bootstrap responsive table CSS -->
    <link href="../assets/plugins/tablesaw-master/dist/tablesaw.css" rel="stylesheet">

    <style>
        /* Custom style for specific pages*/
        .custom-textarea {
            min-height: 200px;
            max-height: 500px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: auto;
        }
    </style>

    <script>
        //Global variables
        var site_url = '../';
        var base_url = '../';

        $(document).on('click', '.sidebartoggler', function() {
            if ($('.hide-menu').is(':visible')) {
                $('._scroll-sidebar').css('overflow', 'scroll');
            } else {
                $('._scroll-sidebar').css('overflow', 'visible');
            }
        })
    </script>

</head>

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
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <!-- Logo icon -->
                        <b>
                            <!-- Dark Logo icon -->
                            <img src="../assets/img/logo_4a262eb69667.png" alt="school-page" class="dark-logo logo" height="60" width="60" />
                            <!-- Light Logo icon -->
                            <img src="../assets/img/logo_4a262eb69667.png" alt="homepage" class="light-logo logo" height="60" width="60" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="short_name" style="color: #FFF">F.G.G.C NKWELLE</span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================== ================================ -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>

                            <!-- =============== SEARCH BAR =================== -->
                            <form action="../student/search" class="app-search" method="post" accept-charset="utf-8">
                                <input type="text" class="form-control" name="keyword" minlength="3" placeholder="Search student"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form> <!-- ============================================== -->

                        </li>
                        <li class="nav-item hidden-xs-down"><a class="nav-link" id="current_session_name" href="javascript:void(0)">First Term 2020/2021</a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up" id="n-center"></div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../uploads/nobody_m.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
                                                <img src="../../uploads/nobody_m.jpg" alt="user">
                                            </div>
                                            <div class="u-text">
                                                <h4 class="user-full-name">Teachers</h4>
                                                <p class="text-muted user-email">teacheremail@gmail.com</p><a href="../admin-account/profile" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a class="waves-effect waves-dark" href="../admin-account/my-activity"><i class="ti-wallet"></i> My Activity Log</a></li>
                                    <li><a class="waves-effect waves-dark" href="../admin-account/change-password"><i class="ti-key"></i> Change Password</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a class="waves-effect waves-dark" href="../login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="_scroll-sidebar" style="overflow: scroll; width: auto; height: 100%;">
                <!-- User profile -->
                <div class="user-profile" style="background: url(../assets/images/background/images.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src="../../uploads/nobody_m.jpg" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown user-full-name" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Teachers</a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="../admin-account/profile" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <a href="../admin-account/my-activity" class="dropdown-item"><i class="ti-wallet"></i> My Activity Log</a>
                            <div class="dropdown-divider"></div> <a href="../login/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="../admin-account" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">ACADEMICS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-users"></i>
                                <span class="hide-menu">Students</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a class="waves-effect waves-dark" href="../student/student-mgt" title="Manage list of student's that fall in a set criteria" data-toggle="tooltip">Students List</a></li>

                                <li><a class="waves-effect waves-dark" href="../student/add-student" title="Register a new student on the system" data-toggle="tooltip">Register new Student</a></li>
                                <li><a class="waves-effect waves-dark" href="../student/withdrawn-students" title="Manage students who have been withdrawn" data-toggle="tooltip">Withdrawn Students</a></li>
                                <li><a class="waves-effect waves-dark" href="../student/graduated-students" title="Manage students who have graduated" data-toggle="tooltip">Graduated Students</a></li>
                                <li><a class="waves-effect waves-dark" href="../student/manage-parents" title="See List of all parents on the system" data-toggle="tooltip">Manage Parents</a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Class</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="../classes/class-arm-mgt" title="View all class arms and perform specific tasks for any class arm" data-toggle="tooltip">Manage Class Arms</a></li>
                                <li><a class="waves-effect waves-dark" href="../classes/classes_and_arms" title="Create, Edit or Delete Arm/Class Arm" data-toggle="tooltip">Classes and Arms</a></li>
                                <li><a class="waves-effect waves-dark" href="../classes/class-teachers" title="Manage all class teachers on the system" data-toggle="tooltip">Class teachers</a></li>
                                <li><a class="waves-effect waves-dark" href="../classes/assignment" title="Create, edit or delete class assignments" data-toggle="tooltip">Class Assignments</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="../classes/past-records" aria-expanded="false" title="Manage records in a past Term/Session" data-toggle="tooltip"><i class="fa fa-file-text"></i><span class="hide-menu">Past Records</span></a>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-calendar-clock"></i><span class="hide-menu">Time Table</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="javascript: void()" title="Coming soon..." data-toggle="tooltip">Class Time Table</a></li>
                                <li><a class="waves-effect waves-dark" href="javascript: void()" title="Coming soon..." data-toggle="tooltip">School Time Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Subject</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="../subject">School Subjects</a></li>
                                <li><a class="waves-effect waves-dark" href="../subject/teachers" title="Manage all subject teachers. (i.e. All Staff who have been assigned to one or more subjects)" data-toggle="tooltip">Subject Teachers</a></li>
                                <li><a class="waves-effect waves-dark" href="../subject/departments" title="Manage Subject departments. Add, update or remove departments" data-toggle="tooltip">Departments</a></li>
                            </ul>
                        </li>

                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">LEARNING & COMMUNICATION</li>
                        <li>
                            <a href="javascript: void()" aria-expanded="false" title="Coming soon..." data-toggle="tooltip"><i class="fa fa-comments"></i><span class="hide-menu">Forum</span></a>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-message-settings"></i><span class="hide-menu">Messaging</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="../messaging/send-email" title="Send customized email to Parents, Staff, Students or Admin" data-toggle="tooltip">Send Email</a></li>


                                <li><a class="waves-effect waves-dark" href="../messaging/send-text-message" title="Send a text message to Parents, Staff, Students or Admin" data-toggle="tooltip">Send Text Message</a></li>
                                <li><a class="waves-effect waves-dark" href="../messaging/generate-letter" title="Generate a customized Letter for Parents, Staff, Students or Admin" data-toggle="tooltip">Generate Letter</a></li>
                            </ul>
                        </li>

                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">ADMINISTRATION</li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Payment/Bills <span class="text-danger">*</span></span></a>

                            <ul aria-expanded="false" class="collapse">
                            </ul>
                        </li>


                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Staff and Admin</span></a>
                            <ul aria-expanded="false" class="collapse">


                                <li><a class="waves-effect waves-dark" href="../staff/manage" title="See List of all staff on the system" data-toggle="tooltip">Manage Staff</a></li>

                                <li><a class="waves-effect waves-dark" href="../admin-account/manage" title="See List of all administrators on the system" data-toggle="tooltip">Manage Admin</a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-soccer"></i><span class="hide-menu">Sport House</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="../sport-house" title="Add, Edit or Delete Sport Houses" data-toggle="tooltip">Manage Sport Houses</a></li>
                                <li><a class="waves-effect waves-dark" href="../sport-house/heads" title="Manage house masters/mistresses" data-toggle="tooltip">Sport House Heads</a></li>
                            </ul>
                        </li>

                        <!--<li>
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Resources</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a class="waves-effect waves-dark" href="#">Resource Category</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Resources</a></li>
                        </ul>
                    </li>-->

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-settings"></i><span class="hide-menu">Configuration</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a class="waves-effect waves-dark" href="../school-config/school-grades" title="Add, Edit or Delete Grades" data-toggle="tooltip">School Grades</a></li>
                                <li><a class="waves-effect waves-dark" href="../school-config/grades-config" title="Configure how grades are awarded in students result" data-toggle="tooltip">Grade Configuration</a></li>
                                <li><a class="waves-effect waves-dark" href="../school-config/school-information" title="View/Make changes to the school's information" data-toggle="tooltip">School Information</a></li>
                                <li><a class="waves-effect waves-dark" href="../school-config/result-setting" title="Make changes to how students Report card or Broadsheet looks" data-toggle="tooltip">Result Settings</a></li>
                                <li><a class="waves-effect waves-dark" href="../school-config/academic-session" title="View Academic Session history, create new session, or move to next session" data-toggle="tooltip">Academic Sessions</a></li>

                                <li><a class="waves-effect waves-dark" href="../school-config/session-parameters" title="Set or Edit weight of session parameters (i.e. CA1, CA2..., Exam, Term weight)" data-toggle="tooltip">Session Parameters</a></li>

                                <li><a class="waves-effect waves-dark" href="../school-config/comment-remarks" title="create, edit or delete library of comment remarks" data-toggle="tooltip">Comment Remarks</a></li>
                                <li><a class="waves-effect waves-dark" href="../school-config/behavioural-traits" title="Manage your preference of student behavioural traits e.g Neatness, punctuality etc..." data-toggle="tooltip">Behavioural Traits</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- =======================  This page styles =================== ---->
            <link href="../assets/plugins/wizard/steps.css" rel="stylesheet">
            <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
            <!-- =======================  This page styles =================== ---->


            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Create New Administrator Account</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Admin</a></li>
                            <li class="breadcrumb-item active">create</li>
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
                                <p>Enter Details of the admin you want to create an account for</p>
                                <hr>
                                <form action="../admin-account/create-process" id="create-admin" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <section>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="preferred_username">Preferred Username :</label>
                                                        <input type="text" name="preferred_username" class="form-control to-validate" id="preferred_username" minlength="5" maxlength="20" required>
                                                        <small class="form-control-feedback"></small>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="surname">Last Name :</label>
                                                        <input type="text" name="admin[surname]" class="form-control" id="surname" minlength="3" required>
                                                        <small class="form-control-feedback"></small>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="first_name">First Name :</label>
                                                        <input type="text" name="admin[first_name]" class="form-control" id="first_name" required>
                                                        <small class="form-control-feedback"></small>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="sec_name">Other Name :</label>
                                                        <input type="text" name="admin[sec_name]" class="form-control" id="sec_name" minlength="3">
                                                    </div>

                                                    <div class="form-group col-md-12">
                                                        <label class="form-control-label" for="address">Home Address :</label>
                                                        <input type="text" name="admin[address]" class="form-control" id="address" minlength="10">
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="location1">Gender :</label>
                                                        <div class="col-md-12" style="padding-left: 0">
                                                            <input name="admin[gender]" type="radio" id="radio_1" class="with-gap radio-col-deep-purple" value="M" />
                                                            <label class="form-control-label" for="radio_1">Male</label>

                                                            <input name="admin[gender]" type="radio" id="radio_2" class="with-gap radio-col-deep-purple" value="F" />
                                                            <label class="form-control-label" for="radio_2">Female</label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="passport">Upload Admin Passport :</label>
                                                        <input type="file" name="admin_passport" class="form-control" id="passport" required>
                                                        <small class="text-info">(JPG, JPEG, or PNG. Max Size: 100KB)</small>
                                                    </div>


                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="email">Email Address :</label>
                                                        <input type="email" name="admin[email]" class="form-control to-validate" id="email" minlength="6">
                                                        <small class="form-control-feedback"></small>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="form-control-label" for="phone">Phone number :</label>
                                                        <input type="text" name="admin[phone]" class="form-control to-validate" id="phone" minlength="10">
                                                        <small class="form-control-feedback"></small>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Create Admin account</button>
                                                        <span class="processor"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <p>Select Permissions to grant this Administrator</p>
                                                <div class="table-responsive" id="resp-div" style="max-height: 650px">
                                                    <table class="table-bordered table-hover table stylish-table table-striped color-table success-table" id="resp-table" width="100%">
                                                        <thead>
                                                            <tr role="row">
                                                                <th>S/N</th>
                                                                <th>Permission Levels</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>
                                                                    Create/Manage Admin Account </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="1" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>
                                                                    Create/Manage Staff Account </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="2" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>
                                                                    Messaging Module </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="3" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>
                                                                    Enter Student Score </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="4" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>5</td>
                                                                <td>
                                                                    View Report Card </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="5" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>6</td>
                                                                <td>
                                                                    Result Settings </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="10" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>
                                                                    School Information </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="11" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>
                                                                    Academic Sessions </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="12" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>9</td>
                                                                <td>
                                                                    Session Parameters </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="13" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>10</td>
                                                                <td>
                                                                    Grade Configuration </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="14" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>11</td>
                                                                <td>
                                                                    Past Records </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="15" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>12</td>
                                                                <td>
                                                                    Create/Manage Subject </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="16" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>13</td>
                                                                <td>
                                                                    Register/Deregister Student Subject </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="17" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>14</td>
                                                                <td>
                                                                    Register Student </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="18" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>15</td>
                                                                <td>
                                                                    Manage Parent </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="19" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>16</td>
                                                                <td>
                                                                    Move/Promote/Demote/Graduate Student </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="20" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>17</td>
                                                                <td>
                                                                    Change User Password </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="21" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>18</td>
                                                                <td>
                                                                    Manage Users Permissions </td>
                                                                <td>
                                                                    <div class="switch">
                                                                        <label>
                                                                            <input name="permission_ids[]" type="checkbox" value="22" class="chk">
                                                                            <span class="lever switch-col-light-blue"></span>
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- =======================  START: This page JS scripts =================== ---->
            <script src="../assets/plugins/wizard/jquery.steps.min.js"></script>
            <script src="../assets/plugins/moment/moment.js"></script>
            <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>


            <script>
                $(function() {

                    $('.to-validate').change(function() {
                        var a = $(this);
                        var field = a.attr('id');
                        var val = a.val();
                        var user_type = 'admin';
                        var url = '../user-account/validate-user-field';

                        if (field === 'preferred_username') {
                            field = 'username';
                            user_type = 'user';
                        }

                        $.post(url, {
                            field: field,
                            value: val,
                            user_type: user_type
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


                    $('#create-admin').submit(function(e) {
                        e.preventDefault();

                        var has_error = $('.form-control-danger');
                        if (has_error.length > 0) {
                            has_error.focus();
                        } else {
                            var xhr = submit_form_multipart('#create-admin');
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    // SWEET ALERT
                                    swal({
                                        title: "Admin Account Created",
                                        text: "A notification has been sent to this admin via email! \n Do you want to create another admin account now?",
                                        type: "success",
                                        showCancelButton: true,
                                        confirmButtonColor: "#13aa2c",
                                        cancelButtonText: "No! Not now",
                                        confirmButtonText: "Yes please!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false
                                    }, function(isConfirm) {
                                        if (isConfirm) {
                                            window.location.href = site_url + 'admin-account/create';
                                        } else {
                                            window.location.href = site_url + 'admin-account/manage';
                                        }
                                    });
                                }
                            });
                        }
                    });
                })
            </script>
            <!-- =======================  END: This page JS scripts =================== ---->
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
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="../assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../assets/js/sidebarmenu.js"></script>

    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <!--Custom JavaScript -->
    <script src="../assets/js/custom.min.js"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->


    <script src="../assets/js/bootstrap-notify.js"></script>

    <script src="../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- jQuery peity -->
    <script src="../assets/plugins/tablesaw-master/dist/tablesaw.js"></script>
    <script src="../assets/plugins/tablesaw-master/dist/tablesaw-init.js"></script>


    <script>
        $('ul.collapse').each(function(i) {
            if ($(this).children().length < 1) {
                $(this).parent().remove();
            }
        });


        $(".select2").select2();


        $('.ajax-link').contextmenu(function() {
            return false;
        });

        function load_notification() {
            $('#n-center').load(site_url + 'other/notification ul', function() {
                if ($('.message-center').length > 0) {
                    $('.notify').html('<span class="heartbit"></span><span class="point"></span>');
                } else {
                    $('.notify').html('');
                }
                //setTimeout(load_notification, 120000);
            });
        }
        load_notification();
    </script>
    <!-- ============================================================== -->
</body>

</html>