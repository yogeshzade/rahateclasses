@extends('home.layout.app')
@section('othercss')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js" integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>

@endsection

@section('body')
  

    <!-- ==============================================
    ** Header **
    =================================================== -->
    <header>
       
        @include('home.layout.headermenu')
        @include('home.layout.headermiddle') 
         <!-- Start Navigation -->
      
         <!-- End Navigation -->
     </header>


    
    <!-- Container Start  -->
   
<div class="container">

<!-- Row Start -->

<div class="row">
  <!-- Side Bar -->
@include('home.layout.dashboardmenu');

  <!-- Side Bar End -->

  <!-- Containt Here -->


<!-- Col Start -->
  <div class="col-md-9 col-sm-12">

    <section class="login-wrapper register" style="background-color:#f1f6f9">
    <div class="inner">
        <div class="regiter-inner">
          
            <div class="head-block">

                <h1>Complete Payment Continue!</h1>
            </br>
                   @if ($message = Session::get('success'))
<div class="alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

 @if ($message = Session::get('error'))
<div class="alert alert-success alert-block mt-2">
    <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif


            </div>
            <div class="cnt-block">

              <div class="row">
                <div class="col-md-4">

                  <div class="pull-left">
                    <b>Course Name :- </b> <b class="text-success">
                      {{$coursedetails->course_name}}
                    </b>
                  </div>


                
                </div>

                 <div class="col-md-4">

                  <div class="pull-left">
                    <b>Class Name :- </b> <b class="text-success">
                      {{$classdetails->classname}} - {{$classdetails->type}}
                    </b>
                  </div>

                  
                
                </div>


                <div class="col-md-4">

                  <div class="pull-left">
                    <b>Total Course Fees :- </b> <b class="text-success">
                     Rs. {{IND_money_format($coursedetails->total_fees)}}
                    </b>
                  </div>

                  
                
                </div>




              </div>
              <br/>

              <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Installment No</th>
      <th scope="col">Installment Name</th>
      <th scope="col">Installment Amout</th>
      <th scope="col">Installment Description</th>
       <th scope="col">Payment Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($installments as $installment)
    <tr>
      <th scope="row">{{$installment->installment_no}}</th>
      <td>{{$installment->installments_name}}</td>
      <td><b>Rs. {{IND_money_format($installment->amount)}}</b></td>
      <td>
@if($installment->days_after_admission == 0)
<b class="text-success">This is Admission Fees<b>
@else
<b class="text-warning">This Is Next Installment to Pay after {{$installment->days_after_admission}} Days
</b>
@endif
        </td>
        <td>
          <a href="#amount" onclick="return payfees('{{$installment->id}}');">Pay Fees</a>
        </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
  <br/>


<div class="row">
   <div class="col-md-3">
    Enter Amount :-  
   </div>
   <div class="col-md-9">
  <input type="number" class="form-control" placeholder="Enter Amount To Pay" aria-label="Enter Amount" aria-describedby="button-addon1" id="amount">
  </div>
</div>
<br/>
<br/>
<div class="row">
   <div class="col-md-12">
  <h6>Select Payment Mode:</h6>
   </div>
  
</div>
<br/>

<div class="row">

  <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1">Bank Transfer</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
         <div class="row">

        <div class="col-md-4">
          Bank Name :
        </div>
        <div class="col-md-8">
          <b class="text-danger">BANK OF BARODA</b>
        </div>

         <div class="col-md-4">
          IFSC Code :
        </div>
        <div class="col-md-8">
          <b class="text-danger">BARB0GONDIA</b>
        </div>

         <div class="col-md-4">
          A/C Holder Name :
        </div>
        <div class="col-md-8">
          <b class="text-danger">Shantanu Kulkarni</b>
        </div>


         <div class="col-md-4">
          Branch Name : 
        </div>
        <div class="col-md-8">
          <b class="text-danger">Branch</b>
        </div>


        <div class="col-md-4">
       Account Type : 
        </div>
        <div class="col-md-8">
          <b class="text-danger">Current</b>
        </div>

        <!-- End Bank Details -->







      </div>

      </div>
  <div class="panel-footer">
       <form action="" method="POST" enctype="multipart/form-data">
          @csrf
           <div class="col-md-4">
     Upload Payment Receipt: 
        </div>

          <div class="col-md-4">
      <input type="file" class="form-control" id="receipt" name="file" required="">
        </div>
        </form>
  </div>
     
     
    </div>
  </div>
</div>

<!-- Online -->

  <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse2">Online Payment With Card/Upi</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Panel Body</div>
      <div class="panel-footer">Panel Footer</div>
    </div>
  </div>
</div>

<!-- Online End -->

  </div>

 




</section>

               

  </div>

  <!-- Col ENd -->


  <!-- Content End Here -->
</div>

<!-- Row ENd -->




 </div> 

 <!-- Container End -->




    <!-- Optional JavaScript -->



     @include('home.layout.scripts')


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

@include('home.layout.dashboardscripts');


     <script type="text/javascript">

      $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
   });
  

      function payfees(id)
      {
      console.log(id);

        $.ajax({

            type: 'POST',
            url: "{{route('fetch.installment.amount')}}",
            dataType: "json",
            data:{
              id:id
            },
              success: function (data) {
                console.log(data);
                if(data.length == 0){
                  return false;
                }

                 var amount = $("#amount").val(data.amount);

              }


        });
      }



      $(document).ready(function (e) {

      });

    

</script>


      @endsection

      @php

function IND_money_format($money){
    $len = strlen($money);
    $m = '';
    $money = strrev($money);
    for($i=0;$i<$len;$i++){
        if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$len){
            $m .=',';
        }
        $m .=$money[$i];
    }
    return strrev($m);
}
      @endphp