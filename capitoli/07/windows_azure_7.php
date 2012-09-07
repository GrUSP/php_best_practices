<?php

require_once 'Microsoft/WindowsAzure/Storage/Blob.php';



$storageClient = new Microsoft_WindowsAzure_Storage_Blob();

// rende il container pubblicamente accessibile
$storageClient->setContainerAcl('testcontainer', Microsoft_WindowsAzure_Storage_Blob::ACL_PUBLIC_CONTAINER);

