<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['grade'])) {
    $grade_name = trim($_POST['name']);
    $grade_remark = trim($_POST['remark']);
    if ($grade_name != "") {
        $class->add_grade($grade_name,$grade_remark);
        echo "<script>alert('Saved');
        history.back()</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
}