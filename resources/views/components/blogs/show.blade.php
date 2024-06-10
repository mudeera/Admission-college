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
                      
                      <tbody>
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Publish Date</th>
                            <th>Tittle</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                          
                          </tr>
                        <thead>
                        <tbody>
                          <td>{{ $blogs->name }}</td>
                          <td>{{ $blogs->date }}</td>
                          <td>{{ $blogs->title }}</td>
                          <td><img src="{{asset('storage/blog/'. $blogs->image)}}" alt="" width="150px" height="100px"></td>
                           
                          <td>{{ $blogs->description }}</td>
                          <td class="project-actions text-right">
                            <form class="btn__grid">
                                  <a class="btn btn-primary btn-sm" href="{{ route('blog.index') }}"><i class="fas fa-back pr-2"></i>Back</a>
                                  <a class="btn btn-info btn-sm" href="{{ route('blog.edit', $blogs->id) }}"><i class="fas fa-pencil-alt pr-2"></i>Edit</a>
                                  <input type="button" onclick="deleteUserModal({{$blogs->id}})" class="btn btn-danger btn-sm" value="Delete">
                                  {{-- <i class="fas fa-trash"></i> --}}
                              </form>
                          </td>
                        </tbody>
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
        $(".deleteform").attr('action','/blog/'+id);
        $(".modal").show();
    }

</script>
<style>
  .btn__grid {
    display: flex;
    grid-gap: 8px
  }
  .btn__grid .btn {
    display: flex;
    align-items: center;
  }
</style>
@endsection