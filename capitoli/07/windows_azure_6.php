<?php

require_once 'Microsoft/WindowsAzure/Storage/Blob.php';

$storageClient = new Microsoft_WindowsAzure_Storage_Blob();

// download del file picture.jpg in to /path/to/picture.jpg
$storageClient->getBlob('testcontainer', 'picture.jpg', '/path/to/picture.jpg');
