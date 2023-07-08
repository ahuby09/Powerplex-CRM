<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Requests\StoreLeadsRequest;
use App\Http\Requests\UpdateLeadsRequest;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        // Retrieve leads paginated
        $lead = Lead::latest()->paginate(5);

        return view('lead.index', compact('lead'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display the dashboard.
     */
    public function dashboard(): View
    {
        $totalLeads = Lead::count();

        // Set the timezone for database and application to ensure consistency
        \DB::statement("SET time_zone = '+01:00'");

        // Calculate new leads based on today's date
        $startOfDay = Carbon::now('Europe/London')->startOfDay();
        $endOfDay = Carbon::now('Europe/London')->endOfDay();
        $newLeads = Lead::whereBetween('created_at', [$startOfDay, $endOfDay])->count();

        // Calculate approved and rejected leads
        $approvedLeads = Lead::where('leadApproval', 'approved')->count();
        $rejectedLeads = Lead::where('leadApproval', 'rejected')->count();

        // Calculate lead count by company
        $leadsByCompany = Lead::select('companyID', \DB::raw('count(*) as lead_count'))
            ->groupBy('companyID')
            ->pluck('lead_count', 'companyID');

        // Generate lead amount by date chart data
        $leadChartData = Lead::select(\DB::raw('DATE(created_at) as date'), \DB::raw('count(*) as lead_count'))
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->pluck('lead_count', 'date')
            ->toArray();

        return view('dashboard.index', compact('totalLeads', 'newLeads', 'approvedLeads', 'rejectedLeads', 'leadsByCompany', 'leadChartData'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('lead.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLeadsRequest $request): RedirectResponse
    {
        // Validate the form data
        $validatedData = $request->validated();

        // Create a new lead with the validated data and the authenticated user's ID
        Lead::create(array_merge($validatedData, [
            'userID' => auth()->user()->id,
        ]));

        return redirect()->route('lead.index')
            ->with('success', 'Lead created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead): View
    {
        return view('lead.show')->withLead($lead);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead): View
    {
        return view('lead.edit', compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadsRequest $request, $id)
    {
        // Validate the form data
        $validatedData = $request->validated();

        // Update the lead with the validated data
        Lead::whereId($id)->update($validatedData);

        return redirect()->route('lead.index')
            ->with('success', 'Lead updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {
        // Delete the lead
        $lead->delete();

        return redirect()->route('lead.index')
            ->with('success', 'Lead deleted successfully');
    }

    /**
     * Display the dashboard for leads.
     */
    public function leadDash()
    {
        // Retrieve leads belonging to the authenticated user's company
        $leads = Lead::where('companyID', Auth()->user()->companyID)->get();

        return view('/index', ['leads' => $leads]);
    }
}
