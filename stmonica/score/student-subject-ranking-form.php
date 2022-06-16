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
                            Student Subject Score Ranking - <?php echo $classarm_name ?></h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Score</a></li>
                            <li class="breadcrumb-item active">Student subject score ranking</li>
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
                                        <a href="../staff/staff-profile/8e726eac2e8cafb70">
                                            <img src="../../uploads/nobody_m.jpg" height="40" class="img-circle" />
                                            Teachers Name </a>

                                    </i>
                                </small>

                                <div class="clear"></div>


                                <?php include('../classes/class_nav.html') ?>
                                <p class="text-center">Here, you can pull out names of students ranked according to their performance in a particular subject in this academic session</p>

                                <form id="myform">
                                    <div class="row">
                                        <div class="offset-md-4 col-md-4">
                                            <div class="form-group">
                                                <label for="subj">Select Subject</label>
                                                <select name="subject_id" id="subj" class="custom-select form-control select2" style="width: 100%" required>
                                                    <option value="8124263d1928181d6">Skills Development Class (general)</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="score_type">Rank by</label>
                                                <select required name="score_type" class="selectpicker" data-style="form-control btn-secondary" id="score_type">
                                                    <option value="ca1">CA1 Score</option>
                                                    <option value="exam">Exam Score</option>
                                                    <option value="total" selected>Total Score</option>


                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input name="all_arm" type="radio" id="radio_1" class="with-gap radio-col-deep-purple" value="2" required checked />
                                                <label class="form-control-label" for="radio_1">Consider <?php echo $classarm_name ?> only</label>

                                                <input name="all_arm" type="radio" id="radio_2" class="with-gap radio-col-deep-purple" value="1" required />
                                                <label class="form-control-label" for="radio_2">Consider Entire JSS 1</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="order_by">Ordering</label>
                                                <select required name="order_by" class="selectpicker" data-style="form-control btn-secondary" id="order_by">
                                                    <option value="1">Best First</option>
                                                    <option value="2">Worst First</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="limit">Number of records to fetch</label>
                                                <input type="number" name="limit" class="form-control" id="limit" placeholder="All records" min="1">
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
                        var action, subj_id, score_type, all_arm, previous_sess_id_enc, order_by, limit;
                        previous_sess_id_enc = '6e8dc030b5e4b151';
                        subj_id = $('#subj').val();
                        score_type = $('#score_type').val();
                        all_arm = $('input[name=all_arm]:checked').val();
                        order_by = $('#order_by').val();
                        limit = $('#limit').val();

                        if (score_type === '_cumulative') {
                            action = site_url + 'score/student-subject-ranking-cumulative/' + previous_sess_id_enc + '/8f1fee3f1f8e69b0a/' + subj_id + '/' + all_arm + '/' + order_by + '/' + limit;
                        } else {
                            action = (score_type === 'cumulative') ?
                                site_url + 'score/student-subject-ranking-cumulative/284c360e13261962ea/8f1fee3f1f8e69b0a/' + subj_id + '/' + all_arm + '/' + order_by + '/' + limit :
                                site_url + 'score/student-subject-ranking/284c360e13261962ea/8f1fee3f1f8e69b0a/' + subj_id + '/' + score_type + '/' + all_arm + '/' + order_by + '/' + limit;
                        }

                        window.open(action, '_blank');
                    })
                </script><!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © 2022 School Management System (Edu-Portal) by <a href="https://binozydigital.com" target="_blank">KRYSTAL DIGITAL SOLUTIONS</a>
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