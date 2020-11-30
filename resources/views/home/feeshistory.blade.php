@extends('home.layout.app')
@section('othercss')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css"/>

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


            </div>



         
            <div class="cnt-block">
               <div class="row">
                <div class="col-md-6">

                  <div class="col-md-12">
                    <b>Total Applicable Fees : </b>
                  </div>

                  <div class="col-md-12">
                    <b>Total Paid Fees : </b>
                  </div>

                  <div class="col-md-12">
                    <b>Next Payment Date : </b>
                  </div>
                  
                </div>
                <div class="col-md-6">
                  
                </div>

              </div>
              <br/>

<table id="example" class="table table-striped display" style="width:100%">

  <thead>
    <tr>
      <th scope="col">Sr. No</th>
      <th scope="col">Payment Amount</th>
       <th scope="col">Payment Mode</th>
      <th scope="col">Transaction ID</th>
      <th scope="col">Payment Status</th>
       <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($transactions as $transaction)
    <tr>
            <td>{{ $loop->iteration }}</td>
               <td class="text-success"><b>Rs. {{IND_money_format($transaction->payment_amount)}}</b></td>
                  <td>
                    @if($transaction->payment_method)
                    <span class="badge badge-primary">Online</span>
                    @else
                    <span class="badge badge-info">Offline</span>
                    @endif
                  </td>
                     <td><b>{{$transaction->transaction_id}}</b></td>
                        <td>
                          @if($transaction->payment_status == 0)
                             <span class="badge badge-warning">Pending</span>
                           @elseif($transaction->payment_status == 1)  
                              <span class="badge badge-success">Success</span>
                           @elseif($transaction->payment_status == 2)    
                              <span class="badge badge-danger">Failed</span>   
                           @elseif($transaction->payment_status == 3)    
                           <span class="badge badge-primary">Refunded</span> 
                           @elseif($transaction->payment_status == 4)  
                         <span class="badge badge-default">Invalid Payment</span>         
                          @else
                          <span class="badge badge-info">Unknown</span>
                          @endif

                        </td>
                           <td>1</td>
    </tr>
    @endforeach
   
   
  </tbody>
</table>


     
    </div>
  </div>
</div>



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


<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>

@include('home.layout.dashboardscripts');


     <script type="text/javascript">


 $('form').submit(function(){
  $(this).find(':submit').attr('disabled','disabled');
});



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

        $('#example').DataTable();

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