@extends('layouts.admin')
@section('content')

@foreach ($data as $item)
<div class="overview-card">
    @php
    $name = App\Models\User::find($item->StudentID);
    @endphp
<h3>{{$name->FirstName . " ".$name->LastName}}</h3>
<p>is requesting your approval to attend</p>
<p>{{$item->CourseID}}</p>

<div class="d-flex justify-content-center">
    <a class="btn btn-primary m-2" href="approveby/{{$item->id}}">Approve</a>

    <a class="btn btn-primary m-2" href="rejectby/{{$item->id}}">Reject</a>
</div>

</div>
@endforeach


@endsection
