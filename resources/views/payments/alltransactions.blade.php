@extends('layouts.vertical')


@section('css')

@endsection

@section('breadcrumb')
<div class="row page-title">
    <div class="col-md-12">
        <nav aria-label="breadcrumb" class="float-right mt-1">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Payments</a></li>
                <li class="breadcrumb-item active" aria-current="page">Check Student Fees</li>
            </ol>
        </nav>
        <h4 class="mb-1 mt-0">Transaction Lists</h4>
    </div>
</div>
@endsection


@section('content')

<!--- end row -->


<!-- end row -->


<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mt-0 mb-1">
                
                <div class="row">
                <div class="col md 4"><b class="text-info">TOTAL FEES :- </b> {{$fees->total_amount}}</div>
                <div class="col md 4"><b class="text-success">PAID FEES:- </b> {{$fees->paid_amount}} </div>
                <div class="col md 4"><b class="text-danger">REMAINING FEES:- </b>
                @php  $balanced = $fees->total_amount - $fees->paid_amount; 
                   if($balanced < 0 || $balanced == 0)
                   {
                      echo "All Fees Paid";
                   }
                   else{
                    echo $balanced;
                 }
                 @endphp
                </div>
                </div>
             
              </h4>

                <div class="table-responsive" >
                    <table id="example" class="display table table-hover mb-0" style="width:100%">

                    
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                 <th scope="col">Amount</th>
                                 <th scope="col">Mode</th>
                                  <th scope="col">Txn Id</th>
                                  <th scope="col">Status</th>
                                 <th scope="col">Date</th>
                                    <th>Receipt</th>
                                    <th scope="col">Action</th>
                                

                            </tr>
                        </thead>
                        <tbody>

                 
                        @foreach($transactions as $transaction)
    <tr>
            <td>{{ $loop->iteration }}</td>
               <td class="text-success"><b>Rs. {{getIndianCurrency($transaction->payment_amount)}}</b></td>
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
                       <b>   {{$transaction->updated_at}} </b>
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
                           <td></td>
    </tr>
    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   
</div>
<!-- end row -->


<!-- end row -->


<!-- end row -->
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      //  alert('dom ready');
    $('#example').DataTable();
} );


function myFunction() {
  var r = confirm("Press a button!");
  if (r == false) {
    return false;
  }

}

</script>
@endsection

  @php

    function getIndianCurrency(float $number)
{
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $hundred = null;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(0 => '', 1 => 'one', 2 => 'two',
        3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
        7 => 'seven', 8 => 'eight', 9 => 'nine',
        10 => 'ten', 11 => 'eleven', 12 => 'twelve',
        13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
        16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
        19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
        40 => 'forty', 50 => 'fifty', 60 => 'sixty',
        70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
    $digits = array('', 'hundred','thousand','lakh', 'crore');
    while( $i < $digits_length ) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
            $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
            $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
        } else $str[] = null;
    }
    $Rupees = implode('', array_reverse($str));
    $paise = ($decimal > 0) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
    return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
}


    @endphp




@section('script-bottom')
@endsection