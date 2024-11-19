@extends('layouts.student')
@section('content')

<!-- Success and Error Messages -->
@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif


<!-- Table Container -->
<div class="manualcontainer">
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Course Name</th>
                <th scope="col">Duration</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->courseId}}</td>
                <td>{{$item->courseName}}</td>
                <td>{{$item->duration}}</td>
                <td>{{$item->price}}</td>
                <td><a class="btn btn-success btn-apply" href="/applycz/{{ $item->id }}">Apply</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
