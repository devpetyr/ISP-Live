<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- css start -->
    @include('student.layouts.css')
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
                @include('student.layouts.menu')
                <!-- header ends -->

                <!-- content start -->
                @yield('content')
                <!-- content ends -->
            </div>
        </div>
    </div>
</section>

<!-- js start -->
@include('student.layouts.js')
<!-- js ends -->

</body>
</html>

<!-- modal start -->
@include('student.layouts.modal')
<!-- modal ends -->
