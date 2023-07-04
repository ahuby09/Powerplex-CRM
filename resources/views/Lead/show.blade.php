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
                                        <form>
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Date Of Birth</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-user"></i></span><input
                                                                readonly id="dob"
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
                                                                readonly id="medicalCondtions"
                                                                value="{{ $lead->medicalCondtions }}"name="medicalCondtions"
                                                                placeholder="medicalCondtions" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Address</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="addressLine" value="{{ $lead->fullAddress }}"
                                                                placeholder="Address Line 1" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Postcode</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="postcode" value="{{ $lead->postcode }}"
                                                                name="postcode" placeholder="Address Line 2"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Phone</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="city" name="city"
                                                                value="{{ $lead->Phone }}" placeholder="City"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Landline</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="state" name="state"
                                                                value="{{ $lead->landline }}"class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Email</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="email" name="email"
                                                                value="{{ $lead->email }}" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Gas Supply</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="gasSupply" name="gasSupply"
                                                                value="{{ $lead->gasSupply }}" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Employed / Benefits</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-envelope"></i></span><input
                                                                readonly id="employedBenefits"
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
                                                                readonly id="benefit" name="benefit"
                                                                value="{{ $lead->benefit }}" placeholder="benefit"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Telesales Agent</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-earphone"></i></span><input
                                                                readonly id="username" name="username"
                                                                value="{{ $lead->user->name }}" placeholder="username"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </td>
                                    <td colspan="1" class="text-light bg-dark">
                                        <form class="well form-horizontal">
                                            <fieldset>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Earning below 31,000</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-user"></i></span><input
                                                                readonly id="belowthreshhold" name="belowthreshhold"
                                                                value="{{ $lead->belowthreshold }}" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Earnings</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="earnings" name="earnings"
                                                                value="{{ $lead->earnings }}" placeholder=""
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Energy Rating</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="addressLine2" name="addressLine2"
                                                                value="{{ $lead->energyRating }}"
                                                                placeholder="Address Line 2" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Updates Since epc Rating</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="updatesSinceEpc"
                                                                value="{{ $lead->updatesSinceEpc }}"name="updatesSinceEpc"
                                                                placeholder="updatesSinceEpc" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">condensingBoiler</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="city" name="city"
                                                                placeholder="condensingBoiler"
                                                                value="{{ $lead->condensingBoiler }}"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">housing Situation</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="housingSitu"
                                                                value="{{ $lead->housingSitu }}"name="housingSitu"
                                                                placeholder="housingSitu" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Type Of Property</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-home"></i></span><input
                                                                readonly id="typeOfProperty"
                                                                value="{{ $lead->typeOfProperty }}"name="typeOfProperty"
                                                                placeholder="typeOfProperty" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Wall Type</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-envelope"></i></span><input
                                                                readonly id="wallType" name="wallType"
                                                                value="{{ $lead->wallType }}" placeholder="wallType"
                                                                class="form-control" required="true" value=""
                                                                type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Wall Insulation</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-earphone"></i></span><input
                                                                readonly id="wallinsulation" name="wallinsulation"
                                                                value="{{ $lead->wallinsulation }}"
                                                                placeholder="wallinsulation" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Chosen Heating Option</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-earphone"></i></span><input
                                                                readonly id="chosenHeatingOption"
                                                                name="chosenHeatingOption"
                                                                value="{{ $lead->chosenHeatingOption }}"
                                                                placeholder="chosenHeatingOption" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Current Heating Option</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-earphone"></i></span><input
                                                                readonly id="currentHeating" name="currentHeating"
                                                                value="{{ $lead->currentHeating }}"
                                                                placeholder="currentHeating" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-4 control-label">Secondary Heating</label>
                                                    <div class="col-md-8 inputGroupContainer">
                                                        <div class="input-group"><span class="input-group-addon"><i
                                                                    class="glyphicon glyphicon-earphone"></i></span><input
                                                                readonly id="secondaryHeating" name="secondaryHeating"
                                                                value="{{ $lead->secondaryHeating }}"
                                                                placeholder="secondaryHeating" class="form-control"
                                                                required="true" value="" type="text"></div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="/lead"> Back</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
