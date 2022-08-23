@extends('web.layouts.main')
@section('page_title','ISP - College-Housing')
@section('content')
    <!-- college housing start -->

    <!-- banner start -->
    <section class="banner-main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/College-Housing.back-img.jpg')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 ">
                                    <div class="banner-content">
                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                            <h1 class="wow zoomIn">College Housing Programs </h1>
                                            <!--<div class="banner-btn">-->
                                            <!--    <a href="javascript:void(0)" class="btn btn_badam">Start Here</a>-->
                                            <!--  </div>-->
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


    <!--  <div class="water-bg">-->
    <!--    <div class="container">-->
    <!--<nav class="mainnav">-->
    <!--  <div> <i class="fa fa-bars">menu</i> </div>-->
    <!--  <ul>-->
    <!--    <li class="hasDD"><a href="javascript:void(0)">Country </a>-->
    <!--      <ul>-->
    <!--        <li><a href="">Second Level </a></li>-->
    <!--        <li><a href="#">jQuery</a></li>-->
    <!--        <li><a href="#">Vanilla JavaScript</a></li>-->
    <!--      </ul>-->
    <!--    </li>-->

    <!--    <li class="hasDD"><a href="javascript:void(0)">Program Type</a>-->
    <!--      <ul>-->
    <!--        <li><a href="#">Second Level </a></li>-->
    <!--        <li><a href="#">jQuery</a></li>-->
    <!--        <li><a href="#">Vanilla JavaScript</a></li>-->
    <!--      </ul>-->
    <!--    </li>-->

    <!--    <li class="hasDD"><a href="javascript:void(0)">Age</a>-->
    <!--      <ul>-->
    <!--        <li><a href="#">Second Level </a></li>-->
    <!--        <li><a href="#">jQuery</a></li>-->
    <!--        <li><a href="#">Vanilla JavaScript</a></li>-->
    <!--      </ul>-->
    <!--    </li>-->

    <!--    <li class="hasDD"><a href="javascript:void(0)">Price</a>-->
    <!--      <ul>-->
    <!--        <li><a href="#">Second Level </a></li>-->
    <!--        <li><a href="#">jQuery</a></li>-->
    <!--        <li><a href="#">Vanilla JavaScript</a></li>-->
    <!--      </ul>-->
    <!--    </li>-->

    <!--    <li class="hasDD"><a href="javascript:void(0)">Service Hours</a>-->
    <!--      <ul>-->
    <!--        <li><a href="#">Second Level </a></li>-->
    <!--        <li><a href="#">jQuery</a></li>-->
    <!--        <li><a href="#">Vanilla JavaScript</a></li>-->
    <!--      </ul>-->
    <!--    </li>-->
    <!--  </ul>-->
    <!--</nav>-->
    <!--</div>-->
    <!--</div>-->


    <section class="isp-program">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="isp-card">
                        <div class="isp-card-img">
                            <img src="{{asset('web/images/College-Housing-img-1.jpg')}}">
                        </div>
                        <div class="card-content">
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <h2>Lorem ipsum dolor sit </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="clm-left">
                                        <h5>$5,745 </h5>
                                        <h6>18 Days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="clm-right">
                                        <h5>Age 15-19</h5>
                                        <h6>24 Service Hours</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="isp-card">
                        <div class="isp-card-img">
                            <img src="{{asset('web/images/College-Housing-img-2.jpg')}}">
                        </div>
                        <div class="card-content">
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <h2>Lorem ipsum dolor sit </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="clm-left">
                                        <h5>$5,745 </h5>
                                        <h6>18 Days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="clm-right">
                                        <h5>Age 15-19</h5>
                                        <h6>24 Service Hours</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="isp-card">
                        <div class="isp-card-img">
                            <img src="{{asset('web/images/College-Housing-img-3.jpg')}}">
                        </div>
                        <div class="card-content">
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <h2>Lorem ipsum dolor sit </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="clm-left">
                                        <h5>$5,745 </h5>
                                        <h6>18 Days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="clm-right">
                                        <h5>Age 15-19</h5>
                                        <h6>24 Service Hours</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="isp-card">
                        <div class="isp-card-img">
                            <img src="{{asset('web/images/College-Housing-img-4.jpg')}}">
                        </div>
                        <div class="card-content">
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <a href="javascript:void(0)">Lorem Ipsum</a>
                            <h2>Lorem ipsum dolor sit </h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="clm-left">
                                        <h5>$5,745 </h5>
                                        <h6>18 Days</h6>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="clm-right">
                                        <h5>Age 15-19</h5>
                                        <h6>24 Service Hours</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--
                          <div class="col-md-4">
                            <div class="isp-card">
                              <div class="isp-card-img">
                              <img src="{{asset('web/images/high-5.gif')}}">
                            </div>
                            <div class="card-content">
                              <a href="javascript:void(0)">Lorem Ipsum</a>
                              <a href="javascript:void(0)">Lorem Ipsum</a>
                              <a href="javascript:void(0)">Lorem Ipsum</a>
                              <h2>Lorem ipsum dolor sit </h2>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                              <div class="row">
                                <div class="col-sm-3">
                                  <div class="clm-left">
                                    <h5>$5,745 </h5>
                                    <h6>18 Days</h6>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="clm-right">
                                    <h5>Age 15-19</h5>
                                    <h6>24 Service Hours</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="isp-card">
                              <div class="isp-card-img">
                              <img src="{{asset('web/images/high-6.gif')}}">
                            </div>
                            <div class="card-content">
                              <a href="javascript:void(0)">Lorem Ipsum</a>
                              <a href="javascript:void(0)">Lorem Ipsum</a>
                              <a href="javascript:void(0)">Lorem Ipsum</a>
                              <h2>Lorem ipsum dolor sit </h2>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                              <div class="row">
                                <div class="col-sm-3">
                                  <div class="clm-left">
                                    <h5>$5,745 </h5>
                                    <h6>18 Days</h6>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="clm-right">
                                    <h5>Age 15-19</h5>
                                    <h6>24 Service Hours</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="isp-card">
                              <div class="isp-card-img">
                              <img src="{{asset('web/images/high-7.gif')}}">
                            </div>
                            <div class="card-content">
                              <a href="javascript:void(0)">Lorem Ipsum</a>
                              <a href="javascript:void(0)">Lorem Ipsum</a>
                              <a href="javascript:void(0)">Lorem Ipsum</a>
                              <h2>Lorem ipsum dolor sit </h2>
                              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                              <div class="row">
                                <div class="col-sm-3">
                                  <div class="clm-left">
                                    <h5>$5,745 </h5>
                                    <h6>18 Days</h6>
                                  </div>
                                </div>
                                <div class="col-sm-4">
                                  <div class="clm-right">
                                    <h5>Age 15-19</h5>
                                    <h6>24 Service Hours</h6>
                                  </div>
                                </div>
                              </div>
                            </div>
                            </div>
                          </div> -->

            </div>
        </div>
    </section>
    <!-- college housing end -->
@endsection
