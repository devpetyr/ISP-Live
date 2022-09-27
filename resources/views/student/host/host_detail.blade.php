@extends('student.layouts.main')
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
            <h4 style="color: #000">Host Details</h4> <br>
            
                <!-- Modal -->
    
    <!--modal end-->
            <div class="row m-t-30">
                <div class="col-md-12">
                    
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


                                <tr>
                                    <td>First Name</td>
                                    <td>{{ $hostBasic->first_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>{{ $hostBasic->last_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $hostBasic->email ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Cell Phone</td>
                                    <td>{{ $hostBasic->cell_phone ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>{{ $hostBasic->dob ?? ''}}</td>
                                </tr>

                                <tr>
                                    <td>Occupation</td>
                                    <td>{{ $hostBasic->occupation ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Employer</td>
                                    <td>{{ $hostBasic->employer ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Work Phone</td>
                                    <td>{{ $hostBasic->work_phone ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td>{{ $hostBasic->home_address ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td>
                                        <img class="bottom_img" src="{{ asset('Host-Image/'.$hostBasic->profile_photo) }}">
                                    </td>
                                </tr>

                                </tbody>

                            </table>
                           
                            <table class="table table-bordered table-data3" >
                                <h5 class="ahaf-heading">Partner Details</h5>
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>

                                <tbody>


                                <tr>

                                    <td>First Name</td>
                                    <td>{{ $hostPartner->first_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>{{ $hostPartner->last_name ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $hostPartner->email ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Cell Phone</td>
                                    <td>{{ $hostPartner->cell_phone ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>{{ $hostPartner->dob ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>{{ $hostPartner->occupation ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Employer</td>
                                    <td>{{ $hostPartner->employer ?? ''}}td>
                                </tr>
                                <tr>
                                    <td>Work Phone</td>
                                    <td>{{ $hostPartner->work_phone ?? ''}}</td>
                                </tr>

                                </tbody>
                            </table>
                            
                            <table class="table table-bordered table-data3">
                                <h5 class="ahaf-heading">Adult Details</h5>
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>First Adult</th>
                                </tr>

                                <tr>
                                    <td>First Name</td>
                                    <td>{{ $hostAdult->first_name1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>{{ $hostAdult->last_name1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Work Phone</td>
                                    <td>{{ $hostAdult->work_phone1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Relation</td>
                                    <td>{{ $hostAdult->relation1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>{{ $hostAdult->occupation1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Employer</td>
                                    <td>{{ $hostAdult->employer1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{ $hostAdult->gender1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Second Adult</th>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>{{ $hostAdult->first_name2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>{{ $hostAdult->last_name2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Work Phone</td>
                                    <td>{{ $hostAdult->work_phone2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Relation</td>
                                    <td>{{ $hostAdult->relation2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>{{ $hostAdult->occupation2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Employer</td>
                                    <td>{{ $hostAdult->employer2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{ $hostAdult->gender2 ?? ''}}</td>
                                </tr>


                                </tbody>

                            </table>
                            
                            <table class="table table-bordered table-data3">
                                <h5 class="ahaf-heading">Childs Details</h5>
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>First Chlid</th>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>{{ $hostChild->first_name1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>{{ $hostChild->last_name1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>{{ $hostChild->dob1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{ $hostChild->gender1 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Second Chlid</th>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>{{ $hostChild->first_name2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>{{ $hostChild->last_name2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>{{ $hostChild->dob2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{ $hostChild->dob2 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <th>Third Chlid</th>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>{{ $hostChild->first_name3 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>{{ $hostChild->last_name3 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>{{ $hostChild->dob3 ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>{{ $hostChild->gender3 ?? ''}}</td>
                                </tr>

                                </tbody>
                            </table>
                           
                            <table class="table table-bordered table-data3">
                                <h5 class="ahaf-heading">Pets Details</h5>
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>
                                    <td>Pet</td>
                                    <td>{{ $hostPet->pets_info ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Pet Detail</td>
                                    <td>{{ $hostPet->pets_info_detail ?? ''}}</td>
                                </tr>

                                </tbody>
                            </table>
                            

                        
                            <table class="table table-bordered table-data3">
                                <h5 class="ahaf-heading">School Details</h5>
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td>Home Type</td>
                                    <td>{{ $hostSchool->home_type ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Bedrooms Detail</td>
                                    <td>{{ $hostSchool->home_bedrooms_detail ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Student Gender</td>
                                    <td>{{ $hostSchool->student_gender ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Student Meal</td>
                                    <td>{{ $hostSchool->student_meal ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>First School</td>
                                    <td>{{ $hostSchool->first_school_detail ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Second School</td>
                                    <td>{{ $hostSchool->second_school_detail ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Third School</td>
                                    <td>{{ $hostSchool->third_school_detail ?? ''}}</td>
                                </tr>


                                </tbody>
                            </table>
                            


                       
                            <table class="table table-bordered table-data3">
                                <h5 class="ahaf-heading">Personal Details</h5>
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>
                                    <td>Has anyone residing in the home been convicted of a felony?</td>
                                    <td>{{ $hostPersonalInformation->anyone_residing_in_the_home ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Do you agree to have a criminal background check for each person residing in
                                        your home over 18 years of age?
                                    </td>
                                    <td>{{ $hostPersonalInformation->criminal_background_check ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Does anyone in your home smoke?</td>
                                    <td>{{ $hostPersonalInformation->anyone_in_your_home_smoke ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Do you have high-speed wireless Internet?</td>
                                    <td>{{ $hostPersonalInformation->high_speed_wireless_Internet ?? ''}}</td>
                                </tr>
                                <tr>
                                    <td>Has everyone in the home over 18-years old received a WHO approved COVID Vaccine
                                        and booster shot?
                                    </td>
                                    <td>{{ $hostPersonalInformation->WHO_approved_COVID_Vaccine ?? ''}}</td>
                    </tr>
                    <tr>
                        <td>Please describe you and your family's interests:</td>
                        <td>{{ $hostPersonalInformation->family_interests ?? ''}}</td>
                    </tr>
                    <tr>
                        <td>Will you regularly have breakfast food available and prepare dinner for your student? What
                            types of meals are typically prepared in your home and how often?
                        </td>
                        <td>{{ $hostPersonalInformation->breakfast_food_available_and_prepare_dinner ?? '' }}</td>
                    </tr>
                    <tr>
                        <td>How will you integrate your student into your daily and weekly activities?</td>
                        <td>{{ $hostPersonalInformation->your_daily_and_weekly_activities ?? ''}}</td>
                    </tr>

                    </tbody>
                    </table>

                   

                   
                        <table class="table table-bordered table-data3">
                            <h5 class="ahaf-heading">Emergency Details</h5>
                            <thead>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <th>First Emergency Contact</th>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $hostEmergencyContact->name1 ?? ''}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $hostEmergencyContact->email1 ?? ''}}</td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>{{ $hostEmergencyContact->number1 ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Second Emergency Contact</th>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{ $hostEmergencyContact->name2 ?? ''}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $hostEmergencyContact->email2 ?? ''}}</td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>{{ $hostEmergencyContact->number2 ?? ''}}</td>
                            </tr>


                            </tbody>
                        </table>
                       


                  

                </div>
                <!-- END DATA TABLE-->
            </div>
        </div>
    </div>
    </div>
@endsection
