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
            <!-- =======================  This page styles =================== ---->
            <link href="assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet">
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
                            Bulk Bio Update - JSS 1A Students
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
                                        <a href="staff/staff-profile.html">
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
                                                <a class="nav-link" href="classes/manage-students/845573d9136f90ed14/170ac27a1b5177272" title="See list of students in this class" data-toggle="tooltip">Students</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Subjects
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="classes/student-subject-registration/845573d9136f90ed14/170ac27a1b5177272" title="Register subjects for students in this class" data-toggle="tooltip">Student Subject Registration</a>

                                                    <a class="dropdown-item" href="classes/register-class-subject/845573d9136f90ed14/170ac27a1b5177272" title="Register a subject that is offered by the whole class" data-toggle="tooltip">Class Subject Registration</a>

                                                    <a class="dropdown-item" href="classes/register-previous-term-subject/845573d9136f90ed14/170ac27a1b5177272" title="Repeat subject registration that was done in the previous term for this term" data-toggle="tooltip">Register Subject(s) from Last Term</a>

                                                    <a class="dropdown-item" href="classes/create-combo-subject/845573d9136f90ed14/170ac27a1b5177272" title="Make an already registered subject become a combination subject" data-toggle="tooltip">Create Combo Subject</a>
                                                    <a class="dropdown-item" href="classes/subject-offered-by-students/845573d9136f90ed14/170ac27a1b5177272" target="_blank" title="See subjects offered by students in this class" data-toggle="tooltip">Subjects offered by students</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="score/class-subject/845573d9136f90ed14/170ac27a1b5177272" title="Enter/Edit scores for subjects registered in this class" data-toggle="tooltip">Result Computation</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Class Reports
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">

                                                    <a class="dropdown-item" href="score/report-card-link/845573d9136f90ed14/170ac27a1b5177272" title="View this term report card of this class" data-toggle="tooltip">View Report Card</a>


                                                    <a class="dropdown-item" href="score/post-result-comment/845573d9136f90ed14/170ac27a1b5177272" title="Place comments on student's report card" data-toggle="tooltip">Report card comment</a>
                                                    <a class="dropdown-item" href="score/send-result/845573d9136f90ed14/170ac27a1b5177272" title="Send student results to their parents via email" data-toggle="tooltip">Send Results to parents</a>

                                                    <div class="dropdown-divider"></div>

                                                    <a class="dropdown-item" href="score/student-ranking-form/845573d9136f90ed14/170ac27a1b5177272" title="Fetch students ranked by their overall performance" data-toggle="tooltip">Score Ranking</a>

                                                    <a class="dropdown-item" href="score/student-subject-ranking-form/845573d9136f90ed14/170ac27a1b5177272" title="Fetch students ranked by their performance in a specific subject" data-toggle="tooltip">Subject Ranking</a>

                                                    <a class="dropdown-item" href="score/term-analysis/845573d9136f90ed14/170ac27a1b5177272" title="see performance analysis of students in JSS 1 class corridor" data-toggle="tooltip" target="_blank">Term Analysis</a>

                                                    <a class="dropdown-item" href="score/subject-grade-analysis/845573d9136f90ed14/170ac27a1b5177272" title="see number of student scoring specific grades in this class arm" data-toggle="tooltip" target="_blank">Subject Grade Analysis</a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Score sheets
                                                </a>
                                                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" target="_blank" href="score/class-datasheet/845573d9136f90ed14/170ac27a1b5177272" title="View/print a general class datasheet (subject independent) for this class" data-toggle="tooltip">Class Datasheet</a>
                                                    <a class="dropdown-item" target="_blank" href="score/class-datasheet/845573d9136f90ed14/170ac27a1b5177272/ca" title="View/print Continuous assessment datasheet for this class" data-toggle="tooltip">CA Datasheet</a>
                                                    <a class="dropdown-item" href="score/broadsheet-preference/845573d9136f90ed14/170ac27a1b5177272" title="View/print broadsheet of all students scores in this class" data-toggle="tooltip">Broadsheet</a>
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

                                                    <a class="dropdown-item" href="classes/nominal-roll/845573d9136f90ed14/170ac27a1b5177272" title="View/print this class nominal roll" data-toggle="tooltip">Class Nominal Roll</a>

                                                    <a class="dropdown-item" href="classes/student-matters-form/845573d9136f90ed14/170ac27a1b5177272" target="_blank" title="View/print the student's matters form" data-toggle="tooltip">Student Matters Form</a>


                                                    <a class="dropdown-item" href="classes/bulk-bio-updates.html" title="Update information of students in this class (in bulk)" data-toggle="tooltip">Class Bulk Bio Update</a>

                                                    <a class="dropdown-item" href="staff/manage.html" title="Change the existing class teacher of this class to a new staff" data-toggle="tooltip">Change Class Teacher</a>

                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </nav>
                                <p>Here, you can update the information of any/all members of this class. Make your
                                    updates and then click on <i>"Save changes"</i></p>

                                <form action="classes/bulk-bio-update-process/170ac27a1b5177272" id="bulk-bio" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save
                                            Changes</button> <span class="processor"></span>
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


                                                <tr class="record" data-id="dfd83be69361a905241e">
                                                    <td>1</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/5de18baa4513a8c7c9a2" target="_blank">
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

                                                <tr class="record" data-id="d07f241f93627f671713">
                                                    <td>2</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/aabe32824514ed3b9816" target="_blank">
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

                                                <tr class="record" data-id="b0f69a369363d4bdae97">
                                                    <td>3</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/a90f0bcc45157b4f2117" target="_blank">
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

                                                <tr class="record" data-id="9abcef2f936403f50dbb">
                                                    <td>4</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/123c38a44516ea23b66e" target="_blank">
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

                                                <tr class="record" data-id="3b60306193654d07bd0a">
                                                    <td>5</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/a657089b45178039d1e6" target="_blank">
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

                                                <tr class="record" data-id="322b113493661a06eb7c">
                                                    <td>6</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/188e2e4e451842b10530" target="_blank">
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

                                                <tr class="record" data-id="5bf1970593674816f1c9">
                                                    <td>7</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/54da2f2c4519ef0f7145" target="_blank">
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

                                                <tr class="record" data-id="d4a4ad4093685560f57f">
                                                    <td>8</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/4ce8455e452043e6c63d" target="_blank">
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

                                                <tr class="record" data-id="79b4318a9369d34f7df7">
                                                    <td>9</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/13271eb145215b78ae08" target="_blank">
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

                                                <tr class="record" data-id="b6730cd3937018a014ae">
                                                    <td>10</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/dcc0ee1f452268a85611" target="_blank">
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

                                                <tr class="record" data-id="49fe3e8d9371d16fbc33">
                                                    <td>11</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/acdec7654523b9967340" target="_blank">
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

                                                <tr class="record" data-id="786fef7c9372dd7a4d89">
                                                    <td>12</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/c57bfe934524b3e67274" target="_blank">
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

                                                <tr class="record" data-id="4b94d22b93734a439359">
                                                    <td>13</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/ced942714525b443ad2d" target="_blank">
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

                                                <tr class="record" data-id="39b91253937403197cb1">
                                                    <td>14</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/fee7f6f9452678056fb2" target="_blank">
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

                                                <tr class="record" data-id="3a5c1cf59375bf0f9e84">
                                                    <td>15</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/3a98773b452742d21aaf" target="_blank">
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

                                                <tr class="record" data-id="d835a001937693e9faf7">
                                                    <td>16</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/2edb17514528061311f4" target="_blank">
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

                                                <tr class="record" data-id="019aadce9377e3f34cf5">
                                                    <td>17</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/7adf40b24529bace24b0" target="_blank">
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

                                                <tr class="record" data-id="dd9394129378917b3de9">
                                                    <td>18</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/71c1c74d45308e863322" target="_blank">
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

                                                <tr class="record" data-id="de6c17019379e0048b74">
                                                    <td>19</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/41982e0545318c4de892" target="_blank">
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

                                                <tr class="record" data-id="e3f521a69380b2f13a93">
                                                    <td>20</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/5d15bc2a4532a142fd95" target="_blank">
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

                                                <tr class="record" data-id="cc5295e59381fafe071a">
                                                    <td>21</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/bd2c07a445330f01188e" target="_blank">
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

                                                <tr class="record" data-id="6e716efd938292efa155">
                                                    <td>22</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/c51f1715453493720851" target="_blank">
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

                                                <tr class="record" data-id="bdbbc5629383732e3d5a">
                                                    <td>23</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/7d66ad72453553b46f2b" target="_blank">
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

                                                <tr class="record" data-id="f6b9405b9384ebc5855f">
                                                    <td>24</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/b0ddd82a453623789a8c" target="_blank">
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

                                                <tr class="record" data-id="bda5016793850958956d">
                                                    <td>25</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/4c8421784537454d090a" target="_blank">
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

                                                <tr class="record" data-id="6c98d8dc9386997be088">
                                                    <td>26</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/cb3419554538f34c31d3" target="_blank">
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

                                                <tr class="record" data-id="685bd4539387a11513a4">
                                                    <td>27</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/268aec404539ea8ec1bb" target="_blank">
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

                                                <tr class="record" data-id="a42cbfeb93882d9473c4">
                                                    <td>28</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/53a51e2e4540d2befee1" target="_blank">
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

                                                <tr class="record" data-id="c4259bb59389b46c4725">
                                                    <td>29</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/73b2efbd4541a0b1a0a4" target="_blank">
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

                                                <tr class="record" data-id="7f25bdfc9390eda21915">
                                                    <td>30</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/9f022df94542b1183560" target="_blank">
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

                                                <tr class="record" data-id="66e329a9939196b88d58">
                                                    <td>31</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/0539a0894543e220075d" target="_blank">
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

                                                <tr class="record" data-id="ea51b6369392883db024">
                                                    <td>32</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/c735c05f454474841d38" target="_blank">
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

                                                <tr class="record" data-id="91a78a9f9393e92fc3d0">
                                                    <td>33</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/e15357c445459cfefe04" target="_blank">
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

                                                <tr class="record" data-id="8735a1f093943e36947b">
                                                    <td>34</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/07df5712454677e86f54" target="_blank">
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

                                                <tr class="record" data-id="f19efa459395fa7535c9">
                                                    <td>35</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/9f99d6e04547da5805b5" target="_blank">
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

                                                <tr class="record" data-id="d1477d0b93968dcdb1e9">
                                                    <td>36</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/6aae5e0b45488e124e60" target="_blank">
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

                                                <tr class="record" data-id="14717d17939740321c21">
                                                    <td>37</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/758d69ec4549b979de50" target="_blank">
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

                                                <tr class="record" data-id="a700e0cf9398836f5813">
                                                    <td>38</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/63f699814550fb5058fd" target="_blank">
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

                                                <tr class="record" data-id="98372bac939979138b7d">
                                                    <td>39</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/8c711b2a45510ffb24fa" target="_blank">
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

                                                <tr class="record" data-id="9147bab8940010187293">
                                                    <td>40</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/15b268d14552dc70b39d" target="_blank">
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

                                                <tr class="record" data-id="84e2cba994013db48795">
                                                    <td>41</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/5cfb7854455341a36d42" target="_blank">
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

                                                <tr class="record" data-id="b85165b99402f985fd37">
                                                    <td>42</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/a54e2f6845540778085a" target="_blank">
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

                                                <tr class="record" data-id="14c7f175940371e0da4c">
                                                    <td>43</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/a3d71ac64555150c85b5" target="_blank">
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

                                                <tr class="record" data-id="2c23c53f9404b1497fc7">
                                                    <td>44</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/f6c0a4974556994d4d63" target="_blank">
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

                                                <tr class="record" data-id="0a4f1ce0940565cc842e">
                                                    <td>45</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/72f53b9b4557dcd7ae10" target="_blank">
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

                                                <tr class="record" data-id="6b49cc4c9360fa128869">
                                                    <td>46</td>
                                                    <td>
                                                        <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                    </td>
                                                    <td>
                                                        <a class="text-info" href="student/student-profile/aa1f8e9b451290568b93" target="_blank">
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
                                        <input type="hidden" name="class_arm_id_enc" value="170ac27a1b5177272">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save
                                            Changes</button> <span class="processor"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ======   This Page SCRIPTS   =========== -->
                <script src="assets/plugins/moment/moment.js"></script>
                <script src="assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

                <script>
                    $(function() {
                        $('.date').bootstrapMaterialDatePicker({
                            format: 'YYYY-MM-DD',
                            maxDate: new Date(2014, 0, 1),
                            minDate: new Date(1996, 0, 1),
                            time: false
                        });

                        $('.to-validate').change(function() {
                            var a = $(this);
                            var field = a.data('field');
                            var val = a.val();
                            var id = a.parents('.record').data('id');
                            var url = 'user-account/validate-user-field';

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
