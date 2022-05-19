<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Federal Government Girls College, Nkwelle Ezunaka">
    <meta name="keywords" content="school, education">
    <meta name="author" content="BiNoZy DiGiTaL koncept">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo_4a262eb69667.png?v1">
    <title>Krystal’s IT Academy F.G.G.C, NKWELLE EZUNAKA - School Portal</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- chartist CSS -->
    <link href="assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet">
    <link href="assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="assets/plugins/css-chart/css-chart.css" rel="stylesheet">

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
        var site_url = '';
        var base_url = '';

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
                            <img src="assets/img/logo_4a262eb69667.png?v1" alt="school-page" class="dark-logo logo" height="60" width="60" />
                            <!-- Light Logo icon -->
                            <img src="assets/img/logo_4a262eb69667.png?v1" alt="homepage" class="light-logo logo" height="60" width="60" />
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
                                                <img src="uploads/nobody_m.jpg" alt="user">
                                            </div>
                                            <div class="u-text">
                                                <h4 class="user-full-name">Henry Obinozie</h4>
                                                <p class="text-muted user-email">obinoziehenry@gmail.com</p><a href="admin/profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a class="waves-effect waves-dark" href="admin-account/my-activity.php"><i class="ti-wallet"></i> My Activity Log</a></li>
                                    <li><a class="waves-effect waves-dark" href="admin/change-password.html"><i class="ti-key"></i> Change Password</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a class="waves-effect waves-dark" href="login/logout"><i class="fa fa-power-off"></i> Logout</a></li>
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
                    <div class="profile-img"> <img src="uploads/nobody_m.jpg" alt="user" /> </div>
                    <!-- User profile text-->
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown user-full-name" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Henry
                            Obinozie</a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="admin/profile.html" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <a href="admin-account/my-activity.php" class="dropdown-item"><i class="ti-wallet"></i> My
                                Activity Log</a>
                            <div class="dropdown-divider"></div> <a href="login/logout" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
                <!-- End User profile text-->

                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            <a href="admin-account" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                                <span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">ACADEMICS</li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-users"></i>
                                <span class="hide-menu">Students</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a class="waves-effect waves-dark" href="student/student-mgt" title="Manage list of student's that fall in a set criteria" data-toggle="tooltip">Students List</a></li>

                                <li><a class="waves-effect waves-dark" href="student/add-student" title="Register a new student on the system" data-toggle="tooltip">Register new
                                        Student</a></li>
                                <li><a class="waves-effect waves-dark" href="student/withdrawn-students" title="Manage students who have been withdrawn" data-toggle="tooltip">Withdrawn
                                        Students</a></li>
                                <li><a class="waves-effect waves-dark" href="student/graduated-students" title="Manage students who have graduated" data-toggle="tooltip">Graduated
                                        Students</a></li>
                                <li><a class="waves-effect waves-dark" href="student/manage-parents" title="See List of all parents on the system" data-toggle="tooltip">Manage
                                        Parents</a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Class</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="classes/class-arm-mgt" title="View all class arms and perform specific tasks for any class arm" data-toggle="tooltip">Manage Class Arms</a></li>
                                <li><a class="waves-effect waves-dark" href="classes/classes_and_arms" title="Create, Edit or Delete Arm/Class Arm" data-toggle="tooltip">Classes and
                                        Arms</a></li>
                                <li><a class="waves-effect waves-dark" href="classes/class-teachers" title="Manage all class teachers on the system" data-toggle="tooltip">Class
                                        teachers</a></li>
                                <li><a class="waves-effect waves-dark" href="classes/assignment" title="Create, edit or delete class assignments" data-toggle="tooltip">Class
                                        Assignments</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="classes/past-records" aria-expanded="false" title="Manage records in a past Term/Session" data-toggle="tooltip"><i class="fa fa-file-text"></i><span class="hide-menu">Past Records</span></a>
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
                                <li><a class="waves-effect waves-dark" href="subject">School Subjects</a></li>
                                <li><a class="waves-effect waves-dark" href="subject/teachers" title="Manage all subject teachers. (i.e. All Staff who have been assigned to one or more subjects)" data-toggle="tooltip">Subject Teachers</a></li>
                                <li><a class="waves-effect waves-dark" href="subject/departments" title="Manage Subject departments. Add, update or remove departments" data-toggle="tooltip">Departments</a></li>
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
                                <li><a class="waves-effect waves-dark" href="messaging/send-email" title="Send customized email to Parents, Staff, Students or Admin" data-toggle="tooltip">Send Email</a></li>


                                <li><a class="waves-effect waves-dark" href="messaging/send-text-message" title="Send a text message to Parents, Staff, Students or Admin" data-toggle="tooltip">Send Text Message</a></li>
                                <li><a class="waves-effect waves-dark" href="messaging/generate-letter" title="Generate a customized Letter for Parents, Staff, Students or Admin" data-toggle="tooltip">Generate Letter</a></li>
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


                                <li><a class="waves-effect waves-dark" href="staff/manage.html" title="See List of all staff on the system" data-toggle="tooltip">Manage
                                        Staff</a></li>

                                <li><a class="waves-effect waves-dark" href="admin-account/manage" title="See List of all administrators on the system" data-toggle="tooltip">Manage Admin</a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-soccer"></i><span class="hide-menu">Sport House</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="sport-house" title="Add, Edit or Delete Sport Houses" data-toggle="tooltip">Manage Sport
                                        Houses</a></li>
                                <li><a class="waves-effect waves-dark" href="sport-house/heads" title="Manage house masters/mistresses" data-toggle="tooltip">Sport House
                                        Heads</a></li>
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

                                <li><a class="waves-effect waves-dark" href="school-config/school-grades" title="Add, Edit or Delete Grades" data-toggle="tooltip">School Grades</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/grades-config" title="Configure how grades are awarded in students result" data-toggle="tooltip">Grade Configuration</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/school-information" title="View/Make changes to the school's information" data-toggle="tooltip">School Information</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/result-setting" title="Make changes to how students Report card or Broadsheet looks" data-toggle="tooltip">Result Settings</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/academic-session" title="View Academic Session history, create new session, or move to next session" data-toggle="tooltip">Academic Sessions</a></li>

                                <li><a class="waves-effect waves-dark" href="school-config/session-parameters" title="Set or Edit weight of session parameters (i.e. CA1, CA2..., Exam, Term weight)" data-toggle="tooltip">Session Parameters</a></li>

                                <li><a class="waves-effect waves-dark" href="school-config/comment-remarks" title="create, edit or delete library of comment remarks" data-toggle="tooltip">Comment Remarks</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/behavioural-traits" title="Manage your preference of student behavioural traits e.g Neatness, punctuality etc..." data-toggle="tooltip">Behavioural Traits</a></li>
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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">
                            Student Subject Registration: JSS 1A </h3>
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
                                            Obinozie Nnamdi Francis </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 1em">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav">

                                            <li class="nav-item">
                                                <a class="nav-link" href="classes/manage-students/d6fd49ad137f5edbe4/170ac27a1b5177272" title="See list of students in this class" data-toggle="tooltip">Students</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Subjects
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="classes/student-subject-registration/d6fd49ad137f5edbe4/170ac27a1b5177272" title="Register subjects for students in this class" data-toggle="tooltip">Student Subject Registration</a>

                                                    <a class="dropdown-item" href="classes/reg-class-subject.html" title="Register a subject that is offered by the whole class" data-toggle="tooltip">Class Subject Registration</a>


                                                    <a class="dropdown-item" href="classes/create-combo.html" title="Make an already registered subject become a combination subject" data-toggle="tooltip">Create Combo Subject</a>
                                                    <a class="dropdown-item" href="classes/subject-offered-by-students/d6fd49ad137f5edbe4/170ac27a1b5177272" target="_blank" title="See subjects offered by students in this class" data-toggle="tooltip">Subjects offered by students</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="score/class-subject.html" title="Enter/Edit scores for subjects registered in this class" data-toggle="tooltip">Result Computation</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Class Reports
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">

                                                    <a class="dropdown-item" href="score/report-card.html" title="View this term report card of this class" data-toggle="tooltip">View Report Card</a>


                                                    <a class="dropdown-item" href="score/post-result-comment.html" title="Place comments on student's report card" data-toggle="tooltip">Report card comment</a>
                                                    <a class="dropdown-item" href="score/send-result.html" title="Send student results to their parents via email" data-toggle="tooltip">Send Results to parents</a>

                                                    <div class="dropdown-divider"></div>

                                                    <a class="dropdown-item" href="score/student-ranking-form.html" title="Fetch students ranked by their overall performance" data-toggle="tooltip">Score Ranking</a>

                                                    <a class="dropdown-item" href="score/student-subject-ranking.html" title="Fetch students ranked by their performance in a specific subject" data-toggle="tooltip">Subject Ranking</a>

                                                    <a class="dropdown-item" href="score/term-analysis/d6fd49ad137f5edbe4/170ac27a1b5177272" title="see performance analysis of students in JSS 1 class corridor" data-toggle="tooltip" target="_blank">Term Analysis</a>

                                                    <a class="dropdown-item" href="score/subject-grade-analysis/d6fd49ad137f5edbe4/170ac27a1b5177272" title="see number of student scoring specific grades in this class arm" data-toggle="tooltip" target="_blank">Subject Grade Analysis</a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Score sheets
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" target="_blank" href="score/class-datasheet/d6fd49ad137f5edbe4/170ac27a1b5177272" title="View/print a general class datasheet (subject independent) for this class" data-toggle="tooltip">Class Datasheet</a>
                                                    <a class="dropdown-item" target="_blank" href="score/class-datasheet/d6fd49ad137f5edbe4/170ac27a1b5177272/ca" title="View/print Continuous assessment datasheet for this class" data-toggle="tooltip">CA Datasheet</a>
                                                    <a class="dropdown-item" href="score/boardsheet-preference.html" title="View/print broadsheet of all students scores in this class" data-toggle="tooltip">Broadsheet</a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Class settings
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">


                                                    <a class="dropdown-item" href="classes/promote-student.html" title="Promote students in this class to the next class" data-toggle="tooltip">Promote Student(s)</a>


                                                    <a class="dropdown-item" href="classes/withdraw-student.html" title="Withdraw students who have left the school from the system" data-toggle="tooltip">Withdraw Student(s)</a>

                                                    <a class="dropdown-item" href="classes/move-student.html" title="Move students from this class arm to a different class arm within the class corridor" data-toggle="tooltip">Move Student(s)</a>

                                                    <a class="dropdown-item" href="classes/nominal-roll/d6fd49ad137f5edbe4/170ac27a1b5177272" title="View/print this class nominal roll" data-toggle="tooltip">Class Nominal Roll</a>

                                                    <a class="dropdown-item" href="classes/student-matters-form/d6fd49ad137f5edbe4/170ac27a1b5177272" target="_blank" title="View/print the student's matters form" data-toggle="tooltip">Student Matters Form</a>


                                                    <a class="dropdown-item" href="classes/bulk-bio-updates.html" title="Update information of students in this class (in bulk)" data-toggle="tooltip">Class Bulk Bio Update</a>

                                                    <a class="dropdown-item" href="staff/manage.html" title="Change the existing class teacher of this class to a new staff" data-toggle="tooltip">Change Class Teacher</a>

                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </nav>
                                <form action="classes/student-subject-registration-process" id="register-subj" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="subj">Select Subject</label>
                                                <select name="subject_id" id="subj" class="custom-select form-control select2" required>
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
                    © 2018 School Information Management System (MySkool Portal) by <a href="https://krystaldigitalng.com" target="_blank">BiNoZy DiGiTaL koncept</a>
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