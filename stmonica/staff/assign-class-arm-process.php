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
if (isset($_POST['assign'])) {
    $staffid = $_POST['staff_id'];
    $class_arm_id = $_POST['class_arm_id'];

    foreach ($class_arm_id as $value) {
        $class_arm_id = $value;
        $class->assign_teacherclass($class_arm_id,$staffid);
    }
        // $class->assign_teacherclass($class_arm_id,$staffid);
    
}