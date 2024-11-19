@extends('layouts.student')
@section('content')
    <div class="container my-4">
        <div class="row">


            @foreach ($data as $item)
            <div class="col-md-4 col-sm-6 mb-3">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->courseName }}</h5>
                        <p>{{ $item->description }}</p>

                        <a href="{{ asset('storage/' . $item->assignment) }}" target="_blank" class="btn btn-primary">View Assignment</a>

                        <form action="{{ route('submit_assignment', $item->courseId) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="assignment_answer" class="form-control my-2">
                            <button type="submit" class="btn btn-success mt-2">Submit</button>
                        </form>

                        @php
                            $answer = App\models\answers::where('courseID', $item->courseId)->get();
                        @endphp
                        @foreach ($answer as $aitem)
                        <a href="{{ asset($aitem->path) }}" target="_blank" class="btn btn-danger btn-sm text-light fw-bold my-2">
                            <i class="fa-solid fa-download"></i>
                        </a>
                        @endforeach




                    </div>
                </div>
            </div>
        @endforeach


        </div>
    </div>
@endsection
