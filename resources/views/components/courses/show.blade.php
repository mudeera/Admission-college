@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <section class="content">
      	<div class="container-fluid py-5">
          <div class="row px-5">
          </div>
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table">  
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Duration</th>
                          <th>Description</th>
                          <th>Action</th>
                    
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>{{ $courses->name }}</td>
                            <td><img src="{{asset('storage/course/'. $courses->image)}}" alt=""></td>
                            <td>{{ $courses->duration }}</td>
                            <td>{{ $courses->description }}</td>
                            <td class="project-actions text-right">
                              <form class="btn__grid">
                                <a class="btn btn-primary btn-sm" href="{{ route('course.index') }}"><i class="fas fa-back pr-2"></i>Back</a>
                                <a class="btn btn-info btn-sm" href="{{ route('course.edit', $courses->id) }}"><i class="fas fa-pencil-alt pr-2"></i>Edit</a>
                                <input type="button" onclick="deleteUserModal({{$courses->id}})" class="btn btn-danger btn-sm" value="Delete">
                              <form>
                            </td>
                          </tr>
                      </tbody>
                  </table>
                </div>
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">apartments Delete Confirmation</h4>
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
        $(".deleteform").attr('action','/course/'+id);
        $(".modal").show();
    }

</script>
<style>
  .btn__grid {
    display: flex;
    grid-gap: 6px
  }
  .btn{
    display: flex;
    align-items: center;
  }
  .table img{
    width: 100px;
    object-fit: cover;
  }
</style>
@endsection