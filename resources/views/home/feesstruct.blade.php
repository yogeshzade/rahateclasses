@extends('home.layout.app')
@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
       
       @include('home.layout.headermenu')
       @include('home.layout.headermiddle') 
        <!-- Start Navigation -->
       @include('home.layout.navigation')
        <!-- End Navigation -->
          <style type="text/css">
          .first-box{padding:30px;background:#9C0; color: #fff;margin: 5px;}
.second-box{padding:30px; background:#39F; color: #fff;margin: 5px;}
.third-box{padding:30px;background:#F66; color: #fff;margin: 5px;}
.fourth-box{padding:30px;background:#6CC; color: #fff;margin: 5px;}
        </style>
    </header>

  

  <!-- ==============================================
    ** Inner Banner **
    =================================================== -->
    <br/>

        <div class="container" >
          <div class="col-md-12">
            <h1 style="font-size: 25px; margin:30px;">For Any Inquiry Related Fees Please Feel Free To Contact On Below Details!</h1>
          </div>
          <div class="col-md-12">



             <div class="row text-center">


    <div class="col-sm-4 col-xs-6 first-box" style="  width: 355px;
    height: 200px;">
        <a href="tel:+91-9545578282" style="color:#fff; letter-spacing: 2px; font-size: 19px; margin-top: 2px;">
        <h1><span class="fa fa-phone"></span></h1>
        <h3>Phone</h3>
        <p style="font-weight: 600;">+91-9545578282</p><br>
      </a>
    </div>

      <div class="col-sm-4 col-xs-6 second-box" style="  width: 355px;
    height: 200px;">
        <h1><span class="fa fa-location-arrow"></span></h1>
         <a href="https://maps.google.com/maps?ll=21.111054,79.10189&z=15&t=m&hl=en-US&gl=US&mapclient=embed&q=Rahate%20Classes" style="color:#fff; letter-spacing: 2px; font-size: 19px;  margin-top: 2px;">
        <h3>Location</h3>
        <p style="font-weight: 600; color: #fff;">L39, Old Subhedar L/O
Ayodhya Nagar,Nagpur-24</p><br>
</a>
    </div>

     <div class="col-sm-4 col-xs-6 third-box" style="  width: 355px;
    height: 200px;">
        <h1><span class="fa fa-envelope"></span></h1>
        <a href="mailto:krantirahate12@gmail.com" style="color:#fff; letter-spacing: 2px; font-size: 19px;  margin-top: 2px;" target="_blank">
        <h3>E-mail</h3>
        <p style="font-weight: 600;">krantirahate12@gmail.com</p><br>
      </a>
    </div>


  </div>




          </div>

</div>



           



</br>



    @include('home.layout.footer')
    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

      @include('home.layout.scripts')

      <script>
      $( document ).ready(function() {
    console.log( "ready!" );
    @if ($message = Session::get('success'))
      //  alert("Message Sent");
        Command: toastr["success"]("Message Sent Succesfully.", "Success")

toastr.options = {
  "closeButton": true,
  "debug": true,
  "newestOnTop": true,
  "progressBar": true,
  "positionClass": "toast-bottom-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "300",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "show",
  "hideMethod": "hide"
}

@endif

});
      </script>


      @endsection