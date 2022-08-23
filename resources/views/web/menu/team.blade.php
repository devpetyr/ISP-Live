@extends('web.layouts.main')
@section('page_title','ISP - Team')
@section('content')
    <!-- team start -->

    <!-- banner start -->
    <section class="banner-main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/Team.banner-img.jpg')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 ">
                                    <div class="banner-content">
                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                            <h1 class="wow zoomIn">isp Team</h1>
                                            <!--  <div class="banner-btn">-->
                                            <!--  <a href="javascript:void(0)" class="btn btn_badam">Start Here</a>-->
                                            <!--</div>-->
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

    <section class="sec-hostfamily">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                    <div class="host-content  wow fadeInLeft" data-wow-duration="2s">
                        <h4>International Staff</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero mauris, ultrices vel nisl
                            et, hendrerit interdum lacus. Etiam risus eros, volutpat ut aliquam vel, tempor non mi. Ut
                            molestie purus quis venenatis congue. Curabitur a dolor vulputate, posuere nulla at, maximus
                            urna. Donec posuere velit purus, at vestibulum nulla convallis nec. Nullam elementum ac
                            dolor ac gravida. Aenean eu porta odio. Mauris </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                    <div class="host-img  wow fadeInLeft" data-wow-duration="2s">
                        <img src="{{asset('web/images/Team.img-1.jpg')}}" alt="img here">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                    <div class="host-img  wow fadeInLeft" data-wow-duration="2s">
                        <img src="{{asset('web/images/Team.img-2.jpg')}}" alt="img here">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                    <div class="host-content  wow fadeInLeft" data-wow-duration="2s">
                        <h4>Exceptional Program
                            <br> Leaders</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero mauris, ultrices vel nisl
                            et, hendrerit interdum lacus. Etiam risus eros, volutpat ut aliquam vel, tempor non mi. Ut
                            molestie purus quis venenatis congue. Curabitur a dolor vulputate, posuere nulla at, maximus
                            urna. Donec posuere velit purus, at vestibulum nulla convallis nec. Nullam elementum ac
                            dolor ac gravida. Aenean eu porta odio. Mauris mollis, augue a cursus faucibus, justo mauris
                            sodales justo, eu pellentesque erat risus in nisl.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="leader">
        <div class="container">
            <div class="leadre-tittle">
                <h3>LeaderShip</h3>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                    <div class="host-img  wow fadeInLeft" data-wow-duration="2s">
                        <img src="{{asset('web/images/Team.img-3.jpg')}}" alt="img here">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                    <div class="host-content  wow fadeInLeft" data-wow-duration="2s">
                        <h4>Anna Beckerman</h4>
                        <h4>Vice President of Sales</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero mauris, ultrices vel nisl
                            et, hendrerit interdum lacus. Etiam risus eros, volutpat ut aliquam vel, tempor non mi. Ut
                            molestie purus quis venenatis congue. Curabitur a dolor vulputate, posuere nulla at, maximus
                            urna. Donec posuere velit purus, at vestibulum nulla convallis nec. Nullam elementum ac
                            dolor ac gravida. Aenean eu porta odio. Mauris mollis, augue a cursus faucibus, justo mauris
                            sodales justo, eu pellentesque erat risus in nisl.</p>
                        <div class="leader-btn">
                            <a href="#">See Amnas profile page</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                    <div class="host-img  wow fadeInLeft" data-wow-duration="2s">
                        <img src="{{asset('web/images/Team.test-4.png')}}" alt="img here" class="circle">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-6 centerCol">
                    <div class="host-content  wow fadeInLeft" data-wow-duration="2s">
                        <h4>Patrick Ziemnik</h4>
                        <h4>Customer Service Manager</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero mauris, ultrices vel nisl
                            et, hendrerit interdum lacus. Etiam risus eros, volutpat ut aliquam vel, tempor non mi. Ut
                            molestie purus quis venenatis congue. Curabitur a dolor vulputate, posuere nulla at, maximus
                            urna. Donec posuere velit purus, at vestibulum nulla convallis nec. Nullam elementum ac
                            dolor ac gravida. Aenean eu porta odio. Mauris mollis, augue a cursus faucibus, justo mauris
                            sodales justo, eu pellentesque erat risus in nisl.</p>
                        <div class="leader-btn">
                            <a href="#">See Amnas profile page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="team-testimonials">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xs-12 col-sm-10 col-md-12">
                    <div class="team-heading">
                        <h2>Team</h2>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="team-test-img">
                        <img src="{{asset('web/images/Team.test-1.png')}}" alt="">
                    </div>
                    <div class="team-test-content">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ab eius alias aspernatur
                            porro non ipsa nisi, adipisci est animi iste reprehenderit aut excepturi ex quos repellat
                            eligendi mollitia tenetur!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="team-test-img">
                        <img src="{{asset('web/images/Team.test-2.png')}}" alt="">
                    </div>
                    <div class="team-test-content">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ab eius alias aspernatur
                            porro non ipsa nisi, adipisci est animi iste reprehenderit aut excepturi ex quos repellat
                            eligendi mollitia tenetur!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="team-test-img">
                        <img src="{{asset('web/images/Team.test-3.png')}}" alt="">
                    </div>
                    <div class="team-test-content">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ab eius alias aspernatur
                            porro non ipsa nisi, adipisci est animi iste reprehenderit aut excepturi ex quos repellat
                            eligendi mollitia tenetur!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="team-test-img">
                        <img src="{{asset('web/images/Team.test-04.png')}}" alt="">
                    </div>
                    <div class="team-test-content">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ab eius alias aspernatur
                            porro non ipsa nisi, adipisci est animi iste reprehenderit aut excepturi ex quos repellat
                            eligendi mollitia tenetur!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="team-test-img">
                        <img src="{{asset('web/images/Team.test-5.png')}}" alt="">
                    </div>
                    <div class="team-test-content">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ab eius alias aspernatur
                            porro non ipsa nisi, adipisci est animi iste reprehenderit aut excepturi ex quos repellat
                            eligendi mollitia tenetur!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="team-test-img">
                        <img src="{{asset('web/images/Team.test-6.png')}}" alt="">
                    </div>
                    <div class="team-test-content">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ab eius alias aspernatur
                            porro non ipsa nisi, adipisci est animi iste reprehenderit aut excepturi ex quos repellat
                            eligendi mollitia tenetur!</p>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="team-test-img">
                        <img src="{{asset('web/images/Team.test-7.png')}}" alt="">
                    </div>
                    <div class="team-test-content">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ab eius alias aspernatur
                            porro non ipsa nisi, adipisci est animi iste reprehenderit aut excepturi ex quos repellat
                            eligendi mollitia tenetur!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="team-test-img">
                        <img src="{{asset('web/images/Team.test-8.png')}}" alt="">
                    </div>
                    <div class="team-test-content">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ab eius alias aspernatur
                            porro non ipsa nisi, adipisci est animi iste reprehenderit aut excepturi ex quos repellat
                            eligendi mollitia tenetur!</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-10 col-md-4 centerCol">
                    <div class="team-test-img">
                        <img src="{{asset('web/images/Team.test-9.png')}}" alt="">
                    </div>
                    <div class="team-test-content">
                        <h5>Lorem ipsum dolor sit amet.</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, ab eius alias aspernatur
                            porro non ipsa nisi, adipisci est animi iste reprehenderit aut excepturi ex quos repellat
                            eligendi mollitia tenetur!</p>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- slick slider start -->

    <!-- team end -->
@endsection
