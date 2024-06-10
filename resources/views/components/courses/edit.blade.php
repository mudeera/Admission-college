{{-- @extends('layouts.app-auth') --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Courses') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('course.update',$courses->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" min="0" class="form-control " value="{{$courses->name}}" name="name" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" min="0" class="form-control " value="{{$courses->description}}" name="description" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " value="{{$courses->image}}" name="image" required="">
                            </div>
                        </div>
                        
                        <!-- <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Price/Fees</label>
                            <div class="col-md-6">
                                <input id="price" type="text" min="0" class="form-control " value="{{$courses->price}}" name="price" required="">
                            </div>
                        </div> -->
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Duration</label>
                            <div class="col-md-6">
                                <input id="duration" type="text" min="0" class="form-control " value="{{$courses->duration}}" name="duration" required="">
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
