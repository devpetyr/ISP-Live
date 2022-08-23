<div class="col-md-3 col-sm-3 col-xs-3">
    <div class="dash_bg">
        <div class="dash_1">
            <a href="javascript:void(0)">International Student Placements</a>
        </div>
        <div class="dash_2">
            <nav id="top-nav">
                <ul class="">
                    <li>
                        <a href="{{route('admin_dashboard')}}"><i class="fa-solid fa-right-long"></i>Dashboard
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Students
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('admin_student_details')}}">Student Details </a></li>
                            <li><a href="{{route('admin_student_applications')}}">Student Applications </a></li>
                            <li><a href="#">Payments</a></li>
{{--                            {{route('admin_student_payments')}}--}}
                            <li><a href="#">Schools</a></li>
{{--                            {{route('admin_student_schools')}}--}}
                            <li><a href="#">Regions</a></li>
{{--                            {{route('admin_student_regions')}}--}}
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Hosts
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('admin_host_details')}}">Host Details </a></li>
                            <li><a href="#">Host Visits</a></li>
{{--                            {{route('admin_host_visits')}}--}}
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Airport Pickup
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Airport Pickup</a></li>
{{--                            {{route('admin_airport_pickup')}}    --}}
                            <li><a href="#">Drivers</a></li>
{{--                            {{route('admin_host_drivers')}}--}}
                            <li><a href="#">Airlines</a></li>
{{--                            {{route('admin_host_airlines')}}--}}
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa-solid fa-right-long"></i>Agents</a>
{{--                        {{route('admin_agent')}}--}}
                    </li>

                    <li>
                        <a href="#"><i class="fa-solid fa-right-long"></i>Coordinators</a>
{{--                        {{route('admin_coordinators')}}--}}
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Reports
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Placement</a></li>
{{--                            placement_report.html--}}
                            <li><a href="#">Placement Status</a></li>
{{--                            placement_status.html--}}
                            <li><a href="#"> Airport Driver Assignments</a></li>
{{--                            airport_driver_assignments.html--}}
                            <li><a href="#"> Host Background Check Status</a></li>
{{--                            host_background_check_status.html--}}
                            <li><a href="#"> Host Availability</a></li>
{{--                            host_availability.html--}}
                            <li><a href="#"> Host Visit Status</a></li>
{{--                            host_visit_status.html--}}
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="admin_div">
            <img src="{{asset('admin/images/150-26.jpg')}}" class="img-fluid" alt="" />
            <h4>{{auth()->user()->username}}</h4>
            <h5>{{auth()->user()->email}}</h5>
        </div>
        <div class="myDIV">
            <img src="{{asset('admin/images/sp.png')}}" class="img-fluid" alt="" />
            <div class="hide">
                <img src="{{asset('admin/images/150-26.jpg')}}" class="img-fluid po" alt="" />
                <h3>{{auth()->user()->username}} <a href="javascript:void(0)">admin</a></h3>
                <h4>{{auth()->user()->email}}</h4>
                <ul>
                    <li><a href="javascript:void(0)">My Profile</a></li>
                    <li>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=""
{{--                        #exampleModal--}}
                        >Change
                            Password</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=""
{{--                        #staticBackdrop--}}
                        >Common
                            Settings</a>
                    </li>
                    <li><a href="{{route('logout')}}">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
