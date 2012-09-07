<?php

require_once 'Microsoft/WindowsAzure/Storage/Blob.php';

$storageClient = new Microsoft_WindowsAzure_Storage_Blob();
$result = $storageClient->createContainer('testcontainer');

echo 'Il nome del container creato è : ' . $result->Name;
