<?php

namespace App\Library;
use GuzzleHttp\Client;


class SmsGateway 
{

	public static function sendSMS($msgtype,$to,$otp=null){
      // Account details
	
  	$apiKey = urlencode('qn1V4Kg2/CU-VADqQYh8r0TBpHJu5lOWwdxvR5ay72');
  
  // Message details
  	$to = "91".$to;
  $numbers = array($to);
  $sender = urlencode('RHTIIT');

  switch ($msgtype) {
  case "1":
  	$message = rawurlencode('Hello Your OTP is '.$otp.'. <> Rahates IIT & Medical Home');
    break;

  default:
    return false;
}


 
  $numbers = implode(',', $numbers);

  $data = 'apikey=' . $apiKey . '&numbers=' . $numbers . "&sender=" . $sender . "&message=" . $message;

  $client = new Client(['base_uri' => 'http://api.textlocal.in']);

  $response = $client->request('GET', '/send/?', ['query' => $data]);

return $response->getBody();


    }

}



