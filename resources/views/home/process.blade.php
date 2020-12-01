<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
<head >
	<title>Processing Payment</title>
</head>

<body>
<center>
	<h3>Redirecting... Please Don't Reload or Press Don't Press Back...</h3>
	<img src="{{url('833.gif')}}" />

   <form action="{{config('app.PAYU_SANDBOX')}}" method="post" id="payu_form" name="payu_form" >
                      

	<input type="hidden" name="key"value="{{config('app.PAYU_MERCHANT_LIVE')}}" />
    <input type="hidden" name="txnid" value="{{$fetchTransaction->transaction_id}}" />
                            <input type="hidden" name="amount" value="{{$fetchTransaction->payment_amount}}" />
                            <input type="hidden" name="productinfo" value="{{$fetchTransaction->product_info}}" />
                            <input type="hidden" name="firstname" value="{{Auth::user()->name}}" />
                            <input type="hidden" name="email" value="{{Auth::user()->email}}" />
                            <input type="hidden" name="phone" value="{{Auth::user()->mobile}}" />
                            <input type="hidden" name="surl" value="{{route('payment.callback')}}" />
                            <input type="hidden" name="furl" value="{{route('payment.callback')}}" />
                            <input type="hidden" name="hash" value="{{$paymenthash}}" />
                            <input type="hidden" name="service_provider" value="payu_paisa">
                           

<button type="submit">Click Here If Not Redirect</button>

</form>
</center>

</body>

<script type="text/javascript">
<!--
   var wait=setTimeout("document.payu_form.submit();",1000);
//-->
</script>


</html>