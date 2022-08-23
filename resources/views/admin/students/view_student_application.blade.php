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
            <div class="row m-t-30">
                <div class="col-md-12">
                    <h5>Student Details</h5>
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
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
                                <td>First Name</td>
                                <td>{{$application->getStdAppFormStudentDetails->first_name}}</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>{{$application->getStdAppFormStudentDetails->last_name}}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>{{$application->getStdAppFormStudentDetails->dob}}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{$application->getStdAppFormStudentDetails->gender == "Other" ? "-" : $application->getStdAppFormStudentDetails->gender}}</td>
                            </tr>
                            <tr>
                                <td>Other Gender</td>
                                <td>{{$application->getStdAppFormStudentDetails->gender == "Other" ? $application->getStdAppFormStudentDetails->other_gender : "-"}}</td>
                            </tr>
                            <tr>
                                <td>Country of Permanent Residence</td>
                                <td>{{$application->getStdAppFormStudentDetails->country_of_permanent_residence}}</td>
                            </tr>
                            <tr>
                                <td>Address 1</td>
                                <td>{{$application->getStdAppFormStudentDetails->address1}}</td>
                            </tr>
                            <tr>
                                <td>Address 2</td>
                                <td>{{$application->getStdAppFormStudentDetails->address2}}</td>
                            </tr>
                            <tr>
                                <td>Address 3</td>
                                <td>{{$application->getStdAppFormStudentDetails->address3}}</td>
                            </tr>
                            <tr>
                                <td>City</td>
                                <td>{{$application->getStdAppFormStudentDetails->city}}</td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td>{{$application->getStdAppFormStudentDetails->state}}</td>
                            </tr>
                            <tr>
                                <td>Zip Code</td>
                                <td>{{$application->getStdAppFormStudentDetails->zip_code}}</td>
                            </tr>
                            <tr>
                                <td>Country</td>
                                <td>{{$application->getStdAppFormStudentDetails->country}}</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>{{$application->getStdAppFormStudentDetails->phone_number}}</td>
                            </tr>
                            <tr>
                                <td>Wechat Whatsapp</td>
                                <td>{{$application->getStdAppFormStudentDetails->wechat_whatsapp}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$application->getStdAppFormStudentDetails->student_email_1}}</td>
                            </tr>
                            {{--                    STUDENT DETAILS END--}}
                            </tbody>
                        </table>
                        <h5>Emergency Contact Details</h5>
                        <table class="table table-bordered table-data3">
                            <thead>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                    EMERGENCY START--}}

                            <tr>
                                <td>First Name</td>
                                <td>{{$application->getStdAppFormEmergencyDetails->emergency_contact_first_name}}</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>{{$application->getStdAppFormEmergencyDetails->emergency_contact_last_name}}</td>
                            </tr>
                            <tr>
                                <td>Phone Number</td>
                                <td>{{$application->getStdAppFormEmergencyDetails->emergency_contact_phone_number}}</td>
                            </tr>
                            <tr>
                                <td>Relation</td>
                                <td>{{$application->getStdAppFormEmergencyDetails->emergency_contact_relation}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{$application->getStdAppFormEmergencyDetails->emergency_contact_email}}</td>
                            </tr>
                            {{--                    EMERGENCY END--}}
                            </tbody>
                        </table>
                        <h5>School Details</h5>
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
                                <td>School You Attend</td>
                                <td>{{$application->getStdAppFormSchoolDetails->school_you_attend}}</td>
                            </tr>
                            <tr>
                                <td>School Name Not In List</td>
                                <td>{{$application->getStdAppFormSchoolDetails->school_name_not_in_list}}</td>
                            </tr>
                            <tr>
                                <td>School City</td>
                                <td>{{$application->getStdAppFormSchoolDetails->school_city}}</td>
                            </tr>
                            <tr>
                                <td>School State</td>
                                <td>{{$application->getStdAppFormSchoolDetails->school_state}}</td>
                            </tr>
                            <tr>
                                <td>Length Of Stay</td>
                                <td>{{$application->getStdAppFormSchoolDetails->length_of_stay}}</td>
                            </tr>
                            {{--                    School END--}}
                            </tbody>
                        </table>
                        <h5>Airport Airval Details</h5>
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
                                <td>Arrival Date</td>
                                <td>{{$application->getStdAppFormAirportDetails->arrival_date}}</td>
                            </tr>
                            <tr>
                                <td>Arrival Airport</td>
                                <td>{{$application->getStdAppFormAirportDetails->arrival_airport}}</td>
                            </tr>
                            <tr>
                                <td>Arrival Flight Number</td>
                                <td>{{$application->getStdAppFormAirportDetails->arrival_flight_number}}</td>
                            </tr>
                            <tr>
                                <td>Arrival Flight Type</td>
                                <td>{{$application->getStdAppFormAirportDetails->flight_type}}</td>
                            </tr>
                            <tr>
                                <td>Arrival Airline</td>
                                <td>{{$application->getStdAppFormAirportDetails->arrival_airline}}</td>
                            </tr>
                            <tr>
                                <td>Airport Arrival Time</td>
                                <td>{{date("h : i a", strtotime($application->getStdAppFormAirportDetails->airport_arrival_time))}}</td>
                            </tr>
                            {{--                    Airport End--}}
                            </tbody>
                        </table>
                        <h5>Cardholder Details</h5>
                        <table class="table table-bordered table-data3">
                            <thead>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                    CARDHOLDER START--}}
                            <tr>
                                <td>Student Name</td>
                                <td>{{$application->student_name_1}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder First Name</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_first_name}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Last Name</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_last_name}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Email</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_email}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Street Address Line 1</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_street_address_line_1}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Street Address Line 2</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_street_address_line_2}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Street Address Line 3</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_street_address_line_3}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder City</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_city}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder State</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_state}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Zip Code</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_zipcode}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Country</td>
                                <td>{{$application->getStdAppFormCardholderDetails->cardholder_country}}</td>
                            </tr>
                            {{--                    CARDHOLDER END--}}
                            </tbody>
                        </table>
                        <h5>Electronic Signature Details</h5>
                        <table class="table table-bordered table-data3">
                            <thead>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                    STUDETN ELECTRONIC SIGNATURE START--}}
                            <tr>
                                <td>Student Electronic Signature</td>
                                <td>{{$application->getStdAppFormElectronicDetails->student_electronic_signature_1}}</td>
                            </tr>
                            <tr>
                                <td>Student Name</td>
                                <td>{{$application->getStdAppFormElectronicDetails->student_name_2}}</td>
                            </tr>
                            <tr>
                                <td>Student Electronic Signature Date</td>
                                <td>{{$application->getStdAppFormElectronicDetails->student_electronic_signature_date_1}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Electronic Signature</td>
                                <td>{{$application->getStdAppFormElectronicDetails->cardholder_electronic_signature}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Name</td>
                                <td>{{$application->getStdAppFormElectronicDetails->cardholder_name}}</td>
                            </tr>
                            <tr>
                                <td>Cardholder Date</td>
                                <td>{{$application->getStdAppFormElectronicDetails->cardholder_date}}</td>
                            </tr>
                            <tr>
                                <td>Student Electronic Signature</td>
                                <td>{{$application->getStdAppFormElectronicDetails->student_electronic_signature_2}}</td>
                            </tr>
                            <tr>
                                <td>Student Electronic Signature Date</td>
                                <td>{{$application->getStdAppFormElectronicDetails->student_electronic_signature_date_2}}</td>
                            </tr>
                            <tr>
                                <td>Parent Electronic Signature</td>
                                <td>{{$application->getStdAppFormElectronicDetails->parent_electronic_signature_1}}</td>
                            </tr>
                            <tr>
                                <td>Parent Electronic Signature Date</td>
                                <td>{{$application->getStdAppFormElectronicDetails->parent_electronic_signature_date_1}}</td>
                            </tr>
                            {{--                    STUDETN ELECTRONIC SIGNATURE END--}}
                            </tbody>
                        </table>
                        <h5>Other Details</h5>
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
                                <td>Date I need to move to my Homestay</td>
                                <td>{{$application->getStdAppFormOtherDetails->date_that_i_need_to_move_to_my_homestay}}</td>
                            </tr>
                            <tr>
                                <td>What is your English level?</td>
                                <td>{{$application->getStdAppFormOtherDetails->what_is_your_english_level}}</td>
                            </tr>
                            <tr>
                                <td>Do you smoke?</td>
                                <td>{{$application->getStdAppFormOtherDetails->do_you_smoke}}</td>
                            </tr>
                            <tr>
                                <td>Meal option</td>
                                <td>{{$application->getStdAppFormOtherDetails->meal_option}}</td>
                            </tr>
                            <tr>
                                <td>Food Restrictions</td>
                                <td>{{$application->getStdAppFormOtherDetails->food_restrictions}}</td>
                            </tr>
                            <tr>
                                <td>Do you accept children under 8 years old in your host home?</td>
                                <td>{{$application->getStdAppFormOtherDetails->do_you_accept_children_under_8_years_in_host_home}}</td>
                            </tr>
                            <tr>
                                <td>Are you allergic to animals?</td>
                                <td>{{$application->getStdAppFormOtherDetails->are_you_allergic_to_animals}}</td>
                            </tr>
                            <tr>
                                <td>If yes, please indicate which</td>
                                <td>{{$application->getStdAppFormOtherDetails->if_yes_please_indicate_animal}}</td>
                            </tr>
                            <tr>
                                <td>Will you have a car?</td>
                                <td>{{$application->getStdAppFormOtherDetails->will_you_have_a_car}}</td>
                            </tr>
                            <tr>
                                <td>Major / Field of Study</td>
                                <td>{{$application->getStdAppFormOtherDetails->major_field_of_study}}</td>
                            </tr>
                            <tr>
                                <td>Specific Needs</td>
                                <td>{{$application->getStdAppFormOtherDetails->specific_needs}}</td>
                            </tr>
                            <tr>
                                <td>Hobbies and interests</td>
                                <td>{{$application->getStdAppFormOtherDetails->hobbies_and_interest}}</td>
                            </tr>
                            <tr>
                                <td>Describe your family</td>
                                <td>{{$application->getStdAppFormOtherDetails->describe_your_family}}</td>
                            </tr>
                            <tr>
                                <td>Have you traveled abroad before?</td>
                                <td>{{$application->getStdAppFormOtherDetails->have_you_traveled_abroad_before}}</td>
                            </tr>
                            <tr>
                                <td>Medical Information</td>
                                <td>{{$application->getStdAppFormOtherDetails->medical_information}}</td>
                            </tr>
                            {{--                    OTHER DETAILS END--}}
                            </tbody>
                        </table>
                        <h5>Fee Details</h5>
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
                                <td>Placement Fee</td>
                                <td>{{$application->getStdAppFormFeeDetails->placement_fee}}</td>
                            </tr>
                            <tr>
                                <td>Monthly Service Fee (Southern California only)</td>
                                <td>{{$application->getStdAppFormFeeDetails->monthly_service_fee}}</td>
                            </tr>
                            <tr>
                                <td>Airport Pickup Fee</td>
                                <td>{{$application->getStdAppFormFeeDetails->airport_pickup_fee}}</td>
                            </tr>
                            <tr>
                                <td>Deposit Fee</td>
                                <td>{{$application->getStdAppFormFeeDetails->deposit_fee}}</td>
                            </tr>
                            <tr>
                                <td>Late Fee</td>
                                <td>{{$application->getStdAppFormFeeDetails->late_fee}}</td>
                            </tr>
                            {{--                    FEE DETAILS END--}}
                            </tbody>
                        </table>
                        <h5>Request For Airport Driver Details</h5>
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
                                <td>{{$application->request_for_airport_pickup_driver}}</td>
                            </tr>
                            <tr>
                                <td>If Driver Required, Number of People needing Driver</td>
                                <td>{{$application->number_of_people_needing_driver}}</td>
                            </tr>
                            </tbody>
                        </table>
                        <h5>Student Photographs Details</h5>
                        <table class="table table-bordered table-data3">
                            <thead>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Student Name</td>
                                <td>{{$application->student_name_3}}</td>
                            </tr>
                            <tr>
                                <td>Student Email</td>
                                <td>{{$application->student_email_2}}</td>
                            </tr>
                            @if($application->getStdAppFormImage !== null)
                                @foreach($application->getStdAppFormImage as $key =>$images)
                                    <tr>
                                        <td>Image {{$key+1}}</td>
                                        <td><img class="bottom_img"
                                                 src="{{ asset('student/application/'.$images->name) }}"></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <h5>Student Application Status</h5>
                        <table class="table table-bordered table-data3">
                            <thead>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <form action="{{route('admin_student_application_status',[$application->id])}}"
                                  method="post">
                                @csrf
                                <tr class="status_radio">
                                    <td>Student Application Status</td>
                                    <td>
                                        <div class="payment-ckbx">
                                            <label>
                                                <input type="radio" value="1"
                                                       {{$application->status == 1 ? "checked" : ""}} name="application_status">
                                                <span class="checkmark">Approved</span>
                                            </label>
                                            <label>
                                                <input type="radio" value="2"
                                                       {{$application->status == 2 ? "checked" : ""}} name="application_status">
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
                                    <td>
                                        <label>Payment Amount :
                                            $$$<input type="text" name="amount" placeholder="1000">
                                        </label>
                                        @error('amount')
                                        <div class="alert alert-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </td>
                                    @if($application->status === 0)
                                        <td>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </td>
                                    @endif
                                </tr>
                            </form>
                            </tbody>
                        </table>

                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
@endsection
