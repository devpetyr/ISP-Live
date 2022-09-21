@extends('admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
        
        <div class="main_bg inp-main">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="host">
                    <h4>Airlines</h4>
                    <ul>
                        <li><a href="{{ route('admin_airport_pickup_airlines')}}">Dashboard</a></li>
                        <li>Airlines</li>
                    </ul>
                </div>
            </div>
        </div>
            <form action="{{ route('admin_manage_airlines_process',[$id->id ?? '']) }}" method="post">
                @csrf
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="admin_1 mother_1">
                        <div class="col-md-12">
                            
                            <label class="form-label">Airlines Name<span>*</span></label>
                            <input type="text" placeholder="Enter airlines name" name="airline_name" value="{{ $id->name ?? '' }}">                                
                           @error('airline_name')
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
                        <button class="save">Save</button>
                    </div>
                </div>
            </div>
             </form>
        </div>

    </div>
@endsection
