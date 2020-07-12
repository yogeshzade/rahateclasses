@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Teacher</a></li>
                <li class="breadcrumb-item active" aria-current="page">New</li>
            </ol>
        </nav>
       <!--  <h4 class="mb-1 mt-0">Forms Validation</h4> -->
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                   @if ($errors->any())
     @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
<li>{{$error}}</li>
</div>

         
     @endforeach
 @endif

 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif


                <h4 class="header-title mt-0 mb-1">Add New Employee</h4>
                <p class="sub-header">Add New Employee Details.</p>


                <form class="needs-validation" novalidate method="post">
                    @csrf
                <!--     @method('POST') -->
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Employe Full name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Full name"
                            value="" required name="fullname">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                   
                    <div class="form-group mb-3">
                        <label for="validationCustomUsername">Employee Code</label>
                        <div class="input-group">
                            
                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="001"
                                aria-describedby="inputGroupPrepend" name="employee_code" required>
                            <div class="invalid-feedback">
                                Please Enter a Employee Code.
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Monthly Holidays (In Number)</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="0" required name="holidays">
                        <div class="invalid-feedback">
                            Please provide a valid Number.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom08">Employee Payment Type</label>
                       <select class="custom-select mb-2" name="paymenttype">
                    <option selected="" value="0">Monthly</option>
                    <option value="1">Hourly</option>
                </select>
                        <div class="invalid-feedback">
                            Please select a valid option.
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="validationCustom04">Salary</label>
                        <input type="text" class="form-control" id="validationCustom04" placeholder="Amount Without Comma" required name="salary">
                        <div class="invalid-feedback">
                            Please provide a valid Amount.
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom05">IN Time (12 Hour Format)</label>
                        <input type="time" class="form-control" id="validationCustom05" placeholder="10:00" required name="intime">
                        <div class="invalid-feedback">
                            Please provide a valid Time.
                        </div>
                    </div>
                      <div class="form-group mb-3">
                        <label for="validationCustom06">OUT Time (12 Hour Format)</label>
                        <input type="time" class="form-control" id="validationCustom06" placeholder="10:00" required name="outtime">
                        <div class="invalid-feedback">
                            Please provide a valid Time.
                        </div>
                    </div>
                      <div class="form-group mb-3">
                        <label for="validationCustom07">Image</label>
                        <!-- <input type="time" class="form-control" id="validationCustom05" placeholder="10:00" required> -->
                        <input type="file" class="form-control" id="example-fileinput validationCustom07" required="" name="image">
                        <span class="help-block">
                            <small>Image Must be JPEG,PNG,JPG</small>
                        </span>

                        <div class="invalid-feedback">
                            Please provide a valid Time.
                        </div>
                    </div>

                  <!--   <div class="form-group mb-3">
                        <div class="custom-control custom-checkbox form-check">
                            <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                            <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div> -->
                    <button class="btn btn-primary" type="submit">Create Employee</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->


   
<!-- end row -->


<!-- end row -->


<!-- end row -->
@endsection

@section('script')
<!-- Plugin js-->
<script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Validation init js-->
<script src="{{ URL::asset('assets/js/pages/form-validation.init.js') }}"></script>
@endsection