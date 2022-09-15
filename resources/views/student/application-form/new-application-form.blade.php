<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css start -->
@include('web.layouts.std_css')
<!-- css ends -->
    <title>ISP - Student - Application Form</title>
</head>

<body>
<!-- header-top -->


<!-- header-top-end -->

<!-- header start -->
@include('web.layouts.header')
<!-- header end -->



{{--@extends('web.layouts.main')--}}
{{--@section('page_title','ISP - Student - Application Form')--}}
{{--@section('content')--}}

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
                                        <h1 class="wow zoomIn">Student Application Form</h1>
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
{{--@if ($errors->any())--}}

{{--    <div class="alert alert-danger">--}}
{{--        <ul class="list-unstyled">--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}
<section class="payment-form">
    <div class="container-fluid">

        {{--        <form action="#" method="post" enctype="multipart/form-data">--}}
        {{--            @csrf--}}

        <div class="form-main2">
            <!-- form new start-->
            <main class="main-newfrm">
                <article class=form-article>

                    <form action="{{route('saf_submit_1')}}" id="Form-Section1" method="post"
                          enctype="multipart/form-data">
                        @csrf
{{--                        <input type="hidden" name="section" value="Form-Section1"/>--}}
                        <!--Section 1 Start-->
                        <section class="my-newfrm">
                            <div class="form_style  main-cardbox">
                                @csrf
                                <h3> Choose Program</h3>
                                <div class="payment-ckbx">
                                    <label>
                                        <input type="radio" {{$Saf_BasicInfo && $Saf_BasicInfo->program == "College Student" ? "checked=checked" : "" }}
                                        value="College Student" name="program">
                                        <span class="checkmark">College Student</span>
                                    </label>
                                    <label>
                                        <input type="radio" value="High School Student"
                                               {{$Saf_BasicInfo && $Saf_BasicInfo->program == "High School Student" ? "checked=checked" : "" }}
                                               name="program">
                                        <span class="checkmark">High School Student</span>
                                    </label>
                                    <label>
                                        <input type="radio" value="Junior High School Student" name="program"
                                                {{$Saf_BasicInfo && $Saf_BasicInfo->program == "Junior High School Student" ? "checked=checked" : "" }}>
                                        <span class="checkmark">Junior High School Student</span>
                                    </label>
                                </div>
                                <hr class="hr-style">

                                <h3>Student Details</h3>

                                <!--Student Details Start-->
                                <div class="input-flds-main">
                                    <!--start-->
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-user"></i>First
                                                    Name<span>*</span></label>
                                                <input class="form1" type="text" name="first_name" value="{{$Saf_BasicInfo ? $Saf_BasicInfo->first_name : ""}}" required>

                                                @error('first_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-user"></i>Last
                                                    Name<span>*</span></label>
                                                <input class="form1" type="text" name="last_name" value="{{$Saf_BasicInfo ? $Saf_BasicInfo->last_name : ""}}" required>

                                                @error('last_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--end-->
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6 class="birhdate">Birthdate: <span class="birhdate">(To select a year quickly, click the year number
                                                (like
                                                "2020") and then
                                                the
                                                << symbol. To select a month quickly, click the month name.)</span></h6>

                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-calendar-days"></i>Date of Birth
                                                    <span>*</span></label><br>
                                                <input type="date" name="dob"  value="{{$Saf_BasicInfo ? $Saf_BasicInfo->dob : ""}}" required>

                                                @error('dob')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6 class="age"><i class="fa-solid fa-child"></i>Age <span>*</span></h6>
                                            <div class="input-flds">
                                                <input type="number" name="age" maxlength="3" value="{{$Saf_BasicInfo ? $Saf_BasicInfo->age : ""}}" required>
                                                @error('age')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6 class="pay-method two"><i class="fa-solid fa-user"></i>Gender
                                                <span>*</span></h6>
                                            <div class="payment-ckbx two">

                                                <label>
                                                    <input type="radio" value="Male" {{$Saf_BasicInfo && $Saf_BasicInfo->gender == "Male" ? "checked=checked" : "" }}
                                                           name="gender">
                                                    <span class="checkmark">Male</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="Female" name="gender" {{$Saf_BasicInfo && $Saf_BasicInfo->gender == "Female" ? "checked=checked" : "" }}>
                                                    <span class="checkmark">Female</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="Other" name="gender" {{$Saf_BasicInfo && $Saf_BasicInfo->gender == "Other" ? "checked=checked" : "" }}>
                                                    <span class="checkmark">Other</span>
                                                </label>


                                                @error('gender')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="input-flds before">
                                                <label><i class="fa-solid fa-earth-americas"></i>Country of
                                                    Permanent
                                                    Residence<span>*</span></label>
                                                <select class="yd-select " required="" data-parsley-required=""
                                                        data-parsley-required-message="This field is Required."
                                                        name="country_of_permanent_residence"
                                                        id="country_of_permanent_residence"
                                                        placeholder=""
                                                        tabindex="1" data-parsley-group="block-0">
                                                    <option value="{{$Saf_BasicInfo ? $Saf_BasicInfo->country_of_permanent_residence : ""}}">{{$Saf_BasicInfo ? $Saf_BasicInfo->country_of_permanent_residence : ""}}</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Ascension">Ascension</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia And Herzegovina">Bosnia And Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian
                                                        Ocean
                                                        Territory
                                                    </option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African
                                                        Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (keeling) Islands">Cocos (keeling) Islands
                                                    </option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="CÔte D'ivoire">CÔte D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Diego Garcia">Diego Garcia</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Europäische Union">Europäische Union</option>
                                                    <option value="European Union">European Union</option>
                                                    <option value="Falkland Islands (malvinas)">Falkland Islands
                                                        (malvinas)
                                                    </option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island And Mcdonald Islands">Heard Island
                                                        And
                                                        Mcdonald Islands
                                                    </option>
                                                    <option value="Holy See (vatican City State)">Holy See (vatican
                                                        City
                                                        State)
                                                    </option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle Of Man">Isle Of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kanarische Inseln">Kanarische Inseln</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's
                                                        Democratic Republic
                                                    </option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles
                                                    </option>
                                                    <option value="Neutrale Zone">Neutrale Zone</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory">Palestinian Territory
                                                    </option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="RÉunion">RÉunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts And Nevis">Saint Kitts And Nevis
                                                    </option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre And Miquelon">Saint Pierre And
                                                        Miquelon
                                                    </option>
                                                    <option value="Saint Vincent And The Grenadines">Saint Vincent
                                                        And
                                                        The Grenadines
                                                    </option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome And Principe">Sao Tome And Principe
                                                    </option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbien und Montenegro">Serbien und Montenegro
                                                    </option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia And The South Sandwich Islands">
                                                        South
                                                        Georgia And The
                                                        South
                                                        Sandwich Islands
                                                    </option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen
                                                    </option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic
                                                    </option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                                    <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks And Caicos Islands">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="Union der Sozialistischen Sowjetrepubliken">Union
                                                        der
                                                        Sozialistischen
                                                        Sowjetrepubliken
                                                    </option>
                                                    <option value="United Arab Emirates">United Arab Emirates
                                                    </option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands">Virgin Islands</option>
                                                    <option value="Virgin Islands">Virgin Islands</option>
                                                    <option value="Wallis And Futuna">Wallis And Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>

                                                @error('country_of_permanent_residence')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6 class="passport-number"><i class="fa-solid fa-passport"></i>Passport
                                                Number
                                                <span>*</span></h6>
                                            <div class="input-flds">
                                                <input type="text" name="passport_number" maxlength="100" value="{{$Saf_BasicInfo ? $Saf_BasicInfo->passport_number : ""}}" required>

                                                @error('passport_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6 class="passport-exp"><i class="fa-solid fa-calendar-days"></i>Expiration
                                                Date
                                                <span>*</span></h6>
                                            <div class="input-flds">
                                                <input type="date" name="passport_exp" value="{{$Saf_BasicInfo ? $Saf_BasicInfo->passport_exp : ""}}" required>

                                                @error('passport_exp')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <h6 class="passport-exp"><i class="fa-solid fa-calendar-days"></i>Attach
                                                Profile Photo
                                                <span>*</span></h6>
                                            <div class="form-submit">
                                                <input type="file" id="myFile" name="student_profile_photo">

                                                @error('student_profile_photo')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                    {{--                                    <a href="javascript:void(0)" class="form-submit"--}}
                                    {{--                                       onclick="getFormObj('Form-Section1');">Save</a>--}}
                                    {{--                                    <button type="button" onclick="getFormObj('Form-Section1');">save</button>--}}
                                </div>
                                <!--Student Details End-->
                            </div>
                        </section>
                        <!--Section 1 End-->
                    </form>
                    <!--Section 2 Start-->
                    <form action="{{route('saf_submit_2_1')}}" id="Form-Section2-1" method="post">
                        @csrf
{{--                        <input type="hidden" name="section" value="Form-Section2-1"/>--}}
                        <!--Section 2 First Half Start-->
                        <section class="my-newfrm" id="section-Section2-1">
                            <div class="form_style  main-cardbox">
                                <h3>Student Details</h3>

                                <!--Student Address Start-->
                                <!--start-->
                                <div class="permanent-adress ">
                                    <h3>Your Address</h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-address"></i>Address<span>*</span></label>
                                                <input type="text" name="student_address" value="{{$SafStudentInfo ? $SafStudentInfo->student_address : ""}}" required>

                                                @error('student_address')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds before">
                                                <label><i class="fa-solid fa-earth-americas"></i>Country<span>*</span></label>
                                                <select class="yd-select " name="student_country"
                                                        id="student_country"
                                                        placeholder=""
                                                        tabindex="1" data-parsley-group="block-0">
                                                    <option value="{{$SafStudentInfo ? $SafStudentInfo->student_country : ""}}">{{$SafStudentInfo ? $SafStudentInfo->student_country : ""}}</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Ascension">Ascension</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia And Herzegovina">Bosnia And Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian
                                                        Ocean
                                                        Territory
                                                    </option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African
                                                        Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (keeling) Islands">Cocos (keeling) Islands
                                                    </option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="CÔte D'ivoire">CÔte D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Diego Garcia">Diego Garcia</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Europäische Union">Europäische Union</option>
                                                    <option value="European Union">European Union</option>
                                                    <option value="Falkland Islands (malvinas)">Falkland Islands
                                                        (malvinas)
                                                    </option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island And Mcdonald Islands">Heard Island
                                                        And
                                                        Mcdonald Islands
                                                    </option>
                                                    <option value="Holy See (vatican City State)">Holy See (vatican
                                                        City
                                                        State)
                                                    </option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle Of Man">Isle Of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kanarische Inseln">Kanarische Inseln</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's
                                                        Democratic Republic
                                                    </option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles
                                                    </option>
                                                    <option value="Neutrale Zone">Neutrale Zone</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory">Palestinian Territory
                                                    </option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="RÉunion">RÉunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts And Nevis">Saint Kitts And Nevis
                                                    </option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre And Miquelon">Saint Pierre And
                                                        Miquelon
                                                    </option>
                                                    <option value="Saint Vincent And The Grenadines">Saint Vincent
                                                        And
                                                        The Grenadines
                                                    </option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome And Principe">Sao Tome And Principe
                                                    </option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbien und Montenegro">Serbien und Montenegro
                                                    </option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia And The South Sandwich Islands">
                                                        South
                                                        Georgia And The
                                                        South
                                                        Sandwich Islands
                                                    </option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen
                                                    </option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic
                                                    </option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                                    <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks And Caicos Islands">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="Union der Sozialistischen Sowjetrepubliken">Union
                                                        der
                                                        Sozialistischen
                                                        Sowjetrepubliken
                                                    </option>
                                                    <option value="United Arab Emirates">United Arab Emirates
                                                    </option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands">Virgin Islands</option>
                                                    <option value="Virgin Islands">Virgin Islands</option>
                                                    <option value="Wallis And Futuna">Wallis And Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>

                                                @error('student_country')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-number"></i>Zip
                                                    Code<span>*</span></label>
                                                <input type="number" name="student_address_zip_code" value="{{$SafStudentInfo ? $SafStudentInfo->student_address_zip_code : ""}}" required>

                                                @error('student_address_zip_code')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Student Address End-->
                                <!--end-->


                                <!--Parents Contact Start-->
                                <div class="permanent-adress ">
                                    <h3>Father’s Details </h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">

                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-phone"></i>Name<span>*</span></label>
                                                <input type="text" name="father_name" value="{{$SafStudentInfo ? $SafStudentInfo->father_name : ""}}" required>

                                                @error('father_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-phone"></i>Phone<span>*</span></label>
                                                <input type="tel" name="father_phone" value="{{$SafStudentInfo ? $SafStudentInfo->father_phone : ""}}" required>

                                                @error('father_phone')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-email"></i>Email<span>*</span></label>
                                                <input type="email" name="father_email"  value="{{$SafStudentInfo ? $SafStudentInfo->father_email : ""}}" required>

                                                @error('father_email')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <h3>Mother’s Details </h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">

                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-phone"></i>Name<span>*</span></label>
                                                <input type="text" name="mother_name"  value="{{$SafStudentInfo ? $SafStudentInfo->mother_name : ""}}" required>

                                                @error('mother_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-phone"></i>Phone<span>*</span></label>
                                                <input type="tel" name="mother_phone"  value="{{$SafStudentInfo ? $SafStudentInfo->mother_phone : ""}}" required>

                                                @error('mother_phone')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-email"></i>Email<span>*</span></label>
                                                <input type="email" name="mother_email" value="{{$SafStudentInfo ? $SafStudentInfo->mother_email : ""}}" required>

                                                @error('mother_email')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Parents Contact End-->

                                <!--Phone Details Start-->
                                <div class="permanent-adress ">
                                    <h3>Phone Number <p>(with country code)</p></h3>

                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-mobile-button"></i>Phone
                                                    Number<span>*</span></label>
                                                <input type="text" name="student_contact_phone_number" value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_phone_number : ""}}" required>

                                                @error('student_contact_phone_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">

                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-envelope"></i>Email<span>*</span></label>
                                                <input type="text" name="student_contact_email" value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_email : ""}}" required>

                                                @error('student_contact_email')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-mobile-button"></i>WeChat
                                                    <span>*</span></label>
                                                <input type="text" name="student_contact_wechat_number" value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_wechat_number : ""}}" required>

                                                @error('student_contact_wechat_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-mobile-button"></i>Line
                                                    <span>*</span></label>
                                                <input type="text" name="student_contact_line_number" value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_line_number : ""}}" required>

                                                @error('student_contact_line_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-mobile-button"></i>WhatsApp
                                                    <span>*</span></label>
                                                <input type="text" name="student_contact_whatsApp_number" value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_whatsApp_number : ""}}" required>

                                                @error('student_contact_whatsApp_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Phone Details End-->

                                <!--Emergency Contact Start-->
                                <div class="permanent-adress ">
                                    <h3>Emergency Contact : <p>(Person Must Speak English)</p></h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-user"></i>Name<span>*</span></label>
                                                <input type="text" name="emergency_contact_name" value="{{$SafStudentInfo ? $SafStudentInfo->emergency_contact_name : ""}}" required>

                                                @error('emergency_contact_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-user"></i>Relationship to
                                                    Student<span>*</span></label>
                                                <input type="text" name="emergency_contact_relation" value="{{$SafStudentInfo ? $SafStudentInfo->emergency_contact_relation : ""}}" required>

                                                @error('emergency_contact_relation')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-mobile-button"></i>Cell Phone with
                                                    Country
                                                    Code<span>*</span></label>
                                                <input type="text" name="emergency_contact_phone_number" value="{{$SafStudentInfo ? $SafStudentInfo->emergency_contact_phone_number : ""}}">

                                                @error('emergency_contact_phone_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-envelope"></i>Email<span>*</span></label>
                                                <input type="text" name="emergency_contact_email" value="{{$SafStudentInfo ? $SafStudentInfo->emergency_contact_email : ""}}" required>

                                                @error('emergency_contact_email')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </section>
                        <!--Section 2 First Half End-->
                    </form>

                    <form action="{{route('saf_submit_2_2')}}" id="Form-Section2-2" method="post">
                    @csrf
                    <!--Section 2 Second Half Start-->
                        <section class="my-newfrm" id="section-Section2-2" >
                            <div class="form_style  main-cardbox">

                                <!--Emergency Contact End-->

                                <!--School Details Start-->
                                <div class="permanent-adress student">
                                    <h3>School Details</h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds before">
                                                <label><i class="fa-solid fa-graduation-cap"></i>Name of
                                                    School<span>*</span></label>
                                                <select class="yd-select " required="" data-parsley-required=""
                                                        data-parsley-required-message="This field is Required."
                                                        name="school_you_attend"
                                                        id="school_name" placeholder="" tabindex="1"
                                                        data-parsley-group="block-0"
                                                        required>
                                                    <option value="{{$SafStudentInfo ? $SafStudentInfo->school_you_attend : ""}}">{{$SafStudentInfo ? $SafStudentInfo->school_you_attend : ""}}</option>

                                                    <option value="Academy of Art">Academy of Art</option>
                                                    <option value="Acosta - Hawaii">Acosta - Hawaii</option>
                                                    <option value="Admissions Academy">Admissions Academy</option>
                                                    <option value="AF International">AF International</option>
                                                    <option value="Alameda High School">Alameda High School</option>
                                                    <option value="Alliant International University">Alliant
                                                        International University
                                                    </option>
                                                    <option value="Amador Valley High School">Amador Valley High
                                                        School
                                                    </option>
                                                    <option value="American Academy of English">American Academy of
                                                        English
                                                    </option>
                                                    <option value="American Film Institute">American Film Institute
                                                    </option>
                                                    <option value="Apple Computers">Apple Computers</option>
                                                    <option value="Ardery Kell High School">Ardery Kell High School
                                                    </option>
                                                    <option value="Arroyo Pacific High School">Arroyo Pacific High
                                                        School
                                                    </option>
                                                    <option value="Art Center College of Design">Art Center College
                                                        of
                                                        Design
                                                    </option>
                                                    <option value="Art Institute of California">Art Institute of
                                                        California
                                                    </option>
                                                    <option value="Balboa High School">Balboa High School</option>
                                                    <option value="Bishop Alemany High School">Bishop Alemany High
                                                        School
                                                    </option>
                                                    <option value="Brash Insight Corporation">Brash Insight
                                                        Corporation
                                                    </option>
                                                    <option value="Cabrillo College">Cabrillo College</option>
                                                    <option value="California College of Arts">California College of
                                                        Arts
                                                    </option>
                                                    <option value="Camp Moguteng">Camp Moguteng</option>
                                                    <option value="Canada College">Canada College</option>
                                                    <option value="Cathedral High School">Cathedral High School
                                                    </option>
                                                    <option value="CCE USA">CCE USA</option>
                                                    <option value="Century School of Languages">Century School of
                                                        Languages
                                                    </option>
                                                    <option value="Chabot College">Chabot College</option>
                                                    <option value="Charlotte Country Day School">Charlotte Country
                                                        Day
                                                        School
                                                    </option>
                                                    <option value="Chinese Christian School">Chinese Christian
                                                        School
                                                    </option>
                                                    <option value="Christian High School">Christian High School
                                                    </option>
                                                    <option value="Citrus College">Citrus College</option>
                                                    <option value="City College of San Francisco">City College of
                                                        San
                                                        Francisco
                                                    </option>
                                                    <option value="Coastline Community College">Coastline Community
                                                        College
                                                    </option>
                                                    <option value="College of Marin">College of Marin</option>
                                                    <option value="College of Marin - Kentfield">College of Marin -
                                                        Kentfield
                                                    </option>
                                                    <option value="College of San Mateo">College of San Mateo
                                                    </option>
                                                    <option value="College of the Desert">College of the Desert
                                                    </option>
                                                    <option value="Cornerstone College Preparatory">Cornerstone
                                                        College
                                                        Preparatory
                                                    </option>
                                                    <option value="Cosumnes River College">Cosumnes River College
                                                    </option>
                                                    <option value="CSU East Bay">CSU East Bay</option>
                                                    <option value="CSU Fullerton">CSU Fullerton</option>
                                                    <option value="CSU Long Beach">CSU Long Beach</option>
                                                    <option value="CSU Los Angeles">CSU Los Angeles</option>
                                                    <option value="CSU Monterey Bay">CSU Monterey Bay</option>
                                                    <option value="CSU Northridge">CSU Northridge</option>
                                                    <option value="CSU Sacramento">CSU Sacramento</option>
                                                    <option value="CSU Stanislaus">CSU Stanislaus</option>
                                                    <option value="Cypress College">Cypress College</option>
                                                    <option value="Cypress High School">Cypress High School</option>
                                                    <option value="Daifuku">Daifuku</option>
                                                    <option value="De Anza College">De Anza College</option>
                                                    <option value="Devry University - Sherman Oaks">Devry University
                                                        -
                                                        Sherman Oaks
                                                    </option>
                                                    <option value="Diablo Valley College">Diablo Valley College
                                                    </option>
                                                    <option value="Diamond Bar High School">Diamond Bar High School
                                                    </option>
                                                    <option value="Eagle Fustar">Eagle Fustar</option>
                                                    <option value="ECI/ Monterey Bay Academy">ECI/ Monterey Bay
                                                        Academy
                                                    </option>
                                                    <option value="Edge">Edge</option>
                                                    <option value="El Camino College">El Camino College</option>
                                                    <option value="Elmengard, Inc.">Elmengard, Inc.</option>
                                                    <option value="ELS Cupertino">ELS Cupertino</option>
                                                    <option value="ELS Santa Cruz">ELS Santa Cruz</option>
                                                    <option value="Encinal High School">Encinal High School</option>
                                                    <option value="English Language Institute">English Language
                                                        Institute
                                                    </option>
                                                    <option value="Enplas Tesco, Inc.">Enplas Tesco, Inc.</option>
                                                    <option value="Evergreen College">Evergreen College</option>
                                                    <option value="Fashion Institute of Design and Merchandising">
                                                        Fashion Institute of
                                                        Design and Merchandising
                                                    </option>
                                                    <option value="FIDM (San Francisco)">FIDM (San Francisco)
                                                    </option>
                                                    <option value="Foothill College">Foothill College</option>
                                                    <option value="Franklin Elementary">Franklin Elementary</option>
                                                    <option value="Fremont Christian School">Fremont Christian
                                                        School
                                                    </option>
                                                    <option value="French American International">French American
                                                        International
                                                    </option>
                                                    <option value="Fullerton College">Fullerton College</option>
                                                    <option value="FUTTON - De Anza">FUTTON - De Anza</option>
                                                    <option value="Futton - SAC">Futton - SAC</option>
                                                    <option value="Future Rhythm">Future Rhythm</option>
                                                    <option value="Glendale Adventist Academy">Glendale Adventist
                                                        Academy
                                                    </option>
                                                    <option value="Glendale College">Glendale College</option>
                                                    <option value="Global View - Hawaii">Global View - Hawaii
                                                    </option>
                                                    <option value="Go Abbey Road">Go Abbey Road</option>
                                                    <option value="Golden Gate University">Golden Gate University
                                                    </option>
                                                    <option value="Golden Gate Language School">Golden Gate Language
                                                        School
                                                    </option>
                                                    <option value="Golden West College">Golden West College</option>
                                                    <option value="Hale Kalei">Hale Kalei</option>
                                                    <option value="Hancock International">Hancock International
                                                    </option>
                                                    <option value="Hawaii - Miscellaneous">Hawaii - Miscellaneous
                                                    </option>
                                                    <option value="Hawaii Pacific University">Hawaii Pacific
                                                        University
                                                    </option>
                                                    <option value="Heritage Oaks Private School">Heritage Oaks
                                                        Private
                                                        School
                                                    </option>
                                                    <option value="HI- Hale Kalei">HI- Hale Kalei</option>
                                                    <option value="Hi- Tourist">Hi- Tourist</option>
                                                    <option value="Hollywood Pop Academy">Hollywood Pop Academy
                                                    </option>
                                                    <option value="Holy Family High School">Holy Family High School
                                                    </option>
                                                    <option value="HP Palo Alto">HP Palo Alto</option>
                                                    <option value="Intel - Intern">Intel - Intern</option>
                                                    <option value="International H.S.">International H.S.</option>
                                                    <option value="Intrax">Intrax</option>
                                                    <option value="Irvine Valley College">Irvine Valley College
                                                    </option>
                                                    <option value="JFK High School">JFK High School</option>
                                                    <option value="John Burrows Burbank CA">John Burrows Burbank CA
                                                    </option>
                                                    <option value="Kapiolani Community College">Kapiolani Community
                                                        College
                                                    </option>
                                                    <option value="Kaplan Aspect - Sacramento">Kaplan Aspect -
                                                        Sacramento
                                                    </option>
                                                    <option value="Keppel Elementary">Keppel Elementary</option>
                                                    <option value="Kyushu University">Kyushu University</option>
                                                    <option value="L.A. Tourist">L.A. Tourist</option>
                                                    <option value="LA Mission College">LA Mission College</option>
                                                    <option value="La Perouse High School">La Perouse High School
                                                    </option>
                                                    <option value="Language Pacifica">Language Pacifica</option>
                                                    <option value="Las Positas College">Las Positas College</option>
                                                    <option value="Leeward Community College">Leeward Community
                                                        College
                                                    </option>
                                                    <option value="Long Beach City College">Long Beach City College
                                                    </option>
                                                    <option value="Los Altos High School">Los Altos High School
                                                    </option>
                                                    <option value="Los Angeles City College">Los Angeles City
                                                        College
                                                    </option>
                                                    <option value="Los Angeles Placement">Los Angeles Placement
                                                    </option>
                                                    <option value="Loyola Marymount University">Loyola Marymount
                                                        University
                                                    </option>
                                                    <option value="Lutheran High School - Orange County">Lutheran
                                                        High
                                                        School - Orange
                                                        County
                                                    </option>
                                                    <option value="Makeup Designory School">Makeup Designory School
                                                    </option>
                                                    <option value="Maranatha High School">Maranatha High School
                                                    </option>
                                                    <option value="Marshall High School">Marshall High School
                                                    </option>
                                                    <option value="Mary Star of the Sea High School">Mary Star of
                                                        the
                                                        Sea High School
                                                    </option>
                                                    <option value="Maybeck High School">Maybeck High School</option>
                                                    <option value="Mercy High School">Mercy High School</option>
                                                    <option value="Merritt College">Merritt College</option>
                                                    <option value="Merryhill Yosemite School">Merryhill Yosemite
                                                        School
                                                    </option>
                                                    <option value="MidPeninsula High School">MidPeninsula High
                                                        School
                                                    </option>
                                                    <option value="Mission College">Mission College</option>
                                                    <option value="Mission San Jose High School">Mission San Jose
                                                        High
                                                        School
                                                    </option>
                                                    <option value="Monta Vista High School">Monta Vista High School
                                                    </option>
                                                    <option value="Monte Vista Christian School">Monte Vista
                                                        Christian
                                                        School
                                                    </option>
                                                    <option value="Monte Vista Elementary">Monte Vista Elementary
                                                    </option>
                                                    <option value="Montecito High School">Montecito High School
                                                    </option>
                                                    <option value="Monterey Peninsula College">Monterey Peninsula
                                                        College
                                                    </option>
                                                    <option value="Moreau Catholic High School">Moreau Catholic High
                                                        School
                                                    </option>
                                                    <option value="Mountain View Academy">Mountain View Academy
                                                    </option>
                                                    <option value="Mt. San Antonio">Mt. San Antonio</option>
                                                    <option value="National University San Diego">National
                                                        University
                                                        San Diego
                                                    </option>
                                                    <option value="National University-LA">National University-LA
                                                    </option>
                                                    <option value="New York Film Academy">New York Film Academy
                                                    </option>
                                                    <option value="Newark Memorial High School">Newark Memorial High
                                                        School
                                                    </option>
                                                    <option value="Northwestern Polytechnic University">Northwestern
                                                        Polytechnic
                                                        University
                                                    </option>
                                                    <option value="NTT Data Agilenet LLC">NTT Data Agilenet LLC
                                                    </option>
                                                    <option value="Ohlone College">Ohlone College</option>
                                                    <option value="Orange Coast College">Orange Coast College
                                                    </option>
                                                    <option value="Other">Other</option>
                                                    <option value="Pasadena City College">Pasadena City College
                                                    </option>
                                                    <option value="Pierce College">Pierce College</option>
                                                    <option value="Pinewood School">Pinewood School</option>
                                                    <option value="Portnov">Portnov</option>
                                                    <option value="Providence High School">Providence High School
                                                    </option>
                                                    <option value="Quarry Lane High School">Quarry Lane High School
                                                    </option>
                                                    <option value="Ramona Convent Secondary School">Ramona Convent
                                                        Secondary School
                                                    </option>
                                                    <option value="Redwood Christian School">Redwood Christian
                                                        School
                                                    </option>
                                                    <option value="Relief International">Relief International
                                                    </option>
                                                    <option value="Sacramento City College">Sacramento City College
                                                    </option>
                                                    <option value="Sacramento State Univ.">Sacramento State Univ.
                                                    </option>
                                                    <option value="Saint Francis">Saint Francis</option>
                                                    <option value="Saint Ignatius High school">Saint Ignatius High
                                                        school
                                                    </option>
                                                    <option value="San Diego State Universtiy">San Diego State
                                                        Universtiy
                                                    </option>
                                                    <option value="San Domenico High School">San Domenico High
                                                        School
                                                    </option>
                                                    <option value="San Francisco State">San Francisco State</option>
                                                    <option value="San Francisco Waldorf">San Francisco Waldorf
                                                    </option>
                                                    <option value="San Jose City College">San Jose City College
                                                    </option>
                                                    <option value="San Jose State">San Jose State</option>
                                                    <option value="Santa Ana College">Santa Ana College</option>
                                                    <option value="Santa Clara Middle School">Santa Clara Middle
                                                        School
                                                    </option>
                                                    <option value="Santa Clara University">Santa Clara University
                                                    </option>
                                                    <option value="Santa Cruz">Santa Cruz</option>
                                                    <option value="Santa Margarita Catholic High School">Santa
                                                        Margarita
                                                        Catholic High
                                                        School
                                                    </option>
                                                    <option value="Santa Monica College">Santa Monica College
                                                    </option>
                                                    <option value="Santa Monica Intern">Santa Monica Intern</option>
                                                    <option value="Santa Rosa Junior College">Santa Rosa Junior
                                                        College
                                                    </option>
                                                    <option value="Santiago High School">Santiago High School
                                                    </option>
                                                    <option value="SCI - Architecture">SCI - Architecture</option>
                                                    <option value="SF/SF Tourist">SF/SF Tourist</option>
                                                    <option value="Sierra School">Sierra School</option>
                                                    <option value="Silicon Valley Intensive English Program (SVIEP)">
                                                        Silicon Valley
                                                        Intensive English Program (SVIEP)
                                                    </option>
                                                    <option value="Skyline College">Skyline College</option>
                                                    <option value="Solex/ Applied Solar">Solex/ Applied Solar
                                                    </option>
                                                    <option value="Sora Language School">Sora Language School
                                                    </option>
                                                    <option value="Southlands Christian High School">Southlands
                                                        Christian High School
                                                    </option>
                                                    <option value="St. Francis Medical Center">St. Francis Medical
                                                        Center
                                                    </option>
                                                    <option value="St. Mary’s College">St. Mary’s College</option>
                                                    <option value="Stanford University">Stanford University</option>
                                                    <option value="Studies in American Language">Studies in American
                                                        Language
                                                    </option>
                                                    <option value="Sunnyvale">Sunnyvale</option>
                                                    <option value="Supinfo">Supinfo</option>
                                                    <option value="TALK">TALK</option>
                                                    <option value="Teacher Homestay Program">Teacher Homestay
                                                        Program
                                                    </option>
                                                    <option value="TEMCO Sky Network">TEMCO Sky Network</option>
                                                    <option value="Tourist">Tourist</option>
                                                    <option value="Transworld Schools">Transworld Schools</option>
                                                    <option value="Tourist-SF">Tourist-SF</option>
                                                    <option value="Troy High School">Troy High School</option>
                                                    <option value="Truckee Meadows Community College">Truckee
                                                        Meadows
                                                        Community College
                                                    </option>
                                                    <option value="UC Berkeley">UC Berkeley</option>
                                                    <option value="UC Davis">UC Davis</option>
                                                    <option value="UC Irvine">UC Irvine</option>
                                                    <option value="UC Santa Cruz">UC Santa Cruz</option>
                                                    <option value="UC Santa Cruz - ELI">UC Santa Cruz - ELI</option>
                                                    <option value="UCLA">UCLA</option>
                                                    <option value="UCSB">UCSB</option>
                                                    <option value="UCSC Silicon Valley Extension">UCSC Silicon
                                                        Valley
                                                        Extension
                                                    </option>
                                                    <option value="University of Hawaii at Leeward">University of
                                                        Hawaii
                                                        at Leeward
                                                    </option>
                                                    <option value="University of Hawaii at Manoa">University of
                                                        Hawaii
                                                        at Manoa
                                                    </option>
                                                    <option value="University of Hawaii, Manoa, NICE">University of
                                                        Hawaii, Manoa, NICE
                                                    </option>
                                                    <option value="University of Los Angeles">University of Los
                                                        Angeles
                                                    </option>
                                                    <option value="University of San Francisco">University of San
                                                        Francisco
                                                    </option>
                                                    <option value="University of Southern CA">University of Southern
                                                        CA
                                                    </option>
                                                    <option value="Unversity of Hawaii, HELP">Unversity of Hawaii,
                                                        HELP
                                                    </option>
                                                    <option value="Valencia High School">Valencia High School
                                                    </option>
                                                    <option value="Valley Christian High School">Valley Christian
                                                        High
                                                        School
                                                    </option>
                                                    <option value="Villanova Prep. School, Ojai">Villanova Prep.
                                                        School,
                                                        Ojai
                                                    </option>
                                                    <option value="Wailua High School">Wailua High School</option>
                                                    <option value="Waldorf High School">Waldorf High School</option>
                                                    <option value="West LA College">West LA College</option>
                                                    <option value="West Valley College">West Valley College</option>
                                                    <option value="Woodsbury High School">Woodsbury High School
                                                    </option>
                                                    <option value="Woodside International HS">Woodside International
                                                        HS
                                                    </option>
                                                    <option value="Other">Other</option>

                                                </select>

                                                @error('school_you_attend')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-graduation-cap"></i>School Name if not
                                                    in
                                                    List</label>
                                                <input type="text" name="school_name_not_in_list" value="{{$SafStudentInfo ? $SafStudentInfo->school_name_not_in_list : ""}}">

                                                @error('school_name_not_in_list')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-user"></i>School
                                                    City<span>*</span></label>
                                                <input type="text" name="school_city" value="{{$SafStudentInfo ? $SafStudentInfo->school_city : ""}}" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds before">
                                                <label><i class="fa-solid fa-address-card"></i>School
                                                    State<span>*</span></label>
                                                <select class="yd-select " required="" data-parsley-required=""
                                                        data-parsley-required-message="This field is Required."
                                                        name="school_state"
                                                        id="school_state" placeholder="" tabindex="1"
                                                        data-parsley-group="block-0">
                                                    <option value="{{$SafStudentInfo ? $SafStudentInfo->school_state : ""}}">{{$SafStudentInfo ? $SafStudentInfo->school_state : ""}}</option>
                                                    <option value="Alaska"> Alaska</option>
                                                    <option value="Arizona"> Arizona</option>
                                                    <option value="Arkansas"> Arkansas</option>
                                                    <option value="California"> California</option>
                                                    <option value="Colorado"> Colorado</option>
                                                    <option value="Connecticut"> Connecticut</option>
                                                    <option value="Delaware"> Delaware</option>
                                                    <option value="Florida"> Florida</option>
                                                    <option value="Georgia"> Georgia</option>
                                                    <option value="Hawaii"> Hawaii</option>
                                                    <option value="Idaho"> Idaho</option>
                                                    <option value="Illinois"> Illinois</option>
                                                    <option value="Indiana"> Indiana</option>
                                                    <option value="Iowa"> Iowa</option>
                                                    <option value="Kansas"> Kansas</option>
                                                    <option value="Kentucky"> Kentucky</option>
                                                    <option value="Louisiana"> Louisiana</option>
                                                    <option value="Maine"> Maine</option>
                                                    <option value="Maryland"> Maryland</option>
                                                    <option value="Massachusetts"> Massachusetts</option>
                                                    <option value="Michigan"> Michigan</option>
                                                    <option value="Minnesota"> Minnesota</option>
                                                    <option value="Mississippi"> Mississippi</option>
                                                    <option value="Missouri"> Missouri</option>
                                                    <option value="Montana"> Montana</option>
                                                    <option value="Nebraska"> Nebraska</option>
                                                    <option value="Nevada"> Nevada</option>
                                                    <option value="New Hampshire"> New Hampshire</option>
                                                    <option value="New Jersey"> New Jersey</option>
                                                    <option value="New Mexico"> New Mexico</option>
                                                    <option value="New York"> New York</option>
                                                    <option value="North Carolina"> North Carolina</option>
                                                    <option value="North Dakota"> North Dakota</option>
                                                    <option value="Ohio"> Ohio</option>
                                                    <option value="Oklahoma"> Oklahoma</option>
                                                    <option value="Oregon"> Oregon</option>
                                                    <option value="Pennsylvania"> Pennsylvania</option>
                                                    <option value="Rhode Island"> Rhode Island</option>
                                                    <option value="South Carolina"> South Carolina</option>
                                                    <option value="South Dakota"> South Dakota</option>
                                                    <option value="Tennessee"> Tennessee</option>
                                                    <option value="Texas"> Texas</option>
                                                    <option value="Utah"> Utah</option>
                                                    <option value="Vermont"> Vermont</option>
                                                    <option value="Virginia"> Virginia</option>
                                                    <option value="Washington"> Washington</option>
                                                    <option value="West Virginia"> West Virginia</option>
                                                    <option value="Wisconsin"> Wisconsin</option>
                                                    <option value="Wyoming"> Wyoming</option>
                                                    <option value="Washington DC"> Washington DC</option>
                                                    <option value="Puerto Rico"> Puerto Rico</option>
                                                    <option value="U.S. Virgin Islands"> U.S. Virgin Islands
                                                    </option>
                                                    <option value="American Samoa"> American Samoa</option>
                                                    <option value="Guam"> Guam</option>
                                                    <option value="Northern Mariana Islands"> Northern Mariana
                                                        Islands
                                                    </option>
                                                </select>
                                                @error('school_state')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-graduation-cap"></i>Major/Field of
                                                    Study</label>
                                                <input type="text" name="major_field_of_study" value="{{$SafStudentInfo ? $SafStudentInfo->major_field_of_study : ""}}">

                                                @error('major_field_of_study')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--School Details End-->

                                <!--Lenght Of Homestay Start-->
                                <div class="permanent-adress homestay">
                                    <h3>Length of homestay:</h3>
                                    <p>
                                        Minimum contract length for Southern California students is 3 months.
                                    </p>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label class="label-color"><i class="fa-solid fa-calendar-days"></i>Length
                                                of
                                                Stay:<span>*</span>
                                            </label>
                                            <div class="payment-ckbx ">
                                                <label>
                                                    <input type="radio" value="2 Months" {{$SafStudentInfo && $SafStudentInfo->length_of_stay == "2 Months" ? "checked=checked" : "" }}
                                                           name="length_of_stay">
                                                    <span class="checkmark">2 Months</span>
                                                </label>


                                                <label>
                                                    <input type="radio" value="3 Months" {{$SafStudentInfo && $SafStudentInfo->length_of_stay == "3 Months" ? "checked=checked" : "" }}
                                                           name="length_of_stay">
                                                    <span class="checkmark">3 Months</span>
                                                </label>


                                                <label>
                                                    <input type="radio" value="Other" {{$SafStudentInfo && $SafStudentInfo->length_of_stay == "Other" ? "checked=checked" : "" }}
                                                           name="length_of_stay">
                                                    <span class="checkmark">Other (please contact ISP)</span>
                                                </label>
                                            </div>
                                            @error('length_of_stay')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-graduation-cap"></i>Contract Start
                                                    Date:
                                                    <span>*</span></label>
                                                <input type="date" name="contract_start_date" value="{{$SafStudentInfo ? $SafStudentInfo->contract_start_date : ""}}">

                                                @error('contract_start_date')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-graduation-cap"></i>Contract End Date:
                                                    <span>*</span></label>
                                                <input type="date" name="contract_end_date" value="{{$SafStudentInfo ? $SafStudentInfo->contract_end_date : ""}}">

                                                @error('contract_end_date')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Lenght Of Homestay End-->

                                <div class="row">

                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!--English Level Start-->
                                        <div class="permanent-adress ">
                                            <h6 class="pay-method"><i class="fa-solid fa-comment"></i>What is your
                                                English
                                                level?<span>*</span></h6>
                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="high" {{$SafStudentInfo && $SafStudentInfo->what_is_your_english_level == "high" ? "checked=checked" : "" }}
                                                           name="what_is_your_english_level">
                                                    <span class="checkmark">High</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="medium" {{$SafStudentInfo && $SafStudentInfo->what_is_your_english_level == "medium" ? "checked=checked" : "" }}
                                                           name="what_is_your_english_level">
                                                    <span class="checkmark">Medium</span>
                                                </label>
                                                <input type="radio" value="low" {{$SafStudentInfo && $SafStudentInfo->what_is_your_english_level == "low" ? "checked=checked" : "" }}
                                                       name="what_is_your_english_level">
                                                <span class="checkmark">Low</span>


                                                @error('what_is_your_english_level')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <!--English Level End-->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!--Children Under 8 Start-->
                                        <div class="permanent-adress ">
                                            <h6 class="pay-method"><i class="fa-solid fa-comment"></i>Do you accept
                                                children under 8
                                                years old in your host home?<span>*</span></h6>
                                            <div class="payment-ckbx three">
                                                <label>
                                                    <input type="radio" value="yes" {{$SafStudentInfo && $SafStudentInfo->do_you_accept_children_under_8_years_in_host_home == "yes" ? "checked=checked" : "" }}
                                                           name="do_you_accept_children_under_8_years_in_host_home">
                                                    <span class="checkmark">Yes</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="no" {{$SafStudentInfo && $SafStudentInfo->do_you_accept_children_under_8_years_in_host_home == "no" ? "checked=checked" : "" }}
                                                           name="do_you_accept_children_under_8_years_in_host_home">
                                                    <span class="checkmark">No</span>
                                                </label>
                                                <input type="radio" value="does not matter" {{$SafStudentInfo && $SafStudentInfo->do_you_accept_children_under_8_years_in_host_home == "does not matter" ? "checked=checked" : "" }}
                                                       name="do_you_accept_children_under_8_years_in_host_home">
                                                <span class="checkmark">Does not matter</span>


                                                @error('do_you_accept_children_under_8_years_in_host_home')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--Children Under 8 End-->
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!--Allergic to animals Start-->
                                        <div class="permanent-adress ">
                                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Are
                                                you
                                                allergic to
                                                animals?
                                                <span>*</span></h6>
                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="yes" {{$SafStudentInfo && $SafStudentInfo->are_you_allergic_to_animals == "yes" ? "checked=checked" : "" }}
                                                           name="are_you_allergic_to_animals">
                                                    <span class="checkmark">Yes</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="no" {{$SafStudentInfo && $SafStudentInfo->are_you_allergic_to_animals == "no" ? "checked=checked" : "" }}
                                                           name="are_you_allergic_to_animals">
                                                    <span class="checkmark">No</span>
                                                </label>


                                                @error('are_you_allergic_to_animals')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="input-flds db">
                                                <label><i class="fa-solid fa-file-lines"></i>If yes, please indicate
                                                    which</label><br>
                                                <input type="text" name="if_yes_please_indicate_animal" value="{{$SafStudentInfo ? $SafStudentInfo->if_yes_please_indicate_animal : ""}}">
                                                <label>(80% of American households have pets. You will restrict your
                                                    host family
                                                    placement options by saying no to animals)</label>

                                                @error('if_yes_please_indicate_animal')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--Allergic to animals End-->
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!--Meal Options Start-->
                                        <div class="permanent-adress ">
                                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Please
                                                select a meal
                                                option
                                                <span>*</span></h6>
                                            <div class="payment-ckbx  three">

                                                <label>
                                                    <input type="radio" value="2 meals per day" {{$SafStudentInfo && $SafStudentInfo->meal_option == "2 meals per day" ? "checked=checked" : "" }}
                                                           name="meal_option">
                                                    <span class="checkmark">2 meals per day (breakfast & dinner)</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="No meals" {{$SafStudentInfo && $SafStudentInfo->meal_option == "No meals" ? "checked=checked" : "" }}
                                                           name="meal_option">
                                                    <span class="checkmark">No meals</span>
                                                </label>


                                                @error('meal_option')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-file-lines"></i>Please list food
                                                    allergies<span>*</span></label>
                                                <textarea placeholder="Enter Text Here ..." name="food_restrictions"
                                                          required>{{$SafStudentInfo ? $SafStudentInfo->food_restrictions : ""}}</textarea>

                                                @error('food_restrictions')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--Meal Options End-->
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!--Smoke Section Start-->
                                        <div class="permanent-adress ">
                                            <div class="smoke-flex">
                                                <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Do
                                                    you
                                                    smoke?
                                                    <span>*</span></h6>
                                                <p>(there is a no smoking policy in all host homes)</p>
                                            </div>
                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="yes" {{$SafStudentInfo && $SafStudentInfo->do_you_smoke == "yes" ? "checked=checked" : "" }}
                                                           name="do_you_smoke">
                                                    <span class="checkmark">Yes</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="no" {{$SafStudentInfo && $SafStudentInfo->do_you_smoke == "no" ? "checked=checked" : "" }}
                                                           name="do_you_smoke">
                                                    <span class="checkmark">No</span>
                                                </label>


                                                @error('do_you_smoke')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--Smoke Section End-->
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <!--Will You Have A Car Start-->
                                        <div class="permanent-adress ">
                                            <h6 class="pay-method"><i class="fa-solid fa-car"></i></i>Will you have
                                                a
                                                car?<span>*</span>
                                            </h6>
                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="yes" {{$SafStudentInfo && $SafStudentInfo->will_you_have_a_car == "yes" ? "checked=checked" : "" }}
                                                           name="will_you_have_a_car">
                                                    <span class="checkmark">Yes</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="no" {{$SafStudentInfo && $SafStudentInfo->will_you_have_a_car == "no" ? "checked=checked" : "" }}
                                                           name="will_you_have_a_car">
                                                    <span class="checkmark">No</span>
                                                </label>


                                                @error('will_you_have_a_car')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--Will You Have A Car End-->
                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </section>
                        <!--Section 2 Second Half End-->
                    </form>
                    <!--Section 2 End-->

                    <form action="{{route('saf_submit_3')}}" id="Form-Section3" method="post">
                    @csrf
                    <!--Section 3 Start-->
                        <section class="my-newfrm ">
                            <div class="form_style main-cardbox">
                                <h3>Agent Details</h3>
                                <div class="using-agent">
                                    <h3 class="method">I am using an Agent:</h3>
                                    <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Using
                                        Agent:
                                        <span>*</span>
                                    </h6>
                                    <div class="payment-ckbx">
                                        <label>
                                            <input type="radio" value="no" {{$Saf_BasicInfo && $Saf_BasicInfo->using_agent == "no" ? "checked=checked" : "" }}
                                                   name="using_agent">
                                            <span class="checkmark">No</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="yes" {{$Saf_BasicInfo && $Saf_BasicInfo->using_agent == "yes" ? "checked=checked" : ""  }}
                                                   name="using_agent">
                                            <span class="checkmark">Yes</span>
                                        </label>

                                        @error('using_agent')
                                        <div class="saf_msg">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    {{--                            <h4>If you are using an Agent, please provide information about the Agent.</h4>--}}
                                    {{--                            <h3>Agent Name & Address:</h3>--}}


                                    {{--                            <div class="input-flds before">--}}
                                    {{--                                <label><i class="fa-solid fa-user"></i>Agency Name</label>--}}
                                    {{--                                <select class="yd-select " name="agency_name" id="agency_name" placeholder=""--}}
                                    {{--                                        tabindex="1"--}}
                                    {{--                                        data-parsley-group="block-0">--}}

                                    {{--                                    <option selected="" value="">Please Select Agency Name</option>--}}
                                    {{--                                    @foreach ($agencies as $agency)--}}
                                    {{--                                        <option value="{{ $agency->id }}">--}}
                                    {{--                                            {{ $agency->agency_name }}--}}
                                    {{--                                        </option>--}}
                                    {{--                                    @endforeach--}}
                                    {{--                                </select>--}}
                                    {{--                            </div>--}}
                                    {{--                            @error('agency_name')--}}
                                    {{--                            <div class="alert alert-danger">--}}
                                    {{--                                {{ $message }}--}}
                                    {{--                            </div>--}}
                                    {{--                            @enderror--}}
                                    {{--                            <div class="agency-not dbl">--}}
                                    {{--                                <h6>For Agents not on the list:</h6>--}}
                                    {{--                                <div class="input-flds">--}}
                                    {{--                                    <label><i class="fa-solid fa-user"></i>Agency Name</label>--}}
                                    {{--                                    <input type="text" name="agency_name_not_on_the_list">--}}
                                    {{--                                </div>--}}
                                    {{--                            </div>--}}
                                    {{--                            @error('agency_name_not_on_the_list')--}}
                                    {{--                            <div class="alert alert-danger">--}}
                                    {{--                                {{ $message }}--}}
                                    {{--                            </div>--}}
                                    {{--                            @enderror--}}

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-user"></i>Agency Name</label>
                                                <input type="text" name="agency_name" value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agency_name : "" }}">

                                                @error('agency_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-user"></i>Name of Agency Contact
                                                    Person</label>
                                                <input type="text" name="agency_contact_person" value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agency_contact_person : "" }}">

                                                @error('agency_contact_person')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="using-agent">

                                                <div class="input-flds">
                                                    <label><i class="fa-solid fa-phone-flip"></i>Agent Phone Number
                                                        (with
                                                        country
                                                        code)</label>
                                                    <input type="text" name="agent_phone_number" value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_phone_number : "" }}">

                                                    @error('agent_phone_number')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-envelope"></i>Agent's Email</label>
                                                <input type="text" name="agent_email" value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_email : "" }}">

                                                @error('agent_email')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-phone-flip"></i>Agent's
                                                    WeChat</label>
                                                <input type="text" name="agent_wechat_number" value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_wechat_number : "" }}">

                                                @error('agent_wechat_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-phone-flip"></i>Agent's
                                                    Line</label>
                                                <input type="text" name="agent_line_number" value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_line_number : "" }}">

                                                @error('agent_line_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-phone-flip"></i>Agent's
                                                    Whatsapp</label>
                                                <input type="text" name="agent_whatsapp_number" value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_whatsapp_number : "" }}">

                                                @error('agent_whatsapp_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </section>
                        <!--Section 3 End-->
                    </form>

                    <form action="{{route('saf_submit_4')}}" id="Form-Section4" method="post">
                    @csrf
                    <!--Section 4 Start-->
                        <section class="my-newfrm">
                            <div class="form_style main-cardbox">
                                <div class="food-restrictions">

                                    <h3>If you have specific needs for your host home, please write them
                                        below:</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-file-lines"></i>Specific
                                                    Needs<span>*</span>(0)</label>
                                                <textarea placeholder="Enter Text Here ..." name="specific_needs"
                                                          required>{{$SafOtherInfo ? $SafOtherInfo->specific_needs : ""}}</textarea>

                                                @error('specific_needs')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-file-lines"></i>Please describe your
                                                    hobbies and
                                                    interests:<span>*</span>(0)</label>
                                                <textarea placeholder="Enter Text Here ..."
                                                          name="hobbies_and_interest"
                                                          required>{{$SafOtherInfo ? $SafOtherInfo->hobbies_and_interest : ""}}</textarea>

                                                @error('hobbies_and_interest')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-file-lines"></i>Please describe your
                                                    personality:<span>*</span>(0)</label>
                                                <textarea placeholder="Enter Text Here ..."
                                                          name="describe_your_personality"
                                                          required>{{$SafOtherInfo ? $SafOtherInfo->describe_your_personality : ""}}</textarea>

                                                @error('describe_your_personality')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-file-lines"></i>Please describe your
                                                    family:<span>*</span>(0)</label>
                                                <textarea placeholder="Enter Text Here ..."
                                                          name="describe_your_family"
                                                          required>{{$SafOtherInfo ? $SafOtherInfo->describe_your_family : ""}}</textarea>

                                                @error('describe_your_family')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-file-lines"></i>Please describe your
                                                    travel
                                                    experience:<span>*</span>(0)</label>
                                                <textarea placeholder="Enter Text Here ..."
                                                          name="describe_your_travel_experience"
                                                          required>{{$SafOtherInfo ? $SafOtherInfo->describe_your_travel_experience : ""}}</textarea>

                                                @error('describe_your_travel_experience')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-file-lines"></i>Please write a greeting
                                                    to
                                                    your host:<span>*</span>(0)</label>
                                                <textarea placeholder="Enter Text Here ..."
                                                          name="write_greeting_to_host"
                                                          required>{{$SafOtherInfo ? $SafOtherInfo->write_greeting_to_host : ""}}</textarea>

                                                @error('write_greeting_to_host')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </section>
                        <!--Section 4 End-->
                    </form>

                    <form action="{{route('saf_submit_5')}}" id="Form-Section5" method="post" enctype="multipart/form-data">
                    @csrf
                    <!--Section 5 Start-->
                        <section class="my-newfrm">
                            <div class="form_style  main-cardbox">
                                <div class="medical-info">
                                    <h3>MEDICAL INFORMATION</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Are
                                                you in
                                                good
                                                health?<span>*</span></h6>
                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="yes" {{$SafMedicalInfo && $SafMedicalInfo->are_you_in_good_health == "yes" ? "checked=checked" : "" }}
                                                           name="are_you_in_good_health">
                                                    <span class="checkmark">Yes</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="no"
                                                           {{$SafMedicalInfo && $SafMedicalInfo->are_you_in_good_health == "no" ? "checked=checked" : "" }}
                                                           name="are_you_in_good_health">
                                                    <span class="checkmark">No</span>
                                                </label>


                                                @error('are_you_in_good_health')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-flds db">
                                                <label><i class="fa-solid fa-file-lines"></i>If no, please explain
                                                    :</label><br>
                                                <input type="text" name="if_no_please_explain_health" value="{{$SafMedicalInfo ? $SafMedicalInfo->if_no_please_explain_health : ""}}">

                                                @error('if_no_please_explain_health')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Do you
                                                have
                                                allergies?<span>*</span></h6>
                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="yes"
                                                           {{$SafMedicalInfo && $SafMedicalInfo->do_you_have_medical_allergies == "yes" ? "checked=checked" : "" }}
                                                           name="do_you_have_medical_allergies">
                                                    <span class="checkmark">Yes</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="no"
                                                           {{$SafMedicalInfo && $SafMedicalInfo->do_you_have_medical_allergies == "no" ? "checked=checked" : "" }}
                                                           name="do_you_have_medical_allergies">
                                                    <span class="checkmark">No</span>
                                                </label>


                                                @error('do_you_have_medical_allergies')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-flds db">
                                                <label><i class="fa-solid fa-file-lines"></i>If yes, please
                                                    explain:</label><br>
                                                <input type="text" name="if_yes_please_explain_medical_allergies" value="{{$SafMedicalInfo ? $SafMedicalInfo->if_yes_please_explain_medical_allergies : ""}}">

                                                @error('if_yes_please_explain_medical_allergies')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Do you
                                                take
                                                medication?<span>*</span></h6>
                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="yes"
                                                           {{$SafMedicalInfo && $SafMedicalInfo->do_you_take_medication == "yes" ? "checked=checked" : "" }}
                                                           name="do_you_take_medication">
                                                    <span class="checkmark">Yes</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="no"
                                                           {{$SafMedicalInfo && $SafMedicalInfo->do_you_take_medication == "no" ? "checked=checked" : "" }}
                                                           name="do_you_take_medication">
                                                    <span class="checkmark">No</span>
                                                </label>
                                            </div>

                                            @error('do_you_take_medication')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-flds db">
                                                <label><i class="fa-solid fa-file-lines"></i>If yes, please
                                                    explain:</label><br>
                                                <input type="text" name="if_yes_please_explain_medication"
                                                       value="{{$SafMedicalInfo ? $SafMedicalInfo->if_yes_please_explain_medication : ""}}">

                                                @error('if_yes_please_explain_medication')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>
                                                Have you been under the care of a psychiatrist and/or counselor in
                                                the
                                                past 5 years?
                                                <span>*</span></h6>
                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="yes"
                                                           {{$SafMedicalInfo && $SafMedicalInfo->under_care_of_psychiatrist_past_five_year == "yes" ? "checked=checked" : "" }}
                                                           name="under_care_of_psychiatrist_past_five_year">
                                                    <span class="checkmark">Yes</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="no"
                                                           {{$SafMedicalInfo && $SafMedicalInfo->under_care_of_psychiatrist_past_five_year == "no" ? "checked=checked" : "" }}
                                                           name="under_care_of_psychiatrist_past_five_year">
                                                    <span class="checkmark">No</span>
                                                </label>
                                            </div>

                                            @error('under_care_of_psychiatrist_past_five_year')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-flds db">
                                                <label><i class="fa-solid fa-file-lines"></i>If yes, please
                                                    explain:</label><br>
                                                <input type="text"
                                                       name="if_yes_please_explain_reason_of_psychiatrist"
                                                       value="{{$SafMedicalInfo ? $SafMedicalInfo->if_yes_please_explain_reason_of_psychiatrist : ""}}">

                                                @error('if_yes_please_explain_reason_of_psychiatrist')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>
                                                Have you received a WHO approved COVID Vaccine and booster shot?
                                                <span>*</span></h6>

                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="yes"
                                                           {{$SafMedicalInfo && $SafMedicalInfo->have_who_approved_vaccination == "yes" ? "checked=checked" : "" }}
                                                    name="have_who_approved_vaccination">
                                                    <span class="checkmark">Yes</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="no"
                                                           {{$SafMedicalInfo && $SafMedicalInfo->have_who_approved_vaccination == "no" ? "checked=checked" : "" }}
                                                           name="have_who_approved_vaccination">
                                                    <span class="checkmark">No</span>
                                                </label>
                                                @error('have_who_approved_vaccination')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-flds db">
                                                <label><i class="fa-solid fa-file-lines"></i>Vaccine
                                                    Name:</label><br>
                                                <input type="text" name="vaccine_name"
                                                       value="{{$SafMedicalInfo ? $SafMedicalInfo->vaccine_name : ""}}">

                                                @error('vaccine_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>
                                                Please attach a photo of your vaccine card with your completed
                                                application.</h6>
                                            <div class="form-submit">
                                                <input type="file" id="myFile" name="vaccine_card_photograph">

                                                @error('vaccine_card_photograph')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <div class="input-flds db dts">
                                                <label><i class="fa-solid fa-calendar-days"></i>Date(s)
                                                    Administered:</label><br>
                                                <input type="date" name="dates_administered"
                                                       value="{{$SafMedicalInfo ? $SafMedicalInfo->dates_administered : ""}}" required>

                                                @error('dates_administered')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </section>
                        <!--Section 5 End-->
                    </form>

                    <form action="{{route('saf_submit_6')}}" id="Form-Section6" method="post">
                    @csrf
                    <!--Section 6 Start-->
                        <section class="my-newfrm">
                            <div class="form_style  main-cardbox">
                                <div class="airport">
                                    <h3>Airport Confirmation</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="drivers">
                                                <label><i class="fa-solid fa-plane-departure"></i>Do you need
                                                    airport pickup
                                                    service?</label>
                                                <div class="payment-ckbx plane">

                                                    <label>
                                                        <input type="radio" value="yes"
                                                               {{$SafAirportInfo && $SafAirportInfo->request_for_airport_pickup_driver == "yes" ? "checked=checked" : "" }}
                                                               name="request_for_airport_pickup_driver">
                                                        <span class="checkmark">Yes</span>
                                                    </label>
                                                    <label>
                                                        <input type="radio" value="no"
                                                               {{$SafAirportInfo && $SafAirportInfo->request_for_airport_pickup_driver == "no" ? "checked=checked" : "" }}
                                                               name="request_for_airport_pickup_driver">
                                                        <span class="checkmark">No</span>
                                                    </label>


                                                    @error('request_for_airport_pickup_driver')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="driver-dropdown">
                                                <div class="input-flds before">
                                                    <label><i class="fa-solid fa-car"></i>If Driver Required,
                                                        Number of People
                                                        needing ISP Driver:</label><br>
                                                    <input type="text" name="number_of_people_needing_driver"
                                                           value="{{$SafAirportInfo && $SafAirportInfo->request_for_airport_pickup_driver == "yes" ? $SafAirportInfo->number_of_people_needing_driver : "" }}">
                                                    @error('airport_arrival_number_of_people')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="airport-info">
                                        <h4>Airport Arrival Flight Information:</h4>


                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="arrival-date">
                                                    <div class="input-flds airport">
                                                        <label><i class="fa-solid fa-calendar-days"></i>Arrival
                                                            Date</label><br>
                                                        <input type="date" name="arrival_date"
                                                               value="{{$SafAirportInfo ? $SafAirportInfo->arrival_date : ""}}">

                                                        @error('arrival_date')
                                                        <div class="saf_msg">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="arrival-time">
                                                    <div class="input-flds before">
                                                        <label><i class="fa-solid fa-plane-departure"></i>Airport
                                                            Arrival
                                                            Time</label>
                                                        <input type="time" name="airport_arrival_time"
                                                               value="{{$SafAirportInfo ? $SafAirportInfo->airport_arrival_time : ""}}">

                                                        @error('airport_arrival_time')
                                                        <div class="saf_msg">
                                                            {{ $message }}
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h6 class="pay-method"><i class="fa-solid fa-plane-departure"></i>Flight
                                            type</h6>
                                        <div class="payment-ckbx plane">

                                            <label>
                                                <input type="radio" value="international"
                                                       {{$SafAirportInfo && $SafAirportInfo->flight_type == "international" ? "checked=checked" : "" }}
                                                       name="flight_type">
                                                <span class="checkmark">International</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="domestic"
                                                       {{$SafAirportInfo && $SafAirportInfo->flight_type == "domestic" ? "checked=checked" : "" }}
                                                       name="flight_type">
                                                <span class="checkmark">Domestic</span>
                                            </label>


                                            @error('flight_type')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="input-flds airport before">
                                            <label><i class="fa-solid fa-plane-departure"></i>Arrival
                                                Airport</label><br>

                                            <select class="yd-select " name="arrival_airport"
                                                    id="airport_arrival_airport"
                                                    placeholder="" tabindex="1" data-parsley-group="block-0">
                                                <option value="{{$SafAirportInfo ? $SafAirportInfo->arrival_airport : ""}}">{{$SafAirportInfo ? $SafAirportInfo->arrival_airport : ""}}</option>
                                                <option value="PSP">PSP</option>
                                                <option value="SFO">SFO</option>
                                                <option value="SJC">SJC</option>
                                                <option value="LAX">LAX</option>
                                                <option value="OAK">OAK</option>
                                                <option value="BUR">BUR</option>
                                                <option value="HNL">HNL</option>
                                                <option value="SMF">SMF</option>
                                                <option value="RNO">RNO</option>

                                            </select>
                                            @error('arrival_airport')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="input-flds before">
                                            <label><i class="fa-solid fa-plane-departure"></i>Arrival
                                                Airline</label>
                                            <select class="yd-select " name="arrival_airline"
                                                    id="airport_arrival_airline"
                                                    placeholder="" tabindex="1" data-parsley-group="block-0">
                                                <option value="{{$SafAirportInfo ? $SafAirportInfo->arrival_airline : ""}}">{{$SafAirportInfo ? $SafAirportInfo->arrival_airline : ""}}</option>
                                                <option value="American Airlines-Domestic">American
                                                    Airlines-Domestic
                                                </option>
                                                <option value="American Airlines-Int’l">American
                                                    Airlines-Int’l
                                                </option>
                                                <option value="Asiana Airlines">Asiana Airlines</option>
                                                <option value="British Airways">British Airways</option>
                                                <option value="Cathay Pacific">Cathay Pacific</option>
                                                <option value="China Airline">China Airline</option>
                                                <option value="Delta Airlines">Delta Airlines</option>
                                                <option value="Japan Airlines">Japan Airlines</option>
                                                <option value="Singapore Airlines">Singapore Airlines</option>
                                                <option value="United Airlines-Domestic">United
                                                    Airlines-Domestic
                                                </option>
                                                <option value="United Airlines-Int’l">United Airlines-Int’l
                                                </option>

                                            </select>

                                            @error('arrival_airline')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="input-flds airport">
                                            <label><i class="fa-solid fa-plane-departure"></i>Arrival Flight
                                                Number</label><br>
                                            <input type="text" name="arrival_flight_number"
                                                   value="{{$SafAirportInfo ? $SafAirportInfo->arrival_flight_number : ""}}">

                                            @error('arrival_flight_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                    </div>
                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </section>
                        <!--Section 6 End-->
                    </form>

                    <form action="{{route('saf_submit_7')}}" id="Form-Section7" method="post">
                    @csrf
                    <!--Section 7 Start-->
                        <section class="my-newfrm">
                            <div class="form_style  main-cardbox">
                                <!--<div class="form_style five">-->
                                <div class="refundable-payment">
                                    <div class="row">
                                        <h3>Payment Form</h3>
{{--                                        <h6 class="pay-method"><i--}}
{{--                                                    class="fa-solid fa-circle-question"></i>Payment:<span>*</span>--}}
{{--                                        </h6>--}}

                                        <div class="col-md-4">
                                            <label class="my-lab">Payment:<span>*</span></label>
                                            <div class="payment-ckbx three">
                                                <label>
                                                    <input type="radio" value="Credit Card"
                                                           {{$SafPaymentInfo && $SafPaymentInfo->payment_method == "Credit Card" ? "checked=checked" : "" }}
                                                           name="payment_method">
                                                    <span class="checkmark">Credit Card</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="Check or Money Order"
                                                           {{$SafPaymentInfo && $SafPaymentInfo->payment_method == "Check or Money Order" ? "checked=checked" : "" }}
                                                           name="payment_method">
                                                    <span class="checkmark">Check or Money Order (send payment to the ISP main office)</span>
                                                </label>

                                                @error('payment_method')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-user"></i>Student First
                                                    Name<span>*</span></label><br>
                                                <input type="text" name="card_holder_student_first_name"
                                                       value="{{$Saf_BasicInfo ? $Saf_BasicInfo->first_name : ""}}" required>
                                                {{--                                <input type="text" name="student_name_1" required>--}}

                                                @error('card_holder_student_first_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-user"></i>Student Last
                                                    Name<span>*</span></label><br>
                                                <input type="text" name="card_holder_student_last_name"
                                                       value="{{$Saf_BasicInfo ? $Saf_BasicInfo->last_name : ""}}" required>

                                                @error('card_holder_student_last_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-user"></i>Cardholder First
                                                    Name<span>*</span></label><br>
                                                <input type="text" name="cardholder_first_name"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_first_name : ""}}"  required>

                                                @error('cardholder_first_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-user"></i>Cardholder Last
                                                    Name<span>*</span></label><br>
                                                <input type="text" name="cardholder_last_name"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_last_name : ""}}"  required>

                                                @error('cardholder_last_name')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-user"></i>Cardholder
                                                    Address<span>*</span></label><br>
                                                <input type="text" name="cardholder_address"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_address : ""}}"  >
                                                {{--                                <input type="text" name="cardholder_street_address_line_1">--}}

                                                @error('cardholder_address')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds">
                                                <label><i class="fa-solid fa-address-card"></i>Cardholder
                                                    City<span>*</span></label>
                                                <input type="text" name="cardholder_city"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_city : ""}}" required>

                                                @error('cardholder_city')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment before">
                                                <label><i class="fa-solid fa-address-card"></i>Cardholder
                                                    State</label><br>
                                                <select class="yd-select " name="cardholder_state"
                                                        id="cardholder_state"
                                                        placeholder=""
                                                        tabindex="1" data-parsley-group="block-0">

                                                    <option value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_state : ""}}">{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_state : ""}}</option>
                                                    <option value="Alaska"> Alaska</option>
                                                    <option value="Arizona"> Arizona</option>
                                                    <option value="Arkansas"> Arkansas</option>
                                                    <option value="California"> California</option>
                                                    <option value="Colorado"> Colorado</option>
                                                    <option value="Connecticut"> Connecticut</option>
                                                    <option value="Delaware"> Delaware</option>
                                                    <option value="Florida"> Florida</option>
                                                    <option value="Georgia"> Georgia</option>
                                                    <option value="Hawaii"> Hawaii</option>
                                                    <option value="Idaho"> Idaho</option>
                                                    <option value="Illinois"> Illinois</option>
                                                    <option value="Indiana"> Indiana</option>
                                                    <option value="Iowa"> Iowa</option>
                                                    <option value="Kansas"> Kansas</option>
                                                    <option value="Kentucky"> Kentucky</option>
                                                    <option value="Louisiana"> Louisiana</option>
                                                    <option value="Maine"> Maine</option>
                                                    <option value="Maryland"> Maryland</option>
                                                    <option value="Massachusetts"> Massachusetts</option>
                                                    <option value="Michigan"> Michigan</option>
                                                    <option value="Minnesota"> Minnesota</option>
                                                    <option value="Mississippi"> Mississippi</option>
                                                    <option value="Missouri"> Missouri</option>
                                                    <option value="Montana"> Montana</option>
                                                    <option value="Nebraska"> Nebraska</option>
                                                    <option value="Nevada"> Nevada</option>
                                                    <option value="New Hampshire"> New Hampshire</option>
                                                    <option value="New Jersey"> New Jersey</option>
                                                    <option value="New Mexico"> New Mexico</option>
                                                    <option value="New York"> New York</option>
                                                    <option value="North Carolina"> North Carolina</option>
                                                    <option value="North Dakota"> North Dakota</option>
                                                    <option value="Ohio"> Ohio</option>
                                                    <option value="Oklahoma"> Oklahoma</option>
                                                    <option value="Oregon"> Oregon</option>
                                                    <option value="Pennsylvania"> Pennsylvania</option>
                                                    <option value="Rhode Island"> Rhode Island</option>
                                                    <option value="South Carolina"> South Carolina</option>
                                                    <option value="South Dakota"> South Dakota</option>
                                                    <option value="Tennessee"> Tennessee</option>
                                                    <option value="Texas"> Texas</option>
                                                    <option value="Utah"> Utah</option>
                                                    <option value="Vermont"> Vermont</option>
                                                    <option value="Virginia"> Virginia</option>
                                                    <option value="Washington"> Washington</option>
                                                    <option value="West Virginia"> West Virginia</option>
                                                    <option value="Wisconsin"> Wisconsin</option>
                                                    <option value="Wyoming"> Wyoming</option>
                                                    <option value="Washington DC"> Washington DC</option>
                                                    <option value="Puerto Rico"> Puerto Rico</option>
                                                    <option value="U.S. Virgin Islands"> U.S. Virgin Islands
                                                    </option>
                                                    <option value="American Samoa"> American Samoa</option>
                                                    <option value="Guam"> Guam</option>
                                                    <option value="Northern Mariana Islands"> Northern Mariana
                                                        Islands
                                                    </option>
                                                </select>
                                                @error('cardholder_state')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-address-card"></i>Cardholder Postal /
                                                    Zip
                                                    Code<span>*</span></label><br>
                                                <input type="text" name="cardholder_zipcode"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_zipcode : ""}}" required>

                                                @error('cardholder_zipcode')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment before">
                                                <label><i class="fa-solid fa-earth-americas"></i>Cardholder
                                                    Country<span>*</span></label><br>
                                                <select class="yd-select " required="" data-parsley-required=""
                                                        data-parsley-required-message="This field is Required."
                                                        name="cardholder_country"
                                                        id="cc_cardholder_country" placeholder="" tabindex="1"
                                                        data-parsley-group="block-0">
                                                    <option value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_country : ""}}">{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_country : ""}}</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua And Barbuda">Antigua And Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Ascension">Ascension</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia And Herzegovina">Bosnia And Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian
                                                        Ocean
                                                        Territory
                                                    </option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African
                                                        Republic
                                                    </option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (keeling) Islands">Cocos (keeling) Islands
                                                    </option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="CÔte D'ivoire">CÔte D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Diego Garcia">Diego Garcia</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Europäische Union">Europäische Union</option>
                                                    <option value="European Union">European Union</option>
                                                    <option value="Falkland Islands (malvinas)">Falkland Islands
                                                        (malvinas)
                                                    </option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern
                                                        Territories
                                                    </option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island And Mcdonald Islands">Heard Island
                                                        And
                                                        Mcdonald Islands
                                                    </option>
                                                    <option value="Holy See (vatican City State)">Holy See (vatican
                                                        City
                                                        State)
                                                    </option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran">Iran</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle Of Man">Isle Of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kanarische Inseln">Kanarische Inseln</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Korea">Korea</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's
                                                        Democratic Republic
                                                    </option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia">Macedonia</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia">Micronesia</option>
                                                    <option value="Moldova">Moldova</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles
                                                    </option>
                                                    <option value="Neutrale Zone">Neutrale Zone</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana
                                                        Islands
                                                    </option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory">Palestinian Territory
                                                    </option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="RÉunion">RÉunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts And Nevis">Saint Kitts And Nevis
                                                    </option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre And Miquelon">Saint Pierre And
                                                        Miquelon
                                                    </option>
                                                    <option value="Saint Vincent And The Grenadines">Saint Vincent
                                                        And
                                                        The Grenadines
                                                    </option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome And Principe">Sao Tome And Principe
                                                    </option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbien und Montenegro">Serbien und Montenegro
                                                    </option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia And The South Sandwich Islands">
                                                        South
                                                        Georgia And The
                                                        South
                                                        Sandwich Islands
                                                    </option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen
                                                    </option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic
                                                    </option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania">Tanzania</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad And Tobago">Trinidad And Tobago</option>
                                                    <option value="Tristan da Cunha">Tristan da Cunha</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks And Caicos Islands">Turks And Caicos
                                                        Islands
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="Union der Sozialistischen Sowjetrepubliken">Union
                                                        der
                                                        Sozialistischen
                                                        Sowjetrepubliken
                                                    </option>
                                                    <option value="United Arab Emirates">United Arab Emirates
                                                    </option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands">Virgin Islands</option>
                                                    <option value="Virgin Islands">Virgin Islands</option>
                                                    <option value="Wallis And Futuna">Wallis And Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                                @error('cardholder_country')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-envelope"></i>Cardholder
                                                    Email<span>*</span></label><br>
                                                <input type="text" name="cardholder_email"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_email : ""}}"  required>

                                                @error('cardholder_email')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4"></div>
{{--                                        <h6 class="pay-method"><i class="fa-solid fa-credit-card"></i>Credit Card--}}
{{--                                            Type<span>*</span>--}}
{{--                                        </h6>--}}
                                        <div class="col-md-4">
                                            <label class="my-lab">Credit Card<span>*</span></label>
                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="radio" value="Visa"
                                                           {{$SafPaymentInfo && $SafPaymentInfo->credit_card_type == "Visa" ? "checked=checked" : "" }}
                                                           name="credit_card_type">
                                                    <span class="checkmark">Visa</span>
                                                </label>
                                                <label>
                                                    <input type="radio" value="Master Card"
                                                           {{$SafPaymentInfo && $SafPaymentInfo->credit_card_type == "Master Card" ? "checked=checked" : "" }}
                                                           name="credit_card_type">
                                                    <span class="checkmark">Master Card</span>
                                                </label>


                                                @error('credit_card_type')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-credit-card"></i>Name on
                                                    Card<span>*</span></label><br>
                                                <input type="text" name="name_on_card"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->name_on_card : ""}}"   required>

                                                @error('name_on_card')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-credit-card"></i>Credit Card
                                                    Number<span>*</span></label><br>
                                                <input type="number" name="card_number"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->card_number : ""}}" required>

                                                @error('card_number')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-credit-card"></i>CVC<span>*</span></label><br>
                                                <input type="number" name="card_cvc"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->card_cvc : ""}}" required>

                                                @error('card_cvc')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="input-flds refundable-payment">
                                                <label><i class="fa-solid fa-credit-card"></i>Expiration
                                                    Date<span>*</span></label><br>
                                                <input type="date" name="card_exp_date"
                                                       min="{{"carbon date required"}}"
                                                       max="{{"carbon date required"}}"
                                                       value="{{$SafPaymentInfo ? $SafPaymentInfo->card_exp_date : ""}}" required>

                                                @error('card_exp_date')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>

                                            <h6>I authorize International Student Placements to charge the program
                                                fees
                                                to my credit
                                                card. I understand that all fees are non-refundable and that all
                                                credit
                                                card
                                                transactions incur a 5% processing fee.</h6>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Placement
                                                Fee</h6>

                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="checkbox" value="yes"
                                                           {{$SafPaymentInfo && $SafPaymentInfo->placement_fee == "yes" ? "checked=checked" : "" }}
                                                           name="placement_fee">
                                                    <span class="checkmark">Yes</span>
                                                </label>

                                                @error('placement_fee')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="smoke-flex">
                                                <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Late
                                                    Fee
                                                </h6>
                                            </div>

                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="checkbox" value="yes"
                                                           {{$SafPaymentInfo && $SafPaymentInfo->late_fee == "yes" ? "checked=checked" : "" }}
                                                           name="late_fee">
                                                    <span class="checkmark">Yes</span>
                                                </label>


                                                @error('late_fee')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                            <div class="smoke-flex">
                                                <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>$100
                                                    Deposit</h6>
                                            </div>

                                            <div class="payment-ckbx three">

                                                <label>
                                                    <input type="checkbox" value="yes"
                                                           {{$SafPaymentInfo && $SafPaymentInfo->deposit_fee == "yes" ? "checked=checked" : "" }}
                                                           name="deposit_fee">
                                                    <span class="checkmark">Yes</span>
                                                </label>


                                                @error('deposit_fee')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Airport
                                                Pickup Fee</h6>

                                            <div class="payment-ckbx three">
                                                <label>
                                                    <input type="checkbox" value="yes"
                                                           {{$SafPaymentInfo && $SafPaymentInfo->airport_pickup_fee == "yes" ? "checked=checked" : "" }}
                                                           name="airport_pickup_fee">
                                                    <span class="checkmark">Yes</span>
                                                </label>

                                                @error('airport_pickup_fee')
                                                <div class="saf_msg">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </section>
                        <!--Section 7 End-->
                    </form>

                    <!--Section 8 Start-->
                    <form action="{{route('saf_submit_8_1_1')}}" id="Form-Section8-1-1" method="post">
                    @csrf
                    <!--Section 8 First Half Start-->
                        <section class="my-newfrm">
                            <div class="form_style  main-cardbox">
                                <div class="refundable-payment termsconditions">
                                    <h3>International Student Placements</h3>
                                    <h5>Student Agreement</h5>

                                    <!-- Agreements Start -->
                                    <div class="agreement-conditions">
                                        <!--<div class="para-scroll">-->
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->fees_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="fees_agreement">
                                                        <span class="checkmark ex1">Fees: </br>The placement fee, deposit, late fee, and airport pick up fee will be charged to the student’s credit card when they submit their application. Applications are not processed until the payment is made. If a student decides to cancel the program, all fees are non-refundable.</span>
                                                    </label>

                                                    @error('fees_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!--<hr>-->
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->contract_period_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="contract_period_agreement">
                                                        <span class="checkmark ex1">
                                                                Contract Period:</br> Students must stay with their assigned host for the entire contract period they signed up for. Students can extend their contract with the consent of their host on a month-to-month basis once their initial contract period has concluded. If a student chooses to leave their host home prior to the end of their contract, they must pay rent for the remainder of the contract period. All students must inform their host and ISP 30 days prior to leaving their host home indicating that they are ending their participation in the program.
                                                            </span>
                                                    </label>

                                                    @error('contract_period_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->payments_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="payments_agreement">
                                                        <span class="checkmark ex1">
                                                                Payments:</br> Students who pay rent directly to their host will pay on the day they arrive and each month thereafter.  Students must pay the rent in full and on time each month. Failure to do so will result in termination from the program. Students understand that ISP does not get involved in rent disputes between hosts and students. Host payment information and the monthly rent amount will be in the student’s ISP portal.
                                                            </span>
                                                    </label>

                                                    @error('payments_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->deposit_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="deposit_agreement">
                                                        <span class="checkmark ex1">
                                                               Deposit:</br> Each student pays a deposit to ensure they keep their bedroom and bathroom clean and that no damage was done to the bedroom or bathroom. Students must request their deposit returned from ISP within 30 days of leaving the host home. Deposit checks are payable only in the student’s name and are mailed only to a US address. Students must read and understand the deposit information sheet that is in student’s ISP portal.
                                                            </span>
                                                    </label>

                                                    @error('deposit_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->meal_plans_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="meal_plans_agreement">
                                                        <span class="checkmark ex1">

                                                                Meal Plans:</br> Students on the meal plan will receive breakfast and dinner provided by their host every day. Continental breakfast includes juice, bread, cereal, fruit, etc. Dinner is prepared at least 5 nights per week and includes a typical American dinner (protein, vegetable, and bread/pasta). On nights when the host isn’t cooking, students can make dinner using the host’s food. Lunch and snacks are not included in the program and students are responsible for buying those on their own.
                                                                If a student doesn’t sign up for the meal plan, only light cooking is permitted in the host’s kitchen like microwaving and heating up cooked food.
                                                                Students can switch their meal plan after arrival with their host’s consent. If a student has strict dietary needs, ISP recommends they select the no-meal option to best suit their needs.

                                                            </span>
                                                    </label>

                                                    @error('meal_plans_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->student_faq_sheet_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="student_faq_sheet_agreement">
                                                        <span class="checkmark ex1">
                                                                Student FAQ Sheet: </br> Students must read and understand the Student FAQ sheet that will be in the student’s ISP portal.
                                                            </span>
                                                    </label>

                                                    @error('student_faq_sheet_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->airport_pickup_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="airport_pickup_agreement">
                                                        <span class="checkmark ex1">
                                                                Airport Pickup: </br> ISP provides airport pickup only in a few areas in the US. If
                                                                parents or other chaperones arrive with the student at the airport, a reservation
                                                                and payment must have been made in advance for the extra passengers. If a student is
                                                                under 18 years old, they may not fly as an unaccompanied minor. ISP has no liability
                                                                for the third-party airport company assigned to the student. Airport pick up
                                                                instructions and driver contact information will be in the student’s ISP
                                                                portal.
                                                            </span>
                                                    </label>

                                                    @error('airport_pickup_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->transportation_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="transportation_agreement">
                                                        <span class="checkmark ex1">

                                                            Transportation:</br>  All students take public transportation to and from school and
                                                            should expect a commute time of at least 45-55 minutes each way. Host families do
                                                            not drive students to school.

                                                        </span>
                                                    </label>

                                                    @error('transportation_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->host_possessions_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="host_possessions_agreement">
                                                        <span class="checkmark ex1">

                                                                Host Possessions:</br> Students agree to take good care of their host possessions and
                                                                be financially responsible for the costs of repairs associated with breakage or
                                                                loss.

                                                            </span>
                                                    </label>

                                                    @error('host_possessions_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </section>
                        <!--Section 8 First Half End-->
                    </form>

                    <form action="{{route('saf_submit_8_1_2')}}" id="Form-Section8-1-2" method="post">
                    @csrf
                    <!--Section 8 First Half Start-->
                        <section class="my-newfrm">
                            <div class="form_style  main-cardbox">
                                <div class="refundable-payment termsconditions">
                                    <!--<h3>International Student Placements</h3>-->
                                    <!--<h5>Student Agreement</h5>-->

                                    <!-- Agreements Start -->
                                    <div class="agreement-conditions">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->prohibited_activities_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="prohibited_activities_agreement">
                                                        <span class="checkmark ex1">

                                                            Prohibited Activities:</br> Students must not engage in any illegal activities,
                                                            including the use of drugs or alcohol (the use of alcohol & tobacco is not legal in
                                                            the US until the age of 21). Excessive alcohol consumption, theft, abuse of
                                                            property, verbal or physical abuse, impolite language and/or behavior will result in
                                                            termination from the program. Students must stay informed of all laws in the US and
                                                            agree to abide by them. Students must not smoke cigarettes, marijuana, or vape
                                                            inside or outside the host home. If a student violates these rules, they may be
                                                            asked to leave their host home. In this case, ISP will not provide alternative
                                                            housing and the student will forfeit all fees.

                                                        </span>
                                                    </label>

                                                    @error('prohibited_activities_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->medical_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="medical_agreement">
                                                        <span class="checkmark ex1">

                                                            Medical: </br> Students certify that they’re healthy and able to participate in the ISP
                                                            program and have no medical or mental conditions that would make their participation
                                                            unsafe or dangerous to themselves or others. Students must have a physical exam
                                                            within one year before starting the program to ensure they are healthy and capable
                                                            of the demands that studying overseas requires. Students must disclose all
                                                            allergies, medications, past and current psychological, psychiatric, and physical
                                                            health issues truthfully on their application. Failure to do so will result in
                                                            termination from the program.

                                                        </span>
                                                    </label>

                                                    @error('medical_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->request_for_host_change_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="request_for_host_change_agreement">
                                                        <span class="checkmark ex1">

                                                            Request for Host change: </br> If a student has an issue with their host during their
                                                            initial contract period, ISP will assist them in resolving the problem. If the
                                                            problem can’t be resolved, ISP will provide the student with a second host home. ISP
                                                            has the final authority whether to move a student and will determine if additional
                                                            fees will be charged.

                                                        </span>
                                                    </label>

                                                    @error('request_for_host_change_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->media_photo_release_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="media_photo_release_agreement">
                                                        <span class="checkmark ex1">

                                                                Media/Photo Release: </br> Students grant ISP and its representatives the right and
                                                                permission to use photographs, videos, and any other media taken of them for company
                                                                advertising, publicity, and promotion. Students hold ISP harmless from all claims in
                                                                connection with the foregoing and waive the right of inspection and approval.

                                                            </span>
                                                    </label>

                                                    @error('media_photo_release_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->covid_19_protocol_for_students_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="covid_19_protocol_for_students_agreement">
                                                        <span class="checkmark ex1">

                                                                COVID-19 Protocol for Students: </br> All students must provide proof of their COVID
                                                                vaccination status and upload their vaccine card when applying to the program. In
                                                                addition to the first and second doses, students must have received a booster shot.
                                                                If boosters are not available in the student’s home country or if not enough time
                                                                has passed between the second dose and the booster before departure, students must
                                                                agree to receive the booster in the US within 3 days of being eligible.

                                                                <br>

                                                                <p>

                                                                Prior to departure, students will be asked to monitor their health 10 days before
                                                                traveling to the US. Students who exhibit flu-like symptoms (which includes fever,
                                                                body aches, stuffy/runny nose, cough, etc.) upon arrival or at any point during
                                                                their stay will need to self-quarantine in their host home bedroom AND take a rapid
                                                                test. If the test is negative, the student may end their self-quarantine. If the
                                                                result is positive, the student must continue to self-quarantine for at least 5 days
                                                                or until their symptoms subside and a second test is negative.
                                                                </p>

                                                                <p>

                                                                If a student contracts COVID and their host is not comfortable with them staying in
                                                                their home, the student will check into a local hotel at their own expense for at
                                                                least 5 days or until they get a negative test result and symptoms subside. Students
                                                                must arrive with face masks and be prepared to wear them in the host home for the
                                                                first 3 days after arrival if the host requests this.
                                                                </p>

                                                                <p>

                                                                Throughout the student’s stay, local governments will continue to adjust their COVID
                                                                policies according to the prevalence of the virus in the community. ISP students are
                                                                expected to adhere to current regulations, practice good hygiene, clean and
                                                                disinfect their bedroom and bathroom, and practice social distancing. Intentional
                                                                disregard could result in the students’ dismissal from the program. Students
                                                                understand that living in a host home comes with risk and that ISP cannot guarantee
                                                                nor control whether a student will contract COVID from any members of the host home.
                                                                The student assumes all liability for any injury, loss, damage, accident, delay, or
                                                                expense resulting from contracting COVID during their stay.
                                                                <p>
                                                            </span>
                                                    </label>

                                                    @error('covid_19_protocol_for_students_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->program_termination_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="program_termination_agreement">
                                                        <span class="checkmark ex1">

                                                                Program Termination:</br> If a student violates the Student Agreement or if ISP
                                                                decides that the student is not an appropriate candidate for a homestay program, ISP
                                                                will terminate the student and the student will forfeit all program fees.

                                                            </span>
                                                    </label>

                                                    @error('program_termination_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->warranties_consent_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="warranties_consent_agreement">
                                                        <span class="checkmark ex1">

                                                                Warranties/Consent: </br> The student warrants that the information provided on their
                                                                application is true and correct, that they are not a sex offender nor have been
                                                                accused of or convicted any crimes. Students authorize ISP, its employees,
                                                                coordinators, and assigned host family to consent on their behalf to any x-ray
                                                                examinations, anesthetic, medical or surgical treatment, and emergency hospital care
                                                                on their behalf. Students agree that ISP, it’s employees, coordinators, and assigned
                                                                host family can take any action whatsoever regarding their safety without incurring
                                                                any liability or expense.

                                                            </span>
                                                    </label>

                                                    @error('warranties_consent_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->limitation_of_liability_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="limitation_of_liability_agreement">
                                                        <span class="checkmark ex1">

                                                                Limitation of Liability: </br> IN NO EVENT SHALL ISP HAVE ANY LIABILITY TO ANY STUDENT
                                                                FOR ANY INDIRECT, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES, HOWEVER CAUSED, AND
                                                                UNDER ANY THEORY OF LIABILITY, WHETHER OR NOT ISP HAS BEEN ADVISED OF THE
                                                                POSSIBILITY OF SUCH DAMAGES. FURTHER, ISP SHALL NOT BE NAMED AS A PARTY, CALLED AS A
                                                                WITNESS, OR SERVED DISCOVERY REQUESTS IN ANY DISPUTE BETWEEN STUDENTS AND HOSTS
                                                                REGARDING THE FINANCIAL OR INTERPERSONAL DEALINGS BETWEEN STUDENTS AND HOSTS.

                                                            </span>
                                                    </label>

                                                    @error('limitation_of_liability_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->indemnification_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="indemnification_agreement">
                                                        <span class="checkmark ex1">

                                                                Indemnification: </br> Students understand that hosts are not ISP’s employees or
                                                                agents, and that ISP has no constructive control of the hosts’ behavior. Students
                                                                understand that the information provided by ISP about each host family is not a
                                                                perfect predictor of how the host will act in the future, and that the background
                                                                and safety of each host is not guaranteed. Students acknowledge that it is voluntary
                                                                for them to participate in trips and activities with their host and that ISP does
                                                                not require their participation. Students assume all risks associated with injury or
                                                                loss arising from their participation in the ISP program and release ISP of any
                                                                liability for any claim of injury, death, property damage, or other loss.

                                                            </span>
                                                    </label>

                                                    @error('indemnification_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->governing_law_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="governing_law_agreement">
                                                        <span class="checkmark ex1">

                                                                Governing Law: </br> All parties agree to solve any dispute and resolution of this
                                                                Agreement using arbitration services in Santa Clara County with the American
                                                                Arbitration Association before using any other means to solve the dispute.

                                                            </span>
                                                    </label>

                                                    @error('governing_law_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="payment-ckbx three">
                                                    <label class="boxs-siz">
                                                        <input type="checkbox" value="yes"
                                                               {{$SafAgreementInfo && $SafAgreementInfo->force_majeure_agreement == "yes" ? "checked=checked" : "" }}
                                                               name="force_majeure_agreement">
                                                        <span class="checkmark ex1">

                                                            Force Majeure:</br> The parties will not be liable for delays or errors in its
                                                            performance or for non-performance due to causes beyond its reasonable control
                                                            (“Force Majeure Event”) including Acts of god and pandemics.

                                                        </span>
                                                    </label>

                                                    @error('force_majeure_agreement')
                                                    <div class="saf_msg">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sav-btn">
                                    <button type="submit">Save</button>
                                </div>
                            </div>
                        </section>
                        <!--Section 8 First Half End-->
                    </form>

                    <form action="{{route('saf_submit_8_2')}}" id="Form-Section8-2" method="post">
                    @csrf
                    <!--Section 8 Second Half Start-->
                        <section class="my-newfrm">
                            <div class="form_style  main-cardbox">

                                <h5>Students:</h5>
                                <p>Each party warrants that it has full power and authority to enter and
                                    perform under
                                    this Agreement and that the person signing this Agreement on behalf
                                    of such party
                                    has been duly authorized and empowered to execute this Agreement.
                                    The student either
                                    fully comprehends English or has had an interpreter explain this
                                    Agreement in its
                                    entirety. In witness whereof, the parties hereto have caused this
                                    Agreement to be
                                    executed.</p>

                                <h5>Parents (students under 18):</h5>
                                <p>I acknowledge that my child is under the age of 18 years old, and
                                    that I will be held
                                    responsible for my child’s actions while they are in the ISP
                                    program. I agree to pay
                                    the full amount for all damages that my child is responsible for,
                                    regardless of
                                    whether the damages were accidental. I agree to hold ISP and my
                                    child’s host
                                    harmless and release all liability including all claims against ISP
                                    and the host
                                    family for injury, loss, damages, accident, delay or expense
                                    resulting from
                                    participation in the ISP program.</p>
                                <!-- Agreement End -->

                                <h6>By clicking "Agree" below, I state that I understand and agree to the
                                    terms and
                                    conditions.</h6>

                                <h6 class="pay-method"><!-- <i class="fa-solid fa-credit-card"></i> -->
                                    Agreement<span>*</span>
                                </h6>
                                <div class="payment-ckbx three">

                                    <label>
                                        <input type="radio" value="yes"
                                               {{$Saf_BasicInfo && $Saf_BasicInfo->agree == "yes" ? "checked=checked" : "" }}
                                               name="agree"
                                               required>
                                        <span class="checkmark">Agree</span>
                                    </label>


                                    @error('agree')
                                    <div class="saf_msg">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <h3 class="submit">Submit the information in the application form by
                                    clicking the "Submit"
                                    button below:</h3>
                                <p class="submitp">It might take a few minutes to process your information
                                    before you: 1)
                                    see a
                                    confirmation message in your web browser, and 2) receive a confirmation
                                    email.</p>

                                <p class="admin">PLEASE CHECK YOUR SPAM FOLDER IF YOU DO NOT HEAR FROM ISP
                                    WITHIN 1 BUSINESS
                                    DAY
                                    OF APPLYING AND EMAIL <a href="">ADMIN@ISPHOMESTAYS.COM</a> FOR ANY
                                    QUESTIONS.</p>
                                <button class="payment">Submit</button>
                                <hr class="payment">

                            </div>
                        </section>
                        <!--Section 8 Second Half End-->
                    </form>
                    <!--Section 8 End-->

                </article>
            </main>


            <!--International Student Placement Agreement End-->

            <!-- Complete -->

        </div>
        <!-- main -->
        {{--        </form>--}}
    </div>
</section>

<!-- footer start  -->
@include('web.layouts.footer')
<!-- footer end  -->


<!-- js start -->
@include('web.layouts.js')
<!-- js ends -->
{{--@push('js')--}}
<script>
    // $(document).ready(function () {
    {{--$('.get-id').click(function (){--}}
    {{--    order_id= $(this).data("orderid");--}}
    {{--    var data = {'order_id':order_id,'_token':'{{csrf_token()}}'};--}}
    {{--    var url = '{{route('admin_internal_notes')}}';--}}
    {{--    var res = AjaxRequest(url,data);--}}
    {{--    if(res.status==1)--}}
    {{--    {--}}
    {{--        $('#internal_notes').val(res.data);--}}
    {{--    }--}}
    {{--})--}}
    // function MyAjaxRequest(url, data) {
    //     var res;
    //     $.ajax({
    //         url: url,
    //         data: data,
    //         async: false,
    //         error: function () {
    //             console.log('error');
    //         },
    //         dataType: 'json',
    //         success: function (data) {
    //             res = data;
    //
    //         },
    //         type: 'POST'
    //     });
    //
    //     return res;
    // }


    // $('.Section-Btn').click(function () {
    {{--function getFormObj(formId) {--}}


    {{--var formdata = $('#Form-Section1 :input').serialize();--}}
    {{--alert(formdata);--}}
    {{--let url = '{{route('new_student_application_form_submit')}}';--}}
    {{--// let data = formData;--}}
    {{--let data = {'data': formdata, 'Section':formId , '_token': '{{csrf_token()}}'};--}}
    {{--let res = MyAjaxRequest(url, data);--}}
    {{--if (res.status == 1) {--}}
    {{--    console.log(res.data);--}}
    {{--} else {--}}
    {{--    console.log(res + 'error');--}}
    {{--}--}}
    {{--return false;--}}


    //
    // var inputs = $(".form1");
    // var mydata;
    // for(var i = 0; i < inputs.length; i++){
    //     var myname = $(inputs[i]).attr("name");
    //     var myvalue = $(inputs[i]).val();
    //     var combine = myname+myvalue;
    //     mydata += combine;
    //     // mydata +=( $(inputs[i]).attr("name")+' '+$(inputs[i]).val());
    // }
    // console.log(mydata);
    //


    // data = $('#myform1').serialize();
    // console.log(data, formId);
    // return false;
    // var formData = {
    //     program: $("input[name=program]").val(),
    //     first_name: $("input[name=first_name]").val(),
    //     last_name: $("input[name=last_name]").val(),
    //     dob: $("input[name=dob]").val(),
    //     age: $("input[name=age]").val(),
    //     gender: $("input[name=gender]").val(),
    //     country_of_permanent_residence: $("#country_of_permanent_residence").val(),
    //     passport_number: $("input[name=passport_number]").val(),
    //     passport_exp: $("input[name=passport_exp]").val(),
    //     student_profile_photo: $("input[name=student_profile_photo]").val(),
    //
    // };
    // alert(formData); console.log(formData); return false;

    // };
    // });
</script>
{{--@endpush--}}
</body>


{{--@endsection--}}

</html>