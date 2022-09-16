<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/x-icon" href="{{asset('web/images/logo.jpg')}}">
    <!--yajra table link-->
  <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- css start -->
    @include('admin.layouts.css')
    <!-- css ends -->

{{--    <link rel="icon" type="image/x-icon" href="{{asset('admin/images/logo.png')}}">--}}
    <title>ISP - Portal</title>
</head>

<body>

<section class="dashboard">
    <div class="menuSec">
        <div class="container">
            <div class="row">

                <!-- header start -->
                @include('admin.layouts.menu')
                <!-- header ends -->

                <!-- content start -->
                @yield('content')
                <!-- content ends -->
            </div>
        </div>
    </div>
</section>

<!-- js start -->
@include('admin.layouts.js')
<!-- js ends -->

</body>
</html>

<!-- modal start -->
@include('admin.layouts.modal')
<!-- modal ends -->
