@extends('home.layout.app')
@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
        @include('home.layout.headermiddle')
       
      
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
                        <div class="col-sm-8">
                           
                            <input name="fullname" type="text" placeholder="Enter Full Name*" required="" value="{{old('fullname')}}">
                              @if ($errors->has('fullname'))
                    <span class="text-danger">{{ $errors->first('fullname') }}</span>
                @endif
                        </div>
                        
                        <div class="col-sm-4">
                            <input name="email" type="email" placeholder="Enter Your Email *" required=""
                            value="{{old('email')}}" 
                            autocomplete="off" 
                            >
                               @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                        </div>

                        <div class="col-sm-6">
                            <input name="mobile" type="number" placeholder="Enter Mobile Number *" 
                            required=""
                            value="{{old('mobile')}}" 
                            autocomplete="off" 
                            >
                               @if ($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
                        </div>
                        <div class="col-sm-6">
                            <input name="password" type="password" placeholder="Password *" min="8" maxlength="14" required="">
                               @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                        </div>

                          <div class="col-sm-5 captcha">
                             <span>{!! captcha_img() !!}</span>
                              <button type="button" class="btn btn-danger" class="reload" id="reload">
                        &#x21bb;
                    </button>
                        </div>
                        <div class="col-sm-4">
                                         <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha *" name="captcha">
                                            @if ($errors->has('captcha'))
                    <span class="text-danger">{{ $errors->first('captcha') }}</span>
                @endif

                        </div>

                          <div class="col-sm-12">
                           <input type="checkbox" id="test1" checked="" disabled="">
                                <label for="test1">I accept <a href="{{route('tnc')}}">Terms & Contitions</a></label>
                        </div>
                       
                    </div>
                  
            
                
                
                    <div class="button-outer">
                        <button class="btn">Register Now <span class="icon-more-icon"></span></button>
                           <a href="{{route('home.student.login.index')}}">   <button class="btn register" type="button">Login now <span class="icon-more-icon"></span></button> </a>
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