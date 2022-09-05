@extends('admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
        
        <div class="main_bg inp-main">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="host">
                    <h4>Agent</h4>
                    <ul>
                        <li><a href="{{ route('admin_agents_details')}}">Dashboard</a></li>
                        <li>Agent</li>
                    </ul>
                </div>
            </div>
        </div>
            <form action="{{ route('admin_agent_details_process',[$id->id ?? '']) }}" method="post">
                @csrf
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="admin_1 mother_1">
                        <div class="col-md-12">
                            
                            <label class="form-label">First Name<span>*</span></label>
                            <input type="text" placeholder="Enter agent first name" name="first_name" value="{{ $id->first_name ?? '' }}">                                
                           @error('first_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                          <div class="col-md-12">
                            <label class="form-label">Last Name<span>*</span></label>
                            <input type="text" placeholder="Enter agent last name" name="last_name" value="{{ $id->last_name ?? '' }}">                                
                           @error('last_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                        <div class="col-md-12">
                            <label class="form-label">Email<span>*</span></label>
                            <input type="email" placeholder="Enter agent email" name="email" value="{{ $id->email ?? '' }}">                                
                           @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror

                        </div>
                        
                           <div class="col-md-12">
                            <label class="form-label">Phone number<span>*</span></label>
                            <input type="text" placeholder="Enter agent phone number" name="number" value="{{ $id->phone_number ?? '' }}">                                
                           @error('number')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                            @enderror

                            </div>
                            
                            <div class="col-md-12">
                                    <label for="region" class="control-label mb-1">Agency<span
                                            class="text-danger">*</span></label>
                                    
                                    <select class="form-control" name="agency_id">
                                        <option hidden disabled selected value="">Please select agency</option>
                                        @foreach($agencies as $agency)
                                        <option {{ $agency->id == $id->agency_id ? 'selected' : ''}} value="{{$agency->id}}">{{$agency->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('agency_id')
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
                        <button class="save">SUBMIT</button>
                    </div>
                </div>
            </div>
             </form>
        </div>

    </div>
@endsection
