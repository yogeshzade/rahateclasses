@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{route('teachers.index')}}">Faculties</a></li>
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




<form class="" novalidate method="post" action="{{route('teachers.update',$tid->id)}}" enctype='multipart/form-data'>
                    @csrf
                <!--     @method('POST') -->
                    <div class="form-group mb-3">
                        <label for="validationCustom01">Enter Teacher Name </label>

                          <div class="input-group">
                            
                            <input type="text" class="form-control" id="teacher_name" placeholder=""
                                aria-describedby="inputGroupPrepend" name="teacher_name" 
                                value="{{$tid->fullname}}" 
                                 >


                          
                        </div>
                      
                              
                               
                    </div>
                    <!-- Row Start -->
                    <div class="row">
                        <!-- Col Start -->
                        <div class="col-md-12">

                            <!-- Installment No -->
                               <div class="form-group mb-3">
                        <label for="validationCustomUsername">Enter Designation * </label>
                        <div class="input-group">
                            
                            <input type="text" class="form-control" id="designation" placeholder=""
                                aria-describedby="inputGroupPrepend" name="designation"  
                                value="{{$tid->designation}}" 
                                 >
                          
                        </div>
                    </div>

                            <!-- Installment No End -->

                            
                        </div>
                        <!-- col end -->

                           <!-- Col Start -->
                        <div class="col-md-12">

                         
                               <div class="form-group mb-3">
                        <label for="validationCustomUsername">Enter Description </label>
                        <div class="input-group">
                            
                          
                        <textarea id='description' name='description' id="description" >
                            {{ $tid->details }}
                        </textarea>               
                   
                          
                        </div>
                    </div>

                            

                            
                        </div>
                        <!-- col end -->

                           <!-- Col Start -->
                        <div class="col-md-12">

                            <!-- Installment No -->
                               <div class="form-group mb-3">
                        <label for="validationCustomUsername">Update Sequence * </label>
                          <div class="input-group">

                                  <input type="text" class="form-control" id="validationCustom01" placeholder=""
                           required name="sequence" value="{{$tid->sequence}}">
                          
                        </div>
                      
                    </div>

                            <!-- Installment No End -->

                            
                        </div>
                        <!-- col end -->



                      


                    </div>

                    <!-- Row End -->

                          

                   
                   
                 
                   

                  
                    <button class="btn btn-primary" type="submit" id="submit">Create</button>
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

    CKEDITOR.replace('description',{

width: "100%",
height: "200px"

}); 

  
$('#submit').click(function(){

    $('#submit').submit();

});

</script>
@endsection