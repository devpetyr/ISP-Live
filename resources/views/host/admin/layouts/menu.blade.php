<div class="col-md-3 col-sm-3 col-xs-3">
    <div class="dash_bg">
        <div class="dash_1">
            <a href="javascript:void(0)">International Student Placements</a><br>
        </div>
        <div class="dash_2">
            <nav id="top-nav">
                <div class="dash_1">
                    <a href="javascript:void(0)">Host</a>
                </div>
                <ul class="">
                    <li>
                        <a href="{{route('host_dashboard')}}"><i class="fa-solid fa-right-long"></i>Dashboards
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Host Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('hd_application') }}">Host Profile</a></li>
                            <li><a href="#">Home Visits</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Students Details
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('hd_student_profile') }}"><i class="fa-solid fa-right-long"></i>Student Profile</a></li>
                            <li><a href="{{ route('hd_student_list') }}"><i class="fa-solid fa-right-long"></i>Student Requests list</a></li>
                            <li><a href="{{ route('hd_student_accept_reject_list') }}"><i class="fa-solid fa-right-long"></i>Student Accept/Reject list</a></li>
                        </ul>
                    </li>

                
                    <li>
                        <a href="{{ route('hd_notification') }}"><i class="fa-solid fa-right-long"></i>Notifications
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#"><i class="fa-solid fa-right-long"></i>Payments
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Received Payments</a></li>
                            <li><a href="#">Confirm Payments</a></li>
                        </ul>
                    </li>
                  
                    
                </ul>
            </nav>
        </div>
        <div class="admin_div">
            <img src="{{asset('admin/images/150-26.jpg')}}" class="img-fluid" alt="" />
            <h4>{{auth()->user()->first_name}}</h4>
            <h5>{{auth()->user()->email}}</h5>
        </div>
        <div class="myDIV">
            <img src="{{asset('admin/images/sp.png')}}" class="img-fluid" alt="" />
            <div class="hide">
                <img src="{{asset('admin/images/150-26.jpg')}}" class="img-fluid po" alt="" />
                <h3><a href="javascript:void(0)">Host</a></h3>
                <h3>{{auth()->user()->first_name}}</h3>
                <h4>{{auth()->user()->email}}</h4>
                
                <ul>
                    <li><a href="{{route('hd_profile')}}">My Profile</a></li>
                    <li>
                        <a href="{{route('hd_password_update')}}">Change Password</a>
                    </li>
                    <li><a href="{{route('logout')}}">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
