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
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course Name</th>
                                <th>Installment No</th>
                                <th>Installment Name</th>
                                <th>Installment Amount</th>
                                 <th>Pay After No Of Days</th>
                            </tr>
                        </thead>
                    
                    
                        <tbody>
                          
                           @foreach ($installments ?? '' as $installment)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                  <td>
                                       @php

                                       $counts = \App\Course::where('id',$installment->course_id)->first();
                                       echo $counts->course_name;
                                       @endphp
                                   </td>
                                  
                                   <td>{{$installment->installment_no}}</td>
                                    <td>{{$installment->installments_name}}</td>
                                     <td>{{$installment->amount}}</td>
                                       <td>{{$installment->days_after_admission}}</td>
                                         <td>{{$installment->days_after_admission}}</td>
                          
                              
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