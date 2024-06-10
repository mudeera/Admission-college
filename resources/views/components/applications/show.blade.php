@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
      	<div class="container-fluid py-5">
          <div class="row px-5">
          </div>
            @if (session('success'))
                <div class="alert alert-success" id="success-message">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table">  
                      <tbody>
                        <tr>
                          <tr>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Image</th>
                            <th>Phone No.</th>
                            <th>Course Name</th>
                          </tr>
                          <tr>
                            <td>{{ $applications->name }}</td>
                            <td>{{ $applications->fname }}</td>
                            <td>
                              <a href="{{asset('storage/application/'. $applications->image)}}" target="_blank">
                                <img src="{{asset('storage/application/'. $applications->image)}}" alt="" width="150px" height="100px">
                              </a>
                            </td>
                            <td>{{ $applications->p_no }}</td>
                            <td>{{ $applications->course->name }}</td>
                          </tr>
                        </tr>
                        <tr>
                          {{-- <th>Action</th>
                          <td class="project-actions text-right">
                                  <a class="btn btn-primary btn-sm" href="{{ route('application.index') }}"><i class="fas fa-back pr-2"></i>Back</a>
                                  <a class="btn btn-info btn-sm" href="{{ route('application.edit', $applications->id) }}"><i class="fas fa-pencil-alt pr-2"></i>Edit</a>
                                  <input type="button" onclick="deleteUserModal({{$applications->id}})" class="btn btn-danger btn-sm" value="Delete">
                              </form>
                          </td> --}}
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
        $(".deleteform").attr('action','/application/'+id);
        $(".modal").show();
    }
    // Auto-dismiss the success message after 5 seconds
    setTimeout(function() {
      $('#success-message').fadeOut('slow');
    }, 3000); // 5 seconds (5000 milliseconds)
</script>
@endsection