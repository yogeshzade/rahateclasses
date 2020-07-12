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
        <h4 class="mb-1 mt-0">Employee Tables</h4>
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
                <h4 class="header-title mt-0 mb-1">Hoverable rows</h4>
               <!--  <p class="sub-header">
                    Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.
                </p> -->

                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                 <th scope="col">Photo</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Employee Code</th>
                                <th scope="col">In Time</th>
                                 <th scope="col">Out Time</th>
                                  <th scope="col">Salary</th>
                                  <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees ?? '' as $employee)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                 <td><img src="" class="avatar-md rounded-circle mr-2"></td>
                                <td>{{$employee->employee_name}}</td>
                               <td>{{$employee->employee_code}}</td>
                               
                                <td>{{$employee->time_in}}</td>
                                <td>{{$employee->time_out}}</td>
                                 <td>{{$employee->salary}}</td>
                                 <td>
                                   
                                     <a href="{{route('employee.edit',$employee->id)}}">
                                    <button type="button" class="btn btn-outline-primary">Edit</button>
                                </a>
                                <!--   <a href="{{route('employee.delete',$employee->id)}}">
                                    <button type="button" class="btn btn-outline-danger">Delete</button>
                                </a> -->
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