<?php

namespace App\Library;


class TransactionId 
{

	public static function TransactionId($id)
	{

		$user_id = $id; //user id       
		$id_lenth=strlen($id);
		$stamp = mt_rand(2,100);
	$random_id_length = 10-$id_lenth;
	$paymentreferenceno = hexdec(uniqid(rand(),1)); 
	$paymentreferenceno = strip_tags(stripslashes($paymentreferenceno)); 
	$paymentreferenceno = str_replace(".","",$paymentreferenceno); 
	$paymentreferenceno = str_replace("E", "$stamp", $paymentreferenceno);
	$paymentreferenceno = str_replace("+", "9", $paymentreferenceno);
	$paymentreferenceno = strrev(str_replace("/","",$paymentreferenceno));
	$paymentreferenceno = substr($paymentreferenceno,0,$random_id_length);
	$paymentreference_no = $paymentreferenceno.$id; //payment reference no
	return $paymentreference_no;

	}

}