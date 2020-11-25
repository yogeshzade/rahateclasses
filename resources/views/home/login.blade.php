@extends('home.layout.app')
@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
       
      
    </header>

     <section class="login-wrapper" >
        <div class="inner" style="background-color:#f4f4f4;" >
            <div class="login">
                <div class="login-logo">
                    <a href="{{route('home.index')}}"><img src="{{asset('homeassets\images\rahatelogo.png')}}" class="img-responsive" alt=""></a>
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
                        <input name="email" type="text" placeholder="Email Address">
                        <input name="password" type="password" placeholder="password">
                        <div class="button-outer">
                            <button class="btn">Login now <span class="icon-more-icon"></span></button>
                            <div class="or hidden-xs">or</div>
                        <a href="{{route('student.register')}}">   <button class="btn register" type="button">Register now <span class="icon-more-icon"></span></button> </a>
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