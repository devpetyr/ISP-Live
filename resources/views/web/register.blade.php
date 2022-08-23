@extends('web.layouts.main')
@section('page_title','ISP - Register')
@section('content')
    <!-- register start -->
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
                        <h1 class="wow zoomIn">Register</h1>
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

    <section class="BuildTrust">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-xs-12">
            <div
              class="centerheading wow fadeInLeft"
              data-wow-duration="2s"
              style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: fadeInLeft;
              "
            >
              <!-- <h4>OUR PROCESS</h4>
              <span>How it works?</span> -->
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div
              class="trustbox purple wow zoomIn"
              data-wow-duration="2s"
              style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
            >
              <small>Host</small>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                eligendi magnam repudiandae eveniet mollitia libero est
                quibusdam assumenda exercitationem ut, non ducimus. In rem
                expedita a accusantium dolore ratione! Similique?
              </p>
              <a href="{{route('web_register_form',3)}}">Register</a>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div
              class="trustbox green wow zoomIn"
              data-wow-duration="2s"
              style="
                visibility: visible;
                animation-duration: 2s;
                animation-name: zoomIn;
              "
            >
              <small>Student</small>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore
                eligendi magnam repudiandae eveniet mollitia libero est
                quibusdam assumenda exercitationem ut, non ducimus. In rem
                expedita a accusantium dolore ratione! Similique?
              </p>
              <a href="{{route('web_register_form',2)}}">Register</a>
            </div>
          </div>
{{--          <div class="col-md-4 col-sm-4 col-xs-12">--}}
{{--            <div--}}
{{--              class="trustbox orange wow zoomIn"--}}
{{--              data-wow-duration="2s"--}}
{{--              style="--}}
{{--                visibility: visible;--}}
{{--                animation-duration: 2s;--}}
{{--                animation-name: zoomIn;--}}
{{--              "--}}
{{--            >--}}
{{--              <small>Driver </small>--}}
{{--              <p>--}}
{{--                Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore--}}
{{--                eligendi magnam repudiandae eveniet mollitia libero est--}}
{{--                quibusdam assumenda exercitationem ut, non ducimus. In rem--}}
{{--                expedita a accusantium dolore ratione! Similique?--}}
{{--              </p>--}}
{{--              <a href="{{route('web_register_form',5)}}">Register</a>--}}
{{--            </div>--}}
{{--          </div>--}}
        </div>
      </div>
    </section>

    <!-- register end -->
@endsection
