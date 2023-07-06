<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Http\Requests\StoreLeadsRequest;
use App\Http\Requests\UpdateLeadsRequest;
use App\Models\User;
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

        $lead = Lead::latest()->paginate(5);

        return view('lead.index',compact('lead'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);

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

        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'fullAddress' => ['required', 'string'],
            'postcode' => ['required', 'string'],
            'email' => ['required', 'email'],
            'Phone' => ['required', 'string'],
            'landline' => ['nullable', 'string'],
            'dob' => ['required', 'date'],
            'gasSupply' => ['required', 'string'],
            'employedBenefits' => ['required', 'string'],
            'earnings' => ['nullable', 'string'],
            'benefit' => ['required', 'string'],
            'energyRating' => ['required', 'string'],
            'updatesSinceEpc' => ['nullable', 'string'],
            'belowthreshold' => ['required', 'string'],
            'housingSitu' => ['required', 'string'],
            'typeOfProperty' => ['required', 'string'],
            'wallType' => ['required', 'string'],
            'wallinsulation' => ['required', 'string'],
            'chosenHeatingOption' => ['required', 'string'],
            'currentHeating' => ['required', 'string'],
            'secondaryHeating' => ['required', 'string'],
            'medicalCondtions' => ['nullable', 'string'],
            'notes' => ['nullable', 'string'],
        ]);


        Lead::create(array_merge($validatedData, [
            'userID' => auth()->user()->id,
        ]));

        return redirect()->route('lead.index')
                        ->with('success','Lead created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lead $lead): View
    {

        return view('lead.show')->withLead($lead);

    }

    public function leadDash(Lead $lead){
        $leads = Lead::where("companyID", Auth()->user()->companyID)->get();

        return view('/index', ['leads' => $leads]);

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lead $lead): view
    {
        return view('lead.edit',compact('lead'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadsRequest $request, $id)
    {

        $validatedData = $request->validate([
            // 'name' => ['required', 'string'],
            'fullAddress' => ['required', 'string'],
            'postcode' => ['required', 'string'],
            'email' => ['required', 'email'],
            'Phone' => ['required', 'string'],
            'landline' => ['nullable', 'string'],
            'dob' => ['required', 'date'],
            'gasSupply' => ['required', 'string'],
            'employedBenefits' => ['required', 'string'],
            'earnings' => ['nullable', 'string'],
            'benefit' => ['required', 'string'],
            'energyRating' => ['required', 'string'],
            'updatesSinceEpc' => ['nullable', 'string'],
            'belowthreshold' => ['required', 'string'],
            'housingSitu' => ['required', 'string'],
            'typeOfProperty' => ['required', 'string'],
            'wallType' => ['required', 'string'],
            'wallinsulation' => ['required', 'string'],
            'chosenHeatingOption' => ['required', 'string'],
            'currentHeating' => ['required', 'string'],
            'secondaryHeating' => ['required', 'string'],
            'medicalCondtions' => ['nullable', 'string'],
            'notes' => ['nullable', 'string'],
            'companyID'=> ['nullable', 'string'],
            'leadApproval' => ['nullable', 'string']
        ]);
        Lead::whereId($id)->update($validatedData);


        return redirect()->route('lead.index')
                        ->with('success','Lead updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lead $lead)
    {


        $lead->delete();

        return redirect()->route('lead.index')
                        ->with('success','Lead deleted successfully');
    }
}
