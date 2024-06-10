@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
      	<div class="container-fluid py-5">
          <div class="row px-5">
            <h2>Serial No: <span>{{ $students->id }}</span></h4>
          </div>
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table">
                      
                      <tbody>
                        <tr>
                          <tr>
                            <th>First Name</th>
                            <td>{{ $students->fname }}</td>
                            <th>Last Name</th>
                            <td>{{ $students->lname }}</td>
                            <th>Date Of Birth</th>
                            <td>{{ $students->dob }}</td>
                          </tr>
                          <tr>
                            <th>District</th>
                            <td>{{ $students->district }}</td>
                            <th>Gender</th>
                            <td>@if ( $students->gender == 1) Male
                              @elseif( $students->gender != 1) Female
                              @endif</td>
                            <th>Address</th>
                            <td>{{ $students->address }}</td>
                          </tr>
                        </tr>
                        <tr>
                          <th>Email</th>
                          <td>{{$students->email}}</td>
                          <th>Action</th>
                          <td class="project-actions text-right">
                                  <a class="btn btn-primary btn-sm" href="{{ route('student.index') }}"><i class="fas fa-back pr-2"></i>Back</a>
                                  <a class="btn btn-info btn-sm" href="{{ route('student.edit', $students->id) }}"><i class="fas fa-pencil-alt pr-2"></i>Edit</a>
                                  <input type="button" onclick="deleteUserModal({{$students->id}})" class="btn btn-danger btn-sm" value="Delete">
                                  {{-- <i class="fas fa-trash"></i> --}}
                              </form>
                          </td>
                      </tr>
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