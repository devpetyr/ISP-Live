@extends('admin.layouts.main')
@section('content')
    @push('css')
        <style>
            .table-bordered > :not(caption) > * > * {
                border-width: 0 1px;
                width: 50%;
            }
        </style>
    @endpush

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg">
            <h4 style="color: #000">Student Application Details</h4> <br>


            <!-- Modal -->
            <div class="Modal_main">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Notes</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <form action="{{ route('admin_student_application_notes',$user_id) }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="Modal_style">
                                        <!-- Textarea 8 rows height -->
                                        <div class="form-outline">
                                            <!--<label class="form-label" for="textAreaExample2">Message</label>-->
                                            <textarea class="form-control" id="textAreaExample2" rows="8" name="notes">{{$Saf_BasicInfo && $Saf_BasicInfo->notes  ? $Saf_BasicInfo->notes : "" }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
                                    <button type="submit" class="button-save">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--modal end-->
            <div class="row m-t-30">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-10">
                            <h5>Student Details</h5>
                        </div>
                        <div class="col-2">
                            <div class="blue-icon">
                                <h5>Notes</h5><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i
                                            class="fa-regular fa-note-sticky"></i></a>

                            </div>
                        </div>
                    </div>
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <form action="{{ route('admin_saf_submit_1',$user_id) }}" id="Form-Section1" method="POST"
                              enctype="multipart/form-data">
                            @csrf

                            <table class="table table-bordered table-data3">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                            <tr>--}}
                                {{--                                <td>Payment Method</td>--}}
                                {{--                                <td>{{$application->payment_method}}</td>--}}
                                {{--                            </tr>--}}
                                {{--                    STUDENT DETAILS START--}}

                                <tr>
                                    <td>Program</td>
                                    <td>
                                        <div class="payment-ckbx">
                                            <label>
                                                <input type="radio"
                                                       {{$Saf_BasicInfo && $Saf_BasicInfo->program == "College Student" ? "checked=checked" : "" }}
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>
                                        <div class="input-flds">
                                            <input class="form1" type="text" name="first_name"
                                                   value="{{$Saf_BasicInfo ? $Saf_BasicInfo->first_name : ""}}"
                                                   required>

                                            @error('first_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <div class="input-flds">
                                            <input class="form1" type="text" name="last_name"
                                                   value="{{$Saf_BasicInfo ? $Saf_BasicInfo->last_name : ""}}" required>

                                            @error('last_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>
                                        <div class="input-flds">
                                            <input type="date" name="dob" class="saf-fordate"
                                                   value="{{$Saf_BasicInfo ? $Saf_BasicInfo->dob : ""}}" required>

                                            @error('dob')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Age</td>
                                    <td>
                                        <div class="input-flds">
                                            <input type="number" name="age" maxlength="3"
                                                   value="{{$Saf_BasicInfo ? $Saf_BasicInfo->age : ""}}" required>
                                            @error('age')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <div class="payment-ckbx two">

                                            <label>
                                                <input type="radio" value="Male"
                                                       {{$Saf_BasicInfo && $Saf_BasicInfo->gender == "Male" ? "checked=checked" : "" }}
                                                       name="gender">
                                                <span class="checkmark">Male</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="Female"
                                                       name="gender" {{$Saf_BasicInfo && $Saf_BasicInfo->gender == "Female" ? "checked=checked" : "" }}>
                                                <span class="checkmark">Female</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="Other"
                                                       name="gender" {{$Saf_BasicInfo && $Saf_BasicInfo->gender == "Other" ? "checked=checked" : "" }}>
                                                <span class="checkmark">Other</span>
                                            </label>


                                            @error('gender')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Country of Permanent Residence</td>
                                    <td>
                                        <div class="input-flds before">

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Passport Number</td>
                                    <td>
                                        <div class="input-flds">
                                            <input type="text" name="passport_number" maxlength="100"
                                                   value="{{$Saf_BasicInfo ? $Saf_BasicInfo->passport_number : ""}}"
                                                   required>

                                            @error('passport_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Expiration Date</td>
                                    <td>
                                        <div class="input-flds">
                                            <input type="date" name="passport_exp" class="saf-fordate"
                                                   value="{{$Saf_BasicInfo ? $Saf_BasicInfo->passport_exp : ""}}"
                                                   required>

                                            @error('passport_exp')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Profile Photo</td>
                                    <td>
                                        <div class="form-submit">
                                            <input type="file" id="myFile" name="student_profile_photo">

                                            @error('student_profile_photo')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <br>
                                        @if($Saf_BasicInfo && $Saf_BasicInfo->student_profile_photo)
                                            <img class="bottom_img"
                                                 src="{{ asset('student/application/'.$Saf_BasicInfo->student_profile_photo) }}">
                                        @endif

                                    </td>
                                </tr>

                                {{--                    STUDENT DETAILS END--}}
                                </tbody>
                            </table>
                            <div class="saf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>
                        <form action="{{ route('admin_saf_submit_2_1',$user_id) }}" id="Form-Section2-1" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <h5 class="saf-main-heading">Student Details</h5>
                            <table class="table table-bordered table-data3">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                    Student’s Details START--}}

                                <tr>
                                    <td>Address</td>
                                    <td>
                                        <div class="input-flds">
                                            <input type="text" name="student_address"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->student_address : ""}}"
                                                   required>

                                            @error('student_address')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td>
                                        <div class="input-flds before">
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Zip Code</td>
                                    <td>
                                        <div class="input-flds">
                                            <input type="number" name="student_address_zip_code"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->student_address_zip_code : ""}}"
                                                   required>

                                            @error('student_address_zip_code')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                {{--                    Student’s Details END--}}
                                </tbody>
                            </table>
                            {{--                            <h5>Father’s Details</h5>--}}
                            <table class="table table-bordered table-data3">

                                <tbody>
                                {{--                    Father’s Details START--}}
                                <h7 class="saf-table-heading">Father’s Details</h7>

                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <div class="input-flds">
                                            <input type="text" name="father_name"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->father_name : ""}}"
                                                   required>

                                            @error('father_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="tel" name="father_phone"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->father_phone : ""}}"
                                                   required>

                                            @error('father_phone')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="email" name="father_email"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->father_email : ""}}"
                                                   required>

                                            @error('father_email')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                {{--                    Father’s Details END--}}
                                </tbody>
                            </table>

                            <table class="table table-bordered table-data3">

                                <tbody>
                                {{--                    Mother’s Details START--}}
                                <h7 class="saf-table-heading">Mother’s Details</h7>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="mother_name"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->mother_name : ""}}"
                                                   required>

                                            @error('mother_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="tel" name="mother_phone"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->mother_phone : ""}}"
                                                   required>

                                            @error('mother_phone')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="email" name="mother_email"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->mother_email : ""}}"
                                                   required>

                                            @error('mother_email')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                {{--                    Mother’s Details END--}}
                                </tbody>
                            </table>
                            <table class="table table-bordered table-data3">
                                <tbody>
                                {{--                    Phone Number START--}}
                                <h7 class="saf-table-heading">Phone Number</h7>
                                <tr>
                                    <td>Phone Number</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="student_contact_phone_number"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_phone_number : ""}}"
                                                   required>

                                            @error('student_contact_phone_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="student_contact_email"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_email : ""}}"
                                                   required>

                                            @error('student_contact_email')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>WeChat</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="student_contact_wechat_number"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_wechat_number : ""}}"
                                                   required>

                                            @error('student_contact_wechat_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <td>Line</td>
                                <td>
                                    <div class="input-flds">

                                        <input type="text" name="student_contact_line_number"
                                               value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_line_number : ""}}"
                                               required>

                                        @error('student_contact_line_number')
                                        <div class="saf_msg">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </td>
                                </tr>
                                <td>WhatsApp</td>
                                <td>
                                    <div class="input-flds">

                                        <input type="text" name="student_contact_whatsApp_number"
                                               value="{{$SafStudentInfo ? $SafStudentInfo->student_contact_whatsApp_number : ""}}"
                                               required>

                                        @error('student_contact_whatsApp_number')
                                        <div class="saf_msg">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </td>
                                </tr>
                                {{--                    Phone Number END--}}
                                </tbody>
                            </table>
                            <table class="table table-bordered table-data3">

                                <tbody>
                                {{--                    EMERGENCY START--}}
                                <h7 class="saf-table-heading">Emergency Contact</h7>
                                <tr>
                                    <td>Name</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="emergency_contact_name"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->emergency_contact_name : ""}}"
                                                   required>

                                            @error('emergency_contact_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Relationship to Student</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="emergency_contact_relation"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->emergency_contact_relation : ""}}"
                                                   required>

                                            @error('emergency_contact_relation')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cell Phone with Country Code/td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="emergency_contact_phone_number"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->emergency_contact_phone_number : ""}}">

                                            @error('emergency_contact_phone_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="emergency_contact_email"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->emergency_contact_email : ""}}"
                                                   required>

                                            @error('emergency_contact_email')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                {{--                    EMERGENCY END--}}
                                </tbody>
                            </table>
                            <div class="saf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>
                        <form action="{{ route('admin_saf_submit_2_2',$user_id) }}" id="Form-Section2-2" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <h5 class="saf-main-heading">School Details</h5>
                            <table class="table table-bordered table-data3">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                    SCHOOL START--}}
                                <tr>
                                    <td>Name of School</td>
                                    <td>
                                        <div class="input-flds before">

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>School Name Not In List</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="school_name_not_in_list"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->school_name_not_in_list : ""}}">

                                            @error('school_name_not_in_list')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>School City</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="school_city"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->school_city : ""}}"
                                                   required>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>School State</td>
                                    <td>
                                        <div class="input-flds before">

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Major/Field of Study</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="major_field_of_study"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->major_field_of_study : ""}}">

                                            @error('major_field_of_study')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                {{--                    School END--}}
                                </tbody>
                            </table>
                            <table class="table table-bordered table-data3">

                                <tbody>
                                {{--                    SCHOOL START--}}
                                <tr>
                                    <td>Length of homestay</td>
                                    <td>
                                        <div class="payment-ckbx ">
                                            <label>
                                                <input type="radio" value="2 Months"
                                                       {{$SafStudentInfo && $SafStudentInfo->length_of_stay == "2 Months" ? "checked=checked" : "" }}
                                                       name="length_of_stay">
                                                <span class="checkmark">2 Months</span>
                                            </label>


                                            <label>
                                                <input type="radio" value="3 Months"
                                                       {{$SafStudentInfo && $SafStudentInfo->length_of_stay == "3 Months" ? "checked=checked" : "" }}
                                                       name="length_of_stay">
                                                <span class="checkmark">3 Months</span>
                                            </label>


                                            <label>
                                                <input type="radio" value="Other"
                                                       {{$SafStudentInfo && $SafStudentInfo->length_of_stay == "Other" ? "checked=checked" : "" }}
                                                       name="length_of_stay">
                                                <span class="checkmark">Other (please contact ISP)</span>
                                            </label>
                                        </div>
                                        @error('length_of_stay')
                                        <div class="saf_msg">
                                            {{ $message }}
                                        </div>
                                        @enderror</td>
                                </tr>
                                <tr>
                                    <td>Contract Start Date</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="date" name="contract_start_date" class="saf-fordate"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->contract_start_date : ""}}">

                                            @error('contract_start_date')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contract End Date</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="date" name="contract_end_date" class="saf-fordate"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->contract_end_date : ""}}">

                                            @error('contract_end_date')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>What is your English level?</td>
                                    <td>
                                        <div class="payment-ckbx three">

                                            <label>
                                                <input type="radio" value="high"
                                                       {{$SafStudentInfo && $SafStudentInfo->what_is_your_english_level == "high" ? "checked=checked" : "" }}
                                                       name="what_is_your_english_level">
                                                <span class="checkmark">High</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="medium"
                                                       {{$SafStudentInfo && $SafStudentInfo->what_is_your_english_level == "medium" ? "checked=checked" : "" }}
                                                       name="what_is_your_english_level">
                                                <span class="checkmark">Medium</span>
                                            </label>
                                            <input type="radio" value="low"
                                                   {{$SafStudentInfo && $SafStudentInfo->what_is_your_english_level == "low" ? "checked=checked" : "" }}
                                                   name="what_is_your_english_level">
                                            <span class="checkmark">Low</span>


                                            @error('what_is_your_english_level')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Do you accept children under 8 years old in your host home?</td>
                                    <td>
                                        <div class="payment-ckbx three">
                                            <label>
                                                <input type="radio" value="yes"
                                                       {{$SafStudentInfo && $SafStudentInfo->do_you_accept_children_under_8_years_in_host_home == "yes" ? "checked=checked" : "" }}
                                                       name="do_you_accept_children_under_8_years_in_host_home">
                                                <span class="checkmark">Yes</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="no"
                                                       {{$SafStudentInfo && $SafStudentInfo->do_you_accept_children_under_8_years_in_host_home == "no" ? "checked=checked" : "" }}
                                                       name="do_you_accept_children_under_8_years_in_host_home">
                                                <span class="checkmark">No</span>
                                            </label>
                                            <input type="radio" value="does not matter"
                                                   {{$SafStudentInfo && $SafStudentInfo->do_you_accept_children_under_8_years_in_host_home == "does not matter" ? "checked=checked" : "" }}
                                                   name="do_you_accept_children_under_8_years_in_host_home">
                                            <span class="checkmark">Does not matter</span>


                                            @error('do_you_accept_children_under_8_years_in_host_home')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Are you allergic to animals?</td>
                                    <td>
                                        <div class="payment-ckbx three">

                                            <label>
                                                <input type="radio" value="yes"
                                                       {{$SafStudentInfo && $SafStudentInfo->are_you_allergic_to_animals == "yes" ? "checked=checked" : "" }}
                                                       name="are_you_allergic_to_animals">
                                                <span class="checkmark">Yes</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="no"
                                                       {{$SafStudentInfo && $SafStudentInfo->are_you_allergic_to_animals == "no" ? "checked=checked" : "" }}
                                                       name="are_you_allergic_to_animals">
                                                <span class="checkmark">No</span>
                                            </label>


                                            @error('are_you_allergic_to_animals')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>If yes, please indicate which</td>
                                    <td>
                                        <div class="input-flds db">

                                            <input type="text" name="if_yes_please_indicate_animal"
                                                   value="{{$SafStudentInfo ? $SafStudentInfo->if_yes_please_indicate_animal : ""}}">
                                            <label>(80% of American households have pets. You will restrict your
                                                host family
                                                placement options by saying no to animals)</label>

                                            @error('if_yes_please_indicate_animal')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <td>Please select a meal option</td>
                                <td>
                                    <div class="payment-ckbx  three">

                                        <label>
                                            <input type="radio" value="2 meals per day"
                                                   {{$SafStudentInfo && $SafStudentInfo->meal_option == "2 meals per day" ? "checked=checked" : "" }}
                                                   name="meal_option">
                                            <span class="checkmark">2 meals per day (breakfast & dinner)</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="No meals"
                                                   {{$SafStudentInfo && $SafStudentInfo->meal_option == "No meals" ? "checked=checked" : "" }}
                                                   name="meal_option">
                                            <span class="checkmark">No meals</span>
                                        </label>


                                        @error('meal_option')
                                        <div class="saf_msg">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </td>
                                </tr>
                                <tr>
                                    <td>Do you smoke?</td>
                                    <td>
                                        <div class="payment-ckbx three">

                                            <label>
                                                <input type="radio" value="yes"
                                                       {{$SafStudentInfo && $SafStudentInfo->do_you_smoke == "yes" ? "checked=checked" : "" }}
                                                       name="do_you_smoke">
                                                <span class="checkmark">Yes</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="no"
                                                       {{$SafStudentInfo && $SafStudentInfo->do_you_smoke == "no" ? "checked=checked" : "" }}
                                                       name="do_you_smoke">
                                                <span class="checkmark">No</span>
                                            </label>


                                            @error('do_you_smoke')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Will you have a car?</td>
                                    <td>
                                        <div class="payment-ckbx three">

                                            <label>
                                                <input type="radio" value="yes"
                                                       {{$SafStudentInfo && $SafStudentInfo->will_you_have_a_car == "yes" ? "checked=checked" : "" }}
                                                       name="will_you_have_a_car">
                                                <span class="checkmark">Yes</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="no"
                                                       {{$SafStudentInfo && $SafStudentInfo->will_you_have_a_car == "no" ? "checked=checked" : "" }}
                                                       name="will_you_have_a_car">
                                                <span class="checkmark">No</span>
                                            </label>


                                            @error('will_you_have_a_car')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                {{--                    School END--}}
                                </tbody>
                            </table>
                            <div class="saf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>
                        <form action="{{ route('admin_saf_submit_3',$user_id) }}" id="Form-Section3" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <h5 class="saf-main-heading">Agent Information</h5>
                            <table class="table table-bordered table-data3">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                    Airport Start--}}
                                <tr>
                                    <td>Using Agent</td>
                                    <td>
                                        <div class="payment-ckbx">
                                            <label>
                                                <input type="radio" value="no"
                                                       {{$Saf_BasicInfo && $Saf_BasicInfo->using_agent == "no" ? "checked=checked" : "" }}
                                                       name="using_agent">
                                                <span class="checkmark">No</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="yes"
                                                       {{$Saf_BasicInfo && $Saf_BasicInfo->using_agent == "yes" ? "checked=checked" : ""  }}
                                                       name="using_agent">
                                                <span class="checkmark">Yes</span>
                                            </label>

                                            @error('using_agent')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Agency Name</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="agency_name"
                                                   value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agency_name : "" }}">

                                            @error('agency_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name of Agency Contact Person</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="agency_contact_person"
                                                   value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agency_contact_person : "" }}">

                                            @error('agency_contact_person')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Agent Phone Number</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="agent_phone_number"
                                                   value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_phone_number : "" }}">

                                            @error('agent_phone_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Agent's Email</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="agent_email"
                                                   value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_email : "" }}">

                                            @error('agent_email')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Agent's WeChat</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="agent_wechat_number"
                                                   value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_wechat_number : "" }}">

                                            @error('agent_wechat_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Agent's Line</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="agent_line_number"
                                                   value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_line_number : "" }}">

                                            @error('agent_line_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Agent's Whatsapp</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="agent_whatsapp_number"
                                                   value="{{$Saf_BasicInfo && $SafAgentInfo && $Saf_BasicInfo->using_agent == "yes" ? $SafAgentInfo->agent_whatsapp_number : "" }}">

                                            @error('agent_whatsapp_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                {{--                            <tr>--}}
                                {{--                                <td>Agent's Line</td>--}}
                                {{--                                <td>{{date("h : i a", strtotime($application->getStdAppFormAirportDetails->airport_arrival_time))}}</td>--}}
                                {{--                            </tr>--}}
                                {{--                    Airport End--}}
                                </tbody>
                            </table>
                            <div class="saf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>
                        <form action="{{ route('admin_saf_submit_4',$user_id) }}" id="Form-Section4" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <h5 class="saf-main-heading">Other Details</h5>
                            <table class="table table-bordered table-data3">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                    OTHER DETAILS START --}}


                                <tr>
                                    <td>Specific Needs</td>
                                    <td>
                                        <div class="input-flds">

                                        <textarea placeholder="Enter Text Here ..." name="specific_needs"
                                                  required>{{$SafOtherInfo ? $SafOtherInfo->specific_needs : ""}}</textarea>

                                            @error('specific_needs')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hobbies and interests</td>
                                    <td>
                                        <div class="input-flds">

                                        <textarea placeholder="Enter Text Here ..."
                                                  name="hobbies_and_interest"
                                                  required>{{$SafOtherInfo ? $SafOtherInfo->hobbies_and_interest : ""}}</textarea>

                                            @error('hobbies_and_interest')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Describe your personality</td>
                                    <td>
                                        <div class="input-flds">

                                        <textarea placeholder="Enter Text Here ..."
                                                  name="describe_your_personality"
                                                  required>{{$SafOtherInfo ? $SafOtherInfo->describe_your_personality : ""}}</textarea>

                                            @error('describe_your_personality')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Describe your family</td>
                                    <td>
                                        <div class="input-flds">

                                        <textarea placeholder="Enter Text Here ..."
                                                  name="describe_your_family"
                                                  required>{{$SafOtherInfo ? $SafOtherInfo->describe_your_family : ""}}</textarea>

                                            @error('describe_your_family')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Describe your travel experience</td>
                                    <td>
                                        <div class="input-flds">

                                        <textarea placeholder="Enter Text Here ..."
                                                  name="describe_your_travel_experience"
                                                  required>{{$SafOtherInfo ? $SafOtherInfo->describe_your_travel_experience : ""}}</textarea>

                                            @error('describe_your_travel_experience')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Write a greeting to your host</td>
                                    <td>
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
                                    </td>
                                </tr>
                                {{--                    OTHER DETAILS END--}}
                                </tbody>
                            </table>

                            <div class="saf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>
                        <form action="{{ route('admin_saf_submit_5',$user_id) }}" id="Form-Section5" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <h5 class="saf-main-heading">Medical Information</h5>
                            <table class="table table-bordered table-data3">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                    Medical Information START--}}
                                <tr>
                                    <td>Good In Health</td>
                                    <td>
                                        <div class="payment-ckbx three">

                                            <label>
                                                <input type="radio" value="yes"
                                                       {{$SafMedicalInfo && $SafMedicalInfo->are_you_in_good_health == "yes" ? "checked=checked" : "" }}
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>If no, please explain</td>
                                    <td>
                                        <div class="input-flds db">

                                            <input type="text" name="if_no_please_explain_health"
                                                   value="{{$SafMedicalInfo ? $SafMedicalInfo->if_no_please_explain_health : ""}}">

                                            @error('if_no_please_explain_health')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Do you
                                        have
                                        allergies?
                                    </td>
                                    <td>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>If yes, please
                                        explain
                                    </td>
                                    <td>
                                        <div class="input-flds db">

                                            <input type="text" name="if_yes_please_explain_medical_allergies"
                                                   value="{{$SafMedicalInfo ? $SafMedicalInfo->if_yes_please_explain_medical_allergies : ""}}">

                                            @error('if_yes_please_explain_medical_allergies')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Do you
                                        take
                                        medication?
                                    </td>
                                    <td>
                                        <div class="col-md-6">

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>If yes, please
                                        explain
                                    </td>
                                    <td>
                                        <div class="input-flds db">

                                            <input type="text" name="if_yes_please_explain_medication"
                                                   value="{{$SafMedicalInfo ? $SafMedicalInfo->if_yes_please_explain_medication : ""}}">

                                            @error('if_yes_please_explain_medication')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Under the care of a psychiatrist</td>
                                    <td>
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
                                        @enderror</td>
                                </tr>
                                <tr>
                                    <td>If yes, please
                                        explain
                                    </td>
                                    <td>
                                        <div class="input-flds db">

                                            <input type="text"
                                                   name="if_yes_please_explain_reason_of_psychiatrist"
                                                   value="{{$SafMedicalInfo ? $SafMedicalInfo->if_yes_please_explain_reason_of_psychiatrist : ""}}">

                                            @error('if_yes_please_explain_reason_of_psychiatrist')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Have you received a WHO approved COVID Vaccine and booster shot?</td>
                                    <td>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Photo of vaccine card</td>
                                    <td>
                                        <div class="form-submit">
                                            <input type="file" id="myFile" name="vaccine_card_photograph">

                                            @error('vaccine_card_photograph')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <br>
                                        @if($SafMedicalInfo && $SafMedicalInfo->vaccine_card_photograph)
                                            <img class="bottom_img"
                                                 src="{{ asset('student/application/'.$SafMedicalInfo->vaccine_card_photograph) }}">
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Vaccine Name</td>
                                    <td>
                                        <div class="input-flds db">

                                            <input type="text" name="vaccine_name"
                                                   value="{{$SafMedicalInfo ? $SafMedicalInfo->vaccine_name : ""}}">

                                            @error('vaccine_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date(s) Administered</td>
                                    <td>
                                        <div class="input-flds db dts">

                                            <input type="date" name="dates_administered" class="saf-fordate"
                                                   value="{{$SafMedicalInfo ? $SafMedicalInfo->dates_administered : ""}}"
                                                   required>

                                            @error('dates_administered')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                {{--                    Medical Information END--}}
                                </tbody>
                            </table>
                            <div class="saf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>
                        <form action="{{ route('admin_saf_submit_6',$user_id) }}" id="Form-Section6" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <h5 class="saf-main-heading">Airport Confirmation</h5>
                            <table class="table table-bordered table-data3">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>

                                {{--                        <tr>--}}
                                {{--                            <td>Payment Method </td>--}}
                                {{--                            <td>{{$application->payment_method}}</td>--}}
                                {{--                        </tr>--}}

                                <tr>
                                    <td>Request for Airport Pickup Driver</td>
                                    <td>
                                        <div class="drivers">

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>If Driver Required, Number of People needing Driver</td>
                                    <td>
                                        <div class="input-flds before">

                                            <input type="text" name="number_of_people_needing_driver"
                                                   value="{{$SafAirportInfo && $SafAirportInfo->request_for_airport_pickup_driver == "yes" ? $SafAirportInfo->number_of_people_needing_driver : "" }}">
                                            @error('airport_arrival_number_of_people')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered table-data3">

                                <tbody>
                                <h7 class="saf-table-heading">Airport Arrival Flight Information</h7>
                                {{--                        <tr>--}}
                                {{--                            <td>Payment Method </td>--}}
                                {{--                            <td>{{$application->payment_method}}</td>--}}
                                {{--                        </tr>--}}

                                <tr>
                                    <td>Arrival Date</td>
                                    <td>
                                        <div class="input-flds airport">

                                            <input type="date" name="arrival_date" class="saf-fordate"
                                                   value="{{$SafAirportInfo ? $SafAirportInfo->arrival_date : ""}}">

                                            @error('arrival_date')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Airport Arrival Time</td>
                                    <td>
                                        <div class="input-flds before">

                                            <input type="time" name="airport_arrival_time" class="saf-fortime"
                                                   value="{{$SafAirportInfo ? $SafAirportInfo->airport_arrival_time : ""}}">

                                            @error('airport_arrival_time')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Flight type</td>
                                    <td>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Arrival Airport</td>
                                    <td>
                                        <div class="input-flds airport before">

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Arrival Airline</td>
                                    <td>
                                        <div class="input-flds before">

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Arrival Flight Number</td>
                                    <td>
                                        <div class="input-flds airport">

                                            <input type="text" name="arrival_flight_number"
                                                   value="{{$SafAirportInfo ? $SafAirportInfo->arrival_flight_number : ""}}">

                                            @error('arrival_flight_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="saf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>
                        <form action="{{ route('admin_saf_submit_7',$user_id) }}" id="Form-Section7" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <h5 class="saf-main-heading">Payment Form</h5>
                            <table class="table table-bordered table-data3">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                {{--                    FEE DETAILS START--}}

                                <tr>
                                    <td>Payment</td>
                                    <td>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Student First Name</td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="text" name="card_holder_student_first_name"
                                                   value="{{$Saf_BasicInfo ? $Saf_BasicInfo->first_name : ""}}"
                                                   required>
                                            {{--                                <input type="text" name="student_name_1" required>--}}

                                            @error('card_holder_student_first_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Student Last
                                        Name
                                    </td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="text" name="card_holder_student_last_name"
                                                   value="{{$Saf_BasicInfo ? $Saf_BasicInfo->last_name : ""}}" required>

                                            @error('card_holder_student_last_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cardholder First
                                        Name
                                    </td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="text" name="cardholder_first_name"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_first_name : ""}}"
                                                   required>

                                            @error('cardholder_first_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cardholder Last Name</td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="text" name="cardholder_last_name"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_last_name : ""}}"
                                                   required>

                                            @error('cardholder_last_name')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cardholder
                                        Address
                                    </td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="text" name="cardholder_address"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_address : ""}}">
                                            {{--                                <input type="text" name="cardholder_street_address_line_1">--}}

                                            @error('cardholder_address')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cardholder City</td>
                                    <td>
                                        <div class="input-flds">

                                            <input type="text" name="cardholder_city"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_city : ""}}"
                                                   required>

                                            @error('cardholder_city')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cardholder State</td>
                                    <td>
                                        <div class="input-flds refundable-payment before">

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cardholder Postal / Zip Code</td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="text" name="cardholder_zipcode"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_zipcode : ""}}"
                                                   required>

                                            @error('cardholder_zipcode')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cardholder Country</td>
                                    <td>
                                        <div class="input-flds refundable-payment before">

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cardholder Email</td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="text" name="cardholder_email"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->cardholder_email : ""}}"
                                                   required>

                                            @error('cardholder_email')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Credit Card</td>
                                    <td>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Name on Card</td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="text" name="name_on_card"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->name_on_card : ""}}"
                                                   required>

                                            @error('name_on_card')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Credit Card Number</td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="number" name="card_number"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->card_number : ""}}"
                                                   required>

                                            @error('card_number')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CVC</td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="number" name="card_cvc"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->card_cvc : ""}}"
                                                   required>

                                            @error('card_cvc')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Expiration Date</td>
                                    <td>
                                        <div class="input-flds refundable-payment">

                                            <input type="date" name="card_exp_date" class="saf-fordate"
                                                   min="{{"carbon date required"}}"
                                                   max="{{"carbon date required"}}"
                                                   value="{{$SafPaymentInfo ? $SafPaymentInfo->card_exp_date : ""}}"
                                                   required>

                                            @error('card_exp_date')
                                            <div class="saf_msg">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Placement Fee</td>
                                    <td>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Late Fee</td>
                                    <td>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>$100
                                        Deposit
                                    </td>
                                    <td>

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
                                    </td>
                                </tr>
                                <tr>
                                    <td>Airport Pickup Fee</td>
                                    <td>
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
                                    </td>
                                </tr>
                                {{--                    FEE DETAILS END--}}
                                </tbody>
                            </table>
                            <div class="saf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>
                        <form action="{{route('admin_student_application_status',[$user_id])}}"
                              method="post" id="form-application-status">
                            @csrf
                            <h5 class="saf-main-heading">Student Application Status</h5>
                            <table class="table table-bordered table-data3">
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="status_radio">
                                    <td>Student Application Status</td>
                                    <td>
                                        <div class="payment-ckbx">
                                            <label>
                                                <input type="radio" value="1"
                                                       {{$Saf_BasicInfo->application_status == 1 ? "checked" : ""}} name="application_status">
                                                <span class="checkmark">Approved</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="2"
                                                       {{$Saf_BasicInfo->application_status == 2 ? "checked" : ""}} name="application_status">
                                                <span class="checkmark">Rejected</span>
                                            </label>
                                            @error('application_status')
                                            <div class="alert alert-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Payment Amount</td>
                                    <td>
                                        <div class="input-flds">
                                            <input type="text" name="amount" placeholder="$$$"
                                                   {{$Saf_fees && $Saf_BasicInfo->application_status == 1 ? "disabled" : ""}} value="{{$Saf_fees && $Saf_BasicInfo->application_status == 1 ? $Saf_fees->fees : ""}}">

                                            @error('amount')
                                            <div class="alert alert-danger">
                                                {{$message}}
                                            </div>
                                            @enderror</div>
                                    </td>
                                    {{--                                    @if($Saf_BasicInfo->application_status === 0)--}}
                                    {{--                                        <td>--}}
                                    {{--                                            <button type="submit" class="btn btn-primary">Submit</button>--}}
                                    {{--                                        </td>--}}
                                    {{--                                    @endif--}}
                                </tr>
                                </tbody>
                            </table>
                            @if($Saf_BasicInfo->application_status === 0)
                                <div class="saf_form_btn">
                                    <button class="save">Submit</button>
                                </div>
                            @endif
                        </form>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
@endsection


