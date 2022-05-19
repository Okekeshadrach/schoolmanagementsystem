<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['sporthouse'])) {
    $name = trim($_POST['name']);
    $color = trim($_POST['color']);
    if ($name != "") {
        $class->add_sporthouse($name, $color);
        echo "<script>alert('Saved');
        history.back()</script>";
    } else {
        echo "<script>alert('Failed')</script>";
    }
}