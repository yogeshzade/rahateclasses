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
                                 <th scope="col">Edit</th>
                                 <th scope="col">Status</th>
                                
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

                                 <td>
                                   
                                   @if($course->status)
                                  <a href="{{route('course.toggle',$course->id)}}">  <button type="button" class="btn btn-success">Active</button> </a>
                                    @else
                                    <a href="{{route('course.toggle',$course->id)}}">   <button type="button" class="btn btn-danger">Inactive</button></a>
                                    @endif
                             
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