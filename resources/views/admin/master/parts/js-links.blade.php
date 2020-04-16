<div class="sidebar-overlay" data-reff=""></div>
<script src="{{('admin/assets')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{('admin/assets')}}/js/popper.min.js"></script>
<script src="{{('admin/assets')}}/js/bootstrap.min.js"></script>
<script src="{{('admin/assets')}}/js/jquery.slimscroll.js"></script>
<script src="{{('admin/assets')}}/js/Chart.bundle.js"></script>
<script src="{{('admin/assets')}}/js/chart.js"></script>
<script src="{{('admin/assets')}}/js/app.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
