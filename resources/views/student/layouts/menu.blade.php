<div class="col-md-3 col-sm-3 col-xs-3">
    <div class="dash_bg">
        <div class="dash_1">
            <a href="javascript:void(0)">International Student Placements</a>
        </div>
        <br>
        <div class="dash_1">
            <a href="javascript:void(0)">Student</a>
        </div>
        <div class="dash_2">
            <nav id="top-nav">
                <ul class="">
                    <li>
                        <a href="{{route('student_dashboard')}}"><i class="fa-solid fa-right-long"></i>Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{route('sd_application')}}"><i class="fa-solid fa-right-long"></i>My Profile</a>
                    </li>
                    <li>
                        <a href="{{route('sd_notifications')}}"><i class="fa-solid fa-right-long"></i>Notifications</a>
                    </li>

                </ul>
            </nav>
        </div>
        <div class="admin_div">
            <img src="{{asset('student/images/profile-images/'.auth()->user()->avatar)}}" class="img-fluid" alt=""/>
            <h4>{{ucfirst(auth()->user()->first_name) .' '. ucfirst(auth()->user()->last_name) }}</h4>
            <h5>{{auth()->user()->email}}</h5>
        </div>
        <div class="myDIV">
            <img src="{{asset('student/images/sp.png')}}" class="img-fluid" alt=""/>
            <div class="hide">
                <img src="{{asset('student/images/profile-images/'.auth()->user()->avatar)}}" class="img-fluid po"
                     alt=""/>
                <h3>
                    <a href="javascript:void(0)">{{ucfirst(auth()->user()->first_name ) .' '. ucfirst( auth()->user()->last_name )}}</a>
                </h3>
                <h4>{{auth()->user()->email}}</h4>
                <ul>
                    <li>
                        <a href="{{route('sd_password')}}">Change Password</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target=""
                        >Common
                            Settings</a>
                    </li>
                    <li><a href="{{route('logout')}}">Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
