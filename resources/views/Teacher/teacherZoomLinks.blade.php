@extends('layouts.teacher')
@section('content')

<div class="row">
    <div class="col">
        <a href="/createZoomLinkForm/{{$id}}" class="btn btn-primary mb-3 float-right">Create Link</a>
    </div>
</div>


<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Zoom Link</th>
                <th>Description</th>

                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ $item->courseName }}</td>

                    <td class="text-center"><a href="{{ $item->zoomLink }}" target="_blank">Join</a></td>

                    <td class="text-center">{{ $item->description }}</td>

                    <td class="text-center">

                            <a onclick="return confirm('Are You Sure to Delete')" href="/deleteZoomLink/delete/{{$id}}" class="btn btn-danger btn-sm">Delete</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>


@endsection
