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
   
   </br>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h1>Contact Us</h1>
                       <p>If you have any query then feel free to contact us</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3"> <a href="{{route('student.admission.index')}}" class="apply-online clearfix">
                       
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a></div>
            </div>
        </div>
      </br>


    <!-- ==============================================
    ** Contact Us **
    =================================================== -->

    <div class="container">
      <div class="row">
         <div class="col-md-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.9175314285776!2d79.10387781493412!3d21.115853785951202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf150108aba5e029!2sRahate&#39;s%20IIT%20%26%20Medical%20Home!5e0!3m2!1sen!2sin!4v1622525091992!5m2!1sen!2sin" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>

      </div>

      <div class="col-md-4">
         
        <form action="{{route('inquiry.store')}}" method="post">
          @csrf
           <input type="hidden" class="form-control" name="place" value="Nagpur" placeholder="Place">
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="phone" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
      <br/>

      <div class="col-md-12">
        <div class="container">

  <div class="row text-center">
    <div class="col-sm-3 col-xs-6 first-box" style="  width: 270px;
    height: 200px;">
        <h1><span class="fa fa-phone"></span></h1>
        <h3>Phone</h3>
       <a href="tel:+91-9545578282" style="color:#fff;" target="_blank"> <p style="font-weight: 600;">+91-9545578282</p><br> </a>
    </div>
    <div class="col-sm-3 col-xs-6 second-box" style="  width: 270px;
    height: 200px;">
        <h1><span class="fa fa-location-arrow"></span></h1>
        <a href="https://goo.gl/maps/cCF4R9TzqVm1Hdi58">
        <h3>Location</h3>
        <p style="font-weight: 600; color: #fff;" >39, near Durga Nagar, Old Subhedar Layout, Ambika Nagar, Sharda Chowk, Nagpur, Maharashtra 440024</p><br>
</a>
    </div>
    <div class="col-sm-3 col-xs-6 third-box" style="  width: 270px;
    height: 200px;">
        <h1><span class="fa fa-envelope"></span></h1>
        <h3>E-mail</h3>
        <a href="mailto:krantirahate12@gmail.com" style="color: #fff;" target="_blank"><p style="font-weight: 600;">krantirahate12@gmail.com</p><br></a>
    </div>
    <div class="col-sm-3 col-xs-6 fourth-box" style="  width: 270px;
    height: 200px;">
      <h1><span class="fa fa-chrome"></span></h1>
      <a href="http://www.rahateiithome.in" >
        <h3>Web</h3>
        <p style="font-weight: 600; color: #fff;">http://www.rahateiithome.in</p><br>
      </a>
    </div>
  </div>
</div>
      </div>

      </div>
    </div>
  
    <!-- ==============================================
    ** Google Map **
    =================================================== -->
   
   
   <br/>

   
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