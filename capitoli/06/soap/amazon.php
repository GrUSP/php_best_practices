<?php 


$wsdl = "http://webservices.amazon.com/AWSECommerceService/AWSECommerceService.wsdl";

$client = new SoapClient($wsdl);

print_r($client->__getFunctions());

print_r($client->__getTypes());