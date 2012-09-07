<?php

require_once 'Zend/Service/Nirvanix.php';
$auth = array('username' => 'nome utente',
              'password' => 'password',
              'appKey'   => 'application key');

$nirvanix = new Zend_Service_Nirvanix($auth);
$imfs = $nirvanix->getService('IMFS');

$data = file_get_contents('/my/local/dir/picture.jpg');
$imfs->putContents('/picture.jpg', $data);

header('Accept-Ranges: bytes');
header('Content-Length: '.strlen($data));
header('Content-Type: image/jpeg');
echo $imfs->getContents('/picture.jpg');
