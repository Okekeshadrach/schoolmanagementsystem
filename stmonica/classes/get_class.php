<?php
if (isset($_GET['class_id'])) {
    $class_id = $_GET['class_id'];
    // echo '<script>alert("'.$class_id.'")</script>';
    $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
    $sql = "SELECT class.*,classarm.*,arm.* 
    FROM classarm
    JOIN class
        ON classarm.class_id=class.id
    JOIN arm
        ON classarm.arm_id=arm.arm_id
    WHERE classarm_id = '$class_id'
    GROUP BY `classarm`.`classarm_id`,`class`.`class_name`,`arm`.`arm_name` ";
    $query = mysqli_query($db, $sql) ;
    $count = mysqli_num_rows($query);
    if ($count == true) {
        while ($row = mysqli_fetch_array($query)) {
            $classarm_name = $row['class_name'] . ' ' . $row['arm_name'];
            $classid = $row['class_id'];
            $classname = $row['class_name'];
        }
    }
}

?>