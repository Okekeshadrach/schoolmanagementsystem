<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md">
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
                <span class="short_name" style="color: #fff">ST. MONICA</span>
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
                <li class="nav-item">
                    <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a>
                </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box">
                    <a class="nav-link text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>

                    <!-- =============== SEARCH BAR =================== -->
                    <form action="student/search" class="app-search" method="post" accept-charset="utf-8">
                        <input type="text" class="form-control" name="keyword" minlength="3" placeholder="Search student" />
                        <a class="srh-btn"><i class="ti-close"></i></a>
                    </form>
                    <!-- ============================================== -->
                </li>
                <li class="nav-item hidden-xs-down">
                    <a class="nav-link" id="current_session_name" href="javascript:void(0)">First Term
                        2020/2021</a>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-message"></i>
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
                                        <img src="../../uploads/nobody_m.jpg" alt="user" />
                                    </div>
                                    <div class="u-text">
                                        <h4 class="user-full-name"><?php echo $name ?></h4>
                                        <p class="text-muted user-email">
                                        <?php echo $email ?>
                                        </p>
                                        <a href="../admin/profile.php?=<?php echo $staff_id?>" class="btn btn-rounded btn-danger btn-sm">View
                                            Profile</a>
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a class="waves-effect waves-dark" href="admin/my-activity.php"><i class="ti-wallet"></i> My Activity Log</a>
                            </li>
                            <li>
                                <a class="waves-effect waves-dark" href="admin/change-password.html"><i class="ti-key"></i> Change Password</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a class="waves-effect waves-dark" href="login/logout"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
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