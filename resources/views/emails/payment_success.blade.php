<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
   <h1>Hello {{Auth::user()->name}}</h1> <br/>

   <div>
    <h3>Your Payment of <b style="
display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 10px;
    background-color: #72c02c;

    ">Rs. {{$data['payment_amount']}}</b> is succesfully received. <br/>
    <h3>Transaction ID  : <i> {{$data['transaction_id']}}</i></h3>
     <h3>Transaction Date  : <i> {{$data['updated_at']}}</i></h3>
       <h3>Payment Method  : <i>{{$data['mode']}}</i></h3>

       <h4>To Download Invoice : Go to Dashboard > Check Fees/Payment History  or <a href="{{route('students.checkfees')}}">Click Here </a></h4>

    </h3>
   </br>
  
</br>

<h3>
  <b>  Thank You </b>
</br> Rahate IIT Home

</h3>
   </div>
   
   
</body>
</html>