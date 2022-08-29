@extends('web.layouts.main')
@section('page_title','ISP - Login')
@section('content')
    <!-- register form start -->
    <!-- banner start -->

    <section class="banner-main_slider inner_pages log">
        <div
            id="carouselExampleControls"
            class="carousel slide"
            data-bs-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="portal_baner">
                        <img
                            src="{{asset('web/images/log.png')}}"
                            class="img-fluid"
                            alt="..."
                        />
                    </div>
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8">
                                    <div class="banner-content">
                                        <div
                                            class="banner_text wow fadeInLeft"
                                            data-wow-duration="2s">
                                            <h1 class="wow zoomIn">Portal 
                                            </h1>
                                            <p>For help, please email admin@isphomestays.com or call 650-947-8879.</p>
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


    <section class="form_reg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="login_fild">
                        <h3>Login</h3>
                        <p>Please enter your email and password.</p>
                        
                        
                        
                        <form action="{{route('web_logged_in')}}" method="post">
                          <div class="row">
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                @csrf
                                <label>Email</label>
                                <div class="clear-fix"></div>
                                <input type="email" id="email" name="email" placeholder="Enter Your Email" required/>
                                @error('email')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <label>Password</label>
                                <div class="clear-fix"></div>
                                <input type="password" id="password" name="password" placeholder="Enter Your Password" required/>
                                @error('password')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <button type="submit" class="login_submit">Login</button>
                                </div>
                            </div>
                        </form>
                        
                        
                        
                        
                        
                        
                        
                        
                        <a href="{{route('web_register_portal')}}">Not a user? Register here.</a>
                        <a href="{{route('web_forgot_Password')}}">Forgot Password</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!--<section class="form_reg">-->
    <!--     <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-md-12 col-sm-12 col-xs-12">-->
    <!--                <div class="login_fild">-->
    <!--                    <h3>Login</h3>-->
    <!--                    <p>Please enter your email and password.</p>-->
    <!--                    <form action="{{route('web_logged_in')}}" method="post">-->
    <!--                        @csrf-->
    <!--                        <input type="email" id="email" name="email" placeholder="Email" required/>-->
    <!--                        @error('email')-->
    <!--                        <div class="alert alert-danger">-->
    <!--                            {{ $message }}-->
    <!--                        </div>-->
    <!--                        @enderror-->
    <!--                        <input type="password" id="password" name="password" placeholder="Password" required/>-->
    <!--                        @error('password')-->
    <!--                        <div class="alert alert-danger">-->
    <!--                            {{ $message }}-->
    <!--                        </div>-->
    <!--                        @enderror-->
    <!--                        <button type="submit" class="login_submit">Login</button>-->
    <!--                    </form>-->
    <!--                    <a href="{{route('web_register_portal')}}">Not a user? Register here.</a>-->
    <!--                    <a href="{{route('web_forgot_Password')}}">Forgot Password</a>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->

    <!-- register form end  -->
@endsection
