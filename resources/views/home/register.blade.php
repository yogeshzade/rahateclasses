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
                <h1>Apply Now</h1>
            </div>
            <div class="cnt-block">
                <form action="#" method="get" class="form-outer">
                    <div class="row">
                        <div class="col-sm-4">
                            <input name="First Name" type="text" placeholder="First Name">
                        </div>
                        <div class="col-sm-4">
                            <input name="Middle Name" type="text" placeholder="Middle Name">
                        </div>
                        <div class="col-sm-4">
                            <input name="Last Name" type="text" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <input name="address" type="text" placeholder="adress">
                        </div>
                       
                    </div>
                     <div class="row">
                        <div class="col-sm-12">
                            <input name="address" type="text" placeholder="adress">
                        </div>
                       
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <input name="Zip Code" type="text" placeholder="Zip Code">
                        </div>
                        <div class="col-sm-6">
                            <select class="custom_select">
                                <option value="State">State</option>
                                <option value="Tamilnadu">Tamilnadu</option>
                                <option value="Karnataka">Karnataka</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <select class="custom_select">
                                <option value="Country">Country</option>
                                <option value="UK">UK</option>
                                <option value="USA">USA</option>
                                <option value="UAE">UAE</option>
                            </select>
                        </div>
                        <div class="col-sm-6 clearfix">
                            <input name="country code" type="text" placeholder="+91" class="country-code">
                            <input name="Phone Number" type="text" placeholder="000-000-0000" class="phone-no">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <input name="Email" type="text" placeholder="Email">
                        </div>
                        <div class="col-sm-6">
                            <select class="custom_select">
                                <option value="Program">Program</option>
                                <option value="Program">Program2</option>
                                <option value="Program">Program3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <select class="custom_select">
                                <option value="How did you hear about us?">How did you hear about us?</option>
                                <option value="How did you hear about us?">How did you hear about us?</option>
                                <option value="How did you hear about us?">How did you hear about us?</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <div class="date">
                                <input type='text' class="datepicker" placeholder="Graduation Year" />
                                <span class="icon-calander-icon"></span> </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 clearfix">
                            <div class="col-left">
                                <h2>Gender</h2>
                                <ul class="select-opt clearfix">
                                    <li>
                                        <input id="f-option" name="selector" type="radio">
                                        <label for="f-option">Male</label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input id="s-option" name="selector" type="radio">
                                        <label for="s-option">Female</label>
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-left">
                                <h2>Degree Received?</h2>
                                <ul class="select-opt clearfix">
                                    <li>
                                        <input id="y-option" name="selector" type="radio">
                                        <label for="y-option">Yes</label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input id="n-option" name="selector" type="radio">
                                        <label for="n-option">No</label>
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="col-left">
                                <h2>English is your primary language?</h2>
                                <ul class="select-opt clearfix">
                                    <li>
                                        <input id="z-option" name="selector" type="radio">
                                        <label for="z-option">Yes</label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input id="o-option" name="selector" type="radio">
                                        <label for="o-option">No</label>
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="button-outer">
                        <button class="btn">Get Started Now <span class="icon-more-icon"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

               

    <!-- Optional JavaScript -->



     @include('home.layout.scripts')


      @endsection