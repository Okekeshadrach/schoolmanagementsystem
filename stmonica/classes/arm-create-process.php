<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['arms'])) {
    $name = trim($_POST['arm']);
    if ($name != "") {
        $class->add_arm($name);
        echo "<script>alert('Saved');
        history.back()</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
} elseif (isset($_POST['clas'])) {
    $name = trim($_POST['class']);
    if ($name != "") {
        $class->add_class($name);
        echo "<script>alert('Class Saved');
        history.back()</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
} elseif (isset($_POST['classarm'])) {
    $class_id = trim($_POST['class_id']);
    $arm_id = trim($_POST['arm_id']);
    if ($arm_id != "") {
        $class->add_classarm($class_id,$arm_id);
        echo "<script>alert('Class Arm Saved');
        history.back()</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
}
