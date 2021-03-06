@extends('home.layout.app')
@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
         @include('home.layout.headermenu')
        @include('home.layout.headermiddle')
           @include('home.layout.navigation')

       
      
    </header>

    
   



<section class="login-wrapper register" style="background-color:#f1f6f9">
    <div class="inner">
        <div class="regiter-inner">
          
            <div class="head-block">

                <h1>Create Your Account First!</h1>
                <br/>
                <h4>Session 20-21</h4>
                   @if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif


            </div>
            <div class="row">
                <div class="col-sm-12">
                    <br/>
                      @include('home.progress')

                </div>
            </div>
       
            <div class="cnt-block">

                <form action="{{route('student.create.account')}}" method="post" class="form-outer">
                    @csrf
                    <div class="row">

                        <div class="col-sm-4">
                            <div class="col-md-12">
                            <b>First Name : *</b>
                           </div>
                           
                            <input name="firstname" type="text" placeholder="Enter First Name*" required="" value="{{old('firstname')}}">
                              @if ($errors->has('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                @endif
                        </div>

                        <div class="col-sm-4">
                            <div class="col-md-12">
                            <b>Middle Name : *</b>
                           </div>
                           
                            <input name="middlename" type="text" placeholder="Enter Middle Name*" required="" value="{{old('middlename')}}">
                              @if ($errors->has('middlename'))
                    <span class="text-danger">{{ $errors->first('middlename') }}</span>
                @endif
                        </div>

                        <div class="col-sm-4">
                            <div class="col-md-12">
                            <b>Last Name : *</b>
                           </div>
                           
                            <input name="lastname" type="text" placeholder="Enter Last Name*" required="" value="{{old('lastname')}}">
                              @if ($errors->has('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                @endif
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="col-md-12">
                            <b>Email : *</b>
                           </div>
                            <input name="email" type="email" placeholder="Enter Your Email *" required=""
                            value="{{old('email')}}" 
                            autocomplete="false" 

                            >
                               @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                        </div>

                        <div class="col-sm-4">
                            <div class="col-md-12">
                            <b>Mobile : *</b>
                           </div>
                            <input name="mobile" type="number" placeholder="Enter Mobile Number *" 
                            required=""
                            value="{{old('mobile')}}" 
                            autocomplete="off" 
                            >
                               @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
                        </div>

                         <div class="col-sm-4">
                            <div class="col-md-12">
                            <b>Date Of Birth : * </b>
                           </div>
                            <input name="dob" type="date" placeholder="Enter Date Of Birth *" 
                            required=""
                            value="{{old('dob')}}" 
                            autocomplete="off" 
                            >
                               @if ($errors->has('dob'))
                    <span class="text-danger">{{ $errors->first('dob') }}</span>
                @endif
                        </div>

                        <div class="col-sm-6">
                            <div class="col-md-12">
                            <b>Password : *</b>
                           </div>
                            <input name="password" type="password" placeholder="Password *" min="8" maxlength="14" required="">
                               @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                        </div>

                         <div class="col-sm-6">
                            <div class="col-md-12">
                            <b>Confirm Password : *</b>
                           </div>
                            <input name="confirmpass" type="password" placeholder="Password *" min="8" maxlength="14" required="">
                               @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                        </div>

                        

                          <div class="col-sm-12" style="font-weight: 600">
                           <input type="checkbox" id="test1" checked="" disabled="">
                                <label for="test1">I accept <a href="{{route('tnc')}}">Terms & Contitions</a></label>
                        </div>
                       
                    </div>
                  
            
                
                
                    <div class="button-outer">
                        <button class="btn btn-lg">Register Now <span class="icon-more-icon"></span></button>
                           <a href="{{route('home.student.login.index')}}">  
                            <button class="btn register" type="button">Back To Login <span class="icon-more-icon"></span></button> </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

               

    <!-- Optional JavaScript -->



     @include('home.layout.scripts')

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