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
                  <h4>Total Applicable Fees : </h4>
                  <hr/>
                  </div>

                  <div class="col-md-12">
                  <h4>  <b>Total Paid Fees : </b> </h4>
                   <hr/>
                  </div>

                  <div class="col-md-12">
                  <h4>  <b>Balance Fees : </b></h4>
                   <hr/>
                  </div>
                  
                </div>
                <div class="col-md-6">
                  <div class="col-md-12">
                  <h5 class="text-danger">Rs. @php $fees= \App\StudentFee::where('user_id',Auth::user()->id)->first();  
                    echo $fees->total_amount; @endphp</h5>
                  <hr/>
                  </div>

                  <div class="col-md-12">
                  <h5 class="text text-success">Rs. 
                   @php echo $fees->paid_amount; @endphp</h5>
                  <hr/>
                  </div>

                    <div class="col-md-12">
                  <h5 class="text text-info"> 
                   @php  $balanced = $fees->total_amount - $fees->paid_amount; 
                   if($balanced < 0 || $balanced == 0)
                   {
                      echo "All Fees Paid";
                   }
                   else{
                    echo $balanced;
                 }
                 @endphp</h5>
                  <hr/>
                  </div>

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
                          @elseif($transaction->payment_status == 5)  
                         <span class="badge badge-default">Pending For Approval</span>         
                          @else
                          <span class="badge badge-info">Unknown</span>
                          @endif

                        </td>
                           <td>
                             <div class="row">
                              @if($transaction->payment_status)
                               <div class="col-md-3">
                                
                                   <form method="post" action="{{route('invoice.download')}}">
                                     @csrf
                                     <input type="hidden" name="txn_id" value="{{$transaction->transaction_id}}">
                                      <button class="btn btn-success" type="submit">
                                       <i class="fa fa-file-o" aria-hidden="true"></i> Download
                                        </button>
                                   </form>
                                 
                               </div>
                               @else
                                <button class="btn btn-danger" >
                                      <i class="fa fa-refresh" aria-hidden="true"></i>
  Retry
                                        </button>
                               @endif
                                 

                             </div>
                           </td>
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