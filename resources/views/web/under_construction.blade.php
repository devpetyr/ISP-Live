@extends('web.layouts.main')
@section('page_title','ISP - Under Construction')
@section('content')
    <!-- Under Construction start -->
    <!-- banner start -->

    <section class="banner-main_slider inner_pages log">
        <div
                id="carouselExampleControls"
                class="carousel slide"
                data-bs-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="portal_baner">
                        <img
                                src="{{asset('web/images/log.png')}}"
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
                                            <h1 class="wow zoomIn">ISP Portal
                                            </h1>
                                            <p>For help, please email admin@isphomestays.com or call 650-947-8879.</p>
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
                        <h3 class="under_construction">Under Construction</h3>
                        <a href="{{route('web_home')}}">Back To Home Page</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Under Construction end  -->
@endsection
