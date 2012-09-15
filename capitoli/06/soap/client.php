<?php


$options=array( 'uri'=>'http://api.local/ws',
				'location'=>'http://api.local/ws/index.php',
				'trace' => 1);


$x = new stdClass();
$x->username = 'utente';
$x->password = 'password';

$header=new SoapHeader('http://api.local/ws','AuthenticationHeader',$x);

$client = new SoapClient(NULL, $options);
$client->__setSoapHeaders(array($header));


try {
	$books = $client->getAvailableBooks();
	print_r($books);

	$books = $client->addBook('La storia infinita');
	print_r($books);
} catch (SoapFault $e) {
	echo $e->getMessage();
}


echo $client->__getLastRequestHeaders();
echo "\n\n";
echo $client->__getLastRequest();
echo "\n\n";
echo $client->__getLastResponseHeaders();
echo "\n\n";
echo $client->__getLastResponse();