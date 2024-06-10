{{-- @extends('layouts.app-auth') --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('blog.update',$blogs->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Author Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" min="0" class="form-control " value="{{$blogs->name}}" name="name" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " value="{{$blogs->image}}" name="image" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Date</label>
                            <div class="col-md-6">
                                <input id="date" type="date" min="0" class="form-control " value="{{$blogs->date}}" name="date" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Tittle</label>
                            <div class="col-md-6">
                                <input id="title" type="text" min="0" class="form-control " value="{{$blogs->title}}" name="title" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Description</label>
                            <div class="col-md-6">
                                <input id="description" type="text" min="0" class="form-control " value="{{$blogs->description}}" name="description" required="">
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
