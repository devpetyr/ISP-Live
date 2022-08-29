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
        <div class="main_bg inp-main">
            <h4 style="color: #000">Manage School</h4> <br>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <form action="{{ route('admin_manage_school_process',$id->id) }}" method="post" >
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name" class="control-label mb-1">School Name<span
                                            class="text-danger">*</span></label>
                                    <input id="name" name="name"
                                           value="{{$id->name}}"
                                           type="text" class="form-control"
                                           aria-required="true" aria-invalid="false">
                                    @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="region" class="control-label mb-1">Region<span
                                            class="text-danger">*</span></label>
                                    
                                    <select class="form-control" name="region_id">
                                        <option selected="" hidden="" disabled="">Select Region</option>
                                        @foreach($regions as $region)
                                        <option {{ $region->id == $id->region_id ? 'selected' : ''}} value="{{$region->id}}">{{$region->name}}</option>
                                        @endforeach
                                            @error('name')
                                                <div class="alert alert-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                    </select>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                
                </div>
                
            </div>
        </div>
    </div>
@endsection
