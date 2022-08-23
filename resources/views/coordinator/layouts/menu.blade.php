<div class="col-md-3 col-sm-3 col-xs-12">
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
                            <li><a href="{{route('admin_student_profile')}}">Student Profile </a></li>
                            <li><a href="{{route('admin_student_payments')}}">Payments</a></li>
                            <li><a href="{{route('admin_student_schools')}}">Schools</a></li>
                            <li><a href="{{route('admin_student_regions')}}">Regions</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Hosts
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('admin_host_profile')}}">Host Profile </a></li>
                            <li><a href="{{route('admin_host_visits')}}">Host Visits</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Airport Pickup
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('admin_airport_pickup')}}">Airport Pickup</a></li>
                            <li><a href="{{route('admin_host_drivers')}}">Drivers</a></li>
                            <li><a href="{{route('admin_host_airlines')}}">Airlines</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('admin_agent')}}"><i class="fa-solid fa-right-long"></i>Agents
                        </a>
                    </li>

                    <li>
                        <a href="{{route('admin_coordinators')}}"><i class="fa-solid fa-right-long"></i>Coordinators
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Reports
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="placement_report.html">Placement</a></li>
                            <li><a href="placement_status.html">Placement Status</a></li>
                            <li><a href="airport_driver_assignments.html"> Airport Driver Assignments</a></li>
                            <li><a href="host_background_check_status.html"> Host Background Check Status</a></li>
                            <li><a href="host_availability.html"> Host Availability</a></li>
                            <li><a href="host_visit_status.html"> Host Visit Status</a></li>
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
                <h3>{{auth()->user()->username}} <a href="javascript:void(0)">Coordinator</a></h3>
                <h4>{{auth()->user()->email}}</h4>
                <ul>
                    <li><a href="javascript:void(0)">My Profile</a></li>
                    <li>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Change
                            Password</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Common
                            Settings</a>
                    </li>
                    <li><a href="{{route('logout')}}">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
