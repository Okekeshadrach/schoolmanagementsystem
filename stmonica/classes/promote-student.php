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
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/logo_4a262eb69667.png?v1">
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
                            Promote Students in JSS 1A </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Promote students</li>
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
                                        <a href="staff/staff-profile/7ca355b224f97b077">
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
                                                <a class="nav-link" href="classes/manage-students/1a8530a5135d077f8c/170ac27a1b5177272" title="See list of students in this class" data-toggle="tooltip">Students</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Subjects
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="classes/student-subject-registration/1a8530a5135d077f8c/170ac27a1b5177272" title="Register subjects for students in this class" data-toggle="tooltip">Student Subject Registration</a>

                                                    <a class="dropdown-item" href="classes/register-class-subject/1a8530a5135d077f8c/170ac27a1b5177272" title="Register a subject that is offered by the whole class" data-toggle="tooltip">Class Subject Registration</a>

                                                    <a class="dropdown-item" href="classes/register-previous-term-subject/1a8530a5135d077f8c/170ac27a1b5177272" title="Repeat subject registration that was done in the previous term for this term" data-toggle="tooltip">Register Subject(s) from Last Term</a>

                                                    <a class="dropdown-item" href="classes/create-combo-subject/1a8530a5135d077f8c/170ac27a1b5177272" title="Make an already registered subject become a combination subject" data-toggle="tooltip">Create Combo Subject</a>
                                                    <a class="dropdown-item" href="classes/subject-offered-by-students/1a8530a5135d077f8c/170ac27a1b5177272" target="_blank" title="See subjects offered by students in this class" data-toggle="tooltip">Subjects offered by students</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="score/class-subject/1a8530a5135d077f8c/170ac27a1b5177272" title="Enter/Edit scores for subjects registered in this class" data-toggle="tooltip">Result Computation</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Class Reports
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">

                                                    <a class="dropdown-item" href="score/report-card-link/1a8530a5135d077f8c/170ac27a1b5177272" title="View this term report card of this class" data-toggle="tooltip">View Report Card</a>


                                                    <a class="dropdown-item" href="score/post-result-comment/1a8530a5135d077f8c/170ac27a1b5177272" title="Place comments on student's report card" data-toggle="tooltip">Report card comment</a>
                                                    <a class="dropdown-item" href="score/send-result/1a8530a5135d077f8c/170ac27a1b5177272" title="Send student results to their parents via email" data-toggle="tooltip">Send Results to parents</a>

                                                    <div class="dropdown-divider"></div>

                                                    <a class="dropdown-item" href="score/student-ranking-form/1a8530a5135d077f8c/170ac27a1b5177272" title="Fetch students ranked by their overall performance" data-toggle="tooltip">Score Ranking</a>

                                                    <a class="dropdown-item" href="score/student-subject-ranking-form/1a8530a5135d077f8c/170ac27a1b5177272" title="Fetch students ranked by their performance in a specific subject" data-toggle="tooltip">Subject Ranking</a>

                                                    <a class="dropdown-item" href="score/term-analysis/1a8530a5135d077f8c/170ac27a1b5177272" title="see performance analysis of students in JSS 1 class corridor" data-toggle="tooltip" target="_blank">Term Analysis</a>

                                                    <a class="dropdown-item" href="score/subject-grade-analysis/1a8530a5135d077f8c/170ac27a1b5177272" title="see number of student scoring specific grades in this class arm" data-toggle="tooltip" target="_blank">Subject Grade Analysis</a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Score sheets
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" target="_blank" href="score/class-datasheet/1a8530a5135d077f8c/170ac27a1b5177272" title="View/print a general class datasheet (subject independent) for this class" data-toggle="tooltip">Class Datasheet</a>
                                                    <a class="dropdown-item" target="_blank" href="score/class-datasheet/1a8530a5135d077f8c/170ac27a1b5177272/ca" title="View/print Continuous assessment datasheet for this class" data-toggle="tooltip">CA Datasheet</a>
                                                    <a class="dropdown-item" href="score/broadsheet-preference/1a8530a5135d077f8c/170ac27a1b5177272" title="View/print broadsheet of all students scores in this class" data-toggle="tooltip">Broadsheet</a>
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

                                                    <a class="dropdown-item" href="classes/nominal-roll/1a8530a5135d077f8c/170ac27a1b5177272" title="View/print this class nominal roll" data-toggle="tooltip">Class Nominal Roll</a>

                                                    <a class="dropdown-item" href="classes/student-matters-form/1a8530a5135d077f8c/170ac27a1b5177272" target="_blank" title="View/print the student's matters form" data-toggle="tooltip">Student Matters Form</a>


                                                    <a class="dropdown-item" href="classes/bulk-bio-updates.html" title="Update information of students in this class (in bulk)" data-toggle="tooltip">Class Bulk Bio Update</a>

                                                    <a class="dropdown-item" href="staff/manage.html" title="Change the existing class teacher of this class to a new staff" data-toggle="tooltip">Change Class Teacher</a>

                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </nav>
                                <form action="classes/promote-student-process" id="promote-student" method="post" accept-charset="utf-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="new_class_arm_id">Promote selected students to:</label>
                                                <select class="custom-select form-control select2" id="new_class_arm_id" name="new_class_arm_id" style="width: 100%" required>
                                                    <option value=""></option>
                                                    <option value="ea6c6fa410c590088a">JSS 2A</option>
                                                    <option value="67cf40ab1168f1672c">JSS 2B</option>
                                                    <option value="8f5f9aaf1204f2153d">JSS 2C</option>
                                                    <option value="3957d2ea13e3258c2c">JSS 2D</option>
                                                    <option value="e1c9060514562e57d0">JSS 2E</option>
                                                    <option value="63839e9e159c480fb4">JSS 2G</option>
                                                    <option value="454b445116d350ffa2">JSS 2H</option>
                                                    <option value="1ed8c90e1771e8e4e7">JSS 2J</option>
                                                    <option value="dc91094a18f3f649e3">JSS 2K</option>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="hidden" name="old_class_arm_name" value="JSS 1A">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Do
                                                    Promote</button> <span class="processor"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <p>Select the students you intend to promote, select the target higher class, then
                                        click on <i>"Do Promote"</i></p>
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
                                                        <a class="text-info" href="student/student-profile/03969b524513d5386dda" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="8961d23b45131217b0b1" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/5c19707b4514b77d0aa3" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="a9a5169f45141a82c375" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/13690e86451559f37480" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="b00c810d451538817121" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/cd7e0fe24516220a08c0" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="833649f1451670ffb14c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/32e6f0684517a0d4827b" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="76b2700d45176242aa15" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/96681ebc45189d7cf452" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="2b2c26a645188e147e80" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/c0c98bfd451983350f1d" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="2e6eaafa451938d5adbf" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/83d6af884520658d0dcf" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="43de27374520d838a873" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/eb8dc0e94521aa96c39a" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="cb5ea4624521b5d491a4" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/2198868b4522803ab15c" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="90989bbe45229dd912b8" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/09dfa9a14523d152da9f" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="226745c84523d1536893" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/f4586ae2452475e4dffe" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="e776158145247162fdc5" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/f95dd0c54525542a2402" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="75f541be4525178f9724" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/00b31297452610f6fb04" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="8eafac5245260fcf6a2b" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/aa4123634527a5eeb7f7" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="3551409a4527594fe529" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/0f8b225745289d7bd616" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="79e1f621452865ad0b79" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/d0062bd54529af9ce953" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="0db698854529755c27d2" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/bea8612b4530725f64a0" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="9698930f45301bd98ab3" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/63a83cac453194c72a6d" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="5e7fdf504531de66f351" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/2d9c219245329c5a5af8" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="dba0001645326b686c28" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/d4cb4bc045333ad3eb66" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="130e99ec45339c0aaabe" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/4afe087e4534919a976e" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="b979ac0845348bc9c0cd" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/627cc27845353085ae4b" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="d370f79f4535bde4e71c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/c881b9a54536656e0082" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="084959f44536ed04573c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/9f5fa6c045378f21cd9c" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="cadbea304537b53c924b" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/39d785464538d0d67c91" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="0b756523453878a21e0f" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/c79230554539d92b0520" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="cb0e59b845398efe6ecb" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/53fe29854540a5676171" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="40697eb745402f1d0733" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/6632d917454110378af4" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="faff3f4945415b0d13d5" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/522a0cc64542dec9bf5b" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="617565fc4542e6f1e298" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/7e34103d45432dcb9a5c" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="0577adb7454308a45f6c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/c2f2e7f045441171582b" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="3222ba0d4544acd19705" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/3406a8ed4545d149ef60" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="37ab30084545408419db" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/a2bc20ec4546f74f254d" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="e59b5cd2454676801fa0" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/d7bd423e45478408bcb8" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="f71b44654547e3c16d65" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/4bce1bf145482a4fc4ff" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="3b672d43454813dd4e9c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/e348e43a454918d9995f" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="461da9ae45498fe7bf15" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/752b24b3455054ccf0c1" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="7818e6094550c7bf221c" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/a14b40b74551a9bc801b" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="b9960a5845516834b4c1" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/49236e644552196783e7" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="1f89fe6b4552ff682829" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/eeed43ed4553e24518ae" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="7a69f81b455394d59fb3" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/325dbb7c4554271b2c35" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="d7eb03ab4554407a4396" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/6a77e8034555d9e89fc5" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="eaf9e7af45558ea01d6d" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/b49d746c455642326cb9" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="6b336e944556b40e389f" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/3df1c2174557c2ad15a9" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="d1d294b44557d4638380" class="chk">
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
                                                        <a class="text-info" href="student/student-profile/ceeb08e04512bcf10c95" target="_blank">
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
                                                                <input name="stud_id[]" type="checkbox" value="8d2ed26d4512aa5e1908" class="chk">
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
                    $('#promote-student').submit(function(e) {
                        e.preventDefault();

                        var class_arm_name = $('#new_class_arm_id option:selected').text();
                        var count_stud = $('input:checkbox:checked.chk').length;

                        if (count_stud > 0) {
                            swal({
                                title: "Are you sure?",
                                text: "You want to promote " + count_stud + " student(s) to " + class_arm_name + "??",
                                type: "warning",
                                showCancelButton: true,
                                confirmButtonColor: "#13aa2c",
                                confirmButtonText: "Yes, proceed!"
                            }, function() {
                                var jqxhr = submit_form('#promote-student');
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
                    &copy; <?php echo date('Y'); ?> School Database Management System (Edu-Portal) Powered By <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL KoNcEpT</a>
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
