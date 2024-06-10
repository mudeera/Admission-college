<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Course</th>
            <th>Total Applications</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
        <tr>
            <td>{{ $course->name }}</td>
            <td>{{ $course->applications->count() }}</td>
            <td class="project-actions text-right">
                <a class="btn btn-primary btn-sm" href="{{ route('course.show', $course->id) }}"><i class="fas fa-folder pr-2"></i>View</a>
                <!-- Add other actions if needed -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>