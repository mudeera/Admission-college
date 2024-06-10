{{-- @extends('layouts.app-auth') --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admission Form') }}</div>

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
                            <label for="" class="col-md-4 col-form-label text-md-end">CNIC</label>
                            <div class="col-md-6">
                                <input id="cnic" type="text" min="0" maxlength="13" class="form-control " name="cnic" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " name="image" required="" placeholder="Passport size photo in jpg format" >
                                <p>
                                    Required documents:
                                    Passport size photo in jpg format
                                    <!-- 2. CNIC of father/guardian
                                    3. Domicile
                                    4. Character cerftificate
                                    5. Marksheets -->
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " name="image" required="">
                                <p>
                                    Required documents:
                                    CNIC of father/guardian
                                    <!-- 2. Passport size photo
                                    3. Domicile
                                    4. Character cerftificate
                                    5. Marksheets -->
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " name="image" required="">
                                <p>
                                    Required documents:
                                    CNIC of father/guardian
                                    <!-- 2. Passport size photo
                                    3. Domicile
                                    4. Character cerftificate
                                    5. Marksheets -->
                                </p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " name="image" required="">
                                <!-- <p>
                                    Required documents:
                                    1. Passport size photo
                                    2. CNIC of father/guardian
                                    3. Domicile
                                    4. Character cerftificate
                                    5. Marksheets
                                </p> -->
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " name="image" required="">
                                <!-- <p>
                                    Required documents:
                                    1. Passport size photo
                                    2. CNIC of father/guardian
                                    3. Domicile
                                    4. Character cerftificate
                                    5. Marksheets
                                </p> -->
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
                            <label for="" class="col-md-4 col-form-label text-md-end">Phone No</label>
                            <div class="col-md-6">
                                <input id="p_no" type="text" min="0" maxlength="11" class="form-control " name="p_no" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="text" min="0" class="form-control " name="address" required="">
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
                            <label for="" class="col-md-4 col-form-label text-md-end">Course</label>
                            <div class="col-md-6">
                                <select name="course_id" class="form-control">
                                    @foreach($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Obtained Percentage</label>
                            <div class="col-md-6">
                                <input id="obtainedPercentage" type="number" min="0" class="form-control " name="obtained_percentage" value="" required="">
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
<script>
    const academicYear = document.querySelector("[js-academic-year]");
    academicYear.value = new Date().getFullYear();
</script>
@endsection
