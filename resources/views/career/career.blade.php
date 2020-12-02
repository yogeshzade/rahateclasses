@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Jobs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">List</h4>
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
                                 <th scope="col">Vacancy Name</th>
                                 <th scope="col">Vacancy Description</th>
                                 <th scope="col">Salary</th>
                                 <th scope="col">Status</th>
                               
                                
                                

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($lists ?? '' as $list)
                            @php
                              //  dd();
                            @endphp
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                               <td>{{$list->job_title}}</td>
                                 <td>{{$list->job_description}}</td>
                                   <td>{{$list->salary}}</td>
                                     <td>
                                        @if($list->status)
                                        <a href="{{route('applied.toggle',$list->id)}}">
                                        <span class="badge badge-success">Active</span>
                                   
                                        @else
                                         <a href="{{route('applied.toggle',$list->id)}}">
                                         <span class="badge badge-danger">Inactive</span>
                                          </a>
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