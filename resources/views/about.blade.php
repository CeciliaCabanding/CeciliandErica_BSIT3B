@extends('layouts.app')

@section('content')
<div class="card mt-5 shadow-lg">
                    <div class="card-header bg-orange text-white">
                        <h4 class="mb-0">Employee List</h4>
                    </div>
                    <div class="card-body bg-white">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-bright">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">DOB</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $employee->first_name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->dob }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        <a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning btn-sm">
                                            <i class="fa fa-pencil-square-o"></i> Edit
                                        </a>
                                        <form action="{{ route('employee.destroy', $employee->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection