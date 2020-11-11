@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Inquiries</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Inquiries View</h4>
    </div>
</div>
@endsection

@php
$data = [
["firstname" => 'Sheryu', 'lastname' => 'N', 'handle' => '@Shreyu', 'css_class' => 'active'],
["firstname" => 'Greeva', 'lastname' => 'Y', 'handle' => '@greeva', 'css_class' => 'success'],
["firstname" => 'Mannat', 'lastname' => 'B', 'handle' => '@mannu', 'css_class' => 'danger'],
["firstname" => 'Dhaynu', 'lastname' => 'B', 'handle' => '@dhayanu', 'css_class' => 'warning']
];
@endphp


@section('content')

<!--- end row -->


<!-- end row -->


<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
               
               <!--  <p class="sub-header">
                    Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.
                </p> -->

                <div class="table-responsive">
<div class="row">
<div class="col-md-12">
    <div class="form-group row">
        <label class="col-lg-2 col-form-label" for="example-email">Name</label>
        <div class="col-lg-6">
            <input type="name" id="example-email" name="example-email" class="form-control"
        placeholder="name" value="{{$inquriyview->name}}" disabled="">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-2 col-form-label" for="example-email">Email</label>
        <div class="col-lg-6">
            <input type="name" id="example-email" name="example-email" class="form-control"
        placeholder="name" value="{{$inquriyview->email}}" disabled="">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-2 col-form-label" for="example-email">Mobile</label>
        <div class="col-lg-6">
            <input type="name" id="example-email" name="example-email" class="form-control"
        placeholder="name" value="{{$inquriyview->mobile}}" disabled="">
        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-2 col-form-label" for="example-email">Message</label>
        <div class="col-lg-6">
            <textarea class="form-control" rows="5" id="comment" disabled="">
                {{$inquriyview->message}} 
            </textarea>

        </div>
    </div>

    <div class="form-group row">
        <label class="col-lg-2 col-form-label" for="example-email">Date</label>
        <div class="col-lg-6">
            <input type="name" id="example-email" name="example-email" class="form-control"
        placeholder="name" value="{{$inquriyview->created_at}}" disabled="">

        </div>
    </div>

    <div class="form-group row">
        <div class="col-lg-6">
        <a href="{{route('inquiry.delete',$inquriyview->id)}}">   <button class="btn btn-danger">Delete</button> </a>

        </div>
       
    </div>


</div>
</div>
                   
               
                </div>
            </div>
        </div>
    </div>

   
</div>
<!-- end row -->


<!-- end row -->


<!-- end row -->
@endsection

@section('script')
@endsection

@section('script-bottom')
@endsection