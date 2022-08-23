@extends('web.layouts.main')
@section('page_title','ISP - Register-Form')
@section('content')
    <!-- register form start -->
    <!-- banner start -->

    <section class="banner-main_slider">
        <div
            id="carouselExampleControls"
            class="carousel slide"
            data-bs-ride="carousel"
        >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="portal_baner">
                        <img
                            src="{{asset('web/images/Isp-portal.back-img.jpg')}}"
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
                                            data-wow-duration="2s"
                                        >
                                            <h1 class="wow zoomIn">Register Form
                                            </h1>
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
                        <h3>@if($role){{$role->user_role}}@endif Register Form</h3>
                        <form action="{{route('web_registration')}}" method="post">
                            @csrf
                            <input type="text" id="user_name" name="user_name" placeholder="User Name"/>
                            @error('user_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="email" id="email" name="email" placeholder="Email"/>
                            @error('email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="password" id="password" name="password" placeholder="Password"/>
                            @error('password')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   placeholder="Conform Password"
                            />
                            @error('password_confirmation')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <input type="hidden" id="user_role" name="user_role" value="@if($role){{$role->id}}@endif"
                            />
                            @error('user_role')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <button type="submit" class="reg_form">Register</button>
                            <p class="already_text">Already have an account.<a href="{{route('login')}}">Login Instead</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('css')
        <style>
            .reg_form {
                font-size: 15px;
                line-height: 20px;
                font-weight: 600;
                color: #fafcff;
                border-radius: 50px;
                border: 2px solid #ffffff;
                text-transform: capitalize;
                display: flex;
                height: 44px;
                width: 158px;
                align-items: center;
                justify-content: center;
                background: #15304e;
                margin: 30px auto 0;
            }
        </style>
    @endpush
    <!-- register form end  -->
@endsection
