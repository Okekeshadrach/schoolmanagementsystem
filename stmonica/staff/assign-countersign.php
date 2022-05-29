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
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Assign Staff as Countersigning officer</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li>
                            <li class="breadcrumb-item active">Assign to class</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                     <!-- Column -->
                     <?php include('../layout/profile_sidebar.php') ?>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">

                            <?php include('../layout/profile_nav.php') ?>
                                <p>You want to make Mr Obinozie Nnamdi Francis a Countersigning officer?</p>

                                <form action="staff/assign-countersign-process/5047f2e72c815caa6" class="form-horizontal" id="staff-assign" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                                    <div class="form-group row">
                                        <label for="class_arm_id" class="col-sm-3 text-right control-label col-form-label">Select Class
                                            Arm*</label>
                                        <div class="col-sm-9">
                                            <select class="form-control select2 select2-multiple" id="class_arm_id" name="class_arm_id[]" style="width: 100%" multiple required>
                                                <option value=""></option>
                                                <option value="49fba1061701524b1">JSS 1A</option>
                                                <option value="837091d22fa3a33c1">JSS 1B</option>
                                                <option value="e9f29fd8337be7739">JSS 1C</option>
                                                <option value="9c589114422072fc5">JSS 1D</option>
                                                <option value="c4a019965ae6b0af9">JSS 1E</option>
                                                <option value="3140925567faf67c6">JSS 1G</option>
                                                <option value="f642fa1f71f7fe268">JSS 1H</option>
                                                <option value="4566b41a8c992e11c">JSS 1J</option>
                                                <option value="d9d9065194ab36b2d">JSS 1K</option>
                                                <option value="953b88b910a12f0430">JSS 2A</option>
                                                <option value="a6efa687110b601c11">JSS 2B</option>
                                                <option value="b473f153123d86e2da">JSS 2C</option>
                                                <option value="621dc32313a5b9e06c">JSS 2D</option>
                                                <option value="e7b7819a14453749d1">JSS 2E</option>
                                                <option value="d0205481159312cc5e">JSS 2G</option>
                                                <option value="95cc669e16492bc434">JSS 2H</option>
                                                <option value="0f55770817976b2210">JSS 2J</option>
                                                <option value="f327ae4d187611723c">JSS 2K</option>
                                                <option value="e1337663460777cc60">JSS 3A</option>
                                                <option value="6fb3000b476e2600e4">JSS 3B</option>
                                                <option value="040aed0e4888ced591">JSS 3C</option>
                                                <option value="a0b95e69494f7ca358">JSS 3D</option>
                                                <option value="6b00b0675002b7fcc6">JSS 3E</option>
                                                <option value="099426c1515cf7077f">JSS 3G</option>
                                                <option value="b03fd5be52be6dd765">JSS 3H</option>
                                                <option value="5edd7a0c53debd1a97">JSS 3J</option>
                                                <option value="fec90dc9547936be12">JSS 3K</option>
                                                <option value="7fe687d619a1a609f1">SS 1A</option>
                                                <option value="1a30ee1620036fbfda">SS 1B</option>
                                                <option value="4b56772c55c0850c51">SS 1BECE</option>
                                                <option value="045536062130173934">SS 1C</option>
                                                <option value="800c3c3322a5297c30">SS 1D</option>
                                                <option value="df34faed23308da2e8">SS 1E</option>
                                                <option value="f8da58b62424c007b5">SS 1G</option>
                                                <option value="7adea9e02592f52795">SS 1H</option>
                                                <option value="b2c3281a268fea54f8">SS 1J</option>
                                                <option value="398d0bee27aa869307">SS 1K</option>
                                                <option value="595ace8b28c038e9a4">SS 2A</option>
                                                <option value="55a763bf29027f9997">SS 2B</option>
                                                <option value="b665d38a30faf945ab">SS 2C</option>
                                                <option value="e9135dd03130a20dba">SS 2D</option>
                                                <option value="743662613242146b5e">SS 2E</option>
                                                <option value="c1d512133367c9396f">SS 2G</option>
                                                <option value="e781e30234d8a6ad06">SS 2H</option>
                                                <option value="230d3f2d35dedf3cda">SS 2J</option>
                                                <option value="dd76d4653695f87556">SS 2K</option>
                                                <option value="c721156a3722f87e31">SS 3A</option>
                                                <option value="c4849674383e92536a">SS 3B</option>
                                                <option value="d439fffd3939965ab3">SS 3C</option>
                                                <option value="a562ba5740e86e0424">SS 3D</option>
                                                <option value="ba42e8d741a084a63c">SS 3E</option>
                                                <option value="1dd8e503424ac462d6">SS 3G</option>
                                                <option value="02bccf5c435b3e9e9f">SS 3H</option>
                                                <option value="836a0f7244239ce949">SS 3J</option>
                                                <option value="0c3820f94553e91b27">SS 3K</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-b-0">
                                        <div class="offset-sm-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Assign</button>
                                            <span class="processor"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>

            <script>
                $(function() {
                    $('#staff-assign').submit(function(e) {
                        e.preventDefault();
                        var xhr = submit_form('#staff-assign');
                        xhr.done(function(result) {
                            if (result.type === 'success') {
                                //Automatically update page content. User doesn't need to refresh
                                $('#staff-profile-div').load(site_url + 'staff/staff-profile/5047f2e72c815caa6 #staff-profile-side');

                                $('#class_arm_id option:selected').remove();
                            }
                        });
                    });
                })
            </script>
            <!-- ========================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
               &copy; <?php echo date('Y'); ?> School Database Management System (Edu-Portal) Powered By
                <a href="https://binozydigital.com" target="_blank">BiNoZy DiGiTaL KoNcEpT</a>
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
    <!-- All Jquery -->
    <!-- ============================================================== -->
     <?php include('../layout/script.php') ?>
    <!-- ============================================================== -->
</body>

</html>