@extends('home.layout.app')
@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
       
      
    </header>

    
   



<section class="login-wrapper register" style="background-color:#f1f6f9">
    <div class="inner">
        <div class="regiter-inner">
            <div class="login-logo"> <a href=""><img src="{{url('homeassets\images\rahatelogo.png')}}" class="img-responsive" alt="" style="width:120px;height:70px;"></a> </div>
            <div class="head-block">
                <h1>Create Your Account First!</h1>


            </div>
            <div class="cnt-block">
                <form action="{{route('student.create.account')}}" method="post" class="form-outer">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4">
                            <input name="firstname" type="text" placeholder="First Name" required="">
                              @if ($errors->has('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                @endif
                        </div>
                        <div class="col-sm-4">
                            <input name="lastname" type="text" placeholder="Last Name" required="">
                               @if ($errors->has('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                @endif
                        </div>
                        <div class="col-sm-4">
                            <input name="email" type="email" placeholder="email@gmail.com" required="">
                               @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                        </div>

                        <div class="col-sm-6">
                            <input name="mobile" type="number" placeholder="9988776655" required="">
                               @if ($errors->has('number'))
                    <span class="text-danger">{{ $errors->first('number') }}</span>
                @endif
                        </div>
                        <div class="col-sm-6">
                            <input name="password" type="password" placeholder="Password" min="8" maxlength="14" required="">
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
                                         <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                                            @if ($errors->has('captcha'))
                    <span class="text-danger">{{ $errors->first('captcha') }}</span>
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