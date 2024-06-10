<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Apply Online</title>
    @include('components.FrontEnd.style')
</head>
<body class="antialiased">
    @include('components.FrontEnd.headerfront')
    <section class="banner-area relative about-banner" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Apply Online				
                    </h1>
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/Apply"> Apply Online</a></p>
                </div>	
            </div>
        </div>
    </section>
    <section class="popular-courses-area section-gap courses-page">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Methods of Apply Online</h1>
                        <p>There is a moment in the life of any aspiring.</p>
                    </div>
                    @foreach ($applicationModel as $applicationModel)
                        @if($applicationModel->is_admission == 'open' )
                        <form class="btn__grid row">
                            <div class="col-6">
                                <a class="btn btn-primary btn-lg{{ $applicationModel->type == 'confirmed' ? '' : ' disabled' }}" style="width: 100%" href="{{ $applicationModel->type == 'confirmed' ? route('apply.create') : 'javascript:void(0);' }}">
                                    <i class="fas fa-site pr-2"></i>
                                    {{ $applicationModel->type == 'confirmed' ? 'Confirmed Admission' : 'Confirmed Admission' }}
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-primary btn-lg{{ $applicationModel->type == 'confirmed' ? ' disabled' : '' }}" style="width: 100%" href="https://shorturl.at/grKLQ" target="_blank">
                                    <i class="fas fa-site pr-2"></i>Hope Based Admission
                                </a>
                            </div>
                            <!-- <div class="col-6">
                                <a class="btn btn-primary btn-lg {{ $applicationModel->type == 'confirmed' ? '' : 'disabled' }}" style="width: 100%" href="{{route('apply.create')}}"><i class="fas fa-site pr-2"></i>Confirmed Admission</a>
                            </div>
                            <div class="col-6">
                                <a class="btn btn-primary btn-lg disabled" style="width: 100%" href="https://shorturl.at/grKLQ" target="_blank"><i class="fas fa-site pr-2"></i>Hope Based Admission</a>
                            </div> -->
                        </form>
                        @endif
                    @endforeach
                </div>
            </div>						
            
        </div>	
    </section>
    @include('components.FrontEnd.footer')
    @include('components.FrontEnd.script')
</body>
</html>