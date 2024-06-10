@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
      	<div class="container-fluid py-5">
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      {{-- <a class="btn btn-primary" href="{{ route('student.create') }}">Add New student</a> --}}
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>District</th>
                        <th>Date Of Birth</th>
                        <th>Actions</th> 
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($students as $key => $student)
                      <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $student->fname }}</td>
                          <td>@if ( $student->gender == 1) Male
                            @elseif( $student->gender != 1) Female
                            @endif</td>
                          <td>{{ $student->district }}</td>
                          <td>{{ $student->dob }}</td>
                          <td class="project-actions text-right">
                                  <a class="btn btn-primary btn-sm" href="{{ route('student.show', $student->id) }}"><i class="fas fa-folder pr-2"></i>View</a>
                                  <a class="btn btn-info btn-sm" href="{{ route('student.edit', $student->id) }}"><i class="fas fa-pencil-alt pr-2"></i>Edit</a>
                                  <input type="button" onclick="deleteUserModal({{$student->id}})" class="btn btn-danger btn-sm" value="Delete">
                                  {{-- <i class="fas fa-trash"></i> --}}
                              </form>
                          </td>
                      </tr>
                  @endforeach
                  </table>
                </div>
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Apartments Delete Confirmation</h4>
                          <button type="button" class="close" onclick='$(".modal").hide();' data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                            <p>Are you Sure to Delete?</p>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <form  class="deleteform"  action="" method="post">
                                @csrf
                                @method('delete')
                                <div class="row">
                                    <input type="submit" value="delete" class="mx-2 btn btn-danger">
                                    <button type="button" onclick='$(".modal").hide();' class="mx-2 btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                        
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    function deleteUserModal(id){
        $(".deleteform").attr('action','/student/'+id);
        $(".modal").show();
    }

</script>
@endsection