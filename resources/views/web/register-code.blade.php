@extends('web.layouts.main')
@section('page_title','ISP - Register-Code')
@section('content')
    <!-- register code start -->

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
                        data-wow-duration="2s"
                      >
                        <h1 class="wow zoomIn">Register Code</h1>
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
            <div class="login_fild code_con">
              <h3>Register Code</h3>
              <label>Enter Your Code</label>
              <input class="main_inp" type="text" />
              <a class="trust_form" href="#">Register</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- register code end -->
@endsection
