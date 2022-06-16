<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['save'])) {
    $academic_year = trim($_POST['school']['academic_year']);
    $admission_no = trim($_POST['school']['admission_no']);
    $admission_date = trim($_POST['school']['admission_date']);
    $sport_house = trim($_POST['school']['sport_house']);
    $class_id = trim($_POST['school']['class_id']);
    $classarm_id = trim($_POST['school']['classarm_id']);
    $prev_name = trim($_POST['school']['prev_name']);
    $prev_date = trim($_POST['school']['prev_date']);
    $surname = trim($_POST['student']['surname']);
    $firstname = trim($_POST['student']['firstname']);
    $othername = trim($_POST['student']['othername']);
    $bloog_group = trim($_POST['student']['bloog_group']);
    $genotype = trim($_POST['student']['genotype']);
    $dob = trim($_POST['student']['dob']);
    $pob = trim($_POST['student']['pob']);
    $religion = trim($_POST['student']['religion']);
    $gender = trim($_POST['student']['gender']);
    $email = trim($_POST['student']['email']);
    $mobileno = trim($_POST['student']['mobileno']);
    $state = trim($_POST['student']['state']);
    $lga = trim($_POST['student']['lga']);
    $state_origin = trim($_POST['student']['state_origin']);
    $lga_origin = trim($_POST['student']['lga_origin']);
    $home_address = trim($_POST['student']['home_address']);
    $temp = explode(".", $_FILES["photo"]["name"]);
    $photo = $admission_no. '.' . end($temp);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], "../../uploads/" . $photo)) {
        echo "<h3>  Image uploaded successfully!</h3>";

    } else {
        echo "<h3>  Failed to upload image!</h3>";
         $photo = '';
    }
    if ($prev_name || $prev_date != '') {
        $prev_d = '{school_name :' . $prev_name . ',last_attended:' . $prev_date . '}';
    } else {
        $prev_d = '{school_name:null,last_attended:null}';
    }

    if ($admission_no != "") {
        $class->add_student(
            $academic_year,
            $admission_no,
            $admission_date,
            $sport_house,
            $class_id,
            $classarm_id,
            $prev_d,
            $surname,
            $firstname,
            $othername,
            $bloog_group,
            $genotype,
            $dob,
            $pob,
            $religion,
            $gender,
            $email,
            $state,
            $lga,
            $state_origin,
            $lga_origin,
            $photo,
            $mobileno,
            $home_address
                    );
        // echo "<script>alert('$photo')</script>";
        echo "<script>history.back()</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
}
