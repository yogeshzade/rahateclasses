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
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    </header>

  

  <!-- ==============================================
    ** Inner Banner **
    =================================================== -->





  
        <div class="container">

          @if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

 @if ($message = Session::get('error'))
<div class="alert alert-danger alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
<br/>
                   
            <div class="row">
                <div class="col-sm-12">
                   @php
                   if(count($careers) == 0)
                   {
                    echo "<h2>No Notes Available</h2>";
                   }
                   @endphp
                </div>

                <div class="container">
  <h2>JOB LISTS</h2>
  <br/>
            
<table id="example" class="display" style="width:100%">
    <thead>
      <tr>
        <th>Sr No</th>
        <th>Class</th>
        <th>Subject Name</th>
        <th>Topic Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($careers as $career)
      <tr style="font-weight: 600;" class="">
        
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div>
            </div>
          
        </div>
 <div style="margin-bottom: 40px;"></div>








    @include('home.layout.footer')
    <!-- Scroll to top -->
    <a href="#" class="scroll-top"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>

      @include('home.layout.scripts')
      <script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

      <script>
      $( document ).ready(function() {
    console.log( "ready!" );
        $('#example').DataTable();

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


 @if ($message = Session::get('error'))
      //  alert("Message Sent");
        Command: toastr["warning"]("Please Check All Fields.", "warning")

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