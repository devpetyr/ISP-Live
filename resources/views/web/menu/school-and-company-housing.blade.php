@extends('web.layouts.main')
@section('page_title','ISP - School & Company Housing')
@section('content')
    <!-- School & Company Housing start -->

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
                                            <h1 class="wow zoomIn">Schools and Company Housing</h1>
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
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="text_agent2">
                                <p>One of our favorite aspects about ISP is the relationships we’ve cultivated with companies, high schools, colleges, and universities all over the country. With our vast experience providing housing and understanding the dynamics of international programs, we ensure that our housing placements are close to school, reliable, and affordable on work</p>
                               
                                <p>What if students have housing issues? We jump in at lightning speed to fix them.                                 </p>
                                <p>If your company needs intern housing, if your school doesn’t have dorms or if they’re full, if you have groups that need housing, or if you’re a high school needing a homestay provider, we’re here for you….let’s connect</p>
                            </div>
                        </div>
                    </div>
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
                            <div class="col-md-6">
                                <label>Title</label>
                                <input type="text">
                            </div>
                            <div class="col-md-6">
                                <label>School name</label>
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
                                <label>State</label>
                                <input type="text">
                            </div>
                            <div class="col-md-6">
                                <label>Zip Code</label>
                                <input type="password">

                            </div>
                            <div class="col-md-6">
                                <label>Country</label>
                                <select name="cars" >
                                    <option value="" selected>Country name here</option>
                                    <option value="volvo">Africa</option>
                                    <option value="saab">Australia</option>
                                    <option value="mercedes">Canada</option>
                                    <option value="audi">Kenea</option>
                                </select>
                            </div>
                            <button>Submit</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- sec end  -->

    <!-- School & Company Housing end -->
@endsection
