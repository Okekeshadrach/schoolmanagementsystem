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
                .class-grades {
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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">School Grade Configuration</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Configuration</a></li>
                            <li class="breadcrumb-item active">Grade Config</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="__class_id">Showing Grades config for</label>
                                    <select class="form-control select2" id="__class_id" style="width: 100%" required>
                                        <option value="1">JSS 1</option>
                                        <option value="2">JSS 2</option>
                                        <option value="3">JSS 3</option>
                                        <option value="4">SS 1</option>
                                        <option value="5">SS 2</option>
                                        <option value="6">SS 3</option>
                                        <option value="7">YEAR 1</option>
                                        <option value="8">YEAR 2</option>
                                        <option value="9">YEAR 3</option>

                                    </select>
                                </div>
                                <div class="offset-md-5 col-md-3">
                                    <a href="#setGradeModal" class="btn btn-primary btn-rounded waves-effect waves-light m-b-5" data-toggle="modal" data-target="#setGradeModal">Set a new Configuration</a>
                                </div>
                            </div>
                            <p>Here, you can set what grade should be awarded for a score that falls into a certain
                                Range. See existing settings below</p>
                            <div class="table-responsive" id="resp-div">
                                <table class="table table-striped table-bordered color-table success-table stylish-table" id="resp-table" width="100%">
                                    <thead>
                                        <tr role="row">
                                            <th>#</th>
                                            <th>Class</th>
                                            <th>Score From</th>
                                            <th>Score To</th>
                                            <th>Grade</th>
                                            <th>Remark</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="class-6 class-grades">
                                            <td class="sn-6">1</td>
                                            <td>SS 3</td>
                                            <td>75</td>
                                            <td>100</td>
                                            <td>A1</td>
                                            <td>EXCELLENT</td>
                                            <td>
                                                <a href="school-config/gc-edit/4cf6fe3b19d1c2e0ed" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/ed4a4d1c1940cef840" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-6 class-grades">
                                            <td class="sn-6">2</td>
                                            <td>SS 3</td>
                                            <td>70</td>
                                            <td>74</td>
                                            <td>B2</td>
                                            <td>VERY GOOD</td>
                                            <td>
                                                <a href="school-config/gc-edit/ed2acc052004786eb1" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/b3eb755720acddc3ef" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-6 class-grades">
                                            <td class="sn-6">3</td>
                                            <td>SS 3</td>
                                            <td>65</td>
                                            <td>69</td>
                                            <td>B3</td>
                                            <td>GOOD</td>
                                            <td>
                                                <a href="school-config/gc-edit/d734ddf521a3be463c" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/498ba91b21cf42729c" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-6 class-grades">
                                            <td class="sn-6">4</td>
                                            <td>SS 3</td>
                                            <td>60</td>
                                            <td>64</td>
                                            <td>C4</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/042b83622283a39be7" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/fc05b23a229eb53892" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-6 class-grades">
                                            <td class="sn-6">5</td>
                                            <td>SS 3</td>
                                            <td>54</td>
                                            <td>59</td>
                                            <td>C5</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/75947496233a8f6732" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/691b09fc235e71f203" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-6 class-grades">
                                            <td class="sn-6">6</td>
                                            <td>SS 3</td>
                                            <td>50</td>
                                            <td>53</td>
                                            <td>C6</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/7a4f9458240d441de7" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/2e756cbc2431b94d6d" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-6 class-grades">
                                            <td class="sn-6">7</td>
                                            <td>SS 3</td>
                                            <td>45</td>
                                            <td>49</td>
                                            <td>D7</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/gc-edit/1a6c09ac25f0bbdb78" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/859da89725b224c866" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-6 class-grades">
                                            <td class="sn-6">8</td>
                                            <td>SS 3</td>
                                            <td>40</td>
                                            <td>44</td>
                                            <td>E8</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/gc-edit/5925122726afca442d" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/880a518526b0dc8a43" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-6 class-grades">
                                            <td class="sn-6">9</td>
                                            <td>SS 3</td>
                                            <td>0</td>
                                            <td>39</td>
                                            <td>F9</td>
                                            <td>FAIL</td>
                                            <td>
                                                <a href="school-config/gc-edit/602f228327c695a838" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/c055ba6f2763e256d7" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-4 class-grades">
                                            <td class="sn-4">10</td>
                                            <td>SS 1</td>
                                            <td>75</td>
                                            <td>100</td>
                                            <td>A1</td>
                                            <td>EXCELLENT</td>
                                            <td>
                                                <a href="school-config/gc-edit/70c2236d1320e68db" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/3d203aba11f3b9657" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-4 class-grades">
                                            <td class="sn-4">11</td>
                                            <td>SS 1</td>
                                            <td>70</td>
                                            <td>74</td>
                                            <td>B2</td>
                                            <td>VERY GOOD</td>
                                            <td>
                                                <a href="school-config/gc-edit/52b465ad2d6d07da9" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/48676844275dbbe70" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-4 class-grades">
                                            <td class="sn-4">12</td>
                                            <td>SS 1</td>
                                            <td>65</td>
                                            <td>69</td>
                                            <td>B3</td>
                                            <td>GOOD</td>
                                            <td>
                                                <a href="school-config/gc-edit/3ad00bd73042b54b6" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/9641f9a9328eae397" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-4 class-grades">
                                            <td class="sn-4">13</td>
                                            <td>SS 1</td>
                                            <td>60</td>
                                            <td>64</td>
                                            <td>C4</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/5376836c411466a83" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/a85070394b917cbfb" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-4 class-grades">
                                            <td class="sn-4">14</td>
                                            <td>SS 1</td>
                                            <td>54</td>
                                            <td>59</td>
                                            <td>C5</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/844bd68c5426d2afa" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/e240ee12593a959f1" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-4 class-grades">
                                            <td class="sn-4">15</td>
                                            <td>SS 1</td>
                                            <td>50</td>
                                            <td>53</td>
                                            <td>C6</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/1b889d77651781bb6" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/b69964d26e39d6538" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-4 class-grades">
                                            <td class="sn-4">16</td>
                                            <td>SS 1</td>
                                            <td>45</td>
                                            <td>49</td>
                                            <td>D7</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/gc-edit/34906a6a7d4a65740" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/ea12188e7dfeb0a21" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-4 class-grades">
                                            <td class="sn-4">17</td>
                                            <td>SS 1</td>
                                            <td>40</td>
                                            <td>44</td>
                                            <td>E8</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/gc-edit/75d8225e8f8226cc0" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/b794dd478dc6918bc" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-4 class-grades">
                                            <td class="sn-4">18</td>
                                            <td>SS 1</td>
                                            <td>0</td>
                                            <td>39</td>
                                            <td>F9</td>
                                            <td>FAIL</td>
                                            <td>
                                                <a href="school-config/gc-edit/e06b873e95f8202ef" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/95ec542f9bbfd4d3b" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-5 class-grades">
                                            <td class="sn-5">19</td>
                                            <td>SS 2</td>
                                            <td>75</td>
                                            <td>100</td>
                                            <td>A1</td>
                                            <td>EXCELLENT</td>
                                            <td>
                                                <a href="school-config/gc-edit/65942bb810deba58a0" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/f2decd5910572b7dbd" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-5 class-grades">
                                            <td class="sn-5">20</td>
                                            <td>SS 2</td>
                                            <td>70</td>
                                            <td>74</td>
                                            <td>B2</td>
                                            <td>VERY GOOD</td>
                                            <td>
                                                <a href="school-config/gc-edit/5d8901f511bfd81d8d" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/118381b1113be701b3" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-5 class-grades">
                                            <td class="sn-5">21</td>
                                            <td>SS 2</td>
                                            <td>65</td>
                                            <td>69</td>
                                            <td>B3</td>
                                            <td>GOOD</td>
                                            <td>
                                                <a href="school-config/gc-edit/a59e501d12cea6881a" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/4272ff951266777cfa" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-5 class-grades">
                                            <td class="sn-5">22</td>
                                            <td>SS 2</td>
                                            <td>60</td>
                                            <td>64</td>
                                            <td>C4</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/e386b1ae1379587214" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/92f7164c1377b73615" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-5 class-grades">
                                            <td class="sn-5">23</td>
                                            <td>SS 2</td>
                                            <td>54</td>
                                            <td>59</td>
                                            <td>C5</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/140056af14069dd8ec" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/72ef5c5614b8f5fb73" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-5 class-grades">
                                            <td class="sn-5">24</td>
                                            <td>SS 2</td>
                                            <td>50</td>
                                            <td>53</td>
                                            <td>C6</td>
                                            <td>CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/4548900615356e29f3" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/f761b6a615697a3e7e" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-5 class-grades">
                                            <td class="sn-5">25</td>
                                            <td>SS 2</td>
                                            <td>45</td>
                                            <td>49</td>
                                            <td>D7</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/gc-edit/33f05d4016e2264e37" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/a63da4b516d4740560" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-5 class-grades">
                                            <td class="sn-5">26</td>
                                            <td>SS 2</td>
                                            <td>40</td>
                                            <td>44</td>
                                            <td>E8</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/gc-edit/10c381d217e7f94a25" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/198a7e73173fbe6e0a" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-5 class-grades">
                                            <td class="sn-5">27</td>
                                            <td>SS 2</td>
                                            <td>0</td>
                                            <td>39</td>
                                            <td>F9</td>
                                            <td>FAIL</td>
                                            <td>
                                                <a href="school-config/gc-edit/23a804ae187be61722" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/ac28494318a5adacfe" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-3 class-grades">
                                            <td class="sn-3">28</td>
                                            <td>JSS 3</td>
                                            <td>70</td>
                                            <td>100</td>
                                            <td>A</td>
                                            <td>DISTINCTION</td>
                                            <td>
                                                <a href="school-config/gc-edit/18a7436f36ee221dcd" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/48e6d4fc36f0f8bfe7" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-3 class-grades">
                                            <td class="sn-3">29</td>
                                            <td>JSS 3</td>
                                            <td>50</td>
                                            <td>69</td>
                                            <td>C</td>
                                            <td>LOWER CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/64cf1b8137a349333a" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/ec7f4f5837efda20c8" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-3 class-grades">
                                            <td class="sn-3">30</td>
                                            <td>JSS 3</td>
                                            <td>40</td>
                                            <td>49</td>
                                            <td>P</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/gc-edit/ece294d638b02bd531" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/f9c75d4938e67e4ee2" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-3 class-grades">
                                            <td class="sn-3">31</td>
                                            <td>JSS 3</td>
                                            <td>0</td>
                                            <td>39</td>
                                            <td>F</td>
                                            <td>FAIL</td>
                                            <td>
                                                <a href="school-config/gc-edit/fdd729fb39dbc17e76" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/c279be4239998f0e0e" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-2 class-grades">
                                            <td class="sn-2">32</td>
                                            <td>JSS 2</td>
                                            <td>70</td>
                                            <td>100</td>
                                            <td>A</td>
                                            <td>DISTINCTION</td>
                                            <td>
                                                <a href="school-config/gc-edit/f7813eef32baf6ec27" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/8bc2de8d32e53de2be" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-2 class-grades">
                                            <td class="sn-2">33</td>
                                            <td>JSS 2</td>
                                            <td>50</td>
                                            <td>69</td>
                                            <td>C</td>
                                            <td>LOWER CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/24e52458335b8cfec4" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/4277f078334407c7f7" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-2 class-grades">
                                            <td class="sn-2">34</td>
                                            <td>JSS 2</td>
                                            <td>40</td>
                                            <td>49</td>
                                            <td>P</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/gc-edit/ea1877a634e5f81731" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/f1336a6f34255d235b" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-2 class-grades">
                                            <td class="sn-2">35</td>
                                            <td>JSS 2</td>
                                            <td>0</td>
                                            <td>39</td>
                                            <td>F</td>
                                            <td>FAIL</td>
                                            <td>
                                                <a href="school-config/gc-edit/4597722a356c1ba27a" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/5c65955335db2bdca2" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-1 class-grades">
                                            <td class="sn-1">36</td>
                                            <td>JSS 1</td>
                                            <td>70</td>
                                            <td>100</td>
                                            <td>A</td>
                                            <td>DISTINCTION</td>
                                            <td>
                                                <a href="school-config/gc-edit/69c71fc728aea65283" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/4ec6e74b2824895a1b" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-1 class-grades">
                                            <td class="sn-1">37</td>
                                            <td>JSS 1</td>
                                            <td>50</td>
                                            <td>69</td>
                                            <td>C</td>
                                            <td>LOWER CREDIT</td>
                                            <td>
                                                <a href="school-config/gc-edit/85ea0a6e298f7337f2" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/a72d9d50295aaf0197" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-1 class-grades">
                                            <td class="sn-1">38</td>
                                            <td>JSS 1</td>
                                            <td>40</td>
                                            <td>49</td>
                                            <td>P</td>
                                            <td>PASS</td>
                                            <td>
                                                <a href="school-config/gc-edit/d5695b4a30d3cbf780" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/69ae54c830fa8c822e" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                        <tr class="class-1 class-grades">
                                            <td class="sn-1">39</td>
                                            <td>JSS 1</td>
                                            <td>0</td>
                                            <td>39</td>
                                            <td>F</td>
                                            <td>FAIL</td>
                                            <td>
                                                <a href="school-config/gc-edit/ca7ddf783150fc0315" class="btn btn-sm btn-warning btn-circle m-r-10 m-b-5" title="Edit this config" data-toggle="tooltip"><i class="fa fa-edit"></i> </a>
                                                <a href="school-config/gc-delete/7db86979318a83333a" class="btn btn-sm btn-danger btn-circle ajax-link m-b-5 gc-del" title="Delete this config" data-toggle="tooltip"><i class="fa fa-times"></i> </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="setGradeModal" tabindex="1" role="dialog" aria-labelledby="myModal" style="display: none">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModal">Set New Grade Config</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <form action="school-config/set-grade-config" id="grade-config" method="post" accept-charset="utf-8">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="class_name" class="control-label">For:</label>
                                                    <input type="text" class="form-control" name="class_name" id="class_name" readonly>
                                                    <input type="hidden" name="class_id" value="" id="class_id">
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-4">
                                                        <label for="grade_id" class="control-label">Grade Name:</label>
                                                        <select class="custom-select form-control" id="grade_id" name="grade_id" style="width: 100%" required>
                                                            <option value="1">A</option>
                                                            <option value="7">A1</option>
                                                            <option value="2">B</option>
                                                            <option value="8">B2</option>
                                                            <option value="9">B3</option>
                                                            <option value="3">C</option>
                                                            <option value="10">C4</option>
                                                            <option value="11">C5</option>
                                                            <option value="12">C6</option>
                                                            <option value="13">D7</option>
                                                            <option value="14">E8</option>
                                                            <option value="6">F</option>
                                                            <option value="15">F9</option>
                                                            <option value="5">P</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="score_from" class="control-label">Score
                                                            From:</label>
                                                        <input type="number" class="form-control" name="score_from" id="score_from" min="0" max="100" required>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="score_to" class="control-label">Score To:</label>
                                                        <input type="number" class="form-control" name="score_to" id="score_to" min="0" max="100" required>
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
                        var a = $('#__class_id').val();
                        $('.class-grades').hide();
                        $('.class-' + a).show('slow');
                        $('.sn-' + a).each(function(i) {
                            $(this).text(i + 1);
                        });
                        $('#class_id').val(a);
                        $('#class_name').val($('#__class_id option:selected').text());
                    }
                    // ====================================

                    //==== Run immediately page loads ========
                    reorder_table();
                    //========================================

                    //====== Run when user changes the class in <select></select> ======
                    $('#__class_id').change(function() {
                        reorder_table();
                    });
                    //========================================


                    //===== Run when user attempts to delete a grade config ==============
                    $(document).on('click', '.gc-del', function(e) {
                        e.preventDefault();
                        var a = $(this);
                        var url = a.attr('href');
                        swal({
                            title: "Are you sure?",
                            text: "Your action will delete this Grade Configuration. Do you want to continue?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#13aa2c",
                            confirmButtonText: "Yes, proceed!"
                        }, function() {
                            var xhr = get_request(url);
                            xhr.done(function(result) {
                                if (result.type === 'success') {
                                    a.fadeOut(function() {
                                        a.parent().parent().remove();
                                        reorder_table();
                                    })
                                }
                            });
                        });
                    });
                    //====================================================================

                    //====== Run when modal form is submitted ========
                    $('#grade-config').submit(function(e) {
                        e.preventDefault();
                        var xhr = submit_form2('#grade-config');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                $('#resp-div').load(site_url + 'school-config/grades-config #resp-table', function() {
                                    reorder_table();
                                });
                            }
                        });
                    });
                    //================================================
                </script><!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                   &copy; <?php echo date('Y'); ?> School Database Management System (Edu-Portal) Powered By <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL KoNcEpT</a>
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
