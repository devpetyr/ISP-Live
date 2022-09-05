@extends('web.layouts.main')
@section('page_title','ISP - Faq')
@section('content')
    <!-- faq start -->
    <!-- banner start -->
    <section class="banner-main_slider inner_pages">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/freeqently-bg.jpg')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 ">
                                    <div class="banner-content">
                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                            <h1 class="wow zoomIn">Frequently Asked Questions</h1>
                                            <!-- <div class="banner-btn">
                                          <a href="javascript:void(0)" class="btn btn_badam">Start Here</a>
                                        </div> -->
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

    <!-- blog carts section start -->
    <section class="blog-cart">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="frequently headings">
                        <h4>We’re very good at answering questions! If you can’t find what you’re looking for, drop us an email at
                            <a href="#"> admin@isphomestays.com </a> or call us at <a href="#"> 650-947-8879 </a>so we can assist you.
                        </h4>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="frequently-headings">
                        <h2>College Student and Intern Homestay</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="accordion" id="accordionExample">
                        <div class=" accordion-item one">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                    How do I apply?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You can complete our online application.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    When should I apply?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>As soon as you can! Most students apply two months before they arrive. We place late applicants but
                                        charge an extra fee for applications received within 21 days of arrival. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How much does it cost?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Please refer to your school/location listed on our. If you can’t find your school, please email us.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Can you place me at anywhere in the US?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, anywhere! </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    I’m a college student and want to be independent but I also don’t want to cook and worry about where
                                    I’ll live. Will
                                    ISP work for me?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Absolutely! Most of our college students want to be independent. We use the term “host family”
                                        loosely as many of our hosts are single or couples who would prefer to have self-sufficient students
                                        stay with them. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    What does my host provide?
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>A private bedroom with a desk, storage for clothes, shared bathroom, breakfast and dinner (For
                                        students on the meal plan), all linens, (for things like bedroom banter) and all utilities. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingseven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                    How much does it cost?
                                </button>
                            </h2>
                            <div id="collapseseven" class="accordion-collapse collapse" aria-labelledby="headingseven"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Please refer to your school/location listed on our. If you can’t find your school, please email us.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingeight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                    How long can I stay with my host?
                                </button>
                            </h2>
                            <div id="collapseeight" class="accordion-collapse collapse" aria-labelledby="headingeight"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You can sign up for a 2- or 3-month program, if you like it continue beyond that with no extra
                                        fees.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingnine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                    Can I move to another host if I don’t like it?
                                </button>
                            </h2>
                            <div id="collapsenine" class="accordion-collapse collapse" aria-labelledby="headingnine"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We’re flexible about helping students move if they need to. We want you to have a great experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingten">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                    Who picks me up from the airport?
                                </button>
                            </h2>
                            <div id="collapseten" class="accordion-collapse collapse" aria-labelledby="headingten"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our ISP driver! If you don’t want to schedule an ISP driver, you can arrange your own
                                        transportation. We recommend using ISP because our drivers wait for you at the gate…not at the
                                        curb…so you don’t have to worry about navigating an unfamiliar airport. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingeleven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseeleven" aria-expanded="false" aria-controls="collapseeleven">
                                    How do I get my host information?
                                </button>
                            </h2>
                            <div id="collapseeleven" class="accordion-collapse collapse" aria-labelledby="headingeleven"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>It will appear in you and we’ll send you an email to tell you it’s there.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingtwelve">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                                    My college requires me to have a guardian since I’m under 18. Can ISP arrange this?
                                </button>
                            </h2>
                            <div id="collapsetwelve" class="accordion-collapse collapse" aria-labelledby="headingtwelve"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Yes, we can! You must be in our homestay program to qualify for the guardianship program. We charge
                                        a monthly fee for guardianship until you turn 18 and provide a certificate of guardianship to your
                                        college. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingthirteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethirteen" aria-expanded="false" aria-controls="collapsethirteen">
                                    Can I cancel my application?
                                </button>
                            </h2>
                            <div id="collapsethirteen" class="accordion-collapse collapse" aria-labelledby="headingthirteen"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Sometimes we allow this but if we’ve done the work to place you, chances are there will be no refund.  </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingfourteen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsefourteen" aria-expanded="false" aria-controls="collapsefourteen">
                                    Why should I use ISP instead of another agency?
                                </button>
                            </h2>
                            <div id="collapsefourteen" class="accordion-collapse collapse" aria-labelledby="headingfourteen"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our experience, our customer service, and our stellar host homes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="frequently-headings">
                        <h2>College Student Shared Housing </h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-12 ">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingOne1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                        aria-expanded="true" aria-controls="collapseOne1">
                                    What is the Shared Housing Program?
                                </button>
                            </h2>
                            <div id="collapseOne1" class="accordion-collapse collapse " aria-labelledby="headingOne1"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>his is dorm-like living where mixed gender students stay together in one home, each with their own
                                        bedroom, shared bathroom, and kitchen privileges, with a landlord living on site. Leases are for 4
                                        months. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingTwo2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                    Is it available at all schools?
                                </button>
                            </h2>
                            <div id="collapseTwo2" class="accordion-collapse collapse" aria-labelledby="headingTwo2"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>No-please check with us to see if we provide this at your school. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingThree3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                                    How do I apply?
                                </button>
                            </h2>
                            <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Please email  <a href="javascript:void(0)">admin@isphomestays.com</a> for an application. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingThree4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                    When should I apply?
                                </button>
                            </h2>
                            <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Shared Housing fills very quickly and is often booked so please apply early. </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item one">
                            <h2 class="accordion-header" id="headingThreee">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThreee" aria-expanded="false" aria-controls="collapseThreee">
                                    How much does it cost?
                                </button>
                            </h2>
                            <div id="collapseThreee" class="accordion-collapse collapse" aria-labelledby="headingThreee"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Our team will let you know the price when you request an application as the fees are relative to
                                        the school location. The price is slightly higher than our homestay program. </p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-12 ">
                                <div class="frequently-headings">
                                    <h2>High School Students & Other Program </h2>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-8 col-md-12 ">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item one">
                                        <h2 class="accordion-header" id="headingOne5">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5">
                                                What programs do you have for high school students?
                                            </button>
                                        </h2>
                                        <div id="collapseOne5" class="accordion-collapse collapse" aria-labelledby="headingOne5"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>We offer academic year host placements for F1 high school students and international students
                                                    with US passports who have arranged their own school. ISP and the host serve as the student’s
                                                    guardian. </p>
                                                <p>Students can also use our school placement and homestay program where ISP places the student
                                                    in our network of high-performing college-prep high schools across the US while living with a
                                                    host family. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item one">
                                        <h2 class="accordion-header" id="headingTwo6">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
                                                How do I get more information about the high school program?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo6" class="accordion-collapse collapse" aria-labelledby="headingTwo6"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Please email us at <a href="#"> admin@isphomestays.com</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item one">
                                        <h2 class="accordion-header" id="headingThree7">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree7" aria-expanded="false" aria-controls="collapseThree7">
                                                Groups, Executives, Interns, and all other programs?
                                            </button>
                                        </h2>
                                        <div id="collapseThree7" class="accordion-collapse collapse" aria-labelledby="headingThree7"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>Please contact our office at <a href="#"> admin@isphomestays.com </a> to assist you with your
                                                    request. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </section>
    <!-- blog carts section end -->


    <!-- faq end -->
@endsection
