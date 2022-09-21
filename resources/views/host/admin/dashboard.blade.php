@extends('host.admin.layouts.main')
@section('content')

    <div class="col-md-9 col-sm-9 col-xs-9">
        <div class="main_bg">
        <div class="dash_3">
            <h4 class="left_home">Hello, {{auth()->user()->username}}</h4>
            <p>“Nothing Adventured, Nothing Attained.” – Peter McWilliams</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box_1 ">
                    <a href="javascript:void(0)">Applications</a>
                    <div class="box_start">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="box_sec1">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="box_sec2 my_box1">
                                    <h5>0</h5>
                                    <p>New College applications today</p>
                                </div>
                            </div>
                        </div>
                        <div class="box_two">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="box_sec1">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="box_sec2">
                                        <h5>0</h5>
                                        <p>New Host apps today</p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="box_sec1">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="box_sec2">
                                        <h5>0</h5>
                                        <p>Students arriving this week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box_1 box_2">
                    <a href="javascript:void(0)">Facilities</a>
                    <div class="box_start">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="box_sec1">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="box_sec2 my_box1">
                                    <h5>0</h5>
                                    <p>New College applications today</p>
                                </div>
                            </div>
                        </div>
                        <div class="box_top1">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <div class="box_sec1">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                    <div class="box_sec2 my_box1">
                                        <h5>1</h5>
                                        <p>Students needing Airport Driver Placement</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="box_1 box_3">
                    <a href="javascript:void(0)">Summary</a>
                    <div class="box_start">
                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-12">
                                <div class="box_sec1 boxs_3">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <div class="box_sec4 boxs_4">
                                    <div class="my_box1">
                                        <h5>122</h5>
                                        <p>
                                            High School applications YTD</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box_two">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="box_sec1 boxs_3">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="box_sec2 boxs_4">
                                        <h5>233</h5>
                                        <p>
                                            Intensive students YTD
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                    <div class="box_sec1 boxs_3">
                                        <i class="fa-solid fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="box_sec2 boxs_4">
                                        <h5>455</h5>
                                        <p>
                                            College applications YTD</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 2nd box  -->
        </div>
    </div>

@endsection
