<!DOCTYPE html>
<html lang="en">
<?php include('../layout/head.php')?>

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
    <div style="width: 100%; height:100%; background-color: white; position: fixed; top:0; left:0; z-index: 1000; opacity:0.3; display: none;"
        id="DivOverlay">
    </div>
    <!-----===================================----->

    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
    <?php include('../layout/topbar.php')?>
        <?php include('../layout/sidebar.php')?>
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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Behavioural Traits</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Configuration</a></li>
                            <li class="breadcrumb-item active">Behavioural traits</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body">
                            <p>These Behavioural traits will show on every student's result. They will also be available
                                when placing students result comment. You can Name them as you please</p>
                            <form action="school-config/behavioural-trait-edit-process/" id="b-trait" method="post"
                                accept-charset="utf-8">
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[A]" id="category"
                                                value="Neatness" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[B]" id="category"
                                                value="Obedience" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[C]" id="category"
                                                value="Reliability" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[D]" id="category"
                                                value="Initiative" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[E]" id="category"
                                                value="Sense of Reponsibility" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[F]" id="category"
                                                value="Punctuality" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[G]" id="category"
                                                value="Relationship with Students" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[H]" id="category"
                                                value="Attentiveness" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[I]" id="category"
                                                value="Self Control" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="bt[J]" id="category"
                                                value="Spirit of Co-operation" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a href="admin"
                                        class="btn btn-warning btn-rounded waves-effect waves-light m-t-10">Close</a>
                                    <button type="submit"
                                        class="btn btn-primary btn-rounded waves-effect waves-light m-t-10">Save changes
                                    </button>
                                </div>
                                <p class="processor pull-right"></p>
                            </form> <small class="text-success pull-right"><i></i></small>
                            <small class="text-success"><i></i></small>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $('#b-trait').submit(function (e) {
                    e.preventDefault();
                    submit_form('#b-trait');
                });
            </script><!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 School Information Management System (MySkool Portal) by <a href="https://krystaldigitalng.com"
                    target="_blank">KRYSTAL DIGITAL SOLUTIONS</a>
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
    <?php include('../layout/script.php')?>
</body>

</html>