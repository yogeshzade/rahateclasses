<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
   <h1>Welcome {{$details['name']}}</h1>
   
    <p>Thank you Signup On Rahate IIT Home. This is verification email to continue registration. <a href="{{route('email.verify')}}?email={{$details['email']}}&verification={{$details['otp']}}">Click Here To Complete Registration</a></p>
</body>
</html>