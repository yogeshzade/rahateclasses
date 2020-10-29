@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Employees</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Courses List</h4>
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
                <h4 class="header-title mt-0 mb-1">
                <a href="{{route('course.create')}}"> <button type="button" class="btn btn-success btn-sm pull-right">Create New </button> </a>
                </h4>
               <!--  <p class="sub-header">
                    Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.
                </p> -->

                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                 <th scope="col">Course Name</th>
                                <th scope="col">Class</th>
                                <th scope="col">Board</th>
                                <th scope="col">Total Fees</th>
                                 <th scope="col">Include GST</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courses ?? '' as $course)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                            <td>{{$course->course_name}}</td>
                            <td>{{$course->class}}</td>
                            <td>{{$course->board}}</td>
                            <td>{{$course->total_fees}}</td>

                               
                                 <td>
                                   
                                   
                                    <button type="button" class="btn btn-outline-primary">Edit</button>
                              
                             
                                 </td>
                                
                            </tr>
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