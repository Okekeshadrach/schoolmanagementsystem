<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->

<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="_scroll-sidebar" style="overflow: scroll; width: auto; height: 100%">
        <!-- User profile -->
        <div class="user-profile" style="
              background: url(../assets/images/background/images.png) no-repeat;
            ">
            <!-- User profile image -->
            <div class="profile-img">
                <img src=<?php echo $img ?> alt="user" />
            </div>
            <!-- User profile text-->
            <div class="profile-text">
                <a href="#" class="dropdown-toggle u-dropdown user-full-name" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><?php echo strtoupper($name) ?></a>
                <div class="dropdown-menu animated flipInY">
                    <a href="../admin/profile.php" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                    <a href="../admin/my-activity.php" class="dropdown-item"><i class="ti-wallet"></i> My Activity
                        Log</a>
                    <div class="dropdown-divider"></div>
                    <a href="../login/logout.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                </div>
            </div>
        </div>
        <!-- End User profile text-->

        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a href="../admin-account.php" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Dashboard</span></a>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-small-cap">ACADEMICS</li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-users"></i>
                        <span class="hide-menu">Students</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a class="waves-effect waves-dark" href="../student/student-mgt.php" title="Manage list of student's that fall in a set criteria" data-toggle="tooltip">Students List</a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="../student/" title="Register a new student on the system" data-toggle="tooltip">Register new
                                Student</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../student/withdrawn-students.php" title="Manage students who have been withdrawn" data-toggle="tooltip">Withdrawn
                                Students</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../student/graduated-students.php" title="Manage students who have graduated" data-toggle="tooltip">Graduated
                                Students</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Class</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a class="waves-effect waves-dark" href="../classes/class-arm-mgt.php" title="View all class arms and perform specific tasks for any class arm" data-toggle="tooltip">Manage Class Arms</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../classes/classes_and_arms.php" title="Create, Edit or Delete Arm/Class Arm" data-toggle="tooltip">Classes and
                                Arms</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../classes/class-teachers.php" title="Manage all class teachers on the system" data-toggle="tooltip">Class
                                teachers</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../classes/assignment.php" title="Create, edit or delete class assignments" data-toggle="tooltip">Class
                                Assignments</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="../classes/past-records.php" aria-expanded="false" title="Manage records in a past Term/Session" data-toggle="tooltip"><i class="fa fa-file-text"></i><span class="hide-menu">Past Records</span></a>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-calendar-clock"></i><span class="hide-menu">Time Table</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a class="waves-effect waves-dark" href="javascript: void()" title="Coming soon..." data-toggle="tooltip">Class Time Table</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="javascript: void()" title="Coming soon..." data-toggle="tooltip">School Time Table</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-book"></i><span class="hide-menu">Subject</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a class="waves-effect waves-dark" href="../subject/subject1.php">School Subjects</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../subject/teachers.php" title="Manage all subject teachers. (i.e. All Staff who have been assigned to one or more subjects)" data-toggle="tooltip">Subject Teachers</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../subject/departments.php" title="Manage Subject departments. Add, update or remove departments" data-toggle="tooltip">Departments</a>
                        </li>
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
                        <li>
                            <a class="waves-effect waves-dark" href="../messaging/send-email.php" title="Send customized email to Parents, Staff, Students or Admin" data-toggle="tooltip">Send Email</a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="../messaging/send-text-message.php" title="Send a text message to Parents, Staff, Students or Admin" data-toggle="tooltip">Send Text Message</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../messaging/generate-letter.php" title="Generate a customized Letter for Parents, Staff, Students or Admin" data-toggle="tooltip">Generate Letter</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-devider"></li>
                <li class="nav-small-cap">ADMINISTRATION</li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Payment/Bills <span class="text-danger">*</span></span></a>

                    <ul aria-expanded="false" class="collapse"></ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Staff and Admin</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a class="waves-effect waves-dark" href="../staff/manage.php" title="See List of all staff on the system" data-toggle="tooltip">Manage
                                Staff</a>
                        </li>

                        <li>
                            <a class="waves-effect waves-dark" href="../staff/manage1.php" title="See List of all administrators on the system" data-toggle="tooltip">Manage Admin</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false"><i class="mdi mdi-soccer"></i><span class="hide-menu">Sport House</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a class="waves-effect waves-dark" href="../sport-house/" title="Add, Edit or Delete Sport Houses" data-toggle="tooltip">Manage Sport
                                Houses</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../sport-house/heads.php" title="Manage house masters/mistresses" data-toggle="tooltip">Sport House
                                Heads</a>
                        </li>
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
                        <li>
                            <a class="waves-effect waves-dark" href="../school-config/school-grades.php" title="Add, Edit or Delete Grades" data-toggle="tooltip">School Grades</a>
                        </li>
                        <!-- <li>
                            <a class="waves-effect waves-dark" href="../school-config/grades-config.php" title="Configure how grades are awarded in students result" data-toggle="tooltip">Grade Configuration</a>
                        </li> -->
                        <li>
                            <a class="waves-effect waves-dark" href="../school-config/school-information.php" title="View/Make changes to the school's information" data-toggle="tooltip">School Information</a>
                        </li>
                        <!-- <li>
                            <a class="waves-effect waves-dark" href="../school-config/result-setting.php" title="Make changes to how students Report card or Broadsheet looks" data-toggle="tooltip">Result Settings</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../school-config/academic-session.php" title="View Academic Session history, create new session, or move to next session" data-toggle="tooltip">Academic Sessions</a>
                        </li> -->

                        <!-- <li>
                            <a class="waves-effect waves-dark" href="../school-config/session-parameters.php" title="Set or Edit weight of session parameters (i.e. CA1, CA2..., Exam, Term weight)" data-toggle="tooltip">Session Parameters</a>
                        </li> -->

                        <li>
                            <a class="waves-effect waves-dark" href="../school-config/comment-remarks.php" title="create, edit or delete library of comment remarks" data-toggle="tooltip">Comment Remarks</a>
                        </li>
                        <li>
                            <a class="waves-effect waves-dark" href="../school-config/behavioural-traits.php" title="Manage your preference of student behavioural traits e.g Neatness, punctuality etc..." data-toggle="tooltip">Behavioural Traits</a>
                        </li>
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