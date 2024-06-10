@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
      	<div class="container-fluid py-5">
            <div class="card">
                <div class="card-header">Admissions Model</div>
                <div class="card-body">
                    <form method="post" action="{{ route('applicationModel.update',$applicationmodel->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="row mb-3">
                            <label for="message" class="col-md-4 col-form-label text-md-end">Alert Message</label>
                            <div class="col-md-6">
                                <textarea id="name" type="text" min="0" class="form-control " name="message" required="">{{$applicationmodel->message}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Switch Admission</label>
                            <div class="col-md-6">
                                <select class="form-control" name="is_admission" id="is_admission">
                                    <option value="open" @if($applicationmodel->is_admission == 'open') selected @endif>Open</option>
                                    <option value="close" @if($applicationmodel->is_admission == 'close') selected @endif>Close</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="" class="col-md-4 col-form-label text-md-end">Addmission Type</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type" id="type">
                                    <option value="confirmed" @if($applicationmodel->type == 'Confirmed Admission') selected @endif>Confirmed Admission</option>
                                    <option value="hope" @if($applicationmodel->type == 'hope') selected @endif>Hope Based Admission</option>
                                </select>
                            </div>
                        </div>


                        <!-- <div class="row mb-3">
                            <label for="is_addmission" class="col-md-4 col-form-label text-md-end">Switch addmission</label>
                            <div class='col-md-6 admission-block'>
                                <div class="radio__wrap">
                                    <input class='admission-radio' type="radio" name="is_addmission" value="open" id='open-admission'>
                                    <label class="radio-switch__label" for="open-admission">Open</label>
                                </div>
                                <div class="radio__wrap">
                                    <input class='admission-radio' checked type="radio" name="is_addmission" value="close" id='close-admission'>
                                    <label class="radio-switch__label" for="close-admission" >Close</label>
                                </div>
                            </div>
                        </div> -->
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<style>
    .content-wrapper .btn__wrap {
		margin-top: 20px;
		display: flex;
		justify-content: flex-end;
	}
    .admission-block {
        display: flex;
        grid-gap: 10px;
    }
    .admission-radio {
        display: none;
    }
    .radio-switch__label{
        position: relative;
        height: 40px;
        width: 100px;
        text-align: center;
        border-radius: 9999px;
        line-height: 400%;
        font-family: 'Poppins', sans-serif;
        font-weight: 700;
        transition-duration: .5s;
        transition-property: transform, box-shadow;
        transform: none;
        margin: 0;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .admission-radio:checked + .radio-switch__label{
        background-color:var(--blue);
        color:var(--white);
        box-shadow:0 0 4px rgba(0,0,0,.5),0 2px 4px rgba(0,0,0,.5);
        transform:translateY(-2px);
    }
</style>
@endsection