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





    <section class="faq-wrapper faq2 padding-lg">
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
                    echo "<h2>No Jobs Availabel Yet</h2>";
                   }
                   @endphp
                </div>

                <div class="container">
  <h2>JOB LISTS</h2>
  <br/>
            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr No</th>
        <th>Vacancy Title</th>
        <th>Vacancy Description</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($careers as $career)
      <tr style="font-weight: 600;" class="">
        <td><b>{{$loop->iteration}}</b></td>
        <td>{{$career->job_title}}</td>
        <td>{!! $career->job_description !!}</td>
        <td>
          <a href="" data-toggle="modal" data-target="#myModal">Apply Now</a>
        </td>
      </tr>
      @endforeach
     
    </tbody>
  </table>
</div>
            </div>
          
        </div>
    </section>


    <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
 
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Apply For Job</h4>
      </div>
      <div class="modal-body">
        
        
       <div class="row">
         <form method="post" action="{{route('career.apply')}}" enctype="multipart/form-data">
          @csrf

        <!-- Name -->

        <div class="form-group col-md-12">
           <div class="col-md-4">
           Full Name * :
         </div>

         <div class="col-md-8">
           <input name="fullname" type="text" placeholder="Enter Full Name *" required="" value="" class="form-control">
         </div>

        </div>

        <!-- End Name -->


        <!-- Name -->

        <div class="form-group col-md-12">
           <div class="col-md-4">
          Email * :
         </div>

         <div class="col-md-8">
       <input name="email" type="email" placeholder="Enter Email *" required="" value="" class="form-control" >

         </div>

        </div>

        <!-- End Name -->


        <!-- Name -->

        <div class="form-group col-md-12">
           <div class="col-md-4">
          Mobile Number * :
         </div>
        

         <div class="col-md-8">

           <input name="mobile" type="text" placeholder="Enter Mob No *" required="" value="" maxlength="10" minlength="10" class="form-control">
           
         </div>

        </div>

        <!-- End Name -->


        <!-- Name -->

        <div class="form-group col-md-12">
           <div class="col-md-4">
          Select Position* :
         </div>

         <div class="col-md-8">

  <select class="form-control" id="exampleFormControlSelect1" name="position">
      <option selected="">-- Select Profile -- </option>
     @php
     $lists = App\Career::all();
     @endphp
     @foreach($lists as $list)
     <option value="{{$list->id}}">{{$list->job_title}}</option>
     @php
     @endforeach
    </select>           
           
         </div>

        </div>

        <!-- End Name -->


        <!-- Name -->

        <div class="form-group col-md-12">
           <div class="col-md-4">
          Upload Resume* :<small>(1MB Max Pdf)</small>
         </div>

         <div class="col-md-8">

          <input name="file" type="file" placeholder="Select File *" required="" class="form-control">
           
           
         </div>
      

        </div>

        <!-- End Name -->

          <!-- Name -->

        <div class="form-group col-md-12">
           <div class="col-md-4">
          Upload Photo* :<small>(Photo Must Be Passport Size)</small>
         </div>

         <div class="col-md-8">

          <input name="photo" type="file" placeholder="Select File *" required="" class="form-control">
           
           
         </div>
      

        </div>

        <!-- End Name -->



        

       </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" >Apply</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
 </form>
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