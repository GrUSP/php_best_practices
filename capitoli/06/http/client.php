<?php

/** operazioni base con un curl */

$url = 'http://api.local/index.php/un/altro/path';

$data = array(
	'a' => 'foo',
	'b' => 'bar'
);

$ch = curl_init();

/** richiesta GET */
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$response = curl_exec($ch);

echo $response;

/** richiesta POST con dati json */
$data = array(
	'foo' => 'foovalue',
	'bar' => 'barvalue',
);

$json = json_encode($data);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		'Content-Type:application/json',
		'Content-Length:'.strlen($json),
	));
      
$response = curl_exec($ch);

/** richiesta PUT con dati json */
$data = array(
	'foo' => 'foovalue',
	'bar' => 'barvalue',
);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");   
curl_setopt($ch, CURLOPT_VERBOSE, TRUE);                                                              
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);       
echo curl_exec($ch);
