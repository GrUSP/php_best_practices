<?php

$rsa = new Zend_Crypt_Rsa(
	array(
		'passPhrase' => 'super segreto',
		'pemPath' => APPLICATION_PATH . '/privatekey.pem')
	);
$testo = file_get_contents($filename);
$firma = $rsa->sign($testo, $rsa->getPrivateKey(), Zend_Crypt_Rsa::BASE64);
// Verifica la firma
$verify = $rsa->verifySignature($testo, $firma, Zend_Crypt_Rsa::BASE64);
