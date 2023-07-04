@extends('layouts/layout')
@section('content')
<!--- Show leads in cards !--->
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">Add New</button>
    <div class="row" style="margin-top: 20px;">
        @foreach (\App\Models\Company::all() as $company)
            <div class="col-sm-3" style="padding-top: 20px;">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$company->name}}</h5>
                    <p class="card-text">Company Address: {{$company->address}}</p>
                    <p class="card-text">Company Number: {{$company->number}}</p>
                    <p class="card-text">Company Email: {{$company->email}}</p>
                </div>
                </div>
            </div>
        @endforeach
    </div>


<!--- modal For Adding Data !--->
<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>

            <div class="modal-body">
                    <div class="container">
                        <form class="form-horizontal" method="POST" action="{{ route('company.store') }}">
                            {{ csrf_field() }}
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="name">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="name" placeholder="Enter Company Name" name="name">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="address">Address</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="number">Number</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="number" placeholder="Enter Phone Number" name="number">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-sm-2" for="pwd">Email</label>
                            <div class="col-sm-10">
                              <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <div class="checkbox">
                                <label><input type="checkbox" name="remember"> Remember me</label>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
            </div>
        </div>
    </div>
</div>
@endsection

