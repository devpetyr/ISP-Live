@extends('admin.layouts.main')
@section('content')
    <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="host">
                    <h4>Airlines</h4>
                    <ul>
                        <li><a href="index.html">Dashboard</a></li>
                        <li>Airlines</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="main_bg">

            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="admin_1 mother_1">
                        <div class="col-md-12">
                            <label class="form-label">Airlines Name<span>*</span></label>
                            <input type="text" placeholder="Email">
                        </div>
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
        </div>

    </div>
@endsection
