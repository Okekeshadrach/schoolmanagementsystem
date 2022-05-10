<?php
session_start();
require '../../public_functions.php';
$class = new sms_engine;

if (!isset($_SESSION['username']) and !isset($_SESSION['password'])) {
    // echo '<script>window.location="../../login.php"</script>';
}  ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Federal Government Girls College, Nkwelle Ezunaka" />
    <meta name="keywords" content="school, education" />
    <meta name="author" content="Krystal Digital Solutions" />

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/logo_4a262eb69667.png?v1" />
    <title>Krystal’s IT Academy F.G.G.C, NKWELLE EZUNAKA - School Portal</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet" />
    <link href="../assets/plugins/chartist-js/dist/chartist-init.css" rel="stylesheet" />
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet" />
    <link href="../assets/plugins/css-chart/css-chart.css" rel="stylesheet" />

    <!--This page css - Morris CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet" />

    <link href="../../assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" />

    <link href="../assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
    <link href="../assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="../assets/css/style.css?n=3" rel="stylesheet" />

    <link href="../assets/css/colors/blue.css" rel="stylesheet" />

    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/popper/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- ============= Sweet Alert =================== -->
    <script src="../assets/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Portal js -->
    <script src="../assets/js/portal-02.js?n=0"></script>

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

        $(document).on("click", ".sidebartoggler", function () {
            if ($(".hide-menu").is(":visible")) {
                $("._scroll-sidebar").css("overflow", "scroll")
            } else {
                $("._scroll-sidebar").css("overflow", "visible")
            }
        })
    </script>
</head>
