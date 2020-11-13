@extends('home.layout.app')
@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
       
      
    </header>

    
   
           

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


<section class="login-wrapper register" style="background-color:#f1f6f9">
    <div class="inner">
        <div class="regiter-inner">
            <div class="login-logo"> <a href=""><img src="{{url('homeassets\images\rahatelogo.png')}}" class="img-responsive" alt="" style="width:120px;height:70px;"></a> </div>
            <div class="head-block">
                <h1>Create Your Account First!</h1>
            </div>
            <div class="cnt-block">
                <form action="#" method="post" class="form-outer">
                    <div class="row">
                        <div class="col-sm-4">
                            <input name="firstname" type="text" placeholder="First Name" required="">
                        </div>
                        <div class="col-sm-4">
                            <input name="lastname" type="text" placeholder="Last Name" required="">
                        </div>
                        <div class="col-sm-4">
                            <input name="email" type="email" placeholder="email@gmail.com" required="">
                        </div>

                        <div class="col-sm-6">
                            <input name="mobile" type="number" placeholder="9988776655" required="">
                        </div>
                        <div class="col-sm-6">
                            <input name="password" type="password" placeholder="Password" min="8" maxlength="14" required="">
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


      @endsection