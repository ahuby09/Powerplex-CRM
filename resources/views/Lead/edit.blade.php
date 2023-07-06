
@extends('layouts/layout')
@section('content')
    <div class="row" style="margin-top: 20px;">
            <div class="col-sm-12" style="padding-top: 20px;">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lead->name }}</h5>
                        <table class="table table-striped bg-dark" style="padding-top: 20px;padding-bottom: 20px;">
                            <tbody>
                                <tr>
                                    <td colspan="1" class="text-light bg-dark">
                                        <form action="{{ route('lead.update', $lead->id)}}" method="POST">
                                            @csrf
                                            {{method_field('PATCH')}}
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Date Of Birth</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-user"></i></span><input
                                                                 id="dob"
                                                                value="{{ date('Y-m-d', strtotime($lead->dob)) }}"
                                                                name="dob" placeholder="Full Name" class="form-control"
                                                                required="true" value="" type="date"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Medical Conditions</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-user"></i></span><input
                                                                 id="medicalCondtions"
                                                                value="{{ $lead->medicalCondtions }}"name="medicalCondtions"
                                                                placeholder="medicalCondtions" class="form-control"
                                                                value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Full Address</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="fullAddress" name="fullAddress" value="{{ $lead->fullAddress }}"
                                                                placeholder="fullAddress Line 1" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Postcode</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="postcode" value="{{ $lead->postcode }}"
                                                                name="postcode" placeholder="Postcode"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Phone</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="Phone" name="Phone"
                                                                value="{{ $lead->Phone }}" placeholder="Phone"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Landline</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="landline" name="landline"
                                                                value="{{ $lead->landline }}"class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Email</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="email" name="email"
                                                                value="{{ $lead->email }}" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Gas Supply</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="gasSupply" name="gasSupply"
                                                                value="{{ $lead->gasSupply }}" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Employed / Benefits</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-envelope"></i></span><input
                                                                 id="employedBenefits"
                                                                value="{{ $lead->employedBenefits }}"
                                                                name="employedBenefits" placeholder="Email"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Benefit Type</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-earphone"></i></span><input
                                                                 id="benefit" name="benefit"
                                                                value="{{ $lead->benefit }}" placeholder="benefit"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Telesales Agent</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-earPhone"></i></span><input
                                                                 id="telename" name="telename"
                                                                value="{{ $lead->user->name }}" placeholder="name"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Assign Company</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <select class="form-control" id="companyID" name="companyID">
                                                            <option value="{{$lead->companyID}}" selected>{{$lead->company->name ?? 'Company'}}</option>

                                                            @foreach(\App\Models\company::all() as $company)
                                                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                    </td>

                                    <td colspan="1" class="text-light bg-dark">

                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Earning below 31,000</label>
                                            <div class="col-md-8 inputGroupContainer">
                                                <div class="input-group"><span class="input-group-addon"><i
                                                            class="glyphicon glyphicon-home"></i></span><input
                                                         id="belowthreshold" name="belowthreshold"
                                                        value="{{ $lead->belowthreshold }}" placeholder=""
                                                        class="form-control"
                                                        type="text"></div>
                                            </div>
                                        </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Earnings</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="earnings" name="earnings"
                                                                value="{{ $lead->earnings }}" placeholder=""
                                                                class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Energy Rating</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="energyRating" name="energyRating"
                                                                value="{{ $lead->energyRating }}" placeholder=""
                                                                class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Updates Since epc Rating</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="updatesSinceEpc"
                                                                value="{{ $lead->updatesSinceEpc }}" name="updatesSinceEpc"
                                                                placeholder="updatesSinceEpc" class="form-control"
                                                                value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">condensingBoiler</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="condensingBoiler" name="condensingBoiler"
                                                                placeholder="condensingBoiler"
                                                                value="{{ $lead->condensingBoiler }}"
                                                                class="form-control" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Housing Situation</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="housingSitu" name="housingSitu"
                                                                value="{{ $lead->housingSitu }}" placeholder=""
                                                                class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Property Type</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="typeOfProperty" name="typeOfProperty"
                                                                value="{{ $lead->typeOfProperty }}" placeholder=""
                                                                class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Wall Type</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="wallType" name="wallType"
                                                                value="{{ $lead->wallType }}" placeholder=""
                                                                class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Wall insulation</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="wallinsulation" name="wallinsulation"
                                                                value="{{ $lead->wallinsulation }}" placeholder=""
                                                                class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Chosen Heating option</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="chosenHeatingOption" name="chosenHeatingOption"
                                                                value="{{ $lead->chosenHeatingOption }}" placeholder=""
                                                                class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Current Heating option</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="currentHeating" name="currentHeating"
                                                                value="{{ $lead->currentHeating }}" placeholder=""
                                                                class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Secondary Heating option</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                 id="secondaryHeating" name="secondaryHeating"
                                                                value="{{ $lead->secondaryHeating }}" placeholder=""
                                                                class="form-control"
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Lead Approval</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input id="leadApproval" name="leadApproval" value="1" type="checkbox" {{ $lead->leadApproval ? 'checked' : '' }}> Yes
                                                            </label>
                                                        </div>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input id="leadDisapproval" name="leadApproval" value="0" type="checkbox" {{ !$lead->leadApproval ? 'checked' : '' }}> No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>

                                    </td>

                                </tr>


                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                        <a href="/lead" class="btn btn-secondary"> Back</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
