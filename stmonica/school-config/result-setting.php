<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader" style="opacity: 0.5;">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>

    <!--========= AJAX load overlay =========== -->
    <div style="width: 100%; height:100%; background-color: white; position: fixed; top:0; left:0; z-index: 1000; opacity:0.3; display: none;" id="DivOverlay">
    </div>
    <!-----===================================----->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <?php include('../layout/topbar.php') ?>
        <?php include('../layout/sidebar.php') ?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">
                            Result Settings
                        </h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Configuration</a></li>
                            <li class="breadcrumb-item active">Result setting</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="school-config/result-setting-process" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                        <label>Score Entry Access</label>
                                        <hr>
                                        <div class="col-sm-9">
                                            <input name="score_entry" type="radio" id="s_r_1" class="with-gap radio-col-deep-purple" value="1" checked />
                                            <label class="form-control-label m-r-20" for="s_r_1">Open to all
                                                <small>(Admin and Staff)</small>
                                            </label>
                                            <br>
                                            <input name="score_entry" type="radio" id="s_r_2" class="with-gap radio-col-deep-purple" value="0" />
                                            <label class="form-control-label m-r-20" for="s_r_2">Lock for all</label>
                                            <br>
                                            <input name="score_entry" type="radio" id="s_r_3" class="with-gap radio-col-deep-purple" value="2" />
                                            <label class="form-control-label" for="s_r_3">Lock for staff only</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-rounded">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <form action="school-config/result-setting-process" method="post" accept-charset="utf-8">
                                    <div class="form-group">
                                        <label>Minimum Subjects required to Compute Result</label>
                                        <hr>
                                        <p class="m-b-20"><small class="text-warning"><i>Students who do not have up to
                                                    this number of subjects will have no result</i></small></p>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <input name="min_subject_compute_position" type="number" class="form-control" value="1" min="1" />
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn btn-primary btn-rounded">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form action="school-config/result-access-process" id="result-access-form" method="post" accept-charset="utf-8">

                                    <div class="form-group">
                                        <label>Student/Parent Result Access</label>
                                        <hr>
                                        <small>(Only Results on <i class="text-primary">Blue</i> will be available to
                                            Students/Parents. Results that are not released will display as <i class="text-danger">"This Result is not yet released"</i> on the Student
                                            or Parent account)</small>

                                        <div class="table-responsive" id="resp-div" style="max-height: 300px">
                                            <table class="table table-striped table-bordered color-table success-table stylish-table" id="resp-table" width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td>First Term: 2020/2021</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="13" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Third Term: 2019/2020</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="12" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Second Term: 2019/2020</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="11" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>First Term: 2019/2020</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="10" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Third Term: 2018/2019</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="9" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Second Term: 2018/2019</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="8" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>First Term: 2018/2019</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="7" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Third Term: 2017/2018</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="6" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Second Term: 2017/2018</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="5" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>First Term: 2017/2018</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="4" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Third Term: 2016/2017</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="3" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Second Term: 2016/2017</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="2" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>First Term: 2016/2017</td>
                                                        <td>
                                                            <div class="switch">
                                                                <label>
                                                                    <input name="session_id[]" type="checkbox" value="1" class="chk" checked>
                                                                    <span class="lever switch-col-light-blue"></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-rounded">Save</button>
                                        <span class="processor"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <form action="school-config/result-setting-process" id="result-setting-form" method="post" accept-charset="utf-8">
                                            <div class="form-group">
                                                <label class="form-control-label">Preferred Report Card Template</label>
                                                <div class="col-sm-9">
                                                    <input name="result_template" type="radio" id="r1" class="with-gap radio-col-deep-purple" value="1" checked />
                                                    <label class="form-control-label m-r-20" for="r1">Template 1
                                                    </label>
                                                    <br>
                                                    <input name="result_template" type="radio" id="r2" class="with-gap radio-col-deep-purple" value="2" />
                                                    <label class="form-control-label m-r-20" for="r2">Template 2</label>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="result_th_color">Table Head
                                                    Background Color</label>
                                                <div class="col-sm-9">
                                                    <input name="result_th_color" id="result_th_color" type="color" class="form-control" value="#1E7145" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label" for="result_td_color">Table Row
                                                    Background Color</label>
                                                <div class="col-sm-9">
                                                    <input name="result_td_color" id="result_td_color" type="color" class="form-control" value="#CAE1FF" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="result_th_text_color">Table Head
                                                    Text Color</label>
                                                <div class="col-sm-9">
                                                    <input name="result_th_text_color" id="result_th_text_color" type="color" class="form-control" value="#FCF7FF" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-control-label" for="result_has_head">Do you intend to
                                                    print report card with your own letter head paper?</label>
                                                <div class="col-sm-9">
                                                    <input name="result_has_head" type="radio" id="r-h-h2" class="with-gap radio-col-deep-purple" value="0" />
                                                    <label class="form-control-label m-r-20" for="r-h-h2">Yes, I have a
                                                        letter head paper</label>
                                                    <br>
                                                    <input name="result_has_head" type="radio" id="r-h-h1" class="with-gap radio-col-deep-purple" value="1" checked />
                                                    <label class="form-control-label m-r-20" for="r-h-h1">No, use the
                                                        Portal's default heading
                                                    </label>
                                                    <br>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary btn-rounded">Save Settings</button>
                                                <span class="processor"></span>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-6 temp temp-1 " style="overflow: scroll;">
                                        <div style="width: 400px; height: 500px; border: 1px solid #999;">
                                            <div>
                                                <style>
                                                    #reportCardHolder table {
                                                        font-family: Cambria, Arial, Helvetica, sans-serif;
                                                        color: #000;
                                                        font-size: 7px;
                                                        margin: 0;
                                                        border: #ccc 1px solid;

                                                        border-radius: 3px;
                                                        box-shadow: 0 1px 2px #d1d1d1;
                                                    }

                                                    #reportCardHolder table th {
                                                        color: #FCF7FF;
                                                        padding: 4px;
                                                        border-top: 1px solid #fafafa;
                                                        border-bottom: 1px solid #e0e0e0;

                                                        background: #1E7145;

                                                        text-transform: uppercase;
                                                        font-size: 7px;
                                                    }

                                                    #reportCardHolder table td {
                                                        padding: 7px;
                                                        border-top: 1px solid #ffffff;
                                                        border-bottom: 1px solid #e0e0e0;
                                                        border-left: 1px solid #e0e0e0;

                                                        background: #fafafa;
                                                        font-size: 7px;
                                                    }

                                                    #reportCardHolder table tr td.tbl_cell_bg {
                                                        background: #CAE1FF;
                                                    }

                                                    #reportCardHolder {
                                                        width: 100%;
                                                        background-color: #fff;
                                                        padding: 1em;
                                                    }

                                                    #reportCardHolder table tr td p {
                                                        padding: 0;
                                                        margin: 4px;
                                                    }
                                                </style>


                                                <div id="reportCardHolder">
                                                    <div style="min-height: 3em;">
                                                        <table align="center" style="background:none; border:none; margin: auto;" class="result-head ">
                                                            <tr style="background:none; border:none; ">
                                                                <td style="background:none; border:none;">
                                                                </td>

                                                                <td style="background:none; border:none;">
                                                                    <img src="assets/img/logo_4a262eb69667.png" height="50" />
                                                                </td>

                                                                <td style="background:none; border:none;">
                                                                    <h1 style="font-size: 12px;">Krystal’s IT Academy
                                                                        F.G.G.C, NKWELLE EZUNAKA</h1>
                                                                </td>

                                                                <td style="background:none; border:none;">
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>


                                                    <div style="text-align:center;">
                                                        <h1><strong style="font-size: 10px;">REPORT SHEET</strong></h1>
                                                        <h3>
                                                            <strong style="font-size: 10px;">FIRST TERM 2020/2021
                                                                ACADEMIC
                                                                SESSION - JSS1A</strong>
                                                        </h3>
                                                    </div>

                                                    <table style="margin: auto;">
                                                        <tr>
                                                            <td class="details">
                                                                <h3><strong style="font-size: 8px;">JOHN DOE</strong>
                                                                </h3>
                                                            </td>

                                                            <td style="text-align: left">
                                                                <p>GENDER: Male</p>
                                                                <p>HOUSE: </p>
                                                                <p>...</p>
                                                            </td>

                                                            <td style="text-align: left">

                                                                <p>POSITION: 18th</p>
                                                                <p>ADMISSION NO: 111</p>
                                                                <p>...</p>
                                                            </td>

                                                            <td>
                                                                <img src="uploads/nobody_f.jpg" height="40">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <br />

                                                    <table class="table table-bordered responsive" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th>S/N</th>
                                                                <th>Subject</th>

                                                                <th width="">CA1 (15%)</th>
                                                                <th width="">CA2 (15%)</th>
                                                                <th>Exam (70%)</th>
                                                                <th>Total (100%)</th>
                                                                <th>Subject Pos.</th>
                                                                <th>...</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>


                                                            <tr>
                                                                <td align="center" style="text-align: center"> 1</td>
                                                                <td style="text-align: left"> ENGLISH LANGUAGE</td>

                                                                <td align="center"> 0</td>
                                                                <td align="center"> -</td>
                                                                <td align="center"> -</td>
                                                                <td align="center"> 0</td>
                                                                <td align="center"> 54th</td>
                                                                <td align="center"> ...</td>

                                                            </tr>


                                                            <tr>
                                                                <td align="center" class="tbl_cell_bg small_td" style="text-align: center"> 2
                                                                </td>
                                                                <td class="tbl_cell_bg small_td" style="text-align: left"> MATHEMATICS
                                                                </td>

                                                                <td align="center" class="tbl_cell_bg small_td"> 13</td>
                                                                <td align="center" class="tbl_cell_bg small_td"> 13</td>
                                                                <td align="center" class="tbl_cell_bg small_td"> 41</td>
                                                                <td align="center" class="tbl_cell_bg small_td"> 67</td>
                                                                <td align="center" class="tbl_cell_bg small_td"> 8th
                                                                </td>
                                                                <td align="center" class="tbl_cell_bg small_td"> ...
                                                                </td>

                                                            </tr>


                                                            <tr>
                                                                <td align="center" style="text-align: center"> 3</td>
                                                                <td style="text-align: left"> BASIC SCIENCE AND
                                                                    TECHNOLOGY</td>

                                                                <td align="center"> 5</td>
                                                                <td align="center"> 7</td>
                                                                <td align="center"> 47</td>
                                                                <td align="center"> 59</td>
                                                                <td align="center"> 18th</td>
                                                                <td align="center"> ...</td>

                                                            </tr>


                                                            <tr>
                                                                <td align="center" class="tbl_cell_bg small_td" style="text-align: center"> 4
                                                                </td>
                                                                <td class="tbl_cell_bg small_td" style="text-align: left"> BUSINESS
                                                                    STUDIES
                                                                </td>

                                                                <td align="center" class="tbl_cell_bg small_td"> 11</td>
                                                                <td align="center" class="tbl_cell_bg small_td"> 11</td>
                                                                <td align="center" class="tbl_cell_bg small_td"> 61</td>
                                                                <td align="center" class="tbl_cell_bg small_td"> 83</td>
                                                                <td align="center" class="tbl_cell_bg small_td"> 9th
                                                                </td>
                                                                <td align="center" class="tbl_cell_bg small_td"> ...
                                                                </td>

                                                            </tr>


                                                            <tr>
                                                                <td align="center" style="text-align: center"> 5</td>
                                                                <td style="text-align: left"> CISCO</td>

                                                                <td align="center"> 15</td>
                                                                <td align="center"> 15</td>
                                                                <td align="center"> 55</td>
                                                                <td align="center"> 85</td>
                                                                <td align="center"> 2nd</td>
                                                                <td align="center"> ...</td>

                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <h2>. . .</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 temp temp-2 hide" style="overflow: scroll;">
                                        <div style="width: 400px; height: 500px; border: 1px solid #999;">
                                            <style>
                                                #reportCardHolder1 table {
                                                    border-collapse: collapse;
                                                    text-align: left;
                                                    width: 100%;
                                                    border: 1px solid #999;
                                                }

                                                #reportCardHolder1 table tr {
                                                    border: 1px solid #999;
                                                }

                                                #reportCardHolder1 table td,
                                                #reportCardHolder1 table th {
                                                    padding: 0.6em 3px;
                                                }

                                                #reportCardHolder1 table thead th,
                                                #reportCardHolder1 table th {
                                                    background-color: #1E7145;
                                                    color: #FCF7FF;
                                                    font-size: 7px;
                                                    font-weight: bold;
                                                    border-left: 1px solid #999;
                                                    border-top: 1px solid #999;
                                                }

                                                #reportCardHolder1 table thead th:first-child,
                                                #reportCardHolder1 table th:first-child {
                                                    border: none;
                                                }

                                                #reportCardHolder1 table tbody td,
                                                #reportCardHolder1 table td {
                                                    color: #000000;
                                                    border-left: 1px solid #999;
                                                    font-size: 7px;
                                                    border-bottom: 1px solid #999;
                                                    font-weight: normal;
                                                }

                                                #reportCardHolder1 table tr td.tbl_cell_bg {
                                                    background: #CAE1FF;
                                                    color: #000000;
                                                    border: 1px solid #999;
                                                }

                                                #reportCardHolder1 table,
                                                #reportCardHolder1 table td.no-border,
                                                #reportCardHolder1 table tr.no-border {
                                                    background: none;
                                                    border: none;
                                                }

                                                #reportCardHolder1 {
                                                    width: 100%;
                                                    background-color: #fff;
                                                    padding: 1em;
                                                }

                                                #reportCardHolder1 table tr td p {
                                                    padding: 0;
                                                    margin: 4px;
                                                }
                                            </style>

                                            <div id="reportCardHolder1">

                                                <div style="min-height: 3em">
                                                    <table align="center" class="no-border result-head " width="85%">
                                                        <tr class="no-border">
                                                            <td style="background:none; border:none;">
                                                                <img src="assets/img/logo_4a262eb69667.png" height="50" />
                                                            </td>

                                                            <td style="background:none; border:none;">
                                                                <h1 style="font-size: 12px;">Krystal’s IT Academy
                                                                    F.G.G.C, NKWELLE EZUNAKA</h1>
                                                            </td>

                                                            <td class="no-border">
                                                                <img src="uploads/nobody_f.jpg" height="30">
                                                            </td>
                                                            <td class="no-border">&nbsp;</td>
                                                        </tr>
                                                    </table>
                                                </div>


                                                <br>
                                                <table align="center" class="no-border">
                                                    <tr class="no-border">
                                                        <td style="background: #ffffff; border:none;">
                                                            <h4><strong style="font-size: 11px;">JOHN DOE</strong></h4>
                                                            <p>GENDER: Male</p>
                                                            <p>HOUSE: </p>
                                                            <p>...</p>
                                                        </td>

                                                        <td width="30%" style="background: #ffffff; border:none;">&nbsp;
                                                        </td>

                                                        <td style="background: #ffffff; border:none;">
                                                            <p style="font-size: 10px;">JSS1A</p>
                                                            <p>POSITION: 1ST</p>
                                                            <p>ADMISSION NO: 111</p>
                                                            <p>...</p>
                                                        </td>
                                                    </tr>
                                                </table>

                                                <div style="text-align:center;">
                                                    <h3>
                                                        <strong style="font-size: 10px;">FIRST TERM 2020/2021 REPORT
                                                            SHEET</strong>
                                                    </h3>
                                                </div>

                                                <br />

                                                <table width="100%">
                                                    <thead>
                                                        <tr>
                                                            <th>S/N</th>
                                                            <th>Subject</th>
                                                            <th width="7%">CA1 (15%)</th>
                                                            <th width="7%">CA2 (15%)</th>
                                                            <th width="7%">Exam (70%)</th>
                                                            <th>Total (100%)</th>
                                                            <th>Subject Pos.</th>
                                                            <th>...</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td align="center" style="text-align: center"> 1</td>
                                                            <td style="text-align: left"> ENGLISH LANGUAGE</td>

                                                            <td align="center"> -</td>
                                                            <td align="center"> -</td>
                                                            <td align="center"> 0</td>
                                                            <td align="center"> 0</td>
                                                            <td align="center"> 54th</td>
                                                            <td align="center"> ...</td>
                                                        </tr>


                                                        <tr>
                                                            <td align="center" class="tbl_cell_bg" style="text-align: center"> 2</td>
                                                            <td class="tbl_cell_bg" style="text-align: left">
                                                                MATHEMATICS</td>

                                                            <td align="center" class="tbl_cell_bg"> 13</td>
                                                            <td align="center" class="tbl_cell_bg"> 13</td>
                                                            <td align="center" class="tbl_cell_bg"> 41</td>
                                                            <td align="center" class="tbl_cell_bg"> 67</td>
                                                            <td align="center" class="tbl_cell_bg"> 8th</td>
                                                            <td align="center" class="tbl_cell_bg"> ...</td>
                                                        </tr>


                                                        <tr>
                                                            <td align="center" style="text-align: center"> 3</td>
                                                            <td style="text-align: left"> BASIC SCIENCE AND TECHNOLOGY
                                                            </td>

                                                            <td align="center"> 5</td>
                                                            <td align="center"> 7</td>
                                                            <td align="center"> 47</td>
                                                            <td align="center"> 59</td>
                                                            <td align="center"> 20th</td>
                                                            <td align="center"> ...</td>
                                                        </tr>


                                                        <tr>
                                                            <td align="center" class="tbl_cell_bg" style="text-align: center"> 4</td>
                                                            <td class="tbl_cell_bg" style="text-align: left"> BUSINESS
                                                                STUDIES</td>

                                                            <td align="center" class="tbl_cell_bg"> 11</td>
                                                            <td align="center" class="tbl_cell_bg"> 11</td>
                                                            <td align="center" class="tbl_cell_bg"> 61</td>
                                                            <td align="center" class="tbl_cell_bg"> 83</td>
                                                            <td align="center" class="tbl_cell_bg"> 9th</td>
                                                            <td align="center" class="tbl_cell_bg"> ...</td>
                                                        </tr>


                                                        <tr>
                                                            <td align="center" style="text-align: center"> 5</td>
                                                            <td style="text-align: left"> CISCO</td>

                                                            <td align="center"> 15</td>
                                                            <td align="center"> 15</td>
                                                            <td align="center"> 55</td>
                                                            <td align="center"> 85</td>
                                                            <td align="center"> 2nd</td>
                                                            <td align="center"> ...</td>
                                                        </tr>

                                                        <tr>
                                                            <td align="center" class="tbl_cell_bg" style="text-align: center"> 6</td>
                                                            <td class="tbl_cell_bg" style="text-align: left"> BUSINESS
                                                                STUDIES</td>

                                                            <td align="center" class="tbl_cell_bg"> 11</td>
                                                            <td align="center" class="tbl_cell_bg"> 11</td>
                                                            <td align="center" class="tbl_cell_bg"> 61</td>
                                                            <td align="center" class="tbl_cell_bg"> 83</td>
                                                            <td align="center" class="tbl_cell_bg"> 9th</td>
                                                            <td align="center" class="tbl_cell_bg"> ...</td>
                                                        </tr>

                                                        <tr>
                                                            <td align="center" style="text-align: center"> 7</td>
                                                            <td style="text-align: left"> CISCO</td>

                                                            <td align="center"> 15</td>
                                                            <td align="center"> 15</td>
                                                            <td align="center"> 55</td>
                                                            <td align="center"> 85</td>
                                                            <td align="center"> 2nd</td>
                                                            <td align="center"> ...</td>
                                                        </tr>

                                                        <tr>
                                                            <td align="center" class="tbl_cell_bg" style="text-align: center"> 6</td>
                                                            <td class="tbl_cell_bg" style="text-align: left"> BUSINESS
                                                                STUDIES</td>

                                                            <td align="center" class="tbl_cell_bg"> 11</td>
                                                            <td align="center" class="tbl_cell_bg"> 11</td>
                                                            <td align="center" class="tbl_cell_bg"> 61</td>
                                                            <td align="center" class="tbl_cell_bg"> 83</td>
                                                            <td align="center" class="tbl_cell_bg"> 9th</td>
                                                            <td align="center" class="tbl_cell_bg"> ...</td>
                                                        </tr>

                                                        <tr>
                                                            <td align="center" style="text-align: center"> 7</td>
                                                            <td style="text-align: left"> CISCO</td>

                                                            <td align="center"> 15</td>
                                                            <td align="center"> 15</td>
                                                            <td align="center"> 55</td>
                                                            <td align="center"> 85</td>
                                                            <td align="center"> 2nd</td>
                                                            <td align="center"> ...</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <h2>. . .</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block">
                                    <h4 class="card-title">Class Result Settings <label class="label label-danger">new</label></h4>
                                </div>

                                <form action="school-config/class-result-setting-process" method="post" accept-charset="utf-8">
                                    <div class="table-responsive m-t-20">
                                        <table class="table stylish-table color-table table-bordered success-table" style="min-width: 400px">
                                            <thead>
                                                <tr>
                                                    <th class="center">Class</th>
                                                    <th class="center">Report Card Table Spacing / Padding (px)</th>
                                                    <th class="center">Report Card Table Fontsize (px)</th>
                                                    <th class="center">Show Position on Report card</th>
                                                    <th class="center">Show Position on Broadsheet</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>JSS 1</td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[1][rc_td_padding]" value="7" min="2" max="20" placeholder="e.g. 7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[1][rc_td_fontsize]" value="16" min="7" max="30" placeholder="e.g. 16">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[1][position_on_result]">
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[1][position_on_broadsheet]">
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>JSS 2</td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[2][rc_td_padding]" value="7" min="2" max="20" placeholder="e.g. 7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[2][rc_td_fontsize]" value="16" min="7" max="30" placeholder="e.g. 16">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[2][position_on_result]">
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[2][position_on_broadsheet]">
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>JSS 3</td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[3][rc_td_padding]" value="7" min="2" max="20" placeholder="e.g. 7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[3][rc_td_fontsize]" value="16" min="7" max="30" placeholder="e.g. 16">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[3][position_on_result]">
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[3][position_on_broadsheet]">
                                                            <option value="1" selected>Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SS 1</td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[4][rc_td_padding]" value="7" min="2" max="20" placeholder="e.g. 7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[4][rc_td_fontsize]" value="16" min="7" max="30" placeholder="e.g. 16">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[4][position_on_result]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[4][position_on_broadsheet]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SS 2</td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[5][rc_td_padding]" value="7" min="2" max="20" placeholder="e.g. 7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[5][rc_td_fontsize]" value="16" min="7" max="30" placeholder="e.g. 16">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[5][position_on_result]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[5][position_on_broadsheet]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>SS 3</td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[6][rc_td_padding]" value="7" min="2" max="20" placeholder="e.g. 7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[6][rc_td_fontsize]" value="16" min="7" max="30" placeholder="e.g. 16">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[6][position_on_result]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[6][position_on_broadsheet]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>YEAR 1</td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[7][rc_td_padding]" value="7" min="2" max="20" placeholder="e.g. 7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[7][rc_td_fontsize]" value="16" min="7" max="30" placeholder="e.g. 16">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[7][position_on_result]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[7][position_on_broadsheet]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>YEAR 2</td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[8][rc_td_padding]" value="7" min="2" max="20" placeholder="e.g. 7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[8][rc_td_fontsize]" value="16" min="7" max="30" placeholder="e.g. 16">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[8][position_on_result]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[8][position_on_broadsheet]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>YEAR 3</td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[9][rc_td_padding]" value="7" min="2" max="20" placeholder="e.g. 7">
                                                    </td>
                                                    <td>
                                                        <input type="number" class="form-control" name="result_setting[9][rc_td_fontsize]" value="16" min="7" max="30" placeholder="e.g. 16">
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[9][position_on_result]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="result_setting[9][position_on_broadsheet]">
                                                            <option value="1">Yes</option>
                                                            <option value="0" selected>No</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-rounded">Save</button>
                                        <span class="processor"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $('input[name=result_template]').change(function() {
                        var a = $(this).val();
                        $('.temp').hide();
                        $('.temp-' + a).show('slow');
                    });

                    $('input[name=result_th_color]').change(function() {
                        var a = $(this).val();
                        $('#reportCardHolder table th').css('background', a);
                        $('#reportCardHolder1 table th').css('background', a);
                    });

                    $('input[name=result_td_color]').change(function() {
                        var a = $(this).val();
                        $('#reportCardHolder table tr td.tbl_cell_bg').css('background', a);
                        $('#reportCardHolder1 table tr td.tbl_cell_bg').css('background', a);
                    });

                    $('input[name=result_th_text_color]').change(function() {
                        var a = $(this).val();
                        $('#reportCardHolder table th').css('color', a);
                        $('#reportCardHolder1 table th').css('color', a);
                    });

                    $('input[name=result_has_head]').change(function() {
                        var a = $(this).val();
                        if (a === '0') {
                            $('.result-head').fadeOut();
                        } else {
                            $('.result-head').fadeIn();
                        }
                    });

                    $('form').submit(function(e) {
                        e.preventDefault();
                        submit_form2(this);
                    });
                </script><!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © 2022 School Management System (Edu-Portal) by <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL koncept</a>
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <?php include('../layout/script.php') ?>
</body>

</html>