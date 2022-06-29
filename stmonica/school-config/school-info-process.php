<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<?php
if (isset($_POST['done'])) {
    $school_name = $_POST['name'];
    $short_name = $_POST['short_name'];
    $school_code = $_POST['school_code'];
    $footer_text = $_POST['footer_text'];
    $established = $_POST['established'];
    $gender = $_POST['gender_type'];
    $session_id = $_POST['session_id'];
    $mobileno = $_POST['phone1'];
    $mobileno2 = $_POST['phone2'];
    $email1 = $_POST['email1'];
    $email2 = $_POST['email2'];
    $site_keyword = $_POST['site_keyword'];
    $site_desc = $_POST['site_desc'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    // $logo = $_POST['logo'];
    // $princ_sign = $_POST['princ_sign'];
    // $home_pix = $_POST['home_pix'];
    $rlogo = 'logo';
    $temp = explode(".", $_FILES["logo"]["name"]);
    $logo = $rlogo. '.' . end($temp);
    
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], "../assets/img/" . $logo)) {
        // echo "<h3>  Image uploaded successfully!</h3>";

    } else {
        $logo = null;
        // echo "<h3>  Failed to upload image!</h3>";
    }
    $rprinc_sign = 'princ_sign';
    $temp = explode(".", $_FILES["princ_sign"]["name"]);
    $princ_sign = $rprinc_sign. '.' . end($temp);
    
    if (move_uploaded_file($_FILES["princ_sign"]["tmp_name"], "../assets/img/" . $princ_sign)) {
        // echo "<h3>  Image uploaded successfully! '$princ_sign','$session_id',</h3>";

    } else {
        $princ_sign = null;
        // echo "<h3>  Failed to upload image!</h3> '$princ_sign','$session_id'" ;
        
    }


    if ($school_name != '') {
        $class->add_school_info(
            $school_name,
            $short_name,
            $school_code,
            $footer_text,
            $established,
            $gender,
            $session_id,
            $mobileno,
            $mobileno2,
            $email1,
            $email2,
            $site_keyword,
            $site_desc,
            $address1,
            $address2,
            $logo,
            $princ_sign
        )
        ;?><script>
            alert('Done')
        </script><?php
    }
}
?>