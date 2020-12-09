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
    <br/>

        <div class="container">
            <div class="row">
              <div class="col-md-12">
 <object data="{{url('admission.pdf')}}" type="application/pdf" width="100%" height="500px;">

</object>
</div>
</div>
</div>




           







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