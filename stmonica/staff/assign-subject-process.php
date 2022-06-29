<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['assign'])) {
    $staffid = $_POST['staff_id'];
    $subject_id = $_POST['subj_id'];
    $classarm_id = $_POST['class_arm_id'];

    foreach ($classarm_id as $value) {
        $int = $value;
        $class->assign_subject_teacher($int,$subject_id,$staffid);
    }

}?>