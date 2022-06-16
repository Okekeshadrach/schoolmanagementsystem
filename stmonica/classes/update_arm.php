<?php
// session_start();
// require '../../public_functions.php';
// $class = new sms_engine;
include('../classes/arm-edit.php');
if (isset($_POST['update'])) {
    $arm = $_POST['arm'];
    $armid = $_POST['armid'];
    
    // echo $arm_id;
   echo '<script> 
   Toastify({
        text: "Update Saving",
        offset: {
          x: 50, 
          y: 10 
        },
      }).showToast();
      history.back()
      document.location.reload()</script>
      ';
      if ($armid != '' && $arm != '') {
        echo $arm;
        echo $armid;
        $class->update_arm($arm, $armid);
        
      }else {
        echo '<script> 
        Toastify({
             text: "Error Occured",
             offset: {
               x: 50, 
               y: 10 
             },
           }).showToast();</script>';
      }
    
}
