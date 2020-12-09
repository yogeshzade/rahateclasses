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
               
                <div class="head-block" style="height: 142px;">
                    <h1>Verify Your Mobile</h1>
<br/>
                    <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>OTP Sent To Your Mobile Number. Please Enter OTP</strong>
</div>

                </div>
                <div class="cnt-block" style="margin-top: 18px;">
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
                            <button class="btn" style="width: 220px; background-color: #17a2b8!important;"><span class="fa fa-check"></span> Verify OTP </button>
                            
                        <a href="" id="resendlink">   <button class="btn register" type="button" id="resend" disabled style=" background-color: #dc3545!important;"><i class="fa fa-repeat"></i> Resent OTP in <span id="counter"></span></button> </a>
                        </div>
                       
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->



     @include('home.layout.scripts')

     <script type="text/javascript">


 
     
// Get refreence to span and button
var spn = document.getElementById("counter");
var btn = document.getElementById("resend");

var count = 120;     // Set count
var timer = null;  // For referencing the timer

(function countDown(){
  // Display counter and start counting down
  spn.textContent = count;
  
  // Run the function again every second if the count is not zero
  if(count !== 0){
    timer = setTimeout(countDown, 1000);
    count--; // decrease the timer
  } else {
    // Enable the button
    btn.removeAttribute("disabled");
  //   $("#resendlink").fadeIn("fast").attr("href", "{{route('student.resendotp')}}"); 
  }
}());

$('#resend').click(function(e){
   e.preventDefault(); 

   $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

    $.ajax({

            type: "POST",
            url: "{{route('student.resendotp')}}",
            success: function(response,textStatus, xhr)
            {
                if(xhr.status == 200){
                    alert("OTP Send Succesfully");

                }
                else{
                    alert("Try After Sometime");
                    
                }

            }

    });

});





     </script>


      @endsection