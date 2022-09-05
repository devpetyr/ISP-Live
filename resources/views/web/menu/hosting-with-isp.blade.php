@extends('web.layouts.main')
@section('page_title','ISP - Hosting With Isp')
@section('content')
    <!-- Hosting With Isp start -->

    <!-- banner start -->
    <section class="banner-main_slider inner_pages">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/freeqently-bg-2.jpg')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-10 col-md-10">
                                    <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                        <h1 class="wow zoomIn">Hosting With ISP</h1>
    
                                     
                                    </div>
                                </div>
                                  <div class="col-xs-12 col-sm-2 col-md-2">
                                         <a href="javascript:void(0)" class="host-btn">Start Here</a>
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
    <section class="blog-cart">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="hosting-headings">
                        <h2>We’re Matchmaking specialists</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="acord_main">
                      <h3>Why be a host family?</h3>
                      <p>Hosting an international student allows you the unique opportunity to be a powerful role model to a young person. The student’s journey to cultural immersion is supported by living and experiencing life through their host’s family life. More importantly, hosting gives people a deeper understanding of human values that unite people across the globe. </p>
                    </div>
                    <div class="acord_main">
                        <h3> Who are our students?</h3>
                        <p>Students are all different ages from all different countries with one thing in common they want to experience American culture with the support of their host.  </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="frequently-headings">
                        <h2>Frequently Asked Questions by Hosts </h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingOne3">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne3" aria-expanded="true" aria-controls="collapseOne3">
                                    Who can host with ISP?
                                </button>
                            </h2>
                            <div id="collapseOne3" class="accordion-collapse collapse show" aria-labelledby="headingOne3" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We use the term host “family” loosely since our hosts come from a variety of backgrounds we have singles, executive, couples, retired seniors, many other unique household arrangemnts in our host families. Some people worry that they will be required to be at home with students 24/7 our solution is to place our older, more independent students who maybe don’t want the traditional homestay experience and prefer more freedom. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingTwo4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo4" aria-expanded="false" aria-controls="collapseTwo4">
                                    Are hosts paid?
                                </button>
                            </h2>
                            <div id="collapseTwo4" class="accordion-collapse collapse" aria-labelledby="headingTwo4" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes. All hosts are paid a stipend according to where they live and what program they’re hosting with. For more information about our stipend rates in your area, please reach out to us.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingThree5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5">
                                    What do hosts have to provide?
                                </button>
                            </h2>
                            <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li> A safe, supportive, and stable home.</li>
                                        <li>  Help with getting acclimated to American culture.</li>
                                        <li>  A private bedroom, a desk, dresser, closet, desk, chair and adequate lighting in the bedroom.</li>
                                        <li>  Breakfast, dinner, and sometimes lunch, depending on the student's program.</li>
                                        <li>  A wireless internet connection.</li>
                                        <li> Flexibility, patience, and kindness. </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingThree6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
                                    What is the duration of the student's stay?
                                </button>
                            </h2>
                            <div id="collapseThree6" class="accordion-collapse collapse" aria-labelledby="headingThree6" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>ISP offers a wide range of programs that include an academic year/semester high school program, college homestay programs for 2–3 months (with an option to extend), and short-term immersion camps for 1-4 weeks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingThree7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                                    When do students arrive?
                                </button>
                            </h2>
                            <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>All through the year. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingThree8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree8" aria-expanded="false" aria-controls="collapseThree8">
                                    Can I choose the student assigned to my home?
                                </button>
                            </h2>
                            <div id="collapseThree8" class="accordion-collapse collapse" aria-labelledby="headingThree8" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely! We may make suggestions about what students we think would be a good match based on our experience, but our hosts always have the final say. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="frequently-headings">
                        <h2>Our Staff Provides: </h2>
                        <ul>
                            <li> Recommendations about students we think would be a good match for you.</li>

                            <li> A Host orientation which takes the guesswork out of this new adventure. </li>

                            <li> Your personal host portal where you can access your student information and update your host information seamlessly.</li>

                            <li> An assigned Program Coordinator and a 24-hour emergency number for problem solving and questions. </li>

                            <li> Flexibility, patience, and kindness.    </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="freequrntly-vidos">
                        <div class="video_img wow zoomIn" data-wow-duration="2s">
                            <img src="{{asset('web/images/hosting-img.jpg')}}" class="img-fluid">
                            <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=rEdzRiTxFIg" tabindex="0"><i class="fa-regular fa-circle-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-5 ">
                    <div class="frequently-box">
                        <div class="frequently-text">
                            <h2>What Host
                                </br>Families say</h2>
                            <h3>Testimonials</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 ">
                    <div class="frequently-slider single-item">
                        <div class="slider-contents">
                            <h4>John</h4>
                            <h6>Customer</h6>
                            <p>Working with ISP has been great-they’re responsive, helpful, and truly want the host and student to have a good experience. It isn’t always easy with all the diverse personalities they manage-but they make it look easy. I’ve grown very fond of them over the years.</p>
                            <div class="slider-last-img">
                                <img src="{{asset('web/images/slide-img-001.png')}}" alt="">
                            </div>
                        </div>
                        <div class="slider-contents">
                            <h4>John</h4>
                            <h6>Customer</h6>
                            <p>Working with ISP has been great-they’re responsive, helpful, and truly want the host and student to have a good experience. It isn’t always easy with all the diverse personalities they manage-but they make it look easy. I’ve grown very fond of them over the years.</p>
                            <div class="slider-last-img">
                                <img src="{{asset('web/images/slide-img-001.png')}}" alt="">
                            </div>
                        </div>
                        <div class="slider-contents">
                            <h4>John</h4>
                            <h6>Customer</h6>
                            <p>Working with ISP has been great-they’re responsive, helpful, and truly want the host and student to have a good experience. It isn’t always easy with all the diverse personalities they manage-but they make it look easy. I’ve grown very fond of them over the years.</p>
                            <div class="slider-last-img">
                                <img src="{{asset('web/images/slide-img-001.png')}}" alt="">
                            </div>
                        </div>
                        <div class="slider-contents">
                            <h4>John</h4>
                            <h6>Customer</h6>
                            <p>Working with ISP has been great-they’re responsive, helpful, and truly want the host and student to have a good experience. It isn’t always easy with all the diverse personalities they manage-but they make it look easy. I’ve grown very fond of them over the years.</p>
                            <div class="slider-last-img">
                                <img src="{{asset('web/images/slide-img-001.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog carts section end -->


    <!-- Hosting With Isp end -->
@endsection
