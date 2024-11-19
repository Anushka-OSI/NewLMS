@extends('layouts.student')
@section('content')
    <div class="row">
        <div class="col">
            <a href="/studentAllCourses" class="btn btn-primary mb-3 float-right">All Courses</a>
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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    @php

                        $cdata = App\Models\AllCoursesModel::where('id', $item->courseID)->get();

                    @endphp
                    @foreach ($cdata as $citem)
                        <tr>
                            <td>{{ $citem->courseId }}</td>
                            <td>{{ $citem->courseName }}</td>
                            <td>{{ $citem->duration }}</td>
                            <td><a class="btn btn-outline-success btn-apply"
                                    href="/studentViewEachCourse/{{ $citem->id }}">View</a></td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>


        @endsection
