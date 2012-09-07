<?php

require_once 'Microsoft/WindowsAzure/Storage/Blob.php';

$storageClient = new Microsoft_WindowsAzure_Storage_Blob();

// upload del file picture.jpg in Windows Azure
$result = $storageClient->putBlob('testcontainer', 'picture.jpg', '/path/to/picture.jpg');

echo 'File inserito: ' . $result->Name;
