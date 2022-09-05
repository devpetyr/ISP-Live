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
            <!--<h4 style="color: #000">Manage Host</h4> <br>-->
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="host">
                    <h4>Manage Host</h4>
                    <ul>
                        <li><a href="{{ route('admin_host_details')}}">Dashboard</a></li>
                        <li>Manage Host</li>
                    </ul>
                </div>
            </div>
        </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <form action="{{ route('admin_manage_host_process',$id->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="first_name" class="control-label mb-1">First Name<span
                                                class="text-danger">*</span></label>
                                    <input id="name" name="first_name"
                                           value="{{$id->first_name}}"
                                           type="text" class="form-control"
                                           aria-required="true" aria-invalid="false">
                                    @error('first_name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <label for="last_name" class="control-label mb-1">Last Name<span
                                                class="text-danger">*</span></label>
                                    <input id="name" name="last_name"
                                           value="{{$id->last_name}}"
                                           type="text" class="form-control"
                                           aria-required="true" aria-invalid="false">
                                    @error('last_name')
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
                            <div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection
