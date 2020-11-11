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
                <li class="breadcrumb-item active" aria-current="page">Index</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Inquiries Table</h4>
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
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                 <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($inquiries ?? '' as $inquiry)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                            <td>{{$inquiry->name}}</td>
                            <td>{{$inquiry->email}}</td>
                            <td>{{$inquiry->mobile}}</td>
                            
                                @if($inquiry->status)
                                    <td class="badge badge-danger">Unread</td>
                                @else
                                <td class="badge badge-success">Read</td>
                                @endif
                            <td ><a href="{{route('inquiry.view',$inquiry->id)}}">View</a></td>
                            @endforeach
                        </tbody>
                    </table>
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