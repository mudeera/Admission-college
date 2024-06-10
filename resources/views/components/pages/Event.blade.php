<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Events</title>
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
                        Events				
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/Event">Events</a></p>
                    <!-- <p class="text-white link-nav">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vel!</p> -->
                </div>	
            </div>
        </div>
    </section>
    <section class="popular-events-area section-gap events-page">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-30 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Recent Events</h1>
                        <p>There is a moment in the life of any aspiring.</p>
                    </div>
                </div>
            </div>						
            <section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row align-items-center">
                        @foreach ($events as $event)
                            <div class="col-lg-6 pb-30">
                                <div class="single-carusel row align-items-center">
                                    <div class="col-12 col-md-6 thumb">
                                        <img class="img-fluid" src="{{asset('storage/event/'.$event->image)}}" alt="">
                                    </div>
                                    <div class="detials col-12 col-md-6">
                                        <p>{{$event->date}}</p>
                                        <h4>{{$event->title}}</h4>
                                        <p>
                                            {{$event->description}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="Page navigation example">
                            {{$events->links()}}
                        </div>	
					</div>
				</div>	
			</section>
        </div>	
    </section>
    @include('components.FrontEnd.footer')
    @include('components.FrontEnd.script')
</body>
</html>