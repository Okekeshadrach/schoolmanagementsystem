<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['subjid'])) {
    $name = $_POST['name'];
    $short_name = $_POST['short_name'];
    $dept_id = $_POST['dept_id'];
    $subject_id = $_POST['subj_id'];
    if ($subject_id != '') {
       $class->update_subject_req($subject_id,$name,$short_name,$dept_id);
       echo ' err';
    }
}
?>