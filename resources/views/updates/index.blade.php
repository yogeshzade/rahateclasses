@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">News & Updates</a></li>
                <li class="breadcrumb-item active" aria-current="page">Manage</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Updates List</h4>
    </div>
</div>
@endsection

 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif




@section('content')

<!--- end row -->


<!-- end row -->


<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">
                <a href="{{route('updates.create')}}"> <button type="button" class="btn btn-success btn-sm pull-right">Create New </button> </a>
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
                                 <th scope="col">Notification Title</th>
                                 <th scope="col">Notification Body</th>
                                   <th scope="col">Notification Link/File</th>
                                    <th scope="col">Action</th>
                                   
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($updates ?? '' as $update)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                         
                           
                                 <td>
                                   {{$update->notification_title}}
                        
                                 </td>


                                 <td>
                                   {{$update->notification_body}}
                        
                                 </td>

                                   <td>
                                    @if(isset($update->file_path))
                                    <a href="{{url($update->file_path)}}">
                                        Download Here
                                    </a>
                                    @else
                                     <a href="{{url($update->notification_link)}}">
                                       Click Here
                                    </a>
                                    @endif
                                    
                                 
                                 </td>
                                 <td>
                                     <a href="{{route('updates.delete',$update->id)}}"> Delete </a>
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