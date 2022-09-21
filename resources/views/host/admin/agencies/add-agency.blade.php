@extends('admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
       
        <div class="main_bg inp-main">
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="host">
                    <h4>Agencies</h4>
                    <ul>
                        <li><a href="{{ route('admin_agencies_details')}}">Dashboard</a></li>
                        <li>Agencies</li>
                    </ul>
                </div>
            </div>
        </div>
            <form action="{{ route('admin_agency_details_process',[$id->id ?? '']) }}" method="post">
                @csrf
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="admin_1 mother_1">
                        <div class="col-md-12">
                            
                            <label class="form-label">Name<span>*</span></label>
                            <input type="text" placeholder="Enter agency name" name="name" value="{{ $id->name ?? '' }}">                                
                           @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                          <div class="col-md-12">
                            <label class="form-label">City<span>*</span></label>
                            <input type="text" placeholder="Enter agency city" name="city" value="{{ $id->city ?? '' }}">                                
                           @error('city')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label">State<span>*</span></label>
                            <input type="text" placeholder="Enter agency state" name="state" value="{{ $id->state ?? '' }}">                                
                           @error('state')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label">Country<span>*</span></label>
                            <input type="text" placeholder="Ente agency country" name="country" value="{{ $id->country ?? '' }}">                                
                           @error('country')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                            @enderror

                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Address<span>*</span></label>
                            <input type="text" placeholder="Enter agency address" name="address" value="{{ $id->address ?? '' }}">                                
                           @error('address')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                            @enderror

                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Contact<span>*</span></label>
                            <input type="number" placeholder="Enter contact " name="contact" value="{{ $id->contact ?? '' }}">                                
                           @error('contact')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                            @enderror

                        </div>
                             <div class="col-md-12">
                                    <div class="admin-status-radio">
                                        <label for="status" class="control-label mb-1">Status<span
                                                    class="text-danger">*</span></label>
                                            <label class="radio-status-label">
                                                <input type="radio"  class="radio-status-input" value="1" {{ ($id->status == 1) ? 'checked' : ''}} name="status">Active
                                            </label>
                                            <label class="radio-status-label">
                                            <input type="radio" class="radio-status-input" value="0"  {{ ($id->status == 0) ? 'checked' : ''}} name="status">Inactive
                                             </label>
                                    </div>
                                </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="my_button ">
                        <button class="save">Submit</button>
                    </div>
                </div>
            </div>
             </form>
        </div>

    </div>
@endsection
