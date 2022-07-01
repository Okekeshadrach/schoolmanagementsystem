<?php
if (isset($_GET['id'])) {
    $subj_id = $_GET['id'];
    $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
    $sql = "SELECT * FROM subject 
    LEFT JOIN department on department_id = department.d_id
    WHERE s_id = '$subj_id'";
    $query = mysqli_query($db, $sql) ;
    $count = mysqli_num_rows($query);
    if ($count == true) {
        while ($row = mysqli_fetch_array($query)) {
            
            $subject_id = $row['s_id'];
            $subject_name = $row['subject_name'];
            $subject_code = $row['subject_code'];
            $department_id = $row['department_id'];
            $department_name = $row['department_name'];
        }
    }
}

?>