{{-- @extends('layouts.app-auth') --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Blog') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('blog.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Author Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" min="0" class="form-control " name="name" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Image</label>
                            <div class="col-md-6">
                                <input id="image" type="file" min="0" class="form-control " name="image" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Date</label>
                            <div class="col-md-6">
                                <input id="date" type="date" min="0" class="form-control " name="date" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Tittle</label>
                            <div class="col-md-6">
                                <input id="title" type="text" min="0" class="form-control " name="title" required="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Description</label>
                            <div class="col-md-6">
                                <textarea id="description" type="text" row="5" class="form-control " name="description" required="">
                                </textarea>
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
