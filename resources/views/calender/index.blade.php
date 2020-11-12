@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Calender</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
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
                <a href="{{route('calender.create')}}"> <button type="button" class="btn btn-success btn-md pull-right">Create New </button> </a>
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
                                 <th scope="col">Title</th>
                                <th scope="col">Details</th>
                                <th scope="col">File</th>
                                <th scope="col">Status</th>
                                 <th scope="col">Date</th>
                                 <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notifications ?? '' as $notification)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                            <td>{{$notification->title}}</td>
                            <td>{!! $notification->details !!}</td>
                        
        
                               <td>{{$notification->date}}</td>
                                <td><a href="{{$notification->file_path}}"><button type="button" class="btn btn-outline-primary">Download</button></a></td>
                               <td>
                                <a href="{{route('calender.toggle',$notification->id)}}">
                                  @if($notification->status)
                                   <button type="button" class="btn btn-outline-success">Active</button>
                                  @else
                                  <button type="button" class="btn btn-outline-danger">Deactivate</button>
                                  @endif
                                </a>
                              </td>
                                <td><a href="{{route('calender.delete',$notification->id)}}"> <button type="button" class="btn btn-danger">Delete</button></a> </td>

                             
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