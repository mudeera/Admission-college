{{-- @extends('layouts.app-auth') --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Courses') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('course.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" min="0" class="form-control " name="name" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" type="text" row="5" class="form-control " name="description" required="">
                                </textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " name="image" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pdf" class="col-md-4 col-form-label text-md-end">PDF</label>
                            <div class="col-md-6">
                                <input id="pdf" type="file" min="0" class="form-control " name="pdf" required="">
                            </div>
                        </div>
                        
                        <!-- <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Price</label>
                            <div class="col-md-6">
                                <input id="price" type="text" min="0" class="form-control " name="price" required="">
                            </div>
                        </div> -->

                        

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Duration</label>
                            <div class="col-md-6">
                                <input id="duration" type="text" min="0" class="form-control " name="duration" required="">
                            </div>
                        </div>
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
