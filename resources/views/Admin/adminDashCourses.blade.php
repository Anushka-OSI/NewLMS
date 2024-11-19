@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col">
        <a href="/newcourseBtn" class="btn btn-primary mb-3 float-right">Add New Course</a>

    </div>
</div>
<!-- Table Container -->
<div class="manualcontainer">
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Duration</th>
                <th scope="col">Price</th>
                <th scope="col">Teacher</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->courseId}}</td>
                <td>{{$item->courseName}}</td>
                <td>{{$item->duration}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->teacher}}</td>
                <td>
                    <a href="/editCourse/{{$item->id}}" class="text-primary action-icon"><i class="fa-regular fa-pen-to-square m-2"></i></a>

                    <a onclick="return confirm('Are you sure to Delete ?')" href="/delete/{{$item->id}}" class="text-danger action-icon"><i class="fa-solid fa-trash m-2"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection
