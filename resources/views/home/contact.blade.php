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
    </header>

  

  <!-- ==============================================
    ** Inner Banner **
    =================================================== -->
  
        <div class="container">
            <br/>
                        <h1>Contact Us</h1>
                       <p>If you have any query then feel free to contact us</p>
                    
        </div>
        <br/>
 

    <!-- ==============================================
    ** Contact Us **
    =================================================== -->
  
    <!-- ==============================================
    ** Google Map **
    =================================================== -->
   
   <section class="google-map">
        
          <div class="mapouter" style="margin-left: 20px;"><div class="gmap_canvas"><iframe height="500" width="800px" id="gmap_canvas" src="https://maps.google.com/maps?q=Rahate%20Classes&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
       
        <div class="container">
            <div class="contact-detail">
                <div class="address">
                    <div class="inner">
                        <h3>Rahate Coaching Classes</h3>
                        <p>L39, Old Subhedar Lay Out N/o,
Ayodhya Nagar,Nagpur-24</p>
                    </div>
                    <div class="inner">
                        <h3>+91-9545578282</h3>
                    </div>
                    <div class="inner"> <a href="mailto:krantirahate12@gmail.com">krantirahate12@gmail.com</a> </div>
                </div>
                
            </div>
        </div>
    </section>


      <section class="form-wrapper padding-lg">
        <div class="container">
            <form name="contact-form" id="ContactForm" method="post" action="{{route('inquiry.store')}}">
                @csrf
                <div class="row input-row">
                    <div class="col-sm-4">
                    <input name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-4">
                    <input name="email" placeholder="Email" type="email" required>
                    </div>
                     <div class="col-sm-4">
                    <input name="phone" placeholder="Phone" type="text" required maxlength="10">
                    </div>
                </div>
              </br>
                <div class="row input-row">
                   
                    <div class="col-sm-6">
                    <input name="place" placeholder="Place" type="text" required >
                    </div>

                    <div class="col-sm-6">
                    <input name="message" placeholder="Message" type="text" required>
                    </div>
                </div>
             
                <div class="row">
                    <div class="col-sm-12">
                        <button class="btn" type="submit">Send Now <span class="icon-more-icon"></span></button>
                        <div class="msg"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>


   

   
    <!-- ==============================================
    ** Footer **
    =================================================== -->
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