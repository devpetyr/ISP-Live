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
            <h4 style="color: #000">Host Application Details</h4> <br>
            <div class="row m-t-30">
                <div class="col-md-12">

                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">


                        <form action="{{ route('admin_update_host_application',[$hostBasic->user_id]) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <table class="table table-bordered table-data3">
                                <h5>Host Details</h5>
                                <thead>
                                <tr>
                                    <th>Field</th>
                                    <th>Value</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>
                                    <td>First Name</td>
                                    <td>
                                        <input type="text" name="host_first_name"
                                               value="{{ $hostBasic->first_name ?? ''}}">
                                        @error('host_first_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <input type="text" name="host_last_name"
                                               value="{{ $hostBasic->last_name ?? ''}}">
                                        @error('host_last_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="email" name="host_email" value="{{ $hostBasic->email ?? ''}}">
                                        @error('host_email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cell Phone</td>
                                    <td><input type="tel" name="host_cell_phone"
                                               value="{{ $hostBasic->cell_phone ?? ''}}">
                                        @error('host_cell_phone')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td><input type="date" name="host_dob" class="haf-fordate"
                                               value="{{ $hostBasic->dob ?? ''}}">
                                        @error('host_dob')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>

                                <tr>
                                    <td>Occupation</td>
                                    <td><input type="text" name="host_occupation"
                                               value="{{ $hostBasic->occupation ?? ''}}">
                                        @error('host_occupation')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Employer</td>
                                    <td><input type="text" name="host_employer" value="{{ $hostBasic->employer ?? ''}}">
                                        @error('host_employer')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Work Phone</td>
                                    <td><input type="tel" name="host_work_phone"
                                               value="{{ $hostBasic->work_phone ?? ''}}">
                                        @error('host_work_phone')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Address</td>
                                    <td><input type="text" name="host_home_address"
                                               value="{{ $hostBasic->home_address ?? ''}}">
                                        @error('host_home_address')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Image</td>
                                    <td>
                                        <div class="form-submit">
                                            <input type="file" id="myFile" name="host_profile_photo">

                                            @error('host_profile_photo')
                                            <div class="alert alert-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror

                                        </div>
                                        <br>
                                        <img class="bottom_img"
                                             src="{{ asset('Host-Image/'.$hostBasic->profile_photo) }}">
                                    </td>
                                </tr>
                                <!--<tr>-->
                                <!--    <td></td>-->
                                <!--    <td></td>-->
                                <!--</tr>-->

                                </tbody>

                            </table>
                            <div class="haf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>


                        <form action="{{ route('admin_update_partner_application',[$hostPartner->user_id]) }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf

                            <table class="table table-bordered table-data3" id="partner_application">
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
                                    <td>
                                        <input type="text" name="partner_first_name"
                                               value="{{ $hostPartner->first_name ?? ''}}">
                                        @error('partner_first_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <input type="text" name="partner_last_name"
                                               value="{{ $hostPartner->last_name ?? ''}}">
                                        @error('partner_last_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input type="email" name="partner_email" value="{{ $hostPartner->email ?? ''}}">
                                        @error('partner_email')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cell Phone</td>
                                    <td>
                                        <input type="tel" name="partner_cell_phone"
                                               value="{{ $hostPartner->cell_phone ?? ''}}">
                                        @error('partner_cell_phone')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>
                                        <input type="date" name="partner_dob" class="haf-fordate"
                                               value="{{ $hostPartner->dob ?? ''}}">
                                        @error('partner_dob')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>
                                        <input type="text" name="partner_occupation"
                                               value="{{ $hostPartner->occupation ?? ''}}">
                                        @error('partner_occupation')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Employer</td>
                                    <td>
                                        <input type="text" name="partner_employer"
                                               value="{{ $hostPartner->employer ?? ''}}">
                                        @error('partner_employer')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Work Phone</td>
                                    <td>
                                        <input type="tel" name="partner_work_phone"
                                               value="{{ $hostPartner->work_phone ?? ''}}">
                                        @error('partner_work_phone')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="haf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>

                        <form action="{{ route('admin_update_adult_application',[$hostPartner->user_id]) }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
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
                                    <td>
                                        <input type="text" name="adult1_first_name"
                                               value="{{ $hostAdult->first_name1 ?? ''}}">

                                        @error('adult1_first_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <input type="text" name="adult1_last_name"
                                               value="{{ $hostAdult->last_name1 ?? ''}}">

                                        @error('adult1_last_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Work Phone</td>
                                    <td>
                                        <input type="tel" name="adult1_work_phone"
                                               value="{{ $hostAdult->work_phone1 ?? ''}}">

                                        @error('adult1_work_phone')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Relation</td>
                                    <td>
                                        <input type="text" name="adult1_relation"
                                               value="{{ $hostAdult->relation1 ?? ''}}">

                                        @error('adult1_relation')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>
                                        <input type="text" name="adult1_occupation"
                                               value="{{ $hostAdult->occupation1 ?? ''}}">

                                        @error('adult1_occupation')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Employer</td>
                                    <td>
                                        <input type="text" name="adult1_employer"
                                               value="{{ $hostAdult->employer1 ?? ''}}">

                                        @error('adult1_employer')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="male"
                                                   @if(isset($hostAdult->gender1) AND $hostAdult->gender1 === 'male') checked="checked"
                                                   @endif name="adult1_gender">
                                            <span class="checkmark">Male</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="female"
                                                   @if(isset($hostAdult->gender1) AND $hostAdult->gender1 === 'female') checked="checked"
                                                   @endif  name="adult1_gender">
                                            <span class="checkmark">Female</span>
                                        </label>
                                        @error('adult1_gender')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>Second Adult</th>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>
                                        <input type="text" name="adult2_first_name"
                                               value="{{ $hostAdult->first_name2 ?? ''}}">

                                        @error('adult2_first_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <input type="text" name="adult2_last_name"
                                               value="{{ $hostAdult->last_name2 ?? ''}}">

                                        @error('adult2_last_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Work Phone</td>
                                    <td>
                                        <input type="tel" name="adult2_work_phone"
                                               value="{{ $hostAdult->work_phone2 ?? ''}}">

                                        @error('adult2_work_phone')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Relation</td>
                                    <td>
                                        <input type="text" name="adult2_relation"
                                               value="{{ $hostAdult->relation2 ?? ''}}">

                                        @error('adult2_relation')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Occupation</td>
                                    <td>
                                        <input type="text" name="adult2_occupation"
                                               value="{{ $hostAdult->occupation2 ?? ''}}">

                                        @error('adult2_occupation')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Employer</td>
                                    <td>
                                        <input type="text" name="adult2_employer"
                                               value="{{ $hostAdult->employer2 ?? ''}}">

                                        @error('adult2_employer')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="male"
                                                   @if(isset($hostAdult->gender2) AND $hostAdult->gender2 === 'male') checked="checked"
                                                   @endif name="adult2_gender">
                                            <span class="checkmark">Male</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="female"
                                                   @if(isset($hostAdult->gender2) AND $hostAdult->gender2 === 'female') checked="checked"
                                                   @endif name="adult2_gender">
                                            <span class="checkmark">Female</span>
                                        </label>

                                        @error('adult2_gender')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>


                                </tbody>

                            </table>
                            <div class="haf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>


                        <form action="{{ route('admin_update_child_application',[$hostPartner->user_id]) }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
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
                                    <td>
                                        <input type="text" name="child1_first_name"
                                               value="{{ $hostChild->first_name1 ?? ''}}">

                                        @error('child1_first_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <input type="text" name="child1_last_name"
                                               value="{{ $hostChild->last_name1 ?? ''}}">

                                        @error('child1_last_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>
                                        <input type="date" class="haf-fordate" name="child1_dob"
                                               value="{{ $hostChild->dob1 ?? ''}}">

                                        @error('child1_dob')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="male"
                                                   @if(isset($hostChild->gender1) AND $hostChild->gender1 === 'male') checked="checked"
                                                   @endif name="child1_gender">
                                            <span class="checkmark">Male</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="female"
                                                   @if(isset($hostChild->gender1) AND $hostChild->gender1 === 'female') checked="checked"
                                                   @endif name="child1_gender">
                                            <span class="checkmark">Female</span>
                                        </label>

                                        @error('child1_gender')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>Second Chlid</th>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>
                                        <input type="text" name="child2_first_name"
                                               value="{{ $hostChild->first_name2 ?? ''}}">

                                        @error('child2_first_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <input type="text" name="child2_last_name"
                                               value="{{ $hostChild->last_name2 ?? ''}}">

                                        @error('child2_last_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>
                                        <input type="date" class="haf-fordate" name="child2_dob"
                                               value="{{ $hostChild->dob2 ?? ''}}">

                                        @error('child2_dob')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="male"
                                                   @if(isset($hostChild->gender2) AND $hostChild->gender2 === 'male') checked="checked"
                                                   @endif name="child2_gender">
                                            <span class="checkmark">Male</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="female"
                                                   @if(isset($hostChild->gender2) AND $hostChild->gender2 === 'female') checked="checked"
                                                   @endif name="child2_gender">
                                            <span class="checkmark">Female</span>
                                        </label>

                                        @error('child2_gender')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <th>Third Chlid</th>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>
                                        <input type="text" name="child3_first_name"
                                               value="{{ $hostChild->first_name3 ?? ''}}">

                                        @error('child3_first_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Last Name</td>
                                    <td>
                                        <input type="text" name="child3_last_name"
                                               value="{{ $hostChild->last_name3 ?? ''}}">

                                        @error('child3_last_name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Date of Birth</td>
                                    <td>
                                        <input type="date" class="haf-fordate" name="child3_dob"
                                               value="{{ $hostChild->dob3 ?? ''}}">

                                        @error('child3_dob')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="male"
                                                   @if(isset($hostChild->gender3) AND $hostChild->gender3 === 'male') checked="checked"
                                                   @endif name="child3_gender">
                                            <span class="checkmark">Male</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="female"
                                                   @if(isset($hostChild->gender3) AND $hostChild->gender3 === 'female') checked="checked"
                                                   @endif name="child3_gender">
                                            <span class="checkmark">Female</span>
                                        </label>

                                        @error('child3_gender')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="haf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>


                        <form action="{{ route('admin_update_pets_application',[$hostPartner->user_id]) }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
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
                                    <td>
                                        <label>
                                            <input type="radio" value="yes"
                                                   @if(isset($hostPet->pets_info) AND $hostPet->pets_info === 'yes') checked="checked"
                                                   @endif name="pets_info">
                                            <span class="checkmark">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="no"
                                                   @if(isset($hostPet->pets_info) AND $hostPet->pets_info === 'no') checked="checked"
                                                   @endif name="pets_info">
                                            <span class="checkmark">No</span>
                                        </label>

                                        @error('pets_info')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pet Detail</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="Inside"
                                                   @if(isset($hostPet->pets_info_detail) AND $hostPet->pets_info_detail === 'Inside') checked="checked"
                                                   @endif name="pets_info_detail">
                                            <span class="checkmark">Inside  </span>
                                        </label>
                                        <label>
                                            <input type="radio" value="Outside"
                                                   @if(isset($hostPet->pets_info_detail) AND $hostPet->pets_info_detail === 'Outside') checked="checked"
                                                   @endif name="pets_info_detail">
                                            <span class="checkmark">Outside  </span>
                                        </label>
                                        <label>
                                            <input type="radio" value="Both"
                                                   @if(isset($hostPet->pets_info_detail) AND $hostPet->pets_info_detail === 'Both') checked="checked"
                                                   @endif name="pets_info_detail">
                                            <span class="checkmark">Both  </span>
                                        </label>

                                        @error('pets_info_detail')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <div class="haf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>


                        <form action="{{ route('admin_update_house_school_student_application',[$hostPartner->user_id]) }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
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
                                    <td>
                                        <label>
                                            <input type="radio" value="House"
                                                   @if(isset($hostSchool->home_type) AND $hostSchool->home_type === 'House') checked="checked"
                                                   @endif name="home_type">
                                            <span class="checkmark">House</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="Apartment/Townhome/Condominium"
                                                   @if(isset($hostSchool->home_type) AND $hostSchool->home_type === 'Apartment/Townhome/Condominium') checked="checked"
                                                   @endif name="home_type">
                                            <span class="checkmark">Apartment/Townhome/Condominium  </span>
                                        </label>

                                        @error('home_type')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bedrooms Detail</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="1"
                                                   @if(isset($hostSchool->home_bedrooms_detail) AND $hostSchool->home_bedrooms_detail == 1) checked="checked"
                                                   @endif name="home_bedrooms_detail">
                                            <span class="checkmark">1</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="2"
                                                   @if(isset($hostSchool->home_bedrooms_detail) AND $hostSchool->home_bedrooms_detail == 2) checked="checked"
                                                   @endif name="home_bedrooms_detail">
                                            <span class="checkmark">2</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="3"
                                                   @if(isset($hostSchool->home_bedrooms_detail) AND $hostSchool->home_bedrooms_detail == 3) checked="checked"
                                                   @endif name="home_bedrooms_detail">
                                            <span class="checkmark">3</span>
                                        </label>

                                        @error('home_bedrooms_detail')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Student Gender</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="male_student"
                                                   @if(isset($hostSchool->student_gender) AND $hostSchool->student_gender === 'male_student') checked="checked"
                                                   @endif name="student_gender">
                                            <span class="checkmark">Male Student</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="female_student"
                                                   @if(isset($hostSchool->student_gender) AND $hostSchool->student_gender === 'female_student') checked="checked"
                                                   @endif name="student_gender">
                                            <span class="checkmark">Female Student</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="no_preference"
                                                   @if(isset($hostSchool->student_gender) AND $hostSchool->student_gender === 'no_preference') checked="checked"
                                                   @endif name="student_gender">
                                            <span class="checkmark">No Preference</span>
                                        </label>

                                        @error('student_gender')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Student Meal</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="meals_student"
                                                   @if(isset($hostSchool->student_meal) AND $hostSchool->student_meal === 'meals_student') checked="checked"
                                                   @endif name="student_meal">
                                            <span class="checkmark">Meals Student    </span>
                                        </label>
                                        <label>
                                            <input type="radio" value="no_meals_student"
                                                   @if(isset($hostSchool->student_meal) AND $hostSchool->student_meal === 'no_meals_student') checked="checked"
                                                   @endif name="student_meal">
                                            <span class="checkmark">No Meals Student    </span>
                                        </label>
                                        <label>
                                            <input type="radio" value="no_preference"
                                                   @if(isset($hostSchool->student_meal) AND $hostSchool->student_meal === 'no_preference') checked="checked"
                                                   @endif name="student_meal">
                                            <span class="checkmark">No Preference (please note that most ISP students are on the meal plan)  </span>
                                        </label>

                                        @error('student_meal')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>First School</td>
                                    <td>
                                        <input type="text" name="first_school_detail"
                                               value="{{ $hostSchool->first_school_detail ?? ''}}">

                                        @error('first_school_detail')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Second School</td>
                                    <td>
                                        <input type="text" name="second_school_detail"
                                               value="{{ $hostSchool->second_school_detail ?? ''}}">

                                        @error('second_school_detail')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Third School</td>
                                    <td>
                                        <input type="text" name="third_school_detail"
                                               value="{{ $hostSchool->third_school_detail ?? ''}}">

                                        @error('third_school_detail')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>


                                </tbody>
                            </table>
                            <div class="haf_form_btn">
                                <button class="save">Save</button>
                            </div>
                        </form>


                        <form action="{{ route('admin_update_personal_details_application',[$hostPartner->user_id]) }}"
                              method="POST" enctype="multipart/form-data">
                            @csrf
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
                                    <td>
                                        <label>
                                            <input type="radio" value="yes"
                                                   @if(isset($hostPersonalInformation->anyone_residing_in_the_home) AND $hostPersonalInformation->anyone_residing_in_the_home === 'yes') checked="checked"
                                                   @endif name="anyone_residing_in_the_home">
                                            <span class="checkmark">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="no"
                                                   @if(isset($hostPersonalInformation->anyone_residing_in_the_home) AND $hostPersonalInformation->anyone_residing_in_the_home === 'no') checked="checked"
                                                   @endif name="anyone_residing_in_the_home">
                                            <span class="checkmark">No</span>
                                        </label>


                                        @error('anyone_residing_in_the_home')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Do you agree to have a criminal background check for each person residing in
                                        your home over 18 years of age?
                                    </td>
                                    <td>
                                        <label>
                                            <input type="radio" value="yes"
                                                   @if(isset($hostPersonalInformation->criminal_background_check) AND $hostPersonalInformation->criminal_background_check === 'yes') checked="checked"
                                                   @endif name="criminal_background_check">
                                            <span class="checkmark">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="no"
                                                   @if(isset($hostPersonalInformation->criminal_background_check) AND $hostPersonalInformation->criminal_background_check === 'no') checked="checked"
                                                   @endif name="criminal_background_check">
                                            <span class="checkmark">No</span>
                                        </label>


                                        @error('criminal_background_check')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Does anyone in your home smoke?</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="yes"
                                                   @if(isset($hostPersonalInformation->anyone_in_your_home_smoke) AND $hostPersonalInformation->anyone_in_your_home_smoke === 'yes') checked="checked"
                                                   @endif name="anyone_in_your_home_smoke">
                                            <span class="checkmark">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="no"
                                                   @if(isset($hostPersonalInformation->anyone_in_your_home_smoke) AND $hostPersonalInformation->anyone_in_your_home_smoke === 'no') checked="checked"
                                                   @endif name="anyone_in_your_home_smoke">
                                            <span class="checkmark">No</span>
                                        </label>


                                        @error('anyone_in_your_home_smoke')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Do you have high-speed wireless Internet?</td>
                                    <td>
                                        <label>
                                            <input type="radio" value="yes"
                                                   @if(isset($hostPersonalInformation->high_speed_wireless_Internet) AND $hostPersonalInformation->high_speed_wireless_Internet === 'yes') checked="checked"
                                                   @endif name="high_speed_wireless_Internet">
                                            <span class="checkmark">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="no"
                                                   @if(isset($hostPersonalInformation->high_speed_wireless_Internet) AND $hostPersonalInformation->high_speed_wireless_Internet === 'no') checked="checked"
                                                   @endif name="high_speed_wireless_Internet">
                                            <span class="checkmark">No</span>
                                        </label>


                                        @error('high_speed_wireless_Internet')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </td>
                                </tr>
                                <tr>
                                    <td>Has everyone in the home over 18-years old received a WHO approved COVID Vaccine
                                        and booster shot?
                                    </td>
                                    <td>
                                        <label>
                                            <input type="radio" value="yes"
                                                   @if(isset($hostPersonalInformation->WHO_approved_COVID_Vaccine) AND $hostPersonalInformation->WHO_approved_COVID_Vaccine === 'yes') checked="checked"
                                                   @endif name="WHO_approved_COVID_Vaccine">
                                            <span class="checkmark">Yes</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="no"
                                                   @if(isset($hostPersonalInformation->WHO_approved_COVID_Vaccine) AND $hostPersonalInformation->WHO_approved_COVID_Vaccine === 'no') checked="checked"
                                                   @endif name="WHO_approved_COVID_Vaccine">
                                            <span class="checkmark">No</span>
                                        </label>
                    </div>

                    @error('WHO_approved_COVID_Vaccine')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                    </td>
                    </tr>
                    <tr>
                        <td>Please describe you and your family's interests:</td>
                        <td>
                            <input type="text" name="family_interests"
                                   value="{{ $hostPersonalInformation->family_interests ?? ''}}">

                            @error('family_interests')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>Will you regularly have breakfast food available and prepare dinner for your student? What
                            types of meals are typically prepared in your home and how often?
                        </td>
                        <td>
                            <input type="text" name="breakfast_food_available_and_prepare_dinner"
                                   value="{{ $hostPersonalInformation->breakfast_food_available_and_prepare_dinner ?? '' }}">

                            @error('breakfast_food_available_and_prepare_dinner')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>How will you integrate your student into your daily and weekly activities?</td>
                        <td>
                            <input type="text" name="your_daily_and_weekly_activities"
                                   value="{{ $hostPersonalInformation->your_daily_and_weekly_activities ?? ''}}">

                            @error('your_daily_and_weekly_activities')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </td>
                    </tr>

                    </tbody>
                    </table>

                    <div class="haf_form_btn">
                        <button class="save">Save</button>
                    </div>
                    </form>


                    <form action="{{ route('admin_update_emergency_details_application',[$hostPartner->user_id]) }}"
                          method="POST" enctype="multipart/form-data">
                        @csrf
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
                                <td>
                                    <input type="text" name="emergency_contact_name1"
                                           value="{{ $hostEmergencyContact->name1 ?? ''}}">
                                    @error('emergency_contact_name1')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="email" name="emergency_contact_email1"
                                           value="{{ $hostEmergencyContact->email1 ?? ''}}">
                                    @error('emergency_contact_email1')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>
                                    <input type="tel" name="emergency_contact_number1"
                                           value="{{ $hostEmergencyContact->number1 ?? ''}}">
                                    @error('emergency_contact_number1')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Second Emergency Contact</th>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>
                                    <input type="text" name="emergency_contact_name2"
                                           value="{{ $hostEmergencyContact->name2 ?? ''}}">
                                    @error('emergency_contact_name2')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    <input type="text" name="emergency_contact_email2"
                                           value="{{ $hostEmergencyContact->email2 ?? ''}}">
                                    @error('emergency_contact_email2')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Number</td>
                                <td>
                                    <input type="tel" name="emergency_contact_number2"
                                           value="{{ $hostEmergencyContact->number2 ?? ''}}">
                                    @error('emergency_contact_number2')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </td>
                            </tr>


                            </tbody>
                        </table>
                        <div class="haf_form_btn">
                            <button class="save">Save</button>
                        </div>
                    </form>


                    <form action="{{route('admin_host_application_status',[$hostBasic->user_id])}}" id="form-application-status" method="post">
                        <table class="table table-bordered table-data3">
                            <h5 class="ahaf-heading">Host Application Status</h5>
                            <thead>
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>

                            @csrf
                            <tr class="status_radio">
                                <td>Host Application Status</td>
                                <td>
                                    <div class="payment-ckbx">

                                        <label>
                                            <input type="radio" value="1"
                                                   {{$hostBasic->application_status == 1 ? "checked" : ""}} name="application_status">
                                            <span class="checkmark">Approved</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="2"
                                                   {{$hostBasic->application_status == 2 ? "checked" : ""}} name="application_status">
                                            <span class="checkmark">Rejected</span>
                                        </label>
                                        @error('application_status')
                                        <div class="text-danger">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </td>
                            </tr>


                            </tbody>
                        </table>

                        @if($hostBasic->application_status === 0)
                            <div class="haf_form_btn">
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
