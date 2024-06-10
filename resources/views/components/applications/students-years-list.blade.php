@extends('layouts.app')
@section('content')
@php
    $noOfApplicationsFor2023 = 0;
    $noOfApplicationsFor2024 = 0;
@endphp
@foreach ($applications as $application)
    @if($application->academic_year == '2023')
        @php
            $noOfApplicationsFor2023++;
        @endphp
    @endif
    @if($application->academic_year == '2024')
        @php
            $noOfApplicationsFor2024++;
        @endphp
    @endif
@endforeach
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid py-5">
            @if($noOfApplicationsFor2023 > 0)
                <div class="card">
                    <div class="row" style="width: 60%; margin:0 auto">
                        <a class="btn btn-info btn-sm w-25 m-3 filter-button text-white text-decoration-none" data-course="all" data-year="2024">
                            All
                        </a>
                        @foreach ($courses as $course)
                            <a class="btn btn-info btn-sm w-25 m-3 filter-button text-white" data-course="{{ $course->name }}" data-year="2024">
                                {{ $course->name }}
                            </a>
                        @endforeach
                    </div>
                    <h2 class="title">2023 Short lists</h2>
                    <div class="card-body">
                        <table id="example1" class="table">  
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Father Name</th>
                                    <th>Course Name</th>
                                    <th>Submit Year</th>
                                </tr>
                            </thead>
                            <tbody id="application-table-body-2023">
                                @foreach ($applications as $application)
                                    @if($application->academic_year == '2023')
                                        <tr>
                                            <td>{{ $application->name }}</td>
                                            <td>{{ $application->fname }}</td>
                                            <td>{{ $application->course->name }}</td>
                                            <td>{{ $application->academic_year }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>   
                        </table>
                    </div>
                </div>
            @endif
            @if($noOfApplicationsFor2024 > 0)
                <div class="card">
                    <div class="row" style="width: 60%; margin:0 auto">
                        <a class="btn btn-info btn-sm w-25 m-3 filter-button text-white font-weight-bold text-decoration-none" data-course="all" data-year="2024">
                            All
                        </a>
                        @foreach ($courses as $course)
                            <a class="btn btn-info btn-sm w-25 m-3 filter-button text-white font-weight-bold" data-course="{{ $course->name }}" data-year="2024">
                                {{ $course->name }}
                            </a>
                        @endforeach
                    </div>
                    <h2 class="title text-center pt-30 text-capitalize">2024 Short lists</h2>
                    <div class="card-body">
                        <table id="example1" class="table">  
                            <thead>
                                <tr>
                                    <th>Student Name</th>
                                    <th>Father Name</th>
                                    <th>Course Name</th>
                                    <th>Submit Year</th>
                                </tr>
                            </thead>
                            <tbody id="application-table-body-2024">
                                @foreach ($applications as $application)
                                    @if($application->academic_year == '2024')
                                        <tr>
                                            <td>{{ $application->name }}</td>
                                            <td>{{ $application->fname }}</td>
                                            <td>{{ $application->course->name }}</td>
                                            <td>{{ $application->academic_year }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>   
                        </table>
                        <div class="btn__wrap d-flex justify-content-end">
                            <a href="{{ route('home') }}" class="btn btn-primary btn-lg">Back</a>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>
</div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-button');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const courseName = this.getAttribute('data-course');
            const year = this.getAttribute('data-year');
            const tableBodyId = `application-table-body-${year}`;

            fetch(`/applications/filter?course=${courseName}&year=${year}`)
                .then(response => response.json())
                .then(applications => {
                    const tableBody = document.getElementById(tableBodyId);
                    tableBody.innerHTML = '';

                    if (applications.length === 0) {
                        tableBody.innerHTML = '<tr><td colspan="4" class="text-center">No students found</td></tr>';
                    } else {
                        applications.forEach((application, index) => {
                            const row = document.createElement('tr');
                            row.innerHTML = `
                                <td>${application.name}</td>
                                <td>${application.fname}</td>
                                <td>${application.course ? application.course.name : 'N/A'}</td>
                                <td>${application.academic_year}</td>
                            `;
                            tableBody.appendChild(row);
                        });
                    }
                })
                .catch(error => console.error('Error fetching applications:', error));
        });
    });
});

function deleteUserModal(id){
    $(".deleteform").attr('action','/application/'+id);
    $(".modal").show();
}
</script>

<style>
/* .card .title {
    text-align: center;
    padding-top: 30px;
    text-transform: capitalize;
} */
/* .sidebar-mini .row a {
    text-decoration: none;
} */
/* .content-wrapper .btn__wrap {
    margin-top: 20px;
    display: flex;
    justify-content: flex-end;
} */
</style>
