@extends('web.layouts.main')
@section('page_title','ISP - Health & Safety')
@section('content')
    <!-- health and safety start -->
    <!-- banner start -->
    <section class="banner-main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/health_banner.png')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 ">
                                    <div class="banner-content">
                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                            <h1 class="wow zoomIn">HEALTH AND SAFETY</h1>
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

    <section class="Covid_19sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="covid_heading">
                        <h4>COVID-19 SAFE PRACTICES</h4>
                        <p>To develop our COVID-19 guidelines, we follow the most recent guidance of the WHO and the CDC
                            and the policies of state and local agencies. We’re in constant communication with our hosts
                            and students, with tips on how minimize the spread of infection to COVID-19 guidelines,
                            click here </p>

                        <h4>SAFETY IN HOST HOMES</h4>
                        <p>Student safety is our number one priority and we have a strict protocol for host applicants
                            which includes a visual inspection of the home and surrounding area, an interview with all
                            residents of the home, and a comprehensive background check for every applicants every three
                            years. Our standards are so strict that we typically accept only 65% of host applicants.
                        </p>
                        <h4>STAFF SCREENING</h4>
                        <p>All applicants must pass a screening process before hiring and undergo a comprehensive
                            background check. Our staff must be dedicated to serving international students to their
                            highest ability, understand the complexity of international student travel, and have
                            demonstrated experience working with diverse cultures.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- health and safety end -->
@endsection
