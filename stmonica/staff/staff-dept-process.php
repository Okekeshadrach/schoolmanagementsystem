<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['check'])) {
    $staffid = $_POST['staff_id'];
    $dept_id = $_POST['dept_id'];

    if (!empty($staffid)) {
       $class->update_staffdept_req($staffid,$dept_id);
       
    }

}?>