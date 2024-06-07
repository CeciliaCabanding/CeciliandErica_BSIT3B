@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">User Profile</h3>
        <div class="row justify-content-center">
            <div class="col-md-10"> <!-- Changed col-md-8 to col-md-10 to increase the width -->
                <div class="card shadow-lg">
                    <div class="card-header bg-pink text-white">
                        <h4 class="mb-0">Register Employee</h4>
                    </div>
                    <div class="card-body bg-gray">
                        <form method="POST" action="{{ route('employee.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <label for="first_name">Username</label>
                                    <input type="text" class="form-control" id="first_name" name="username" required>
                                </div>
                                <div class="form-group col-md-9">
                                    <label for="last_name">Email</label>
                                    <input type="text" class="form-control" id="last_name" name="email" required>
                                </div>
                                <div class="form-group col-md-9">
                                    <label for="dob">Password</label>
                                    <input type="text" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="form-group col-md-9">
                                    <label for="phone">Confirm Password</label>
                                    <input type="text" class="form-control" id="pass1" name="pass1" required>
                                </div>  
                            </div>
                            <div class="form-group">
    <button type="submit" class="btn btn-secondary btn-block">Register</button>
</div>

                        </form>
                    </div>
                </div>

              
@endsection

@push('css')
    <style>
        .card-header h4 {
            margin-bottom: 0;
        }
        .card {
            border-radius: 10px;
        }
        .btn {
            border-radius: 5px;
          
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .bg-white {
            background-color: #ffffff !important;
        }
        .bg-primary {
            background-color: #007bff !important;
        }
        .bg-orange {
            background-color: #ff6600 !important;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-orange {
            background-color: #ff6600;
            border-color: #ff6600;
        }
        .thead-dark th {
            background-color: #343a40;
            color: #fff;
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }
    </style>
@endpush
