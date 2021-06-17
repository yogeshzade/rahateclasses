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
                <li class="breadcrumb-item active" aria-current="page">Pending Fees</li>
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
                
               <!--  <p class="sub-header">
                    Add <code>.table-hover</code> to enable a hover state on table rows within a
                    <code>&lt;tbody&gt;</code>.
                </p> -->
              </h4>

                <div class="table-responsive" >
                    <table id="example" class="display table table-hover mb-0" style="width:100%">

                    
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                 <th scope="col">Student Photo</th>
                                 <th scope="col">Student Name</th>
                                  <th scope="col">Student Mobile</th>
                                 <th scope="col">Paid Amount</th>
                                 <th scope="col">Paid Amount (In Word)</th>
                                  <th scope="col">Payment Date</th>
                                <th scope="col">Receipt</th>
                                    <th scope="col">Action</th>
                                

                            </tr>
                        </thead>
                        <tbody>

                 
                            @foreach ($alltransactions ?? '' as $alltransaction)

                          
                            <tr scope="{{$loop->iteration}}">
                                
                                <td>{{$loop->iteration}}</td>
                                  <td><img src="{{url($transaction->studentProfile->student_photo)}}" class="img-rounded" style="width:120px; height: 90px;" /></td>
                                    <td>{{$transaction->user->name}}</td>
                                    <td>
                                      <b>{{$transaction->user->mobile}}</b>
                                    </td>
                                        <td class="text text-danger"><b>Rs. {{$transaction->payment_amount}}</b></td>
                                        <td class="text text-danger">
                                          <b>
                                            {{ucfirst(getIndianCurrency($transaction->payment_amount))}} {{"Only"}}
                                          </b>
                                        </td>
                                       <td><b> {{$transaction->created_at}} </b></td>
                                          <td>
                                            <a href="" class="btn btn-info">View Receipt</a>
                                          </td>
                                          
                                              <td>
                                              <div class="row">
                                                <div class="col-md-6">

                                                  <a  onclick="myFunction();"
href="" class="btn btn-danger">Cancel</a>
                                                </div>
                                                 <div class="col-md-6">
                                                   <a  onclick="myFunction();"
                                                   href="" class="btn btn-success">Approve</a>
                                                 </div>
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