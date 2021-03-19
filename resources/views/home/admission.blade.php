@extends('home.layout.app')
@section('othercss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>

@endsection

@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
       
        @include('home.layout.headermenu')
        @include('home.layout.headermiddle') 

         <!-- Start Navigation -->
      
         <!-- End Navigation -->
     </header>


    
    <!-- Container Start  -->
   
<div class="container">

<!-- Row Start -->

<div class="row">
  <!-- Side Bar -->
@include('home.layout.dashboardmenu');

  <!-- Side Bar End -->

  <!-- Containt Here -->


<!-- Col Start -->
  <div class="col-md-9 col-sm-12">

    <section class="login-wrapper register" style="background-color:#f1f6f9">
    <div class="inner">
        <div class="regiter-inner">
          
            <div class="head-block">

                <h1>Fill Admission Form To Apply!</h1>
                <br/>
                <h5>Session  {{config('app.admission_session')}};</h5>
                <br/>
                @if($profilestatus && $profilestatus->status == 0)

                <div class="alert alert-warning alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>You Already Submited Application. Your Application is pending</strong>
</div>
@endif

           
                   @if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

 @if ($message = Session::get('error'))
<div class="alert alert-danger alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

            </div>

                       <ul class="nav nav-justified nav-tabs">
                    <li class="disabled"
                    >
                        <a href="#Coursetab" data-toggle="tab" aria-expanded="true"
                        style="
                       color: #fff;
    border: none;
    background: #72c02c;
    margin-right: 1px;
    "
                        > 
                            <i class="fa fa-user" aria-hidden="true"></i>
                            1. Signup Details
                           </a>
                    </li>

                    <li class="active">
                        <a data-toggle="tab"
                          style="
                       color: #fff;
    border: none;
    background: #c0992c;
     margin-right: 1px;
    "
                        >
                             <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                         2. Apply Admission</a>
                    </li>

                    <li class="active">
                        <a data-toggle="tab"
                            style="
                       color: #fff;
    border: none;
    background: #72c02c;
     margin-right: 1px;
    "
                        ><i class="fa fa-files" aria-hidden="true"></i> 3. Preview Form </a>
                    </li>


                    <li class="disabled">
                        <a data-toggle="tab"
                                                    style="
                       color: #fff;
    border: none;
    background: #72c02c;
     margin-right: 1px;
    "

                        ><i class="fa fa-bank"></i>  4.Pay Fees Online/Offline   </a>
                    </li>
                </ul>
                
            <div class="cnt-block">
                <form action="{{route('student.admission.submit')}}" method="post" class="form-outer" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                           <div class="col-md-12">
                            <b>Student Name: *</b>
                           </div>
                            <input name="fullname" type="text" placeholder="Name Of Applicant *" required="" value="{{Auth::user()->name}}">
                              @if ($errors->has('fullname'))
                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                @endif
                        </div>


                        <div class="col-md-6">
                           <div class="col-md-12">
                            <b>Father Name: *</b>
                           </div>
                            <input name="fathername" type="text" placeholder="Enter Father Name *" required="" value="{{old('fathername')}}">
                              @if ($errors->has('fathername'))
                    <span class="text-danger">{{ $errors->first('fathername') }}</span>
                @endif
                        </div>

                        <div class="col-md-6">
                           <div class="col-md-12">
                            <b>Mother Name: *</b>
                           </div>
                            <input name="mothername" type="text" placeholder="Enter Mother Name *" required="" value="{{old('mothername')}}">
                              @if ($errors->has('mothername'))
                    <span class="text-danger">{{ $errors->first('mothername') }}</span>
                @endif
                        </div>

                        <div class="col-md-6">
                            <div class="col-md-12">
                            <b>Date Of Birth: *</b>
                           </div>
                            <input name="dob" type="date" placeholder="Select DOB *" required="" value="{{Auth::user()->dob}}" placeholder="">
                              @if ($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                @endif
                           
                        </div>


                   
                        <div class="form-group col-md-12 col-sm-12">
                           <div class="col-md-12">
                            <b>Enter Address : *</b>
                           </div>
                            <input name="address" type="address" placeholder="Enter Residence Address *" rquired="" value="{{old('address')}}">
                            @if ($errors->has('address'))
                  <span class="text-danger">{{ $errors->first('address') }}</span>
              @endif
                        </div>

                     

                        

                        <div class="form-group col-md-6">
                           <div class="col-md-12">
                            <b>Select Category : *</b>
                           </div>
                           
                            <select class="form-control" id="sel1" name="category" style="height: 46px;">
                                <option selected>Select Category *</option>
                              <option value="GEN">GEN</option>
                              <option value="SC">SC</option>
                              <option value="ST">ST</option>
                              <option value="OBC">OBC</option>
                           
                            </select>
                        </div>

                            <div class="form-group col-md-6">
                           <div class="col-md-12">
                            <b>Select Gender : *</b>
                           </div>
                            <select class="form-control" id="sel1" name="gender" style="height: 46px;">
                                <option selected>Select Gender *</option>
                              <option value="M">Male</option>
                              <option value="L">Female</option>
                                
                          
                           
                            </select>
                        </div>

                     

                    


                         <div class="form-group col-md-6 col-sm-6">
                             <div class="col-md-12">
                            <b>Select Class : *</b>
                           </div>
                               
                                     <select class="form-control" id="class_id" 
                                     name="class_id"
                                     style="height: 46px;"
                                     >
                                <option selected>Select Class *</option>
                            
                            @foreach($classes as $class)
                                  <option value="{{$class->id}}">{{$class->classname}} - {{$class->type}}</option>
                            @endforeach

                          
                           
                            </select>
                                
                            
                         
                        <span class="text-danger">{{ $errors->first('class') }}</span>
                        </div>


                         <div class="form-group col-md-6 col-sm-6"  >
                              <div class="col-md-12 col-sm-12">
                              <b> Select Course : *</b>
                              </div>
                                
                                     <select class="form-control" id="course_id" name="course_id" style="height: 46px;">
                                <option selected>Select Class First *</option>
                           
                            </select>
                                
                             
                         
                        <span class="text-danger">{{ $errors->first('class') }}</span>
                        </div>

                         <div class="col-md-12" id="feesshow">
      <b class="text-success" >*** Total Course Fees is Rs. ***</b>
                         </div>
                     

                        <div class="col-md-6 col-sm-12">
                           <div class="col-md-12">
                            <b>Enter City : *</b>
                           </div>
                            <input name="city" type="text" placeholder="Enter City *" rquired="" value="NAGPUR" readonly="">
                            @if ($errors->has('city'))
                  <span class="text-danger">{{ $errors->first('city') }}</span>
              @endif
                        </div>

                     

                        <div class="col-md-6 col-sm-12">
                           <div class="col-md-12">
                            <b>Enter State : *</b>
                           </div>
                            <input name="state" type="text" placeholder="Enter State *" rquired="" value="Maharashtra" readonly="">
                            @if ($errors->has('state'))
                  <span class="text-danger">{{ $errors->first('state') }}</span>
              @endif
                        </div>

                        <div class=" col-md-6 col-sm-12">
                           <div class="col-md-12">
                            <b>Enter Pincode : *</b>
                           </div>
                            <input name="pincode" type="text" placeholder="Enter PinCode *" rquired="" value="{{old('pincode')}}" maxlength="6">
                            @if ($errors->has('pincode'))
                  <span class="text-danger">{{ $errors->first('pincode') }}</span>
              @endif
                        </div>

                        
                        <div class="col-md-6 col-sm-12">
                           <div class="col-md-12">
                            <b>Student Mob Number : *</b>
                           </div>
                            <input name="studentmobile" type="text" placeholder="Enter Student Mob No *" rquired="" value="{{Auth::user()->mobile}}" readonly>
                            @if ($errors->has('studentmobile'))
                  <span class="text-danger">{{ $errors->first('studentmobile') }}</span>
              @endif
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                          <div class="col-md-12">
                            <b>Parent Mob Number : *</b>
                           </div>
                            <input name="parentmobile" type="text" placeholder="Enter Parent Mob No *" rquired="" value="{{old('parentmobile')}}"  maxlength="10">
                            @if ($errors->has('parentmobile'))
                  <span class="text-danger">{{ $errors->first('parentmobile') }}</span>
              @endif
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                          <div class="col-md-12">
                            <b>Aadhar Number : *</b>
                           </div>
                            <input name="aadharno" type="text" placeholder="Enter Aadhar No *" rquired="" value="{{old('aadharno')}}"  maxlength="15">
                            @if ($errors->has('aadharno'))
                  <span class="text-danger">{{ $errors->first('aadharno') }}</span>
              @endif
                        </div>


                             <div class="form-group col-md-6 col-sm-12">
                              <div class="col-md-12">
                                Upload Photo : *
                              </div>
                              
                                    <input type="file" name="image" placeholder="Choose image" id="image" required="">
                               
                         
                        <span class="text-danger">{{ $errors->first('image') }}</span>
                        </div>


                             <div class="form-group col-md-6 col-sm-12">
                             
                          
                             <img id="image_preview_container" src="{{url('user.png')}}"
                        alt="preview image" style="width: 240px; max-height: 150px;">
                        </div>


                        
                        



                    </div>

             
                  
            
                
                    {{-- Row Start --}}
                    <div class="row">
                <div class="col-md-6">
                    <div class="button-outer">
                        <button class="btn">Apply Now <span class="icon-more-icon"></span></button>
                    </div>
                </div>

              

                    </div>
                    {{-- Row End --}}

                </form>
            </div>
        </div>
    </div>
</section>

               

  </div>

  <!-- Col ENd -->


  <!-- Content End Here -->
</div>

<!-- Row ENd -->




 </div> 

 <!-- Container End -->




    <!-- Optional JavaScript -->



     @include('home.layout.scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

@include('home.layout.dashboardscripts');


     <script type="text/javascript">



      $(document).ready(function (e) {

        $("#feesshow").hide();

       @if($profilestatus)
  $(document).ready(function(){
        $(".form-outer :input").prop("disabled", true);
    });

       @endif

        

       $("#course_id").prop("disabled",true); 
   
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });
  
   $('#image').change(function(){
           
    let reader = new FileReader();

    reader.onload = (e) => { 

      $('#image_preview_container').attr('src', e.target.result); 
    }

    reader.readAsDataURL(this.files[0]); 
  
   });
  
   $('#upload_image_form').submit(function(e) {

     e.preventDefault();
  
     var formData = new FormData(this);
  
     $.ajax({
        type:'POST',
        url: "{{ url('store.image')}}",
        data: formData,
        cache:false,
        contentType: false,
        processData: false,
        success: (data) => {
           this.reset();
           alert('Image has been uploaded successfully');
        },
        error: function(data){
           console.log(data);
         }
       });
   });
});


    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: "{{route('captcha.reload')}}",
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

    $("#class_id").on('change',function(){

      var clssid = $("#class_id").val();
      if(clssid != "")

      {

          $.ajax({
            type: 'POST',
            url: "{{route('fetch.course')}}",
            dataType: "json",
            data:{
              class_id:clssid
            },
            success: function (data) {

          
                 $("#course_id").prop("disabled",false); 
                 $('#course_id').empty();
                 console.log(data);
               $("#course_id").append(data);
                     var coursedata = data;
            }
        });
        
      }

       $("#course_id").prop("disabled",true); 
       

    });

</script>


      @endsection