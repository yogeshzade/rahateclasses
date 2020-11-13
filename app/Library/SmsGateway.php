<?php

namespace App\Library;


class SmsGateway 
{

	public static function sendSMS($msg,$to)
	{
		// Account details
		$apiKey = urlencode("qn1V4Kg2/CU-VADqQYh8r0TBpHJu5lOWwdxvR5ay7");
		// Message details
		$sender = urlencode("RHTCLS");
		$message = rawurlencode($msg);
		$numbers = array($to);
		 
		$data = array('apikey' => $apiKey, 'numbers' => , "sender" => $sender, "message" => $message);

		// Send the POST request with cURL
		$ch = curl_init('https://api.textlocal.in/send/');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		// Process your response here
		return $response;
	}

}



