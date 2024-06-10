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
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/Apply"> Apply Online</a>
                        <span class="lnr lnr-arrow-right"></span>  <a href="/apply/create"> Apply Form</a></p>
                </div>	
            </div>
        </div>
    </section>
    <section class="popular-courses-area section-gap courses-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('success'))
                    <div class="alert alert-success text-bold" style="font-weight: 600;" id="success-message">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-bold text-center" style="font-weight: 600;">{{ __('Admission Form') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('application.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">Name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" min="0" class="form-control " name="name" required="">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">Father Name</label>
                                <div class="col-md-6">
                                    <input id="fname" type="text" class="form-control " name="fname" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">B CNIC</label>
                                <div class="col-md-6">
                                    <input id="cnic" type="text" min="0" maxlength="13" class="form-control " name="cnic" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">Address</label>
                                <div class="col-md-6">
                                    <input id="address" type="text" min="0" class="form-control " name="address" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">Phone No</label>
                                <div class="col-md-6">
                                    <input id="p_no" type="text" min="0" maxlength="11" class="form-control " name="p_no" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">Obtained Percentage</label>
                                <div class="col-md-6">
                                    <input id="obtainedPercentage" type="number" min="0" class="form-control " name="obtained_percentage" value="" required="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">Gender</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="gender">
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">District</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="district">
                                        <option value="Ghanche">Ghanche</option>
                                        <option value="Shigar">Shigar</option>
                                        <option value="Skardu">Skardu</option>
                                        <option value="Kharmang">Kharmang</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="" class="col-md-4 col-form-label text-md-end">Groups</label>
                                <div class="col-md-6">
                                    <select name="course_id" class="form-control">
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="marksheet" class="col-md-4 col-form-label text-md-end">MarkSheet 10th</label>
                                <div class="col-md-6">
                                    <input id="marksheet" type="file" min="0" class="form-control " name="marksheet" required="" placeholder="Marksheet" >
                                    <p>
                                        Required:
                                    </p>
                                </div>
                            </div>
                            <!-- <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end"></label>
                                <div class="col-md-6">
                                    <input id="CNIC" type="Number" min="0" class="form-control " name="CNIC" required="">
                                     <p>
                                        Required:
                                    </p> 
                                </div> 
                            </div>-->
                            <div class="row mb-3">
                                <label for="cnicofGuardian" class="col-md-4 col-form-label text-md-end">CNIC of father/guardian</label>
                                <div class="col-md-6">
                                    <input id="cnicofGuardian" type="file" min="0" class="form-control " name="cnicofGuardian" required="">
                                    <p>
                                        Required:
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="image" class="col-md-4 col-form-label text-md-end">Passport size photo </label>
                                <div class="col-md-6">
                                    <input id="image" type="file" min="0" class="form-control " name="image" required="">
                                    <p>
                                        Required:
                                        Passport size photo in jpg format
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="Domicile" class="col-md-4 col-form-label text-md-end">Domicile</label>
                                <div class="col-md-6">
                                    <input id="Domicile" type="file" min="0" class="form-control " name="Domicile" required="">
                                     <p>
                                        Required:
                                    </p> 
                                </div>
                            </div>
                           
                            <div class="row mb-3">
                                <label for="character" class="col-md-4 col-form-label text-md-end">Character Certificate</label>
                                <div class="col-md-6">
                                    <input id="character" type="file" min="0" class="form-control " name="character" required="">
                                    <p>
                                        Required:
                                    </p>
                                </div>
                            </div>
                            
                            
                            
                           

                            <input id="acadmic-year" type="hidden" class="form-control" name="academic_year" value="" js-academic-year>
                            
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    @include('components.FrontEnd.footer')
    @include('components.FrontEnd.script')
    <script>
        const academicYear = document.querySelector("[js-academic-year]");
        academicYear.value = new Date().getFullYear();
        setTimeout(function() {
            $('#success-message').fadeOut('slow');
        }, 3000);
    </script>
</body>
</html>