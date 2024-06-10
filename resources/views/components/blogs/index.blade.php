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
                        <th>Name</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Actions</th> 
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($blogs as $key => $blog)
                      <tr>
                          <td>{{ $key + 1 }}</td>
                          <td>{{ $blog->name }}</td>
                          <td>{{ $blog->date }}</td>
                          <td>{{ $blog->title }}</td>
                          <td class="project-actions text-right">
                            <form class="btn__grid">
                                  <a class="btn btn-primary btn-sm" href="{{ route('blog.show', $blog->id) }}"><i class="fas fa-folder pr-2"></i>View</a>
                                  <a class="btn btn-info btn-sm" href="{{ route('blog.edit', $blog->id) }}"><i class="fas fa-pencil-alt pr-2"></i>Edit</a>
                                  <input type="button" onclick="deleteUserModal({{$blog->id}})" class="btn btn-danger btn-sm" value="Delete">
                                  {{-- <i class="fas fa-trash"></i> --}}
                              </form>
                          </td>
                      </tr>
                    @endforeach
                  </table>
                  <div class="btn__wrap">
                        <a href="{{route('home')}}" class="btn btn-primary btn-lg">Back</a>
                    </div>
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
    .content-wrapper .btn__wrap {
		margin-top: 20px;
		display: flex;
		justify-content: flex-end;
	}
    .btn__grid {
    display: flex;
    grid-gap: 6px
  }
  .btn{
    display: flex;
    align-items: center;
  }
</style>
@endsection