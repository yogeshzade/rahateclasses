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
    <div class="inner-banner contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-lg-9">
                    <div class="content">
                        <h1>Career Page</h1>
                       <p>Are You Looking For Job?</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-3"> <a href="{{route('student.admission.index')}}" class="apply-online clearfix">
                       
                        <div class="arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                    </a></div>
            </div>
        </div>
    </div>



    <section class="faq-wrapper faq2 padding-lg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   @php
                   if(count($careers) == 0)
                   {
                    echo "<h2>No Jobs Availabel Yet</h2>";
                   }
                   @endphp
                </div>
            </div>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              @foreach($careers as $career)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{$career->id}}">
                        <h4 class="panel-title"> <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$career->id}}" aria-expanded="true" aria-controls="collapse{{$career->id}}"> {{$career->job_title}} </a> </h4>
                    </div>
                    <div id="collapse{$career->id}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$career->id}}">
                        <div class="panel-body">
                            <p style=" color: #010101; font-size: 16px;">
                               {{$career->job_description}} 
                            </p>
                        </div>

                    </div>
                    <div class="panel-footer">
                      <div class="container">
                        <div class="col-md-4">
                          <a href="/contact"><button class="btn btn-warning btn-sm">Contact</button></a>
                        </div>
                      </div>
                    </div>
                </div>
                @endforeach
           
              
            </div>

        </div>
    </section>






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