@extends('web.layouts.main')
@section('page_title','ISP - Forgot Password')
@section('content')
    <!-- forgot password form start -->
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
                                            <h1 class="wow zoomIn">Forgot Password
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
                    <div class="login_fild first-log">
                        <h3>Forgot Password</h3>
                        <form action="{{route('web_forgot_password_email')}}" method="post">
                            @csrf
                            <input type="email" id="email" name="email" placeholder="Email" required/>
                            @error('email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <button type="submit" class="login_submit">Submit</button>
                        </form>
                        <a href="{{route('login')}}">Remember Password ? Login Instead</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- forgot password form end  -->
@endsection
