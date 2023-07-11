@extends('layouts.layout')

@section('content')
    <h2>User Management</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">Add New User</button>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <h2>User List</h2>
        <div class="row">
            @foreach($companies as $company)
                <div class="col-sm-4 mb-4">
                    <div class="card bg-dark text-white">
                        <div class="card-header">{{ $company->name }}</div>
                        <div class="card-body overflow-auto" style="max-height: 500px;">
                            @foreach($company->users as $user)
                                <div class="card text-white mb-3" style="background: #404040;">
                                    <div class="card-body">
                                        <h6 class="card-text">{{ $user->email }}</h6>
                                        <p class="card-text">{{ $user->name }}</p>
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">
                                                Edit
                                            </a>
                                            <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Add User Modal -->
    <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="{{ route('user.create') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Assign Company</label>
                            <div class="inputGroupContainer">
                                <select class="form-control" id="companyID" name="companyID">
                                    <option value="" selected>Company</option>

                                    @foreach(\App\Models\Company::all() as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                        <h1>{{$company->id}}</h1>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Create User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
