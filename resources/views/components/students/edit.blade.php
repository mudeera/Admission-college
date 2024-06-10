{{-- @extends('layouts.app-auth') --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('student.update',$students->id)}}">
                        @csrf
                        @method('patch')

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">First Name</label>
                            <div class="col-md-6">
                                <input id="fname" type="text" min="0" class="form-control " value="{{$students->fname}}" name="fname" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Last Name</label>
                            <div class="col-md-6">
                                <input id="lname" type="text" min="0" class="form-control " value="{{$students->lname}}" name="lname" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Date of Birth</label>
                            <div class="col-md-6">
                                <input id="dob" type="date" min="0" class="form-control " value="{{$students->dob}}" name="dob" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$students->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">phone No</label>
                            <div class="col-md-6">
                                <input id="p_no" type="text" min="0" class="form-control " value="{{$students->p_no}}" name="p_no" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="text" min="0" class="form-control " value="{{$students->address}}" name="address" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Gender</label>
                            <div class="col-md-6">
                                <select class="form-control" value="{{$students->gender}}" name="gender">
                                    <option value="1">Male</option>
                                    <option value="0">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">District</label>
                            <div class="col-md-6">
                                <select class="form-control" value="{{$students->district}}" name="district">
                                    <option value="Ghanche">Ghanche</option>
                                    <option value="Shigar">Shigar</option>
                                    <option value="Skardu">Skardu</option>
                                    <option value="Kharmang">Kharmang</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input  type="submit" class="btn btn-primary" name="submit" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
