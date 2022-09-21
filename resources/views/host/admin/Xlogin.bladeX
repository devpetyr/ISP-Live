<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/fontawesome5/css/all.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/slick/slick-theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/slick/slick.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/css/slicknav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('admin/css/jquery.fancybox.min.css')}}" />
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet" />
    {{--toaster links--}}
    <link href="{{asset('admin/toaster/toastr.css')}}" rel="stylesheet" type="text/css" />
    {{--    <link rel="icon" type="image/x-icon" href="{{asset('admin/images/logo.png')}}">--}}
    <title>ISP - Portal</title>
</head>
<body>
<section class="login_sec">
    <div class="container">
        <div class="row">
            <section class="vh-lg-100 d-flex align-items-center">
                <div class="container">
                    <div class="row justify-content-center form-bg-image" >
                        <div class="col-5 d-flex align-items-center justify-content-center">
                            <div class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                                <div class="text-center text-md-center mb-4 mt-md-0">
                                    <h1 class="mb-0 h3">Sign in to our platform</h1>
                                </div>
                                <form action="{{route('login_post')}}" method="POST" class="mt-4">
                                @csrf
                                    <!-- Form -->
                                    <div class="form-group mb-4">
                                        <label for="email">Your Email</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
                                            <input type="email" class="form-control" placeholder="example@company.com" id="email" autofocus="" name="email" value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="form-group">
                                        <!-- Form -->
                                        <div class="form-group mb-4">
                                            <label for="password">Your Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
                                                <input type="password" placeholder="Password" class="form-control" id="password" required="" name="password">
                                            </div>
                                        </div>
                                        <!-- End of Form -->
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <div>

                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                                </form>
                                <div class="d-flex justify-content-center align-items-center mt-4">
                                <span class="font-weight-normal">


                                </span>
                                    <a href="{{route('web_home')}}" class="btn btn-block btn-primary">Back to website</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <!doctype html>
        </div>
    </div>
</section>
<script src="{{asset('admin/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('admin/js/wow.js')}}"></script>
<script src="{{asset('admin/slick/slick.js')}}"></script>
<script src="{{asset('admin/slick/slick.min.js')}}"></script>
<script src="{{asset('admin/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('admin/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.js')}}"></script>
<script src="{{asset('admin/js/custom.js')}}"></script>

    {{--toaster links--}}
    <script src="{{asset('admin/toaster/toastr.min.js')}}"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-full-width",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut",
            "setTextSize": "55"
        }


        $(document).ready(function() {
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
        });
    </script>


</body>
</html>

