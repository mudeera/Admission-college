@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
      	<div class="container-fluid py-5">
          <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Message</th>
                        <th>Is Addmission</th>
                        <th>Actions</th> 
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($applicationmodel as $key => $application)
                      <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $application->message }}</td>
                          <td>{{ $application->is_admission }}</td>
                          <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('applicationModel.edit', $application->id) }}"><i class="fas fa-pencil-alt pr-2"></i>Edit</a>
                          </td>
                      </tr>
                  @endforeach
                  </table>
                  <div class="btn__wrap">
                    <a href="{{route('applicationModel.create')}}" class="btn btn-primary btn-lg">Add New ApplicationModel</a>
                    <a href="{{route('home')}}" class="btn btn-primary btn-lg">Back</a>
                  </div>
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
<style>
  .content-wrapper .btn__wrap {
		margin-top: 20px;
		display: flex;
		justify-content: flex-end;
    grid-gap: 10px;
	}
</style>