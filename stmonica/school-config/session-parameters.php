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
            <style>
                .sp {
                    display: none
                }
            </style>

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">School Session Parameters</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Configuration</a></li>
                            <li class="breadcrumb-item active">Session parameters</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="__session_id">Showing Session parameters for</label>
                                    <select class="form-control select2" id="__session_id" style="width: 100%" required>
                                        <option value="13">First Term: 2020/2021</option>
                                        <option value="12">Third Term: 2019/2020</option>
                                        <option value="11">Second Term: 2019/2020</option>
                                        <option value="10">First Term: 2019/2020</option>
                                        <option value="9">Third Term: 2018/2019</option>
                                        <option value="8">Second Term: 2018/2019</option>
                                        <option value="7">First Term: 2018/2019</option>
                                        <option value="6">Third Term: 2017/2018</option>
                                        <option value="5">Second Term: 2017/2018</option>
                                        <option value="4">First Term: 2017/2018</option>
                                        <option value="3">Third Term: 2016/2017</option>
                                        <option value="2">Second Term: 2016/2017</option>
                                        <option value="1">First Term: 2016/2017</option>

                                    </select>
                                </div>
                                <div class="offset-md-5 col-md-3">
                                    <a href="#newParam" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target="#newParam">Set new Session Parameter</a>
                                </div>
                            </div>
                            <p>Here, you can set appropriate weights for given session parameters. See existing settings
                                below</p>
                            <div class="table-responsive" id="resp-div">
                                <table class="table table-striped table-bordered color-table success-table stylish-table" id="resp-table" width="100%">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Term/ Session</th>
                                            <th>Class</th>
                                            <th class="text-center">CA1 (%)</th>
                                            <th class="text-center">CA2 (%)</th>
                                            <th class="text-center">CA3 (%)</th>
                                            <th class="text-center">CA4 (%)</th>
                                            <th class="text-center">Exam (%)</th>
                                            <th class="text-center">Total (%)</th>
                                            <th class="text-center">Term Weight (%)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="session-13 sp">
                                            <td class="sn-13">1</td>
                                            <td>First Term: 2020/2021</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/303e5a7757b3afd881" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-13 sp">
                                            <td class="sn-13">2</td>
                                            <td>First Term: 2020/2021</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/8f3ca356585381e3c2" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-13 sp">
                                            <td class="sn-13">3</td>
                                            <td>First Term: 2020/2021</td>
                                            <td>SS 1</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/98ab10bc595a6f2951" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-13 sp">
                                            <td class="sn-13">4</td>
                                            <td>First Term: 2020/2021</td>
                                            <td>SS 2</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/e7f5d5ee6023103d5e" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-12 sp">
                                            <td class="sn-12">5</td>
                                            <td>Third Term: 2019/2020</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/2707b431535ee361b4" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-12 sp">
                                            <td class="sn-12">6</td>
                                            <td>Third Term: 2019/2020</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/43d2f6ba5479dd8d14" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-12 sp">
                                            <td class="sn-12">7</td>
                                            <td>Third Term: 2019/2020</td>
                                            <td>SS 1</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/5a4ee76e55a94bf653" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-12 sp">
                                            <td class="sn-12">8</td>
                                            <td>Third Term: 2019/2020</td>
                                            <td>SS 2</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/50f9a98b560d00557a" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-11 sp">
                                            <td class="sn-11">9</td>
                                            <td>Second Term: 2019/2020</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/557efa8849300aae7f" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-11 sp">
                                            <td class="sn-11">10</td>
                                            <td>Second Term: 2019/2020</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/75ee1d775086f4863e" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-11 sp">
                                            <td class="sn-11">11</td>
                                            <td>Second Term: 2019/2020</td>
                                            <td>SS 1</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/947ce86b51ca05e1f6" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-11 sp">
                                            <td class="sn-11">12</td>
                                            <td>Second Term: 2019/2020</td>
                                            <td>SS 2</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/1bedf8c75253f9b2dc" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-10 sp">
                                            <td class="sn-10">13</td>
                                            <td>First Term: 2019/2020</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/26d1cdb945c97f842f" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-10 sp">
                                            <td class="sn-10">14</td>
                                            <td>First Term: 2019/2020</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/4b8db503463c7f5648" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-10 sp">
                                            <td class="sn-10">15</td>
                                            <td>First Term: 2019/2020</td>
                                            <td>SS 1</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/1b273dd347037cbf4a" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-10 sp">
                                            <td class="sn-10">16</td>
                                            <td>First Term: 2019/2020</td>
                                            <td>SS 2</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/64260482485af52c4d" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-9 sp">
                                            <td class="sn-9">17</td>
                                            <td>Third Term: 2018/2019</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/eaa8113b418e722bc9" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-9 sp">
                                            <td class="sn-9">18</td>
                                            <td>Third Term: 2018/2019</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/4682b5b04287f9c738" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-9 sp">
                                            <td class="sn-9">19</td>
                                            <td>Third Term: 2018/2019</td>
                                            <td>SS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/9252fc98438940229f" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-9 sp">
                                            <td class="sn-9">20</td>
                                            <td>Third Term: 2018/2019</td>
                                            <td>SS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/004382364406d18699" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-8 sp">
                                            <td class="sn-8">21</td>
                                            <td>Second Term: 2018/2019</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/416f405b37637ae243" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-8 sp">
                                            <td class="sn-8">22</td>
                                            <td>Second Term: 2018/2019</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/6c82acb038278dfb4b" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-8 sp">
                                            <td class="sn-8">23</td>
                                            <td>Second Term: 2018/2019</td>
                                            <td>SS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/a18c9a08391356972a" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-8 sp">
                                            <td class="sn-8">24</td>
                                            <td>Second Term: 2018/2019</td>
                                            <td>SS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/66a965c14031108b77" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-7 sp">
                                            <td class="sn-7">25</td>
                                            <td>First Term: 2018/2019</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/b19356f131251c5b84" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-7 sp">
                                            <td class="sn-7">26</td>
                                            <td>First Term: 2018/2019</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">40</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/d913ba92330f6f05d4" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-7 sp">
                                            <td class="sn-7">27</td>
                                            <td>First Term: 2018/2019</td>
                                            <td>JSS 3</td>
                                            <td class="text-center">40</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/79a6a61434a0ecc3eb" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-7 sp">
                                            <td class="sn-7">28</td>
                                            <td>First Term: 2018/2019</td>
                                            <td>SS 1</td>
                                            <td class="text-center">40</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/fa5a42c63592e85572" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-7 sp">
                                            <td class="sn-7">29</td>
                                            <td>First Term: 2018/2019</td>
                                            <td>SS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/e64d7fd6367fd2bc9a" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-7 sp">
                                            <td class="sn-7">30</td>
                                            <td>First Term: 2018/2019</td>
                                            <td>SS 3</td>
                                            <td class="text-center">40</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/f159950d3295d674a4" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-6 sp">
                                            <td class="sn-6">31</td>
                                            <td>Third Term: 2017/2018</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/22cdeda92748c1462e" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-6 sp">
                                            <td class="sn-6">32</td>
                                            <td>Third Term: 2017/2018</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/10dbe6d628365f26b5" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-6 sp">
                                            <td class="sn-6">33</td>
                                            <td>Third Term: 2017/2018</td>
                                            <td>SS 1</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/bd7d7aab295a7336f9" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-6 sp">
                                            <td class="sn-6">34</td>
                                            <td>Third Term: 2017/2018</td>
                                            <td>SS 2</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/71d7eb4f3083424433" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-5 sp">
                                            <td class="sn-5">35</td>
                                            <td>Second Term: 2017/2018</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/79163ce5231a0ca673" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-5 sp">
                                            <td class="sn-5">36</td>
                                            <td>Second Term: 2017/2018</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/b3037ee7243a00cbec" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-5 sp">
                                            <td class="sn-5">37</td>
                                            <td>Second Term: 2017/2018</td>
                                            <td>SS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/b14f971f25ab68f180" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-5 sp">
                                            <td class="sn-5">38</td>
                                            <td>Second Term: 2017/2018</td>
                                            <td>SS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/ba01745926188de5bb" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-4 sp">
                                            <td class="sn-4">39</td>
                                            <td>First Term: 2017/2018</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/9b5bf5bd213fca64f9" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-4 sp">
                                            <td class="sn-4">40</td>
                                            <td>First Term: 2017/2018</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/119e418e170a87f43e" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-4 sp">
                                            <td class="sn-4">41</td>
                                            <td>First Term: 2017/2018</td>
                                            <td>JSS 3</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/76de166a189d99d497" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-4 sp">
                                            <td class="sn-4">42</td>
                                            <td>First Term: 2017/2018</td>
                                            <td>SS 1</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/3ee3515122d6fba07c" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-4 sp">
                                            <td class="sn-4">43</td>
                                            <td>First Term: 2017/2018</td>
                                            <td>SS 2</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/4e8dfe4719030bf09d" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-4 sp">
                                            <td class="sn-4">44</td>
                                            <td>First Term: 2017/2018</td>
                                            <td>SS 3</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/0ca67dd220be93aff9" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-3 sp">
                                            <td class="sn-3">45</td>
                                            <td>Third Term: 2016/2017</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/2aa6d15e136eb91e4b" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-3 sp">
                                            <td class="sn-3">46</td>
                                            <td>Third Term: 2016/2017</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/3e954fe014f1615db1" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-3 sp">
                                            <td class="sn-3">47</td>
                                            <td>Third Term: 2016/2017</td>
                                            <td>SS 1</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/086b1bdb151cd06869" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-3 sp">
                                            <td class="sn-3">48</td>
                                            <td>Third Term: 2016/2017</td>
                                            <td>SS 2</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">15</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/83f48c03166577d77d" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-2 sp">
                                            <td class="sn-2">49</td>
                                            <td>Second Term: 2016/2017</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/1c378c797c70e8ed3" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-2 sp">
                                            <td class="sn-2">50</td>
                                            <td>Second Term: 2016/2017</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/fa8391348e223a0bc" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-2 sp">
                                            <td class="sn-2">51</td>
                                            <td>Second Term: 2016/2017</td>
                                            <td>JSS 3</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/5469f1f597a07e2f4" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-2 sp">
                                            <td class="sn-2">52</td>
                                            <td>Second Term: 2016/2017</td>
                                            <td>SS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/bdd59901101d5278cc" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-2 sp">
                                            <td class="sn-2">53</td>
                                            <td>Second Term: 2016/2017</td>
                                            <td>SS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/96c94ebc11c9caf531" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-2 sp">
                                            <td class="sn-2">54</td>
                                            <td>Second Term: 2016/2017</td>
                                            <td>SS 3</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/eda88f0d12857586e9" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-1 sp">
                                            <td class="sn-1">55</td>
                                            <td>First Term: 2016/2017</td>
                                            <td>JSS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/fc03263f150840032" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-1 sp">
                                            <td class="sn-1">56</td>
                                            <td>First Term: 2016/2017</td>
                                            <td>JSS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/ff26a7ae2f679e653" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-1 sp">
                                            <td class="sn-1">57</td>
                                            <td>First Term: 2016/2017</td>
                                            <td>JSS 3</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/641f8fd039a311061" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-1 sp">
                                            <td class="sn-1">58</td>
                                            <td>First Term: 2016/2017</td>
                                            <td>SS 1</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/4add9352439232819" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-1 sp">
                                            <td class="sn-1">59</td>
                                            <td>First Term: 2016/2017</td>
                                            <td>SS 2</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/7396ccc65d77dd460" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="session-1 sp">
                                            <td class="sn-1">60</td>
                                            <td>First Term: 2016/2017</td>
                                            <td>SS 3</td>
                                            <td class="text-center">30</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">-</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">100</td>
                                            <td>
                                                <a href="school-config/session_param-edit/46ef26e76a1851b4a" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this setting" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="newParam" tabindex="1" role="dialog" aria-labelledby="myModal" style="display: none">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModal">Set New Session Parameter</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="school-config/set-session-param" id="session-param" method="post" accept-charset="utf-8">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="session_name" class="control-label">For:</label>
                                                    <input type="text" class="form-control" name="session_name" id="session_name" disabled>
                                                    <input type="hidden" name="session_id" value="" id="session_id">
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label for="class_id" class="control-label">Class Name:</label>
                                                        <select class="custom-select form-control" id="class_id" name="class_id" style="width: 100%" required>
                                                        <?php $class->get_class_select()?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="ca1" class="control-label">CA1 (%):</label>
                                                        <input type="number" class="form-control" name="ca1" id="ca1" min="0" max="100" placeholder="e.g. 15">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="ca2" class="control-label">CA2 (%):</label>
                                                        <input type="number" class="form-control" name="ca2" id="ca2" min="0" max="100" placeholder="e.g. 15">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="ca3" class="control-label">CA3 (%):</label>
                                                        <input type="number" class="form-control" name="ca3" id="ca3" min="0" max="100" placeholder="e.g. 15">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="ca4" class="control-label">CA4 (%)</label>
                                                        <input type="number" class="form-control" name="ca4" id="ca4" min="0" max="100" placeholder="e.g. 15">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="exam" class="control-label">Exam (%):</label>
                                                        <input type="number" class="form-control" name="exam" id="exam" min="0" max="100" placeholder="e.g. 70" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="weight" class="control-label">Term Weight
                                                            (%):</label>
                                                        <input type="number" class="form-control" name="weight" id="weight" min="0" max="100" placeholder="e.g. 100" required>
                                                        <small class="text-success">(Term weight to be used on
                                                            cumulative result)</small>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning btn-rounded waves-effect waves-light m-t-10" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script>
                    // ==== THIS PAGE FUNCTION ============
                    function reorder_table() {
                        var session_id = $('#__session_id').val();
                        var session_name = $('#__session_id option:selected').text();
                        $('.sp').hide();
                        $('#msg').remove();
                        if ($('.session-' + session_id).length > 0) {
                            $('.session-' + session_id).show('slow');
                        } else {
                            $("tbody").append('<tr id="msg"><td colspan="10"><i>Looks like no session parameters have been set for ' + session_name + ' yet. Click on "Set new session Parameter" to get started.</i></td></tr>');
                        }
                        $('.sn-' + session_id).each(function(i) {
                            $(this).text(i + 1);
                        });
                        $('#session_id').val(session_id);
                        $('#session_name').val(session_name);
                    }
                    // ====================================

                    //==== Run immediately page loads ========
                    reorder_table();
                    //========================================

                    //====== Run when user changes the session in <select></select> ======
                    $('#__session_id').change(function() {
                        reorder_table();
                    });
                    //========================================


                    //====== Run when modal form is submitted ========
                    $('#session-param').submit(function(e) {
                        e.preventDefault();
                        var xhr = submit_form2('#session-param');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                $('#resp-div').load(site_url + 'school-config/session-parameters #resp-table', function() {
                                    reorder_table();
                                });
                            }
                        });
                    });
                    //================================================
                </script>
            </div><!-- ============================================================== -->
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