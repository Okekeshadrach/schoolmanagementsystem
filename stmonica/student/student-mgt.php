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
                .option,
                .lga {
                    display: none;
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
                        <h3 class="text-themecolor m-b-0 m-t-0" id="page-title">Student List</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
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

                                <div class="card-body">

                                    <div id="student-list-table">
                                        <div class="table-responsive resp-tbl">
                                            <div id="stud_list">
                                                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper no-footer">
                                                    <div class="dataTables_length" id="DataTables_Table_1_length"><label>Show <select name="DataTables_Table_1_length" aria-controls="DataTables_Table_1" class="">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> entries</label></div>
                                                    <div id="DataTables_Table_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="DataTables_Table_1"></label></div>
                                                    <table class="table stylish-table table-striped table-bordered dataTable no-footer" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info" style="width: 100%;" width="100%">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 48px;" aria-sort="ascending" aria-label="S/N: activate to sort column descending">S/N</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 51px;" aria-label=": activate to sort column ascending"></th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 115px;" aria-label="Student Name: activate to sort column ascending">Student Name</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 63px;" aria-label="Class: activate to sort column ascending">Class</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 148px;" aria-label="Username: activate to sort column ascending">Username</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 79px;" aria-label="Gender: activate to sort column ascending">Gender</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 91px;" aria-label="House: activate to sort column ascending">House</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 64px;" aria-label="Pref: activate to sort column ascending">Pref</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 64px;" aria-label="Pref: activate to sort column ascending">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $class->get_student_list(); ?>

                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_info" id="DataTables_Table_1_info" role="status" aria-live="polite"></div>
                                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_1_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_1" data-dt-idx="0" tabindex="0" id="DataTables_Table_1_previous">Previous</a><span><a class="paginate_button current" aria-controls="DataTables_Table_1" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_1" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="DataTables_Table_1" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="DataTables_Table_1" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="DataTables_Table_1" data-dt-idx="5" tabindex="0">5</a><span class="ellipsis">…</span><a class="paginate_button " aria-controls="DataTables_Table_1" data-dt-idx="6" tabindex="0">50</a></span><a class="paginate_button next" aria-controls="DataTables_Table_1" data-dt-idx="7" tabindex="0" id="DataTables_Table_1_next">Next</a></div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- <form action="../student/student-list-print" target="_blank" method="post" accept-charset="utf-8">
                                        <textarea style="display: none" name="student_list_json" id="slj"></textarea>
                                        <input type="hidden" name="heading" id="hd" value="">
                                        <button type="submit" class="btn btn-primary btn-rounded" style="float: right;" id="print-pdf">Print pdf</button>
                                    </form> -->
                                </div>

                                <form action="student/student-list-print" target="_blank" method="post" accept-charset="utf-8">
                                    <textarea style="display: none" name="student_list_json" id="slj"></textarea>
                                    <input type="hidden" name="heading" id="hd" value="">
                                    <button type="submit" class="btn btn-primary btn-rounded" style="float: right; display: none" id="print-pdf">Print pdf</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {

                        $('#filter-by').change(function() {
                            var val = $(this).val();
                            if (val) {
                                $('.option').hide();
                                $('.' + val).show(500);
                            }
                        });

                        $('#state').change(function() {
                            var val = $(this).val();
                            if (val) {
                                $('.lga').hide();
                                $('#lga').val('all');
                                $('#lga option:selected').text('All');
                                $('.state_lga_' + val).show();
                            }
                        });

                        $('#age-from').change(function() {
                            var val = $(this).val();
                            $('#age-to').val('');
                            $('#age-to').attr('min', ++val);
                        });

                        $('#student-list').submit(function(e) {
                            e.preventDefault();
                            student_list();
                        });

                        $(document).on('click', '#print-pdf', function(e) {
                            var json_data = $('#json_data').val();
                            var heading = $('#head').val();
                            $('#slj').val(json_data);
                            $('#hd').val(heading);
                        });
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