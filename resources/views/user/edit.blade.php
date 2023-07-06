@extends('layouts/layout')

@section('content')
    <div class="row" style="margin-top: 20px;">
        <div class="col-sm-12" style="padding-top: 20px;">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $user->name }}</h5>
                    <form action="{{ route('user.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                    <a href="/user" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
