<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['done'])) {
    // $department_id = '';
    // foreach ($_POST['dept_id'] as $icon) {
        $department_id = trim($_POST['staff']['dept_id']);
    // }

    $title = trim($_POST['staff']['title']);
    $firstname = trim($_POST['staff']['first_name']);
    $surname = trim($_POST['staff']['surname']);
    $sec_name = trim($_POST['staff']['sec_name']);
    $gender = trim($_POST['staff']['gender']);
    $birthday = trim($_POST['staff']['dob']);
    $email = trim($_POST['staff']['email']);
    $mobileno = trim($_POST['staff']['phone']);
    $state = trim($_POST['staff']['state']);
    $lga = trim($_POST['staff']['lga_id']);
    $home_address = trim($_POST['staff']['address']);
    $qualification = trim($_POST['staff']['academic_qualification']);
    $role_id = trim($_POST['staff']['type_id']);
    $joining_date = trim($_POST['staff']['first_appt_date']);
    $sporthouse_id = trim($_POST['staff']['house_id']);
    $staff_id = $class->generate_uuid();
    $temp = explode(".", $_FILES["staff_passport"]["name"]);
    $photo = $staff_id. '.' . end($temp);
    


    if (move_uploaded_file($_FILES["staff_passport"]["tmp_name"], "../../uploads/" . $photo)) {
        echo "<h3>  Image uploaded successfully!</h3>";

    } else {
        echo "<h3>  Failed to upload image!</h3>";
         $photo = '';
    }
    

    if ($firstname != "") {
        $class->add_staff(
            $staff_id,
            $title,
            $firstname,
            $surname,
            $sec_name,
            $gender,
            $birthday,
            $email,
            $mobileno,
            $state,
            $lga,
            $home_address,
            $role_id,
            $qualification,
            $joining_date,
            $photo,
            $sporthouse_id,
            $department_id
        );
        echo "<script>alert('$staff_id,$lga,$department_id');
        history.back()
        </script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
}
