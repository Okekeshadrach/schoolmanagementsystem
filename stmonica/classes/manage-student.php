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

        $(document).on('click', '.sidebartoggler', function () {
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
    <div style="width: 100%; height:100%; background-color: white; position: fixed; top:0; left:0; z-index: 1000; opacity:0.3; display: none;"
        id="DivOverlay">
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
                            <img src="assets/img/logo_4a262eb69667.png?v1" alt="school-page" class="dark-logo logo"
                                height="60" width="60" />
                            <!-- Light Logo icon -->
                            <img src="assets/img/logo_4a262eb69667.png?v1" alt="homepage" class="light-logo logo"
                                height="60" width="60" />
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
                        <li class="nav-item"> <a
                                class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link text-muted waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="ti-search"></i></a>

                            <!-- =============== SEARCH BAR =================== -->
                            <form action="student/search" class="app-search" method="post" accept-charset="utf-8">
                                <input type="text" class="form-control" name="keyword" minlength="3"
                                    placeholder="Search student"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form> <!-- ============================================== -->

                        </li>
                        <li class="nav-item hidden-xs-down"><a class="nav-link" id="current_session_name"
                                href="javascript:void(0)">First Term 2020/2021</a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-message"></i>
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
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                    src="uploads/nobody_m.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img">
                                                <img src="uploads/nobody_m.jpg" alt="user">
                                            </div>
                                            <div class="u-text">
                                                <h4 class="user-full-name">Henry Obinozie</h4>
                                                <p class="text-muted user-email">obinoziehenry@gmail.com</p><a
                                                    href="admin/profile.html"
                                                    class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a class="waves-effect waves-dark" href="admin-account/my-activity"><i
                                                class="ti-wallet"></i> My Activity Log</a></li>
                                    <li><a class="waves-effect waves-dark" href="admin/change-password.html"><i
                                                class="ti-key"></i> Change Password</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a class="waves-effect waves-dark" href="login/logout"><i
                                                class="fa fa-power-off"></i> Logout</a></li>
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
                    <div class="profile-text"> <a href="#" class="dropdown-toggle u-dropdown user-full-name"
                            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Henry
                            Obinozie</a>
                        <div class="dropdown-menu animated flipInY">
                            <a href="admin/profile.html" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                            <a href="admin-account/my-activity" class="dropdown-item"><i class="ti-wallet"></i> My
                                Activity Log</a>
                            <div class="dropdown-divider"></div> <a href="login/logout" class="dropdown-item"><i
                                    class="fa fa-power-off"></i> Logout</a>
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
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="fa fa-users"></i>
                                <span class="hide-menu">Students</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a class="waves-effect waves-dark" href="student/student-mgt"
                                        title="Manage list of student's that fall in a set criteria"
                                        data-toggle="tooltip">Students List</a></li>

                                <li><a class="waves-effect waves-dark" href="student/add-student"
                                        title="Register a new student on the system" data-toggle="tooltip">Register new
                                        Student</a></li>
                                <li><a class="waves-effect waves-dark" href="student/withdrawn-students"
                                        title="Manage students who have been withdrawn" data-toggle="tooltip">Withdrawn
                                        Students</a></li>
                                <li><a class="waves-effect waves-dark" href="student/graduated-students"
                                        title="Manage students who have graduated" data-toggle="tooltip">Graduated
                                        Students</a></li>
                                <li><a class="waves-effect waves-dark" href="student/manage-parents"
                                        title="See List of all parents on the system" data-toggle="tooltip">Manage
                                        Parents</a></li>

                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="fa fa-university"></i><span class="hide-menu">Class</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="classes/class-arm-mgt"
                                        title="View all class arms and perform specific tasks for any class arm"
                                        data-toggle="tooltip">Manage Class Arms</a></li>
                                <li><a class="waves-effect waves-dark" href="classes/classes_and_arms"
                                        title="Create, Edit or Delete Arm/Class Arm" data-toggle="tooltip">Classes and
                                        Arms</a></li>
                                <li><a class="waves-effect waves-dark" href="classes/class-teachers"
                                        title="Manage all class teachers on the system" data-toggle="tooltip">Class
                                        teachers</a></li>
                                <li><a class="waves-effect waves-dark" href="classes/assignment"
                                        title="Create, edit or delete class assignments" data-toggle="tooltip">Class
                                        Assignments</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="classes/past-records" aria-expanded="false"
                                title="Manage records in a past Term/Session" data-toggle="tooltip"><i
                                    class="fa fa-file-text"></i><span class="hide-menu">Past Records</span></a>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-calendar-clock"></i><span class="hide-menu">Time Table</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="javascript: void()" title="Coming soon..."
                                        data-toggle="tooltip">Class Time Table</a></li>
                                <li><a class="waves-effect waves-dark" href="javascript: void()" title="Coming soon..."
                                        data-toggle="tooltip">School Time Table</a></li>
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="fa fa-book"></i><span class="hide-menu">Subject</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="subject">School Subjects</a></li>
                                <li><a class="waves-effect waves-dark" href="subject/teachers"
                                        title="Manage all subject teachers. (i.e. All Staff who have been assigned to one or more subjects)"
                                        data-toggle="tooltip">Subject Teachers</a></li>
                                <li><a class="waves-effect waves-dark" href="subject/departments"
                                        title="Manage Subject departments. Add, update or remove departments"
                                        data-toggle="tooltip">Departments</a></li>
                            </ul>
                        </li>

                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">LEARNING & COMMUNICATION</li>
                        <li>
                            <a href="javascript: void()" aria-expanded="false" title="Coming soon..."
                                data-toggle="tooltip"><i class="fa fa-comments"></i><span
                                    class="hide-menu">Forum</span></a>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-message-settings"></i><span class="hide-menu">Messaging</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="messaging/send-email"
                                        title="Send customized email to Parents, Staff, Students or Admin"
                                        data-toggle="tooltip">Send Email</a></li>


                                <li><a class="waves-effect waves-dark" href="messaging/send-text-message"
                                        title="Send a text message to Parents, Staff, Students or Admin"
                                        data-toggle="tooltip">Send Text Message</a></li>
                                <li><a class="waves-effect waves-dark" href="messaging/generate-letter"
                                        title="Generate a customized Letter for Parents, Staff, Students or Admin"
                                        data-toggle="tooltip">Generate Letter</a></li>
                            </ul>
                        </li>

                        <li class="nav-devider"></li>
                        <li class="nav-small-cap">ADMINISTRATION</li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="fa fa-money"></i><span class="hide-menu">Payment/Bills <span
                                        class="text-danger">*</span></span></a>

                            <ul aria-expanded="false" class="collapse">
                            </ul>
                        </li>


                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="fa fa-user"></i><span class="hide-menu">Staff and Admin</span></a>
                            <ul aria-expanded="false" class="collapse">


                                <li><a class="waves-effect waves-dark" href="staff/manage.html"
                                        title="See List of all staff on the system" data-toggle="tooltip">Manage
                                        Staff</a></li>

                                <li><a class="waves-effect waves-dark" href="admin-account/manage"
                                        title="See List of all administrators on the system"
                                        data-toggle="tooltip">Manage Admin</a></li>

                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-soccer"></i><span class="hide-menu">Sport House</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a class="waves-effect waves-dark" href="sport-house"
                                        title="Add, Edit or Delete Sport Houses" data-toggle="tooltip">Manage Sport
                                        Houses</a></li>
                                <li><a class="waves-effect waves-dark" href="sport-house/heads"
                                        title="Manage house masters/mistresses" data-toggle="tooltip">Sport House
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
                            <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i
                                    class="mdi mdi-settings"></i><span class="hide-menu">Configuration</span></a>
                            <ul aria-expanded="false" class="collapse">

                                <li><a class="waves-effect waves-dark" href="school-config/school-grades"
                                        title="Add, Edit or Delete Grades" data-toggle="tooltip">School Grades</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/grades-config"
                                        title="Configure how grades are awarded in students result"
                                        data-toggle="tooltip">Grade Configuration</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/school-information"
                                        title="View/Make changes to the school's information"
                                        data-toggle="tooltip">School Information</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/result-setting"
                                        title="Make changes to how students Report card or Broadsheet looks"
                                        data-toggle="tooltip">Result Settings</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/academic-session"
                                        title="View Academic Session history, create new session, or move to next session"
                                        data-toggle="tooltip">Academic Sessions</a></li>

                                <li><a class="waves-effect waves-dark" href="school-config/session-parameters"
                                        title="Set or Edit weight of session parameters (i.e. CA1, CA2..., Exam, Term weight)"
                                        data-toggle="tooltip">Session Parameters</a></li>

                                <li><a class="waves-effect waves-dark" href="school-config/comment-remarks"
                                        title="create, edit or delete library of comment remarks"
                                        data-toggle="tooltip">Comment Remarks</a></li>
                                <li><a class="waves-effect waves-dark" href="school-config/behavioural-traits"
                                        title="Manage your preference of student behavioural traits e.g Neatness, punctuality etc..."
                                        data-toggle="tooltip">Behavioural Traits</a></li>
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
                            Students in JSS 1A </h3>
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

                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                        <ul class="navbar-nav">

                                            <li class="nav-item">
                                                <a class="nav-link" href="classes/manage-student.html"
                                                    title="See list of students in this class"
                                                    data-toggle="tooltip">Students</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Subjects
                                                </a>
                                                <div class="dropdown-menu animated flipInY"
                                                    aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" href="classes/student-subject-reg.html"
                                                        title="Register subjects for students in this class"
                                                        data-toggle="tooltip">Student Subject Registration</a>

                                                    <a class="dropdown-item"
                                                        href="classes/register-class-subject/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="Register a subject that is offered by the whole class"
                                                        data-toggle="tooltip">Class Subject Registration</a>


                                                    <a class="dropdown-item"
                                                        href="classes/create-combo-subject/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="Make an already registered subject become a combination subject"
                                                        data-toggle="tooltip">Create Combo Subject</a>
                                                    <a class="dropdown-item"
                                                        href="classes/subject-offered-by-students/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        target="_blank"
                                                        title="See subjects offered by students in this class"
                                                        data-toggle="tooltip">Subjects offered by students</a>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link"
                                                    href="score/class-subject/b41e43bd13ecbf67c1/6060715611b940c68"
                                                    title="Enter/Edit scores for subjects registered in this class"
                                                    data-toggle="tooltip">Result Computation</a>
                                            </li>


                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Class Reports
                                                </a>
                                                <div class="dropdown-menu animated flipInY"
                                                    aria-labelledby="navbarDropdownMenuLink">

                                                    <a class="dropdown-item"
                                                        href="score/report-card-link/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="View this term report card of this class"
                                                        data-toggle="tooltip">View Report Card</a>


                                                    <a class="dropdown-item"
                                                        href="score/post-result-comment/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="Place comments on student's report card"
                                                        data-toggle="tooltip">Report card comment</a>
                                                    <a class="dropdown-item"
                                                        href="score/send-result/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="Send student results to their parents via email"
                                                        data-toggle="tooltip">Send Results to parents</a>

                                                    <div class="dropdown-divider"></div>

                                                    <a class="dropdown-item"
                                                        href="score/student-ranking-form/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="Fetch students ranked by their overall performance"
                                                        data-toggle="tooltip">Score Ranking</a>

                                                    <a class="dropdown-item"
                                                        href="score/student-subject-ranking-form/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="Fetch students ranked by their performance in a specific subject"
                                                        data-toggle="tooltip">Subject Ranking</a>

                                                    <a class="dropdown-item"
                                                        href="score/term-analysis/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="see performance analysis of students in JSS 1 class corridor"
                                                        data-toggle="tooltip" target="_blank">Term Analysis</a>

                                                    <a class="dropdown-item"
                                                        href="score/subject-grade-analysis/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="see number of student scoring specific grades in this class arm"
                                                        data-toggle="tooltip" target="_blank">Subject Grade Analysis</a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Score sheets
                                                </a>
                                                <div class="dropdown-menu animated flipInY"
                                                    aria-labelledby="navbarDropdownMenuLink">
                                                    <a class="dropdown-item" target="_blank"
                                                        href="score/class-datasheet/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="View/print a general class datasheet (subject independent) for this class"
                                                        data-toggle="tooltip">Class Datasheet</a>
                                                    <a class="dropdown-item" target="_blank"
                                                        href="score/class-datasheet/b41e43bd13ecbf67c1/6060715611b940c68/ca"
                                                        title="View/print Continuous assessment datasheet for this class"
                                                        data-toggle="tooltip">CA Datasheet</a>
                                                    <a class="dropdown-item" href="score/boardsheet-preference.html"
                                                        title="View/print broadsheet of all students scores in this class"
                                                        data-toggle="tooltip">Broadsheet</a>
                                                </div>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Class settings
                                                </a>
                                                <div class="dropdown-menu animated flipInY"
                                                    aria-labelledby="navbarDropdownMenuLink">


                                                    <a class="dropdown-item"
                                                        href="classes/promote-student/6060715611b940c68"
                                                        title="Promote students in this class to the next class"
                                                        data-toggle="tooltip">Promote Student(s)</a>


                                                    <a class="dropdown-item"
                                                        href="classes/withdraw-student/6060715611b940c68"
                                                        title="Withdraw students who have left the school from the system"
                                                        data-toggle="tooltip">Withdraw Student(s)</a>

                                                    <a class="dropdown-item"
                                                        href="classes/move-student/6060715611b940c68"
                                                        title="Move students from this class arm to a different class arm within the class corridor"
                                                        data-toggle="tooltip">Move Student(s)</a>

                                                    <a class="dropdown-item"
                                                        href="classes/nominal-roll/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        title="View/print this class nominal roll"
                                                        data-toggle="tooltip">Class Nominal Roll</a>

                                                    <a class="dropdown-item"
                                                        href="classes/student-matters-form/b41e43bd13ecbf67c1/6060715611b940c68"
                                                        target="_blank" title="View/print the student's matters form"
                                                        data-toggle="tooltip">Student Matters Form</a>


                                                    <a class="dropdown-item"
                                                        href="classes/bulk-bio-update/6060715611b940c68"
                                                        title="Update information of students in this class (in bulk)"
                                                        data-toggle="tooltip">Class Bulk Bio Update</a>

                                                    <a class="dropdown-item" href="staff/manage.html"
                                                        title="Change the existing class teacher of this class to a new staff"
                                                        data-toggle="tooltip">Change Class Teacher</a>

                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </nav>
                                <div class="table-responsive" style="margin-top: 1em">
                                    <table
                                        class="table table-striped table-bordered color-table success-table stylish-table"
                                        width="100%">
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


                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <img src="uploads/nobody_f.jpg" height="50" class="img-circle" />
                                                </td>
                                                <td>
                                                    <a class="text-info" href="staff/staff-profile.html"
                                                        target="_blank">
                                                        <b>Ajulu </b> Chiemelie </a>
                                                </td>
                                                <td>FGGCON209437</td>

                                                <td>Female</td>

                                                <td><span class="label label-light-warning">unspecified</span></td>
                                                <td>
                                                    Day </td>
                                            </tr>
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
                    $(document).ready(function () {
                        if ($('tr').length > 10) {
                            $('.table').DataTable({ "iDisplayLength": 50 });
                        }
                    });
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
            $('ul.collapse').each(function (i) {
                if ($(this).children().length < 1) {
                    $(this).parent().remove();
                }
            });


            $(".select2").select2();


            $('.ajax-link').contextmenu(function () {
                return false;
            });

            function load_notification() {
                $('#n-center').load(site_url + 'other/notification ul', function () {
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