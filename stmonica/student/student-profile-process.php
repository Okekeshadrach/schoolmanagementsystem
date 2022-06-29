<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['update'])) {
    $surname = $_POST['surname'];
    $first_name = $_POST['first_name'];
    $sec_name = $_POST['sec_name'];
    $dob = $_POST['dob'];
    $pob = $_POST['pob'];
    $student_id = $_POST['student_id'];
    $gender = $_POST['gender'];
    $state = $_POST['state'];
    $lga = $_POST['lga'];
    $house_id = $_POST['house_id'];
    $relig_id = $_POST['relig_id'];
    $blood_group = $_POST['blood_group'];
    $geno_id = $_POST['geno_id'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $prev_sch_attended = $_POST['prev_sch_attended'];
    $prev_sch_attended_date = $_POST['prev_sch_attended_date'];
    if (!empty($student_id)) {
        # code...
    
    $class->update_student_req(
        $surname,
        $first_name,
        $sec_name,
        $dob,
        $student_id,
        $pob,
        $gender,
        $state,
        $lga,
        $house_id,
        $relig_id,
        $blood_group,
        $geno_id,
        $address,
        $phone,
        $email,
        $prev_sch_attended,
        $prev_sch_attended_date
    );
    
}
}
