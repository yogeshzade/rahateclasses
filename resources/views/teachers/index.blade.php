@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Testimonials</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Teachers List</h4>
    </div>
</div>
@endsection



@section('content')

<!--- end row -->


<!-- end row -->


<!-- end row -->

<div class="row">
    <div class="col-lg-12">
         @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif



        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">
                <a href="{{route('teachers.create')}}"> <button type="button" class="btn btn-success btn-sm pull-right">Create New </button> </a>
                </h4>
               <!--  <p class="sub-header">
                    Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.
                </p> -->

                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="datatable-buttons">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                 <th scope="col">Teacher Name</th>
                                 <th scope="col">Teacher Photo</th>
                                   <th scope="col">Designation</th>
                                  <th scope="col">Description</th>
                                    <th scope="col">Sequence No</th>
                                  <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers ?? '' as $teacher)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>

                                <td>{{$teacher->fullname}}</td>
                            <td><img src="{{url($teacher->photo_url)}}" class="img-rounded" style="width:152px; height: 152px;"></td>
                             <td>
                                    <b>{{$teacher->designation}}</b>
                                 </td>
                                 <td>
                                    {!! $teacher->details !!}
                                 </td>
                               <b> 
                             
                                <td>{{$teacher->sequence}}</td> 
                            </b>
                                 <td>
                                    <div class="col">
                                        <div class="col-md-6">
                                             <a href="{{route('teachers.delete',$teacher->id)}}">
                                     <button class="btn btn-danger">
                                         Delete
                                     </button>
                                 </a>
                                        </div>
                                         <div class="col-md-6">
                                             <a href="{{route('teachers.edit',$teacher->id)}}">
                                     <button class="btn btn-success">
                                         Edit
                                     </button>
                                 </a>
                                        </div>
                                    </div>
                                   
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