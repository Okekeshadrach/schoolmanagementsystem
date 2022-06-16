<?php
if (isset($_GET['staffid'])) {
    $staff_id = $_GET['staffid'];
    // echo '<script>alert("' . $staff_id . '")</script>';
    $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
    $sql = "SELECT *
    FROM staff
        WHERE staff_id = '$staff_id'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query) or die(mysqli_error($db));
    if ($count == true) {
        while ($row = mysqli_fetch_array($query)) {
            // $classarm_name = $row['class_name'];
            // $class_id = $row['classarm_id'];
            // $classname = $row['class_name'] .' '.$row['arm_name'];
            // $id = $row['register_no'];
            $staff_title = $row['title'];
            $staff_gender = $row['gender'];
            $staff_image = $row['photo'];
            if (empty($row['photo']) && $staff_gender == 'Male') {
                $staff_image = 'nobody_f.jpg';
            } else if (empty($row['photo']) && $staff_gender == 'Female') {
                $staff_image = 'nobody_n.jpg';
            } else {
                $staff_image = $row['photo'];
            }
            if ($staff_gender == "M") {
                $staff_gen = "Male";
            }else{
                $staff_gen = "Female";
            }
            $staff_id = $row['staff_id'];
            $staff_othername = $row['other_name'];
            // $sporthouse = $row['house_name'];
            // $schoolyear = $row['school_year'];
            $staff_email = $row['email'];
            $staff_number = $row['mobileno'];
            // $staff_religion = $row['religion'];
            // $staff_blood = $row['blood_group'];
            $lga_origin = $row['lga'];
            $state_origin = $row['state'];
            $staff_rank = $row['rank'];
            $staff_home = $row['home_address'];
            
            $day= $row['created_at'];
            $dob= $row['birthday'];
            $first_name = strtoupper($row['first_name']);
            $last_name= $row['last_name'];
            $today = new DateTime();
            $birthdate = new DateTime($dob);
            $interval = $today->diff($birthdate);
            $birthday = $interval->format('%y years');
        }
    }
}
