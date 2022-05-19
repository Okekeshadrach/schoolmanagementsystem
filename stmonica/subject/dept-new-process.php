<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['dept'])) {
    $name = trim($_POST['dept_name']);
    $reg_date = date("d-m-Y");
    $reg_time = date("h:i:s a");
    $datetime = $reg_date;
    if ($name != "") {
        $class->add_department($name,$reg_date,$reg_time);
        echo "<script>alert('Saved');
        history.back()</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
}
