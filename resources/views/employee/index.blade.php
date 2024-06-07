@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Employee Management</h3>
        <div class="row justify-content-center">
            <div class="col-md-10"> <!-- Changed col-md-8 to col-md-10 to increase the width -->
                <div class="card shadow-lg">
                    <div class="card-header bg-blue text-white">
                        <h4 class="mb-0">Register Employee</h4>
                    </div>
                    <div class="card-body bg-black">
                        <form method="POST" action="{{ route('employee.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="first_name">Employee First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="last_name">Employee Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="dob">Employee DOB</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
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
