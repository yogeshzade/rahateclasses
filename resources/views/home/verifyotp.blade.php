@extends('home.layout.app')
@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
           @include('home.layout.headermiddle')
             @include('home.layout.navigation')
      
    </header>

     <section class="login-wrapper" >
        <div class="inner" style="background-color:#f4f4f4;" >
            <div class="login">
               
                <div class="head-block">
                    <h1>Verify Your Mobile</h1>
<br/>
                    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>OTP Sent To Your Mobile Number. Please Enter OTP</strong>
</div>

                </div>
                <div class="cnt-block">
                    @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

                    <form action="{{route('student.verifymobile')}}" method="post" class="form-outer">
                      @csrf
                      <div class="row">

                        <div class="col-md-12"> <label class="form-group"><b>Mobile Number * :</b></label></div>
                        <div class="col-md-12"> <input name="mobile" type="text" placeholder="Mobile Number" value="{{Auth::user()->mobile}}" readonly="" required=""> </div>
                        <div class="col-md-12"> <label class="form-group"><b>Enter OTP * :</b></label></div>
                        <div class="col-md-12">  <input name="otp" type="text" placeholder="Enter OTP" maxlength="6" minlength="4" required=""> </div>
                          
                      </div>
                     
                        <div class="button-outer">
                            <button class="btn">Verify OTP <span class="icon-more-icon"></span></button>
                            <div class="or hidden-xs">or</div>
                        <a href="{{route('student.register')}}">   <button class="btn register" type="button">Resent OTP<span class="icon-more-icon"></span></button> </a>
                        </div>
                       
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->



     @include('home.layout.scripts')


      @endsection