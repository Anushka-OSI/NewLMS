@extends('layouts.admin')

@section('content')
<div class=" d-flex justify-content-center align-items-center">
    <div class="w-100" style="max-width: 500px;">
        <div class="text-center mb-4">

            <h2 class="fw-bold text-dark mt-3">Create Account</h2>
        </div>

        <form action="{{ url('/registerButton') }}" method="POST">
            @csrf

            <!-- User ID and Role -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" id="user-id" name="userId" class="form-control" required placeholder="User ID">
                </div>
                <div class="col-md-6">
                    <select id="role" name="role" class="form-select form-control" required>
                        <option value="" disabled selected>Role</option>
                        <option value="student">Student</option>
                        <option value="teacher">Teacher</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
            </div>

            <!-- First Name and Last Name -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" id="first-name" name="firstName" class="form-control" required placeholder="First Name">
                </div>
                <div class="col-md-6">
                    <input type="text" id="last-name" name="lastName" class="form-control" required placeholder="Last Name">
                </div>
            </div>

            <!-- Email -->
            <div class="mb-3">
                <input type="email" id="email" name="email" class="form-control" required placeholder="Email Address">
            </div>

            <!-- Password and Confirm Password -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="password" id="password" name="password" class="form-control" required placeholder="Password">
                </div>
                <div class="col-md-6">
                    <input type="password" id="confirm-password" name="confirmpassword" class="form-control" required placeholder="Confirm Password">
                </div>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Register new user</button>
        </form>
    </div>
</div>
@endsection
