@extends('layouts.app')

@section('content')
<div class="card mt-5 shadow-lg">
                    <div class="card-header bg-Pink text-white">
                        <h4 class="mb-0">Employee List</h4>
                    </div>
                    <div class="card-body bg-Gray">
                        <table class="table table-bordered table-striped">
                            <thead class="thead-bright">
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">ConfirmPassword</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $key => $employee)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $employee->Username }}</td>
                                    <td>{{ $employee->Password }}</td>
                                    <td>{{ $employee->ConfirmPassword }}</td>
                                    <td>{{ $employee->Email }}</td>
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