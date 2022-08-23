<script src="{{asset('web/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('web/js/wow.js')}}"></script>
<script src="{{asset('web/slick/slick.js')}}"></script>
<script src="{{asset('web/slick/slick.min.js')}}"></script>
<script src="{{asset('web/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('web/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('web/js/bootstrap.js')}}"></script>
<script src="{{asset('web/js/custom.js')}}"></script>

<!-- Toaster JS start-->
<script src="{{asset('build/toastr.min.js')}}"></script>
<script>

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-full-width",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "400",
        "hideDuration": "1000",
        "timeOut": "8000",
        "extendedTimeOut": "3500",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    $('#loaderIcon').hide();
    $(document).ready(function () {
        @if(Session::has('success'))
            toastr["success"](' {{ Session::get('success') }}');
        @endif
            @if(Session::has('added'))
            toastr["success"](' {{ Session::get('added') }}');
        @endif
            @if(Session::has('failed'))
            toastr["error"]('{{ Session::get('failed') }}');
        @endif
            @if(Session::has('out_of_stock'))
            toastr["error"]('{{ Session::get('out_of_stock') }}');
        @endif
            @if(Session::has('already_exist'))
            toastr["error"]('{{ Session::get('already_exist') }}');
        @endif
            @if(Session::has('checkFalse'))
            toastr["error"]('{{ Session::get('checkFalse') }}');
        @endif
            @if(Session::has('checkUserRole'))
            toastr["error"]('{{ Session::get('checkUserRole') }}');
        @endif
            @if(Session::has('error'))
            toastr["error"]('{{ Session::get('error') }}');
        @endif
    });

</script>
<!-- Toaster JS end-->


@stack('js')
