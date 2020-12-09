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
                <div class="login-logo">
                    <a href="{{route('home.index')}}"><img src="{{asset('homeassets\images\rahatelogo.png')}}" class="img-responsive" alt="" style="width: 180px;"></a>
                </div>
                <div class="head-block">
                    <h1>Login To Your Account</h1>
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

                    <form action="{{route('home.student.login.post')}}" method="post" class="form-outer">
                      @csrf
                      <div class="row">
                          <div class="col-md-12">
                             <div class="col-md-12 form-group"> <b>Email *</b></div>
                              <div class="col-md-12"><input name="email" type="text" placeholder="Email Address"></div>
                              
                          </div>

                           <div class="col-md-12">
                            <div class="col-md-12 form-group"> <b>Password * </b></div>
                              <div class="col-md-12"><input name="password" type="password" placeholder="password"></div>
                          </div>

                      </div>
                        
                       
                        <div class="button-outer">
                            <button class="btn" style="width: 220px; background-color: #17a2b8!important;">Login now <span class="fa fa-sign-in"></span></button>
                          
                        <a href="{{route('student.register')}}">   <button class="btn register" type="button">Register now <span class="fa fa-plus"></span></button> </a>
                        </div>
                        <div class="remember">
                            <div class="check">
                                <input type="checkbox" id="test1">
                                <label for="test1">Remember me</label>
                            </div>
                            <a href="{{url('password/reset')}}" class="forgot"><span>?</span>Forgot password</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->



     @include('home.layout.scripts')


      @endsection