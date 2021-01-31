@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Job</a></li>
                <li class="breadcrumb-item active" aria-current="page">New</li>
            </ol>
        </nav>
       <!--  <h4 class="mb-1 mt-0">Forms Validation</h4> -->
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

                   @if ($errors->any())
     @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
<li>{{$error}}</li>
</div>

         
     @endforeach
 @endif

 @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif


                <h4 class="header-title mt-0 mb-1">Add New Vaccancy</h4>
                <p class="sub-header"></p>


<form class="" novalidate method="post" action="{{route('career.new.store',$data->id)}}" enctype='multipart/form-data'>
                    @csrf
                <!--     @method('POST') -->
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Vacancy Name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Course name"
                            value="{{$data->job_title}}" required name="job_title">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                   
                  

                 
                      <div class="form-group mb-3">
                        <label >Job Description</label>

                        <textarea id='job_description' name='job_description' id="job_description" >
                          {!! $data->job_description !!}

                        </textarea>               
                   

                    </div>


                      

                  <!--   <div class="form-group mb-3">
                        <div class="custom-control custom-checkbox form-check">
                            <input type="checkbox" class="custom-control-input" id="invalidCheck" required>
                            <label class="custom-control-label" for="invalidCheck">Agree to terms and conditions</label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                        </div>
                    </div> -->
                    <button class="btn btn-primary" type="submit" id="submit">Update Vacancy</button>
                </form>

            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->


   
<!-- end row -->


<!-- end row -->


<!-- end row -->
@endsection

@section('script')
<!-- Plugin js-->
<script src="{{ URL::asset('assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- Validation init js-->




<script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace('job_description',{

width: "100%",
height: "200px"

}); 

  
$('#submit').click(function(){

    $('#submit').submit();

});



</script>
@endsection