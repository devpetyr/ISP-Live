<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css start -->
    @include('web.layouts.host_css')
    <!-- css ends -->
    <title>@yield('page_title')</title>
</head>

<body>
<!-- header start -->
@include('web.layouts.header')
<!-- header end -->
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
                                            <h1 class="wow zoomIn">Host Application Form</h1>
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

            <!--<form action="{{ route('host_information_application') }}" method="post" enctype="multipart/form-data">-->
            <!--    @csrf-->


                <div class="form-main2">
                    <!-- form new start-->
                    <main class="main-newfrm">
                        <article class=form-article>

                            <!--Host details start-->
                <form action="{{ route('host_information_application') }}" method="post" enctype="multipart/form-data">
                @csrf
                            <section class="my-newfrm" id"information_application">
                   
       
                                <div class="form_style  main-cardbox">


                                    <!--Host Details Start-->
                                    <h3>Host Details</h3>
                                    <div class="input-flds-main">
                                        <!--start-->
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-user"></i>First
                                                        Name<span>*</span></label>
                                                    <input type="text" name="host_first_name" value="{{ $hostInformation->first_name ?? ''}}">

                                                     @error('host_first_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-user"></i>Last
                                                        Name<span>*</span></label>
                                                    <input type="text" name="host_last_name" value="{{ $hostInformation->last_name ?? ''}}">

                                                     @error('host_last_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
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
                                                    <input type="date" name="host_dob" value="{{ $hostInformation->dob ?? ''}}">

                                                    @error('host_dob')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                               <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-address"></i>Applicant cell phone <span>*</span></label>
                                                    <input type="tel" name="host_cell_phone" value="{{ $hostInformation->cell_phone ?? ''}}">

                                                    @error('host_cell_phone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            
                                            
                                         
                                        </div>

                                        <!--<div class="row">-->
                                          
                                    <!--<div class="permanent-adress ">-->
                                        <!--<h3>Your Address</h3>-->
                                        <div class="row">
                                         



                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Applicant email<span>*</span></label>
                                                    <input type="email" name="host_email" value="{{ $hostInformation->email ?? ''}}">

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
                                                    <input type="text" name="host_occupation" value="{{ $hostInformation->occupation ?? ''}}">

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
                                                    <input type=" text" name="host_employer" value="{{ $hostInformation->employer ?? ''}}">

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
                                                    <input type="tel" name="host_work_phone" value="{{ $hostInformation->work_phone ?? ''}}">

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
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Home Address<span>*</span></label>
                                                    <input type="text" name="host_home_address" value="{{ $hostInformation->home_address ?? ''}}">
                                                    @error('host_home_address')
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
                                                    <input type="file" id="myFile" name="host_profile_photo" >

                                                    @error('host_profile_photo')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                      
                                        
                                        
                                        
                                        
                                        <div class="sav-btn" >
                                            <button  type="submit">Save</button>
                                        </div>
                                    <!--Student Details End-->
                                </div>
                                    <!--Host Details End-->
                                </div>
                                
                            </section>
                            
                            
               
                </form>
                            <!--Host details End-->
                            <!--partner details start-->
                <form action="{{ route('host_partner_application') }}" method="post" enctype="multipart/form-data">
                @csrf
                            <section class="my-newfrm" id="partner_application">
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
                                                    <input type="text" name="partner_first_name" value="{{ $partnerInformation->first_name ?? ''}}">
                                                    @error('partner_first_name')
                                                    	<div class="alert alert-danger">
                                                    	{{ $message }}
                                                    	</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-user"></i>Last
                                                        Name<span>*</span></label>
                                                    <input type="text" name="partner_last_name" value="{{ $partnerInformation->last_name ?? ''}}">
                                                    @error('partner_last_name')
                                                    	<div class="alert alert-danger">
                                                    	{{ $message }}
                                                    	</div>
                                                    @enderror
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
                                                    <input type="date" name="partner_dob" value="{{ $partnerInformation->dob ?? ''}}">
                                                    @error('partner_dob')
                                                    	<div class="alert alert-danger">
                                                    	{{ $message }}
                                                    	</div>
                                                    @enderror
                                                </div>
                                            </div>
                                               <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-address"></i>Spouse/Partner cell phone <span>*</span></label>
                                                    <input type=" tel" name="partner_cell_phone" value="{{ $partnerInformation->cell_phone ?? ''}}">

                                                    @error('partner_cell_phone')
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
                                                    <label><i class="fa-solid fa-number"></i>Spouse/Partner email<span>*</span></label>
                                                    <input type="email" name="partner_email" value="{{ $partnerInformation->email ?? ''}}">

                                                    @error('partner_email')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Spouse/Partner Occupation<span>*</span></label>
                                                    <input type="text" name="partner_occupation" value="{{ $partnerInformation->occupation ?? ''}}">

                                                    @error('partner_occupation')
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
                                                    <label><i class="fa-solid fa-address"></i>Spouse/Partner Employer <span>*</span></label>
                                                    <input type=" text" name="partner_employer" value="{{ $partnerInformation->employer ?? ''}}">

                                                    @error('partner_employer')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>



                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-number"></i>Work Phone<span>*</span></label>
                                                    <input type="tel" name="partner_work_phone" value="{{ $partnerInformation->work_phone ?? ''}}">

                                                    @error('partner_work_phone')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>

                                      
                                    
                                </div>
                                   

                            
                                   
                          

                                        <div class="sav-btn" >
                                            <button  type="submit">Save</button>
                                        </div>
 

                                </div>
                                 <!--Spouse/Partner Details end-->
                            </section>
                </form>
                         <!--Partner details End-->
                         
                         <!--Adult details start-->
                <form action="{{ route('host_adult_application') }}" method="post" enctype="multipart/form-data">
                @csrf
                            <section class="my-newfrm" id="adult_application">
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
                                                    <input type="text" name="adult1_first_name" value="{{ $adultInformation->first_name1 ?? ''}}">

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
                                                    <input type="text" name="adult1_last_name" value="{{ $adultInformation->last_name1 ?? ''}}">

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
                                                    <input type="tel" name="adult1_work_phone" value="{{ $adultInformation->work_phone1 ?? ''}}">

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
                                                    <input type="text" name="adult1_relation" value="{{ $adultInformation->relation1 ?? ''}}">

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
                                                    <input type="text" name="adult1_occupation" value="{{ $adultInformation->occupation1 ?? ''}}">

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
                                                    <input type="text" name="adult1_employer" value="{{ $adultInformation->employer1 ?? ''}}">

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
                                                        <input type="radio" value="male"  @if(isset($adultInformation->gender1) AND $adultInformation->gender1 === 'male') checked="checked" @endif name="adult1_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="female" @if(isset($adultInformation->gender1) AND $adultInformation->gender1 === 'female') checked="checked" @endif  name="adult1_gender">
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
                                                    <input type="text" name="adult2_first_name" value="{{ $adultInformation->first_name2 ?? ''}}">

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
                                                    <input type="text" name="adult2_last_name" value="{{ $adultInformation->last_name2 ?? ''}}">

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
                                                    <input type="tel" name="adult2_work_phone" value="{{ $adultInformation->work_phone2 ?? ''}}">

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
                                                    <input type="text" name="adult2_relation" value="{{ $adultInformation->relation2 ?? ''}}">

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
                                                    <input type="text" name="adult2_occupation" value="{{ $adultInformation->occupation2 ?? ''}}">

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
                                                    <input type="text" name="adult2_employer" value="{{ $adultInformation->employer2 ?? ''}}">

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
                                                        <input type="radio" value="male" @if(isset($adultInformation->gender2) AND $adultInformation->gender2 === 'male') checked="checked" @endif name="adult2_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="female" @if(isset($adultInformation->gender2) AND $adultInformation->gender2 === 'female') checked="checked" @endif name="adult2_gender">
                                                        <span class="checkmark">Female</span>
                                                    </label>
                                                   
                                                    @error('adult2_gender')
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
                                   

                                    <div class="row">

                                      
                                        <div class="sav-btn" >
                                            <button  type="submit">Save</button>
                                        </div>

                                    </div>
                                </div>
                            </section>
                </form>
                            <!--Adult end End-->
                            

                            <!--Childs details Start-->
                <form action="{{ route('host_childs_application') }}" method="post" enctype="multipart/form-data">
                @csrf
                            <section class="my-newfrm" id="childs_application">
                                <div class="form_style main-cardbox">
                                      
                                      <h3>Childs Details</h3>
                                      
                                      
                                       <!--First Child Details start-->
                                    <div class="permanent-adress ">
                                        <h3>First Child Details </h3>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>First Name<span>*</span></label>
                                                    <input type="text" name="child1_first_name" value="{{ $childInformation->first_name1 ?? ''}}">

                                                    @error('child1_first_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Last Name<span>*</span></label>
                                                    <input type="text" name="child1_last_name" value="{{ $childInformation->last_name1 ?? ''}}">

                                                    @error('child1_last_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Date of Birth<span>*</span></label>
                                                    <input type="date" name="child1_dob" value="{{ $childInformation->dob1 ?? ''}}">

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
                                                        <input type="radio" value="male" @if(isset($childInformation->gender1) AND $childInformation->gender1 === 'male') checked="checked" @endif name="child1_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="female" @if(isset($childInformation->gender1) AND $childInformation->gender1 === 'female') checked="checked" @endif name="child1_gender">
                                                        <span class="checkmark">Female</span>
                                                    </label>
                                                   
                                                    @error('child1_gender')
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
                                                    <input type="text" name="child2_first_name" value="{{ $childInformation->first_name2 ?? ''}}">

                                                    @error('child2_first_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Last Name<span>*</span></label>
                                                    <input type="text" name="child2_last_name" value="{{ $childInformation->last_name2 ?? ''}}">

                                                    @error('child2_last_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Date of Birth<span>*</span></label>
                                                    <input type="date" name="child2_dob" value="{{ $childInformation->dob2 ?? ''}}">

                                                    @error('child2_dob')
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
                                                        <input type="radio" value="male"  @if(isset($childInformation->gender2) AND $childInformation->gender2 === 'male') checked="checked" @endif name="child2_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="female"  @if(isset($childInformation->gender2) AND $childInformation->gender2 === 'female') checked="checked" @endif name="child2_gender">
                                                        <span class="checkmark">Female</span>
                                                    </label>
                                                   
                                                    @error('child2_gender')
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
                                                    <input type="text" name="child3_first_name" value="{{ $childInformation->first_name3 ?? ''}}">

                                                    @error('child3_first_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Last Name<span>*</span></label>
                                                    <input type="text" name="child3_last_name" value="{{ $childInformation->last_name3 ?? ''}}">

                                                    @error('child3_last_name')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone"></i>Date of Birth<span>*</span></label>
                                                    <input type="date" name="child3_dob" value="{{ $childInformation->dob3 ?? ''}}">

                                                    @error('child3_dob')
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
                                                        <input type="radio" value="male" @if(isset($childInformation->gender3) AND $childInformation->gender3 === 'male') checked="checked" @endif name="child3_gender">
                                                        <span class="checkmark">Male</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="female" @if(isset($childInformation->gender3) AND $childInformation->gender3 === 'female') checked="checked" @endif name="child3_gender">
                                                        <span class="checkmark">Female</span>
                                                    </label>
                                                   
                                                    @error('child3_gender')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                 
                                    
                                     <div class="sav-btn" >
                                            <button  type="submit">Save</button>
                                        </div>
                                </div>
                            </section>
                </form>
                            <!--Childs details End-->

                            <!--Pets House Student School detail Start-->
                <form action="{{ route('host_pets_house_student_school_application') }}" method="post" enctype="multipart/form-data">
                @csrf
                            <section class="my-newfrm" id="pets_house_student_school_application">
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
                                                            <input type="radio" value="yes" @if(isset($petInformation->pets_info) AND $petInformation->pets_info === 'yes') checked="checked" @endif name="pets_info">
                                                            <span class="checkmark">Yes</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="no" @if(isset($petInformation->pets_info) AND $petInformation->pets_info === 'no') checked="checked" @endif name="pets_info">
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
                                                            <input type="radio" value="Inside" @if(isset($petInformation->pets_info_detail) AND $petInformation->pets_info_detail === 'Inside') checked="checked" @endif name="pets_info_detail">
                                                            <span class="checkmark">Inside  </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="Outside" @if(isset($petInformation->pets_info_detail) AND $petInformation->pets_info_detail === 'Outside') checked="checked" @endif name="pets_info_detail">
                                                            <span class="checkmark">Outside  </span>
                                                        </label>
                                                         <label>
                                                            <input type="radio" value="Both" @if(isset($petInformation->pets_info_detail) AND $petInformation->pets_info_detail === 'Both') checked="checked" @endif name="pets_info_detail">
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
                                                            <input type="radio" value="House" @if(isset($schoolInformation->home_type) AND $schoolInformation->home_type === 'House') checked="checked" @endif name="home_type">
                                                            <span class="checkmark">House</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="Apartment/Townhome/Condominium" @if(isset($schoolInformation->home_type) AND $schoolInformation->home_type === 'Apartment/Townhome/Condominium') checked="checked" @endif name="home_type">
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
                                                            <input type="radio" value="1" @if(isset($schoolInformation->home_bedrooms_detail) AND $schoolInformation->home_bedrooms_detail == 1) checked="checked" @endif name="home_bedrooms_detail">
                                                            <span class="checkmark">1</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="2" @if(isset($schoolInformation->home_bedrooms_detail) AND $schoolInformation->home_bedrooms_detail == 2) checked="checked" @endif name="home_bedrooms_detail">
                                                            <span class="checkmark">2</span>
                                                        </label>
                                                         <label>
                                                            <input type="radio" value="3" @if(isset($schoolInformation->home_bedrooms_detail) AND $schoolInformation->home_bedrooms_detail == 3) checked="checked" @endif name="home_bedrooms_detail">
                                                            <span class="checkmark">3</span>
                                                        </label>
                                                       
                                                        @error('home_bedrooms_detail')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <h3>Student Preference Details</h3>
                                          <div class="row">
                                            <div class="col-md-6">
                                                <div class="permanent-adress ">
                                                    <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Gender 
                                                        <span>*</span></h6>
                                                    <div class="payment-ckbx three">
    
                                                        <label>
                                                            <input type="radio" value="male_student" @if(isset($schoolInformation->student_gender) AND $schoolInformation->student_gender === 'male_student') checked="checked" @endif name="student_gender">
                                                            <span class="checkmark">Male Student</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="female_student" @if(isset($schoolInformation->student_gender) AND $schoolInformation->student_gender === 'female_student') checked="checked" @endif name="student_gender">
                                                            <span class="checkmark">Female Student</span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="no_preference" @if(isset($schoolInformation->student_gender) AND $schoolInformation->student_gender === 'no_preference') checked="checked" @endif name="student_gender">
                                                            <span class="checkmark">No Preference</span>
                                                        </label>
                                                       
                                                        @error('student_gender')
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
                                                            <input type="radio" value="meals_student" @if(isset($schoolInformation->student_meal) AND $schoolInformation->student_meal === 'meals_student') checked="checked" @endif name="student_meal">
                                                            <span class="checkmark">Meals Student    </span>
                                                        </label>
                                                        <label>
                                                            <input type="radio" value="no_meals_student" @if(isset($schoolInformation->student_meal) AND $schoolInformation->student_meal === 'no_meals_student') checked="checked" @endif name="student_meal">
                                                            <span class="checkmark">No Meals Student    </span>
                                                        </label>
                                                         <label>
                                                            <input type="radio" value="no_preference" @if(isset($schoolInformation->student_meal) AND $schoolInformation->student_meal === 'no_preference') checked="checked" @endif name="student_meal">
                                                            <span class="checkmark">No Preference (please note that most ISP students are on the meal plan)  </span>
                                                        </label>
                                                       
                                                        @error('student_meal')
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
                                                    <input type="text" name="first_school_detail" value="{{ $schoolInformation->first_school_detail ?? ''}}">

                                                    @error('first_school_detail')
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
                                                    <input type="text" name="second_school_detail" value="{{ $schoolInformation->second_school_detail ?? ''}}">

                                                    @error('second_school_detail')
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
                                                    <input type="text" name="third_school_detail" value="{{ $schoolInformation->third_school_detail ?? ''}}">

                                                    @error('third_school_detail')
                                                    <div class="alert alert-danger">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                           
                                            <div class="sav-btn" >
                                            <button  type="submit">Save</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                </form>
                            <!--Pets House Student School detail End-->

                            <!--Personal Information Start-->
                <form action="{{ route('host_personal_detail_application') }}" method="post" enctype="multipart/form-data">
                @csrf
                            <section class="my-newfrm" id="personal_detail_application">
                                <div class="form_style  main-cardbox">
                                    <div class="medical-info">
                                        <h3>Personal Information</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Has anyone residing in the home been convicted of a felony?<span>*</span></h6>
                                                <div class="payment-ckbx three">

                                                    <label>
                                                        <input type="radio" value="yes"  @if(isset($personalInformation->anyone_residing_in_the_home) AND $personalInformation->anyone_residing_in_the_home === 'yes') checked="checked" @endif name="anyone_residing_in_the_home" >
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"  @if(isset($personalInformation->anyone_residing_in_the_home) AND $personalInformation->anyone_residing_in_the_home === 'no') checked="checked" @endif name="anyone_residing_in_the_home" >
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
                                                        <input type="radio" value="yes"  @if(isset($personalInformation->criminal_background_check) AND $personalInformation->criminal_background_check === 'yes') checked="checked" @endif name="criminal_background_check">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"  @if(isset($personalInformation->criminal_background_check) AND $personalInformation->criminal_background_check === 'no') checked="checked" @endif name="criminal_background_check">
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
                                                        <input type="radio" value="yes"  @if(isset($personalInformation->anyone_in_your_home_smoke) AND $personalInformation->anyone_in_your_home_smoke === 'yes') checked="checked" @endif name="anyone_in_your_home_smoke">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"  @if(isset($personalInformation->anyone_in_your_home_smoke) AND $personalInformation->anyone_in_your_home_smoke === 'no') checked="checked" @endif name="anyone_in_your_home_smoke">
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
                                                        <input type="radio" value="yes"  @if(isset($personalInformation->high_speed_wireless_Internet) AND $personalInformation->high_speed_wireless_Internet === 'yes') checked="checked" @endif name="high_speed_wireless_Internet">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"  @if(isset($personalInformation->high_speed_wireless_Internet) AND $personalInformation->high_speed_wireless_Internet === 'no') checked="checked" @endif name="high_speed_wireless_Internet">
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
                                                        <input type="radio" value="yes"  @if(isset($personalInformation->WHO_approved_COVID_Vaccine) AND $personalInformation->WHO_approved_COVID_Vaccine === 'yes') checked="checked" @endif name="WHO_approved_COVID_Vaccine">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"  @if(isset($personalInformation->WHO_approved_COVID_Vaccine) AND $personalInformation->WHO_approved_COVID_Vaccine === 'no') checked="checked" @endif name="WHO_approved_COVID_Vaccine" >
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
                                                    <input type="text" name="family_interests" value="{{ $personalInformation->family_interests ?? ''}}">

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
                                                    are typically prepared in your home and how often?</label><br>
                                                    <input type="text" name="breakfast_food_available_and_prepare_dinner" value="{{ $personalInformation->breakfast_food_available_and_prepare_dinner ?? '' }}">

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
                                                    <input type="text" name="your_daily_and_weekly_activities" value="{{ $personalInformation->your_daily_and_weekly_activities ?? ''}}">

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
                                   <div class="sav-btn" >
                                            <button  type="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                </form>
                            <!--Personal Information End-->

                            <!--emergency contacts Start-->
                <form action="{{ route('host_emergency_contact_application') }}" method="post" enctype="multipart/form-data">
                @csrf
                            <section class="my-newfrm" id="emergency_contact_application">
                                <div class="form_style  main-cardbox">
                                    <div class="airport">
                                        <h3>Please list two emergency contacts:</h3>
                                        <p>1)</p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="driver-dropdown">
                                                    <div class="input-flds before">
                                                        <label><i class="fa-solid fa-car"></i>Name:</label><br>
                                                        <input type="text" name="emergency_contact_name1" value="{{ $emergencyInformation->name1 ?? ''}}">
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
                                                        <input type="email" name="emergency_contact_email1" value="{{ $emergencyInformation->email1 ?? ''}}">
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
                                                        <input type="tel" name="emergency_contact_number1" value="{{ $emergencyInformation->number1 ?? ''}}">
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
                                                        <input type="text" name="emergency_contact_name2" value="{{ $emergencyInformation->name2 ?? ''}}">
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
                                                        <input type="email" name="emergency_contact_email2" value="{{ $emergencyInformation->email2 ?? ''}}">
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
                                                        <input type="tel" name="emergency_contact_number2" value="{{ $emergencyInformation->number2 ?? ''}}">
                                                        @error('emergency_contact_number2')
                                                        <div class="alert alert-danger">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                            
                                           <div class="sav-btn" >
                                            <button  type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                </form>            
                            <!--emergency contacts end-->
                        </article>
                    </main>


                    <!--International Student Placement Agreement End-->

                    <!-- Complete -->

             
                <!-- main -->
            <!--</form>-->
        </div>
    </section>
    
    
<!-- footer start  -->
@include('web.layouts.footer')
<!-- footer end  -->


<!-- js start -->
@include('web.layouts.js')
<!-- js ends -->

</body>



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
</html>
