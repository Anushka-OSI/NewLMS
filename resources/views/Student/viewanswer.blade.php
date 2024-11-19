@extends('layouts.teacher')
@section('content')
    <div class="container my-4">
        <div class="row">



            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Email</th>
                        <th>Answers</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>
                            @php
                            $user = App\Models\User::find($item->studentID);
                            @endphp

                            @if($user)
                                {{ $user->firstName . ' ' . $user->lastName }}
                            @else
                                <span class="text-muted">User not found</span>
                            @endif
                        </td>
                        <td>
                            @if($user)
                                {{ $user->email }}
                            @else
                                <span class="text-muted">N/A</span>
                            @endif
                        </td>
                        <td>
                            @if($item->path)
                                <a href="{{ asset($item->path) }}" target="_blank" class="btn btn-primary btn-sm text-light fw-bold my-2">
                                    <i class="fa-solid fa-download"></i> Download
                                </a>
                            @else
                                <span class="text-muted">No answers uploaded</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
@endsection
