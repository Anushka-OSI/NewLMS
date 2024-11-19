@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col">
        <a href="/studentsRequest" class="btn btn-primary mb-3 float-right">Student's Requests</a>

    </div>

<!-- Table Container -->
<div class="manualcontainer">
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Student's ID</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Courses</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->userID}}</td>
                <td>{{$item->firstName}}</td>
                <td>{{$item->lastName}}</td>
                <td>{{$item->email}}</td>
                {{-- @php
                    $crs = App\Models\User::where('student', $item->id)->get();
                @endphp
                <td>
                    @foreach ($crs as $crsid)
                    <span class="badge bg-primary">{{$crsid->courseId}}</span>

                    @endforeach --}}

                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection