<?php

$storage = Zend_Cloud_StorageService_Factory::getAdapter(array(
    Zend_Cloud_StorageService_Factory::STORAGE_ADAPTER_KEY => 'Zend_Cloud_StorageService_Adapter_S3',
    Zend_Cloud_StorageService_Adapter_S3::AWS_ACCESS_KEY   => 'chiave di accesso',
    Zend_Cloud_StorageService_Adapter_S3::AWS_SECRET_KEY   => 'chiave segreta',
));

$data = file_get_contents('/my/local/dir/picture.jpg');

$returnedData = $storage->storeItem('/my/remote/path/picture.jpg', $data);

// Utilizzo di S3 bucket: test
// Rende il file pubblico
$returnedData = $storage->storeItem(
    '/my/remote/path/picture.jpg',
    $data,
    array(
        Zend_Cloud_StorageService_Adapter_S3::BUCKET_NAME => "test",
        Zend_Cloud_StorageService_Adapter_S3::METADATA    => array(
            Zend_Service_Amazon_S3::S3_ACL_HEADER => Zend_Service_Amazon_S3::S3_ACL_PUBLIC_READ
        )
    )
);
