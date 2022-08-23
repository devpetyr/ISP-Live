<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css start -->
    @include('web.layouts.css')
    <!-- css ends -->
    <title>@yield('page_title')</title>
</head>

<body>
<!-- header-top -->


<!-- header-top-end -->

<!-- header start -->
@include('web.layouts.header')
<!-- header end -->

<!-- content start -->
@yield('content')
<!-- content ends -->

<!-- footer start  -->
@include('web.layouts.footer')
<!-- footer end  -->


<!-- js start -->
@include('web.layouts.js')
<!-- js ends -->

</body>

</html>
