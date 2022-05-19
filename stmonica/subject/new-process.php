<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['subject'])) {
    $subject_name = trim($_POST['name']);
    $subject_code = trim($_POST['short_name']);
    $department = trim($_POST['dept_id']);
    if ($subject_name != "") {
        $class->add_subject($subject_name, $subject_code,$department);
        echo "<script>alert('Subject Saved');
        history.back()</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
}
