@extends('layouts.admin')
@section('content')


</head>
<body>

<!-- Form Container -->
<div class="form-container">
    <!-- Page Title with Logo -->
    <div class="page-title">
        <img src="Images/petcLogo.png" alt="PETC Logo">
        <h1>Create New Course</h1>
    </div>

    <form action="/addNewCourseSubmitBtn" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="course_id">Course ID</label>
                <input type="text" class="form-control" id="course_id" name="courseId" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="course_name">Course Name</label>
                <input type="text" class="form-control" id="course_name" name="courseName" required>
            </div>
        </div>

        <div class="form-group">
            <label for="duration">Duration</label>
            <input type="text" class="form-control" id="duration" name="duration" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
        </div>

        <div class="form-group">
            <select class="form-select" aria-label="Default select example" name="teacher">
                <option selected>Select a teacher</option>
                @foreach ($teachers as $item)
                <option value="{{$item->id}}">{{$item->firstName . " " . $item->lastName}}</option>

                @endforeach
              </select>
        </div>

        <input type="submit" value="Add New Course" class="btn-submit">
    </form>
</div>

@endsection
