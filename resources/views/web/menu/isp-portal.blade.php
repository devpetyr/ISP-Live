@extends('web.layouts.main')
@section('page_title','ISP - Isp-Portal')
@section('content')
    <!-- Isp-portal start -->

    <!-- banner start -->
    <section class="banner-main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/portal-bg1.png')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 ">
                                    <div class="banner-content">
                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                            <h1 class="wow zoomIn">ISP Portal </h1>
                                            <p>For help, please email <a
                                                    href="mailto:admin@isphomestays.com">admin@isphomestays.com</a> or
                                                call 650-947-8879.</p>
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
    <!-- banner end -->
    <!-- sec start  -->
    <section class="Portal2_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-12 centerCol">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="Portal_2heading">
                                <h4>LOGIN</h4>
                                <p>Please enter your email and password.</p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portal-fild">
                                <label>Email</label>
                                <input type="email" placeholder="Enter You Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portal-fild">
                                <label>Password</label>
                                <input type="password" placeholder="Enter You Password">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portal-button">
                                <button>Submit</button>
                                <br/>
                                <a href="javascript:void(0)">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sec end  -->


    <!-- isp portal end -->
@endsection
