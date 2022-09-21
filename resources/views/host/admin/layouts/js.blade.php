<script src="{{asset('host/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('host/js/wow.js')}}"></script>
<script src="{{asset('host/slick/slick.js')}}"></script>
<script src="{{asset('host/slick/slick.min.js')}}"></script>
<script src="{{asset('host/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('host/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('host/js/bootstrap.js')}}"></script>
<script src="{{asset('host/js/custom.js')}}"></script>

<!-- Datatable cdn JS-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.js"></script>

<!--yajra table-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>-->
    <!--<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>-->


<!-- Toaster JS start-->
<script src="{{asset('build/toastr.min.js')}}"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-full-width",
        "preventDuplicates": true,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
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
