@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Notes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Notes List</h4>
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
            
   
      <a href="{{route('notes.create')}}" class="btn btn-success pull-right">Add New</a>
 
              </h4>

                <div class="table-responsive" >
                    <table id="example" class="display table table-hover mb-0" style="width:100%">

                    
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                 <th scope="col">Class Name</th>
                                 <th scope="col">Subject Name</th>
                                 <th scope="col">Topic Name</th>
                                    <th scope="col">Download</th>
                                    <th scope="col">Action</th>
                                

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($notes ?? '' as $note)
                            @php
                              //  dd();
                            @endphp
                            <tr scope="{{$loop->iteration}}">
                                
                                <td>{{$loop->iteration}}</td>
                                    <td>{{$note->class_name}}</td>
                                    <td>{{$note->subject_name}}</td>
                                     <td>{{$note->topic_name}}</td>
                                      <td>
                                        <a href="{{$note->file_link}}" class="btn btn-sm btn-success">
                                          Download
                                        </a>
                                      </td>
                                      <td>
                                        <a href="" class="btn btn-md btn-danger">
                                          Delete
                                        </a>
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