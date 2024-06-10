<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @include('components.FrontEnd.style')
    </head>
    <body class="antialiased">
        @include('components.FrontEnd.header')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-between">
                <div class="banner-content col-lg-9 col-md-12">
                    <h1 class="text-uppercase">
                    Principal Message
                    </h1>
                    <p class="pt-10 pb-10">
                        Our college is a place of growth, discovery, and opportunity. It's a place where you will not only gain knowledge but also build lifelong friendships, develop critical skills, and explore your unique talents
                        Our dedicated team of teachers and staff is here to support you every step of the way.
                    </p>
                    <a href="{{ asset('education-master/file/principal-message and intro.pdf') }} " target="_blank" class="primary-btn text-uppercase">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start feature Area -->
    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Dispensary</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                            A dispensary is a a place where medicines are prepared and given out, often in a school or a hospital.
                            </p>
                            <a href="#">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Project Lab</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                              In laboratory experiences, students may learn to use the tools and conventions of science.For example, they may develop skills in using scientific equipment correctly  and safely.
                            </p>
                            <a href="#">Join Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-feature">
                        <div class="title">
                            <h4>Library</h4>
                        </div>
                        <div class="desc-wrap">
                            <p>
                              The library becomes a meeting place for study groups for classes and projects. If you are looking for some peers to study with, you will find many that meet up at the library.                            </p>
                            <a href="#">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End feature Area -->

    <!-- Start popular-course Area -->
    <section class="popular-course-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-30 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Recent Courses We Offer</h1>
                        <p>There is a moment in the life of any aspiring.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-popular-carusel">
                    @foreach ($courses as $course)
                        <a href="{{ $course->duration == 'Intermediate' ? asset('education-master/intermediate.html') : asset('education-master/undergraduate.html') }}"  class="single-popular-carusel">
                            <div class="thumb-wrap relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="{{asset('storage/course/'.$course->image)}}" alt="">
                                </div>
                                <div class="meta d-flex justify-content-between">
                                    {{-- <p><span class="lnr lnr-users"></span> 355 <span class="lnr lnr-bubble">--}}
                                    </span>{{$course->name}}</p>
                                    <!-- <h4>{{$course->price}}</h4> -->
                                </div>
                            </div>
                            <div class="details">
                                <div>
                                    <h4>
                                        {{$course->duration}}
                                    </h4>
                                </div>
                                <p>
                                    {{$course->description}}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End popular-course Area -->
    <!-- Start upcoming-event Area -->
    <section class="upcoming-event-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-30 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Upcoming Events Of Our Institute</h1>
                        <p>If you are a serious astronomy fanatic like a lot of us</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="active-upcoming-event-carusel">
                    @foreach ($events as $event)
                        <div class="single-carusel row align-items-center">
                            <div class="col-12 col-md-6 thumb">
                                <img class="img-fluid" src="{{asset('storage/event/'.$event->image)}}" alt="">
                            </div>
                            <div class="detials col-12 col-md-6">
                                <p>{{$event->date}}</p>
                                <a href="#">
                                    <h4>{{$event->title}}</h4>
                                </a>
                                <p>
                                    {{$event->description}}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End upcoming-event Area -->
    <!-- Start review Area -->
    <section class="review-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row">
                <div class="active-review-carusel">
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Fannie Rowe</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Hulda Sutton</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Fannie Rowe</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Hulda Sutton</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Fannie Rowe</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Hulda Sutton</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <img src="{{asset('education-master/img/r1.png')}}" alt="">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Fannie Rowe</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#">
                                <h4>Hulda Sutton</h4>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End review Area -->

    <!-- Start blog Area -->
    <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-30 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Latest Posts From Our Blog</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                
                @foreach ($blogs as $blog)
                <!-- <a href="{{ asset('Blog.html') }}" > -->
                    <div class="col-lg-3 col-md-6 single-blog">
                        <div class="thumb">
                            <img class="img-fluid" src="{{asset('storage/blog/'.$blog->image)}}" alt="">
                        </div>
                        <p class="meta">{{$blog->date}} | By <a href="#">{{$blog->name}}</a></p>
                        <a href="blog-single.html">
                            <h5>{{$blog->title}}</h5>
                        </a>
                        <p>
                            {{$blog->description}}
                        </p>
                        <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                    </div>
                   <!-- </a> -->
                @endforeach
                {{-- <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('education-master/img/b2.jpg')}}" alt="">
                    </div>
                    <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
                    <a href="blog-single.html">
                        <h5>Computer Hardware Desktops And Notebooks</h5>
                    </a>
                    <p>
                        Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('education-master/img/b3.jpg')}}" alt="">
                    </div>
                    <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
                    <a href="blog-single.html">
                        <h5>Make Myspace Your Best Designed Space</h5>
                    </a>
                    <p>
                        Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless.
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="{{asset('education-master/img/b4.jpg')}}" alt="">
                    </div>
                    <p class="meta">25 April, 2018 | By <a href="#">Mark Wiens</a></p>
                    <a href="blog-single.html">
                        <h5>Video Games Playing With Imagination</h5>
                    </a>
                    <p>
                        About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about. 11% of all adult internet
                    </p>
                    <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End blog Area -->

        @include('components.FrontEnd.footer')
        @include('components.FrontEnd.script')
    </body>
</html>
