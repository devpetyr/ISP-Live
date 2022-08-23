<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- css start -->
    @include('coordinator.layouts.css')
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
                @include('coordinator.layouts.menu')
                <!-- header ends -->

                <!-- content start -->
                @yield('content')
                <!-- content ends -->
            </div>
        </div>
    </div>
</section>

<!-- js start -->
@include('coordinator.layouts.js')
<!-- js ends -->

</body>
</html>

<!-- modal start -->
@include('coordinator.layouts.modal')
<!-- modal ends -->
