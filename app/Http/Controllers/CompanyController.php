<?php

namespace App\Http\Controllers;
use App\Models\Lead;
use App\Http\Requests\StoreLeadsRequest;
use App\Http\Requests\UpdateLeadsRequest;
use App\Models\Company;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class companyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {

    $company = Company::latest()->paginate(5);

    return view('company.index', compact('company'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => ['required', 'string'],
            'address' => ['required', 'string'],
            'number' => ['required', 'string'],
            'email' => ['required', 'string'],

        ]);
        Company::create($validatedData);

        return redirect()->route('company.index')
                        ->with('success','Company created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        $leads = Lead::where('company_id', $company->id)->get();

        return view('companies.show', compact('company', 'leads'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::findOrFail($id);
        // Add any additional logic or data retrieval you need for the edit view
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function leads($id)
    {
        $company = Company::with('leads')->findOrFail($id);
        // Add any additional logic or data retrieval you need for the leads view
        return view('companies.leads', compact('company'));
    }
}
