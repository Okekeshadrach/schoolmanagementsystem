<?php
if (isset($_GET['edit_arm'])) {
    $arm_id = $_GET['edit_arm'];
    // echo '<script>alert("'.$class_id.'")</script>';
    $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
    $sql = "SELECT * FROM arm WHERE arm_id = '$arm_id'";
    $query = mysqli_query($db, $sql) ;
    $count = mysqli_num_rows($query);
    if ($count == true) {
        while ($row = mysqli_fetch_array($query)) {
            
            $arm_name = $row['arm_name'];
        }
    }
}

?>