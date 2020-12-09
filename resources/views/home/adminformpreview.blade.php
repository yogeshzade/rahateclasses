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


         <!-- Start Navigation -->
      
         <!-- End Navigation -->
     </header>


    
    <!-- Container Start  -->
   
<div class="container">

<!-- Row Start -->

<div class="row">
  <!-- Side Bar -->


  <!-- Side Bar End -->

  <!-- Containt Here -->


<!-- Col Start -->
  <div class="col-md-12 col-sm-12">

    <section class="login-wrapper register" style="background-color:#f1f6f9">
    <div class="inner">
        <div class="regiter-inner">
          
            <div class="head-block">

                <h1>Fill Admission Form To Apply!</h1>
                <br/>
                <h5>Session  2020-21</h5>
                <br/>

            </div>
          
            <div class="cnt-block">

<div id="printable">
              <!-- Profile Info -->
              <div class="row">
                <div class="col-md-5 col-sm-5 col-sm-5">
                    <div class="thumbnail" >
                                    <img src="{{url($profileinfo->student_photo)}}" style="max-height: 180px; max-width: 180px;"/>
                                </div>
                </div>
                <div class="col-md-7 col-sm-7">
                  <div class="col-md-12">
                     <b>Application ID : <b class="text-danger">RHT/ADM/20/21- {{$profileinfo->id}}</b></b>
                  </div>
                  <div class="col-md-12">
                    <b>Application Date : {{$profileinfo->admission_date}}</b>
                  </div>
                 <div class="col-md-12">
                    <b>Total Fees: </b> <b class="text-danger">Rs. {{$profileinfo->studentCourse->total_fees}}</b>
                  </div>
                
                </div>
                <!--  -->
              </div>
               <!-- Profile Info Ended-->
               <br/>
                <form action="" method="post" class="form-outer" enctype="">
                    @csrf
                    <div class="row">

                        <div class="form-group col-md-6">
                           <div class="col-md-12">
                            <b>Student Name:</b>
                           </div>
                            <input name="fullname" type="text" placeholder="Name Of Applicant *" required="" value="{{$profileinfo->applicant_name}}">
                           
                        </div>


                        <div class="form-group col-md-6">
                          <div class="col-md-12">
                            <b>Father Name:</b>
                           </div>
                            <input name="fathername" type="text" placeholder="Enter Father Name *" required="" value="{{$profileinfo->father_name}}">
                       </div>

                        <div class="form-group col-md-6">
                          <div class="col-md-12">
                            <b>Mother Name:</b>
                           </div>
                            <input name="mothername" type="text" placeholder="Enter Mother Name *" required="" value="{{$profileinfo->mother_name}}">
                           
                        </div>

                        <div class="form-group col-md-6">
                          <div class="col-md-12">
                            <b>State Of Domicile:</b>
                           </div>
                            <input name="state" type="text" placeholder="State Of Domicile *" required="" value="{{$profileinfo->state_of_domicile}}">
                              @if ($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
                        </div>

                        <div class="form-group col-md-4">
                           <div class="col-md-12">
                            <b>Date Of Birth:</b>
                           </div>
                            <input name="dob" type="text" placeholder="Select DOB *" required="" value="{{$profileinfo->dob}}" placeholder="">
                            
                           
                        </div>

                        

                        <div class="form-group col-md-4">
                           <div class="col-md-12">
                            <b>Category : </b>
                           </div>
                            <select class="form-control" id="sel1" name="category">
                                <option >{{$profileinfo->category}}</option>
                                                       
                            </select>
                        </div>

                     

                        <div class="form-group col-md-4">
                          <div class="col-md-12">
                            <b>Gender : </b>
                           </div>
                            <select class="form-control" id="sel1" name="gender">
                                <option selected>{{$profileinfo->gender}}</option>
                             
                                
                          
                           
                            </select>
                        </div>


                         <div class="form-group col-md-12 col-sm-12">
                              <div class="col-md-3 col-sm-12">
                             Class :
                              </div>
                                <div class="col-md-9 col-sm-12">
                                     <select class="form-control" id="class_id" name="class_id">
                            
                            
                        
                                  <option value="">{{$profileinfo->studentClass->classname}} - {{$profileinfo->studentClass->type}}</option>
                           
                            </select>
                                
                                </div>
                         
                                      </div>


                         <div class="form-group col-md-12 col-sm-12">
                              <div class="col-md-3 col-sm-12">
                             Course : 
                              </div>
                                <div class="col-md-9 col-sm-12">
                                     <select class="form-control" id="course_id" name="course_id">
                                <option>{{$profileinfo->studentCourse->course_name}}</option>
                           
                            </select>
                                
                                </div>
                         
                  
                        </div>



                            




                        

                     
                   
                        <div class="form-group col-md-12 col-sm-12">
                          <div class="col-md-12">
                            <b>Student Address :</b>
                           </div>
                            <input name="address" type="address" placeholder="Enter Residence Address *" rquired="" value="{{$profileinfo->student_address}}">
                           
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                          <div class="col-md-12">
                            <b>City : </b>
                           </div>
                            <input name="city" type="text" placeholder="Enter City *" rquired="" value="{{$profileinfo->student_address}}">
                         
                        </div>

                     

                        <div class="form-group col-md-6 col-sm-12">
                          <div class="col-md-12">
                            <b>State : </b>
                           </div>
                            <input name="state" type="text" placeholder="Enter State *" rquired="" value="{{$profileinfo->student_address}}">
                         
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                           <div class="col-md-12">
                            <b>Pin Code : </b>
                           </div>
                            <input name="pincode" type="text" placeholder="Enter PinCode *" rquired="" value="{{$profileinfo->pincode}}" maxlength="6">
                           
                        </div>

                        
                        <div class="form-group col-md-6 col-sm-12">
                           <div class="col-md-12">
                            <b>Student Number : </b>
                           </div>
                            <input name="studentmobile" type="text" placeholder="Enter Student Mob No *" rquired="" value="{{$profileinfo->userProfile->mobile}}}" readonly>
                           
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <div class="col-md-12">
                            <b>Parent Number : </b>
                           </div>
                            <input name="parentmobile" type="text" placeholder="Enter Parent Mob No *" rquired="" value="{{$profileinfo->parent_no}}"  maxlength="10">
                           
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <div class="col-md-12">
                            <b>Student Aadhar Number : </b>
                           </div>
                            <input name="aadharno" type="text" placeholder="Enter Aadhar No *" rquired="" value="{{$profileinfo->student_aadhar}}"  maxlength="15">
                         
                        </div>
                    </div>

             
                  
            
                
                    {{-- Row Start --}}
                    <div class="row">
               

              

                    </div>
                    {{-- Row End --}}

                </form>
                <!-- End pritable -->
              </div>

              <div class="row">

                 <div class="col-md-6">
                    <div class="button-outer">
                     
                    </div>
                </div>

                 <div class="col-md-3">

                    
                     
                    </div>
                </div>

                <!-- Print Button -->
                   

                <!-- Print Button End -->
            </div>
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

<script src="{{url('homeassets/js/jQuery.print.min.js')}}">
  
</script>

@include('home.layout.dashboardscripts');


     <script type="text/javascript">



      $(document).ready(function (e) {

       @if($profileinfo->status)
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
               $("#course_id").append("<option value='"+data.id+"'>"+data.course_name+"</option>");
                     var coursedata = data;
            }
        });
        
      }

       $("#course_id").prop("disabled",true); 
       

    });

    $("#printform").click(function(){
      $("#printable").print();
    });

</script>


      @endsection