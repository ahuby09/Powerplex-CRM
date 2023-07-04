@extends('layouts/layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>PowerPlex CRM</h2>
            </div>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add New</button>
        </div>
    </div>
    <div class="row" style="margin-top: 20px;">
        @foreach (\App\Models\Lead::all() as $lead)
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
                                <a href="javascript:{}" onclick="document.getElementById('my_form').submit();"><i
                                        class="fa fa-trash" aria-hidden="true"></i></a>
                            </form>
                            </td>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- modal for adding data !-->
        <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add new Lead</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container">

                            <form style="" action="{{ route('lead.store') }}" method="POST">
                                {{ csrf_field() }}
                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" />
                                </div>



                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="fullAddress">Address</label>
                                    <input type="text" id="fullAddress" name="fullAddress" class="form-control" />
                                </div>

                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="postcode">Postcode</label>
                                    <input type="text" id="postcode" name="postcode" class="form-control" />
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" />
                                </div>

                                <!-- Number input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="Phone">Phone</label>
                                    <input type="number" id="Phone" name="Phone" class="form-control" />
                                </div>
                                <!-- Number input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="lhone">Landline</label>
                                    <input type="number" id="landline" name="landline" class="form-control" />
                                </div>
                                <!-- Date input -->
                                <div class="form-group">
                                    <label class="control-label" for="dob">Date of birth</label>
                                    <input class="form-control" id="dob" name="dob" placeholder="MM/DD/YYYY"
                                        type="date" />
                                </div>

                                <!-- Does the Customer have a gas supply !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="gasSupply">Does the Customer
                                        have a gas supply</label>
                                    <select class="form-select" style="width: 100%;"name="gasSupply" id="gasSupply"
                                        aria-label="Default select example">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <!-- Does the Customer have benefits !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="employedBenefits">Is the
                                        Customer on Benefits or are they working</label>
                                    <select class="form-select" style="width: 100%;" name="employedBenefits"
                                        id="employedBenefits" aria-label="Default select example">
                                        <option value="Benefits">Benefits</option>
                                        <option value="Working">Working</option>
                                    </select>
                                </div>
                                <!-- Does the Customer have any of the following benefits !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="benefit">Does the Customer
                                        have any of the following benefits?</label>
                                    <select class="form-select" style="width: 100%;" name="benefit" id="benefit"
                                        aria-label="Default select example">
                                        <option value="none" selected>None</option>
                                        <option value="UC">Universal Credit</option>
                                        <option value="JSA">Income based Jobseekers Allowance JSA,</option>
                                        <option value="IS">Income Support</option>
                                        <option value="PCG">Pension Credit Guarantee Credit</option>
                                        <option value="WTC">Working Tax Credit</option>
                                        <option value="CTC">Child Tax Credit</option>
                                        <option value="HB">Housing Benefit</option>
                                        <option value="PCSC">Pension Credit Savings Credit</option>
                                        <option value="CB">Child Benefit</option>
                                    </select>
                                </div>
                                <!-- Does the Customer have an energy rating below a d !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="energyRating">EPC
                                        Rating</label>
                                    <select class="form-select" style="width: 100%;" name="energyRating"
                                        id="energyRating" aria-label="Default select example">
                                        <option value="E">e</option>
                                        <option value="F">f</option>
                                        <option value="G">g</option>
                                    </select>
                                </div>
                                <!-- any updates since the epc rating !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="updatesSinceEpc">Has the
                                        customer had any upgrades done since the epc raiting if yes please specify</label>
                                    <input type="text" id="updatesSinceEpc" name="updatesSinceEpc"
                                        class="form-control" />
                                </div>
                                <!-- Does the Customer Earn below 31,000 !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="belowthreshold">Does the
                                        Customer Earn below 31,000 total household income</label>
                                    <select class="form-select" style="width: 100%;" id="belowthreshold"
                                        name=" belowthreshold" aria-label="Default select example">
                                        <option value="yes">yes</option>
                                        <option value="no">No</option>
                                        <option value="notApp">N/A</option>
                                    </select>
                                </div>
                                <!-- what is the customers total household income before tax !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="customerincome">Customers
                                        household income</label>
                                    <input type="text" id="customerincome" class="form-control" />
                                </div>
                                <!-- Current household situation !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="housingSitu">Current Housing
                                        situation</label>
                                    <select class="form-select" style="width: 100%;" id="housingSitu" name="housingSitu"
                                        aria-label="Default select example">
                                        <option value="Owner">Owner</option>
                                        <option value="Private Tenant">Private Tenant</option>
                                        <option value="Social Housing">Social Housing</option>
                                    </select>
                                </div>
                                <!-- Property Type !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="typeOfProperty">Property
                                        Type</label>
                                    <select class="form-select" style="width: 100%;" id="typeOfProperty"
                                        name="typeOfProperty" aria-label="Default select example">
                                        <option value="Detached">Detached</option>
                                        <option value="Semi Detached">Semi Detached</option>
                                        <option value="Mid-Terrace">Mid-Terrace </option>
                                        <option value="Bungalow">Bungalow</option>
                                        <option value="Flat">Flat</option>
                                        <option value="Maisonette">Maisonette</option>
                                    </select>
                                </div>
                                <!-- Wall Type !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="wallType">Wall Type</label>
                                    <select class="form-select" style="width: 100%;" id="wallType" name="wallType"
                                        aria-label="Default select example">
                                        <option value="Brick">Brick</option>
                                        <option value="Wood">Wood</option>
                                        <option value="Cavity Wall">Cavity Wall </option>
                                        <option value="Stone">Stone</option>
                                    </select>
                                </div>
                                <!-- wall insulation !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="wallinsulation">Wall
                                        insulation</label>
                                    <select class="form-select" style="width: 100%;" name="wallinsulation"
                                        id="wallinsulation" aria-label="Default select example">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <!-- Chosen Heating Type!-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="chosenHeatingOption">Chosen
                                        Heating Type</label>
                                    <select class="form-select" style="width: 100%;" id="chosenHeatingOption"
                                        name="chosenHeatingOption" aria-label="Default select example">
                                        <option value="Solar Pv">Solar Pv</option>
                                        <option value="First Tiem central heating" selected>First Tiem central heating
                                        </option>
                                        <option value="Air Source Heat Pump">Air Source Heat Pump</option>
                                        <option value="High heat electric storage heaters">High heat electric storage
                                            heaters</option>
                                    </select>
                                </div>
                                <!-- current heating !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="currentHeating">current
                                        Heating system</label>
                                    <select class="form-select" style="width: 100%;" name="currentHeating"
                                        id="currentHeating" name="chosenHeatingOption"
                                        aria-label="Default select example">
                                        <option value="Solar Pv">Solar Pv</option>
                                        <option value="Boiler" selected>Boiler</option>
                                        <option value="Air Source Heat Pump">Air Source Heat Pump</option>
                                        <option value="storage heaters">storage heaters</option>
                                        <option value="solid fuel">solid fuel</option>
                                    </select>
                                </div>
                                <!--  secondary heating !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="secondaryHeating">have you
                                        got a secondary Heating type?</label>
                                    <select class="form-select" style="width: 100%;" name="secondaryHeating"
                                        id="secondaryHeating" name="chosenHeatingOption"
                                        aria-label="Default select example">
                                        <option value="Solar Pv">Solar Pv</option>
                                        <option value="Boiler">Boiler</option>
                                        <option value="Air Source Heat Pump">Air Source Heat Pump</option>
                                        <option value="storage heaters">storage heaters</option>
                                        <option value="solid fuel">solid fuel</option>
                                        <option value="none" selected>None</option>
                                    </select>
                                </div>
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="medicalCondtions">Medical Conditions</label>
                                    <textarea class="form-control" name="medicalCondtions" id="medicalCondtions" rows="4"></textarea>
                                </div>
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="notes">Additional information</label>
                                    <textarea class="form-control" name="notes" id="notes" rows="4"></textarea>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Submit Lead</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- start of edit lead modal !--->
        <div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add new Lead</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="container">

                            <form style="" action="{{ route('lead.store') }}" method="POST">
                                {{ csrf_field() }}
                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" />
                                </div>



                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="fullAddress">Address</label>
                                    <input type="text" id="fullAddress" name="fullAddress" class="form-control" />
                                </div>

                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="postcode">Postcode</label>
                                    <input type="text" id="postcode" name="postcode" class="form-control" />
                                </div>

                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" />
                                </div>

                                <!-- Number input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="Phone">Phone</label>
                                    <input type="number" id="Phone" name="Phone" class="form-control" />
                                </div>
                                <!-- Number input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="lhone">Landline</label>
                                    <input type="number" id="landline" name="landline" class="form-control" />
                                </div>
                                <!-- Date input -->
                                <div class="form-group">
                                    <label class="control-label" for="dob">Date of birth</label>
                                    <input class="form-control" id="dob" name="dob" placeholder="MM/DD/YYYY"
                                        type="date" />
                                </div>

                                <!-- Does the Customer have a gas supply !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="gasSupply">Does the Customer
                                        have a gas supply</label>
                                    <select class="form-select" style="width: 100%;"name="gasSupply" id="gasSupply"
                                        aria-label="Default select example">
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <!-- Does the Customer have benefits !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="employedBenefits">Is the
                                        Customer on Benefits or are they working</label>
                                    <select class="form-select" style="width: 100%;" name="employedBenefits"
                                        id="employedBenefits" aria-label="Default select example">
                                        <option value="Benefits">Benefits</option>
                                        <option value="Working">Working</option>
                                    </select>
                                </div>
                                <!-- Does the Customer have any of the following benefits !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="benefit">Does the Customer
                                        have any of the following benefits?</label>
                                    <select class="form-select" style="width: 100%;" name="benefit" id="benefit"
                                        aria-label="Default select example">
                                        <option value="none" selected>None</option>
                                        <option value="UC">Universal Credit</option>
                                        <option value="JSA">Income based Jobseekers Allowance JSA,</option>
                                        <option value="IS">Income Support</option>
                                        <option value="PCG">Pension Credit Guarantee Credit</option>
                                        <option value="WTC">Working Tax Credit</option>
                                        <option value="CTC">Child Tax Credit</option>
                                        <option value="HB">Housing Benefit</option>
                                        <option value="PCSC">Pension Credit Savings Credit</option>
                                        <option value="CB">Child Benefit</option>
                                    </select>
                                </div>
                                <!-- Does the Customer have an energy rating below a d !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="energyRating">EPC
                                        Rating</label>
                                    <select class="form-select" style="width: 100%;" name="energyRating"
                                        id="energyRating" aria-label="Default select example">
                                        <option value="E">e</option>
                                        <option value="F">f</option>
                                        <option value="G">g</option>
                                    </select>
                                </div>
                                <!-- any updates since the epc rating !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="updatesSinceEpc">Has the
                                        customer had any upgrades done since the epc raiting if yes please specify</label>
                                    <input type="text" id="updatesSinceEpc" name="updatesSinceEpc"
                                        class="form-control" />
                                </div>
                                <!-- Does the Customer Earn below 31,000 !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="belowthreshold">Does the
                                        Customer Earn below 31,000 total household income</label>
                                    <select class="form-select" style="width: 100%;" id="belowthreshold"
                                        name=" belowthreshold" aria-label="Default select example">
                                        <option value="yes">yes</option>
                                        <option value="no">No</option>
                                        <option value="notApp">N/A</option>
                                    </select>
                                </div>
                                <!-- what is the customers total household income before tax !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="earnings">Customers
                                        household income</label>
                                    <input type="text" id="earnings" name="earnings" class="form-control" />
                                </div>
                                <!-- Current household situation !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="housingSitu">Current Housing
                                        situation</label>
                                    <select class="form-select" style="width: 100%;" id="housingSitu" name="housingSitu"
                                        aria-label="Default select example">
                                        <option value="Owner">Owner</option>
                                        <option value="Private Tenant">Private Tenant</option>
                                        <option value="Social Housing">Social Housing</option>
                                    </select>
                                </div>
                                <!-- Property Type !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="typeOfProperty">Property
                                        Type</label>
                                    <select class="form-select" style="width: 100%;" id="typeOfProperty"
                                        name="typeOfProperty" aria-label="Default select example">
                                        <option value="Detached">Detached</option>
                                        <option value="Semi Detached">Semi Detached</option>
                                        <option value="Mid-Terrace">Mid-Terrace </option>
                                        <option value="Bungalow">Bungalow</option>
                                        <option value="Flat">Flat</option>
                                        <option value="Maisonette">Maisonette</option>
                                    </select>
                                </div>
                                <!-- Wall Type !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="wallType">Wall Type</label>
                                    <select class="form-select" style="width: 100%;" id="wallType" name="wallType"
                                        aria-label="Default select example">
                                        <option value="Brick">Brick</option>
                                        <option value="Wood">Wood</option>
                                        <option value="Cavity Wall">Cavity Wall </option>
                                        <option value="Stone">Stone</option>
                                    </select>
                                </div>
                                <!-- wall insulation !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="wallinsulation">Wall
                                        insulation</label>
                                    <select class="form-select" style="width: 100%;" name="wallinsulation"
                                        id="wallinsulation" aria-label="Default select example">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <!-- Chosen Heating Type!-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="chosenHeatingOption">Chosen
                                        Heating Type</label>
                                    <select class="form-select" style="width: 100%;" id="chosenHeatingOption"
                                        name="chosenHeatingOption" aria-label="Default select example">
                                        <option value="Solar Pv">Solar Pv</option>
                                        <option value="First Tiem central heating" selected>First Tiem central heating
                                        </option>
                                        <option value="Air Source Heat Pump">Air Source Heat Pump</option>
                                        <option value="High heat electric storage heaters">High heat electric storage
                                            heaters</option>
                                    </select>
                                </div>
                                <!-- current heating !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="currentHeating">current
                                        Heating system</label>
                                    <select class="form-select" style="width: 100%;" name="currentHeating"
                                        id="currentHeating" name="chosenHeatingOption"
                                        aria-label="Default select example">
                                        <option value="Solar Pv">Solar Pv</option>
                                        <option value="Boiler" selected>Boiler</option>
                                        <option value="Air Source Heat Pump">Air Source Heat Pump</option>
                                        <option value="storage heaters">storage heaters</option>
                                        <option value="solid fuel">solid fuel</option>
                                    </select>
                                </div>
                                <!--  secondary heating !-->
                                <div class="form-outline mb-4">
                                    <label class="form-label" data-style="btn-primary" for="secondaryHeating">have you
                                        got a secondary Heating type?</label>
                                    <select class="form-select" style="width: 100%;" name="secondaryHeating"
                                        id="secondaryHeating" name="chosenHeatingOption"
                                        aria-label="Default select example">
                                        <option value="Solar Pv">Solar Pv</option>
                                        <option value="Boiler">Boiler</option>
                                        <option value="Air Source Heat Pump">Air Source Heat Pump</option>
                                        <option value="storage heaters">storage heaters</option>
                                        <option value="solid fuel">solid fuel</option>
                                        <option value="none" selected>None</option>
                                    </select>
                                </div>
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="medicalCondtions">Medical Conditions</label>
                                    <textarea class="form-control" name="medicalCondtions" id="medicalCondtions" rows="4"></textarea>
                                </div>
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="notes">Additional information</label>
                                    <textarea class="form-control" name="notes" id="notes" rows="4"></textarea>
                                </div>
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Submit Lead</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
