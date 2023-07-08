@extends('layouts.layout')

@section('content')
    <h1>Employee List</h1>

    <div class="row">
        @foreach ($employees as $employee)
            <div class="col-md-4 mb-4">
                <div class="card bg-dark text-light shadow d-flex flex-column justify-content-center">
                    <div class="card-body text-center">
                        <h5 class="card-title text-light">{{ $employee->name }}</h5>
                        <p class="card-text"><strong>Email:</strong> {{ $employee->email }}</p>
                    </div>
                    <div class="card-footer bg-dark d-flex justify-content-center">
                        <div class="btn-group">
                            <a href="{{ route('user.edit', $employee->id) }}" class="btn btn-primary">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="" class="btn btn-info">
                                <i class="fas fa-eye"></i> View
                            </a>
                            <a href="" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                            <a href="{{ route('employees.leads', $employee->id) }}" class="btn btn-info">
                                <i class="fas fa-eye"></i> View Leads
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
