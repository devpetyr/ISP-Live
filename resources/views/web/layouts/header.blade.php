<header>
    <div class="topSec">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 centerCol">
                    <div class="text-center">
                        <ul>
                            <li>Don't Miss Out - Space is Limited on Many Summer Programs</li>
                            <li><a href="javascript:void(0)" class="btn btn_white">Start Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menuSec">
        <div class="container">
            <div class="row">
                <div id="mySidemenu" class="side_menu">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

{{--                    <a href="{{route('web_menu_college_housing')}}">College Housing</a>--}}
{{--                    <a href="{{route('web_menu_company_housing')}}">Company Housing</a>--}}
{{--                    <a href="{{route('web_menu_faq')}}">Faq</a>--}}
{{--                    <a href="{{route('web_menu_group_housing_program')}}">Group Housing Program</a>--}}
{{--                    <a href="{{route('web_menu_high_school_housing')}}">High School Housing</a>--}}
{{--                    <a href="{{route('web_menu_high_school')}}">High School</a>--}}
{{--                    <a href="{{route('web_menu_host_family')}}">Host Family</a>--}}
{{--                    <a href="{{route('web_menu_intern_housing')}}">Intern Housing</a>--}}
{{--                    <a href="{{route('web_menu_isp_camp')}}">Isp Camp</a>--}}
{{--                    <a href="{{route('web_menu_isp_group')}}">Isp Group</a>--}}
{{--                    <a href="{{route('web_menu_isp_housing')}}">Isp Housing</a>--}}
{{--                    <a href="{{route('web_menu_isp_immersion')}}">Isp Immersion</a>--}}
{{--                    <a href="{{route('web_menu_isp_portal')}}">Isp Portal</a>--}}
{{--                    <a href="{{route('web_menu_our_story')}}">Our Story</a>--}}
{{--                    <a href="{{route('web_menu_our_terms_condition')}}">Our Terms Condition</a>--}}
{{--                    <a href="{{route('web_menu_partnership')}}">Partnership</a>--}}
{{--                    <a href="{{route('web_menu_privacy_policy')}}">Privacy Policy</a>--}}
{{--                    <a href="{{route('web_menu_program_works')}}">Program Works</a>--}}
{{--                    <a href="{{route('web_menu_resourses')}}">Resourses</a>--}}
{{--                    <a href="{{route('web_menu_safety')}}">Safety</a>--}}
{{--                    <a href="{{route('web_menu_school')}}">School</a>--}}
{{--                    <a href="{{route('web_menu_team')}}">Team</a>--}}

                    <a href="{{route('web_agent')}}">Agents</a>
                    <a href="{{route('web_blog')}}">Blog</a>
                    <a href="{{route('web_menu_faq')}}">Faq</a>
                    <a href="{{route('web_career')}}">Careers</a>
                    <a href="{{route('web_contact_us')}}">Contact Us</a>
                    <a href="{{route('web_menu_covid_19')}}">Covid 19</a>
                    <a href="{{route('web_menu_group_program')}}">Group Our Program</a>
                    <a href="{{route('web_menu_health_and_safety')}}">Health And Safety</a>
                    <a href="{{route('web_menu_high_school_program')}}">High School Program</a>
                    <a href="{{route('web_menu_hosting_with_isp')}}">Hosting With Isp</a>
                    <a href="{{route('web_menu_intern_and_corporate_housing')}}">Intern And Corporate</a>
                    <a href="{{route('web_menu_isp_portal')}}">Isp Portal</a>
                    <a href="{{route('web_about_us')}}">Our Story Isp</a>
                    <a href="{{route('web_menu_school_and_company_housing')}}">School And Company</a>


                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <a href="{{route('web_home')}}"><img src="{{asset('web/images/logo.jpg')}}" alt="img"></a>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 text-right">
                    <ul id="menu">
                        <li><a href="{{route('web_home')}}">Home</a></li>
                        <li><a href="{{route('web_about_us')}}">About Us</a></li>
                        <li><a href="{{route('web_agent')}}">Agents</a></li>
                        <li><a href="{{route('web_blog')}}">Blog</a></li>
                        <li><a href="{{route('web_career')}}">Careers</a></li>
                        <li><a href="{{route('web_contact_us')}}">Contact Us</a></li>
                        <li><a href="javascript:void(0)"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                        <li><a href="javascript:void(0)" onclick="openNav()"><i class="fa-solid fa-bars"></i></a></li>
                        @if(!Auth()->check())
                            <li><a href="{{route('login')}}" class="btn btn_white">Login</a></li>
                        @elseif(Auth()->check())
                            <li><a href="{{route('logout')}}" class="btn btn_white">Logout</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
