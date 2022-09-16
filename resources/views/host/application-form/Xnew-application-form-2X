@extends('web.layouts.main')
@section('page_title','ISP - Student - Application Form')
@section('content')
    {{--    @if ($errors->any())--}}

    {{--        <style>--}}


    {{--        </style>--}}
    {{--        <div class="alert alert-danger">--}}
    {{--            <ul class="list-unstyled">--}}
    {{--                @foreach ($errors->all() as $error)--}}
    {{--                    <li>{{ $error }}</li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    @endif--}}
    <!-- banner start -->
    <section class="banner-main_slider">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('web/images/Blog.banner-img.jpg')}}" class="img-fluid" alt="...">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-8 col-md-8 ">
                                    <div class="banner-content">
                                        <div class="banner_text wow fadeInLeft" data-wow-duration="2s">
                                            <h1 class="wow zoomIn">Application Form</h1>
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

    <section class="payment-form">
        <div class="container-fluid">

            <form action="#" method="post" enctype="multipart/form-data">
                @csrf


                <div class="form-main2">
                    <!-- form new start-->
                    <main class="main-newfrm">
                        <article class=form-article>

                            <!--Section 1 Start-->
                            <section class="my-newfrm">
                                <div class="form_style  main-cardbox">

                                    <!--<h3> Choose Program</h3>-->
                                    <!--<div class="payment-ckbx">-->
                                    <!--    <label>-->
                                    <!--        <input type="radio" checked="checked" value="College Student"-->
                                    <!--               name="program">-->
                                    <!--        <span class="checkmark">College Student</span>-->
                                    <!--    </label>-->
                                    <!--    <label>-->
                                    <!--        <input type="radio" value="High School Student" name="program">-->
                                    <!--        <span class="checkmark">High School Student</span>-->
                                    <!--    </label>-->
                                    <!--    <label>-->
                                    <!--        <input type="radio" value="Junior High School Student" name="program">-->
                                    <!--        <span class="checkmark">Junior High School Student</span>-->
                                    <!--    </label>-->
                                    <!--</div>-->
                                    <!--<hr class="hr-style">-->

                                    

                                    <!--Host Details Start-->
                                    <h3>Host Details</h3>
                                    <div class="input-flds-main">
                                        <!--start-->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-user"></i>First
                                                        Name<span>*</span></label>
                                                    <input type="text" name="host_first_name">

                                                    {{--                                                    @error('first_name')--}}
                                                    <div class="alert alert-danger">
                                                        message
                                                        {{--                                                        {{ $message }}--}}
                                                    </div>
                                                    {{--                                                    @enderror--}}
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-user"></i>Last
                                                        Name<span>*</span></label>
                                                    <input type="text" name="host_last_name" required>

                                                    {{--                                                    @error('last_name')--}}
                                                    <div class="alert alert-danger">
                                                        message
                                                        {{--                                                        {{ $message }}--}}
                                                    </div>
                                                    {{--                                                    @enderror--}}
                                                </div>
                                            </div>
                                        </div>
                                        <!--end-->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!--<h6 class="birhdate">Birthdate:</h6>-->
                                                <!--<p class="birhdate">(To select a year quickly, click the year number-->
                                                <!--    (like-->
                                                <!--    "2020") and then-->
                                                <!--    the-->
                                                <!--    << symbol. To select a month quickly, click the month name.)</p>-->
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-calendar-days"></i>Date of Birth
                                                        <span>*</span></label><br>
                                                    <input type="date" name="host_dob" required>

                                                    {{--                                                    @error('dob')--}}
                                                    <div class="alert alert-danger">
                                                        date of birth required
                                                        {{--                                                        {{ $message }}--}}
                                                    </div>
                                                    {{--                                                    @enderror--}}
                                                </div>
                                            </div>
                                               <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-address"></i>Applicant cell phone <span>*</span></label>
                                                    <input type="number" name="host_cell_phone" required>

                                                    @error('host_cell_phone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            
                                         
                                        </div>

                                        <!--<div class="row">-->
                                          
                                            <div class="permanent-adress ">
                                        <!--<h3>Your Address</h3>-->
                                        <div class="row">
                                         



                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Applicant email<span>*</span></label>
                                                    <input type="email" name="host_email" required>

                                                    @error('host_email')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Applicant Occupation<span>*</span></label>
                                                    <input type="tel" name="host_occupation" required>

                                                    @error('host_occupation')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-address"></i>Employer <span>*</span></label>
                                                    <input type=" text" name="host_employer" required>

                                                    @error('host_employer')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Work Phone<span>*</span></label>
                                                    <input type="number" name="host_work_phone" required>

                                                    @error('host_work_phone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>

                                             <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Home Address<span>*</span></label>
                                                    <input type="text" name="host_home_address" required>

                                                    @error('host_work_phone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            </div>

                                        
                                        <!--</div>-->
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <h6 class="passport-exp"><i class="fa-solid fa-calendar-days"></i>Attach
                                                    Profile Photo
                                                    <span>*</span></h6>
                                                <div class="form-submit">
                                                    <input type="file" id="myFile" name="student_profile_photo">

                                                    @error('student_profile_photo')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="sav-btn" id="Btn1">
                                            <a href="#">Save</a>
                                        </div>
                                    

                                    <!--Student Details End-->
                                </div>
                                <!--Host Details End-->
                                
                            </section>
                            <!--Section 1 End-->

                            <section class="my-newfrm">
                                <!--Spouse/Partner Details start-->
                                <div class="form_style  main-cardbox">
                                   
                                    <h3>Spouse/Partner Details</h3>

                                  <div class="input-flds-main">
                                        <!--start-->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-user"></i>First
                                                        Name<span>*</span></label>
                                                    <input type="text" name="host_first_name">

                                                    {{--                                                    @error('first_name')--}}
                                                    <div class="text-danger">
                                                        message
                                                        {{--                                                        {{ $message }}--}}
                                                    </div>
                                                    {{--                                                    @enderror--}}
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-user"></i>Last
                                                        Name<span>*</span></label>
                                                    <input type="text" name="host_last_name" required>

                                                    {{--                                                    @error('last_name')--}}
                                                    <div class="alert alert-danger">
                                                        message
                                                        {{--                                                        {{ $message }}--}}
                                                    </div>
                                                    {{--                                                    @enderror--}}
                                                </div>
                                            </div>
                                        </div>
                                        <!--end-->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!--<h6 class="birhdate">Birthdate:</h6>-->
                                                <!--<p class="birhdate">(To select a year quickly, click the year number-->
                                                <!--    (like-->
                                                <!--    "2020") and then-->
                                                <!--    the-->
                                                <!--    << symbol. To select a month quickly, click the month name.)</p>-->
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-calendar-days"></i>Date of Birth
                                                        <span>*</span></label><br>
                                                    <input type="date" name="host_dob" required>

                                                    {{--                                                    @error('dob')--}}
                                                    <div class="alert alert-danger">
                                                        date of birth required
                                                        {{--                                                        {{ $message }}--}}
                                                    </div>
                                                    {{--                                                    @enderror--}}
                                                </div>
                                            </div>
                                               <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-address"></i>Applicant cell phone <span>*</span></label>
                                                    <input type=" number" name="host_cell_phone" required>

                                                    @error('host_cell_phone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            
                                         
                                        </div>

                                        <!--<div class="row">-->
                                          
                                            <div class="permanent-adress ">
                                        <div class="row">
                                         



                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Applicant email<span>*</span></label>
                                                    <input type="email" name="host_email" required>

                                                    @error('host_email')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Applicant Occupation<span>*</span></label>
                                                    <input type="tel" name="host_occupation" required>

                                                    @error('host_occupation')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-address"></i>Employer <span>*</span></label>
                                                    <input type=" text" name="host_employer" required>

                                                    @error('host_employer')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Work Phone<span>*</span></label>
                                                    <input type="number" name="host_work_phone" required>

                                                    @error('host_work_phone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>


                                        
                                        <!--</div>-->
                                        <!--<div class="row">-->
                                        <!--    <div class="col-md-12 col-sm-12 col-xs-12">-->
                                        <!--        <h6 class="passport-exp"><i class="fa-solid fa-calendar-days"></i>Attach-->
                                        <!--            Profile Photo-->
                                        <!--            <span>*</span></h6>-->
                                        <!--        <div class="form-submit">-->
                                        <!--            <input type="file" id="myFile" name="student_profile_photo">-->

                                        <!--            @error('student_profile_photo')-->
                                        <!--            <div class="alert alert-danger">-->
                                        <!--                {{ $message }}-->
                                        <!--            </div>-->
                                        <!--            @enderror-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                      
                                    
                                </div>
                                    <!--<div class="permanent-adress ">-->
                                    <!--    <h3>Your Address</h3>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-4 col-sm-4 col-xs-12">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-address"></i>Applicant cell phone <span>*</span></label>-->
                                    <!--                <input type=" number" name="partner_cell_phone" required>-->

                                    <!--                @error('partner_cell_phone')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->



                                    <!--        <div class="col-md-4 col-sm-4 col-xs-12">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-number"></i>Applicant email<span>*</span></label>-->
                                    <!--                <input type="email" name="partner_email" required>-->

                                    <!--                @error('partner_email')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4 col-sm-4 col-xs-12">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-number"></i>Applicant Occupation<span>*</span></label>-->
                                    <!--                <input type="text" name="partner_occupation" required>-->

                                    <!--                @error('partner_occupation')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-4 col-sm-4 col-xs-12">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-address"></i>Employer <span>*</span></label>-->
                                    <!--                <input type=" text" name="partner_employer" required>-->

                                    <!--                @error('partner_employer')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->



                                    <!--        <div class="col-md-4 col-sm-4 col-xs-12">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-number"></i>Work Phone<span>*</span></label>-->
                                    <!--                <input type="number" name="partner_work_phone" required>-->

                                    <!--                @error('partner_work_phone')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4 col-sm-4 col-xs-12">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-number"></i>Applicant Occupation<span>*</span></label>-->
                                    <!--                <input type="tel" name="host_occupation" required>-->

                                    <!--                @error('host_occupation')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->

                            
                                   
                          

                                            <div class="sav-btn">
                                                <a href="#">Save</a>
                                            </div>
 

                                </div>
                                 <!--Spouse/Partner Details end-->
                            </section>
                         
                            <section class="my-newfrm">
                                <!--adult Details start-->
                                <div class="form_style  main-cardbox">
                                    <!--First Adult Details Start-->
                                    <h3>Adult Details</h3>
                                     <div class="permanent-adress ">
                                        <h3>First Adult Details </h3>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>First Name<span>*</span></label>
                                                    <input type="text" name="adult1_first_name" required>

                                                    @error('adult1_first_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Last Name<span>*</span></label>
                                                    <input type="tel" name="adult1_last_name" required>

                                                    @error('adult1_last_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Work Phone <span>*</span></label>
                                                    <input type="number" name="adult1_work_phone" required>

                                                    @error('adult1_work_phone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Relationship to Host<span>*</span></label>
                                                    <input type="text" name="adult1_relation" required>

                                                    @error('adult1_relation')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Occupation<span>*</span></label>
                                                    <input type="tel" name="adult1_occupation" required>

                                                    @error('adult1_occupation')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                               <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Employer<span>*</span></label>
                                                    <input type="text" name="adult1_employer" required>

                                                    @error('adult1_employer')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                          <div class="row">
                                           
                                         <div class="permanent-adress ">
                                                <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Gender
                                                    <span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="adult1_male" checked="checked"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="adult1_female"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Female</span>
                                                    </label>
                                                   
                                                    @error('adult1_gender')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                    <!--First Adult Details End-->
                                    <!--Second Adult Details Start-->
                                    <div class="permanent-adress student">
                                        <!--Second Adult Details start-->
                                    <div class="permanent-adress ">
                                        <h3>Second Adult Details </h3>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>First Name<span>*</span></label>
                                                    <input type="text" name="adult2_first_name" required>

                                                    @error('adult2_first_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Last Name<span>*</span></label>
                                                    <input type="tel" name="adult2_last_name" required>

                                                    @error('adult2_last_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Work Phone <span>*</span></label>
                                                    <input type="number" name="adult2_work_phone" required>

                                                    @error('adult2_work_phone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                         <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Relationship to Host<span>*</span></label>
                                                    <input type="text" name="adult2_relation" required>

                                                    @error('adult2_relation')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Occupation<span>*</span></label>
                                                    <input type="tel" name="adult2_occupation" required>

                                                    @error('adult2_occupation')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                               <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Employer<span>*</span></label>
                                                    <input type="text" name="adult2_employer" required>

                                                    @error('adult2_employer')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        
                                          <div class="row">
                                           
                                         <div class="permanent-adress ">
                                                <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Gender
                                                    <span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="adult1_male" checked="checked"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="adult1_female"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Female</span>
                                                    </label>
                                                   
                                                    @error('adult1_gender')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                <!--Adult Details end-->

                                    </div>
                                    <!--Second Adult Details End-->



                                    <!--Lenght Of Homestay Start-->
                                    <!--<div class="permanent-adress homestay">-->
                                    <!--    <h3>Length of homestay:</h3>-->
                                    <!--    <p>-->
                                    <!--        Minimum contract length for Southern California students is 3 months.-->
                                    <!--    </p>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-4 col-sm-4 col-xs-12">-->
                                    <!--            <label class="label-color"><i class="fa-solid fa-calendar-days"></i>Length-->
                                    <!--                of-->
                                    <!--                Stay:<span>*</span>-->
                                    <!--            </label>-->
                                    <!--            <div class="payment-ckbx ">-->
                                    <!--                <label>-->
                                    <!--                    <input type="radio" value="2 Months" checked="checked"-->
                                    <!--                           name="length_of_stay">-->
                                    <!--                    <span class="checkmark">2 Months</span>-->
                                    <!--                </label>-->


                                    <!--                <label>-->
                                    <!--                    <input type="radio" value="3 Months" name="length_of_stay">-->
                                    <!--                    <span class="checkmark">3 Months</span>-->
                                    <!--                </label>-->


                                    <!--                <label>-->
                                    <!--                    <input type="radio" value="Other" name="length_of_stay">-->
                                    <!--                    <span class="checkmark">Other (please contact ISP)</span>-->
                                    <!--                </label>-->
                                    <!--            </div>-->
                                    <!--            @error('length_of_stay')-->
                                    <!--            <div class="alert alert-danger">-->
                                    <!--                {{ $message }}-->
                                    <!--            </div>-->
                                    <!--            @enderror-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4 col-sm-4 col-xs-12">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-graduation-cap"></i>Contract Start-->
                                    <!--                    Date:-->
                                    <!--                    <span>*</span></label>-->
                                    <!--                <input type="text" name="contract_start_date">-->

                                    <!--                @error('contract_start_date')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4 col-sm-4 col-xs-12">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-graduation-cap"></i>Contract End Date:-->
                                    <!--                    <span>*</span></label>-->
                                    <!--                <input type="text" name="contract_end_date">-->

                                    <!--                @error('contract_end_date')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--Lenght Of Homestay End-->

                                    <div class="row">

                                        <!--<div class="col-md-4 col-sm-4 col-xs-12">-->
                                            <!--English Level Start-->
                                            <!--<div class="permanent-adress ">-->
                                            <!--    <h6 class="pay-method"><i class="fa-solid fa-comment"></i>What is your-->
                                            <!--        English-->
                                            <!--        level?<span>*</span></h6>-->
                                            <!--    <div class="payment-ckbx three">-->

                                            <!--        <label>-->
                                            <!--            <input type="radio" value="high" checked="checked"-->
                                            <!--                   name="what_is_your_english_level">-->
                                            <!--            <span class="checkmark">High</span>-->
                                            <!--        </label>-->
                                            <!--        <label>-->
                                            <!--            <input type="radio" value="medium"-->
                                            <!--                   name="what_is_your_english_level">-->
                                            <!--            <span class="checkmark">Medium</span>-->
                                            <!--        </label>-->
                                            <!--        <input type="radio" value="low" name="what_is_your_english_level">-->
                                            <!--        <span class="checkmark">Low</span>-->


                                            <!--        @error('what_is_your_english_level')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--English Level End-->
                                        <!--</div>-->
                                        <!--<div class="col-md-4 col-sm-4 col-xs-12">-->
                                            <!--Children Under 8 Start-->
                                            <!--<div class="permanent-adress ">-->
                                            <!--    <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Do you accept-->
                                            <!--        children under 8-->
                                            <!--        years old in your host home?<span>*</span></h6>-->
                                            <!--    <div class="payment-ckbx three">-->
                                            <!--        <label>-->
                                            <!--            <input type="radio" value="yes" checked="checked"-->
                                            <!--                   name="do_you_accept_children_under_8_years_in_host_home">-->
                                            <!--            <span class="checkmark">Yes</span>-->
                                            <!--        </label>-->
                                            <!--        <label>-->
                                            <!--            <input type="radio" value="no"-->
                                            <!--                   name="do_you_accept_children_under_8_years_in_host_home">-->
                                            <!--            <span class="checkmark">No</span>-->
                                            <!--        </label>-->
                                            <!--        <input type="radio" value="does not matter"-->
                                            <!--               name="do_you_accept_children_under_8_years_in_host_home">-->
                                            <!--        <span class="checkmark">Does not matter</span>-->


                                            <!--        @error('do_you_accept_children_under_8_years_in_host_home')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--Children Under 8 End-->
                                        <!--<div class="col-md-4 col-sm-4 col-xs-12">-->
                                            <!--Allergic to animals Start-->
                                            <!--<div class="permanent-adress ">-->
                                            <!--    <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Are-->
                                            <!--        you-->
                                            <!--        allergic to-->
                                            <!--        animals?-->
                                            <!--        <span>*</span></h6>-->
                                            <!--    <div class="payment-ckbx three">-->

                                            <!--        <label>-->
                                            <!--            <input type="radio" value="yes" checked="checked"-->
                                            <!--                   name="are_you_allergic_to_animals">-->
                                            <!--            <span class="checkmark">Yes</span>-->
                                            <!--        </label>-->
                                            <!--        <label>-->
                                            <!--            <input type="radio" value="no"-->
                                            <!--                   name="are_you_allergic_to_animals">-->
                                            <!--            <span class="checkmark">No</span>-->
                                            <!--        </label>-->


                                            <!--        @error('are_you_allergic_to_animals')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->

                                            <!--    <div class="input-flds db">-->
                                            <!--        <label><i class="fa-solid fa-file-lines"></i>If yes, please indicate-->
                                            <!--            which</label><br>-->
                                            <!--        <input type="text" name="if_yes_please_indicate_animal">-->
                                            <!--        <label>(80% of American households have pets. You will restrict your-->
                                            <!--            host family-->
                                            <!--            placement options by saying no to animals)</label>-->

                                            <!--        @error('if_yes_please_indicate_animal')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        <!--</div>-->
                                        <!--Allergic to animals End-->
                                        <!--<div class="col-md-4 col-sm-4 col-xs-12">-->
                                            <!--Meal Options Start-->
                                        <!--    <div class="permanent-adress ">-->
                                        <!--        <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Please-->
                                        <!--            select a meal-->
                                        <!--            option-->
                                        <!--            <span>*</span></h6>-->
                                        <!--        <div class="payment-ckbx  three">-->

                                        <!--            <label>-->
                                        <!--                <input type="radio" value="2 meals per day" checked="checked"-->
                                        <!--                       name="meal_option">-->
                                        <!--                <span class="checkmark">2 meals per day (breakfast & dinner)</span>-->
                                        <!--            </label>-->
                                        <!--            <label>-->
                                        <!--                <input type="radio" value="No meals" name="meal_option">-->
                                        <!--                <span class="checkmark">No meals</span>-->
                                        <!--            </label>-->


                                        <!--            @error('meal_option')-->
                                        <!--            <div class="alert alert-danger">-->
                                        <!--                {{ $message }}-->
                                        <!--            </div>-->
                                        <!--            @enderror-->
                                        <!--        </div>-->

                                        <!--        <div class="input-flds">-->
                                        <!--            <label><i class="fa-solid fa-file-lines"></i>Please list food-->
                                        <!--                allergies<span>*</span></label>-->
                                        <!--            <textarea placeholder="Enter Text Here ..." name="food_restrictions"-->
                                        <!--                      required></textarea>-->

                                        <!--            @error('food_restrictions')-->
                                        <!--            <div class="alert alert-danger">-->
                                        <!--                {{ $message }}-->
                                        <!--            </div>-->
                                        <!--            @enderror-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--Meal Options End-->
                                        <!--<div class="col-md-4 col-sm-4 col-xs-12">-->
                                            <!--Smoke Section Start-->
                                        <!--    <div class="permanent-adress ">-->
                                        <!--        <div class="smoke-flex">-->
                                        <!--            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Do-->
                                        <!--                you-->
                                        <!--                smoke?-->
                                        <!--                <span>*</span></h6>-->
                                        <!--            <p>(there is a no smoking policy in all host homes)</p>-->
                                        <!--        </div>-->
                                        <!--        <div class="payment-ckbx three">-->

                                        <!--            <label>-->
                                        <!--                <input type="radio" value="yes" checked="checked"-->
                                        <!--                       name="do_you_smoke">-->
                                        <!--                <span class="checkmark">Yes</span>-->
                                        <!--            </label>-->
                                        <!--            <label>-->
                                        <!--                <input type="radio" value="no" name="do_you_smoke">-->
                                        <!--                <span class="checkmark">No</span>-->
                                        <!--            </label>-->


                                        <!--            @error('do_you_smoke')-->
                                        <!--            <div class="alert alert-danger">-->
                                        <!--                {{ $message }}-->
                                        <!--            </div>-->
                                        <!--            @enderror-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--Smoke Section End-->
                                        <!--<div class="col-md-4 col-sm-4 col-xs-12">-->
                                            <!--Will You Have A Car Start-->
                                        <!--    <div class="permanent-adress ">-->
                                        <!--        <h6 class="pay-method"><i class="fa-solid fa-car"></i></i>Will you have-->
                                        <!--            a-->
                                        <!--            car?<span>*</span>-->
                                        <!--        </h6>-->
                                        <!--        <div class="payment-ckbx three">-->

                                        <!--            <label>-->
                                        <!--                <input type="radio" value="yes" checked="checked"-->
                                        <!--                       name="will_you_have_a_car">-->
                                        <!--                <span class="checkmark">Yes</span>-->
                                        <!--            </label>-->
                                        <!--            <label>-->
                                        <!--                <input type="radio" value="no" name="will_you_have_a_car">-->
                                        <!--                <span class="checkmark">No</span>-->
                                        <!--            </label>-->


                                        <!--            @error('will_you_have_a_car')-->
                                        <!--            <div class="alert alert-danger">-->
                                        <!--                {{ $message }}-->
                                        <!--            </div>-->
                                        <!--            @enderror-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!--Will You Have A Car End-->
                                        <div class="sav-btn">
                                            <a href="#">Save</a>
                                        </div>

                                    </div>
                                </div>
                            </section>
                            <!--Section 2 Second Half End-->
                            <!--Section 2 End-->

                            <!--Section 3 Start-->
                            <section class="my-newfrm ">
                                <div class="form_style main-cardbox">
                                      
                                      <h3>Childs Details</h3>
                                      
                                      
                                       <!--First Child Details start-->
                                    <div class="permanent-adress ">
                                        <h3>First Child Details </h3>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>First Name<span>*</span></label>
                                                    <input type="text" name="adult2_first_name" required>

                                                    @error('adult2_first_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Last Name<span>*</span></label>
                                                    <input type="tel" name="adult2_last_name" required>

                                                    @error('adult2_last_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Date of Birth<span>*</span></label>
                                                    <input type="date" name="child1_dob" required>

                                                    @error('child1_dob')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                     
                                        
                                        
                                          <div class="row">
                                           
                                         <div class="permanent-adress ">
                                                <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Gender
                                                    <span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="adult1_male" checked="checked"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="adult1_female"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Female</span>
                                                    </label>
                                                   
                                                    @error('adult1_gender')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                 <!--First Child Details end-->
                                 
                                 
                                   <!--second Child Details start-->
                                    <div class="permanent-adress ">
                                        <h3>Second Child Details </h3>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>First Name<span>*</span></label>
                                                    <input type="text" name="adult2_first_name" required>

                                                    @error('adult2_first_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Last Name<span>*</span></label>
                                                    <input type="tel" name="adult2_last_name" required>

                                                    @error('adult2_last_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Date of Birth<span>*</span></label>
                                                    <input type="date" name="child1_dob" required>

                                                    @error('child1_dob')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                     
                                        
                                        
                                          <div class="row">
                                           
                                         <div class="permanent-adress ">
                                                <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Gender
                                                    <span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="adult1_male" checked="checked"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="adult1_female"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Female</span>
                                                    </label>
                                                   
                                                    @error('adult1_gender')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                 <!--second Child Details end-->
                                 
                                   <!--third Child Details start-->
                                    <div class="permanent-adress ">
                                        <h3>Third Child Details </h3>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>First Name<span>*</span></label>
                                                    <input type="text" name="adult2_first_name" required>

                                                    @error('adult2_first_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Last Name<span>*</span></label>
                                                    <input type="tel" name="adult2_last_name" required>

                                                    @error('adult2_last_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Date of Birth<span>*</span></label>
                                                    <input type="date" name="child1_dob" required>

                                                    @error('child1_dob')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                     
                                        
                                        
                                          <div class="row">
                                           
                                         <div class="permanent-adress ">
                                                <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Gender
                                                    <span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="adult1_male" checked="checked"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="adult1_female"
                                                               name="adult1_gender">
                                                        <span class="checkmark">Female</span>
                                                    </label>
                                                   
                                                    @error('adult1_gender')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                 <!--third Child Details end-->
                                 
                                    <!--<h3>Agent Details</h3>-->
                                    <!--<div class="using-agent">-->
                                    <!--    <h3 class="method">I am using an Agent:</h3>-->
                                    <!--    <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Using-->
                                    <!--        Agent:-->
                                    <!--        <span>*</span>-->
                                    <!--    </h6>-->
                                    <!--    <div class="payment-ckbx">-->
                                    <!--        <label>-->
                                    <!--            <input type="radio" value="no" checked="checked" name="using_agent">-->
                                    <!--            <span class="checkmark">No</span>-->
                                    <!--        </label>-->
                                    <!--        <label>-->
                                    <!--            <input type="radio" value="yes" name="using_agent">-->
                                    <!--            <span class="checkmark">Yes</span>-->
                                    <!--        </label>-->

                                    <!--        @error('using_agent')-->
                                    <!--        <div class="alert alert-danger">-->
                                    <!--            {{ $message }}-->
                                    <!--        </div>-->
                                    <!--        @enderror-->
                                    <!--    </div>-->
                                    <!--    {{--                            <h4>If you are using an Agent, please provide information about the Agent.</h4>--}}-->
                                    <!--    {{--                            <h3>Agent Name & Address:</h3>--}}-->


                                    <!--    {{--                            <div class="input-flds before">--}}-->
                                    <!--    {{--                                <label><i class="fa-solid fa-user"></i>Agency Name</label>--}}-->
                                    <!--    {{--                                <select class="yd-select " name="agency_name" id="agency_name" placeholder=""--}}-->
                                    <!--    {{--                                        tabindex="1"--}}-->
                                    <!--    {{--                                        data-parsley-group="block-0">--}}-->

                                    <!--    {{--                                    <option selected="" value="">Please Select Agency Name</option>--}}-->
                                    <!--    {{--                                    @foreach ($agencies as $agency)--}}-->
                                    <!--    {{--                                        <option value="{{ $agency->id }}">--}}-->
                                    <!--    {{--                                            {{ $agency->agency_name }}--}}-->
                                    <!--    {{--                                        </option>--}}-->
                                    <!--    {{--                                    @endforeach--}}-->
                                    <!--    {{--                                </select>--}}-->
                                    <!--    {{--                            </div>--}}-->
                                    <!--    {{--                            @error('agency_name')--}}-->
                                    <!--    {{--                            <div class="alert alert-danger">--}}-->
                                    <!--    {{--                                {{ $message }}--}}-->
                                    <!--    {{--                            </div>--}}-->
                                    <!--    {{--                            @enderror--}}-->
                                    <!--    {{--                            <div class="agency-not dbl">--}}-->
                                    <!--    {{--                                <h6>For Agents not on the list:</h6>--}}-->
                                    <!--    {{--                                <div class="input-flds">--}}-->
                                    <!--    {{--                                    <label><i class="fa-solid fa-user"></i>Agency Name</label>--}}-->
                                    <!--    {{--                                    <input type="text" name="agency_name_not_on_the_list">--}}-->
                                    <!--    {{--                                </div>--}}-->
                                    <!--    {{--                            </div>--}}-->
                                    <!--    {{--                            @error('agency_name_not_on_the_list')--}}-->
                                    <!--    {{--                            <div class="alert alert-danger">--}}-->
                                    <!--    {{--                                {{ $message }}--}}-->
                                    <!--    {{--                            </div>--}}-->
                                    <!--    {{--                            @enderror--}}-->

                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-4">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-user"></i>Agency Name</label>-->
                                    <!--                <input type="text" name="agency_name">-->

                                    <!--                @error('agency_name')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-user"></i>Name of Agency Contact-->
                                    <!--                    Person</label>-->
                                    <!--                <input type="text" name="agency_contact_person">-->

                                    <!--                @error('agency_contact_person')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4">-->
                                    <!--            <div class="using-agent">-->

                                    <!--                <div class="input-flds">-->
                                    <!--                    <label><i class="fa-solid fa-phone-flip"></i>Agent Phone Number-->
                                    <!--                        (with-->
                                    <!--                        country-->
                                    <!--                        code)</label>-->
                                    <!--                    <input type="text" name="agent_phone_number">-->

                                    <!--                    @error('agent_phone_number')-->
                                    <!--                    <div class="alert alert-danger">-->
                                    <!--                        {{ $message }}-->
                                    <!--                    </div>-->
                                    <!--                    @enderror-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="row">-->
                                    <!--        <div class="col-md-4">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-envelope"></i>Agent's Email</label>-->
                                    <!--                <input type="text" name="agent_email">-->

                                    <!--                @error('agent_email')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-phone-flip"></i>Agent's-->
                                    <!--                    WeChat</label>-->
                                    <!--                <input type="text" name="agent_wechat_number">-->

                                    <!--                @error('agent_wechat_number')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-phone-flip"></i>Agent's-->
                                    <!--                    Line</label>-->
                                    <!--                <input type="text" name="agent_line_number">-->

                                    <!--                @error('agent_line_number')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="col-md-4">-->
                                    <!--            <div class="input-flds">-->
                                    <!--                <label><i class="fa-solid fa-phone-flip"></i>Agent's-->
                                    <!--                    Whatsapp</label>-->
                                    <!--                <input type="text" name="agent_whatsapp_number">-->

                                    <!--                @error('agent_whatsapp_number')-->
                                    <!--                <div class="alert alert-danger">-->
                                    <!--                    {{ $message }}-->
                                    <!--                </div>-->
                                    <!--                @enderror-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--        <div class="sav-btn">-->
                                    <!--            <a href="#">Save</a>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                      <div class="sav-btn">
                                            <a href="#">Save</a>
                                        </div>
                                </div>
                            </section>
                            <!--Section 3 End-->

                            <!--Section 4 Start-->
                            <section class="my-newfrm">
                                <div class="form_style main-cardbox">
                                    <div class="food-restrictions">
                                        <h3>Pets Details</h3>

                                        <!--<h3>Do you have any pets?</h3>-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="permanent-adress ">
                                                    <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Do you have any pets? 
                                                        <span>*</span></h6>
                                                    <div class="payment-ckbx three">
    
                                                        <label>
                                                            <input type="radio" value="yes" checked="checked"
                                                                   name="pets_info">
                                                            <span class="checkmark">Yes</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="no"
                                                                   name="pets_info">
                                                            <span class="checkmark">No</span>
                                                        </label>
                                                       
                                                        @error('pets_info')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="permanent-adress ">
                                                    <h6 class="pay-method"><i class="fa-solid fa-comment"></i>If yes, please provide the following information for each 
                                                        <span>*</span></h6>
                                                    <div class="payment-ckbx three">
    
                                                        <label>
                                                            <input type="radio" value="Inside" checked="checked"
                                                                   name="pets_info_detail">
                                                            <span class="checkmark">Inside  </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="Outside"
                                                                   name="pets_info_detail">
                                                            <span class="checkmark">Outside  </span>
                                                        </label>
                                                         <label>
                                                            <input type="radio" value="Both"
                                                                   name="pets_info_detail">
                                                            <span class="checkmark">Both  </span>
                                                        </label>
                                                       
                                                        @error('pets_info_detail')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <h3>House Details</h3>
                                            <div class="col-md-6">
                                                <div class="permanent-adress ">
                                                    <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Please select 
                                                        <span>*</span></h6>
                                                    <div class="payment-ckbx three">
    
                                                        <label>
                                                            <input type="radio" value="House" checked="checked"
                                                                   name="home_type">
                                                            <span class="checkmark">House</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="Apartment/Townhome/Condominium"
                                                                   name="home_type">
                                                            <span class="checkmark">Apartment/Townhome/Condominium  </span>
                                                        </label>
                                                       
                                                        @error('home_type')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="permanent-adress ">
                                                    <h6 class="pay-method"><i class="fa-solid fa-comment"></i>How many private bedrooms do you have for students?  
                                                        <span>*</span></h6>
                                                    <div class="payment-ckbx three">
    
                                                        <label>
                                                            <input type="radio" value="1" checked="checked"
                                                                   name="bedrooms_details">
                                                            <span class="checkmark">1</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="2"
                                                                   name="bedrooms_details">
                                                            <span class="checkmark">2</span>
                                                        </label>
                                                         <label>
                                                            <input type="radio" value="3"
                                                                   name="bedrooms_details">
                                                            <span class="checkmark">3</span>
                                                        </label>
                                                       
                                                        @error('bedrooms_details')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            
                                            <!--<div class="col-md-6">-->
                                            <!--    <div class="input-flds">-->
                                            <!--        <label><i class="fa-solid fa-file-lines"></i>Specific-->
                                            <!--            Needs<span>*</span>(0)</label>-->
                                            <!--        <textarea placeholder="Enter Text Here ..." name="specific_needs"-->
                                            <!--                  required></textarea>-->

                                            <!--        @error('specific_needs')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-6">-->
                                            <!--    <div class="input-flds">-->
                                            <!--        <label><i class="fa-solid fa-file-lines"></i>Please describe your-->
                                            <!--            hobbies and-->
                                            <!--            interests:<span>*</span>(0)</label>-->
                                            <!--        <textarea placeholder="Enter Text Here ..."-->
                                            <!--                  name="hobbies_and_interest"-->
                                            <!--                  required></textarea>-->

                                            <!--        @error('hobbies_and_interest')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                        </div>
                                        <h3>Student Preference Details</h3>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="permanent-adress ">
                                                    <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Gender 
                                                        <span>*</span></h6>
                                                    <div class="payment-ckbx three">
    
                                                        <label>
                                                            <input type="radio" value="male_student" checked="checked"
                                                                   name="male_student">
                                                            <span class="checkmark">Male Student</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="female_student"
                                                                   name="female_student">
                                                            <span class="checkmark">Female Student</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="no_preference"
                                                                   name="female_student">
                                                            <span class="checkmark">No Preference</span>
                                                        </label>
                                                       
                                                        @error('female_student')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="permanent-adress ">
                                                    <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Meals 
                                                        <span>*</span></h6>
                                                    <div class="payment-ckbx three">
    
                                                        <label>
                                                            <input type="radio" value="meals_student" checked="checked"
                                                                   name="meals_detail">
                                                            <span class="checkmark">Meals Student    </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="no_meals_student"
                                                                   name="meals_detail">
                                                            <span class="checkmark">No Meals Student    </span>
                                                        </label>
                                                         <label>
                                                            <input type="radio" value="no_preference"
                                                                   name="meals_detail">
                                                            <span class="checkmark">No Preference (please note that most ISP students are on the meal plan)  </span>
                                                        </label>
                                                       
                                                        @error('meals_detail')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <h5>SCHOOLS INFORMATION</h5>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-flds db">
                                                    <label><i class="fa-solid fa-file-lines"></i>What schools are nearest to your home? (include high schools and colleges)</label><br>
                                                    <input type="text" name="first_school_details">

                                                    @error('first_school_details')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-flds db">
                                                    <!--<label><i class="fa-solid fa-file-lines"></i>What schools are nearest to your home? (include high schools and colleges)</label><br>-->
                                                    <input type="text" name="second_school_details">

                                                    @error('second_school_details')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-flds db">
                                                    <!--<label><i class="fa-solid fa-file-lines"></i>What schools are nearest to your home? (include high schools and colleges)</label><br>-->
                                                    <input type="text" name="third_school_details">

                                                    @error('third_school_details')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <!--<div class="col-md-6">-->
                                            <!--    <div class="input-flds">-->
                                            <!--        <label><i class="fa-solid fa-file-lines"></i>Please describe your-->
                                            <!--            personality:<span>*</span>(0)</label>-->
                                            <!--        <textarea placeholder="Enter Text Here ..."-->
                                            <!--                  name="describe_your_personality"-->
                                            <!--                  required></textarea>-->

                                            <!--        @error('describe_your_personality')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-6">-->
                                            <!--    <div class="input-flds">-->
                                            <!--        <label><i class="fa-solid fa-file-lines"></i>Please describe your-->
                                            <!--            family:<span>*</span>(0)</label>-->
                                            <!--        <textarea placeholder="Enter Text Here ..."-->
                                            <!--                  name="describe_your_family"-->
                                            <!--                  required></textarea>-->

                                            <!--        @error('describe_your_family')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-6">-->
                                            <!--    <div class="input-flds">-->
                                            <!--        <label><i class="fa-solid fa-file-lines"></i>Please describe your-->
                                            <!--            travel-->
                                            <!--            experience:<span>*</span>(0)</label>-->
                                            <!--        <textarea placeholder="Enter Text Here ..."-->
                                            <!--                  name="describe_your_travel_experience"-->
                                            <!--                  required></textarea>-->

                                            <!--        @error('describe_your_travel_experience')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!--<div class="col-md-6">-->
                                            <!--    <div class="input-flds">-->
                                            <!--        <label><i class="fa-solid fa-file-lines"></i>Please write a greeting-->
                                            <!--            to-->
                                            <!--            your host:<span>*</span>(0)</label>-->
                                            <!--        <textarea placeholder="Enter Text Here ..."-->
                                            <!--                  name="write_greeting_to_host"-->
                                            <!--                  required></textarea>-->

                                            <!--        @error('write_greeting_to_host')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            
                                            <div class="sav-btn">
                                                <a href="#">Save</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--Section 4 End-->

                            <!--Section 5 Start-->

                            <section class="my-newfrm">
                                <div class="form_style  main-cardbox">
                                    <div class="medical-info">
                                        <h3>Personal Information</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Has anyone residing in the home been convicted of a felony?<span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="yes" checked="checked"
                                                               name="anyone_residing_in_the_home">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"
                                                               name="anyone_residing_in_the_home">
                                                        <span class="checkmark">No</span>
                                                    </label>


                                                    @error('anyone_residing_in_the_home')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Do you agree to have a criminal background check for each person residing in your home over 18 years of age?<span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="yes" checked="checked"
                                                               name="criminal_background_check">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"
                                                               name="criminal_background_check">
                                                        <span class="checkmark">No</span>
                                                    </label>


                                                    @error('criminal_background_check')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Does anyone in your home smoke?<span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="yes" checked="checked"
                                                               name="anyone_in_your_home_smoke">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"
                                                               name="anyone_in_your_home_smoke">
                                                        <span class="checkmark">No</span>
                                                    </label>


                                                    @error('anyone_in_your_home_smoke')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Do you have high-speed wireless Internet?<span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="yes" checked="checked"
                                                               name="high_speed_wireless_Internet">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"
                                                               name="high_speed_wireless_Internet">
                                                        <span class="checkmark">No</span>
                                                    </label>


                                                    @error('high_speed_wireless_Internet')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>
                                                    Has everyone in the home over 18-years old received a WHO approved COVID Vaccine and booster shot?  
                                                    <span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="yes" checked="checked"
                                                               name="WHO_approved_COVID_Vaccine">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"
                                                               name="WHO_approved_COVID_Vaccine">
                                                        <span class="checkmark">No</span>
                                                    </label>
                                                </div>

                                                @error('WHO_approved_COVID_Vaccine')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            
                                        </div>
                                      
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-flds db">
                                                    <label><i class="fa-solid fa-file-lines"></i>Please describe you and your family's interests:</label><br>
                                                    <input type="text" name="family_interests">

                                                    @error('family_interests')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="input-flds db">
                                                    <label><i class="fa-solid fa-calendar-days"></i>Will you regularly have breakfast food available and prepare dinner for your student? What types of meals 
                                                    are typically prepared in your home and how often?:</label><br>
                                                    <input type="text" name="breakfast_food_available_and_prepare_dinner" required>

                                                    @error('breakfast_food_available_and_prepare_dinner')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-flds db">
                                                    <label><i class="fa-solid fa-file-lines"></i>How will you integrate your student into your daily and weekly activities?</label><br>
                                                    <input type="text" name="your_daily_and_weekly_activities">

                                                    @error('your_daily_and_weekly_activities')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                                </div>
                                            <!--    <div class="col-md-6">-->
                                            <!--    <div class="input-flds db">-->
                                            <!--        <label><i class="fa-solid fa-calendar-days"></i>Will you regularly have breakfast food available and prepare dinner for your student? What types of meals -->
                                            <!--        are typically prepared in your home and how often?:</label><br>-->
                                            <!--        <input type="text" name="breakfast_food_available_and_prepare_dinner" required>-->

                                            <!--        @error('breakfast_food_available_and_prepare_dinner')-->
                                            <!--        <div class="alert alert-danger">-->
                                            <!--            {{ $message }}-->
                                            <!--        </div>-->
                                            <!--        @enderror-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            
                                        </div>
                                        <div class="sav-btn">
                                                <a href="#">Save</a>
                                            </div>
                                    </div>
                                </div>
                            </section>
                            <!--Section 5 End-->

                            <!--Section 6 Start-->
                            <section class="my-newfrm">
                                <div class="form_style  main-cardbox">
                                    <div class="airport">
                                        <h3>Please list two emergency contacts:</h3>
                                        <p>1)</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="driver-dropdown">
                                                    <div class="input-flds before">
                                                        <label><i class="fa-solid fa-car"></i>Name:</label><br>
                                                        <input type="text" name="emergency_contact_name1">
                                                        @error('emergency_contact_name1')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="driver-dropdown">
                                                    <div class="input-flds before">
                                                        <label><i class="fa-solid fa-car"></i>Email:</label><br>
                                                        <input type="email" name="emergency_contact_email1">
                                                        @error('emergency_contact_email1')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="driver-dropdown">
                                                    <div class="input-flds before">
                                                        <label><i class="fa-solid fa-car"></i>Phone Number:</label><br>
                                                        <input type="number" name="emergency_contact_number1">
                                                        @error('emergency_contact_number1')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p>2)</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="driver-dropdown">
                                                    
                                                    <div class="input-flds before">
                                                        <label><i class="fa-solid fa-car"></i>Name:</label><br>
                                                        <input type="text" name="emergency_contact_name2">
                                                        @error('emergency_contact_name2')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-md-6">
                                                <div class="driver-dropdown">
                                                    <div class="input-flds before">
                                                        <label><i class="fa-solid fa-car"></i>Email:</label><br>
                                                        <input type="email" name="emergency_contact_email2">
                                                        @error('emergency_contact_email2')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="driver-dropdown">
                                                    <div class="input-flds before">
                                                        <label><i class="fa-solid fa-car"></i>Phone Number:</label><br>
                                                        <input type="number" name="emergency_contact_number2">
                                                        @error('emergency_contact_number2')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                            
                                            <div class="sav-btn">
                                                <a href="#">Save</a>
                                            </div>
                                    </div>
                                </div>
                            </section>
                            <!--Section 6 End-->
                            <!--Section 7 Start-->
                            <!--<section class="my-newfrm">-->
                            <!--    <div class="form_style  main-cardbox">-->
                                    <!--<div class="form_style five">-->
                            <!--        <div class="refundable-payment">-->
                            <!--            <div class="row">-->
                            <!--                <h5>Payment Form</h5>-->
                            <!--                <h6 class="pay-method"><i-->
                            <!--                            class="fa-solid fa-circle-question"></i>Payment:<span>*</span>-->
                            <!--                </h6>-->

                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="payment-ckbx three">-->
                            <!--                        <label>-->
                            <!--                            <input type="radio" value="Credit Card" checked="checked"-->
                            <!--                                   name="payment_method">-->
                            <!--                            <span class="checkmark">Credit Card</span>-->
                            <!--                        </label>-->
                            <!--                        <label>-->
                            <!--                            <input type="radio" value="Check or Money Order"-->
                            <!--                                   name="payment_method">-->
                            <!--                            <span class="checkmark">Check or Money Order (send payment to the ISP main office)</span>-->
                            <!--                        </label>-->

                            <!--                        @error('payment_method')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-user"></i>Student First-->
                            <!--                            Name<span>*</span></label><br>-->
                            <!--                        <input type="text" name="card_holder_student_first_name" required>-->
                            <!--                        {{--                                <input type="text" name="student_name_1" required>--}}-->

                            <!--                        @error('card_holder_student_first_name')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-user"></i>Student Last-->
                            <!--                            Name<span>*</span></label><br>-->
                            <!--                        <input type="text" name="card_holder_student_last_name" required>-->

                            <!--                        @error('card_holder_student_last_name')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-user"></i>Cardholder First-->
                            <!--                            Name<span>*</span></label><br>-->
                            <!--                        <input type="text" name="cardholder_first_name" required>-->

                            <!--                        @error('cardholder_first_name')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-user"></i>Cardholder Last-->
                            <!--                            Name<span>*</span></label><br>-->
                            <!--                        <input type="text" name="cardholder_last_name" required>-->

                            <!--                        @error('cardholder_last_name')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-user"></i>Cardholder-->
                            <!--                            Address<span>*</span></label><br>-->
                            <!--                        <input type="text" name="cardholder_address">-->
                            <!--                        {{--                                <input type="text" name="cardholder_street_address_line_1">--}}-->

                            <!--                        @error('cardholder_address')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds">-->
                            <!--                        <label><i class="fa-solid fa-address-card"></i>Cardholder-->
                            <!--                            City<span>*</span></label>-->
                            <!--                        <input type="text" name="cardholder_city" required>-->

                            <!--                        @error('cardholder_city')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment before">-->
                            <!--                        <label><i class="fa-solid fa-address-card"></i>Cardholder-->
                            <!--                            State</label><br>-->
                            <!--                        <select class="yd-select " name="cardholder_state"-->
                            <!--                                id="cardholder_state"-->
                            <!--                                placeholder=""-->
                            <!--                                tabindex="1" data-parsley-group="block-0">-->

                            <!--                            <option value=""></option>-->
                            <!--                            <option value="Alaska"> Alaska</option>-->
                            <!--                            <option value="Arizona"> Arizona</option>-->
                            <!--                            <option value="Arkansas"> Arkansas</option>-->
                            <!--                            <option value="California"> California</option>-->
                            <!--                            <option value="Colorado"> Colorado</option>-->
                            <!--                            <option value="Connecticut"> Connecticut</option>-->
                            <!--                            <option value="Delaware"> Delaware</option>-->
                            <!--                            <option value="Florida"> Florida</option>-->
                            <!--                            <option value="Georgia"> Georgia</option>-->
                            <!--                            <option value="Hawaii"> Hawaii</option>-->
                            <!--                            <option value="Idaho"> Idaho</option>-->
                            <!--                            <option value="Illinois"> Illinois</option>-->
                            <!--                            <option value="Indiana"> Indiana</option>-->
                            <!--                            <option value="Iowa"> Iowa</option>-->
                            <!--                            <option value="Kansas"> Kansas</option>-->
                            <!--                            <option value="Kentucky"> Kentucky</option>-->
                            <!--                            <option value="Louisiana"> Louisiana</option>-->
                            <!--                            <option value="Maine"> Maine</option>-->
                            <!--                            <option value="Maryland"> Maryland</option>-->
                            <!--                            <option value="Massachusetts"> Massachusetts</option>-->
                            <!--                            <option value="Michigan"> Michigan</option>-->
                            <!--                            <option value="Minnesota"> Minnesota</option>-->
                            <!--                            <option value="Mississippi"> Mississippi</option>-->
                            <!--                            <option value="Missouri"> Missouri</option>-->
                            <!--                            <option value="Montana"> Montana</option>-->
                            <!--                            <option value="Nebraska"> Nebraska</option>-->
                            <!--                            <option value="Nevada"> Nevada</option>-->
                            <!--                            <option value="New Hampshire"> New Hampshire</option>-->
                            <!--                            <option value="New Jersey"> New Jersey</option>-->
                            <!--                            <option value="New Mexico"> New Mexico</option>-->
                            <!--                            <option value="New York"> New York</option>-->
                            <!--                            <option value="North Carolina"> North Carolina</option>-->
                            <!--                            <option value="North Dakota"> North Dakota</option>-->
                            <!--                            <option value="Ohio"> Ohio</option>-->
                            <!--                            <option value="Oklahoma"> Oklahoma</option>-->
                            <!--                            <option value="Oregon"> Oregon</option>-->
                            <!--                            <option value="Pennsylvania"> Pennsylvania</option>-->
                            <!--                            <option value="Rhode Island"> Rhode Island</option>-->
                            <!--                            <option value="South Carolina"> South Carolina</option>-->
                            <!--                            <option value="South Dakota"> South Dakota</option>-->
                            <!--                            <option value="Tennessee"> Tennessee</option>-->
                            <!--                            <option value="Texas"> Texas</option>-->
                            <!--                            <option value="Utah"> Utah</option>-->
                            <!--                            <option value="Vermont"> Vermont</option>-->
                            <!--                            <option value="Virginia"> Virginia</option>-->
                            <!--                            <option value="Washington"> Washington</option>-->
                            <!--                            <option value="West Virginia"> West Virginia</option>-->
                            <!--                            <option value="Wisconsin"> Wisconsin</option>-->
                            <!--                            <option value="Wyoming"> Wyoming</option>-->
                            <!--                            <option value="Washington DC"> Washington DC</option>-->
                            <!--                            <option value="Puerto Rico"> Puerto Rico</option>-->
                            <!--                            <option value="U.S. Virgin Islands"> U.S. Virgin Islands-->
                            <!--                            </option>-->
                            <!--                            <option value="American Samoa"> American Samoa</option>-->
                            <!--                            <option value="Guam"> Guam</option>-->
                            <!--                            <option value="Northern Mariana Islands"> Northern Mariana-->
                            <!--                                Islands-->
                            <!--                            </option>-->
                            <!--                        </select>-->
                            <!--                        @error('cardholder_state')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-address-card"></i>Cardholder Postal /-->
                            <!--                            Zip-->
                            <!--                            Code<span>*</span></label><br>-->
                            <!--                        <input type="text" name="cardholder_zipcode" required>-->

                            <!--                        @error('cardholder_zipcode')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment before">-->
                            <!--                        <label><i class="fa-solid fa-earth-americas"></i>Cardholder-->
                            <!--                            Country<span>*</span></label><br>-->
                            <!--                        <select class="yd-select " required="" data-parsley-required=""-->
                            <!--                                data-parsley-required-message="This field is Required."-->
                            <!--                                name="cardholder_country"-->
                            <!--                                id="cc_cardholder_country" placeholder="" tabindex="1"-->
                            <!--                                data-parsley-group="block-0">-->
                            <!--                            <option value=""></option>-->
                            <!--                            <option value="Afghanistan">Afghanistan</option>-->
                            <!--                            <option value="Åland Islands">Åland Islands</option>-->
                            <!--                            <option value="Albania">Albania</option>-->
                            <!--                            <option value="Algeria">Algeria</option>-->
                            <!--                            <option value="American Samoa">American Samoa</option>-->
                            <!--                            <option value="Andorra">Andorra</option>-->
                            <!--                            <option value="Angola">Angola</option>-->
                            <!--                            <option value="Anguilla">Anguilla</option>-->
                            <!--                            <option value="Antarctica">Antarctica</option>-->
                            <!--                            <option value="Antigua And Barbuda">Antigua And Barbuda</option>-->
                            <!--                            <option value="Argentina">Argentina</option>-->
                            <!--                            <option value="Armenia">Armenia</option>-->
                            <!--                            <option value="Aruba">Aruba</option>-->
                            <!--                            <option value="Ascension">Ascension</option>-->
                            <!--                            <option value="Australia">Australia</option>-->
                            <!--                            <option value="Austria">Austria</option>-->
                            <!--                            <option value="Azerbaijan">Azerbaijan</option>-->
                            <!--                            <option value="Bahamas">Bahamas</option>-->
                            <!--                            <option value="Bahrain">Bahrain</option>-->
                            <!--                            <option value="Bangladesh">Bangladesh</option>-->
                            <!--                            <option value="Barbados">Barbados</option>-->
                            <!--                            <option value="Belarus">Belarus</option>-->
                            <!--                            <option value="Belgium">Belgium</option>-->
                            <!--                            <option value="Belize">Belize</option>-->
                            <!--                            <option value="Benin">Benin</option>-->
                            <!--                            <option value="Bermuda">Bermuda</option>-->
                            <!--                            <option value="Bhutan">Bhutan</option>-->
                            <!--                            <option value="Bolivia">Bolivia</option>-->
                            <!--                            <option value="Bosnia And Herzegovina">Bosnia And Herzegovina-->
                            <!--                            </option>-->
                            <!--                            <option value="Botswana">Botswana</option>-->
                            <!--                            <option value="Bouvet Island">Bouvet Island</option>-->
                            <!--                            <option value="Brazil">Brazil</option>-->
                            <!--                            <option value="British Indian Ocean Territory">British Indian-->
                            <!--                                Ocean-->
                            <!--                                Territory-->
                            <!--                            </option>-->
                            <!--                            <option value="Brunei Darussalam">Brunei Darussalam</option>-->
                            <!--                            <option value="Bulgaria">Bulgaria</option>-->
                            <!--                            <option value="Burkina Faso">Burkina Faso</option>-->
                            <!--                            <option value="Burundi">Burundi</option>-->
                            <!--                            <option value="Cambodia">Cambodia</option>-->
                            <!--                            <option value="Cameroon">Cameroon</option>-->
                            <!--                            <option value="Canada">Canada</option>-->
                            <!--                            <option value="Cape Verde">Cape Verde</option>-->
                            <!--                            <option value="Cayman Islands">Cayman Islands</option>-->
                            <!--                            <option value="Central African Republic">Central African-->
                            <!--                                Republic-->
                            <!--                            </option>-->
                            <!--                            <option value="Chad">Chad</option>-->
                            <!--                            <option value="Chile">Chile</option>-->
                            <!--                            <option value="China">China</option>-->
                            <!--                            <option value="Christmas Island">Christmas Island</option>-->
                            <!--                            <option value="Cocos (keeling) Islands">Cocos (keeling) Islands-->
                            <!--                            </option>-->
                            <!--                            <option value="Colombia">Colombia</option>-->
                            <!--                            <option value="Comoros">Comoros</option>-->
                            <!--                            <option value="Congo">Congo</option>-->
                            <!--                            <option value="Congo">Congo</option>-->
                            <!--                            <option value="Cook Islands">Cook Islands</option>-->
                            <!--                            <option value="Costa Rica">Costa Rica</option>-->
                            <!--                            <option value="CÔte D'ivoire">CÔte D'ivoire</option>-->
                            <!--                            <option value="Croatia">Croatia</option>-->
                            <!--                            <option value="Cuba">Cuba</option>-->
                            <!--                            <option value="Cyprus">Cyprus</option>-->
                            <!--                            <option value="Czech Republic">Czech Republic</option>-->
                            <!--                            <option value="Denmark">Denmark</option>-->
                            <!--                            <option value="Diego Garcia">Diego Garcia</option>-->
                            <!--                            <option value="Djibouti">Djibouti</option>-->
                            <!--                            <option value="Dominica">Dominica</option>-->
                            <!--                            <option value="Dominican Republic">Dominican Republic</option>-->
                            <!--                            <option value="Ecuador">Ecuador</option>-->
                            <!--                            <option value="Egypt">Egypt</option>-->
                            <!--                            <option value="El Salvador">El Salvador</option>-->
                            <!--                            <option value="Equatorial Guinea">Equatorial Guinea</option>-->
                            <!--                            <option value="Eritrea">Eritrea</option>-->
                            <!--                            <option value="Estonia">Estonia</option>-->
                            <!--                            <option value="Ethiopia">Ethiopia</option>-->
                            <!--                            <option value="Europäische Union">Europäische Union</option>-->
                            <!--                            <option value="European Union">European Union</option>-->
                            <!--                            <option value="Falkland Islands (malvinas)">Falkland Islands-->
                            <!--                                (malvinas)-->
                            <!--                            </option>-->
                            <!--                            <option value="Faroe Islands">Faroe Islands</option>-->
                            <!--                            <option value="Fiji">Fiji</option>-->
                            <!--                            <option value="Finland">Finland</option>-->
                            <!--                            <option value="France">France</option>-->
                            <!--                            <option value="French Guiana">French Guiana</option>-->
                            <!--                            <option value="French Polynesia">French Polynesia</option>-->
                            <!--                            <option value="French Southern Territories">French Southern-->
                            <!--                                Territories-->
                            <!--                            </option>-->
                            <!--                            <option value="Gabon">Gabon</option>-->
                            <!--                            <option value="Gambia">Gambia</option>-->
                            <!--                            <option value="Georgia">Georgia</option>-->
                            <!--                            <option value="Germany">Germany</option>-->
                            <!--                            <option value="Ghana">Ghana</option>-->
                            <!--                            <option value="Gibraltar">Gibraltar</option>-->
                            <!--                            <option value="Greece">Greece</option>-->
                            <!--                            <option value="Greenland">Greenland</option>-->
                            <!--                            <option value="Grenada">Grenada</option>-->
                            <!--                            <option value="Guam">Guam</option>-->
                            <!--                            <option value="Guatemala">Guatemala</option>-->
                            <!--                            <option value="Guernsey">Guernsey</option>-->
                            <!--                            <option value="Guinea">Guinea</option>-->
                            <!--                            <option value="Guinea-bissau">Guinea-bissau</option>-->
                            <!--                            <option value="Guyana">Guyana</option>-->
                            <!--                            <option value="Haiti">Haiti</option>-->
                            <!--                            <option value="Heard Island And Mcdonald Islands">Heard Island-->
                            <!--                                And-->
                            <!--                                Mcdonald Islands-->
                            <!--                            </option>-->
                            <!--                            <option value="Holy See (vatican City State)">Holy See (vatican-->
                            <!--                                City-->
                            <!--                                State)-->
                            <!--                            </option>-->
                            <!--                            <option value="Honduras">Honduras</option>-->
                            <!--                            <option value="Hong Kong">Hong Kong</option>-->
                            <!--                            <option value="Hungary">Hungary</option>-->
                            <!--                            <option value="Iceland">Iceland</option>-->
                            <!--                            <option value="India">India</option>-->
                            <!--                            <option value="Indonesia">Indonesia</option>-->
                            <!--                            <option value="Iran">Iran</option>-->
                            <!--                            <option value="Iraq">Iraq</option>-->
                            <!--                            <option value="Ireland">Ireland</option>-->
                            <!--                            <option value="Isle Of Man">Isle Of Man</option>-->
                            <!--                            <option value="Israel">Israel</option>-->
                            <!--                            <option value="Italy">Italy</option>-->
                            <!--                            <option value="Jamaica">Jamaica</option>-->
                            <!--                            <option value="Japan">Japan</option>-->
                            <!--                            <option value="Jersey">Jersey</option>-->
                            <!--                            <option value="Jordan">Jordan</option>-->
                            <!--                            <option value="Kanarische Inseln">Kanarische Inseln</option>-->
                            <!--                            <option value="Kazakhstan">Kazakhstan</option>-->
                            <!--                            <option value="Kenya">Kenya</option>-->
                            <!--                            <option value="Kiribati">Kiribati</option>-->
                            <!--                            <option value="Korea">Korea</option>-->
                            <!--                            <option value="Korea">Korea</option>-->
                            <!--                            <option value="Kuwait">Kuwait</option>-->
                            <!--                            <option value="Kyrgyzstan">Kyrgyzstan</option>-->
                            <!--                            <option value="Lao People's Democratic Republic">Lao People's-->
                            <!--                                Democratic Republic-->
                            <!--                            </option>-->
                            <!--                            <option value="Latvia">Latvia</option>-->
                            <!--                            <option value="Lebanon">Lebanon</option>-->
                            <!--                            <option value="Lesotho">Lesotho</option>-->
                            <!--                            <option value="Liberia">Liberia</option>-->
                            <!--                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya-->
                            <!--                            </option>-->
                            <!--                            <option value="Liechtenstein">Liechtenstein</option>-->
                            <!--                            <option value="Lithuania">Lithuania</option>-->
                            <!--                            <option value="Luxembourg">Luxembourg</option>-->
                            <!--                            <option value="Macao">Macao</option>-->
                            <!--                            <option value="Macedonia">Macedonia</option>-->
                            <!--                            <option value="Madagascar">Madagascar</option>-->
                            <!--                            <option value="Malawi">Malawi</option>-->
                            <!--                            <option value="Malaysia">Malaysia</option>-->
                            <!--                            <option value="Maldives">Maldives</option>-->
                            <!--                            <option value="Mali">Mali</option>-->
                            <!--                            <option value="Malta">Malta</option>-->
                            <!--                            <option value="Marshall Islands">Marshall Islands</option>-->
                            <!--                            <option value="Martinique">Martinique</option>-->
                            <!--                            <option value="Mauritania">Mauritania</option>-->
                            <!--                            <option value="Mauritius">Mauritius</option>-->
                            <!--                            <option value="Mayotte">Mayotte</option>-->
                            <!--                            <option value="Mexico">Mexico</option>-->
                            <!--                            <option value="Micronesia">Micronesia</option>-->
                            <!--                            <option value="Moldova">Moldova</option>-->
                            <!--                            <option value="Monaco">Monaco</option>-->
                            <!--                            <option value="Mongolia">Mongolia</option>-->
                            <!--                            <option value="Montenegro">Montenegro</option>-->
                            <!--                            <option value="Montserrat">Montserrat</option>-->
                            <!--                            <option value="Morocco">Morocco</option>-->
                            <!--                            <option value="Mozambique">Mozambique</option>-->
                            <!--                            <option value="Myanmar">Myanmar</option>-->
                            <!--                            <option value="Namibia">Namibia</option>-->
                            <!--                            <option value="Nauru">Nauru</option>-->
                            <!--                            <option value="Nepal">Nepal</option>-->
                            <!--                            <option value="Netherlands">Netherlands</option>-->
                            <!--                            <option value="Netherlands Antilles">Netherlands Antilles-->
                            <!--                            </option>-->
                            <!--                            <option value="Neutrale Zone">Neutrale Zone</option>-->
                            <!--                            <option value="New Caledonia">New Caledonia</option>-->
                            <!--                            <option value="New Zealand">New Zealand</option>-->
                            <!--                            <option value="Nicaragua">Nicaragua</option>-->
                            <!--                            <option value="Niger">Niger</option>-->
                            <!--                            <option value="Nigeria">Nigeria</option>-->
                            <!--                            <option value="Niue">Niue</option>-->
                            <!--                            <option value="Norfolk Island">Norfolk Island</option>-->
                            <!--                            <option value="Northern Mariana Islands">Northern Mariana-->
                            <!--                                Islands-->
                            <!--                            </option>-->
                            <!--                            <option value="Norway">Norway</option>-->
                            <!--                            <option value="Oman">Oman</option>-->
                            <!--                            <option value="Pakistan">Pakistan</option>-->
                            <!--                            <option value="Palau">Palau</option>-->
                            <!--                            <option value="Palestinian Territory">Palestinian Territory-->
                            <!--                            </option>-->
                            <!--                            <option value="Panama">Panama</option>-->
                            <!--                            <option value="Papua New Guinea">Papua New Guinea</option>-->
                            <!--                            <option value="Paraguay">Paraguay</option>-->
                            <!--                            <option value="Peru">Peru</option>-->
                            <!--                            <option value="Philippines">Philippines</option>-->
                            <!--                            <option value="Pitcairn">Pitcairn</option>-->
                            <!--                            <option value="Poland">Poland</option>-->
                            <!--                            <option value="Portugal">Portugal</option>-->
                            <!--                            <option value="Puerto Rico">Puerto Rico</option>-->
                            <!--                            <option value="Qatar">Qatar</option>-->
                            <!--                            <option value="RÉunion">RÉunion</option>-->
                            <!--                            <option value="Romania">Romania</option>-->
                            <!--                            <option value="Russian Federation">Russian Federation</option>-->
                            <!--                            <option value="Rwanda">Rwanda</option>-->
                            <!--                            <option value="Saint Helena">Saint Helena</option>-->
                            <!--                            <option value="Saint Kitts And Nevis">Saint Kitts And Nevis-->
                            <!--                            </option>-->
                            <!--                            <option value="Saint Lucia">Saint Lucia</option>-->
                            <!--                            <option value="Saint Pierre And Miquelon">Saint Pierre And-->
                            <!--                                Miquelon-->
                            <!--                            </option>-->
                            <!--                            <option value="Saint Vincent And The Grenadines">Saint Vincent-->
                            <!--                                And-->
                            <!--                                The Grenadines-->
                            <!--                            </option>-->
                            <!--                            <option value="Samoa">Samoa</option>-->
                            <!--                            <option value="San Marino">San Marino</option>-->
                            <!--                            <option value="Sao Tome And Principe">Sao Tome And Principe-->
                            <!--                            </option>-->
                            <!--                            <option value="Saudi Arabia">Saudi Arabia</option>-->
                            <!--                            <option value="Senegal">Senegal</option>-->
                            <!--                            <option value="Serbien und Montenegro">Serbien und Montenegro-->
                            <!--                            </option>-->
                            <!--                            <option value="Seychelles">Seychelles</option>-->
                            <!--                            <option value="Sierra Leone">Sierra Leone</option>-->
                            <!--                            <option value="Singapore">Singapore</option>-->
                            <!--                            <option value="Slovakia">Slovakia</option>-->
                            <!--                            <option value="Slovenia">Slovenia</option>-->
                            <!--                            <option value="Solomon Islands">Solomon Islands</option>-->
                            <!--                            <option value="Somalia">Somalia</option>-->
                            <!--                            <option value="South Africa">South Africa</option>-->
                            <!--                            <option value="South Georgia And The South Sandwich Islands">-->
                            <!--                                South-->
                            <!--                                Georgia And The-->
                            <!--                                South-->
                            <!--                                Sandwich Islands-->
                            <!--                            </option>-->
                            <!--                            <option value="Spain">Spain</option>-->
                            <!--                            <option value="Sri Lanka">Sri Lanka</option>-->
                            <!--                            <option value="Sudan">Sudan</option>-->
                            <!--                            <option value="Suriname">Suriname</option>-->
                            <!--                            <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen-->
                            <!--                            </option>-->
                            <!--                            <option value="Swaziland">Swaziland</option>-->
                            <!--                            <option value="Sweden">Sweden</option>-->
                            <!--                            <option value="Switzerland">Switzerland</option>-->
                            <!--                            <option value="Syrian Arab Republic">Syrian Arab Republic-->
                            <!--                            </option>-->
                            <!--                            <option value="Taiwan">Taiwan</option>-->
                            <!--                            <option value="Tajikistan">Tajikistan</option>-->
                            <!--                            <option value="Tanzania">Tanzania</option>-->
                            <!--                            <option value="Thailand">Thailand</option>-->
                            <!--                            <option value="Timor-leste">Timor-leste</option>-->
                            <!--                            <option value="Togo">Togo</option>-->
                            <!--                            <option value="Tokelau">Tokelau</option>-->
                            <!--                            <option value="Tonga">Tonga</option>-->
                            <!--                            <option value="Trinidad And Tobago">Trinidad And Tobago</option>-->
                            <!--                            <option value="Tristan da Cunha">Tristan da Cunha</option>-->
                            <!--                            <option value="Tunisia">Tunisia</option>-->
                            <!--                            <option value="Turkey">Turkey</option>-->
                            <!--                            <option value="Turkmenistan">Turkmenistan</option>-->
                            <!--                            <option value="Turks And Caicos Islands">Turks And Caicos-->
                            <!--                                Islands-->
                            <!--                            </option>-->
                            <!--                            <option value="Tuvalu">Tuvalu</option>-->
                            <!--                            <option value="Uganda">Uganda</option>-->
                            <!--                            <option value="Ukraine">Ukraine</option>-->
                            <!--                            <option value="Union der Sozialistischen Sowjetrepubliken">Union-->
                            <!--                                der-->
                            <!--                                Sozialistischen-->
                            <!--                                Sowjetrepubliken-->
                            <!--                            </option>-->
                            <!--                            <option value="United Arab Emirates">United Arab Emirates-->
                            <!--                            </option>-->
                            <!--                            <option value="United Kingdom">United Kingdom</option>-->
                            <!--                            <option value="United States">United States</option>-->
                            <!--                            <option value="Uruguay">Uruguay</option>-->
                            <!--                            <option value="Uzbekistan">Uzbekistan</option>-->
                            <!--                            <option value="Vanuatu">Vanuatu</option>-->
                            <!--                            <option value="Venezuela">Venezuela</option>-->
                            <!--                            <option value="Viet Nam">Viet Nam</option>-->
                            <!--                            <option value="Virgin Islands">Virgin Islands</option>-->
                            <!--                            <option value="Virgin Islands">Virgin Islands</option>-->
                            <!--                            <option value="Wallis And Futuna">Wallis And Futuna</option>-->
                            <!--                            <option value="Western Sahara">Western Sahara</option>-->
                            <!--                            <option value="Yemen">Yemen</option>-->
                            <!--                            <option value="Zambia">Zambia</option>-->
                            <!--                            <option value="Zimbabwe">Zimbabwe</option>-->
                            <!--                        </select>-->
                            <!--                        @error('cardholder_country')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-envelope"></i>Cardholder-->
                            <!--                            Email<span>*</span></label><br>-->
                            <!--                        <input type="text" name="cardholder_email" required>-->

                            <!--                        @error('cardholder_email')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <h6 class="pay-method"><i class="fa-solid fa-credit-card"></i>Credit Card-->
                            <!--                    Type<span>*</span>-->
                            <!--                </h6>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="payment-ckbx three">-->

                            <!--                        <label>-->
                            <!--                            <input type="radio" value="Visa" checked="checked"-->
                            <!--                                   name="credit_card_type">-->
                            <!--                            <span class="checkmark">Visa</span>-->
                            <!--                        </label>-->
                            <!--                        <label>-->
                            <!--                            <input type="radio" value="Master Card" name="credit_card_type">-->
                            <!--                            <span class="checkmark">Master Card</span>-->
                            <!--                        </label>-->


                            <!--                        @error('credit_card_type')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-credit-card"></i>Name on-->
                            <!--                            Card<span>*</span></label><br>-->
                            <!--                        <input type="text" name="name_on_card" required>-->

                            <!--                        @error('name_on_card')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-credit-card"></i>Credit Card-->
                            <!--                            Number<span>*</span></label><br>-->
                            <!--                        <input type="number" name="card_number" required>-->

                            <!--                        @error('card_number')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-credit-card"></i>CVC<span>*</span></label><br>-->
                            <!--                        <input type="number" name="card_cvc" required>-->

                            <!--                        @error('card_cvc')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-4">-->
                            <!--                    <div class="input-flds refundable-payment">-->
                            <!--                        <label><i class="fa-solid fa-credit-card"></i>Expiration-->
                            <!--                            Date<span>*</span></label><br>-->
                            <!--                        <input type="date" name="card_exp_date"-->
                            <!--                               min="{{"carbon date required"}}"-->
                            <!--                               max="{{"carbon date required"}}" required>-->

                            <!--                        @error('card_exp_date')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->

                            <!--                    <h6>I authorize International Student Placements to charge the program-->
                            <!--                        fees-->
                            <!--                        to my credit-->
                            <!--                        card. I understand that all fees are non-refundable and that all-->
                            <!--                        credit-->
                            <!--                        card-->
                            <!--                        transactions incur a 5% processing fee.</h6>-->
                            <!--                    <br>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--            <div class="row">-->
                            <!--                <div class="col-md-3">-->
                            <!--                    <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Placement-->
                            <!--                        Fee</h6>-->

                            <!--                    <div class="payment-ckbx three">-->

                            <!--                        <label>-->
                            <!--                            <input type="checkbox" value="yes" name="placement_fee">-->
                            <!--                            <span class="checkmark">Yes</span>-->
                            <!--                        </label>-->

                            <!--                        @error('placement_fee')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-3">-->

                            <!--                    <div class="smoke-flex">-->
                            <!--                        <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Late-->
                            <!--                            Fee-->
                            <!--                        </h6>-->
                            <!--                    </div>-->

                            <!--                    <div class="payment-ckbx three">-->

                            <!--                        <label>-->
                            <!--                            <input type="checkbox" value="yes" name="late_fee">-->
                            <!--                            <span class="checkmark">Yes</span>-->
                            <!--                        </label>-->


                            <!--                        @error('late_fee')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-3">-->

                            <!--                    <div class="smoke-flex">-->
                            <!--                        <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>$100-->
                            <!--                            Deposit</h6>-->
                            <!--                    </div>-->

                            <!--                    <div class="payment-ckbx three">-->

                            <!--                        <label>-->
                            <!--                            <input type="checkbox" value="yes" name="deposit_fee">-->
                            <!--                            <span class="checkmark">Yes</span>-->
                            <!--                        </label>-->


                            <!--                        @error('deposit_fee')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="col-md-3">-->
                            <!--                    <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Airport-->
                            <!--                        Pickup Fee</h6>-->

                            <!--                    <div class="payment-ckbx three">-->
                            <!--                        <label>-->
                            <!--                            <input type="checkbox" value="yes" name="airport_pickup_fee">-->
                            <!--                            <span class="checkmark">Yes</span>-->
                            <!--                        </label>-->

                            <!--                        @error('airport_pickup_fee')-->
                            <!--                        <div class="alert alert-danger">-->
                            <!--                            {{ $message }}-->
                            <!--                        </div>-->
                            <!--                        @enderror-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="sav-btn">-->
                            <!--                    <a href="#">Save</a>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</section>-->
                            <!--Section 7 End-->

                            <!--Section 8 Start-->
                            <!--Section 8 First Half Start-->
                            <!--<section class="my-newfrm">-->
                            <!--    <div class="form_style  main-cardbox">-->
                            <!--        <div class="refundable-payment termsconditions">-->
                            <!--            <h3>International Student Placements</h3>-->
                            <!--            <h5>Student Agreement</h5>-->

                                        <!-- Agreements Start -->
                            <!--            <div class="agreement-conditions">-->
                                            <!--<div class="para-scroll">-->
                            <!--                <div class="row">-->
                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes" name="fees_agreement">-->
                            <!--                                <span class="checkmark ex1">Fees: </br>The placement fee, deposit, late fee, and airport pick up fee will be charged to the student’s credit card when they submit their application. Applications are not processed until the payment is made. If a student decides to cancel the program, all fees are non-refundable.</span>-->
                            <!--                            </label>-->

                            <!--                            @error('fees_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                                                <!--<hr>-->
                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="contract_period_agreement">-->
                            <!--                                <span class="checkmark ex1">-->
                            <!--                                    Contract Period:</br> Students must stay with their assigned host for the entire contract period they signed up for. Students can extend their contract with the consent of their host on a month-to-month basis once their initial contract period has concluded. If a student chooses to leave their host home prior to the end of their contract, they must pay rent for the remainder of the contract period. All students must inform their host and ISP 30 days prior to leaving their host home indicating that they are ending their participation in the program.-->
                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('contract_period_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="payments_agreement">-->
                            <!--                                <span class="checkmark ex1">-->
                            <!--                                    Payments:</br> Students who pay rent directly to their host will pay on the day they arrive and each month thereafter.  Students must pay the rent in full and on time each month. Failure to do so will result in termination from the program. Students understand that ISP does not get involved in rent disputes between hosts and students. Host payment information and the monthly rent amount will be in the student’s ISP portal.-->
                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('payments_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="row">-->
                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes" name="deposit_agreement">-->
                            <!--                                <span class="checkmark ex1">-->
                            <!--                                   Deposit:</br> Each student pays a deposit to ensure they keep their bedroom and bathroom clean and that no damage was done to the bedroom or bathroom. Students must request their deposit returned from ISP within 30 days of leaving the host home. Deposit checks are payable only in the student’s name and are mailed only to a US address. Students must read and understand the deposit information sheet that is in student’s ISP portal.-->
                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('deposit_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="meal_plans_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                    Meal Plans:</br> Students on the meal plan will receive breakfast and dinner provided by their host every day. Continental breakfast includes juice, bread, cereal, fruit, etc. Dinner is prepared at least 5 nights per week and includes a typical American dinner (protein, vegetable, and bread/pasta). On nights when the host isn’t cooking, students can make dinner using the host’s food. Lunch and snacks are not included in the program and students are responsible for buying those on their own.-->
                            <!--                                    If a student doesn’t sign up for the meal plan, only light cooking is permitted in the host’s kitchen like microwaving and heating up cooked food.-->
                            <!--                                    Students can switch their meal plan after arrival with their host’s consent. If a student has strict dietary needs, ISP recommends they select the no-meal option to best suit their needs.-->

                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('meal_plans_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="student_faq_sheet_agreement">-->
                            <!--                                <span class="checkmark ex1">-->
                            <!--                                    Student FAQ Sheet: </br> Students must read and understand the Student FAQ sheet that will be in the student’s ISP portal.-->
                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('student_faq_sheet_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="row">-->
                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="airport_pickup_agreement">-->
                            <!--                                <span class="checkmark ex1">-->
                            <!--                                    Airport Pickup: </br> ISP provides airport pickup only in a few areas in the US. If-->
                            <!--                                    parents or other chaperones arrive with the student at the airport, a reservation-->
                            <!--                                    and payment must have been made in advance for the extra passengers. If a student is-->
                            <!--                                    under 18 years old, they may not fly as an unaccompanied minor. ISP has no liability-->
                            <!--                                    for the third-party airport company assigned to the student. Airport pick up-->
                            <!--                                    instructions and driver contact information will be in the student’s ISP-->
                            <!--                                    portal.-->
                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('airport_pickup_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="transportation_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                Transportation:</br>  All students take public transportation to and from school and-->
                            <!--                                should expect a commute time of at least 45-55 minutes each way. Host families do-->
                            <!--                                not drive students to school.-->

                            <!--                            </span>-->
                            <!--                            </label>-->

                            <!--                            @error('transportation_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="host_possessions_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                    Host Possessions:</br> Students agree to take good care of their host possessions and-->
                            <!--                                    be financially responsible for the costs of repairs associated with breakage or-->
                            <!--                                    loss.-->

                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('host_possessions_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->

                            <!--            </div>-->

                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</section>-->

                            <!--Section 8 First Half End-->
                            <!--Section 8 First Half Start-->
                            <!--<section class="my-newfrm">-->
                            <!--    <div class="form_style  main-cardbox">-->
                            <!--        <div class="refundable-payment termsconditions">-->
                                        <!--<h3>International Student Placements</h3>-->
                                        <!--<h5>Student Agreement</h5>-->

                                        <!-- Agreements Start -->
                            <!--            <div class="agreement-conditions">-->
                            <!--                <div class="row">-->
                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="prohibited_activities_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                Prohibited Activities:</br> Students must not engage in any illegal activities,-->
                            <!--                                including the use of drugs or alcohol (the use of alcohol & tobacco is not legal in-->
                            <!--                                the US until the age of 21). Excessive alcohol consumption, theft, abuse of-->
                            <!--                                property, verbal or physical abuse, impolite language and/or behavior will result in-->
                            <!--                                termination from the program. Students must stay informed of all laws in the US and-->
                            <!--                                agree to abide by them. Students must not smoke cigarettes, marijuana, or vape-->
                            <!--                                inside or outside the host home. If a student violates these rules, they may be-->
                            <!--                                asked to leave their host home. In this case, ISP will not provide alternative-->
                            <!--                                housing and the student will forfeit all fees.-->

                            <!--                            </span>-->
                            <!--                            </label>-->

                            <!--                            @error('prohibited_activities_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="medical_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                Medical: </br> Students certify that they’re healthy and able to participate in the ISP-->
                            <!--                                program and have no medical or mental conditions that would make their participation-->
                            <!--                                unsafe or dangerous to themselves or others. Students must have a physical exam-->
                            <!--                                within one year before starting the program to ensure they are healthy and capable-->
                            <!--                                of the demands that studying overseas requires. Students must disclose all-->
                            <!--                                allergies, medications, past and current psychological, psychiatric, and physical-->
                            <!--                                health issues truthfully on their application. Failure to do so will result in-->
                            <!--                                termination from the program.-->

                            <!--                            </span>-->
                            <!--                            </label>-->

                            <!--                            @error('medical_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="request_for_host_change_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                Request for Host change: </br> If a student has an issue with their host during their-->
                            <!--                                initial contract period, ISP will assist them in resolving the problem. If the-->
                            <!--                                problem can’t be resolved, ISP will provide the student with a second host home. ISP-->
                            <!--                                has the final authority whether to move a student and will determine if additional-->
                            <!--                                fees will be charged.-->

                            <!--                            </span>-->
                            <!--                            </label>-->

                            <!--                            @error('request_for_host_change_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="row">-->
                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="media_photo_release_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                    Media/Photo Release: </br> Students grant ISP and its representatives the right and-->
                            <!--                                    permission to use photographs, videos, and any other media taken of them for company-->
                            <!--                                    advertising, publicity, and promotion. Students hold ISP harmless from all claims in-->
                            <!--                                    connection with the foregoing and waive the right of inspection and approval.-->

                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('media_photo_release_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="covid_19_protocol_for_students_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                    COVID-19 Protocol for Students: </br> All students must provide proof of their COVID-->
                            <!--                                    vaccination status and upload their vaccine card when applying to the program. In-->
                            <!--                                    addition to the first and second doses, students must have received a booster shot.-->
                            <!--                                    If boosters are not available in the student’s home country or if not enough time-->
                            <!--                                    has passed between the second dose and the booster before departure, students must-->
                            <!--                                    agree to receive the booster in the US within 3 days of being eligible.-->

                            <!--                                    <br>-->

                            <!--                                    <p>-->

                            <!--                                    Prior to departure, students will be asked to monitor their health 10 days before-->
                            <!--                                    traveling to the US. Students who exhibit flu-like symptoms (which includes fever,-->
                            <!--                                    body aches, stuffy/runny nose, cough, etc.) upon arrival or at any point during-->
                            <!--                                    their stay will need to self-quarantine in their host home bedroom AND take a rapid-->
                            <!--                                    test. If the test is negative, the student may end their self-quarantine. If the-->
                            <!--                                    result is positive, the student must continue to self-quarantine for at least 5 days-->
                            <!--                                    or until their symptoms subside and a second test is negative.-->
                            <!--                                    </p>-->

                            <!--                                    <p>-->

                            <!--                                    If a student contracts COVID and their host is not comfortable with them staying in-->
                            <!--                                    their home, the student will check into a local hotel at their own expense for at-->
                            <!--                                    least 5 days or until they get a negative test result and symptoms subside. Students-->
                            <!--                                    must arrive with face masks and be prepared to wear them in the host home for the-->
                            <!--                                    first 3 days after arrival if the host requests this.-->
                            <!--                                    </p>-->

                            <!--                                    <p>-->

                            <!--                                    Throughout the student’s stay, local governments will continue to adjust their COVID-->
                            <!--                                    policies according to the prevalence of the virus in the community. ISP students are-->
                            <!--                                    expected to adhere to current regulations, practice good hygiene, clean and-->
                            <!--                                    disinfect their bedroom and bathroom, and practice social distancing. Intentional-->
                            <!--                                    disregard could result in the students’ dismissal from the program. Students-->
                            <!--                                    understand that living in a host home comes with risk and that ISP cannot guarantee-->
                            <!--                                    nor control whether a student will contract COVID from any members of the host home.-->
                            <!--                                    The student assumes all liability for any injury, loss, damage, accident, delay, or-->
                            <!--                                    expense resulting from contracting COVID during their stay.-->
                            <!--                                    <p>-->
                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('covid_19_protocol_for_students_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="program_termination_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                    Program Termination:</br> If a student violates the Student Agreement or if ISP-->
                            <!--                                    decides that the student is not an appropriate candidate for a homestay program, ISP-->
                            <!--                                    will terminate the student and the student will forfeit all program fees.-->

                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('program_termination_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="row">-->
                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="warranties_consent_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                    Warranties/Consent: </br> The student warrants that the information provided on their-->
                            <!--                                    application is true and correct, that they are not a sex offender nor have been-->
                            <!--                                    accused of or convicted any crimes. Students authorize ISP, its employees,-->
                            <!--                                    coordinators, and assigned host family to consent on their behalf to any x-ray-->
                            <!--                                    examinations, anesthetic, medical or surgical treatment, and emergency hospital care-->
                            <!--                                    on their behalf. Students agree that ISP, it’s employees, coordinators, and assigned-->
                            <!--                                    host family can take any action whatsoever regarding their safety without incurring-->
                            <!--                                    any liability or expense.-->

                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('warranties_consent_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="limitation_of_liability_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                    Limitation of Liability: </br> IN NO EVENT SHALL ISP HAVE ANY LIABILITY TO ANY STUDENT-->
                            <!--                                    FOR ANY INDIRECT, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES, HOWEVER CAUSED, AND-->
                            <!--                                    UNDER ANY THEORY OF LIABILITY, WHETHER OR NOT ISP HAS BEEN ADVISED OF THE-->
                            <!--                                    POSSIBILITY OF SUCH DAMAGES. FURTHER, ISP SHALL NOT BE NAMED AS A PARTY, CALLED AS A-->
                            <!--                                    WITNESS, OR SERVED DISCOVERY REQUESTS IN ANY DISPUTE BETWEEN STUDENTS AND HOSTS-->
                            <!--                                    REGARDING THE FINANCIAL OR INTERPERSONAL DEALINGS BETWEEN STUDENTS AND HOSTS.-->

                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('limitation_of_liability_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="indemnification_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                    Indemnification: </br> Students understand that hosts are not ISP’s employees or-->
                            <!--                                    agents, and that ISP has no constructive control of the hosts’ behavior. Students-->
                            <!--                                    understand that the information provided by ISP about each host family is not a-->
                            <!--                                    perfect predictor of how the host will act in the future, and that the background-->
                            <!--                                    and safety of each host is not guaranteed. Students acknowledge that it is voluntary-->
                            <!--                                    for them to participate in trips and activities with their host and that ISP does-->
                            <!--                                    not require their participation. Students assume all risks associated with injury or-->
                            <!--                                    loss arising from their participation in the ISP program and release ISP of any-->
                            <!--                                    liability for any claim of injury, death, property damage, or other loss.-->

                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('indemnification_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--                <div class="row">-->
                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="governing_law_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                    Governing Law: </br> All parties agree to solve any dispute and resolution of this-->
                            <!--                                    Agreement using arbitration services in Santa Clara County with the American-->
                            <!--                                    Arbitration Association before using any other means to solve the dispute.-->

                            <!--                                </span>-->
                            <!--                            </label>-->

                            <!--                            @error('governing_law_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->

                            <!--                    <div class="col-md-4 col-sm-4 col-xs-12">-->
                            <!--                        <div class="payment-ckbx three">-->
                            <!--                            <label class="boxs-siz">-->
                            <!--                                <input type="checkbox" value="yes"-->
                            <!--                                       name="force_majeure_agreement">-->
                            <!--                                <span class="checkmark ex1">-->

                            <!--                                Force Majeure:</br> The parties will not be liable for delays or errors in its-->
                            <!--                                performance or for non-performance due to causes beyond its reasonable control-->
                            <!--                                (“Force Majeure Event”) including Acts of god and pandemics.-->

                            <!--                            </span>-->
                            <!--                            </label>-->

                            <!--                            @error('force_majeure_agreement')-->
                            <!--                            <div class="alert alert-danger">-->
                            <!--                                {{ $message }}-->
                            <!--                            </div>-->
                            <!--                            @enderror-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->

                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</section>-->

                            <!--Section 8 First Half End-->


                            <!--Section 8 Second Half Start-->
                            <!--<section class="my-newfrm">-->
                            <!--    <div class="form_style  main-cardbox">-->

                            <!--        <h5>Students:</h5>-->
                            <!--        <p>Each party warrants that it has full power and authority to enter and-->
                            <!--            perform under-->
                            <!--            this Agreement and that the person signing this Agreement on behalf-->
                            <!--            of such party-->
                            <!--            has been duly authorized and empowered to execute this Agreement.-->
                            <!--            The student either-->
                            <!--            fully comprehends English or has had an interpreter explain this-->
                            <!--            Agreement in its-->
                            <!--            entirety. In witness whereof, the parties hereto have caused this-->
                            <!--            Agreement to be-->
                            <!--            executed.</p>-->

                            <!--        <h5>Parents (students under 18):</h5>-->
                            <!--        <p>I acknowledge that my child is under the age of 18 years old, and-->
                            <!--            that I will be held-->
                            <!--            responsible for my child’s actions while they are in the ISP-->
                            <!--            program. I agree to pay-->
                            <!--            the full amount for all damages that my child is responsible for,-->
                            <!--            regardless of-->
                            <!--            whether the damages were accidental. I agree to hold ISP and my-->
                            <!--            child’s host-->
                            <!--            harmless and release all liability including all claims against ISP-->
                            <!--            and the host-->
                            <!--            family for injury, loss, damages, accident, delay or expense-->
                            <!--            resulting from-->
                            <!--            participation in the ISP program.</p>-->
                                    <!-- Agreement End -->

                            <!--        <h6>By clicking "Agree" below, I state that I understand and agree to the-->
                            <!--            terms and-->
                            <!--            conditions.</h6>-->

                            <!--        <h6 class="pay-method"><!-- <i class="fa-solid fa-credit-card"></i> -->-->
                            <!--            Agreement<span>*</span>-->
                            <!--        </h6>-->
                            <!--        <div class="payment-ckbx three">-->

                            <!--            <label>-->
                            <!--                <input type="radio" value="yes" checked="checked" name="agree"-->
                            <!--                       required>-->
                            <!--                <span class="checkmark">Agree</span>-->
                            <!--            </label>-->


                            <!--            @error('agree')-->
                            <!--            <div class="alert alert-danger">-->
                            <!--                {{ $message }}-->
                            <!--            </div>-->
                            <!--            @enderror-->
                            <!--        </div>-->

                            <!--        <h3 class="submit">Submit the information in the application form by-->
                            <!--            clicking the "Submit"-->
                            <!--            button below:</h3>-->
                            <!--        <p class="submitp">It might take a few minutes to process your information-->
                            <!--            before you: 1)-->
                            <!--            see a-->
                            <!--            confirmation message in your web browser, and 2) receive a confirmation-->
                            <!--            email.</p>-->

                            <!--        <p class="admin">PLEASE CHECK YOUR SPAM FOLDER IF YOU DO NOT HEAR FROM ISP-->
                            <!--            WITHIN 1 BUSINESS-->
                            <!--            DAY-->
                            <!--            OF APPLYING AND EMAIL <a href="">ADMIN@ISPHOMESTAYS.COM</a> FOR ANY-->
                            <!--            QUESTIONS.</p>-->
                            <!--        <button class="payment">Submit</button>-->
                            <!--        <hr class="payment">-->

                            <!--    </div>-->
                            <!--</section>-->
                            <!--Section 8 Second Half End-->
                            <!--Section 8 End-->

                        </article>
                    </main>


                    <!--International Student Placement Agreement End-->

                    <!-- Complete -->

                </div>
                <!-- main -->
            </form>
        </div>
    </section>
{{--    @push('js')--}}
{{--        <script>--}}
{{--            $(document).ready(function () {--}}
{{--                const Btn1 = document.querySelector("#Btn1");--}}
{{--                let url = '{{route('new_student_application_form_submit'}}';--}}
{{--                let data = {'_token': '{{csrf_token()}}'};--}}
{{--                let result = AjaxRequest(url, data);--}}
{{--            });--}}
{{--        </script>--}}
{{--    @endpush--}}
@endsection
