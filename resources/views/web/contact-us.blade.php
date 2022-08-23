@extends('web.layouts.main')
@section('page_title','ISP - Contact-Us')
@section('content')
    <!-- contact-us start -->

{{--    <!-- banner start -->--}}


{{--  <section class="main_slider">--}}
{{--    <div--}}
{{--      id="carouselExampleControls"--}}
{{--      class="carousel slide"--}}
{{--      data-bs-ride="carousel"--}}
{{--    >--}}
{{--      <div class="carousel-inner">--}}
{{--        <div class="carousel-item active">--}}
{{--          <img src="{{asset('web/images/contact_banner.gif')}}" class="img-fluid" alt="..." />--}}
{{--          <div class="carousel-caption">--}}
{{--            <div class="container">--}}
{{--              <div class="row">--}}
{{--                <div class="col-xs-12 col-sm-12 col-md-12 centerCol">--}}
{{--                  <div--}}
{{--                    class="banner_text wow fadeInLeft"--}}
{{--                    data-wow-duration="2s"--}}
{{--                  >--}}
{{--                    <h1 class="contact-hed" class="wow zoomIn">--}}
{{--                      iSP Contact Us--}}
{{--                    </h1>--}}
{{--                    <!--<a-->--}}
{{--                    <!--  href="javascript:void(0)"-->--}}
{{--                    <!--  class="btn btn_badam contact_b"-->--}}
{{--                    <!--  >Start Here</a-->--}}
{{--                    <!-->-->--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </section>--}}
{{--  <!-- banner end -->--}}

{{--  <!-- contact us live start -->--}}
{{--  <section class="live_sec">--}}
{{--    <div class="container">--}}
{{--      <div class="row">--}}
{{--        <div class="col-md-12 col-sm-12 col-xs-12">--}}
{{--          <div class="live-text">--}}
{{--              <h3>Contact us live</h3>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--      </div>--}}
{{--    <div class="row">--}}
{{--      <div class="col-md-6 col-sm-6 col-xs-12">--}}
{{--          <div class="live-content">--}}
{{--              <h6>GET QUOTE</h6>--}}
{{--              <h2>Request A Quote</h2>--}}
{{--              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
{{--                  Lorem Ipsum has been the industry's standard.</p>--}}
{{--                  <div class="row">--}}
{{--                      <div class="col-md-1 col-sm-1 col-xs-12">--}}
{{--                        <div class="foter_ul text-bg wow fadeInLeft" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">--}}
{{--                          <ul>--}}
{{--                            <li><i class="fa-solid fa-location-pin"></i></li>--}}
{{--                            <li><i class="fa-solid fa-envelope"></i></li>--}}
{{--                            <li><i class="fa-solid fa-phone"></i></li>--}}
{{--                          </ul>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                      <div class="col-md-11 col-sm-11 col-xs-12">--}}
{{--                        <div class="foter_ul text-icon wow fadeInLeft" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">--}}
{{--                          <ul>--}}
{{--                            <li>--}}
{{--                              <span>Our Office Address:</span><br/>--}}
{{--                              <a href="javascript:void(0)">Lorem ipsum dolor sit amet, consectetur</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                              <span>Call Us:</span><br/>--}}
{{--                              <a href="tel:+1800123456789">+1 (800) 123 456 789</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                              <span>Mail Us:</span><br/>--}}
{{--                              <a href="mailto:info@ Lorem ipsum . com">info@ Lorem ipsum . com</a>--}}
{{--                            </li>--}}

{{--                          </ul>--}}
{{--                        </div>--}}
{{--                      </div>--}}
{{--                    </div>--}}
{{--          </div>--}}
{{--      </div>--}}
{{--      <div class="col-md-6 col-sm-6 col-xs-12">--}}
{{--          <div class="cus_secu4">--}}
{{--              <h6>CONTACT US</h6>--}}
{{--            <h5>Get In Touch</h5>--}}

{{--            <form class="row g-3">--}}
{{--              <div class="col-md-6">--}}
{{--                <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">--}}
{{--              </div>--}}
{{--              <div class="col-md-6">--}}
{{--                <input type="email" class="form-control" id="inputPassword4" placeholder="Enter Email">--}}
{{--              </div>--}}
{{--              <div class="col-md-6">--}}
{{--                <input type="number" class="form-control" id="inputPassword4" placeholder="Enter Phone Number">--}}
{{--              </div>--}}
{{--              <div class="col-md-6">--}}
{{--                  <input type="text" class="form-control" id="inputPassword4" placeholder="Your Subject">--}}
{{--                </div>--}}
{{--              <div class="form-floating">--}}
{{--                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>--}}
{{--                <label for="floatingTextarea">Enter Your Message</label>--}}
{{--              </div>--}}
{{--              <div class="col-12">--}}
{{--                <button type="submit" class="btn btn-primary">Send Message</button>--}}
{{--              </div>--}}
{{--            </form>--}}
{{--          </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    </div>--}}
{{--  </section>--}}


{{--  <!-- slick slider start -->--}}


    <!-- banner start -->
    <section class="banner-main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/contact-bannmer.png')}}" class="img-fluid" alt="...">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- banner end -->
    <section class="contect-details">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="contact-details-heading">
                        <h4>Got Questions? Looking for Help? Need a Minute of our Time? </h4>
                        <p>We’d love to hear from you!</p>
                        <p>Please reach out to ISP by phone or text at <a href="#"> 650-947-8879 </a> or send us an
                            email at <a href="#"> admin@isphomestays.com</a> </p>
                        <p>Our offices are open Monday through Friday from 9am – 5 pm, PST</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- sec start -->
    <section class="sec-contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="Agent_fild">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First name</label>
                                <input type="text">
                            </div>
                            <div class="col-md-6">
                                <label>Last name</label>
                                <input type="text">
                            </div>
                            <div class="col-md-12">
                                <label>i am a...</label>
                                <input type="text">
                            </div>
                            <div class="col-md-12">
                                <label for="cars">I am a:</label>
                                <select id="cars" name="cars">
                                    <option value="volvo">parent</option>
                                    <option value="saab">Son</option>
                                    <option value="fiat">grend father</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <input type="email">
                            </div>
                            <div class="col-md-6">
                                <label>mobile Number</label>
                                <input type="text">
                            </div>
                            <div class="col-md-12">

                                <input type="text" placeholder="We Are here">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-of-contact">
                        <div class="form-box">
                            <div class="form-headings">
                                <h4>By Phone</h4>
                            </div>
                            <div class="form-details">
                                <p><strong>USA</strong> <span><a href="#"> 650-947-8879</a></span></p>
                                <hr>
                            </div>
                            <div class="form-headings">
                                <h5>By Email</h5>
                            </div>
                            <div class="form-details">
                                <p><strong>Students</strong> <span><a href="#"> admin@isphomestays.com</a></span></p>
                                <hr>
                                <p><strong>Agents</strong> <span><a href="#"> team@isphomestays.com </a></span></p>
                                <hr>
                                <p><strong>Partnership</strong> <span><a href="#"> jikeda@isphomestays.com </a></span></p>
                                <hr>
                            </div>
                            <div class="form-icon_sty wow fadeInLeft" data-wow-duration="2s">
                                <ul>
                                    <li> <a href="#"> <i class="fa-brands fa-twitter"></i></li>
                                    <li> <a href="#"> <i class="fa-brands fa-facebook-f"></i></li>
                                    <li> <a href="#"> <i class="fa-brands fa-linkedin-in"></i></li>
                                    <li> <a href="#"> <i class="fa-brands fa-instagram"></i></li>
                                </ul>
                            </div>
                            <div class="form-massage-box">
                                <h3>Lets Talk</h3>
                                <p>Share your excitement with us.</p>
                                <a href="#">admin@isphomestays.com</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- sec end -->

    <!-- contact-us end -->
@endsection
