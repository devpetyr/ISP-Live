@extends('admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="host">
                    <h4>Driver</h4>
                    <ul>
                        <li><a href="index.html">Dashboard</a></li>
                        <li>Driver</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_bg">
            <form action="{{ route('admin_driver_details_process',[$id->id ?? '']) }}" method="post">
                @csrf
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="admin_1 mother_1">
                        <div class="col-md-12">
                            
                            <label class="form-label">First Name<span>*</span></label>
                            <input type="text" placeholder="Enter driver first name" name="first_name" value="{{ $id->first_name ?? '' }}">                                
                           @error('first_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                          <div class="col-md-12">
                            <label class="form-label">Last Name<span>*</span></label>
                            <input type="text" placeholder="Enter driver last name" name="last_name" value="{{ $id->last_name ?? '' }}">                                
                           @error('last_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label">Email<span>*</span></label>
                            <input type="email" placeholder="Enter driver email" name="email" value="{{ $id->email ?? '' }}">                                
                           @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                        <!--   <div class="col-md-12">-->
                        <!--    <label class="form-label">Password<span>*</span></label>-->
                        <!--    <input type="email" placeholder="Enter driver password" name="password" value="{{ $id->email ?? '' }}">                                -->
                        <!--   @error('email')-->
                        <!--            <div class="alert alert-danger">-->
                        <!--                {{ $message }}-->
                        <!--            </div>-->
                        <!--            @enderror-->

                        <!--</div>-->
                        
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="my_button ">
                        <button class="save">Save</button>
                    </div>
                </div>
            </div>
             </form>
        </div>

    </div>
@endsection
