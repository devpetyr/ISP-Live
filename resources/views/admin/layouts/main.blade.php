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


<!--modal start-->
<!-- Button trigger modal -->

    
    <!-- Modal -->
    <div class="Modal_main">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Notes</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="Modal_style">
                <!-- Textarea 8 rows height -->
            <div class="form-outline">
                <!--<label class="form-label" for="textAreaExample2">Message</label>-->
              <textarea class="form-control" id="textAreaExample2" rows="8"></textarea>
              
            </div>
            
            
          
            </div>
          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>
    </div>
    <!--modal end-->

<!-- modal start -->
@include('admin.layouts.modal')
<!-- modal ends -->
