<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php') ?>
<?php include('../classes/get_class.php') ?>

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
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">
                            Broadsheet Preference - <?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Score</a></li>
                            <li class="breadcrumb-item active">Broadsheet preference</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <small class="pull-right">
                                    <i>
                                        Class Teacher :
                                        <a href="staff/staff-profile/99608d7822fb92ebc">
                                            <img src="uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>
                                <form id="myform">
                                    <div class="row">
                                        <div class="offset-md-4 col-md-4">
                                            <div class="form-group">
                                                <label for="score_type">What type of Broadsheet do you want?</label>
                                                <select required name="score_type" class="selectpicker" data-style="form-control btn-secondary" id="score_type">
                                                    <option value="ca1">CA1 Broadsheet</option>
                                                    <option value="exam">Exam Score Broadsheet</option>
                                                    <option value="total" selected>Total Score Broadsheet</option>



                                                    <option value="term-weight">Term Weight Broadsheet</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input name="class_type" type="radio" id="radio_1" class="with-gap radio-col-deep-purple" value="1" required checked />
                                                <label class="form-control-label" for="radio_1">For <?php echo $classarm_name ?> only</label>

                                                <input name="class_type" type="radio" id="radio_2" class="with-gap radio-col-deep-purple" value="2" required />
                                                <label class="form-control-label" for="radio_2">For Entire JSS 1</label>
                                            </div>

                                            <div class="col-sm-9">
                                                <button type="submit" class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">
                                                    Proceed
                                                </button>
                                            </div>
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
                        var action, score_type, class_type, second_term_sess_id_enc;
                        second_term_sess_id_enc = '28513e8c9e6e8870';
                        score_type = $('#score_type').val();
                        class_type = $('input[name=class_type]:checked').val();

                        if (score_type === '_cumulative') {
                            action = site_url + 'score/cumulative-broadsheet/' + second_term_sess_id_enc + '/170ac27a1b5177272/' + class_type;
                        } else if (score_type === 'term-weight') {
                            action = site_url + 'score/term-weight-broadsheet/d6fd49ad137f5edbe4/170ac27a1b5177272/' + class_type;
                        } else {
                            action = (score_type === 'cumulative') ? site_url + 'score/cumulative-broadsheet/d6fd49ad137f5edbe4/170ac27a1b5177272/' + class_type : site_url + 'score/broadsheet/d6fd49ad137f5edbe4/170ac27a1b5177272/' + score_type + '/' + class_type;
                        }

                        window.open(action, '_blank');
                    })
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
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <?php include("../layout/script.php") ?>
        <!-- ============================================================== -->
</body>

</html>