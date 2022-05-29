<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="St. Monica Nur. & Pri. School, Ibusa Delta State">
    <meta name="keywords" content="education-school-portal">
    <meta name="author" content="BiNoZy DiGiTaL KoNcEpT">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo_4a262eb696676654.png?v1">
    <title>BiNoZy DiGiTaL - SDMS - St. Monica Nur. & Pri. Ibusa - School Portal</title>
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
                        <span class="short_name" style="color: #FFF">ST. MONICA, IBUSA</span>
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
                            Class Nominal Roll Preference - JSS 1A </h3>
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
                                        <a href="staff/staff-profile/c1c5acb92b6ad2357">
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
                                                <a class="nav-link" href="classes/manage-students/ff2ff4cc13f880b695/170ac27a1b5177272" title="See list of students in this class" data-toggle="tooltip">Students</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Subjects
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="classes/student-subject-registration/ff2ff4cc13f880b695/170ac27a1b5177272" title="Register subjects for students in this class" data-toggle="tooltip">Student Subject Registration</a>

                                                    <a class="dropdown-item" href="classes/register-class-subject/ff2ff4cc13f880b695/170ac27a1b5177272" title="Register a subject that is offered by the whole class" data-toggle="tooltip">Class Subject Registration</a>


                                                    <a class="dropdown-item" href="classes/create-combo-subject/ff2ff4cc13f880b695/170ac27a1b5177272" title="Make an already registered subject become a combination subject" data-toggle="tooltip">Create Combo Subject</a>
                                                    <a class="dropdown-item" href="classes/subject-offered-by-students/ff2ff4cc13f880b695/170ac27a1b5177272" target="_blank" title="See subjects offered by students in this class" data-toggle="tooltip">Subjects offered by students</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="score/class-subject/ff2ff4cc13f880b695/170ac27a1b5177272" title="Enter/Edit scores for subjects registered in this class" data-toggle="tooltip">Result Computation</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Class Reports
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">

                                                    <a class="dropdown-item" href="score/report-card-link/ff2ff4cc13f880b695/170ac27a1b5177272" title="View this term report card of this class" data-toggle="tooltip">View Report Card</a>


                                                    <a class="dropdown-item" href="score/post-result-comment/ff2ff4cc13f880b695/170ac27a1b5177272" title="Place comments on student's report card" data-toggle="tooltip">Report card comment</a>
                                                    <a class="dropdown-item" href="score/send-result/ff2ff4cc13f880b695/170ac27a1b5177272" title="Send student results to their parents via email" data-toggle="tooltip">Send Results to parents</a>

                                                    <div class="dropdown-divider"></div>

                                                    <a class="dropdown-item" href="score/student-ranking-form/ff2ff4cc13f880b695/170ac27a1b5177272" title="Fetch students ranked by their overall performance" data-toggle="tooltip">Score Ranking</a>

                                                    <a class="dropdown-item" href="score/student-subject-ranking-form/ff2ff4cc13f880b695/170ac27a1b5177272" title="Fetch students ranked by their performance in a specific subject" data-toggle="tooltip">Subject Ranking</a>

                                                    <a class="dropdown-item" href="score/term-analysis/ff2ff4cc13f880b695/170ac27a1b5177272" title="see performance analysis of students in JSS 1 class corridor" data-toggle="tooltip" target="_blank">Term Analysis</a>

                                                    <a class="dropdown-item" href="score/subject-grade-analysis/ff2ff4cc13f880b695/170ac27a1b5177272" title="see number of student scoring specific grades in this class arm" data-toggle="tooltip" target="_blank">Subject Grade Analysis</a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Score sheets
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" target="_blank" href="score/class-datasheet/ff2ff4cc13f880b695/170ac27a1b5177272" title="View/print a general class datasheet (subject independent) for this class" data-toggle="tooltip">Class Datasheet</a>
                                                    <a class="dropdown-item" target="_blank" href="score/class-datasheet/ff2ff4cc13f880b695/170ac27a1b5177272/ca" title="View/print Continuous assessment datasheet for this class" data-toggle="tooltip">CA Datasheet</a>
                                                    <a class="dropdown-item" href="score/broadsheet-preference/ff2ff4cc13f880b695/170ac27a1b5177272" title="View/print broadsheet of all students scores in this class" data-toggle="tooltip">Broadsheet</a>
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

                                                    <a class="dropdown-item" href="classes/nominal-roll.html" title="View/print this class nominal roll" data-toggle="tooltip">Class Nominal Roll</a>

                                                    <a class="dropdown-item" href="classes/student-matters-form.html" target="_blank" title="View/print the student's matters form" data-toggle="tooltip">Student Matters Form</a>


                                                    <a class="dropdown-item" href="classes/bulk-bio-updates.html" title="Update information of students in this class (in bulk)" data-toggle="tooltip">Class Bulk Bio Update</a>

                                                    <a class="dropdown-item" href="staff/manage.html" title="Change the existing class teacher of this class to a new staff" data-toggle="tooltip">Change Class Teacher</a>

                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </nav>
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
                                                        <label class="form-control-label m-r-20" for="s_c_1">JSS 1A
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
                      &copy; <?php echo date('Y'); ?> School Database Management System (Edu-Portal) Powered By
                <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL KoNcEpT</a>
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