<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;
if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    echo '<script>window.location="../index.php"</script>';
    echo '<script>window.alert("yes")</script>';
}
?>
<?php
if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $surname = $_POST['surname'];
    $first_name = $_POST['first_name'];
    $sec_name = $_POST['sec_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $lga = $_POST['lga'];
    $address = $_POST['address'];
    $academic_qualification = $_POST['academic_qualification'];
    $first_apt_date = $_POST['first_appt_date'];
    $staffid = $_POST['staffid'];
    if (!empty($staffid)) {

        $class->update_staff_req(
            $title,
            $surname,
            $first_name,
            $sec_name,
            $dob,
            $gender,
            $phone,
            $email,
            $state,
            $lga,
            $address,
            $academic_qualification,
            $first_apt_date,
            $staffid
        );
    }
} elseif (isset($_POST['upload'])) {
    $staffid = $_POST['staffid'];
    $temp = explode(".", $_FILES["passport"]["name"]);
    $photo = $staffid . '.' . end($temp);

    if (move_uploaded_file($_FILES["passport"]["tmp_name"], "../../uploads/" . $photo)) {
        // echo "<h3>  Image uploaded successfully! '$princ_sign','$session_id',</h3>";

    } else {
        $photo = null;
    }
    if (!empty($staffid)) {
        $class->upload_staff_req($staffid, $photo);
    }
} else {
    echo '<script>history.back()</script>';
}
?>