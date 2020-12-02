@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Students</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Students List</h4>
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
                
               <!--  <p class="sub-header">
                    Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.
                </p> -->

                <div class="table-responsive" >
                    <table id="example" class="display table table-hover mb-0" style="width:100%">

                    
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                 <th scope="col">Student Photo</th>
                                 <th scope="col">Student Name</th>
                                 <th scope="col">Course</th>
                                <th scope="col">Class</th>
                                <th scope="col">Total Fees</th>
                                 <th scope="col">Admission Status</th>
                                  <th scope="col">Active Status</th>
                                    <th scope="col">Action</th>
                                

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($studentslists ?? '' as $studentlist)
                            @php
                              //  dd();
                            @endphp
                            <tr scope="{{$loop->iteration}}">
                                
                                <td>{{$loop->iteration}}</td>
                                  <td><img src="{{url($studentlist->student_photo)}}" class="img-rounded" style="width:120px; height: 90px;" /></td>
                                    <td>{{$studentlist->applicant_name}}</td>
                                    <td>{{$studentlist->studentCourse->course_name}}</td>
                                      <td>{{$studentlist->studentClass->classname}}</td>
                                        <td>Rs. {{$studentlist->studentCourse->total_fees}}</td>
                                          <td>
                                              @if($studentlist->status)
                                              <div class="badge badge-success">Approved</div>
                                               @else
                                              <div class="badge badge-danger">
                                              Not Approved
                                          </div>
                                              @endif
                                          </td>
                                            <td>
                                                @if($studentlist->userProfile->account_status)
                                                 <div class="badge badge-success">Active</div>
                                                @else
                                                    <div class="badge badge-danger">Inactive</div>
                                                @endif
                                                
                                            </td>
                                              <td>
                                                 <span class=""> <i class="fa fa-eye"></i> </span>
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
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      //  alert('dom ready');
    $('#example').DataTable();
} );
</script>
@endsection


@section('script-bottom')
@endsection