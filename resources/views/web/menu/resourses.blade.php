@extends('web.layouts.main')
@section('page_title','ISP - Resources')
@section('content')
    <!-- resources start -->

    <!-- banner start -->
  <section class="banner-main_slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
        <div class="safety_baner">
            <img src="{{asset('web/images/Resources.back-img.jpg')}}" class="img-fluid" alt="...">
        </div>
          <div class="carousel-caption">
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-8 ">
                <div class="banner-content">
                  <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                    <h1 class="wow zoomIn">Resources</h1>
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
  <!-- video sec start  -->
  <section class="resourses-detals">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
            <div class="agents-content wow fadeInRight" data-wow-duration="2s">
                <h3>Host</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul>
                    <li>Lorem ipsum  adipiscing elit.</li>
                    <li>Sed do incididunt ut labore.</li>
                    <li>Magna aliqua Ut enim adexercitation.</li>
                    <li>Ullamco laboris nisi ut aliquip ex.</li>
                    <li>Leaea commodo consequat.</li>

                </ul>
            </div>
            </div>
        <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
          <div class="agent-main">
            <div class="about-img wow fadeInRight" data-wow-duration="2s">
                <img src="{{asset('web/images/Resources.img-1.jpg')}}" alt="img here">
            </div>
        </div>
        </div>
         </div>
        </div>
      </div>
    </div>
  </section>

  <section class="resourses-detal-2">
    <div class="container">
      <div class="row align-items-center">
            <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                <div class="agent-main-2">
                  <div class="about-img wow fadeInRight" data-wow-duration="2s">
                      <img src="{{asset('web/images/Resources.img-2.jpg')}}" alt="img here">
                  </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                <div class="agents-content wow fadeInRight" data-wow-duration="2s">
                    <h3>Co-Ordinatior</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <ul>
                        <li>Lorem ipsum  adipiscing elit.</li>
                        <li>Sed do incididunt ut labore.</li>
                        <li>Magna aliqua Ut enim adexercitation.</li>
                        <li>Ullamco laboris nisi ut aliquip ex.</li>
                        <li>Leaea commodo consequat.</li>

                    </ul>
                </div>
                </div>
        </div>
      </div>
  </section>
  <section class="agents-detal-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
            <div class="agents-content wow fadeInRight" data-wow-duration="2s">
                <h3>Agents</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul>
                    <li>Lorem ipsum  adipiscing elit.</li>
                    <li>Sed do incididunt ut labore.</li>
                    <li>Magna aliqua Ut enim adexercitation.</li>
                    <li>Ullamco laboris nisi ut aliquip ex.</li>
                    <li>Leaea commodo consequat.</li>
                </ul>
            </div>
            </div>
            <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                <div class="agent-main-2">
                  <div class="about-img wow fadeInRight" data-wow-duration="2s">
                      <img src="{{asset('web/images/Resources.img-3.jpg')}}" alt="img here">
                  </div>
              </div>
            </div>
        </div>
      </div>
  </section>


  <!-- resources end -->
@endsection
