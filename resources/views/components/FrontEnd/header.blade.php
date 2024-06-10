@php
    $isAdmissonCount = 0;
@endphp
@foreach ($applicationModel as $application)
    @if($application->is_admission == 'open') 
        @php
            $isAdmissonCount =  $isAdmissonCount + 1;
        @endphp
    @endif
@endforeach


<header id="header" id="home">
    <!-- @include('components.FrontEnd.announcement') -->
    @if($isAdmissonCount > 0) 
        <div class="announcement-bar">
            <div class="full-container">
                <div class="announcement-contents">
                @foreach ($applicationModel as $application)
                    @if($application->is_admission == 'open') 
                    <marquee direction="left" class='marquee-grid'>
                        {{$application->message}} {{$application->message}} {{$application->message}} {{$application->message}} {{$application->message}}
                    </marquee>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                    <ul>
                        <li><a href="https://www.facebook.com/profile.php?id=100082904603965&mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
                    </ul>
                </div>
                <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                    <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">05815 3654 896</span></a>
                    <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">mailto:govt.girlsdegreecollegeskardu@gmail.com</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="{{('/')}}"><img src="{{asset('education-master/img/logo.jpg')}}" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="{{('/')}}">Home</a></li>
                    <li><a href="{{route('About')}}">About</a></li>
                    <li><a href="{{route('Course')}}">Courses</a></li>
                    <li><a href="{{route('Event')}}">Events</a></li>
                    <li><a href="{{route('Blog')}}">Blogs</a>
                    </li>
                    <li><a href="{{asset('education-master/file/Academic Calender.pdf')}}" target="_blank">Academic calender</a>
                    <li><a href="{{route('Apply')}}">Apply Online</a>
                    </li>
                    </li>
                    @foreach ($applicationModel as $application)
                        @if( $application->is_admission == 'open')
                        <li><a href="{{route('Contact')}}">Contact</a></li>
                            @guest
                                <!-- @if (Route::has('login'))
                                    <li>
                                        <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif -->
    
                                @if (Route::has('register'))
                                    <li>
                                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                </li>
                            @endguest
                        </li>
                        @endif
                    @endforeach
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </div>
</header>

<style>
    .marquee-grid {
        display: flex;
        align-items: center;
        color: white;
    }
</style>