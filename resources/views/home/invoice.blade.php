<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link href="{{ asset('homeassets\css\custom.css')}}" rel="stylesheet">
       <link href="{{ asset('homeassets\css\print.min.css')}}" rel="stylesheet">

    <title>Payment Invoice</title>
  </head>
  <body>

  	<div class="container mt-3 cust-clr" id="printable">
  	<div class="wlsm-container wlsm" id="wlsm-print-invoice-payment">
	<div class="wlsm-print-invoice-payment-container">

		
<!-- School header -->

<div class="container-fluid">
	<div class="row">

		<div class="col-3 text-left col-sm-3">
						<img src="{{url('homeassets/images/rahatelogo.png')}}" class="wlsm-print-school-logo" style="width:180px;">
					</div>
					<div class="col-md-2 col-sm-2"></div>

					<div class="col-7 text-left col-sm-7">

						<div class="wlsm-print-school-label">
				RAHATES IIT & MEDICAL HOME		</div>
			<div class="wlsm-print-school-contact">
								<span class="wlsm-print-school-phone">
					<span class="wlsm-font-bold">
						Phone:					</span>
					<span>+91-9545578282</span>
				</span>
												<span class="wlsm-print-school-email">
					<span class="wlsm-font-bold">
						| Email:					</span>
					<span>krantirahate12@gmail.com</span>
				</span>
				<br>
												<span class="wlsm-print-school-address">
					<span class="wlsm-font-bold">
						Address:					</span>
					<span>L39, Old Subhedar Lay Out N/o, Ayodhya Nagar,Nagpur-24</span>
				</span>
						


					</div>


	</div>
	
</div>
</br>

		<div class="row">
			<div class="col-md-12">

				<div class="wlsm-h5 wlsm-invoice-payment-heading wlsm-font-bold text-center">
					Payment Receipt					
					<small class="float-md-right"
					 style="
					 font-size: 14px;
					 font-weight: 500;">
					<span class="wlsm-font-bold">Receipt No.</span> RHT - {{$invoice->id}}					</small>
				</div>
			</div>
		</div>

		<div class="row mt-2">
			<div class="col-12">
				<div class="table-responsive w-100">
					<table class="table table-bordered">
						<tbody><tr>
							<th>Invoice Title</th>
							<td>
								{{$invoice->product_info}}
							</td>
						</tr>
						<tr>
							<th>Student Name</th>
							<td>{{$student->name}}</td>
						</tr>
						
						<tr>
							<th>Phone</th>
							<td>+91-{{$student->mobile}}</td>
						</tr>
						<tr>
							<th>Email</th>
							<td>{{$student->email}}</td>
						</tr>
						<tr>
							<th>Invoice Number</th>

							<td> RHT - {{$invoice->id}}	</td>
						</tr>
						<tr>
							<th>Amount</th>
							<td>
								<b>
								Rs . {{$invoice->payment_amount}}
							</b>
							</td>
						</tr>
						<tr>
							<th>Amount (In Word)</th>
							<td>
								<b>
								{{ucfirst(getIndianCurrency($invoice->payment_amount))}} Only
							</b>
							</td>
						</tr>
						<tr>
							<th>Payment Method</th>
							<td>
								@if($invoice->payment_method)
								<div class="badge badge-info" wid>
								<b>Online</b>
							</div>
								@else
							<div class="badge badge-info" wid>
								<b>Bank Transfer/Offline</b>
							</div>
								@endif
							</td>
						</tr>
						<tr>
							<th>Transaction ID</th>
							<td>{{$invoice->transaction_id}}</td>
						</tr>
						<tr>
							<th>Transaction Status</th>
							<td>
								@if($invoice->payment_status)
								<div class="badge badge-success" wid>
								<b>Payment Succesfull.</b>
							</div>
								@else
								<div class="badge badge-danger" wid>
								<b>Payment Failed</b>
							</div>
								@endif
								
							</td>
						</tr>
						<tr>
							<th>Date</th>
							<td>2020-07-14</td>
						</tr>
						
						
					</tbody></table>
				</div>
			</div>
		</div>


	</div>
	</div>
  	</div>


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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script src="{{url('homeassets/js/printThis.js')}}" ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.1.1/jspdf.umd.min.js"></script>


      <script type="text/javascript">



      	$('#printable').printThis();
      	
      </script>
  </body>
</html>

