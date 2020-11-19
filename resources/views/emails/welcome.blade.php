<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
   <h1>Welcome {{$details['name']}}</h1>

   <div>
    <h3>Thank You For Creating Account </h3>
   </br>
   <h5>This is verification Email Please verify your account to continue admission process.</h5>
</br>

<b><a href="{{route('email.verify')}}?email={{$details['email']}}&verification={{$details['otp']}}">Verify My Email</a></b>

<h5>
  <b>  Regards </b>
</br> Rahate IIT Home

</h5>
   </div>
   
   
</body>
</html>