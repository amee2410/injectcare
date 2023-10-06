<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/waves/js/waves.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/chart/float/jquery.flot.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/chart/float/jquery.flot.categories.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/chart/float/curvedLines.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/chart/float/jquery.flot.tooltip.min.js') }}"></script>
<script src="{{ asset('Backend/files/bower_components/chartist/js/chartist.js') }}"></script>
@yield('js_page')
<script src="{{ asset('Backend/files/assets/pages/widget/amchart/amcharts.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/widget/amchart/serial.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/widget/amchart/light.js') }}"></script>
<script src="{{ asset('Backend/files/assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('Backend/files/assets/js/vertical/vertical-layout.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/assets/js/script.min.js') }}"></script>



@if ($message = Session::get('success'))
<script>
    swal("Good job!", "{{$message}}", "success")
</script>
@endif
@if($message = Session::get('error'))
 <script>
    swal("Error", "{{$message}}", "warning");
</script>     
@endif