<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courses</title>
    @include('components.FrontEnd.style')
</head>
<body class="antialiased">
    @include('components.FrontEnd.header')
    <section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Courses				
                    </h1>
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/Course">courses</a></p>	
                    <!-- <p class="text-white link-nav">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vel!</p> -->
                </div>	
            </div>
        </div>
    </section>
    <section class="popular-courses-area section-gap courses-page">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Recent Courses We Offer</h1>
                        <p>There is a moment in the life of any aspiring.</p>
                    </div>
                </div>
            </div>						
            <div class="row">
                @foreach ($courses as $course)     
                    <a href="{{ $course->duration == 'Intermediate' ? asset('education-master/intermediate.html') : asset('education-master/undergraduate.html') }}" class="single-popular-carusel col-lg-3 col-md-6">
                        <div class="thumb-wrap relative">
                            <div class="thumb relative">
                                <div class="overlay overlay-bg"></div>	
                                <img class="img-fluid" src="{{asset('storage/course/'.$course->image)}}" alt="">
                            </div>
                            <div class="meta d-flex justify-content-between">
                                </span>{{$course->name}}</p>
                                <!-- <h4>{{$course->price}}</h4> -->
                            </div>									
                        </div>
                        <div class="details">
                        <div>
                            <h4>
                                {{ $course->duration }}
                            </h4>
                        </div>
                            <p>
                                {{$course->description}}
                            </p>
                        </div>
                    </a>								
                @endforeach
                <div class="Page navigation example">
                    {{$courses->links()}}
                </div>													
            </div>
        </div>	
    </section>
    @include('components.FrontEnd.footer')
    @include('components.FrontEnd.script')
</body>
</html>