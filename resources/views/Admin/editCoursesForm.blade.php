@extends('layouts.admin')
@section('content')
    <style>
        /* Form Styling */
        .form-container {
            width: 50%;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            margin-top: 80px;
            margin-bottom: 50px;
            margin-left: 25%;
            /* Added left margin */
            transition: all 0.3s ease;
        }

        .form-container:hover {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: 600;
            color: #333;
            text-align: center;
        }

        .form-container .form-group {
            margin-bottom: 20px;
        }

        .form-container label {
            font-size: 14px;
            font-weight: 500;
            color: #444;
        }

        .form-container .form-control {
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 14px;
            border: 1px solid #ddd;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-container .form-control:focus {
            border-color: #ff6b6b;
            box-shadow: 0 0 8px rgba(255, 107, 107, 0.4);
        }

        /* Input Submit Button Styling */
        .form-container input[type="submit"] {
            background-color: #ff6b6b;
            color: #fff;
            border: none;
            padding: 14px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #e75a5a;
        }

        /* Title and Logo Styling */
        .page-title {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            margin-bottom: 20px;
        }

        .page-title h1 {
            font-size: 28px;
            margin-left: 10px;
            color: #333;
            font-weight: 600;
        }

        .page-title img {
            width: 50px;
            height: auto;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {

            .form-container {
                margin-left: 200px;
                width: 90%;
            }

            .page-title h1 {
                font-size: 22px;
            }
        }
    </style>
    </head>

    <body>

        <!-- Form Container -->
        <div class="form-container">
            <!-- Page Title with Logo -->
            <div class="page-title">
                <img src="{{asset('Images/petcLogo.png')}}" alt="PETC Logo">
                <h1>Create New Course</h1>
            </div>

            <form action="/editCourse/save" method="POST">
                @csrf
                <div class="row">

                    <input type="hidden" value="{{ $course->id }}" name="id" id="id">

                    <div class="col-md-6 form-group">
                        <label for="course_id">Course ID</label>
                        <input type="text" value="{{ $course->courseId }}" class="form-control" id="course_id"
                            name="courseId" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="course_name">Course Name</label>
                        <input type="text" value="{{ $course->courseName }}" class="form-control" id="course_name"
                            name="courseName" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input type="text" value="{{ $course->duration }}" class="form-control" id="duration"
                        name="duration" required>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" value="{{ $course->price }}" class="form-control" id="price" name="price"
                        required>
                </div>

                <div class="form-group">
                    <label for="teacher">Teacher</label>
                    <input type="text" value="{{ $course->teacher }}" class="form-control" id="teacher" name="teacher"
                        required>
                </div>

                <input type="submit" value="Add New Course" class="btn-submit">
            </form>
        </div>
    @endsection
