@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            {{-- @if(session('status'))
                <div class="alert alert-success" id="status">
                    {{ session('status') }}
                </div>
            @endif --}}
            @auth
                @if (Auth::user()->role == '1')
                    <div class="container-fluid py-5">
                        <div class="row">
                            <a href="{{ route('blog.index') }}" class="col-lg-3 col-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>{{ count($blogs) }}</h3>
                                        <p>No Of Blogs</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-bag"></i>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('event.index') }}" class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>{{ count($events) }}</h3>
                                        <p>No Of Events</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('course.index') }}" class="col-lg-3 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>{{ count($courses) }}</h3>
                                        <p>No Of Courses</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-person-add"></i>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('home') }}" class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>{{ count($applications) }}</h3>
                                        <p>No Of Applicants</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-pie-graph"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="card">
                            {{-- <div class="row">
                                <a class="btn btn-info btn-sm w-25 m-3 filter-button" data-course="all">
                                    All
                                </a>
                                @foreach ($courses as $course)
                                    <a class="btn btn-info btn-sm w-25 m-3 filter-button" data-course="{{ $course->name }}">
                                        {{ $course->name }}
                                    </a>
                                @endforeach
                            </div> --}}
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Father Name</th>
                                            <th>CNIC</th>
                                            <th>Course</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="application-table-body">
                                        @foreach ($applications as $key => $application)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $application->name }}</td>
                                                <td>{{ $application->fname }}</td>
                                                <td>{{ $application->cnic }}</td>
                                                <td>{{ $application->course->name }}</td>
                                                <td class="project-actions text-right">
                                                    <a class="btn btn-info btn-sm" href="#" data-toggle="modal" data-target="#addMarksModal" data-id="{{ $application->id }}">
                                                        <i class="fas fa-pencil-alt pr-2"></i>Add Marks
                                                    </a>
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ route('application.show', $application->id) }}">
                                                        <i class="fas fa-folder pr-2"></i>View
                                                    </a>
                                                    <a class="btn btn-info btn-sm"
                                                        href="{{ route('application.edit', $application->id) }}">
                                                        <i class="fas fa-pencil-alt pr-2"></i>Edit
                                                    </a>
                                                    <input type="button" onclick="deleteUserModal({{ $application->id }})"
                                                        class="btn btn-danger btn-sm" value="Delete">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="btn__wrap">
                                    <a href="{{ route('application.students-years-list') }}"
                                        class="btn btn-primary btn-lg">Student lists</a>
                                    <a href="{{ route('application.students-short-list') }}"
                                        class="btn btn-primary btn-lg">View Merit Lists</a>
                                    <a href="{{ route('application.statistics') }}" class="btn btn-primary btn-lg">Subject Wise
                                        Statistics</a>
                                </div>
                            </div>
                            <div class="modal" id="myModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Apartments Delete Confirmation</h4>
                                            <button type="button" class="close" onclick='$(".modal").hide();'
                                                data-dismiss="modal">&times;</button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you Sure to Delete?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form class="deleteform" action="" method="post">
                                                @csrf
                                                @method('delete')
                                                <div class="row">
                                                    <input type="submit" value="delete" class="mx-2 btn btn-danger">
                                                    <button type="button" onclick='$(".modal").hide();'
                                                        class="mx-2 btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endauth
        </section>
    </div>
    <div class="modal fade" id="addMarksModal" tabindex="-1" aria-labelledby="addMarksModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addMarksModalLabel">Add Marks</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Your form content goes here -->
                    <form id="addMarksForm" action="{{ route('marks.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="application_id" id="applicationId" value="{{ $application->id ?? 0 }}">
                        <div class="form-group">
                            <label for="marks">Marks</label>
                            <input type="number" max="100" min="0" class="form-control" id="marks" name="marks" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    // document.addEventListener('DOMContentLoaded', function() {
    //     const filterButtons = document.querySelectorAll('.filter-button');

    //     filterButtons.forEach(button => {
    //         button.addEventListener('click', function() {
    //             const courseName = this.getAttribute('data-course');

    //             fetch(`/applications/filter?course=${courseName}`)
    //                 .then(response => response.json())
    //                 .then(applications => {
    //                     const tableBody = document.getElementById('application-table-body');
    //                     tableBody.innerHTML = '';

    //                     if (applications.length === 0) {
    //                         tableBody.innerHTML =
    //                             '<tr><td colspan="6" class="text-center">No students found</td></tr>';
    //                     } else {
    //                         applications.forEach((application, index) => {
    //                             const courseName = application.course ? application
    //                                 .course.name : 'N/A';
    //                             const row = document.createElement('tr');
    //                             row.innerHTML = `
    //                             <td>${index + 1}</td>
    //                             <td>${application.name}</td>
    //                             <td>${application.fname}</td>
    //                             <td>${application.cnic}</td>
    //                             <td>${courseName}</td>
    //                             <td class="project-actions text-right">
    //                                 <a class="btn btn-primary btn-sm" href="/application/${application.id}">
    //                                     <i class="fas fa-folder pr-2"></i>View
    //                                 </a>
    //                                 <a class="btn btn-info btn-sm" href="/application/${application.id}/edit">
    //                                     <i class="fas fa-pencil-alt pr-2"></i>Edit
    //                                 </a>
    //                                 <input type="button" onclick="deleteUserModal(${application.id})" class="btn btn-danger btn-sm" value="Delete">
    //                             </td>
    //                         `;
    //                             tableBody.appendChild(row);
    //                         });
    //                     }
    //                 })
    //                 .catch(error => console.error('Error fetching applications:', error));
    //         });
    //     });
    // });
    $(document).ready(function(){
        $('#addMarksModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var applicationId = button.data('id') // Extract info from data-* attributes
            var modal = $(this)
            modal.find('.modal-body #applicationId').val(applicationId)
        });
    });

    function deleteUserModal(id) {
        document.querySelector('.deleteform').setAttribute('action', `/application/${id}`);
        document.querySelector('.modal').style.display = 'block';
    }

    // setTimeout(function() {
    //     $('#status').fadeOut('slow');
    // }, 3000);
</script>

<style>
    .sidebar-mini .row a {
        text-decoration: none;
    }

    .content-wrapper .btn__wrap {
        margin-top: 20px;
        display: flex;
        justify-content: flex-end;
        grid-gap: 12px;
    }
</style>
