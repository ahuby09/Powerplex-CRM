@extends('layouts.layout')

@section('content')
    <div class="my-4">
        <h2 class="text-light mb-4" style="background-color: #333; padding: 10px;">Leads List for {{ $employee->name }}</h2>

        <div class="row">
            @foreach ($leads as $lead)
                <div class="col-md-4 mb-4">
                    <div class="card bg-light shadow">
                        <div class="card-body">
                            <h5 class="card-title">{{ $lead->name }}</h5>
                            <p class="card-text">Lead Postcode: {{ $lead->postcode }}</p>
                            <p class="card-text">Lead Number: {{ $lead->Phone }}</p>
                            <p class="card-text">Lead Email: {{ $lead->email }}</p>
                        </div>
                        <div class="card-footer bg-light">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('lead.show', $lead->id) }}" class="btn btn-primary">
                                    <i class="fas fa-eye"></i> View Details
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
