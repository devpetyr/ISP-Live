@extends('web.layouts.main')
@section('page_title','ISP - Intern And Corporate Housing')
@section('content')
    <!-- Intern And Corporate Housing start -->

    <!-- banner start -->
    <section class="banner-main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/intern-housing-bg.png')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 centerCol ">
                                    <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                        <h1 class="wow zoomIn">Intern and Corporate Housing</h1>

                                        <a href="javascript:void(0)" class="host-btn">Start Here</a>
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

    <!-- blog carts section start -->
    <section class="intern-cart">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="intern-headings">
                        <h2>Intern and Corporate Housing</h2>
                        <h4>As an intern why would I choose to stay with a host over an apartment or traveler website?</h4>
                        <p>We place our interns with local hosts close to their company location for an easy commute by
                            public transportation since most don’t have cars. There might be other interns living in the
                            same house to make it even more lively and on top of this, you can dictate the level of
                            independence you want…do you want interaction with your host and be on the meal plan or do you
                            just want a place to sleep every night?
                        </p>
                        <p> It’s your choice.</p>

                        <p> You’ll get your own bedroom, shared bathroom, choice of meal plans, and all the support you need
                            while you’re with us. If you need airport pick up, no problem.
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-6 ">
                    <div class="intern-text">
                        <h4>Our program includes:</h4>
                        <ul>
                            <li> Short term host placements from 5-120 nights for domestic and international interns and
                                executives.
                            </li>
                            <li> Support and assistance throughout your stay.</li>
                            <li> Host profile with photos before arrival-always with a private bedroom.</li>
                            <li> Assigned ISP Coordinator-your personal concierge.</li>
                            <li> Airport pick up if you need it.</li>
                        </ul>
                        <p>Interns can apply on our portal. For companies needing
                            corporate housing for their employees, please reach out to us for more information at
                            admin@isphomestays.com.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-6 ">
                    <div class="intern-box">
                        <p>Our company relies on ISP every summer to provide housing for our summer interns. Our interns get
                            the wonderful support of living with a local host and don't have to worry about finding housing
                            in an aggressive and expensive rental market that doesn't cater to short-term
                            renters. ISP is professional and reliable.

                            <span> Joe P. Tower Capital</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog carts section end -->

    <!-- Intern And Corporate Housing end -->
@endsection
