@extends('host.admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
       
        <div class="main_bg inp-main">
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="host">
                    <h4>Update Profile</h4>
                    
                </div>
            </div>
        </div>
            <form action="{{ route('hd_profile_process')}}" method="post">
                @csrf
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="admin_1 mother_1">
                        <div class="col-md-12">
                            
                            <label class="form-label">First Name<span>*</span></label>
                            <input type="text" name="first_name" value="{{ Auth::user()->first_name }}">                                
                           @error('first_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                          <div class="col-md-12">
                            <label class="form-label">Last Name<span>*</span></label>
                            <input type="text" placeholder="Enter driver last name" name="last_name" value="{{ Auth::user()->last_name }}">                                
                           @error('last_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label">Email<span>*</span></label>
                            <input type="email" name="email" disabled value="{{ Auth::user()->email }}">                                
                           @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="my_button ">
                        <button class="save">Update</button>
                    </div>
                </div>
            </div>
             </form>
        </div>

    </div>
@endsection
