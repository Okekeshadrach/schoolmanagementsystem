<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;
// session_destroy();
if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    echo '<script>window.location="../index.php"</script>';
    echo '<script>window.alert("yes")</script>';
} else {
    $user_id = $_SESSION['user_id'];
    $db = mysqli_connect($class->host, $class->user, $class->pass, $class->database);
    $sql = "SELECT * FROM staff WHERE id='$user_id'";
    $query = mysqli_query($db, $sql);
    $count = mysqli_num_rows($query);
    if ($count == true) {
        while ($row = mysqli_fetch_array($query)) {
        // echo '<script>window.alert("yes")</script>';
        $name = $row['first_name'] .' '.$row['last_name'].''.$row['other_name'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $other_name = $row['other_name'];
        $email = $row['email'];
        $staff_id = $row['staff_id'];
        $address = $row['home_address'];
        $phone_no = $row['mobileno'];
        $last_update = $row['updated_at'];
        if ($row['gender'] == 'M') {
            $gender = "Male";
            $check = "M";
            $img = "../../uploads/nobody_m.jpg";
        } elseif ($row['gender'] == 'F') {
            $gender = "Female";
            $check = "F";
            $img = "../../uploads/nobody_f.jpg";
        }else {
            $gender = "Other";
            $check = "";
            $img = "../../uploads/nobody_n.jpg";
        }
        
        if ($user_id == '1') {
            $role = 'Portal Admin';
        }
        }
    }
}     ?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="<?php echo $class->get_school_sitedesc()?>">
    <meta name="keywords" content="<?php echo $class->get_school_sitekeyword()?>">
    <meta name="author" content="DSQ-TECH" />
    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/<?php echo $class->get_school_logo()?>">
    <title><?php echo $class->get_school_name()?></title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />


    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet" />
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet" />
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet" />
    <link href="../assets/plugins/css-chart/css-chart.css" rel="stylesheet" />

    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet" />

    <link href="../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="../assets/css/style.css?n=3" rel="stylesheet" />

    <link href="../assets/css/colors/blue.css" rel="stylesheet" />
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/popper/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- ============= Sweet Alert =================== -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Portal js -->
    <script src="../assets/js/portal-02.js?n=0"></script>
    <script src="../assets/js/lga.min.js"></script>
    <script src="../assets/js/lga2.min.js"></script>

    <!-- Bootstrap responsive table CSS -->
    <link href="../assets/plugins/tablesaw-master/dist/tablesaw.css" rel="stylesheet" />

    <style>
        /* Custom style for specific pages*/
        .custom-textarea {
            min-height: 200px;
            max-height: 500px;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: auto;
        }
    </style>

    <script>
        //Global variables
        var site_url = ""
        var base_url = ""

        $(document).on("click", ".sidebartoggler", function() {
            if ($(".hide-menu").is(":visible")) {
                $("._scroll-sidebar").css("overflow", "scroll")
            } else {
                $("._scroll-sidebar").css("overflow", "visible")
            }
        })
    </script>
</head>