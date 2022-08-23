@extends('web.layouts.main')
@section('page_title','ISP - Home')
@section('content')
<!-- index start -->

<!-- banner start -->
<section class="main_slider">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('web/images/banner.jpg')}}" class="img-fluid" alt="...">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8 col-md-8 centerCol ">
                                <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                    <h1 class="wow zoomIn">Remarkable Experience for International Students</h1>

                                    <a href="javascript:void(0)" class="btn btn_badam">Start Here</a>
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
<section class="video_sec">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-10 centerCol">
                <h2>Meet ISP</h2>
                <div class="video_img wow zoomIn" data-wow-duration="2s">
                    <img src="{{asset('web/images/vd_1.jpg')}}" class="img-fluid">
                    <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=rEdzRiTxFIg" tabindex="0"><i
                            class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="video_text text-center wow fadeInRight" data-wow-duration="2s">
                    <h3>For over 30 years, ISP has successfully placed thousands of international students, interns, and
                        tourists in our programs in the U.S</h3>
                    <p>Our programs provide English language immersion and an intimate look at American culture. We offer
                        programs for short-term intensive groups, summer interns, visiting scholars, college and high school
                        students, and culture camp students. What sets ISP apart from other companies is our professionalism, our
                        caring and committed multilingual staff, and our superior service to students, agents, and schools.</p>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="ic_main wow zoomIn" data-wow-duration="2s">
                            <a href="javascript:void(0)">
                                <img src="{{asset('web/images/ic_1.png')}}" class="img-fluid" alt="">
                            </a>
                            <h4>Become an ISP agent </h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="ic_main wow zoomIn" data-wow-duration="2s">
                            <a href="javascript:void(0)">
                                <img src="{{asset('web/images/ic_2.png')}}" class="img-fluid" alt="">
                            </a>
                            <h4>Careers at ISP </h4>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <div class="ic_main wow zoomIn" data-wow-duration="2s">
                            <a href="javascript:void(0)">
                                <img src="{{asset('web/images/ic_3.png')}}" class="img-fluid" alt="">
                            </a>
                            <h4>ISP Brochure </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video sec end  -->

<section class="program_sec">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h2>Explore Our Programs</h2>
                <div class="blogslid_2 wow fadeInLeft" data-wow-duration="2s">
                    <div>
                        <div class="pro_div">
                            <div class="containerd">
                                <img src="{{asset('web/images/pr_1.jpg')}}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text">Hello World</div>
                                </div>
                            </div>
                            <div class="pro_text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <a href="javascript:void(0)"> Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="pro_div">
                            <div class="containerd">
                                <img src="{{asset('web/images/pr_2.jpg')}}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text">Hello World</div>
                                </div>
                            </div>
                            <div class="pro_text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <a href="javascript:void(0)"> Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="pro_div">
                            <div class="containerd">
                                <img src="{{asset('web/images/pr_3.jpg')}}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text">Hello World</div>
                                </div>
                            </div>
                            <div class="pro_text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <a href="javascript:void(0)"> Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="pro_div">
                            <div class="containerd">
                                <img src="{{asset('web/images/pr_1.jpg')}}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text">Hello World</div>
                                </div>
                            </div>
                            <div class="pro_text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <a href="javascript:void(0)"> Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="pro_div">
                            <div class="containerd">
                                <img src="{{asset('web/images/pr_2.jpg')}}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text">Hello World</div>
                                </div>
                            </div>
                            <div class="pro_text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <a href="javascript:void(0)"> Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="pro_div">
                            <div class="containerd">
                                <img src="{{asset('web/images/pr_3.jpg')}}" alt="Avatar" class="image">
                                <div class="overlay">
                                    <div class="text">Hello World</div>
                                </div>
                            </div>
                            <div class="pro_text">
                                <h5>Lorem ipsum dolor sit</h5>
                                <a href="javascript:void(0)"> Learn More <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Group sec start  -->
<section class="group">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

            </div>
        </div>
    </div>
</section>
<!-- Group sec end  -->


<!-- slick slider start -->
<section class="blog_sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="blog_hed wow fadeInLeft" data-wow-duration="2s">
                    <h4>Testimonials</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="blogslid wow fadeInRight" data-wow-duration="2s">


                    <div>
                        <div class="blog_slid">
                            <img src="{{asset('web/images/round_1.jpg')}}" class="img-fluid">
                            <h6>Lorem ipsum dolor sit amet</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. </p>
                        </div>
                    </div>
                    <div>
                        <div class="blog_slid">
                            <img src="{{asset('web/images/round_2.jpg')}}" class="img-fluid">
                            <h6>Lorem ipsum dolor sit amet</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. </p>
                        </div>
                    </div>
                    <div>
                        <div class="blog_slid">
                            <img src="{{asset('web/images/round_3.jpg')}}" class="img-fluid">
                            <h6>Lorem ipsum dolor sit amet</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. </p>
                        </div>
                    </div>
                    <div>
                        <div class="blog_slid">
                            <img src="{{asset('web/images/round_1.jpg')}}" class="img-fluid">
                            <h6>Lorem ipsum dolor sit amet</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. </p>
                        </div>
                    </div>
                    <div>
                        <div class="blog_slid">
                            <img src="{{asset('web/images/round_2.jpg')}}" class="img-fluid">
                            <h6>Lorem ipsum dolor sit amet</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. </p>
                        </div>
                    </div>
                    <div>
                        <div class="blog_slid">
                            <img src="{{asset('web/images/round_3.jpg')}}" class="img-fluid">
                            <h6>Lorem ipsum dolor sit amet</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply
                                dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing
                                and typesetting industry. </p>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- slick slider end -->
<!-- index end -->
@endsection
