@extends('web.layouts.main')
@section('page_title','ISP - Reset Password')
@section('content')
    <!-- reset password form start -->
    <!-- banner start -->

    <section class="banner-main_slider">
        <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="portal_baner">
                        <img
                                src="{{asset('web/images/Isp-portal.back-img.jpg')}}"
                                class="img-fluid"
                                alt="..."
                        />
                    </div>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8">
                                    <div class="banner-content">
                                        <div
                                                class="banner_text wow fadeInLeft"
                                                data-wow-duration="2s">
                                            <h1 class="wow zoomIn">Reset Password
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="form_reg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="login_fild">
                        <h3>Reset Password</h3>
                        <form action="{{route('web_reset_password_submit',[$user->id])}}" method="post">
                            @csrf
                            <input type="password" class="form-control" name="new_password" placeholder="New Password" aria-label="Password">
                            @error('new_password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="Password" class="form-control" name="confirm_password" placeholder="Confirm Password" aria-label="Password">
                            @error('confirm_password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <button type="submit" class="login_submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- reset password form end  -->
@endsection
