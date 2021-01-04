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
                    <h1>Enter Account Details</h1>
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

                    <form action="{{route('view-notes.auth')}}" method="post" class="form-outer">
                      @csrf
                      <div class="row">
                          <div class="col-md-12">
                             <div class="col-md-12 form-group"> <b>Email *</b></div>
                              <div class="col-md-12"><input name="email" type="text" placeholder=""></div>
                              
                          </div>

                           <div class="col-md-12">
                            <div class="col-md-12 form-group"> <b>Date Of Birth * </b></div>
                              <div class="col-md-12"><input name="dob" type="date" placeholder=""></div>
                          </div>

                      </div>
                        
                       
                        <div class="button-outer">
                            <button class="btn" style="background-color: #17a2b8!important;">Login To View<span class="fa fa-sign-in"></span></button>
                          
                        <a href="{{route('student.register')}}">   <button class="btn register" type="button">Don't Have An Account? <span class="fa fa-plus"></span></button> </a>
                        </div>
                       
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->



     @include('home.layout.scripts')


      @endsection