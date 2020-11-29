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

             <ul class="nav nav-justified nav-tabs">
                    <li class="disabled"
                    >
                        <a href="#Coursetab" data-toggle="tab" aria-expanded="true"
                        style="
                       color: #fff;
    border: none;
    background: #72c02c;
    margin-right: 1px;
    "
                        > 
                            <i class="fa fa-user" aria-hidden="true"></i>
                            1. Signup Details
                           </a>
                    </li>

                    <li class="active">
                        <a data-toggle="tab"
                          style="
                       color: #fff;
    border: none;
    background: #72c02c;
     margin-right: 1px;
    "
                        >
                             <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                         2. Apply Admission</a>
                    </li>

                    <li class="disabled">
                        <a data-toggle="tab"
                            style="
                       color: #fff;
    border: none;
    background: #72c02c;
     margin-right: 1px;
    "
                        ><i class="fa fa-files" aria-hidden="true"></i> 3. Preview Form </a>
                    </li>


                    <li class="active">
                        <a data-toggle="tab"
                                                    style="
                       color: #fff;
    border: none;
    background: #c0992c;
     margin-right: 1px;
    "

                        ><i class="fa fa-bank"></i>  4.Pay Fees Online/Offline   </a>
                    </li>
                </ul>
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
         <b> A/C Holder Name : </b>
        </div>
        <div class="col-md-8">
          <b class="text-danger bank">OMPRAKASH SHRIRAM RAHATE</b>
        </div>

        <div class="col-md-4">
          <b>Bank Name :</b>
        </div>
        <div class="col-md-8">
          <b class="text-danger bank">Union Bank </b>
        </div>

         <div class="col-md-4">
          <b>Account Number :</b>
        </div>
        <div class="col-md-8">
          <b class="text-danger bank">543002010007004 </b>
        </div>

         <div class="col-md-4">
         <b> IFSC Code : </b>
        </div>
        <div class="col-md-8">
          <b class="text-danger bank">UBIN0554308</b>
        </div>

       


         <div class="col-md-4">
         <b> Branch Name : </b>
        </div>
        <div class="col-md-8">
          <b class="text-danger bank">Manewada Road</b>
        </div>


        <div class="col-md-4">
       <b>Account Type : </b>
        </div>
        <div class="col-md-8">
          <b class="text-danger bank">Current</b>
        </div>

        <!-- End Bank Details -->







      </div>

      </div>
  <div class="panel-footer">
       <form action="{{route('payment.offline',Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row">
             <div class="col-md-6 col-sm-12">
Enter Amount:-
            </div>
            <div class="col-md-6 col-sm-12 form-group">
 <input type="number" class="form-control" placeholder="Enter Amount To Pay" aria-label="Enter Amount" aria-describedby="button-addon1" id="amount" required="" name="payment_amount">
            </div>

             <div class="col-md-6">
     Upload Payment Receipt: 
     <small>(Upload Payment Sceeenshot)</small>
        </div>
         <input type="hidden" class="form-control" id="payamount" name="amount" required="" value="0">

          <div class="col-md-6">
      <input type="file" class="form-control" id="receipt" name="file" required="">
        </div>

        <div class="col-md-4">
    <button type="submit" name="submit" class="btn btn-success">Upload</button>
        </div>

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
      <div class="panel-body">
        <form action="" method="">
          @csrf
           <div class="row">
             <div class="col-md-6 col-sm-12">
<b>Enter Amount: </b>
            </div>
            <div class="col-md-6 col-sm-12">
 <input type="number" class="form-control" placeholder="Enter Amount To Pay" aria-label="Enter Amount" aria-describedby="button-addon1" id="amountonline" required="" name="payment_amount">
            </div>

</div>
            <button type="submit" name="submit" class="btn btn-success">Pay Online</button>
        </form>
      </div>
      
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
                 var amountonline = $("#amountonline").val(data.amount);

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