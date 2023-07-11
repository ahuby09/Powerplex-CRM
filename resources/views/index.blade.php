@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PowerPlex CRM</h2>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        @foreach (\App\Models\Lead::all() as $lead)
            @if(Auth::check() && (Auth::user()->companyID == $lead->companyID || Auth::user()->companyID === 0))
            <div class="col-sm-3" style="padding-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lead->name }}</h5>
                        <p class="card-text">Lead Postcode: {{ $lead->postcode }}</p>
                        <p class="card-text">Lead Number: {{ $lead->Phone }}</p>
                        <p class="card-text">Lead Email: {{ $lead->email }}</p>
                        <div style="display:flex;justify-content: space-between;">
                            <a href="{{ route('lead.show', $lead->id) }}" class="btn-md"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('lead.edit', $lead->id) }}" class="btn-md"><i class="fas fa-edit"></i></a>

                            <form id="my_form" action="{{ route('lead.destroy', $lead->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button  class="btn-md"><span><i class="fa fa-trash" aria-hidden="true"></i></span></button>
                            </form>
                            </td>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endforeach
@endsection
