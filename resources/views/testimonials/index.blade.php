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
                <a href="{{route('testimonials.create')}}"> <button type="button" class="btn btn-success btn-sm pull-right">Create New </button> </a>
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
                                 <th scope="col">Student Name</th>
                                 <th scope="col">Student Photo</th>
                                   <th scope="col">Class</th>
                                  <th scope="col">Description</th>
                                  <th scope="col">Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials ?? '' as $testimonial)
                            <tr scope="{{$loop->iteration}}">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$testimonial->name}}</td>
                            <td><img src="{{url($testimonial->image_path)}}" class="img-rounded" style="width:30%;height:30%"></td>
                             <td>
                                    {{$testimonial->class}}
                                 </td>
                                 <td>
                                    {{$testimonial->description}}
                                 </td>
                                
                                 <td>
                                    <a href="{{route('testimonials.delete',$testimonial->id)}}">
                                     <button class="btn btn-danger">
                                         Delete
                                     </button>
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
@endsection

@section('script-bottom')
@endsection