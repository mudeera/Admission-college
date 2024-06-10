{{-- @extends('layouts.app-auth') --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Applications') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('application.update',$applications->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" min="0" class="form-control " name="name" value="{{$applications->name}}" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Father Name</label>
                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control " value="{{$applications->fname}}"  name="fname" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">CNIC</label>
                            <div class="col-md-6">
                                <input id="cnic" type="text" min="0" class="form-control " name="cnic" value="{{$applications->cnic}}" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " name="image" required="" value="asset('storage/application/'. $applications->image">                    
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Phone No</label>
                            <div class="col-md-6">
                                <input id="p_no" type="number" min="0" class="form-control " name="p_no" value="{{$applications->p_no}}" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="text" min="0" class="form-control " name="address" value="{{$applications->address}}" required="">
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
                                        <option @if($applications->course->name == $course->name) selected @endif value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Obtained Percentage</label>
                            <div class="col-md-6">
                                <input id="obtainedPercentage" type="number" min="0" class="form-control " name="obtained_percentage" value="{{$applications->obtained_percentage}}" required="">
                            </div>
                        </div>

                        <input id="acadmic-year" type="hidden" class="form-control" name="academic_year" value="" js-academic-year>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input  type="submit" class="btn btn-primary" name="submit" value="Update">
                            </div>
                        </div> 
                        <!-- <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div> -->
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
