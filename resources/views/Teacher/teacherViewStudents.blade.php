@extends('layouts.teacher')
@section('content')

<section class="bg-light p-4 mt-4 rounded shadow-sm">
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Student ID</th>
                    <th class="text-center">First Name</th>
                    <th class="text-center">Last Name</th>
                    <th class="text-center">Email</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
                @php

                    $result = App\Models\User::find($item->studentID);


                @endphp
                <tr>
                    <td class="text-center">{{ $result->userID }}</td>

                    <td class="text-center">{{ $result->firstName }}</td>

                    <td class="text-center">{{ $result->lastName }}</td>

                    <td class="text-center">{{ $result->email }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@endsection
