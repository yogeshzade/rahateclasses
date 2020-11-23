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
        @include('home.layout.navigation')
         <!-- End Navigation -->
     </header>

    
   



<section class="login-wrapper register" style="background-color:#f1f6f9">
    <div class="inner">
        <div class="regiter-inner">
          
            <div class="head-block">

                <h1>Fill Admission Form To Apply!</h1>
            </br>
                   @if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif


            </div>
            <div class="cnt-block">
                <form action="{{route('student.admission.submit')}}" method="post" class="form-outer">
                    @csrf
                    <div class="row">

                        <div class="form-group col-md-6">
                            <input name="fullname" type="text" placeholder="Name Of Applicant" required="" value="{{Auth::user()->name}}">
                              @if ($errors->has('fullname'))
                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                @endif
                        </div>


                        <div class="form-group col-md-6">
                            <input name="fathername" type="text" placeholder="Enter Father Name" required="" value="{{old('fathername')}}">
                              @if ($errors->has('fathername'))
                    <span class="text-danger">{{ $errors->first('fathername') }}</span>
                @endif
                        </div>

                        <div class="form-group col-md-6">
                            <input name="mothername" type="text" placeholder="Enter Mother Name" required="" value="{{old('mothername')}}">
                              @if ($errors->has('mothername'))
                    <span class="text-danger">{{ $errors->first('mothername') }}</span>
                @endif
                        </div>

                        <div class="form-group col-md-5">
                            <input name="state" type="text" placeholder="State Of Domicile" required="" value="{{old('state')}}">
                              @if ($errors->has('state'))
                    <span class="text-danger">{{ $errors->first('state') }}</span>
                @endif
                        </div>

                        <div class="form-group col-md-3">
                           
                            <input name="dob" type="date" placeholder="Select DOB" required="" value="{{old('dob')}}" placeholder="">
                              @if ($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                @endif
                           
                        </div>

                        

                        <div class="form-group col-md-3">
                           
                            <select class="form-control" id="sel1" name="category">
                                <option selected>Select Category</option>
                              <option value="GEN">GEN</option>
                              <option value="SC">SC</option>
                              <option value="ST">ST</option>
                              <option value="OBC">OBC</option>
                           
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                           
                            <select class="form-control" id="sel1" name="religion">
                                <option selected>Select Religion</option>
                              <option value="GEN">GEN</option>
                              <option value="SC">SC</option>
                              <option value="ST">ST</option>
                              <option value="OBC">OBC</option>
                           
                            </select>
                        </div>

                        <div class="form-group col-md-3">
                            <select class="form-control" id="sel1" name="gender">
                                <option selected>Select Gender</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                          
                           
                            </select>
                        </div>

                        

                     
                   
                        <div class="form-group col-md-12 col-sm-12">
                            <input name="address" type="address" placeholder="Enter Residence Address" rquired="" value="{{old('address')}}">
                            @if ($errors->has('address'))
                  <span class="text-danger">{{ $errors->first('address') }}</span>
              @endif
                        </div>

                        <div class="form-group col-md-4 col-sm-4">
                            <input name="city" type="text" placeholder="Enter City" rquired="" value="{{old('city')}}">
                            @if ($errors->has('city'))
                  <span class="text-danger">{{ $errors->first('city') }}</span>
              @endif
                        </div>

                        <div class="form-group col-md-4 col-sm-4">
                            <input name="tehsil" type="text" placeholder="Enter Tehsil/Taluka" rquired="" value="{{old('tehsil')}}">
                            @if ($errors->has('tehsil'))
                  <span class="text-danger">{{ $errors->first('tehsil') }}</span>
              @endif
                        </div>

                        <div class="form-group col-md-4 col-sm-4">
                            <input name="dist" type="text" placeholder="Enter District" rquired="" value="{{old('dist')}}">
                            @if ($errors->has('dist'))
                  <span class="text-danger">{{ $errors->first('dist') }}</span>
              @endif
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <input name="state" type="text" placeholder="Enter State" rquired="" value="{{old('state')}}">
                            @if ($errors->has('state'))
                  <span class="text-danger">{{ $errors->first('state') }}</span>
              @endif
                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <input name="pincode" type="text" placeholder="Enter PinCode" rquired="" value="{{old('pincode')}}" maxlength="6">
                            @if ($errors->has('pincode'))
                  <span class="text-danger">{{ $errors->first('pincode') }}</span>
              @endif
                        </div>

                        
                        <div class="form-group col-md-4 col-sm-4">
                            <input name="studentmobile" type="text" placeholder="Enter Student Mob No" rquired="" value="{{Auth::user()->mobile}}" readonly>
                            @if ($errors->has('studentmobile'))
                  <span class="text-danger">{{ $errors->first('studentmobile') }}</span>
              @endif
                        </div>

                        <div class="form-group col-md-4 col-sm-4">
                            <input name="parentmobile" type="text" placeholder="Enter Parent Mob No" rquired="" value="{{old('parentmobile')}}" readonly maxlength="10">
                            @if ($errors->has('parentmobile'))
                  <span class="text-danger">{{ $errors->first('parentmobile') }}</span>
              @endif
                        </div>

                        <div class="form-group col-md-4 col-sm-4">
                            <input name="aadharno" type="text" placeholder="Enter Aadhar No" rquired="" value="{{old('aadharno')}}" readonly maxlength="15">
                            @if ($errors->has('aadharno'))
                  <span class="text-danger">{{ $errors->first('aadharno') }}</span>
              @endif
                        </div>


                        
                        



                    </div>

             
                  
            
                
                    {{-- Row Start --}}
                    <div class="row">
                <div class="col-md-6">
                    <div class="button-outer">
                        <button class="btn">Apply Now <span class="icon-more-icon"></span></button>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="button-outer">
                        <button class="btn-sm btn-danger" type="reset">Clear Form <span class="fa fa-exlamation"></span></button>
                    </div>
                </div>


                    </div>
                    {{-- Row End --}}

                </form>
            </div>
        </div>
    </div>
</section>

               

    <!-- Optional JavaScript -->



     @include('home.layout.scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

     <script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: "{{route('captcha.reload')}}",
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

</script>


      @endsection