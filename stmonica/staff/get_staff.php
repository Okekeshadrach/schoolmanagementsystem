<?php
if (isset($_GET['staffid'])) {
    $staff_id = $_GET['staffid'];
    // echo '<script>alert("' . $staff_id . '")</script>';
    $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
    $sql = "SELECT *
    FROM staff
    RIGHT JOIN department ON department.d_id = staff.department_id
        WHERE staff.staff_id = '$staff_id' ";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query) or die(mysqli_error($db));
    if ($count == true) {
        while ($row = mysqli_fetch_array($query)) {
           
            $staffid = $row['id'];
            $staff_title = $row['title'];
            $staff_gender = $row['gender'];
            $staff_image = $row['photo'];
            if ($staff_image == "" && $staff_gender == 'Male') {
                $staff_image = 'nobody_m.jpg';
            } else if ($staff_image == "" && $staff_gender == 'Female') {
                $staff_image = 'nobody_f.jpg';
            } else {
                $staff_image = $row['photo'];
            }
            
            // $staff_id = $row['staff_id'];
            $staff_othername = $row['other_name'];
            $staff_department_id = $row['department_id'];
            $staff_department = $row['department_name'];
            $staff_email = $row['email'];
            $staff_number = $row['mobileno'];
            $lga_origin = $row['lga'];
            $state_origin = $row['state'];
            $staff_home = $row['home_address'];
            $staff_qualification = $row['qualification'];
            $staff_appoint = $row['joining_date'];
            
            $day= $row['created_at'];
            $dob= $row['birthday'];
            $staff_first_name = strtoupper($row['first_name']);
            $staff_last_name= $row['last_name'];
            $today = new DateTime();
            $birthdate = new DateTime($dob);
            $interval = $today->diff($birthdate);
            $birthday = $interval->format('%y years');
        }
    }
}
