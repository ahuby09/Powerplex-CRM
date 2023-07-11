@extends('layouts.layout')

@section('content')
    <div class="container-fluid">
            <div class="col-md-9">
                <div class="content">
                    <h1 class="text-light">Lead Dashboard</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h5 class="card-title">New Leads</h5>
                                    <p class="card-text">{{ $newLeads }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Approved Leads</h5>
                                    <p class="card-text">{{ $approvedLeads }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Rejected Leads</h5>
                                    <p class="card-text">{{ $rejectedLeads }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Leads Assigned to Companies</h5>
                                    <ul class="list-group">
                                        @foreach ($leadsByCompany as $companyId => $leadCount)
                                        <p>Company: {{ $companyNames[$companyId] ?? 'Unknown' }} | Lead Count: {{ $leadCount }}</p>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-dark text-white">
                                <div class="card-body">
                                    <h5 class="card-title">Lead Amount by Date</h5>
                                    <canvas id="leadChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const leadData = {!! json_encode($leadChartData) !!};

            // Generate labels and data arrays for Chart.js
            const labels = Object.keys(leadData);
            const data = labels.map(date => leadData[date]);

            // Create a new chart using Chart.js
            const ctx = document.getElementById('leadChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Lead Amount',
                        data: data,
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                        borderColor: 'rgb(75, 192, 192)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        x: {
                            display: true,
                            title: {
                                display: true,
                                text: 'Date'
                            }
                        },
                        y: {
                            display: true,
                            title: {
                                display: true,
                                text: 'Lead Amount'
                            },
                            beginAtZero: true,
                            precision: 0
                        }
                    }
                }
            });
        });
    </script>
@endsection
