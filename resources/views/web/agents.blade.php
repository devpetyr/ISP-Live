@extends('web.layouts.main')
@section('page_title','ISP - Agents')
@section('content')
    <!-- agents start -->

    <!-- banner start -->
    <section class="banner-main_slider inner_pages">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/about-us-bg.jpg')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 ">
                                    <div class="banner-content">
                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                            <h1 class="wow zoomIn">Agents</h1>
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

    <section class="Agent_2sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-12 centerCol">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <div class="text_agent2">
                                <p>Our relationships with more than <span class="bleck">450</span> overseas agents keeps us very busy…. but not too
                                    busy to
                                    form new partnerships.
                                    If your agency wants to team up with the most experienced, reliable, and trustworthy
                                    company
                                    in the industry, then
                                    With our vast experience providing housing and understanding the dynamics of
                                    international
                                    programs, we ensure
                                    that our housing placements are close to school and work, reliable, safe, and
                                    affordable.
                                    Let us focus on your
                                    housing needs so you can focus on what you do best. </p>
                                <p>Our job is to make your job easier-we’ll give priority status to your students, offer
                                    a generous commission package,
                                    and ensure that every detail is handled so you don’t have to worry about anything.
                                </p>
                                <p>We place students all over the United States…. there’s no group that’s too big, no
                                    project too last minute, no requests
                                    we can’t accommodate. In 30 years, we’ve done it all. </p>
                                <p>
                                    For inquiries, please complete the information below. </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="agent_box">
                                <p>Over 450 agents in 93 countries choose ISP</p>
                            </div>    
                        </div>
                    </div>
                    <div class="Agent_fild two">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Agency name</label>
                                <input type="text">
                            </div>
                            <div class="col-md-6">
                                <label>First name</label>
                                <input type="text">
                            </div>
                            <div class="col-md-6">
                                <label>Last name</label>
                                <input type="text">
                            </div>
                            <div class="col-md-12">
                                <label>Email</label>
                                <input type="email">
                            </div>
                            <div class="col-md-12">
                                <label>Address</label>
                                <input type="text">
                            </div>
                            <div class="col-md-6">
                                <label>City</label>
                                <input type="text">
                            </div>
                            <div class="col-md-6">
                                <label>State/Province</label>
                                <input type="text">
                            </div>
                            <div class="col-md-6">
                                <label>Zip Code</label>
                                <input type="password">
                                <button>Submit</button>

                            </div>
                            <div class="col-md-6">
                                <label>Country</label>
                               <select name="cars">
                                    <option value="" selected="">Country name here</option>
                                    <option value="volvo">Africa</option>
                                    <option value="saab">Australia</option>
                                    <option value="mercedes">Canada</option>
                                    <option value="audi">Kenea</option>
                                </select>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="Counter_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="counter_text wow zoomIn" data-wow-duration="2s"
                         style="visibility: visible; animation-duration: 2s; animation-name: zoomIn;">

                    </div>
                </div>
            </div>

            <ul id="counter">
                <div class="row">

                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="counter_text wow fadeInLeft" data-wow-duration="2s"
                             style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                            <img src="{{asset('web/images/counter_1.png')}}" class="img-fluid">
                            <li>
                                <h3 class="countt">
                                   210
                                </h3>
                            </li>

                            <span>
                                School Partnerships</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="counter_text wow fadeInLeft" data-wow-duration="2s"
                             style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                            <img src="{{asset('web/images/counter_2.png')}}" class="img-fluid">
                            <li>
                                <h3 class="countt">
                                    103
                                </h3>
                            </li>

                            <span>corporate partnerships</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="counter_text wow fadeInLeft" data-wow-duration="2s"
                             style="visibility: visible; animation-duration: 2s; animation-name: fadeInLeft;">
                            <img src="{{asset('web/images/counter_3.png')}}" class="img-fluid">
                            <li>
                                <h3 class="countt">
                                   30
                                </h3>
                            </li>

                            <span>corporate partnerships</span>
                        </div>
                    </div>
            </ul>
        </div>
        </div>
    </section>
    <!-- sec end  -->

    <!-- agents end -->
@endsection
