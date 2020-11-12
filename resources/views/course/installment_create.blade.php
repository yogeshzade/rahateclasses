@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('installment.index')}}">Installment</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add New</li>
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




<form class="" novalidate method="post" action="{{route('installment.store')}}" enctype='multipart/form-data'>
                    @csrf
                <!--     @method('POST') -->
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Select Course *</label>
                         <select data-plugin="customselect" class="form-control" name="course_id" id="courseid" required="">
                             <option value="">--Select--</option>
                              @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->course_name}}</option>
                              @endforeach
                          </select>
                              
                               
                    </div>
                    <!-- Row Start -->
                    <div class="row">
                        <!-- Col Start -->
                        <div class="col-md-3">

                            <!-- Installment No -->
                               <div class="form-group mb-3">
                        <label for="validationCustomUsername">Installment No * <small>This Calculte Automatically</small></label>
                        <div class="input-group">
                            
                            <input type="text" class="form-control" id="installmentno" placeholder=""
                                aria-describedby="inputGroupPrepend" name="installment_no" required readonly ="" >
                          
                        </div>
                    </div>

                            <!-- Installment No End -->

                            
                        </div>
                        <!-- col end -->

                           <!-- Col Start -->
                        <div class="col-md-3">

                            <!-- Installment No -->
                               <div class="form-group mb-3">
                        <label for="validationCustomUsername">Installment Name * <small>Like(First,Second)</small></label>
                        <div class="input-group">
                            
                            <input type="text" class="form-control" id="installments_name" placeholder=""
                                aria-describedby="inputGroupPrepend" name="installments_name" required >
                          
                        </div>
                    </div>

                            <!-- Installment No End -->

                            
                        </div>
                        <!-- col end -->

                           <!-- Col Start -->
                        <div class="col-md-3">

                            <!-- Installment No -->
                               <div class="form-group mb-3">
                        <label for="validationCustomUsername">Installment Amount * <small>Like(First,Second)</small></label>
                        <div class="input-group">
                            
                            <input type="text" class="form-control" id="installment_amount" placeholder=""
                                aria-describedby="inputGroupPrepend" name="amount" required >
                          
                        </div>
                    </div>

                            <!-- Installment No End -->

                            
                        </div>
                        <!-- col end -->



                      


                    </div>

                    <!-- Row End -->

                            <!-- Installment No -->
                               <div class="form-group mb-3">
                        <label for="validationCustomUsername">No Of Days After Previous Installment * <small>(Keep 0 For Instant)</small></label>
                        <div class="input-group">
                            
                            <input type="number" class="form-control" id="installment_amount" placeholder=""
                                aria-describedby="inputGroupPrepend" name="days_after_admission" required  value="0">
                          
                        </div>
                    </div>

                            <!-- Installment No End -->

                   
                   
                 
                   

                  
                    <button class="btn btn-primary" type="submit" id="submit">Create Installment</button>
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

    $("#courseid").change(function() {
       var course_id = $(this).val();
      console.log("Course_id",1);


       $.ajax({

                url: "{{route('installment.number')}}",
                    data: {
                       "course_id" : course_id
                    },
                    dataType: "json",
                    method: "GET",
                    success: function(response){
                       
                            var finalno = response + 1;
                             $('#installmentno').val(finalno);
                                             


                    }

            })

    });


  
$('#submit').click(function(){

    $('#submit').submit();

});

</script>
@endsection