<?php
if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];
    // echo '<script>alert("' . $student_id . '")</script>';
    $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
    $sql = "SELECT  student_id as student_id
    ,       class_arm_id as class_arm_id
    ,       class_name as class_name
    ,       arm_name as arm_name
    ,       register_no as register_no
    ,       surname as surname
    ,       first_name as first_name
    ,       last_name as last_name
    ,       gender as gender
    ,       photo as photo
    ,       house_name as house_name
    ,       sporthouse_id as sporthouse_id
    ,       birthday as birthday
    ,       admission_date as admission_date
    ,       school_year as school_year
    ,       `student`.`previous_details`
    ,       `student`.`created_at`
    ,       `student`.`email`
    ,       `student`.`mobileno`
    ,       `student`.`home_address`
    ,       `student`.`religion`
    ,       `student`.`blood_group`
    ,       `student`.`genotype`
    ,       `student`.`state_origin`
    ,       `student`.`lga_origin`
    ,       `student`.`place_birth`
    ,       `classarm`.`classarm_id`
    FROM student
        RIGHT JOIN enroll ON student.id = enroll.student_id
        LEFT JOIN classarm ON enroll.class_arm_id = classarm.classarm_id
        LEFT JOIN arm ON arm.arm_id = classarm.arm_id
        LEFT JOIN class ON enroll.class_id = class.id
        LEFT JOIN schoolyear ON enroll.session_id = schoolyear.id
        RIGHT JOIN sport_house ON sport_house.id  = `student`.`sporthouse_id` 
        WHERE student.id = '$student_id'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query) or die(mysqli_error($db));
    if ($count == true) {
        while ($row = mysqli_fetch_array($query)) {
            $classarm_name = $row['class_name'];
            $class_id = $row['class_arm_id'];
            $classname = $row['class_name'] . ' ' . $row['arm_name'];
            $id = $row['register_no'];
            $student_gender = $row['gender'];
            $student_id = $row['student_id'];
            $surname = strtoupper($row['surname']);
            $sporthouse = $row['house_name'];
            $sport_house = $row['sporthouse_id'];
            $schoolyear = $row['school_year'];
            $student_email = $row['email'];
            $student_number = $row['mobileno'];
            $student_religion = $row['religion'];
            $student_blood = $row['blood_group'];
            $lga_origin = $row['lga_origin'];
            $state_origin = $row['state_origin'];
            $student_gene = $row['genotype'];
            $student_home = $row['home_address'];
            $student_image = $row['photo'];
            if (empty($student_image) && $student_gender == 'Male') {
                $student_image = 'nobody_m.jpg';
            } else if (empty($student_image) && $student_gender == 'Female') {
                $student_image = 'nobody_f.jpg';
            } else {
                $student_image = $row['photo'];
            }
            $day = $row['created_at'];
            $dob = $row['birthday'];
            $pob = $row['place_birth'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $today = new DateTime();
            $birthdate = new DateTime($dob);
            $interval = $today->diff($birthdate);
            $birthday = $interval->format('%y years');

            
        }
    }
}
