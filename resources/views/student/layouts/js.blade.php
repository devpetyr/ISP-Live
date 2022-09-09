<script src="{{asset('admin/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('admin/js/wow.js')}}"></script>
<script src="{{asset('admin/slick/slick.js')}}"></script>
<script src="{{asset('admin/slick/slick.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('admin/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.js')}}"></script>
<script src="{{asset('admin/js/custom.js')}}"></script>

<!-- Toaster JS start-->
<script src="{{asset('build/toastr.min.js')}}"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
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

    <!-- Toaster JS end-->

    // ====================================== JS GET N POST REQUEST ======================================
    function AjaxRequest(url, data) {
        var res;
        $.ajax({
            url: url,
            data: data,
            async: false,
            error: function () {
                console.log("error");
            },
            dataType: "json",
            success: function (data) {
                res = data;
            },
            type: "POST",
        });
        return res;
    }

    function AjaxRequest_get(url, data) {
        var res;
        $.ajax({
            url: url,
            data: data,
            async: false,
            type: "GET",
            dataType: "json",
            success: function (data) {
                res = data;
            },
            error: function () {
                console.log("error");
            },
        });
        return res;
    }
    // ============================================================================

</script>



@stack('js')
