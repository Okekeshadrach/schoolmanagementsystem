    <?php
    session_start();
    require '../public_functions.php';
    $class = new sms_engine;
    if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
        echo '<script>window.location="index.php"</script>';
    } else {
        $user_id = $_SESSION['user_id'];
        $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
        $sql = "SELECT * FROM staff WHERE id='$user_id'";
        $query = mysqli_query($db, $sql);
        $count = mysqli_num_rows($query);
        if ($count == true) {
            while ($row = mysqli_fetch_array($query)) {
                // echo '<script>window.alert("'.$pass.'")</script>';
                $name = $row['first_name'] . ' ' . $row['last_name'] . '' . $row['other_name'];
                $first_name = $row['first_name'];
                $last_name = $row['last_name'];
                $other_name = $row['other_name'];
                $email = $row['email'];
                $staff_id = $row['staff_id'];
                $address = $row['home_address'];
                $phone_no = $row['mobileno'];
                $last_update = $row['updated_at'];
                if ($row['gender'] == 'M') {
                    $gender = "Male";
                    $check = "M";
                    $img = "../uploads/nobody_m.jpg";
                } elseif ($row['gender'] == 'F') {
                    $gender = "Female";
                    $check = "F";
                    $img = "../uploads/nobody_f.jpg";
                } else {
                    $gender = "Other";
                    $check = "";
                    $img = "../uploads/nobody_n.jpg";
                }

                if ($user_id == '1') {
                    $role = 'Portal Admin';
                }
                
            }
        }
    }     ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta name="description" content="Federal Government Girls College, Nkwelle Ezunaka">
    <meta name="keywords" content="school, education">
    <meta name="author" content="Krystal Digital Solutions"> -->

    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo_4a262eb69667.png">
    <title>St. Monica Edu Portal</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/plugins/css-chart/css-chart.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>

    <link href="assets/js/app.css" rel="stylesheet">

    <!--This page css - Morris CSS -->
    <link href="assets/plugins/c3-master/c3.min.css" rel="stylesheet">

    <link href="assets/plugins/sweetalert/sweetalert.css" rel="stylesheet">

    <link href="assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="assets/css/style.css?n=3" rel="stylesheet">

    <link href="assets/css/colors/blue.css" rel="stylesheet">

    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/popper/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- ============= Sweet Alert =================== -->
    <script src="assets/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Portal js -->
    <script src="assets/js/portal-02.js?n=0"></script>

    <!-- Bootstrap responsive table CSS -->
    <link href="assets/plugins/tablesaw-master/dist/tablesaw.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/toastify.min.css">

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


</head>

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
                            <img src="assets/img/logo_4a262eb69667.png" alt="school-page" class="dark-logo logo" height="60" width="60" />
                            <!-- Light Logo icon -->
                            <img src="assets/img/logo_4a262eb69667.png" alt="homepage" class="light-logo logo" height="60" width="60" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="short_name" style="color: #FFF">ST. MONICA</span>
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
                            <form action="student/search" class="app-search" method="post" accept-charset="utf-8">
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="uploads/nobody_m.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
                                                <img src=<?php echo $img ?> alt="user">
                                            </div>
                                            <div class="u-text">
                                                <h4 class="user-full-name"><?php echo $name ?></h4>
                                                <p class="text-muted user-email"><?php echo $email ?></p><a href="admin/profile.php" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a class="waves-effect waves-dark" href="admin/my-activity.php"><i class="ti-wallet"></i> My Activity Log</a></li>
                                    <li><a class="waves-effect waves-dark" href="admin/change-password.php"><i class="ti-key"></i> Change Password</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a class="waves-effect waves-dark" href="login/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
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
                <div class="user-profile" style="background: url(assets/images/background/images.jpg) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <img src=<?php echo $img ?> alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown user-full-name" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo strtoupper($name); ?></a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="admin/profile.php" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <a href="admin/my-activity.php" class="dropdown-item"><i class="ti-wallet"></i> My Activity Log</a>
                            <div class="dropdown-divider"></div> <a href="login/logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="admin-account.php" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">ACADEMICS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-users"></i>
                                <span class="hide-menu">Students</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a class="waves-effect waves-dark" href="student/student-mgt.php" title="Manage list of student's that fall in a set criteria" data-toggle="tooltip">Students List</a></li>

                                <li><a class="waves-effect waves-dark" href="student/" title="Register a new student on the system" data-toggle="tooltip">Register new Student</a></li>
                                <li><a class="waves-effect waves-dark" href="student/withdrawn-students.php" title="Manage students who have been withdrawn" data-toggle="tooltip">Withdrawn Students</a></li>
                                <li><a class="waves-effect waves-dark" href="student/graduated-students.php" title="Manage students who have graduated" data-toggle="tooltip">Graduated Students</a></li>
                                <li><a class="waves-effect waves-dark" href="student/manage-parents.php" title="See List of all parents on the system" data-toggle="tooltip">Manage Parents</a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Class</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="classes/class-arm-mgt.php" title="View all class arms and perform specific tasks for any class arm" data-toggle="tooltip">Manage Class Arms</a></li>
                                <li><a class="waves-effect waves-dark" href="classes/classes_and_arms.php" title="Create, Edit or Delete Arm/Class Arm" data-toggle="tooltip">Classes and Arms</a></li>
                                <li><a class="waves-effect waves-dark" href="classes/class-teachers.php" title="Manage all class teachers on the system" data-toggle="tooltip">Class teachers</a></li>
                                <li><a class="waves-effect waves-dark" href="classes/assignment.php" title="Create, edit or delete class assignments" data-toggle="tooltip">Class Assignments</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="classes/past-records.php" aria-expanded="false" title="Manage records in a past Term/Session" data-toggle="tooltip"><i class="fa fa-file-text"></i><span class="hide-menu">Past Records</span></a>
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
                                <li><a class="waves-effect waves-dark" href="subject/subject1.php">School Subjects</a></li>
                                <li><a class="waves-effect waves-dark" href="subject/teachers.php" title="Manage all subject teachers. (i.e. All Staff who have been assigned to one or more subjects)" data-toggle="tooltip">Subject Teachers</a></li>
                                <li><a class="waves-effect waves-dark" href="subject/departments.php" title="Manage Subject departments. Add, update or remove departments" data-toggle="tooltip">Departments</a></li>
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
                                <li><a class="waves-effect waves-dark" href="messaging/send-email.php" title="Send customized email to Parents, Staff, Students or Admin" data-toggle="tooltip">Send Email</a></li>


                                <li><a class="waves-effect waves-dark" href="messaging/send-text-message.php" title="Send a text message to Parents, Staff, Students or Admin" data-toggle="tooltip">Send Text Message</a></li>
                                <li><a class="waves-effect waves-dark" href="messaging/generate-letter.php" title="Generate a customized Letter for Parents, Staff, Students or Admin" data-toggle="tooltip">Generate Letter</a></li>
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


                                <li><a class="waves-effect waves-dark" href="staff/manage.php" title="See List of all staff on the system" data-toggle="tooltip">Manage Staff</a></li>

                                <li><a class="waves-effect waves-dark" href="staff/manage1.php" title="See List of all administrators on the system" data-toggle="tooltip">Manage Admin</a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-soccer"></i><span class="hide-menu">Sport House</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="sport-house/" title="Add, Edit or Delete Sport Houses" data-toggle="tooltip">Manage Sport Houses</a></li>
                                <li><a class="waves-effect waves-dark" href="sport-house/heads.php" title="Manage house masters/mistresses" data-toggle="tooltip">Sport House Heads</a></li>
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

                                <li><a class="waves-effect waves-dark" href="school-config/school-grades.php" title="Add, Edit or Delete Grades" data-toggle="tooltip">School Grades</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/grades-config.php" title="Configure how grades are awarded in students result" data-toggle="tooltip">Grade Configuration</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/school-information.php" title="View/Make changes to the school's information" data-toggle="tooltip">School Information</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/result-setting.php" title="Make changes to how students Report card or Broadsheet looks" data-toggle="tooltip">Result Settings</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/academic-session.php" title="View Academic Session history, create new session, or move to next session" data-toggle="tooltip">Academic Sessions</a></li>

                                <li><a class="waves-effect waves-dark" href="school-config/session-parameters.php" title="Set or Edit weight of session parameters (i.e. CA1, CA2..., Exam, Term weight)" data-toggle="tooltip">Session Parameters</a></li>

                                <li><a class="waves-effect waves-dark" href="school-config/comment-remarks.php" title="create, edit or delete library of comment remarks" data-toggle="tooltip">Comment Remarks</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/behavioural-traits.php" title="Manage your preference of student behavioural traits e.g Neatness, punctuality etc..." data-toggle="tooltip">Behavioural Traits</a></li>
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
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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
                    <!-- Column -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="fa fa-users"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light"><?php $class->get_student_count() ?></h3>
                                        <h5 class="text-muted m-b-0">Total Students</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="fa fa-male"></i></div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light"><?php $class->get_student_male() ?></h3>
                                        <h5 class="text-muted m-b-0">Male Students</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-primary"><i class="fa fa-female"></i>
                                    </div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light"><?php $class->get_student_female() ?></h3>
                                        <h5 class="text-muted m-b-0">Female Students</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-danger"><i class="fa fa-user"></i>
                                    </div>
                                    <div class="m-l-10 align-self-center">
                                        <h3 class="m-b-0 font-light"><?php $class->get_student_staff() ?></h3>
                                        <h5 class="text-muted m-b-0">Total Staff</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Class Statistics</h4>
                                </div>
                                <div class="table-responsive m-t-20">
                                    <table class="table stylish-table color-table table-bordered success-table" style="min-width: 400px">
                                        <thead>
                                            <tr>
                                                <th class="center">Class</th>
                                                <th class="center">Students</th>
                                                <th class="center" colspan="2">Student Bio Data completion rate</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $class->get_classnumeric() ?>
                                            <!-- <tr>
                                                <td>JSS 2</td>
                                                <td class="center">432</td>
                                                <td width="50%">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning active progress-bar-striped" style="width: 61%; height:14px;" role="progressbar">6%</div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="classes/class-data-completion.php" target="_blank" class="btn btn-success btn-sm btn-rounded waves-effect waves-light">See details
                                                    </a>
                                                </td>
                                            </tr> -->

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo $class->get_class('id') ?></h3>
                                <h6 class="card-subtitle">Users currently registered to this portal</h6>
                                <div id="visitor" style="height:260px; width:100%;"></div>
                            </div>
                            <div>
                                <hr class="m-t-0 m-b-0">
                            </div>
                            <div class="card-body text-center ">
                                <ul class="list-inline m-b-0">
                                    <li>
                                        <h6 class="text-muted text-info"><i class="fa fa-circle font-10 m-r-10 "></i>Students</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted  text-primary"><i class="fa fa-circle font-10 m-r-10"></i>Staff</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted  text-success"><i class="fa fa-circle font-10 m-r-10"></i>Parents</h6>
                                    </li>
                                    <li>
                                        <h6 class="text-muted  text-success" style="color: #755bf2 !important;"><i class="fa fa-circle font-10 m-r-10"></i>Administrators</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body bg-info">
                                <h4 class="text-white card-title">Online Users</h4>
                                <h6 class="card-subtitle text-white m-b-0 op-5">See administrators currently online</h6>
                            </div>
                            <div class="card-body">
                                <div class="message-box contact-box">
                                    <div class="message-widget contact-widget">
                                        <small><i>You are the only admin online at the moment</i></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Row -->

                <!-- Row -->

                <!-- Row -->


                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

            <!--c3 JavaScript -->
            <script src="assets/plugins/d3/d3.min.js"></script>
            <script src="assets/plugins/c3-master/c3.min.js"></script>

            <!-- Chart JS -->
            <script src="assets/plugins/Chart.js/Chart.min.js"></script>


            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

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
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>

    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="assets/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>

    <!--stickey kit -->
    <script src="assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <!--Custom JavaScript -->
    <script src="assets/js/custom.min.js"></script>

    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->


    <script src="assets/js/bootstrap-notify.js"></script>

    <script src="assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

    <!-- jQuery peity -->
    <script src="assets/plugins/tablesaw-master/dist/tablesaw.js"></script>
    <script src="assets/plugins/tablesaw-master/dist/tablesaw-init.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/toastify.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <?php 
    if (isset($_GET['engine'])) {
          ?><script>
             $.notify("Glad To Have You Back <?php echo $name ?>! 👋", {
            class: "my-class",
            delay: 0,
            align: "center",
            verticalAlign: "middle",
            animationType: "scale"
        });
          </script> <?php         
    }?>
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
            $('#n-center').load('other/notification ul', function() {
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
    <style>
        .my-class {
            background: #304CD8;
       background: -webkit-linear-gradient(left, # 304 CD8 0 % ,
            #9F3762 100%);
       background: -ms-linear-gradient(left, # 304 CD8 0 % ,
            #9F3762 100%);
       background: linear-gradient(to right, # 304 CD8 0 % ,
            #9F3762 100%);
       color: # fff;
            font-size: 25 px;
            padding: 35 px;
            text-align: center;
        }
    </style>
    
    <!-- ============================================================== -->
</body>

</html>