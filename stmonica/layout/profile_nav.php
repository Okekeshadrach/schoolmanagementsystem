<nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 1em">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Profile
                </a>
                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../staff/staff-profile.php?staffid=<?php echo $staff_id  ?>">Edit
                        Profile</a>
                    <a class="dropdown-item" href="../staff/activity.php?staffid=<?php echo $staff_id  ?>">Activity
                        Log</a>

                    <a class="dropdown-item" href="change-password.php?staffid=<?php echo $staff_id  ?>">Reset
                        Password</a>

                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="account-status.php?staffid=<?php echo $staff_id  ?>">Account
                    Status</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="capture-passport.php?staffid=<?php echo $staff_id  ?>">Capture
                    Passport</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="staff-department.php?staffid=<?php echo $staff_id  ?>">Department</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Assign
                </a>
                <div class="dropdown-menu animated flipInY" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="assign-subject.php?staffid=<?php echo $staff_id  ?>">As
                        Subject Teacher</a>
                    <a class="dropdown-item" href="assign-house.php?staffid=<?php echo $staff_id  ?>">As
                        Sport House Master</a>
                    <a class="dropdown-item" href="assign-class-arm.php?staffid=<?php echo $staff_id  ?>">As
                        Class Teacher</a>
                    <a class="dropdown-item" href="assign-countersign.php?staffid=<?php echo $staff_id  ?>">As
                        Countersigning Officer</a>
                </div>
            </li>


        </ul>
    </div>
</nav>