@extends('layouts.admin')
@section('content')

<div class="container my-4">
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Manage Teachers</h5>
                    <a href="/adminSideTeachers" class="btn btn-primary">View Teachers</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Manage Students</h5>
                    <a href="/adminSideStudents" class="btn btn-primary">View Students</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Manage Payments</h5>
                    <a href="/adminSidePayments" class="btn btn-primary">View Payments</a>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Student's Results</h5>
                    <a href="#" class="btn btn-primary">View Results</a>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4 col-sm-6 mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Upload Certificates</h5>
                    <a href="#" class="btn btn-primary">Certificates</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
