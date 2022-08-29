@extends('web.layouts.main')
@section('page_title','ISP - About-Us')
@section('content')
    <!-- about-us start -->

{{--    <!-- banner start -->--}}
{{--    <section class="banner-main_slider">--}}
{{--        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">--}}
{{--            <div class="carousel-inner">--}}
{{--                <div class="carousel-item active">--}}
{{--                    <img src="{{asset('web/images/about-banner-img-1.png')}}" class="img-fluid" alt="...">--}}
{{--                    <div class="carousel-caption">--}}
{{--                        <div class="container">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xs-12 col-sm-8 col-md-8 ">--}}
{{--                                    <div class="banner-content">--}}
{{--                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">--}}
{{--                                            <h1 class="wow zoomIn">isp About Us</h1>--}}
{{--                                            <!--  <div class="banner-btn">-->--}}
{{--                                            <!--  <a href="javascript:void(0)" class="btn btn_badam">Start Here</a>-->--}}
{{--                                            <!--</div>-->--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- banner end -->--}}

{{--    <!-- video sec start  -->--}}
{{--    <section class="about_sec">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="about-us-tittle">--}}
{{--                    <div class="col-xs-12 col-sm-10 col-md-10 centerCol">--}}
{{--                        <h2>About Us</h2>--}}
{{--                        <p>Ticalion is the first and only company to offer end to end FDA and <br>ISO 9001 compliant--}}
{{--                            Quality Management as a Service</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">--}}
{{--                    <div class="about-img wow fadeInRight" data-wow-duration="2s">--}}
{{--                        <img src="{{asset('web/images/about-page-img-2.jpg')}}" alt="img here">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">--}}
{{--                    <div class="about-content wow fadeInRight" data-wow-duration="2s">--}}
{{--                        <h3>All the resources quality experts need</h3>--}}
{{--                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has--}}
{{--                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a--}}
{{--                            galley of type and scrambled it to make a type specimen book. It has survived not only five--}}
{{--                            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.--}}
{{--                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum--}}
{{--                            passages, and more recently with desktop publishing software like Aldus PageMaker including--}}
{{--                            versions of Lorem Ipsum.</p>--}}

{{--                        <p>popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,--}}
{{--                            and more recently with desktop publishing software like Aldus PageMaker including versions--}}
{{--                            of Lorem Ipsum.</p>--}}
{{--                        <div class="about-btn">--}}
{{--                            <a href="javascript:void(0)" class="btn btn_badam">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- video sec end  -->--}}

{{--    <!-- achievement start -->--}}
{{--    <section class="achivments_sec">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="achiment-tittle">--}}
{{--                    <div class="col-xs-12 col-sm-10 col-md-10 centerCol">--}}
{{--                        <h2>Numbers & Achievements</h2>--}}
{{--                        <p>Canyon Technology Services helps small and midsize businesses quickly<br> gain insight into--}}
{{--                            the challenges affecting their AWS cloud projects. </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-10 col-md-3 centerCol">--}}
{{--                    <div class="sec-about-main">--}}
{{--                        <div class="about-img wow fadeInRight" data-wow-duration="2s" id="about-banner-img-1">--}}
{{--                            <img src="{{asset('web/images/about-icon-1.png')}}" alt="img here">--}}
{{--                        </div>--}}
{{--                        <div class="about-details" id="details-1">--}}
{{--                            <h3>1024</h3>--}}
{{--                            <p>Awards</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-10 col-md-3 centerCol">--}}
{{--                    <div class="sec-about-main">--}}
{{--                        <div class="about-img wow fadeInRight" data-wow-duration="2s" id="about-banner-img-2">--}}
{{--                            <img src="{{asset('web/images/about-icon-2.png')}}" alt="img here">--}}
{{--                        </div>--}}
{{--                        <div class="about-details" id="details-2">--}}
{{--                            <h3>24</h3>--}}
{{--                            <p>projects</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-10 col-md-3 centerCol">--}}
{{--                    <div class="sec-about-main">--}}
{{--                        <div class="about-img wow fadeInRight" data-wow-duration="2s" id="about-banner-img-3">--}}
{{--                            <img src="{{asset('web/images/about-icon-3.png')}}" alt="img here">--}}
{{--                        </div>--}}
{{--                        <div class="about-details" id="details-3">--}}
{{--                            <h3>1024</h3>--}}
{{--                            <p>Happy Clients</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-xs-12 col-sm-10 col-md-3 centerCol">--}}
{{--                    <div class="sec-about-main">--}}
{{--                        <div class="about-img wow fadeInRight" data-wow-duration="2s" id="about-banner-img-4">--}}
{{--                            <img src="{{asset('web/images/about-icon-4.png')}}" alt="img here">--}}
{{--                        </div>--}}
{{--                        <div class="about-details" id="details-4">--}}
{{--                            <h3>99</h3>--}}
{{--                            <p>Up Time</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!-- achievement end -->--}}

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
                                            <h1 class="wow zoomIn">About Us</h1>
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
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-8 centerCol">
                    <div class="story-content story-content-about   wow fadeInLeft" data-wow-duration="2s">
                        <h4>Our Story Team</h4>
                        <p>Jean Ikeda started her career as a Program Coordinator for international programs at Foothill College in Northern California. At that time, Foothill had the largest, most robust programs for international students in the country. During her many years on campus, Jean led student orientations, executed immersion programs for sister-school groups, managed summer internship placements for J1 students, recruited students overseas, and fostered agent partnerships. She was immersed in everything related to international education. </p>
                        <p>With no dorms on campus, the constant need for reliable, affordable, and safe housing for students was how ISP was born.</p>
                        <p>Starting first with homestay placements for Foothill College students, word to other colleges that also needed housing quickly spread and soon Jean was placing students throughout California and neighboring states, while responding to growing requests from agents to not only provide homestays but a variety of programs. </p>

                        <h5>Fast forward 30 years </h5>
                        <p> Today, ISP is pleased to welcome 2-3,000 students annually to our homestay and group programs throughout the United States. We’re proud of the partnerships with colleges, universities, corporations, and agents who trust ISP to deliver the best programs and housing options possible. <br>
                            The ISP team is keenly aware of all facets required to manage a successful international program and the many layers of support required to do so. Our job is challenging, meaningful, and sometimes very chaotic, but we stop at nothing to meet our superior standards for excellence, ensuring that no detail is missed.  </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="story-img  wow fadeInLeft" data-wow-duration="2s">
                        <img src="{{asset('web/images/about-us-img-1.jpg')}}" alt="img here">
                    </div>
                    <div class="img-heading">
                        <h3> Jean Ikeda</h3>
                        <h4> Executive Director</h4>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="story-img   wow fadeInLeft" data-wow-duration="2s">
                        <img src="{{asset('web/images/about-banner-img-2.png')}}" alt="img here">
                    </div>
                    <div class="img-heading">
                        <h3> Janaki Padia</h3>
                        <h4> Program Director</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-8 centerCol">
                    <div class="story-content Janaki-Padia  wow fadeInLeft" data-wow-duration="2s">
                        <p>Janaki manages well, everything. Overseeing every single detail of every single program, she juggles so many things with style and grace that everyone is in awe of her. Our agents, internal staff, students, and hosts think she’s simply amazing. If you’re lucky to enough come into contact with her, you’ll quickly think the same. </p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="story-text">
                        <h4>Team</h4>
                        <p>Our additional office staff and area coordinators in all major US cities make ISP a well-run </br> machine, supporting our students 365 days a year.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- video sec end  -->

    <!-- about-us end -->
@endsection
