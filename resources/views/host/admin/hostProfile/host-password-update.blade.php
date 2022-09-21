@extends('host.admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
       
        <div class="main_bg inp-main">
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="host">
                    <h4>Change Password</h4>
                </div>
            </div>
        </div>
            <form action="{{ route('hd_password_update_process') }}" method="post">
                @csrf
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="admin_1 mother_1">
                        <div class="col-md-12">
                            
                            <label class="form-label">Old Password<span>*</span></label>
                            <input type="password" placeholder="Enter password" name="old_password">                                
                           @error('old_password')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                          <div class="col-md-12">
                            <label class="form-label">New password<span>*</span></label>
                            <input type="password" placeholder="Enter new password" name="new_password"">                                
                           @error('new_password')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label">Confirm password<span>*</span></label>
                            <input type="password" placeholder="Confirm password" name="confirm_password" ">                                
                           @error('confirm_password')
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
