@extends('layouts.teacher')
@section('content')

<div class="container my-4">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Zoom Links</h5>
                    <a href="/teacherZoomLinks/{{$id}}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Course Materials</h5>
                    <a href="/uploadCourseMaterials/{{$id}}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Upload Assignments</h5>
                    <a href="/uploadAssignment/{{$id}}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Student's Answers</h5>
                    <a href="/student/answer/{{$id}}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Upload Exam Results</h5>
                    <a href="/uploadExamResults/{{$id}}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">View Student's list</h5>
                    <a href="/teacherViewStudents/{{$id}}" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
