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


<form class="" novalidate method="post" action="{{route('course.store')}}">
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
                        <label for="validationCustomUsername">Enter Class</label>
                        <div class="input-group">
                            
                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Example 7/JEE"
                                aria-describedby="inputGroupPrepend" name="class_name" required>
                          
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom03">Enter Board or Other </label>
                        <input type="text" class="form-control" id="validationCustom03"  required name="board">
                       
                    </div>
                    <div class="form-group mb-3">
                        <label for="validationCustom08">Total Course Fees</label>
                        <input type="text" class="form-control" id="validationCustom03"  required name="total_fees" value="0">
                      
                    </div>

                  
                    <div class="form-group mb-3">
                        <label for="validationCustom05">Include GST</label>
                        <input type="checkbox"  required name="include_gst">
                      
                    </div>
                      <div class="form-group mb-3">
                        <label >Fees Structure</label>
                        <textarea name="data"  id="fees_structure"></textarea>

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


<script src="{{ URL::asset('assets/ckeditor/ckeditor.js') }}"></script>



<script>
    var me = document.getElementById('fees_structure');
editor = CKEDITOR.replace(me, {
});

$('#submit').click(function(){

    $('#submit').submit();

});

</script>
@endsection