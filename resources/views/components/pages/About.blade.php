<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
                        About Us				
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('About')}}">About Us</a></p>
                    <!-- <p class="text-white link-nav">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vel!</p> -->
                </div>	
            </div>
        </div>
    </section>
    <!-- Start feature Area -->
	<section class="feature-area pb-120">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>Dispensary</h4>
						</div>
						<div class="desc-wrap">
							<p>
								Usage of the Internet is becoming more common due to rapid advancement
								of technology.
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-feature">
						<div class="title">
							<h4>No.1 of universities</h4>
						</div>
						<div class="desc-wrap">
							<p>
								For many of us, our very first experience of learning about the celestial bodies begins
								when we saw our first.
							</p>
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
								If you are a serious astronomy fanatic like a lot of us are, you can probably remember
								that one event.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End feature Area -->
    <!-- Start info Area -->
	<section class="info-area pb-120">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-6 no-padding info-area-left">
					<img class="img-fluid" src="{{asset('education-master/img/about-img.jpg')}}" alt="">
				</div>
				<div class="col-lg-6 info-area-right">
					<h1>Food Cultural Festeval</h1>
					<p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
						standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
						the job is beyond reproach.</p>
					<br>
					<p>
						inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct
						standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on
						the job is beyond reproach. inappropriate behavior is often laughed off as “boys will be boys,”
						women face higher conduct standards especially in the workplace. That’s why it’s crucial that,
						as women, our behavior on the job is beyond reproach.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End info Area -->
    <!-- Start course-mission Area -->
	<section class="course-mission-area pb-120">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-30 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Goals to Achieve for the leadership</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 accordion-left">

					<!-- accordion 2 start-->
					<dl class="accordion">
						<dt>
							<a href="" class="">Success</a>
						</dt>
						<dd style="display: none;">
							Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque mattis,
							leo quam aliquet diam, congue laoreet elit metus eget diam. Proin ac metus diam.
						</dd>
						<dt>
							<a href="" class="">Info</a>
						</dt>
						<dd style="display: none;">
							Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.
							Aenean dignissim pellentesque felis. leo quam aliquet diam, congue laoreet elit metus eget
							diam.
						</dd>
						<dt>
							<a href="" class="">Danger</a>
						</dt>
						<dd style="display: none;">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque
							aliquet nibh nec urna. Proin ac metus diam.
						</dd>
						<dt>
							<a href="" class="active">Warning</a>
						</dt>
						<dd style="display: block;">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque
							aliquet nibh nec urna. Proin ac metus diam.
						</dd>
					</dl>
					<!-- accordion 2 end-->
				</div>
				<div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
					<div class="overlay overlay-bg"></div>
					<a class="play-btn" href=""><img
							class="img-fluid mx-auto" src="{{asset('education-master/img/play.png')}}" alt=""></a>
				</div>
			</div>
		</div>
	</section>
	<!-- End course-mission Area -->
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

    @include('components.FrontEnd.footer')
    @include('components.FrontEnd.script')
</body>
</html>