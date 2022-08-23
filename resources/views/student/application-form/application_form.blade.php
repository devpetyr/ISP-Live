@extends('web.layouts.main')
@section('page_title','ISP - Student - Application Form')
@section('content')
    @if ($errors->any())

        <style>


        </style>
        <div class="alert alert-danger">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
        <div class="container">
            <form action="{{route('student_application_form_submit')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-main">
                    <div class="form_style">
                        <h3> Choose Program</h3>
                        <div class="payment-ckbx">
                            <label>
                                <input type="radio" checked="checked" value="College Student" name="program">
                                <span class="checkmark">College Student</span>
                            </label>
                            <label>
                                <input type="radio" value="High School Student" name="program">
                                <span class="checkmark">High School Student</span>
                            </label>
                            <label>
                                <input type="radio" value="Junior High School Student" name="program">
                                <span class="checkmark">Junior High School Student</span>
                            </label>
                        </div>
                    </div>
                    <div class="form_style">
                        <h3>Student Details</h3>
                        <div class="input-flds-main">

                            <div class="input-flds">
                                <label><i class="fa-solid fa-user"></i>First Name<span>*</span></label>
                                <input type="text" name="first_name">
                            </div>
                            @error('first_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-user"></i>Last Name<span>*</span></label>
                                <input type="text" name="last_name" required>
                            </div>
                            @error('last_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <h6 class="birhdate">Birthdate:</h6>
                            <p class="birhdate">(To select a year quickly, click the year number (like "2020") and then
                                the
                                << symbol. To select a month quickly, click the month name.)</p>
                            <div class="input-flds">
                                <label><i class="fa-solid fa-calendar-days"></i>Date of Birth <span>*</span></label><br>
                                <input type="date" name="dob" required>
                            </div>
                            @error('dob')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <h6 class="pay-method two"><i class="fa-solid fa-user"></i>Gender <span>*</span></h6>
                        <div class="payment-ckbx two">

                            <label>
                                <input type="radio" value="Male" checked="checked" name="gender">
                                <span class="checkmark">Male</span>
                            </label>
                            <label>
                                <input type="radio" value="Female" name="gender">
                                <span class="checkmark">Female</span>
                            </label>
                            <label>
                                <input type="radio" value="Other" name="gender">
                                <span class="checkmark">Other</span>
                            </label>

                        </div>
                        @error('gender')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="input-flds">
                            <label><i class="fa-solid fa-user"></i>Other Gender-Specify</label>
                            <input type="text" name="other_gender">
                        </div>
                        @error('other_gender')
                        <div class="alert alert-danger">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="input-flds before">
                            <label><i class="fa-solid fa-earth-americas"></i>Country of Permanent
                                Residence<span>*</span></label>

                            <select class="yd-select " required="" data-parsley-required=""
                                    data-parsley-required-message="This field is Required."
                                    name="country_of_permanent_residence" id="country_of_permanent_residence"
                                    placeholder=""
                                    tabindex="1" data-parsley-group="block-0">
                                {{--                            <option selected="" hidden value="" disabled>--}}
                                {{--                                Please Select Country--}}
                                {{--                            </option>--}}
                                {{--                            @foreach ($countries as $country)--}}
                                {{--                                <option value="{{ $country->id }}">--}}
                                {{--                                    {{ $country->name }}--}}
                                {{--                                </option>--}}
                                {{--                            @endforeach--}}
                                {{--                            Items Added via CSV Import. View Preview for Results.--}}

                                <option value=""></option>
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
                                <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (keeling) Islands">Cocos (keeling) Islands</option>
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
                                <option value="Falkland Islands (malvinas)">Falkland Islands (malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
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
                                <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands
                                </option>
                                <option value="Holy See (vatican City State)">Holy See (vatican City State)</option>
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
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                </option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
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
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="Neutrale Zone">Neutrale Zone</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory">Palestinian Territory</option>
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
                                <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines
                                </option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbien und Montenegro">Serbien und Montenegro</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia And The South Sandwich Islands">South Georgia And The South
                                    Sandwich Islands
                                </option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
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
                                <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="Union der Sozialistischen Sowjetrepubliken">Union der Sozialistischen
                                    Sowjetrepubliken
                                </option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
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
                        </div>

                        <div class="permanent-adress">
                            <h3>Your Permanent Adress:</h3>


                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Address 1<span>*</span></label>
                                <input type="text" name="address1" required>
                            </div>
                            @error('address1')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Address 2</label>
                                <input type="text" name="address2">
                            </div>
                            @error('address2')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Address 3</label>
                                <input type="text" name="address3">
                            </div>
                            @error('address3')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>City<span>*</span></label>
                                <input type="text" name="city" required>
                            </div>
                            @error('city')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror


                            {{--                        <div class="input-flds before">--}}
                            {{--                            <label><i class="fa-solid fa-address-card"></i>City<span>*</span></label><br>--}}
                            {{--                            <select class="yd-select " required="" data-parsley-required=""--}}
                            {{--                                    data-parsley-required-message="This field is Required." name="city"--}}
                            {{--                                    id="city" placeholder="" tabindex="1" data-parsley-group="block-0">--}}

                            {{--                                <option selected="" hidden value="" disabled>--}}
                            {{--                                    Please Select City--}}
                            {{--                                </option>--}}
                            {{--                                @foreach ($cities as $city)--}}
                            {{--                                    <option value="{{ $city->id }}">--}}
                            {{--                                        {{ $city->name }}--}}
                            {{--                                    </option>--}}
                            {{--                                @endforeach--}}

                            {{--                            </select>--}}
                            {{--                        </div>--}}

                            <div class="input-flds before">
                                <label><i class="fa-solid fa-address-card"></i>State<span>*</span></label>
                                <select class="yd-select " name="state" id="student_state" placeholder="" tabindex="1"
                                        data-parsley-group="block-0" required>

                                    {{--                                <option selected="" hidden value="" disabled>--}}
                                    {{--                                    Please Select State--}}
                                    {{--                                </option>--}}
                                    {{--                                @foreach ($states as $state)--}}
                                    {{--                                    <option value="{{ $state->id }}">--}}
                                    {{--                                        {{ $state->name }}--}}
                                    {{--                                    </option>--}}
                                    {{--                                @endforeach--}}

                                    <option value=""></option>
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
                                    <option value="U.S. Virgin Islands"> U.S. Virgin Islands</option>
                                    <option value="American Samoa"> American Samoa</option>
                                    <option value="Guam"> Guam</option>
                                    <option value="Northern Mariana Islands"> Northern Mariana Islands</option>
                                    Items Added via CSV Import. View Preview for Results.


                                </select>
                            </div>
                            @error('state')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Postal/Zip Code<span>*</span></label>
                                <input type="text" name="zip_code" required>
                            </div>
                            @error('zip_code')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds before">
                                <label><i class="fa-solid fa-earth-americas"></i>Country<span>*</span></label>
                                <select class="yd-select " required="" data-parsley-required=""
                                        data-parsley-required-message="This field is Required." name="country"
                                        id="student_country" placeholder="" tabindex="1" data-parsley-group="block-0"
                                        required>
                                    {{--                                <option selected="" hidden value="" disabled>--}}
                                    {{--                                    Please Select Country--}}
                                    {{--                                </option>--}}
                                    {{--                                @foreach ($countries as $country)--}}
                                    {{--                                    <option value="{{ $country->id }}">--}}
                                    {{--                                        {{ $country->name }}--}}
                                    {{--                                    </option>--}}
                                    {{--                                @endforeach--}}
                                    <option value=""></option>
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
                                    <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
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
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (keeling) Islands">Cocos (keeling) Islands</option>
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
                                    <option value="Falkland Islands (malvinas)">Falkland Islands (malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
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
                                    <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands
                                    </option>
                                    <option value="Holy See (vatican City State)">Holy See (vatican City State)</option>
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
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
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
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="Neutrale Zone">Neutrale Zone</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory">Palestinian Territory</option>
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
                                    <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                    <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbien und Montenegro">Serbien und Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia And The South Sandwich Islands">South Georgia And The
                                        South
                                        Sandwich Islands
                                    </option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
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
                                    <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Union der Sozialistischen Sowjetrepubliken">Union der Sozialistischen
                                        Sowjetrepubliken
                                    </option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
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
                                    Items Added via CSV Import. View Preview for Results.
                                </select>
                            </div>
                            @error('country')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds">
                                <label><i class="fa-solid fa-phone-flip"></i>Phone Number (+country
                                    code)<span>*</span></label>
                                <input type="text" name="phone_number" required>
                            </div>
                            @error('phone_number')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-phone-flip"></i>WeChat / WhatsApp Number</label>
                                <input type="text" name="wechat_whatsapp">
                            </div>
                            @error('wechat_whatsapp')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-envelope"></i>Student Email<span>*</span></label>
                                <input type="text" name="student_email_1" required>
                            </div>
                            @error('student_email_1')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form_style">
                        <h3>Agent Details</h3>
                        <div class="using-agent">
                            <h3 class="method">I am using an Agent:</h3>
                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Using Agent:
                                <span>*</span>
                            </h6>
                            <div class="payment-ckbx">

                                <label>
                                    <input type="radio" value="no" checked="checked" name="using_agent">
                                    <span class="checkmark">No</span>
                                </label>
                                <label>
                                    <input type="radio" value="yes" name="using_agent">
                                    <span class="checkmark">Yes</span>
                                </label>

                            </div>
                            @error('using_agent')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <h4>If you are using an Agent, please provide information about the Agent.</h4>
                            <h3>Agent Name & Address:</h3>
                            <div class="input-flds before">
                                <label><i class="fa-solid fa-user"></i>Agency Name</label>
                                <select class="yd-select " name="agency_name" id="agency_name" placeholder=""
                                        tabindex="1"
                                        data-parsley-group="block-0">


                                    <option selected="" value="">Please Select Agency Name</option>
                                    @foreach ($agencies as $agency)
                                        <option value="{{ $agency->id }}">
                                            {{ $agency->agency_name }}
                                        </option>
                                    @endforeach


                                    {{--                                <option value=""></option>--}}
                                    {{--                                <option value="3W Global Education">3W Global Education</option>--}}
                                    {{--                                <option value="A. Morita">A. Morita</option>--}}
                                    {{--                                <option value="A&amp;B University Placement Service">A&amp;B University Placement--}}
                                    {{--                                    Service--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="AAE Vietnam">AAE Vietnam</option>--}}
                                    {{--                                <option value="AAS Education Constultancy">AAS Education Constultancy</option>--}}
                                    {{--                                <option value="Academic &amp; Continuing Education">Academic &amp; Continuing--}}
                                    {{--                                    Education--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Academic Asia">Academic Asia</option>--}}
                                    {{--                                <option value="AcademicAsia China Ltd.">AcademicAsia China Ltd.</option>--}}
                                    {{--                                <option value="ACE Overseas Education Center">ACE Overseas Education Center</option>--}}
                                    {{--                                <option value="Acosta">Acosta</option>--}}
                                    {{--                                <option value="ACPI">ACPI</option>--}}
                                    {{--                                <option value="Admissions Academy">Admissions Academy</option>--}}
                                    {{--                                <option value="AEC &amp; Uhak Information Cafe">AEC &amp; Uhak Information Cafe</option>--}}
                                    {{--                                <option value="AECT">AECT</option>--}}
                                    {{--                                <option value="AGEAS">AGEAS</option>--}}
                                    {{--                                <option value="AIC">AIC</option>--}}
                                    {{--                                <option value="AIE">AIE</option>--}}
                                    {{--                                <option value="AJ Co Ltd">AJ Co Ltd</option>--}}
                                    {{--                                <option value="Akimi Morimoto">Akimi Morimoto</option>--}}
                                    {{--                                <option value="ALC Education Inc/ NEC Soft">ALC Education Inc/ NEC Soft</option>--}}
                                    {{--                                <option value="ALC Global Partners">ALC Global Partners</option>--}}
                                    {{--                                <option value="ALC-Global Partners Education">ALC-Global Partners Education</option>--}}
                                    {{--                                <option value="ALC-Global Partners Education Network">ALC-Global Partners Education--}}
                                    {{--                                    Network--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="ALC-Global Partners Inc.">ALC-Global Partners Inc.</option>--}}
                                    {{--                                <option value="Alex Weber">Alex Weber</option>--}}
                                    {{--                                <option value="Alexey Vinogradov">Alexey Vinogradov</option>--}}
                                    {{--                                <option value="Alfalink">Alfalink</option>--}}
                                    {{--                                <option value="ALL SEASON">ALL SEASON</option>--}}
                                    {{--                                <option value="All Seasons FSI Ventures Inc.">All Seasons FSI Ventures Inc.</option>--}}
                                    {{--                                <option value="Alpros Solutions">Alpros Solutions</option>--}}
                                    {{--                                <option value="American Academic Assistance">American Academic Assistance</option>--}}
                                    {{--                                <option value="American Academy English Language Center">American Academy English--}}
                                    {{--                                    Language Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="American College Preparation">American College Preparation</option>--}}
                                    {{--                                <option value="American Top JSC">American Top JSC</option>--}}
                                    {{--                                <option value="Ameson">Ameson</option>--}}
                                    {{--                                <option value="Amman Establishment for University">Amman Establishment for University--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Anindo Dutabhuana">Anindo Dutabhuana</option>--}}
                                    {{--                                <option value="Aoji Education Group">Aoji Education Group</option>--}}
                                    {{--                                <option value="APEC">APEC</option>--}}
                                    {{--                                <option value="Apprez">Apprez</option>--}}
                                    {{--                                <option value="Arc Three International">Arc Three International</option>--}}
                                    {{--                                <option value="Arif Maskatia">Arif Maskatia</option>--}}
                                    {{--                                <option value="Armen Kuyumchyan">Armen Kuyumchyan</option>--}}
                                    {{--                                <option value="Arthur Eisenbeiss">Arthur Eisenbeiss</option>--}}
                                    {{--                                <option value="AS Educentre">AS Educentre</option>--}}
                                    {{--                                <option value="ASBA">ASBA</option>--}}
                                    {{--                                <option value="Asia Europe Company">Asia Europe Company</option>--}}
                                    {{--                                <option value="Asian Enterprise Education Conslt">Asian Enterprise Education Conslt--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Asiaworld Education Services">Asiaworld Education Services</option>--}}
                                    {{--                                <option value="Aspectama">Aspectama</option>--}}
                                    {{--                                <option value="Aspectama International Student Advisor">Aspectama International Student--}}
                                    {{--                                    Advisor--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Atlas International">Atlas International</option>--}}
                                    {{--                                <option value="Au Seasons FSI Venturo Inc.">Au Seasons FSI Venturo Inc.</option>--}}
                                    {{--                                <option value="AusEd-Uni-Ed Hong Kong">AusEd-Uni-Ed Hong Kong</option>--}}
                                    {{--                                <option value="Australian Education Consult">Australian Education Consult</option>--}}
                                    {{--                                <option value="Azusa">Azusa</option>--}}
                                    {{--                                <option value="B720">B720</option>--}}
                                    {{--                                <option value="Bafang International">Bafang International</option>--}}
                                    {{--                                <option value="Baida Consultants">Baida Consultants</option>--}}
                                    {{--                                <option value="Barcelona">Barcelona</option>--}}
                                    {{--                                <option value="Beijing JJL Overseas Education Consulting and Services">Beijing JJL--}}
                                    {{--                                    Overseas Education Consulting and Services--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Beijing Kaisheng Union Exit Affairs">Beijing Kaisheng Union Exit--}}
                                    {{--                                    Affairs--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Beijing New Oriental Vision">Beijing New Oriental Vision</option>--}}
                                    {{--                                <option value="Beijing Oriental International">Beijing Oriental International</option>--}}
                                    {{--                                <option value="Beijing Reliant">Beijing Reliant</option>--}}
                                    {{--                                <option value="Beijing Wanji Education Cnslt">Beijing Wanji Education Cnslt</option>--}}
                                    {{--                                <option value="Bejing Kentrex Ent, Ltd.">Bejing Kentrex Ent, Ltd.</option>--}}
                                    {{--                                <option value="Best Education">Best Education</option>--}}
                                    {{--                                <option value="Best Education Group">Best Education Group</option>--}}
                                    {{--                                <option value="Best Education Overseas Consultants">Best Education Overseas--}}
                                    {{--                                    Consultants--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Best SAT Review">Best SAT Review</option>--}}
                                    {{--                                <option value="Biejing Oriental International">Biejing Oriental International</option>--}}
                                    {{--                                <option value="Bina Jasa Studies">Bina Jasa Studies</option>--}}
                                    {{--                                <option value="Binh Pham">Binh Pham</option>--}}
                                    {{--                                <option value="Blueberry Worldwide">Blueberry Worldwide</option>--}}
                                    {{--                                <option value="Bluechip">Bluechip</option>--}}
                                    {{--                                <option value="Brian Groves, Dreamschools">Brian Groves, Dreamschools</option>--}}
                                    {{--                                <option value="Burgeon Education">Burgeon Education</option>--}}
                                    {{--                                <option value="CAMPUS MONDI">CAMPUS MONDI</option>--}}
                                    {{--                                <option value="CampusOK Global Education Group">CampusOK Global Education Group</option>--}}
                                    {{--                                <option value="Can-Achieve Consulting Co., Ltd.">Can-Achieve Consulting Co., Ltd.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Canadian Institute of Business and Technology">Canadian Institute of--}}
                                    {{--                                    Business and Technology--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="CAP Studies">CAP Studies</option>--}}
                                    {{--                                <option value="CEDCA">CEDCA</option>--}}
                                    {{--                                <option value="CEFER">CEFER</option>--}}
                                    {{--                                <option value="Center for Advanced Studies">Center for Advanced Studies</option>--}}
                                    {{--                                <option value="Center for International Education">Center for International Education--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Central Education Services">Central Education Services</option>--}}
                                    {{--                                <option value="Changsha Service Center of International Education Exchange">Changsha--}}
                                    {{--                                    Service Center of International Education Exchange--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Cheongju University">Cheongju University</option>--}}
                                    {{--                                <option value="Cheongju University - Office of International Affairs">Cheongju--}}
                                    {{--                                    University - Office of International Affairs--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="CHIBA STUDY ABROAD CENTER">CHIBA STUDY ABROAD CENTER</option>--}}
                                    {{--                                <option value="China - UK Exchange">China - UK Exchange</option>--}}
                                    {{--                                <option value="China Education International">China Education International</option>--}}
                                    {{--                                <option value="China Education Svc Center">China Education Svc Center</option>--}}
                                    {{--                                <option value="China International Tourism">China International Tourism</option>--}}
                                    {{--                                <option value="Ching-Yums Wu">Ching-Yums Wu</option>--}}
                                    {{--                                <option value="Chong Gak Educational Information Center">Chong Gak Educational--}}
                                    {{--                                    Information Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Chongro Overseas (UHAK)">Chongro Overseas (UHAK)</option>--}}
                                    {{--                                <option value="Chongro Overseas Education Inst.">Chongro Overseas Education Inst.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Chongro Overseas Education Institute">Chongro Overseas Education--}}
                                    {{--                                    Institute--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Chongro Overseas Educational Inst.">Chongro Overseas Educational Inst.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Chongro Overseas Educational Institut">Chongro Overseas Educational--}}
                                    {{--                                    Institut--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Chongro Overseas Educational Institute">Chongro Overseas Educational--}}
                                    {{--                                    Institute--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Chungju National University">Chungju National University</option>--}}
                                    {{--                                <option value="CIBT School of Business">CIBT School of Business</option>--}}
                                    {{--                                <option value="CIIC (Hangzhou)">CIIC (Hangzhou)</option>--}}
                                    {{--                                <option value="CIS">CIS</option>--}}
                                    {{--                                <option value="CISL San Diego">CISL San Diego</option>--}}
                                    {{--                                <option value="CJR">CJR</option>--}}
                                    {{--                                <option value="Cleverlearn English Language Center">Cleverlearn English Language--}}
                                    {{--                                    Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="CMI Vietnam">CMI Vietnam</option>--}}
                                    {{--                                <option value="Cody Thai">Cody Thai</option>--}}
                                    {{--                                <option value="College-Contact.com">College-Contact.com</option>--}}
                                    {{--                                <option value="Cosmo Education">Cosmo Education</option>--}}
                                    {{--                                <option value="Cosmos Language School Kaohsiu">Cosmos Language School Kaohsiu</option>--}}
                                    {{--                                <option value="CRISOP Education Consultancy">CRISOP Education Consultancy</option>--}}
                                    {{--                                <option value="Cross Cultural Exchange">Cross Cultural Exchange</option>--}}
                                    {{--                                <option value="Cultural Link">Cultural Link</option>--}}
                                    {{--                                <option value="Cultural Link Center">Cultural Link Center</option>--}}
                                    {{--                                <option value="Cultural Link Center (HK) Ltd">Cultural Link Center (HK) Ltd</option>--}}
                                    {{--                                <option value="Cultural Link Centre">Cultural Link Centre</option>--}}
                                    {{--                                <option value="Culture Calling">Culture Calling</option>--}}
                                    {{--                                <option value="D &amp; LT Consultants Ltd.">D &amp; LT Consultants Ltd.</option>--}}
                                    {{--                                <option value="Da Di Overseas Studies Service Center">Da Di Overseas Studies Service--}}
                                    {{--                                    Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Da Di Overseas Studies Svc Center">Da Di Overseas Studies Svc Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="DADI Overseas Studies">DADI Overseas Studies</option>--}}
                                    {{--                                <option value="DADI Overseas Studies Service">DADI Overseas Studies Service</option>--}}
                                    {{--                                <option value="DADI Overseas Studies Service Center">DADI Overseas Studies Service--}}
                                    {{--                                    Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="DADI Overseas Study Service">DADI Overseas Study Service</option>--}}
                                    {{--                                <option value="Daekyung">Daekyung</option>--}}
                                    {{--                                <option value="Dalian Wisdom Services">Dalian Wisdom Services</option>--}}
                                    {{--                                <option value="Dalian Xinquan Science &amp; Edu">Dalian Xinquan Science &amp; Edu--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Dan Li">Dan Li</option>--}}
                                    {{--                                <option value="Daniel K. Lee">Daniel K. Lee</option>--}}
                                    {{--                                <option value="Daryl Rustad">Daryl Rustad</option>--}}
                                    {{--                                <option value="Dennis Mun">Dennis Mun</option>--}}
                                    {{--                                <option value="Detsan Kimya">Detsan Kimya</option>--}}
                                    {{--                                <option value="DHB Education Training &amp; Service Centre SDN. BHD">DHB Education--}}
                                    {{--                                    Training &amp; Service Centre SDN. BHD--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="diBec">diBec</option>--}}
                                    {{--                                <option value="Direct English">Direct English</option>--}}
                                    {{--                                <option value="Divya Joseph’s DJIEC">Divya Joseph’s DJIEC</option>--}}
                                    {{--                                <option value="Dong Duk University">Dong Duk University</option>--}}
                                    {{--                                <option value="Dong-Eui University">Dong-Eui University</option>--}}
                                    {{--                                <option value="Dongseo University">Dongseo University</option>--}}
                                    {{--                                <option value="DoosanEdu International">DoosanEdu International</option>--}}
                                    {{--                                <option value="Douglas Education Consultants">Douglas Education Consultants</option>--}}
                                    {{--                                <option value="dpf Sports and Exchange">dpf Sports and Exchange</option>--}}
                                    {{--                                <option value="Dr. Hush Study Abroad Center">Dr. Hush Study Abroad Center</option>--}}
                                    {{--                                <option value="E&amp;C Overseas Enterprise Co.">E&amp;C Overseas Enterprise Co.</option>--}}
                                    {{--                                <option value="E&amp;F Education Centre">E&amp;F Education Centre</option>--}}
                                    {{--                                <option value="EachFuture Cultural Network">EachFuture Cultural Network</option>--}}
                                    {{--                                <option value="Eagle Fustar">Eagle Fustar</option>--}}
                                    {{--                                <option value="Echo International">Echo International</option>--}}
                                    {{--                                <option value="ECI">ECI</option>--}}
                                    {{--                                <option value="Ed Achieve">Ed Achieve</option>--}}
                                    {{--                                <option value="Ed Alliance">Ed Alliance</option>--}}
                                    {{--                                <option value="Ed Alliance Consultancy">Ed Alliance Consultancy</option>--}}
                                    {{--                                <option value="EDCOM Consulting">EDCOM Consulting</option>--}}
                                    {{--                                <option value="EDIC">EDIC</option>--}}
                                    {{--                                <option value="EDIC Educational Consultant">EDIC Educational Consultant</option>--}}
                                    {{--                                <option value="Edma Limited">Edma Limited</option>--}}
                                    {{--                                <option value="EDU - INTERNATIONAL">EDU - INTERNATIONAL</option>--}}
                                    {{--                                <option value="Edu City Inc.">Edu City Inc.</option>--}}
                                    {{--                                <option value="EDU CITY Inc.">EDU CITY Inc.</option>--}}
                                    {{--                                <option value="Edu Con International LLC">Edu Con International LLC</option>--}}
                                    {{--                                <option value="Edu Global">Edu Global</option>--}}
                                    {{--                                <option value="EDU KOREA">EDU KOREA</option>--}}
                                    {{--                                <option value="Edu Korea Study Abroad Counseling">Edu Korea Study Abroad Counseling--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Edu Net">Edu Net</option>--}}
                                    {{--                                <option value="Edu Shanghai International">Edu Shanghai International</option>--}}
                                    {{--                                <option value="Edu-International">Edu-International</option>--}}
                                    {{--                                <option value="Edubridge">Edubridge</option>--}}
                                    {{--                                <option value="Education Information Ctr.">Education Information Ctr.</option>--}}
                                    {{--                                <option value="Education Link">Education Link</option>--}}
                                    {{--                                <option value="Education Network Consultants">Education Network Consultants</option>--}}
                                    {{--                                <option value="Education New Zealand Care Ltd">Education New Zealand Care Ltd</option>--}}
                                    {{--                                <option value="Education South Australia">Education South Australia</option>--}}
                                    {{--                                <option value="Education UK">Education UK</option>--}}
                                    {{--                                <option value="Education999">Education999</option>--}}
                                    {{--                                <option value="Educational Consolation Institute">Educational Consolation Institute--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Educational Consortium Institute (ECI)">Educational Consortium Institute--}}
                                    {{--                                    (ECI)--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Educational Planning Inc">Educational Planning Inc</option>--}}
                                    {{--                                <option value="EduGlobal China Ltd">EduGlobal China Ltd</option>--}}
                                    {{--                                <option value="EduKorea">EduKorea</option>--}}
                                    {{--                                <option value="EduKorea Study Abroad Counseling">EduKorea Study Abroad Counseling--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Edupac Kaplan Jakarta">Edupac Kaplan Jakarta</option>--}}
                                    {{--                                <option value="EDUXPERT">EDUXPERT</option>--}}
                                    {{--                                <option value="Edwise International">Edwise International</option>--}}
                                    {{--                                <option value="EF Education First">EF Education First</option>--}}
                                    {{--                                <option value="EIC">EIC</option>--}}
                                    {{--                                <option value="EL Global Overseas Education">EL Global Overseas Education</option>--}}
                                    {{--                                <option value="Elite International Consulting">Elite International Consulting</option>--}}
                                    {{--                                <option value="Elite Overseas Studies Centre">Elite Overseas Studies Centre</option>--}}
                                    {{--                                <option value="ELS Japan">ELS Japan</option>--}}
                                    {{--                                <option value="ELS Japan Inc">ELS Japan Inc</option>--}}
                                    {{--                                <option value="ELS Language Centers">ELS Language Centers</option>--}}
                                    {{--                                <option value="ELS/ Japan">ELS/ Japan</option>--}}
                                    {{--                                <option value="ELTIM Overseas Education Consultants">ELTIM Overseas Education--}}
                                    {{--                                    Consultants--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Emax Global Education">Emax Global Education</option>--}}
                                    {{--                                <option value="ENC Sdn. Bhd.">ENC Sdn. Bhd.</option>--}}
                                    {{--                                <option value="Enplas">Enplas</option>--}}
                                    {{--                                <option value="Enplas Tesco, Inc.">Enplas Tesco, Inc.</option>--}}
                                    {{--                                <option value="Epto. Educativo Fase">Epto. Educativo Fase</option>--}}
                                    {{--                                <option value="Equator Academy of Art">Equator Academy of Art</option>--}}
                                    {{--                                <option value="Eric Kamga Djoyum (relative)">Eric Kamga Djoyum (relative)</option>--}}
                                    {{--                                <option value="Ethink">Ethink</option>--}}
                                    {{--                                <option value="Everpower Education Institute">Everpower Education Institute</option>--}}
                                    {{--                                <option value="Everyday Gandhis">Everyday Gandhis</option>--}}
                                    {{--                                <option value="Exchange International">Exchange International</option>--}}
                                    {{--                                <option value="Expedia Certified Travel Consultant">Expedia Certified Travel--}}
                                    {{--                                    Consultant--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Faculty of Arts &amp; Letters">Faculty of Arts &amp; Letters</option>--}}
                                    {{--                                <option value="Fanny Yu">Fanny Yu</option>--}}
                                    {{--                                <option value="Fariba Nejat">Fariba Nejat</option>--}}
                                    {{--                                <option value="Federal IELTS English School">Federal IELTS English School</option>--}}
                                    {{--                                <option value="Federico Nervi">Federico Nervi</option>--}}
                                    {{--                                <option value="Feel So Good Study Abroad">Feel So Good Study Abroad</option>--}}
                                    {{--                                <option value="First Global Education LTD">First Global Education LTD</option>--}}
                                    {{--                                <option value="First Global Educations">First Global Educations</option>--}}
                                    {{--                                <option value="FIRSTSHIP INTERNATIONAL">FIRSTSHIP INTERNATIONAL</option>--}}
                                    {{--                                <option value="Focus International">Focus International</option>--}}
                                    {{--                                <option value="Foresight International Education">Foresight International Education--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Forte International Exchange Association">Forte International Exchange--}}
                                    {{--                                    Association--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Fortrust Education Services">Fortrust Education Services</option>--}}
                                    {{--                                <option value="FPP Edu-Media">FPP Edu-Media</option>--}}
                                    {{--                                <option value="Franklin Intl Edu Group">Franklin Intl Edu Group</option>--}}
                                    {{--                                <option value="Fumio Ichihara">Fumio Ichihara</option>--}}
                                    {{--                                <option value="Futton">Futton</option>--}}
                                    {{--                                <option value="Gary Bjorndahl">Gary Bjorndahl</option>--}}
                                    {{--                                <option value="GASA">GASA</option>--}}
                                    {{--                                <option value="Gateway 21">Gateway 21</option>--}}
                                    {{--                                <option value="GCS Group USA Inc">GCS Group USA Inc</option>--}}
                                    {{--                                <option value="GEA">GEA</option>--}}
                                    {{--                                <option value="George Chen">George Chen</option>--}}
                                    {{--                                <option value="GEOS">GEOS</option>--}}
                                    {{--                                <option value="GEOS International Exchange Assoc.">GEOS International Exchange Assoc.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Gifu Shotoku Gakuen Univ. Intl">Gifu Shotoku Gakuen Univ. Intl</option>--}}
                                    {{--                                <option value="Gifu Shotoku Gakuen University">Gifu Shotoku Gakuen University</option>--}}
                                    {{--                                <option value="GIO Club Study Abroad">GIO Club Study Abroad</option>--}}
                                    {{--                                <option value="Global Admissions">Global Admissions</option>--}}
                                    {{--                                <option value="Global Career Service LA Office">Global Career Service LA Office</option>--}}
                                    {{--                                <option value="Global Education Consulting Co.">Global Education Consulting Co.</option>--}}
                                    {{--                                <option value="Global Educational Services">Global Educational Services</option>--}}
                                    {{--                                <option value="Global Language Services">Global Language Services</option>--}}
                                    {{--                                <option value="Global Network Educators">Global Network Educators</option>--}}
                                    {{--                                <option value="Global One International">Global One International</option>--}}
                                    {{--                                <option value="Global Opportunities">Global Opportunities</option>--}}
                                    {{--                                <option value="Global Partners Inc">Global Partners Inc</option>--}}
                                    {{--                                <option value="Global Reach">Global Reach</option>--}}
                                    {{--                                <option value="Global Study">Global Study</option>--}}
                                    {{--                                <option value="Global View Cultural Exchange">Global View Cultural Exchange</option>--}}
                                    {{--                                <option value="Global Vision Technology Inc.">Global Vision Technology Inc.</option>--}}
                                    {{--                                <option value="GLS Sprachenezentrum">GLS Sprachenezentrum</option>--}}
                                    {{--                                <option value="GLS Sprachenzentrum">GLS Sprachenzentrum</option>--}}
                                    {{--                                <option value="GLZINC PTE Ltd">GLZINC PTE Ltd</option>--}}
                                    {{--                                <option value="Go Ahead (Groovision)">Go Ahead (Groovision)</option>--}}
                                    {{--                                <option value="Going Abroad Consultation Services Co. Ltd">Going Abroad Consultation--}}
                                    {{--                                    Services Co. Ltd--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Golden Summit Immigration Consult">Golden Summit Immigration Consult--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Golden Travel">Golden Travel</option>--}}
                                    {{--                                <option value="GONZGO Connections">GONZGO Connections</option>--}}
                                    {{--                                <option value="Grace Cheung">Grace Cheung</option>--}}
                                    {{--                                <option value="Grad School Consulting Co., Ltd">Grad School Consulting Co., Ltd</option>--}}
                                    {{--                                <option value="Grand Education Group">Grand Education Group</option>--}}
                                    {{--                                <option value="Great China">Great China</option>--}}
                                    {{--                                <option value="Gregory Ng">Gregory Ng</option>--}}
                                    {{--                                <option value="GSI">GSI</option>--}}
                                    {{--                                <option value="Guangzhou Huaren Consulting Service">Guangzhou Huaren Consulting--}}
                                    {{--                                    Service--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Guangzhou Huaren Consulting Service Co. Ltd.">Guangzhou Huaren Consulting--}}
                                    {{--                                    Service Co. Ltd.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Guangzhou Service Center for Scholarly Exchange">Guangzhou Service Center--}}
                                    {{--                                    for Scholarly Exchange--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Guardian Education Consortium Inst.">Guardian Education Consortium--}}
                                    {{--                                    Inst.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="GZL International Consultants">GZL International Consultants</option>--}}
                                    {{--                                <option value="Haiyi Education Group Beijing">Haiyi Education Group Beijing</option>--}}
                                    {{--                                <option value="Hanbat University">Hanbat University</option>--}}
                                    {{--                                <option value="Hapdong Overseas Education">Hapdong Overseas Education</option>--}}
                                    {{--                                <option value="Harry Ma">Harry Ma</option>--}}
                                    {{--                                <option value="Heatherland Consultancy Services">Heatherland Consultancy Services--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Hebel International Affairs Consultant">Hebel International Affairs--}}
                                    {{--                                    Consultant--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Helen Chang">Helen Chang</option>--}}
                                    {{--                                <option value="HK International">HK International</option>--}}
                                    {{--                                <option value="HK Overseas Studies">HK Overseas Studies</option>--}}
                                    {{--                                <option value="Hokkaido Information University">Hokkaido Information University</option>--}}
                                    {{--                                <option value="Hong Kong education Web">Hong Kong education Web</option>--}}
                                    {{--                                <option value="Hong Kong Overseas Studies">Hong Kong Overseas Studies</option>--}}
                                    {{--                                <option value="Hong Kong Overseas Studies Center">Hong Kong Overseas Studies Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Hong Kong Overseas Studies Centre">Hong Kong Overseas Studies Centre--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Hong Kong Overseas Study Centre">Hong Kong Overseas Study Centre</option>--}}
                                    {{--                                <option value="Hongsub Kim">Hongsub Kim</option>--}}
                                    {{--                                <option value="Hope 2000 Education">Hope 2000 Education</option>--}}
                                    {{--                                <option value="Hsin-Yi Chiang">Hsin-Yi Chiang</option>--}}
                                    {{--                                <option value="Huaren Immigration Services">Huaren Immigration Services</option>--}}
                                    {{--                                <option value="Hubei Provincial Talents">Hubei Provincial Talents</option>--}}
                                    {{--                                <option value="Human Centre">Human Centre</option>--}}
                                    {{--                                <option value="Human International Universities &amp; Colleges">Human International--}}
                                    {{--                                    Universities &amp; Colleges--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Human K Overseas Study">Human K Overseas Study</option>--}}
                                    {{--                                <option value="HY Overseas Edu Service">HY Overseas Edu Service</option>--}}
                                    {{--                                <option value="i Best Uhak">i Best Uhak</option>--}}
                                    {{--                                <option value="IAE">IAE</option>--}}
                                    {{--                                <option value="IAE Longre EduNet">IAE Longre EduNet</option>--}}
                                    {{--                                <option value="iAE-China">iAE-China</option>--}}
                                    {{--                                <option value="IBE Consulting">IBE Consulting</option>--}}
                                    {{--                                <option value="ICC">ICC</option>--}}
                                    {{--                                <option value="ICEA">ICEA</option>--}}
                                    {{--                                <option value="IDP Education">IDP Education</option>--}}
                                    {{--                                <option value="IDP Education Pty.">IDP Education Pty.</option>--}}
                                    {{--                                <option value="IEC Online">IEC Online</option>--}}
                                    {{--                                <option value="iEduCare Services">iEduCare Services</option>--}}
                                    {{--                                <option value="iEducation &amp; Training Grp.">iEducation &amp; Training Grp.</option>--}}
                                    {{--                                <option value="IEECU">IEECU</option>--}}
                                    {{--                                <option value="IEEUC">IEEUC</option>--}}
                                    {{--                                <option value="II WAVE">II WAVE</option>--}}
                                    {{--                                <option value="IMTP Consulting">IMTP Consulting</option>--}}
                                    {{--                                <option value="INAX (ALC Education Inc.)">INAX (ALC Education Inc.)</option>--}}
                                    {{--                                <option value="Indo Horizon Education Abroad">Indo Horizon Education Abroad</option>--}}
                                    {{--                                <option value="INFO Learning Co., Ltd.">INFO Learning Co., Ltd.</option>--}}
                                    {{--                                <option value="Information Center">Information Center</option>--}}
                                    {{--                                <option value="INHA University">INHA University</option>--}}
                                    {{--                                <option value="Inlingua">Inlingua</option>--}}
                                    {{--                                <option value="Insight-Lingua">Insight-Lingua</option>--}}
                                    {{--                                <option value="Insights Education International">Insights Education International--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Institute of Public Administration">Institute of Public Administration--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Intercultural Exchange Network">Intercultural Exchange Network</option>--}}
                                    {{--                                <option value="Interlanguage">Interlanguage</option>--}}
                                    {{--                                <option value="InterLink">InterLink</option>--}}
                                    {{--                                <option value="INTERLINK EDUCATION SERVICES">INTERLINK EDUCATION SERVICES</option>--}}
                                    {{--                                <option value="Interlogos, LLC">Interlogos, LLC</option>--}}
                                    {{--                                <option value="International Academy">International Academy</option>--}}
                                    {{--                                <option value="International Academy - Pusan">International Academy - Pusan</option>--}}
                                    {{--                                <option value="International Communication Center">International Communication Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Culture Studies">International Culture Studies</option>--}}
                                    {{--                                <option value="International Education Advisory Center">International Education Advisory--}}
                                    {{--                                    Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Education Advisory Centre Limited">International Education--}}
                                    {{--                                    Advisory Centre Limited--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="international Education Advisory Ctr">international Education Advisory--}}
                                    {{--                                    Ctr--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Education Agency">International Education Agency</option>--}}
                                    {{--                                <option value="International Education Consultancy">International Education--}}
                                    {{--                                    Consultancy--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Education Specialist">International Education Specialist--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Group Education Consult">International Group Education--}}
                                    {{--                                    Consult--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International High School, SF">International High School, SF</option>--}}
                                    {{--                                <option value="International Language Center">International Language Center</option>--}}
                                    {{--                                <option value="International Language Centre">International Language Centre</option>--}}
                                    {{--                                <option value="International Medical Universities">International Medical Universities--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Relations">International Relations</option>--}}
                                    {{--                                <option value="International Scholar Education Svcs">International Scholar Education--}}
                                    {{--                                    Svcs--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Student Edu. Services">International Student Edu.--}}
                                    {{--                                    Services--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Student Services">International Student Services</option>--}}
                                    {{--                                <option value="International Student Studies">International Student Studies</option>--}}
                                    {{--                                <option value="International Studies Service">International Studies Service</option>--}}
                                    {{--                                <option value="International Studies Service Centre">International Studies Service--}}
                                    {{--                                    Centre--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Studies Services Centre">International Studies Services--}}
                                    {{--                                    Centre--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="International Study Abroad">International Study Abroad</option>--}}
                                    {{--                                <option value="Interstudy Korea">Interstudy Korea</option>--}}
                                    {{--                                <option value="ISA Inc. Tokyo">ISA Inc. Tokyo</option>--}}
                                    {{--                                <option value="ISEP KOREA">ISEP KOREA</option>--}}
                                    {{--                                <option value="ISET">ISET</option>--}}
                                    {{--                                <option value="ISS">ISS</option>--}}
                                    {{--                                <option value="ISS - International Student Society">ISS - International Student--}}
                                    {{--                                    Society--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="ISS/ICC">ISS/ICC</option>--}}
                                    {{--                                <option value="ISSC">ISSC</option>--}}
                                    {{--                                <option value="Itochu Corporation">Itochu Corporation</option>--}}
                                    {{--                                <option value="J.C. Yang">J.C. Yang</option>--}}
                                    {{--                                <option value="J.F. Oberlin Center for Int. Studies">J.F. Oberlin Center for Int.--}}
                                    {{--                                    Studies--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="J.W. Lee">J.W. Lee</option>--}}
                                    {{--                                <option value="JA Study Abroad">JA Study Abroad</option>--}}
                                    {{--                                <option value="JA Study Abroad Center">JA Study Abroad Center</option>--}}
                                    {{--                                <option value="JA Study Abroad Center (JASA)">JA Study Abroad Center (JASA)</option>--}}
                                    {{--                                <option value="JAAC">JAAC</option>--}}
                                    {{--                                <option value="Jakarta International School">Jakarta International School</option>--}}
                                    {{--                                <option value="Jalpak International America">Jalpak International America</option>--}}
                                    {{--                                <option value="Jalpak International America, Inc.">Jalpak International America, Inc.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Japan Productivity Center">Japan Productivity Center</option>--}}
                                    {{--                                <option value="JASAUSA / ALCI">JASAUSA / ALCI</option>--}}
                                    {{--                                <option value="JASAUSA/ALCI">JASAUSA/ALCI</option>--}}
                                    {{--                                <option value="Jenny Huang">Jenny Huang</option>--}}
                                    {{--                                <option value="Jeong, Jee Youn">Jeong, Jee Youn</option>--}}
                                    {{--                                <option value="Jiahao Lu’s Agent">Jiahao Lu’s Agent</option>--}}
                                    {{--                                <option value="Jiangsu Golden Sunshine">Jiangsu Golden Sunshine</option>--}}
                                    {{--                                <option value="Jie Li">Jie Li</option>--}}
                                    {{--                                <option value="JJ International Service">JJ International Service</option>--}}
                                    {{--                                <option value="JJL Overseas Education">JJL Overseas Education</option>--}}
                                    {{--                                <option value="JM Education Counseling">JM Education Counseling</option>--}}
                                    {{--                                <option value="John Roberts">John Roberts</option>--}}
                                    {{--                                <option value="JTB EDUCATIONAL TOURS">JTB EDUCATIONAL TOURS</option>--}}
                                    {{--                                <option value="JTB Global Club">JTB Global Club</option>--}}
                                    {{--                                <option value="JTB Global Club, INC.">JTB Global Club, INC.</option>--}}
                                    {{--                                <option value="Jubeerich Consultancy Pvt. Ltd.">Jubeerich Consultancy Pvt. Ltd.</option>--}}
                                    {{--                                <option value="Juss Edu Consulting">Juss Edu Consulting</option>--}}
                                    {{--                                <option value="Kami Shizu">Kami Shizu</option>--}}
                                    {{--                                <option value="Kaplan International Centers">Kaplan International Centers</option>--}}
                                    {{--                                <option value="Kawaijuku">Kawaijuku</option>--}}
                                    {{--                                <option value="Keio University">Keio University</option>--}}
                                    {{--                                <option value="KeMeiXin Education Consulting">KeMeiXin Education Consulting</option>--}}
                                    {{--                                <option value="Ken Lee">Ken Lee</option>--}}
                                    {{--                                <option value="Khabarovsk State Academy">Khabarovsk State Academy</option>--}}
                                    {{--                                <option value="KHAI MINH CORP">KHAI MINH CORP</option>--}}
                                    {{--                                <option value="KILROY Education">KILROY Education</option>--}}
                                    {{--                                <option value="Kishen Gani">Kishen Gani</option>--}}
                                    {{--                                <option value="KiwiToday Education Centre">KiwiToday Education Centre</option>--}}
                                    {{--                                <option value="Knowledge Consulting">Knowledge Consulting</option>--}}
                                    {{--                                <option value="KOKOS International Busan">KOKOS International Busan</option>--}}
                                    {{--                                <option value="Konkuk University">Konkuk University</option>--}}
                                    {{--                                <option value="Kuros International, Inc.">Kuros International, Inc.</option>--}}
                                    {{--                                <option value="Kyle Roof">Kyle Roof</option>--}}
                                    {{--                                <option value="Kyoto Notre Dame University">Kyoto Notre Dame University</option>--}}
                                    {{--                                <option value="Kyushu University">Kyushu University</option>--}}
                                    {{--                                <option value="L&amp;P Consultant Services">L&amp;P Consultant Services</option>--}}
                                    {{--                                <option value="L&amp;V Education Consultancy">L&amp;V Education Consultancy</option>--}}
                                    {{--                                <option value="LACT">LACT</option>--}}
                                    {{--                                <option value="Langex Ecuador">Langex Ecuador</option>--}}
                                    {{--                                <option value="Langua">Langua</option>--}}
                                    {{--                                <option value="Laura Stonehill">Laura Stonehill</option>--}}
                                    {{--                                <option value="Liaoning Huanxing Economic &amp; Trade">Liaoning Huanxing Economic &amp;--}}
                                    {{--                                    Trade--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Liaoning Talent International Exchange Service Co., Ltd.">Liaoning Talent--}}
                                    {{--                                    International Exchange Service Co., Ltd.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Liceca">Liceca</option>--}}
                                    {{--                                <option value="Lieugak Square">Lieugak Square</option>--}}
                                    {{--                                <option value="Lincoln Education">Lincoln Education</option>--}}
                                    {{--                                <option value="Linkturs Educational Centre">Linkturs Educational Centre</option>--}}
                                    {{--                                <option value="LITZ USA">LITZ USA</option>--}}
                                    {{--                                <option value="LLP All State Education">LLP All State Education</option>--}}
                                    {{--                                <option value="Logo Education Center">Logo Education Center</option>--}}
                                    {{--                                <option value="Loongbridge Corporation">Loongbridge Corporation</option>--}}
                                    {{--                                <option value="Lotte Tours Company">Lotte Tours Company</option>--}}
                                    {{--                                <option value="Lubov Hoodyaeva">Lubov Hoodyaeva</option>--}}
                                    {{--                                <option value="Ma Hnin Yu AUng">Ma Hnin Yu AUng</option>--}}
                                    {{--                                <option value="MABECS Sendirian">MABECS Sendirian</option>--}}
                                    {{--                                <option value="Madilsa Academics">Madilsa Academics</option>--}}
                                    {{--                                <option value="Main Gate Agency">Main Gate Agency</option>--}}
                                    {{--                                <option value="Maincihi Education Inc.">Maincihi Education Inc.</option>--}}
                                    {{--                                <option value="Mainichi Communications Inc.">Mainichi Communications Inc.</option>--}}
                                    {{--                                <option value="Manjooran’s Group">Manjooran’s Group</option>--}}
                                    {{--                                <option value="Market Management Services">Market Management Services</option>--}}
                                    {{--                                <option value="Marrisa Kim">Marrisa Kim</option>--}}
                                    {{--                                <option value="Mars Yu">Mars Yu</option>--}}
                                    {{--                                <option value="Masan World Overseas Education">Masan World Overseas Education</option>--}}
                                    {{--                                <option value="Mason’s Education Services">Mason’s Education Services</option>--}}
                                    {{--                                <option value="Maxim Integrated">Maxim Integrated</option>--}}
                                    {{--                                <option value="Maxway Education">Maxway Education</option>--}}
                                    {{--                                <option value="MCD">MCD</option>--}}
                                    {{--                                <option value="Media Education Consultancy">Media Education Consultancy</option>--}}
                                    {{--                                <option value="Meiji University">Meiji University</option>--}}
                                    {{--                                <option value="Meisei University">Meisei University</option>--}}
                                    {{--                                <option value="Merica Chain Group">Merica Chain Group</option>--}}
                                    {{--                                <option value="Merica Chain Group Taipei">Merica Chain Group Taipei</option>--}}
                                    {{--                                <option value="Meriza">Meriza</option>--}}
                                    {{--                                <option value="Mi Joung Kwon">Mi Joung Kwon</option>--}}
                                    {{--                                <option value="Michael Herrick">Michael Herrick</option>--}}
                                    {{--                                <option value="Mike Yun">Mike Yun</option>--}}
                                    {{--                                <option value="Minami Nihon Culture Center/ MNCC">Minami Nihon Culture Center/ MNCC--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="MIRAE">MIRAE</option>--}}
                                    {{--                                <option value="Mission College">Mission College</option>--}}
                                    {{--                                <option value="MIYACO">MIYACO</option>--}}
                                    {{--                                <option value="Miyazaki International College">Miyazaki International College</option>--}}
                                    {{--                                <option value="Miyazaki Program">Miyazaki Program</option>--}}
                                    {{--                                <option value="Miyuki Yamamoto">Miyuki Yamamoto</option>--}}
                                    {{--                                <option value="Momoyama Gakuin University">Momoyama Gakuin University</option>--}}
                                    {{--                                <option value="Moniza Hui">Moniza Hui</option>--}}
                                    {{--                                <option value="Ms. Tang, Ka Sum">Ms. Tang, Ka Sum</option>--}}
                                    {{--                                <option value="MY COM INC">MY COM INC</option>--}}
                                    {{--                                <option value="My Truc Overseas Study Consulting Company Limited">My Truc Overseas Study--}}
                                    {{--                                    Consulting Company Limited--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="MYCOM">MYCOM</option>--}}
                                    {{--                                <option value="Myung Moon O.E.I.">Myung Moon O.E.I.</option>--}}
                                    {{--                                <option value="N&amp;N Chopra Consultants Pvt Ltd.">N&amp;N Chopra Consultants Pvt--}}
                                    {{--                                    Ltd.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="NAFA mbcho">NAFA mbcho</option>--}}
                                    {{--                                <option value="Nanjing Cce Investments Consulting Co ltd">Nanjing Cce Investments--}}
                                    {{--                                    Consulting Co ltd--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Napat Vorapuvadol">Napat Vorapuvadol</option>--}}
                                    {{--                                <option value="National University">National University</option>--}}
                                    {{--                                <option value="National University International">National University International--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="NESA - Al Nahla Educational Services Agency">NESA - Al Nahla Educational--}}
                                    {{--                                    Services Agency--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Network Educational Services">Network Educational Services</option>--}}
                                    {{--                                <option value="New Aussie Education Consultancy">New Aussie Education Consultancy--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="New Oriental Vision Overseas">New Oriental Vision Overseas</option>--}}
                                    {{--                                <option value="Next Generation Entp">Next Generation Entp</option>--}}
                                    {{--                                <option value="Nhat Thinh Co., Ltd.">Nhat Thinh Co., Ltd.</option>--}}
                                    {{--                                <option value="NIC">NIC</option>--}}
                                    {{--                                <option value="NILS">NILS</option>--}}
                                    {{--                                <option value="Noguchi">Noguchi</option>--}}
                                    {{--                                <option value="NZ Study Thailand">NZ Study Thailand</option>--}}
                                    {{--                                <option value="NZINFO International Edu Ctr.">NZINFO International Edu Ctr.</option>--}}
                                    {{--                                <option value="O.E.I.">O.E.I.</option>--}}
                                    {{--                                <option value="Obirin Gakuen Foundation of America">Obirin Gakuen Foundation of--}}
                                    {{--                                    America--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="OEC Global Education">OEC Global Education</option>--}}
                                    {{--                                <option value="OH AMERICA">OH AMERICA</option>--}}
                                    {{--                                <option value="OH! AMERICA EDUCATION">OH! AMERICA EDUCATION</option>--}}
                                    {{--                                <option value="OH! AMERICA Education Center">OH! AMERICA Education Center</option>--}}
                                    {{--                                <option value="OH! America Education Consulting">OH! America Education Consulting--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="OH! Canada">OH! Canada</option>--}}
                                    {{--                                <option value="Oh! Canada Oh! America Education">Oh! Canada Oh! America Education--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Oh! Study Education Center">Oh! Study Education Center</option>--}}
                                    {{--                                <option value="Ohlone College Community Education">Ohlone College Community Education--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Omega Study Abroad Center">Omega Study Abroad Center</option>--}}
                                    {{--                                <option value="Openuhak co ltd">Openuhak co ltd</option>--}}
                                    {{--                                <option value="Oracle Japan (ALC Education Inc.)">Oracle Japan (ALC Education Inc.)--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Oracle Japan (ALC Education Inc)">Oracle Japan (ALC Education Inc)--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Osaka College of Foreign Languages">Osaka College of Foreign Languages--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Osaka College of Foreign Languages &amp; In’l Business">Osaka College of--}}
                                    {{--                                    Foreign Languages &amp; In’l Business--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Osaka University">Osaka University</option>--}}
                                    {{--                                <option value="OSAKAY">OSAKAY</option>--}}
                                    {{--                                <option value="OSI Overseas Study Service Centre">OSI Overseas Study Service Centre--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Ovedu Shanghai Consulting Co., Ltd">Ovedu Shanghai Consulting Co., Ltd--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Overseas Education Consultant">Overseas Education Consultant</option>--}}
                                    {{--                                <option value="Overseas Educational Corp">Overseas Educational Corp</option>--}}
                                    {{--                                <option value="Overseas Educational Corp.">Overseas Educational Corp.</option>--}}
                                    {{--                                <option value="Overseas Student Counseling">Overseas Student Counseling</option>--}}
                                    {{--                                <option value="Oxford Language &amp; Computer Inst.">Oxford Language &amp; Computer--}}
                                    {{--                                    Inst.--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="P.I.L Overseas Education Consultants">P.I.L Overseas Education--}}
                                    {{--                                    Consultants--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Pagoda Study Abroad">Pagoda Study Abroad</option>--}}
                                    {{--                                <option value="Parta LLC">Parta LLC</option>--}}
                                    {{--                                <option value="Patricia Wang">Patricia Wang</option>--}}
                                    {{--                                <option value="Peace International">Peace International</option>--}}
                                    {{--                                <option value="Perlink Siek">Perlink Siek</option>--}}
                                    {{--                                <option value="Permpoon Thaksa Sakol School">Permpoon Thaksa Sakol School</option>--}}
                                    {{--                                <option value="Phuong Huynh">Phuong Huynh</option>--}}
                                    {{--                                <option value="PIL Overseas Education">PIL Overseas Education</option>--}}
                                    {{--                                <option value="Play In The US">Play In The US</option>--}}
                                    {{--                                <option value="Premier OEC">Premier OEC</option>--}}
                                    {{--                                <option value="Premiere OEC">Premiere OEC</option>--}}
                                    {{--                                <option value="Premiere OEC.">Premiere OEC.</option>--}}
                                    {{--                                <option value="Professional InterEducation Co.">Professional InterEducation Co.</option>--}}
                                    {{--                                <option value="Qingdao International Exchange">Qingdao International Exchange</option>--}}
                                    {{--                                <option value="Quoc Anh IEC">Quoc Anh IEC</option>--}}
                                    {{--                                <option value="Rapid Education">Rapid Education</option>--}}
                                    {{--                                <option value="Ray Dong">Ray Dong</option>--}}
                                    {{--                                <option value="Rex Duan - Agent">Rex Duan - Agent</option>--}}
                                    {{--                                <option value="Ricky Chang">Ricky Chang</option>--}}
                                    {{--                                <option value="Rissho University">Rissho University</option>--}}
                                    {{--                                <option value="Rita Luys">Rita Luys</option>--}}
                                    {{--                                <option value="Ritsumeikan University">Ritsumeikan University</option>--}}
                                    {{--                                <option value="Rivil International Ltd.">Rivil International Ltd.</option>--}}
                                    {{--                                <option value="Ryugaku">Ryugaku</option>--}}
                                    {{--                                <option value="Ryugaku Journal Inc., Osaka">Ryugaku Journal Inc., Osaka</option>--}}
                                    {{--                                <option value="SA-Edu Consultant">SA-Edu Consultant</option>--}}
                                    {{--                                <option value="SACE">SACE</option>--}}
                                    {{--                                <option value="San Francisco State University">San Francisco State University</option>--}}
                                    {{--                                <option value="San Jose State University, SAL">San Jose State University, SAL</option>--}}
                                    {{--                                <option value="Sandra Braid">Sandra Braid</option>--}}
                                    {{--                                <option value="Santa Monica Overseas Studies &amp; Placements">Santa Monica Overseas--}}
                                    {{--                                    Studies &amp; Placements--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="SAS - Ben">SAS - Ben</option>--}}
                                    {{--                                <option value="Saudi Consulate">Saudi Consulate</option>--}}
                                    {{--                                <option value="Scholar Education Counseling Services">Scholar Education Counseling--}}
                                    {{--                                    Services--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="School for Educational Alternatives">School for Educational--}}
                                    {{--                                    Alternatives--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Scion Lee">Scion Lee</option>--}}
                                    {{--                                <option value="Seamo Vietnam">Seamo Vietnam</option>--}}
                                    {{--                                <option value="Selset New Zealand Center">Selset New Zealand Center</option>--}}
                                    {{--                                <option value="Service Support Universal">Service Support Universal</option>--}}
                                    {{--                                <option value="Set Education">Set Education</option>--}}
                                    {{--                                <option value="Setagaya Institute of Study Abroad">Setagaya Institute of Study Abroad--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Severine Cordenod">Severine Cordenod</option>--}}
                                    {{--                                <option value="Severine Cordenod">Severine Cordenod</option>--}}
                                    {{--                                <option value="Shandong Service Center for Scholarly Exchange">Shandong Service Center--}}
                                    {{--                                    for Scholarly Exchange--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Shanghai New Journey Group">Shanghai New Journey Group</option>--}}
                                    {{--                                <option value="Shanghai Qibao Cultural Exchange">Shanghai Qibao Cultural Exchange--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Shanghai Shangshi Overseas Education">Shanghai Shangshi Overseas--}}
                                    {{--                                    Education--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Shenyang Han Terry Consultancy">Shenyang Han Terry Consultancy</option>--}}
                                    {{--                                <option value="Shihua Wang">Shihua Wang</option>--}}
                                    {{--                                <option value="Shin Sato">Shin Sato</option>--}}
                                    {{--                                <option value="Shinyway International">Shinyway International</option>--}}
                                    {{--                                <option value="Shoko Nishi">Shoko Nishi</option>--}}
                                    {{--                                <option value="Silkway Overseas Education Center">Silkway Overseas Education Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Sinchon">Sinchon</option>--}}
                                    {{--                                <option value="Singapore American">Singapore American</option>--}}
                                    {{--                                <option value="Sino-American Edu.">Sino-American Edu.</option>--}}
                                    {{--                                <option value="Sino-American Edu. Service Center">Sino-American Edu. Service Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Siriporn Thanaviriyakul">Siriporn Thanaviriyakul</option>--}}
                                    {{--                                <option value="Sky Unicorn Student Services">Sky Unicorn Student Services</option>--}}
                                    {{--                                <option value="Skyreach Education Advisory">Skyreach Education Advisory</option>--}}
                                    {{--                                <option value="Sofian Widjaja">Sofian Widjaja</option>--}}
                                    {{--                                <option value="Solomonedu">Solomonedu</option>--}}
                                    {{--                                <option value="Sonny Soohoo">Sonny Soohoo</option>--}}
                                    {{--                                <option value="Southwest China Normal University">Southwest China Normal University--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Staff Service">Staff Service</option>--}}
                                    {{--                                <option value="Staff Service Edu. International">Staff Service Edu. International--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Staff Service Education International">Staff Service Education--}}
                                    {{--                                    International--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Student’s World">Student’s World</option>--}}
                                    {{--                                <option value="Study Abroad">Study Abroad</option>--}}
                                    {{--                                <option value="Study Abroad Institute of Consulting">Study Abroad Institute of--}}
                                    {{--                                    Consulting--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Study Design">Study Design</option>--}}
                                    {{--                                <option value="Study International">Study International</option>--}}
                                    {{--                                <option value="Study International Education">Study International Education</option>--}}
                                    {{--                                <option value="Study Lab">Study Lab</option>--}}
                                    {{--                                <option value="Study Without Borders Edu. Center">Study Without Borders Edu. Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Sue Park">Sue Park</option>--}}
                                    {{--                                <option value="Sun Education">Sun Education</option>--}}
                                    {{--                                <option value="Susanna Ma">Susanna Ma</option>--}}
                                    {{--                                <option value="Susumu Matsuhashi">Susumu Matsuhashi</option>--}}
                                    {{--                                <option value="Syscom Education">Syscom Education</option>--}}
                                    {{--                                <option value="Syscom Education Services">Syscom Education Services</option>--}}
                                    {{--                                <option value="Tada">Tada</option>--}}
                                    {{--                                <option value="Tadashi Yamamoto">Tadashi Yamamoto</option>--}}
                                    {{--                                <option value="Talent International Company">Talent International Company</option>--}}
                                    {{--                                <option value="Talk Club Marketing Service">Talk Club Marketing Service</option>--}}
                                    {{--                                <option value="Tama University">Tama University</option>--}}
                                    {{--                                <option value="Tama University, School of Global Studies">Tama University, School of--}}
                                    {{--                                    Global Studies--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Tamwood International College">Tamwood International College</option>--}}
                                    {{--                                <option value="Temco Sky Network">Temco Sky Network</option>--}}
                                    {{--                                <option value="Thames International">Thames International</option>--}}
                                    {{--                                <option value="The Admissions Co., Ltd.">The Admissions Co., Ltd.</option>--}}
                                    {{--                                <option value="The International Language Center">The International Language Center--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="The Student Service Centre">The Student Service Centre</option>--}}
                                    {{--                                <option value="Toan Thang Co.">Toan Thang Co.</option>--}}
                                    {{--                                <option value="Tokyo University of Science">Tokyo University of Science</option>--}}
                                    {{--                                <option value="Tong Thi Cuc">Tong Thi Cuc</option>--}}
                                    {{--                                <option value="Trang Viet Anh Company">Trang Viet Anh Company</option>--}}
                                    {{--                                <option value="Trident">Trident</option>--}}
                                    {{--                                <option value="U.S. - China Exchange Council">U.S. - China Exchange Council</option>--}}
                                    {{--                                <option value="UCANA Immigration &amp; Visa Consultancy">UCANA Immigration &amp; Visa--}}
                                    {{--                                    Consultancy--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="UF Korea">UF Korea</option>--}}
                                    {{--                                <option value="UHAK">UHAK</option>--}}
                                    {{--                                <option value="Uhak Guide">Uhak Guide</option>--}}
                                    {{--                                <option value="Uhak Hub Co. Ltd.">Uhak Hub Co. Ltd.</option>--}}
                                    {{--                                <option value="UHAK HUB Corp">UHAK HUB Corp</option>--}}
                                    {{--                                <option value="Uhak Hub Corp.">Uhak Hub Corp.</option>--}}
                                    {{--                                <option value="Uhak Jump">Uhak Jump</option>--}}
                                    {{--                                <option value="Uhak Mate">Uhak Mate</option>--}}
                                    {{--                                <option value="UHAK.com">UHAK.com</option>--}}
                                    {{--                                <option value="Uhak.com Busan Branch">Uhak.com Busan Branch</option>--}}
                                    {{--                                <option value="Uhak.com Jongho Head Office">Uhak.com Jongho Head Office</option>--}}
                                    {{--                                <option value="Uhakport Education Agent">Uhakport Education Agent</option>--}}
                                    {{--                                <option value="UKEAS">UKEAS</option>--}}
                                    {{--                                <option value="Unis_GLB">Unis_GLB</option>--}}
                                    {{--                                <option value="Universal Placement Program">Universal Placement Program</option>--}}
                                    {{--                                <option value="University of Niigata Prefecture">University of Niigata Prefecture--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Univest Education">Univest Education</option>--}}
                                    {{--                                <option value="UPP">UPP</option>--}}
                                    {{--                                <option value="UR EDU &amp; INFO">UR EDU &amp; INFO</option>--}}
                                    {{--                                <option value="UR Edu &amp; Info Co, Ltd.">UR Edu &amp; Info Co, Ltd.</option>--}}
                                    {{--                                <option value="UR Edu &amp; Info Co., Ltd.">UR Edu &amp; Info Co., Ltd.</option>--}}
                                    {{--                                <option value="US Ed and MBA Consulting">US Ed and MBA Consulting</option>--}}
                                    {{--                                <option value="US-UHAK">US-UHAK</option>--}}
                                    {{--                                <option value="USC CEC">USC CEC</option>--}}
                                    {{--                                <option value="USCSAA">USCSAA</option>--}}
                                    {{--                                <option value="Ustudy">Ustudy</option>--}}
                                    {{--                                <option value="VCECS">VCECS</option>--}}
                                    {{--                                <option value="Vera Machado Viagens e Turismo">Vera Machado Viagens e Turismo</option>--}}
                                    {{--                                <option value="Vietnam Centre Point">Vietnam Centre Point</option>--}}
                                    {{--                                <option value="Vista">Vista</option>--}}
                                    {{--                                <option value="VISTA EDUCATION SERVICES">VISTA EDUCATION SERVICES</option>--}}
                                    {{--                                <option value="Volkmar Guenzler">Volkmar Guenzler</option>--}}
                                    {{--                                <option value="Wai Shun International Edu Ctr">Wai Shun International Edu Ctr</option>--}}
                                    {{--                                <option value="Waseda University">Waseda University</option>--}}
                                    {{--                                <option value="Wejoy International Consultants Co., Ltd">Wejoy International Consultants--}}
                                    {{--                                    Co., Ltd--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="WellTrend United Inc">WellTrend United Inc</option>--}}
                                    {{--                                <option value="Wesley Language School">Wesley Language School</option>--}}
                                    {{--                                <option value="West Education">West Education</option>--}}
                                    {{--                                <option value="William Cheung">William Cheung</option>--}}
                                    {{--                                <option value="WINTECH">WINTECH</option>--}}
                                    {{--                                <option value="WINTECH, Inc.">WINTECH, Inc.</option>--}}
                                    {{--                                <option value="Wisdom">Wisdom</option>--}}
                                    {{--                                <option value="Wisdom Educational Consulting">Wisdom Educational Consulting</option>--}}
                                    {{--                                <option value="Wisdom Educational Consulting Ltd">Wisdom Educational Consulting Ltd--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Wisdom Services">Wisdom Services</option>--}}
                                    {{--                                <option value="WISH">WISH</option>--}}
                                    {{--                                <option value="WISH International, Inc.">WISH International, Inc.</option>--}}
                                    {{--                                <option value="World Education Group">World Education Group</option>--}}
                                    {{--                                <option value="World Information Overseas Agency">World Information Overseas Agency--}}
                                    {{--                                </option>--}}
                                    {{--                                <option value="Worldway Co.">Worldway Co.</option>--}}
                                    {{--                                <option value="Wu Xiao Chun">Wu Xiao Chun</option>--}}
                                    {{--                                <option value="YBM Overseas Education Services">YBM Overseas Education Services</option>--}}
                                    {{--                                <option value="Yenny Tan">Yenny Tan</option>--}}
                                    {{--                                <option value="Yeungjin College">Yeungjin College</option>--}}
                                    {{--                                <option value="Yi-Chih Education Consulting">Yi-Chih Education Consulting</option>--}}
                                    {{--                                <option value="Yifang Chen">Yifang Chen</option>--}}
                                    {{--                                <option value="Ying-Fen Wang">Ying-Fen Wang</option>--}}
                                    {{--                                <option value="YK Pao School">YK Pao School</option>--}}
                                    {{--                                <option value="YOLA Institute">YOLA Institute</option>--}}
                                    {{--                                <option value="Yu-Myung Education Agency">Yu-Myung Education Agency</option>--}}
                                    {{--                                <option value="Yuji Morita">Yuji Morita</option>--}}
                                    {{--                                <option value="Yukihiro Nakashima">Yukihiro Nakashima</option>--}}
                                    {{--                                <option value="Yulius Education Service">Yulius Education Service</option>--}}
                                    {{--                                <option value="Yuzo Ochiai">Yuzo Ochiai</option>--}}
                                    {{--                                <option value="Zhang Tao">Zhang Tao</option>--}}
                                    {{--                                <option value="Zhuk-YingBang Study">Zhuk-YingBang Study</option>--}}
                                    {{--                                <option value="Zoe Yan">Zoe Yan</option>--}}
                                </select>
                            </div>
                            @error('agency_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="agency-not dbl">
                                <h6>For Agents not on the list:</h6>
                                <div class="input-flds">
                                    <label><i class="fa-solid fa-user"></i>Agency Name</label>
                                    <input type="text" name="agency_name_not_on_the_list">
                                </div>
                            </div>
                            @error('agency_name_not_on_the_list')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds">
                                <label><i class="fa-solid fa-user"></i>Name of Agency Contact Person</label>
                                <input type="text" name="agency_contact_person">
                            </div>
                            @error('agency_contact_person')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Agency Street Address 1</label>
                                <input type="text" name="agency_street_address_1">
                            </div>
                            @error('agency_street_address_1')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Agency Street Address 2</label>
                                <input type="text" name="agency_street_address_2">
                            </div>
                            @error('agency_street_address_2')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Agency Street Address 3</label>
                                <input type="text" name="agency_street_address_3">
                            </div>
                            @error('agency_street_address_3')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Agency City<span>*</span></label>
                                <input type="text" name="agency_city" required>
                            </div>

                            {{--                        <div class="input-flds before">--}}
                            {{--                            <label><i class="fa-solid fa-address-card"></i>Agency City</label>--}}
                            {{--                            <select class="yd-select " required="" data-parsley-required=""--}}
                            {{--                                    data-parsley-required-message="This field is Required." name="agency_city"--}}
                            {{--                                    id="agency_city" placeholder="" tabindex="1" data-parsley-group="block-0">--}}

                            {{--                                <option selected="" hidden value="" disabled>--}}
                            {{--                                    Please Select City--}}
                            {{--                                </option>--}}
                            {{--                                @foreach ($cities as $city)--}}
                            {{--                                    <option value="{{ $city->id }}">--}}
                            {{--                                        {{ $city->name }}--}}
                            {{--                                    </option>--}}
                            {{--                                @endforeach--}}

                            {{--                            </select>--}}
                            {{--                        </div>--}}

                            <div class="input-flds before">
                                <label><i class="fa-solid fa-address-card"></i>Agency State</label>
                                <select class="yd-select " name="agency_state" id="agent_state" placeholder=""
                                        tabindex="1"
                                        data-parsley-group="block-0">

                                    {{--                                <option selected="" hidden value="" disabled>--}}
                                    {{--                                    Please Select State--}}
                                    {{--                                </option>--}}
                                    {{--                                @foreach ($states as $state)--}}
                                    {{--                                    <option value="{{ $state->id }}">--}}
                                    {{--                                        {{ $state->name }}--}}
                                    {{--                                    </option>--}}
                                    {{--                                @endforeach--}}
                                    {{--                                Items Added via CSV Import. View Preview for Results.--}}

                                    <option value=""></option>
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
                                    <option value="U.S. Virgin Islands"> U.S. Virgin Islands</option>
                                    <option value="American Samoa"> American Samoa</option>
                                    <option value="Guam"> Guam</option>
                                    <option value="Northern Mariana Islands"> Northern Mariana Islands</option>
                                </select>
                            </div>

                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Agency Postal / Zip Code</label>
                                <input type="text" name="agency_zip_code">
                            </div>
                            @error('agency_zip_code')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds before">
                                <label><i class="fa-solid fa-earth-americas"></i>Agency Country</label>
                                <select class="yd-select " name="agency_country" id="agent_country" placeholder=""
                                        tabindex="1" data-parsley-group="block-0">

                                    {{--                                <option selected="" hidden value="" disabled>--}}
                                    {{--                                    Please Select Country--}}
                                    {{--                                </option>--}}
                                    {{--                                @foreach ($countries as $country)--}}
                                    {{--                                    <option value="{{ $country->id }}">--}}
                                    {{--                                        {{ $country->name }}--}}
                                    {{--                                    </option>--}}
                                    {{--                                @endforeach--}}
                                    {{--                                Items Added via CSV Import. View Preview for Results.--}}

                                    <option value=""></option>
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
                                    <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
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
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (keeling) Islands">Cocos (keeling) Islands</option>
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
                                    <option value="Falkland Islands (malvinas)">Falkland Islands (malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
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
                                    <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands
                                    </option>
                                    <option value="Holy See (vatican City State)">Holy See (vatican City State)</option>
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
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
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
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="Neutrale Zone">Neutrale Zone</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory">Palestinian Territory</option>
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
                                    <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                    <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbien und Montenegro">Serbien und Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia And The South Sandwich Islands">South Georgia And The
                                        South
                                        Sandwich Islands
                                    </option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
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
                                    <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Union der Sozialistischen Sowjetrepubliken">Union der Sozialistischen
                                        Sowjetrepubliken
                                    </option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
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
                            </div>

                            <div class="input-flds">
                                <label><i class="fa-solid fa-phone-flip"></i>Agency Telephone Number (with country
                                    code)</label>
                                <input type="text" name="agency_phone_number">
                            </div>
                            @error('agency_phone_number')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-envelope"></i>Agent's Email</label>
                                <input type="text" name="agent_email">
                            </div>
                            @error('agent_email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form_style">
                        <h3>Emergency Contact</h3>
                        <div class="permanent-adress Emergency">

                            <div class="input-flds">
                                <label><i class="fa-solid fa-user"></i>First Name<span>*</span></label>
                                <input type="text" name="emergency_contact_first_name" required>
                            </div>
                            @error('emergency_contact_first_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-user"></i>Last Name<span>*</span></label>
                                <input type="text" name="emergency_contact_last_name" required>
                            </div>
                            @error('emergency_contact_last_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-mobile-button"></i>Cell Phone with Country
                                    Code<span>*</span></label>
                                <input type="text" name="emergency_contact_phone_number">
                            </div>
                            @error('emergency_contact_phone_number')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-user"></i>Relationship to Student<span>*</span></label>
                                <input type="text" name="emergency_contact_relation" required>
                            </div>
                            @error('emergency_contact_relation')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-envelope"></i>Email<span>*</span></label>
                                <input type="text" name="emergency_contact_email" required>
                            </div>
                            @error('emergency_contact_email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form_style">
                        <h3>School Details</h3>
                        <div class="permanent-adress student">
                            <div class="input-flds before">
                                <label><i class="fa-solid fa-graduation-cap"></i>Name of School<span>*</span></label>
                                <select class="yd-select " required="" data-parsley-required=""
                                        data-parsley-required-message="This field is Required." name="school_you_attend"
                                        id="school_name" placeholder="" tabindex="1" data-parsley-group="block-0"
                                        required>
                                    <option value=""></option>
                                    <option value="Academy of Art">Academy of Art</option>
                                    <option value="Acosta - Hawaii">Acosta - Hawaii</option>
                                    <option value="Admissions Academy">Admissions Academy</option>
                                    <option value="AF International">AF International</option>
                                    <option value="Alameda High School">Alameda High School</option>
                                    <option value="Alliant International University">Alliant International University
                                    </option>
                                    <option value="Amador Valley High School">Amador Valley High School</option>
                                    <option value="American Academy of English">American Academy of English</option>
                                    <option value="American Film Institute">American Film Institute</option>
                                    <option value="Apple Computers">Apple Computers</option>
                                    <option value="Ardery Kell High School">Ardery Kell High School</option>
                                    <option value="Arroyo Pacific High School">Arroyo Pacific High School</option>
                                    <option value="Art Center College of Design">Art Center College of Design</option>
                                    <option value="Art Institute of California">Art Institute of California</option>
                                    <option value="Balboa High School">Balboa High School</option>
                                    <option value="Bishop Alemany High School">Bishop Alemany High School</option>
                                    <option value="Brash Insight Corporation">Brash Insight Corporation</option>
                                    <option value="Cabrillo College">Cabrillo College</option>
                                    <option value="California College of Arts">California College of Arts</option>
                                    <option value="Camp Moguteng">Camp Moguteng</option>
                                    <option value="Canada College">Canada College</option>
                                    <option value="Cathedral High School">Cathedral High School</option>
                                    <option value="CCE USA">CCE USA</option>
                                    <option value="Century School of Languages">Century School of Languages</option>
                                    <option value="Chabot College">Chabot College</option>
                                    <option value="Charlotte Country Day School">Charlotte Country Day School</option>
                                    <option value="Chinese Christian School">Chinese Christian School</option>
                                    <option value="Christian High School">Christian High School</option>
                                    <option value="Citrus College">Citrus College</option>
                                    <option value="City College of San Francisco">City College of San Francisco</option>
                                    <option value="Coastline Community College">Coastline Community College</option>
                                    <option value="College of Marin">College of Marin</option>
                                    <option value="College of Marin - Kentfield">College of Marin - Kentfield</option>
                                    <option value="College of San Mateo">College of San Mateo</option>
                                    <option value="College of the Desert">College of the Desert</option>
                                    <option value="Cornerstone College Preparatory">Cornerstone College Preparatory
                                    </option>
                                    <option value="Cosumnes River College">Cosumnes River College</option>
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
                                    <option value="Devry University - Sherman Oaks">Devry University - Sherman Oaks
                                    </option>
                                    <option value="Diablo Valley College">Diablo Valley College</option>
                                    <option value="Diamond Bar High School">Diamond Bar High School</option>
                                    <option value="Eagle Fustar">Eagle Fustar</option>
                                    <option value="ECI/ Monterey Bay Academy">ECI/ Monterey Bay Academy</option>
                                    <option value="Edge">Edge</option>
                                    <option value="El Camino College">El Camino College</option>
                                    <option value="Elmengard, Inc.">Elmengard, Inc.</option>
                                    <option value="ELS Cupertino">ELS Cupertino</option>
                                    <option value="ELS Santa Cruz">ELS Santa Cruz</option>
                                    <option value="Encinal High School">Encinal High School</option>
                                    <option value="English Language Institute">English Language Institute</option>
                                    <option value="Enplas Tesco, Inc.">Enplas Tesco, Inc.</option>
                                    <option value="Evergreen College">Evergreen College</option>
                                    <option value="Fashion Institute of Design and Merchandising">Fashion Institute of
                                        Design and Merchandising
                                    </option>
                                    <option value="FIDM (San Francisco)">FIDM (San Francisco)</option>
                                    <option value="Foothill College">Foothill College</option>
                                    <option value="Franklin Elementary">Franklin Elementary</option>
                                    <option value="Fremont Christian School">Fremont Christian School</option>
                                    <option value="French American International">French American International</option>
                                    <option value="Fullerton College">Fullerton College</option>
                                    <option value="FUTTON - De Anza">FUTTON - De Anza</option>
                                    <option value="Futton - SAC">Futton - SAC</option>
                                    <option value="Future Rhythm">Future Rhythm</option>
                                    <option value="Glendale Adventist Academy">Glendale Adventist Academy</option>
                                    <option value="Glendale College">Glendale College</option>
                                    <option value="Global View - Hawaii">Global View - Hawaii</option>
                                    <option value="Go Abbey Road">Go Abbey Road</option>
                                    <option value="Golden Gate University">Golden Gate University</option>
                                    <option value="Golden Gate Language School">Golden Gate Language School</option>
                                    <option value="Golden West College">Golden West College</option>
                                    <option value="Hale Kalei">Hale Kalei</option>
                                    <option value="Hancock International">Hancock International</option>
                                    <option value="Hawaii - Miscellaneous">Hawaii - Miscellaneous</option>
                                    <option value="Hawaii Pacific University">Hawaii Pacific University</option>
                                    <option value="Heritage Oaks Private School">Heritage Oaks Private School</option>
                                    <option value="HI- Hale Kalei">HI- Hale Kalei</option>
                                    <option value="Hi- Tourist">Hi- Tourist</option>
                                    <option value="Hollywood Pop Academy">Hollywood Pop Academy</option>
                                    <option value="Holy Family High School">Holy Family High School</option>
                                    <option value="HP Palo Alto">HP Palo Alto</option>
                                    <option value="Intel - Intern">Intel - Intern</option>
                                    <option value="International H.S.">International H.S.</option>
                                    <option value="Intrax">Intrax</option>
                                    <option value="Irvine Valley College">Irvine Valley College</option>
                                    <option value="JFK High School">JFK High School</option>
                                    <option value="John Burrows Burbank CA">John Burrows Burbank CA</option>
                                    <option value="Kapiolani Community College">Kapiolani Community College</option>
                                    <option value="Kaplan Aspect - Sacramento">Kaplan Aspect - Sacramento</option>
                                    <option value="Keppel Elementary">Keppel Elementary</option>
                                    <option value="Kyushu University">Kyushu University</option>
                                    <option value="L.A. Tourist">L.A. Tourist</option>
                                    <option value="LA Mission College">LA Mission College</option>
                                    <option value="La Perouse High School">La Perouse High School</option>
                                    <option value="Language Pacifica">Language Pacifica</option>
                                    <option value="Las Positas College">Las Positas College</option>
                                    <option value="Leeward Community College">Leeward Community College</option>
                                    <option value="Long Beach City College">Long Beach City College</option>
                                    <option value="Los Altos High School">Los Altos High School</option>
                                    <option value="Los Angeles City College">Los Angeles City College</option>
                                    <option value="Los Angeles Placement">Los Angeles Placement</option>
                                    <option value="Loyola Marymount University">Loyola Marymount University</option>
                                    <option value="Lutheran High School - Orange County">Lutheran High School - Orange
                                        County
                                    </option>
                                    <option value="Makeup Designory School">Makeup Designory School</option>
                                    <option value="Maranatha High School">Maranatha High School</option>
                                    <option value="Marshall High School">Marshall High School</option>
                                    <option value="Mary Star of the Sea High School">Mary Star of the Sea High School
                                    </option>
                                    <option value="Maybeck High School">Maybeck High School</option>
                                    <option value="Mercy High School">Mercy High School</option>
                                    <option value="Merritt College">Merritt College</option>
                                    <option value="Merryhill Yosemite School">Merryhill Yosemite School</option>
                                    <option value="MidPeninsula High School">MidPeninsula High School</option>
                                    <option value="Mission College">Mission College</option>
                                    <option value="Mission San Jose High School">Mission San Jose High School</option>
                                    <option value="Monta Vista High School">Monta Vista High School</option>
                                    <option value="Monte Vista Christian School">Monte Vista Christian School</option>
                                    <option value="Monte Vista Elementary">Monte Vista Elementary</option>
                                    <option value="Montecito High School">Montecito High School</option>
                                    <option value="Monterey Peninsula College">Monterey Peninsula College</option>
                                    <option value="Moreau Catholic High School">Moreau Catholic High School</option>
                                    <option value="Mountain View Academy">Mountain View Academy</option>
                                    <option value="Mt. San Antonio">Mt. San Antonio</option>
                                    <option value="National University San Diego">National University San Diego</option>
                                    <option value="National University-LA">National University-LA</option>
                                    <option value="New York Film Academy">New York Film Academy</option>
                                    <option value="Newark Memorial High School">Newark Memorial High School</option>
                                    <option value="Northwestern Polytechnic University">Northwestern Polytechnic
                                        University
                                    </option>
                                    <option value="NTT Data Agilenet LLC">NTT Data Agilenet LLC</option>
                                    <option value="Ohlone College">Ohlone College</option>
                                    <option value="Orange Coast College">Orange Coast College</option>
                                    <option value="Other">Other</option>
                                    <option value="Pasadena City College">Pasadena City College</option>
                                    <option value="Pierce College">Pierce College</option>
                                    <option value="Pinewood School">Pinewood School</option>
                                    <option value="Portnov">Portnov</option>
                                    <option value="Providence High School">Providence High School</option>
                                    <option value="Quarry Lane High School">Quarry Lane High School</option>
                                    <option value="Ramona Convent Secondary School">Ramona Convent Secondary School
                                    </option>
                                    <option value="Redwood Christian School">Redwood Christian School</option>
                                    <option value="Relief International">Relief International</option>
                                    <option value="Sacramento City College">Sacramento City College</option>
                                    <option value="Sacramento State Univ.">Sacramento State Univ.</option>
                                    <option value="Saint Francis">Saint Francis</option>
                                    <option value="Saint Ignatius High school">Saint Ignatius High school</option>
                                    <option value="San Diego State Universtiy">San Diego State Universtiy</option>
                                    <option value="San Domenico High School">San Domenico High School</option>
                                    <option value="San Francisco State">San Francisco State</option>
                                    <option value="San Francisco Waldorf">San Francisco Waldorf</option>
                                    <option value="San Jose City College">San Jose City College</option>
                                    <option value="San Jose State">San Jose State</option>
                                    <option value="Santa Ana College">Santa Ana College</option>
                                    <option value="Santa Clara Middle School">Santa Clara Middle School</option>
                                    <option value="Santa Clara University">Santa Clara University</option>
                                    <option value="Santa Cruz">Santa Cruz</option>
                                    <option value="Santa Margarita Catholic High School">Santa Margarita Catholic High
                                        School
                                    </option>
                                    <option value="Santa Monica College">Santa Monica College</option>
                                    <option value="Santa Monica Intern">Santa Monica Intern</option>
                                    <option value="Santa Rosa Junior College">Santa Rosa Junior College</option>
                                    <option value="Santiago High School">Santiago High School</option>
                                    <option value="SCI - Architecture">SCI - Architecture</option>
                                    <option value="SF/SF Tourist">SF/SF Tourist</option>
                                    <option value="Sierra School">Sierra School</option>
                                    <option value="Silicon Valley Intensive English Program (SVIEP)">Silicon Valley
                                        Intensive English Program (SVIEP)
                                    </option>
                                    <option value="Skyline College">Skyline College</option>
                                    <option value="Solex/ Applied Solar">Solex/ Applied Solar</option>
                                    <option value="Sora Language School">Sora Language School</option>
                                    <option value="Southlands Christian High School">Southlands Christian High School
                                    </option>
                                    <option value="St. Francis Medical Center">St. Francis Medical Center</option>
                                    <option value="St. Mary’s College">St. Mary’s College</option>
                                    <option value="Stanford University">Stanford University</option>
                                    <option value="Studies in American Language">Studies in American Language</option>
                                    <option value="Sunnyvale">Sunnyvale</option>
                                    <option value="Supinfo">Supinfo</option>
                                    <option value="TALK">TALK</option>
                                    <option value="Teacher Homestay Program">Teacher Homestay Program</option>
                                    <option value="TEMCO Sky Network">TEMCO Sky Network</option>
                                    <option value="Tourist">Tourist</option>
                                    <option value="Transworld Schools">Transworld Schools</option>
                                    <option value="Tourist-SF">Tourist-SF</option>
                                    <option value="Troy High School">Troy High School</option>
                                    <option value="Truckee Meadows Community College">Truckee Meadows Community College
                                    </option>
                                    <option value="UC Berkeley">UC Berkeley</option>
                                    <option value="UC Davis">UC Davis</option>
                                    <option value="UC Irvine">UC Irvine</option>
                                    <option value="UC Santa Cruz">UC Santa Cruz</option>
                                    <option value="UC Santa Cruz - ELI">UC Santa Cruz - ELI</option>
                                    <option value="UCLA">UCLA</option>
                                    <option value="UCSB">UCSB</option>
                                    <option value="UCSC Silicon Valley Extension">UCSC Silicon Valley Extension</option>
                                    <option value="University of Hawaii at Leeward">University of Hawaii at Leeward
                                    </option>
                                    <option value="University of Hawaii at Manoa">University of Hawaii at Manoa</option>
                                    <option value="University of Hawaii, Manoa, NICE">University of Hawaii, Manoa, NICE
                                    </option>
                                    <option value="University of Los Angeles">University of Los Angeles</option>
                                    <option value="University of San Francisco">University of San Francisco</option>
                                    <option value="University of Southern CA">University of Southern CA</option>
                                    <option value="Unversity of Hawaii, HELP">Unversity of Hawaii, HELP</option>
                                    <option value="Valencia High School">Valencia High School</option>
                                    <option value="Valley Christian High School">Valley Christian High School</option>
                                    <option value="Villanova Prep. School, Ojai">Villanova Prep. School, Ojai</option>
                                    <option value="Wailua High School">Wailua High School</option>
                                    <option value="Waldorf High School">Waldorf High School</option>
                                    <option value="West LA College">West LA College</option>
                                    <option value="West Valley College">West Valley College</option>
                                    <option value="Woodsbury High School">Woodsbury High School</option>
                                    <option value="Woodside International HS">Woodside International HS</option>
                                    <option value="Other">Other</option>

                                </select>
                            </div>

                            @error('school_you_attend')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-graduation-cap"></i>School Name if not in List</label>
                                <input type="text" name="school_name_not_in_list">
                            </div>
                            @error('school_name_not_in_list')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds">
                                <label><i class="fa-solid fa-user"></i>School City<span>*</span></label>
                                <input type="text" name="school_city" required>
                            </div>

                            {{--                        <div class="input-flds before">--}}
                            {{--                            <label><i class="fa-solid fa-user"></i>City</label>--}}
                            {{--                            <select class="yd-select " required="" data-parsley-required=""--}}
                            {{--                                    data-parsley-required-message="This field is Required." name="school_city"--}}
                            {{--                                    id="school_city" placeholder="" tabindex="1" data-parsley-group="block-0">--}}

                            {{--                                <option selected="" hidden value="" disabled>--}}
                            {{--                                    Please Select City--}}
                            {{--                                </option>--}}
                            {{--                                @foreach ($cities as $city)--}}
                            {{--                                    <option value="{{ $city->id }}">--}}
                            {{--                                        {{ $city->name }}--}}
                            {{--                                    </option>--}}
                            {{--                                @endforeach--}}

                            {{--                            </select>--}}
                            {{--                        </div>--}}

                            <div class="input-flds before">
                                <label><i class="fa-solid fa-address-card"></i>State<span>*</span></label>
                                <select class="yd-select " required="" data-parsley-required=""
                                        data-parsley-required-message="This field is Required." name="school_state"
                                        id="school_state" placeholder="" tabindex="1" data-parsley-group="block-0">

                                    {{--                                <option selected="" hidden value="" disabled>--}}
                                    {{--                                    Please Select State--}}
                                    {{--                                </option>--}}
                                    {{--                                @foreach ($states as $state)--}}
                                    {{--                                    <option value="{{ $state->id }}">--}}
                                    {{--                                        {{ $state->name }}--}}
                                    {{--                                    </option>--}}
                                    {{--                                @endforeach--}}

                                    <option value=""></option>
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
                                    <option value="U.S. Virgin Islands"> U.S. Virgin Islands</option>
                                    <option value="American Samoa"> American Samoa</option>
                                    <option value="Guam"> Guam</option>
                                    <option value="Northern Mariana Islands"> Northern Mariana Islands</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="form_style five">
                        <div class="permanent-adress homestay">
                            <h5>Other Details</h5>
                            <h3>Length of homestay:</h3>
                            <p>Minimum contract lengths are below. Students may extend with host permission. Minimum
                                contract length for Southern California students is 3 months.</p>
                            <h6 class="pay-method"><i class="fa-solid fa-calendar-days"></i>Length of Stay:
                                <span>*</span>
                            </h6>
                            <div class="payment-ckbx ">

                                <label>
                                    <input type="radio" value="2 Months" checked="checked" name="length_of_stay">
                                    <span class="checkmark">2 Months</span>
                                </label>
                                <label>
                                    <input type="radio" value="3 Months" name="length_of_stay">
                                    <span class="checkmark">3 Months</span>
                                </label>

                            </div>
                            @error('length_of_stay')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds db">
                                <label><i class="fa-solid fa-calendar-days"></i>Date that I need to move to my homestay
                                    <span>*</span></label><br>
                                <input type="date" name="date_that_i_need_to_move_to_my_homestay" required>
                            </div>
                            @error('date_that_i_need_to_move_to_my_homestay')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <h6 class="pay-method"><i class="fa-solid fa-comment"></i>What is your English
                                level?<span>*</span></h6>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="high" checked="checked"
                                           name="what_is_your_english_level">
                                    <span class="checkmark">High</span>
                                </label>
                                <label>
                                    <input type="radio" value="medium" name="what_is_your_english_level">
                                    <span class="checkmark">Medium</span>
                                </label>
                                <input type="radio" value="low" name="what_is_your_english_level">
                                <span class="checkmark">Low</span>

                            </div>
                            @error('what_is_your_english_level')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="smoke-flex">
                                <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Do you smoke?
                                    <span>*</span></h6>
                                <p>(there is a no smoking policy in all host homes)</p>
                            </div>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked" name="do_you_smoke">
                                    <span class="checkmark">Yes</span>
                                </label>
                                <label>
                                    <input type="radio" value="no" name="do_you_smoke">
                                    <span class="checkmark">No</span>
                                </label>

                            </div>
                            @error('do_you_smoke')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Please select a meal
                                option
                                <span>*</span></h6>
                            <div class="payment-ckbx  three">

                                <label>
                                    <input type="radio" value="2 meals per day" checked="checked" name="meal_option">
                                    <span class="checkmark">2 meals per day</span>
                                </label>
                                <label>
                                    <input type="radio" value="No meals" name="meal_option">
                                    <span class="checkmark">No meals</span>
                                </label>

                            </div>
                            @error('meal_option')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="food-restrictions">
                            <h3>Do you have any food restrictions? If so, please specify:</h3>
                            <div class="input-flds">
                                <label><i class="fa-solid fa-file-lines"></i>Food Restrictions<span>*</span>(0)</label>
                                <textarea placeholder="Enter Text Here ..." name="food_restrictions"
                                          required></textarea>
                            </div>
                            @error('food_restrictions')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <h3>Do you accept children under 8 years old in your host home?</h3>
                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Children under 8
                                <span>*</span></h6>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked"
                                           name="do_you_accept_children_under_8_years_in_host_home">
                                    <span class="checkmark">Yes</span>
                                </label>
                                <label>
                                    <input type="radio" value="no"
                                           name="do_you_accept_children_under_8_years_in_host_home">
                                    <span class="checkmark">No</span>
                                </label>
                                <input type="radio" value="does not matter"
                                       name="do_you_accept_children_under_8_years_in_host_home">
                                <span class="checkmark">Does not matter</span>

                            </div>
                            @error('do_you_accept_children_under_8_years_in_host_home')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <h3>Are you allergic to animals?</h3>
                            <h6 class="pay-method"><i class="fa-solid fa-circle-question"></i>Are you allergic to
                                animals?
                                <span>*</span></h6>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked"
                                           name="are_you_allergic_to_animals">
                                    <span class="checkmark">Yes</span>
                                </label>
                                <label>
                                    <input type="radio" value="no" name="are_you_allergic_to_animals">
                                    <span class="checkmark">No</span>
                                </label>

                            </div>
                            @error('are_you_allergic_to_animals')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds db">
                                <label><i class="fa-solid fa-file-lines"></i>If yes, please indicate which</label><br>
                                <input type="text" name="if_yes_please_indicate_animal">
                            </div>
                            @error('if_yes_please_indicate_animal')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <h6 class="pay-method"><i class="fa-solid fa-car"></i></i>Will you have a car?<span>*</span>
                            </h6>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked" name="will_you_have_a_car">
                                    <span class="checkmark">Yes</span>
                                </label>
                                <label>
                                    <input type="radio" value="no" name="will_you_have_a_car">
                                    <span class="checkmark">No</span>
                                </label>

                            </div>
                            @error('will_you_have_a_car')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds db before">
                                <label><i class="fa-solid fa-graduation-cap"></i>Major / Field of
                                    Study<span>*</span></label><br>
                                <select class="yd-select " required="" data-parsley-required=""
                                        data-parsley-required-message="This field is Required."
                                        name="major_field_of_study"
                                        id="major_field" placeholder="" tabindex="1" data-parsley-group="block-0"
                                        required>

                                    <option value=""></option>
                                    <option value="History">History</option>
                                    <option value="Linguistics">Linguistics</option>
                                    <option value="Literature">Literature</option>
                                    <option value="Performing arts">Performing arts</option>
                                    <option value="Philosophy">Philosophy</option>
                                    <option value="Religion">Religion</option>
                                    <option value="Visual arts">Visual arts</option>
                                    <option value="Anthropology">Anthropology</option>
                                    <option value="Archaeology">Archaeology</option>
                                    <option value="Area studies">Area studies</option>
                                    <option value="Cultural and ethnic studies">Cultural and ethnic studies</option>
                                    <option value="Economics">Economics</option>
                                    <option value="Gender and sexuality studies">Gender and sexuality studies</option>
                                    <option value="Geography">Geography</option>
                                    <option value="Political science">Political science</option>
                                    <option value="Psychology">Psychology</option>
                                    <option value="Sociology">Sociology</option>
                                    <option value="Space sciences">Space sciences</option>
                                    <option value="Earth sciences">Earth sciences</option>
                                    <option value="Life sciences">Life sciences</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Computer sciences">Computer sciences</option>
                                    <option value="Logic">Logic</option>
                                    <option value="Mathematics">Mathematics</option>
                                    <option value="Statistics">Statistics</option>
                                    <option value="Systems science">Systems science</option>
                                    <option value="Agriculture">Agriculture</option>
                                    <option value="Architecture and Design">Architecture and Design</option>
                                    <option value="Business">Business</option>
                                    <option value="Divinity">Divinity</option>
                                    <option value="Education">Education</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Environmental studies and Forestry">Environmental studies and
                                        Forestry
                                    </option>
                                    <option value="Family and consumer science">Family and consumer science</option>
                                    <option value="Health science">Health science</option>
                                    <option value="Human physical performance and recreation">Human physical performance
                                        and
                                        recreation
                                    </option>
                                    <option value="Journalism, media studies and communication">Journalism, media
                                        studies
                                        and communication
                                    </option>
                                    <option value="Law">Law</option>
                                    <option value="Library and museum studies">Library and museum studies</option>
                                    <option value="Military sciences">Military sciences</option>
                                    <option value="Public administration">Public administration</option>
                                    <option value="Social work">Social work</option>
                                    <option value="Transportation">Transportation</option>
                                    <option value="Unknown">Unknown</option>
                                    <option value="Other">Other</option>

                                </select>
                            </div>
                            @error('major_field_of_study')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <h3>If you have specific needs for your host home, please write them below:</h3>
                            <div class="input-flds">
                                <label><i class="fa-solid fa-file-lines"></i>Specific Needs<span>*</span>(0)</label>
                                <textarea placeholder="Enter Text Here ..." name="specific_needs" required></textarea>
                            </div>
                            @error('specific_needs')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-file-lines"></i>Please describe your hobbies and
                                    interests:<span>*</span>(0)</label>
                                <textarea placeholder="Enter Text Here ..." name="hobbies_and_interest"
                                          required></textarea>
                            </div>
                            @error('hobbies_and_interest')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-file-lines"></i>Please describe your
                                    family:<span>*</span>(0)</label>
                                <textarea placeholder="Enter Text Here ..." name="describe_your_family"
                                          required></textarea>
                            </div>
                            @error('describe_your_family')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds">
                                <label><i class="fa-solid fa-file-lines"></i>Have you traveled abroad
                                    before?<span>*</span>(0)</label>
                                <textarea placeholder="Enter Text Here ..."
                                          name="have_you_traveled_abroad_before" required></textarea>
                            </div>
                            @error('have_you_traveled_abroad_before')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form_style five">
                        <div class="medical-info">
                            <h5>MEDICAL INFORMATION</h5>
                            <h6>The following information must be completed by the parent if the applicant is under 18
                                years
                                of age.</h6>
                            <h6>Please list any medical conditions in the past three years that have been treated by a
                                physician. Also, list any emotional difficulties, allergies (animals, food, medicine),
                                learning disabilities, and physical limitations. List any visits to a psychologist,
                                counselor, or psychiatrist in the past ten years.</h6>
                            <div class="input-flds">
                                <label><i class="fa-solid fa-file-lines"></i>Medical
                                    Information<span>*</span>(0)</label>
                                <textarea placeholder="Enter Text Here ..."
                                          name="medical_information" required></textarea>
                            </div>
                            @error('medical_information')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form_style">
                        <div class="airport">
                            <h3>Airport Pickup:</h3>
                            <h5>Airport Pickup Rates (per person):</h5>
                            <h6>Northern California $175</h6>
                            <h6>Southern California $175</h6>
                            <h6>College of the Desert $120</h6>
                            <h6>Hawaii $120</h6>

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="drivers">
                                        <label><i class="fa-solid fa-plane-departure"></i>Request for Airport Pickup
                                            Driver
                                            ?</label>
                                        <div class="payment-ckbx plane">

                                            <label>
                                                <input type="radio" value="yes" checked="checked"
                                                       name="request_for_airport_pickup_driver">
                                                <span class="checkmark">Yes</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="no" name="request_for_airport_pickup_driver">
                                                <span class="checkmark">No</span>
                                            </label>

                                        </div>
                                        @error('request_for_airport_pickup_driver')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="driver-dropdown">
                                        <div class="input-flds before">
                                            <label><i class="fa-solid fa-car"></i>If Driver Required, Number of People
                                                needing Driver:</label>
                                            <select class="yd-select " name="number_of_people_needing_driver"
                                                    id="airport_arrival_number_of_people" placeholder="" tabindex="1"
                                                    data-parsley-group="block-0">

                                                <option value=""></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            @error('airport_arrival_number_of_people')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="airport-info">
                                <h4>Airport Arrival Flight Information:</h4>
                                <div class="input-flds airport">
                                    <label><i class="fa-solid fa-calendar-days"></i>Arrival Date</label><br>
                                    <input type="date" name="arrival_date">
                                </div>

                                <div class="input-flds airport before">
                                    <label><i class="fa-solid fa-plane-departure"></i>Arrival Airport</label><br>
                                    <select class="yd-select " name="arrival_airport" id="airport_arrival_airport"
                                            placeholder="" tabindex="1" data-parsley-group="block-0">
                                        <option value=""></option>
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
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="input-flds airport">
                                    <label><i class="fa-solid fa-plane-departure"></i>Arrival Flight Number</label><br>
                                    <input type="text" name="arrival_flight_number">
                                </div>
                                @error('arrival_flight_number')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <h6 class="pay-method"><i class="fa-solid fa-plane-departure"></i>Flight type</h6>
                            <div class="payment-ckbx plane">

                                <label>
                                    <input type="radio" value="international" checked="checked" name="flight_type">
                                    <span class="checkmark">International</span>
                                </label>
                                <label>
                                    <input type="radio" value="domestic" name="flight_type">
                                    <span class="checkmark">Domestic</span>
                                </label>

                            </div>
                            @error('flight_type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds before">
                                <label><i class="fa-solid fa-plane-departure"></i>Arrival Airline</label>
                                <select class="yd-select " name="arrival_airline" id="airport_arrival_airline"
                                        placeholder="" tabindex="1" data-parsley-group="block-0">
                                    <option value=""></option>
                                    <option value="American Airlines-Domestic">American Airlines-Domestic</option>
                                    <option value="American Airlines-Int’l">American Airlines-Int’l</option>
                                    <option value="Asiana Airlines">Asiana Airlines</option>
                                    <option value="British Airways">British Airways</option>
                                    <option value="Cathay Pacific">Cathay Pacific</option>
                                    <option value="China Airline">China Airline</option>
                                    <option value="Delta Airlines">Delta Airlines</option>
                                    <option value="Japan Airlines">Japan Airlines</option>
                                    <option value="Singapore Airlines">Singapore Airlines</option>
                                    <option value="United Airlines-Domestic">United Airlines-Domestic</option>
                                    <option value="United Airlines-Int’l">United Airlines-Int’l</option>

                                </select>
                            </div>
                            @error('arrival_airline')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="arrival-time">
                                        <div class="input-flds before">
                                            <label><i class="fa-solid fa-plane-departure"></i>Airport Arrival
                                                Time</label>
                                            <input type="time" name="airport_arrival_time">
                                        </div>
                                        @error('airport_arrival_time')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form_style five">
                        <div class="refundable-payment">
                            <h5>Fees Details</h5>
                            <h4>Please check below if any of these fees apply to you:</h4>
                            <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Placement Fee<span>*</span>
                            </h6>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked" name="placement_fee">
                                    <span class="checkmark">Yes</span>
                                </label>
                                <label>
                                    <input type="radio" value="no" name="placement_fee">
                                    <span class="checkmark">No</span>
                                </label>

                            </div>
                            @error('placement_fee')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Monthly Service Fee (Southern
                                California only)<span>*</span></h6>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked" name="monthly_service_fee">
                                    <span class="checkmark">Yes</span>
                                </label>
                                <label>
                                    <input type="radio" value="no" name="monthly_service_fee">
                                    <span class="checkmark">No</span>
                                </label>

                            </div>
                            @error('monthly_service_fee')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Airport Pickup
                                Fee<span>*</span>
                            </h6>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked" name="airport_pickup_fee">
                                    <span class="checkmark">Yes</span>
                                </label>
                                <label>
                                    <input type="radio" value="no" name="airport_pickup_fee">
                                    <span class="checkmark">No</span>
                                </label>

                            </div>
                            @error('airport_pickup_fee')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="smoke-flex">
                                <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Deposit Fee<span>*</span>
                                </h6>
                                <p>(refunded upon departure if all ISP terms are satisfied)</p>
                            </div>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked" name="deposit_fee">
                                    <span class="checkmark">Yes</span>
                                </label>
                                <label>
                                    <input type="radio" value="no" name="deposit_fee">
                                    <span class="checkmark">No</span>
                                </label>

                            </div>
                            @error('deposit_fee')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="smoke-flex">
                                <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Late Fee<span>*</span>
                                </h6>
                                <p>Is $100 if applying within 7 days of arrival</p>
                                <p>Is $75 if applying within 21 days of arrival</p>
                            </div>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked" name="late_fee">
                                    <span class="checkmark">Yes</span>
                                </label>
                                <label>
                                    <input type="radio" value="no" name="late_fee">
                                    <span class="checkmark">No</span>
                                </label>

                            </div>
                            @error('late_fee')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <h3>Please provide the credit card information:</h3>
                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Student Name<span>*</span></label><br>
                                <input type="text" name="student_name_1" required>
                            </div>
                            @error('student_name_1')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Cardholder First Name<span>*</span></label><br>
                                <input type="text" name="cardholder_first_name" required>
                            </div>
                            @error('cardholder_first_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Cardholder Last Name<span>*</span></label><br>
                                <input type="text" name="cardholder_last_name" required>
                            </div>
                            @error('cardholder_last_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-envelope"></i>Cardholder Email<span>*</span></label><br>
                                <input type="text" name="cardholder_email" required>
                            </div>
                            @error('cardholder_email')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Cardholder Street Address Line
                                    1<span>*</span></label><br>
                                <input type="text" name="cardholder_street_address_line_1">
                            </div>
                            @error('cardholder_street_address_line_1')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-address-card"></i>Cardholder Street Address Line
                                    2</label><br>
                                <input type="text" name="cardholder_street_address_line_2">
                            </div>
                            @error('cardholder_street_address_line_2')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-address-card"></i>Cardholder Street Address Line
                                    3</label><br>
                                <input type="text" name="cardholder_street_address_line_3">
                            </div>
                            @error('cardholder_street_address_line_3')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds">
                                <label><i class="fa-solid fa-address-card"></i>Cardholder City<span>*</span></label>
                                <input type="text" name="cardholder_city" required>
                            </div>

                            {{--                        <div class="input-flds before refundable-payment">--}}
                            {{--                            <label><i class="fa-solid fa-address-card"></i>Cardholder City<span>*</span></label><br>--}}
                            {{--                            <select class="yd-select " required="" data-parsley-required=""--}}
                            {{--                                    data-parsley-required-message="This field is Required." name="cardholder_city"--}}
                            {{--                                    id="cardholder_city" placeholder="" tabindex="1" data-parsley-group="block-0">--}}

                            {{--                                <option selected="" hidden value="" disabled>--}}
                            {{--                                    Please Select City--}}
                            {{--                                </option>--}}
                            {{--                                @foreach ($cities as $city)--}}
                            {{--                                    <option value="{{ $city->id }}">--}}
                            {{--                                        {{ $city->name }}--}}
                            {{--                                    </option>--}}
                            {{--                                @endforeach--}}

                            {{--                            </select>--}}
                            {{--                        </div>--}}

                            <div class="input-flds refundable-payment before">
                                <label><i class="fa-solid fa-address-card"></i>Cardholder State</label><br>
                                <select class="yd-select " name="cardholder_state" id="cardholder_state" placeholder=""
                                        tabindex="1" data-parsley-group="block-0">


                                    {{--                                <option selected="" hidden value="" disabled>--}}
                                    {{--                                    Please Select State--}}
                                    {{--                                </option>--}}
                                    {{--                                @foreach ($states as $state)--}}
                                    {{--                                    <option value="{{ $state->id }}">--}}
                                    {{--                                        {{ $state->name }}--}}
                                    {{--                                    </option>--}}
                                    {{--                                @endforeach--}}

                                    <option value=""></option>
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
                                    <option value="U.S. Virgin Islands"> U.S. Virgin Islands</option>
                                    <option value="American Samoa"> American Samoa</option>
                                    <option value="Guam"> Guam</option>
                                    <option value="Northern Mariana Islands"> Northern Mariana Islands</option>
                                </select>
                            </div>

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-address-card"></i>Cardholder Postal / Zip
                                    Code<span>*</span></label><br>
                                <input type="text" name="cardholder_zipcode" required>
                            </div>
                            @error('cardholder_zipcode')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds refundable-payment before">
                                <label><i class="fa-solid fa-earth-americas"></i>Cardholder
                                    Country<span>*</span></label><br>--}}
                                <select class="yd-select " required="" data-parsley-required=""
                                        data-parsley-required-message="This field is Required."
                                        name="cardholder_country"
                                        id="cc_cardholder_country" placeholder="" tabindex="1"
                                        data-parsley-group="block-0">

                                    {{--                                <option selected="" hidden value="" disabled>--}}
                                    {{--                                    Please Select Country--}}
                                    {{--                                </option>--}}
                                    {{--                                @foreach ($countries as $country)--}}
                                    {{--                                    <option value="{{ $country->id }}">--}}
                                    {{--                                        {{ $country->name }}--}}
                                    {{--                                    </option>--}}
                                    {{--                                @endforeach--}}
                                    <option value=""></option>
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
                                    <option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">Bouvet Island</option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
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
                                    <option value="Central African Republic">Central African Republic</option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">Christmas Island</option>
                                    <option value="Cocos (keeling) Islands">Cocos (keeling) Islands</option>
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
                                    <option value="Falkland Islands (malvinas)">Falkland Islands (malvinas)</option>
                                    <option value="Faroe Islands">Faroe Islands</option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="French Guiana">French Guiana</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="French Southern Territories">French Southern Territories</option>
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
                                    <option value="Heard Island And Mcdonald Islands">Heard Island And Mcdonald Islands
                                    </option>
                                    <option value="Holy See (vatican City State)">Holy See (vatican City State)</option>
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
                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
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
                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                    <option value="Neutrale Zone">Neutrale Zone</option>
                                    <option value="New Caledonia">New Caledonia</option>
                                    <option value="New Zealand">New Zealand</option>
                                    <option value="Nicaragua">Nicaragua</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">Norfolk Island</option>
                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Palestinian Territory">Palestinian Territory</option>
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
                                    <option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option>
                                    <option value="Saint Lucia">Saint Lucia</option>
                                    <option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option>
                                    <option value="Saint Vincent And The Grenadines">Saint Vincent And The Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">San Marino</option>
                                    <option value="Sao Tome And Principe">Sao Tome And Principe</option>
                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Serbien und Montenegro">Serbien und Montenegro</option>
                                    <option value="Seychelles">Seychelles</option>
                                    <option value="Sierra Leone">Sierra Leone</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Slovakia">Slovakia</option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">Solomon Islands</option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">South Africa</option>
                                    <option value="South Georgia And The South Sandwich Islands">South Georgia And The
                                        South
                                        Sandwich Islands
                                    </option>
                                    <option value="Spain">Spain</option>
                                    <option value="Sri Lanka">Sri Lanka</option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
                                    <option value="Swaziland">Swaziland</option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">Switzerland</option>
                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
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
                                    <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="Union der Sozialistischen Sowjetrepubliken">Union der Sozialistischen
                                        Sowjetrepubliken
                                    </option>
                                    <option value="United Arab Emirates">United Arab Emirates</option>
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
                            </div>

                            <h6 class="pay-method"><i class="fa-solid fa-credit-card"></i>Credit Card Type<span>*</span>
                            </h6>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="Visa" checked="checked" name="credit_card_type">
                                    <span class="checkmark">Visa</span>
                                </label>
                                <label>
                                    <input type="radio" value="Master Card" name="credit_card_type">
                                    <span class="checkmark">Master Card</span>
                                </label>

                            </div>
                            @error('credit_card_type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-credit-card"></i>Name on Card<span>*</span></label><br>
                                <input type="text" name="name_on_card" required>
                            </div>
                            @error('name_on_card')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-credit-card"></i>Card Number<span>*</span></label><br>
                                <input type="number" name="card_number" required>
                            </div>
                            @error('card_number')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-credit-card"></i>Expiration Date<span>*</span></label><br>
                                <input type="date" name="card_exp_date" min="{{"carbon date required"}}"
                                       max="{{"carbon date required"}}" required>
                            </div>
                            @error('card_exp_date')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <h5>I authorize International Student Placements (ISP) to charge fees to my credit card.
                                Student
                                may send a check or money order to ISP if they choose. I understand that all charges are
                                non-refundable.*</h5>
                            <h5>* Southern California students pay a $70 service charge deducted each month from the
                                credit
                                card on file.</h5>
                            <h3>STUDENT:</h3>

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Electronic Signature<span>*</span></label><br>
                                <input type="text" name="student_electronic_signature_1" required>
                            </div>
                            @error('student_electronic_signature_1')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Student Name<span>*</span></label><br>
                                <input type="text" name="student_name_2" required>
                            </div>
                            @error('student_name_2')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-calendar-days"></i>Date</label><br>
                                <input type="date" name="student_electronic_signature_date_1">
                            </div>
                            @error('student_electronic_signature_date_1')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <h3>CARDHOLDER:</h3>

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Electronic Signature<span>*</span></label><br>
                                <input type="text" name="cardholder_electronic_signature" required>
                            </div>
                            @error('cardholder_electronic_signature')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Cardholder Name<span>*</span></label><br>
                                <input type="text" name="cardholder_name" required>
                            </div>
                            @error('cardholder_name')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-calendar-days"></i>Date<span>*</span></label><br>
                                <input type="date" name="cardholder_date" required>
                            </div>
                            @error('cardholder_date')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>
                    </div>
                    <div class="form_style">
                        <div class="refundable-payment termsconditions">
                            <h3>INTERNATIONAL STUDENT PLACEMENTS TERMS AND CONDITIONS</h3>

                            <div class="para-scroll">
                                <p>1. ISP payments: ISP will charge the placement fee, deposit, and airport pick up fee
                                    to
                                    my credit card when I apply. All fees are non-refundable. I will pay my host
                                    directly
                                    for the monthly rent when they arrive. Applications are not processed until my fees
                                    have
                                    been received.</p>

                                <p>2. Contract Period. I agree to stay with my host family for my entire contract
                                    period. I
                                    may extend my contract with the consent of my host family. If I choose to leave my
                                    host
                                    home prior to the end of my contract, I agree to pay rent for the remainder of the
                                    contract period. I agree to give both my host and ISP 30 days notice prior to moving
                                    out. If I break my contract I will lose my deposit.</p>

                                <p>3. Breach of Contract. If I break my contract, I understand I will lose my deposit.
                                    If I
                                    choose to leave my host home prior to the end of my contract, I agree to pay rent
                                    for
                                    the remainder of the contract period.</p>

                                <p>4. Host Payments. I will pay my host on the day I arrive. If my rent is not paid on
                                    time
                                    each month, I must leave my host home immediately and ISP will not offer me a new
                                    host
                                    family. I will only pay rent to my host one month at a time. I understand ISP can
                                    change
                                    the monthly fees at any time. I agree to have my rent and/or any damage I cause to
                                    my
                                    host home charged to my credit card if I fail to pay. I understand that ISP does not
                                    get
                                    involved in rent disputes between host families and students. My host may choose to
                                    be
                                    paid either the same date every month (ex: May 10th, June 10th, July 10th) or for me
                                    to
                                    pay the remainder of the month when I arrive and the first of every month after (ex:
                                    May
                                    10-31, June 1st, July 1st).</p>

                                <p>5. Service Fees (for Southern California Students). I understand that ISP will be
                                    charging my credit card $70 for every month that I am in homestay. I understand that
                                    if
                                    the credit card is declined or returned as invalid, I must take the proper steps so
                                    that
                                    ISP can charge this fee. There is a $100 fee for each denied or invalid charge. I
                                    understand that in order for ISP to stop charging the monthly service fee, I must
                                    inform
                                    the ISP office by email.</p>

                                <p>6. Deposit. In order for me to get my $100 deposit back, I must clean my bedroom and
                                    return the house key to my host. I understand I must request to have my deposit
                                    returned
                                    by sending ISP an email within 60 days of departure. I will read the deposit
                                    information
                                    sheet that was emailed to me when I applied. Deposit refund checks are sent only
                                    within
                                    the United States.</p>

                                <p>
                                    7. Meals. If I choose the meal option, my host will provide breakfast and dinner
                                    every
                                    night. Hosts will prepare dinner at least five nights per week. I will make my own
                                    meals
                                    on nights when dinner is not prepared. I will discuss my food preferences with my
                                    host.
                                    I understand that lunches and snacks are not included in my rent and that I am
                                    responsible for paying for my lunch. If I sign up for no meals, I will be permitted
                                    to
                                    prepare only light meals in my host’s kitchen. I can switch my meal plan after
                                    arrival
                                    with my host’s consent only. If I have strict dietary needs, I will purchase my own
                                    food.</p>

                                <p>
                                    8. Student Guidelines. I will read and understand the ISP Student FAQ sheet that
                                    will be
                                    emailed to me when I’m accepted to the ISP program. My guests and family members
                                    will
                                    not stay overnight in my host’s home. If I violate this, even if I received
                                    permission
                                    from my host, I will be asked to leave the ISP program. ISP will not provide me with
                                    alternative housing and no fees will be refunded. My host may set a curfew for me
                                    even
                                    if I am over 18 years old. I will abide by the curfew laws of the city where I am
                                    residing.</p>

                                <p>
                                    9. Airport Pickup. I understand that my airport pick-up fee is non-refundable. If my
                                    parents accompany me, they must pay the fee in advance of arrival and make their own
                                    hotel reservations. I understand that traffic may delay ISP Airport drivers. If I am
                                    under 18 years old, I will NOT fly as an unaccompanied minor. ISP is not able to
                                    sign
                                    for me at the airport. ISP uses a third party company to provide airport pickups for
                                    students. I understand that the airport driving company is not an employee of ISP
                                    and
                                    that ISP has no control of liability for the airport service.</p>

                                <p>
                                    10. Transportation. Transportation to and from school is not included in my homestay
                                    program. The bus ride to my school will take between 40-65 minutes each way.
                                    Requests
                                    may not be made for close host families.</p>

                                <p>
                                    11. Host Possessions. I agree to take good care of my host family’s possessions, and
                                    to
                                    be financially responsible for the costs of any repairs associated with breakage or
                                    loss. I agree to clean my bedroom and bathroom once per week. If I fail to clean, my
                                    host has the right to charge me an extra fee.</p>

                                <p>
                                    12. Rules. If I break any of my host family’s or ISP rules and/or If it’s decided
                                    that I
                                    am not an appropriate match for a homestay program, ISP will not provide me with
                                    alternative housing and will not refund any rent or fees paid.</p>

                                <p>
                                    13. Prohibited Activities. I will not engage in any illegal activities, including
                                    the
                                    use of drugs or alcohol (the use of alcohol & tobacco is legal in the US at the age
                                    of
                                    21). Excessive alcohol consumption for students over the age of 21, theft, abuse of
                                    property, verbal or physical abuse, impolite language or behavior will result in ISP
                                    termination. I will stay informed of all laws in the US and I will abide by them. I
                                    will
                                    not smoke cigarettes or marijuana inside or outside my host home even for medical
                                    necessity. If I violate these rules, I will be asked to leave my host family’s home.
                                    ISP
                                    will not provide me with alternative housing. I will forfeit any paid rent and ISP
                                    will
                                    not refund any fees that were paid. ISP will take me to a local hotel for which I
                                    will
                                    be responsible for payment.</p>

                                <p>
                                    14. Medical. I certify that I am physically and medically able to participate in the
                                    program and have no physical or medical condition that would make my participation
                                    in
                                    the program unsafe or dangerous to others or myself. I certify that I have been seen
                                    by
                                    a healthcare provider within the last year and that I have completed the medical
                                    portion
                                    of this application truthfully. I have disclosed to ISP all allergies, medications I
                                    am
                                    taking, and past/current mental and physical health issues.</p>

                                <p>
                                    15. Request for Host change. If I have problems with my host family within my
                                    contract
                                    period, ISP will assist me to resolve the issue. ISP will have the final authority
                                    to
                                    decide if a host move is needed. The placement fee is valid for my original
                                    placement,
                                    and there will be an additional placement fee for requesting to move to another
                                    host. If
                                    the host family has to cancel hosting during my original contract period or if the
                                    host
                                    has altered the original homestay agreement or is unable to provide a safe living
                                    arrangement, ISP will make a second placement at no charge.</p>

                                <p>
                                    16. Media release. I hereby grant to ISP and its representatives the right and
                                    permission, with respect to those photographs, videos, or any media taken of me and
                                    with
                                    respect to any printed matter in connection therewith to include them in any
                                    advertising, publicity, and promotion thereof.</p>

                                <p>
                                    17. Warranties/consent. I warrant that the information provided on my application is
                                    true and correct, I am not a sex offender, and I have not been convicted of any
                                    crimes.
                                    I authorize ISP, it’s employees, coordinators, and host family, to consent to any
                                    x-ray
                                    examinations, anesthetic, medical, or surgical treatment, or emergency hospital care
                                    on
                                    my behalf. I agree that ISP, it’s employees, coordinators, and assigned host family
                                    can
                                    take any action whatsoever with regard to my safety without incurring any liability
                                    or
                                    expense.</p>

                                <p>
                                    18. Limitation of Liability. IN NO EVENT SHALL ISP HAVE ANY LIABILITY TO ANY STUDENT
                                    FOR
                                    ANY INDIRECT, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES, HOWEVER CAUSED, AND
                                    UNDER
                                    ANY THEORY OF LIABILITY, WHETHER OR NOT ISP HAS BEEN ADVISED OF THE POSSIBILITY OF
                                    SUCH
                                    DAMAGES. FURTHER, ISP SHALL NOT BE NAMED AS A PARTY, CALLED AS A WITNESS, OR SERVED
                                    DISCOVERY REQUESTS IN ANY DISPUTE BETWEEN STUDENTS AND HOSTS REGARDING THE FINANCIAL
                                    OR
                                    INTERPERSONAL DEALINGS BETWEEN STUDENTS AND HOSTS.</p>

                                <p>
                                    19. Indemnification/Governing Law. I understand that hosts are not ISP’s employees
                                    or
                                    agents, and that ISP has no constructive control of hosts’ behavior. I understand
                                    that
                                    the information provided by ISP about my host family is not a perfect predictor of
                                    how
                                    my host family will act in the future and that the background and safety of my host
                                    is
                                    not guaranteed. It is voluntary for me to participate in trips and activities with
                                    my
                                    host family and that ISP does not require my participation. I understand that ISP
                                    cannot
                                    control or guarantee the behavior of host families now or in the future. I assume
                                    all
                                    risks associated with injury or loss arising from my participation in the ISP
                                    program. I
                                    release ISP of any liability for any claim of injury, death, property damage, or
                                    other
                                    loss.</p>

                                <p>
                                    20. Governing Law. The parties agree to file any dispute regarding this Agreement in
                                    Santa Clara County, California Superior Court, and that any case will be determined
                                    using California law. The parties agree to solve any dispute and resolution of this
                                    agreement using mediation service in Santa Clara County using the American
                                    Arbitration
                                    Association before using any other means to solve the dispute.</p>


                                <p>
                                    21. COVID-19 Protocol for Students
                                    All students must provide proof of their COVID-19 vaccination status and upload
                                    their
                                    COVID-19 vaccine card when applying to the program. In addition to the first and
                                    second
                                    doses, students must have received a booster shot. If boosters are not available in
                                    the
                                    student’s home country or if not enough time has passed between the second dose and
                                    the
                                    booster before departure, students must agree to receive the booster in the US
                                    within 3
                                    days of being eligible.</p>

                                <p>
                                    Prior to departure, students will be asked to monitor their health 10 days before
                                    traveling to the US. Students who exhibit flu-like symptoms (which includes fever,
                                    body
                                    aches, stuffy/runny nose, cough, etc.) upon arrival or at any point during their
                                    stay
                                    will need to self-quarantine in their host home bedroom AND take a PCR test. If the
                                    PCR
                                    test is negative, the student may end their self-quarantine. If the result is
                                    positive,
                                    the student must continue to self-quarantine for at least 5 days or until their
                                    symptoms
                                    subside and a second PCR test is negative.</p>

                                <p>
                                    If a student contracts COVID-19 and their host is not comfortable with them staying
                                    in
                                    their home, the student will check into a local hotel at their own expense for at
                                    least
                                    5 days or until they get a negative PCR test and symptoms subside. Students must
                                    arrive
                                    with KN95 face masks and be prepared to wear them in the host home for the first 5
                                    days
                                    after arrival if the host requests this.</p>

                                <p>
                                    Throughout the student’s stay, local governments will continue to adjust their COVID
                                    policies according to the prevalence of the virus in the community. ISP students are
                                    expected to adhere to current regulations, practice good hygiene, clean and
                                    disinfect
                                    their bedroom and bathroom, and practice social distancing. Intentional disregard
                                    could
                                    result in the students’ dismissal from the program. Students understand that living
                                    in a
                                    host home comes with risk and that ISP cannot guarantee nor control whether a
                                    student
                                    will contract COVID-19 from any members of the host home. The student assumes all
                                    liability for any injury, loss, damage, accident, delay, or expense resulting from
                                    contracting COVID-19 during their stay.</p>


                                <p>
                                    Student certifies to having read the Terms and Conditions and agrees to be bound
                                    hereto.
                                    Each party warrants that it has full power and authority to enter into and perform
                                    under
                                    this Agreement and that the person signing this Agreement on behalf of such party
                                    has
                                    been duly authorized and empowered to execute this Agreement. Student and Parent
                                    either
                                    comprehend English and/or have had an interpreter to explain this document and its
                                    contents in its entirety. In witness whereof, the parties hereto have caused this
                                    Agreement to be executed. Student and Parent acknowledge that student possesses the
                                    maturity and psychological readiness necessary for an overseas immersion
                                    program.</p>

                                <p>
                                    For Parents with applicants under 18:</p>

                                <p>
                                    I acknowledge that my child is under the age of eighteen, and that I, not the host
                                    family, nor ISP will be held responsible for our child’s actions while he/she lives
                                    in
                                    the United States. I agree to pay the full amount for any and all damages in the
                                    homestay for which my child is responsible, regardless of whether the damages were
                                    accidental. I agree to hold harmless and release all liabilities of ISP, and the
                                    host
                                    family chosen for my child, including all claims against ISP and the host family for
                                    any
                                    injury, loss, damages, accident, delay or expense resulting from participation in
                                    the
                                    homestay program. I hereby acknowledge, accept, and agree to the above named terms
                                    and
                                    conditions.)
                                    1. ISP payments: ISP will charge the placement fee, deposit, and airport pick up fee
                                    to
                                    my credit card when I apply. All fees are non-refundable. I will pay my host
                                    directly
                                    for the monthly rent when they arrive. Applications are not processed until my fees
                                    have
                                    been received.</p>

                                <p>
                                    2. Contract Period. I agree to stay with my host family for my entire contract
                                    period. I
                                    may extend my contract with the consent of my host family. If I choose to leave my
                                    host
                                    home prior to the end of my contract, I agree to pay rent for the remainder of the
                                    contract period. I agree to give both my host and ISP 30 days notice prior to moving
                                    out. If I break my contract I will lose my deposit.</p>

                                <p>
                                    3. Breach of Contract. If I break my contract, I understand I will lose my deposit.
                                    If I
                                    choose to leave my host home prior to the end of my contract, I agree to pay rent
                                    for
                                    the remainder of the contract period.</p>

                                <p>
                                    4. Host Payments. I will pay my host on the day I arrive. If my rent is not paid on
                                    time
                                    each month, I must leave my host home immediately and ISP will not offer me a new
                                    host
                                    family. I will only pay rent to my host one month at a time. I understand ISP can
                                    change
                                    the monthly fees at any time. I agree to have my rent and/or any damage I cause to
                                    my
                                    host home charged to my credit card if I fail to pay. I understand that ISP does not
                                    get
                                    involved in rent disputes between host families and students. My host may choose to
                                    be
                                    paid either the same date every month (ex: May 10th, June 10th, July 10th) or for me
                                    to
                                    pay the remainder of the month when I arrive and the first of every month after (ex:
                                    May
                                    10-31, June 1st, July 1st).</p>

                                <p>
                                    5. Service Fees (for Southern California Students). I understand that ISP will be
                                    charging my credit card $70 for every month that I am in homestay. I understand that
                                    if
                                    the credit card is declined or returned as invalid, I must take the proper steps so
                                    that
                                    ISP can charge this fee. There is a $100 fee for each denied or invalid charge. I
                                    understand that in order for ISP to stop charging the monthly service fee, I must
                                    inform
                                    the ISP office by email.</p>

                                <p>
                                    6. Deposit. In order for me to get my $100 deposit back, I must clean my bedroom and
                                    return the house key to my host. I understand I must request to have my deposit
                                    returned
                                    by sending ISP an email within 60 days of departure. I will read the deposit
                                    information
                                    sheet that was emailed to me when I applied. Deposit refund checks are sent only
                                    within
                                    the United States.</p>

                                <p>
                                    7. Meals. If I choose the meal option, my host will provide breakfast and dinner
                                    every
                                    night. Hosts will prepare dinner at least five nights per week. I will make my own
                                    meals
                                    on nights when dinner is not prepared. I will discuss my food preferences with my
                                    host.
                                    I understand that lunches and snacks are not included in my rent and that I am
                                    responsible for paying for my lunch. If I sign up for no meals, I will be permitted
                                    to
                                    prepare only light meals in my host’s kitchen. I can switch my meal plan after
                                    arrival
                                    with my host’s consent only. If I have strict dietary needs, I will purchase my own
                                    food.</p>

                                <p>
                                    8. Student Guidelines. I will read and understand the ISP Student FAQ sheet that
                                    will be
                                    emailed to me when I’m accepted to the ISP program. My guests and family members
                                    will
                                    not stay overnight in my host’s home. If I violate this, even if I received
                                    permission
                                    from my host, I will be asked to leave the ISP program. ISP will not provide me with
                                    alternative housing and no fees will be refunded. My host may set a curfew for me
                                    even
                                    if I am over 18 years old. I will abide by the curfew laws of the city where I am
                                    residing.</p>

                                <p>
                                    9. Airport Pickup. I understand that my airport pick-up fee is non-refundable. If my
                                    parents accompany me, they must pay the fee in advance of arrival and make their own
                                    hotel reservations. I understand that traffic may delay ISP Airport drivers. If I am
                                    under 18 years old, I will NOT fly as an unaccompanied minor. ISP is not able to
                                    sign
                                    for me at the airport. ISP uses a third party company to provide airport pickups for
                                    students. I understand that the airport driving company is not an employee of ISP
                                    and
                                    that ISP has no control of liability for the airport service.</p>

                                <p>
                                    10. Transportation. Transportation to and from school is not included in my homestay
                                    program. The bus ride to my school will take between 40-65 minutes each way.
                                    Requests
                                    may not be made for close host families.</p>

                                <p>
                                    11. Host Possessions. I agree to take good care of my host family’s possessions, and
                                    to
                                    be financially responsible for the costs of any repairs associated with breakage or
                                    loss. I agree to clean my bedroom and bathroom once per week. If I fail to clean, my
                                    host has the right to charge me an extra fee.</p>

                                <p>
                                    12. Rules. If I break any of my host family’s or ISP rules and/or If it’s decided
                                    that I
                                    am not an appropriate match for a homestay program, ISP will not provide me with
                                    alternative housing and will not refund any rent or fees paid.</p>

                                <p>
                                    13. Prohibited Activities. I will not engage in any illegal activities, including
                                    the
                                    use of drugs or alcohol (the use of alcohol & tobacco is legal in the US at the age
                                    of
                                    21). Excessive alcohol consumption for students over the age of 21, theft, abuse of
                                    property, verbal or physical abuse, impolite language or behavior will result in ISP
                                    termination. I will stay informed of all laws in the US and I will abide by them. I
                                    will
                                    not smoke cigarettes or marijuana inside or outside my host home even for medical
                                    necessity. If I violate these rules, I will be asked to leave my host family’s home.
                                    ISP
                                    will not provide me with alternative housing. I will forfeit any paid rent and ISP
                                    will
                                    not refund any fees that were paid. ISP will take me to a local hotel for which I
                                    will
                                    be responsible for payment.</p>

                                <p>
                                    14. Medical. I certify that I am physically and medically able to participate in the
                                    program and have no physical or medical condition that would make my participation
                                    in
                                    the program unsafe or dangerous to others or myself. I certify that I have been seen
                                    by
                                    a healthcare provider within the last year and that I have completed the medical
                                    portion
                                    of this application truthfully. I have disclosed to ISP all allergies, medications I
                                    am
                                    taking, and past/current mental and physical health issues.</p>

                                <p>
                                    15. Request for Host change. If I have problems with my host family within my
                                    contract
                                    period, ISP will assist me to resolve the issue. ISP will have the final authority
                                    to
                                    decide if a host move is needed. The placement fee is valid for my original
                                    placement,
                                    and there will be an additional placement fee for requesting to move to another
                                    host. If
                                    the host family has to cancel hosting during my original contract period or if the
                                    host
                                    has altered the original homestay agreement or is unable to provide a safe living
                                    arrangement, ISP will make a second placement at no charge.</p>

                                <p>
                                    16. Media release. I hereby grant to ISP and its representatives the right and
                                    permission, with respect to those photographs, videos, or any media taken of me and
                                    with
                                    respect to any printed matter in connection therewith to include them in any
                                    advertising, publicity, and promotion thereof.</p>

                                <p>
                                    17. Warranties/consent. I warrant that the information provided on my application is
                                    true and correct, I am not a sex offender, and I have not been convicted of any
                                    crimes.
                                    I authorize ISP, it’s employees, coordinators, and host family, to consent to any
                                    x-ray
                                    examinations, anesthetic, medical, or surgical treatment, or emergency hospital care
                                    on
                                    my behalf. I agree that ISP, it’s employees, coordinators, and assigned host family
                                    can
                                    take any action whatsoever with regard to my safety without incurring any liability
                                    or
                                    expense.</p>

                                <p>
                                    18. Limitation of Liability. IN NO EVENT SHALL ISP HAVE ANY LIABILITY TO ANY STUDENT
                                    FOR
                                    ANY INDIRECT, SPECIAL, INCIDENTAL OR CONSEQUENTIAL DAMAGES, HOWEVER CAUSED, AND
                                    UNDER
                                    ANY THEORY OF LIABILITY, WHETHER OR NOT ISP HAS BEEN ADVISED OF THE POSSIBILITY OF
                                    SUCH
                                    DAMAGES. FURTHER, ISP SHALL NOT BE NAMED AS A PARTY, CALLED AS A WITNESS, OR SERVED
                                    DISCOVERY REQUESTS IN ANY DISPUTE BETWEEN STUDENTS AND HOSTS REGARDING THE FINANCIAL
                                    OR
                                    INTERPERSONAL DEALINGS BETWEEN STUDENTS AND HOSTS.</p>

                                <p>
                                    19. Indemnification/Governing Law. I understand that hosts are not ISP’s employees
                                    or
                                    agents, and that ISP has no constructive control of hosts’ behavior. I understand
                                    that
                                    the information provided by ISP about my host family is not a perfect predictor of
                                    how
                                    my host family will act in the future and that the background and safety of my host
                                    is
                                    not guaranteed. It is voluntary for me to participate in trips and activities with
                                    my
                                    host family and that ISP does not require my participation. I understand that ISP
                                    cannot
                                    control or guarantee the behavior of host families now or in the future. I assume
                                    all
                                    risks associated with injury or loss arising from my participation in the ISP
                                    program. I
                                    release ISP of any liability for any claim of injury, death, property damage, or
                                    other
                                    loss.</p>

                                <p>
                                    20. Governing Law. The parties agree to file any dispute regarding this Agreement in
                                    Santa Clara County, California Superior Court, and that any case will be determined
                                    using California law. The parties agree to solve any dispute and resolution of this
                                    agreement using mediation service in Santa Clara County using the American
                                    Arbitration
                                    Association before using any other means to solve the dispute.</p>


                                <p>
                                    21. COVID-19 Protocol for Students
                                    All students must provide proof of their COVID-19 vaccination status and upload
                                    their
                                    COVID-19 vaccine card when applying to the program. In addition to the first and
                                    second
                                    doses, students must have received a booster shot. If boosters are not available in
                                    the
                                    student’s home country or if not enough time has passed between the second dose and
                                    the
                                    booster before departure, students must agree to receive the booster in the US
                                    within 3
                                    days of being eligible.</p>

                                <p>
                                    Prior to departure, students will be asked to monitor their health 10 days before
                                    traveling to the US. Students who exhibit flu-like symptoms (which includes fever,
                                    body
                                    aches, stuffy/runny nose, cough, etc.) upon arrival or at any point during their
                                    stay
                                    will need to self-quarantine in their host home bedroom AND take a PCR test. If the
                                    PCR
                                    test is negative, the student may end their self-quarantine. If the result is
                                    positive,
                                    the student must continue to self-quarantine for at least 5 days or until their
                                    symptoms
                                    subside and a second PCR test is negative.</p>

                                <p>
                                    If a student contracts COVID-19 and their host is not comfortable with them staying
                                    in
                                    their home, the student will check into a local hotel at their own expense for at
                                    least
                                    5 days or until they get a negative PCR test and symptoms subside. Students must
                                    arrive
                                    with KN95 face masks and be prepared to wear them in the host home for the first 5
                                    days
                                    after arrival if the host requests this.</p>

                                <p>
                                    Throughout the student’s stay, local governments will continue to adjust their COVID
                                    policies according to the prevalence of the virus in the community. ISP students are
                                    expected to adhere to current regulations, practice good hygiene, clean and
                                    disinfect
                                    their bedroom and bathroom, and practice social distancing. Intentional disregard
                                    could
                                    result in the students’ dismissal from the program. Students understand that living
                                    in a
                                    host home comes with risk and that ISP cannot guarantee nor control whether a
                                    student
                                    will contract COVID-19 from any members of the host home. The student assumes all
                                    liability for any injury, loss, damage, accident, delay, or expense resulting from
                                    contracting COVID-19 during their stay.</p>


                                <p>
                                    Student certifies to having read the Terms and Conditions and agrees to be bound
                                    hereto.
                                    Each party warrants that it has full power and authority to enter into and perform
                                    under
                                    this Agreement and that the person signing this Agreement on behalf of such party
                                    has
                                    been duly authorized and empowered to execute this Agreement. Student and Parent
                                    either
                                    comprehend English and/or have had an interpreter to explain this document and its
                                    contents in its entirety. In witness whereof, the parties hereto have caused this
                                    Agreement to be executed. Student and Parent acknowledge that student possesses the
                                    maturity and psychological readiness necessary for an overseas immersion
                                    program.</p>

                                <p>
                                    For Parents with applicants under 18:</p>

                                <p>
                                    I acknowledge that my child is under the age of eighteen, and that I, not the host
                                    family, nor ISP will be held responsible for our child’s actions while he/she lives
                                    in
                                    the United States. I agree to pay the full amount for any and all damages in the
                                    homestay for which my child is responsible, regardless of whether the damages were
                                    accidental. I agree to hold harmless and release all liabilities of ISP, and the
                                    host
                                    family chosen for my child, including all claims against ISP and the host family for
                                    any
                                    injury, loss, damages, accident, delay or expense resulting from participation in
                                    the
                                    homestay program. I hereby acknowledge, accept, and agree to the above named terms
                                    and
                                    conditions.)</p>
                            </div>
                            <h6>By clicking "Agree" below, I state that I understand and agree to the terms and
                                conditions.</h6>


                            <h6>Student: I verify that the information on this form is true and correct to the best of
                                my
                                knowledge. Furthermore, I authorize my host family and/or ISP to act my representative
                                to
                                authorize emergency medical/dental treatment for me.</h6>


                            <h6>Parent (if student is under 18): I authorize my child’s host family and/or ISP to act as
                                my
                                representative to authorize emergency medical/dental treatment for my child. I
                                understand
                                that neither ISP nor my child’s host family has legal responsibility for the actions of
                                my
                                child while in the ISP program. I remain solely responsible for the care, guardianship,
                                and
                                actions of my child.</h6>

                            <h6 class="pay-method"><!-- <i class="fa-solid fa-credit-card"></i> -->
                                Agreement<span>*</span>
                            </h6>
                            <div class="payment-ckbx three">

                                <label>
                                    <input type="radio" value="yes" checked="checked" name="agree" required>
                                    <span class="checkmark">Agree</span>
                                </label>


                            </div>
                            @error('agree')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <h3>STUDENT:</h3>

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Electronic Signature<span>*</span></label><br>
                                <input type="text" name="student_electronic_signature_2" required>
                            </div>
                            @error('student_electronic_signature_2')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-calendar-days"></i>Date<span>*</span></label><br>
                                <input type="date" name="student_electronic_signature_date_2" required>
                            </div>
                            @error('student_electronic_signature_date_2')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror

                            <h3>PARENT:</h3>

                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-user"></i>Electronic Signature></label><br>
                                <input type="text" name="parent_electronic_signature_1">
                            </div>
                            @error('parent_electronic_signature_1')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="input-flds refundable-payment">
                                <label><i class="fa-solid fa-calendar-days"></i>Date</label><br>
                                <input type="date" name="parent_electronic_signature_date_1">
                            </div>
                            @error('parent_electronic_signature_date_1')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                            @enderror
                            <div class="student-req">
                                <h4>STUDENT PHOTOGRAPHS:</h4>
                                {{--                        <h5>After you submit the information above by clicking the "Submit" button,</h5>--}}
                                {{--                        <h6>1) Fill out the Name and Email fields below,</h6>--}}
                                {{--                        <h6>1) Use the "Select Files" button to select a photo image file on your computer,</h6>--}}
                                {{--                        <h6>2) Click the "Upload" button below to submit the image.</h6>--}}
                                {{--                        <h6>3) The bar in the gray box will change to green and say "Upload Completed" if your upload is successful.</h6>--}}
                                <form>
                                    <div class="input-flds refundable-payment">
                                        <label><i class="fa-solid fa-user"></i>Student Name</label><br>
                                        <input type="text" name="student_name_3">
                                    </div>
                                    @error('student_name_3')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div class="input-flds refundable-payment">
                                        <label><i class="fa-solid fa-envelope"></i>Student Email</label><br>
                                        <input type="email" name="student_email_2">
                                    </div>
                                    @error('student_email_2')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                    <div class="form-submit">

                                        <input type="file" id="myFile" name="student_photographs[]" multiple>
                                        {{--                                <input type="submit">--}}

                                    </div>
                                    @error('student_photographs')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </form>
                            </div>

                            <h3 class="submit">Submit the information in the application form by clicking the "Submit"
                                button below:</h3>
                            <p class="submitp">It might take a few minutes to process your information before you: 1)
                                see a
                                confirmation message in your web browser, and 2) receive a confirmation email.</p>

                            <p class="admin">PLEASE CHECK YOUR SPAM FOLDER IF YOU DO NOT HEAR FROM ISP WITHIN 1 BUSINESS
                                DAY
                                OF APPLYING AND EMAIL <a href="">ADMIN@ISPHOMESTAYS.COM</a> FOR ANY QUESTIONS.</p>
                            <button class="payment">Submit</button>
                            <hr class="payment">
                        </div>

                    </div>
{{--                    <div class="form_style">--}}
{{--                        <h3> Payment Detail</h3>--}}
{{--                        <!--<h4 class="red">Required information is marked with a red * symbol.</h4>-->--}}
{{--                        <!--<h3 class="method">My method of payment is:</h3>-->--}}
{{--                        <h6 class="pay-method"><i class="fa-solid fa-money-bill-1"></i>Payment Method <span>*</span>--}}
{{--                        </h6>--}}
{{--                        <div class="payment-ckbx">--}}

{{--                            <label>--}}
{{--                                <input type="radio" checked="checked" value="Credit Card" name="payment_method">--}}
{{--                                <span class="checkmark">Credit Card</span>--}}
{{--                            </label>--}}
{{--                            <label>--}}
{{--                                <input type="radio" value="Check/Money Order" name="payment_method">--}}
{{--                                <span class="checkmark">Check/Money Order</span>--}}
{{--                            </label>--}}
{{--                            <label>--}}
{{--                                <input type="radio" value="Invoice send to Agent" name="payment_method">--}}
{{--                                <span class="checkmark">Invoice send to Agent</span>--}}
{{--                            </label>--}}
{{--                        </div>--}}

{{--                        @error('payment_method')--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            {{ $message }}--}}
{{--                        </div>--}}
{{--                        @enderror--}}

{{--                        <div class="pay-plan">--}}
{{--                            <h6>If you plan to pay by:</h6>--}}
{{--                            <h5>Credit Card - Remain on this page.</h5>--}}
{{--                            <span><a href="">Check or Money Order, click here.</a></span>--}}
{{--                            <span><a href="">Invoice sent to Agent, click here.</a></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div> <!-- main -->
            </form>
        </div>
    </section>
    {{--    @push('js')--}}
    {{--        <script>--}}
    {{--            $(document).ready(function () {--}}
    {{--                let state_url = '{{route('get_country_state')}}';--}}
    {{--                let country_data = {"data": '{{$data}}',"data2": '{{$data2}}'};--}}
    {{--                let states = AjaxRequest_get(state_url, country_data);--}}
    {{--            });--}}
    {{--        </script>--}}
    {{--    @endpush--}}
@endsection
