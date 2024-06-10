<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
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
                        Contact Us				
                    </h1>	
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/Contact">Contact Us</a></p>
                    <!-- <p class="text-white link-nav">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, vel!</p> -->
                </div>	
            </div>
        </div>
    </section>
    <section class="contact-page-area">
        <div class="container">
            <div class="map-wrap"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=degree college skardu&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Unlimited</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {width:100%!important;height:400px!important;}</style></div>
            <div class="row">
                <!-- <div class="map-wrap" style="width:100%; height: 445px;" id="map"></div> -->
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-home"></span>
                        </div>
                        <div class="contact-details">
                            <h5>girls degree college skardu@.com</h5>
                            <p>Near Jamia masjid road<p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-phone-handset"></span>
                        </div>
                        <div class="contact-details">
                            <h5>05815 9865 562</h5>
                            <p>Mon to Sat 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="single-contact-address d-flex flex-row">
                        <div class="icon">
                            <span class="lnr lnr-envelope"></span>
                        </div>
                        <div class="contact-details">
                            <h5>college@collge.com</h5>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>														
                </div>
                <div class="col-lg-8">
                    <form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">
                        <div class="row">	
                            <div class="col-lg-6 form-group">
                                <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
                            
                                <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                                <input name="subject" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" class="common-input mb-20 form-control" required="" type="text">
                            </div>
                            <div class="col-lg-6 form-group">
                                <textarea class="common-textarea form-control" name="message" placeholder="Enter Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Messege'" required=""></textarea>				
                            </div>
                            <div class="col-lg-12">
                                <div class="alert-msg" style="text-align: left;"></div>
                                <button class="genric-btn primary" style="float: right;">Send Message</button>											
                            </div>
                        </div>
                    </form>	
                </div>
            </div>
        </div>	
    </section>

    @include('components.FrontEnd.footer')
    @include('components.FrontEnd.script') 
</body>
</html>