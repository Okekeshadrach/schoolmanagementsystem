<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- slimscrollbar scrollbar JavaScript -->
<script src="../assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="../assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../assets/js/sidebarmenu.js"></script>

<!--stickey kit -->
<script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>

<!--Custom JavaScript -->
<script src="../assets/js/custom.min.js"></script>

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->


<script src="../assets/js/bootstrap-notify.js"></script>

<script src="../assets/plugins/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
<script src="../assets/plugins/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>

<!-- jQuery peity -->
<script src="../assets/plugins/tablesaw-master/dist/tablesaw.js"></script>
<script src="../assets/plugins/tablesaw-master/dist/tablesaw-init.js"></script>
<script src="../assets/plugins/wizard/jquery.steps.min.js"></script>
<script src="../assets/plugins/moment/moment.js"></script>
<script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<script>
    $('ul.collapse').each(function(i) {
        if ($(this).children().length < 1) {
            $(this).parent().remove();
        }
    });


    $(".select2").select2();


    $('.ajax-link').contextmenu(function() {
        return false;
    });

    function load_notification() {
        $('#n-center').load(site_url + 'other/notification ul', function() {
            if ($('.message-center').length > 0) {
                $('.notify').html('<span class="heartbit"></span><span class="point"></span>');
            } else {
                $('.notify').html('');
            }
            //setTimeout(load_notification, 120000);
        });
    }
    load_notification();
</script>
<!-- ============================================================== -->