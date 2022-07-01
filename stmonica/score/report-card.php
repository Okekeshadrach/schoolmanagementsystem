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

    <!-- School's FavIcon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/<?php echo $class->get_school_logo()?>">
    <title><?php echo $class->get_school_name()?></title>
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <style>
        body {
            background-color: #525659;
            min-width: 1100px;
            padding-top: 3em;
        }

        input {
            position: fixed;
            top: 1em;
            left: 1em;
            float: right;
            padding: 1em;
            color: #FFF;
            background-color: #0866c6;
            cursor: pointer;
            border: 1px solid #fff;
        }

        input:hover {
            color: #0866c6;
            background-color: #fff;
            border: 1px solid #0866c6;
            transition: 0.5s;
        }
    </style>
</head>

<body>

    <form action="https://krystalng.com/fggconitsha/score/report-card/a312f5d8138f8f69b8/0368ff0f1804949e8c/1/ab45710242992476bc35" method="post" accept-charset="utf-8">
        <input class="btn" type="submit" name="fromHtmlPage" value="Click Here to Print/Download" />
    </form>
    <div>
        <style>
            p {
                font-size: 12px;
            }

            table {
                font-family: Cambria, Arial, Helvetica, sans-serif;
                color: #000;
                font-size: 12px;
                margin: 0px;
                border: #ccc 1px solid;

                -moz-border-radius: 3px;
                -webkit-border-radius: 3px;
                border-radius: 3px;

                -moz-box-shadow: 0 1px 2px #d1d1d1;
                -webkit-box-shadow: 0 1px 2px #d1d1d1;
                box-shadow: 0 1px 2px #d1d1d1;
            }

            table th {
                color: #FCF7FF;
                padding: 4px;
                border-top: 1px solid #fafafa;
                border-bottom: 1px solid #e0e0e0;

                background: #1E7145;

                text-transform: uppercase;
            }

            table th:first-child {
                text-align: left;
                padding-left: 4px;
            }

            table tr {
                text-align: center;
                padding-left: 4px;
            }

            table td:first-child {
                text-align: left;
                padding-left: 4px;
                border-left: 0;
            }

            table td {
                font-size: 16px;
                padding: 7px;

                border-top: 1px solid #ffffff;
                border-bottom: 1px solid #e0e0e0;
                border-left: 1px solid #e0e0e0;
            }

            table tr:last-child td {
                border-bottom: 0;
            }

            table tr.tbl_cell_bg {
                background: #CAE1FF;
            }

            .grade_summary {
                margin-bottom: 20px;
            }

            #reportCardHolder {
                width: 1100px;
                margin: 2em auto;
                background-color: #fff;
                padding: 1em;
            }

            table tr td p {
                padding: 0;
                margin: 4px;
            }
        </style>


        <div id="reportCardHolder">
            <table align="center" style="background:none; border:none; margin: auto;">
                <tr style="background:none; border:none; ">
                    <td style="background:none; border:none;">
                    </td>

                    <td style="background:none; border:none;">
                        <img src="../assets/img/<?php echo $class->get_school_logo()?>" height="100" />
                    </td>

                    <td style="background:none; border:none;">
                        <h1><?php echo $class->get_school_short()?> Nur & Pri</h1>
                    </td>

                    <td style="background:none; border:none;">
                    </td>
                </tr>
            </table>

            <div style="text-align:center;">
                <h1><strong>REPORT SHEET</strong></h1>
                <h3><strong>FIRST TERM 2020/2021 ACADEMIC SESSION - JSS 2K</strong></h3>
            </div>

            <table style="margin: auto;">
                <tr>
                    <td class="details">
                        <h3><strong>ABRAHAM GRACE MARYCYNTHIA</strong></h3>
                    </td>

                    <td style="text-align: left">
                        <p>GENDER: Female</p>
                        <p>HOUSE: </p>
                        <p>STATUS: BOARDER</p>
                        <p>NO. IN CLASS: 26 Students</p>
                        <p>NEXT TERM BEGINS: </p>
                    </td>

                    <td style="text-align: left">

                        <p>POSITION: 2nd</p>
                        <p>ADMISSION NO: 3467008655</p>
                        <p>USERNAME: FGGCON199348</p>
                        <p>EMAIL: </p>
                        <p>PHONE: 088797686</p>
                        <p>NEXT TERM ENDS: </p>
                    </td>

                    <td>
                        <img src="https://krystalng.com/fggconitsha/uploads/nobody_f.jpg" height="120">
                    </td>
                </tr>
            </table>
            <br />

            <table id="main-result" width="100%">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Subject</th>

                        <th>CA1 (50%)</th>
                        <th>Exam (50%)</th>
                        <th>Total (100%)</th>
                        <th>Subject Pos.</th>
                        <th>Class Avg (100%)</th>
                        <th>Grade</th>
                        <th>Grade Remark</th>
                    </tr>
                </thead>
                <tbody>


                    <tr>
                        <td style="text-align: center"> 1</td>
                        <td style="text-align: left"> SKILLS DEVELOPMENT CLASS (GENERAL)</td>

                        <td align="center"> 45 </td>
                        <td align="center"> 40</td>
                        <td align="center"> 85</td>
                        <td align="center"> 2nd</td>
                        <td align="center"> 61</td>
                        <td align="center"> A</td>
                        <td align="center"> DISTINCTION</td>

                    </tr>


                </tbody>
            </table>
            <br />

            <div class="key_to_grade">KEY TO GRADES - A: &nbsp; 70% and Above, &nbsp;&nbsp; C: &nbsp; 50% - 69%, &nbsp;&nbsp; F: &nbsp; 39% and Below, &nbsp;&nbsp; P: &nbsp; 40% - 49%</div>

            <div class="grade_summary">
                <strong>GRADES SUMMARY</strong>: 1A &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <strong>AVERAGE SCORE: 85</strong>
            </div>

            <table width="100%">
                <tr>
                    <td width="60%">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th colspan="2">BEHAVIOURAL TRAITS / PSYCHOMOTOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="text-align: left">Neatness &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                    <td style="text-align: left">Obedience &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left">Reliability &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                    <td style="text-align: left">Initiative &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left">Sense of Reponsibility &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                    <td style="text-align: left">Punctuality &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left">Relationship with Students &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                    <td style="text-align: left">Attentiveness &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                </tr>
                                <tr>
                                    <td style="text-align: left">Self Control &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                    <td style="text-align: left">Spirit of Co-operation &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; -</td>
                                </tr>
                                <tr> </tr>
                            </tbody>
                        </table>

                    </td>

                    <td width="60%" valign="top">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>KEY TO PSYCHOMOTOR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; Excellent show of traits</td>
                                </tr>
                                <tr>
                                    <td>B &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; High level exhibition of traits</td>
                                </tr>
                                <tr>
                                    <td>C &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; Fair exhibition of traits</td>
                                </tr>
                                <tr>
                                    <td>D &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; Minimal exhibition of traits</td>
                                </tr>
                                <tr>
                                    <td>E &nbsp; &nbsp; &nbsp; - &nbsp; &nbsp; &nbsp; No regard for traits</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </table>

            <br />

            <table width="100%">
                <thead>
                    <tr>
                        <th colspan="2" style="text-align:center;">REMARKS / COMMENTS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align: left">
                        <td width="30%"> House Master/Mistress Remarks: </td>
                        <td></td>
                    </tr>
                    <tr style="text-align: left">
                        <td> Form Teacher's Remarks: </td>
                        <td></td>
                    </tr>
                    <tr style="text-align: left">
                        <td> Principal's Remarks: </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <br>


            <img src="https://krystalng.com/fggconitsha/assets/img/princ_sign_d8e59db65c4c.png" width="100" height="70" alt="" />


            <h3 style="margin: 0"> </h3>
            <h4 style="margin: 0"><i>Project Manager KITA</i></h4>
        </div>

    </div>

</body>

</html>