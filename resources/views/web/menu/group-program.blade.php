@extends('web.layouts.main')
@section('page_title','ISP - Group Programs')
@section('content')
    <!-- Group Programs start -->

    <!-- banner start -->
    <section class="banner-main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/sk-2-img.png')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 ">
                                    <div class="banner-content">
                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                            <h1 class="wow zoomIn">Group programs</h1>
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
    <section class="sec-hostfamily">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xs-12 col-sm-10 col-md-12 centerCol">
                    <div class="story-content  wow fadeInLeft" data-wow-duration="2s">
                        <h4>Got a Group?</h4>
                        <p>Group homestay placements are our specialty! We’ve placed over 11,000 group students in homestays all over the country and love working with tour leaders to ensure that every request is fulfilled such as animal allergies, single or double placements, roommate pairings, diet restrictions, etc.</p>
                        <p>We guarantee that having your group students stay with a host family will be much more enriching than staying in a hotel. On arrival day, your students will see American flags waving and their hosts welcoming them with balloons and a sign with their name on it. On departure day, tears will flow at having to say goodbye…. memories your students will cherish forever.</p>
                        <p>There’s no group that’s too big, too small, or too last minute that we can’t handle. You take care of the tour itinerary and we’ll handle the rest.</p>
                        <h4>Our Service Includes:</h4>
                        <li> Homestay placements for students accommodating requests</li>
                        <li> Host biographies with photos</li>
                        <li> Transportation to and from program location daily</li>
                        <li> Meals</li>
                        <li> 24-hour support</li>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="quote">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-12 centerCol">
                    <div class="link-box">
                        <a href="#">Get a Quote for your Group</br>
                            groups@isphomestays.com </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Group Programs end -->
@endsection
