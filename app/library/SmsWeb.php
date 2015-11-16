<?php

class SmsWeb
{

    public function post($url,$params)
    {
		$postData = '';
	   //create name value pairs seperated by &
	   foreach($params as $k => $v) 
	   { 
	      $postData .= $k . '='.$v.'&'; 
	   }
	   rtrim($postData, '&');

	    $ch = curl_init();  

	    curl_setopt($ch,CURLOPT_URL,$url);
	    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	    curl_setopt($ch,CURLOPT_HEADER, false); 
	    curl_setopt($ch, CURLOPT_POST, count($postData));
	        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);    

	    $output=curl_exec($ch);

	    curl_close($ch);
	    return $output;
    }
	public function sendSMS($rcpt,$msg)
	{
		$params = array(
		   "rcpt" => $rcpt,
		   "msg" => $msg
		);
		$response = $this->post('http://batikku.ml/s.py',$params);
		return $response;
	}

}

