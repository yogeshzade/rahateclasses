@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Course</a></li>
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


                <h4 class="header-title mt-0 mb-1">Add New Course</h4>
                <p class="sub-header">Add New Course Details.</p>


<form class="" novalidate method="post" action="{{route('course.store')}}" enctype='multipart/form-data'>
                    @csrf
                <!--     @method('POST') -->
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Course Name</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Course name"
                            value="" required name="course_name">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                   
                    <div class="form-group mb-3">
                        <label for="validationCustomUsername">Select Class</label>
                       
                        <select class="form-control" id="classform" name="class_name">
                            <option value="" selected> -- Select --</option>
                            @foreach ($classes as $class)
                        <option value="{{$class->id}}">{{$class->classname}} - {{$class->type}}</option>
                            @endforeach
                           
                          </select>
                            
                      

                      
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Enter Board or Other </label>
                        <input type="text" class="form-control" id="board"  required name="board" readonly="">
                       
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom08">Total Course Fees</label>
                        <input type="text" class="form-control" id="validationCustom03"  required name="total_fees" value="0">
                      
                    </div>

                  
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Include GST</label>
                        <input type="checkbox"  required name="include_gst" checked>
                      
                    </div>
                      <div class="form-group mb-3">
                        <label >Fees Structure</label>

                        <textarea id='long_desc' name='fees_data' id="feesstruct" ></textarea>               
                   

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
                    <button class="btn btn-primary" type="submit" id="submit">Create Course</button>
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
  CKEDITOR.replace('long_desc',{

width: "100%",
height: "200px"

}); 

  
$('#submit').click(function(){

    $('#submit').submit();

});

$('#classform').on('change',function(){

    var selectedval = $('#classform').val();

    $.ajax({

url: "{{route('fetch.class')}}",
    data: {
       "id" : selectedval
    },
    dataType: "json",
    method: "GET",
    success: function(response){
       
            var ipvalue = response.type;
            console.log(ipvalue);
             $('#board').val(ipvalue);
                             


    }

});

  //  console.log(selectedval);

  

});

</script>
@endsection