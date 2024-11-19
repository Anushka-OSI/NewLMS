@extends('layouts.teacher')
@section('content')

<div class="container mt-5">
    <div class="form-container p-4 shadow rounded bg-light mb-5">
        <form action="/uploadZoomLink" method="POST">
            <!-- CSRF token, if using Laravel -->
            @csrf

            <!-- Course Selection -->
            <div class="mb-3">
                <h1>{{$data->courseName}}</h1>
            </div>

            <input type="hidden" value="{{$data->id}}" name="id" id="courseName">
            <input type="hidden" value="{{$data->courseId}}" name="courseId" id="courseName">
            <input type="hidden" value="{{$data->courseName}}" name="courseName" id="courseId">

            <!-- Zoom Link -->
            <div class="mb-3">
                <label for="zoomLink" class="form-label">Zoom Link</label>
                <input type="url" class="form-control" id="zoomLink" name="zoomlink" placeholder="https://zoom.us/j/yourmeetingid" required>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>


            <!-- Submit Button -->
            <input type="submit" class="btn btn-primary w-100" value="Upload Link">
        </form>
    </div>

@endsection
