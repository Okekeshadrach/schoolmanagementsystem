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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Past Records</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Class</a></li>
                            <li class="breadcrumb-item active">Past records</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0"></h3>
                            <p class="text-muted m-b-30 font-13">Manage past records of a specific class in a particular
                                term/session</p>
                            <form id="myform">
                                <div class="row">
                                    <div class="form-group col-sm-4">
                                        <label for="session_id">Select Term/Session</label>
                                        <select class="custom-select form-control select2" id="session_id" name="session_id" style="width: 100%" required>
                                            <option value=""></option>

                                            <option value="ace51bd912bf28e2e7">Third Term: 2019/2020</option>
                                            <option value="324450bb1157f66dad">Second Term: 2019/2020</option>
                                            <option value="e185b4f010a84b7cba">First Term: 2019/2020</option>
                                            <option value="0f545b61985f49cde">Third Term: 2018/2019</option>
                                            <option value="8cf4eed983d0c4014">Second Term: 2018/2019</option>
                                            <option value="eb37c99c71704c2b5">First Term: 2018/2019</option>
                                            <option value="2eeb7ef36410e8f25">Third Term: 2017/2018</option>
                                            <option value="b635d9a5540a0aa5c">Second Term: 2017/2018</option>
                                            <option value="df49c3824b8277c95">First Term: 2017/2018</option>
                                            <option value="1f1c033e374bea3d0">Third Term: 2016/2017</option>
                                            <option value="046afe052cfddc0e2">Second Term: 2016/2017</option>
                                            <option value="c6afa8ec1834bf171">First Term: 2016/2017</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="class_arm_id">Select Class Arm</label>
                                        <select class="custom-select form-control select2" id="class_arm_id" name="class_arm_id" style="width: 100%" required>
                                            <option value=""></option>
                                            <option value="9e7b76d010f9e2caa">JSS 1A</option>
                                            <option value="aca849df23d38dd44">JSS 1B</option>
                                            <option value="8109189e39971a8ba">JSS 1C</option>
                                            <option value="6cfb8b7045e4d0331">JSS 1D</option>
                                            <option value="e0c923eb5c02a6ae1">JSS 1E</option>
                                            <option value="38d67c3e6050ba6fc">JSS 1G</option>
                                            <option value="e24837227d831511e">JSS 1H</option>
                                            <option value="bace1d1389f296f90">JSS 1J</option>
                                            <option value="307e4b599936ae0a5">JSS 1K</option>
                                            <option value="f90fdc9710db1e4185">JSS 2A</option>
                                            <option value="17f8cc2811bb8b0962">JSS 2B</option>
                                            <option value="c3acda9c12e8d213aa">JSS 2C</option>
                                            <option value="0840875a13af83a0a3">JSS 2D</option>
                                            <option value="d531310c1416dd011a">JSS 2E</option>
                                            <option value="1a28164e1550f09210">JSS 2G</option>
                                            <option value="d1fb77f4163799647b">JSS 2H</option>
                                            <option value="9f587bb8176ce002d0">JSS 2J</option>
                                            <option value="f77355971832b64626">JSS 2K</option>
                                            <option value="495eb52446c26672b5">JSS 3A</option>
                                            <option value="60c530d64746ebe2a5">JSS 3B</option>
                                            <option value="7e488f3748df8dc2e2">JSS 3C</option>
                                            <option value="e1a55e03492d511b74">JSS 3D</option>
                                            <option value="befef3a9503a817237">JSS 3E</option>
                                            <option value="beb1e935516654c498">JSS 3G</option>
                                            <option value="4f6930d25228d869c6">JSS 3H</option>
                                            <option value="38aaa53a53b18d2847">JSS 3J</option>
                                            <option value="001fe0f91943f1297a">SS 1A</option>
                                            <option value="559d065f20085adb89">SS 1B</option>
                                            <option value="eedde84021085bef10">SS 1C</option>
                                            <option value="c05b8d7c22c81e728d">SS 1D</option>
                                            <option value="6de4fcde235c445753">SS 1E</option>
                                            <option value="4a5cf191246a5ded0e">SS 1G</option>
                                            <option value="bdaa49ee252049e1d0">SS 1H</option>
                                            <option value="5089b7dc26c23e4c85">SS 1J</option>
                                            <option value="f3736b87278e463d6c">SS 1K</option>
                                            <option value="bb93c3d128393933c9">SS 2A</option>
                                            <option value="944fbd6c2918b7df58">SS 2B</option>
                                            <option value="40cb54903041899ac2">SS 2C</option>
                                            <option value="585a1d9031ee363450">SS 2D</option>
                                            <option value="ab819b1332b9183a9a">SS 2E</option>
                                            <option value="23255c9333f1564eb9">SS 2G</option>
                                            <option value="0d7d2ba4340c27cd29">SS 2H</option>
                                            <option value="351bc54435697853cc">SS 2J</option>
                                            <option value="52636348368ee4150b">SS 2K</option>
                                            <option value="ab7af54f37dce3fd2c">SS 3A</option>
                                            <option value="e2d5e6bf38907a30fa">SS 3B</option>
                                            <option value="daf6018f39b7a2bf9a">SS 3C</option>
                                            <option value="889a6c9340048100d5">SS 3D</option>
                                            <option value="a2214a284103fc1944">SS 3E</option>
                                            <option value="d0755f8d4268471e24">SS 3G</option>
                                            <option value="1dcde55843c1124ca1">SS 3H</option>
                                            <option value="49bb68b4448ddfdbf2">SS 3J</option>
                                            <option value="23a0aad445899d4591">SS 3K</option>
                                        </select>
                                    </div>

                                    <div class="offset-sm-3 col-sm-9">
                                        <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">
                                            Proceed
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#myform').submit(function(e) {
                    e.preventDefault();
                    var session_id = $('select[name=session_id]').val(),
                        class_arm_id = $('select[name=class_arm_id]').val();

                    window.open(
                        site_url + 'classes/manage-students/' + session_id + '/' + class_arm_id, '_blank'
                    );
                });
            </script><!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 School Information Management System (MySkool Portal) by <a href="https://krystaldigitalng.com" target="_blank">BiNoZy DiGiTaL koncept</a>
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
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php include('../layout/script.php') ?>
</body>

</html>