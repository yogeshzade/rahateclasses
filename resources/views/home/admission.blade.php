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
            <div class="login-logo"> <a href="{{route('home.index')}}"><img src="{{url('homeassets\images\rahatelogo.png')}}" class="img-responsive" alt="" style="width:120px;height:70px;"></a> </div>
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
                <form action="{{route('student.create.account')}}" method="post" class="form-outer">
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
                            <input name="dob" type="date" placeholder="Select DOB" required="" value="{{old('dob')}}">
                              @if ($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                @endif
                        </div>

                        <div class="form-group col-md-3">
                            <label class="radio-inline" style="
    margin-top: 0 auto;
    margin: 0 auto;
    display: inline;
    display: inline;
    vertical-align: bottom;
">
                                <input type="radio" name="gender" value="male" style="width: 14px;padding: 0px;">Male
                              </label>
                              <label class="radio-inline" style="
                              margin-top: 0 auto;
                              margin: 0 auto;
                              display: inline;
                              display: inline;
                              vertical-align: bottom;
                          ">
                                <input type="radio" name="gender" value="female" style="width: 14px;padding: 0px;">Female
                              </label>
                              @if ($errors->has('gender'))
                              <span class="text-danger">{{ $errors->first('gender') }}</span>
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

                        <div class="form-group col-md-12 col-sm-12">
                            <input name="address" type="address" placeholder="Enter Residence Address" rquired="" value="{{old('address')}}">
                            @if ($errors->has('address'))
                  <span class="text-danger">{{ $errors->first('address') }}</span>
              @endif
                        </div>




                        
                    </div>
                  
            
                
                
                    <div class="button-outer">
                        <button class="btn">Register Now <span class="icon-more-icon"></span></button>
                    </div>

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