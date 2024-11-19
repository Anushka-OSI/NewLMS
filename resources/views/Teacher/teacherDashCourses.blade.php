@extends('layouts.teacher')
@section('content')

<!-- Table Container -->
<div class="manualcontainer">
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Duration</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

                    @foreach ($teachers as $item)
                        <tr>
                            <td>{{ $item->courseId }}</td>
                            <td>{{ $item->courseName }}</td>
                            <td>{{ $item->duration }}</td>


                            <td><a class="btn btn-outline-success btn-apply" href="/teacherEachCourse/{{$item->id}}">View</a></td>

                            
                        </tr>
                    @endforeach

        </tbody>
    </table>

@endsection
