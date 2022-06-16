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
                            Report Card Links <?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Score</a></li>
                            <li class="breadcrumb-item active">Report card link</li>
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
                                        <a href="staff/staff-profile/c9cc3c3a2fef97c91">
                                            <img src="uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

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
                                <div class="row">

                                    <div class="col-md-2">
                                        <a href="score/report-card/d6fd49ad137f5edbe4/170ac27a1b5177272/1" target="_blank" class="btn btn-outline-primary btn-rounded waves-effect waves-light m-b-30">
                                            Link 1 </a>
                                    </div>


                                    <div class="col-md-2">
                                        <a href="score/report-card/d6fd49ad137f5edbe4/170ac27a1b5177272/2" target="_blank" class="btn btn-outline-primary btn-rounded waves-effect waves-light m-b-30">
                                            Link 2 </a>
                                    </div>


                                    <div class="col-md-2">
                                        <a href="score/report-card/d6fd49ad137f5edbe4/170ac27a1b5177272/3" target="_blank" class="btn btn-outline-primary btn-rounded waves-effect waves-light m-b-30">
                                            Link 3 </a>
                                    </div>


                                    <div class="alert alert-primary alert-rounded">Results are broken into groups of
                                        20's, you should click on each link, one at a time, to view report card for
                                        entire class. <br> Results are ONLY available for students with scores entered
                                        for at least 1 Subject(s). This settings can be changed
                                        <a href="school-config/result-setting#min_subj" target="_blank">
                                            <i>HERE...</i></a><button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- ============================================================== -->
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