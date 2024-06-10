@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ApplicationModel') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('applicationModel.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label text-md-end">Alert Message</label>
                            <div class="col-md-6">
                                <textarea id="name" type="text" min="0" class="form-control " name="message" required=""></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Switch Admission</label>
                            <div class="col-md-6">
                                <select class="form-control" name="is_admission" id="is_admission">
                                    <option value="open">Open</option>
                                    <option value="close" selected>Close</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="type" class="col-md-4 col-form-label text-md-end">Addmission Type</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type">
                                    <option value="confirmed">Confirmed Admission</option>
                                    <option value="hope">Hope Based Admission</option>
                                </select>
                            </div>
                        </div>

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
