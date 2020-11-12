@extends('layouts.vertical')


@section('css')
<!-- plugin css -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Course</a></li>
                <li class="breadcrumb-item active" aria-current="page">Installment</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">View Course Installments</h4>
    </div>
</div>
@endsection

@section('content')



    <div class="row">
        <div class="col-12">

            <div class="card">

                <div class="card-body">

                    
                      
                </h4>
                 

                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                        <a href="{{route('installment.create')}}"> <button type="button" class="btn btn-success btn-md float-right mb-3">Create New </button> </a>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Total Fees</th>
                                <th>Total Installment</th>
                                <th>Enrolled Student</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                          
                           @foreach ($installments ?? '' as $installment)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                 <td>{{$installment->course_name}}</td>
                                  <td><i class="fas fa-rupee-sign"></i> {{$installment->total_fees}}</td>
                                   <td>
                                       @php

                                       $counts = \App\Installment::where('course_id',$installment->id)->count();
                                       echo $counts;
                                       @endphp
                                   </td>
                          
                                <td>0</td>
                                <td>
                                    <a href="{{route('installment.view',$installment->id)}}" 
                                        target="popup" 
                                        
                                        > <button class="btn btn-sm btn-warning"><i class="far fa-eye"></i></button></a> 

                                </td>
                            </tr>
                            @endforeach
                         
                        </tbody>
                    </table>
                    
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->


 

    
@endsection

@section('script')
<!-- datatable js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Datatables init -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
@endsection